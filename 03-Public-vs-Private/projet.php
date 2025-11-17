<?php

/**
 * 🔒 PROJET 03 : PUBLIC VS PRIVATE
 * Concept : Encapsulation (protéger les données sensibles)
 *
 * 📖 Lis le README.md avant de commencer !
 */

// ─────────────────────────────────────────────────────────────────────────
// TODO 1 : Créer la classe Portefeuille
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'Portefeuille' avec :
// - Propriété PRIVATE $proprietaire
// - Propriété PRIVATE $argentDisponible
//
// Attention : PRIVATE, pas public !




// ─────────────────────────────────────────────────────────────────────────
// TODO 2 : Ajouter le constructeur
// ─────────────────────────────────────────────────────────────────────────
//
// Le constructeur doit :
// 1. Prendre 2 paramètres : $proprietaire, $argentInitial
// 2. Initialiser les propriétés privées
// 3. Afficher "👛 Portefeuille créé pour [nom] avec [argent]€"




// ─────────────────────────────────────────────────────────────────────────
// TODO 3 : Ajouter un GETTER
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une méthode getArgent() qui :
// - RETOURNE (return) la valeur de $argentDisponible
// - Permet de LIRE l'argent sans pouvoir le modifier




// ─────────────────────────────────────────────────────────────────────────
// TODO 4 : Ajouter la méthode ajouterArgent()
// ─────────────────────────────────────────────────────────────────────────
//
// Cette méthode doit :
// 1. Prendre un paramètre $montant
// 2. Vérifier que $montant > 0
// 3. Si OUI : ajouter le montant et afficher "✅ Ajout de [montant]€"
// 4. Si NON : afficher "❌ Montant invalide !"




// ─────────────────────────────────────────────────────────────────────────
// TODO 5 : Ajouter la méthode retirerArgent()
// ─────────────────────────────────────────────────────────────────────────
//
// Cette méthode doit :
// 1. Vérifier que $montant > 0
// 2. Vérifier que $montant <= $argentDisponible
// 3. Si OK : retirer et afficher "✅ Retrait de [montant]€"
// 4. Sinon : afficher "❌ Fonds insuffisants !" ou "❌ Montant invalide !"




// ─────────────────────────────────────────────────────────────────────────
// TODO 6 : Créer et tester un portefeuille
// ─────────────────────────────────────────────────────────────────────────
//
// Crée $monPortefeuille avec :
// - Propriétaire : ton prénom
// - Argent initial : 100€
//
// Teste :
// 1. Afficher l'argent (avec getArgent())
// 2. Ajouter 50€
// 3. Retirer 30€
// 4. Tenter de retirer 500€ (devrait échouer)
// 5. Tenter d'ajouter -20€ (devrait échouer)
// 6. Afficher l'argent final




// ─────────────────────────────────────────────────────────────────────────
// ✅ BRAVO ! Tu as terminé le Projet 03
// ─────────────────────────────────────────────────────────────────────────
//
// Tu as appris :
// ✅ L'encapsulation : protéger les données avec private
// ✅ Les getters pour lire sans modifier
// ✅ Les méthodes avec validation pour sécuriser les modifications
//
// 🎯 Prochaine étape : Projet 04 - L'Héritage (réutiliser du code)
//
?>

<?php
class Portefeuille
{

    private $proprietaire;
    private $argentDisponible;

    public function __construct($proprietaire, $argentInitial)
    {
        $this->proprietaire = $proprietaire;
        $this->argentDisponible = $argentInitial;
        echo "👛 Portefeuille créé pour {$this->proprietaire} avec {$this->argentDisponible}€\n";
    }

    public function getArgent()
    {
        return $this->argentDisponible;;
    }

    public function ajouterArgent($montant)
    {
        if ($montant > 0) {
            $this->argentDisponible += $montant;
        } else {
            echo "❌ Montant invalide !\n";
        }
    }

    public function retirerArgent($montant)
    {
        if ($montant > 0) {
            if ($montant <= $this->argentDisponible) {
                $this->argentDisponible -= $montant;
                echo "✅ Retrait de {$montant}€\n";
            } else {
                echo "❌ Fonds insuffisants !\n";
            }
        } else {
            echo "❌ Montant invalide !\n";
        }
    }
}

$monPortefeuille = new Portefeuille("Sylvain", 100);
$monPortefeuille->getArgent();
$monPortefeuille->ajouterArgent(50);
$monPortefeuille->retirerArgent(30);
$monPortefeuille->retirerArgent(500);
$monPortefeuille->retirerArgent(-20);
$monPortefeuille->getArgent();
