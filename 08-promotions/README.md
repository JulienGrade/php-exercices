# 08 — Promotions configurables

**Notions :** closures, use, fonctions fléchées  
**Situation :** Une promotion de 15 € s’applique à plusieurs produits.

## Consignes

Créez une closure qui capture la remise avec `use`, sans faire descendre le prix sous zéro. Appliquez-la avec `array_map`. Ajoutez une fonction fléchée qui calcule le prix en centimes.

## Vérification

Les prix 10, 40, 100 deviennent 0, 25, 85.

Depuis la racine du projet, lancez `php 08-promotions/index.php`. 

## Pourquoi cette solution

La closure capture la remise ; la fonction fléchée transforme ensuite chaque prix en centimes.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.