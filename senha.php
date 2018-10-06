<?php
require 'configdb.php';
$id = 0;
if(isset($_POST['login']) && empty($_POST['login']) == false){
    $login = addslashes($_POST['login']);
    $senha = md5(addslashes($_POST['senha']));
    $senha2 = md5(addslashes($_POST['senha2']));

    if ($senha == $senha2){
        $sql = "SELECT iduser FROM user WHERE loginuser='$login'";
        $sql = $pdo->query($sql);
        if($sql->rowCount() >0){
            $sql = "UPDATE user SET passworduser='$senha' WHERE loginuser='$login'";
            $pdo->query($sql);
            header("Location: login.php");
        }else{
            echo '
            <div class="container">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
            Usuário inválido!
            <button class="close" data-dismiss="alert" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            </div>
        ';
        }        
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
/*if(isset($_GET['iduser']) && empty($_GET['iduser']) == false){

}
*/
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
        <h4>Esqueceu sua senha?</h4>
        Entre com seu endereço de e-mail, digite sua nova senha e confirme.

        <form class="form" method="POST">
            <div class="form-group">
                <input id="login" type="email" name="login" class="form-control" placeholder="Login">
            </div>
            <div class="form-group">
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua nova senha">
            </div>
            <div class="form-group">
                <input type="password" name="senha2" id="senha2" class="form-control" placeholder="Confirme sua senha">
            </div>

            <div class="form-group">
                <input type="submit" value="Recuperar Senha" class="btn btn-primary btn-block">
            </div>
        </form>
    </div>

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</body>

</html>