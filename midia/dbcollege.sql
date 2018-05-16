-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2018 às 14:08
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
-- Database: `dbcollege`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cursos`
--

CREATE TABLE `tb_cursos` (
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
-- Extraindo dados da tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`id`, `nomeCurso`, `localCurso`, `dataInicial`, `horaInicial`, `dataFinal`, `horaFinal`, `vagas`, `cargaHoraria`, `freqMinima`, `categorias`, `valor`, `valorSocio`, `valorParceiro`, `valorNaoQuite`, `tipoVencimento`, `vencimento`, `nDias`, `status`) VALUES
(1, 'Radiologia', '', '2018-04-01', '08:00:00', '2018-04-03', '12:00:00', 24, 12, 100, '1,2,3,4,5,6,7,8,9,10', 300, 200, 250, 300, 'limite', '2018-03-29', 2, 1),
(2, 'Densitometria', '', '2018-06-01', '07:00:00', '0000-00-00', NULL, 35, 12, 100, '1,2,3,4,5', 200, 200, 200, 200, 'fixo', '2018-05-30', NULL, 1);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_projetos`
--

CREATE TABLE `tb_projetos` (
  `id` int(255) NOT NULL,
  `funcao` varchar(255) CHARACTER SET utf32 NOT NULL,
  `implementada` int(1) NOT NULL DEFAULT '0',
  `criadoem` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `implementadaem` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_projetos`
--

INSERT INTO `tb_projetos` (`id`, `funcao`, `implementada`, `criadoem`, `implementadaem`) VALUES
(1, 'Colorir botões do Dropdown', 0, '2018-04-11 10:56:11', NULL),
(2, 'Botão de editar funcionando', 0, '2018-04-11 10:57:26', NULL),
(3, 'Botão Status do Usuários funcionando igual o Implementada daqui', 1, '2018-04-11 11:00:45', NULL),
(4, 'Acentuação aqui', 0, '2018-04-11 11:14:17', NULL),
(5, 'Sites inseguros, é possível entrar neles sem passar pelo login', 0, '2018-04-11 11:17:05', NULL),
(6, 'Table responsivo', 0, '2018-04-19 11:16:12', NULL),
(7, 'BotÃ£o de editar e apagar projeto', 0, '2018-04-19 11:16:58', NULL),
(8, 'Arrumar data de nascimento PF', 0, '2018-04-24 22:38:08', NULL),
(9, 'Card Index: \"No prÃ³ximo curso temos x% das vagas confirmadas\"', 1, '2018-04-24 22:39:23', NULL),
(11, 'Transformar o navigation todo em PHP', 0, '2018-05-09 11:33:31', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissoes` varchar(255) NOT NULL DEFAULT '0' COMMENT '1 - PF 2 - PJ 3 - Cursos 4 - Livros 5 - Inscrições 6 - Voucher 7 - Contas a Pagar 8 - A Receber 9 - Usuários 10 - Projetos; 11 - Marketing',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id`, `login`, `email`, `senha`, `permissoes`, `status`) VALUES
(5, 'king', 'king@sway.com', '5eac43aceba42c8757b54003a58277b5', '1,2,3,4,5,6,11,7,8,9,10', 1),
(6, 'king12', 'kng@a.com', '5eac43aceba42c8757b54003a58277b5', '1,2,3,4,5,6,10', 1),
(7, 'gi', 'gi@bcd.com', '827ccb0eea8a706c4c34a16891f84e7b', '4,5', 1),
(8, 'king2', 'aaa@aaa.com', '5eac43aceba42c8757b54003a58277b5', '2,5', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tb_projetos`
--
ALTER TABLE `tb_projetos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cursos`
--
ALTER TABLE `tb_cursos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- AUTO_INCREMENT for table `tb_projetos`
--
ALTER TABLE `tb_projetos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
