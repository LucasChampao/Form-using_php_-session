<?php
echo "EAI BELEZA";

//iniciar a sessão
session_start();

// guardar o nome e o email em uma variavel 
$nome = $_SESSION['namesfirts'] ?? NULL;
$nome2 = $_SESSION['namessecund'] ?? NULL;
$email = $_SESSION['email'] ?? NULL;
$password = $_SESSION['password'] ?? NULL;


//escrever o html que mostra os valores

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adm</title>
</head>

<body>

    <h1> <?php
            echo "Primeiro Nome: ";
            echo $nome . "<br>";

            ?>
    </h1>

    <h1>
        <?php
        echo "Segundo Nome: ";
        echo $nome2 . "<br>";


        ?>
    </h1>

    <h1>
        <?php
        echo "E-mail: ";
        echo $email . "<br>";
        ?>
    </h1>
    <h1>
        <?php
        echo "Senha: ";
        echo $password . "<br>";
        ?>
    </h1>

</body>

</html>