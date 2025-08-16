<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloindexh.css">
	<script src="scriptloja.js"></script> 
    <title>Loja de Material Elétrico</title>
</head>

<body id="corpo">
<h1> LOJA DE MATERIAL ELÉTRICO </h1>

	<ul class="men">
<li> <a href="http://localhost/siteLoja3/Compra/comprar.php">Suas compras</a></li>
<li> <a href="http://localhost/siteLoja3/Compra/comprar.php ">Frete</a></li>
<li> <a href="http://localhost/siteLoja3/Pagamento/pagamento.php">Pagamento</a></li>
<li> <a href="http://localhost/siteLoja3/Cadastro/cadastro.php">Cadastro</a></li>
<li> <a href="http://localhost/siteLoja3/Fale/FaleConosco.php">Fale Conosco</a></li>
</ul>
<br>
<div id="pesquisa">
<form id="compra" action="" method="post">
<label for = "pesquisa" >Pesquisar:</label>
<input type = "text" id="pesquisa1" value= "  " name="pesquisa">
<input type = "submit" id="search" value="PESQUISAR" name="search" onclick = "searchText()">
<input type="submit" value="TOTAL DA COMPRA" id="comptot" onclick="compratotal()">
<input type="submit" value="IR PARA O CARRINHO" id="car" onclick="cartot()">

</form>
</div>


</div>
<br>
<br>
<nav id = "navegar">
<ul class="men1">
<li> <a href="#containerconectores">Conectores</a></li>
<li> <a href="#containerdisjuntores">Disjuntores</a></li>
<li> <a href="#containerferramentas">Ferramentas</a></li>
<li> <a href="#containerfios">Fios</a></li>
<li> <a href="#containerinterruptores">Interruptores e Tomadas</a></li>
<li> <a href="#containerisoladores">Isoladores</a></li>
<li> <a href ="#containerlampadas">Lâmpadas</a></li>
</ul>
</nav>
<h2>Fios de cobre flexíveis</h2>
<div id = "containerfiosa" class = "section">
<br>      
<div id="mat1"  >
	<H6><b>EMBALAGEM 100M FIO 1,5 MM² PRETO MARCA FICAP </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Fios/Detalhes1.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNomeFio1" value= "Bobina(s) com 100 m de fio 1,5 mm² preto marca FICAP" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produtof1" value= '120.30' name="produtof1" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumberf1" value="0" min="0">
	</div>
	</form>
	<br>
	<input type="submit" value="COMPRAR" id="comptot" onclick="compratotal()">
	</div>
	
	
<div id="mat1"  >
	<H6><b>EMBALAGEM 100 M FIO 2,5 MM² PRETO MARCA FICAP </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Fios/Detalhes2.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNomeFio2" value= "Bobina(s) com 100 m de fio preto 2,5 mm² marca FICAP" name="produto2" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto2">Preço do produto: R$</label>
	<input type = "number" id="produtof2" value= '350.35' name="produtof2" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumberf2" value="0" min="0">
	</div>
	</form>
	<br>
	<input type="submit" value="COMPRAR" id="comptot" onclick="compratotal()">
	</div>
	
	<div id="mat1"  >
	<H6><b>EMBALAGEM 100 M FIO 4 MM² PRETO MARCA FICAP </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Fios/Detalhes3.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNomeFio3" value= "Bobina(s) com 100 m de fio preto 4 mm² marca FICAP" name="produto3" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "estufa2">Preço do produto: R$</label>
	<input type = "number" id="produtof3" value= '220.10' name="produtof3" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumberf3" value="0" min="0">
	</div>
	</form>
	<br>
	<input type="submit" value="COMPRAR" id="comptot" onclick="compratotal()">
	</div>	
	
	<div id="mat1"  >
	<H6><b>EMBALAGEM 100 M FIO 6 MM² PRETO MARCA FICAP </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Fios/Detalhes4.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNomeFio4" value= "Bobina(s) com 100 m de fio preto 6 mm² marca FICAP" name="produto4" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "estufa2">Preço do produto: R$</label>
	<input type = "number" id="produtof4" value= '350.05' name="produtof4" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumberf4" value="0" min="0">
	</div>
	</form>
	<br>
	<input type="submit" value="COMPRAR" id="comptot" onclick="compratotal()">
	</div>	
	</div>
	
	<div id = "containerfiosb" class = "section">
	<br>     
	<div id="mat1"  >
	<H6 id = "vermelho"><b>EMBALAGEM 100M FIO 1,5 MM² VERMELHO MARCA FICAP </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Fios/Detalhes1.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNomeFio5" value= "Bobina(s) com 100 m de fio 1,5 mm² vermelho marca FICAP" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto5">Preço do produto: R$</label>
	<input type = "number" id="produtof5" value= '120.30' name="produtof5" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumberf5" value="0" min="0">
	</div>
	</form>
	<br>
	<input type="submit" value="COMPRAR" id="comptot" onclick="compratotal()">
	</div>
	
	
<div id="mat1"  >
	<H6 id = "vermelho"><b>EMBALAGEM 100 M FIO 2,5 MM² VERMELHO MARCA FICAP </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Fios/Detalhes2.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNomeFio6" value= "Bobina(s) com 100 m de fio vermelho 2,5 mm² marca FICAP" name="produto2" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto6">Preço do produto: R$</label>
	<input type = "number" id="produtof6" value= '350.35' name="produtof6" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumberf6" value="0" min="0">
	</div>
	</form>
	<br>
	<input type="submit" value="COMPRAR" id="comptot" onclick="compratotal()">
	</div>
	
	<div id="mat1"  >
	<H6 id = "vermelho"><b>EMBALAGEM 100 M FIO 4 MM² VERMELHO MARCA FICAP </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Fios/Detalhes3.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNomeFio7" value= "Bobina(s) com 100 m de fio vermelho 4 mm² marca FICAP" name="produto3" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "estufa2">Preço do produto: R$</label>
	<input type = "number" id="produtof7" value= '220.10' name="produtof7" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumberf7" value="0" min="0">
	</div>
	</form>
	<br>
	<input type="submit" value="COMPRAR" id="comptot" onclick="compratotal()">
	</div>	
	
	<div id="mat1"  >
	<H6 id = "vermelho"><b>EMBALAGEM 100 M FIO 6 MM² VERMELHO MARCA FICAP </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Fios/Detalhes4.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNomeFio8" value= "Bobina(s) com 100 m de fio vermelho 6 mm² marca FICAP" name="produto4" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "estufa2">Preço do produto: R$</label>
	<input type = "number" id="produtof8" value= '350.05' name="produtof8" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumberf8" value="0" min="0">
	</div>
	</form>
	<br>
	<input type="submit" value="COMPRAR" id="comptot" onclick="compratotal()">
	</div>	
	</div>
	
	
	<h2>Disjuntores </h2>
	<div id="containerdisjuntores" class = "section">
	<div id="mat1"  >
	<H6><b>DISJUNTOR DE 60 AMPERES CURVA B MARCA WEG</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Disjuntores/Detalhes1.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form2' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Disjuntor(s) de 60A curva B marca WEG" name="produto2" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto2">Preço do produto: R$</label>
	<input type = "text" id="produto2" value= '180,00' name="produto2" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para COMPRAR</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber2" value="1" min="1">
	</div>
	</form>
	<br>
	</div>
	
	
	<div id="mat1"  >
	<H6><b>DISJUNTOR DE 60 AMPERES CURVA C MARCA WEG</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Disjuntores/Detalhes2.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form2' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Disjuntor(es) de 60A curva C marca WEG" name="produto2" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto2">Preço do produto: R$</label>
	<input type = "text" id="produto2" value= '180,00' name="produto2" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber2" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	
	
	<div id="mat1"  >
	<H6><b>DISJUNTOR DE 50 AMPERES CURVA B MARCA WEG</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Detalhes3.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Disjutor(es) de 50 A curva C marca WEG" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<h6>Escolha a quantidade e vá para FINALIZAR COMPRA</h6>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	
	<div id="mat1"  >
	<H6><b>DISJUNTOR DE 50 AMPERES CURVA C MARCA WEG </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Disjuntores/Detalhes4.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Disjuntor de 50 A curva C marca WEG" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	</div>
	<br>
	<h2> Interruptores e Tomadas</h2>
	<div id="containerinterruptores" class = "section">
	
	<div id="mat1"  >
	<H6><b>INTERRUPTOR SIMPLES COR BRANCA MARCA TRAMONTINA</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Interruptores/Detalhes1.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form2' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Interruptor simples cor branca marca TRAMONTINA" name="produto2" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto2">Preço do produto: R$</label>
	<input type = "text" id="produto2" value= '150,00' name="produto2" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber2" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	<div id="mat1"  >
	<H6><b>INTERRUPTOR PARALELO (THREE WAY) COR BRANCA MARCA TRULULU </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Interuptores/Detalhes2.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Interruptor(es) paralelo (three way) cor branca marca TRULULU" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '8.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	<div id="mat1"  >
	<H6><b>INTERRUPTOR PARALELO (THREE WAY) COR BRANCA MARCA TRAMONTINA </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Interruptores/Detalhes3.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Interruptor(es) simples cor branca marca TRAMONTINA" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '8.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	
	
	<div id="mat1"  >
	<H6><b>INTERRUPTOR PARALELO (THREE WAY) COR BRANCA MARCA TRAMONTINA </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Interruptores/Detalhes4.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Interruptor(es) paralelo cor branca marca TRAMONTINA" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '8.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	</div>
	<br>
	
	<h2>Lâmpadas</h2>
	<div id="containerlampadas" class= "section">
	<div id="mat1"  >
	<H6><b>LÂMPADA LED 17 W MARCA OSRAM</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Lampadas/Detalhes1.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Lâmpada led 17 W marca OSRAM" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	<div id="mat1"  >
	<H6><b>LÂMPADA LED 12 W MARCA OSRAM</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Lampadas/Detalhes2.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="estufa">
	</a>
	<form id = 'form2' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Lâmpada led 12 w marca OSRAM" name="produto2" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto2">Preço do produto: R$</label>
	<input type = "text" id="produto2" value= '150,00' name="produto2" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber2" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	</div>
	<br>
	<h2>Conectores</h2>
	<div id="containerconectores" class = "section">
	<div id="mat1"  >
	<H6><b>CONECTOR DE PLÁSTICO AZUL CAPACIDADE DE 1,5 MM MARCA TRULULU</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Conectores/Detalhes1.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Conector de plástico azul capacidade de 1,5 mm marca TRULULU" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	
	<div id="mat1"  >
	<H6><b>CONECTOR DE PLÁSTICO AMARELO CAPACIDADE DE 2,5 MM MARCA TRULULU</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Conectores/Detalhes2.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome" value= "Conector de plástico amarelo capaciade de 2,5 mm marca TRULULU" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="1" min="1">
	</div>
	<br>
	</form>
	<br>
	</div>
	</div>
	<br>
	
	<h2>Isoladores</h2>
	<div id="containerisoladores" class = "section">
	<div id="mat1"  >
	<H6><b>ISOLADOR PARA FIOS DE 25 MM ESTANHADO MARCA TRAMONTINA</b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Isoladores/Detalhes1.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Isolador para fios de 25 mm, estanhado marca TRAMONTINA" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="0" min="0">
	</div>
	<br>
	</form>
	<br>
	</div>
	<div id="mat1"  >
	<H6><b>ISOLADOR PARA FIOS DE 16 MM ESTANHADO MARCA TRAMONTINA </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Isoladores/Detalhes2.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Isolador para fios de 16 mm, estanhado marca TRAMONTINA" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="0" min="0">
	</div>
	<br>
	</form>
	<br>
	</div>
	</div>
	<br>
	<h2>Ferramentas</h2>
	<div id="containerferramentas" class = "section">
	<div id="mat1"  >
	<H6><b>ALICATE DE ESTRIAR COM CAPACIDADE ATÉ 6 MM MARCA WONDER </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Ferramentas/Detalhes1.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Alicate de estriar com capacidade até 6 mm marca WOMDER" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="0" min="0">
	</div>
	<br>
	</form>
	<br>
	</div>
	<div id="mat1"  >
	<H6><b>ALICATE DE BICO PEQUENO MARCA WONDER </b></H6>
	<a href="http://localhost/siteLoja3/Detalhes/Ferramentas/Detalhes2.php">
	<img src="http://localhost/siteLoja3/Img/Estufa2.jpg" alt="farol">
	</a>
	<form id = 'form' action="" method="post">
	<input type = "text" id="produtoNome2" value= "Alicate de bico pequeno marca WONDER" name="produto1" readonly>
	<p>Detalhes do produto: clique na foto acima.</p>
	<p class="linha">_____________________________</p>
	<label for = "produto1">Preço do produto: R$</label>
	<input type = "number" id="produto1" value= '120.34' name="produto1" readonly>
	<br>
	<br>
	<div class = "number-input">
	<label for = "caixa">Quantidade: </label>
	<input type="number" id="inputNumber1" value="0" min="0">
	</div>
	<br>
	</form>
	<br>
	</div>
	</div>
	
</body>
<footer id = "pe"><p>Copyright 2024: Todos os direitos autorais para LUIZ GONZAGA DE LIMA JUNIOR - luizlimajunior@uol.com.br</p></footer>
</html>
