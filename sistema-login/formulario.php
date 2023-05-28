<?php

    if(isset($_POST['submit']))
    {

        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Sobrenome: ' . $_POST['sobrenome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Senha: ' . $_POST['senha']);
        // print_r('<br>');
       

        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
      

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome_usuario,sobrenome_usuario,email_usuario,senha_usuario) 
        VALUES ('$nome','$sobrenome','$email','$senha')");

        header('Location: formulario.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Sistema Login</title>
</head>
<body>
  <section class="bg-dark p-5 h-120">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Criar Conta</h2>

              <form action="formulario.php" method="POST"> 

                <div class="form-outline mb-4">
                  <input type="text" name="nome" id="nome" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Nome</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="sobrenome" id="sobrenome" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Sobrenome</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Seu Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="senha" id="senha" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Senha</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Digite novamente sua senha</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    Concordo com os <a href="#!" class="text-body"><u>Termos de Serviço</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Cadastrar</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Ja tem uma conta? <a href="#!"
                    class="fw-bold text-body"><a href="login.php"><u>Iniciar sessão</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>