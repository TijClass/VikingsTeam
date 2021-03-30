CREATE TABLE `booking`.`gallery`(
    `imageId` BIGINT NOT NULL AUTO_INCREMENT,
    `imageAlt` VARCHAR(100) DEFAULT NULL,
    `imageUrl` VARCHAR(2308) NOT NULL,
    PRIMARY KEY (`imageId`)
);