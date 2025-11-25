<?php
    require_once "conexao.php"; //get

    $usuarios = get_usuarios();
    
?>

<div class="container">
    <h1>Lista de Usuário</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo htmlspecialchars($usuario['id']);?></td>
            <td><?php echo htmlspecialchars($usuario['username'])?></td>
            <td><?php echo htmlspecialchars($usuario['login'])?></td>
            <td><a href="editar_usuario.php?id=<?php echo urlencode($usuario['id']); ?>">Editar</a></td>
        </tr>
        <?php endforeach; ?>

    </table>

</div>