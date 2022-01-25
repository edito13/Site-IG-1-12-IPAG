-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2021 às 12:29
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site-ig`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `codigo_comentario` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `data_comentario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`codigo_comentario`, `codigo_usuario`, `nome_usuario`, `comentario`, `data_comentario`) VALUES
(1, 4, 'Emanuel Tavares', 'AtÃ© que funcionou, como nÃ£o poderia?ðŸ™„ðŸ¤ðŸ½', '2021-07-02 09:13:21'),
(13, 4, 'Emanuel Tavares', 'SÃ£o 20 horas agoraðŸŒ™', '2021-07-08 20:39:30'),
(14, 1, 'Editoh Donatello', 'Esse Ã© o meu novo comentÃ¡rio, ativa aÃ­ mormÃ£oðŸ¥ºðŸ‘ðŸ½', '2021-07-10 11:06:21'),
(16, 6, 'Xavier Frederico', 'O meu primeiro comentÃ¡rio no site, que legalðŸ˜ðŸ’ªðŸ½', '2021-07-10 11:23:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(34) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` int(9) NOT NULL,
  `data_nascimento` date NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo_usuario`, `nome`, `email`, `senha`, `sexo`, `telefone`, `data_nascimento`, `data_cadastro`) VALUES
(1, 'Editoh Donatello', 'editoh13@gmail.com', '2bea181696876452fd474188daf45385', 'Masculino', 923478388, '2003-03-06', '2021-06-27 16:35:14'),
(2, 'Paulo Fredy', 'paulo@gmail.com', 'b89845d7eb5f8388e090fcc151d618c8', 'Masculino', 935555500, '2021-06-03', '2021-06-27 17:01:13'),
(3, 'Bernardo Matias', 'matias17@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Masculino', 931421512, '2021-06-15', '2021-06-28 12:54:54'),
(4, 'Emanuel Tavares', 'emanuel@gmail.com', 'ea3e01f69a265290a90e44ea440a2b0c', 'Masculino', 935555500, '2021-05-22', '2021-07-02 09:05:33'),
(5, 'Agostinho Ndovala', 'jani@gmail.com', 'd5d51a2d88cda585e37315067891381f', 'Masculino', 935555500, '2020-12-29', '2021-07-02 15:31:41'),
(6, 'Xavier Frederico', 'xavier@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Masculino', 999999999, '2021-07-21', '2021-07-10 11:21:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`codigo_comentario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `codigo_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
