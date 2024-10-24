<nav class="navbar navbar-expand-lg navbar-light sticky-top rounded-bottom" style="background-color: #0c8080;">
    <a class="navbar-brand p-2" href="#">
        <img src="images/image.png" width="50" height="50" class="d-inline-block align-top" alt="">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="pets.php">Pets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="gallery.php">Gallery</a>
            </li>

            <?php if (empty($_SESSION['username'])) {?>
            <li class="nav-item">
                <a class="nav-link text-white" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="login.php">Login</a>
            </li>
            <?php } else {?>
            <li class="nav-item">
                <a class="nav-link text-white" href="add.php">Add pet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">Logout</a>
            </li>
            <?php } ?>
        </ul>
        <form class="d-flex ms-auto p-2" id="search-form" action="search.php" method="GET" onsubmit="return navsearch();">
            <input class="form-control me-2" type="search" id="searchInput" name="query" placeholder="Search" aria-label="Search">
            <button style="background-color: #0c8080; border: none;" type="submit" id="search-button">
                <span class="material-symbols-outlined text-white">search</span>
            </button>
        </form> 
        <script>
        </script>
    </div>
</nav>