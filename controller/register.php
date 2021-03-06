<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../view/styles/register.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <section class="sectionAlign">
            <div class="card">
                <div class="card-body">
                    <form action="../model/register.php" method="post">
                        <div class="mb-3">
                            <div id="registertext" class="form-text">
                                <h1>Cadastre-se </h1>
                            </div>
                            <div id="subtext" class="form-text">
                                <h6>Por favor complete este formulário para criar a sua conta. </h6>
                            </div>
                            <label for="email" class="form-label">Endereço de Email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="name" name="nome" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="passwordrepeat" class="form-label">Confirme sua senha</label>
                            <input type="password" name="passwordrepeat" class="form-control" id="passwordrepeat">
                        </div>
                        <br>
                        <!--<div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" value="Fornecedor" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Cliente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" value="Fornecedor" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Fornecedor
                            </label>
                        </div>-->
                        <div id="termsandconditionstext" class="form-text"> Ao criar sua conta você concorda com os <a href="#">Termos e privacidade</a> </div>
                        <br>
                        <input type="submit" value="Registre-se" class="btn btn-dark btn-lg">
                        <br><br>
                        <div id="logintext" class="form-text"> Já possui uma conta? <a href="sign-in.html">Entrar</a></div>
                    </form>
                    </div>
                </div>
        </section>
        </div>

</body>

</html>