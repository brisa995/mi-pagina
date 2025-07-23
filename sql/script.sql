CREATE DATABASE IF NOT EXISTS crud_php;
USE crud_php;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Datos de ejemplo
INSERT INTO users (name, lastname, email) VALUES 
('Juan', 'Pérez', 'juan@example.com'),
('María', 'Gómez', 'maria@example.com'),
('Carlos', 'López', 'carlos@example.com');