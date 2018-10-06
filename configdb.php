<?php
    //Realizando conexão com o banco
    $dsn = "mysql:dbname=recibos;host=127.0.0.1";
    $dbuser = "root";
    $dbpassword = "";

    try{
        $pdo = new PDO($dsn,$dbuser,$dbpassword);
    }catch(PDOException $e){
        echo "Não foi possível estabeler a conexão".$e->getMessage();
    }
?>