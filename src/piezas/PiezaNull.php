<?php
namespace Piezas;
Class PiezaNull implements \Chess\Movible{
    private $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    public function esBlanca(): bool{
        return false;
    }
    public function mover(int $x1,int $y1,int $x2, int $y2, \Chess\Tablero $tablero): bool{
        return false;
    }
}