<?php

require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/controleur/controleur.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/controleur/controleurAccueil.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/controleur/controleurMembre.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/membre.php");


    class ControleurConnexion extends Controleur{

        public static function afficherConnexion(){

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/debutCon.html");

            include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/connexion.html");

        }

        public static function creerMembre(){
            
            $n = $_POST["nom"];
            $p = $_POST["prenom"];
            $m = $_POST["mail"];
            $mdp1 = $_POST["mdp1"];

            $M = Membre::ajoutMembre($n,$p,$m,$mdp1);

            if($M)
                self::afficherConnexion();
            else {
                ControleurAccueil::afficherAccueil();
            }
        }

        public static function connecterConnexion(){
            $titre = "connexion Membre";
            $ml = $_POST["mail"];
            $md = $_POST["mdp"];
            if(Membre::checkMDP($ml,$md)){
                $_SESSION["mail"] = $ml;
                //$obj = Livre::getObjetById("1");
                //$_SESSION["isAdmin"] = $obj->isAdmin();
                ControleurMembre::lireUnObjet($_SESSION["mail"]);
            } else {
                self::afficherConnexion();
            }

        }

        public static function deconnecterConnexion(){
            session_unset();
            session_destroy();
            setcookie(session_name(),' ', time()-1);
            self::afficherConnexion();
        }
    }
?>