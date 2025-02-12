<?php

$servidor = "localhost";
$banco = "bd_escola";
$usuario = "root";
$senha ="";

try{
 $conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario, $senha);

           
}catch(PDOException $E){
 echo("Erro de conexão".$E->getMessage());
}


?>