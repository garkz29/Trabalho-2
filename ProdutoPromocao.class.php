<?php

require_once ("Loja.class.php");

class ProdutoPromocao extends Loja{

        public $Valor;

        function __construct($Produto,$Valor){

                parent::__construct($Produto);
                $this->Valor=$Valor;

        }

        function ValorProduto(){

        return $this->Valor * 0.9;

        }

        function DadosLoja(){

                parent::DadosLoja();

                echo "<b>ValorProduto: </b>{$this->Valor}<br/>";
                echo "<b>ValorPromo: </b>{$this->ValorProduto()}<br/>";
                echo "<b>Tipo: </b>{$this->Tipo()}<br/>";
		echo "<hr/>";
        }

        function Tipo(){

                return "Em Promoção.";

        }

}
?>
