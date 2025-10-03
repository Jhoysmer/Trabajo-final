-- Create database
CREATE DATABASE trabajo_final;

-- Use the database
USE trabajo_final;

-- Create users table
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(15) NOT NULL,
    apellido VARCHAR(15) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(30) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create contacts table
CREATE TABLE mascota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(15) NOT NULL,
    
);

-- Create products table (for future use)
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    imagen VARCHAR(255),
    stock INT DEFAULT 0
);

-- Insert some sample users
INSERT INTO usuarios (nombre, apellido, email, password) VALUES
('Admin', 'Sistema', 'admin@example.com', '$2y$10$abcdefghijklmnopqrstuuWzAC6OdQsQY8/4OwuPJI7Rl.EXAMPLE'),
('Usuario', 'Prueba', 'usuario@example.com', '$2y$10$abcdefghijklmnopqrstuuWzAC6OdQsQY8/4OwuPJI7Rl.EXAMPLE');

-- Insert some sample contacts
INSERT INTO contactos (nombre, email, mensaje) VALUES
('Juan Pérez', 'juan@example.com', 'Me gustaría obtener más información sobre sus servicios.'),
('María García', 'maria@example.com', 'Tengo una consulta sobre los horarios de atención.');