CREATE DATABASE portfolio_db;

USE portfolio_db;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    public BOOLEAN NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE poll (
    id INT AUTO_INCREMENT PRIMARY KEY,
    yes_votes INT DEFAULT 0,
    no_votes INT DEFAULT 0
);

INSERT INTO poll (yes_votes, no_votes) VALUES (0, 0);