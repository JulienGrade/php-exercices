<?php
declare(strict_types=1);
$prices = [10, 40, 100];
$discount = 15;
$applyDiscount = function (int $price) use ($discount): int { return max(0, $price - $discount); };
$discounted = array_map($applyDiscount, $prices);
$cents = array_map(fn (int $price): int => $price * 100, $discounted);
echo implode(', ', $discounted), "\n";
echo implode(', ', $cents), " centimes\n";
