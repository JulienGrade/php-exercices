<?php
declare(strict_types=1);
enum OrderStatus: string { case Draft = 'draft'; case Paid = 'paid'; case Shipped = 'shipped'; }
function label(OrderStatus $status): string {
    return match ($status) {
        OrderStatus::Draft => 'À confirmer',
        OrderStatus::Paid => 'À préparer',
        OrderStatus::Shipped => 'Expédiée',
    };
}
foreach (['paid', 'lost'] as $raw) {
    $status = OrderStatus::tryFrom($raw);
    echo $status === null ? 'Statut inconnu' : label($status), "\n";
}
