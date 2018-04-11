-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Abr-2018 às 14:40
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
-- Database: `dbpessoas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pf`
--

CREATE TABLE `pf` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `nascimento` date NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `situacao` int(1) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cadastroaqui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pf`
--

INSERT INTO `pf` (`id`, `nome`, `rg`, `cpf`, `nascimento`, `categoria`, `situacao`, `cidade`, `estado`, `telefone`, `celular`, `email`, `cadastroaqui`) VALUES
(1, 'King Sway', '36.525.685-98', '384.215.411-25', '2018-04-09', 'Titular', 2, 'São Paulo', 'SP', '(11) 95555.2222', '(11) 2152.5852', 'king@sway.com', '2018-04-01'),
(2, 'Diego Antonio da Costa', '31.123.171-8', '301.099.536-90', '1996-02-26', 'Aperfeiçoando', 1, 'Belo Horizonte', 'BH', '(69) 2946-2524', '(69) 98580-8326', 'diegoantoniodacosta-97@vizzacchi.com.br', '2018-04-09'),
(3, 'Ian Jorge Araújo', '30.648.095-5', '392.326.715-06', '1991-03-06', 'Estudante de Medicina', 0, 'Belém', 'Pará', '(95) 3955-4467', '(95) 98641-9921', 'iianjorgearaujo@daimler.com', '2018-04-09'),
(4, 'Thomas Cláudio da Conceição', '27.100.957-3', '263.703.768-76', '1996-06-01', 'Médico', 1, 'Salvador', 'BA', '(71) 2516-9086', '(71) 99201-2306', 'thomasclaudiodaconceicao_@csa.edu.br', '2018-04-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pj`
--

CREATE TABLE `pj` (
  `id` int(255) NOT NULL,
  `nome_fantasia` varchar(255) NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `site` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone1` varchar(255) NOT NULL,
  `situacao` int(1) NOT NULL,
  `cadastroaqui` date NOT NULL,
  `telefone2` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pj`
--

INSERT INTO `pj` (`id`, `nome_fantasia`, `razao_social`, `cnpj`, `site`, `email`, `telefone1`, `situacao`, `cadastroaqui`, `telefone2`, `cidade`, `estado`) VALUES
(1, 'Marco\'s', 'Empresa de Desenvolvimento do Marcos', '53.572.393/0001-74', 'https://github.com/kiingsway', 'king@sway.com', '(11) 3576-4805', 1, '2018-04-09', '(11) 98697-3102', 'São Paulo', 'SP'),
(2, 'Gael e Enrico Pães e Doces', 'Gael e Enrico Pães e Doces ME', '51.251.532/0001-32', 'www.gaeleenricopaesedocesme.com.br', 'faleconosco@gaeleenricopaesedocesme.com.br', '(11) 3596-4471', 0, '2018-04-09', '(11) 98326-8421', 'Belo Horizonte', 'MG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pf`
--
ALTER TABLE `pf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pj`
--
ALTER TABLE `pj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pf`
--
ALTER TABLE `pf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pj`
--
ALTER TABLE `pj`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
