<?php
date_default_timezone_set("America/Sao_Paulo");
    
try{
    $pdo = new PDO("mysql:host=45.34.12.248;dbname=projetos","rodrigo","rfvg199400");
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

try{
    
    $sql = $pdo->prepare("update usuarios set usuario = 'admin', senha = 'admin' where usuario = ?");
    
    if($sql->execute(array("rodrigo"))){
        echo "Usuário atualizado";
    } else {
        echo "Não atualizado";
    }    
    
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
 


