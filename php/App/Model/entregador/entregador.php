<?php
namespace connect;
class Entregador {
	private $cod, $cod_func;
	public function getCod () {
		return $this->cod;
	}

	public function getCod_func () {
		return $this->cod_func;
	}
	
	public function setCod ($c) {
		$this->cod = $c;
	}

	public function setCod_func ($d) {
		$this->cod_func = $d;
	}
}
