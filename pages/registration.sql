CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `your_name` varchar(256) NOT NULL,
  `your_email` varchar(256) NOT NULL,
  `comments` varchar(256) NOT NULL,
  
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`)
)