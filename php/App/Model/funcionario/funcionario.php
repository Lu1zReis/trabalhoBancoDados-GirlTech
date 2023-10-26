<?php

namespace connect;

class Funcionario {
        private $cod, $cpf, $nome, $telefone1, $telefone2, $cod_loja, $salario;
        public function getCod () {
                return $this->cod;
        }
        public function getCpf () {
                return $this->cpf;
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
        public function getSalario () {
                return $this->salario;
	}


        public function setCod ($c) {
                $this->cod = $c;
        }
        public function setCpf ($c) {
                $this->cpf = $c;
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
        public function setSalario ($s) {
                $this->salario = $s;
        }
        public function getCod_loja ($d) {
                $this->cod_loja = $d;
        }

}
