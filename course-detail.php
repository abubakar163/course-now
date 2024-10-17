<?php include 'header.php'; ?>
<div class="container mt-5">
    <?php
    include 'db.php';
    $course_id = isset($_GET['id']) ? $_GET['id'] : 0;
    $stmt = $conn->prepare("SELECT * FROM courses WHERE id = :id");
    $stmt->execute(['id' => $course_id]);
    $course = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($course) {
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<div class="video-container">';
        echo '<iframe width="100%" height="400" src="' . $course['video_url'] . '" frameborder="0" allowfullscreen></iframe>';
        echo '</div>';
    } else {
        echo '<p>Course not found.</p>';
    }
    ?>
</div>
<?php include 'footer.php'; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>