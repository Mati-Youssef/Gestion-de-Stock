-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 08:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `catégorie`
--

CREATE TABLE `catégorie` (
  `nom_catégorie` text NOT NULL,
  `id_catégorie` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(40) NOT NULL,
  `nom_prenom` varchar(60) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `N_télé` int(40) NOT NULL,
  `N_fix` int(40) NOT NULL,
  `nom_de_magazine` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nom_prenom`, `cin`, `N_télé`, `N_fix`, `nom_de_magazine`) VALUES
(1, 'khalid fifel', 'PA248450', 649459004, 2147483647, 'ward dades');

-- --------------------------------------------------------

--
-- Table structure for table `dépenses`
--

CREATE TABLE `dépenses` (
  `année` int(10) NOT NULL,
  `mois` varchar(20) NOT NULL,
  `id_produit` int(40) NOT NULL,
  `quantité` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entrer`
--

CREATE TABLE `entrer` (
  `id_de_preduit` int(40) NOT NULL,
  `id_de_categourie` varchar(40) NOT NULL,
  `nom_de_preduit` varchar(40) NOT NULL,
  `date_d_entrer` date NOT NULL,
  `date_d_experation` date NOT NULL,
  `quantité` int(40) NOT NULL,
  `prix` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entrer`
--

INSERT INTO `entrer` (`id_de_preduit`, `id_de_categourie`, `nom_de_preduit`, `date_d_entrer`, `date_d_experation`, `quantité`, `prix`) VALUES
(1, '761', 'zit argan', '2021-05-03', '2021-05-11', 1, 16.6);

-- --------------------------------------------------------

--
-- Table structure for table `reteur`
--

CREATE TABLE `reteur` (
  `date_reteur` date NOT NULL,
  `id_client` int(40) NOT NULL,
  `id_produit` int(40) NOT NULL,
  `quantité` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reteur`
--

INSERT INTO `reteur` (`date_reteur`, `id_client`, `id_produit`, `quantité`) VALUES
('2021-05-07', 42, 33, 444);

-- --------------------------------------------------------

--
-- Table structure for table `sortie`
--

CREATE TABLE `sortie` (
  `id_de_sortie` int(40) NOT NULL,
  `id_de_preduit` int(40) NOT NULL,
  `id_de_user` int(40) NOT NULL,
  `id_de_client` int(40) NOT NULL,
  `Prix_de_sortie` double NOT NULL,
  `quantité` int(40) NOT NULL,
  `date_de_sortie` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sortie`
--

INSERT INTO `sortie` (`id_de_sortie`, `id_de_preduit`, `id_de_user`, `id_de_client`, `Prix_de_sortie`, `quantité`, `date_de_sortie`) VALUES
(758198832, 808269104, 842145844, 976827450, 1.3117222901173784e26, 1380930130, '=968-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(40) NOT NULL,
  `nom_prenom` varchar(50) NOT NULL,
  `cin` varchar(40) NOT NULL,
  `N_télé` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `passwd` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom_prenom`, `cin`, `N_télé`, `email`, `passwd`) VALUES
(1, 'khalid fifel', 'PA248450', 649459004, 'admin@admin.com', ',kkkj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catégorie`
--
ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`id_catégorie`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `entrer`
--
ALTER TABLE `entrer`
  ADD PRIMARY KEY (`id_de_preduit`);

--
-- Indexes for table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`id_de_sortie`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catégorie`
--
ALTER TABLE `catégorie`
  MODIFY `id_catégorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entrer`
--
ALTER TABLE `entrer`
  MODIFY `id_de_preduit` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sortie`
--
ALTER TABLE `sortie`
  MODIFY `id_de_sortie` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
