-- MySQL dump 10.13  Distrib 5.1.37, for Win32 (ia32)
--
-- Host: localhost    Database: ruserba
-- ------------------------------------------------------
-- Server version	5.1.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `creditcard`
--

DROP TABLE IF EXISTS `creditcard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `creditcard` (
  `number` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  KEY `username` (`username`),
  CONSTRAINT `creditcard_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditcard`
--

LOCK TABLES `creditcard` WRITE;
/*!40000 ALTER TABLE `creditcard` DISABLE KEYS */;
INSERT INTO `creditcard` VALUES ('1234567890123456','Test1','12/2013','');
/*!40000 ALTER TABLE `creditcard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Gelatinous Milk','This milk has been mixed with gelatin, making it gelatinous (don\'t worry about health risk though, because it is pasteurized).',5000,10,3,'Dairy','http://victoriabelanger.files.wordpress.com/2011/12/green-milk-tea-jello.jpg'),(2,'Longevity Cheese','This particular cheese has been mixed with an organic material to ensure that anyone (or anything) that eats it will be blessed with longevity.',10000,15,12,'Dairy','http://worldnewscurator.com/wp-content/uploads/2012/12/Roquefort_cheese-300x239.jpg'),(3,'Rainbow Butter','This is one of those unique kinds of butter that will change its color to the opposite of its surface (amazing, right?).',3500,12,8,'Dairy','http://blog.foodnetwork.com/healthyeats/files/2009/03/butter_lg.jpg'),(4,'Nutrient Yogurt','This yogurt contains everything that you need to consume in a day (although it won\'t make you full).',6500,69,184,'Dairy','http://www.healthyeating.org/portals/0/Gallery/Album/Milk-Dairy/MD_cup-of-yogurt.png'),(5,'Jack-o\'-Pumpkin','If you don\'t have time to craft pumpkins for Halloween, fear not! This pumpkin will craft itself into a Jack-o\'-lantern.\r\nWarning : Only use it on your cooking on days other than  Halloween day. You have been warned.',11500,43,20,'Fruit','http://blogs.scientificamerican.com/food-matters/2013/10/08/pumpkin-smell/'),(6,'Starfruit','This is literally a star fruit. Make sure that you don\'t keep it in the open so that it doesn\'t go out into the sky. It tastes divine though!',5000,62,31,'Fruit','http://cdn2-blog.hwtm.com/wp-content/uploads/2007/07/starfruit_2.jpg'),(7,'Annoying Orange','This orange will emit a strange sound that definitely will annoy you, hence the name.',6666,32,10,'Fruit','http://i.ytimg.com/vi/ZN5PoW7_kdA/0.jpg'),(8,'Truth and Lie Apple','This unique apple will make you always tell truth when you eat one side, and will always make you lie when you eat the other side.',9500,30,51,'Fruit','http://theappleyouwerefed.files.wordpress.com/2013/04/j0400616.jpg'),(9,'Popeye Spinach','Most people that were born on late 20th century should know about this. This particular spinach will increase your energy by an amazing 1000%!',10000,164,100,'Vegetable','http://science.kukuchew.com/wp-content/uploads/2011/02/popeye-spinach.jpg'),(10,'Peashooter','Plants vs. Zombies fans familiar with this? Like in the game, this will shoot a pea for you to cook (not to kill zombies, sorry...).',12000,251,56,'Vegetable','http://gadgetsin.com/uploads/2010/09/plants_vs_zombies_pea_shooter_plush_toy_2.jpg'),(11,'Cornpop','Don\'t be startled when you cook this, because it will turn into a popcorn in an instant when cooked!',7500,45,72,'Vegetable','http://thimbleanna.com/images/2010/Food/Corn3.jpg'),(12,'Fishy Meat','This fish meat looks really fishy that you will think twice before using it to cook. It\'s actually edible though.',4000,12,2,'Meat','http://bargainez.com/deals/photos/300/fresh-fish-meat-and-more-at-artisan-meat-fish-in-granite-bay'),(13,'T-Bone Meat','This is a bone-in meat that looks like letter T... unnaturally. It tasted like other fantastic steaks though.',15000,20,43,'Meat','http://robertsboxedmeats.ca/wp-content/uploads/2012/04/tbone1.jpg'),(14,'Lame Meat','This particular lamb meat will make your cooking feel lame, no matter how good you do it...',13000,31,23,'Meat','http://thumbs.dreamstime.com/x/lamb-meat-11259417.jpg'),(15,'Curly Powder','This is actually a curry powder, but somehow... This powder will fuse into each other, making something like a long string.',8000,50,29,'Spice','http://www.asianfoodgrocer.com/img/prods/food/season/curry/01243_sb_curry_powder_lg.jpg'),(16,'Six-Spice Powder','This is actually five-spice powder that is mixed with another ingredient, which is... salt.',10500,64,38,'Spice','http://www.violey.com/images/produkte/500x500s/4021269041357.jpg'),(17,'Negative Powder','Another unique powder. This one will always reverse the taste of a cooking. In other words : Use this ONLY in a REALLY, REALLY, BAD cooking, which will make it taste fantastic (health risk not gone though...).',12500,86,89,'Spice','http://chasingdelicious.com/wp-content/uploads/2011/09/White-Spice-Cupcakes-2.jpg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` text NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Berisi user ruserba';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('','','','','',' ','','',''),('akbarsyam','akbarsya','Akbar Syam','akbar@syam.com','08xxxxxx','jalan xxx ','xxx','xxx','xxx');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-28 12:46:41
