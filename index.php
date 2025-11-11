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

    <h2>Vetores</h2>
    <?php
        $vetor = array(20,39,20,30,38);
        for ($posicao = 0; $posicao<5; $posicao++ ){
            echo $vetor[$posicao] . '<br />';
        }
    ?>

    <h3>1. Array em php</h3>
    <?php
        $vetor = array (2,4,5,6);
        $posicao = 0;
        for($posicao=0; $posicao<count($vetor); $posicao++){
            echo $vetor[$posicao] . '<br>';
        }
        foreach($vetor as $elemento){
            echo " Elemento: " . $elemento . " ";
        }
    ?>

    <h3>Inicializar com chaves</h3>
    <?php
        $vetor = array (
            'nome' => 'Guilherme',
            'sobrenome' => 'Silva',
            'cpf' => '123.456.789-00'
        );

        echo 'Nome: ' . $vetor['nome'] . '<br />';
        echo 'Sobrenome: ' . $vetor['sobrenome'] . '<br />';
        echo 'CPF: ' . $vetor['cpf'];
    ?>

    <h3>Vetor com indice alfabetico</h3>
    <?php
        $vetor = array (
            'nome' => 'Guilherme',
            'email' => 'guilherme.g@gmail.com',
        );
        echo "Nome usuario" . $vetor['nome'] . "<br>";
    ?>

    <h2>Variaveis de ambiente em PHP</h2>
    <?php

        echo "REQUEST: " . var_dump ($_REQUEST) . '<br>';

        echo "$_GET" . $_GET['nome'] . '<br>';
        echo "SERVER: " . var_dump ($_SERVER) . '<br>';

    ?>

</body>
</html>