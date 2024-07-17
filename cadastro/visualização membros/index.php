<?php

include_once('config.php');

$sql = "SELECT * FROM membros ORDER BY id DESC";

$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <title>Visualização dos Membros</title>
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
            min-height: 60vh;
        }
        .form {
            background: #d3d3d3;
            color: #069;
            width: 90%;
            max-width: 900px;
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
                width: 100%;
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
        <img src="./img/logo.png" width="110" height="110">
        <h1>Membros</h1>
     
        <form action="index.php" method="POST">
            <br>
            <div class="m-5">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-#069">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">CPF</th>
                                <th scope="col">RG</th>
                                <th scope="col">Estado Civil</th>
                                <th scope="col">Data</th>
                                <th scope="col">Tipo de membro</th>
                                <th scope="col">email</th>
                                <th scope="col">UF</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">CEP</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Rua</th>
                                <th scope="col">Numero</th>
                                <th scope="col">Comp</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($user_data = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>".$user_data['id']."</td>";
                                echo "<td>".$user_data['nome']."</td>";
                                echo "<td>".$user_data['sexo']."</td>";
                                echo "<td>".$user_data['cpf']."</td>";
                                echo "<td>".$user_data['rg']."</td>";
                                echo "<td>".$user_data['estado_civil']."</td>";
                                echo "<td>".$user_data['data']."</td>";
                                echo "<td>".$user_data['tipo_membro']."</td>";
                                echo "<td>".$user_data['email']."</td>";
                                
                                // Verifica se a chave 'uf' existe antes de imprimi-la
                                if (isset($user_data['uf'])) {
                                    echo "<td>".$user_data['uf']."</td>";
                                } else {
                                    echo "<td>Não informado</td>";
                                }
                                
                                echo "<td>".$user_data['cidade']."</td>";
                                echo "<td>".$user_data['cep']."</td>";
                                echo "<td>".$user_data['bairro']."</td>";
                                echo "<td>".$user_data['rua']."</td>";
                                echo "<td>".$user_data['numero']."</td>";
                                echo "<td>".$user_data['comp']."</td>";
                                echo "<td>
                                    <a class='btn btn-sm btn-danger' href='delete.php?id=".$user_data['id']."' title='Deletar'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                        </svg>
                                    </a>
                                </td>";
                                echo "</tr>";

                           
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</body>
</html>
