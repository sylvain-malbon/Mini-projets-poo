# 🔒 Projet 03 : Public vs Private

## 🎯 Objectif
Comprendre l'encapsulation et protéger tes données avec `private` et `protected`.

## 📚 Concepts Abordés
- Visibilité : `public`, `private`, `protected`
- **Encapsulation** (principe fondamental de la POO)
- **Getters** et **Setters**
- Contrôle d'accès aux données

## 💡 Analogie

Ton **compte bancaire** :
- `public $solde` → N'importe qui peut écrire `$compte->solde = 999999` et devenir riche ! 💸
- `private $solde` → Coffre-fort sécurisé 🔐
- Méthodes publiques → Guichets bancaires avec contrôles

## 🔑 Notions Techniques

### Les 3 niveaux de visibilité

```php
class MaClasse {
    public $accessible;      // ✅ Accessible partout
    private $protege;        // 🔒 Uniquement dans cette classe
    protected $herite;       // 👨‍👩‍👧 Dans cette classe + enfants
}
```

### Getters et Setters

```php
class CompteBancaire {
    private $solde;  // Protégé !

    // Getter : Lire la valeur
    public function getSolde() {
        return $this->solde;
    }

    // Setter : Modifier avec contrôle
    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }
}
```

### Pourquoi encapsuler ?

**Sans encapsulation :**
```php
$compte->solde = -5000;  // 😱 Solde négatif illimité !
$compte->solde = "pizza"; // 🤦 Un texte dans le solde !
```

**Avec encapsulation :**
```php
$compte->retirer(5000);  // ❌ Refusé si solde insuffisant
// Contrôle total sur les modifications !
```

## 📝 Ce que tu dois faire

1. **Créer une classe Portefeuille** avec :
   - Propriété PRIVATE : argent
   - Constructeur
   - Méthodes publiques : ajouter(), retirer(), afficherSolde()
   - **INTERDIRE** les retraits si solde insuffisant

2. **Tester** en essayant d'accéder directement à `$argent`

## 💭 Questions à se poser

- Que se passe-t-il si j'essaie d'accéder à une propriété `private` depuis l'extérieur ?
- Pourquoi mettre des contrôles dans les méthodes ?
- Quand utiliser `public` vs `private` ?

## ⚠️ Erreurs Fréquentes

❌ Oublier de mettre `private` sur les données sensibles
❌ Créer un getter ET setter pour TOUT (parfois, on veut juste lire !)
❌ Ne pas faire de vérifications dans les setters

## 🎓 Pour Aller Plus Loin

Essayez d'ajouter :
- Une limite de retrait journalier (ex: max 500€)
- Un historique des transactions (tableau private)
- Une méthode `getHistorique()` pour afficher les opérations

## 🔍 Règle d'Or

> **TOUJOURS** mettre les propriétés en `private` (ou `protected`).
> Créer des méthodes publiques pour interagir avec elles.

Cela s'appelle l'**ENCAPSULATION** : cacher les détails internes, exposer seulement ce qui est nécessaire.

## 🎯 Principe SOLID

Tu viens d'appliquer le principe **"Information Hiding"** :
- Protéger les données
- Contrôler les modifications
- Éviter les bugs externes

---

**Durée estimée :** 20 minutes
**Difficulté :** ⭐⭐ Intermédiaire
