-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Fev-2019 às 18:22
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

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
  `descricao` varchar(900) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planta`
--

INSERT INTO `planta` (`idPlanta`, `nomeCientifico`, `nomeComum`, `especie`, `familia`, `ordem`, `fotosURL`, `qrcode`, `descricao`) VALUES
(283, 'Pinus nigra', 'Pinheiro-da-AustrÃ¡lia<br>Pinheiro-negro', 'Pinus nigra', 'Pinaceae', 'Pinales', '<img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/30722\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/30723\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/30724\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/30725\">', 'temp/Pinus_nigra.png', 'O pinheiro-larÃ­cio (Pinus nigra) Ã© uma espÃ©cie de pinheiro originÃ¡ria do Velho Mundo, mais precisamente da regiÃ£o da Europa e MediterrÃ¢neo, especificamente, da Espanha atÃ© a Turquia e nas montanhas do Atlas do noroeste da Ãfrica. Pode ser encontrado do nÃ­vel do mar atÃ© 2 000 m de altitude, mais comumente entre 250 e 1 600 m.\nÃ‰ uma grande Ã¡rvore, podendo possuir entre 20 a 55 metros de altura quando maturo, atingindo uma altura mÃ©dida de 17 metros aos 40 anos de idade. Suas sementes maturas possuem 5â€“10 cm de comprimento. Suas sementes sÃ£o dispersas em outubro e novembro. Cresce com velocidade moderada, entre 30â€“70 cm o ano, e possui no geral um formato cÃ´nico, tornando-se cada vez mais irregular com o tempo. Possui um longo tempo de vida, podendo viver mais de 500 anos. NÃ£o tolera sombras, necessitando de Sol forte para crescer bem, mas Ã© resistente contra neve e bai'),
(282, 'Pinus pinea', 'Pinheiro-manso', 'Pinus pinea', 'Pinaceae', 'Pinales', '<img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/30741\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/30737\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/30738\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/30739\">', 'temp/Pinus_pinea.png', 'O pinheiro-manso (Pinus pinea) Ã© uma espÃ©cie de pinheiro originÃ¡ria do Velho Mundo, mais precisamente da regiÃ£o do MediterrÃ¢neo. Desde a prÃ©-histÃ³ria, esta Ã¡rvore Ã© aproveitada como fonte de alimento, devido aos pinhÃµes que produz, sendo uma espÃ©cie bastante disseminada.\nO pinheiro-manso pode exceder os 30 metros de altura, embora normalmente seja de menor dimensÃ£o - entre 12 e 20 metros. Possui uma forma de sombrinha bastante caracterÃ­stica, com o tronco curto e largo, culminando numa copa bastante plana.'),
(280, 'Quercus coccifera', 'Carrasco<br>Carrasco-Galego<br>Carrasqueiro<br>Carrasquinha<br>Carvalho-dos-quermes<br>Verdadeiro-carrasco', 'Quercus coccifera', 'Fagaceae', 'Fagales', '<img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/11057\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/28976\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/28977\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/28978\">', 'temp/Quercus_coccifera.png', 'Quercus coccifera L., conhecido pelos nomes comuns de quermes ou carrasco, Ã© um arbusto de folha persistente e verde o ano inteiro. Atinge, no mÃ¡ximo, 2 metros de altura, ainda que, muitas vezes, possam se transformar em uma pequena Ã¡rvore de 4 ou 5 metros. Pode se ramificar abundantemente desde a base, de forma que as ramas, de sÃºber liso, se entrelaÃ§am freqÃ¼entemente, tornando-o impenetrÃ¡vel.\nAs flores masculinas sÃ£o muito pequenas, pouco aparentes, com um envoltÃ³rio acopado dividida em 4, 5 ou 6 gomos e um nÃºmero variÃ¡vel de androceus (4 a 10); agrupam-se em espigas curtas, de cor amarelada, delgadas, que se penduram em grupos. As femininas nascem na mesma planta, solitÃ¡rias ou agrupadas com duas ou trÃªs. O fruto Ã© uma bolota, de sÃ³ uma semente, separÃ¡vel em duas metades (cotiledÃ´neas) longitudinalmente.'),
(281, 'Pinus pinaster', 'Pinheiro-bravo<br>Pinheiro-das-landes<br>Pinheiro-marÃ­timo', 'Pinus pinaster', 'Pinaceae', 'Pinales', '<img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/16155\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/16151\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/16152\"><img style=\"width:100px\" src=\"http://jb.utad.pt/imagem/16153\">', 'temp/Pinus_pinaster.png', 'O pinheiro-bravo (Pinus pinaster) Ã© uma espÃ©cie de pinheiro originÃ¡ria do Velho Mundo, mais precisamente da regiÃ£o da Europa e MediterrÃ¢neo.');

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
(59, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com');

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
  MODIFY `idPlanta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
