<?php

use \Piezas\Torre;
use \Chess\Tablero;

final class TorreTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        $this->tablero = new Tablero();
        $this->torre = new Torre("blanca");
    }
    public function testClassExists()
    {
        $this->assertTrue(class_exists("Piezas\Torre"));
    }
    public function testMover()
    {
        $this->assertTrue($this->torre->mover(0, 0, 1, 1, $this->tablero));
    }
}
