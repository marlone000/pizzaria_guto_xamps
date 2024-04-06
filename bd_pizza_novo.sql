-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/04/2024 às 01:58
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
-- Banco de dados: `bd_pizza`
--
CREATE DATABASE IF NOT EXISTS `bd_pizza_novo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_pizza_novo`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pizzas_novo`
--

CREATE TABLE `pizzas_novo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ingredientes` varchar(1000) NOT NULL,
  `foto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pizzas_novo`
--

INSERT INTO `pizzas_novo` (`id`, `nome`, `ingredientes`, `foto`) VALUES
(1, 'Pizza de Pepperoni', 'Molho de tomate, queijo mozzarella, pepperoni', 'https://swiftbr.vteximg.com.br/arquivos/ids/174178-768-768/pizza-artesanal-pepperoni-swift-420g-618296-1.jpg?v=637545446944870000'),
(2, 'Pizza Margherita', 'Molho de tomate, queijo mozzarella, manjeric?o', 'https://www.comidaereceitas.com.br/wp-content/uploads/2024/02/pizza-marguerita-com-mozzarella-de-bufala.jpg'),
(3, 'Pizza Quatro Queijos', 'Molho de tomate, queijo mozzarella, parmes?o, gorgonzola, provolone', 'https://cdnv2.moovin.com.br/bancadoholandes/imagens/produtos/det/cd8acd2b842ee36d2ce757416c6b910f4c7d3b3f.png'),
(4, 'Pizza de Calabresa', 'Molho de tomate, queijo mozzarella, calabresa fatiada', 'https://www.sabornamesa.com.br/media/k2/items/cache/513d7a0ab11e38f7bd117d760146fed3_XL.jpg'),
(5, 'Pizza de Frango com Catupiry', 'Molho de tomate, queijo mozzarella, frango desfiado, catupiry', 'https://receitas123.com/wp-content/uploads/2023/05/pizza-de-frango-com-catupiry.png'),
(6, 'Pizza Portuguesa', 'Molho de tomate, queijo mozzarella, presunto, cebola, ovo, azeitona, piment?o', 'https://receitasimplesefacil.com.br/wp-content/uploads/2021/09/Pizza-Portuguesa-scaled.jpg'),
(7, 'Pizza Vegetariana', 'Molho de tomate, queijo mozzarella, tomate, cebola, piment?o, champignon, azeitona', 'https://www.receiteria.com.br/wp-content/uploads/receitas-de-pizza-vegetariana-00.jpeg'),
(8, 'Pizza de Calabresa com Catupiry', 'Molho de tomate, queijo mozzarella, calabresa fatiada, catupiry', 'https://cdn.awsli.com.br/300x300/49/49233/produto/1713802/c4155b5224.jpg'),
(9, 'Pizza de Atum', 'Molho de tomate, queijo mozzarella, atum em peda?os, cebola, azeitona', 'https://www.redelevepizza.com.br/assets/imagens/pizzas/008/atum.jpg'),
(10, 'Pizza de Camar?o', 'Molho de tomate, queijo mozzarella, camar?o, catupiry, cebola, piment?o', 'https://claudia.abril.com.br/wp-content/uploads/2020/02/receita-pizza-de-camarao.jpg'),
(13, 'Pizza Baiana', 'Pimenta, muita pimenta', 'https://www.receiteria.com.br/wp-content/uploads/receitas-de-pizza-baiana-0.jpg'),
(14, 'Pizza Aliche', 'Aliche e mussarela', 'https://www.comidaereceitas.com.br/wp-content/uploads/2008/03/Pizza-de-aliche-e-mussarela-freepik.jpg'),
(19, 'Pizza Sensação', 'morango e chocolate', 'https://media-cdn.tripadvisor.com/media/photo-s/0e/1f/02/c9/pizza-sensacao.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pizzas_novo`
--
ALTER TABLE `pizzas_novo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pizzas_novo`
--
ALTER TABLE `pizzas_novo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
