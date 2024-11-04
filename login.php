<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Tela Login</title>
</head>
<body>
    <section>
        <div class="box-login">
            <div class="div"></div>
            <div class="area-form">
                <h1>Login</h1>
                <form method="post">
                    <label>Usuario</label><br>
                    <input type="email" name="email" id="" placeholder="Digite seu email."><br><br>
                    <label>Senha</label><br>
                    <input type="password" name="senha" id="" placeholder="***********"><br><br>

                    <input type="submit" value="Logar"><br>
                    <a href="cadastro.php">INSCREVA-SE</a>
                </form>
            </div>
           
        </div>
    </section>
    
    

    <?php
        if(isset($_POST['email']))
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha))
            {
                $usuario->conectar("cadastrousuarioturma33","localhost","root", "");
                if($usuario->msgErro =="")
                {
                    if($usuario->logar($email,$senha))
                    {
                        header("location: areaRestrita.php");

                    }
                    else
                    {
                        ?>
                            <div class="msg-erro">
                                <p>Email e/ou senha incorretos.</p>
                            </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <div class="msg-erro">
                            <?php echo "Erro: ".$usuario->msgErro; ?>
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