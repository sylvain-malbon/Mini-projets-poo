# 🏗️ Projet 02 : Le Constructeur

## 🎯 Objectif
Découvrir le constructeur et comprendre comment initialiser automatiquement un objet.

## 📚 Concepts Abordés
- Le constructeur `__construct()`
- Initialisation automatique des propriétés
- Passage de paramètres au constructeur

## 💡 Analogie
**Sans constructeur** : Acheter une voiture, puis remplir le réservoir, puis régler les sièges, puis...
**Avec constructeur** : Tout est prêt dès la sortie du concessionnaire ! 🚗

## 🔑 Notions Techniques

### Le Constructeur
```php
class MaClasse {
    public $propriete;

    // Constructeur avec 2 underscores
    public function __construct($param) {
        $this->propriete = $param;
    }
}
```

### Utilisation
```php
// Le constructeur est appelé automatiquement
$objet = new MaClasse("valeur");
```

### Pourquoi utiliser un constructeur ?

**Avant (sans constructeur) :**
```php
$compte = new CompteBancaire();
$compte->titulaire = "Alice";
$compte->solde = 1000;
// 3 lignes pour initialiser !
```

**Après (avec constructeur) :**
```php
$compte = new CompteBancaire("Alice", 1000);
// 1 seule ligne, tout est initialisé !
```

## 📝 Ce que tu dois faire

1. **Créer une classe CompteBancaire** avec :
   - Propriétés : titulaire, solde
   - Constructeur qui initialise ces propriétés
   - Méthodes : deposer(), retirer(), afficherSolde()

2. **Créer 2 comptes** différents avec le constructeur

3. **Tester les opérations** bancaires

## 💭 Questions à se poser

- Pourquoi le constructeur s'appelle-t-il `__construct()` ?
- Combien de fois le constructeur est-il appelé pour un objet ?
- Peut-on créer un objet sans constructeur ?

## ⚠️ Erreurs Fréquentes

❌ Écrire `construct()` au lieu de `__construct()` (2 underscores !)
❌ Oublier de passer les paramètres lors de la création : `new CompteBancaire()` → ERREUR
❌ Ne pas utiliser `$this->` dans le constructeur

## 🎓 Pour Aller Plus Loin

Essayez d'ajouter :
- Un paramètre optionnel avec valeur par défaut : `__construct($titulaire, $solde = 0)`
- Une vérification : interdire un solde initial négatif
- Un message de bienvenue affiché à la création du compte

## 🔍 Astuce Pro

Le constructeur est **toujours** appelé en premier quand vous créez un objet. C'est l'endroit idéal pour :
- Initialiser les propriétés
- Effectuer des vérifications
- Préparer l'objet avant utilisation

---

**Durée estimée :** 15-20 minutes
**Difficulté :** ⭐ Débutant
