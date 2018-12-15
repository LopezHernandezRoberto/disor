<?php

class TextoPlano {

    private $textoPlano,$alfabeto;

    function __construct($alfabeto,$textoPlano){
    	$this->textoPlano = $textoPlano;
    	$this->alfabeto = $alfabeto.strtoupper($alfabeto);
    }

    function actualizacionTexto($nuevo){
    	$this->textoPlano = $nuevo;
    }

    function getCifradoPorCesar($avance){
    	$respuesta = "";
    	for ($i=0; $i < strlen($this->textoPlano) ; $i++) { 
    		$index = ($this->posicion($this->textoPlano[$i])+$avance)%strlen($this->alfabeto);
    		$respuesta .= strpos($this->alfabeto,$this->textoPlano[$i])!==false? $this->alfabeto[$index] : $this->textoPlano[$i];
    	}
    	return $respuesta;
    }

    function getCifradoPorInversoConSaltos ($saltos){
    	$arregloSeparadas = $this->separarPalabra($this->textoPlano,$saltos==0?strlen($this->textoPlano):$saltos);
    	$respuesta = "";
    	for ($i=0; $i < count($arregloSeparadas) ; $i++) { 
    		if(strlen($arregloSeparadas[$i]) == $saltos ) $respuesta .= strrev($arregloSeparadas[$i]);
    		else $respuesta .= $arregloSeparadas[$i];
    	}
    	return $respuesta;
    }

    function getCifradoPorInverso(){
    	return strrev($this->textoPlano);
    }

    private function separarPalabra($texto,$saltos){
    	$respuesta = array();
    	$palabra = "";
    	for ($i=0; $i < strlen($texto) ; $i++) {
    		if($i%$saltos==0 && $i!=0){
    			array_push($respuesta,$palabra);
    			$palabra = $texto[$i];
    		}else $palabra .= $texto[$i];
    	}
    	array_push($respuesta,$palabra);
    	return $respuesta;
    }

    private function posicion($c){
    	return strpos($this->alfabeto,$c);
	}

}

?>