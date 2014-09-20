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
-- Table `users_cv_education`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users_cv_education` ;

CREATE TABLE IF NOT EXISTS `users_cv_education` (
  `cv_edu_id` INT NOT NULL AUTO_INCREMENT,
  `level_of_education` VARCHAR(100) NOT NULL,
  `degree` VARCHAR(60) NOT NULL,
  `group` VARCHAR(60) NOT NULL,
  `institutions` TEXT NOT NULL,
  `passing_year` VARCHAR(20) NOT NULL,
  `duration` TINYTEXT NULL,
  `cgpa_result` VARCHAR(20) NULL,
  `achievement` TEXT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`cv_edu_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
