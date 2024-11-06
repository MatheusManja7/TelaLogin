<?php
   include_once 'listarUsuarios.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="listarUsuarios.css">
   <title>Index</title>
</head>
<body>
   <section>
      <div class="conteiner">
         <button onclick="window.location.href='areaRestrita.php'">Voltar</button>
         <h1>Tabela de Usuarios</h1>
         <table>
            <thead>
               <tr>
                  <th>ID_USUARIO</th>
                  <th>NOME</th>
                  <th>EMAIL</th>
                  <th>TELEFONE</th>
                  <th>SENHA</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $result_msg_cont = "SELECT * FROM usuario ORDER BY id_usuario ASC";

                  $resultado_msg_cont = $pdo->prepare($result_msg_cont);
                  $resultado_msg_cont->execute();

                  while($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC))
                  {
               ?>      
               <tr>
                  <td><?php echo $row_msg_cont['id_usuario']; ?></td>
                  <td><?php echo $row_msg_cont['nome']; ?></td>
                  <td><?php echo $row_msg_cont['email']; ?></td>
                  <td><?php echo $row_msg_cont['telefone']; ?></td>
                  <td><?php echo $row_msg_cont['senha']; ?></td>
               </tr>
               <?php
                  }
               ?>
            </tbody>
         </table>  
      </div>
   </section>
</body>
</html>