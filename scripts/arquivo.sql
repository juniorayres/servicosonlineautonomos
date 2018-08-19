-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 09/06/2018 às 10:58
-- Versão do servidor: 5.5.51-38.2
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `servi045_PROFISSIONAIS_CADASTRADOS`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivo`
--

CREATE TABLE IF NOT EXISTS `arquivo` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `arquivo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `arquivo`
--

INSERT INTO `arquivo` (`codigo`, `nome`, `arquivo`, `data`) VALUES
(4, '', '.pdf', 2018),
(5, '', '.pdf', 2018),
(6, '', '.pdf', 2018),
(7, '', '.pdf', 2018),
(8, '', '.pdf', 2018),
(9, '', '.pdf', 2018),
(10, '', '.pdf', 2018),
(11, '', '.pdf', 2018),
(12, '.pdf', 'nnn', 2018),
(13, 'hhhh', '.pdf', 2018),
(14, 'hhhh', '.pdf', 2018),
(15, 'LUCAS', '.pdf', 2018),
(16, 'ayewa', '.pdf', 2018),
(17, 'ayres', 'cnpj.pdf', 2018),
(18, 'aaaaa', '.pdf', 2018);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
