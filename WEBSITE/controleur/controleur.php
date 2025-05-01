<?php


require_once("modele/evenement.php");
require_once("modele/projet.php");
require_once("modele/modele.php");
require_once("modele/membre.php");

Class Controleur{
    public static function lireObjets(){

        $obj = static::$objet;
        $key = static::$cle;

        $titre = static::$objet;

        $tableau = $key::getAll("$key");

        include("vue/debut.php");

        include("vue/navbar.php");

        include("vue/lesObjets.php");

        include("vue/footer.html");
    }

    public static function lireUnObjet(){

        $key = static::$cle;
        $inf = static::$info;

        if($key != "membre"){
            $l = $_GET["$inf"];
        } else{
            $l = $_SESSION["mail"];
        }

        $tab = $key::getObjetById($l);

        $titre = static::$objet;
        
        include("vue/debut.php");

        include("vue/navbar.php");

        include("vue/unObjet.php");

        include("vue/footer.html");


    }
}