<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuario</h2><br>
    <form action="" method="post">
        <label>Nome</label><br>
        <input type="text" name="nome" id="" placehpuder="Nome Completo"><br><br>

        <label>Email</label><br>
        <input type="email" name="email" id="" placehpuder="Digite o Email"><br><br>

        <label>Telefone</label><br>
        <input type="tel" name="telefone" id="" placehpuder="Telefone Completo"><br><br>

        <label>Senha</label><br>
        <input type="password" name="senha" id="" placehpuder="Digite sua Senha"><br><br>

        <label>Confirmar Senha</label><br>
        <input type="password" name="confSenha" id="" placehpuder="Confirme a sua Senha"><br><br>

        <input type="submit" value="CADASTRAR">
    </form>

    <?php
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $senha = $_POST['senha'];
            $confSenha = addslashes($_POST['confSenha']);

            if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confSenha))
            {
                $usuario->conectar("cadastrousuarioturma33","localhost","root", "");
                if($usuario->msgError == "")
                {
                    if($senha == $confSenha)
                    {
                        if($usuario->cadastrar($nome, $telefone, $email, $senha))
                        {
                            ?>
                                <!--bloco de HTML -->
                                <div class="msg-sucesso">
                                    <p>cadastrado com Sucesso</p>
                                    <p>Clique <a href="login.php">aqui</a></p>
                                </div>
                            <?php
                        }
                    }
                }
                else
                {
                    echo "Tente outra Vez".$usuario->msgError;
                }
            }
        }
    ?>

</body>
</html>