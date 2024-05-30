<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shar.Ed</title>
    <link rel="stylesheet" href="../styles/profile.css">
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
        <a class="logout-btn" href="#">
            <img class="logout-img" src="./assets/img/log-out.svg" alt="logout">
        </a>
    </div>
</nav>
<body>
    <div class="profile-container dashboard" id="container-test">
        <div class="profile-header">
            <img src="https://via.placeholder.com/80" alt="Profile Image" class="profile-image">
            <div class="profile-info">
                <h2 class="username">Murilo Pina</h2>
                <p class="bio">Software Engineer | Basketball</p>
                <a href="../pages/auxPages/editProfile.php"><input type="button" value="Editar" class="edit-button"></a>
            </div>
            
            <div class="stats-box">

                <div class="stats-item">

                    <div class="stats-label">Posts:</div>

                    <div class="stats-value">10</div>

                </div>

                <div class="stats-item">

                    <div class="stats-label">Coins:</div>

                    <div class="stats-value">500</div>

                </div>

            </div>
            
        </div>
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

    <script>
        // Add event listener to profile image
        document.querySelector('.profile-image').addEventListener('click', function() {
            alert('Profile image clicked!');
        });
    </script>

</body>
</html>