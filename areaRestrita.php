<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    button{
        width: 200px;
        height: 35px;
        border: none;
        border-radius: 10px;
        background-color: #5fcae2;
        color: white;
        font-size: 16px;
        font-weight: 600;
        transform:  transform 2.0s ease;
        margin-left: 20px;
    }
    button:hover{
        transform: scale(1.1);
    }

    .bb{
    width: 200px;
    height: 35px;
    border: none;
    border-radius: 10px;
   margin-bottom: 800px;
   background-color: rgb(69, 148, 240);
   color: #5fcae2;
   font-size: 16px;
   font-weight: 600;
   transform:  transform 2.0s ease;
   color: white;
}

</style>
<body>
    <h2>Entrou</h2>
    <button onclick="window.location.href='index.php'">Lista de Usuarios</button>
    <button class="bb" onclick="window.location.href='login.php'">Voltar Tela Login</button>
</body>
</html>