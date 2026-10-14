# 05 — Panier de boutique

**Notions :** tableaux associatifs, map, filter, reduce  
**Situation :** Une boutique prépare un panier de produits à afficher.

## Consignes

Filtrez les produits disponibles, produisez leurs noms avec `array_map`, puis calculez le total des seuls produits disponibles avec `array_reduce`. Préservez les données d’origine.

## Vérification

Le produit indisponible est absent de la liste ; le total vaut 89.

Depuis la racine du projet, lancez `php 05-panier/index.php`. 

## Pourquoi cette solution

On filtre avant de transformer et de totaliser pour éviter de facturer un produit indisponible.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.