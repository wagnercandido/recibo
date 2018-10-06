<?php
require 'configdb.php';

//Retornando o ID do usuário
session_start();
$id = $_SESSION['iduser'];



?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styleMeusrecibos.css">
    <title>Recibos Online</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #045FB4;">
        <div class="container containerlg">
            <a class="navbar-brand" href="gerarecibo.php">Recibos Online</a>
            
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-md-end" id="navbarMenu">
                <div class="navbar-nav">
                    <a href="gerarecibo.php?" class="nav-item nav-link"></i>Home</a>
                </div>
                <div class="navbar-nav">
                    <a href="logout.php?" class="nav-item nav-link">
                        <i class="fas fa-sign-out-alt "></i>Sair</a>
                </div>
            </div>
        </div>

    </nav>
    <div class="container">
        <table class="table table-hover table-responsive-sm">
            <thead class="thead-light">
                <tr>
                    <th>Data</th>
                    <th>Pagador</th>
                    <th>Valor</th>
                    <th>Recebedor</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>

            
                <?php
                    $sql = "SELECT recibo.idrecibo,recibo.dataRecibo,recibo.pagadorRecibo,recibo.valorRecibo,recibo.recebedorRecibo, recibo.iduser, user.iduser FROM recibo,user WHERE recibo.iduser=user.iduser AND user.iduser = '$id'";
                    $sql = $pdo->query($sql);
                    if($sql->rowCount()>0){
                        foreach($sql->fetchAll() as $recibos){
                            echo '<tr>';
                            echo '<td>'.date('d/m/Y', strtotime($recibos['dataRecibo'])).'</td>';
                            echo '<td>'.$recibos['pagadorRecibo'].'</td>';
                            echo '<td>'.number_format($recibos['valorRecibo'],2,",",".").'</td>';
                            echo '<td>'.$recibos['recebedorRecibo'].'</td>';
                            echo '<td><a href="reprint.php?idrecibo='.$recibos['idrecibo'].'"><i class="fa fa-print aria-hidden="true"></i></a></td>';
                            //echo '<th><a href="editar.php?iduser='.$usuario['iduser'].'">Editar</a> - <a href="excluir.php?iduser='.$usuario['iduser'].'">Excluir</a></th>';
                            echo '</tr>';
                        }
                    }
                ?> 
            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="mascara.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</body>

</html>