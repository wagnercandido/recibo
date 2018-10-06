<?php
session_start();
if(isset($_SESSION['iduser']) && empty($_SESSION) == false){
    header("Location: gerarecibo.php");
    
}else{
    header ("Location: login.php");
}