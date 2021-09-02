<?php

require("./alunos.php");
require("./funcoes.php");

situacaoAproRepro($alunos);

if (isset($_GET ["novaNota"])){
    $nome = $_GET["nomeAluno"];
    $novaNota = $_GET["novaNota"];

    alterarNotaAluno($alunos, $nome, $novaNota);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas dos alunos</title>
    <link rel="stylesheet" href="style.css">
    <script src="./scripty.js" defer></script>
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
            foreach($alunos as $aluno){  
    ?>
        <tr onclick="showFormNota('<?= $aluno['nome'] ?>')">
            <td> <?= $aluno["nome"]; ?></td>
            <td> <?= $aluno["idade"]; ?></td>
            <td> <?= $aluno["nota"]; ?></td>

            <td class="
            <?= $aluno["situacao"] == "Aprovado" ? "aprov" : "reprov" ?>
            ">
            <?=
            isset($aluno["situacao"]) ?
                    $aluno["situacao"]:
             ""
            ?>
            </td>

        </tr>
    <?php
    }
?>
    </table>
    </section>
    <div class="container-form-nota">
        <form>
            <input type="number" name="novaNota" placeholder='Digite nova nota'/>
            <input type="hidden" id="nomeAluno" name="nomeAluno"/>
            <button>Alterar</button>
        </form>
    </div>
</body>
</html>