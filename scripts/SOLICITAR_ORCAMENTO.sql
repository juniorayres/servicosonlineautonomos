-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 09/06/2018 às 11:14
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
-- Estrutura para tabela `SOLICITAR_ORCAMENTO`
--

CREATE TABLE IF NOT EXISTS `SOLICITAR_ORCAMENTO` (
  `ID` int(11) NOT NULL,
  `NOME_CLIENTE` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `TELEFONE_CLIENTE` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `DESCRICAO_SERVICO` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `NOME_PROFISSIONAL` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `CNPJ` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL_PROFISSIONAL` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `AREA_ATUACAO` varchar(300) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `SOLICITAR_ORCAMENTO`
--

INSERT INTO `SOLICITAR_ORCAMENTO` (`ID`, `NOME_CLIENTE`, `TELEFONE_CLIENTE`, `EMAIL`, `DESCRICAO_SERVICO`, `NOME_PROFISSIONAL`, `CNPJ`, `EMAIL_PROFISSIONAL`, `AREA_ATUACAO`) VALUES
(42, 'anres', '51992099039', 'junioralvesmedeiros@gmail.com', 'criar uma querye', 'ayres alves medeiros junior', '7788666543', 'junioralvesmedeiros@gmail.com', 'tec.informatica'),
(43, 'anres', '51992099039', 'junioralvesmedeiros@gmail.com', 'criar uma querye', 'ayres alves medeiros junior', '7788666543', 'junioralvesmedeiros@gmail.com', 'tec.informatica'),
(45, 'ayres alves medeiros junior', '998477861', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'katiane medeiros', '', '', ''),
(49, 'ayres alves medeiros junior', '51992099039', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'silvana severo', '456666', 'junioralvesmedeiros@gmail.com', NULL),
(50, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'criar uma query', 'fernando tabelo', '44332211', 'junioralvesmedeiros@gmail.com', NULL),
(51, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'criar uma query', 'fernando tabelo', '44332211', 'junioralvesmedeiros@gmail.com', NULL),
(52, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'criar uma query', 'fernando tabelo', '44332211', 'junioralvesmedeiros@gmail.com', NULL),
(53, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'criar uma query', 'fernando tabelo', '44332211', 'junioralvesmedeiros@gmail.com', NULL),
(54, 'ayres alves medeiros junior', '51992099039', 'junioralvesmedeiros@gmail.com', 'CONSTRUIR UM BANHEIRO', 'Kassiane Farias Medeiros', '0212345678', 'Kassiane@gmail.com', NULL),
(55, 'amaral', '32546765', 'junioralvesmedeiros@gmail.com', 'criar uma query', 'AYRES ALVES MEDEIROS JUNIOR', '8114353201645', 'junioralvesmedeiros@gmail.com', NULL),
(56, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(57, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(58, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(59, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(60, 'LUCAS', '51992099039', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(61, 'ayres', '98477861', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(62, 'Josue Antunes Moreira', '34272409', 'quelialencoi', 'Instalar cameras', 'pedro alencoi', '123456667788', 'junioralvesmedeiros@gmail.com', NULL),
(63, 'Josue Antunes Moreira', '34272409', 'quelialencoi', 'Instalar cameras', 'pedro alencoi', '123456667788', 'junioralvesmedeiros@gmail.com', NULL),
(64, 'Josue Antunes Moreira', '34283409', 'junioralvesmedeiros@gmail.com', 'Instalar cameras', 'pedro alencoi', '123456667788', 'junioralvesmedeiros@gmail.com', NULL),
(65, 'LUCAS', '', 'junioralvesmedeiros@gmail.com', '', 'Queli mediros', '', 'quelialencoimedeiros@gmail.com', NULL),
(66, 'LUCAS', '', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'AYRES ALVES MEDEIROS JUNIOR', '8114353201645', 'junioralvesmedeiros@gmail.com', NULL),
(67, 'LUCAS', '', 'junioralvesmedeiros@gmail.com', 'formatar computador', 'AYRES ALVES MEDEIROS JUNIOR', '8114353201645', 'junioralvesmedeiros@gmail.com', NULL),
(68, 'ayres alves medeiros junior', '', 'junioralvesmedeiros@gmail.com', '', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(69, '', '', '', '', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(70, '', '', '', '', 'jose honorato dos santos', '345676543', 'junioralvesmedeiros@gmail.com', NULL),
(71, '', '', '', '', 'Queli mediros', '', 'quelialencoimedeiros@gmail.com', NULL),
(72, '', '', '', '', 'rodolfo', '21557632', 'junioralvesmedeiros@gmail.com', NULL),
(73, '', '', '', '', 'antonio morais', '811532537231', 'antonio@hotmail', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `SOLICITAR_ORCAMENTO`
--
ALTER TABLE `SOLICITAR_ORCAMENTO`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `SOLICITAR_ORCAMENTO`
--
ALTER TABLE `SOLICITAR_ORCAMENTO`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
