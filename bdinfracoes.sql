-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2020 às 17:56
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdinfracoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `automovel`
--

CREATE TABLE `automovel` (
  `id` int(11) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `modelo` varchar(15) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `placa` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `automovel`
--

INSERT INTO `automovel` (`id`, `marca`, `modelo`, `cor`, `placa`) VALUES
(1, 'Volkswagem', 'T-Cross', 'Preto', 'IXX-1234'),
(2, 'Honda', 'HRV', 'Bordô', 'IHV-4554'),
(15, 'dasd', 'sd', 'adasd', 'adas'),
(20, '4', '3', '2', '1'),
(19, 'ewe', 'eqwe', 'qweqw', 'eq'),
(16, 'ds', 'dsad', 'sadd', 'dsad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `automovel_infracao`
--

CREATE TABLE `automovel_infracao` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `placa` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `automovel_infracao`
--

INSERT INTO `automovel_infracao` (`id`, `codigo`, `placa`) VALUES
(1, 1, 'IXX-1234'),
(2, 4, 'IXX-1234'),
(3, 3, 'IHV-4554'),
(4, 1, 'IDB-6913'),
(5, 2, 'IMN-2076'),
(6, 3, 'IMN-2076'),
(19, 3, ''),
(15, 3, ''),
(20, 2, ''),
(16, 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `infracao`
--

CREATE TABLE `infracao` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `valor` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `infracao`
--

INSERT INTO `infracao` (`codigo`, `descricao`, `valor`) VALUES
(1, 'Excesso de Velocidade', 780),
(2, 'Estacionamento em local não permitido', 535),
(3, 'Condutor não habilitado', 1456),
(4, 'Ultrapassagem não permitida', 652);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `automovel`
--
ALTER TABLE `automovel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `automovel_infracao`
--
ALTER TABLE `automovel_infracao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `infracao`
--
ALTER TABLE `infracao`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `automovel`
--
ALTER TABLE `automovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
