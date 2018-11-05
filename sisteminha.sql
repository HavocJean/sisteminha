-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2018 às 15:15
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `peitos`
--

CREATE TABLE `peitos` (
  `id_peito` int(11) UNSIGNED NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `supino_reto` int(8) DEFAULT NULL,
  `supino_declinado` int(8) DEFAULT NULL,
  `supino_inclinado` int(8) DEFAULT NULL,
  `peck_deck` int(8) DEFAULT NULL,
  `crucifixo` int(8) DEFAULT NULL,
  `crucifixo_inclinado` int(8) DEFAULT NULL,
  `crucifixo_declinado` int(8) DEFAULT NULL,
  `pullover` int(8) DEFAULT NULL,
  `flexoes` int(8) DEFAULT NULL,
  `press` int(8) DEFAULT NULL,
  `press_cabo` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `peitos`
--

INSERT INTO `peitos` (`id_peito`, `id_usuario`, `supino_reto`, `supino_declinado`, `supino_inclinado`, `peck_deck`, `crucifixo`, `crucifixo_inclinado`, `crucifixo_declinado`, `pullover`, `flexoes`, `press`, `press_cabo`) VALUES
(1, 1, 25, 0, 22, 60, 0, 18, 0, 0, 15, 12, 0),
(3, 2, 26, 19, 0, 60, 0, 0, 0, 25, 0, 0, 35),
(4, 1, 0, 17, 0, 10, 0, 0, 22, 0, 20, 0, 0),
(5, 1, 15, 17, 0, 11, 0, 0, 23, 0, 25, 0, 0),
(6, 2, 35, 0, 25, 0, 20, 0, 15, 0, 10, 0, 27),
(7, 2, 22, 15, 0, 0, 25, 0, 30, 0, 20, 0, 10),
(10, 2, 35, 0, 0, 33, 33, 0, 0, 0, 15, 0, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `triceps`
--

CREATE TABLE `triceps` (
  `id_triceps` int(11) UNSIGNED NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `barra_paralela` int(8) DEFAULT NULL,
  `supino_fechado` int(8) DEFAULT NULL,
  `puxada_triceps` int(8) DEFAULT NULL,
  `puxada_triceps_supe` int(8) DEFAULT NULL,
  `puxada_triceps_corda` int(8) DEFAULT NULL,
  `extensao_barra_deitado` int(8) DEFAULT NULL,
  `extensao_barra_sentado` int(8) DEFAULT NULL,
  `extensao_senta_halter` int(8) DEFAULT NULL,
  `coice_halter` int(8) DEFAULT NULL,
  `coice_corda` int(8) DEFAULT NULL,
  `mergulho_banco` int(8) DEFAULT NULL,
  `triceps_banco` int(8) DEFAULT NULL,
  `triceps_frances` int(8) DEFAULT NULL,
  `triceps_maquina` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `triceps`
--

INSERT INTO `triceps` (`id_triceps`, `id_usuario`, `barra_paralela`, `supino_fechado`, `puxada_triceps`, `puxada_triceps_supe`, `puxada_triceps_corda`, `extensao_barra_deitado`, `extensao_barra_sentado`, `extensao_senta_halter`, `coice_halter`, `coice_corda`, `mergulho_banco`, `triceps_banco`, `triceps_frances`, `triceps_maquina`) VALUES
(1, 1, 10, 15, 0, 20, 0, 0, 20, 0, 10, 0, 0, 0, 12, 0),
(2, 2, 10, 0, 15, 0, 15, 0, 10, 0, 0, 12, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(150) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ip` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `sobrenome`, `email`, `senha`, `ip`) VALUES
(1, 'Jean', 'Marques', 'jean.magic@hotmail.com', '698dc19d489c4e4db73e28a713eab07b', 0),
(2, 'Teste', 'Testador', 'teste@gmail.com', '698dc19d489c4e4db73e28a713eab07b', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_token`
--

CREATE TABLE `usuarios_token` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `hash` varchar(32) DEFAULT NULL,
  `used` tinyint(1) DEFAULT NULL,
  `expira_em` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `usuarios_token`
--

INSERT INTO `usuarios_token` (`id`, `id_usuario`, `hash`, `used`, `expira_em`) VALUES
(1, 1, '6c46223a104663bc7dfad2d8ad7882ed', NULL, '2018-12-05 11:04:00'),
(2, 1, '0eb5c85ca6e8a317565ceaf2f7fbcf27', NULL, '2018-12-05 11:05:00'),
(3, 1, 'f28f577b2954b85ba53914572e16d139', NULL, '2018-12-05 11:17:00'),
(4, 1, 'ab8f2631eb62d6f86b5eef3c23bc9d8d', NULL, '2018-12-05 11:17:00'),
(5, 1, 'b70eeffe8c5b925471fcc39eb399ea46', 0, '2018-12-05 11:18:00'),
(6, 2, 'f4befc43ebf67a983b676a5a9ba20a15', NULL, '2018-12-05 11:22:00'),
(7, 2, 'bb0c98ed67101967dbc08b99afb42442', NULL, '2018-12-05 11:23:00'),
(8, 2, '4c22d2a7c5b57c2898062ed8e5d65670', NULL, '2018-12-05 11:23:00'),
(9, 2, '4e45fd4eb4605c3f59c99dabf97318ae', NULL, '2018-12-05 11:23:00'),
(10, 2, '22bde43373879cfdafabd3fbbde9e6b0', 0, '2018-12-05 11:25:00'),
(11, 1, 'dee9d993f02e8007229f928d5b3578ef', 1, '2018-12-05 12:09:00'),
(12, 1, '4c96446616adaab4fb5a3649a56f958e', 1, '2018-12-05 12:11:00'),
(13, 1, 'e0e07328d3dade612f9ac0869778eec2', 1, '2018-12-05 12:20:00'),
(14, 2, '6fbd69a580bf6148339595d7c6f35a7c', 1, '2018-12-05 12:33:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peitos`
--
ALTER TABLE `peitos`
  ADD PRIMARY KEY (`id_peito`),
  ADD KEY `id_peitos_fk` (`id_usuario`);

--
-- Indexes for table `triceps`
--
ALTER TABLE `triceps`
  ADD PRIMARY KEY (`id_triceps`),
  ADD KEY `id_triceps_fk` (`id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `usuarios_token`
--
ALTER TABLE `usuarios_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peitos`
--
ALTER TABLE `peitos`
  MODIFY `id_peito` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `triceps`
--
ALTER TABLE `triceps`
  MODIFY `id_triceps` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios_token`
--
ALTER TABLE `usuarios_token`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `peitos`
--
ALTER TABLE `peitos`
  ADD CONSTRAINT `id_peitos_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `triceps`
--
ALTER TABLE `triceps`
  ADD CONSTRAINT `id_triceps_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `usuarios_token`
--
ALTER TABLE `usuarios_token`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
