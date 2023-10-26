<?php

namespace connect;

class Assistente {
	private $cod, $cod_func;
	public function getCod() {
		return $this->cod;
	}
	public function getCod_func() {
		return $this->cod_func;
	}
        public function setCod ($cc) {
                $this->cod = $cc;
        }
        public function setCod_func ($cc) {
                $this->cod_func = $cc;
        }

}
