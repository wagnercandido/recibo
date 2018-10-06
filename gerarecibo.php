<?php
require 'configdb.php';

//Retornando o ID do usuário
session_start();
$id = $_SESSION['iduser'];

if (isset($_POST['valor']) && empty($_POST['valor']) == false) {
    //Coletando dados do formulário
    $valor = addslashes($_POST['valor']);
    $data = addslashes($_POST['data']);
    $pagador = addslashes($_POST['pagador']);
    $docpag = addslashes($_POST['docpagador']);
    $referente = addslashes($_POST['referencia']);
    $recebedor = addslashes($_POST['recebedor']);
    $docreceb = addslashes($_POST['docrecebedor']);
    $fonereceb = addslashes($_POST['fonerecebedor']);

    $sql = "INSERT INTO recibo VALUES(null,'$valor','$data','$pagador','$docpag','$referente','$recebedor','$docreceb','$fonereceb','$id')";
    $pdo->query($sql);
    header("Location: recibo.php");
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="ico.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Recibos Online</title>
    <script type="text/javascript">
		window.onload = function () {
			pegarDataAtual();
		}
	</script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #045FB4;">
        <div class="container">
        <a class="navbar-brand" href="gerarecibo.php">Recibos Online</a>


            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="navbar-collapse collapse justify-content-md-end" id="navbarMenu">
            <div class="navbar-nav">
                <a href="meusrecibos.php?" class="nav-item nav-link"></i>Meus Recibos</a>
            </div>
                <div class="navbar-nav">
                    <a href="logout.php?" class="nav-item nav-link">
                        <i class="fas fa-sign-out-alt "></i>Sair</a>
                </div>
            </div>
        </div>

    </nav>
    <div class="container">
        <p><h5>Preencha o formulário abaixo</h5></p>
        <form method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <label class="label" for="valor">Valor</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input id="valor" type="text" name="valor" class="form-control input" onKeyUp="mascaraMoeda(this, event)" placeholder="0,00" autofocus required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="label label2" for="data">Data</label>
                            <input id="data" type="date" name="data" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="label" for="pagador">Pagador</label>
                <input id="pagador" type="text" name="pagador" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="label" for="docpagador">CPF/CNPJ Pagador</label>
                <input type="text" name="docpagador" id="docpagador" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="label" for="referencia">Referente a</label>
                <input id="referencia" type="text" name="referencia" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="label" for="recebedor">Recebedor</label>
                <input id="recebedor" type="text" name="recebedor" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="label" for="docrecebedor">CPF/CNPJ Recebedor</label>
                <input type="text" name="docrecebedor" id="docrecebedor" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="label" for="fonerecebedor">Telefone Recebedor</label>
                <input type="text" name="fonerecebedor" id="fonerecebedor" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Gerar Recibo" class="btn btn-outline-primary">
            </div>
        </form>
    </div>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="mascara.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</body>

</html>