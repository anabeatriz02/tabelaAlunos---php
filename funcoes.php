<?php

function situacaoAproRepro(array &$alunos){
    foreach($alunos as $chave => $aluno){
        if($aluno["nota"] >= 50){
            $alunos[$chave]["situacao"]  = "Aprovado";
        }else{
            $alunos[$chave]["situacao"]  = "Reprovado";
        }
    }

    return;
}

function alterarNotaAluno(array &$turma, $nome, $novaNota){
    foreach($turma as $chave => $aluno){
        if($aluno["nome"] == $nome){
            $turma[$chave]["nota"] = $novaNota;
            return;
      
        }
     }
}


?>