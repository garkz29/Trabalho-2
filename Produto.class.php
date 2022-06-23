<?php

require_once ("Loja.class.php");

class Produto extends Loja{

	public $Valor;

	function __construct($Produto,$Valor){

		parent::__construct($Produto);
		$this->Valor=$Valor;

	}

	function ValorProduto(){

	return $this->ValorProduto;

	}

	function DadosLoja(){

		parent::DadosLoja();

		echo "<b>ValorProduto: </b>{$this->Valor}<br/>";
		echo "<b>ValorPromo: </b>{$this->ValorProduto()}<br/>";
		echo "<b>Tipo: </b>{$this->Tipo()}<br/>";
	}

	function Tipo(){

		return "Sem Promoção.";

	}

}

?>
