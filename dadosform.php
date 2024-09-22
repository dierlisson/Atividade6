<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>dadosform</title>
</head>
<body>
    
<?php
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $cpf=$_POST['cpf'];
    $cadHorario= new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );

    // $variavel = var_dump($_POST);
    if(!empty($_POST)){
        echo "<h1>Dados Cadastrados!</h1><br>"."<h4>Dados do cliente:</h4><br>"."<h1> Nome: $nome <br> Email: $email <br> CPF: $cpf </h1>";
        echo"<h6> Horário do cadastro: ".$cadHorario->format('d/m/Y H:i')."</h6>";
    }
?>
</body>
</html>