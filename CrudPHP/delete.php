<?php
    if(!empty($_GET['id']))
    {
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "DELETE FROM teams WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
             $sqlDelete = "DELETE * FROM teams WHERE id='$id'";
             $resultDelete = $conexao->query($sqlDelete);
        }
        else 
        {
             header('location: sistema.php');
        }
}
?>