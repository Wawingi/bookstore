-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Mar-2019 às 16:35
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `author`
--

CREATE TABLE `author` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'Guido van rossum'),
(2, 'Donalth Knuth'),
(3, 'Douglas Crockford'),
(4, 'Dennis M. Ritchie'),
(5, 'Brian W. Kernighan'),
(6, 'Dennis M. Ritchie'),
(7, 'Brian W. Kernighan');

-- --------------------------------------------------------

--
-- Estrutura da tabela `author_book`
--

CREATE TABLE `author_book` (
  `id_author` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `author_book`
--

INSERT INTO `author_book` (`id_author`, `id_book`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 4),
(6, 5),
(7, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `isbn` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`id`, `title`, `isbn`, `price`, `type`) VALUES
(1, 'Introduction to Python', 'ZAB', '25.00', 'Exclusive'),
(2, 'The Art of Computer Programing', 'USY', '105.00', 'Used'),
(3, 'Java Script: The Good Parts', '1AB', '36.00', 'New'),
(4, 'The C Programming Language', 'AAA', '22.50', 'Used'),
(5, 'The C Programming Language', 'AAA', '27.00', 'New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_book`
--
ALTER TABLE `author_book`
  ADD PRIMARY KEY (`id_author`,`id_book`),
  ADD KEY `fk_ab2` (`id_book`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `author_book`
--
ALTER TABLE `author_book`
  ADD CONSTRAINT `fk_ab1` FOREIGN KEY (`id_author`) REFERENCES `author` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ab2` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
