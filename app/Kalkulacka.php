<?php

/**
 * Reprezentuje jednoduchou kalkulačku
 */
class Kalkulacka
{
    
    /**
     * Sečte 2 čísla
     * @param int|float $a První číslo
     * @param int|float $b Druhé číslo
     * @return int|float Součet 2 čísel
     */
    public function secti($a, $b)
    {
        return $a + $b;
    }

    /**
     * Odečte 2 čísla
     * @param int|float $a První číslo
     * @param int|float $b Druhé číslo
     * @return int|float Rozdíl 2 čísel
     */
    public function odecti($a, $b)
    {
        return $a - $b;
    }

    /**
     * Vynásobí 2 čísla
     * @param int|float $a První číslo
     * @param int|float $b Druhé číslo
     * @return int|float Součin 2 čísel
     */
    public function vynasob($a, $b)
    {
        return $a * $b;
    }
}