
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar ExtraCurricular</title>
    <link rel="stylesheet" href="../styles/contentPosting.css">
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
    <div class="form-container dashboard">
        <form>
            <!-- File Input -->
            <label for="file">Certificado:</label>
            <input type="file" id="file" name="file">
            <!-- Subject Select -->
            <label for="subject">Matéria:</label>
            <select id="subject" name="subject">
                <option value="">Selecione uma Matéria</option>
                <option value="math">Matemática</option>
                <option value="portuguese">Português</option>
                <option value="english">Inglês</option>
                <!-- Add more options here -->
            </select>
            <!-- Theme Select -->
            <label for="type">Tipo:</label>
            <select id="type" name="type">
                <option value="">Escolha um tipo</option>
                <option value="lecture">Palestra</option>
                <option value="workshop">Oficina</option>
            </select>
            <!-- Description Input -->
            <label for="description">Descrição:</label>
            <textarea id="description" name="description"></textarea>
            <!-- Submit Button -->
            <button type="submit">Postar</button>
        </form>
    </div>

</body>
</html>
