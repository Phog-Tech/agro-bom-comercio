<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="../view/styles/signin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <section class="sectionAlign">
            <div class="card">
                <div class="card-body">
                    <form action="../model/login.php" method="post">
                        <div class="mb-3">
                            <div id="registertext" class="form-text">
                                <h1>Entrar </h1>
                            </div>
                            <div id="subtext" class="form-text">
                                <h6>Por favor complete o formulário para entrar em sua conta. </h6>
                            </div>
                            <label for="email" class="form-label">Endereço de Email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div id="termsandconditionstext" class="form-text"><a href="#">Termos e privacidade</a> </div>
                        <br>
                        <input type="submit" value="Login" class="btn btn-dark btn-lg">
                        <br><br>
                        <div id="logintext" class="form-text"> Ainda não possui uma conta? <a href="register.php">Cadastre-se</a></div>
                    </form>
                    </div>
                </div>
        </section>
        </div>
</body>

</html>