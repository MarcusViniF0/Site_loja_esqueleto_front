<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan,yellow);
        }
        div{
            background-color:rgba(0 ,0, 0,0.8);
            position: absolute;
            top:35%;
            left: 44%;
            transform: translate(-50%;-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        input[type="submit"]{
            padding: 15px 86px;
        }
        input[type="submit"]:hover{
            background-color:deepskyblue;
            cursor: pointer;
        }
        a{
        color:white;
        }
        a:hover{
        color:deepskyblue;
        }
    </style>
</head>
<body>
    <div class="tela-login">
        <h1>Login</h1>
        <?php
            if (isset($_POST['usuario'], $_POST['senha'],)){
                if($_POST['usuario']=='Maria' && $_POST['senha']=='123'){
                    header('Location: Perfil.php');
                }
            }
        ?>
            <form action="" method="post">
                <input type="text" name="usuario" placeholder="Nome">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input type="submit" name="Entrar" value="Entrar">
                <br><br>
                <a href="Cadastro.php">
                Fazer cadastro</a>
                <br><br>
                <a href="index.php">
                voltar</a>
            </form>
        </div>
</body>
</html>