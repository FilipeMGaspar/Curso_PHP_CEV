<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula18 - Vetores e Matrizes - Parte 1</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            
           $v = array("a","j", "m","x","k");
           print_r($v) 
             //função array_push() adiciona elemento no fim do vetor
             array_push($v,"o"); //é o mesmo que $v[] = 7; 
             $v[]= "XP";

             //função array_pop() elimina o ultimo elemento do vetor
             array_pop($v); //unset($v);

             print_r($v);
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>