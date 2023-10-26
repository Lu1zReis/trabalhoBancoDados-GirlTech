<?php
namespace connect;

class OrdemServico {
	private $cod, $descricao, $valor, $data_abertura, $data_finalizacao, $cod_func;
	public function getCod () {
		return $this->cod;
	}
	public function getDescricao () {
		return $this->descricao;
	}
	public function getValor () {
		return $this->valor;
	}
	public function getData_abertura () {
		return $this->data_abertura;
	}
	public function getData_finalizacao () {
		return $this->data_finalizacao;
	}
	public function getCod_func () {
		return $this->cod_func;
	}


	public function setCod ($c) {
		$this->cod = $c;
	}
	public function setDescricao ($d) {
		$this->descricao = $d;
	}
	public function setValor ($v) {
		$this->valor = $v;
	}
	public function setData_abertura ($d) {
		$this->data_abertura = $d;
	}
	public function setData_finalizacao ($d) {
		$this->data_finalizacao = $d;
	}
}

