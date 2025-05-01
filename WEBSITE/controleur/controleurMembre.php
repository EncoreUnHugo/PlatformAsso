<?php

    require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/membre.php");
    require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/modele.php");

    class ControleurMembre {
        public static function lireMembres(){
            
            $titre = "les membres";

            $tableau = Membre::getAll("membre");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/debut.html");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/navbar.html");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/lesObjets.php");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/accueil.html");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/footer.html");

        }

 
        public static function lireUnMembre(){

            $titre = "le membre";

            $tab = Membre::getObjetById($_GET["id_membre"]);

            if(!$tab){
                include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/erreur.php");
                echo "Le membre " , $_GET["id_membre"] , " n'existe pas dans la base";
            }
            else
                include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/unObjet.php");

        }
    }
    
?>