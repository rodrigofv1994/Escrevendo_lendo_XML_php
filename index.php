<!DOCTYPE html>
<?php
//index.php
session_start();

if(isset($_GET['deslogar'])){
      session_destroy(); //nao funciona
      unset($_SESSION['usuario']);//nao funciona
      unset($_SESSION['senha']);//nao funciona
      echo "deslogar setado";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Usuário:admin Senha:admin</p>
        <form action="inicio.php" method="post">
            <input type="text" name="usuario" required="required" maxlength="16" placeholder="Usuário" autocomplete="on">
            <input type="password" name="senha" required="required" maxlength="16" placeholder="Senha" autocomplete="on">
            <button type="submit">Logar</button>
        </form>
    </body>
</html>
