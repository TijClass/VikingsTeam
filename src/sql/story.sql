CREATE TABLE `booking`.`story` (
`id` BIGINT NOT NULL AUTO_INCREMENT,
`imageURL` varchar(500) DEFAULT NULL,
`date` DATETIME NOT NULL,
`imageALT` varchar(20) NOT NULL DEFAULT '',
PRIMARY KEY (`id`)
);
