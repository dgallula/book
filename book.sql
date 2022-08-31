CREATE database book;
use  book;

CREATE TABLE `book`.`photos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `folder` VARCHAR(245) NULL,
  `title` VARCHAR(245) NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
;

INSERT INTO `book`.`photos` (`folder`, `title`) VALUES
(' Belgium.jpg','Belgium' ),
(' Courchevelle.jpg','Courchevelle' ),
(' Jerusalem.jpg','Jerusalem' );

select * from photos;




