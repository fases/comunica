-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2015 às 19:47
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
  `data_pedido_emprestimo` date NOT NULL,
  `hora` time NOT NULL,
  `id_material` int(11) NOT NULL,
  `justificativa_emprestimo` varchar(1000) NOT NULL,
  `obs_emprestimo` varchar(1000) NOT NULL,
`id_emprestimo` int(11) NOT NULL,
  `situacao_emprestimo` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_devolucao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `data_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `responsavel` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `local` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `descricaoevento` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `obs_evento` varchar(250) COLLATE latin1_general_ci NOT NULL,
`id_evento` int(11) NOT NULL,
  `situacao_evento` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`data_evento`, `hora_evento`, `responsavel`, `local`, `descricaoevento`, `obs_evento`, `id_evento`, `situacao_evento`, `id_usuario`) VALUES
('0008-04-08', '08:04:00', '84a8sdasd', 'alksdlsak', 'lkdlaksd', 'lkdlsakd', 1, 0, 0),
('0000-00-00', '00:00:00', '', '', '', '', 2, 0, 0),
('0515-12-05', '05:01:00', 'asdalkdj', 'lkadlksalkd', 'lkdalksald', 'kadlskdlak', 3, 0, 0),
('2015-02-21', '21:15:00', 'asdkakdjaskj', 'kadjkajskdj', 'kadjkasjdk', 'kdajksdjakj', 4, 0, 0),
('5454-04-05', '21:54:00', 'asdlaskld', 'lkadlksdl', 'lkdlaksld', 'lkfdaldalsk', 5, 0, 0),
('1996-06-30', '06:59:00', 'bgcbb', 'ggg', 'ggg', 'ggg', 6, 0, 0),
('0007-04-08', '08:59:00', 'sakldaldk', 'lakdlaskd', 'lkaldkas', 'lakdlas', 7, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressao`
--

CREATE TABLE IF NOT EXISTS `impressao` (
  `tipo_impressao` varchar(100) NOT NULL,
  `tipo_papel` int(11) NOT NULL,
  `justificativa_impressao` varchar(300) NOT NULL,
  `upload` varchar(300) NOT NULL,
`id_impressao` int(11) NOT NULL,
  `situacao_impressao` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `descricao` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `nomematerial` varchar(500) COLLATE latin1_general_ci NOT NULL,
`id_material` int(11) NOT NULL,
  `situacao_material` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`descricao`, `nomematerial`, `id_material`, `situacao_material`) VALUES
('value', 'lapis', 1, 0),
('rosa', 'caneta', 2, 0),
('preto', 'beca', 3, 0),
('brilhoso', 'chapeu', 4, 0),
('verde', 'tecido', 5, 0),
('roxo', 'microfone', 6, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
`id_noticias` int(11) NOT NULL,
  `titulo` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `justificativa_noticia` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `upload_noticias` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `situação_noticias` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao grafica`
--

CREATE TABLE IF NOT EXISTS `producao grafica` (
  `anexo` varchar(300) NOT NULL,
  `data_pedido` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `justificativa` varchar(500) NOT NULL,
  `id_pGrafica` int(11) NOT NULL,
  `situacao_pGrafiica` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
 ADD PRIMARY KEY (`id_emprestimo`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
 ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `impressao`
--
ALTER TABLE `impressao`
 ADD PRIMARY KEY (`id_impressao`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
 ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
 ADD PRIMARY KEY (`id_noticias`);

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
MODIFY `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `impressao`
--
ALTER TABLE `impressao`
MODIFY `id_impressao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` tinyint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
