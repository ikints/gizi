/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.32-MariaDB : Database - gizi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gizi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gizi`;

/*Table structure for table `balita` */

DROP TABLE IF EXISTS `balita`;

CREATE TABLE `balita` (
  `balita_id` int(11) NOT NULL AUTO_INCREMENT,
  `kel_id` int(11) DEFAULT NULL,
  `posyandu_id` int(11) DEFAULT NULL,
  `balita_nik` varchar(20) NOT NULL,
  `balita_nama` varchar(100) NOT NULL,
  `balita_anak_ke` tinyint(4) DEFAULT NULL,
  `balita_anak_dari` tinyint(4) DEFAULT NULL,
  `balita_jk` char(1) DEFAULT NULL,
  `balita_tgl_lahir` date DEFAULT NULL,
  `balita_berat_lahir` float DEFAULT NULL,
  `balita_ortu_nama` varchar(100) DEFAULT NULL,
  `balita_ortu_nik` varchar(15) DEFAULT NULL,
  `balita_alamat` text,
  `balita_rt` char(3) DEFAULT NULL,
  `balita_rw` char(3) DEFAULT NULL,
  `balita_tlpn` varchar(50) NOT NULL,
  `balita_date_entry` date NOT NULL,
  PRIMARY KEY (`balita_id`),
  KEY `fk_relationship_14` (`posyandu_id`),
  KEY `fk_relationship_8` (`kel_id`),
  CONSTRAINT `fk_relationship_14` FOREIGN KEY (`posyandu_id`) REFERENCES `posyandu` (`posyandu_id`),
  CONSTRAINT `fk_relationship_8` FOREIGN KEY (`kel_id`) REFERENCES `kelurahan` (`kel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `balita` */

insert  into `balita`(`balita_id`,`kel_id`,`posyandu_id`,`balita_nik`,`balita_nama`,`balita_anak_ke`,`balita_anak_dari`,`balita_jk`,`balita_tgl_lahir`,`balita_berat_lahir`,`balita_ortu_nama`,`balita_ortu_nik`,`balita_alamat`,`balita_rt`,`balita_rw`,`balita_tlpn`,`balita_date_entry`) values (1,2,1,'090909','Agus',1,1,'L','2018-01-17',NULL,'Margaretaa',NULL,'Jl. Mars Timur No.90','006','001','081320009091','2018-10-02'),(3,2,1,'090909','Agus s',1,1,'L','1980-01-17',NULL,'Margaretaa',NULL,'Jl. Mars Timur No.90','006','001','081320009091','2018-10-18');

/*Table structure for table `bidan` */

DROP TABLE IF EXISTS `bidan`;

CREATE TABLE `bidan` (
  `bidan_id` int(11) NOT NULL AUTO_INCREMENT,
  `puskesmas_id` int(11) DEFAULT NULL,
  `bidan_nama` varchar(100) NOT NULL,
  `bidan_nip` varchar(15) DEFAULT NULL,
  `bian_alamat` text,
  PRIMARY KEY (`bidan_id`),
  KEY `fk_relationship_12` (`puskesmas_id`),
  CONSTRAINT `fk_relationship_12` FOREIGN KEY (`puskesmas_id`) REFERENCES `puskesmas` (`puskesmas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bidan` */

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `jadwal_id` int(11) NOT NULL AUTO_INCREMENT,
  `posyandu_id` int(11) DEFAULT NULL,
  `jadwal_bulan` varchar(4) NOT NULL,
  `jadwal_tahun` varchar(4) NOT NULL,
  `jadwal_tgl` date NOT NULL,
  `jadwal_waktu` time DEFAULT NULL,
  `jadwal_kegiatan` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`jadwal_id`),
  KEY `fk_relationship_10` (`posyandu_id`),
  CONSTRAINT `fk_relationship_10` FOREIGN KEY (`posyandu_id`) REFERENCES `posyandu` (`posyandu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `jadwal` */

insert  into `jadwal`(`jadwal_id`,`posyandu_id`,`jadwal_bulan`,`jadwal_tahun`,`jadwal_tgl`,`jadwal_waktu`,`jadwal_kegiatan`) values (1,2,'07','2018','2018-07-17','03:45:00','aee'),(2,2,'10','2018','1970-01-01','03:45:00','ab'),(3,2,'01','1970','1970-01-01','03:45:00','fd'),(4,2,'01','1970','1970-01-01','04:30:00','dw'),(5,1,'10','2018','2018-10-16','04:45:00','s'),(7,1,'10','2018','2018-10-30','05:00:00','d'),(8,1,'01','2018','2018-01-09','05:00:00','a');

/*Table structure for table `kader` */

DROP TABLE IF EXISTS `kader`;

CREATE TABLE `kader` (
  `kader_id` int(11) NOT NULL AUTO_INCREMENT,
  `posyandu_id` int(11) DEFAULT NULL,
  `kader_nama` varchar(100) NOT NULL,
  PRIMARY KEY (`kader_id`),
  KEY `fk_relationship_11` (`posyandu_id`),
  CONSTRAINT `fk_relationship_11` FOREIGN KEY (`posyandu_id`) REFERENCES `posyandu` (`posyandu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kader` */

insert  into `kader`(`kader_id`,`posyandu_id`,`kader_nama`) values (2,2,'Nama Kader 2');

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `kec_id` int(11) NOT NULL AUTO_INCREMENT,
  `kec_kode` varchar(8) DEFAULT NULL,
  `kec_nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `kecamatan` */

insert  into `kecamatan`(`kec_id`,`kec_kode`,`kec_nama`) values (1,'3273090','Buahbatu');

/*Table structure for table `kelurahan` */

DROP TABLE IF EXISTS `kelurahan`;

CREATE TABLE `kelurahan` (
  `kel_id` int(11) NOT NULL AUTO_INCREMENT,
  `kec_id` int(11) DEFAULT NULL,
  `kel_kode` varchar(8) DEFAULT NULL,
  `kel_nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kel_id`),
  KEY `fk_relationship_7` (`kec_id`),
  CONSTRAINT `fk_relationship_7` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`kec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kelurahan` */

insert  into `kelurahan`(`kel_id`,`kec_id`,`kel_kode`,`kel_nama`) values (1,1,'32730900','CIJAURA2'),(2,1,'32730900','MARGASARI'),(3,1,'32730900','SEKEJATI');

/*Table structure for table `kematian` */

DROP TABLE IF EXISTS `kematian`;

CREATE TABLE `kematian` (
  `kematian_id` int(11) DEFAULT NULL,
  `balita_id` int(11) DEFAULT NULL,
  `kematian_tgl` date DEFAULT NULL,
  `kematian_usia` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kematian` */

insert  into `kematian`(`kematian_id`,`balita_id`,`kematian_tgl`,`kematian_usia`) values (NULL,1,'2018-11-23','6');

/*Table structure for table `map_bahan` */

DROP TABLE IF EXISTS `map_bahan`;

CREATE TABLE `map_bahan` (
  `no` varchar(2) DEFAULT NULL,
  `bahan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `map_bahan` */

insert  into `map_bahan`(`no`,`bahan`) values ('1','KMS'),('2','Oralit'),('3','Vitamin A Baru'),('4','Vitamin A Merah');

/*Table structure for table `map_gizi` */

DROP TABLE IF EXISTS `map_gizi`;

CREATE TABLE `map_gizi` (
  `no` varchar(2) DEFAULT NULL,
  `gizi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `map_gizi` */

insert  into `map_gizi`(`no`,`gizi`) values ('1','Lebih'),('2','Baik'),('3','Kurang'),('4','Buruk');

/*Table structure for table `map_kegiatan` */

DROP TABLE IF EXISTS `map_kegiatan`;

CREATE TABLE `map_kegiatan` (
  `no` varchar(2) DEFAULT NULL,
  `uraian` text,
  `ket` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `map_kegiatan` */

insert  into `map_kegiatan`(`no`,`uraian`,`ket`) values ('01','Jumlah semua balita yang ada di kelompok penimbangan bulan ini','(S)'),('02','Jumlah balita yang terdaftar dan mempunyai KMS bulan ini','(K)'),('03','Jumlah balita yang naik berat badannya bulan ini','(N)'),('04','Jumlah balita yang tidak naik berat badannya bulan ini','(T)'),('05','Jumlah balita yang ditimbang bulan ini tetapi tidak ditimbang pada bulan lalu','(O)'),('06','Jumlah balita yang baru pertama kali hadir di penimbangan bulan ini','(B)'),('07','Jumlah balita yang ditimbang bulan ini ( N + T + O + B )','(D)'),('08','Jumlah balita yang tidak hadir di penimbangan pada bulan ini ( S - D )','(-)'),('09','Jumlah balita yang menerima vitamin A bulan ini','(A)'),('10','Jumlah Bayi umur ( 0-6 bln ) dengan ASI Eksklusif','E0-6'),('11','Jumlah Bayi umur ( 6 bln ) yang lulus ASI eksklusif','E6'),('12','Jumlah Balita Gakin',NULL);

/*Table structure for table `pengukuran` */

DROP TABLE IF EXISTS `pengukuran`;

CREATE TABLE `pengukuran` (
  `ukur_id` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_id` int(11) DEFAULT NULL,
  `balita_id` int(11) DEFAULT NULL,
  `ukur_usia` tinyint(4) DEFAULT NULL,
  `ukur_bb` float DEFAULT NULL,
  `ukur_tb` tinyint(4) DEFAULT NULL,
  `ukur_cara_ukur_tb` tinyint(4) DEFAULT NULL,
  `ukur_vitamin` char(1) DEFAULT NULL,
  `ukur_pmt_sts` char(1) DEFAULT NULL,
  `ukur_pmt_uraian` text,
  `ukur_catatan` text,
  `ukur_status_gizi` char(1) DEFAULT NULL,
  PRIMARY KEY (`ukur_id`),
  KEY `fk_relationship_1` (`balita_id`),
  KEY `fk_relationship_4` (`jadwal_id`),
  CONSTRAINT `fk_relationship_1` FOREIGN KEY (`balita_id`) REFERENCES `balita` (`balita_id`),
  CONSTRAINT `fk_relationship_4` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`jadwal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `pengukuran` */

insert  into `pengukuran`(`ukur_id`,`jadwal_id`,`balita_id`,`ukur_usia`,`ukur_bb`,`ukur_tb`,`ukur_cara_ukur_tb`,`ukur_vitamin`,`ukur_pmt_sts`,`ukur_pmt_uraian`,`ukur_catatan`,`ukur_status_gizi`) values (6,1,1,6,8,55,0,'v','B','urai','catatan','s');

/*Table structure for table `pmt` */

DROP TABLE IF EXISTS `pmt`;

CREATE TABLE `pmt` (
  `pmt_id` int(11) NOT NULL AUTO_INCREMENT,
  `balita_id` int(11) DEFAULT NULL,
  `ukur_id` int(11) DEFAULT NULL,
  `pmt_tgl_awal` date NOT NULL,
  `pmt_tgl_akhir` date NOT NULL,
  PRIMARY KEY (`pmt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pmt` */

/*Table structure for table `posyandu` */

DROP TABLE IF EXISTS `posyandu`;

CREATE TABLE `posyandu` (
  `posyandu_id` int(11) NOT NULL AUTO_INCREMENT,
  `kel_id` int(11) DEFAULT NULL,
  `puskesmas_id` int(11) DEFAULT NULL,
  `posyandu_nama` varchar(100) NOT NULL,
  `posyandu_alamat` text,
  `posyandu_rt` char(3) DEFAULT NULL,
  `posyandu_rw` char(3) DEFAULT NULL,
  PRIMARY KEY (`posyandu_id`),
  KEY `fk_relationship_15` (`kel_id`),
  KEY `fk_relationship_9` (`puskesmas_id`),
  CONSTRAINT `fk_relationship_15` FOREIGN KEY (`kel_id`) REFERENCES `kelurahan` (`kel_id`),
  CONSTRAINT `fk_relationship_9` FOREIGN KEY (`puskesmas_id`) REFERENCES `puskesmas` (`puskesmas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `posyandu` */

insert  into `posyandu`(`posyandu_id`,`kel_id`,`puskesmas_id`,`posyandu_nama`,`posyandu_alamat`,`posyandu_rt`,`posyandu_rw`) values (1,1,1,'Posyandu RW I','Jl. Pluto No. 90','004','001'),(2,1,2,'Posyandu RW III','Jl. Saturnus No. 78','002','003'),(4,1,2,'Biru','Jl. Saturnus No. 71','002','001'),(5,3,3,'Merah','Jl. Pluto No. 92','002','003'),(7,1,1,'qwe','qwer','2','3');

/*Table structure for table `puskesmas` */

DROP TABLE IF EXISTS `puskesmas`;

CREATE TABLE `puskesmas` (
  `puskesmas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kec_id` int(11) DEFAULT NULL,
  `puskesmas_nama` longtext,
  PRIMARY KEY (`puskesmas_id`),
  KEY `fk_relationship_13` (`kec_id`),
  CONSTRAINT `fk_relationship_13` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`kec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `puskesmas` */

insert  into `puskesmas`(`puskesmas_id`,`kec_id`,`puskesmas_nama`) values (1,1,'UPT MARGAHAYU RAYA2'),(2,1,'SEKEJATI'),(3,1,'Mawar Merah'),(4,1,'Jingga');

/*Table structure for table `timbang` */

DROP TABLE IF EXISTS `timbang`;

CREATE TABLE `timbang` (
  `balita_id` int(11) DEFAULT NULL,
  `timbang_id` int(11) NOT NULL AUTO_INCREMENT,
  `timbang_tgl` date DEFAULT NULL,
  KEY `timbang_id` (`timbang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `timbang` */

insert  into `timbang`(`balita_id`,`timbang_id`,`timbang_tgl`) values (1,1,'2018-11-12');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `name` varchar(50) NOT NULL,
  `level` varchar(2) NOT NULL COMMENT '1: Dinkes, 2:Puskesmas, 3:Posyandu',
  PRIMARY KEY (`ID`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`ID`,`id_user`,`username`,`password`,`status`,`name`,`level`) values (1,0,'admin','21232f297a57a5a743894a0e4a801fc3','Y','Ali','1'),(2,1,'puskesmas','62c6e242d0e465524d998b4bba153b3b','Y','Anggi','2'),(3,1,'posyandu','cc267064b7018c98a0b09f7556fa8dc9','Y','Susan','3'),(4,3,'mawar','bd117502364227fd8c09098d31e11313','Y','Mawar Merah','2'),(5,4,'jingga','1f08ce2f4af61ccee8fe9b52cd8428df','Y','Jingga','2'),(7,4,'biru','bffc68f8f0052cc5b8e0affaa651acb5','Y','Biru','3'),(8,5,'merah','10586f5a4bb968d3ab8e952e3cd9afe7','Y','Merah','3'),(9,5,'admin','21232f297a57a5a743894a0e4a801fc3','Y','qweqwe','2'),(10,6,'admin','21232f297a57a5a743894a0e4a801fc3','Y','q','3'),(11,7,'admin','21232f297a57a5a743894a0e4a801fc3','Y','qwe','3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
