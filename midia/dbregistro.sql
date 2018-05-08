-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2018 às 04:16
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
  `permissoes` varchar(255) NOT NULL DEFAULT '0' COMMENT '1 - PF 2 - PJ 3 - Cursos 4 - Livros 5 - Inscrições 6 - Voucher 7 - Contas a Pagar 8 - A Receber 9 - Usuários 10 - Projetos',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dbusuarios`
--

INSERT INTO `dbusuarios` (`id`, `login`, `email`, `senha`, `permissoes`, `status`) VALUES
(5, 'king', 'king@sway.com', '5eac43aceba42c8757b54003a58277b5', '1,2,3,4,5,6,7,8,9,10', 1),
(6, 'king12', 'kng@a.com', '5eac43aceba42c8757b54003a58277b5', '1,2,3,4,5,6,10', 1),
(7, 'gi', 'gi@bcd.com', '827ccb0eea8a706c4c34a16891f84e7b', '4,5', 1),
(8, 'king2', 'aaa@aaa.com', '5eac43aceba42c8757b54003a58277b5', '2,5', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprojetos`
--

CREATE TABLE `tbprojetos` (
  `id` int(255) NOT NULL,
  `funcao` varchar(255) CHARACTER SET utf32 NOT NULL,
  `implementada` int(1) NOT NULL DEFAULT '0',
  `criadoem` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `implementadaem` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprojetos`
--

INSERT INTO `tbprojetos` (`id`, `funcao`, `implementada`, `criadoem`, `implementadaem`) VALUES
(1, 'Colorir botões do Dropdown', 0, '2018-04-11 10:56:11', NULL),
(2, 'Botão de editar funcionando', 0, '2018-04-11 10:57:26', NULL),
(3, 'Botão Status do Usuários funcionando igual o Implementada daqui', 1, '2018-04-11 11:00:45', NULL),
(4, 'Acentuação aqui', 0, '2018-04-11 11:14:17', NULL),
(5, 'Sites inseguros, é possível entrar neles sem passar pelo login', 0, '2018-04-11 11:17:05', NULL),
(6, 'Table responsivo', 0, '2018-04-19 11:16:12', NULL),
(7, 'BotÃ£o de editar e apagar projeto', 0, '2018-04-19 11:16:58', NULL),
(8, 'Arrumar data de nascimento PF', 0, '2018-04-24 22:38:08', NULL),
(9, 'Card Index: \"No prÃ³ximo curso temos x% das vagas confirmadas\"', 0, '2018-04-24 22:39:23', NULL);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
