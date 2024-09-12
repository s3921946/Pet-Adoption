<?php
$title = "index";
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>
        <main class="flexbox-item-centre-1">
            <div class="flexbox-pets pets-centre-top">
                <h1 class="pets-heading">Discover Pets Victoria</h1>
                <h2 class="pets-description">Pets Victoria is a dedicated pet adoption organization based in Victoria, 
                    Australia, focused on providing a safe and loving environment for pets in need. 
                    With a</h2>
                <h3 class="pets-description">With a compassionate approach, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect</h3>
                <h4 class="pets-description">these deserving pets with caring individuals and families, creating lifelong bonds. The organization offers a range of services, including adoption counseling, pet</h4>
                <h5 class="pets-description">education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.</h5>
            </div>
            <div class="flexbox-pets pets-centre-bottom">
                <img class="pets-center-image" src="images/pets.jpeg" alt="Pets Image">
                <table class="pets-content-table">
                    <thead>
                        <tr>
                            <th>Pets</th>
                            <th>Type</th>
                            <th>Age</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Milo</th>
                            <th>Cat</th>
                            <th>3 Months</th>
                            <th>Melbourne CBD</th>
                        </tr>
                        <tr>
                            <th>Baxter</th>
                            <th>Dog</th>
                            <th>5 Months</th>
                            <th>Cape Woolamai</th>
                        </tr>
                        <tr>
                            <th>Luna</th>
                            <th>Cat</th>
                            <th>1 Month</th>
                            <th>Ferntree Gully</th>
                        </tr>
                        <tr>
                            <th>Willow</th>
                            <th>Dog</th>
                            <th>48 Months</th>
                            <th>Marysville</th>
                        </tr>
                        <tr>
                            <th>Oliver</th>
                            <th>Cat</th>
                            <th>12 Months</th>
                            <th>Grampians</th>
                        </tr>
                        <tr>
                            <th>Bella</th>
                            <th>Dog</th>
                            <th>10 Months</th>
                            <th>Carlton</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

        <?php
        include 'includes/footer.inc';
        ?>
</html>