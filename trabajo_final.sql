SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `mascota` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `productos` (
  `id` int (11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telefono` int(15) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `password`, `pais`, `ciudad`, `telefono`, `fecha_registro`) VALUES
(1, 'Admin', 'Sistema', 'admin@example.com', '$2y$10$abcdefghijklmnopqrstuuW', '', '', 0, '2025-10-13 17:07:07'),
(2, 'Usuario', 'Prueba', 'usuario@example.com', '$2y$10$abcdefghijklmnopqrstuuW', '', '', 0, '2025-10-13 17:07:07'),
(3, 'ghjgh', 'hjg', 'gjdfkg@gfgd.com', '1234', 'gfjkgfj', 'gfjkgfj', 0, '2025-10-13 17:43:18'),
(6, 'gfdgd', 'gfg', 'gjdgfdgdffkg@gfgd.com', '1234', 'fgf', 'gfg', 0, '2025-10-13 17:45:38');

ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY '(`id`)',
  ADD UNIQUE KEY `email` '(`email`)';

ALTER TABLE `mascota`
  MODIFY `id` int'(11)' NOT NULL AUTO_INCREMENT;

ALTER TABLE `productos`
  MODIFY `id` int '(11)' NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `id` int '(11)' NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

