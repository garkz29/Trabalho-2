<?php

class Loja{

	public $Produto;

	function __construct($Produto){

		$this->Produto=$Produto;

	}

	function DadosLoja(){

		echo "<b>Produto: </b> {$this->Produto}<br/ >";

	}
}
?>
