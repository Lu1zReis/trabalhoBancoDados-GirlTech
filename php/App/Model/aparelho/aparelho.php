<?php

namespace connect;

class Aparelho {
	private $cod, $marca, $tipo, $cod_cliente;
	public function getCod() {
		return $this->cod;
	}
	public function getMarca() {
		return $this->marca;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function getCod_cliente() {
		return $this->cod_cliente;
	}
	public function setCod ($c) {
		$this->cod = $c;
	}
	public function setMarca ($m) {
		$this->marca = $m;
	}
	public function setTipo ($t) {
		$this->tipo = $t;
	}
	public function setCod_cliente ($cc) {
		$this->cod_cliente = $cc;
	}
}
