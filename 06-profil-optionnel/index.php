<?php
declare(strict_types=1);
$profile = ['name' => 'Mira', 'nickname' => null];
$lastLogin = null;
echo $profile['nickname'] ?? $profile['name'], "\n";
var_dump(isset($profile['nickname']));
var_dump(array_key_exists('nickname', $profile));
if (!empty($lastLogin)) {
    echo $lastLogin?->format('d/m/Y') ?? 'jamais', "\n";
}
