# 📐 Projet 06 : Classes Abstraites

## 🎯 Objectif
Comprendre les classes abstraites et les contrats obligatoires.

## 📚 Concepts Abordés
- Classe **abstraite** (`abstract class`)
- Méthode **abstraite** (sans implémentation)
- Contrats obligatoires pour les enfants
- Différence entre classe normale et abstraite

## 💡 Analogie

Un **plan de maison avec un trou** :
- "Je sais qu'une forme a une **aire**, mais je ne sais PAS comment la calculer"
- "Toi qui hérites (Cercle, Rectangle), tu DOIS me dire comment !"

**Une classe abstraite = Un modèle incomplet qui FORCE les enfants à compléter.**

## 🔑 Notions Techniques

### Classe Abstraite

```php
abstract class Forme {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    // Méthode ABSTRAITE : pas de code, juste la signature
    abstract public function calculerAire();

    // Méthode NORMALE : peut avoir du code
    public function afficher() {
        echo "Forme : $this->nom\n";
    }
}
```

### Règles Importantes

1. ❌ **On NE PEUT PAS** faire `new Forme()` (erreur !)
2. ✅ Les enfants **DOIVENT** implémenter les méthodes abstraites
3. ✅ Une classe abstraite peut avoir des méthodes normales ET abstraites

### Classe Enfant (obligée de compléter)

```php
class Cercle extends Forme {
    private $rayon;

    public function __construct($rayon) {
        parent::__construct("Cercle");
        $this->rayon = $rayon;
    }

    // OBLIGATION d'implémenter calculerAire()
    public function calculerAire() {
        return 3.14 * $this->rayon * $this->rayon;
    }
}
```

### Utilisation

```php
// $forme = new Forme("Test");  // ❌ ERREUR : classe abstraite !

$cercle = new Cercle(5);        // ✅ OK
echo $cercle->calculerAire();   // ✅ Fonctionne
```

## 📝 Ce que tu dois faire

1. **Créer une classe ABSTRAITE Forme** avec :
   - Propriété protected : nom
   - Constructeur
   - Méthode abstraite : calculerAire()
   - Méthode normale : afficher()

2. **Créer 2 classes enfants** :
   - Cercle (rayon)
   - Rectangle (largeur, hauteur)
   - Chacune implémente calculerAire()

3. **Tester** : créer des formes et calculer leurs aires

## 💭 Questions à se poser

- Pourquoi ne peut-on pas instancier une classe abstraite ?
- Quelle est la différence entre une méthode abstraite et normale ?
- Que se passe-t-il si un enfant n'implémente pas la méthode abstraite ?

## ⚠️ Erreurs Fréquentes

❌ Essayer de faire `new` sur une classe abstraite
❌ Oublier d'implémenter la méthode abstraite dans l'enfant
❌ Mettre du code dans une méthode abstraite (pas de `{}` !)

```php
// ❌ FAUX
abstract public function calculer() {
    return 0;  // Pas de code dans une méthode abstraite !
}

// ✅ CORRECT
abstract public function calculer();  // Juste la signature
```

## 🎓 Pour Aller Plus Loin

Essayez d'ajouter :
- Une classe Triangle (base, hauteur)
- Une méthode abstraite `calculerPerimetre()`
- Un tableau de formes avec calcul de l'aire totale

## 🔍 Quand Utiliser une Classe Abstraite ?

**Utilise une classe abstraite quand :**
- Tu as du code **commun** à partager (méthodes normales)
- Tu veux **forcer** les enfants à implémenter certaines méthodes
- Tu as une hiérarchie logique (Forme → Cercle/Rectangle)

**Exemple réel : Jeu vidéo**
```php
abstract class Personnage {
    protected $vie;
    protected $nom;

    // Commun à tous
    public function recevoirDegats($degats) {
        $this->vie -= $degats;
    }

    // Chaque personnage attaque différemment
    abstract public function attaquer($cible);
}

class Guerrier extends Personnage {
    public function attaquer($cible) {
        // Attaque au corps à corps
    }
}

class Mage extends Personnage {
    public function attaquer($cible) {
        // Attaque magique
    }
}
```

## 🎯 Différence avec Interface

| Classe Abstraite | Interface |
|-----------------|-----------|
| Peut avoir des méthodes avec code | Que des signatures |
| Héritage simple (extends) | Implémentation multiple (implements) |
| Partage du code + contrats | Uniquement des contrats |

Tu verras les interfaces au prochain projet ! 🚀

---

**Durée estimée :** 20 minutes
**Difficulté :** ⭐⭐⭐ Avancé
