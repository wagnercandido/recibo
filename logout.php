<?php
session_start();
session_destroy();//Zerando a SESSION
session_unset();
//$_SESSION['iduser'] = "";
header("Location: index.php");//Redirecionando para a página de Inicial

?>