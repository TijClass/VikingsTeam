CREATE TABLE `booking`.`post`(
    `id` BIGINT NOT NULL AUTO_INCREMENT,
    `authorId` BIGINT NOT NULL,
    `parentId` BIGINT NULL DEFAULT NULL,
    `title` VARCHAR(75) NOT NULL,
    `summary` TINYTEXT NULL,
    `slug` VARCHAR(100) NOT NULL,
    `createdAt` DATETIME NOT NULL,
    `updatedAt` DATETIME NULL DEFAULT NULL,
    `publishedAt` DATETIME NULL DEFAULT NULL,
    `content` TEXT NULL DEFAULT NULL,
    `roomsnumber` INT(75) NOT NULL,
    `guestsnumber` INT(75) NOT NULL,
    `address` VARCHAR(250) NOT NULL,
    `price` INT(100) NOT NULL,
    `oldPrice` INT(100) NOT NULL,
    `offer` VARCHAR(75),
    `imageURL` VARCHAR(2083) NOT NULL,
    `imageALT` VARCHAR(100) NOT NULL,
    PRIMARY KEY(`id`),
    UNIQUE INDEX `uq_slug`(`slug` ASC),
    INDEX `idx_post_user`(`authorId` ASC),
    CONSTRAINT `fk_post_user` FOREIGN KEY(`authorId`) REFERENCES `booking`.`user`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
); ALTER TABLE
    `booking`.`post` ADD INDEX `idx_post_parent`(`parentId` ASC);
ALTER TABLE
    `booking`.`post` ADD CONSTRAINT `fk_post_parent` FOREIGN KEY(`parentId`) REFERENCES `booking`.`post`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;