<?php
  include('php/conexao.php');

  $id = $_GET['id'];

  $sql ="SELECT * FROM tb_aluno WHERE id = '$id'";

  try{
       $resultado = $conn->query($sql);
       $valor = $resultado->fetch(PDO::FETCH_ASSOC); 
  }catch(PDOException $E){
     echo "Erro ao consultar".$E->getMessage();
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
     <form action="php/atualizar.php" method="post">
      <input type="text" name="nome" value="<?= $valor['nome'] ?>">
       <input type="text" name="idade" value="<?= $valor['idade'] ?>">
        <input type="text" name="telefone" value="<?= $valor['telefone'] ?>">
       <input type="text" name="email" value="<?= $valor['email'] ?>">
      <input type="hidden" name="id" value="<?= $valor['id'] ?>">

         <input type="submit" value="Alterar">



     </form>
    
</body>
</html>
