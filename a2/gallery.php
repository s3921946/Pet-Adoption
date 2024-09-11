<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200, initial-scale=1.0">
    <title>GALLERY</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="main.js"></script>
</head>

<body>
    <div class="flexbox-container">
        <!-- Replace flexbox-item-header with header -->
        <header class="flexbox-item-header">
            <div class="header-container">
                <img class="img-logo" src="../images/logo.png" alt="">
                <div class="custom-select">
                    <select id="navigation-select">
                        <option value="">Select an Option:</option>
                        <option value="index.html">index</option>
                        <option value="add.html">add</option>
                        <option value="gallery.html">gallery</option>
                        <option value="pets.html">pets</option>
                    </select>
                </div>
                <div class="navigation-search">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search" name="Search">
                        <span class="material-symbols-outlined">search</span>
                    </form>
                </div>
            </div>
        </header>

        <!-- Replace flexbox-item-centre-1 with main -->
        <main class="flexbox-item-centre-1">
            <div class="flexbox-pets gallery-centre-top">
                <h1 class="gallery-center-heading">Pets Victoria Has A Lot to Offer!</h1>
                <h2 class="gallery-center-description">For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a</h2>
                <h3 class="gallery-center-description">difference to the Victorian rescue community and thousands of pets in need of rescue and rehabilitation. But, until every pet is safe, respected, and loved, we all</h3>
                <h4 class="gallery-center-description">still have big, hairy work to do.</h4>
            </div>
            <div class="flexbox-pets gallery-centre-bottom">
                <div class="gallery-pets">
                    <div class="pets-top">
                        <img class="gallery-pet-option" src="../images/cat1.jpeg" alt="MILO">
                        <div class="gallery-pets-hover"><span class="material-symbols-outlined" style="color:black;font-weight:bold">search</span>Discover More!</div>
                    </div>
                    <div class="pets-bottom">
                        <p>MILO</p>
                    </div>
                </div>
                <div class="gallery-pets">
                    <div class="pets-top">
                        <img class="gallery-pet-option" src="../images/dog2.jpeg" alt="WILLOW">
                        <div class="gallery-pets-hover"><span class="material-symbols-outlined" style="color:black;font-weight:bold">search</span>Discover More!</div>
                    </div>
                    <div class="pets-bottom">
                        <p>WILLOW</p>
                    </div>
                </div>
                <div class="gallery-pets">
                    <div class="pets-top">
                        <img class="gallery-pet-option" src="../images/dog1.jpeg" alt="BAXTER">
                        <div class="gallery-pets-hover"><span class="material-symbols-outlined" style="color:black;font-weight:bold">search</span>Discover More!</div>
                    </div>
                    <div class="pets-bottom">
                        <p>BAXTER</p>
                    </div>
                </div>
                <div class="gallery-pets">
                    <div class="pets-top">
                        <img class="gallery-pet-option" src="../images/cat4.jpeg" alt="OLIVER">
                        <div class="gallery-pets-hover"><span class="material-symbols-outlined" style="color:black;font-weight:bold">search</span>Discover More!</div>
                    </div>
                    <div class="pets-bottom">
                        <p>OLIVER</p>
                    </div>
                </div>
                <div class="gallery-pets">
                    <div class="pets-top">
                        <img class="gallery-pet-option" src="../images/cat2.jpeg" alt="LUNA">
                        <div class="gallery-pets-hover"><span class="material-symbols-outlined" style="color:black;font-weight:bold">search</span>Discover More!</div>
                    </div>
                    <div class="pets-bottom">
                        <p>LUNA</p>
                    </div>
                </div>
                <div class="gallery-pets">
                    <div class="pets-top">
                        <img class="gallery-pet-option" src="../images/dog3.jpeg" alt="BELLA">
                        <div class="gallery-pets-hover"><span class="material-symbols-outlined" style="color:black;font-weight:bold">search</span>Discover More!</div>
                    </div>
                    <div class="pets-bottom">
                        <p>BELLA</p>
                    </div>
                </div>
            </div>
        </main>

        <!-- Replace flexbox-item-footer with footer -->
        <footer class="flexbox-item-footer">
            <p class="paragraph-copyright">© COPYRIGHT s3921946. All rights Reserved | Designed for Pets Victoria</p>
        </footer>
    </div>
</body>
</html>
