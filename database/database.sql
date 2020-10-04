SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema database
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8 ;
USE `database` ;

-- -----------------------------------------------------
-- Table `database`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database`.`aluno` (
  `idaluno` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `sobrenome` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idaluno`),
  UNIQUE INDEX `idaluno_UNIQUE` (`idaluno` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database`.`curso` (
  `idcurso` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(140) NOT NULL,
  `cargahoraria` INT NOT NULL,
  PRIMARY KEY (`idcurso`),
  UNIQUE INDEX `idcurso_UNIQUE` (`idcurso` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `database`.`cursoaluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database`.`cursoaluno` (
  `curso_idcurso` INT NOT NULL,
  `aluno_idaluno` INT NOT NULL,
  PRIMARY KEY (`curso_idcurso`, `aluno_idaluno`),
  INDEX `fk_curso_has_aluno_aluno1_idx` (`aluno_idaluno` ASC) VISIBLE,
  INDEX `fk_curso_has_aluno_curso_idx` (`curso_idcurso` ASC) VISIBLE,
  CONSTRAINT `fk_curso_has_aluno_curso`
    FOREIGN KEY (`curso_idcurso`)
    REFERENCES `database`.`curso` (`idcurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_has_aluno_aluno1`
    FOREIGN KEY (`aluno_idaluno`)
    REFERENCES `database`.`aluno` (`idaluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
