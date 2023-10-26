<?php

namespace connect;

class Venda {
	private $cod, $data, $cod_cliente, $cod_atendente, $cod_produto;
	public function getCod () {
		return $this->cod;
	}
	public function getData () {
		return $this->data;
	}
	public function getCod_cliente () {
		return $this->cod_cliente;
	}
	public function getCod_atendente () {
		return $this->cod_atendente;
	}
	public function getCod_produto () {
		return $this->cod_produto;
	}


	public function setCod ($c) {
		$this->cod = $c;
	}
	public function setData ($d) {
		$this->data = $d;
	}
	public function setCod_cliente ($c) {
		$this->cod_cliente = $c;
	}
	public function setCod_atendente ($c) {
		$this->cod_atendente = $c;
	}
	public function setCod_produto ($c) {
		$this->cod_produto = $c;
	}
}
