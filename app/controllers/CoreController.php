<?php

require_once __DIR__."/../utils/DBData.php";

class CoreController {

    protected $dbdata;

    public function __construct() {
        $this->dbdata = new DBData();
    }

    // cette méthode se charge d'afficher les vues
    // et donc de constituer les différentes pages de notre site
    // viewVars est un fourre-tout pour passer une, deux, trois ou même quatorze variables à la méthode qui se charge d'afficher les vues
    // comme ça, dans les vues, on pourra faire référence à ces variables
    // et l'info circule maintenant de bout en bout
    protected function show($viewName, $viewVars=[]) {
        // extract transforme les clés d'un tableau en autant de variables portant le même nom
        // ce qui évite de faire référence aux variables de vues à travers le tableau $viewVars (parce que c'est moche)
        // ex : $viewVars['monObjet']->maMethode() => moche !!!
        // ex : $monObjet->maMethode() => beau !!!
        extract($viewVars);

        //$footerBrands = $this->dbdata->getFooterBrands();


        require_once __DIR__."/../views/header.tpl.php";
        require_once __DIR__."/../views/$viewName.tpl.php";
        require_once __DIR__."/../views/footer.tpl.php";
    }
}