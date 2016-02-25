-- CRIAÇÃO DO BANCO
DROP DATABASE IF EXISTS eventosdb;

CREATE DATABASE `eventosdb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE eventosdb;

-- CIDADE
DROP TABLE IF EXISTS cidade;

CREATE TABLE cidade (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- STATUS_EVENTO

DROP TABLE IF EXISTS status_evento;

CREATE TABLE status_evento (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- EVENTO

DROP TABLE IF EXISTS evento;

CREATE TABLE evento (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cidade` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_evento_cidade_idx` (`id_cidade`),
  KEY `fk_evento_statusevento_idx` (`id_status`),
  CONSTRAINT `fk_evento_cidade` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_statusevento` FOREIGN KEY (`id_status`) REFERENCES `status_evento` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- CLIENTE
DROP TABLE IF EXISTS cliente;

CREATE TABLE cliente (
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- TIPODEACESSO
DROP TABLE IF EXISTS tipodeacesso;

CREATE TABLE tipodeacesso (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `acessodescricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO tipodeacesso(`codigo`,`acessodescricao`) VALUES(1,'ADMIN');
INSERT INTO tipodeacesso(`codigo`,`acessodescricao`) VALUES(2,'OPERADOR');

-- OPERADORESCOMSENHA

DROP TABLE IF EXISTS operadorescomsenha;

CREATE TABLE operadorescomsenha (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_acesso` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_operadorescomsenha_tipoacesso_idx` (`tipo_acesso`),
  CONSTRAINT `fk_operadorescomsenha_tipoacesso` FOREIGN KEY (`tipo_acesso`) REFERENCES `tipodeacesso` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO operadorescomsenha(`codigo`,`nome`,`senha`,`tipo_acesso`) VALUES(1,'admin',123,1);


-- DEPARTAMENTO
DROP TABLE IF EXISTS departamento;

CREATE TABLE departamentos (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Tabela de Departamentos do controle de Eventos';


-- ESTADO
DROP TABLE IF EXISTS estado;

CREATE TABLE estado (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Tabela de Estados';


-- STATUS DOS PRODUTOS
DROP TABLE IF EXISTS status_produto;

CREATE TABLE status_produto (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `status_prod` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- PRODUTOS
DROP TABLE IF EXISTS produtos;

CREATE TABLE produtos (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(45) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `codigo_departamento` int(11) DEFAULT NULL,
  `qtd_total` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `prod_dep_idx` (`codigo_departamento`),
  KEY `prod_status_idx` (`id_status`),
  CONSTRAINT `prod_dep` FOREIGN KEY (`codigo_departamento`) REFERENCES `departamentos` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `prod_status` FOREIGN KEY (`id_status`) REFERENCES `status_produto` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Tabela de Produtos dos Eventos';


-- ARQUIVO
DROP TABLE IF EXISTS arquivo;

CREATE TABLE arquivo (
  `id_evento_cliente` int(11) DEFAULT NULL,
  `caminho_arquivo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- PARTICIPACAO
DROP TABLE IF EXISTS participcao;

CREATE TABLE participacao (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_evento` int(11) DEFAULT NULL,
  `data_hora` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_participacao_cliente_idx` (`id_cliente`),
  KEY `fk_participacao_evento_idx` (`id_evento`),
  CONSTRAINT `fk_participacao_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_participacao_evento` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- FOTO
DROP TABLE IF EXISTS foto;

CREATE TABLE foto (
  `id_evento_cliente` int(11) DEFAULT NULL,
  `caminho_foto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- EVENTO PRODUTO
DROP TABLE IF EXISTS evento_produto;

CREATE TABLE evento_produto (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id_evento` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `qtd` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- CRACHA
CREATE TABLE cracha (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `status_cracha` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_cracha_cliente_idx` (`id_cliente`),
  KEY `fk_cracha_statuscracha_idx` (`status_cracha`),
  CONSTRAINT `fk_cracha_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- COLORS

DROP TABLE IF EXISTS colors;