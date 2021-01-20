CREATE TABLE `.test`.`gold_app` (
  `GOLD_APP_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호',
  `GOLD_APP_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '상품이름',
  `GOLD_APP_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '시리얼넘버',
  `GOLD_APP_des` text CHARACTER SET utf8 NOT NULL COMMENT '상품설명',
  `GOLD_APP_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상세페이지 이미지',
  `GOLD_APP_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일 이미지',
  `GOLD_APP_cli` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '고객사 정보',
  `GOLD_APP_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;