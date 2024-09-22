<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>cadclienteself</title>
</head>

<body>
    <h1>Cadastro de Clientes</h1>

    <form action="./cadclienteself.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf">

        <button type="submit" name="cadastrar">Cadastrar</button>

    </form>

    <?php
    if (isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];

        // $cadHorario= new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
        date_default_timezone_set('America/Sao_Paulo');
        $cadHorario = date('d/m/Y H:i:s', $_SERVER['REQUEST_TIME']);

        // $variavel = var_dump($_POST);
        if (($nome != "" && preg_match("/^[a-z ]+$/i", $nome)) && ($email != "" && $email != " ") && $cpf != "") {
            // if(preg_match("/^[0-9]{11}$/", $cpf)){
            if (strlen($cpf) == 11 && preg_match("/^[0-9]+$/", $cpf)) {

                echo "<h1>Dados Cadastrados!</h1><br>" . "<h4>Dados do cliente:</h4><br>" . "<h1> Nome: $nome <br> Email: $email <br> CPF: $cpf </h1>";
                echo "<h6> Horário do cadastro: " . $cadHorario;
            } else {
                echo "<h1>Informe um CPF válido!</h1>";
            }
        } else {
            echo "<h1>Todos os campos devem ser informados!</h1>";
        }
    }


    ?>
</body>

</html>