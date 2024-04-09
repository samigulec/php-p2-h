-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 28 Mar 2024, 09:40:36
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `poll`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `poll`
--

CREATE TABLE `poll` (
  `id` int(50) NOT NULL,
  `choice` int(50) NOT NULL,
  `votes` int(50) NOT NULL,
  `question_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `poll`
--

INSERT INTO `poll` (`id`, `choice`, `votes`, `question_id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vraag_en_opties`
--

CREATE TABLE `vraag_en_opties` (
  `id` int(11) NOT NULL,
  `vraag` varchar(255) NOT NULL,
  `antwoord1` varchar(255) DEFAULT NULL,
  `antwoord2` varchar(255) DEFAULT NULL,
  `antwoord3` varchar(255) DEFAULT NULL,
  `antwoord4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `vraag_en_opties`
--

INSERT INTO `vraag_en_opties` (`id`, `vraag`, `antwoord1`, `antwoord2`, `antwoord3`, `antwoord4`) VALUES
(1, 'hoe gaat het', 'goed', 'slecht', 'normal', 'gwn');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `vraag_en_opties`
--
ALTER TABLE `vraag_en_opties`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `vraag_en_opties`
--
ALTER TABLE `vraag_en_opties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
