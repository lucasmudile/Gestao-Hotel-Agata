-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Ago-2022 às 23:42
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_hagata`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `telefone` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `senha` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `telefone`, `senha`, `status`) VALUES
(3, 'Severino Victorino', 'je@gmail.com', '93932329', '123', 1),
(4, 'Josemar Miranda', 'jose@gmail.com', '9823238', '123', 1),
(5, 'Bernado de Matos', 'bernado@gmail.com', '9382893', '123', 1),
(12, 'Amadeu Manuel', 'amadeu@gmail.com', '9389291219', '123', 0),
(14, 'Kudikeba Miguel', 'kudikeba@gmail.com', '93283828', '123', 1),
(15, 'Helton Evambi', 'helton@gmail.com', '923939', '123', 0),
(16, 'Liliano', 'machadolilianno@gmail,com', '942197080', '12lilianno34', 1),
(17, 'Alexandre Francisco', 'alexandre@gmail.com', '925333297', '12345', 0),
(18, 'Elvânio Francisco', 'elvanio123@gmail,com', '940832311', '    ', 1),
(19, 'Lucas Santana', 'lu@gmail.com', '92389328', '123', 1),
(20, 'Josemar Miranda', 'josemar@gamil.com', '938992321', '123', 1),
(21, 'josemar', 'josemarmiranda@gmail.com', '932992790', '345', 1),
(22, 'Alexandre Francisco', 'gungas2000@gmail.com', '925333297', '123', 1),
(23, 'Alexandre', 'ale@gmail.com', '99944388', '123', 1),
(24, 'Ana', 'ana@gmail.com', '34556', '123', 1),
(25, 'beat', 'bet@gmail.com', '33566', '123', 1),
(26, 'josy', 'jay@gmail.com', '3466', '123', 1),
(27, 'Engenharia', 'ang@gmail.com', '22345', '123', 1),
(28, 'ale', 'ale@gmail.com', '467563', '123', 1),
(29, 'alexandre', 'ale@gmail.com', '22335', '123', 1),
(30, 'Gerson', 'gerson@gmail.com', '4523632', '123', 1),
(31, 'Gerson', 'gerson@gmail.com', '3354745', '123', 1),
(32, 'Amadeu', 'amadeu-evaristo@hotmail.com', '937529731', '123', 0),
(33, 'amade', 'amde@etttfhotmail.com', '99998776', '123', 1),
(34, 'Liliano machado', 'machadolilianno@gmail.com', '942197080', '123', 1),
(35, 'Lucas Santana', 'lucas@gmail.com', '93899231', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma_pagamento`
--

CREATE TABLE `forma_pagamento` (
  `idforma_pagamento` int(11) NOT NULL,
  `forma_pagamento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forma_pagamento`
--

INSERT INTO `forma_pagamento` (`idforma_pagamento`, `forma_pagamento`) VALUES
(1, 'DINHEIRO EM MÃO'),
(2, 'MULTICAIXA'),
(3, 'CARTÃO VISA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `bi` varchar(45) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `morada` varchar(45) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id_permicao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome`, `bi`, `data_nascimento`, `morada`, `telefone`, `email`, `senha`, `status`, `id_permicao`) VALUES
(1, 'Lucas Santana', '123', '2000-07-22', 'Rocha', '938992431', 'lucasmudile@gmail.com', '123', 0, 1),
(2, 'Josy', '9383', '2000-05-26', 'Prenda', '9382832', 'jeo@gmail.com', '321', 0, 2),
(4, 'Lukeny Santana', '123', '2022-03-23', 'Prenda', '93899121', 'lu@gmail.com', '123', 1, 1),
(5, 'Helton Evambi', '123', '2022-03-03', 'predn', '92383', 'fre@gmail.com', '321', 1, 2),
(6, 'Seven', '543', '2022-03-10', 'Rocha', '9328812', 'seven@gmail.com', '321', 1, 2),
(8, 'Jay Mula', '123', '2000-05-26', 'Prenda', '122', 'jay@gmail.com', '123', 1, 2),
(10, 'Jay Mula Lurio', NULL, '2022-03-03', 'Prenda', '123', 'lu@gmail.com', NULL, 1, NULL),
(11, 'ssss', NULL, '2022-03-03', 'Prenda', '123', 'lu@gmail.com', NULL, 1, NULL),
(12, 'ssss', NULL, '2022-03-03', 'Prenda', '123', 'lu@gmail.com', NULL, 1, NULL),
(13, 'Jay Mula', NULL, '2000-05-26', 'Prenda', '122', 'jay@gmail.com', NULL, 1, NULL),
(14, 'Jay Mula', NULL, '2000-05-26', 'Prenda', '122', 'jay@gmail.com', NULL, 1, NULL),
(15, 'Jay Mula', NULL, '2000-05-26', 'Prenda', '122', 'jay@gmail.com', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permicao`
--

CREATE TABLE `permicao` (
  `idpermicao` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `permicao`
--

INSERT INTO `permicao` (`idpermicao`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Operador de Caixa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

CREATE TABLE `quarto` (
  `idquarto` int(11) NOT NULL,
  `num_quarto` int(11) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `preco` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quarto`
--

INSERT INTO `quarto` (`idquarto`, `num_quarto`, `descricao`, `preco`) VALUES
(1, 1, 'Casal', '1500'),
(2, 2, 'Quarto pra 10', '2000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `idreserva` int(11) NOT NULL,
  `data_chegada` date DEFAULT NULL,
  `data_partida` date DEFAULT NULL,
  `data_reserva` date DEFAULT NULL,
  `n_adulta` int(11) DEFAULT NULL,
  `n_crianca` int(11) DEFAULT NULL,
  `id_forma_pagamento` int(11) DEFAULT NULL,
  `valor_pago` decimal(10,0) DEFAULT NULL,
  `data_pagamento` datetime DEFAULT NULL,
  `desejo` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `id_quarto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `statu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`idreserva`, `data_chegada`, `data_partida`, `data_reserva`, `n_adulta`, `n_crianca`, `id_forma_pagamento`, `valor_pago`, `data_pagamento`, `desejo`, `obs`, `id_quarto`, `id_cliente`, `id_funcionario`, `statu`) VALUES
(1, '2022-03-03', '2022-03-02', '2022-03-02', 1, 2, 1, NULL, NULL, 'xxxzx', 'VIcroeino', 1, 3, NULL, 1),
(5, '2022-03-04', '2022-03-04', '2022-03-02', 1, 1, 2, NULL, NULL, 'Tomás', 'wewww', 2, 3, 8, 2),
(6, '2022-03-03', '2022-03-03', '2022-03-03', 1, 1, 1, '40000', '2022-03-28 08:28:30', 'Bem-vindo', NULL, 1, 3, 8, 4),
(7, '2022-03-03', '2022-03-04', '2022-03-03', 2, 1, NULL, NULL, NULL, 'Quem', NULL, 2, 4, NULL, 3),
(8, '2022-03-09', '2022-03-11', '2022-03-08', 1, 1, 1, '123', '2022-03-29 08:00:20', 'Quero as melhores condições.', '', 1, 5, 8, 1),
(9, '2022-03-12', '2022-03-12', '2022-03-12', 2, 0, 1, '123', '2022-03-23 21:38:29', 'Quero um serviço de qualidade', 'Não aceitamos a vossa reserva no nosso hotel por motivo X', 2, 12, 8, 2),
(10, '2022-03-24', '2022-03-17', '2022-03-18', 12, 0, 1, '100', '2022-05-07 06:05:18', 'Quero o melhor quarto do vosso hotel', 'Aceite', 1, 15, 8, 4),
(11, '2022-12-12', '2022-12-27', '2022-03-22', 2, 3, NULL, NULL, NULL, '', NULL, 3, 4, NULL, 0),
(12, '2022-05-06', '2022-05-06', '2022-05-06', 2, 1, NULL, NULL, NULL, 'Preciso de um atendimento de qualidade', NULL, 2, 19, NULL, 0),
(13, '2022-03-23', '2022-05-13', '2022-05-06', 2, 1, NULL, NULL, NULL, '', NULL, 2, 21, NULL, 0),
(14, '2022-05-06', '2022-05-09', '2022-05-06', 3, 0, NULL, NULL, NULL, '', NULL, 3, 22, NULL, 0),
(15, '2022-05-02', '2022-05-12', '2022-05-06', 2, 1, NULL, NULL, NULL, '', NULL, 2, 21, NULL, 0),
(16, '2022-05-10', '2022-05-25', '2022-05-06', 4, 0, NULL, NULL, NULL, '', NULL, 4, 22, NULL, 0),
(17, '2022-05-09', '2022-05-19', '2022-05-07', 3, 0, NULL, NULL, NULL, '', NULL, 3, 23, NULL, 0),
(18, '2022-05-05', '2022-05-18', '2022-05-07', 2, 0, NULL, NULL, NULL, '', NULL, 2, 26, NULL, 0),
(19, '2022-05-10', '2022-05-18', '2022-05-07', 2, 1, NULL, NULL, NULL, '', NULL, 2, 27, NULL, 0),
(20, '2022-05-03', '2022-05-19', '2022-05-07', 4, 1, NULL, NULL, NULL, '', NULL, 3, 23, NULL, 0),
(21, '2022-05-10', '2022-05-17', '2022-05-07', 4, 0, NULL, NULL, NULL, '', NULL, 3, 23, NULL, 0),
(22, '2022-05-10', '2022-05-11', '2022-05-07', 2, 3, NULL, NULL, NULL, '', NULL, 4, 30, NULL, 0),
(23, '2022-05-07', '2022-05-16', '2022-05-07', 2, 2, NULL, NULL, NULL, '', NULL, 2, 34, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `testemunho`
--

CREATE TABLE `testemunho` (
  `idtestemunho` int(11) NOT NULL,
  `testemunho` varchar(225) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `testemunho`
--

INSERT INTO `testemunho` (`idtestemunho`, `testemunho`, `id_cliente`) VALUES
(1, 'Um hotel espetacular', 1),
(2, 'Hotel com um atendimento Ordinário', 1),
(4, 'Um Hotel de primeira classe e espetacular', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_reserva`
--

CREATE TABLE `tipo_reserva` (
  `idtipo_reserva` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_funcionario`
-- (See below for the actual view)
--
CREATE TABLE `view_funcionario` (
`idfuncionario` int(11)
,`nome` varchar(45)
,`bi` varchar(45)
,`data_nascimento` date
,`morada` varchar(45)
,`telefone` varchar(20)
,`email` varchar(45)
,`senha` varchar(45)
,`status` int(11)
,`id_permicao` int(11)
,`permicao` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_reserva_efectuadas`
-- (See below for the actual view)
--
CREATE TABLE `view_reserva_efectuadas` (
`idreserva` int(11)
,`data_chegada` date
,`data_partida` date
,`data_reserva` date
,`n_adulta` int(11)
,`n_crianca` int(11)
,`id_forma_pagamento` int(11)
,`valor_pago` decimal(10,0)
,`data_pagamento` datetime
,`desejo` varchar(255)
,`obs` varchar(255)
,`id_quarto` int(11)
,`id_cliente` int(11)
,`id_funcionario` int(11)
,`statu` int(11)
,`idcliente` int(11)
,`nome` varchar(45)
,`email` varchar(45)
,`telefone` varchar(45)
,`senha` varchar(45)
,`idquarto` int(11)
,`num_quarto` int(11)
,`descricao` varchar(100)
,`preco` decimal(10,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_reserva_eliminada`
-- (See below for the actual view)
--
CREATE TABLE `view_reserva_eliminada` (
`idreserva` int(11)
,`data_chegada` date
,`data_partida` date
,`data_reserva` date
,`n_adulta` int(11)
,`n_crianca` int(11)
,`id_forma_pagamento` int(11)
,`valor_pago` decimal(10,0)
,`data_pagamento` datetime
,`desejo` varchar(255)
,`obs` varchar(255)
,`id_quarto` int(11)
,`id_cliente` int(11)
,`id_funcionario` int(11)
,`statu` int(11)
,`idcliente` int(11)
,`nome` varchar(45)
,`email` varchar(45)
,`telefone` varchar(45)
,`senha` varchar(45)
,`status` int(11)
,`idquarto` int(11)
,`num_quarto` int(11)
,`descricao` varchar(100)
,`preco` decimal(10,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_reserva_finalizada`
-- (See below for the actual view)
--
CREATE TABLE `view_reserva_finalizada` (
`idreserva` int(11)
,`data_chegada` date
,`data_partida` date
,`data_reserva` date
,`n_adulta` int(11)
,`n_crianca` int(11)
,`id_forma_pagamento` int(11)
,`valor_pago` decimal(10,0)
,`data_pagamento` datetime
,`desejo` varchar(255)
,`obs` varchar(255)
,`id_quarto` int(11)
,`id_cliente` int(11)
,`id_funcionario` int(11)
,`statu` int(11)
,`idcliente` int(11)
,`nome` varchar(45)
,`email` varchar(45)
,`telefone` varchar(45)
,`senha` varchar(45)
,`status` int(11)
,`idquarto` int(11)
,`num_quarto` int(11)
,`descricao` varchar(100)
,`preco` decimal(10,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_reserva_processada`
-- (See below for the actual view)
--
CREATE TABLE `view_reserva_processada` (
`idreserva` int(11)
,`data_chegada` date
,`data_partida` date
,`data_reserva` date
,`n_adulta` int(11)
,`n_crianca` int(11)
,`id_forma_pagamento` int(11)
,`valor_pago` decimal(10,0)
,`data_pagamento` datetime
,`desejo` varchar(255)
,`obs` varchar(255)
,`id_quarto` int(11)
,`id_cliente` int(11)
,`id_funcionario` int(11)
,`statu` int(11)
,`idcliente` int(11)
,`nome` varchar(45)
,`email` varchar(45)
,`telefone` varchar(45)
,`senha` varchar(45)
,`status` int(11)
,`idquarto` int(11)
,`num_quarto` int(11)
,`descricao` varchar(100)
,`preco` decimal(10,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_reserva_rejeitadas`
-- (See below for the actual view)
--
CREATE TABLE `view_reserva_rejeitadas` (
`idreserva` int(11)
,`data_chegada` date
,`data_partida` date
,`data_reserva` date
,`n_adulta` int(11)
,`n_crianca` int(11)
,`id_forma_pagamento` int(11)
,`valor_pago` decimal(10,0)
,`data_pagamento` datetime
,`desejo` varchar(255)
,`obs` varchar(255)
,`id_quarto` int(11)
,`id_cliente` int(11)
,`id_funcionario` int(11)
,`statu` int(11)
,`idcliente` int(11)
,`nome` varchar(45)
,`email` varchar(45)
,`telefone` varchar(45)
,`senha` varchar(45)
,`status` int(11)
,`idquarto` int(11)
,`num_quarto` int(11)
,`descricao` varchar(100)
,`preco` decimal(10,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_testemunho`
-- (See below for the actual view)
--
CREATE TABLE `view_testemunho` (
`idtestemunho` int(11)
,`testemunho` varchar(225)
,`id_cliente` int(11)
,`cliente` varchar(45)
);

-- --------------------------------------------------------

--
-- Structure for view `view_funcionario`
--
DROP TABLE IF EXISTS `view_funcionario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_funcionario`  AS  select `f`.`idfuncionario` AS `idfuncionario`,`f`.`nome` AS `nome`,`f`.`bi` AS `bi`,`f`.`data_nascimento` AS `data_nascimento`,`f`.`morada` AS `morada`,`f`.`telefone` AS `telefone`,`f`.`email` AS `email`,`f`.`senha` AS `senha`,`f`.`status` AS `status`,`f`.`id_permicao` AS `id_permicao`,`p`.`descricao` AS `permicao` from (`funcionario` `f` join `permicao` `p` on((`p`.`idpermicao` = `f`.`id_permicao`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_reserva_efectuadas`
--
DROP TABLE IF EXISTS `view_reserva_efectuadas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reserva_efectuadas`  AS  select `rv`.`idreserva` AS `idreserva`,`rv`.`data_chegada` AS `data_chegada`,`rv`.`data_partida` AS `data_partida`,`rv`.`data_reserva` AS `data_reserva`,`rv`.`n_adulta` AS `n_adulta`,`rv`.`n_crianca` AS `n_crianca`,`rv`.`id_forma_pagamento` AS `id_forma_pagamento`,`rv`.`valor_pago` AS `valor_pago`,`rv`.`data_pagamento` AS `data_pagamento`,`rv`.`desejo` AS `desejo`,`rv`.`obs` AS `obs`,`rv`.`id_quarto` AS `id_quarto`,`rv`.`id_cliente` AS `id_cliente`,`rv`.`id_funcionario` AS `id_funcionario`,`rv`.`statu` AS `statu`,`cl`.`idcliente` AS `idcliente`,`cl`.`nome` AS `nome`,`cl`.`email` AS `email`,`cl`.`telefone` AS `telefone`,`cl`.`senha` AS `senha`,`qt`.`idquarto` AS `idquarto`,`qt`.`num_quarto` AS `num_quarto`,`qt`.`descricao` AS `descricao`,`qt`.`preco` AS `preco` from ((`reserva` `rv` join `cliente` `cl` on((`rv`.`id_cliente` = `cl`.`idcliente`))) join `quarto` `qt` on((`rv`.`id_quarto` = `qt`.`idquarto`))) where (`rv`.`statu` = '0') ;

-- --------------------------------------------------------

--
-- Structure for view `view_reserva_eliminada`
--
DROP TABLE IF EXISTS `view_reserva_eliminada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reserva_eliminada`  AS  select `rv`.`idreserva` AS `idreserva`,`rv`.`data_chegada` AS `data_chegada`,`rv`.`data_partida` AS `data_partida`,`rv`.`data_reserva` AS `data_reserva`,`rv`.`n_adulta` AS `n_adulta`,`rv`.`n_crianca` AS `n_crianca`,`rv`.`id_forma_pagamento` AS `id_forma_pagamento`,`rv`.`valor_pago` AS `valor_pago`,`rv`.`data_pagamento` AS `data_pagamento`,`rv`.`desejo` AS `desejo`,`rv`.`obs` AS `obs`,`rv`.`id_quarto` AS `id_quarto`,`rv`.`id_cliente` AS `id_cliente`,`rv`.`id_funcionario` AS `id_funcionario`,`rv`.`statu` AS `statu`,`cl`.`idcliente` AS `idcliente`,`cl`.`nome` AS `nome`,`cl`.`email` AS `email`,`cl`.`telefone` AS `telefone`,`cl`.`senha` AS `senha`,`cl`.`status` AS `status`,`qt`.`idquarto` AS `idquarto`,`qt`.`num_quarto` AS `num_quarto`,`qt`.`descricao` AS `descricao`,`qt`.`preco` AS `preco` from ((`reserva` `rv` join `cliente` `cl` on((`rv`.`id_cliente` = `cl`.`idcliente`))) join `quarto` `qt` on((`rv`.`id_quarto` = `qt`.`idquarto`))) where (`rv`.`statu` = '3') ;

-- --------------------------------------------------------

--
-- Structure for view `view_reserva_finalizada`
--
DROP TABLE IF EXISTS `view_reserva_finalizada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reserva_finalizada`  AS  select `rv`.`idreserva` AS `idreserva`,`rv`.`data_chegada` AS `data_chegada`,`rv`.`data_partida` AS `data_partida`,`rv`.`data_reserva` AS `data_reserva`,`rv`.`n_adulta` AS `n_adulta`,`rv`.`n_crianca` AS `n_crianca`,`rv`.`id_forma_pagamento` AS `id_forma_pagamento`,`rv`.`valor_pago` AS `valor_pago`,`rv`.`data_pagamento` AS `data_pagamento`,`rv`.`desejo` AS `desejo`,`rv`.`obs` AS `obs`,`rv`.`id_quarto` AS `id_quarto`,`rv`.`id_cliente` AS `id_cliente`,`rv`.`id_funcionario` AS `id_funcionario`,`rv`.`statu` AS `statu`,`cl`.`idcliente` AS `idcliente`,`cl`.`nome` AS `nome`,`cl`.`email` AS `email`,`cl`.`telefone` AS `telefone`,`cl`.`senha` AS `senha`,`cl`.`status` AS `status`,`qt`.`idquarto` AS `idquarto`,`qt`.`num_quarto` AS `num_quarto`,`qt`.`descricao` AS `descricao`,`qt`.`preco` AS `preco` from ((`reserva` `rv` join `cliente` `cl` on((`rv`.`id_cliente` = `cl`.`idcliente`))) join `quarto` `qt` on((`rv`.`id_quarto` = `qt`.`idquarto`))) where (`rv`.`statu` = '4') ;

-- --------------------------------------------------------

--
-- Structure for view `view_reserva_processada`
--
DROP TABLE IF EXISTS `view_reserva_processada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reserva_processada`  AS  select `rv`.`idreserva` AS `idreserva`,`rv`.`data_chegada` AS `data_chegada`,`rv`.`data_partida` AS `data_partida`,`rv`.`data_reserva` AS `data_reserva`,`rv`.`n_adulta` AS `n_adulta`,`rv`.`n_crianca` AS `n_crianca`,`rv`.`id_forma_pagamento` AS `id_forma_pagamento`,`rv`.`valor_pago` AS `valor_pago`,`rv`.`data_pagamento` AS `data_pagamento`,`rv`.`desejo` AS `desejo`,`rv`.`obs` AS `obs`,`rv`.`id_quarto` AS `id_quarto`,`rv`.`id_cliente` AS `id_cliente`,`rv`.`id_funcionario` AS `id_funcionario`,`rv`.`statu` AS `statu`,`cl`.`idcliente` AS `idcliente`,`cl`.`nome` AS `nome`,`cl`.`email` AS `email`,`cl`.`telefone` AS `telefone`,`cl`.`senha` AS `senha`,`cl`.`status` AS `status`,`qt`.`idquarto` AS `idquarto`,`qt`.`num_quarto` AS `num_quarto`,`qt`.`descricao` AS `descricao`,`qt`.`preco` AS `preco` from ((`reserva` `rv` join `cliente` `cl` on((`rv`.`id_cliente` = `cl`.`idcliente`))) join `quarto` `qt` on((`rv`.`id_quarto` = `qt`.`idquarto`))) where (`rv`.`statu` = '1') ;

-- --------------------------------------------------------

--
-- Structure for view `view_reserva_rejeitadas`
--
DROP TABLE IF EXISTS `view_reserva_rejeitadas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reserva_rejeitadas`  AS  select `rv`.`idreserva` AS `idreserva`,`rv`.`data_chegada` AS `data_chegada`,`rv`.`data_partida` AS `data_partida`,`rv`.`data_reserva` AS `data_reserva`,`rv`.`n_adulta` AS `n_adulta`,`rv`.`n_crianca` AS `n_crianca`,`rv`.`id_forma_pagamento` AS `id_forma_pagamento`,`rv`.`valor_pago` AS `valor_pago`,`rv`.`data_pagamento` AS `data_pagamento`,`rv`.`desejo` AS `desejo`,`rv`.`obs` AS `obs`,`rv`.`id_quarto` AS `id_quarto`,`rv`.`id_cliente` AS `id_cliente`,`rv`.`id_funcionario` AS `id_funcionario`,`rv`.`statu` AS `statu`,`cl`.`idcliente` AS `idcliente`,`cl`.`nome` AS `nome`,`cl`.`email` AS `email`,`cl`.`telefone` AS `telefone`,`cl`.`senha` AS `senha`,`cl`.`status` AS `status`,`qt`.`idquarto` AS `idquarto`,`qt`.`num_quarto` AS `num_quarto`,`qt`.`descricao` AS `descricao`,`qt`.`preco` AS `preco` from ((`reserva` `rv` join `cliente` `cl` on((`rv`.`id_cliente` = `cl`.`idcliente`))) join `quarto` `qt` on((`rv`.`id_quarto` = `qt`.`idquarto`))) where (`rv`.`statu` = '2') ;

-- --------------------------------------------------------

--
-- Structure for view `view_testemunho`
--
DROP TABLE IF EXISTS `view_testemunho`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_testemunho`  AS  select `ts`.`idtestemunho` AS `idtestemunho`,`ts`.`testemunho` AS `testemunho`,`ts`.`id_cliente` AS `id_cliente`,`cl`.`nome` AS `cliente` from (`testemunho` `ts` join `cliente` `cl` on((`cl`.`idcliente` = `ts`.`id_cliente`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  ADD PRIMARY KEY (`idforma_pagamento`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD KEY `id_permicao_idx` (`id_permicao`);

--
-- Indexes for table `permicao`
--
ALTER TABLE `permicao`
  ADD PRIMARY KEY (`idpermicao`);

--
-- Indexes for table `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`idquarto`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idreserva`);

--
-- Indexes for table `testemunho`
--
ALTER TABLE `testemunho`
  ADD PRIMARY KEY (`idtestemunho`),
  ADD KEY `id_cliente_idx` (`id_cliente`);

--
-- Indexes for table `tipo_reserva`
--
ALTER TABLE `tipo_reserva`
  ADD PRIMARY KEY (`idtipo_reserva`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  MODIFY `idforma_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `permicao`
--
ALTER TABLE `permicao`
  MODIFY `idpermicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quarto`
--
ALTER TABLE `quarto`
  MODIFY `idquarto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `testemunho`
--
ALTER TABLE `testemunho`
  MODIFY `idtestemunho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tipo_reserva`
--
ALTER TABLE `tipo_reserva`
  MODIFY `idtipo_reserva` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `id_permicao` FOREIGN KEY (`id_permicao`) REFERENCES `permicao` (`idpermicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `testemunho`
--
ALTER TABLE `testemunho`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `testemunho` (`idtestemunho`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
