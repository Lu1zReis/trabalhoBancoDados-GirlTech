<?php

namespace connect;

class Item {
	private $cod_ordem, $cod_aparelho;
	public function getCod_ordem () {
		return $this->cod_ordem;
	}
	public function getCod_aparelho () {
		return $this->cod_aparelho;
	}
	public function setCod_ordem ($d) {
		$this->cod_ordem = $d;
	}
	public function setCod_aparelho ($d) {
		$this->cod_aparelho = $d;
	}
}
