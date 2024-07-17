<?php

    if(isset($_POST['submit']))
    {
    //  print_r($_POST['nome']);

       include_once('config.php');    

        $nome =$_POST['nome'];
        $sexo =$_POST['sexo'];
        $cpf =$_POST['cpf'];
        $rg=$_POST['rg'];
        $estado_civil =$_POST['estado_civil'];
        $data =$_POST['data'];
        $tipo_membro =$_POST['tipo_membro'];
        $email =$_POST['email'];
        $estado =$_POST['uf'];
        $cidade =$_POST['cidade']; 
        $cep =$_POST['cep'];
        $bairro =$_POST['bairro'];
        $rua =$_POST['rua'];
        $numero =$_POST['numero'];
        $comp =$_POST['comp'];

        $result = mysqli_query($conexao, "INSERT INTO membros(nome,sexo,cpf,rg,estado_civil,data,tipo_membro,email,estado,cidade,cep,bairro,rua,numero,comp)
         VALUES ('$nome','$sexo','$cpf','$rg','$estado_civil','$data','$tipo_membro','$email','$estado','$cidade','$cep','$bairro','$rua','$numero','$comp')");

    }

?>






<!DOCTYPE html>
<html lang="pt">
<head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Membro</title>
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
            <h1>Cadastro de Membros</h1>
            <br><br>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" size="50" placeholder="Nome Completo" required>
            
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select><br><br>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf"inputmode="number"  autocomplete="off"placeholder="231.231.321-00">            

            <label for="rg">RG:</label>
            <input type="text" id="rg" name="rg" inputmode="number"  autocomplete="off"placeholder="147.147.147-00">

            <label for="estado_civil">Estado Civil:</label>
            <select id="estado_civil" name="estado_civil" required>
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viúvo(a)">Viúvo(a)</option>
            </select>
         
            <br><br>
            <label for="data">Data de Nascimento:</label>
            <input type="date" name="data" id="data" required>
       
         
             

            <label for="tipo_membro">Tipo de Membro:</label>
            <select id="tipo_membro" name="tipo_membro" required>
                <option value="Membro">Membro</option>
                <option value="Cooperador(a)">Cooperador(a)</option>
                <option value="Diácono">Diácono</option>
                <option value="Presbitéro">Presbitéro</option>
                <option value="Pastor">Pastor</option>
            </select><br><br>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" size="40"placeholder="Email Válido">

            <br><br>
            <h2>Endereço</h2><br>
            <label for="uf">Estado:</label>
            <input id="uf"type="text" name="uf" placeholder=" uf">    
            <label for="cidade">Cidade:</label>
            <input id="cidade"type="text" name="cidade" placeholder=" Cidade"><br><br>
            <label for="cep">CEP:</label>
            <input id="cep"type="text" name="cep" placeholder=" 21365-000">
            <label for="bairro">Bairro:</label>
            <input id="bairro"type="text" name="bairro"placeholder=" Bairro"><br><br>
            <label for="rua">Rua:</label>
            <input id="rua" type="text" name="rua" size="35"placeholder=" Logradouro">
            <label for="nu">Número:</label>
            <input id="numero"type="text" name="numero" size="5"placeholder=" Número"><br><br>
            <label for="comp">Complemento:</label>
            <input id="comp" type="text" name="comp" size="30"placeholder=" Andar, Apartamento, Bloco"><br><br>
            <input type="submit" name="submit"  id="submit" class="botao">
            <br><br>
	   
      </form>
    </div>
</body>

</html>