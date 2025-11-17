# 📁 Projet 10 : Namespaces

## 🎯 Objectif
Organiser son code avec les namespaces et éviter les conflits de noms.

## 📚 Concepts Abordés
- **Namespace** (espace de noms)
- `namespace` pour déclarer
- `use` pour importer
- Chemins absolus avec `\`
- Organisation logique du code

## 💡 Analogie

Les **dossiers sur ton ordinateur** :
```
Documents/
├── Perso/
│   └── CV.pdf
└── Travail/
    └── CV.pdf
```

Même nom (`CV.pdf`), mais pas de conflit grâce aux dossiers !

**Namespace = Dossier virtuel pour tes classes**

## 🔑 Notions Techniques

### Déclaration

```php
<?php
// Fichier : App/Models/Utilisateur.php
namespace App\Models;

class Utilisateur {
    // Code...
}
```

```php
<?php
// Fichier : App/Controllers/Utilisateur.php
namespace App\Controllers;

class Utilisateur {
    // Code...
}
```

Deux classes `Utilisateur` différentes, pas de conflit ! ✅

### Utilisation

#### 1. Chemin Absolu

```php
$user = new \App\Models\Utilisateur();
$controller = new \App\Controllers\Utilisateur();
```

#### 2. Import avec `use`

```php
use App\Models\Utilisateur;
use App\Controllers\Utilisateur as UtilisateurController;

$user = new Utilisateur();                    // App\Models\Utilisateur
$controller = new UtilisateurController();    // App\Controllers\Utilisateur
```

### Alias avec `as`

```php
use App\Models\Utilisateur as User;
use App\Services\PaymentService as Payment;

$user = new User();          // Plus court !
$payment = new Payment();    // Plus lisible !
```

## 📝 Ce que tu dois faire

1. **Créer 3 namespaces** :
   - `App\Models` → Utilisateur
   - `App\Controllers` → Utilisateur (homonyme !)
   - `App\Services` → EmailService

2. **Utiliser les classes** :
   - Créer un objet de chaque namespace
   - Utiliser `use` pour simplifier

3. **Tester** : afficher que les classes sont différentes

## 💭 Questions à se poser

- Pourquoi utiliser des namespaces ?
- Quelle est la différence entre `use` et `namespace` ?
- Comment éviter les conflits de noms ?

## ⚠️ Erreurs Fréquentes

❌ Oublier le `\` au début du chemin absolu
❌ Déclarer le namespace APRÈS du code PHP
❌ Confondre `use` (import) et `use` (trait)

```php
// ❌ FAUX
<?php
echo "Hello";
namespace App\Models;  // Trop tard !

// ✅ CORRECT
<?php
namespace App\Models;  // TOUJOURS en premier
```

## 🎓 Pour Aller Plus Loin

Essayez d'ajouter :
- Un namespace `App\Helpers` avec une classe StringHelper
- Un namespace `App\Database` avec une classe Connection
- Utiliser TOUS les namespaces dans un fichier test

## 🔍 Convention PSR-4

**PSR-4** = Standard d'organisation des fichiers PHP

```
Structure recommandée :
src/
├── App/
│   ├── Models/
│   │   └── Utilisateur.php  → namespace App\Models;
│   ├── Controllers/
│   │   └── UserController.php  → namespace App\Controllers;
│   └── Services/
│       └── EmailService.php  → namespace App\Services;
```

**Règle :** Le chemin du fichier = Le namespace

## 🆚 Avant vs Après Namespaces

### Sans Namespace (le chaos !)

```php
class Utilisateur { }
class UtilisateurController { }
class UtilisateurModel { }
class UtilisateurService { }
// Noms très longs et peu clairs
```

### Avec Namespace (organisé !)

```php
namespace App\Models;
class Utilisateur { }

namespace App\Controllers;
class Utilisateur { }

namespace App\Services;
class Utilisateur { }
// Noms courts, organisation claire
```

## 🌍 Exemples Réels

### Laravel

```php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/users', [UserController::class, 'index']);
```

### Symfony

```php
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Product;
use App\Repository\ProductRepository;

class ProductController {
    // Code...
}
```

## 🎯 Avantages

✅ **Organisation** : Code structuré logiquement
✅ **Pas de conflits** : Plusieurs classes avec le même nom
✅ **Lisibilité** : On sait d'où vient chaque classe
✅ **Autoload** : Compatible avec Composer (prochain projet !)

## 📚 Règles à Retenir

1. `namespace` se déclare **en premier** (après `<?php`)
2. `use` pour **importer** des classes d'autres namespaces
3. `\` au début = chemin **absolu** depuis la racine
4. `as` pour créer un **alias**

```php
<?php
namespace App\Models;  // 1. Déclarer le namespace

use App\Services\EmailService;  // 2. Importer

class Utilisateur {
    public function notify() {
        $email = new EmailService();  // 3. Utiliser
    }
}
```

## 🚀 Prochaine Étape

Au prochain projet, tu verras **l'autoload** avec Composer :
- Plus besoin de `require` manuel
- Chargement automatique des classes
- Standard PSR-4

---

**Durée estimée :** 20 minutes
**Difficulté :** ⭐⭐⭐ Avancé
