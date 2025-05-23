-- MySQL Script generated by MySQL Workbench
-- Mon Mar 18 00:05:39 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema FILM
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema FILM
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `FILM` DEFAULT CHARACTER SET utf8 ;
USE `FILM` ;

-- -----------------------------------------------------
-- Table `FILM`.`PICTURE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FILM`.`PICTURE` ;

CREATE TABLE IF NOT EXISTS `FILM`.`PICTURE` (
  `idPICTURE` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(45) NOT NULL,
  `PATH` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idPICTURE`),
  UNIQUE INDEX `idPICTURE_UNIQUE` (`idPICTURE` ASC)  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FILM`.`USER`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FILM`.`USER` ;

CREATE TABLE IF NOT EXISTS `FILM`.`USER` (
  `idUSER` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(45) NOT NULL,
  `SURNAME` VARCHAR(45) NOT NULL,
  `USERNAME` VARCHAR(80) NOT NULL,
  `PASSWORD` VARCHAR(120) NOT NULL,
  `PICTURE_idPICTURE` INT NOT NULL,
  PRIMARY KEY (`idUSER`, `PICTURE_idPICTURE`),
  UNIQUE INDEX `idUSER_UNIQUE` (`idUSER` ASC)  ,
  UNIQUE INDEX `USERNAME_UNIQUE` (`USERNAME` ASC)  ,
  INDEX `fk_USER_PICTURE1_idx` (`PICTURE_idPICTURE` ASC)  ,
  CONSTRAINT `fk_USER_PICTURE1`
    FOREIGN KEY (`PICTURE_idPICTURE`)
    REFERENCES `FILM`.`PICTURE` (`idPICTURE`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FILM`.`AUTHOR`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FILM`.`AUTHOR` ;

CREATE TABLE IF NOT EXISTS `FILM`.`AUTHOR` (
  `idAUTHOR` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(45) NOT NULL,
  `SURNAME` VARCHAR(45) NOT NULL,
  `AGE` INT NOT NULL,
  PRIMARY KEY (`idAUTHOR`),
  UNIQUE INDEX `idAUTHOR_UNIQUE` (`idAUTHOR` ASC)  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FILM`.`FILM`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FILM`.`FILM` ;

CREATE TABLE IF NOT EXISTS `FILM`.`FILM` (
  `idFILM` INT NOT NULL AUTO_INCREMENT,
  `TITLE` VARCHAR(45) NOT NULL,
  `LENGTH` TIME NOT NULL,
  `AUTHOR_idAUTHOR` INT NOT NULL,
  `PICTURE_idPICTURE` INT NOT NULL,
  PRIMARY KEY (`idFILM`, `PICTURE_idPICTURE`),
  UNIQUE INDEX `idFILM_UNIQUE` (`idFILM` ASC)  ,
  UNIQUE INDEX `TITLE_UNIQUE` (`TITLE` ASC)  ,
  INDEX `fk_FILM_AUTHOR_idx` (`AUTHOR_idAUTHOR` ASC)  ,
  INDEX `fk_FILM_PICTURE1_idx` (`PICTURE_idPICTURE` ASC)  ,
  CONSTRAINT `fk_FILM_AUTHOR`
    FOREIGN KEY (`AUTHOR_idAUTHOR`)
    REFERENCES `FILM`.`AUTHOR` (`idAUTHOR`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_FILM_PICTURE1`
    FOREIGN KEY (`PICTURE_idPICTURE`)
    REFERENCES `FILM`.`PICTURE` (`idPICTURE`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FILM`.`BORROW`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FILM`.`BORROW` ;

CREATE TABLE IF NOT EXISTS `FILM`.`BORROW` (
  `idBORROW` INT NOT NULL AUTO_INCREMENT,
  `BORROW_TIME` TIMESTAMP NOT NULL,
  `BORROW_RETURN` DATETIME NOT NULL,
  `FILM_idFILM` INT NOT NULL,
  `FILM_PICTURE_idPICTURE` INT NOT NULL,
  `USER_idUSER` INT NOT NULL,
  `USER_PICTURE_idPICTURE` INT NOT NULL,
  PRIMARY KEY (`idBORROW`, `FILM_idFILM`, `FILM_PICTURE_idPICTURE`, `USER_idUSER`, `USER_PICTURE_idPICTURE`),
  UNIQUE INDEX `idBORROW_UNIQUE` (`idBORROW` ASC)  ,
  INDEX `fk_BORROW_FILM1_idx` (`FILM_idFILM` ASC, `FILM_PICTURE_idPICTURE` ASC)  ,
  INDEX `fk_BORROW_USER1_idx` (`USER_idUSER` ASC, `USER_PICTURE_idPICTURE` ASC)  ,
  CONSTRAINT `fk_BORROW_FILM1`
    FOREIGN KEY (`FILM_idFILM` , `FILM_PICTURE_idPICTURE`)
    REFERENCES `FILM`.`FILM` (`idFILM` , `PICTURE_idPICTURE`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_BORROW_USER1`
    FOREIGN KEY (`USER_idUSER` , `USER_PICTURE_idPICTURE`)
    REFERENCES `FILM`.`USER` (`idUSER` , `PICTURE_idPICTURE`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FILM`.`GENRE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FILM`.`GENRE` ;

CREATE TABLE IF NOT EXISTS `FILM`.`GENRE` (
  `idGENRE` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idGENRE`),
  UNIQUE INDEX `idGENRE_UNIQUE` (`idGENRE` ASC)  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FILM`.`FILM_has_GENRE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FILM`.`FILM_has_GENRE` ;

CREATE TABLE IF NOT EXISTS `FILM`.`FILM_has_GENRE` (
  `FILM_idFILM` INT NOT NULL,
  `GENRE_idGENRE` INT NOT NULL,
  PRIMARY KEY (`FILM_idFILM`, `GENRE_idGENRE`),
  INDEX `fk_FILM_has_GENRE_GENRE1_idx` (`GENRE_idGENRE` ASC)  ,
  INDEX `fk_FILM_has_GENRE_FILM1_idx` (`FILM_idFILM` ASC)  ,
  CONSTRAINT `fk_FILM_has_GENRE_FILM1`
    FOREIGN KEY (`FILM_idFILM`)
    REFERENCES `FILM`.`FILM` (`idFILM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_FILM_has_GENRE_GENRE1`
    FOREIGN KEY (`GENRE_idGENRE`)
    REFERENCES `FILM`.`GENRE` (`idGENRE`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;



