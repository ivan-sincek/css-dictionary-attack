-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema css_dictionary
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `css_dictionary` ;

-- -----------------------------------------------------
-- Schema css_dictionary
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `css_dictionary` DEFAULT CHARACTER SET utf8 ;
USE `css_dictionary` ;

-- -----------------------------------------------------
-- Table `css_dictionary`.`passwords`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `css_dictionary`.`passwords` ;

CREATE TABLE IF NOT EXISTS `css_dictionary`.`passwords` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ip` VARCHAR(50) NULL,
  `password` VARCHAR(50) NOT NULL,
  `date` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SET SQL_MODE = '';
DROP USER IF EXISTS css_admin@127.0.0.1;
SET SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
CREATE USER 'css_admin'@'127.0.0.1' IDENTIFIED BY 'cssdictionary';

GRANT ALL ON `css_dictionary`.* TO 'css_admin'@'127.0.0.1';
SET SQL_MODE = '';
DROP USER IF EXISTS css_admin@localhost;
SET SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
CREATE USER 'css_admin'@'localhost' IDENTIFIED BY 'cssdictionary';

GRANT ALL ON `css_dictionary`.* TO 'css_admin'@'localhost';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
