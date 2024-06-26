
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
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Imagem" class="flex justify-content-center">
                    <img src="../images/Shar.Ed_logo.png" alt="Logo Shar.Ed" title="Shar.Ed Logo" width="120" height="120" />
                </h1>
                <h2 class="flex justify-content-center">
                    Registrar
                </h2>
                <form method="post" action="../../backend/User/signup.php">
                    <label for="name" class="sr-only">Email</label>
                    <input name="name" placeholder="Nome Completo" />

                    <label for="email" class="sr-only">Email</label>
                    <input name="email" placeholder="E-mail" />

                    <label for="password" class="sr-only">Senha</label>
                    <input name="password" type="password" placeholder="Senha" />

                    <label for="confirm-password" class="sr-only">Senha</label>
                    <input name="confirm-password" type="password" placeholder="Confirme a Senha" />

                    <input type="submit"  class="btnLogin" value="Registrar">
                </form>
                <div class="flex separator align-items-center">
                   
                </div>
                
            </div>
            
        </section>
    </main>
</body>

</html>