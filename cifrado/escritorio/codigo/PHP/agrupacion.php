<?php
require_once('Eventos.php');

class Main extends GtkWindow{

	public $textoPlano;
    public $avanceCesar;
    public $resultadoCesar;
    public $resultadoInverso;
    public $avanceInversoSaltos;
    public $resultadoInversoSaltos;

    function __construct(){
        parent::__construct();
        $this->set_title('Cifrado Cesar');

        $hbox = new GtkVBox();
        $boxContenedor = new GtkHBox();
        $boxCesar = new GtkVBox();
        $boxInverso = new GtkVBox();
        $boxInversoSaltos = new GtkVBox();
        $this->textoPlano = new GtkEntry();
        $this->avanceCesar = new GtkEntry();
        $this->resultadoCesar = new GtkEntry();
        $this->resultadoInverso = new GtkEntry();
        $this->avanceInversoSaltos = new GtkEntry();
        $this->resultadoInversoSaltos= new GtkEntry();
        //labels
        $labelCesar = new GtkLabel('Cesar');
        $labelAvance = new GtkLabel('Avance');
        $labelResultado = new GtkLabel('Resultado');
        $labelResultado2 = new GtkLabel('Resultado');
        $labelResultado3 = new GtkLabel('Resultado');
        $labelSaltos = new GtkLabel('Saltos');
        $labelinverso = new GtkLabel('Inverso');
        $labelInversoSaltos = new GtkLabel('Inverso con saltos');
        $labelTextoPlano = new GtkLabel('Texto plano');
        //Cesar
        $boxCesar->pack_start($labelCesar);
        $boxCesar->pack_start($labelAvance);
        $boxCesar->pack_start($this->avanceCesar);
        $boxCesar->pack_start($labelResultado);
        $boxCesar->pack_start($this->resultadoCesar);
        //Inverso
        $boxInverso->pack_start($labelinverso);
        $boxInverso->pack_start($labelResultado2);
        $boxInverso->pack_start($this->resultadoInverso);
        //InversoSaltos
        $boxInversoSaltos->pack_start($labelInversoSaltos);
        $boxInversoSaltos->pack_start($labelSaltos);
        $boxInversoSaltos->pack_start($this->avanceInversoSaltos);
        $boxInversoSaltos->pack_start($labelResultado3);
        $boxInversoSaltos->pack_start($this->resultadoInversoSaltos);
        //Contenedor
        $boxContenedor->pack_start($boxCesar);
        $boxContenedor->pack_start($boxInverso);
        $boxContenedor->pack_start($boxInversoSaltos);
        //Principal
        $hbox->pack_start($labelTextoPlano);
        $hbox->pack_start($this->textoPlano);
        $hbox->pack_start($boxContenedor);

        $this->connect_simple('destroy', array('gtk', 'main_quit'));
        $this->add($hbox);
        $this->show_all();

        //Eventos
        $handler = new Eventos($this);
        $this->textoPlano->connect_simple('changed', array($handler, 'cambiaTextoPlano'));
        $this->avanceCesar->connect_simple('changed', array($handler, 'cambiaAvanceCesar'));
        $this->avanceInversoSaltos->connect_simple('changed', array($handler, 'cambiaAvanceInversoSaltos'));
    }

}

if (!@$GLOBALS['framework']) {
    new Main();
    Gtk::main();
}
?>