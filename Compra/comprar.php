<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilocomprar3.css">
	<script src="scriptcomprar.js"></script> 
    <title>Loja de Material Elétrico</title>
</head>

<body id="corpocomprar">
<h1> LOJA DE MATERIAL ELÉTRICO </h1>
	<ul class="men">
<li> <a href="http://localhost/siteLoja3/Index/index.php">Principal</a></li>
<li> <a href="http://localhost/siteLoja3/Pagamento/pagamento.php">Pagamento</a></li>
<li> <a href="http://localhost/siteLoja3/Cadastro/cadastro.php">Cadastro</a></li>
<li> <a href="http://localhost/siteLoja3/Fale/FaleConosco.php">Fale Conosco</a></li>
</ul>
<h3>Confira as suas compras:<h3>
<div id = "suascompras">
<table class = "compratable" border="2">
<tr>
<td>Material</td>
<td>Quantidade</td>
<td>Valor Total</td>
</tr>
<tr>
<td>Bobina de 100 m</td>
<td>12</td>
<td>R$ 5600,00</td>
</tr>
</table>



</div>
<div id = "endok">
<input type="submit" value="CONFIRMAR ENDEREÇO DE ENTREGA" id="endereco" onclick="cadastro()">
</div>
<div id="pagamento">

<input type="submit" value="IR PARA PAGAMENTO" id="comptot" onclick="fimtotal()">
</div>
</body>
<footer id = "pe"><p>Copyright 2024: Todos os direitos autorais para LUIZ GONZAGA DE LIMA JUNIOR - luizlimajunior@uol.com.br</p></footer>
</html>