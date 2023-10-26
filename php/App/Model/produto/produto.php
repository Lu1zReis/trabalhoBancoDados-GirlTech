<?php
namespace connect;
class Produto {
	private $cod, $cor, $valor_compra, $valor_venda, $quantidade, $cod_fornecedor;
	public function getCod () {
		return $this->cod;
	}
	public function getCor () {
		return $this->cor;
	}
	public function getValor_compra () {
		return $this->valor_compra;
	}
	public function getValor_venda () {
		return $this->valor_venda;
	}
	public function getQuantidade () {
		return $this->quantidade;
	}
	public function getCod_fornecedor () {
		return $this->cod_fornecedor;
	}


	public function setCod ($c) {
		$this->cod = $c;
	}
	public function setCor ($c) {
		$this->cor = $c;
	}
	public function setValor_compra ($v) {
		$this->valor_compra = $v;
	}
	public function setValor_venda ($v) {
		$this->valor_venda = $v;
	}
	public function setQuantidade ($q) {
		$this->quantidade = $q;
	}
	public function setCod_fornecedor ($d) {
		$this->cod_fornecedor=$d;
	}
}
