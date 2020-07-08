-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jul-2020 às 17:16
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` mediumtext NOT NULL,
  `brand` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `token` varchar(128) NOT NULL,
  `level` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`, `token`, `level`, `timestamp`) VALUES
(4, 'christianwork2010@gmail.com', '$2y$10$rrN/uV.E84aJ/ClRG9UZVOLnPaGz.Ela1OUOb5AfXH3EvFn1Kuw6q', 0, 'f3407704c25ced14a448962ab3829eb53bf01215', 0, 1594130379),
(5, 'christianwork2010@gmail.com', '$2y$10$Mz7XyQgiTcgq1hbCxwHI/OwMhwzdQN/JdGlyDiAD.lYprP41PBmBu', 0, 'ccf97cb65178001fc9bd9111cf3a81548e4c0044', 0, 1594131719),
(6, 'christianwork2010@gmail.com', '$2y$10$l/wzZYPNf8WbSUgF6/ZA3uLeXSsyb0E49eYSADzkFajdOxkuOI1Zm', 0, 'd0266955a6f7e5700491df063500a98c1059f09d', 0, 1594132034),
(7, 'christianwork2010@gmail.com', '$2y$10$NdaX96gQZ6fVKep6ZDjZXeneelvkiAuPz4/0NWMWYu0oEr3hpqVN6', 0, 'e1d3ff53f252236e2fefe2fcefba98115cd032c4', 0, 1594132055),
(8, 'christianwork2010@gmail.com', '$2y$10$22AEia5aSErgA3bby71/HuJr/t7zzkELQR4NX8/HnedzGX7fqt.Mm', 0, '3647c38d382cd36db5bab60b793559b6837bc02e', 0, 1594132078),
(9, 'christianwork2010@gmail.com', '$2y$10$j1Xgr3r5ovjKNLa.p6Xj7eJrSzHtKiq34w81qP.SeepkrbRWjHAaa', 0, '1e358e9705e3eb0b8cb97983432201a619ccc61a', 0, 1594133417);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
