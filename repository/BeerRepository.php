<?php
require_once 'repository/CoreRepository.php';

class BeerRepository extends CoreRepository {
    protected $table_name = 'article';
    protected $table_joins = [
        'couleur' => 'ID_COULEUR',
        'typebiere' => 'ID_TYPE',
        'marque' => 'ID_MARQUE'
    ];
}