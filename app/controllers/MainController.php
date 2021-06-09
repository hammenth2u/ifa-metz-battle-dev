<?php

require_once __DIR__."/CoreController.php";
require_once "../app/utils/DBData.php";

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


    // public function legalMentions() {
    //     $this->show('legal');
    // }
    public function newPlayer(){
        $conn = new DBData();
        if($_POST['pseudo']!=''&&$_POST['lastname']!=''&&$_POST['firstname']!=''&&$_POST['gender']!=''&&$_POST['birthdate']!=''&&$_POST['email']!=''&&$_POST['address']!=''&&$_POST['city']!=''&&$_POST['postalcode']!=''){
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
            $player->setScore($_POST['score']);
            $conn->addData($player);
            echo json_encode(['message'=>'ok']);
        }
        else{
            echo json_encode(['message'=>'ko']);
        }
    }
    public function updatePlayer(){
        $conn = new DBData();
        $_PUT = file_get_contents('php://input');
        if($_PUT['email']!=""){
            $player = $conn->getDataFromMail($_PUT['email']);
            if($_PUT['score'] > $player->getScore()){
                $player->setScore($_PUT['score']);
            }
            $player->setSharedtwitter($_PUT['sharedtwitter']);
            $player->setSharedfacebook($_PUT['sharedfacebook']);

        }

    }
    public function getPlayer(){
        $conn = new DBData();
        if($_GET['email']!=""){
            $player = $conn->getDataFromMail($_GET['email']);
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
        $_DELETE = file_get_contents('php://input');
        $conn = new DBData();
        if($_DELETE['email']!=""){
            $conn->removeData($_DELETE['email']);
        }

        
    }
    public function getLeaderboards(){
        $conn = new DBData();
        if($_GET['page']!=""){
            echo json_encode($conn->getTopScores($_GET['page']));
        }
    }

    public function connect(){
        $conn = new DBData();
        if($_GET['email']!=''&&$_GET['password']!=''){
            $player = $conn->connectUser($_GET['email'],$_GET['password']);
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

    public function error() {
        // on modifie "l'enveloppe" HTTP pour changer le code de réponse
        // de base, le code est 200 (OK) mais ici on veut informer le client de son erreur
        // on passe à un code 404
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }
}