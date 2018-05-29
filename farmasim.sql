-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2018 às 06:33
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmasim`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `variavel` varchar(16) COLLATE utf8_bin NOT NULL,
  `valor` varchar(16) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`variavel`, `valor`) VALUES
('indice-user', '27543112'),
('onf', 'test');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id-receita` int(8) NOT NULL,
  `Nome Remedio` varchar(40) COLLATE utf8_bin NOT NULL,
  `cor` varchar(7) COLLATE utf8_bin NOT NULL,
  `6:00` tinyint(1) NOT NULL,
  `7:00` tinyint(1) NOT NULL,
  `12:00` tinyint(1) NOT NULL,
  `19:00` tinyint(1) NOT NULL,
  `21:00` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id-receita`, `Nome Remedio`, `cor`, `6:00`, `7:00`, `12:00`, `19:00`, `21:00`) VALUES
(27543089, 'remedio1', '#000000', 1, 0, 0, 0, 0),
(27543089, 'remedio 2', '#400080', 0, 1, 1, 0, 0),
(27543089, 'remedio 3', '#ff80c0', 0, 0, 0, 1, 1),
(27543090, 'remedio1', '#000000', 1, 0, 0, 0, 0),
(27543090, 'remedio 2', '#400080', 0, 1, 1, 0, 0),
(27543090, 'remedio 3', '#ff80c0', 0, 0, 0, 1, 1),
(27543091, 'gfddfg', '#000000', 1, 0, 0, 0, 0),
(27543091, 'yhhhfd', '#000000', 1, 0, 1, 0, 0),
(27543092, 'bjkabskdbsajk', '#000000', 1, 0, 0, 0, 0),
(27543092, 'hgcjasc', '#000000', 1, 0, 0, 0, 0),
(27543093, 'bjkabskdbsajk', '#00ffff', 1, 1, 0, 0, 0),
(27543093, 'hy7buyb', '#8000ff', 0, 0, 1, 1, 1),
(27543094, 'bjkabskdbsajk', '#00ffff', 1, 1, 0, 0, 0),
(27543094, 'hy7buyb', '#8000ff', 0, 0, 1, 1, 1),
(27543095, 'bjkabskdbsajk', '#00ffff', 1, 1, 0, 0, 0),
(27543095, 'hy7buyb', '#8000ff', 0, 0, 1, 1, 1),
(27543096, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543096, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543097, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543097, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543098, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543098, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543099, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543099, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543100, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543100, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543101, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543101, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543102, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543102, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543103, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543103, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543104, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543104, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543105, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543105, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543106, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543106, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543107, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543107, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543108, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543108, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543109, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543109, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543110, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543110, 'ggff', '#000000', 0, 0, 1, 1, 1),
(27543111, 'gfddssd', '#000000', 1, 1, 0, 0, 0),
(27543111, 'ggff', '#000000', 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id-receita` int(8) NOT NULL,
  `nome-paciente` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(8) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id-receita`, `nome-paciente`, `password`) VALUES
(27543089, 'paciente', 'RXRCR2'),
(27543090, 'paciente', '4ALIRG'),
(27543091, '5ttrere', 'H3IFKP'),
(27543092, 'fkfb', 'S028SC'),
(27543093, 'fkfb', '5HJK4L'),
(27543094, 'fkfb', 'RXMHT6'),
(27543095, 'fkfb', 'F4S4XL'),
(27543096, 'gfdgsd', 'C9EU9N'),
(27543097, 'gfdgsd', 'VFJ2LC'),
(27543098, 'gfdgsd', 'RQC9L8'),
(27543099, 'gfdgsd', '3755H2'),
(27543100, 'gfdgsd', '65O8DX'),
(27543101, 'gfdgsd', '3TYXP4'),
(27543102, 'gfdgsd', 'BX1ZAR'),
(27543103, 'gfdgsd', 'HDNEJI'),
(27543104, 'gfdgsd', '7G3Y0N'),
(27543105, 'gfdgsd', 'MRDU3K'),
(27543106, 'gfdgsd', 'PFQLAU'),
(27543107, 'gfdgsd', 'XEYFY3'),
(27543108, 'gfdgsd', 'GQACL2'),
(27543109, 'gfdgsd', '7Y5CA8'),
(27543110, 'gfdgsd', 'NHWXUE'),
(27543111, 'gfdgsd', 'QX6UF8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
