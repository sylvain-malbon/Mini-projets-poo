<?php
/**
 * 🎮 PROJET 12 : JEU RPG - COMBAT D'ARÈNE
 * Concept : Assembler TOUS les concepts POO dans un mini-jeu
 *
 * 📖 Lis le README.md avant de commencer !
 */

// ─────────────────────────────────────────────────────────────────────────
// TODO 1 : Créer le TRAIT Attaquant (compétence commune)
// ─────────────────────────────────────────────────────────────────────────
//
// Crée un trait 'Attaquant' avec :
// - Méthode attaquer($cible) qui :
//   * Inflige $this->attaque points de dégâts à la cible
//   * Affiche "⚔️ [nom] attaque [cible] et inflige X dégâts !"
//   * Appelle $cible->recevoirDegats($degats)
//
// Indice : $this->attaque sera défini dans la classe qui utilise le trait




// ─────────────────────────────────────────────────────────────────────────
// TODO 2 : Créer la classe ABSTRAITE Personnage
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe ABSTRAITE 'Personnage' avec :
// - Propriété STATIC private $totalPersonnages = 0
// - Propriétés PROTECTED : $nom, $vie, $attaque
// - Propriété PRIVATE : $estVivant = true
// - Constructeur qui :
//   * Incrémente $totalPersonnages
//   * Initialise nom, vie, attaque
//   * Affiche "✨ [nom] entre dans l'arène ! (Vie: X, Attaque: Y)"
// - Méthode recevoirDegats($degats) qui :
//   * Réduit $vie
//   * Si vie <= 0 : met $estVivant à false et affiche "💀 [nom] est KO !"
//   * Sinon : affiche "💔 [nom] a X PV restants"
// - Méthode getEstVivant() qui retourne $estVivant
// - Méthode STATIC getTotalPersonnages()
// - Méthode ABSTRAITE crier() (chaque personnage crie différemment)




// ─────────────────────────────────────────────────────────────────────────
// TODO 3 : Créer la classe Guerrier
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'Guerrier' qui :
// - HÉRITE de Personnage
// - UTILISE le trait Attaquant
// - Constructeur : appelle parent avec vie=100, attaque=20
// - Méthode crier() : "🗡️ POUR L'HONNEUR !"




// ─────────────────────────────────────────────────────────────────────────
// TODO 4 : Créer la classe Mage
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'Mage' qui :
// - HÉRITE de Personnage
// - UTILISE le trait Attaquant
// - Constructeur : appelle parent avec vie=70, attaque=35
// - Méthode crier() : "🔮 PAR LA MAGIE !"
// - Méthode BONUS sortSpecial($cible) : inflige 50 dégâts fixes
//   * Affiche "✨ [nom] lance BOULE DE FEU ! 💥"




// ─────────────────────────────────────────────────────────────────────────
// TODO 5 : Créer la classe Archer
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'Archer' qui :
// - HÉRITE de Personnage
// - UTILISE le trait Attaquant
// - Constructeur : appelle parent avec vie=80, attaque=25
// - Méthode crier() : "🏹 TIR MORTEL !"




// ─────────────────────────────────────────────────────────────────────────
// TODO 6 : Créer la classe Arene (le jeu)
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'Arene' avec :
// - Méthode combat($perso1, $perso2) qui :
//   * Affiche "⚔️ COMBAT : [nom1] VS [nom2]"
//   * Les deux personnages crient
//   * Tour par tour jusqu'à ce qu'un personnage soit KO
//   * Retourne le gagnant




// ─────────────────────────────────────────────────────────────────────────
// TODO 7 : LE GRAND TOURNOI !
// ─────────────────────────────────────────────────────────────────────────
//
// 1. Crée 3 personnages :
//    - Conan le Guerrier
//    - Gandalf le Mage
//    - Legolas l'Archer
//
// 2. Crée une Arene
//
// 3. Fais combattre :
//    - Combat 1 : Conan VS Gandalf
//    - Le mage utilise son sort spécial !
//    - Combat 2 : Le gagnant VS Legolas
//
// 4. Affiche les statistiques :
//    - Total de personnages créés
//    - Le CHAMPION final




// ─────────────────────────────────────────────────────────────────────────
// ✅ BRAVO ! Tu as terminé le Projet 12
// ─────────────────────────────────────────────────────────────────────────
//
// Tu as appris :
// ✅ Assembler tous les concepts POO dans un projet réel
// ✅ Traits, héritage, polymorphisme, encapsulation, static
// ✅ Créer un mini-jeu de combat avec des classes bien structurées
//
// 🎯 Prochaine étape : Tu es prêt pour Symfony/Laravel !
//
?>
