-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2015 às 19:09
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comunica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE IF NOT EXISTS `emprestimo` (
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `idmaterial` int(11) NOT NULL,
  `justificativa` varchar(1000) NOT NULL,
  `observacoes` varchar(1000) NOT NULL,
`idemprestimo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `responsavel` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `local` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `obs` varchar(250) COLLATE latin1_general_ci NOT NULL,
`id_eventos` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`data`, `hora`, `responsavel`, `local`, `descricao`, `obs`, `id_eventos`) VALUES
('0008-04-08', '08:04:00', '84a8sdasd', 'alksdlsak', 'lkdlaksd', 'lkdlsakd', 1),
('0000-00-00', '00:00:00', '', '', '', '', 2),
('0515-12-05', '05:01:00', 'asdalkdj', 'lkadlksalkd', 'lkdalksald', 'kadlskdlak', 3),
('2015-02-21', '21:15:00', 'asdkakdjaskj', 'kadjkajskdj', 'kadjkasjdk', 'kdajksdjakj', 4),
('5454-04-05', '21:54:00', 'asdlaskld', 'lkadlksdl', 'lkdlaksld', 'lkfdaldalsk', 5),
('1996-06-30', '06:59:00', 'bgcbb', 'ggg', 'ggg', 'ggg', 6),
('0007-04-08', '08:59:00', 'sakldaldk', 'lakdlaskd', 'lkaldkas', 'lakdlas', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`id_item` int(11) NOT NULL,
  `situacao` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `descricao` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `nomematerial` varchar(500) COLLATE latin1_general_ci NOT NULL,
`idmaterial` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`descricao`, `nomematerial`, `idmaterial`) VALUES
('value', 'lapis', 1),
('rosa', 'caneta', 2),
('preto', 'beca', 3),
('brilhoso', 'chapeu', 4),
('verde', 'tecido', 5),
('roxo', 'microfone', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` tinyint(1) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `matricula` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tipoacesso` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `senha`, `matricula`, `email`, `telefone`, `tipoacesso`) VALUES
(6, 'panda', 'panda', '123', 'panda@panda.com', '1234567', 0),
(7, 'joao', '14785', '777777777', 'joao@joaozin.com', '77777777', 0),
(8, 'haha', 'fgthfgh545', '87845164', 'haha@hihi.hehe', '6465465484', 0),
(9, 'dffdf', '4f5dg4ds', '564854', 'gfdgwefasfsa', '5454574', 0),
(10, 'fdhgfdh', 'ccccccc', '88888888', 'aaaaaaa', '7777777777', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
 ADD PRIMARY KEY (`idemprestimo`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
 ADD PRIMARY KEY (`id_eventos`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
 ADD PRIMARY KEY (`idmaterial`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
MODIFY `idemprestimo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
MODIFY `id_eventos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
MODIFY `idmaterial` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` tinyint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
