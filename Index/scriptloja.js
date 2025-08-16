
  
 function compratotal(){
var soma=[];

var preco = document.getElementById('produtof1').value;
var qtd = document.getElementById('inputNumberf1').value;
var produto = preco * qtd;
soma.push(parseFloat(produto));

var precoa = document.getElementById('produtof2').value;
var qtda = document.getElementById('inputNumberf2').value;
var produtoa = precoa * qtda;
soma.push(parseFloat(produtoa));

var precob = document.getElementById('produtof3').value;
var qtdb = document.getElementById('inputNumberf3').value;
var produtob = precob * qtdb;
soma.push(parseFloat(produtob));

var precoc = document.getElementById('produtof4').value;
var qtdc = document.getElementById('inputNumberf4').value;
var produtoc = precoc * qtdc;
soma.push(parseFloat(produtoc));

var precod = document.getElementById('produtof5').value;
var qtdd = document.getElementById('inputNumberf5').value;
var produtod = precod * qtdd;
soma.push(parseFloat(produtod));

var precoe = document.getElementById('produtof6').value;
var qtde = document.getElementById('inputNumberf6').value;
var produtoe = precoe * qtde;
soma.push(parseFloat(produtoe));

var precof = document.getElementById('produtof7').value;
var qtdf = document.getElementById('inputNumberf7').value;
var produtof = precof * qtdf;
soma.push(parseFloat(produtof));

var precog = document.getElementById('produtof8').value;
var qtdg = document.getElementById('inputNumberf8').value;
var produtog = precog * qtdg;
soma.push(parseFloat(produtog));


var sum = 0;
for (var i = 0; i<soma.length; i++){ 
sum=sum+soma[i];
}
sum=sum.toFixed(2);
window.alert("O total da sua compra foi de: R$ "+sum);
 }
 

  function cartot(){
	  var destino = ("http://localhost/siteLoja3/Compra/comprar.php");
	  window.location = destino;
  }
  

