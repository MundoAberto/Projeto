<?php


class funcionario{
	
	public $departamento;
	public $salario;
	public $dataEntrada;
	public $CPF;
	public $ganhoAnual;

	public function recebeAumento(){
		$this->salario=$this->salario+($this->salario*0.1);
	}
	public function calculoGanhoAnual(){
		$this->ganhoAnual=$this->salario*12;
	}
}


// $usuario = new funcionario();
// $usuario->salario=100;
// $usuario->calculoGanhoAnual();
// echo $usuario->ganhoAnual;