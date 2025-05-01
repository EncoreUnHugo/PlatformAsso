<?php

    require_once("config/connexion.php");

    Connexion::connect();

    $controleur = "controleurAccueil";
    $action = "afficherAccueil";

    $tableauControleurs = ["controleurMembre","controleurEvenement","controleurAccueil","controleurProjet","controleurConnexion","controleurAjoutEvenement","controleurAjoutProjet"];
    $actionParDefaut = array(
        "controleurMembre" => "lireUnObjet",
        "controleurEvenement" => "lireEvenements",
        "controleurAccueil" => "afficherAccueil",
        "controleurProjet" => "lireProjets",
        "controleurConnexion" => "afficherConnexion",
        "controleurAjoutEvenement" => "afficherAjoutEvenement",
        "controleurAjoutProjet" => "afficherAjoutProjet",

    );

    if(array_key_exists("controleur",$_GET) && in_array($_GET["controleur"],$tableauControleurs)){
            $controleur = $_GET["controleur"];
        }

    require_once("controleur/$controleur.php");
    
    if(array_key_exists("action",$_GET) && in_array($_GET["action"],get_class_methods($controleur))){
        $action = $_GET["action"];
    }
    else{
        $action = $actionParDefaut[$controleur];
    }



    $controleur::$action();

?>