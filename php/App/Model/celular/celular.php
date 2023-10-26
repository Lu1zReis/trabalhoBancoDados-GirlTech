<?php

namespace connect;

class Celular {
	private $serie, $cod_produto, $marca, $sistema;
	public function getSerie () {
		return $this->serie;
	}
	public function getCod_produto () {
		return $this->cod_produto;
	}
	public function getMarca () {
		return $this->marca;
	}
	public function getSistema () {
		return $this->sistema;
	}


	public function setSerie ($s) {
		$this->serie = $s;
	}
	public function setCod_produto ($c) {
		$this->cod_produto = $c;
	}
	public function setMarca ($m) {
		$this->marca = $m;
	}
	public function setSistema ($s) {
		$this->sistema = $s;
	}
}
