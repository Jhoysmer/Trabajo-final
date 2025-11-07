SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `email` int(15) NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `contraseña`, `email`) VALUES
(1, 'Admin', 'Sistema', 'admin@example.com', '$2y$10$abcdefghijklmnopqrstuuW', '', '', 0, '2025-10-13 17:07:07'),



ALTER TABLE `usuarios`
  ADD PRIMARY KEY '(`id`)',
  ADD UNIQUE KEY `email` '(`email`)';

ALTER TABLE `usuarios`
  MODIFY `id` int '(11)' NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

