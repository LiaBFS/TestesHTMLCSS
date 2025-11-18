<?php
      session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Formulario de Cadastro</h2>

    <?php
      

        if(isset($_SESSION['username'])){
            echo "<p>Usuário logado: " . $_SESSION['username'] . "</p>";
        } else{
            header("Location: login.php?error=nao_autentificado");
            exit();
        }
        if(isset($_GET['nome'])){
            $_SESSION['nome'] = $_GET['nome'];
            echo "<h2>Bem vindo, " . $_SESSION['nome'];
        }


        if (isset( $_GET['error']) && $_GET['error'] == 'faltando_dados'){
            echo "<p style = 'color: red; '>Erro: preencha os campos";
        }
    ?>

    <form action="imc.php" method="get">
        <label for="iname"> Nome</label>
        <input type="text" id="iname" name="nome">

        <label for="iemail">Email</label>
        <input type="text" id="iemail" name="email">

        <label for="ipeso">Peso</label>
        <input type="text" id="ipeso" name="peso" step="0.1" required>

        <label for="ialtura">Altura</label>
        <input type="text" id="ialtura" name="altura" step="0.1" required>

        <input type="submit" value="Cadastrar">

    </form>

</body>
</html>