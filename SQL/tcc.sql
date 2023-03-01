-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2023 às 17:39
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadasto login`
--

CREATE TABLE `cadasto login` (
  `IDLOG` int(11) NOT NULL,
  `usuarioLOG` varchar(100) NOT NULL,
  `senhaLOG` varchar(100) NOT NULL,
  `emailLOG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro medico`
--

CREATE TABLE `cadastro medico` (
  `IDMED` int(11) NOT NULL,
  `nomeMED` varchar(100) NOT NULL,
  `nascimentoMED` date NOT NULL,
  `cpfMED` varchar(100) NOT NULL,
  `emailMED` varchar(100) NOT NULL,
  `telefoneMED` varchar(100) NOT NULL,
  `crmMED` varchar(100) NOT NULL,
  `situacaoMED` varchar(100) NOT NULL,
  `especialidadeMED` varchar(100) NOT NULL,
  `ruaMED` varchar(100) NOT NULL,
  `bairroMED` varchar(100) NOT NULL,
  `cidadeMED` varchar(100) NOT NULL,
  `estadoMED` varchar(100) NOT NULL,
  `cepMED` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro paciente`
--

CREATE TABLE `cadastro paciente` (
  `IDPAC` int(11) NOT NULL,
  `nomePAC` varchar(100) NOT NULL,
  `nascimentoPAC` date NOT NULL,
  `cpfPAC` varchar(100) NOT NULL,
  `emailPAC` varchar(100) NOT NULL,
  `telefonePAC` varchar(100) NOT NULL,
  `ruaPAC` varchar(100) NOT NULL,
  `bairroPAC` varchar(100) NOT NULL,
  `cidadePAC` varchar(100) NOT NULL,
  `estadoPAC` varchar(100) NOT NULL,
  `cepPAC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadasto login`
--
ALTER TABLE `cadasto login`
  ADD PRIMARY KEY (`IDLOG`);

--
-- Índices para tabela `cadastro medico`
--
ALTER TABLE `cadastro medico`
  ADD PRIMARY KEY (`IDMED`);

--
-- Índices para tabela `cadastro paciente`
--
ALTER TABLE `cadastro paciente`
  ADD PRIMARY KEY (`IDPAC`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadasto login`
--
ALTER TABLE `cadasto login`
  MODIFY `IDLOG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastro medico`
--
ALTER TABLE `cadastro medico`
  MODIFY `IDMED` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastro paciente`
--
ALTER TABLE `cadastro paciente`
  MODIFY `IDPAC` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
