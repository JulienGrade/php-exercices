<?php
declare(strict_types=1);
function shippingCost(float $subtotal, float $threshold = 50.0): float {
    return $subtotal >= $threshold ? 0.0 : 5.0;
}
function grandTotal(float $subtotal): float {
    return $subtotal + shippingCost($subtotal);
}
echo grandTotal(49.0), "\n";
echo grandTotal(50.0), "\n";
echo shippingCost(subtotal: 75.0, threshold: 100.0), "\n";
