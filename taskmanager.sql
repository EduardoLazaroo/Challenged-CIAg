-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Maio-2022 às 18:34
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `taskmanager`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `datatempo` datetime DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `task`
--

INSERT INTO `task` (`id_task`, `titulo`, `datatempo`, `descricao`) VALUES
(7, 'Sprint 01 - Victor Borba - React Native', '2022-05-02 23:00:00', 'Dia 02/05 entregar as atividades da Sprint - cronograma do professor Victor Borba.\r\nO que deve ser entregue: CADASTRO DE USUÁRIO, CADASTRO DE CONTEÚDO E PERFIL DE USUÁRIO'),
(8, 'Desafio - TaskManager', '2022-05-05 23:59:00', 'Devo entregar um Sistema de Tarefas Diárias (em PHP) para completar meu desafio, o sistema deve contar algumas funcionalidades como: Cadastro de tarefa, edição de tarefa, exclusão de tarefa.\r\nCada tarefa deve possuir Título, data/hora e descrição. '),
(9, 'Admissão - Eduardo Lázaro', '2022-05-06 12:00:00', 'Realizar a contratação de um novo membro para empresa Ciag, realizar a triagem e realocá-lo no grupo de estágio.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`) VALUES
(4, 'teste', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
