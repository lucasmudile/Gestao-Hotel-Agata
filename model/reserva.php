<?php

class Reserva{

    private $id;
    private $data_chegada;
    private $data_saida;
    private $data_reserva;
    private $n_adultos;
    private $n_criancas;
    private $id_forma_pagamento;
    private $valor;
    private $data_pagamento;
    private $desejo;
    private $obs;
    private $id_quarto;
    private $id_cliente;
    private $id_funcionario;
    private $statu;
    private $emailCliente;


    public function getId() {return $this->id;}
	public function setId($id) {$this->id = $id;}

    public function getDataChegada() {return $this->data_chegada;}
	public function setDataChegada($data_chegada) {$this->data_chegada = $data_chegada;}

    public function getDataSaida() {return $this->data_saida;}
	public function setDataSaida($data_saida) {$this->data_saida = $data_saida;}
    
    public function getDataReserva() {return $this->data_reserva;}
	public function setDataReserva($data_reserva) {$this->data_reserva = $data_reserva;}

    public function getN_Adulto() {return $this->n_adultos;}
	public function setN_Adulto($n_adultos) {$this->n_adultos = $n_adultos;}

    public function getN_Crianca() {return $this->n_criancas;}
	public function setN_Crianca($n_criancas) {$this->n_criancas = $n_criancas;}

    public function getIdFormaPagamento() {return $this->id_forma_pagamento;}
	public function setIdFormaPagamento($id_forma_pagamento) {$this->id_forma_pagamento = $id_forma_pagamento;}

    public function getValor() {return $this->valor;}
	public function setValor($valor) {$this->valor = $valor;}

    public function getDataPagamento() {return $this->data_pagamento;}
	public function setDataPagamento($data_pagamento) {$this->data_pagamento = $data_pagamento;}


    public function getDesejo() {return $this->desejo;}
	public function setDesejo($desejo) {$this->desejo = $desejo;}

    public function getObs() {return $this->obs;}
	public function setObs($obs) {$this->obs = $obs;}

    public function getIdQuarto() {return $this->id_quarto;}
	public function setIdQuarto($id_quarto) {$this->id_quarto = $id_quarto;}

    public function getIdCliente() {return $this->id_cliente;}
	public function setIdCliente($id_cliente) {$this->id_cliente = $id_cliente;}

    public function getIdFuncionario() {return $this->id_funcionario;}
	public function setIdFuncionario($id_funcionario) {$this->id_funcionario = $id_funcionario;}

    public function getStatu() {return $this->statu;}
	public function setStatu($statu) {$this->statu = $statu;}

    public function getEmailCliente() {return $this->emailCliente;}
	public function setEmailCliente($emailCliente) {$this->emailCliente = $emailCliente;}

    

}
?>