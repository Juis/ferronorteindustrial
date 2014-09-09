-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Set-2014 às 03:01
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fni_ferronorte`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `banner_url` varchar(100) NOT NULL,
  `acao_url` varchar(100) NOT NULL,
  `posicao` tinyint(4) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` datetime NOT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `data_altera` datetime DEFAULT NULL,
  `usuario_altera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_banner_empresa1_idx` (`empresa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `empresa_id`, `nome`, `banner_url`, `acao_url`, `posicao`, `ativo`, `data_cadastro`, `usuario_cadastro`, `data_altera`, `usuario_altera`) VALUES
(1, 1, 'banner1', '/images/banner/1b7d5a1c426f9850bf8777d3eded8d72.jpg', '#', 1, 1, '2014-09-03 00:00:00', 1, '2014-09-03 00:00:00', 1),
(2, 1, 'banner2', '/images/224d673767f6659ae96c85ef3485edd6.jpg', '#', 2, 1, '2014-09-03 00:00:00', 1, '2014-09-03 00:00:00', 1),
(3, 1, 'banner3', '/images/224d673767f6659ae96c85ef3485edd6.jpg', '#', 3, 1, '2014-09-03 00:00:00', 1, '2014-09-03 00:00:00', 1),
(5, 1, 'banner4', '/images/d125ac275187d18a3bd6254b7b2a6b3b.jpg', '#', 4, 1, '2014-09-03 00:00:00', 1, '2014-09-03 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `sessionid` varchar(24) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carrinho_produto1_idx` (`produto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `data_altera` datetime DEFAULT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `usuario_altera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`, `data_cadastro`, `data_altera`, `usuario_cadastro`, `usuario_altera`) VALUES
(1, 'CHAPA', '2014-09-04 00:00:00', '2014-09-04 00:00:00', 1, 1),
(2, 'PERFIL ENRIJECIDO', '2014-09-04 00:00:00', '2014-09-04 00:00:00', 1, 1),
(3, 'TELHA', '2014-09-04 00:00:00', '2014-09-04 00:00:00', 1, 1),
(4, 'TRELICA', '2014-09-04 00:00:00', '2014-09-04 00:00:00', 1, 1),
(5, 'TUBO', '2014-09-04 00:00:00', '2014-09-04 00:00:00', 1, 1),
(6, 'VERGALHAO', '2014-09-04 00:00:00', '2014-09-04 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `logo_url` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` datetime NOT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `data_altera` datetime DEFAULT NULL,
  `usuario_altera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_UNIQUE` (`nome`),
  UNIQUE KEY `cnpj_UNIQUE` (`cnpj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `cnpj`, `logo_url`, `descricao`, `telefone`, `email`, `endereco`, `ativo`, `data_cadastro`, `usuario_cadastro`, `data_altera`, `usuario_altera`) VALUES
(1, 'FERRO NORTE INDUSTRIAL', '123123123', '../images/logo.png', '<p>\n		<em><img src="http://www.ferronorteindustrial.com.br/images/a44901454f29eeb33d3d857bc8366f89.jpg"></em>\n		Um dos principais braços do Grupo Ferronorte, a Ferronorte Industrial, possui uma&nbsp;estrutura ampla e completa de produção. Os equipamentos de última geração,&nbsp;manuseados por técnicos qualificados e em constante treinamento, fazem com que a&nbsp;Ferronorte Industrial ofereça produtos e serviços com qualidade internacional para todo o país.<br>\n<br>\nPara atender imediatamente a todas as demandas, a Ferronorte Industrial mantém rígido controle e manutenção de estoque, o que garante, além de rapidez na entrega, o padrão de qualidade.<br>\n<br>\nFabricação de perfis estruturais simples e enrijecidos, bitolas variadas e de larguras diversas estão entre a gama de produtos oferecidos pela Ferronorte Industrial. Que também trabalha com aços planos e longos, inclusive com beneficiamentos como corte e dobra. <br>\n<br>\nAs telhas trapezoidais e onduladas em aço produzidas pela Ferronorte Industrial merecem destaque por sua beleza, praticidade e durabilidade. Atendem aos mais diferentes projetos arquitetônicos, seja de qual segmento for (industrial, residencial, ginásio poliesportivo e outros).<br>\n<br>\nEntre em contato conosco e saiba o que mais podemos fazer por você ou sua empresa.<br>\n		</p>', '<span class="lddd">55 86</span> <span class="lfone">3215 4950</span>', 'ferronorte@ferronorteindustrial.com.br', '<p>Via Coletora Secundária 03 com via Estrutural Arterial 02 - BR 316 Km 13 - Polo Empresarial Sul </p>\n					<p>CEP 64039-100 - Teresina/Pi - Brasil</p>	', 1, '2014-09-03 00:00:00', 1, '2014-09-03 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolaridade`
--

CREATE TABLE IF NOT EXISTS `escolaridade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` datetime NOT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `data_altera` datetime DEFAULT NULL,
  `usuario_altera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `escolaridade`
--

INSERT INTO `escolaridade` (`id`, `descricao`, `ativo`, `data_cadastro`, `usuario_cadastro`, `data_altera`, `usuario_altera`) VALUES
(6, 'Não Alfabetizado', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(7, 'Ensino Fundamental (Imcompleto)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(8, 'Ensino Fundamental (Completo)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(9, 'Ensino Médio (Incompleto)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(10, 'Ensino Médio (Completo)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(11, 'Ensino Médio Técnico (Incompleto)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(12, 'Ensino Médio Técnico (Completo)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(13, 'Superior Incompleto', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(14, 'Superior Completo', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(15, 'Pós-Graduação Incompleta', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(16, 'Pós-Graduação Completa', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(17, 'Mestrado Incompleto', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(18, 'Mestrado Completo', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(19, 'Doutorado Incompleto', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(20, 'Doutorado Completo', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_civil`
--

CREATE TABLE IF NOT EXISTS `estado_civil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` datetime NOT NULL,
  `usuario_cadasro` int(11) NOT NULL,
  `data_altera` datetime DEFAULT NULL,
  `usuario_altera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `estado_civil`
--

INSERT INTO `estado_civil` (`id`, `descricao`, `ativo`, `data_cadastro`, `usuario_cadasro`, `data_altera`, `usuario_altera`) VALUES
(1, 'Solteiro(a)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(2, 'Casado(a)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(3, 'Divorciado(a)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(4, 'Separado(a)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1),
(5, 'Viúvo(a)', 1, '2014-09-07 00:00:00', 1, '2014-09-07 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `conteudo` text NOT NULL,
  `posicao` tinyint(4) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` datetime NOT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `data_altera` datetime DEFAULT NULL,
  `usuario_altera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_noticia_empresa1_idx` (`empresa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE IF NOT EXISTS `orcamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `telefone_fixo` varchar(30) NOT NULL,
  `telefone_celular` varchar(30) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `outros` text,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orcamento_empresa1_idx` (`empresa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pemissao`
--

CREATE TABLE IF NOT EXISTS `pemissao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `data_altera` datetime DEFAULT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `usuario_altera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `unidade` varchar(5) NOT NULL,
  `imagem_url` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` datetime NOT NULL,
  `data_altera` datetime DEFAULT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `usuario_altera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produto_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `categoria_id`, `nome`, `descricao`, `unidade`, `imagem_url`, `ativo`, `data_cadastro`, `data_altera`, `usuario_cadastro`, `usuario_altera`) VALUES
(1, 6, 'CA-60', '6,50MM FN-60/BARRA', 'TN', '', 1, '2014-09-05 00:00:00', '2014-09-05 00:00:00', 1, 1),
(2, 6, 'CA-60', '7,00MM FN60/DOBRADO', 'TN', '', 1, '2014-09-05 00:00:00', '2014-09-05 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhe_conosco`
--

CREATE TABLE IF NOT EXISTS `trabalhe_conosco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `estado_civil_id` int(11) NOT NULL,
  `escolaridade_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `como_soube` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `data_nascimento` varchar(10) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `numero` smallint(6) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `telefone_fixo` varchar(30) DEFAULT NULL,
  `telefone_celular` varchar(30) DEFAULT NULL,
  `telefone_fax` varchar(30) DEFAULT NULL,
  `observacao` text,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_trabalhe_conosco_estado_civil_idx` (`estado_civil_id`),
  KEY `fk_trabalhe_conosco_escolaridade1_idx` (`escolaridade_id`),
  KEY `fk_trabalhe_conosco_empresa1_idx` (`empresa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `trabalhe_conosco`
--

INSERT INTO `trabalhe_conosco` (`id`, `empresa_id`, `estado_civil_id`, `escolaridade_id`, `nome`, `estado`, `cidade`, `como_soube`, `email`, `data_nascimento`, `sexo`, `endereco`, `numero`, `cep`, `complemento`, `bairro`, `telefone_fixo`, `telefone_celular`, `telefone_fax`, `observacao`, `data_cadastro`) VALUES
(1, 1, 1, 6, '123', '123', '1123', '123123', '123@123.123', '05/12/1983', 'M', '123', 123, '123', '123', '123', '1231', '123', '123', '123', '2014-09-07 22:20:17'),
(2, 1, 1, 6, '4444', '444', '444', '444', '444@444.444', '05/12/1983', 'F', '444', 444, '444', '444', '44', '444', '444', '444', '444', '2014-09-07 22:23:17'),
(3, 1, 1, 7, '55', '555', '5555', '555', '555@555.555', '05/12/1983', 'M', '5555', 5555, '5555', '5555', '5555', '5555', '5555', '555', '555', '2014-09-07 22:26:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemissao_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` datetime NOT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `data_altera` timestamp NULL DEFAULT NULL,
  `usuario_altera` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_pemissao1_idx` (`pemissao_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `fk_banner_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `fk_carrinho_produto1` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_noticia_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `fk_orcamento_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `trabalhe_conosco`
--
ALTER TABLE `trabalhe_conosco`
  ADD CONSTRAINT `fk_trabalhe_conosco_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabalhe_conosco_escolaridade1` FOREIGN KEY (`escolaridade_id`) REFERENCES `escolaridade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabalhe_conosco_estado_civil` FOREIGN KEY (`estado_civil_id`) REFERENCES `estado_civil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_pemissao1` FOREIGN KEY (`pemissao_id`) REFERENCES `pemissao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
