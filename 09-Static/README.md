# 📊 Projet 09 : Static & Self

## 🎯 Objectif
Comprendre les propriétés et méthodes statiques partagées par tous les objets.

## 📚 Concepts Abordés
- **Propriété static** (partagée par tous)
- **Méthode static** (appelable sans objet)
- `self::` pour accéder aux membres statiques
- `NomClasse::methode()` pour appel externe

## 💡 Analogie

Un **compteur d'usine** affiché au mur :
- Chaque voiture créée incrémente LE compteur
- Le compteur n'appartient à AUCUNE voiture spécifique
- Tout le monde voit LA MÊME valeur

**1 compteur pour TOUS, pas 1 compteur par objet.**

## 🔑 Notions Techniques

### Propriété Statique

```php
class Utilisateur {
    private static $compteur = 0;  // PARTAGÉ par tous
    private $nom;                   // INDIVIDUEL à chaque objet

    public function __construct($nom) {
        self::$compteur++;  // Incrémente LE compteur partagé
        $this->nom = $nom;  // Propriété individuelle
    }

    public static function getTotal() {
        return self::$compteur;
    }
}
```

### Utilisation

```php
$alice = new Utilisateur("Alice");
$bob = new Utilisateur("Bob");
$charlie = new Utilisateur("Charlie");

echo Utilisateur::getTotal();  // 3 (sans avoir d'objet !)
```

### Différence `self::` vs `$this->`

```php
class Exemple {
    private static $compteur = 0;  // STATIC
    private $nom;                   // INSTANCE

    public function test() {
        self::$compteur++;    // ✅ Accès static avec self::
        $this->nom = "Test";  // ✅ Accès instance avec $this->

        // ❌ $this->compteur  → ERREUR : compteur est static !
        // ❌ self::$nom       → ERREUR : nom n'est pas static !
    }
}
```

## 📝 Ce que tu dois faire

1. **Créer une classe Utilisateur** avec :
   - Propriété static private : $totalUtilisateurs
   - Propriétés normales : $nom, $email
   - Constructeur qui incrémente le compteur
   - Méthode static getTotal()

2. **Créer 5 utilisateurs** différents

3. **Afficher le total** d'utilisateurs créés

## 💭 Questions à se poser

- Quelle est la différence entre static et non-static ?
- Pourquoi utilise-t-on `self::` et pas `$this->` ?
- Peut-on appeler une méthode static sans créer d'objet ?

## ⚠️ Erreurs Fréquentes

❌ Utiliser `$this->` pour accéder à une propriété static
❌ Oublier `::` entre la classe et la méthode static
❌ Confondre `self::` (static) et `$this->` (instance)

```php
// ❌ FAUX
public function __construct() {
    $this->compteur++;  // compteur est static !
}

// ✅ CORRECT
public function __construct() {
    self::$compteur++;  // Accès avec self::
}
```

## 🎓 Pour Aller Plus Loin

Essayez d'ajouter :
- Une méthode static `reset()` qui remet le compteur à 0
- Un tableau static stockant TOUS les noms d'utilisateurs
- Une méthode static `afficherTous()` qui liste les utilisateurs

## 🔍 Cas d'Usage Réels

### 1. Configuration Globale

```php
class Config {
    private static $dbHost = "localhost";
    private static $dbName = "ma_base";

    public static function getDbHost() {
        return self::$dbHost;
    }
}

// Utilisation sans objet
echo Config::getDbHost();
```

### 2. Factory Pattern

```php
class Utilisateur {
    public static function creerAdmin($nom) {
        $user = new self();
        $user->nom = $nom;
        $user->role = "admin";
        return $user;
    }

    public static function creerGuest() {
        $user = new self();
        $user->role = "guest";
        return $user;
    }
}

$admin = Utilisateur::creerAdmin("Alice");
$guest = Utilisateur::creerGuest();
```

### 3. Singleton Pattern

```php
class Database {
    private static $instance = null;

    private function __construct() {
        // Constructeur privé : empêche new Database()
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$db1 = Database::getInstance();
$db2 = Database::getInstance();
// $db1 === $db2 (même instance !)
```

## 🆚 Static vs Instance

| Critère | Static | Instance |
|---------|--------|----------|
| Propriétaire | La CLASSE | Chaque OBJET |
| Accès | `self::$var` | `$this->var` |
| Appel externe | `Classe::methode()` | `$objet->methode()` |
| Mémoire | 1 seule valeur | 1 valeur par objet |
| Utilisation | Config, compteurs, factories | Données individuelles |

## 🎯 Règle d'Or

> **Static = Partagé par tous**
> **Instance = Individuel à chaque objet**

Exemple :
```php
class Voiture {
    private static $totalVoitures = 0;  // ✅ Compteur global
    private $couleur;                    // ✅ Chaque voiture a SA couleur
}
```

## 🚨 Attention

Les propriétés static sont **dangereuses** dans certains cas :
- Difficiles à tester (état partagé global)
- Peuvent créer des effets de bord
- À utiliser avec parcimonie !

**Conseil :** N'utilise static que quand c'est vraiment nécessaire (compteurs, config, factories).

---

**Durée estimée :** 20 minutes
**Difficulté :** ⭐⭐⭐ Avancé
