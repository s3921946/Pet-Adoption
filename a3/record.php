<title>RECORD</title>
<?php
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';

if (!empty($_GET['user'])) {
    $username = $_GET['user'];
    $username = htmlspecialchars($username);

    echo <<<HTML
    <div class="row text-center mt-4 ysabeau-SC ">
        <h2 class="fw-bold">{$username}'s Collection</h2>
    </div>
    HTML;

    $sql = "SELECT * FROM pets WHERE username = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $petname = htmlspecialchars($row['petname']);
                $petId = htmlspecialchars($row['petid']);
                $image = htmlspecialchars($row['image']);
                $age = htmlspecialchars($row['age']);
                $type = htmlspecialchars($row['type']);
                $location = htmlspecialchars($row['location']);
                $caption = htmlspecialchars($row['caption']);

                echo <<<HTML
                <main class="container-fluid p-5">
                    <div class="row">
                        <div class="col">
                            <img class="image" style="max-width: 100%; margin: 0 auto;" src="images/{$image}" alt="{$petname}">
                            <div class="d-flex rows justify-content-start gap-5 text-center">
                                <div class="p-5" id="months">
                                    <span class="material-symbols-outlined">alarm</span>
                                    <p>{$age} Month(s)</p>
                                </div>
                                <div class="p-5" id="type">
                                    <span class="material-symbols-outlined">pets</span>
                                    <p>{$type}</p>
                                </div>
                                <div class="p-5" id="location">
                                    <span class="material-symbols-outlined">location_on</span>
                                    <p>{$location}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col justify-content-center">
                            <h2>{$petname}</h2>
                            <p>{$caption}</p>
                        </div>
                    </div>
                </main>
                HTML;
            }
        } else {
            echo "<p>No pets found for this user.</p>";
        }

        $stmt->close();
    } else {
        echo "Error in preparing the SQL statement.";
    }
} else {
    echo "<p>No user specified.</p>";
}

include 'includes/footer.inc';
?>

</body>
</html>
