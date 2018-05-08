-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2018 às 04:14
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
-- Database: `dbatividades`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcursos`
--

CREATE TABLE `tbcursos` (
  `id` int(255) NOT NULL,
  `nomeCurso` varchar(255) NOT NULL,
  `localCurso` varchar(255) NOT NULL,
  `dataInicial` date NOT NULL DEFAULT '0000-00-00',
  `horaInicial` time DEFAULT NULL,
  `dataFinal` date NOT NULL DEFAULT '0000-00-00',
  `horaFinal` time DEFAULT NULL,
  `vagas` int(10) NOT NULL,
  `cargaHoraria` int(10) DEFAULT NULL,
  `freqMinima` int(10) DEFAULT NULL,
  `categorias` varchar(255) NOT NULL,
  `valor` int(10) NOT NULL,
  `valorSocio` int(10) NOT NULL,
  `valorParceiro` int(10) NOT NULL,
  `valorNaoQuite` int(10) NOT NULL,
  `tipoVencimento` varchar(10) NOT NULL,
  `vencimento` date DEFAULT '0000-00-00',
  `nDias` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcursos`
--

INSERT INTO `tbcursos` (`id`, `nomeCurso`, `localCurso`, `dataInicial`, `horaInicial`, `dataFinal`, `horaFinal`, `vagas`, `cargaHoraria`, `freqMinima`, `categorias`, `valor`, `valorSocio`, `valorParceiro`, `valorNaoQuite`, `tipoVencimento`, `vencimento`, `nDias`, `status`) VALUES
(1, 'Radiologia', '', '2018-04-01', '08:00:00', '2018-04-03', '12:00:00', 24, 12, 100, '1,2,3,4,5,6,7,8,9,10', 300, 200, 250, 300, 'limite', '2018-03-29', 2, 1),
(2, 'Densitometria', '', '2018-06-01', '07:00:00', '0000-00-00', NULL, 35, 12, 100, '1,2,3,4,5', 200, 200, 200, 200, 'fixo', '2018-05-30', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcursos`
--
ALTER TABLE `tbcursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcursos`
--
ALTER TABLE `tbcursos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
