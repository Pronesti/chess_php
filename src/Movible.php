<?php
namespace Chess;
use \Chess\Tablero;
interface Movible{
    public function mover(int $x1,int $y1,int $x2, int $y2, Tablero $tablero): Bool;
}