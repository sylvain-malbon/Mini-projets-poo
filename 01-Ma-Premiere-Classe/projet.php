<?php

/**
 * 🚗 PROJET 01 : MA PREMIÈRE CLASSE
 * Concept : Classes & Objets
 *
 * 📖 Lis le README.md avant de commencer !
 */

// ─────────────────────────────────────────────────────────────────────────
// TODO 1 : Créer la classe Voiture
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'Voiture' avec :
// - Propriété public $marque
// - Propriété public $couleur
// - Propriété public $vitesseMax
//
// Indice : class NomDeClasse { ... }




// ─────────────────────────────────────────────────────────────────────────
// TODO 2 : Ajouter les méthodes
// ─────────────────────────────────────────────────────────────────────────
//
// Dans la classe Voiture, ajoute :
//
// 1. Une méthode demarrer() qui affiche :
//    "🚗 Vrooooom ! La [marque] démarre !"
//
// 2. Une méthode klaxonner() qui affiche :
//    "🎺 POUET POUET ! ([couleur])"
//
// Indice : Utilise $this-> pour accéder aux propriétés




// ─────────────────────────────────────────────────────────────────────────
// TODO 3 : Créer des objets
// ─────────────────────────────────────────────────────────────────────────
//
// Crée 2 voitures :
//
// Voiture 1 : $ferrari
// - marque: "Ferrari"
// - couleur: "Rouge"
// - vitesseMax: 320
//
// Voiture 2 : $twingo
// - marque: "Renault Twingo"
// - couleur: "Jaune"
// - vitesseMax: 150
//
// Indice : $objet = new NomClasse();




// ─────────────────────────────────────────────────────────────────────────
// TODO 4 : Tester les voitures
// ─────────────────────────────────────────────────────────────────────────
//
// Pour chaque voiture :
// 1. Fais-la démarrer
// 2. Fais-la klaxonner
// 3. Affiche sa vitesse max
//
// Exemple : $ferrari->demarrer();




// ─────────────────────────────────────────────────────────────────────────
// ✅ BRAVO ! Tu as terminé le Projet 01
// ─────────────────────────────────────────────────────────────────────────
//
// Tu as appris :
// ✅ Créer une classe
// ✅ Créer des objets (instances)
// ✅ Utiliser $this->
//
// 🎯 Prochaine étape : Projet 02 - Le Constructeur
//


class Voiture
{
    public $marque;
    public $couleur;
    public $vitesseMax;

    public function __construct($marque, $couleur, $vitesseMax)
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesseMax = $vitesseMax;
    }

    public function demarrer()
    {
        echo "🚗 Vrooooom ! La {$this->marque} démarre .\n";
    }

    public function klaxonner()
    {
        echo "🎺 POUET POUET ! {$this->couleur} . \n";
    }
}

$ferrari = new Voiture("Ferrari", "Rouge", 320);
$twingo = new Voiture("Renault Twingo", "Jaune", 150);

$ferrari->demarrer();
$ferrari->klaxonner();
echo $ferrari->vitesseMax . "\n";

$twingo->demarrer();
$twingo->klaxonner();
echo $twingo->vitesseMax . "\n";
