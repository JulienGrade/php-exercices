<?php
declare(strict_types=1);
function accessMessage(int $age, bool $hasTicket, bool $banned): string {
    if ($banned === true) return 'Accès refusé : compte banni';
    if ($age < 16) return 'Accès refusé : âge insuffisant';
    if ($hasTicket === false) return 'Accès refusé : billet manquant';
    return 'Accès autorisé';
}
echo accessMessage(17, true, false), "\n";
echo accessMessage(17, true, true), "\n";
echo accessMessage(14, true, false), "\n";
echo accessMessage(17, false, false), "\n";

