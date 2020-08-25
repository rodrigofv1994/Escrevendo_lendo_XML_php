<?php

if($_POST['usuario']=="admin" && $_POST['senha']=="admin"){
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = $_POST['senha'];
}
require_once './verificaLogin.php';
?>
<html>
    <head><meta charset="utf-8">
        
        <title></title>
    </head>
    <body>
       
       <a href="index.php?deslogar">Deslogar</a>
    </body>
</html>