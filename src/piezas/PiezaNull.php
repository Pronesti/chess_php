<?php
namespace Piezas;
Class PiezaNull implements \Chess\Movible{
    public function esBlanca(){
        return null;
    }
    public function mover(int $x1,int $y1,int $x2, int $y2, \Chess\Tablero $tablero): bool{
        return false;
    }
}