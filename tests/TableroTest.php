<?php

require("../vendor/bin/autoload.php");

use \Chess\Tablero;
use \Piezas\Peon;

final class TableroTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        $this->tablero = new Tablero();
        $this->pieza = new Peon("blanca");
    }
    public function testClassExists()
    {
        $this->assertTrue(class_exists("Chess\Tablero"));
    }
    public function testMostrar()
    {
        $this->assertIsArray($this->tablero->mostrar());
    }
    public function testColocarPieza()
    {
        $this->assertTrue($this->tablero->colocarPieza(0, 0, $this->pieza));
    }
    public function testMover()
    {
        $this->assertFalse($this->tablero->mover(0, 0, 1, 1));
    }
    public function testTermino()
    {
        $this->assertTrue($this->tablero->termino());
    }
    public function testDame()
    {
        $this->assertTrue($this->tablero->dame(0, 0) instanceof \Piezas\PiezaNull);
    }
    public function testColocarPiezaYDame()
    {
        $this->assertTrue($this->tablero->colocarPieza(0, 0, $this->pieza));
        $this->assertTrue($this->tablero->dame(0, 0) instanceof \Piezas\Peon);
    }
    public function testColocarDosPiezas()
    {
        $this->assertTrue($this->tablero->colocarPieza(0, 0, $this->pieza));
        $this->assertTrue($this->tablero->colocarPieza(1, 2, $this->pieza));
    }
    public function testColocarDosPiezasMismoLugar()
    {
        $this->assertTrue($this->tablero->colocarPieza(0, 0, $this->pieza));
        $this->assertFalse($this->tablero->colocarPieza(0, 0, $this->pieza));
    }
    public function testColocarYMostrar()
    {
        $this->assertTrue($this->tablero->colocarPieza(0, 0, $this->pieza));
        $res = $this->tablero->mostrar();
        $this->assertNotEmpty($res[0][0]);
    }
    public function testColocarPiezaYMover()
    {
        $this->assertTrue($this->tablero->colocarPieza(0, 0, $this->pieza));
        $this->assertTrue($this->tablero->mover(0, 0, 1, 1));
    }
    public function testColocarReyYTermino()
    {
        $this->assertTrue($this->tablero->colocarPieza(0, 0, new \Piezas\Rey("blanca")));
        $this->assertTrue($this->tablero->termino());
    }
    public function testColocarDosReyYTermino()
    {
        $this->assertTrue($this->tablero->colocarPieza(0, 0, new \Piezas\Rey("blanca")));
        $this->assertTrue($this->tablero->colocarPieza(5, 5, new \Piezas\Rey("negra")));
        $this->assertFalse($this->tablero->termino());
    }
}
