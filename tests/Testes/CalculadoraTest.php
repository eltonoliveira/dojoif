<?php
use Producao\Calculadora;

class CalculadoraTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }
	
	public function testVerificarSoma()
	{
		$calculadora = new Calculadora();
		
		$esperado = 5;
		$somado   = $calculadora->somar(3, 2);
		
		$this->assertEquals($esperado, $somado);
		$this->assertEquals('teste', $calculadora->somar('tes', 'te'));
		$this->assertEquals(true, $calculadora->somar(true, true));
		$this->assertEquals(null, $calculadora->somar(1, true));
		$this->assertEquals(3.8, $calculadora->somar(1.9, 1.9));
	}

    public function testVerificarUmValorVerdadeiro()
    {
        $this->assertTrue(true);
    }
}
