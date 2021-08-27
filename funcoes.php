<?php

function situacaoAproRepro(array &$alunos){
    foreach($alunos as $chave => $aluno){
        if($aluno["nota"] >= 50){
            $turma[$chave]["situacao"]  = "aprovado";
        }else{
            $turma[$chave]["situacao"]  = "reprovado";
        }
    }

    return;
}



?>