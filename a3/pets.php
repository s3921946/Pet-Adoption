<?php 
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>
    <main class="container-fluid">
        <div class="row text-center mt-4 ysabeau-SC ">
            <h2 class="fw-bold">Discover Pets Victoria</h1>
            <p>Pets Victoria is a dedicated pet adoption organization based in Victoria, Australia, focused on providing a safe and loving environment for pets in need. With a compassionate approach, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds. The organization offers a range of services, including adoption counseling, pet education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.</p>
        </div>
    </main>
    <main class="container mb-4 mt-2">
        <div class="row">
            <div class="col">
                <img src="images/pets.png" alt="">
            </div>
            <div class="col">
                <table class="table table-striped table-bordered border-dark-subtle mb-5">
                    <thead>
                        <tr>
                            <th>Pet</th>
                            <th>Type</th>
                            <th>Age</th>
                            <th>Loaction</th>
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
                            ?>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </main>
<?php 
include 'includes/footer.inc'; 
?>
