--CLIENTE
DROP TABLE EXISTS 'cliente';

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


--TIPODEACESSO
DROP TABLE IF EXISTS 'tipodeacesso';

CREATE TABLE `tipodeacesso` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `acessodescricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--OPERADORESCOMSENHA

DROP TABLE IF EXISTS 'operadorescomsenha';

CREATE TABLE `operadorescomsenha` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_acesso` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_operadorescomsenha_tipoacesso_idx` (`tipo_acesso`),
  CONSTRAINT `fk_operadorescomsenha_tipoacesso` FOREIGN KEY (`tipo_acesso`) REFERENCES `tipodeacesso` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;