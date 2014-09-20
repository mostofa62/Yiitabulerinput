SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema walletmi_cv
-- -----------------------------------------------------


-- -----------------------------------------------------
-- Table `users_cv_work_experience`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users_cv_work_experience` ;

CREATE TABLE IF NOT EXISTS `users_cv_work_experience` (
  `cv_work_exp_id` INT NOT NULL AUTO_INCREMENT,
  `company_organization` VARCHAR(100) NOT NULL,
  `company_business` VARCHAR(100) NOT NULL,
  `company_location` TINYTEXT NULL,
  `title_designation` VARCHAR(50) NOT NULL,
  `job_type` VARCHAR(60) NOT NULL,
  `start_date` VARCHAR(45) NOT NULL,
  `end_date` VARCHAR(45) NOT NULL,
  `job_description` TEXT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`cv_work_exp_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `users_cv_reference`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users_cv_reference` ;

CREATE TABLE IF NOT EXISTS `users_cv_reference` (
  `cv_ref_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NOT NULL,
  `organization` VARCHAR(100) NOT NULL,
  `designation` VARCHAR(65) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone_mobile` VARCHAR(15) NOT NULL,
  `relation` VARCHAR(45) NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`cv_ref_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
