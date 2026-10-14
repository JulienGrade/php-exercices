# 10 — Portefeuille de crédits

**Notions :** classe, constructeur promu, propriétés privées  
**Situation :** Un joueur possède des crédits virtuels.

## Consignes

Créez un objet `Wallet` avec propriétaire et solde privés. Ajoutez `credit`, `debit` et `balance`. Refusez les montants non positifs et le découvert avec `InvalidArgumentException`.

## Vérification

Après +50 et −20, le solde vaut 30 ; un débit de 31 échoue.

Depuis la racine du projet, lancez `php 10-portefeuille/index.php`.

## Pourquoi cette solution

Le solde reste privé ; toutes les modifications passent par des méthodes qui protègent ses invariants.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.
