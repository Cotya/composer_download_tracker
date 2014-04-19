CREATE TABLE `downloads` (
  `packagename` VARCHAR(255) NOT NULL,
  `version` VARCHAR(100) NOT NULL,
  `date` DATE NOT NULL,
  `counter` BIGINT NULL,
  PRIMARY KEY (`packagename`, `version`, `date`));
