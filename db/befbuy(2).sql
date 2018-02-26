-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Feb 26, 2018 alle 22:20
-- Versione del server: 10.1.16-MariaDB
-- Versione PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `befbuy`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `category`
--

CREATE TABLE `category` (
  `bef_cat_id` int(255) NOT NULL,
  `bef_cat_name` varchar(50) NOT NULL,
  `bef_cat_description` varchar(255) NOT NULL,
  `bef_cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `category`
--

INSERT INTO `category` (`bef_cat_id`, `bef_cat_name`, `bef_cat_description`, `bef_cat_image`) VALUES
(1, 'Wearables', 'Everything you can wear', 'img/wearable.jpg'),
(2, 'Gaming', 'Videogames, Consoles and gaming accessories', 'img/gaming.jpg'),
(3, 'Computers', 'Computers, Tablets, Accessories, Components and many other things', 'img/computers.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `product`
--

CREATE TABLE `product` (
  `bef_prd_id` int(255) NOT NULL,
  `bef_prd_name` varchar(255) NOT NULL,
  `bef_prd_description` text NOT NULL,
  `bef_sub_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `product`
--

INSERT INTO `product` (`bef_prd_id`, `bef_prd_name`, `bef_prd_description`, `bef_sub_id`) VALUES
(1, 'Saucony Shadow Woman', 'Saucony Woman Shoes\r\n', 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `productmedia`
--

CREATE TABLE `productmedia` (
  `bef_prm_id` int(11) NOT NULL,
  `bef_prm_url` varchar(255) NOT NULL,
  `bef_prd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `review`
--

CREATE TABLE `review` (
  `bef_rev_id` int(255) NOT NULL,
  `bef_rev_title` varchar(255) NOT NULL,
  `bef_rev_content` text NOT NULL,
  `bef_rev_rate` int(1) NOT NULL,
  `bef_prd_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `review`
--

INSERT INTO `review` (`bef_rev_id`, `bef_rev_title`, `bef_rev_content`, `bef_rev_rate`, `bef_prd_id`) VALUES
(1, 'I love the color scheme (black baltic) and they feel great', 'My previous sneakers (Saucony Jazz) had worn out after 4 years, and I needed new shoes.I did a lot of shopping around, but settled on these. I love the color scheme (black baltic) and they feel great.', 5, 1),
(2, 'too big', 'These are too big. I plan to return them and get the next size down.\r\n', 2, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `subcategory`
--

CREATE TABLE `subcategory` (
  `bef_sub_id` int(11) NOT NULL,
  `bef_sub_name` varchar(255) NOT NULL,
  `bef_sub_description` varchar(255) NOT NULL,
  `bef_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `subcategory`
--

INSERT INTO `subcategory` (`bef_sub_id`, `bef_sub_name`, `bef_sub_description`, `bef_cat_id`) VALUES
(2, 'shirts and blouses', 'shirts & blouses', 1),
(3, 'dresses', 'dresses', 1),
(4, 'jeans', 'jeans', 1),
(5, 'coats', 'coats', 1),
(6, 'shoes', 'shoes', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`bef_cat_id`);

--
-- Indici per le tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`bef_prd_id`);

--
-- Indici per le tabelle `productmedia`
--
ALTER TABLE `productmedia`
  ADD PRIMARY KEY (`bef_prm_id`);

--
-- Indici per le tabelle `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`bef_rev_id`);

--
-- Indici per le tabelle `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`bef_sub_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `category`
--
ALTER TABLE `category`
  MODIFY `bef_cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT per la tabella `product`
--
ALTER TABLE `product`
  MODIFY `bef_prd_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `productmedia`
--
ALTER TABLE `productmedia`
  MODIFY `bef_prm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `review`
--
ALTER TABLE `review`
  MODIFY `bef_rev_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `bef_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
