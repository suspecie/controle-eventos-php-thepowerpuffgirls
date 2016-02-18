--DEPARTAMENTO
DROP TABLE IF EXISTS 'departamento';

CREATE TABLE `departamento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Tabela de Departamentos do controle de Eventos';

--ESTADO
DROP TABLE IF EXISTS 'estado';

CREATE TABLE `estado` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Tabela de Estados';

--STATUS DOS PRODUTOS
DROP TABLE IF EXISTS 'status_produto';

CREATE TABLE `status_produto` (
  `codigo` int(11) NOT NULL,
  `status_prod` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--PRODUTOS
DROP TABLE IF EXISTS 'produtos';

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