-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-29 02:17
-- 서버 버전: 10.4.16-MariaDB
-- PHP 버전: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `gold_qna`
--

CREATE TABLE `gold_qna` (
  `GOLD_QNA_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_QNA_id` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '글쓴이',
  `GOLD_QNA_tit` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `GOLD_QNA_con` text CHARACTER SET utf8 NOT NULL COMMENT '내용',
  `GOLD_QNA_reg` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '등록일',
  `GOLD_QNA_hit` int(11) NOT NULL COMMENT '조회수'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_qna`
--

INSERT INTO `gold_qna` (`GOLD_QNA_num`, `GOLD_QNA_id`, `GOLD_QNA_tit`, `GOLD_QNA_con`, `GOLD_QNA_reg`, `GOLD_QNA_hit`) VALUES
(1, 'beee2', 'qna1', 'test', '2021-01-25', 0),
(2, 'beee2', 'qna2', 'test', '2021-01-25', 0),
(3, 'beee2', 'qna3', 'asd', '2021-01-25', 0),
(4, 'beee2', 'qna4', 'asd', '2021-01-25', 0),
(5, 'beee2', 'qna5', 'asd', '2021-01-28', 1),
(6, 'beee2', 'qna6', 'asd', '2021-01-25', 0),
(7, 'beee2', 'qna7', 'asd', '2021-01-25', 0),
(8, 'beee2', 'qna8', 'asd', '2021-01-25', 0),
(9, 'beee2', 'qna9_update', 'asdfgwe', '2021-01-28', 4),
(10, 'beee2', 'qna10', 'asd', '2021-01-28', 7),
(11, 'beee2', 'qna11', 'asd', '2021-01-25', 1),
(12, 'beee2', 'qna12', 'asd', '2021-01-25', 1),
(13, 'beee2', '첫번째 게시글입니다.', '네이버 나눔글꼴의 지적 재산권은 네이버와 네이버문화재단에 있습니다.<br />\r\n네이버 나눔글꼴은 개인 및 기업 사용자를 포함한 모든 사용자에게 무료로 제공되며 자유롭게 수정하고 재배포하실 수 있습니다.<br />\r\n<br />\r\n단, 글꼴 자체를 유료로 판매하는 것은 금지하며 네이버 나눔글꼴은 본 저작권 안내와 라이선스 전문을 포함해서 다른 소프트웨어와 번들하거나 재배포 또는 판매가 가능합니다.', '2021-01-26', 5);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_qna`
--
ALTER TABLE `gold_qna`
  ADD PRIMARY KEY (`GOLD_QNA_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_qna`
--
ALTER TABLE `gold_qna`
  MODIFY `GOLD_QNA_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
