<?php

if(isset($_POST["submit"]))
{

    include_once("config.php");

    $chassi = $_POST["chassi"];
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $ano =  $_POST["ano"];
    $cor =  $_POST["cor"];
    $preco = $_POST["preco"];
    $disponibilidade = $_POST["disponibilidade"];
    

    $response = mysqli_query($conexao, " INSERT INTO  veiculo(chassi,modelo,marca,ano,cor,preco,disponibilidade) VALUES('$chassi','$modelo','$marca','$ano','$cor','$preco','$disponibilidade') ");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Veículo</title>
</head>
<body>
<main>
        <div class="form">
            <form action="form2.php" method="post">
                <h1>Dados do Carro</h1><br>
                <label for="chassi">Chassi:</label>
                <input type="text" name="chassi" id="chassi" placeholder="Inserir Chassi"><br><br>

                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" placeholder="Inserir Modelo"><br><br>

                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" placeholder="Inserir Marca do Carro"><br><br>

                <label for="ano">Ano do Carro:</label>
                <input type="date" name="ano" id="ano" placeholder="Inserir Ano do Carro"><br><br>

                <label for="cor"> Cor do Carro:</label>
                <input type="text" name="cor" id="cor" placeholder="Inserir Cor do Carro"><br><br>

                <label for="preco"> Preço do Carro:</label>
                <input type="text" name="preco" id="preco" placeholder="Inserir Preço do Carro"><br><br>

                <label for="disponibilidade"> Disponibilidade do Carro:</label>
                <input type="text" name="disponibilidade" id="disponibilidade" placeholder="Insira Disponibilidade do Veículo"><br><br>

                <input type="submit" name="submit" id="submit">
                



            </form>
        </div>
    </main>
</body>
</html>