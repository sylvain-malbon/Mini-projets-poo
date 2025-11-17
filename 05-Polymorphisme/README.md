# 🎸 Projet 05 : Le Polymorphisme

## 🎯 Objectif
Maîtriser le polymorphisme : même méthode, comportements différents !

## 📚 Concepts Abordés
- **Polymorphisme** (poly = plusieurs, morphisme = formes)
- **Override** (redéfinition de méthode)
- Utiliser l'héritage avec des comportements spécifiques
- Boucles sur des objets de types différents

## 💡 Analogie

Tous les **instruments de musique** peuvent jouer(), mais :
- Guitare → "GLING GLING 🎸"
- Piano → "PLONK PLONK 🎹"
- Batterie → "BOOM BOOM 🥁"

**Même action (jouer), résultats différents !**

## 🔑 Notions Techniques

### Méthode dans le parent

```php
class Instrument {
    protected $nom;

    public function jouer() {
        echo "$this->nom fait du bruit.\n";
    }
}
```

### Override dans l'enfant

```php
class Guitare extends Instrument {
    // REDÉFINITION (override) de la méthode
    public function jouer() {
        echo "$this->nom : GLING GLING 🎸\n";
    }
}

class Piano extends Instrument {
    public function jouer() {
        echo "$this->nom : PLONK PLONK 🎹\n";
    }
}
```

### Le Pouvoir du Polymorphisme

```php
$instruments = [
    new Guitare("Gibson"),
    new Piano("Yamaha"),
    new Batterie("Ludwig")
];

// UNE boucle, 3 comportements différents !
foreach ($instruments as $instrument) {
    $instrument->jouer();  // Polymorphisme en action
}
```

Résultat :
```
Gibson : GLING GLING 🎸
Yamaha : PLONK PLONK 🎹
Ludwig : BOOM BOOM 🥁
```

## 📝 Ce que tu dois faire

1. **Créer une classe Instrument** avec :
   - Propriété protected : nom
   - Constructeur
   - Méthode jouer() générique

2. **Créer 3 classes enfants** :
   - Guitare : override jouer() → "GLING GLING"
   - Piano : override jouer() → "PLONK PLONK"
   - Batterie : override jouer() → "BOOM BOOM"

3. **Créer un tableau** avec 3 instruments différents

4. **Boucle** : faire jouer tous les instruments

## 💭 Questions à se poser

- Qu'est-ce que le polymorphisme ?
- Comment PHP sait quelle méthode `jouer()` appeler ?
- Pourquoi c'est utile dans une boucle ?

## ⚠️ Erreurs Fréquentes

❌ Oublier `extends` → Pas de polymorphisme possible
❌ Ne pas mettre le même nom de méthode → Pas d'override
❌ Utiliser `private` dans le parent → Enfants ne peuvent pas override

## 🎓 Pour Aller Plus Loin

Essayez d'ajouter :
- Une méthode `accorder()` différente pour chaque instrument
- Une classe Violon avec son propre son
- Un compteur qui affiche "Concert terminé : X instruments ont joué"

## 🔍 Cas d'Usage Réel

Le polymorphisme est **PARTOUT** dans le code professionnel :

**Exemple : Paiements**
```php
class Paiement {
    public function payer($montant) { }
}

class CarteBancaire extends Paiement {
    public function payer($montant) {
        // Logique carte bancaire
    }
}

class PayPal extends Paiement {
    public function payer($montant) {
        // Logique PayPal
    }
}

// Dans votre application :
function traiterPaiement(Paiement $methode, $montant) {
    $methode->payer($montant);  // Polymorphisme !
}
```

Peu importe le type de paiement, la fonction fonctionne !

## 🎯 Avantage Clé

> **Code flexible et extensible**
> Ajoutez de nouveaux types sans modifier le code existant.

---

**Durée estimée :** 20 minutes
**Difficulté :** ⭐⭐ Intermédiaire
