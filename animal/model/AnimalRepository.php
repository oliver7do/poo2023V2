<?php
require_once "../inc/database.php";
// Interaction avec la base de donnée

class AnimalRepository{
    private $id_animal;
    private $name;
    private $type;
    private $race;

    public function __construct($name,$type,$breed){
        $this->name = $name;
        $this->type = $type;
        $this->race = $breed;
    }

    public function insert(){
        // Connexion à la base de données :

        $sb = new DbConnect("localhost", "animal", "root", "");

        $db_connect = $sb->dbConnexion();


        // Préparation de la requête à la bdd :

        $request = $db_connect->prepare("INSERT INTO animal (name,type,race) VALUES(?,?,?)");

        // Executer la requête :
        try {

            $request->execute(array($this->name, $this->type, $this->race));
        } catch (PDOException $error) {

            $error->getMessage();
        }

 
    }

    // method fondAll
    public function finAll(){
        $db = new dbConnect();
        $connexionDb = $db->dbConnexion();
        $connexionRequest = $connexionDb->prepare("SELECT * FROM animal");
        // executer la requete
        $connexionRequest->execute();
        // recupere le resultat de la requete
        $animal = $connexionRequest->fetchAll(PDO::FETCH_ASSOC);
        debug($animal);
        die("ok");
    }
}