CREATE DATABASE edu_website;

USE edu_website;

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    category VARCHAR(100),
    video_url VARCHAR(255)
);
