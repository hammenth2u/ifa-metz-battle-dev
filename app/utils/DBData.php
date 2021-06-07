<?php

// require_once __DIR__."/../models/Category.php";
// require_once __DIR__."/../models/Product.php";
// require_once __DIR__."/../models/Brand.php";
// require_once __DIR__."/../models/Type.php";

/**
 * Classe permettant de retourner des données stockées dans la base de données
 */
class DBData {
	/** @var PDO */
	private $dbh;

    /**
     * Constructeur se connectant à la base de données à partir des informations du fichier de configuration
     */
    public function __construct() {
        // Récupération des données du fichier de config
        //   la fonction parse_ini_file parse le fichier et retourne un array associatif
        // Attention, "config.conf" ne doit pas être versionné,
        //   on versionnera plutôt un fichier d'exemple "config.dist.conf" ne contenant aucune valeur
        $configData = parse_ini_file(__DIR__.'/../config.conf');
        
        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }
    // /**
    //  * Méthode permettant de retourner les données sur un produit donné
    //  *
    //  * @param int $productId
    //  * @return Product
    //  */
    // public function getProductDetails($productId) {
    //     $sql = "SELECT id, name, description, picture, price, rate, status, category_id categoryId, brand_id brandId FROM product WHERE id = $productId";

    //     $stmt = $this->dbh->query($sql);
    //     $model = $stmt->fetchObject("Product");
    //     return $model;
    // }
    
    // /**
    //  * Méthode permettant de retourner les données sur une catégorie donnée
    //  *
    //  * @param int $categoryId
    //  * @return Category
    //  */
    // public function getCategoryDetails($categoryId) {
    //     $sql = "SELECT id, picture, name, subtitle, home_order homeOrder FROM category WHERE id = $categoryId";

    //     $stmt = $this->dbh->query($sql);
    //     $model = $stmt->fetchObject("Category");
    //     return $model;
    // }
    
    // /**
    //  * Méthode permettant de retourner les données sur une marque donnée
    //  *
    //  * @param int $brandId
    //  * @return Brand
    //  */
    // public function getBrandDetails($brandId) {
    //     $sql = "SELECT name, footer_order footerOrder FROM brand WHERE id = $brandId";

    //     $stmt = $this->dbh->query($sql);
    //     $model = $stmt->fetchObject("Brand");
    //     return $model;
    // }
    
    // /**
    //  * Méthode permettant de retourner les données sur un type de produit donné
    //  *
    //  * @param int $typeId
    //  * @return Type
    //  */
    // public function getProductTypeDetails($typeId) {
    //     $sql = "SELECT name, footer_order footerOrder FROM type WHERE id = $typeId";

    //     $stmt = $this->dbh->query($sql);
    //     $model = $stmt->fetchObject("Type");
    //     return $model;
    // }
    
    // /**
    //  * Méthode permettant de retourner les 5 catégories sur la page d'accueil
    //  *
    //  * @return Category[]
    //  */
    // public function getHomeCategories() {
    //     $sql = "SELECT id, name, subtitle, picture
    //     FROM category
    //     WHERE home_order <> 0
    //     ORDER BY home_order ASC
    //     LIMIT 5";

    //     $stmt = $this->dbh->query($sql);
    //     // pour récupérer plusieurs résultats d'un coup, il n'y a que fetchAll()
    //     // mais ce sont les arguments qui vont changer ici
    //     // avant :
    //     //$models = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     // maintenant :
    //     $models = $stmt->fetchAll(PDO::FETCH_CLASS, "Category");
    //     // $models représente mon tableau de models, je n'ai plus qu'à le retourner
    //     return $models;
    // }
    
    // /**
    //  * Méthode permettant de retourner les 5 marques en bas de page
    //  *
    //  * @return Brand[]
    //  */
    // public function getFooterBrands() {
    //     $sql = "SELECT id, name
    //     FROM `brand`
    //     WHERE footer_order <> 0
    //     ORDER BY footer_order ASC
    //     LIMIT 5";

    //     $stmt = $this->dbh->query($sql);
    //     $models = $stmt->fetchAll(PDO::FETCH_CLASS, "Brand");
    //     return $models;
    // }
    
    // /**
    //  * Méthode permettant de retourner les 5 types de produit en bas de page
    //  *
    //  * @return Type[]
    //  */
    // public function getFooterProductTypes() {
    //     $sql = "SELECT id, name
    //     FROM `type`
    //     WHERE footer_order <> 0
    //     ORDER BY footer_order ASC
    //     LIMIT 5";

    //     $stmt = $this->dbh->query($sql);
    //     $models = $stmt->fetchAll(PDO::FETCH_CLASS, "Type");
    //     return $models;
    // }
}