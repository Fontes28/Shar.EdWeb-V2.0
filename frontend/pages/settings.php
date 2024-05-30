<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="../styles/settings.css">
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
                <a class="menu-link" class="menu-link" href="#">
                    <img src="./assets/img/user.svg" title="Clientes" class="menu-icon" alt="user">
                    <span class="menu-link-text">Clientes</span>    
                </a>
            </li>
            <li class="menu-item">                            
                <a class="menu-link" href="#">
                    <img src="./assets/img/vet.svg" title="Vets" class="menu-icon" alt="vet">
                    <span class="menu-link-text">Vets</span>    
                </a>
            </li>
            <li class="menu-item">                        
                <a class="menu-link" href="#">
                    <img src="./assets/img/settings.svg" title="Ajustes" class="menu-icon" alt="settings">
                    <span class="menu-link-text">Ajustes</span>    
                </a>
            </li>
        </ul>
    </div>

    <!--div user info-->
    <div class="user-container">
        <div class="user-info">
            <img class="user-img" src="./assets/img/photo.jpg" alt="photo">
            <div class="user-details">
                <h3 class="user-name">Eleanor Pena</h3>
                <p class="user-occupation">Veterinária</p>
            </div>
        </div>
        <a class="logout-btn" href="./login.html">
            <img class="logout-img" src="./assets/img/log-out.svg" alt="logout">
        </a>
    </div>
</nav>
<body>
<div class="profile-container dashboard">
<form>
            
            <div class="setting">
                <label class="setting-label">Receive Notifications</label>
                <div class="switch">
                    <input type="checkbox" id="notifications" checked>
                    <label class="switch-label" for="notifications"></label>
                </div>
            </div>
            <div class="setting">
                <label class="setting-label">Dark Mode</label>
                <div class="switch">
                    <input type="checkbox" id="dark-mode">
                    <label class="switch-label" for="dark-mode"></label>
                </div>
            </div>
            <div class="setting">
                <label class="setting-label">Password Reset</label>
                <button class="save-btn" id="reset-password">Reset Password</button>
            </div>
            <div class="setting">
                <label class="setting-label">Account Deletion</label>
                <button class="danger-btn" id="delete-account">Delete Account</button>
            </div>
            <button class="save-btn">Save Changes</button>
        </form>

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