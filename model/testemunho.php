<?php

class Testemunho{

    private $id;
    private $testemunho;
    private $id_cliente;


    public function getId() {return $this->id;}
	public function setId($id) {$this->id = $id;}

    public function getTestemunho() {return $this->testemunho;}
	public function setTestemunho($testemunho) {$this->testemunho = $testemunho;}

    public function getIdCliente() {return $this->id_cliente;}
	public function setIdCliente($id_cliente) {$this->id_cliente = $id_cliente;}

}
?>