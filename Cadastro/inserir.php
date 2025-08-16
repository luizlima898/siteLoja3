<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 #primo{background-color: pink;}
    </style>
    <title>INSERIR DADOS EM CADASTRO_CLIENTE</title>
</head>
<body id = "inserir">

<h1>
OS DADOS FORAM INSERIDOS COM SUCESSO
</h1>

<br>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname ='cadastro_loja3';

$conn = mysqli_connect($servername,  $username, $password);
mysqli_select_db($conn, $dbname);
if (!$conn){
    die("Conexão falhou: ". mysqli_connect_error());
}
echo "Conectado com sucesso ao banco de dados";
echo nl2br("\n");
?>

<?php
//Comando para inserir dados
$codigo = ($_POST['codigo']);
$nome = ($_POST['nome']);
$correio = ($_POST['e_mail']);
$end = ($_POST['endereco']);
$city = ($_POST['cidade_e_estado']);
$cep = ($_POST['cep']);



$sql="INSERT INTO cadastro_cliente VALUES ($codigo, '$nome', '$correio', '$end', '$city', '$cep')";
$dado = mysqli_query($conn, $sql);

//Código para contagem de linhas
$res=mysqli_query($conn,"SELECT * FROM cadastro_cliente");
$linhas = mysqli_num_rows($res);
echo ("Encontradas $linhas linhas na tabela cadastro_cliente");

mysqli_close($conn);
?>
