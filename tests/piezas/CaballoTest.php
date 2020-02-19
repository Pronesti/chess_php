<?php

use \Piezas\Caballo;
use \Chess\Tablero;

final class CaballoTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        $this->tablero = new Tablero();
        $this->caballo = new Caballo("blanca");
    }
    public function testClassExists()
    {
        $this->assertTrue(class_exists("Piezas\Caballo"));
    }
    public function testMover()
    {
        $this->assertTrue($this->caballo->mover(0, 0, 1, 1, $this->tablero));
    }
}
