<?php

require_once __DIR__."/CoreController.php";

class MainController extends CoreController {
    // notre première action : la homepage
    public function home() {
        $this->show('home');
    }

    public function game() {
        $this->show('game');
    }

    public function login() {
        $this->show('login');
    }

    public function register() {
        $this->show('register');
    }

    public function charts() {
        $this->show('chart');
    }


    // public function legalMentions() {
    //     $this->show('legal');
    // }
    public function newPlayer(){
        if(isset($_POST['pseudo'])&&isset($_POST['lastname'])&&isset($_POST['firstname'])&&isset($_POST['gender'])&&isset($_POST['birthdate'])&&isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['city'])&&isset($_POST['postalcode'])){
            $player = new PlayerModel();
            $player->setEmail($_POST['email']);
            $player->setLastname($_POST['lastname']);
            $player->setFirstname($_POST['firstname']);
            $player->setPseudo($_POST['pseudo']);
            $player->setPassword($_POST['password']);
            $player->setGender($_POST['gender']);
            $player->setBirthdate($_POST['birthdate']);
            $player->setAddress($_POST['address']);
            $player->setCity($_POST['city']);
            $player->setPostalcode($_POST['postalcode']);
            isset($_POST['score'])?$player->setScore($_POST['score']):$player->setScore(0);
            $this->dbdata->addData($player);
            echo json_encode(['message'=>'ok']);
        }
        else{
            echo json_encode(['message'=>'ko']);
        }
    }
    public function updatePlayer(){
        parse_str(file_get_contents("php://input"),$_PUT);
        if(isset($_PUT['email'])){
            $player = $this->dbdata->getDataFromMail($_PUT['email']);
            if(isset($_PUT['score']) && $_PUT['score'] > $player->getScore()){
                $player->setScore($_PUT['score']);
            }
            if(isset($_PUT['sharedtwitter']))
                $player->setSharedtwitter($_PUT['sharedtwitter']);
            if(isset($_PUT['sharedfacebook']))
                $player->setSharedfacebook($_PUT['sharedfacebook']);

        }

    }
    public function getPlayer(){
        if(isset($_GET['email'])){
            $player = $this->dbdata->getDataFromMail($_GET['email']);
            if($player){
                $data= [
                    'message'=>'ok',
                    'pseudo'=>$player->getPseudo(),
                    'email'=>$player->getEmail(),
                    'lastname'=>$player->getLastname(),
                    'firstname'=>$player->getFirstname(),
                    'gender'=>$player->getGender(),
                    'birthdate'=>$player->getBirthdate(),
                    'address'=>$player->getAddress(),
                    'city'=>$player->getCity(),
                    'postalcode'=>$player->getPostalcode(),
                    'score'=>$player->getScore(),
                    'sharedtwitter'=>$player->getSharedtwitter(),
                    'sharedfacebook'=>$player->getSharedfacebook()
                    ];
                echo json_encode($data);
            }
            else{
                echo json_encode(['message'=>'ko']);
            }
        }
        else{
            echo json_encode(['message'=>'ko']);
        }

        
    }
    public function deletePlayer(){
        parse_str(file_get_contents("php://input"),$_DELETE);
        if($_DELETE['email']!=""){
            $this->dbdata->removeData($_DELETE['email']);
        }

        
    }
    public function getLeaderboards(){
        if(isset($_GET['page'])){
            echo json_encode($this->dbdata->getTopScores($_GET['page']));
        }
        else{
            echo print_r($_GET,true);
        }
    }

    public function connect(){
        if(isset($_GET['email'])&&isset($_GET['password'])){
            $player = $this->dbdata->connectUser($_GET['email'],$_GET['password']);
            if($player){
                $data= [
                    'message'=>'ok',
                    'pseudo'=>$player->getPseudo(),
                    'email'=>$player->getEmail(),
                    'lastname'=>$player->getLastname(),
                    'firstname'=>$player->getFirstname(),
                    'gender'=>$player->getGender(),
                    'birthdate'=>$player->getBirthdate(),
                    'address'=>$player->getAddress(),
                    'city'=>$player->getCity(),
                    'postalcode'=>$player->getPostalcode(),
                    'score'=>$player->getScore(),
                    'sharedtwitter'=>$player->getSharedtwitter(),
                    'sharedfacebook'=>$player->getSharedfacebook()
                    ];
                echo json_encode($data);
            }
            else{
                echo json_encode(['message'=>'ko']);
            }
        }
        else{
            echo json_encode(['message'=>'ko']);
        }
    }

    public function getByAge(){
        if(isset($_GET['lower'])&&isset($_GET['upper'])){
            $users = $this->dbdata->ageBetween($_GET['lower'],$_GET['upper']);
            echo json_encode(['result'=>$users,'message'=>'ok']);
        }
        else{
            echo json_encode(['message'=>'ko']);
        }
    }

    public function getGenderHomme() {
        echo json_encode($this->dbdata->getGenderHomme());
    }

    public function getGenderFemme() {
        echo json_encode($this->dbdata->getGenderFemme());
    }

    public function getGenderAutre() {
        echo json_encode($this->dbdata->getGenderAutre());
    }


    public function error() {
        // on modifie "l'enveloppe" HTTP pour changer le code de réponse
        // de base, le code est 200 (OK) mais ici on veut informer le client de son erreur
        // on passe à un code 404
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }
}