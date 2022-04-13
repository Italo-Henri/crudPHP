<?php
 

    if(isset($_POST['submit']))
    {
        include_once('conexao.php');

        $selecao = $_POST['selecao'];
        $regiao = $_POST['regiao'];


        $result =  mysqli_query($conexao, "INSERT INTO teams (Tname, Region) VALUES ('$selecao', '$regiao')"); 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário Times</b></legend>
                <br>
                <div class="inputBox">
                     <input type="text" name="selecao" id="nome" class="inputUser" required>
                     <label for="nome" class="labelInput">Nome da Seleção</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="regiao" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Região</label>
               </div>
               <br><br>
               <input type="submit" name="submit" id="submit">
               <br><br>
               <h2> <a href="sistema.php">Listar</a> </h2>
            </fieldset>
        </form>
    </div>
</body>
</html>