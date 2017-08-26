/*
SQLyog Ultimate v8.55 
MySQL - 5.5.8-log : Database - lanagrors_logs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lanagrors_logs` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `lanagrors_logs`;

/*Table structure for table `contrato_ativo` */

DROP TABLE IF EXISTS `contrato_ativo`;

CREATE TABLE `contrato_ativo` (
  `Ativo` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_ativo` */

/*Table structure for table `contrato_ativo2` */

DROP TABLE IF EXISTS `contrato_ativo2`;

CREATE TABLE `contrato_ativo2` (
  `Ativo` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_ativo2` */

/*Table structure for table `contrato_descricao` */

DROP TABLE IF EXISTS `contrato_descricao`;

CREATE TABLE `contrato_descricao` (
  `descricao` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_descricao` */

/*Table structure for table `contrato_descricao2` */

DROP TABLE IF EXISTS `contrato_descricao2`;

CREATE TABLE `contrato_descricao2` (
  `descricao` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_descricao2` */

/*Table structure for table `contrato_empresa` */

DROP TABLE IF EXISTS `contrato_empresa`;

CREATE TABLE `contrato_empresa` (
  `empresa` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_empresa` */

/*Table structure for table `contrato_empresa2` */

DROP TABLE IF EXISTS `contrato_empresa2`;

CREATE TABLE `contrato_empresa2` (
  `empresa` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_empresa2` */

/*Table structure for table `contrato_fiscal_sub_1` */

DROP TABLE IF EXISTS `contrato_fiscal_sub_1`;

CREATE TABLE `contrato_fiscal_sub_1` (
  `fiscal_sub_1` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_fiscal_sub_1` */

/*Table structure for table `contrato_fiscal_sub_1_2` */

DROP TABLE IF EXISTS `contrato_fiscal_sub_1_2`;

CREATE TABLE `contrato_fiscal_sub_1_2` (
  `fiscal_sub_1` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_fiscal_sub_1_2` */

/*Table structure for table `contrato_fiscal_sub_2` */

DROP TABLE IF EXISTS `contrato_fiscal_sub_2`;

CREATE TABLE `contrato_fiscal_sub_2` (
  `fiscal_sub_2` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_fiscal_sub_2` */

/*Table structure for table `contrato_fiscal_sub_2_2` */

DROP TABLE IF EXISTS `contrato_fiscal_sub_2_2`;

CREATE TABLE `contrato_fiscal_sub_2_2` (
  `fiscal_sub_2` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_fiscal_sub_2_2` */

/*Table structure for table `contrato_fiscal_sub_3` */

DROP TABLE IF EXISTS `contrato_fiscal_sub_3`;

CREATE TABLE `contrato_fiscal_sub_3` (
  `fiscal_sub_3` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_fiscal_sub_3` */

/*Table structure for table `contrato_fiscal_sub_3_2` */

DROP TABLE IF EXISTS `contrato_fiscal_sub_3_2`;

CREATE TABLE `contrato_fiscal_sub_3_2` (
  `fiscal_sub_3` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_fiscal_sub_3_2` */

/*Table structure for table `contrato_fiscal_sub_4` */

DROP TABLE IF EXISTS `contrato_fiscal_sub_4`;

CREATE TABLE `contrato_fiscal_sub_4` (
  `fiscal_sub_4` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_fiscal_sub_4` */

/*Table structure for table `contrato_fiscal_sub_4_2` */

DROP TABLE IF EXISTS `contrato_fiscal_sub_4_2`;

CREATE TABLE `contrato_fiscal_sub_4_2` (
  `fiscal_sub_4` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_fiscal_sub_4_2` */

/*Table structure for table `contrato_n_processo` */

DROP TABLE IF EXISTS `contrato_n_processo`;

CREATE TABLE `contrato_n_processo` (
  `n_processo` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_n_processo` */

/*Table structure for table `contrato_n_processo2` */

DROP TABLE IF EXISTS `contrato_n_processo2`;

CREATE TABLE `contrato_n_processo2` (
  `n_processo` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_n_processo2` */

/*Table structure for table `contrato_valor_contrato` */

DROP TABLE IF EXISTS `contrato_valor_contrato`;

CREATE TABLE `contrato_valor_contrato` (
  `valor_contrato` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_valor_contrato` */

/*Table structure for table `contrato_valor_contrato2` */

DROP TABLE IF EXISTS `contrato_valor_contrato2`;

CREATE TABLE `contrato_valor_contrato2` (
  `valor_contrato` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_valor_contrato2` */

/*Table structure for table `contrato_valor_mensal` */

DROP TABLE IF EXISTS `contrato_valor_mensal`;

CREATE TABLE `contrato_valor_mensal` (
  `valor_mensal` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_valor_mensal` */

/*Table structure for table `contrato_valor_mensal2` */

DROP TABLE IF EXISTS `contrato_valor_mensal2`;

CREATE TABLE `contrato_valor_mensal2` (
  `valor_mensal` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_valor_mensal2` */

/*Table structure for table `contrato_vigencia` */

DROP TABLE IF EXISTS `contrato_vigencia`;

CREATE TABLE `contrato_vigencia` (
  `vigencia` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_vigencia` */

/*Table structure for table `contrato_vigencia2` */

DROP TABLE IF EXISTS `contrato_vigencia2`;

CREATE TABLE `contrato_vigencia2` (
  `vigencia` varchar(40) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_contrato` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrato_vigencia2` */

/*Table structure for table `desativa_func` */

DROP TABLE IF EXISTS `desativa_func`;

CREATE TABLE `desativa_func` (
  `id` double NOT NULL AUTO_INCREMENT,
  `id_fun` int(30) DEFAULT NULL,
  `descricao2` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `Data` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Hora` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `usuario` varchar(150) CHARACTER SET latin1 NOT NULL,
  `data_adm` date DEFAULT NULL,
  `unidade` varchar(10) DEFAULT NULL,
  `n_contrato` varchar(30) DEFAULT NULL,
  `acao` varchar(20) DEFAULT NULL,
  `cargo` varchar(150) DEFAULT NULL,
  `nome_funcionario` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `desativa_func` */

/*Table structure for table `tab_bairro` */

DROP TABLE IF EXISTS `tab_bairro`;

CREATE TABLE `tab_bairro` (
  `Bairro` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_bairro` */

/*Table structure for table `tab_bairro2` */

DROP TABLE IF EXISTS `tab_bairro2`;

CREATE TABLE `tab_bairro2` (
  `Bairro` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_bairro2` */

/*Table structure for table `tab_cargo` */

DROP TABLE IF EXISTS `tab_cargo`;

CREATE TABLE `tab_cargo` (
  `cargo` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_cargo` */

/*Table structure for table `tab_cargo2` */

DROP TABLE IF EXISTS `tab_cargo2`;

CREATE TABLE `tab_cargo2` (
  `cargo` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_cargo2` */

/*Table structure for table `tab_celular` */

DROP TABLE IF EXISTS `tab_celular`;

CREATE TABLE `tab_celular` (
  `celular` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_celular` */

/*Table structure for table `tab_celular2` */

DROP TABLE IF EXISTS `tab_celular2`;

CREATE TABLE `tab_celular2` (
  `celular` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_celular2` */

/*Table structure for table `tab_cidade` */

DROP TABLE IF EXISTS `tab_cidade`;

CREATE TABLE `tab_cidade` (
  `Cidade` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_cidade` */

/*Table structure for table `tab_cidade2` */

DROP TABLE IF EXISTS `tab_cidade2`;

CREATE TABLE `tab_cidade2` (
  `Cidade` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_cidade2` */

/*Table structure for table `tab_complemento` */

DROP TABLE IF EXISTS `tab_complemento`;

CREATE TABLE `tab_complemento` (
  `Complemento` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_complemento` */

/*Table structure for table `tab_complemento2` */

DROP TABLE IF EXISTS `tab_complemento2`;

CREATE TABLE `tab_complemento2` (
  `Complemento` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_complemento2` */

/*Table structure for table `tab_data_adm` */

DROP TABLE IF EXISTS `tab_data_adm`;

CREATE TABLE `tab_data_adm` (
  `data_adm` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_data_adm` */

/*Table structure for table `tab_data_adm2` */

DROP TABLE IF EXISTS `tab_data_adm2`;

CREATE TABLE `tab_data_adm2` (
  `data_adm` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_data_adm2` */

/*Table structure for table `tab_data_nasc` */

DROP TABLE IF EXISTS `tab_data_nasc`;

CREATE TABLE `tab_data_nasc` (
  `data_nasc` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_data_nasc` */

/*Table structure for table `tab_data_nasc2` */

DROP TABLE IF EXISTS `tab_data_nasc2`;

CREATE TABLE `tab_data_nasc2` (
  `data_nasc` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_data_nasc2` */

/*Table structure for table `tab_email` */

DROP TABLE IF EXISTS `tab_email`;

CREATE TABLE `tab_email` (
  `email` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_email` */

/*Table structure for table `tab_email2` */

DROP TABLE IF EXISTS `tab_email2`;

CREATE TABLE `tab_email2` (
  `email` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_email2` */

/*Table structure for table `tab_endereco` */

DROP TABLE IF EXISTS `tab_endereco`;

CREATE TABLE `tab_endereco` (
  `endereco` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_endereco` */

/*Table structure for table `tab_endereco2` */

DROP TABLE IF EXISTS `tab_endereco2`;

CREATE TABLE `tab_endereco2` (
  `endereco` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_endereco2` */

/*Table structure for table `tab_escolaridade` */

DROP TABLE IF EXISTS `tab_escolaridade`;

CREATE TABLE `tab_escolaridade` (
  `escolaridade` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_escolaridade` */

/*Table structure for table `tab_escolaridade2` */

DROP TABLE IF EXISTS `tab_escolaridade2`;

CREATE TABLE `tab_escolaridade2` (
  `escolaridade` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_escolaridade2` */

/*Table structure for table `tab_estado` */

DROP TABLE IF EXISTS `tab_estado`;

CREATE TABLE `tab_estado` (
  `Estado` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_estado` */

/*Table structure for table `tab_estado2` */

DROP TABLE IF EXISTS `tab_estado2`;

CREATE TABLE `tab_estado2` (
  `Estado` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_estado2` */

/*Table structure for table `tab_filhos` */

DROP TABLE IF EXISTS `tab_filhos`;

CREATE TABLE `tab_filhos` (
  `filhos` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_filhos` */

/*Table structure for table `tab_filhos2` */

DROP TABLE IF EXISTS `tab_filhos2`;

CREATE TABLE `tab_filhos2` (
  `filhos` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_filhos2` */

/*Table structure for table `tab_formacao` */

DROP TABLE IF EXISTS `tab_formacao`;

CREATE TABLE `tab_formacao` (
  `formacao` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_formacao` */

/*Table structure for table `tab_formacao2` */

DROP TABLE IF EXISTS `tab_formacao2`;

CREATE TABLE `tab_formacao2` (
  `formacao` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_formacao2` */

/*Table structure for table `tab_ini_lanagro` */

DROP TABLE IF EXISTS `tab_ini_lanagro`;

CREATE TABLE `tab_ini_lanagro` (
  `ini_lanagro` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_ini_lanagro` */

/*Table structure for table `tab_ini_lanagro2` */

DROP TABLE IF EXISTS `tab_ini_lanagro2`;

CREATE TABLE `tab_ini_lanagro2` (
  `ini_lanagro` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_ini_lanagro2` */

/*Table structure for table `tab_n_contrato` */

DROP TABLE IF EXISTS `tab_n_contrato`;

CREATE TABLE `tab_n_contrato` (
  `n_contrato` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_n_contrato` */

/*Table structure for table `tab_n_contrato2` */

DROP TABLE IF EXISTS `tab_n_contrato2`;

CREATE TABLE `tab_n_contrato2` (
  `n_contrato` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_n_contrato2` */

/*Table structure for table `tab_natura` */

DROP TABLE IF EXISTS `tab_natura`;

CREATE TABLE `tab_natura` (
  `natura` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_natura` */

/*Table structure for table `tab_natura2` */

DROP TABLE IF EXISTS `tab_natura2`;

CREATE TABLE `tab_natura2` (
  `natura` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_natura2` */

/*Table structure for table `tab_nome_funcionario` */

DROP TABLE IF EXISTS `tab_nome_funcionario`;

CREATE TABLE `tab_nome_funcionario` (
  `nome_funcionario` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_nome_funcionario` */

/*Table structure for table `tab_nome_funcionario2` */

DROP TABLE IF EXISTS `tab_nome_funcionario2`;

CREATE TABLE `tab_nome_funcionario2` (
  `nome_funcionario` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_nome_funcionario2` */

/*Table structure for table `tab_numero` */

DROP TABLE IF EXISTS `tab_numero`;

CREATE TABLE `tab_numero` (
  `Numero` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_numero` */

/*Table structure for table `tab_numero2` */

DROP TABLE IF EXISTS `tab_numero2`;

CREATE TABLE `tab_numero2` (
  `Numero` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_numero2` */

/*Table structure for table `tab_obs` */

DROP TABLE IF EXISTS `tab_obs`;

CREATE TABLE `tab_obs` (
  `obs` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_obs` */

/*Table structure for table `tab_obs2` */

DROP TABLE IF EXISTS `tab_obs2`;

CREATE TABLE `tab_obs2` (
  `obs` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_obs2` */

/*Table structure for table `tab_sal_base` */

DROP TABLE IF EXISTS `tab_sal_base`;

CREATE TABLE `tab_sal_base` (
  `sal_base` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_sal_base` */

/*Table structure for table `tab_sal_base2` */

DROP TABLE IF EXISTS `tab_sal_base2`;

CREATE TABLE `tab_sal_base2` (
  `sal_base` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_sal_base2` */

/*Table structure for table `tab_sexo` */

DROP TABLE IF EXISTS `tab_sexo`;

CREATE TABLE `tab_sexo` (
  `sexo` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_sexo` */

/*Table structure for table `tab_sexo2` */

DROP TABLE IF EXISTS `tab_sexo2`;

CREATE TABLE `tab_sexo2` (
  `sexo` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_sexo2` */

/*Table structure for table `tab_telefone` */

DROP TABLE IF EXISTS `tab_telefone`;

CREATE TABLE `tab_telefone` (
  `telefone` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_telefone` */

/*Table structure for table `tab_telefone2` */

DROP TABLE IF EXISTS `tab_telefone2`;

CREATE TABLE `tab_telefone2` (
  `telefone` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_telefone2` */

/*Table structure for table `tab_unidade` */

DROP TABLE IF EXISTS `tab_unidade`;

CREATE TABLE `tab_unidade` (
  `unidade` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_unidade` */

/*Table structure for table `tab_unidade2` */

DROP TABLE IF EXISTS `tab_unidade2`;

CREATE TABLE `tab_unidade2` (
  `unidade` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `id_funcionario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tab_unidade2` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
