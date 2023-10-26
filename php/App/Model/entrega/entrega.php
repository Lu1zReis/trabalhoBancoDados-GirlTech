<?php
namespace connect;
class Entrega {
	private $data_entrega, $cod_cliente, $cod_produto, $cod_entregador, $cod_ordem, $rua, $bairro, $cep, $numero;
	public function getData_entrega () {
		return $this->data_entrega;
	}
	public function getCod_cliente () {
		return $this->cod_cliente;
	}
	public function getCod_produto () {
		return $this->cod_produto;
	}
	public function getCod_entregador () {
		return $this->cod_entregador;
	}
	public function getCod_ordem () {
		return $this->cod_ordem;
	}
	public function getRua () {
		return $this->rua;
	}
	public function getBairro () {
		return $this->bairro;
	}
	public function getCep () {
		return $this->cep;
	}
	public function getNumero () {
		return $this->numero;
	}


	public function setData_entrega ($d) {
		$this->data_entrega = $d;
	}
	public function setRua ($r) {
		$this->rua = $r;
	}
	public function setBairro ($b) {
		$this->bairro = $b;
	}
	public function setCep ($c) {
		$this->cep = $c;
	}
	public function setNumero ($n) {
		$this->numero = $n;
	}
        public function setCod_cliente ($d) {
                $this->cod_cliente = $d;
        }
        public function setCod_produto ($d) {
                $this->cod_produto = $d;
        }
        public function setCod_entregador ($d) {
                $this->cod_entregador = $d;
        }
        public function setCod_ordem ($d) {
                $this->cod_ordem = $d;
        }

}
