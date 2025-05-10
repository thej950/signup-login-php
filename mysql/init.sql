-- Create database
CREATE DATABASE IF NOT EXISTS ssc;

-- Create user and grant privileges
CREATE USER IF NOT EXISTS 'thej'@'%' IDENTIFIED BY 'thej123';
GRANT ALL PRIVILEGES ON ssc.* TO 'thej'@'%';
FLUSH PRIVILEGES;

-- Use the database
USE ssc;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
