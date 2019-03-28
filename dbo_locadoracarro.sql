-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Mar-2019 às 01:19
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbo_locadoracarro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carro`
--

CREATE TABLE `tb_carro` (
  `nr_chassi` char(17) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  `nm_modelo` varchar(50) NOT NULL,
  `ano_modelo` char(4) NOT NULL,
  `nr_portas` char(1) NOT NULL,
  `tp_combustivel` varchar(20) NOT NULL,
  `nm_cor` varchar(15) NOT NULL,
  `car_locado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `nr_cpf` char(11) NOT NULL,
  `nm_cliente` varchar(100) NOT NULL,
  `dtNasc_cli` date NOT NULL,
  `end_logradouro` varchar(150) NOT NULL,
  `end_bairro` varchar(50) NOT NULL,
  `end_cidade` varchar(60) NOT NULL,
  `end_uf` char(2) NOT NULL,
  `end_cep` char(8) NOT NULL,
  `nr_tel1` varchar(11) NOT NULL,
  `nr_tel2` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fabricante`
--

CREATE TABLE `tb_fabricante` (
  `id_fabricante` int(11) NOT NULL,
  `nm_fabricante` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `nm_funcionario` varchar(100) NOT NULL,
  `nr_cpf` char(11) NOT NULL,
  `login_func` varchar(20) NOT NULL,
  `pass_func` varchar(12) NOT NULL,
  `dtNasc_func` date NOT NULL,
  `end_logradouro` varchar(150) NOT NULL,
  `end_bairro` varchar(50) NOT NULL,
  `end_cidade` varchar(60) NOT NULL,
  `end_uf` char(2) NOT NULL,
  `end_cep` char(8) NOT NULL,
  `nr_tel1` varchar(11) NOT NULL,
  `nr_tel2` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_carro`
--
ALTER TABLE `tb_carro`
  ADD PRIMARY KEY (`nr_chassi`),
  ADD KEY `fk_carro_fabricante` (`id_fabricante`);

--
-- Indexes for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`nr_cpf`);

--
-- Indexes for table `tb_fabricante`
--
ALTER TABLE `tb_fabricante`
  ADD PRIMARY KEY (`id_fabricante`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`nr_cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fabricante`
--
ALTER TABLE `tb_fabricante`
  MODIFY `id_fabricante` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_carro`
--
ALTER TABLE `tb_carro`
  ADD CONSTRAINT `fk_carro_fabricante` FOREIGN KEY (`id_fabricante`) REFERENCES `tb_fabricante` (`id_fabricante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
