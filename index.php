<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Minha pag

    <?php
        echo "oie"."<BR>";

        $nome = "lia";

        echo $nome;

    ?>

    <h2>Exemplo tipo de dados PHP</h2>

    <?php
        $a = 5;
        $b = 7;

        //esse
        echo "<p>".$a+$b."<p>"
    ?>
    
    <!--e esse são formas válidas de imprimir dentro de um parágrafo-->
    <p> <?php echo $a+$b ?> </p>

    <h2>Operador ternario</h2>
    <?php
        $nota = 8;
        $situacao = $nota >= 6 ? 'aprovado' : 'reprovado';
        echo $situacao
    ?>

    <h2>While</h2>
    <?php
        $i = 0;
        while($i<10){
            $i++;
            echo "i=".$i." - ";
        }
    ?>
</body>
</html>