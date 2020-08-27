<?php

$alunos = array(
    [
    "id"=>1,
    "nome"=>"Rodrigo",
    "cidade"=>"Rio de janeiro"
    ],
    [
    "id"=>2,
    "nome"=>"Rodrigo 2",
    "cidade"=>"São Paulo"
    ],
);

$dom = new DOMDocument("1.0","utf-8");

$elementoAlunos = $dom->createElement("alunos");

foreach ($alunos as $aluno){
    settype($aluno,"object");
    $elementoAluno = $dom->createElement("aluno");
    $elementoAluno->setAttribute("id",$aluno->id);
    $elementoAluno->setAttribute("nome",$aluno->nome);
    $elementoAluno->setAttribute("cidade",$aluno->cidade);
    $elementoAluno->appendChild($dom->createElement("id",$aluno->id));
    $elementoAluno->appendChild($dom->createElement("nome",$aluno->nome));
    $elementoAluno->appendChild($dom->createElement("cidade",$aluno->cidade));
    $elementoAlunos->appendChild($elementoAluno);    
}

$dom->appendChild($elementoAlunos);
$dom->formatOutput = true;
$dom->save("alunos.xml");

$documento = simplexml_load_file("alunos.xml");

//var_dump($documento);

echo "--------Elementos e seus valores--------<br>";
$contador = 0;
foreach ($documento as $aluno){
    echo $aluno->id . " " . $aluno->nome ." ". $aluno->cidade . "<br>";
    //Como exibir os atributos do id?     
    
    echo "Seu atributo<br>";
    foreach ($documento->aluno[$contador]->attributes() as $atributo => $valor){
        echo $atributo.':'.$valor."<br>";
        //Como exibir os atributos do id?
    }
    $contador++;
    echo "<br>";
}



