-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: webapp
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (20,'Бронислав Евгеньевич Бобылёв','Инженер-программист','2020-11-18',5867.00,560,'1662398385.png',NULL,'2022-09-07 08:41:08'),(24,'максике','Дворник','2022-08-02',5000.00,123,'1662398469.jpeg','2022-08-20 16:25:45','2022-09-05 14:21:09'),(43,'Харитонова Михаил Евгеньевич','И всякий.','1994-05-02',4779.00,300,'1662398475.jpeg',NULL,'2022-09-05 14:21:15'),(44,'Семён Алексеевич Баранова','В других.','2012-10-13',4371.00,138,'1662398481.jpeg',NULL,'2022-09-05 14:21:21'),(45,'Радислав Львович Петрова','Почему ж.','1988-10-17',3734.00,43,'1662398488.jpeg',NULL,'2022-09-05 14:21:28'),(46,'Михаил Дмитриевич Игнатов','Какие-то.','2020-02-12',3050.00,179,'1662398496.jpeg',NULL,'2022-09-05 14:21:36'),(47,'Степанов Рафаил Александрович','Да что ж.','1970-08-28',6253.00,33,NULL,NULL,NULL),(48,'Мельников Донат Андреевич','Отчего ж.','1980-10-15',5221.00,656,NULL,NULL,NULL),(49,'Витольд Дмитриевич Гришин','Франции?.','1995-03-16',2981.00,295,NULL,NULL,NULL),(50,'Григорий Максимович Крылова','Порфирий.','2021-07-16',7496.00,812,NULL,NULL,NULL),(51,'Жукова Альбина Романовна','Вот тебе.','1994-10-01',4294.00,517,NULL,NULL,NULL),(52,'Леонид Дмитриевич Колесникова','Особенно.','1978-01-04',6759.00,923,NULL,NULL,NULL),(54,'Боброваа Вероника Андреевна','Эх, если.','2021-07-08',8601.00,558,NULL,NULL,NULL),(56,'Комарова Мирослав Евгеньевич','И наврет.','1994-07-11',7292.00,327,NULL,NULL,NULL),(57,'Алла Евгеньевна Бирюковаа','А на что.','2013-01-01',5083.00,657,NULL,NULL,NULL),(58,'Марина Романовна Фёдорова','Что ж он.','2013-03-25',9828.00,578,NULL,NULL,NULL),(59,'Мельниковаа Софья Сергеевна','Приезжий.','1990-03-03',9960.00,945,NULL,NULL,NULL),(60,'Филиппова Никита Фёдорович','Ему даже.','2002-07-06',8648.00,302,NULL,NULL,NULL),(61,'Нонна Евгеньевна Комиссарова','На своих.','2017-01-10',6130.00,993,NULL,NULL,NULL),(62,'Майя Львовна Ефремоваа','Манилова.','2016-08-01',6401.00,975,NULL,NULL,NULL),(63,'Виктор Алексеевич Щукина','Зять еще.','1980-11-09',9981.00,358,NULL,NULL,NULL),(64,'Эльвира Львовна Богдановаа','При этом.','1977-02-12',6981.00,200,NULL,NULL,NULL),(65,'Дарья Александровна Ильинаа','У нас не.','1980-10-27',7640.00,256,NULL,NULL,NULL),(66,'Марта Дмитриевна Щукина','Нет, это.','1971-06-29',2339.00,438,NULL,NULL,NULL),(67,'Наталья Дмитриевна Князеваа','Все было.','2005-04-29',57.00,743,'1662549761.jpeg',NULL,'2022-09-07 08:22:41'),(68,'Ирина Фёдоровна Наумоваа','Он думал.','2020-05-31',8170.00,445,'1662549782.jpeg',NULL,'2022-09-07 08:23:02'),(69,'Ефимова Виталий Борисович','Старшему.','1979-06-02',8105.00,438,NULL,NULL,NULL),(70,'Кузнецова София Сергеевна','Он везде.','2007-03-11',1975.00,135,NULL,NULL,NULL),(71,'Надежда Алексеевна Жданова','Наружный.','1994-05-09',1515.00,935,NULL,NULL,NULL),(72,'Михеева Аким Иванович','Даже сам.','1994-02-20',8429.00,532,NULL,NULL,NULL),(73,'Виктор Дмитриевич Галкин','Отчего ж.','2021-10-13',4746.00,718,NULL,NULL,NULL),(74,'Сысоева Степан Максимович','В первую.','2010-01-29',181.00,179,NULL,NULL,NULL),(75,'Яковлев Прохор Андреевич','Долго бы.','1970-05-05',7527.00,69,NULL,NULL,NULL),(76,'Воробьёва Трофим Владимирович','На такое.','1975-01-13',8541.00,767,NULL,NULL,NULL),(77,'Фаина Алексеевна Дмитриеваа','Служи он.','1998-02-09',4766.00,568,NULL,NULL,NULL),(78,'Люся Владимировна Филиппова','Как жаль.','2005-07-02',6983.00,531,NULL,NULL,NULL),(79,'Дарья Романовна Никоноваа','Она была.','2002-08-07',1052.00,164,NULL,NULL,NULL),(80,'Суворова Нестор Иванович','Для этой.','1997-05-15',8848.00,933,NULL,NULL,NULL),(81,'Тамара Борисовна Дьячковаа','Нет, кто.','2015-09-15',2990.00,234,NULL,NULL,NULL),(82,'Жанна Сергеевна Исаева','Эх, отец.','1973-06-06',103.00,304,NULL,NULL,NULL),(84,'Ермаков Виталий Сергеевич','дворник','2022-08-28',1000.00,12,NULL,'2022-08-24 09:48:36','2022-08-24 09:48:36'),(85,'Ефимов Алексей Ардыкович','дворник','2016-06-11',1000.00,12,NULL,'2022-08-24 09:50:31','2022-08-24 09:50:31'),(89,'Berk Cruz','Laborum Tempora inc','1974-04-27',860.00,41,NULL,'2022-09-07 08:20:26','2022-09-07 08:20:26'),(90,'Cairo Carrillo','Sint sint exercita','2000-08-16',380.00,94,NULL,'2022-09-07 08:24:29','2022-09-07 08:24:29'),(91,'Garrison Owens','Ipsa sed porro est','2010-04-12',270.00,59,NULL,'2022-09-07 08:27:15','2022-09-07 08:27:15'),(92,'Amethyst Santos','Est excepturi solut','2001-02-18',713.00,19,'1662550236.jpeg','2022-09-07 08:30:36','2022-09-07 08:30:36'),(93,'Garrison Kim','Do ea maiores mollit','1992-05-16',850.00,45,'image.png','2022-09-07 08:32:45','2022-09-07 08:32:45'),(94,'Ava Mccall','Rerum labore asperna','2016-11-07',810.00,80,NULL,'2022-09-07 08:33:36','2022-09-07 08:33:36'),(95,'Mira Flowers','Nostrum suscipit dic','2020-10-15',300.00,66,'1662550549.jpeg','2022-09-07 08:35:49','2022-09-07 08:35:49'),(96,'Burton Morrow','Molestiae sit natus','1993-10-04',890.00,28,'1662550581.jpeg','2022-09-07 08:36:21','2022-09-07 08:36:21'),(97,'Burke Martin','Explicabo Quo eos','2004-01-12',900.00,1,NULL,'2022-09-07 08:49:13','2022-09-07 08:49:13');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_08_19_144853_create_employees_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'maxik','vopseviltu@vusra.com',NULL,'$2y$10$YmD/.g12Pak2wYwPSNebAOspXFYbkz65CkVqnnRb4pmbL4/ZVrQ5S',NULL,'2022-08-29 11:12:36','2022-09-07 11:26:33'),(2,'Maxim','persik150@mail.ru',NULL,'$2y$10$ZeZdG36AJQbIxItL2qOFBeiG1dWf5jXCjzyl5k2JoYv9XjVKCJPVq',NULL,'2022-08-29 11:20:17','2022-08-30 12:18:18'),(3,'maxim','postezokni@vusra.com',NULL,'$2y$10$LLx6LEQJOEb9vgCTIN7xvu59aMaM13ZOGHF.X1ad8YmyLByNwh9ES',NULL,'2022-09-04 16:06:51','2022-09-04 16:06:51'),(4,'Maxim','123@1.com',NULL,'$2y$10$wzjBMYLCd5OR8jjZ/vyJge68Y/JL8vpY1XEnHclofaI/kEQ/RaMn.',NULL,'2022-09-06 14:05:53','2022-09-07 09:16:13'),(5,'Maxim','test@gmail.com',NULL,'$2y$10$Guxi678bwyMkc7/bhMlVo.a6XkUSy2.oM4oKapjrIP50wwx2BgAC6',NULL,'2022-09-07 10:59:02','2022-09-07 12:58:42'),(6,'Noelle Mckay','test1@mail.ru',NULL,'$2y$10$14XZX9ojIdDGEKyv0anmcOaY.n4Wg955/sSQsMPLhEFie3w7uvjBm',NULL,'2022-09-07 14:52:54','2022-09-07 14:52:54'),(7,'Noelle Mckay','test3@gmail.com',NULL,'$2y$10$WNPWW7YihfTw30bef2eVOuhWao5PXj2Tq3Qz8ZGsmnczBopEB/mQe',NULL,'2022-09-07 14:56:51','2022-09-07 14:56:51'),(8,'test','test4@gmail.com',NULL,'$2y$10$lZBIbIkOb2beMnLzDB8i5O1UqsRdKoKhIa06A5P7XcQZmfxFawqu.',NULL,'2022-09-07 15:07:18','2022-09-07 15:07:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-07 21:43:00
