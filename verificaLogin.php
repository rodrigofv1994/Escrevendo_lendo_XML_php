<?php
//verificaLogin.php
session_start();


if((!isset($_POST['usuario'])&&!isset($_POST['senha']))){ 
    
 header("location: index.php?deslogar");
    
}