<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
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
    <link href="../../public/css/style_login.css" rel="stylesheet">

    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
</head>


<body>
    <!-- Modal -->
    <div id="meuModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Conteúdo do modal-->
            <div class="modal-content">

                <!-- Cabeçalho do modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Trocar senha</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Corpo do modal -->
                <div class="modal-body">
                    <p>Identifique-se para receber um e-mail com as instruções e o link para criar uma nova senha.</p>
                    <input type="email" placeholder="Ex. joaodasilva@gmail.com" class="form-control" name="email" required="">
                </div>

                <!-- Rodapé do modal-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </div>
        
    <!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="../../public/img/logo.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="nome" class="form-control" placeholder="Nome" required autofocus>
                    <input type="password" id="senha" class="form-control" placeholder="Senha" required>

                    <select class="form-control">
 <option selected="selected">Selecione</option>
  <option value="volvo">Aluno</option>
  <option value="saab">Professor</option>
  
</select>
                    <div id="remember" class="checkbox">
                        <label><input type="checkbox" value="remember-me">Lembre-se de mim</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</a></button>
                </form><!-- /form -->

                <a href="cadastro.php" class="text-center"><p>Cadastre-se</p></a>
                <a href="esqueceu_senha.php" class="forgot-password" data-toggle="modal" data-target="#meuModal">Esqueceu a senha?</a>
        </div><!-- /card-container -->
    </div><!-- /container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Template Main Javascript File -->
    <script src="../../public/js/main_login.js"></script>
</body>
</html>
