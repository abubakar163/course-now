<?php include 'header.php'; ?>
<div class="container mt-5">
    <!-- Hero Section with Carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.webp" class="d-block w-100" alt="Learn Online">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Welcome to Edu Website</h1>
                    <p class="lead">Your hub for online learning. Explore our courses and start your journey today!</p>
                    <a href="course .php" class="btn btn-primary btn-lg">Browse All Courses</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="Expand Your Skills">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Expand Your Skills</h1>
                    <p class="lead">Learn at your own pace with high-quality video lessons.</p>
                    <a href="course.php" class="btn btn-primary btn-lg">Start Learning</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/3.webp" class="d-block w-100" alt="Join the Community">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Join a Community of Learners</h1>
                    <p class="lead">Connect with fellow students and achieve your learning goals together.</p>
                    <a href="course.php" class="btn btn-primary btn-lg">Join Us</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Featured Courses Section with Hover Animation -->
    <h2 class="mt-5 mb-4 text-center">Featured Courses</h2>
    <div class="row">
        <?php
        include 'db.php';
        $stmt = $conn->query("SELECT * FROM courses LIMIT 3");
        while ($course = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card shadow-lg course-card" style="transition: transform 0.3s, box-shadow 0.3s;">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($course['title']) . '</h5>';
            echo '<p class="card-text">' . htmlspecialchars($course['description']) . '</p>';
            echo '<a href="course-detail.php?id=' . htmlspecialchars($course['id']) . '" class="btn btn-primary">Learn More</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
                <a href="course.php" class="btn btn-primary">Browse All Courses</a>

    </div>

    <!-- Why Learn with Us Section with JavaScript Animations -->
    <div class="text-center my-5" id="whyUs">
        <h2>Why Learn with Us?</h2>
        <p>Our platform offers a diverse range of courses, taught by industry experts and designed to fit your schedule. Whether you want to upskill or explore a new field, we have something for everyone!</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary" style="transition: transform 0.3s;">
                    <div class="card-body">
                        <h5 class="card-title">High-Quality Content</h5>
                        <p class="card-text">Access hours of video lessons and study materials.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary" style="transition: transform 0.3s;">
                    <div class="card-body">
                        <h5 class="card-title">Learn Anytime, Anywhere</h5>
                        <p class="card-text">All courses are available online, ready for you at any time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary" style="transition: transform 0.3s;">
                    <div class="card-body">
                        <h5 class="card-title">Certification</h5>
                        <p class="card-text">Receive a certificate of completion for each course.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript for adding hover effect to course cards
    document.querySelectorAll('.course-card').forEach(card => {
        card.addEventListener('mouseover', () => {
            card.style.transform = 'scale(1.05)';
            card.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
        });
        card.addEventListener('mouseout', () => {
            card.style.transform = 'scale(1)';
            card.style.boxShadow = '0 1px 5px rgba(0, 0, 0, 0.1)';
        });
    });

    // Scroll animation for 'Why Learn with Us' section
    window.addEventListener('scroll', () => {
        const whyUs = document.getElementById('whyUs');
        const position = whyUs.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.5;

        if (position < screenPosition) {
            whyUs.style.opacity = '1';
            whyUs.style.transform = 'translateY(0)';
        } else {
            whyUs.style.opacity = '0';
            whyUs.style.transform = 'translateY(100px)';
        }
    });
</script>
<?php include 'footer.php'; ?>


