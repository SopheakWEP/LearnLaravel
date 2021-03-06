-- MySQL Script generated by MySQL Workbench
-- Sun Nov 18 15:05:22 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sfms
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sfms
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sfms` DEFAULT CHARACTER SET utf8 ;
USE `sfms` ;

-- -----------------------------------------------------
-- Table `sfms`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`Users` (
  `u_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `firstname` VARCHAR(50) NOT NULL,
  `lastname` VARCHAR(50) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `email` VARCHAR(225) NULL,
  `phone` INT NULL,
  PRIMARY KEY (`u_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sfms`.`Revenue`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`Revenue` (
  `r_id` INT NOT NULL AUTO_INCREMENT,
  `work` DOUBLE NOT NULL,
  `freelance` DOUBLE NULL,
  `business` DOUBLE NULL,
  `date_create` DATE NULL,
  PRIMARY KEY (`r_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sfms`.`Saving`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`Saving` (
  `s_id` INT NOT NULL AUTO_INCREMENT,
  `m_amount` DOUBLE NOT NULL,
  `date_create` DATE NULL,
  PRIMARY KEY (`s_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sfms`.`food`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`food` (
  `f_id` INT NOT NULL AUTO_INCREMENT,
  `breakfast` DOUBLE NULL,
  `lunch` DOUBLE NULL,
  `dinner` DOUBLE NULL,
  `date_create` DATE NULL,
  PRIMARY KEY (`f_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sfms`.`cloths`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`cloths` (
  `idcloths` INT NOT NULL AUTO_INCREMENT,
  `kind` VARCHAR(50) NULL,
  `price` DOUBLE NULL,
  `description` VARCHAR(225) NULL,
  `c_img` VARCHAR(100) NULL,
  `date_create` DATE NULL,
  PRIMARY KEY (`idcloths`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sfms`.`monthly_pay`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`monthly_pay` (
  `idmonthly_pay` INT NOT NULL AUTO_INCREMENT,
  `house` DOUBLE NULL,
  `ele_water` DOUBLE NULL,
  `date_create` DATE NULL,
  PRIMARY KEY (`idmonthly_pay`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sfms`.`necessary_thing`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`necessary_thing` (
  `idnecessary_thing` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NULL,
  `price` DOUBLE NULL,
  `decription` VARCHAR(255) NULL,
  `date_create` DATE NULL,
  PRIMARY KEY (`idnecessary_thing`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sfms`.`load_borrow`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`load_borrow` (
  `idload_borrow` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `amount` DOUBLE NOT NULL,
  `status` VARCHAR(45) NOT NULL COMMENT 'loan or borrow',
  `description` VARCHAR(225) NULL,
  PRIMARY KEY (`idload_borrow`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sfms`.`stuff_owner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sfms`.`stuff_owner` (
  `idstuff_owner` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NULL,
  `description` VARCHAR(225) NULL,
  `amount` INT NULL COMMENT 'stuff owner. existing stuff already buy or get from someone',
  PRIMARY KEY (`idstuff_owner`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
