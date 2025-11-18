
    <?php 
      session_start();
        if( !isset($_GET['nome']) || !isset($_GET['email']) || !isset($_GET['peso']) || !isset($_GET['altura']) ) {

            header("Location:formulario.php?error=faltando_dados");
            exit();
        }

        $peso=$_GET['peso'];
        $altura=$_GET['altura'];

        if(!is_numeric($peso) || !is_numeric($altura) || $altura <= 0 || $peso <= 0){
            header("Location: imc_formulario.php?error=valores_invalidos");
            exit();
        }

        $imc = $peso / ($altura * $altura);
        $imc = round($imc, 2);
        echo "<h1>Resultado do Cálculo do IMC</h1>";
        echo "<p>Seu IMC é: $imc</p>";

    ?>
