SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE `quizzer`;

--
-- Cơ sở dữ liệu: `quizzer`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 1, 0, '96'),
(2, 1, 1, '97'),
(3, 1, 0, '86'),
(4, 1, 0, '87'),
(5, 1, 0, '85'),
(6, 2, 0, '30'),
(7, 2, 0, '40'),
(8, 2, 0, '10'),
(9, 2, 0, '25'),
(10, 2, 1, '20'),
(11, 3, 0, '77'),
(12, 3, 0, '76'),
(13, 3, 1, '78'),
(14, 3, 0, '75'),
(15, 3, 0, '79'),
(16, 4, 1, '50'),
(17, 4, 0, '51'),
(18, 4, 0, '49'),
(19, 4, 0, '52'),
(20, 4, 0, '48'),
(21, 5, 0, '19'),
(22, 5, 0, '20'),
(23, 5, 0, '22'),
(24, 5, 1, '21'),
(25, 5, 0, '23'),
(26, 6, 0, '23'),
(27, 6, 1, '24'),
(28, 6, 0, '25'),
(29, 6, 0, '26'),
(30, 6, 0, '27'),
(31, 7, 1, '10'),
(32, 7, 0, '11'),
(33, 7, 0, '12'),
(34, 7, 0, '9'),
(35, 7, 0, '8'),
(36, 8, 0, '6'),
(37, 8, 1, '7'),
(38, 8, 0, '8'),
(39, 8, 0, '9'),
(40, 8, 0, '5'),
(41, 9, 0, '16'),
(42, 9, 0, '66'),
(43, 9, 0, '56'),
(44, 9, 1, '50'),
(45, 9, 0, '40'),
(46, 10, 0, '1'),
(47, 10, 0, '2'),
(48, 10, 0, '3'),
(49, 10, 0, '4'),
(50, 10, 1, '5'),
(51, 11, 0, '9'),
(52, 11, 1, '8'),
(53, 11, 0, '7'),
(54, 11, 0, '6'),
(55, 11, 0, '5'),
(56, 12, 0, '10'),
(57, 12, 0, '27'),
(58, 12, 1, '20'),
(59, 12, 0, '22'),
(60, 12, 0, '23'),
(61, 13, 0, '104'),
(62, 13, 1, '43'),
(63, 13, 0, '107'),
(64, 13, 0, '50'),
(65, 13, 0, '42'),
(66, 14, 0, '991'),
(67, 14, 0, '992'),
(68, 14, 1, '990'),
(69, 14, 0, '989'),
(70, 14, 0, '909'),
(71, 15, 1, '17'),
(72, 15, 0, '18'),
(73, 15, 0, '19'),
(74, 15, 0, '20'),
(75, 15, 0, '16'),
(76, 16, 0, '9 vÃ  3'),
(77, 16, 0, '12 vÃ  1'),
(78, 16, 0, '15 vÃ  5'),
(79, 16, 1, '6 vÃ  2'),
(80, 16, 0, '18 vÃ  6'),
(81, 17, 0, '1 thÃ¹ng 2 lÃ­t vÃ  2 thÃ¹ng 2 lÃ­t'),
(82, 17, 1, '2 thÃ¹ng 2 lÃ­t vÃ  1 thÃ¹ng 3 lÃ­t'),
(83, 17, 0, '1 thÃ¹ng 2 lÃ­t vÃ  1 thÃ¹ng 3 lÃ­t'),
(84, 17, 0, '1 thÃ¹ng 5 lÃ­t vÃ  1 thÃ¹ng 3 lÃ­t'),
(85, 17, 0, '1 thÃ¹ng 8 lÃ­t'),
(86, 18, 1, '81'),
(87, 18, 0, '82'),
(88, 18, 0, '83'),
(89, 18, 0, '9'),
(90, 18, 0, '10'),
(94, 19, 0, '96'),
(95, 19, 0, '90'),
(96, 19, 0, '100'),
(97, 19, 0, '94'),
(98, 19, 1, '93'),
(99, 20, 1, '2'),
(100, 20, 0, '3'),
(101, 20, 0, '4'),
(102, 20, 0, '5'),
(103, 20, 0, '6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, '57+40=?'),
(2, '? + 26 = 46'),
(3, '40+30+8=?'),
(4, '97-40-7=?'),
(5, '18cm + 8cm - 7cm= ? cm'),
(6, 'NhÃ  Nga cÃ³ 64 con gÃ  vÃ  vá»‹t, trong Ä‘Ã³ cÃ³ 40 con gÃ . Há»i nhÃ  Nga cÃ³ bao nhiÃªu con vá»‹t?'),
(7, 'CÃ³ bao nhiÃªu sá»‘ cÃ³ 1 chá»¯ sá»‘?'),
(8, 'Má»™t tuáº§n lá»… cÃ³ bao nhiÃªu ngÃ y?'),
(9, 'Náº¿u PhÃºc cÃ³ thÃªm 16 viÃªn bi thÃ¬ PhÃºc cÃ³ táº¥t cáº£ 66 viÃªn bi. Há»i PhÃºc cÃ³ bao nhiÃªu viÃªn bi?'),
(10, 'Cho cÃ¡c sá»‘ 0,10,20,30,40,50,60,70,80,90. CÃ³ bao nhiÃªu cÃ¡c cáº·p hai sá»‘ sao cho láº¥y sá»‘ lá»›n trá»« sá»‘ bÃ© báº±ng 50?'),
(11, 'CÃ³ má»™t sá»‘ dáº§u, náº¿u Ä‘á»±ng vÃ o cÃ¡c can má»—i can 4l thÃ¬ Ä‘Ãºng 6 can. Há»i sá»‘ dáº§u Ä‘Ã³ náº¿u Ä‘á»±ng vÃ o cÃ¡c can, má»—i can 3l thÃ¬ pháº£i dÃ¹ng táº¥t cáº£ bao nhiÃªu can?'),
(12, 'Mai cÃ³ 27 bÃ´ng hoa. Mai cho HoÃ  5 bÃ´ng hoa. HoÃ  láº¡i cho Há»“ng 3 bÃ´ng hoa. LÃºc nÃ y ba báº¡n Ä‘á»u cÃ³ sá»‘ hoa báº±ng nhau. Há»i lÃºc Ä‘áº§u HoÃ  cÃ³ bao nhiÃªu bÃ´ng hoa?'),
(13, 'Tá»« 57 Ä‘áº¿n 163 cÃ³ bao nhiÃªu sá»‘ cÃ³ hai chá»¯ sá»‘?'),
(14, 'HÃ£y tÃ¬m sá»‘ cÃ³ ba chá»¯ sá»‘ mÃ  hiá»‡u cá»§a chá»¯ sá»‘ hÃ ng trÄƒm vÃ  chá»¯ sá»‘ hÃ ng chá»¥c báº±ng 0, cÃ²n hiá»‡u cá»§a chá»¯ sá»‘ hÃ ng chá»¥c vÃ  chá»¯ sá»‘ hÃ ng Ä‘Æ¡n vá»‹ báº±ng 9.'),
(15, 'Tá»•ng lá»›n nháº¥t cá»§a hai sá»‘ khÃ¡c nhau cÃ³ má»™t chá»¯ sá»‘ lÃ  bao nhiÃªu?'),
(16, 'TÃ¬m 2 sá»‘ cÃ³ tÃ­ch báº±ng 12 vÃ  sá»‘ lá»›n gáº¥p 3 láº§n sá»‘ bÃ©?'),
(17, 'CÃ³ 8 lÃ­t dáº§u Ä‘á»±ng trong cÃ¡c loáº¡i thÃ¹ng loáº¡i 2 lÃ­t vÃ  loáº¡i 3 lÃ­t .Há»i má»—i loáº¡i cÃ³ máº¥y thÃ¹ng?'),
(18, 'Hai xe khÃ¡ch Ä‘i ngÆ°á»£c chiá»u nhau tá»« tá»‰nh A vÃ  tá»‰nh B ,gáº·p nhau táº¡i Ä‘iá»ƒm C. Chá»— hai xe gáº·p nhau cÃ¡ch tá»‰nh A 36 km vÃ  cÃ¡ch tá»‰nh B 45 km. Há»i 2 tá»‰nh A vÃ  B cÃ¡ch nhau bao nhiÃªu km?'),
(19, 'Tuá»•i cá»§a Bá»‘ hiá»‡n nay 35 tuá»•i, con lÃ  12 tuá»•i.TÃ­nh tá»•ng sá»‘ tuá»•i cá»§a con vÃ  bá»‘ khi con báº±ng tuá»•i bá»‘.'),
(20, 'Báº¡n Máº­n vá» quÃª thÄƒm bÃ . Báº¡n Máº­n Ä‘Æ°á»£c á»Ÿ vá»›i bÃ  vá»«a Ä‘Ãºng má»™t tuáº§n vÃ  6 ngÃ y. TÃ­nh ra báº¡n Máº­n chá»‰ á»Ÿ nhÃ  bÃ  cÃ³ 1 chá»§ nháº­t thÃ´i. Há»i báº¡n Máº­n Ä‘áº¿n nhÃ  bÃ  vÃ o thá»© máº¥y trong tuáº§n?');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;
