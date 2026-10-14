# 12 — Notifications interchangeables

**Notions :** interface, polymorphisme  
**Situation :** Une application annonce un événement par différents canaux.

## Consignes

Définissez `Notifier` avec `send(string): string`. Implémentez `EmailNotifier` et `ConsoleNotifier`. Une fonction `announce(Notifier $notifier)` doit fonctionner avec les deux sans connaître leur classe.

## Vérification

La même fonction produit deux annonces selon l’objet reçu.

Depuis la racine du projet, lancez `php 12-canaux/index.php`.

## Pourquoi cette solution

La fonction dépend de l’interface, ce qui permet de changer le canal sans la modifier.

Une autre implémentation est recevable si elle respecte les consignes et les cas de vérification.
