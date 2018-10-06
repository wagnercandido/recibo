<?php
require 'configdb.php';

//Retornando o ID do usuário
session_start();
$id = $_SESSION['iduser'];

//Consultando recibos inseridos pelo usuário atual
$sql = "SELECT * FROM user, recibo WHERE user.iduser=recibo.iduser AND user.iduser='$id' ORDER BY recibo.idrecibo DESC LIMIT 1";
$sql = $pdo->query($sql);
//Valores do Banco
if($sql->rowCount()>0){
    foreach($sql->fetchAll() as $reciboatual){
        $valorbanco = $reciboatual['valorRecibo'];
        $databanco = $reciboatual['dataRecibo'];
        $pagador = $reciboatual['pagadorRecibo'];
        $docpag = $reciboatual['docPagRecibo'];
        $referente = $reciboatual['campoRefRecibo'];
        $recebedor = $reciboatual['recebedorRecibo'];
        $docreceb = $reciboatual['docRecebRecibo'];
        $fonereceb = $reciboatual['foneRecebRecibo'];
    }
}
//Trantando valores necessários
$valor = number_format($valorbanco, 2, ",",".");
$diasSemana = array(1 => 'Segunda-feira', 2 => 'Terça-feira', 3 => 'Quarta-feira', 4 => 'Quinta-feira', 5 => 'Sexta-feira', 6 => 'Sábado', 7 => 'Domingo'); 
$meses = array(1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro');
$dia = date('N',strtotime($databanco));
$mes = date('n',strtotime($databanco));
$data = date('d/m/Y', strtotime($databanco));
$datarecibo = $diasSemana[$dia].", ".date('d',strtotime($databanco))." de ".$meses[$mes]." de ".date('Y',strtotime($databanco));

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Recibos Online</title>
    <script type="text/javascript">
		window.onload = function () {
			pegarDataAtual();
		}
	</script>
</head>

<body>

    <div class="recibo">
        <p class="text-center"><h2 class="txtcentralizado">Recibo</h2></p>
        </br>
        <hr>
        </br>
        <h5><strong><?php echo $pagador; ?></strong></h5>
        </br>
        <h4 class="text-right"><strong>R$ <?php echo $valor; ?></strong></h4>
        </br>
        <p class="text-justify">Recebi(emos) de <strong><?php echo $pagador; ?></strong> inscrito sob o CPF/CNPJ <strong><?php echo $docpag; ?></strong> a importância de <strong>R$ <?php echo $valor; ?></strong> referente a <strong><?php echo $referente; ?></strong>.</p>
        <p>Para maior clareza, firmo(amos) o presente.</p>
        <p><strong><?php echo $datarecibo; ?></strong></p>
        </br></br></br>
        <div class="assinatura">
            <div class="txtass"><?php echo $recebedor; ?></div>
            <div class="txtass"><?php echo $docreceb; ?></div>
            <div class="txtass"><?php echo $fonereceb ?></div>
        </div>
        
    </div>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="mascara.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</body>

</html>