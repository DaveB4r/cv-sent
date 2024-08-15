CREATE DATABASE cv_sent
DEFAULT CHARACTER SET = 'utf8mb4';

use cv_sent;
L
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE jobs_applied (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    company VARCHAR(255),
    platform VARCHAR(255),
    stage VARCHAR(255),
    day_applied DATE,
    FOREIGN KEY (user_id) REFERENCES users (id)
);