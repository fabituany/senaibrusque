-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sistemasenai`
--
CREATE DATABASE `sistemasenai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sistemasenai`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(60) NOT NULL,
  `cod` varchar(40) NOT NULL,
  `situacao` tinyint(4) NOT NULL DEFAULT '0',
  `dtCadastro` datetime NOT NULL,
  `dtAtualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `newsletter`
--

INSERT INTO `newsletter` (`email`, `cod`, `situacao`, `dtCadastro`, `dtAtualizacao`) VALUES
('fabi.tuany@gmail.com', '55d74572a86c514ca798a8a991de0eeac4aac058', 1, '2015-11-26 21:25:29', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
