# 04 — Tableau des scores

**Notions :** for, foreach, while, break, continue  
**Situation :** Une arcade affiche les manches et cherche le premier score exceptionnel.

## Consignes

Affichez chaque score avec son rang via `foreach`. Ignorez les scores nuls avec `continue`, arrêtez la recherche au premier score d’au moins 100 avec `break`. Utilisez un `for` pour afficher trois essais et un `while` pour le décompte final.

## Vérification

Le premier score exceptionnel est 120, les manches à zéro ne figurent pas dans la liste.

Depuis la racine du projet, lancez `php 04-tableau-scores/index.php`. 

## Pourquoi cette solution

`continue` ignore la manche nulle et `break` s’arrête au premier score suffisant. Les trois boucles ont ici des rôles distincts.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.