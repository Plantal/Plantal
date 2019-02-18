-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Fev-2019 às 02:38
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `planta`
--

CREATE TABLE `planta` (
  `idPlanta` int(11) NOT NULL,
  `nomeCientifico` varchar(100) NOT NULL,
  `nomeComum` varchar(200) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `familia` varchar(100) NOT NULL,
  `ordem` varchar(100) NOT NULL,
  `fotosURL` varchar(3000) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `descricao` varchar(900) NOT NULL,
  `tipofolha` varchar(100) DEFAULT NULL,
  `utilizacao` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `email`) VALUES
(97, 'admin', 'admin', 'asas'),
(100, 'w', 'w', 'ricardochavarriaada@gmail.com'),
(101, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`idPlanta`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `planta`
--
ALTER TABLE `planta`
  MODIFY `idPlanta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
