<?php

//Criptografia ireversível, não consegue retornar ao valor original
$nome = "Deusyvan";
$nome2 = md5($nome);

echo "Nome original: ".$nome."<br/>";
echo "Nome cripto: ".$nome2."<br/>";


?>