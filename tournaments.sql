-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 sep 2021 om 11:01
-- Serverversie: 10.4.17-MariaDB
-- PHP-versie: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zwerkbal`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tournaments`
--

--
-- Gegevens worden geëxporteerd voor tabel `tournaments`
--

INSERT INTO `tournaments` (`id`, `name`, `date`, `created_at`, `updated_at`) VALUES
(1, 'EK Zwerkbal 2021', '2021-07-11', NULL, NULL),
(2, 'Scholentoernooi', '2021-07-31', NULL, NULL),
(3, 'Supercup 2022', '2022-04-14', NULL, NULL),
(4, 'ZwerkbalBeker', '2020-08-02', NULL, NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
