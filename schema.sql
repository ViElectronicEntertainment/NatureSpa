CREATE DATABASE IF NOT EXISTS naturespa;

USE naturespa;
CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `hora` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `servicio` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `valor` int(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;