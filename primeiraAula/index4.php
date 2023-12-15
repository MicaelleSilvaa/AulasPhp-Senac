<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Data em PHP</title>
        <meta charset="utf-8">
    </head>
<body>
    <?php
    //Aqui deve ser escrito
    
    $idade = (int) 21; 
    $nome = (string) "Miquinhas";
    $peso = (float) 63.50;
    $altura = (float) 1.63;

    $espacamento = (string) "<br>";

        echo "Altura: $idade, $espacamento Nome: $nome, $espacamento Peso: $peso, $espacamento Altura: $altura";

        echo "$espacamento O aluno $nome possui $idade anos, tem altura de $altura metros e peso $peso";

        echo $espacamento;

        echo gettype ($espacamento);
        
    ?>
</body>
</html>
