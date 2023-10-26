<?php
namespace connect;

class Acessorio {
	private $nome, $cod_produto;
	public function getNome() {
		return $this->nome;
	}
	public function getCod_produto() {
		return $this->cod_produto;
	}
	public function setNome ($n) {
		$this->nome = $n;
	}
	public function setCod_produto($p) {
		$this->cod_produto = $p;
	}
}

