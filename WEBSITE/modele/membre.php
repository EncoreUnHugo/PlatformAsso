<?php

require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/modele.php");

    class Membre extends Modele{

        protected static $objet = "membre";
        protected static $cle = "id_membre";

        protected $id_membre;
        protected $nom;
        protected $prenom;
        protected $email;
        protected $mot_de_passe;

        public function afficher(){
            echo "<p>Membre $this->id_membre : $this->nom $this->prenom, avec pour coordonées $this->email $this->mot_de_passe</p>"; 
        }

        public function afficherGenerique(){
            echo "<p> la membre numéro $this->id_membre </p>";
            ?>
            <a href="routeur.php?controleur=controleurMembre&action=lireUnMembre&id_membre=<?php echo $this->id_membre ?>" class="top">
            detail
            </a>
            <?php
        }

    }

?>