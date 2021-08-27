<?php

require("./alunos.php");
require("./funcoes.php");

//importar o arquivo de funções (cria-lo)
//chamar a função notas e promto

//pintar a cdlula do aluno aprovado
//reprovado de vermelho

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas dos alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <h1>Tabela de notas</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Nota</th>
            <th>Situação</th>
        </tr>

        <?php
            foreach($alunos as $alunos){  
?>
        <tr>
            <td> 
                <?= $alunos["nome"];
            ?>
            </td>

            <td> 
                <?= $alunos["idade"]; 
            ?>
            </td>

            <td>
                <?= $alunos["nota"]; 
            ?>
            </td>

            <td> 
            <?=
            isset($aluno["situacao"]) ?
             $aluno["situacao"]:
             ""
            ?>
            </td>

        <?php
    }
?>

    </table>
    </section>
</body>
</html>

