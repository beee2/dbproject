CREATE TABLE `test`.`gold_write` (
  `GOLD_wr_num` INT NOT NULL AUTO_INCREMENT COMMENT '고유번호' ,
  `GOLD_wr_id` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '글쓰기 아이디' ,
  `GOLD_wr_title` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '글쓰기 제목' ,
  `GOLD_wr_cont` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '글쓰기 내용' ,
  `GOLD_wr_hit` INT NOT NULL COMMENT '조회수' , PRIMARY KEY (`GOLD_wr_num`)) ENGINE = InnoDB;