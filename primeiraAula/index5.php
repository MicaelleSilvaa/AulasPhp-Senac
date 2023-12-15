<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Data em PHP</title>
        <meta charset="utf-8">
    </head>
<body>
    <?php
    //Aqui deve ser escrito
    
    $produto1 = (float) 3.50; 
    $produto2 = (float) 5.50;
    $produto3 = (float) 7.00;
    $soma = $produto1 + $produto2 + $produto3;
    $desconto = $soma*0.10;
    $descontoFinal = $soma - $desconto;

        echo "A soma é $soma e o desconto é $desconto, logo o valor com desconto é $descontoFinal"
        
    ?>
</body>
</html>
