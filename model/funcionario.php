<?php

class Funcionario{

    private $id;
    private $nome;
    private $bi;
    private $dataNascimento;
    private $morada;
    private $email;
    private $telefone;
    private $senha;
    private $status;
    private $id_permicao;


    public function getId() {return $this->id;}
	public function setId($id) {$this->id = $id;}

    public function getNome() {return $this->nome;}
	public function setNome($nome) {$this->nome = $nome;}

    public function getBi() {return $this->bi;}
	public function setBi($bi) {$this->bi = $bi;}

    public function getDataNascimento() {return $this->dataNascimento;}
	public function setDataNascimento($dataNascimento) {$this->dataNascimento = $dataNascimento;}

    public function getMorada() {return $this->morada;}
	public function setMorada($morada) {$this->morada = $morada;}

    public function getTelefone() {return $this->telefone;}
	public function setTelefone($telefone) {$this->telefone = $telefone;}

    public function getEmail() {return $this->email;}
	public function setEmail($email) {$this->email = $email;}


    public function getSenha() {return $this->senha;}
	public function setSenha($senha) {$this->senha = $senha;}

    public function getStatus() {return $this->status;}
	public function setStatus($status) {$this->status = $status;}

    public function getPermicao() {return $this->id_permicao;}
	public function setPermicao($id_permicao) {$this->id_permicao = $id_permicao;}

}
?>