<?php
require 'configdb.php';
if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $login = addslashes($_POST['login']);
    $senha = md5(addslashes($_POST['senha']));
    $senha2 = md5(addslashes($_POST['senha2']));

    if ($senha == $senha2){
        $sql = "INSERT INTO user VALUES(null,'$nome','$login','$senha')";
        $pdo -> query($sql);

        header("Location: login.php");
    }else{
        echo '
            <div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            As senhas digitadas não estão iguais
            <button class="close" data-dismiss="alert" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            </div>
        ';
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Recibos Online</title>
    <style>
    </style>
</head>

<body>
    <div class="container">
        <h2 class="txtCentralizado">Recibo Online</h2>
        <h4>Seja bem vindo!</h4>
        Crie sua conta

        <form class="form" method="POST">
            <div class="form-group">
                <input id="nome" type="text" name="nome" class="form-control" placeholder="Nome Completo" required autofocus>
            </div>
            <div class="form-group">
                <input id="login" type="email" name="login" class="form-control" placeholder="E-mail" required>
            </div>
            <div class="form-group">
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
            </div>
            <div class="form-group">
                <input type="password" name="senha2" id="senha2" class="form-control" placeholder="Confirme sua senha" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar-se" class="btn btn-primary btn-block">
            </div>
        </form>
    </div>

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</body>

</html>