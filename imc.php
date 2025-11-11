<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        if( !isset($_GET['nome']) && !isset($_GET['email']) && !isset($_GET['peso']) && !isset($_GET['altura']) ) {
            header("Location:formulario.php");
            exit;
        }
        elseif(($_GET['peso'] / ($_GET['altura']*$_GET['altura']))<18)
    ?>

</body>
</html>