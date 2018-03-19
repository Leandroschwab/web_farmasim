-- phpMyAdmin SQL Dump
-- version 4.2.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3388
-- Generation Time: 19-Mar-2018 às 04:16
-- Versão do servidor: 5.6.19
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `farmasim`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `variavel` varchar(16) COLLATE utf8_bin NOT NULL,
  `valor` varchar(16) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`variavel`, `valor`) VALUES
('indice-user', '27543011'),
('onf', 'test');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id-receita` int(8) NOT NULL,
  `Nome Remecio` varchar(40) COLLATE utf8_bin NOT NULL,
  `cor` varchar(7) COLLATE utf8_bin NOT NULL,
  `6:00` tinyint(1) NOT NULL,
  `7:00` tinyint(1) NOT NULL,
  `12:00` tinyint(1) NOT NULL,
  `19:00` tinyint(1) NOT NULL,
  `21:00` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE IF NOT EXISTS `receitas` (
  `id-receita` int(8) NOT NULL,
  `nome-paciente` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(8) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id-receita`, `nome-paciente`, `password`) VALUES
(11112223, 'leles hdhas', 'hehehehe'),
(11112224, 'leles hdhas4', 'hehehehr'),
(11112224, 'leles hdhas4', 'hehehehr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
