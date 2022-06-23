<html>
<head>
<title>--={ Produtos }=--</title>
<meta charset="utf-8">
</head>
<body>
<h3 align="center"> Lista dos Produtos </h3>
<?php
// primeiro importamos as classes
require_once 'Produto.class.php';
require_once 'ProdutoPromocao.class.php';

$Produto[1] = new Produto("Leite", "2");
$Produto[2] = new ProdutoPromocao("Pao", "3");
echo "<table border='1'>";
echo "<tr><td>Produto:</td><td>Valor:</td><td>Tipo:</td><td>Valor Promocional:</td></tr>";

foreach ( $Produto as $key => $Prod )
{
	echo "<tr><td>Produto $key</td><td> $Prod->Valor</td><td> {$Prod->Produto}</td>	 <td> {$Prod->ValorProduto()}</td></tr>";
}

echo "</table>";
?>
</body>
</html>
