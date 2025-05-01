<?php

class Modele{

    protected $attribut,$valeur;
    protected $donnees;
    protected static $objet;
    
    public function get($attribut){
        return $this->$attribut;
    }
        
    public function set($attribut,$valeur){
        $this->$attribut = $valeur;
        $this->$valeur = $attribut;
    }

    public function __construct($donnees = NULL){
        if(!is_null($donnees)){
            foreach($donnees as $attribut-> $valeur){
                $this -> set($attribut,$valeur);    
            }
        }
    }

    public static function getAll(){
        $table = static::$objet;
        $requete = "SELECT * FROM $table;";
        $resultat = Connexion::pdo()->query($requete);
        $resultat->setFetchmode(PDO::FETCH_CLASS,"$table");
        $tableau = $resultat->fetchAll();
        return $tableau;
    }

    public static function getObjetById($i){
        $key = static::$cle;
        $table = static::$objet;
        $requete_prep_user = "SELECT * FROM $table WHERE $key = :tag_$key";
        $req_prep = Connexion::pdo()->prepare($requete_prep_user);
        $val = array(
            ":tag_$key" => $i
        ); 
        try {
            $req_prep-> execute($val);
        } catch(PDOException $e) {
            echo $e ->getMessage();
        }
        $req_prep->setFetchmode(PDO::FETCH_CLASS,"$table");
        return $req_prep->FetchAll();
    }

    public static function threelastevent() {
        $table = static::$objet;
        $requete = "SELECT * FROM $table ORDER BY date ASC LIMIT 3;";
        $resultat = Connexion::pdo()->query($requete);
        $resultat->setFetchmode(PDO::FETCH_CLASS, "$table");
        return $resultat->fetchAll();
    }

    public static function twoproject() {
        $table = static::$objet;
        $requete = "SELECT * FROM $table ORDER BY id_projet DESC LIMIT 2;";
        $resultat = Connexion::pdo()->query($requete);
        $resultat->setFetchmode(PDO::FETCH_CLASS, "$table");
        return $resultat->fetchAll();
    }

}
?>