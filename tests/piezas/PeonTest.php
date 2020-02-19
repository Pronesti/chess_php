<?php

use \Piezas\Peon;
use \Chess\Tablero;

final class PeonTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        $this->tablero = new Tablero();
        $this->peon = new Peon("blanca");
    }
    public function testClassExists()
    {
        $this->assertTrue(class_exists("Piezas\Peon"));
    }
    public function testMover()
    {
        $this->assertTrue($this->peon->mover(0, 0, 1, 1, $this->tablero));
    }
}
