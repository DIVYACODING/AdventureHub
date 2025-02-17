CREATE DATABASE IF NOT EXISTS project;

USE project;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS book_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address TEXT NOT NULL,
    location VARCHAR(255) NOT NULL,
    guests INT NOT NULL,
    arrivals DATE NOT NULL,
    leaving DATE NOT NULL,
   user_id INT NOT NULL, -- Links to users table
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

--ALTER TABLE book_form
ADD COLUMN adventure_name VARCHAR(255) NOT NULL, -- Adventure name column
ADD COLUMN adventure_place VARCHAR(255) NOT NULL; -- Adventure place column

