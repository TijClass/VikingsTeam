CREATE TABLE `booking`.`newsletter` (
`id` BIGINT NOT NULL AUTO_INCREMENT,
`email` varchar(255) DEFAULT NULL,
`date` DATETIME NOT NULL,
`ip` varchar(20) NOT NULL DEFAULT '',
PRIMARY KEY (`id`)
);
