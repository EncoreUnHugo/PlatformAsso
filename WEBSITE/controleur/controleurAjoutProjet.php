<?php

require_once("controleur/controleurAccueil.php");
require_once("controleur/controleurProjet.php");

class ControleurAjoutProjet {
    
    public static function afficherAjoutProjet (){

        include("vue/ajoutProjet.html");

    }

    public static function creerProjet(){
            
        $n = $_POST["nom"];
        $de = $_POST["description"];
        $s = $_POST["statut"];

        $P = Projet::ajoutProjet($n,$de,$s);
        
        if($P)
        ControleurProjet::lireObjets();
        else {
            ControleurAccueil::afficherAccueil();
        }
    }
    

}

?>