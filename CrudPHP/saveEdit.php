<?php
    include_once('conexao.php');

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $selecao = $_POST['selecao'];
        $regiao = $_POST['regiao'];

        $sqlUpdate = "UPDATE teams SET Tname='$selecao', Region='$regiao' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
        
    }
    header('location: sistema.php');

?>