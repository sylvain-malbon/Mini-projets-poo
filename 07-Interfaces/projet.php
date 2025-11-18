<?php
/**
 * 💳 PROJET 07 : INTERFACES
 * Concept : Interfaces (contrat 100% strict, 0% de code)
 *
 * 📖 Lis le README.md avant de commencer !
 */

// ─────────────────────────────────────────────────────────────────────────
// TODO 1 : Créer l'interface PaymentInterface
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une INTERFACE 'PaymentInterface' avec :
// - Méthode payer($montant) (juste la signature)
// - Méthode rembourser($montant) (juste la signature)
//
// Indice :
// interface PaymentInterface {
//     public function payer($montant);
//     public function rembourser($montant);
// }




// ─────────────────────────────────────────────────────────────────────────
// TODO 2 : Créer la classe CarteBancaire
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'CarteBancaire' qui IMPLÉMENTE PaymentInterface :
// - Mot-clé 'implements'
// - Propriété private $numero
// - Constructeur
// - Implémenter payer() : "💳 Paiement de X€ par carte ****[4 derniers chiffres]"
// - Implémenter rembourser() : "💳 Remboursement de X€ sur la carte"




// ─────────────────────────────────────────────────────────────────────────
// TODO 3 : Créer les classes PayPal et Crypto
// ─────────────────────────────────────────────────────────────────────────
//
// PayPal (implémente PaymentInterface) :
// - Propriété private $email
// - payer() : "🅿️  Paiement PayPal de X€ via [email]"
// - rembourser() : "🅿️  Remboursement PayPal de X€"
//
// Crypto (implémente PaymentInterface) :
// - Propriété private $wallet
// - payer() : "₿ Paiement crypto de X€ depuis wallet [8 premiers caractères]..."
// - rembourser() : "₿ Remboursement crypto de X€"




// ─────────────────────────────────────────────────────────────────────────
// TODO 4 : Créer une fonction qui accepte N'IMPORTE QUEL paiement
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une fonction traiterPaiement() qui :
// - Prend en paramètre PaymentInterface $methode et $montant
// - Affiche "🛒 COMMANDE : X€"
// - Appelle $methode->payer($montant)
// - Affiche "✅ Paiement validé !"
//
// Indice :
// function traiterPaiement(PaymentInterface $methode, $montant) { ... }




// ─────────────────────────────────────────────────────────────────────────
// TODO 5 : Tester avec les 3 méthodes de paiement
// ─────────────────────────────────────────────────────────────────────────
//
// Crée :
// - Une carte bancaire "1234567812345678"
// - Un PayPal "jean@email.com"
// - Un wallet crypto "1A2B3C4D5E6F7G8H9I"
//
// Appelle traiterPaiement() avec chacun




// ─────────────────────────────────────────────────────────────────────────
// ✅ BRAVO ! Tu as terminé le Projet 07
// ─────────────────────────────────────────────────────────────────────────
//
// Tu as appris :
// ✅ Les interfaces : contrat pur sans code (100% abstrait)
// ✅ Le mot-clé implements pour respecter un contrat
// ✅ L'interchangeabilité : accepter différentes implémentations
//
// 🎯 Prochaine étape : Projet 08 - Traits (réutilisation horizontale)
//
?>

<?php
interface PaymentInterface {
public function payer($montant);
public function rembourser($montant);
}

// 

class CarteBancaire implements PaymentInterface {
private $numero;
public function __construct($numero) {
    $this->numero = $numero;
}

public function payer($montant) { 
    echo "💳 Paiement de {$montant}€ par carte ****" . substr($this->numero, -4) . "\n";
}

public function rembourser($montant) {
    echo "💳 Remboursement de {$montant}€ sur la carte\n";
}
}

//

class PayPal implements PaymentInterface {
private $email;

public function __construct($email) {
    $this->email = $email;
}

public function payer($montant) {
    echo  "🅿️  Paiement PayPal de {$montant}€ via {$this->email}\n";
}

public function rembourser($montant) {
    echo "🅿️  Remboursement PayPal de {$montant}€\n";
}
}

//

class Crypto implements PaymentInterface {
 private $wallet;

 public function __construct($wallet) {
    $this->wallet = $wallet;
}

public function payer($montant) {
    echo "₿ Paiement crypto de {$montant}€ depuis wallet" . substr($this->wallet, 0, 8) . "...\n";
}

public function rembourser($montant) {
    echo "₿ Remboursement crypto de {$montant}€\n";
}
}

function traiterPaiement(PaymentInterface $methode, $montant) {
echo "🛒 COMMANDE : {$montant}€\n";
$methode->payer($montant);
echo "✅ Paiement validé !\n";
}

$cartebancaire1 = new CarteBancaire(1234567812345678);
$paypaljean = new Paypal("jean@email.com");
$wallet1 = new Crypto("1A2B3C4D5E6F7G8H9I");

traiterPaiement($cartebancaire1, 1);
traiterPaiement($paypaljean, 5);
traiterPaiement($wallet1, 10);