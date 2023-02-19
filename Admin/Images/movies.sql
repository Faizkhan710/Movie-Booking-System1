-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 02:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `m_description` text NOT NULL,
  `m_trailer` varchar(50) DEFAULT NULL,
  `m_type` varchar(50) DEFAULT NULL,
  `m_writer` varchar(50) DEFAULT NULL,
  `m_director` varchar(50) DEFAULT NULL,
  `m_release_date` date DEFAULT NULL,
  `m_language` varchar(50) DEFAULT NULL,
  `m_image` text DEFAULT NULL,
  `m_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `m_description`, `m_trailer`, `m_type`, `m_writer`, `m_director`, `m_release_date`, `m_language`, `m_image`, `m_created`) VALUES
(10, 'WAKANDA FOREVER', ' Black Panther: Wakanda Forever is a 2022 American superhero film based on the Marvel Comics character Black Panther. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures it is the sequel to Black Panther (2018) and the 30th film in the Marvel Cinematic Universe (MCU). Directed by Ryan Coogler, who co-wrote the screenplay with Joe Robert Cole. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Joe Robert Cole', 'Ryan Coogler', '2022-10-26', 'English', '', '2022-11-28 13:51:10'),
(11, 'WAKANDA FOREVER', ' Christopher Markus (born January 2, 1970) and Stephen McFeely (born February 24, 1970) are American screenwriters and producers. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Michael Waldron', 'Sam Raimi', '2022-05-02', 'English', '', '2022-11-28 13:51:10'),
(12, 'WAKANDA FOREVER', ' No Time to Die is a 2021 spy film and the twenty-fifth in the James Bond series produced by Eon Productions, starring Daniel Craig in his fifth and final portrayal of fictional British MI6 agent James Bond. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Neal Purvis', 'Cary Joji Fukunaga', '2021-09-28', 'English', '', '2022-11-28 13:51:10'),
(13, 'WAKANDA FOREVER', ' RRR[a] is a 2022 Indian Telugu-language epic action drama film directed by S. S. Rajamouli, who co-wrote the film with V. Vijayendra Prasad.  ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'D. V. V. Danayya', 'S. S. Rajamouli', '2022-03-25', 'Hindi', '', '2022-11-28 13:51:10'),
(14, 'WAKANDA FOREVER', ' Bhool Bhulaiyaa 2 (transl. Labyrinth 2) is a 2022 Indian Hindi-language comedy horror film directed by Anees Bazmee, written by Aakash Kaushik and Farhad Samji. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Aakash Kaushik', 'Anees Bazmee', '2022-05-20', 'Hindi', '', '2022-11-28 13:51:10'),
(15, 'WAKANDA FOREVER', ' Ek Villain Returns is a 2022 Indian Hindi-language action thriller film[5][6] written and directed by Mohit Suri, being a standalone sequel to his 2014 film Ek Villain, and produced by T-Series and Balaji Motion Pictures.[7] It stars John Abraham, Arjun Kapoor, Disha Patani and Tara Sutaria. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Mohit Suri', 'Mohit Suri', '2022-07-29', 'Hindi', '', '2022-11-28 13:51:10'),
(16, 'WAKANDA FOREVER', ' Badhaai Do (transl. give the good news) is a 2022 Indian Hindi comedy drama film depicting a couple in a lavender marriage. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', ' Suman Adhikary', 'Harshavardhan Kulkarni', '2022-02-11', 'Hindi', '', '2022-11-28 13:51:10'),
(17, 'WAKANDA FOREVER', ' Wrong No. (also written as Wrong Number) is a 2015 Pakistani romantic comedy film[1] directed by Yasir Nawaz[2] and co-produced by Yasir Nawaz, Nida Yasir and Hassan Zia under the production banner YNH Films.[3] ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Yasir Nawaz', 'Yasir Nawaz', '2015-07-18', 'Urdu', '', '2022-11-28 13:51:10'),
(18, 'WAKANDA FOREVER', ' The Legend of Maula Jatt is a 2022 Pakistani Punjabi-language action drama film directed and written by Bilal Lashari. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Nasir Adeeb', 'Bilal Lashari', '2022-10-15', 'Urdu', '', '2022-11-28 13:51:10'),
(19, 'WAKANDA FOREVER', ' Sherdil (Urdu: شیر دل \"Lionheart\") is a 2019 Pakistani action film produced by NK Pictures. It is written and produced by Nomaan Khan, directed by Azfar Jafri, and stars Mikaal Zulfiqar, Hassan Niazi, Armeena Rana Khan and Sabeeka Imam.[2] The film revolves around Pakistan Air Force. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Nomaan Khan', 'Azfar Jafri', '2019-03-22', 'Urdu', '', '2022-11-28 13:51:10'),
(20, 'WAKANDA FOREVER', ' Mehrunisa V Lub U is a 2017 Pakistani romantic socio-comedy film written and directed by Yasir Nawaz.[3][4] The film was released on 26 June 2017.  ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Yasir Nawaz', 'Yasir Nawaz', '2017-06-26', 'Urdu', '', '2022-11-28 13:51:10'),
(21, 'WAKANDA FOREVER', ' Actor in Law is a 2016 Pakistani socio-comedy film directed by Nabeel Qureshi, co-written and produced by Fizza Ali Meerza along with Mehdi Ali. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Fizza Ali Meerza', 'Nabeel Qureshi', '2016-09-18', 'Urdu', '', '2022-11-28 13:51:10'),
(22, 'WAKANDA FOREVER', ' 3 Idiots is a 2009 Indian Hindi-language coming-of-age comedy-drama film written and directed by Rajkumar Hirani, co-written by Abhijat Joshi and produced by Vidhu Vinod Chopra.  ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Abhijat Joshi', 'Rajkumar Hirani', '2009-12-25', 'Hindi', '', '2022-11-28 13:51:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
