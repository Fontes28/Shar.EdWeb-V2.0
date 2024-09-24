<?php 
if(!isset($_COOKIE['msg']))
{
    $msg='';
}
else{
    $msg=$_COOKIE['msg'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar ou Registrar</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="icon" type="image/x-icon" href="../images/sharEd.ico">
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="../images/Shar.Ed_logo.png" alt="Logo Shar.Ed" title="Shar.Ed Logo" width="120" height="120" />
                </h1>
                <h2 class="flex justify-content-center">
                    Entrar
                </h2>
                <form method="post" action="../../../Shar.EdWeb-V2.0/backend/User/login.php">
                    <label for="email" class="sr-only">Email</label>
                    <input name="email" placeholder="e-mail" />
                    <label for="password" class="sr-only">Senha</label>
                    <input name="password" type="password" placeholder="Senha" />
                    <h5  style="color:red;"><?php echo($msg)?></h5>
                    <a href="../pages/auxPages/password_recover.php">Esqueceu a Senha?</a>
                    <input type="submit"  class="btnLogin" value="Entrar">
                    <h4>
                        <a href="../pages/signup.php">Ainda Não tem uma conta?</a>
                    </h4>
                </form>
            </div> 
        </section>
    </main>
</body>
</html>