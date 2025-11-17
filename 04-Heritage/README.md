# 🐕 Projet 04 : L'Héritage

## 🎯 Objectif
Découvrir l'héritage et la réutilisation de code avec `extends`.

## 📚 Concepts Abordés
- **Héritage** (extends)
- Classe **parent** et classe **enfant**
- `protected` : accessible dans les enfants
- `parent::__construct()` : appeler le constructeur parent
- Principe **DRY** (Don't Repeat Yourself)

## 💡 Analogie

La **génétique familiale** :
- Parent Animal → manger(), dormir() (commun à tous)
- Enfant Chien → hérite de manger() + ajoute aboyer()
- Enfant Chat → hérite de dormir() + ajoute miauler()

Pas besoin de réécrire manger() pour chaque animal ! 🧬

## 🔑 Notions Techniques

### Syntaxe de base

```php
// Classe PARENT (partagée)
class Animal {
    protected $nom;  // accessible dans les enfants

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function manger() {
        echo "$this->nom mange.\n";
    }
}

// Classe ENFANT (hérite)
class Chien extends Animal {
    public function aboyer() {
        echo "$this->nom : Wouf wouf !\n";
    }
}
```

### Utilisation

```php
$rex = new Chien("Rex");
$rex->manger();  // ✅ Hérité de Animal
$rex->aboyer();  // ✅ Propre à Chien
```

### Pourquoi `protected` ?

```php
class Animal {
    private $nom;    // ❌ Les enfants ne peuvent PAS y accéder
    protected $nom;  // ✅ Les enfants peuvent l'utiliser
    public $nom;     // ⚠️ Tout le monde peut y accéder
}
```

### Appeler le constructeur parent

```php
class Chien extends Animal {
    private $race;

    public function __construct($nom, $race) {
        parent::__construct($nom);  // Initialise $nom
        $this->race = $race;
    }
}
```

## 📝 Ce que tu dois faire

1. **Créer une classe Animal** avec :
   - Propriétés protected : nom, energie
   - Constructeur
   - Méthodes : manger(), dormir()

2. **Créer 2 classes enfants** :
   - Chien : ajoute aboyer()
   - Chat : ajoute miauler()

3. **Tester** les héritages

## 💭 Questions à se poser

- Qu'est-ce qui est hérité automatiquement ?
- Pourquoi utiliser `protected` plutôt que `private` ou `public` ?
- Que fait `parent::__construct()` ?

## ⚠️ Erreurs Fréquentes

❌ Oublier `extends` → Pas d'héritage !
❌ Utiliser `private` dans le parent → Enfants ne peuvent pas y accéder
❌ Ne pas appeler `parent::__construct()` → Propriétés non initialisées

## 🎓 Pour Aller Plus Loin

Essayez d'ajouter :
- Une classe Oiseau qui hérite d'Animal et ajoute voler()
- Une propriété `$age` dans Animal accessible à tous les enfants
- Une méthode `sePresenter()` qui utilise les propriétés héritées

## 🔍 Avantage de l'Héritage

**Sans héritage :**
```php
class Chien {
    public function manger() { /* ... */ }
    public function dormir() { /* ... */ }
    public function aboyer() { /* ... */ }
}

class Chat {
    public function manger() { /* ... */ }  // CODE DUPLIQUÉ !
    public function dormir() { /* ... */ }  // CODE DUPLIQUÉ !
    public function miauler() { /* ... */ }
}
```

**Avec héritage :**
```php
class Animal {
    public function manger() { /* ... */ }  // ✅ Écrit UNE fois
    public function dormir() { /* ... */ }  // ✅ Partagé
}

class Chien extends Animal {
    public function aboyer() { /* ... */ }  // ✅ Seulement le spécifique
}
```

## 🎯 Principe DRY

> **Don't Repeat Yourself**
> Ne pas dupliquer le code = Plus facile à maintenir !

---

**Durée estimée :** 20 minutes
**Difficulté :** ⭐⭐ Intermédiaire
