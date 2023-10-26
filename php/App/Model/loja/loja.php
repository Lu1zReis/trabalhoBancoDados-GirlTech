<?php
namespace connect;
class Loja {
	private $cnpj, $telefone1, $telefone2, $cep, $rua, $bairro, $numero, $id;
	public function getId () {
		return $this->id;
	}
	public function getCnpj () {
		return $this->cnpj;
	}
	public function getTelefone1 () {
		return $this->telefone1;
	}
	public function getTelefone2 () {
		return $this->telefone2;
	}
	public function getCep () {
		return $this->cep;
	}
	public function getRua () {
		return $this->rua;
	}
	public function getBairro () {
		return $this->bairro;
	}
	public function getNumero () {
		return $this->numero;
	}


	public function setId ($i) {
		$this->id = $i;
	}
	public function setCnpj ($c) {
		$this->cnpj = $c;
	}
	public function setTelefone1 ($t1) {
		$this->telefone1 = $t1;
	}
	public function setTelefone2 ($t2) {
		$this->telefone2 = $t2;
	}
	public function setCep ($c) {
		$this->cep = $c;
	}
	public function setRua ($r) {
		$this->rua = $r;
	}
	public function setBairro ($b) {
		$this->bairro = $b;
	}
	public function setNumero ($n) {
		$this->numero = $n;
	}
}
