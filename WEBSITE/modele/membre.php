<?php

require_once("modele/modele.php");

    class Membre extends Modele{

        protected static $objet = "membre";
        protected static $cle = "email";

        protected $id_membre;
        protected $nom;
        protected $prenom;
        protected $email;
        protected $mot_de_passe;

        public function afficher(){

            ?>
    
            <div class="biblio">
                <div class="transparent"></div>
            </div>
    
            <div class="enTete">
                <h2 class="title">MON PROFIL</h2>
                <a href="index.php?controleur=controleurConnexion&action=deconnecterConnexion"><h3 class="same">Déconnexion</h3></a>
            </div>
    
            <div class="containInfo">
                <h3>Informations Générales</h3>
    
                <div class="group">
                <div class="info">
                        <p>Nom</p>
                        <h4><?php echo $this->nom ?></h4>
                    </div>
                    <div class="info">
                        <p>Prénom</p>
                        <h4><?php echo $this->prenom ?></h4>
                    </div>
                    <div class="info">
                        <p>Adresse e-mail</p>
                        <h4><?php echo $this->email ?></h4>
                    </div>
                    <div class="info">
                        <p>Mot de Passe</p>
                        <h4>************</h4>
                    </div>
                </div>          
    
                <div class="supp">
                    <button id="open-modal-button" onclick="window.location.href = 'index.php?controleur=controleurMembre&action=supprimerMembre';">Supprimer le compte</button>
    
                    <p>La suppression d'un compte entraîne la perte de toutes ses données ainsi que des droits de son détenteur</p>
                </div>
            </div>
    
            <?php
        }

        public static function ajoutMembre($n,$p,$m,$mdp1){

            $requete4 = "INSERT INTO Membre (nom,prenom,email,mot_de_passe) VALUES (:tag_n,:tag_p,:tag_m,:tag_mdp)";

            $req_prep4 = Connexion::pdo()->prepare($requete4);

            $mdp1 = password_hash($mdp1, PASSWORD_DEFAULT);
    
            $valM = array(
                ":tag_n" => $n,
                ":tag_p" => $p,
                ":tag_m" => $m,
                ":tag_mdp" => $mdp1
            );  

        try {
            $req_prep4 -> execute($valM);
            return true;
        } catch(PDOException $e) {
            return false;
        }
        }

        public static function isAdmin(){return $this->id_role == 1;}

        public static function checkMDP($email, $mot_de_passe) {
            $requete = "SELECT mot_de_passe FROM Membre WHERE email = :email";
            $req_prep = Connexion::pdo()->prepare($requete);

            $valeurs = array(":email" => $email);

            try {
                $req_prep->execute($valeurs);
                $resultat = $req_prep->fetch(PDO::FETCH_ASSOC);

                if ($resultat && password_verify($mot_de_passe, $resultat['mot_de_passe'])) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                return false;
            }
        }

        public static function deleteMembre($m){
        $requete_prep_m = "DELETE FROM Membre WHERE email = :tag_email";
        $req_prep = Connexion::pdo()->prepare($requete_prep_m);
        $val = array(
            ":tag_email" => $m
        ); 
        try {
            $req_prep-> execute($val);
        } catch(PDOException $e) {
            echo $e ->getMessage();
        }
        $req_prep->setFetchmode(PDO::FETCH_CLASS,"Membre");
        return $req_prep->FetchAll();
    }

    public static function modifierMembre($id_membre, $nom, $prenom, $email, $mot_de_passe = null) {
        $requete = "UPDATE Membre SET nom = :nom, prenom = :prenom, email = :email";
        
        // Update the password only if a new one is provided
        if (!empty($mot_de_passe)) {
            $requete .= ", mot_de_passe = :mot_de_passe";
            $mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        }
        
        $requete .= " WHERE id_membre = :id_membre";

        $req_prep = Connexion::pdo()->prepare($requete);

        $valeurs = array(
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":email" => $email,
            ":id_membre" => $id_membre
        );

        if (!empty($mot_de_passe)) {
            $valeurs[":mot_de_passe"] = $mot_de_passe;
        }

        try {
            $req_prep->execute($valeurs);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    }

?>