<?php

//Criptografia irreversível, não consegue retornar ao valor original
$nome = "Deusyvan";
$nome2 = md5($nome);

echo "Nome original: ".$nome."<br/>";
echo "Nome cripto: ".$nome2."<br/>";

//Criptografia reversível, consegue retornar ao valor original
$nome = "Deusyvan";
$nome2 = base64_encode($nome);

echo "Nome original: ".$nome."<br/>";
echo "Nome cripto: ".$nome2."<br/>";

$codigo = "RGV1c3l2YW4=";

echo "Meu texto original é: ".base64_decode($codigo);
?>