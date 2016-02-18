-- CRIAÇÃO DO BANCO
DROP DATABASE IF EXISTS eventosdb;

CREATE DATABASE `eventosdb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

-- CIDADE
DROP TABLE IF EXISTS cidade;

CREATE TABLE `cidade` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- STATUS_EVENTO

DROP TABLE IF EXISTS status_evento;

CREATE TABLE `status_evento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- EVENTO

DROP TABLE IF EXISTS evento;

CREATE TABLE `evento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cidade` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_evento_cidade_idx` (`id_cidade`),
  KEY `fk_evento_statusevento_idx` (`id_status`),
  CONSTRAINT `fk_evento_cidade` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_statusevento` FOREIGN KEY (`id_status`) REFERENCES `status_evento` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- CLIENTE
DROP TABLE EXISTS cliente;

CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_uc` int(11) DEFAULT NULL,
  `codigo_nis` int(11) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `active` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- TIPODEACESSO
DROP TABLE IF EXISTS tipodeacesso;

CREATE TABLE `tipodeacesso` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `acessodescricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `eventosdb`.`tipodeacesso`(`codigo`,`acessodescricao`) VALUES(1,'ADMIN');
INSERT INTO `eventosdb`.`tipodeacesso`(`codigo`,`acessodescricao`) VALUES(2,'OPERADOR');

-- OPERADORESCOMSENHA

DROP TABLE IF EXISTS operadorescomsenha;

CREATE TABLE `operadorescomsenha` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_acesso` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_operadorescomsenha_tipoacesso_idx` (`tipo_acesso`),
  CONSTRAINT `fk_operadorescomsenha_tipoacesso` FOREIGN KEY (`tipo_acesso`) REFERENCES `tipodeacesso` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- DEPARTAMENTO
DROP TABLE IF EXISTS departamento;

CREATE TABLE `departamento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Tabela de Departamentos do controle de Eventos';

-- ESTADO
DROP TABLE IF EXISTS estado;

CREATE TABLE `estado` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Tabela de Estados';

-- STATUS DOS PRODUTOS
DROP TABLE IF EXISTS status_produto;

CREATE TABLE `status_produto` (
  `codigo` int(11) NOT NULL,
  `status_prod` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- PRODUTOS
DROP TABLE IF EXISTS produtos;

CREATE TABLE `produtos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(45) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `codigo_departamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `prod_dep_idx` (`codigo_departamento`),
  KEY `prod_status_idx` (`id_status`),
  CONSTRAINT `prod_dep` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamento` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `prod_status` FOREIGN KEY (`id_status`) REFERENCES `status_produto` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='Tabela de Produtos dos Eventos';



-- COLORS

DROP TABLE IF EXISTS colors;