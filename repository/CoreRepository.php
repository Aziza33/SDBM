<?php
// Déclaration de la classe CoreRepository qui sera le modèle principal
class CoreRepository {
    // Variable pour stocker la connexion à la base de données
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=sdbm_v2', 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    }

    public function findAll($whereParams = [], $limit = null, $orderByField = null) {
        $select = "SELECT * FROM " . $this->table_name . ' t1';
        $join = $this->buildJoinQuery();
        $where = $this->buildWhereQuery($whereParams);
        $order = $orderByField ? " ORDER BY $orderByField" : '';
        $limit = $limit ? " LIMIT $limit" : '';
        $query  = $select . $join . $where . $order . $limit;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($whereParams);
        return $stmt->fetchAll();
    }

    public function buildJoinQuery() {

        $join = '';
        $i = 2;
        foreach($this->table_joins as $table => $field) {
            $join .= " LEFT join $table t$i ON t$i.$field = t1.$field";
            $i++;
        }
        return $join;
    }
    

    public function buildWhereQuery($params) {
        $where = ' WHERE 1 = 1';
        foreach($params as $field => $valeur) {
            $where .= " AND $field = :$field";
        }
        return $where;
    }
    

      //retourne un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats
}