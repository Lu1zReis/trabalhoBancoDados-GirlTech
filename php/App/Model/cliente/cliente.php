<?php
namespace connect;
class Cliente {
	private $cod, $cpf, $endereco, $nome, $telefone1, $cod_loja, $cod_atendente;
	public function getCod () {
		return $this->cod;
	}
	public function getCpf () {
		return $this->cpf;
	}
	public function getEndereco () {
		return $this->endereco;
	}
	public function getNome () {
		return $this->nome;
	}
	public function getTelefone1 () {
		return $this->telefone1;
	}
	public function getTelefone2 () {
		return $this->telefone2;
	}
	public function getCod_loja () {
		return $this->cod_loja;
	}
	public function getCod_atendente () {
		return $this->cod_atendente;
	}


	
	public function setCod ($c) {
		$this->cod = $c;
	}
	public function setCpf ($c) {
		$this->cpf = $c;
	}
	public function setEndereco ($e) {
		$this->endereco = $e;
	}
	public function setNome ($n) {
		$this->nome = $n;
	}
	public function setTelefone1 ($t1) {
		$this->telefone1 = $t1;
	}
	public function setTelefone2 ($t2) {
		$this->telefone2 = $t2;
	}
        public function setCod_loja ($cl) {
                $this->cod_loja = $cl;
        }
        public function setCod_atendente ($ca) {
                $this->cod_atendente = $ca;
        }

}
