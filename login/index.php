<?php
    if(isset($_POST['submit']))
    {
      /* print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);
        print_r('<br>');
        print_r('Senha: ' . $_POST['senha']);*/

        include_once('conexao.php');

        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $senha= $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')");

        

    };
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
        
    <title>Tela de Login</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <h1>Create account</h1>
            
            <form action="index.php" method="POST">
                <div class="label-float">
                    <input type="text" name="nome" id="usuario" placeholder="" required>
                    <label for="usuario"> Usuário</label>
                </div>

                <div class="label-float">
                    <input type="email" name="email" id="email" placeholder="" required>
                    <label for="email">E-mail</label>
                    
                </div>

                <div class="label-float">
                    <input type="password" name="senha" id="senha" placeholder="" required>
                    <label for="senha">Senha</label>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </div>

                <div class="justify-center">
                    <input class="button" type="submit" name="submit" id="submit">
                </div>
            </form>

            <div class="justify-center">
                <hr>
            </div>

            <p>Não tem uma conta?
                <a href="#">Cadastre-se</a>
            </p>
        </div>
    </div>
</body>

</html>