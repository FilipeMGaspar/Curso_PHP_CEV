<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula14 - Rotinas em PHP - Parte 1</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            function soma ($a, $b){
                $s = $a + $b;
                echo "A soma vale $s";
            }

            soma(3, 4);
        
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>