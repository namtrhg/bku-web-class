CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );

 CREATE TABLE IF NOT EXISTS `products` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `product_name` varchar(50) NOT NULL,
 `price` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
 );

