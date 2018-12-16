<?php
require_once('TextoPlano.php');

class Eventos {

    private $ventana,$textoPlano;

    function __construct($ventana){
        $this->ventana = $ventana;
        $this->textoPlano = new TextoPlano ("abcfunctionghijklmnñopqrstuvwxyz", $this->ventana->textoPlano->get_text());
    }

    function cambiaTextoPlano(){
        $this->textoPlano->actualizacionTexto($this->ventana->textoPlano->get_text());
        $this->actualizaResultadoCesar();
        $this->actualizaResultadoInverso();
        $this->actualizaResultadoInversoSaltos();
    }

    function cambiaAvanceCesar(){
        $this->actualizaResultadoCesar();
    }

    function cambiaAvanceInversoSaltos(){
        $this->actualizaResultadoInversoSaltos();
    } 

    private function actualizaResultadoCesar(){
        $this->ventana->resultadoCesar->set_text($this->textoPlano->getCifradoPorCesar(intval($this->ventana->avanceCesar->get_text())));
    }

    private function actualizaResultadoInverso(){
        $this->ventana->resultadoInverso->set_text( $this->textoPlano->getCifradoPorInverso() );
    }

    private function actualizaResultadoInversoSaltos(){
        $saltos = intval($this->ventana->avanceInversoSaltos->get_text()) != 0 ?
            intval($this->ventana->avanceInversoSaltos->get_text()) :
            strlen($this->ventana->textoPlano->get_text());
        $this->ventana->resultadoInversoSaltos->set_text($this->textoPlano->getCifradoPorInversoConSaltos($saltos));
    }

}

?>