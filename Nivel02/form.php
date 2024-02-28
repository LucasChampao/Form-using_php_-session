<?php
$nome = $_POST['namesfirts'] ?? NULL;
$nome2 = $_POST['namessecund'] ?? NULL;
$email = $_POST['email'] ?? NULL;
$password = $_POST['password'] ?? NULL;

if (!empty($nome) && !empty($email) && !empty($nome2)) {
  //conexão com o banco de dados
  
  //verificar se o usuario é ativo?
  
  // iniciar a sessao
  session_start();

  // gravar login e senha na sessao
  $_SESSION["namesfirts"] = $nome;
  $_SESSION["namessecund"] = $nome2;
  $_SESSION["email"] = $email;
  $_SESSION["password"] = $password;
  
  // redirecionar o usuario para a pagina administrativa
  echo "<script>window.location.href='adm.php'</script>";
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Challenges </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 style="text-align: center;"> FORMULÁRIO </h1>
  <form action="" method="POST">

    <div class="row-3">
      <div class="col">
        <label for="firtsname"> <strong> Primeiro Nome: </strong> </label>
        <input type="text" class="form-control" name="namesfirts" id="pnome" placeholder="Primeiro Nome" aria-label="First name">
      </div>

      <div class="col">
        <label for="secundsname"> <strong> Segundo Nome: </strong> </label>
        <input type="text" class="form-control" name="namessecund" id="snome" placeholder="Segundo Nome" aria-label="Last name">
      </div>

      <div class="col">
        <label for="emailname"> <strong> E-mail: </strong> </label>
        <input type="email" class="form-control" name="email" placeholder="E-mail" aria-label="Last name">
      </div>

      <div class="col">
        <label for="passwords"> <strong> Senha: </strong> </label>
        <input type="password" class="form-control" name="password" placeholder="Senha" aria-label="Last name">
      </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>

    </div>

  </form>


</body>

<footer>
  <h2 style="text-align: center;"> Autor: Lucas Rodrigues Chanpao</h2>
</footer>
</html>