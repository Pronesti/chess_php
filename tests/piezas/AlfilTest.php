<?php

use \Piezas\Alfil;
use \Chess\Tablero;

final class AlfilTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        $this->tablero = new Tablero();
        $this->alfil = new Alfil("blanca");
    }
    public function testClassExists()
    {
        $this->assertTrue(class_exists("Piezas\Alfil"));
    }
    public function testMover()
    {
        $this->assertTrue($this->alfil->mover(0, 0, 1, 1, $this->tablero));
    }
}
