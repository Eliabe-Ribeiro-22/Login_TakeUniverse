<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Take Universe</title>
</head>

<body>
    
   <div class="container">
        <div class="illustration">
            <img src="photographer.svg" alt="">
        </div>

   <div class="login">
            <h2>take<span>universe</span></h2>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
            <script src="index.js"></script>
            <form method="POST" onsubmit="return validateForm()">
                <div class="form-control">
                    <span>
                        <input type="email" id="email" placeholder="Email" name="email">
                    </span>
                </div>


                <div class="form-control">
                    <input type="password" id="password" placeholder="Senha" name="password">
                </div>
                <a href="#">Esqueceu a senha?</a>

                <div class="form-control">
                    <input type="submit" id="submit" value="Entrar">
                </div>

            </form>
			<?php
            require_once 'usuarios_sistema.php';
			if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST['email'];
                $password = $_POST['password'];
                if($email == $login['email'] && $password == $login['password']){
					echo "<script>toast({ isLoggedIn: true })</script>";
                    $email = "";
                    $password = "";
                    echo "O metodo do form passa a ser:";
                    var_dump($_SERVER["REQUEST_METHOD"]);
				}
				else{
					echo "<script>toast({ type: 'usuário/senha corretamente' });</script>";
				}
			}
			?>
        </div>
        <h2>Email do desenvolvedor do site: developer.eliabe@gmail.com</h2>
    </div>  
</body>

</html>