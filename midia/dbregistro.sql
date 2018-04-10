-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2018 às 13:41
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbregistro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dbusuarios`
--

CREATE TABLE `dbusuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dbusuarios`
--

INSERT INTO `dbusuarios` (`id`, `login`, `email`, `senha`, `status`) VALUES
(5, 'king', 'king@sway.com', '5eac43aceba42c8757b54003a58277b5', 1),
(6, 'king1', 'kng@a.com', '5eac43aceba42c8757b54003a58277b5', 0),
(7, 'giovannafeia', 'giovanna@feia.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(8, 'king2', 'aaa@aaa.com', '5eac43aceba42c8757b54003a58277b5', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprojetos`
--

CREATE TABLE `tbprojetos` (
  `id` int(255) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `implementada` int(1) NOT NULL DEFAULT '0',
  `criadoem` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `implementadaem` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprojetos`
--

INSERT INTO `tbprojetos` (`id`, `funcao`, `implementada`, `criadoem`, `implementadaem`) VALUES
(1, 'Ícones do Breadcrumb', 1, '2018-04-07 03:00:00.000000', '2018-04-07'),
(3, 'Badges nas Categorias', 1, '2018-04-07 05:00:00.000000', '2018-04-07'),
(4, 'Adicionar Badges nas Situação das Pessoas', 1, '2018-04-07 06:00:00.000000', '2018-04-07'),
(5, 'Adicionar Search', 1, '2018-04-07 04:00:00.000000', '2018-04-07'),
(6, 'Fechar NAV em todos os HTMLs', 1, '2018-04-07 07:00:00.000000', '2018-04-07'),
(7, 'Adicionar Projeto.html em todos os Dropdown', 1, '2018-04-07 08:00:00.000000', '2018-04-07'),
(8, 'Testar table no Modal', 0, '2018-04-07 09:00:00.000000', NULL),
(9, 'Reduzir navegação, fazer com que a de PC de Mobile sejam na mesma tag', 0, '2018-04-07 10:00:00.000000', NULL),
(10, 'Colorir botões do Dropdown', 0, '2018-04-07 11:00:00.000000', NULL),
(11, 'Adicionar Status na criação do Curso', 0, '2018-04-08 03:00:00.000000', NULL),
(13, 'Permissionamento para usuários', 0, '2018-04-10 00:56:00.000000', NULL),
(15, 'Usar Cards para login e registro', 1, '2018-04-10 02:20:00.000000', '2018-04-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbusuarios`
--
ALTER TABLE `dbusuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbprojetos`
--
ALTER TABLE `tbprojetos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbusuarios`
--
ALTER TABLE `dbusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbprojetos`
--
ALTER TABLE `tbprojetos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
