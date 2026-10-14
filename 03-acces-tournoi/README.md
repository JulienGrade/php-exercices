# 03 — Accès au tournoi

**Notions :** conditions, opérateurs, comparaison stricte  
**Situation :** Une inscription dépend de l’âge, du billet et d’un éventuel bannissement.

## Consignes

Autorisez un joueur de 16 ans ou plus uniquement s’il a un billet et n’est pas banni. Retournez un message distinct pour mineur, billet absent et bannissement. Gardez `===` pour les comparaisons de valeurs de même nature.

## Vérification

Avec 17 ans, billet présent et non banni : accès autorisé ; si banni : accès refusé.

Depuis la racine du projet, lancez `php 03-acces-tournoi/index.php`.

## Pourquoi cette solution

Chaque refus a sa propre condition ; le retour anticipé rend le chemin autorisé facile à lire.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.

## Pourquoi cette solution

Chaque refus a sa propre condition ; le retour anticipé rend le chemin autorisé facile à lire.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.