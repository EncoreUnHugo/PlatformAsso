<?php

require_once("controleur/controleurAccueil.php");
require_once("controleur/controleurEvenement.php");

class ControleurAjoutEvenement {
    
    public static function afficherAjoutEvenement(){

        include("vue/ajoutEvenement.html");

    }

    public static function creerEvenement(){
            
        $t = $_POST["titre"];
        $de = $_POST["description"];
        $ty = $_POST["type"];
        $li = $_POST["lieu"];
        $da = $_POST["date"];

        $M = Evenement::ajoutEvenement($t,$ty,$li,$da,$de);

        if($M)
            ControleurEvenement::lireObjets();
        else {
            ControleurAccueil::afficherAccueil();
        }
    }
    

}

?>