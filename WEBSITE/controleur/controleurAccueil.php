<?php

require_once("modele/membre.php");
require_once("modele/projet.php");
require_once("modele/evenement.php");
require_once("modele/modele.php");

    class controleurAccueil {
        public static function afficherAccueil(){
             
            $titre = "Accueil"; 
            
            include("vue/debut.php");

            include("vue/navbar.php");

            include("vue/accueil.php");

            include("vue/footer.html");

        }
    }