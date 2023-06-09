-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2023 at 12:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_users`
--

CREATE TABLE `answers_users` (
  `id_answer_user` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_question` int(11) DEFAULT NULL,
  `id_quiz` int(11) DEFAULT NULL,
  `id_pass_quiz` int(11) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `answer_case` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers_users`
--

INSERT INTO `answers_users` (`id_answer_user`, `id_user`, `id_question`, `id_quiz`, `id_pass_quiz`, `answer`, `answer_case`) VALUES
(8921, 14, 49, 42, 106, 'pourquoi', 0),
(8922, 14, 50, 42, 106, 'entière.', 0),
(8923, 14, 51, 42, 106, 'ses', 0),
(8924, 14, 54, 42, 106, 'annonce', 0),
(8925, 14, 55, 42, 106, 'cliquer', 0),
(8926, 14, 56, 42, 106, 'bien que ', 0),
(8927, 14, 57, 42, 106, 'disparate', 1),
(8928, 14, 58, 42, 106, 'exergue', 0),
(8929, 14, 49, 42, 107, 'comment', 1),
(8930, 14, 50, 42, 107, 'complète.', 1),
(8931, 14, 51, 42, 107, 'leurs', 0),
(8932, 14, 52, 42, 107, 'avec', 0),
(8933, 14, 53, 42, 107, 'surprise', 0),
(8934, 14, 45, 14, 108, '333', 1),
(8935, 14, 46, 14, 108, '3333', 1),
(8936, 14, 48, 14, 108, '11111', 1),
(8937, 14, 43, 14, 111, '2', 0),
(8938, 14, 44, 14, 111, '22', 1),
(8939, 14, 45, 14, 111, '222', 0),
(8940, 14, 46, 14, 111, '2222', 0),
(8941, 14, 43, 14, 112, '1', 1),
(8942, 14, 44, 14, 112, '11', 0),
(8943, 14, 45, 14, 112, '111', 0),
(8944, 14, 48, 14, 113, '22222', 0),
(8945, 14, 43, 14, 114, '2', 0),
(8946, 14, 44, 14, 114, '22', 1),
(8947, 14, 45, 14, 114, '222', 0),
(8948, 14, 46, 14, 114, '2222', 0),
(8949, 14, 48, 14, 114, '22222', 0),
(8950, 14, 49, 42, 116, 'comment', 1),
(8951, 14, 50, 42, 116, 'entière.', 0),
(8952, 14, 53, 42, 116, 'déçue', 0),
(8953, 14, 56, 42, 116, 'bien que ', 0),
(8954, 14, 49, 42, 117, 'comment', 1),
(8955, 14, 50, 42, 117, 'entière.', 0),
(8956, 14, 51, 42, 117, 'leurs', 0),
(8957, 14, 52, 42, 117, 'avec', 0),
(8958, 14, 53, 42, 117, 'surprise', 0),
(8959, 14, 54, 42, 117, 'annonce', 0),
(8960, 14, 55, 42, 117, 'cliquer', 0),
(8961, 14, 56, 42, 117, 'afin que ', 0),
(8962, 14, 57, 42, 117, 'disparate', 1),
(8963, 14, 58, 42, 117, 'abyme', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pass_quiz`
--

CREATE TABLE `pass_quiz` (
  `id_pass` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_quiz` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pass_quiz`
--

INSERT INTO `pass_quiz` (`id_pass`, `id_user`, `id_quiz`, `date`, `note`) VALUES
(106, 14, 42, '2023-05-25', 1),
(107, 14, 42, '2023-05-25', 2),
(108, 14, 14, '2023-05-25', 3),
(109, 14, 14, '2023-05-25', 0),
(110, 14, 14, '2023-05-25', 0),
(111, 14, 14, '2023-05-26', 1),
(112, 14, 14, '2023-05-26', 1),
(113, 14, 14, '2023-05-26', 0),
(114, 14, 14, '2023-05-26', 1),
(115, 14, 42, '2023-05-26', 0),
(116, 14, 42, '2023-05-27', 1),
(117, 14, 42, '2023-05-27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `id_quiz` int(11) DEFAULT NULL,
  `title_question` text DEFAULT NULL,
  `ch1` text DEFAULT NULL,
  `ch2` text DEFAULT NULL,
  `ch3` text DEFAULT NULL,
  `ch4` text DEFAULT NULL,
  `answer` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_question`, `id_quiz`, `title_question`, `ch1`, `ch2`, `ch3`, `ch4`, `answer`) VALUES
(2, 1, 'question title2', '1', '2', '3', '4', 'ch3'),
(4, 2, 'question title1', '1', '2', '3', '4', 'ch1'),
(5, 2, 'question title2', '1', '2', '3', '4', 'ch3'),
(6, 2, 'question title3', '1', '2', '3', '4', 'ch4'),
(22, 23, 'gfh', 'dfgdf', 'dsfg', 'dsfg', 'dfs', 'ch3'),
(23, 23, '', '', '', '', '', 'ch1'),
(38, 34, 'question1', '111', '22', '333', '444', 'ch3'),
(43, 14, 'question1', '1', '2', '3', '4', '1'),
(44, 14, 'question11', '11', '22', '33', '33', '22'),
(45, 14, 'question111', '111', '222', '333', '444', '333'),
(46, 14, 'question1111', '1111', '2222', '3333', '3333', '3333'),
(48, 14, 'question11111', '11111', '22222', '33333', '44444', '11111'),
(49, 42, 'Je m’appelle Gian. Et toi, … … tu t’appelles ?﻿', 'comment', 'pourquoi', 'quand', 'quand', 'comment'),
(50, 42, 'Attention ! La séance de 18 heures pour le film « Folie douce » est… … Il reste des places pour la séance de 20 heures. Merci de votre compréhension.', 'complète.', 'entière.', 'nombreuse', 'nombreuse', 'complète.'),
(51, 42, 'Avec le programme « Jeunes d’Europe », finissez… … études à l’étranger.', 'leurs', 'mes', 'ses', 'ses', 'ses'),
(52, 42, 'Venez profiter des promotions ! Cette semaine, trois paquets de café… … le prix de deux !﻿', 'avec', 'par', 'pour', 'pour', 'pour'),
(53, 42, 'Salut Léa ! On va au cinéma ce soir ? J’attends les résultats de mon examen demain et je me sens vraiment… … J’ai besoin de sortir un peu ! Amélie', 'surprise', 'déçue', 'désolée', 'désolée', 'nerveuse'),
(54, 42, 'Cet après-midi, aussitôt après les déclarations de la direction à la presse, le syndicat… … son plan d’action que les employés attendent avec impatience.', 'annonçait', 'annonce', 'annoncera', 'annoncera', 'annoncera'),
(55, 42, 'Une fois votre document sélectionné, vous pouvez… … la clé USB sur le port prévu à cet effet afin d’enregistrer votre document. Aallumer Bcliquer Cinsérer Dtaper', 'allumer', 'cliquer', 'insérer', 'insérer', 'insérer'),
(56, 42, 'Nous continuons à marcher 2 h chaque jour… … nous sommes âgés maintenant.', 'afin que ', 'bien que ', 'même si ', 'même si ', 'même si '),
(57, 42, 'Les Français sont de plus en plus fous des tatouages. Hommes, femmes, jeunes ou moins jeunes, toutes les catégories sociales sont concernées par ce phénomène. Les boutiques accueillent une clientèle… … de plus en plus nombreuse.', 'analogue', 'disparate', 'dissemblable ', 'dissemblable ', 'disparate'),
(58, 42, 'Le nouveau président du parti demande à ses alliés de mettre en… … les querelles intestines, afin de créer une unité nouvelle et mettre fin aux rivalités internes.', 'abyme', 'exergue', 'garde', 'garde', 'sourdine');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title_quiz` varchar(255) DEFAULT NULL,
  `situation_quiz` int(11) DEFAULT NULL,
  `url_quiz` varchar(255) DEFAULT NULL,
  `quiz_duration` time DEFAULT NULL,
  `quiz_description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `id_user`, `title_quiz`, `situation_quiz`, `url_quiz`, `quiz_duration`, `quiz_description`, `image`) VALUES
(14, 14, 'test1', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=14', '00:01:00', 'description10', 'quiz1.png'),
(23, 16, 'tett', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=23', '05:05:00', 'dtt', 'quiz1.png'),
(42, 14, 'STRUCTURE DE LA LANGUE', 0, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=42', '00:05:00', 'hihihihih', 'tcf.png'),
(44, 14, 'dsd', 1, 'localhost/testing/PFE_V1/Layout/passQuiz.php?id=44', '00:00:00', 'dsd', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mp` varchar(255) DEFAULT NULL,
  `role_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `mp`, `role_admin`) VALUES
(14, 'abdessamed', 'bouguerra', 'test@test', '098f6bcd4621d373cade4e832627b4f6', 0),
(15, 'ala', 'ala', 'ala@ala', 'e88e6128e26eeff4daf1f5db07372784', 0),
(16, 'younes', 'younes', 'younes@younes', '083af24243207a87b587d00e12cc30ca', 0),
(17, 'admin', 'admin', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_users`
--
ALTER TABLE `answers_users`
  ADD PRIMARY KEY (`id_answer_user`);

--
-- Indexes for table `pass_quiz`
--
ALTER TABLE `pass_quiz`
  ADD PRIMARY KEY (`id_pass`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers_users`
--
ALTER TABLE `answers_users`
  MODIFY `id_answer_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8964;

--
-- AUTO_INCREMENT for table `pass_quiz`
--
ALTER TABLE `pass_quiz`
  MODIFY `id_pass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
