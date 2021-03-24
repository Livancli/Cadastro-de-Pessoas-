<?php

$nome= $_POST["nome"];
$email= $_POST["email"];
$idade= $_POST["idade"];

file_put_contents("pessoas.csv","$nome;$idade;$email;\n", FILE_APPEND);

header("location: inserir.php?sucesso=s");


?>