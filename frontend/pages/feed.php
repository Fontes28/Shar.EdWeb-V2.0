<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shar.Ed</title>
    <link rel="stylesheet" href="../styles/feed.css">
    <link rel="icon" type="image/x-icon" href="../images/sharEd.ico">
    <script src="../scripts/sidebar.js" defer></script>
    <script src="../scripts/postActivator.js"></script>
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
                <a class="menu-link" href="./saved">
                    <img src="../images/savedIcon.svg" title="Saved" class="menu-icon" alt="saved" height="48" width="48">
                    <span class="menu-link-text">Salvos</span>    
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
            <img class="user-img" src="./assets/img/photo.jpg" alt="photo">
            <div class="user-details">
                <h3 class="user-name">Eleanor Pena</h3>
                <p class="user-occupation">Veterinária</p>
            </div>
        </div>
        <a class="menu-item" href="./login.php">
            <img class="menu-icon" src="../images/logoutIcon.svg" alt="logout" height="48" width="48">
        </a>
    </div>
</nav>
<body>
    <div class="profile-container dashboard">
        
        <div class="posts">
            <div class="post">
                <img src="https://placehold.co/400x200" alt="Post Image" class="post-image">
                <p class="post-caption">Legenda 1</p>
            </div>
            <div class="post">
                <img src="https://placehold.co/400x200" alt="Post Image" class="post-image">
                <p class="post-caption">Legenda 2</p>
            </div>
            <div class="post">
                <img src="https://placehold.co/400x200" alt="Post Image" class="post-image">
                <p class="post-caption">Legenda 3</p>
            </div>
            <div class="post">
                <img src="https://placehold.co/400x200" alt="Post Image" class="post-image">
                <p class="post-caption">Legenda 4</p>
            </div>
            <div class="post">
                <img src="https://placehold.co/400x200" alt="Post Image" class="post-image">
                <p class="post-caption">Legenda 5</p>
            </div>
            <div class="post">
                <img src="https://placehold.co/400x200" alt="Post Image" class="post-image">
                <p class="post-caption">Legenda 6</p>
            </div>
        </div>
    </div>


</body>
</html>