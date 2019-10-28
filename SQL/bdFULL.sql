-- -----------------------------------------------------
-- Table `pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pais` (
  `idpais` INT NOT NULL AUTO_INCREMENT,
  `pais` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idpais`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estado` (
  `idestado` INT NOT NULL AUTO_INCREMENT,
  `estado` VARCHAR(45) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  `pais_idpais` INT NOT NULL,
  PRIMARY KEY (`idestado`),
  INDEX `fk_estado_pais1_idx` (`pais_idpais` ASC),
  CONSTRAINT `fk_estado_pais1`
    FOREIGN KEY (`pais_idpais`)
    REFERENCES `pais` (`idpais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade` (
  `idcidade` INT NOT NULL AUTO_INCREMENT,
  `cidade` VARCHAR(100) NOT NULL,
  `estado_idestado` INT NOT NULL,
  PRIMARY KEY (`idcidade`),
  INDEX `fk_cidade_estado1_idx` (`estado_idestado` ASC),
  CONSTRAINT `fk_cidade_estado1`
    FOREIGN KEY (`estado_idestado`)
    REFERENCES `estado` (`idestado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curriculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `curriculo` (
  `idcurriculo` INT NOT NULL AUTO_INCREMENT,
  `ac` CHAR(1) NOT NULL,
  `email` VARCHAR(80) NOT NULL,
  `senha` VARCHAR(12) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` CHAR(14) NOT NULL,
  `cep` CHAR(10) NOT NULL,
  `rua` VARCHAR(100) NOT NULL,
  `numero` INT NOT NULL,
  `complemento` VARCHAR(150) NULL,
  `telefone` VARCHAR(13) NOT NULL,
  `genero` CHAR(1) NOT NULL,
  `estadocivil` CHAR(1) NOT NULL,
  `deficiencia` INT NOT NULL,
  `cidade_idcidade` INT NOT NULL,
  PRIMARY KEY (`idcurriculo`),
  INDEX `fk_curriculo_cidade1_idx` (`cidade_idcidade` ASC),
  CONSTRAINT `fk_curriculo_cidade1`
    FOREIGN KEY (`cidade_idcidade`)
    REFERENCES `cidade` (`idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `idiomas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `idiomas` (
  `ididiomas` INT NOT NULL AUTO_INCREMENT,
  `idioma` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ididiomas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `idiomas_curriculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `idiomas_curriculo` (
  `ididiomas_curriculo` INT NOT NULL AUTO_INCREMENT,
  `idiomas_ididiomas` INT NULL,
  `curriculo_idcurriculo` INT NOT NULL,
  `nivel` VARCHAR(45) NULL,
  PRIMARY KEY (`ididiomas_curriculo`),
  INDEX `fk_idiomas_curriculo_curriculo1_idx` (`curriculo_idcurriculo` ASC),
  CONSTRAINT `fk_idiomas_curriculo_idiomas`
    FOREIGN KEY (`idiomas_ididiomas`)
    REFERENCES `idiomas` (`ididiomas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_idiomas_curriculo_curriculo1`
    FOREIGN KEY (`curriculo_idcurriculo`)
    REFERENCES `curriculo` (`idcurriculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cargos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cargos` (
  `idcargos` INT NOT NULL AUTO_INCREMENT,
  `cargo` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idcargos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `expProfissional`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `expProfissional` (
  `idexpProfissional` INT NOT NULL AUTO_INCREMENT,
  `empresa` VARCHAR(45) NULL,
  `inicio` DATE NULL,
  `termino` DATE NULL,
  `cargos_idcargos` INT NULL,
  `salario` INT NULL,
  `curriculo_idcurriculo` INT NULL,
  `pais_idpais` INT NULL,
  `cidade` VARCHAR(100) NULL,
  `estado_idestado` INT NULL,
  PRIMARY KEY (`idexpProfissional`),
  INDEX `fk_expProfissional_curriculo1_idx` (`curriculo_idcurriculo` ASC),
  INDEX `fk_expProfissional_pais1_idx` (`pais_idpais` ASC),
  INDEX `fk_expProfissional_estado1_idx` (`estado_idestado` ASC),
  INDEX `fk_expProfissional_cargos1_idx` (`cargos_idcargos` ASC),
  CONSTRAINT `fk_expProfissional_curriculo1`
    FOREIGN KEY (`curriculo_idcurriculo`)
    REFERENCES `curriculo` (`idcurriculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_expProfissional_pais1`
    FOREIGN KEY (`pais_idpais`)
    REFERENCES `pais` (`idpais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_expProfissional_estado1`
    FOREIGN KEY (`estado_idestado`)
    REFERENCES `estado` (`idestado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_expProfissional_cargos1`
    FOREIGN KEY (`cargos_idcargos`)
    REFERENCES `cargos` (`idcargos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `perguntas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `perguntas` (
  `idperguntas` INT NOT NULL AUTO_INCREMENT,
  `pergunta` VARCHAR(8000) NOT NULL,
  PRIMARY KEY (`idperguntas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `perguntas_curriculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `perguntas_curriculo` (
  `curriculo_idcurriculo` INT NOT NULL,
  `perguntas_idperguntas` INT NOT NULL,
  `resposta` VARCHAR(45) NOT NULL,
  INDEX `fk_perguntas_curriculo_curriculo1_idx` (`curriculo_idcurriculo` ASC),
  INDEX `fk_perguntas_curriculo_perguntas1_idx` (`perguntas_idperguntas` ASC),
  PRIMARY KEY (`curriculo_idcurriculo`, `perguntas_idperguntas`),
  CONSTRAINT `fk_perguntas_curriculo_curriculo1`
    FOREIGN KEY (`curriculo_idcurriculo`)
    REFERENCES `curriculo` (`idcurriculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_perguntas_curriculo_perguntas1`
    FOREIGN KEY (`perguntas_idperguntas`)
    REFERENCES `perguntas` (`idperguntas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresa` (
  `idempresa` INT NOT NULL AUTO_INCREMENT,
  `ac` CHAR(42) NOT NULL,
  `email` VARCHAR(80) NOT NULL,
  `senha` VARCHAR(12) NOT NULL,
  `nome` VARCHAR(150) NOT NULL,
  `rua` VARCHAR(100) NOT NULL,
  `numero` INT NOT NULL,
  `complemento` VARCHAR(150) NULL,
  `cnpj` VARCHAR(14) NULL,
  `cep` CHAR(8) NOT NULL,
  `ramoAtividade` VARCHAR(100) NOT NULL,
  `cidade_idcidade` INT NOT NULL,
  PRIMARY KEY (`idempresa`),
  INDEX `fk_empresa_cidade1_idx` (`cidade_idcidade` ASC),
  CONSTRAINT `fk_empresa_cidade1`
    FOREIGN KEY (`cidade_idcidade`)
    REFERENCES `cidade` (`idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nivel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nivel` (
  `idnivel` INT NOT NULL AUTO_INCREMENT,
  `nivel` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`idnivel`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` INT NOT NULL AUTO_INCREMENT,
  `curso` VARCHAR(80) NOT NULL,
  `nivel_idnivel` INT NOT NULL,
  PRIMARY KEY (`idcurso`),
  INDEX `fk_curso_nivel1_idx` (`nivel_idnivel` ASC),
  CONSTRAINT `fk_curso_nivel1`
    FOREIGN KEY (`nivel_idnivel`)
    REFERENCES `nivel` (`idnivel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curso_curriculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `curso_curriculo` (
  `idcurso_curriculo` INT NOT NULL AUTO_INCREMENT,
  `curso_idcurso` INT NOT NULL,
  `curriculo_idcurriculo` INT NOT NULL,
  `nomeInstituicao` VARCHAR(200) NULL,
  `inicio` DATE NULL,
  `termino` DATE NULL,
  `ead` CHAR(1) NULL,
  `pais_idpais` INT NULL,
  `cidade` VARCHAR(100) NULL,
  `estado_idestado` INT NULL,
  PRIMARY KEY (`idcurso_curriculo`),
  INDEX `fk_curso_curriculo_curso1_idx` (`curso_idcurso` ASC),
  INDEX `fk_curso_curriculo_curriculo1_idx` (`curriculo_idcurriculo` ASC),
  INDEX `fk_curso_curriculo_pais1_idx` (`pais_idpais` ASC),
  INDEX `fk_curso_curriculo_estado1_idx` (`estado_idestado` ASC),
  CONSTRAINT `fk_curso_curriculo_curso1`
    FOREIGN KEY (`curso_idcurso`)
    REFERENCES `curso` (`idcurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_curriculo_curriculo1`
    FOREIGN KEY (`curriculo_idcurriculo`)
    REFERENCES `curriculo` (`idcurriculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_curriculo_pais1`
    FOREIGN KEY (`pais_idpais`)
    REFERENCES `pais` (`idpais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_curriculo_estado1`
    FOREIGN KEY (`estado_idestado`)
    REFERENCES `estado` (`idestado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pretecao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pretecao` (
  `idpretecao` INT NOT NULL AUTO_INCREMENT,
  `visivel` CHAR(1) NOT NULL,
  `datapretencao` DATE NOT NULL,
  `jornada` CHAR(2) NOT NULL,
  `tipoContrato` CHAR(2) NOT NULL,
  `nivelHierarquicoMin` INT NOT NULL,
  `nivelHierarquicoMax` INT NOT NULL,
  `empregado` CHAR(1) NOT NULL,
  `pretencaosalarial` INT NOT NULL,
  `curriculo_idcurriculo` INT NOT NULL,
  PRIMARY KEY (`idpretecao`),
  INDEX `fk_pretecao_curriculo1_idx` (`curriculo_idcurriculo` ASC),
  CONSTRAINT `fk_pretecao_curriculo1`
    FOREIGN KEY (`curriculo_idcurriculo`)
    REFERENCES `curriculo` (`idcurriculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cargos_curriculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cargos_curriculo` (
  `cargos_idcargos` INT NOT NULL,
  `pretecao_idpretecao` INT NOT NULL,
  PRIMARY KEY (`cargos_idcargos`, `pretecao_idpretecao`),
  INDEX `fk_cargos_has_curriculo_cargos1_idx` (`cargos_idcargos` ASC),
  INDEX `fk_cargos_curriculo_pretecao1_idx` (`pretecao_idpretecao` ASC),
  CONSTRAINT `fk_cargos_has_curriculo_cargos1`
    FOREIGN KEY (`cargos_idcargos`)
    REFERENCES `cargos` (`idcargos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cargos_curriculo_pretecao1`
    FOREIGN KEY (`pretecao_idpretecao`)
    REFERENCES `pretecao` (`idpretecao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;