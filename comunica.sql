-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Fev-2016 às 01:51
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comunica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_material` int(11) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_devolucao` date NOT NULL,
  `hora_devolucao` time NOT NULL,
  `id_local` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `termos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`data`, `hora`, `id_material`, `justificativa`, `obs`, `id`, `status`, `id_usuario`, `data_devolucao`, `hora_devolucao`, `id_local`, `data_cadastro`, `termos`) VALUES
('2016-02-27', '22:00:00', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. \r\n', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 1, 1, 1, '2016-02-27', '22:00:00', 6, '2016-02-27 00:46:19', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `responsavel` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `local` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `obs` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressao`
--

CREATE TABLE `impressao` (
  `tipo_material` varchar(255) NOT NULL,
  `tipo_papel` varchar(255) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `url_1` varchar(255) DEFAULT NULL,
  `url_2` varchar(255) DEFAULT NULL,
  `url_3` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `arquivo_1` varchar(255) DEFAULT NULL,
  `arquivo_3` varchar(255) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `arquivo_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `predio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `local`
--

INSERT INTO `local` (`id`, `nome`, `predio`) VALUES
(1, 'Sala B1', 'Prédio B'),
(4, 'Audiovisual', 'Prédio B'),
(5, 'Auditório', 'Prédio A'),
(6, 'Quadra', 'Prédio A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `especificacao` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `situacao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `patrimonio` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`especificacao`, `nome`, `id`, `status`, `situacao`, `patrimonio`, `data_cadastro`) VALUES
('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. ', 'Câmera Digital Sony', 1, 0, '1', 12546874, '2016-02-27 00:35:21'),
('Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Refletor', 2, 0, '1', 987456123, '2016-02-27 00:35:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `arquivo_1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `arquivo_2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `arquivo_3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `status` int(1) NOT NULL,
  `url_1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `url_2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `url_3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_publicacao` date NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao`
--

CREATE TABLE `producao` (
  `data_publicacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `url_1` varchar(255) DEFAULT NULL,
  `url_2` varchar(255) DEFAULT NULL,
  `url_3` varchar(255) DEFAULT NULL,
  `arquivo_1` varchar(255) DEFAULT NULL,
  `arquivo_2` varchar(255) DEFAULT NULL,
  `arquivo_3` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) NOT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `matricula` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tipo_acesso` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `endereco` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `informacao` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `matricula`, `email`, `telefone`, `tipo_acesso`, `status`, `endereco`, `informacao`, `data_cadastro`) VALUES
(1, 'Administrador', '21232f297a57a5a743894a0e4a801fc3', '999999', 'admin', NULL, 2, 1, NULL, NULL, '2016-02-27 00:27:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_emprestimo` (`id_usuario`),
  ADD KEY `fk_material_emprestimo` (`id_material`),
  ADD KEY `fk_local_emprestimo` (`id_local`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_eventos` (`id_usuario`);

--
-- Indexes for table `impressao`
--
ALTER TABLE `impressao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_impressao` (`id_usuario`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `status_2` (`status`),
  ADD KEY `fk_usuario_noticias` (`id_usuario`);

--
-- Indexes for table `producao`
--
ALTER TABLE `producao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_producao` (`id_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `impressao`
--
ALTER TABLE `impressao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `producao`
--
ALTER TABLE `producao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `fk_local_emprestimo` FOREIGN KEY (`id_local`) REFERENCES `local` (`id`),
  ADD CONSTRAINT `fk_material_emprestimo` FOREIGN KEY (`id_material`) REFERENCES `material` (`id`),
  ADD CONSTRAINT `fk_usuario_emprestimo` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_usuario_eventos` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `impressao`
--
ALTER TABLE `impressao`
  ADD CONSTRAINT `fk_usuario_impressao` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_usuario_noticias` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `producao`
--
ALTER TABLE `producao`
  ADD CONSTRAINT `fk_usuario_producao` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
