-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 15 Nis 2024, 23:59:56
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
-- Veritabanı: `crud`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `crud2`
--

CREATE TABLE `crud2` (
  `id` int(11) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Soort` varchar(200) NOT NULL,
  `prijs` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `crud2`
--

INSERT INTO `crud2` (`id`, `Product`, `Soort`, `prijs`) VALUES
(1, 'iphone 16', 'Telefoon', '1499,99Eu');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `crud2`
--
ALTER TABLE `crud2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Soort` (`Soort`),
  ADD UNIQUE KEY `prijs` (`prijs`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `crud2`
--
ALTER TABLE `crud2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
