<?php include 'header.php'; ?>
<div class="container mt-5">
    <h2 class="text-center">Our Courses</h2>
    <form class="mb-3" method="GET" action="search.php">
        <input type="text" name="q" class="form-control" placeholder="Search for a course...">
        <button type="submit" class="btn btn-primary mt-2">Search</button>
    </form>
    <div class="row">
        <?php
        include 'db.php';
        $stmt = $conn->query("SELECT * FROM courses");
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
        ?>
    </div>
</div>
<?php include 'footer.php'; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
