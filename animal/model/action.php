<!-- 
CONSIGNES
// inclure le fichier utilisateur.php
// recuperer les information du formulaire
// creer un instance de la classe Utilisateur
// appeler la methode inscription pour enregistrer les donnees dans bd 

-->

<?php
session_start();
require_once("../inc/functions.php");
require_once("../utilisateur.php");
require_once("../inc/database.php");


// if(isset($_POST['inscription'])){
//     // récupération des données saisies par l'utilisateur
//     $name=htmlspecialchars($_POST['name']);
//     $prenom=htmlspecialchars($_POST['prenom']);
//     $email=htmlspecialchars($_POST['email']);
//     $password=htmlspecialchars($_POST['password']);

//     $password=password_hash($password,PASSWORD_DEFAULT);

//     // on appel le constructeur
//     $utilisateur = new Utilisateur($name,$prenom,$email, $password);
//     $utilisateur->inscrire();

    
// }

// require_once("./AnimalRepository.php");

// if(isset($_POST['submit'])){
//     // récupération des données saisies par l'utilisateur
//     $name=htmlspecialchars($_POST['name']);
//     $type=htmlspecialchars($_POST['type']);
//     $race=htmlspecialchars($_POST['race']);

//     // on appel le constructeur
//     $utilisateur = new AnimalRepository($name,$type,$race);
//     $utilisateur->insert();

    
// }



// if(isset($_POST['connexion'])){
//     // récupération des données saisies par l'utilisateur
//     $email=htmlspecialchars($_POST['email']);
//     $mdp=htmlspecialchars($_POST['password']);
    
//     // appel de la methode statique connexion
//     Utilisateur::connexion($email, $password);
    

    
// }

?>