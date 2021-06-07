<?php

require_once __DIR__."/CoreController.php";

class MainController extends CoreController {
    // notre première action : la homepage
    public function home() {
        $this->show('home');
    }

    // public function legalMentions() {
    //     $this->show('legal');
    // }

    public function error() {
        // on modifie "l'enveloppe" HTTP pour changer le code de réponse
        // de base, le code est 200 (OK) mais ici on veut informer le client de son erreur
        // on passe à un code 404
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }
}