-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2018 às 04:00
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
-- Estrutura da tabela `tb_pf`
--

CREATE TABLE `tb_pf` (
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
  `senha` varchar(255) NOT NULL,
  `cadastroaqui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pf`
--

INSERT INTO `tb_pf` (`id`, `nome`, `rg`, `cpf`, `nascimento`, `categoria`, `situacao`, `cidade`, `estado`, `telefone`, `celular`, `email`, `senha`, `cadastroaqui`) VALUES
(1, 'Diego Antonio da Costa', '31.123.171-8', '301.099.536-90', '0000-00-00', 'AperfeiÃ§oando', 1, 'Belo Horizonte', 'MG', '(69) 2946-2524', '(69) 98580-8326', 'diegoantoniodacosta-97@vizzacchi.com.br', 'd41d8cd98f00b204e9800998ecf8427e', '2018-04-01'),
(2, 'Benedito Daniel FogaÃ§a', '27.904.397-1', '967.002.889-24', '0000-00-00', 'FÃ­sicos, BiÃ³logos', 0, 'BiguaÃ§u', 'SC', '(48) 2758-8460', '(48) 98604-5491', 'beneditodanielfogaca@policiapenal.com', 'd41d8cd98f00b204e9800998ecf8427e', '2018-04-09'),
(3, 'Nathan Luiz JoÃ£o Oliveira', '42.585.278-7', '085.256.364-79', '0000-00-00', 'Titular', 2, 'Rio Branco', 'AC', '(68) 2676-9220', '(68) 99224-7142', 'nnathanluiz@abbott.com', '202cb962ac59075b964b07152d234b70', '2018-04-09'),
(4, 'Eduardo MÃ¡rcio Arthur Moreira', '49.563.871-7', '180.811.822-76', '0000-00-00', 'TÃ©cnicos e TecnÃ³logos', 1, 'Ipatinga', 'MG', '(31) 3932-2525', '(31) 99815-2957', 'eeduardo@clcimoveis.com.br', '202cb962ac59075b964b07152d234b70', '2018-04-09'),
(5, 'Manoel CauÃ£ da Paz', '32.462.144-9', '717.345.110-87', '0000-00-00', 'AperfeiÃ§oando', 2, 'Fortaleza', 'CE', '(85) 2615-5857', '(85) 99891-9677', 'manoelcauadapaz-88@supercleanlav.com.br', 'd41d8cd98f00b204e9800998ecf8427e', '2018-03-01'),
(6, 'Diogo Carlos Eduardo AndrÃ© AparÃ­cio', '48.011.380-4', '316.931.722-91', '0000-00-00', 'AperfeiÃ§oando', 2, 'Bonsucesso', 'AL', '(82) 3696-7412', '(82) 99986-7538', 'ddiogocarlose@fpsgeodata.com.br', 'd41d8cd98f00b204e9800998ecf8427e', '2018-04-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pj`
--

CREATE TABLE `tb_pj` (
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
  `estado` varchar(2) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pj`
--

INSERT INTO `tb_pj` (`id`, `nome_fantasia`, `razao_social`, `cnpj`, `site`, `email`, `telefone1`, `situacao`, `cadastroaqui`, `telefone2`, `cidade`, `estado`, `senha`) VALUES
(1, 'Marco', 'Empresa de Desenvolvimento do Marcos', '53.572.393/0001-74', 'https://github.com/kiingsway', 'king@sway.com', '(11) 3576-4805', 1, '2018-04-09', '(11) 98697-3102', 'Sï¿½o Paulo', 'SP', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'Gael e Enrico PÃ£es e Doces', 'Gael e Enrico PÃ£es e Doces ME', '51.251.532/0001-32', 'www.gaeleenricopaesedocesme.com.br', 'faleconosco@gaeleenricopaesedocesme.com.br', '(11) 3596-4471', 0, '2018-04-09', '(11) 98326-8421', 'Belo Horizonte', 'MG', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'Fernando e LavÃ­nia', 'Fernando e LavÃ­nia Marcenaria ME', '86719355000150', 'www.fernandoelaviniamarcenariame.com.br', 'financeiro@fernandoelaviniamarcenariame.com.br', '1136387830', 1, '2018-04-20', '11982793638', 'SÃ£o Paulo', 'SP', '202cb962ac59075b964b07152d234b70'),
(5, 'FÃ¡tima e Josefa', 'FÃ¡tima e Josefa InformÃ¡tica ME', '44968879000135', 'www.fatimaejosefainformaticame.com.br', '', '1928575191', 1, '2018-04-20', '19994550347', 'Pirassununga', 'SP', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'Heloise e Anderson Pizzaria', 'Heloise e Anderson Pizzaria Ltda', '19.037.164/0001-11', 'www.heloiseeandersonpizzarialtda.com.br', 'manutencao@heloiseeandersonpizzarialtda.com.br', '(11) 3596-4471', 1, '2018-04-24', '(11) 98326-8421', 'SÃ£o Paulo', 'SP', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'MaitÃª e Ian Transportes Ltda', 'MaitÃª e Ian Transportes', '45.789.242/0001-44', 'www.maiteeiantransportesltda.com.br', 'treinamento@maiteeiantransportesltda.com.br', '(13) 2528-2555', 1, '2018-04-24', '(13) 98119-9014', 'CubatÃ£o', 'SP', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pf`
--
ALTER TABLE `tb_pf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pj`
--
ALTER TABLE `tb_pj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pf`
--
ALTER TABLE `tb_pf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pj`
--
ALTER TABLE `tb_pj`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
