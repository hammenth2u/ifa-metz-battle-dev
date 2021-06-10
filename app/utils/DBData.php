<?php

// require_once __DIR__."/../models/Category.php";
// require_once __DIR__."/../models/Product.php";
// require_once __DIR__."/../models/Brand.php";
// require_once __DIR__."/../models/Type.php";
require_once __DIR__."/../models/PlayerModel.php";
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

    //Les 1000 meilleurs scores
    public function getTopScores($page){
        $offset = ($page-1)*10;
        return $this->dbh->query("SELECT score, pseudo, email FROM player ORDER BY score DESC LIMIT 10 OFFSET ".$offset)->fetchObject("PlayerModel");
    }
    //récupérer un profil à partir de l'adresse email
    public function getDataFromMail($email){
        return $this->dbh->query("SELECT * FROM player WHERE email = '{$email}'")->fetchObject("PlayerModel");
    }

    //Insérer un nouveau profil
    public function addData($player){;
        $this->dbh->exec("INSERT INTO player (pseudo, password, lastname, firstname, birthdate, email, address, city, postalcode, gender, score, sharedtwitter, sharedfacebook) VALUES ('{$player->getPseudo()}','{$player->getPassword()}','{$player->getLastName()}','{$player->getFirstName()}','{$player->getBirthdate()}','{$player->getEmail()}','{$player->getAddress()}','{$player->getCity()}','{$player->getPostalcode()}','{$player->getGender()}',{$player->getScore()},0,0)");
    }

    //Modifier un profil
    public function editData($player){
        $this->dbh->exec("UPDATE player SET pseudo = '{$player->getPseudo()}', lastname = '{$player->getLastname()}', firstname = '{$player->getFirstname()}', birthdate = '{$player->getBirthdate()}', address = '{$player->getAddress()}', city = '{$player->getCity()}', postalcode = '{$player->getPostalcode()}', gender = '{$player->getGender()}', score = {$player->getScore()}, sharedtwitter = {$player->getSharedTwitter()}, sharedfacebook = {$player->getSharedfacebook()} WHERE email = '{$player->getEmail()}'");
    }

    //Supprimer les données d'un profil dans la base
    public function removeData($player){
        $this->dbh->exec("DELETE FROM player WHERE email = '{$player->getEmail()}'");
    }
    public function connectUser($email, $password){
        return $this->dbh->query("SELECT * FROM player WHERE email = '{$email}' AND password = '{$password}'")->fetchObject("PlayerModel");
    }

    public function ageBetween($lower,$upper){
        $datelower = new DateTime();
        $datelower->setDate($datelower->format('Y')-$lower,$datelower->format('m'),$datelower->format('d'));
        $dateupper = new DateTime();
        $dateupper->setDate($dateupper->format('Y')-$upper,$dateupper->format('m'),$dateupper->format('d'));

        return $this->dbh->query("SELECT * FROM player WHERE DATEDIFF(birthdate,'{$datelower->format('Y-m-d')}') <= 0 AND DATEDIFF(birthdate,'{$dateupper->format('Y-m-d')}') >= 0")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getGenderHomme() {
        return $this->dbh->query("SELECT count(*) as nbHommes FROM player WHERE gender = 'Homme'")->fetchObject();
    }

    public function getGenderFemme() {
        return $this->dbh->query("SELECT count(*) as nbFemmes FROM player WHERE gender = 'Femme'")->fetchObject(); 
    }

    public function getGenderAutre() {
        return $this->dbh->query("SELECT count(*) as nbAutres FROM player WHERE gender = 'Autre'")->fetchObject();
    }
    
    
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