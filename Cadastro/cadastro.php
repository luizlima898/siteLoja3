<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilocadastro1.css">
    <title>Loja de Material Elétrico</title>
</head>

<body id="corpo">
<h1> CADASTRO DE CLIENTES </h1>
<ul class="men">
<li> <a href="http://localhost/siteLoja3/Index/index.php">Principal</a></li>
<li> <a href="http://localhost/siteLoja3/Compra/comprar.php ">Suas compras</a></li>
<li> <a href="http://localhost/siteLoja3/Compra/comprar.php">Frete</a></li>
<li> <a href="http://localhost/siteLoja3/Pagamento/pagamento.php">Pagamento</a></li>
<li> <a href="http://localhost/siteLoja3/Fale/FaleConosco.php">Fale Conosco</a></li>
</ul>
<div id = "cadastro">
<h2> Preencha o cadastro abaixo: </h2>
<form id = "form_um"  action="http://localhost/siteLoja3/Cadastro/inserir.php" method="post" class="container">

	<label for="codigo">Código:</label>
	<input type = "number" id="codigo" name="codigo">
	
	<label for="nome">Nome:</label>
	<input type = "text" id="nome" name="nome">
	
	<label for="e_mail">E-mail:</label>
	<input type = "text" id="mail" name="e_mail">
	
	<label for="endereco">Rua/Avenida/Praça/Número/Bairro:</label>
	<input type="text" id="endereco" name="endereco">
	
	<label for="cidade_e_estado">Cidade:</label>
	<input type="text" id="cidade" name="cidade_e_estado">
	
	<label for="cep">CEP:</label>
	<input type="text" id="cep" name="cep">
	<div id = "botao">

	<input type="submit" value="ENDEREÇO DE ENTREGA" id = "end">  
	<input type="submit" value="ATUALIZAR ENDEREÇO" id = "atual">  
	<input type="submit" value="ENVIAR" id = "ins">  
	</div>
</form>

</div>
</body>
<footer></footer>
</html>