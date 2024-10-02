<?php
$title = "index";
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>

        <!-- Replace flexbox-item-centre-1 with main -->
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
                <img class="pets-center-image" src="../images/pets.jpeg" alt="Pets Image">
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
                            <?php
                            $sql = "SELECT petid, petname, type, age, location FROM pets";
                            $result = mysqli_query($conn, $sql);
                            
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td><a href=details.php?id={$row['petid']}>".$row["petname"];
                                    echo "<td>".$row["type"];
                                    echo "<td>".$row["age"];
                                    echo "<td>".$row["location"];
                                    echo "</tr>";
                                }
                            } else {
                                echo "No pets found";
                            }
                            $conn-> close();
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
<?php
include 'includes/footer.inc';
?>
