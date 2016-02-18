-- CRIAÇÃO DO BANCO
DROP DATABASE IF EXISTS 'eventosdb';

CREATE DATABASE `eventosdb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

-- CIDADE
DROP TABLE IF EXISTS 'cidade';

CREATE TABLE `cidade` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- STATUS_EVENTO

DROP TABLE IF EXISTS 'status_evento';

CREATE TABLE `status_evento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- EVENTO

DROP TABLE IF EXISTS 'evento';

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


-- COLORS

DROP TABLE IF EXISTS 'colors';