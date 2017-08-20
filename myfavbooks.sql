SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `myfavbooks`
--

CREATE TABLE `myfavbooks` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(75) NOT NULL,
  `author` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

