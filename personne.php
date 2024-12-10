<?php
class Personne {
    private $nom;
    private $prenom;
    private $email;
    private $mdp;

    // Constructeur
    public function __construct($nom, $prenom, $email, $mdp) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
    }

    // Getters
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMdp() {
        return $this->mdp;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }
}
?>