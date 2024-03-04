-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2024 at 09:23 AM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestcompras`
--

-- --------------------------------------------------------

--
-- Table structure for table `Artigos`
--

CREATE TABLE `Artigos` (
  `CodigoArtigo` int NOT NULL,
  `Nome` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CodigoFamilia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Artigos`
--

INSERT INTO `Artigos` (`CodigoArtigo`, `Nome`, `CodigoFamilia`) VALUES
(1, 'Computador', 1),
(2, 'Carcaça', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Familias`
--

CREATE TABLE `Familias` (
  `CodigoFamilia` int NOT NULL,
  `Nome` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Familias`
--

INSERT INTO `Familias` (`CodigoFamilia`, `Nome`) VALUES
(1, 'Informática'),
(2, 'Padaria\r'),
(3, 'Legumes\r'),
(4, 'Papelaria\r');

-- --------------------------------------------------------

--
-- Table structure for table `Fatura`
--

CREATE TABLE `Fatura` (
  `Numero` int NOT NULL,
  `Data` date NOT NULL,
  `NIF` int NOT NULL,
  `CodigoProcedimento` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Fatura`
--

INSERT INTO `Fatura` (`Numero`, `Data`, `NIF`, `CodigoProcedimento`) VALUES
(1, '2024-01-30', 504654748, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Fornecedores`
--

CREATE TABLE `Fornecedores` (
  `NIF` int NOT NULL,
  `Nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Morada` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `NumerodeTelefone` int DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Fornecedores`
--

INSERT INTO `Fornecedores` (`NIF`, `Nome`, `Morada`, `NumerodeTelefone`, `Email`) VALUES
(504654748, 'Beltrão Coelho - Sistemas de Escritório, Lda', '<span style=\'color: rgb(66, 76, 93); font-family: Inter, sans-serif; font-size: 13.02px;\'>Rua Sarmento Beires, N.º 3, Letra A 1900-410 Lisboa</span>', 99999999, 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `ListaArtigosFac`
--

CREATE TABLE `ListaArtigosFac` (
  `CodigodaListadeArtigos` int NOT NULL,
  `CodigoArtigo` int NOT NULL,
  `Quantidade` float NOT NULL,
  `Preco` float NOT NULL,
  `Numero` int NOT NULL,
  `TaxadeIva` float NOT NULL,
  `CodFatura` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Procedimento`
--

CREATE TABLE `Procedimento` (
  `Codigoprocedimento` int NOT NULL,
  `Nome` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TipoProcedimento` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `TipoContrato` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `CPV` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ValorTotal` double NOT NULL,
  `NIF` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Ano` varchar(4) NOT NULL,
  `Link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Procedimento`
--

INSERT INTO `Procedimento` (`Codigoprocedimento`, `Nome`, `TipoProcedimento`, `TipoContrato`, `CPV`, `ValorTotal`, `NIF`, `Data`, `Ano`, `Link`) VALUES
(1, 'Aquisição de Material Informático', NULL, NULL, NULL, 100, NULL, NULL, '2024', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Artigos`
--
ALTER TABLE `Artigos`
  ADD PRIMARY KEY (`CodigoArtigo`);

--
-- Indexes for table `Familias`
--
ALTER TABLE `Familias`
  ADD PRIMARY KEY (`CodigoFamilia`);

--
-- Indexes for table `Fatura`
--
ALTER TABLE `Fatura`
  ADD PRIMARY KEY (`Numero`);

--
-- Indexes for table `Fornecedores`
--
ALTER TABLE `Fornecedores`
  ADD PRIMARY KEY (`NIF`);

--
-- Indexes for table `ListaArtigosFac`
--
ALTER TABLE `ListaArtigosFac`
  ADD PRIMARY KEY (`CodigodaListadeArtigos`);

--
-- Indexes for table `Procedimento`
--
ALTER TABLE `Procedimento`
  ADD PRIMARY KEY (`Codigoprocedimento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Artigos`
--
ALTER TABLE `Artigos`
  MODIFY `CodigoArtigo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Familias`
--
ALTER TABLE `Familias`
  MODIFY `CodigoFamilia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Fatura`
--
ALTER TABLE `Fatura`
  MODIFY `Numero` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ListaArtigosFac`
--
ALTER TABLE `ListaArtigosFac`
  MODIFY `CodigodaListadeArtigos` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Procedimento`
--
ALTER TABLE `Procedimento`
  MODIFY `Codigoprocedimento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
