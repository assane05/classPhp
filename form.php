<?php
require 'Personne.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mdp = htmlspecialchars(trim($_POST['mdp']));

    // Validation basique
    if (empty($nom) || empty($prenom) || empty($email) || empty($mdp)) {
        echo "Tous les champs sont requis.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email invalide.";
        exit;
    }

    if (strlen($mdp) < 8) {
        echo "Le mot de passe doit comporter au moins 8 caractères.";
        exit;
    }

    // Créer une instance de la classe Personne
    $personne = new Personne($nom, $prenom, $email, $mdp);

    // Affichage des informations pour vérification
    echo "Nom : " . $personne->getNom() . "<br>";
    echo "Prénom : " . $personne->getPrenom() . "<br>";
    echo "Email : " . $personne->getEmail() . "<br>";
    echo "Mot de passe : " . $personne->getMdp() . "<br>";
}
?>