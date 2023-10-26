<?php 
namespace connect;
class Fornecedor {
	private $cod, $cod_loja, $cep, $bairro, $rua, $numero, $cnpj, $telefone;
	public function getCod () {
		return $this->cod;
	}
	public function getCod_loja () {
		return $this->cod_loja;
	}
	public function getCep () {
		return $this->cep;
	}
	public function getBairro () {
		return $this->bairro;
	}
	public function getRua () {
		return $this->rua;
	}
	public function getNumero () {
		return $this->numero;
	}
	public function getCnpj () {
		return $this->cnpj;
	}
	public function getTelefone () {
		return $this->telefone;
	}

	public function setCod ($d) {
		$this->cod = $d;
	}
	public function setCod_loja ($d) {
		$this->cod_loja = $d;
	}
	public function setCep ($d) {
		$this->cep = $d;
	}
	public function setBairro ($d) {
		$this->bairro = $d;
	}
	public function setRua ($d) {
		$this->rua = $d;
	}
	public function setNumero ($d) {
		$this->numero = $d;
	}
	public function setCnpj ($d) {
		$this->cnpj = $d;
	}
	public function setTelefone ($d) {
		$this->telefone = $d;
	}

}
