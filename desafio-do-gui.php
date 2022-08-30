<?php

    $notas = [];

    echo "---------------------------------------------------------------" . PHP_EOL;
    echo "| Notas digitadas acima de 10 ficaram com o valor maxiimo de 10|" . PHP_EOL;
    echo "| Notas não digitadas ou negativas serão consideradas 0       |" . PHP_EOL;
    echo "---------------------------------------------------------------" . PHP_EOL;

    echo "Qual o nome da turma?" . PHP_EOL;
    $turma = fgets(STDIN);

    echo "Digite a quantidade de alunos na turma:" . PHP_EOL;
    $quantidade = (float)fgets(STDIN);

    echo "--------------------------------------------------------------------------------" . PHP_EOL;
    echo "| Digite a nota da primeira prova, aperte enter e digite a nota da segunda prova|" . PHP_EOL;
    echo "-- ------------------------------------------------------------------------------" . PHP_EOL;


    for ($i = 1; $i <= $quantidade; $i++) {

        echo "Aluno $i:" . PHP_EOL;
        $nota1 = (float)fgets(STDIN);
        $nota2 = (float)fgets(STDIN);
        if ($nota1 >= 10) $nota1 = 10;
        if ($nota1 <= 0) $nota1 = 0;
        if ($nota2 >= 10) $nota2 = 10;
        if ($nota2 <= 0) $nota2 = 0;
        $notas[$i]["prova1"] = $nota1;
        $notas[$i]["prova2"] = $nota2;
    }

    $somaDasNotas = 0;    
    $somaDosAlunos = 0;

    foreach ($notas as $nota) {
        $somaDosAlunos += $nota['prova1'] + $nota['prova2'];
        $somaDasNotas=$somaDosAlunos;
        $mediaAluno = $somaDosAlunos / 2;
    }
    
    $media = $somaDasNotas / ($quantidade * 2);
    $resultado = $mediaAluno / $quantidade;


    echo "-------------------------------------------------------" . PHP_EOL;
    echo "| Turma: $turma";
    echo "-------------------------------------------------------" . PHP_EOL;
    echo "| Média de todas as notas: $media" . PHP_EOL;
    echo "-------------------------------------------------------" . PHP_EOL;
    echo "| Média de todas as medias: $resultado" . PHP_EOL;
    echo "-------------------------------------------------------" . PHP_EOL;
    echo "|                  MEDIA DOS ALUNOS                    |" . PHP_EOL;
    echo "-------------------------------------------------------" . PHP_EOL;

    foreach ($notas as $indice => $nota) {
        $somaDosAlunos = $nota['prova1'] + $nota['prova2'];
        $mediaAluno = $somaDosAlunos / 2;
        echo "| Aluno $indice" . PHP_EOL;
        echo "| Média:$mediaAluno" . PHP_EOL;
        echo "-------------------------------------------------------" . PHP_EOL;
    }
    echo "| Média de todas as notas: $media" . PHP_EOL;
    echo "-------------------------------------------------------" . PHP_EOL;
    echo "| Média de todas as medias: $resultado" . PHP_EOL;
    echo "-------------------------------------------------------" . PHP_EOL;
