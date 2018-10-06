-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2018 às 04:41
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recibos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recibo`
--

CREATE TABLE `recibo` (
  `idrecibo` int(10) NOT NULL,
  `valorRecibo` float(10,2) DEFAULT NULL,
  `dataRecibo` date DEFAULT NULL,
  `pagadorRecibo` varchar(200) DEFAULT NULL,
  `docPagRecibo` varchar(18) DEFAULT NULL,
  `campoRefRecibo` varchar(300) DEFAULT NULL,
  `recebedorRecibo` varchar(200) DEFAULT NULL,
  `docRecebRecibo` varchar(18) DEFAULT NULL,
  `foneRecebRecibo` varchar(12) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recibo`
--

INSERT INTO `recibo` (`idrecibo`, `valorRecibo`, `dataRecibo`, `pagadorRecibo`, `docPagRecibo`, `campoRefRecibo`, `recebedorRecibo`, `docRecebRecibo`, `foneRecebRecibo`, `iduser`) VALUES
(1, 15.00, '2018-07-29', 'Pagador', '13414314', 'Pagamento de Pornografias', 'Recebedor', '985918374', '412431243124', 2),
(2, 15.00, '2018-07-30', 'Wagner Candido', '09565237495', 'Pagamento de Pornografias', 'Lindomar Junior', '03142687495', '8388888888', 2),
(3, 60.00, '2018-07-30', 'Lindomar', '09565233443', 'Pagamento teste', 'Wagner', '123465', '83548648', 2),
(4, 90.00, '2018-07-30', 'Pagador de Teste', '0987314', 'Pagamento teste', 'Recebedor de Tste', '74529865', '89765421', 8),
(5, 200.00, '2018-07-31', 'Pagador de teste par esse recibo', '7894561201', 'Campo de referÃªncia de teste para esse recibo.', 'Recebedor de Tesete para esse recibo', '12345678910', '8188888888', 8),
(6, 200.00, '2018-09-01', 'coisa', '12345678911', 'mim', 'eu mesmo', '12333312344', '83 88482251', 10),
(7, 15.00, '2018-08-01', 'Jefferson Ferreira', '74185296310', 'Pagamento de Pornografias', 'Wagner CÃ¢ndido', '98765432101', '838888888', 11),
(8, 150.00, '2018-08-01', 'Jefferson', '000000111100111', 'Site', 'Wagner', '08837u47748840', '030838764656', 11),
(9, 90.00, '2018-08-01', 'Lindomar', '45211154564987', 'Pagamento teste', 'Recebedor', '985918374', '83548648', 11),
(10, 100.00, '2018-08-01', 'teste', '06170799452', 'servicos de informativa', 'o mesmo', '03232355485', '83548648', 12),
(11, 85.00, '2018-08-08', 'Rosimara Dantas', '123456987', 'Pagamento teste', 'Wagner CÃ¢ndido', '985918374', '412431243124', 2),
(12, 70.00, '2018-08-08', 'Wagner Candido', '45211154564987', 'Pagamento de Pornografias', 'Wagner CÃ¢ndido', '123465', '83548648', 2),
(13, 85.00, '2018-08-08', 'Wagner Candido', '09565237495', 'Consulta realizada de teste', 'David Batista Luna', '987654321', '135468520', 2),
(14, 1.50, '2018-08-08', 'Wagner Candido', '972985724', 'Consulta realizada de teste', 'Recebedor', '35439728000107', '8321025577', 2),
(15, 1.50, '2018-08-10', 'Wagner Candido', '972985724', 'Consulta realizada de teste', 'Recebedor', '35439728000107', '8321025577', 2),
(16, 80.00, '2018-08-14', 'Paciente de Teste', '45211154564987', 'Pagamento de Pornografias', 'Wagner CÃ¢ndido', '35439728000107', '412431243124', 15),
(17, 15.00, '2018-08-21', 'Centro de Endocrinologia e Metabologia LTDA', '35439728000107', 'exames laboratoriais realizados, conforme Nota Fiscal 43190. CompetÃªncia Setembro/2017', 'Unimed CG Cooperados de Campina Grande', '1234578974100001', '8321016615', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `iduser` int(10) NOT NULL,
  `nameuser` varchar(50) NOT NULL,
  `loginuser` varchar(50) NOT NULL,
  `passworduser` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`iduser`, `nameuser`, `loginuser`, `passworduser`) VALUES
(1, 'Administrador', 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Wagner CÃ¢ndido', 'wagnercssilva@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Teste de UsuÃ¡rio', 'testeuser', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Alisson Souza', 'alissonsouza', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'UsuÃ¡rio Bootstrap', 'user@email.com', 'bf95ded1f6789ebda21bba7ea318b6ca'),
(9, 'Novo usuÃ¡rio Teste', 'novouserteste@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'alguma coisa ai', 'coisa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'Jefferson Ferreira', 'jefferson@gmail.com', '08fd5d0abe88923da32950bb335d3ee8'),
(12, 'Lyhanderson', 'lyhfarias@gmail.com', 'b49ac87fe29aefa8fecf43ca5983a733'),
(13, 'Raniele Rodrigues da Costa', 'rany.costa0304@hotmail.com', 'f7756f0103342b499b3f33e600ad5f40'),
(14, 'Alisson Souza', 'adm@labprosangue.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'Gilles Albert', 'gillestoin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`idrecibo`),
  ADD KEY `fk_iduser_recibo` (`iduser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recibo`
--
ALTER TABLE `recibo`
  MODIFY `idrecibo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `fk_iduser_recibo` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
