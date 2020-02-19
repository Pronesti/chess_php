<?php

use \Piezas\Rey;
use \Chess\Tablero;

final class ReyTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        $this->tablero = new Tablero();
        $this->rey = new Rey("blanca");
    }
    public function testClassExists()
    {
        $this->assertTrue(class_exists("Piezas\Rey"));
    }
    public function testMover()
    {
        $this->assertTrue($this->rey->mover(0, 0, 1, 1, $this->tablero));
    }
}
