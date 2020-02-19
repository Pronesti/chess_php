<?php

use \Piezas\Reina;
use \Chess\Tablero;

final class ReinaTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        $this->tablero = new Tablero();
        $this->reina = new Reina("blanca");
    }
    public function testClassExists()
    {
        $this->assertTrue(class_exists("Piezas\Reina"));
    }
    public function testMover()
    {
        $this->assertTrue($this->reina->mover(0, 0, 1, 1, $this->tablero));
    }
}
