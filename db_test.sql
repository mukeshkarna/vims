-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 08:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` varchar(5) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_desc` varchar(200) NOT NULL,
  `comment_date` datetime NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_desc`, `comment_date`, `post_id`, `user_name`) VALUES
(1, 'this is comment', '2018-03-29 00:00:00', 15, 'David'),
(2, 'this is comment for the hello post.', '0000-00-00 00:00:00', 12, 'Mukesh'),
(3, 'this is another comment for the hello post.', '2018-03-22 12:44:22', 12, 'Ramesh'),
(4, 'I cannot comment other i guess.', '0000-00-00 00:00:00', 15, 'Mukesh');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_desc` text NOT NULL,
  `post_tags` varchar(150) NOT NULL,
  `post_date` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_desc`, `post_tags`, `post_date`, `user_id`) VALUES
(10, 'Post 1', 'This is first post. ', '#post ', '2018-03-18 12:49:18', 12),
(11, 'Cement', 'Hello everyone. this is second post fro1500', '#second_post #post_by_me OPC', '0000-00-00 00:00:00', 11),
(12, 'hello', 'this is sample post', '#hello', '2018-03-10 10:51:10', 11),
(14, 'Post New', 'This is first post. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type spec', '#post #lorem_ipsum', '0000-00-00 00:00:00', 11),
(15, 'Doloremque atque non placeat consequat Dolor', 'Doloremque do dolorem aut numquam ex dolor nisi aut quibusdam eum irureAliquip consequuntur ut culpa mollitia repellendus Dolor dolores consequat Dolorem et quis consequat Corrupti porro molestiae animi repellendus Accusamus sedDoloremque atque non placea', '#sample_post', '2018-03-24 05:08:24', 11),
(16, 'Attacks on 4G LTE networks could send fake emergen', 'Ten new and nine prior attacks were outlined in a paper, including the authentication relay attack, which enables an adversary to connect to core networks without the necessary credentials. This allows the adversary to impersonate and fake the location of a victim device, according to researchers from Purdue University and the University of Iowa.\r\n\r\nAnother noteworthy attack allows adversaries to obtain a user\'s location information and perform denial of service attacks. By hijacking the device\'s paging channel, the attacker can stop notifications from coming in and even fabricate messages.\r\n\r\nOther attacks identified in the paper enable adversaries to send fake emergency paging messages to a large number of devices, drain a victim device\'s battery by forcing it to perform expensive cryptographic operations, and disconnect a device from the core network.\r\n\r\nThese attacks occur within three critical procedures of the 4G LTE protocol: attach, detach and paging. These processes allow a user to connect to the network, disconnect from the network, and receive calls and messages. These procedures are also critical to the reliable functionality of several other procedures.\r\n\r\nThe researchers used a testing approach they call \"LTEInspector\" to expose the vulnerabilities. The tool combines the power of a symbolic model checker and a protocol verifier.\r\n\r\n\"Our tool is the first one that provides a systematic analysis for these three particular procedures in 4G LTE networks,\" said Syed Hussain, a graduate student in computer science at Purdue University. \"Combining the strength of these two tools is novel in the context of 4G LTE.\"\r\n\r\nTo confirm that the attacks identified in the paper pose a real threat, the researchers validated eight of the 10 new attacks through experimentation in a real testbed.\r\n\r\nIt looks as though there is no easy way to fix these vulnerabilities. Retrospectively adding security into an existing system without breaking backward compatibility often yields Band-Aid like solutions, which don\'t hold up under extreme circumstances, according to the paper. Addressing the authentication relay attacks may require a major infrastructural overhaul.\r\n\r\n\"Device manufacturers and cell phone networks will both need to work to fix these problems,\" Hussain said. \"We need a major overhaul of the entire system to eliminate these vulnerabilities.\"\r\n\r\nResearchers from Purdue and the University of Iowa collaborated on this work. It was supported by Intel/CERIAS RAship, FFTF fellowship by Schlumberger Foundation, National Science Foundation (NSF) grants CNS-1657124 and CNS-1719369, and the NSF/Intel ICN-WEN program.', '#Tech_news', '2018-03-14 12:10:14', 13),
(17, 'Billion euro cyber-suspect arrested in Spain', 'A cyber-crime mastermind suspected of stealing about £870m (€1bn) has been arrested in Spain.\r\n\r\nThe individual is alleged to be the head of the organised crime gang that ran the Carbanak and Cobalt malware campaigns that targeted banks.\r\n\r\nEuropol said the group had been active since 2013 and infiltrated more than 100 banks in that time.\r\n\r\nCash was siphoned off via bank transfers or dispensed automatically through cash machines.\r\nLuxury goods\r\n\r\nThe arrest was a \"significant success\" against a top cyber-crime group, Steven Wilson, head of Europol\'s Cyber-Crime Centre (EC3), which co-ordinated the long-running, cross-border investigation into the group. said in a statement.\r\n\r\n\"The arrest of the key figure in this crime group illustrates that cyber-criminals can no longer hide behind perceived international anonymity,\" he said.\r\n\r\nThe cyber-thieves got their malware on to bank networks by sending key staff booby-trapped phishing emails, said Europol. The gang used three separate generations of malware, each one more sophisticated than the last, to penetrate and then lurk on financial networks.\r\n\r\nOnce the machines of key staff were compromised, the gang used their remote access to banking networks to steal money in several different ways.\r\ncash machines were ordered to remotely dispense money at specific times - letting mules and other gang members scoop up the notes inter-bank money transfer systems were instructed to move cash into criminal account  databases were altered to increase account balances. Mules then removed the money via cash machines\r\n\r\nMoney was laundered via crypto-currencies and payment cards, which were used to buy luxury goods including cars and houses.\r\n\r\nEuropol, the FBI, cyber-security firms and polices forces in Spain, Romania, Belarus and Taiwan all collaborated to track down the gang, said the European policing agency. ', '#Facebook', '2018-03-04 01:44:04', 13);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `reply_desc` varchar(255) NOT NULL,
  `reply_date` datetime NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `reply_desc`, `reply_date`, `comment_id`) VALUES
(1, 'gjggubiig', '2018-03-13 06:06:13', 1),
(2, 'No any one can comment', '0000-00-00 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'visitor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `password`, `email`, `role_id`) VALUES
(3, 'mukesh karna', '123456', 'mukesh@gmail.com', 1),
(5, 'mkk', 'qwerty', 'mkk@gmail.com', 2),
(11, 'admin', 'admin', 'admin@admin.com', 1),
(12, 'aasish', 'user@123', 'aasish@gmail.com', 2),
(13, 'Mukesh kr Karna', '123456@qwerty', 'mukesh.karna@sagarmatha.edu.np', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `fk_replies_1_idx` (`comment_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id_idx` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `fk_replies_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
