<?php

class Cesar {

    public function cifrar($texto,$avance){
    	$alfabeto = $this->alfabeto();
    	$respuesta = "";
    	for ($i=0; $i < strlen($texto) ; $i++) { 
    		$index = ($this->posicion($texto[$i])+$avance)%strlen($alfabeto);
    		$respuesta .= strpos($this->alfabeto(),$texto[$i])!==false? $alfabeto[$index] : $texto[$i];
    	}
    	return $respuesta;
	}

	public function alfabeto(){
    	$alfabeto = "abcdefghijklmnñopqrstuvwxyz";
    	return $alfabeto.strtoupper($alfabeto);
	}

	private function posicion($c){
    	return strpos($this->alfabeto(),$c);
	}

}

?>