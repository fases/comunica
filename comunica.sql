-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Mar-2016 às 20:59
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
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL,
  `mensagem` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_contato`, `mensagem`, `id_usuario`, `data_cadastro`) VALUES
(1, 5, 'Olá!', 21, '2016-03-03 19:48:30'),
(2, 5, 'olá cinthian', 21, '2016-03-03 19:50:43'),
(3, 5, 'olá!', 21, '2016-03-03 19:53:47'),
(4, 5, 'olá!', 21, '2016-03-03 19:54:09'),
(5, 5, 'olá!', 21, '2016-03-03 19:54:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `assunto`, `mensagem`, `id_usuario`, `data_cadastro`, `status`) VALUES
(4, 'assunto', 'mensagem', 21, '2016-03-02 22:31:23', 3),
(5, 'Duis aute irure dolor in reprehenderit', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21, '2016-03-03 01:34:52', 1);

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
('2016-03-02', '14:00:00', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 2, 2, '2016-03-05', '15:00:00', 4, '2016-03-02 02:51:44', 1),
('2016-03-17', '14:00:00', 1, 'HDSAJDKHSAKDJSHDSKJDHASJ', 'fkajskldjsadskldjsdklsadjs', 21, 2, 21, '2016-03-31', '15:00:00', 5, '2016-03-02 22:43:35', 1),
('2016-03-03', '14:00:00', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 22, 3, 21, '2016-03-04', '15:00:00', 1, '2016-03-03 01:32:31', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `responsavel` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `id_local` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `obs` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`data`, `hora`, `responsavel`, `id_local`, `descricao`, `obs`, `id`, `status`, `id_usuario`, `data_cadastro`) VALUES
('2016-02-29', '14:00:00', 'Lucas', '1', 'sdhasljdhudiadasisdhasljdhudiadasisdhasljdhudiadasisdhasljdhudiadasi', 'sdhasljdhudiadasi', 1, 3, 1, '2016-02-29 20:54:37'),
('2016-02-29', '14:00:00', 'Amanda', '6', 'id_local', 'id_local_id', 2, 1, 1, '2016-02-29 20:56:23'),
('2016-02-29', '12:00:00', 'Amanda', '1', 'id_localid_local', 'id_localid_localid_localid_localid_localid_local', 3, 1, 1, '2016-02-29 20:57:54'),
('2016-03-01', '14:00:00', 'Geovane', '1', 'hdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdj', 'hdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdj', 4, 1, 1, '2016-03-01 02:44:16'),
('2016-03-01', '14:00:00', 'Geovane', '6', 'testando', 'testando', 5, 1, 1, '2016-03-01 14:10:12'),
('2016-03-01', '12:00:00', 'Cinthia', '5', 'testando', 'testando', 6, 1, 1, '2016-03-01 17:43:56'),
('2016-03-02', '15:00:00', 'Geovane', '4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 7, 1, 2, '2016-03-02 03:39:42'),
('2016-03-02', '15:00:00', 'Jadson', '1', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit i', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 8, 1, 2, '2016-03-02 03:43:12'),
('2016-03-03', '15:00:00', 'Geovane', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9, 1, 21, '2016-03-03 01:19:55');

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

--
-- Extraindo dados da tabela `impressao`
--

INSERT INTO `impressao` (`tipo_material`, `tipo_papel`, `justificativa`, `id`, `id_usuario`, `url_1`, `url_2`, `url_3`, `status`, `arquivo_1`, `arquivo_3`, `data_cadastro`, `arquivo_2`) VALUES
('banner', 'A4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 1, 1, '', '', '', 3, 'C:/xampp/htdocs/comunica/arquivos/producao/10367591_10152065983281080_8515879487756079752_n.png', NULL, '2016-03-02 03:45:04', NULL),
('certificado', 'Colchê', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 2, 1, '', '', '', 1, 'C:/xampp/htdocs/comunica/arquivos/producao/10367591_10152065983281080_8515879487756079752_n1.png', NULL, '2016-03-02 20:57:02', NULL),
('certificado', 'Fotográfico', 'teste', 3, 21, '', '', '', 1, 'C:/xampp/htdocs/comunica/arquivos/producao/004.jpg', NULL, '2016-03-02 21:00:00', NULL);

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

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `arquivo_1`, `arquivo_2`, `arquivo_3`, `status`, `url_1`, `url_2`, `url_3`, `id_usuario`, `data_publicacao`, `data_cadastro`) VALUES
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporLorem ipsum dolor ', 'C:/xampp/htdocs/comunica/arquivos/noticias/10367591_10152065983281080_8515879487756079752_n.png', NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 21:34:27'),
(13, 'titulo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'C:/xampp/htdocs/comunica/arquivos/noticias/10367591_10152065983281080_8515879487756079752_n1.png', NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 21:36:47'),
(14, 'testando', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', NULL, NULL, NULL, 2, 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 21, '2016-03-02', '2016-03-02 21:38:23'),
(15, 'titulo teste 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'C:/xampp/htdocs/comunica/arquivos/noticias/Mother.jpg', NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 21:38:53'),
(16, 'testando cadastro', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', NULL, NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 22:19:30'),
(17, 'testando novamente', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', NULL, NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 22:24:55');

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
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `producao`
--

INSERT INTO `producao` (`data_publicacao`, `id_usuario`, `justificativa`, `id`, `status`, `url_1`, `url_2`, `url_3`, `arquivo_1`, `arquivo_2`, `arquivo_3`, `tipo`, `data_cadastro`) VALUES
('2016-03-01 18:27:07', 1, 'var_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dump', 11, 3, 'www.w3schools.com', 'www.w3schools.com', 'www.w3schools.com', 'C:/xampp/htdocs/comunica/arquivos/producao/Mother1.jpg', NULL, NULL, 'Banner (A3)', '2016-03-02 02:43:36'),
('2016-03-03 01:15:43', 21, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 12, 1, '', '', '', 'C:/xampp/htdocs/comunica/arquivos/producao/Mother.jpg', NULL, NULL, 'Banner (120mmx80mm)', '2016-03-03 01:15:43');

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
(1, 'Damião', '4d014da2b931c2e08ee5d841899afc2f', '202020202', 'ed.mota@comunica.com', '(77) 77777-7777', 2, 3, 'Lorem ipsum dolor sit amet, XX', NULL, '2016-03-02 19:06:14'),
(2, 'Admin', 'c4ca4238a0b923820dcc509a6f75849b', '123456789', 'admin@comunica', '(99) 99999-9999', 2, 1, 'Lorem ipsum dolor sit amet, XX', NULL, '2016-03-02 04:09:29'),
(3, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '123456', 'admin', NULL, 2, 1, NULL, NULL, '2016-03-02 17:06:38'),
(21, 'Jadson Gomes de Medeiros', 'c4ca4238a0b923820dcc509a6f75849b', '20121044010174', 'jadson', '(77) 77777-7777', 1, 1, 'Lorem ipsum dolor sit amet, XX', NULL, '2016-03-02 18:14:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_contatos` (`id_usuario`);

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
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `impressao`
--
ALTER TABLE `impressao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `producao`
--
ALTER TABLE `producao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `fk_usuario_contatos` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

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

ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_usuario_comentarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

  ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_contatos` FOREIGN KEY (`id_contatos`) REFERENCES `contato` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
