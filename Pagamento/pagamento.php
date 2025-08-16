<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilopagamento1.css">
	<script src="scriptpagamento.js"></script> 
    <title>Loja de Material Elétrico</title>
</head>

<body id="corpopagamento">
<h1> LOJA DE MATERIAL ELÉTRICO </h1>
	<ul class="men">
<li> <a href="http://localhost/siteLoja3/Index/index.php">Principal</a></li>
<li> <a href="http://localhost/siteLoja3/Compra/comprar.php ">Suas compras</a></li>
<li> <a href="http://localhost/siteLoja3/Compra/comprar.php">Frete</a></li>
<li> <a href="http://localhost/siteLoja3/Cadastro/cadastro.php">Cadastro</a></li>
<li> <a href="http://localhost/siteLoja3/Fale/FaleConosco.php">Fale Conosco</a></li>
</ul>
<h1>Dados do pagamento </h1>
<h2>Escolha a forma de pagamento:</h2>
<div id = "creditcard">
	<p>Cartão de Crédito: </p>
	<form id = "credit" action="" method="post">
	<label for="nome">Nome:</label>
	<input type = "text" id="nome" name="nome">
	<label for="numero">Número do Cartão de Crédito:</label>
	<input type = "text" id="numero" name="nome">
	<label for="data">Data de Validade:</label>
	<input type = "text" id="data" name="nome">
	<label for="codigo">Código de Segurança:</label>
	<input type = "text" id="codigo" name="nome">
	<input type="button" value="PAGAR NO CRÉDITO" id="envio" onclick="pgcredito()">
	</form>
</div>
<div id = "debit">

	<p>Cartão de Débito: </p>
	<form id = "debit2" action="" method="post">
	<label for="nome2">Nome:</label>
	<input type = "text" id="nome" name="nome">
	<label for="numero2">Número do Cartão de Débito:</label>
	<input type = "text" id="numero" name="nome">
	<label for="data2">Data de Validade:</label>
	<input type = "text" id="data" name="nome">
	<label for="codigo2">Código de Segurança:</label>
	<input type = "text" id="codigo" name="nome">
	<input type="button" value="PAGAR NO DÉBITO" id="envio" onclick="pgdebito()">
	</form>
</div>
<div id = "boleto">
	<p>Boleto: </p>
	<form id = "credit3" action="" method="post">
	<label for="nome3">Nome:</label>
	<input type = "text" id="nome3" name="nome">
	<input type="button" value="PAGAR NO BOLETO" id="boletogerar" onclick="pgboleto()">
	</form>
</div>
<div id = "pix">

	<p>PIX: </p>
	<form id = "credit4" action="" method="post">
	<label for="nome4">Nome:</label>
	<input type = "text" id="nome4" name="nome">
	<input type="button" value="PAGAR NO PIX" id="pixcontact" onclick="pgpix()">
	</form>
</div>
</body>
<footer id = "pe"><p>Copyright 2024: Todos os direitos autorais para LUIZ GONZAGA DE LIMA JUNIOR - luizlimajunior@uol.com.br</p></footer>
</html>