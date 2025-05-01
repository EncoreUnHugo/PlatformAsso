<?php


require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/evenement.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/projet.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/modele.php");
require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/membre.php");

Class Controleur{
    public static function lireObjets(){

        $obj = static::$objet;
        $key = static::$cle;

        $titre = static::$objet;

        $tableau = $key::getAll("$key");

        include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/debut.php");

        include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/navbar.html");

        include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/lesObjets.php");

        include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/footer.html");
    }

    public static function lireUnObjet(){

        $key = static::$cle;
        $inf = static::$info;

        $l = $_GET["$inf"];

        $tab = $key::getObjetById($l);

        $titre = static::$objet;
        
        include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/debut.php");

        include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/navbar.html");

        include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/unObjet.php");

        include("C:/xampp\htdocs\PlatformAsso\WEBSITE/vue/footer.html");


    }
}