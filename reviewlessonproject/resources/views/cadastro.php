<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Main Stylesheet File -->
    <link href="../../public/css/style_cadastro.css" rel="stylesheet">


</head>

<body>

    <!--Cadastro-->

    <div class="container">
        <div class="card card-container">

            <form class="form-signin" method="post">
                <fieldset class="formulário" style="padding: 15px">
                    <legend><img src="../../public/img/man.png" width="85" alt="../../public/imagem/avatar"></legend>
                    <h5 class="light center"><b>Cadastro</b></h5></br>



                    <label>Nome Completo:</label>
                    <input type="text" id="nome" class="form-control" placeholder="Digite seu nome compelto" required autofocus>

                    <label>Sobrenome:</label>
                    <input type="text" id="Sobrenome" class="form-control" placeholder="Digite seu sobrenome" required autofocus>

                    <label>CPF:</label>
                    <input type="text" id="CPF" class="form-control" placeholder="Digite o CPF" required autofocus>

                    <label>E-mail:</label>
                    <input type="text" id="email" class="form-control" placeholder="Digite seu email" required autofocus>

                    <label>Senha:</label>
                    <input type="password" id="senha" class="form-control" placeholder="Digite sua senha" required autofocus>

                    <label>Confirmar senha:</label>
                    <input type="password" id="confirmar_senha" class="form-control" placeholder="Confirmar senha" required autofocus>

                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastrar</button>
                </form><!-- /form -->


            </div><!-- /card-container -->
        </div><!-- /container -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Template Main Javascript File -->
        <script src="../../public/js/main_cadastro.js"></script>
    </body>
</html>
