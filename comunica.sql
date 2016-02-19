-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Fev-2016 às 11:49
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
  `local` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `termos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`data`, `hora`, `id_material`, `justificativa`, `obs`, `id`, `status`, `id_usuario`, `data_devolucao`, `hora_devolucao`, `local`, `data_cadastro`, `termos`) VALUES
('2016-02-19', '12:00:00', 19, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, 1, '2016-02-19', '16:00:00', 'B1', '2016-02-19 08:45:27', 1);

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

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`data`, `hora`, `responsavel`, `local`, `descricao`, `obs`, `id`, `status`, `id_usuario`, `data_cadastro`) VALUES
('2016-02-18', '15:55:00', 'Carol', 'Auditório', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 12, 1, 1, '2016-02-18 16:50:59');

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
('folder', 'Fotográfico', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 1, 1, NULL, NULL, NULL, 1, NULL, NULL, '0000-00-00 00:00:00', NULL),
('banner', 'A4', 'asdhasjdhsadjkdhsdjdk', 2, 1, NULL, NULL, NULL, 2, NULL, NULL, '2016-02-17 18:39:39', NULL);

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
('CÂMERA FOTOGRÁFICA DIGITAL, REFLEX, COM AF/AE, COM SENSOR DIGITAL CMOS DE 18 MEGAPIXELS COM PROPORÇÃO DE 3:2, LENTE 18-55MM F/3.5-5.6, VISOR ÓTICO, MÍDIAS DE GRAVAÇÃO COM CARTÃO DO TIPO SD, SDHC E SDXC, FORMATO DE IMAGEM JPEG, RAW E JPEG+RAW, GARANTIA DE ', 'Câmera digital  CANON', 19, 0, '1', 221117, '2016-02-18 16:32:57'),
('FILMADORA DIGITAL PORTÁTIL COR PREDOMINANTE PRETO COM DISCO RÍGIDO INTERNO DE 16GB. TELA LCD DE NO MÍNIMO 2,7", RESOLUÇÃO DE 3,3 MP, ZOOM ÓPTICO: 25X. MARCA: SONY, MODELO: HDR CX160.', 'Filmadora SONY', 20, 0, '1', 227960, '2016-02-18 16:35:58'),
('Refletor redondo de cor vermelha', 'Canhão de Luz (cor vermelha)', 21, 0, '1', 0, '2016-02-18 16:41:17'),
('Refletor redondo de cor laranja', 'Canhão de Luz (cor laranja)', 22, 0, '1', 0, '2016-02-18 16:42:58'),
('Refletor redondo de cor violeta', 'Canhão de Luz (cor violeta)', 23, 0, '1', 0, '2016-02-18 16:43:12'),
('Refletor redondo ', 'Refletor redondo ', 24, 0, '1', 0, '2016-02-18 16:44:22'),
('Mesa de controle de iluminação(compacta), c/02 presets, de 12 faders(potenciômetros) cada, com possibilidade de controlar até 48 canais, 12 páginas de 24 memórias. Marca: STAR.', 'Mesa de controle de iluminação', 25, 0, '1', 110260, '2016-02-18 16:44:33');

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
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, '2016-02-19', '2016-02-19 07:40:15');

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
  `tipo` varchar(255) NOT NULL
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
(20, 'Admin', '21232f297a57a5a743894a0e4a801fc3', '123456789', 'admin@comunica.com', '(99) 99999-9999', 2, 1, 'Lorem ipsum dolor sit amet, VV', NULL, '2016-02-19 06:01:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impressao`
--
ALTER TABLE `impressao`
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
  ADD KEY `status_2` (`status`);

--
-- Indexes for table `producao`
--
ALTER TABLE `producao`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `impressao`
--
ALTER TABLE `impressao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `producao`
--
ALTER TABLE `producao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
