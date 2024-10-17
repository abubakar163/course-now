<?php include 'header.php'; ?>
<div class="container mt-5">
    <h2>Search Results</h2>
    <div class="row">
        <?php
        include 'db.php';
        $query = isset($_GET['q']) ? $_GET['q'] : '';
        $stmt = $conn->prepare("SELECT * FROM courses WHERE title LIKE :query");
        $stmt->execute(['query' => '%' . $query . '%']);
        
        if ($stmt->rowCount() > 0) {
            while ($course = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($course['title']) . '</h5>';
                echo '<p class="card-text">' . htmlspecialchars($course['description']) . '</p>';
                echo '<a href="course-detail.php?id=' . htmlspecialchars($course['id']) . '" class="btn btn-primary">Learn More</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No courses found for "' . htmlspecialchars($query) . '".</p>';
        }
        ?>
    </div>
</div>
<?php include 'footer.php'; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
