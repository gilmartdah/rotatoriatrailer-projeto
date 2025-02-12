-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/02/2025 às 18:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trailler`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adminstradores`
--

CREATE TABLE `adminstradores` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adminstradores`
--

INSERT INTO `adminstradores` (`id`, `email`, `senha`) VALUES
(1, 'gilmar@gmail.com', '123'),
(2, 'jo@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantidade` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `item`, `quantidade`, `preco`, `email`) VALUES
(15, 'x-tudo', '5', '', 'gilmar@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nomecompleto` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `datacadastropresencial` datetime NOT NULL DEFAULT current_timestamp(),
  `datacadastroonline` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nomecompleto`, `telefone`, `email`, `senha`, `datacadastropresencial`, `datacadastroonline`) VALUES
(1, 'joão da silvia', '144997831343', NULL, NULL, '2025-02-10 11:21:43', NULL),
(2, 'Gilmar francisco dos santos fiho', '14997893125', NULL, NULL, '2025-02-10 11:22:30', NULL),
(3, 'claudete aparecida oller dos santos', '5154997893125', NULL, NULL, '2025-02-12 01:45:26', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `espeto`
--

CREATE TABLE `espeto` (
  `espetonome` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `espeto`
--

INSERT INTO `espeto` (`espetonome`, `descricao`, `preco`) VALUES
('carne', 'bem passado', '32'),
('Carne', 'Muito bom', '32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `finalizado`
--

CREATE TABLE `finalizado` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `pagamento` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `finalizado`
--

INSERT INTO `finalizado` (`id`, `item`, `preco`, `quantidade`, `pagamento`, `email`) VALUES
(1, 'frango', 120.00, 17, '', 'gilmar@gmail.com'),
(2, 'Queijo', 12.00, 4, '', 'gilmar@gmail.com'),
(4, 'fanta', 23.00, 13, '', 'gilmar@gmail.com'),
(5, 'c', 20.00, 1, '', 'jo@gmail.com'),
(6, 'carne', 32.00, 7, '', 'jo@gmail.com'),
(7, 'Studio', 0.00, 22, '', 'gilmar@gmail.com'),
(8, 'x-salda', 43.00, 345, '', 'gilmar@gmail.com'),
(9, 'coca cola', 4.00, 2, 'gilmar@gmail.com', 'Dinheiro a vista'),
(10, 'Studio', 0.00, 12, 'gilmar@gmail.com', 'Cartão de Debito');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lanches`
--

CREATE TABLE `lanches` (
  `id` int(11) NOT NULL,
  `nomelanche` varchar(25) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lanches`
--

INSERT INTO `lanches` (`id`, `nomelanche`, `preco`, `descricao`) VALUES
(1, 'Studio', 'NULL', 'gilmarfilho'),
(2, 'x-tudo', '', 'vem com salada, tomate ,queijo'),
(3, 'x-salda', '43', 'muito bom esse lanche');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pastel`
--

CREATE TABLE `pastel` (
  `id` int(11) NOT NULL,
  `nomepastel` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pastel`
--

INSERT INTO `pastel` (`id`, `nomepastel`, `descricao`, `preco`) VALUES
(1, 'Queijo', 'vem com queijo frango', 12),
(2, 'frango', 'embreve vai ter mais novidades', 120);

-- --------------------------------------------------------

--
-- Estrutura para tabela `refrigentante`
--

CREATE TABLE `refrigentante` (
  `nomerefri` varchar(255) NOT NULL,
  `tamanhorefri` varchar(255) NOT NULL,
  `sigla` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `refrigentante`
--

INSERT INTO `refrigentante` (`nomerefri`, `tamanhorefri`, `sigla`, `preco`) VALUES
('coca cola', '2', 'Litro', '4.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adminstradores`
--
ALTER TABLE `adminstradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `finalizado`
--
ALTER TABLE `finalizado`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lanches`
--
ALTER TABLE `lanches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pastel`
--
ALTER TABLE `pastel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adminstradores`
--
ALTER TABLE `adminstradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `finalizado`
--
ALTER TABLE `finalizado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `lanches`
--
ALTER TABLE `lanches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pastel`
--
ALTER TABLE `pastel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
