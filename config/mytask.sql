-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/06/2023 às 08:40
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mytask`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sprint`
--

CREATE TABLE `sprint` (
  `id_sprint` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `sprint`
--

INSERT INTO `sprint` (`id_sprint`, `id_user`, `titulo`) VALUES
(8, 5, 'Sprint 1'),
(10, 7, 'teste '),
(16, 5, 'Sprint 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `id_sprint` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `prioridade` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `task`
--

INSERT INTO `task` (`id_task`, `id_sprint`, `titulo`, `descricao`, `prioridade`, `tipo`, `data`) VALUES
(16, 8, 'ConfiguraÃ§Ã£o do Perfil', 'Implementar alteraÃ§Ã£o dos dados de usuÃ¡rio\n                ', 'Alta', 1, '2023-06-23'),
(17, 8, 'Implementar AlteraÃ§Ã£o de Senha', 'Criar e validar formulÃ¡rio de alteraÃ§Ã£o de senha\n\n                ', 'Alta', 1, '2023-06-23'),
(18, 8, 'Implementar Popup', 'Criar um popup para exibir mensagem de feedback para usuÃ¡rios\n\n                ', 'Normal', 1, '2023-06-23'),
(21, 8, 'Implementar AlteraÃ§Ã£o e VisualizaÃ§Ã£o de Task', 'Criar modal de visualizaÃ§Ã£o completa das tasks e botÃµes de alteraÃ§Ã£o e exclusÃ£o\n                ', 'Alta', 1, '2023-06-23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `perfil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `perfil`) VALUES
(5, 'Djherondhys', 'djherondhyoficial@gmail.com', 'ff298f9847697465b584a180630af380', ''),
(7, 'joao', 'joao@gmail.com', 'ff298f9847697465b584a180630af380', ''),
(9, 'Eduarda Santos', 'eduardaviana@gmail.com', 'ff298f9847697465b584a180630af380', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sprint`
--
ALTER TABLE `sprint`
  ADD PRIMARY KEY (`id_sprint`),
  ADD KEY `fk_user` (`id_user`);

--
-- Índices de tabela `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `fk_sprint` (`id_sprint`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sprint`
--
ALTER TABLE `sprint`
  MODIFY `id_sprint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `sprint`
--
ALTER TABLE `sprint`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `fk_sprint` FOREIGN KEY (`id_sprint`) REFERENCES `sprint` (`id_sprint`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
