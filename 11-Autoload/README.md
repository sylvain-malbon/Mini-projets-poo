# ⚡ Projet 11 : Autoload avec Composer

## 🎯 Objectif
Comprendre l'autoload et le chargement automatique des classes (théorique).

## 📚 Concepts Abordés
- **Autoload** (chargement automatique)
- **Composer** (gestionnaire de dépendances PHP)
- **PSR-4** (standard d'autoload)
- Organisation professionnelle du code

## 💡 Analogie

**Sans autoload** : Chercher manuellement chaque outil dans le garage
**Avec autoload** : Robot qui t'apporte l'outil dès que tu le nommes ! 🤖

## 🔑 Concept Théorique

### Le Problème (sans autoload)

```php
// main.php
require_once 'App/Models/Utilisateur.php';
require_once 'App/Models/Produit.php';
require_once 'App/Controllers/UserController.php';
require_once 'App/Services/EmailService.php';
require_once 'App/Helpers/StringHelper.php';
// ... 100 require_once plus tard ... 😱
```

### La Solution (avec autoload)

```php
// main.php
require_once 'vendor/autoload.php';  // UNE ligne magique !

use App\Models\Utilisateur;
use App\Services\EmailService;

$user = new Utilisateur();     // ✅ Chargé automatiquement
$email = new EmailService();   // ✅ Chargé automatiquement
```

## 🛠️ Comment ça Marche ?

### 1. Configuration Composer

**Fichier `composer.json` :**
```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

**Signification :**
- Classes avec namespace `App\...` → Chercher dans `src/`
- `App\Models\Utilisateur` → Fichier `src/Models/Utilisateur.php`

### 2. Génération de l'Autoload

```bash
composer dump-autoload
```

Composer génère automatiquement le fichier `vendor/autoload.php`

### 3. Utilisation

```php
<?php
require_once 'vendor/autoload.php';

// Maintenant, toutes les classes sont disponibles automatiquement !
$user = new App\Models\Utilisateur();
```

## 📂 Structure PSR-4

```
mon-projet/
├── vendor/              # Dossier Composer (généré)
│   └── autoload.php    # ⭐ Fichier magique
├── src/                 # Code source
│   └── App/
│       ├── Models/
│       │   └── Utilisateur.php      → namespace App\Models;
│       ├── Controllers/
│       │   └── UserController.php   → namespace App\Controllers;
│       └── Services/
│           └── EmailService.php     → namespace App\Services;
├── composer.json        # Configuration Composer
└── index.php            # Point d'entrée
```

## 📝 Exercice Théorique

**Question 1 :**
Avec cette configuration PSR-4 :
```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

Où se trouve la classe `App\Models\Produit` ?

<details>
<summary>Réponse</summary>
Fichier : `src/Models/Produit.php`
</details>

**Question 2 :**
Combien de `require` faut-il écrire pour utiliser 50 classes avec autoload ?

<details>
<summary>Réponse</summary>
1 seul : `require_once 'vendor/autoload.php';`
</details>

## 💭 Questions à se poser

- Pourquoi l'autoload est-il important ?
- Quelle est la différence entre PSR-0 et PSR-4 ?
- Comment Composer sait où trouver les classes ?

## 🆚 Avant vs Après

### Sans Autoload

```php
require_once 'classes/Database.php';
require_once 'classes/User.php';
require_once 'classes/Product.php';
require_once 'helpers/StringHelper.php';
require_once 'controllers/UserController.php';
// ... ad nauseam ...

$user = new User();
```

❌ **Problèmes :**
- Code verbeux
- Difficile à maintenir
- Risque d'oublier un require
- Chargement de fichiers inutiles

### Avec Autoload

```php
require_once 'vendor/autoload.php';

use App\Models\User;

$user = new User();  // ✅ Chargé automatiquement uniquement si nécessaire
```

✅ **Avantages :**
- Propre et lisible
- Pas d'oubli possible
- Chargement à la demande (lazy loading)
- Standard professionnel

## 🌍 Dans le Monde Réel

**TOUS les frameworks modernes utilisent Composer + PSR-4 :**

### Laravel

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }
    }
}
```

### Symfony

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

## 🔧 Commandes Composer Utiles

```bash
# Installer les dépendances
composer install

# Mettre à jour les dépendances
composer update

# Régénérer l'autoload
composer dump-autoload

# Optimiser l'autoload pour la production
composer dump-autoload --optimize
```

## 🎯 Standards PSR

**PSR-4** fait partie des **PHP Standard Recommendations** :

- **PSR-1** : Style de code de base
- **PSR-2** : Guide de style de code (obsolète, remplacé par PSR-12)
- **PSR-4** : Autoload
- **PSR-7** : HTTP Message
- **PSR-12** : Style de code étendu

## 📚 Ce qu'il Faut Retenir

1. **Autoload** = Chargement automatique des classes
2. **Composer** = Outil qui génère l'autoload
3. **PSR-4** = Standard qui lie namespace → chemin fichier
4. **1 seul require** : `vendor/autoload.php`

## 🚀 Exercice Pratique (Optionnel)

Si tu as Composer installé :

1. Créer un fichier `composer.json`
2. Configurer PSR-4
3. Créer une classe dans le bon dossier
4. Générer l'autoload : `composer dump-autoload`
5. Tester dans `index.php`

**Tu viens de créer un projet professionnel ! 🎉**

## ⚠️ Note Importante

Ce projet est **théorique** car :
- Composer nécessite une installation
- L'objectif est de **comprendre le concept**
- Tu utiliseras l'autoload dans Laravel/Symfony demain

**Pas de panique, c'est normal de ne pas tout pratiquer ici !**

---

**Durée estimée :** 20 minutes
**Difficulté :** ⭐⭐⭐ Avancé (Théorique)

## 🎓 Pour Aller Plus Loin

- Documentation Composer : https://getcomposer.org/
- PSR-4 Spec : https://www.php-fig.org/psr/psr-4/
- Installation Composer : https://getcomposer.org/download/
