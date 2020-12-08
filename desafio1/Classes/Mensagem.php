<?php

class Mensagem{
	
	private $mensagem;
	private $mensagemOperacao1;
	private $mensagemOperacao2;
	private $mensagemOperacao3;
	
	private $correspondenteA;
	private $correspondenteA3;
	
	public function __construct(){
		//Contrutor
	}
	
	public function criptografar($mensagem){
		$this->mensagem = $mensagem;
		$this->operacao1();
		$this->operacao2();
		$this->operacao3();
	}
	
	private function operacao1(){
		$arrayANumero = str_split($this->mensagem);
		$contador = 0;
		
		foreach ($arrayANumero as $value) {
			$this->correspondenteA[$contador] = ord($value);
			$contador++;
		}
		
		$contador = 0;
		
		foreach ($this->correspondenteA as $value) {
			if($value >= 65 && $value <= 122){
				$this->correspondenteA3[$contador] = chr(($value + 3));
			}else{
				$this->correspondenteA3[$contador] = chr(($value));
			}
			
			$contador++;
		}
		
		$this->mensagemOperacao1 = implode($this->correspondenteA3, "");
	}
	
	private function operacao2(){
		$this->mensagemOperacao2 = implode(array_reverse(str_split($this->mensagemOperacao1)), "");
	}
	
	private function operacao3(){
		$intProvisorio = strlen($this->mensagemOperacao2);
		
		if(($intProvisorio%2) != 0){
			$intDefinitivo = ($intProvisorio/2) - 0.5;
		}else{
			$intDefinitivo = $intProvisorio/2;
			$intDefinitivo -= 1;
		}
		
		$arrayOperacao2 = str_split($this->mensagemOperacao2);
		$contador = 0;
		
		foreach ($arrayOperacao2 as $value) {
			
			if($contador <= $intDefinitivo){
				$this->mensagemOperacao3[$contador] = $value;
			}else{
				$valorA = ord($value);
				$this->mensagemOperacao3[$contador] = chr($valorA - 1);
			}
			
			$contador++;
			
		}
		
		print_r(implode($this->mensagemOperacao3), "");
		
	}
}