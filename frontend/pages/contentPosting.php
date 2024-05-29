
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shar.Ed</title>
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
                <a class="menu-link" href="./profile.php"> 
                    <img src="../images/profile_image.svg" title="Profile" class="menu-icon" alt="profile-image" height="48" width="48">
                    <span class="menu-link-text">Perfil</span>                            
                </a>
            </li>
            <li class="menu-item">                        
                <a class="menu-link" href="#">
                    <img src="./assets/img/pet.svg" title="Pets" class="menu-icon" alt="pet">
                    <span class="menu-link-text">Pets</span>    
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
    <div class="form-container dashboard">
        <form>
            <!-- File Input -->
            <label for="file">File:</label>
            <input type="file" id="file" name="file">
            <!-- Title Input -->
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <!-- Description Input -->
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
            <!-- Subject Select -->
            <label for="subject">Subject:</label>
            <select id="subject" name="subject">
                <option value="">Select a subject</option>
                <option value="math">Math</option>
                <option value="portuguese">Portuguese</option>
                <option value="english">English</option>
                <!-- Add more options here -->
            </select>
            <!-- Theme Select -->
            <label for="theme">Theme:</label>
            <select id="theme" name="theme">
                <option value="">Select a theme</option>
                <option value="geometry">Geometry</option>
                <option value="algebra">Algebra</option>
                <option value="calculus">Calculus</option>
                <!-- Add more options here -->
            </select>
            <!-- Submit Button -->
            <button type="submit">Post</button>
        </form>
    </div>

</body>
</html>
