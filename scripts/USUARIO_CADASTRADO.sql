-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 09/06/2018 às 11:19
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
-- Estrutura para tabela `USUARIO_CADASTRADO`
--

CREATE TABLE IF NOT EXISTS `USUARIO_CADASTRADO` (
  `ID_PROFISSIONAL` int(11) NOT NULL,
  `CPF` int(11) DEFAULT NULL,
  `CREA` int(11) DEFAULT NULL,
  `NOME` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `DATA_NASC` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `TELEFONE` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `RUA` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `NUMERO` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `BAIRRO` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `ESTADO` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `CIDADE` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CEP` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `AREA_ATUACAO` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `SENHA` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `LOGIN_USUARIO` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `CNPJ` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `USUARIO_CADASTRADO`
--

INSERT INTO `USUARIO_CADASTRADO` (`ID_PROFISSIONAL`, `CPF`, `CREA`, `NOME`, `DATA_NASC`, `TELEFONE`, `EMAIL`, `RUA`, `NUMERO`, `BAIRRO`, `ESTADO`, `CIDADE`, `CEP`, `AREA_ATUACAO`, `SENHA`, `LOGIN_USUARIO`, `CNPJ`) VALUES
(17, 8253900, 12345678, 'Queli mediros', '10/10/1999', '98477861', 'quelialencoimedeiros@gmail.com', 'leopoldo', '1235', 'gerra', 'pi', 'aragua', '97662774', 'eletrônica', '123456', 'quelim', NULL),
(39, 456789045, 12345678, 'jose honorato dos santos', '10/10/2000', '51992099039', 'junioralvesmedeiros@gmail.com', 'sese', '1729', 'centro', 'ac', 'sasa', '111111111', '3456765642', '12345', 'jose', '345676543'),
(19, 29580987, 2147483647, 'Norberto', '06/10/1984', '43678531', 'norberto.medeiros@4all.com', 'emilio santos', '8766554433', 'araça', 'ac', 'Canoas', '923200001', 'eletricista', '', '1234', '987665546'),
(20, 98767654, 12334567, 'katiane medeiros', '12/12/2000', '5134272409', 'kati@gmail.com', 'sao geraldo', '234', 'amapa', 'pe', 'cairu', '92323455', 'programador', '12345', 'katime', NULL),
(15, 2147483647, 55665544, 'ayres lucas medeiros', '18/09/2001', '87655432', 'jrla@mail.com', 'jose', '12324', 'armor', 'rs', 'canoas', '92320-325', 'encanador', '', 'lucasayres', NULL),
(16, 8253008, 786543, 'AYRES ALVES MEDEIROS JUNIOR', '13/09/1982', '34272408', 'junioralvesmedeiros@gmail.com', 'são pedro', '345', 'harmonia', 'RS', 'canoas', '92325-320', 'programador', '221206', 'ayresjr', '8114353201645'),
(21, 717821565, 216755678, 'JoÃ£o souza alves', '14/09/1988', '5198755861', 'Carpints@gmail.com', 'JoÃ£o pedroso', '1729', 'Sao geraldo', 'rs', 'Sapucaia', '92320700', 'Carpinteiro', '221206', 'Carpintariajr', NULL),
(22, 811435, 78765432, 'Jeronimo alves ', '10/10/1983', '34283409', 'gessoecia@gmail', 'Jose onorato', '324', 'Heitar', 'sc', '', '00000-000', 'Gesseiro', '221206', 'Gessolta', NULL),
(23, 165789987, 1234567890, 'henrrique rodolfo pranke', '10/10/1988', '841416787', 'henrrique@gmail', 'sao pedro', '2314', 'cerne', 'rj', 'arangua', '92320-325', 'azulegista', '221206', 'henrriquep', '7788666543'),
(24, 2147483647, 1298765439, 'henrrique rodolfo pranke', '12/12/1978', '81877962', 'henrrique@gmail', 'sao pedro', '567', 'armor', 'rs', 'zaire', '92320-325', 'tec.informatica', '34567', 'henrriquep', '76589974321'),
(25, 2147483647, 23456789, 'pedro alencoi', '12/12/1988', '998755641', 'junioralvesmedeiros@gmail.com', 'jose verissimo', '1729', 'armor', 'rs', 'canoas', '92320700', 'programador', '123456', 'pedroal', '123456667788'),
(26, 2147483647, 12579, 'temer ferdinando', '09/05/1983', '999477862', 'junioralvesmedeiros@gmail.com', 'tiradentes', '170', 'centro', 'ac', 'canoas', '089 233', 'eletricista', '2212a', 'batera', '15379'),
(27, 2147483647, 547777, 'silvana severo', '22/12/1980', '998477222', 'junioralvesmedeiros@gmail.com', 'afonÃ§o', '111', 'centro', 'ac', 'porto alegre', '895543', 'programador', '12122006', 'batera', '456666'),
(28, 1234335577, 224455, 'walmor benet', '02/12/1979', '984775577', 'junioralvesmedeiros@gmail.com', 'fioravante', '115', 'centro', 'ac', 'canoas', '00000321', 'tec.eletronica', '123qw', 'walmor', '77886665000'),
(29, 900032145, 32166, 'irineu tavares', '22/11/1980', '97654321', 'junioralvesmedeiros@gmail.com', 'bandeira', '456', 'centro', 'ac', 'porto alegre', '32100066', 'encanador', '225588', 'irineu', '1269900'),
(30, 45632177, 1122000, 'fernando tabelo', '10/10/1978', '998422244', 'junioralvesmedeiros@gmail.com', 'patrocino', '5588', 'centro', 'ac', 'porto alegre', '00000245', 'tec.informatica', '12345', 'fernando', '44332211'),
(31, 2147483647, 190006, 'pedro henzets', '12/09/1978', '986234560', 'junioralvesmedeiros@gmail.com', 'araÃ§a', '890', 'cincolonia', 'ac', 'canoas', '0000980', 'tec.eletronica', '2323q', 'pedro', '123678'),
(32, 2147483647, 12345600, 'tito costa', '13/08/1979', '987543215', 'junioralvesmedeiros@gmail.com', 'chavier', '976', 'holandes', 'ac', 'londres', '00003589', 'tec.informatica', 't4545', 'titoo', '214566'),
(33, 82534567, 12777980, 'rodolfo', '22/11/1978', '998477000', 'junioralvesmedeiros@gmail.com', 'emanuel', '122', 'armor', 'ac', 'mana', '00447790', 'tec.redes', '1rodolfo', 'rodolfo1', '21557632'),
(34, 865423399, 299045, 'shaiane silva', '24/08/1977', '98745123', 'junioralvesmedeiros@gmail.com', 'sebastiao', '443', 'severo', 'ac', 'holanda', '000321', 'tec.redes', 'sh223', 'shaiane223', '246789934'),
(35, 798700, 2359900, 'estefan marques', '30/05/1980', '987543217', 'junioralvesmedeiros@gmail.com', 'bartolomeu', '554', 'centro', 'ac', 'mare', '1234000', 'tec.redes', '', '', '003399567'),
(36, 86542341, 876, 'antonio silva', '11/02/1978', '976543240', 'junioralvesmedeiros@gmail.com', 'carlos drumond', '452', 'centro', 'ac', 'mare', '12345000', 'eletricista', 'c3232', 'carlos 32', '098733245'),
(37, 876543212, 962231, 'mateus west', '09/06/1977', '976432213', 'junioralvesmedeiros@gmail.com', 'dorneles', '216', 'centro', 'ac', 'nasa', '0000347', 'tec.eletrica', '0909m', 'mateus', '432199'),
(38, 2147483647, 234542111, 'antÃ´nio marcos de avila morais', '22/12/1980', '5567899041', 'antonio@gmail.com', 'sÃ£o joÃ£o', '1235', 'centro', 'ac', 'araÃ§a', '923123-90', 'tec.eletrica', '345678', 'antonio marcos', '0083544261'),
(40, 2147483647, 436555437, 'antonio morais', '20/01/2016', '51324433556', 'antonio@hotmail', 'sao jorge', '2344', 'centro', 'ac', 'manaus', '92342310', 'hidraulico', '221206', 'antoniom', '811532537231'),
(63, 2147483647, 768654231, 'JOAO DA SILVA', '14/29/1988', '51992099039', 'junioralvesmedeiros@gmail.com', 'ARAI', '123', 'CENTRO', 'ac', 'CANOAS', '2222222', 'tec.ferragens', '123456', 'JOAO', '87651443231'),
(44, 2147483647, 12678965, 'Alexandre morais de souza', '12/09/1989', '34562509', 'Joaos@gmail.com', 'JoÃ£o pedroso', '324', 'Sao geraldo', 'rs', 'Amaral', '923201188', 'MecÃ¢nica', '221202', 'Jpedroso', '81556543217'),
(45, 2147483647, 45632146, 'Kassiane Farias Medeiros', '03/03/1999', '34272408', 'Kassiane@gmail.com', 'Jose verissimo', '324', 'Harmonia', 'rs', 'Canoas', '92320700', 'Tec.edificaÃ§Ãµes', '330322', 'Kassiane', '0212345678'),
(46, 824380071, 2122889976, 'Jair dos santos', 'dd/mm/1992', '5197866541', 'Vaz@gmail.com', 'JoÃ£o de vaz', '256', 'Sao geraldo', 'rs', 'Porto Alegre', '92325700', 'Tec.elÃ©trica', '121212', 'Jvaz', '00322178754'),
(47, 2147483647, 12345678, 'Aldair medeiros lopes', '22/12/1980', '5134251320', '', 'sao pedro', '12', 'Harmonia', 'rs', 'canoas', '00000-000', 'tec.ferragens', '', '', '91165444327'),
(48, 2147483647, 2147483647, 'Lillian Farias Medeiros', '10/11/1998', '5134272408', 'lillianmedeiros@gmail.com', 'JOSE VERISSIMO', '1721', 'Harmonia', 'rs', 'Canoas', '92320-700', 'tec.informatica', '10lovepaul', 'lillo153', '009880960001'),
(49, 0, 0, '.', 'dd/mm/0000', '', '', '', '', '', 'ac', '', '00000-000', '', '', '', ''),
(50, 2147483647, 784512963, 'Kassiane Farias Medeiros', '03/03/1992', '5134272408', 'kassianefariasmedeiros@gmail.com', 'JOSE VERISSIMO', '1721', 'Harmonia', 'rs', 'Canoas', '92320-700', 'programadores de TI', 'k030309k19', 'kassiane medeiros', '009280950003'),
(51, 947308067, 369124587, 'Debora  Farias Medeiros', '26/03/1978', '5134272408', 'thaisp.fmedeiros@gmail.com', 'JOSE VERISSIMO', '1721', 'Harmonia', 'rs', 'Canoas', '92320-700', 'tec.informatica', 'gatinho', 'Debora C.M', '614121100020'),
(52, 868184, 910052209, 'Thais Pamela Farias Medeiros', '21/06/1995', '5134272408', 'thaisp.fmedeiros@gmail.com', 'JOSE VERISSIMO', '1721', 'Harmonia', 'rs', 'Selecione', '92320-700', 'programadores de TI', 'pamelafarias21', 'ThaisPamela', '109241110085'),
(54, 825309, 23456782, 'lucas medeiros', '18/09/2000', '5198477861', 'junioralvesmedeiros@gmail.com', 'sao pedro', '1234', 'centro', 'ac', 'canoas', '92320700', 'programador', '827ccb0eea8a706c4c34a16891f84e7b', 'lucasm', '00987654'),
(53, 811435, 1234512233, 'jaja', '1234567', '00099999', 'junioralvesmedeiros@gmail.com', 'sese', '1729', 'centro', 'rn', 'acre', '111111111', 'eletricistaeletricis', '1234', 'ayre', '778866654300'),
(68, 887634452, 7634122, 'Josue', 'dd/mm/0000', '9876543321', 'junioralvesmedeiros@gmail.com', 'Sao joao', '54', 'Armo', 'rs', 'Canoas', '92320700', 'EdificaÃ§Ã£o', '1234', 'Ale', '665541332'),
(55, 2147483647, 12345678, 'lucas alencoi', '18/09/2000', '5198477861', 'smedeiros@gmail.com', 'sao pedro', '1234', 'centro', 'ac', 'canoas', '92320700', 'tec.informatica', '$2y$10$OWPEK6zQkJ0mal1dB.mHhOTrDJ114bA2WbOXNCoq4a9DRT2d1lZre', 'lucasl', '09876543243'),
(62, 2147483647, 23212233, 'ANDRE LEMOS ', '22/12/1999', '5132271229', 'junioralvesmedeiros@gmail.com', 'ARAGUA', '111', 'centro', 'ac', 'CAMAQUÃƒO', '923207000', 'azulegista', '221206', 'ANDRE', '23221234'),
(64, 811435321, 1098762435, 'jose de alencar', '12/12/2001', '5132271229', 'junioralvesmedeiros@gmail.com', 'sao joao', '232', 'centro', 'ac', 'canoas', '111111111', 'tec.ferragens', '12345', 'jose', '0098722124'),
(65, 987645553, 543644234, 'LUCIANO MORAIS', '22/12/1982', '098765433432', '', 'AMAPA', '980', 'CENTRO', 'rn', 'CAMAQUA', '00000-000', 'TE.FERRAGENS', '09876', 'LUCIANO', '009876345556'),
(66, 2147483647, 2147483647, 'JOSE ANTONIO', 'dd/mm/0000', '99876544423', 'junioralvesmedeiros@gmail.com', 'SÃƒO GERALDO', '9987', 'CENTRO', 'rj', 'ARANGUA', '998887654', 'HIDRAULICO', '09876', 'JOSE', '8877645231'),
(69, 2147483647, 2147483647, 'CARLOS AUGUSTO DE SOUZA', '22/12/1998', '32256545', 'junioralvesmedeiros@gmail.com', 'SÃƒO GERALDO', '2233', 'CENTRO', 'rj', 'CAMASSARI', '92430166', 'AZULEGISTA', '221206', 'carlos', '887765996432'),
(70, 2147483647, 12345678, 'jose antunes azevedo', 'dd/mm/0000', '51992099039', 'junioralvesmedeiros@gmail.com', 'carlos de abreu', '1243', 'centro', 'rn', 'canada', '222222222', 'eltricista', '121212', 'jose', '333333333333'),
(76, 2147483647, 88765543, 'andre andrade', 'dd/mm/0000', '98766543', 'junioralvesmedeiros@gmail.com', 'sÃ£ogenoino', '22332', 'centro', 'rn', 'cairu', '333333333', 'te.gesso', '12345', 'andre', '7781554236');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `USUARIO_CADASTRADO`
--
ALTER TABLE `USUARIO_CADASTRADO`
  ADD PRIMARY KEY (`ID_PROFISSIONAL`), ADD UNIQUE KEY `CREA_CPF` (`CNPJ`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `USUARIO_CADASTRADO`
--
ALTER TABLE `USUARIO_CADASTRADO`
  MODIFY `ID_PROFISSIONAL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
