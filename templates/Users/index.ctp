<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
                <th><?php echo $usuario->id; ?></th>
                <th><?php echo $usuario->nome; ?></th>
                <th><?php echo $usuario->email; ?></th>
                <th> Ver, Editar, Apagar</th>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
