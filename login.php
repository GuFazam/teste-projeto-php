<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="validar.php">
        <input name="email" type="email" placeholder="e-mail">
        <input name="senha" type="password" placeholder="senha">
        <button type="submit">Entrar</button>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">
    <title> Login </title>
    
</head>
<body>   
    <main id="container">
        <form id="login_form" method="post" action="validar.php">
            <!-- Form Header -->
            <div id="form_header">
                <h1>Login</h1>
            </div>

            <!-- icones de midia social -->
            <div id="social_media">
                <!-- Facebook -->
                <a href="#">
                    <img src="imagens-login/facebook.png" alt="">
                </a>

                <!-- Google -->
                <a href="#">
                    <img src="imagens-login/google.png" alt="Google logo">
                </a>
                
                <!-- GitHub -->
                <a href="#">
                    <img src="imagens-login/github.png" alt="">
                </a>
            </div>

            <!-- Inputs -->
            <div id="inputs">
                <!-- Nome -->
                <div class="input-box">
                    <label for="nome">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="nome" name="nome">
                        </div>
                    </label>
                </div>
                
                <!-- Email -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <!-- Senha -->
                <div class="input-box">
                    <label for="senha">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="senha" id="senha" name="senha">
                        </div>
                    </label>
                    
                    <!-- cadastre-se -->
                    <div id="cadastre-se">
                        <p> Não tem uma conta?
                            <a href="#"> Cadastre-se </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Login Button -->
            <button type="submit" id="login_button">Login</button>
        </form>
    </main>

</body>
</html>