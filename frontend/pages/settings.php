

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="../styles/settings.css">
    <link rel="icon" type="image/x-icon" href="../images/sharEd.ico">
    <script src="../scripts/sidebar.js" defer></script>
</head>
<nav class="navbar">
    <div class="navbar-container">
        <!--logo div-->
        <div class="navbar-logo-div">
            
            <button class="navbar-toggler"><img class="navbar-toggler-img" src="../images/sharEd.svg" alt="menu-toggler" height="64" width="64"></button>
        </div>

        <!--search input-->
       <input type="search" name="search" placeholder="Buscar"
         class="navbar-search" id="search">

        <!--item list-->
        <ul class="menu-list">   
            <li class="menu-item">                        
                <a class="menu-link" class="menu-link" href="./feed.php">
                    <img src="../images/homeIcon.svg" title="Home" class="menu-icon" alt="Home" height="48" width="48">
                    <span class="menu-link-text">Home</span>    
                </a>
            </li>
            <li class="menu-item">                        
                <a class="menu-link" href="./profile.php"> 
                    <img src="../images/profile_image.svg" title="Profile" class="menu-icon" alt="profile-image" height="48" width="48">
                    <span class="menu-link-text">Perfil</span>                            
                </a>
            </li>
            <li class="menu-item">                        
                <a class="menu-link" href="./contentPosting.php"> 
                    <img src="../images/post.svg" title="Post" class="menu-icon" alt="post-content" height="48" width="48">
                    <span class="menu-link-text">Postar</span>                            
                </a>
            </li>
            
            <li class="menu-item">                            
                <a class="menu-link" href="./extraPosting.php">
                    <img src="../images/savedIcon.svg" title="Saved" class="menu-icon" alt="saved" height="48" width="48">
                    <span class="menu-link-text">ExtraCurriculares</span>    
                </a>
            </li>
            <li class="menu-item">                        
                <a class="menu-link" href="./settings.php">
                    <img src="../images/settingsIcon.svg" title="Settings" class="menu-icon" alt="Settings" height="48" width="48">
                    <span class="menu-link-text">Configurações</span>    
                </a>
            </li>
        </ul>
    </div>

    <!--div user info-->
    <div class="user-container">
        <div class="user-info">
            <img class="user-img" src="../images/profile_image.svg" alt="photo">
            <div class="user-details">
                <h3 class="user-name"><?php echo($_COOKIE['name'])?></h3>
                <p class="user-occupation">Desenvolvedor(a)</p>
            </div>
        </div>
        <a class="menu-item" href="./login.php">
            <img class="menu-icon" src="../images/logoutIcon.svg" alt="logout" height="48" width="48">
        </a>
    </div>
</nav>
<body>
<div class="profile-container dashboard">
<form>
            
            <div class="setting">
                <label class="setting-label">Receber Notificações</label>
                <div class="switch">
                    <input type="checkbox" id="notifications" checked>
                    <label class="switch-label" for="notifications"></label>
                </div>
            </div>
            <div class="setting">
                <label class="setting-label">Modo Escuro</label>
                <div class="switch">
                    <input type="checkbox" id="dark-mode">
                    <label class="switch-label" for="dark-mode"></label>
                </div>
            </div>
            <button class="save-btn">Salvar Alterações</button>
            <br>
            <div class="setting">
                <label class="setting-label">Redefinir Senha</label>
                <button class="save-btn" id="reset-password">Redefinir</button>
            </div>
            
            

            
        </form>
    <div class="setting">
                <label class="setting-label">Apagar Conta</label>
                <button class="danger-btn" id="delete-account">Apagar</button>
            </div>
    </div>

    <script>
        const notificationsSwitch = document.getElementById('notifications');
        const darkModeSwitch = document.getElementById('dark-mode');

        notificationsSwitch.addEventListener('change', () => {
            console.log('Notifications switch changed to:', notificationsSwitch.checked);
        });

        darkModeSwitch.addEventListener('change', () => {
            console.log('Dark mode switch changed to:', darkModeSwitch.checked);
            if (darkModeSwitch.checked) {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.remove('dark-mode');
            }
        });

        const resetPasswordBtn = document.getElementById('reset-password');
        resetPasswordBtn.addEventListener('click', () => {
            console.log('Password reset requested');
            // Add password reset logic here
       });

        const deleteAccountBtn = document.getElementById('delete-account');
        deleteAccountBtn.addEventListener('click', () => {
            console.log('Account deletion requested');
            // Add account deletion logic here
        });
    </script>

</body>
</html>