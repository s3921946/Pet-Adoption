<footer class="container-fluid text-center ysabeau-SC rounded-top fixed-bottom" style="background-color: #e57f3d">
    <div class="row">
    <?php
    if (!empty($_SESSION['username'])) {
        $sql = "SELECT DISTINCT username FROM pets";
        if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                echo '<div class="d-flex justify-content-center gap-3 flex-wrap">';
                while ($row = $result->fetch_assoc()) {
                    $username = htmlspecialchars($row['username']);
                    echo "<a href='record.php?user={$username}'>{$username}</a>";
                }
                echo '</div>';
            } else {
                echo "<p>No users found</p>";
            }
            } else {
                echo "Error in retrieving users.";
            }
        }
        $conn->close();
    ?>
    </div>
    <div class="row">
        <p>© Copyright s3921946. All Rights Reserved | Designed For Pets Victoria</p>
    </div>
</footer>
<script src="main1.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>