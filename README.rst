SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; CREATE DATABASE IF NOT EXISTS images DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci; USE images;
DROP TABLE IF EXISTS images;
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
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);
 
 ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;
DROP TABLE IF EXISTS images_updated;
CREATE TABLE `images_updated` (
  `title` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `edtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `images_updated`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `images_updated`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;
