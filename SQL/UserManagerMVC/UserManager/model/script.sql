
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE user_manager;



--
--

-- --------------------------------------------------------

--
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
--

INSERT INTO `user` (`id`, `name`, `email`,`password`,`role`) VALUES
(1, 'Huy HoÃ ng', 'huyhoang@gmail.com','698d51a19d8a121ce581499d7b701668','Admin'),
(2, 'Giang', 'test@gmail.com','698d51a19d8a121ce581499d7b701668','User');;
--
--
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
--
--
--
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

