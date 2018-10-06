<?php
require 'configdb.php';
session_start();

if(isset($_POST['login']) && empty($_POST['login']) == false){
    $login = addslashes($_POST['login']);
    $senha = md5(addslashes($_POST['senha']));

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpassword);
        $sql = $pdo->query("SELECT * FROM user WHERE loginuser='$login' AND passworduser='$senha'");

        if ($sql->rowCount() > 0){
            $dado = $sql->fetch();
            
            $_SESSION['iduser'] = $dado['iduser'];
            
            header("Location: index.php");
        }else{

            echo '
                <div class="container">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="alert-heading">Acesso Negado</div>
                E-mail ou senha inválidos
                <button class="close" data-dismiss="alert" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                </div>
            ';
            
        }
    }catch(PDOException $e){
        echo "Conexão falhou: ".$e->getMessage();
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
        <h4>Acesse</h4>
        sua conta ou <a href="users.php">crie uma nova conta grátis</a>
    
        <form class="form" method="POST">
            <div class="form-group">
                <input id="login" type="email" name="login" class="form-control" placeholder="E-mail" autofocus required>
            </div>
            <div class="form-group">
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Entrar" class="btn btn-primary btn-block">
            </div>
            
            <a href="senha.php">Esqueceu sua senha?</a>
        </form>
    </div>

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</body>

</html>