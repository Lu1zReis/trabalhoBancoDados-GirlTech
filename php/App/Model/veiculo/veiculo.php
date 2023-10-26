<?php 

namespace connect;

class Veiculo {
	private $placa, $renavam, $modelo, $tipo, $cod_entregador;
	public function getPlaca () {
		return $this->placa;
	}
	public function getRenavam () {
		return $this->renavam;
	}
	public function getModelo () {
		return $this->modelo;
	}
	public function getTipo () {
		return $this->tipo;
	}
	public function getCod_entregador () {
		return $this->cod_entregador;
	}


	public function setPlaca ($p) {
		$this->placa = $p;
	}
	public function setRenavam ($r) {
		$this->renavam = $r;
	}
	public function setModelo ($m) {
		$this->modelo = $m;
	}
	public function setTipo ($t) {
		$this->tipo = $t;
	}
	public function setCod_entregador ($d) {
		$this->cod_entregador=$d;
	}

}
