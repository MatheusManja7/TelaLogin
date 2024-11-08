<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="area-h1">
            <h1>Edição</h1>
        </div>
            <label>Nome</label><br>
            <input type="text" name="nome" id="" placeholder="Nome Completo" value="<?php echo htmlspecialchars($nome); ?>"><br><br>

            <label>Email</label><br>
            <input type="email" name="email" id="" placeholder="Digite o Email" value="<?php echo htmlspecialchars($nome); ?>"><br><br>

            <label>Telefone</label><br>
            <input type="tel" name="telefone" id="" placeholder="Telefone Completo" value="<?php echo htmlspecialchars($nome); ?>"><br><br>
                    
            <button class="b3">Concluido</button>
    </form>
</body>
</html>