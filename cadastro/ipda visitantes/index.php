<?php

if(isset($_POST['submit'])) {
    include_once('config.php');    

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $tel = mysqli_real_escape_string($conexao, $_POST['tel']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $ende = mysqli_real_escape_string($conexao, $_POST['ende']);

    $sql = "INSERT INTO visitantes (nome, tel, email, ende) VALUES ('$nome', '$tel', '$email', '$ende')";

    if(mysqli_query($conexao, $sql)) {
        //echo "Novo registro criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}

?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Visita no Lar</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        @charset "utf-8";
        /* CSS Document */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body {
            background-color: royalblue;
            background-image: url("../img/logo.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            width: 100%; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form {
            background: #d3d3d3;
            width: 50%;
            max-width: 600px;
            padding: 20px;
            text-align: center;
            border: 2px solid #069;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            background: #069;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 10px 10px 0 0;
        }
        input, select {
            border-radius: 10px;
            height: 30px;
            border: 1px solid #ccc;
            margin: 10px 0;
            padding: 0 10px;
            width: calc(100% - 22px);
            box-sizing: border-box;
        }
        input[type="radio"] {
            height: auto;
            width: auto;
            margin: 0 5px;
        }
        input[type="submit"], input[type="button"] {
            cursor: pointer;
            border-radius: 5px;
            border: none;
            width: 100px;
            height: 35px;
            margin: 10px 5px;
            background: #069;
            color: #fff;
            transition: background 0.3s;
        }
        input[type="submit"]:hover, input[type="button"]:hover {
            background: #0056b3;
        }
        @media (max-width: 680px) {
            .form {
                width: 80%;
                padding: 20px;
            }
            input, select {
                width: calc(100% - 22px);
            }
        }
    </style>
</head>
<body>
    <div class="form">
        <form action="index.php" method="POST"><br>

        <img src="./img/logo.png" width="110" height="110">
            <h1>Pedido para visita no Lar</h1>
            <br>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" size="50" placeholder="Nome Completo" required>
            
           
            <br>

            <label for="tel">Telefone:</label>
            <input type="text" id="tel" name="tel" inputmode="number" placeholder="(61) 9 9999-9999">            

            <br><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" size="40" placeholder="Email Válido">

           <br>

           <label for="ende">Endereço:</label>
           <input type="text" id="ende" name="ende" size="40" placeholder="Endereço">
            
           <br>

            <input type="submit" name="submit" id="submit" class="botao"><br><br>
       
        </form>
    </div>
</body>
</html>
