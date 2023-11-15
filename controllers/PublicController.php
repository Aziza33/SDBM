<?php
// Inclusion du fichier contenant la définition de la classe BeersModel
require_once 'repository/BeerRepository.php';


// Déclaration de la classe HomeController
class PublicController {
    
    private $colorRepository; 
    private $beerRepository; 
    // Constructeur de la classe HomeController
    public function __construct() {
        $this->beerRepository = new BeerRepository();
    }
    
    // Méthode index() qui sera appelée lors de l'accès à la page d'accueil
    public function index() {
        // Appel de la méthode getRandBeers() de l'objet BeersModel pour obtenir des bières aléatoires
        $beers = $this->beerRepository->findAll([], 5, 'RAND()');
        // // Inclusion de la view home correspondant à la page d'accueil
        require "views/accueil.view.php";
    }

    public function showBeerByColor($color) {
        $titre = "Toutes nos bières ". $color . 'S';
        $beers = $this->beerRepository->findAll([
            'NOM_COULEUR'=>$color
        ], 10);
        require "views/bieres.view.php";
    }

    public function showAllBeer() {
        $titre = "Toutes nos bières ";
        $beers = $this->beerRepository->findAll([
        ], 15, 'ID_ARTICLE DESC');
        require "views/bieres.view.php";
    }

    public function deleteBeer($ID_ARTICLE){
      
        // $beer = $this->beerRepository->find($ID_ARTICLE);
        $beers = $this->beerRepository->findAll(['ID_ARTICLE'=>$ID_ARTICLE
        ], 15);
        
        if (empty($beers)){
            http_response_code(404);
            echo 'aucun résultat trouvé';
            exit;
        }
        if (!isset($beers[0])){
            http_response_code(404);
            echo 'aucun résultat trouvé';
            exit;
        }

        require "models/Beer.php";
        $beer = $beers[0];
        $beerModel = new Beer();
    
        if ($beerModel->delete('ID_ARTICLE', $ID_ARTICLE, 'article') !== true) {
            http_response_code(500);
            echo 'Erreur !';
            exit;

        }
    
        header("Status: 301 Moved Permanently", false, 301);
        header("Location: ".$_SERVER["HTTP_REFERER"]);

    }
}