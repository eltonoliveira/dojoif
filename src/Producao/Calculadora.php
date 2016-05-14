<?php
namespace Producao;

class Calculadora
{
	public function dividir($divisor, $dividendo)
	{
		return $dividendo / $divisor;
	}
	
	public function somar($valor1, $valor2)
	{
		$resultado = null;
		
		if (is_bool($valor1) && is_bool($valor2)) {
			$resultado = $valor1 && $valor2;
		}
		
		if (is_string($valor1) && is_string($valor2)) {
		    $resultado = $valor1 . $valor2;
		}
		
		if (is_numeric($valor1) && is_numeric($valor2)) {
		    $resultado = $valor1 + $valor2;	
		}
		
		return $resultado;
	}
    
}
