-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Fev-2016 às 03:30
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
  `data_pedido` date NOT NULL,
  `hora` time NOT NULL,
  `id_material` int(11) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_devolucao` int(11) NOT NULL,
  `hora_devolucao` time NOT NULL,
  `local_de_uso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `obs` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressao`
--

CREATE TABLE `impressao` (
  `tipo_impressao` varchar(255) NOT NULL,
  `tipo_papel` varchar(255) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `url_1` varchar(255) NOT NULL,
  `url_2` varchar(255) NOT NULL,
  `url_3` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `arquivo_1` varchar(255) NOT NULL,
  `arquivo_2` varchar(255) NOT NULL,
  `arquivo_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `especificacao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `situacao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `patrimonio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `arquivo_1` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `arquivo_2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `arquivo_3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `status` int(1) NOT NULL,
  `url_1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `url_2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `url_3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao grafica`
--

CREATE TABLE `producao grafica` (
  `data` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `url_1` varchar(255) NOT NULL,
  `url_2` varchar(255) NOT NULL,
  `url_3` varchar(255) NOT NULL,
  `arquivo_1` varchar(255) NOT NULL,
  `arquivo_2` varchar(255) NOT NULL,
  `arquivo_3` varchar(255) NOT NULL,
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
  `informacao` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producao grafica`
--
ALTER TABLE `producao grafica`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `impressao`
--
ALTER TABLE `impressao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
