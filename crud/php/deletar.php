<?php
   include('conexao.php');
   $id = $_GET['id'];

   $sql = "DELETE FROM tb_aluno WHERE id='$id'";

   try{
     $conn->exec($sql);
     header("Location: ../consultar.php");
}catch(PDOException $E){
     echo "Erro ao deletar".$E->getMessage();  
   }
?>