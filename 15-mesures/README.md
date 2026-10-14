# 15 — Mesures typées

**Notions :** union, mixed, never  
**Situation :** Un capteur produit un entier ou un flottant selon sa précision.

## Consignes

Écrivez `toCelsius(int|float $fahrenheit): float`. Une fonction `describe(mixed $value)` vérifie le type avant l’usage. Une fonction `abort(string): never` lance une exception ; interceptez-la pour poursuivre la démonstration.

## Vérification

32°F donne 0°C et 68°F donne 20°C.

Depuis la racine du projet, lancez `php 15-mesures/index.php`.

## Pourquoi cette solution

Le type union limite les formes attendues ; `mixed` exige un contrôle explicite ; `never` signale une sortie exceptionnelle.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.
