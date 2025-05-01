<?php

require_once("controleur/controleur.php");
require_once("controleur/controleurConnexion.php");

    class ControleurMembre extends Controleur{
        
        protected static $objet = "Membres";
        protected static $cle = "membre";
        protected static $info = "email";

        public static function supprimerMembre(){

            $suppr = Membre::deleteMembre($_SESSION["mail"]);
    
            $deco = ControleurConnexion::deconnecterConnexion();
            
        }

    }
    
?>