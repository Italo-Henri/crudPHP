<?php
  if(!empty($_GET['id']))
    {
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM teams WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0) {
            while($user_data = mysqli_fetch_assoc($result)){
                $selecao = $user_data['Tname'];
                $regiao = $user_data['Region'];
            }
        }
        else {
            header('location: sistema.php');
        }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR FORMULÁRIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Seleção</b></legend>
                <br>
                <div class="inputBox">
                     <input type="text" name="selecao" id="nome" class="inputUser" value="<?php echo$selecao ?>" required>
                     <label for="nome" class="labelInput">Nome da Seleção</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="regiao" id="nome" class="inputUser" value="<?php echo$regiao ?>" required>
                    <label for="nome" class="labelInput">Região</label>
               </div>
               <br><br>
               <input type="hidden" name="id" value="<?php echo $id ?>">
               <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>