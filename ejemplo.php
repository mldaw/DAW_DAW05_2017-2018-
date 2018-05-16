<?php
/**
* Documentacion
* ejemplo.php
* Clase Ejemplo con metodos
*
*/

/**
* Metodo multiplicarTresNumeros
* retorna el valor de la multiplicacion.
* @param int $v1,int $v2,int $v3
* @return int
*
*/
function multiplicarTresNumeros ($v1, $v2, $v3)
{
	return $v1*$v2*$v3;
}

/**
* @author mluisa
* Documentacion de la clase Ejemplo
* 
*/
class Ejemplo {

	var $a;
	var $b;	
  var $c;
	function multiplicar ()
	{
		return multiplicarTresNumeros($this->a, $this->b, $this->c);
	}
}

