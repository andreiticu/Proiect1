SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteimage` (IN `idn` INT)  begin 
delete from images where id=idn;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getimage` (IN `intid` INT, OUT `sn` VARCHAR(30), OUT `sm` VARCHAR(30))  begin
select title,image
into sn,sm
from images
where id=intid;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertImage` (IN `st` VARCHAR(30), IN `si` VARCHAR(100))  begin 
insert into images.images(title,image) values (st,si);
end$$
DELIMITER ;
CREATE TABLE `images` (
  `id` int(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `images` (`id`, `title`, `image`) VALUES
(3, 'Crema de zahar ars', 'images/im8.jpg'),
(4, 'Avocado', './images/im9.jpg'),
(8, 'Vafe', './images/im7.jpg'),
(25, 'PuiUmplut', './images/47b0c4aafb3003070b1ca1cd485f2e4aPuiUmplut.jpg'),
(28, 'Pui la cuptor', './images/52951ad9c434957035abd275a86c1353Pui_la_cuptor.jpg');
CREATE TABLE `images_updated` (
  `title` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `edtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `images`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;
