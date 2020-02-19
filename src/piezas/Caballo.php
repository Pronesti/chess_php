<?php
namespace Piezas;
Class Caballo implements \Chess\Movible{
    private $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    public function esBlanca(): bool{
        return ($this->color === "blanca");
    }
    public function mover(int $x1,int $y1,int $x2, int $y2, \Chess\Tablero $tablero): bool{
        return true;
    }
}