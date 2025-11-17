# 🚗 Projet 01 : Ma Première Classe

## 🎯 Objectif
Créer ta toute première classe PHP et comprendre les concepts fondamentaux de la POO.

## 📚 Concepts Abordés
- Qu'est-ce qu'une **classe** ?
- Qu'est-ce qu'un **objet** ?
- Les **propriétés** (variables de classe)
- Les **méthodes** (fonctions de classe)
- Le mot-clé `$this`

## 💡 Analogie
Une **classe** = Le plan de construction d'une voiture
Un **objet** = Une voiture fabriquée à partir de ce plan

Tu peux fabriquer 10 voitures différentes (objets) à partir du même plan (classe) !

## 🔑 Notions Techniques

### Structure de base d'une classe
```php
class NomDeLaClasse {
    // Propriétés (caractéristiques)
    public $propriete1;
    public $propriete2;

    // Méthodes (actions)
    public function nomMethode() {
        // Code ici
    }
}
```

### Créer un objet
```php
$monObjet = new NomDeLaClasse();
```

### Utiliser $this
`$this` représente **l'objet actuel**. Il permet d'accéder aux propriétés de l'objet depuis l'intérieur de la classe.

```php
$this->propriete1  // Accède à la propriété
```

## 📝 Ce que tu dois faire

1. **Créer une classe Voiture** avec :
   - Propriétés : marque, modèle, couleur, vitesse
   - Méthode pour accélérer
   - Méthode pour afficher les informations

2. **Créer 2 objets Voiture** différents

3. **Tester les méthodes** sur tes objets

## 💭 Questions à se poser

- Quelle est la différence entre une classe et un objet ?
- Pourquoi utilise-t-on `$this->` ?
- Comment créer plusieurs objets à partir d'une même classe ?

## ⚠️ Erreurs Fréquentes

❌ Oublier `$this->` pour accéder aux propriétés
❌ Utiliser `$` devant le nom de propriété après `$this->` (c'est `$this->vitesse` pas `$this->$vitesse`)
❌ Oublier le mot-clé `new` lors de la création d'un objet

## 🎓 Pour Aller Plus Loin

Essayez d'ajouter :
- Une méthode `freiner()` qui réduit la vitesse
- Une propriété `$km` qui compte les kilomètres parcourus
- Une méthode `rouler($distance)` qui augmente les km

---

**Durée estimée :** 15-20 minutes
**Difficulté :** ⭐ Débutant
