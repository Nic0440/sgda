-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Jun-2023 às 14:12
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_sgda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `modality` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `classes`
--

INSERT INTO `classes` (`id`, `name`, `modality`) VALUES
(1, '1AT', 'Ensino Médio'),
(2, '1AM', 'Ensino Médio'),
(3, '4AM', 'Ensino Médio'),
(4, '4AT', 'Ensino Médio'),
(5, '2AM', 'Ensino Médio'),
(6, '2AT', 'Ensino Médio'),
(7, '3AT', 'Ensino Médio'),
(8, '3AM', 'Ensino Médio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `classrooms`
--

DROP TABLE IF EXISTS `classrooms`;
CREATE TABLE IF NOT EXISTS `classrooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `classrooms`
--

INSERT INTO `classrooms` (`id`, `name`) VALUES
(1, 'Sala 01'),
(2, 'Sala 02'),
(3, 'Sala 03'),
(4, 'Sala 04'),
(5, 'Lab. Ciências'),
(6, 'Sala 06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `shift` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `schedules`
--

INSERT INTO `schedules` (`id`, `start_time`, `end_time`, `shift`) VALUES
(1, '07:30:00', '08:15:00', 'Morning'),
(2, '08:15:00', '09:00:00', 'Morning'),
(3, '09:00:00', '09:45:00', 'Morning'),
(4, '09:45:00', '10:30:00', 'Morning'),
(5, '10:30:00', '11:15:00', 'Morning'),
(6, '11:15:00', '12:15:00', 'Morning'),
(7, '13:30:00', '14:15:00', 'Afternoon'),
(8, '14:15:00', '15:00:00', 'Afternoon'),
(9, '15:00:00', '15:45:00', 'Afternoon'),
(10, '15:45:00', '16:30:00', 'Afternoon'),
(11, '16:30:00', '17:15:00', 'Afternoon'),
(12, '17:15:00', '18:15:00', 'Afternoon');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `schedule_times`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `schedule_times`;
CREATE TABLE IF NOT EXISTS `schedule_times` (
`schedule_id` int
,`start_time` time
,`end_time` time
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, 'Matemática'),
(2, 'História'),
(3, 'Física'),
(4, 'Filosofia'),
(5, 'Química'),
(6, 'Língua Portuguesa'),
(7, 'Biologia'),
(8, 'Artes'),
(9, 'Geografia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subjects_teachers`
--

DROP TABLE IF EXISTS `subjects_teachers`;
CREATE TABLE IF NOT EXISTS `subjects_teachers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `subjects_teachers`
--

INSERT INTO `subjects_teachers` (`id`, `subject_id`, `teacher_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 9, 9),
(8, 1, 10),
(9, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `teachers`
--

INSERT INTO `teachers` (`id`, `name`) VALUES
(1, 'João Silva'),
(2, 'Maria Santos'),
(3, 'Carlos Oliveira'),
(4, 'Ana Souza'),
(5, 'Pedro Almeida'),
(6, 'Mariana Costa'),
(7, 'Fernando Pereira'),
(8, 'Camila Rodrigues'),
(9, 'José Santos'),
(10, 'Amanda Costa');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `teacher_subject`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `teacher_subject`;
CREATE TABLE IF NOT EXISTS `teacher_subject` (
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `class_id` int DEFAULT NULL,
  `classroom_id` int DEFAULT NULL,
  `day_week` varchar(255) DEFAULT NULL,
  `subject_teacher_id` int DEFAULT NULL,
  `schedule_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_timetable_class` (`class_id`),
  KEY `fk_timetable_classroom` (`classroom_id`),
  KEY `fk_timetable_subjects_teachers` (`subject_teacher_id`),
  KEY `fk_timetable_schedule` (`schedule_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `timetable`
--

INSERT INTO `timetable` (`id`, `class_id`, `classroom_id`, `day_week`, `subject_teacher_id`, `schedule_id`) VALUES
(1, 2, 1, 'Seg', 1, 1),
(2, 2, 1, 'Seg', 1, 2),
(3, 2, 1, 'Seg', 1, 3),
(4, 2, 2, 'Seg', 2, 4),
(5, 2, 2, 'Seg', 2, 5),
(6, 2, 2, 'Seg', 2, 6),
(7, 2, 3, 'Ter', 3, 1),
(8, 2, 3, 'Ter', 3, 2),
(9, 2, 3, 'Ter', 4, 3),
(10, 2, 3, 'Ter', 6, 4),
(11, 2, 1, 'Ter', 6, 5),
(12, 2, 1, 'Ter', 6, 6),
(13, 2, 2, 'Qua', 9, 1),
(14, 2, 2, 'Qua', 9, 2),
(15, 2, 4, 'Qua', 7, 3),
(16, 2, 4, 'Qua', 7, 4),
(17, 2, 3, 'Qua', 2, 5),
(18, 2, 3, 'Qua', 2, 6),
(19, 2, 1, 'Qui', 5, 1),
(20, 2, 1, 'Qui', 5, 2),
(21, 2, 2, 'Qui', 5, 3),
(22, 2, 2, 'Qui', 4, 4),
(23, 2, 2, 'Qui', 4, 5),
(24, 2, 3, 'Qui', 1, 6),
(25, 2, 6, 'Sex', 3, 1),
(26, 2, 6, 'Sex', 3, 2),
(27, 2, 6, 'Sex', 3, 3),
(28, 2, 6, 'Sex', 8, 4),
(29, 2, 5, 'Sex', 8, 5),
(30, 2, 5, 'Sex', 8, 6),
(67, 1, 1, 'Seg', 1, 1),
(68, 1, 1, 'Seg', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura para vista `schedule_times`
--
DROP TABLE IF EXISTS `schedule_times`;

DROP VIEW IF EXISTS `schedule_times`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `schedule_times`  AS SELECT DISTINCT `tt`.`schedule_id` AS `schedule_id`, `sch`.`start_time` AS `start_time`, `sch`.`end_time` AS `end_time` FROM (`timetable` `tt` join `schedules` `sch` on((`tt`.`schedule_id` = `sch`.`id`)))  ;

-- --------------------------------------------------------

--
-- Estrutura para vista `teacher_subject`
--
DROP TABLE IF EXISTS `teacher_subject`;

DROP VIEW IF EXISTS `teacher_subject`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `teacher_subject`  AS SELECT DISTINCT `t`.`name` AS `professor_name`, `su`.`name` AS `disciplina_name` FROM ((`teachers` `t` join `timetable` `tt` on((`t`.`id` = `tt`.`teacher_id`))) join `subjects` `su` on((`tt`.`subject_id` = `su`.`id`)))  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
