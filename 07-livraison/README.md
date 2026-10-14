# 07 — Livraison offerte

**Notions :** fonctions, types, valeurs par défaut, arguments nommés  
**Situation :** Un service offre les frais de livraison à partir de 50 €.

## Consignes

Écrivez `shippingCost(float $subtotal, float $threshold = 50.0): float`, puis `grandTotal`. Testez le seuil exact et un appel avec arguments nommés.

## Vérification

49 € coûte 54 € au total ; 50 € coûte 50 €.

Depuis la racine du projet, lancez `php 07-livraison/index.php`. 


## Pourquoi cette solution

Les signatures typées et les valeurs par défaut exposent la règle, tandis que les arguments nommés documentent l’appel.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.