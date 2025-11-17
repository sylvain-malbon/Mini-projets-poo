# 🎮 Projet 12 : Jeu RPG - Combat d'Arène

## 🎯 Objectif Final
Créer un mini jeu de combat RPG qui utilise **TOUS** les concepts POO appris !

## 📚 Tous les Concepts Utilisés

✅ **Classes & Objets** (Projet 01)
✅ **Constructeur** (Projet 02)
✅ **Encapsulation** (Projet 03) - private/protected/public
✅ **Héritage** (Projet 04) - extends
✅ **Polymorphisme** (Projet 05) - méthodes redéfinies
✅ **Classe Abstraite** (Projet 06) - abstract
✅ **Traits** (Projet 08) - use
✅ **Static** (Projet 09) - compteur global

## 💡 Le Concept du Jeu

Tu vas créer un système de combat de type **League of Legends / World of Warcraft** :

- 3 types de personnages : **Guerrier**, **Mage**, **Archer**
- Chaque personnage a ses propres stats (vie, attaque)
- Les personnages combattent dans une **Arène**
- Le dernier debout gagne ! 🏆

## 🏗️ Architecture à Créer

### 1. Trait Attaquant
Compétence partagée par tous les personnages.

**Indices :**
- Méthode `attaquer($cible)`
- Utilise `$this->attaque` pour les dégâts
- Appelle `$cible->recevoirDegats()`

### 2. Classe Abstraite Personnage
Le "moule" de tous les personnages.

**Propriétés :**
- `static $totalPersonnages` : compteur global
- `protected $nom, $vie, $attaque` : stats du personnage
- `private $estVivant` : état du personnage

**Méthodes :**
- Constructeur : initialise et incrémente le compteur
- `recevoirDegats($degats)` : gère les dégâts et le KO
- `getEstVivant()` : retourne si le personnage est vivant
- `abstract crier()` : chaque classe doit l'implémenter

### 3. Classes de Personnages

#### Guerrier 🗡️
- Vie : 100
- Attaque : 20
- Cri : "POUR L'HONNEUR !"

#### Mage 🔮
- Vie : 70
- Attaque : 35
- Cri : "PAR LA MAGIE !"
- **Bonus** : Sort spécial (50 dégâts)

#### Archer 🏹
- Vie : 80
- Attaque : 25
- Cri : "TIR MORTEL !"

### 4. Classe Arene
Gère les combats.

**Méthode `combat($perso1, $perso2)` :**
- Affiche le titre du combat
- Les deux personnages crient
- Combat tour par tour jusqu'à KO
- Retourne le gagnant

## 📝 Ce que Tu Dois Faire

### TODO 1 : Trait Attaquant
Crée le trait qui permet d'attaquer.

### TODO 2 : Classe Abstraite Personnage
Crée la classe de base avec :
- Compteur static
- Propriétés protected/private
- Méthodes communes
- Méthode abstraite `crier()`

### TODO 3-5 : Classes Guerrier, Mage, Archer
Crée les 3 types de personnages :
- Héritent de Personnage
- Utilisent le trait Attaquant
- Stats différentes
- Implémentent `crier()`

### TODO 6 : Classe Arene
Crée le système de combat :
- Méthode `combat($perso1, $perso2)`
- Boucle de combat tour par tour
- Retourne le gagnant

### TODO 7 : Le Grand Tournoi
Orchestre le tournoi :
1. Créer Conan (Guerrier), Gandalf (Mage), Legolas (Archer)
2. Combat 1 : Conan VS Gandalf
3. Le Mage utilise son sort spécial
4. Combat 2 : Gagnant VS Legolas
5. Afficher les statistiques finales

## 💭 Questions à se Poser

**Encapsulation :**
- Pourquoi `$nom` est protected et pas public ?
- Pourquoi `$estVivant` est private ?

**Héritage :**
- Que partagent Guerrier, Mage et Archer ?
- Pourquoi utiliser une classe abstraite ?

**Polymorphisme :**
- Comment `crier()` peut-il avoir des résultats différents ?

**Trait :**
- Pourquoi mettre `attaquer()` dans un trait ?

**Static :**
- Comment compter TOUS les personnages créés ?

## ⚠️ Pièges à Éviter

❌ Oublier `use Attaquant` dans les classes de personnages
❌ Ne pas appeler `parent::__construct()` dans les enfants
❌ Accéder à une propriété protected depuis l'extérieur
❌ Oublier d'incrémenter `$totalPersonnages`
❌ Ne pas vérifier si le personnage est vivant avant d'attaquer

## 🎓 Pour Aller Plus Loin

Si tu finis en avance :

- Ajouter une classe **Voleur** (Vie: 60, Attaque: 15, Esquive: 30%)
- Système d'**esquive** : chance d'éviter les dégâts
- **Potions** : regagner de la vie
- **Critique** : double dégâts aléatoire
- **Arène avec spectateurs** : compteur de tours

## 🔍 Ce que Tu Apprends

Ce projet simule un **vrai jeu vidéo** :
- League of Legends → Classes de champions
- World of Warcraft → Classes de personnages
- Pokemon → Types avec stats différentes
- Fire Emblem → Système de combat au tour par tour

**C'est EXACTEMENT comme ça que les jeux sont codés !**

## 🎯 Résultat Attendu

Quand tu exécutes le code, tu devrais voir :

```
═══════════════════════════════════════════════
🎮 JEU RPG - COMBAT D'ARÈNE
═══════════════════════════════════════════════

🏟️  BIENVENUE AU GRAND TOURNOI !

✨ Conan entre dans l'arène ! (Vie: 100, Attaque: 20)
✨ Gandalf entre dans l'arène ! (Vie: 70, Attaque: 35)
✨ Legolas entre dans l'arène ! (Vie: 80, Attaque: 25)

⚔️  COMBAT : Conan VS Gandalf
🗡️  Conan : POUR L'HONNEUR !
🔮 Gandalf : PAR LA MAGIE !

--- Tour 1 ---
⚔️  Conan attaque Gandalf et inflige 20 dégâts !
💔 Gandalf a 50 PV restants
⚔️  Gandalf attaque Conan et inflige 35 dégâts !
💔 Conan a 65 PV restants

...

🏆 VICTOIRE DE [GAGNANT] !
```

## 🚀 Validation des Compétences

En complétant ce projet, tu prouves que tu maîtrises :

✅ **POO Fondamentaux** : Classes, objets, constructeur
✅ **Encapsulation** : Protéger les données
✅ **Héritage** : Réutiliser du code
✅ **Polymorphisme** : Comportements différents
✅ **Abstraction** : Forcer l'implémentation
✅ **Traits** : Compétences réutilisables
✅ **Static** : Données partagées

**TU ES PRÊT POUR SYMFONY / LARAVEL ! 🎓**

---

**Durée estimée :** 30-40 minutes
**Difficulté :** ⭐⭐⭐⭐ Projet Final

## 🎊 Félicitations !

Si tu réussis ce projet, tu as officiellement maîtrisé les bases de la POO en PHP !

**Prochaine étape :** Frameworks professionnels (Laravel, Symfony) 🚀
