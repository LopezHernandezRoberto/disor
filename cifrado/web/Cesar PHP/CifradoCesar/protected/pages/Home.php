<?php

require_once('D:\Documentos\PradoProjects\CifradoCesar\protected\Cesar\TextoPlano.php');


class Home extends TPage
{

	public $textoPlanoObject;

	public function onLoad($param)
	{
		parent::onLoad($param);
		$this->textoPlanoObject=new TextoPlano("abcdefghijklmnñopqrstuvwxyz",$this->resultadoCesar->Text);
	}

    public function textChanged($sender,$param){
    	$this->textoPlanoObject->actualizacionTexto($this->textoPlano->Text);
    	$this->resultadoCesar->Text = $this->textoPlanoObject->getCifradoPorCesar(intval($this->saltosCesar->Text));
    	$this->resultadoInverso->Text = $this->textoPlanoObject->getCifradoPorInverso();
    	$this->resultadoInversoSaltos->Text = $this->textoPlanoObject->getCifradoPorInversoConSaltos(intval($this->saltosInverso->Text));
    }
 
    public function cambioSaltoCesar($sender,$param){
    	$this->resultadoCesar->Text = $this->textoPlanoObject->getCifradoPorCesar(intval($this->saltosCesar->Text));
    }

    public function cambioSaltoInverso($sender,$param){
    	$this->resultadoInversoSaltos->Text = $this->textoPlanoObject->getCifradoPorInversoConSaltos(intval($this->saltosInverso->Text));
    }

}