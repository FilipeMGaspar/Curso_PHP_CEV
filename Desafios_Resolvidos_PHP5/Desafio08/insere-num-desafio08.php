<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios para iniciantes em PHP5!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $nrDcx = isset($_GET["qtNraIns"]) ? $_GET["qtNraIns"] : "nd";
            echo "<br>";
            var_dump($nrDcx);
            echo "<br>";
            if(($nrDcx != "nd") || ($nrDcx!="")){

            }else{
                echo "Falta definir a quantidade de números a inserir!";
            }
        ?>      
        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>