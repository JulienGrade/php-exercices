<?php
declare(strict_types=1);
function toCelsius(int|float $fahrenheit): float { return ($fahrenheit - 32) * 5 / 9; }
function describe(mixed $value): string {
    return is_int($value) || is_float($value) ? 'mesure numérique' : 'mesure invalide';
}
function abort(string $message): never { throw new LogicException($message); }
echo toCelsius(32), ' / ', toCelsius(68.0), "\n";
echo describe('inconnue'), "\n";
try { abort('Capteur arrêté'); } catch (LogicException $error) { echo $error->getMessage(), "\n"; }
