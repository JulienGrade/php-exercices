# 11 — Prix immuable

**Notions :** readonly class, valeur objet  
**Situation :** Un prix en centimes ne doit jamais être modifié après création.

## Consignes

Créez une classe `readonly` avec centimes et devise. `add` renvoie un nouveau prix et refuse des devises différentes. Montrez que le premier objet n’a pas changé.

## Vérification

250 + 175 = 425 ; le premier objet reste à 250.

Depuis la racine du projet, lancez `php 11-prix-immuable/index.php`.

## Pourquoi cette solution

L’addition crée un nouvel objet. La classe readonly empêche la réassignation des propriétés.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.
