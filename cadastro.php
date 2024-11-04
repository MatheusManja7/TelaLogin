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
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="box-principal">
        <h2>Cadastro</h2>
        <form action="" method="post">
            <label>Nome</label><br>
            <input type="text" name="nome" id="" placeholder="Nome Completo"><br><br><br>

            <label>Email</label><br>
            <input type="email" name="email" id="" placeholder="Digite o Email"><br><br><br>

            <label>Telefone</label><br>
            <input type="tel" name="telefone" id="" placeholder="Telefone Completo"><br><br><br>

            <label>Senha</label><br>
            <input type="password" name="senha" id="" placeholder="Digite sua Senha"><br><br><br>

            <label>Confirmar Senha</label><br>
            <input type="password" name="confSenha" id="" placeholder="Confirme a sua Senha"><br><br><br>

            
            <input class="b" type="submit" value="CADASTRAR">
        </form>
    </div>

    

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
                if($usuario->msgErro == "")
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
                        else
                        {
                            ?>
                                <div class="msg-erro">
                                    <p>Email já Cadastrado</p>
                                </div>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <div class="msg-erro">
                                <p>Senha e Confirmar senha não Conferem.</p>
                            </div>
                        <?php
                    }
                }
                else
                {
                    ?>

                        <div class="msg-erro">
                            <?php echo "Erro: ".$usuario->msgErro;?>
                        </div>

                    <?php
                }
            }
            else
            {
                ?>
                    <div class="msg-erro">
                        <p>Preencha todos os campos.</p>
                    </div>
                <?php
            }

        }
    ?>

</body>
</html>