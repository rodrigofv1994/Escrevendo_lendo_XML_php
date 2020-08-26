<?php
//index.php
session_start();

if(isset($_GET['deslogar'])){
      session_destroy(); 
      //header("location: index.php");
}
?>


