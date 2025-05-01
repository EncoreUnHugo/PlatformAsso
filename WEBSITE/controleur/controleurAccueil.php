<?php

require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/membre.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/projet.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/evenement.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/modele.php");

    class controleurAccueil {
        public static function afficherAccueil(){
             
            $titre = "Accueil"; 
            
            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/debut.php");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/navbar.html");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/accueil.php");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/footer.html");

        }
    }