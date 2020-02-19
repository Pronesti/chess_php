<?php

namespace Chess;

class Tablero
{
    private $tablero;
    public function __construct()
    {
        $this->tablero = array_fill(0, 7, array_fill(0, 7, new \Piezas\PiezaNull("blanca")));
    }
    public function mostrar(): array
    {
        return $this->tablero;
    }
    public function colocarPieza(int $x, int $y, Movible $pieza): bool
    {
        if ($this->tablero[$x][$y] instanceof \Piezas\PiezaNull) {
            $this->tablero[$x][$y] = $pieza;
            return true;
        } else {
            return false;
        }
    }
    public function mover(int $x1, int $y1, int $x2, int $y2): bool
    {
        if ($x1 > 8 || $x2 > 8 || $y1 > 8 || $y2 > 8 || $x1 <= 0 || $x2 < 0 || $y1 < 0 || $y2 < 0 ||
         $this->tablero[$x1][$y1] === new \Piezas\PiezaNull("blanca") ||
          (($this->tablero[$x2][$y2] instanceof \Piezas\PiezaNull) || $this->tablero[$x1][$y1]->esBlanco() === $this->tablero[$x2][$y2]->esBlanco()) ) {
            return false;
        } else {
            if ($this->tablero[$x1][$y1]->mover($x1, $y1, $x2, $y2, $this)) {
                $this->colocarPieza($x2, $y2, $this->tablero[$x1][$y1]);
                $this->colocarPieza($x1, $y1, new \Piezas\PiezaNull("blanca"));
                return true;
            }else{
                return false;
            }
        }
    }
    public function termino(): bool
    {
        $rey = 0;
        foreach($this->tablero as $f){
            foreach($f as $v){
                if($v instanceof \Piezas\Rey){
                    $rey +=1;
                }
            }
        }
        return $rey < 2;
    }
    public function dame(int $x, int $y): Movible
    {
        $pieza = $this->tablero[$x][$y];
        if ($pieza instanceof \Piezas\PiezaNull) {
            return new \Piezas\PiezaNull("blanca");
        } else {
            return $pieza;
        }
    }
}
