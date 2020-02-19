<?php

namespace Piezas;

class Rey implements \Chess\Movible
{
    private $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    public function esBlanca(): bool
    {
        return ($this->color === "blanca");
    }
    public function mover(int $x1, int $y1, int $x2, int $y2, \Chess\Tablero $tablero): bool
    {
        if (($x2 - $x1) < 2 && ($x2 - $x1) > -2) {
            if (($y2 - $y1) < 2 && ($y2 - $y1) > -2) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
