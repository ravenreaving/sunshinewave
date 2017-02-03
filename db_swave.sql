/*
SQLyog Community v12.4.0 (64 bit)
MySQL - 10.1.19-MariaDB : Database - db_swave
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_swave` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_swave`;

/*Table structure for table `tb_add_rates` */

DROP TABLE IF EXISTS `tb_add_rates`;

CREATE TABLE `tb_add_rates` (
  `adid` int(11) NOT NULL AUTO_INCREMENT,
  `adname` varchar(50) DEFAULT NULL,
  `adtype` int(11) DEFAULT NULL,
  `adprice` double DEFAULT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_add_rates` */

insert  into `tb_add_rates`(`adid`,`adname`,`adtype`,`adprice`) values 
(1,'Wedding Cake',1,500),
(2,'Chocolate Fountain',11,300),
(3,'Balloons',11,200),
(4,'Tarpaulin',11,300),
(5,'Birthday Cake',2,300),
(6,'Sound Sytem',11,3000),
(7,'Lights Effect',11,2000);

/*Table structure for table `tb_city` */

DROP TABLE IF EXISTS `tb_city`;

CREATE TABLE `tb_city` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  `district` text,
  PRIMARY KEY (`cityid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tb_city` */

insert  into `tb_city`(`cityid`,`cname`,`district`) values 
(1,'Cordon',NULL),
(2,'Dinapigue',NULL),
(3,'Echague',NULL),
(4,'Jones',NULL),
(5,'Ramon',NULL),
(6,'San Agustin',NULL),
(7,'San Isidro',NULL),
(8,'Santiago City',NULL),
(9,'Alicia',NULL),
(10,'Angadanan',NULL),
(11,'Cabatuan',NULL),
(12,'Cauayan City',NULL),
(13,'Luna',NULL),
(14,'Reina Mercedes',NULL),
(15,'San Guillermo',NULL),
(16,'San Mateo',NULL),
(17,'Isabela','Province');

/*Table structure for table `tb_contactus` */

DROP TABLE IF EXISTS `tb_contactus`;

CREATE TABLE `tb_contactus` (
  `con_id` int(11) NOT NULL,
  `con_addr` varchar(255) DEFAULT NULL,
  `con_numb` varchar(255) DEFAULT NULL,
  `con_fb` varchar(255) DEFAULT NULL,
  `con_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_contactus` */

insert  into `tb_contactus`(`con_id`,`con_addr`,`con_numb`,`con_fb`,`con_email`) values 
(1,'Reyes St. Patul Road Santiago City','09159872998','https://www.facebook.com/norie.gabuat/?fref=ts','noriegabuat@yahoo.com ZZ');

/*Table structure for table `tb_event_res` */

DROP TABLE IF EXISTS `tb_event_res`;

CREATE TABLE `tb_event_res` (
  `resid` int(11) NOT NULL AUTO_INCREMENT,
  `guest_id` int(11) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`resid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_event_res` */

insert  into `tb_event_res`(`resid`,`guest_id`,`startDate`,`startTime`,`endTime`,`status`) values 
(1,2,'2016-10-28','07:00:00','11:00:00','Pending'),
(2,2,'2016-10-30','07:00:00','11:00:00',NULL),
(3,2,'2016-11-02','13:00:00','17:00:00',NULL),
(4,2,'2017-04-04','07:00:00','11:00:00',NULL),
(5,2,'2017-11-15','07:00:00','11:00:00',NULL);

/*Table structure for table `tb_foodtype` */

DROP TABLE IF EXISTS `tb_foodtype`;

CREATE TABLE `tb_foodtype` (
  `ftypeid` int(11) NOT NULL AUTO_INCREMENT,
  `ftypename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ftypeid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_foodtype` */

insert  into `tb_foodtype`(`ftypeid`,`ftypename`) values 
(1,'vegetable'),
(2,'pork'),
(3,'fish'),
(4,'beef'),
(5,'dessert'),
(6,'rice'),
(7,'drinks'),
(8,'chicken');

/*Table structure for table `tb_gallery` */

DROP TABLE IF EXISTS `tb_gallery`;

CREATE TABLE `tb_gallery` (
  `picid` int(11) NOT NULL AUTO_INCREMENT,
  `picurl` tinytext,
  `picname` varchar(255) DEFAULT NULL,
  `pictype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`picid`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=latin1;

/*Data for the table `tb_gallery` */

insert  into `tb_gallery`(`picid`,`picurl`,`picname`,`pictype`) values 
(1,'uploads/featured/f1.jpg','Reception','featured'),
(2,'uploads/featured/f2.jpg','Table Design','featured'),
(3,'uploads/featured/f3.jpg','Debut','featured'),
(4,'uploads/featured/f4.jpg','Lights Effect','featured'),
(5,'uploads/featured/f5.jpg','Garden Wedding','featured'),
(6,'uploads/featured/f6.jpg','Groom and Bride Stand','featured'),
(7,'uploads/featured/f7.jpg','Wedding Cake','featured'),
(8,'uploads/featured/f8.jpg','Cupcake Stand','featured'),
(156,'uploads/gallery/03-10-2016-18-16-40-1005906_1033682190006344_3108125611289034509_n.jpg','Thanks Giving Party','Any Occasion'),
(157,'uploads/gallery/03-10-2016-18-16-40-1453265_1033682346672995_6906295218694482901_n.jpg','Thanks Giving Party','Any Occasion'),
(158,'uploads/gallery/03-10-2016-18-16-40-1934385_1033682260006337_4840683180715342279_n.jpg','Thanks Giving Party','Any Occasion'),
(159,'uploads/gallery/03-10-2016-18-18-04-13094155_1119710221403540_3225151490969516791_n.jpg','Well And Rej','Wedding'),
(160,'uploads/gallery/03-10-2016-18-18-04-13151662_1119710278070201_2085962251588556302_n.jpg','Well And Rej','Wedding'),
(161,'uploads/gallery/03-10-2016-18-18-04-13177153_1119710341403528_8573010676303795983_n.jpg','Well And Rej','Wedding'),
(162,'uploads/gallery/03-10-2016-18-18-04-13177841_1119710198070209_80334049443702413_n.jpg','Well And Rej','Wedding'),
(163,'uploads/gallery/03-10-2016-18-18-04-13178681_1119710304736865_1650034516410407934_n.jpg','Well And Rej','Wedding'),
(164,'uploads/gallery/03-10-2016-18-18-04-13178789_1119710248070204_1511764345151650951_n.jpg','Well And Rej','Wedding'),
(165,'uploads/gallery/03-10-2016-22-33-46-c.jpg','Craig Timothy Birthday','Birthday'),
(166,'uploads/gallery/03-10-2016-22-33-46-c2.jpg','Craig Timothy Birthday','Birthday'),
(167,'uploads/gallery/03-10-2016-22-33-46-c3.jpg','Craig Timothy Birthday','Birthday'),
(168,'uploads/gallery/03-10-2016-22-33-46-c4.jpg','Craig Timothy Birthday','Birthday'),
(169,'uploads/gallery/03-10-2016-22-33-46-c5.jpg','Craig Timothy Birthday','Birthday'),
(170,'uploads/gallery/03-10-2016-22-33-46-c6.jpg','Craig Timothy Birthday','Birthday'),
(171,'uploads/gallery/03-10-2016-22-33-46-c7.jpg','Craig Timothy Birthday','Birthday'),
(172,'uploads/gallery/03-10-2016-22-37-45-rec.jpg','Wedding Reception','Reception'),
(173,'uploads/gallery/03-10-2016-22-37-45-rec1.jpg','Wedding Reception','Reception'),
(174,'uploads/gallery/03-10-2016-22-37-45-rec2.jpg','Wedding Reception','Reception'),
(175,'uploads/gallery/03-10-2016-22-37-45-rec3.jpg','Wedding Reception','Reception'),
(176,'uploads/gallery/03-10-2016-22-37-45-rec4.jpg','Wedding Reception','Reception'),
(177,'uploads/gallery/04-10-2016-00-17-37-943835_1033688123339084_4997308293138963900_n.jpg','Wedding Pretty and ','Wedding'),
(178,'uploads/gallery/04-10-2016-00-17-38-996756_1033687646672465_1167030859140739664_n.jpg','Wedding Pretty and ','Wedding');

/*Table structure for table `tb_guest` */

DROP TABLE IF EXISTS `tb_guest`;

CREATE TABLE `tb_guest` (
  `guestid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `pword` tinytext,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `street` text,
  `city` text,
  `contact` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`guestid`,`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_guest` */

insert  into `tb_guest`(`guestid`,`uname`,`pword`,`fname`,`lname`,`street`,`city`,`contact`) values 
(1,'raven.reaving','46cacaef3aaf6aa419dadd0ef99daad6a1e6af47','Ronald','Pablo','Blk 14 Lot. 8 Glenzen St. Greenland Homes Subd. Plaridel','Santiago City','09359888007'),
(2,'joyce','bf6c9482ce636dbfda2f480e6037d048ddd6c509','Joyce','Villanueva','Dubinan East','Santiago City','123456789');

/*Table structure for table `tb_homeservices` */

DROP TABLE IF EXISTS `tb_homeservices`;

CREATE TABLE `tb_homeservices` (
  `homeid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text,
  PRIMARY KEY (`homeid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_homeservices` */

insert  into `tb_homeservices`(`homeid`,`type`,`title`,`details`) values 
(1,'Special Offers','Function Hall','The Function Hall is the Specialty of Sunshine Wave Resort where you can suggest your own theme and own design and manage the event   '),
(2,'Special Offers','Sunshine Wave Suites','The Hotel Area of Sunshine Wave that you can use for overnight events and overnight outings'),
(3,'Special Offers','Garden Venue','Garden Venue is usually where the wedding is taking part of.'),
(4,'Our Services','Catering Service','Sunshine Wave also does catering services for outside events.'),
(5,'Our Services','Cake','Cake for Weddings,Birthday,Debut or Any events from Sunshine Wave Partner.'),
(6,'Our Services','Restaurant','Restaurant that serves special menus everyday.'),
(7,NULL,NULL,NULL);

/*Table structure for table `tb_homespec` */

DROP TABLE IF EXISTS `tb_homespec`;

CREATE TABLE `tb_homespec` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `stitle` varchar(255) DEFAULT NULL,
  `spercent` int(11) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_homespec` */

insert  into `tb_homespec`(`sid`,`stitle`,`spercent`) values 
(1,'Function Hall',99),
(2,'Garden Venue',85),
(3,'Resort',75),
(4,'Catering Service',75),
(5,'Sunshine Wave Hotel',65);

/*Table structure for table `tb_menu_primary_dish` */

DROP TABLE IF EXISTS `tb_menu_primary_dish`;

CREATE TABLE `tb_menu_primary_dish` (
  `menuid` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(50) DEFAULT NULL,
  `f_typeid` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`menuid`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

/*Data for the table `tb_menu_primary_dish` */

insert  into `tb_menu_primary_dish`(`menuid`,`menuname`,`f_typeid`,`price`) values 
(1,'Beef with Broccoli',4,50),
(3,'Chicken Teryaki',8,50),
(4,'\"MAPO \" Tofu',1,20),
(6,'Buko Pandan Salad',5,30),
(17,'Fish Fillet with Taosi',3,30),
(18,'Pork Pastel de Lengua',2,50),
(19,'Chicken Nuggets',8,50),
(20,'Chopsuey',1,20),
(22,'Fruit Salad',5,30),
(23,'Korean Beef',4,50),
(24,'Breaded Pork Chop',2,50),
(25,'Chicken Cordon Bleu',8,50),
(26,'Buttered Veg with Quail Egg',1,20),
(32,'Fruit Cocktail with Lychee',5,30),
(33,'Beef Caldereta',4,50),
(34,'Pork Hamonado',2,50),
(35,'Chicken Lollipop',8,50),
(36,'Braised Beef',4,50),
(37,'Pork Spicy Ribs',2,50),
(38,'Chicken Pastel',8,50),
(39,'Macaroni Salad',5,30),
(40,'Leche Flan',5,30),
(48,'Fish Fillet with Oyster Sauce',3,30),
(49,'Pork Barbecue',2,50);

/*Table structure for table `tb_menu_secondary_dish` */

DROP TABLE IF EXISTS `tb_menu_secondary_dish`;

CREATE TABLE `tb_menu_secondary_dish` (
  `addid` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(50) DEFAULT NULL,
  `f_typeid` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`addid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_menu_secondary_dish` */

insert  into `tb_menu_secondary_dish`(`addid`,`menuname`,`f_typeid`,`price`) values 
(1,'Mineral Water',7,0),
(2,'Iced Tea',7,0),
(3,'Minced Beef Fried Rice',6,15),
(4,'Salted Fish Fried Rice',6,15),
(5,'Yangchow Fried Rice',6,15),
(6,'Plain Rice',6,0);

/*Table structure for table `tb_packages` */

DROP TABLE IF EXISTS `tb_packages`;

CREATE TABLE `tb_packages` (
  `packid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT NULL,
  `pvenue` text,
  `typeid` int(11) DEFAULT NULL,
  `pperhead` double DEFAULT NULL,
  `minpax` int(11) DEFAULT NULL,
  `maxpax` int(11) DEFAULT NULL,
  `cater` int(11) DEFAULT NULL,
  `amenities` text,
  `freebies` text,
  `imageurl` text,
  PRIMARY KEY (`packid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tb_packages` */

insert  into `tb_packages`(`packid`,`pname`,`pvenue`,`typeid`,`pperhead`,`minpax`,`maxpax`,`cater`,`amenities`,`freebies`,`imageurl`) values 
(9,'Package 1','Garden Venue / Function Hall',1,300,30,300,6,'Complete Setup w/ Red Carpet<br>\r\nLights Effect<br>\r\nSound System<br>\r\nBuffet table with attractive centerpiece <br>\r\nRound table dressed with floor length <br>\r\nChair with floor length seat covers <br>\r\nUse of complete set of dinnerware,flatwares and glassware <br>\r\nPurified Drinking Water and ice for the drinks <br>\r\nTrained and Uniform waiters and buffet attendant to cater. <br>','Free Use Of Swimming Pool <br>\r\nFree Entrance <br>\r\n1 Dorm Room \"Fully Airconditioned\"','uploads/packages/xpack.png'),
(10,'Package 2','Function Hall',2,200,40,300,6,'Complete Setup<br>\r\nLights Effect<br>\r\nSound System<br>\r\nBuffet table with attractive centerpiece <br>\r\nRound table dressed with floor length <br>\r\nChair with floor length seat covers <br>\r\nUse of complete set of dinnerware,flatwares and glassware <br>\r\nPurified Drinking Water and ice for the drinks <br>\r\nTrained and Uniform waiters and buffet attendant to cater. <br>\r\n','Free Use Of Swimming Pool <br>\r\nFree Entrance <br>\r\n1 Family Room \"Fully Airconditioned\"','uploads/packages/xpack.png'),
(11,'Package 3','Function Hall',5,200,40,300,6,'Complete Setup<br>\r\nLights Effect<br>\r\nSound System<br>\r\nBuffet table with attractive centerpiece <br>\r\nRound table dressed with floor length <br>\r\nChair with floor length seat covers <br>\r\nUse of complete set of dinnerware,flatwares and glassware <br>\r\nPurified Drinking Water and ice for the drinks <br>\r\nTrained and Uniform waiters and buffet attendant to cater. <br>','Free Use Of Swimming Pool <br>\r\nFree Entrance <br>\r\n1 Dorm Room \"Fully Airconditioned\"','uploads/packages/xpack.png'),
(12,'Package 4','Function Hall',3,150,50,300,6,'Complete Setup<br>\r\nLights Effect<br>\r\nSound System<br>\r\nBuffet table with attractive centerpiece <br>\r\nRound table dressed with floor length <br>\r\nChair with floor length seat covers <br>\r\nUse of complete set of dinnerware,flatwares and glassware <br>\r\nPurified Drinking Water and ice for the drinks <br>\r\nTrained and Uniform waiters and buffet attendant to cater. <br>','Free Use Of Swimming Pool <br>\r\nFree Entrance <br>\r\n1 Dorm Room \"Fully Airconditioned\"','uploads/packages/xpack.png');

/*Table structure for table `tb_packtype` */

DROP TABLE IF EXISTS `tb_packtype`;

CREATE TABLE `tb_packtype` (
  `ptypeid` int(11) NOT NULL AUTO_INCREMENT,
  `ptypename` tinytext,
  PRIMARY KEY (`ptypeid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tb_packtype` */

insert  into `tb_packtype`(`ptypeid`,`ptypename`) values 
(1,'Wedding'),
(2,'Birthday'),
(3,'Seminar'),
(4,'Christening'),
(5,'Reception'),
(7,'Church Gathering'),
(8,'Christmas Party'),
(9,'Kids Party'),
(10,'Thanks Giving'),
(11,'Any Occassion');

/*Table structure for table `tb_paymentgate` */

DROP TABLE IF EXISTS `tb_paymentgate`;

CREATE TABLE `tb_paymentgate` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `payenable` int(11) DEFAULT NULL,
  `paygateway` varchar(255) DEFAULT NULL,
  `paytitle` varchar(255) DEFAULT NULL,
  `payaccinfo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_paymentgate` */

insert  into `tb_paymentgate`(`payid`,`payenable`,`paygateway`,`paytitle`,`payaccinfo`) values 
(1,1,'Paypal','Paypal','norie@paypal.com'),
(2,1,'Manual','Pay On Arrival','');

/*Table structure for table `tb_rates` */

DROP TABLE IF EXISTS `tb_rates`;

CREATE TABLE `tb_rates` (
  `rateid` int(11) NOT NULL AUTO_INCREMENT,
  `ratename` varchar(255) NOT NULL,
  `ratedesc` varchar(255) NOT NULL,
  `rateprice` double NOT NULL,
  PRIMARY KEY (`rateid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tb_rates` */

insert  into `tb_rates`(`rateid`,`ratename`,`ratedesc`,`rateprice`) values 
(1,'Swimming Entrance','Adult',80),
(2,'Swimming Entrance','Child',60),
(5,'Sound System','All Technical Sound Systems',3000),
(6,'Videoke','Karaoke and TV',300),
(12,'Regular Cottage','Good For 5 Person',200),
(13,'Family Cottage','Good For 15 Person',500),
(14,'Function Hall','For Any Occasion',5000),
(15,'Garden Venue','For Any Occasion',5000);

/*Table structure for table `tb_res_summary` */

DROP TABLE IF EXISTS `tb_res_summary`;

CREATE TABLE `tb_res_summary` (
  `sumid` int(11) NOT NULL AUTO_INCREMENT,
  `guest_id` int(11) DEFAULT NULL,
  `ref_code` text,
  `sum_evdate` date DEFAULT NULL,
  `sum_pax` int(11) DEFAULT NULL,
  `sum_main_dish` text,
  `sum_sec_dish` text,
  `sum_colortheme` varchar(30) DEFAULT NULL,
  `sum_request` text,
  `sum_freebies` text,
  `sum_extra_charges` double DEFAULT NULL,
  `sum_cater_total` double DEFAULT NULL,
  `sum_totalcharges` double DEFAULT NULL,
  PRIMARY KEY (`sumid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_res_summary` */

/*Table structure for table `tb_roomrates` */

DROP TABLE IF EXISTS `tb_roomrates`;

CREATE TABLE `tb_roomrates` (
  `rmrateid` int(11) NOT NULL AUTO_INCREMENT,
  `rmrateprice` double DEFAULT NULL,
  `rmratehrs` tinytext,
  PRIMARY KEY (`rmrateid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_roomrates` */

insert  into `tb_roomrates`(`rmrateid`,`rmrateprice`,`rmratehrs`) values 
(4,900,'Per 12 hrs'),
(5,1800,'Per Night');

/*Table structure for table `tb_rooms` */

DROP TABLE IF EXISTS `tb_rooms`;

CREATE TABLE `tb_rooms` (
  `roomid` int(11) NOT NULL AUTO_INCREMENT,
  `rmname` varchar(255) DEFAULT NULL,
  `rm_typeid` int(11) DEFAULT NULL,
  `rmrates` text,
  PRIMARY KEY (`roomid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_rooms` */

insert  into `tb_rooms`(`roomid`,`rmname`,`rm_typeid`,`rmrates`) values 
(2,'Single Room',1,'Php.1800.00 - 24 Hrs <br>\r\nPhp.900.00 - 12 Hrs <br>'),
(3,'Regular Room',2,'Php.1800.00 - 24 Hrs <br>\r\nPhp.900.00 - 12 Hrs <br>'),
(4,'Family Room',3,'Php.1800.00 - 24 Hrs <br>\r\nPhp.900.00 - 12 Hrs <br>'),
(6,'Dorm Room',4,'Php.1800.00 - 24 Hrs <br>\r\nPhp.900.00 - 12 Hrs <br>');

/*Table structure for table `tb_roomtypes` */

DROP TABLE IF EXISTS `tb_roomtypes`;

CREATE TABLE `tb_roomtypes` (
  `rmtypeid` int(11) NOT NULL AUTO_INCREMENT,
  `rmtypename` varchar(50) DEFAULT NULL,
  `amenities` text,
  `beds` text,
  `adults` int(11) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `NoRooms` int(11) DEFAULT NULL,
  `isOccupied` int(11) DEFAULT NULL,
  `isAvail` int(11) DEFAULT NULL,
  `imageurl` text,
  PRIMARY KEY (`rmtypeid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_roomtypes` */

insert  into `tb_roomtypes`(`rmtypeid`,`rmtypename`,`amenities`,`beds`,`adults`,`child`,`NoRooms`,`isOccupied`,`isAvail`,`imageurl`) values 
(1,'Single','Towel <br>\r\nBath towel <br>\r\nShampoo <br>\r\nConditioner <br> \r\nBody Soap <br>\r\nHand Soap Bottles <br>\r\nFully Airconditioned <br>','1 Single Bed',1,0,3,0,3,'uploads/rooms/single.jpg'),
(2,'Regular','Towel <br>\r\nBath towel <br>\r\nShampoo <br>\r\nConditioner <br>\r\nBody Soap <br>\r\nHand Soap Bottles <br>\r\nFully Airconditioned <br>','2 Single Bed',2,0,3,0,3,'uploads/rooms/2adult.jpg'),
(3,'Family','Towel <br>\r\nBath towel <br>\r\nShampoo  <br>\r\nConditioner <br>\r\nBody Soap <br>\r\nHand Soap Bottles <br>\r\nExtra Pillows <br>\r\nFully Airconditioned <br>\r\nTelevision <br>\r\nTable & Chairs','2 Double Beds',2,2,2,0,2,'uploads/rooms/goodfor4.jpg'),
(4,'Dorm','Towel <br>\r\nBath towel <br>\r\nShampoo  <br>\r\nConditioner <br>\r\nBody Soap <br>\r\nHand Soap Bottles <br>\r\nExtra Pillows <br>\r\nFully Airconditioned <br>\r\nTelevision <br>\r\nTable & Chairs <br>\r\nCabinet ','5 Big Double Deck Beds',10,5,1,0,1,'uploads/rooms/dormroom.jpg');

/*Table structure for table `tb_theme` */

DROP TABLE IF EXISTS `tb_theme`;

CREATE TABLE `tb_theme` (
  `themeid` int(11) NOT NULL AUTO_INCREMENT,
  `tcolor` varchar(50) DEFAULT NULL,
  `tprice` double DEFAULT NULL,
  PRIMARY KEY (`themeid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_theme` */

insert  into `tb_theme`(`themeid`,`tcolor`,`tprice`) values 
(1,'White',50),
(2,'Black',50),
(3,'Green',50),
(4,'Yellow',50),
(5,'Blue',50),
(6,'Pink',50),
(7,'Red',50);

/*Table structure for table `tb_time` */

DROP TABLE IF EXISTS `tb_time`;

CREATE TABLE `tb_time` (
  `timeid` int(11) NOT NULL AUTO_INCREMENT,
  `timestart` time DEFAULT NULL,
  `timeend` time DEFAULT NULL,
  PRIMARY KEY (`timeid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_time` */

insert  into `tb_time`(`timeid`,`timestart`,`timeend`) values 
(1,'07:00:00','11:00:00'),
(2,'13:00:00','17:00:00'),
(3,'19:00:00','23:00:00');

/*Table structure for table `tb_uploads` */

DROP TABLE IF EXISTS `tb_uploads`;

CREATE TABLE `tb_uploads` (
  `uploadid` int(11) NOT NULL AUTO_INCREMENT,
  `imageurl` text,
  PRIMARY KEY (`uploadid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_uploads` */

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `accid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `pword` varchar(255) DEFAULT NULL,
  `acctype` varchar(255) DEFAULT NULL,
  `emailadd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`accid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_users` */

insert  into `tb_users`(`accid`,`name`,`uname`,`pword`,`acctype`,`emailadd`) values 
(2,'Norie Gabuat','Norie Gabuat','46cacaef3aaf6aa419dadd0ef99daad6a1e6af47','Administrator','noriegabuat@yahoo.com'),
(3,'ADMIN','administrator','d033e22ae348aeb5660fc2140aec35850c4da997','Administrator','administrator@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
