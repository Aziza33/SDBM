<?php

class CoreModel {

    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=sdbm_v2', 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    }

public function create($parameters)
{ 
    return $this->pdo->prepare(
        "INSERT INTO {$this->table} {$this->database->buildSetQuery($parameters)}",
        $parameters,
        $this->entity,
    );
}

public function update($parameters)
{
    $idParameter = ['id' => $this->getId()];
    return $this->pdo->prepare(
        "UPDATE {$this->table} {$this->database->buildSetQuery($parameters)} {$this->database->buildWhereQuery($idParameter)}",
        array_merge($parameters, $idParameter),
        $this->entity,
    );
}

public function deleteOld()
{
    $idParameter = ['id' => $this->getId()];
    return $this->pdo->prepare(
        "DELETE FROM {$this->table} {$this->database->buildWhereQuery($idParameter)}",
        $idParameter,
        $this->entity,
    );
}

public function delete($column, $value, $table)
{
    $this->pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
 
     $this->pdo->prepare(
    
        "DELETE FROM $table WHERE $column = ?"
    )->execute ([$value]);
    $this->pdo->exec("SET FOREIGN_KEY_CHECKS = 1");
    return true;
}

public function buildSetQuery($parameters): string
{
    $set = 'SET';
    foreach ($parameters as $key => $parameter) {
        $set .= " $key = :$key,";
    }
    $set = substr_replace($set, '', strlen($set) - 1);
    return $set;
}

// public function prepare($sql, $parameters, $entity, $hasManyResult = false)
// {
//     $stmt = $this->getPDO()->prepare($sql);
//     $result = $stmt->execute($parameters);
//     if ((strpos($sql, 'INSERT') === 0) || (strpos($sql, 'UPDATE') === 0) || (strpos($sql, 'DELETE') === 0)) {
//         return $result;
//     }
// utiliser ça comme le repository pour recuperer fetch class un objet
//     return $hasManyResult ? $stmt->fetchAll(PDO::FETCH_CLASS, Beer::class, [$this]) : $stmt->fetchObject($entity, [$this]);
// }
}