-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Ara 2021, 14:31:26
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeigniterfirma`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `Title` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Author` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Footer` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Adress` text COLLATE utf8_turkish_ci NOT NULL,
  `Map` text COLLATE utf8_turkish_ci NOT NULL,
  `Host` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `User_Mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `User_Password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Port` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Notification_Mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Logo` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `Favicon` varchar(1000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`ID`, `Title`, `Description`, `Keywords`, `Author`, `Footer`, `Phone`, `Mail`, `Adress`, `Map`, `Host`, `User_Mail`, `User_Password`, `Port`, `Notification_Mail`, `Logo`, `Favicon`) VALUES
(1, 'Osman Yıldız', 'Site Açıklaması', 'Anahtar Kelimeler', 'Osman YILDIZ', 'Tüm hakları saklıdır.', '123456789', 'info@codeigniter.com', 'Karabük / TÜRKİYE', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999.656119053615!2d32.67993231566752!3d41.25104801239851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409caad1102f51cb%3A0xc16a6ba52f6106c7!2sY%C4%B1ld%C4%B1z%20Mobilya%20Center-Safranbolu!5e0!3m2!1str!2str!4v1639470424910!5m2!1str!2str\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'mail.osmanyildiz.com', 'deneme@osmanyildiz.com', '1234567890', '587', 'bilgi@osmanyildiz.com', 'logo2.svg', 'icon.svg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socialmedia`
--

CREATE TABLE `socialmedia` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `socialmedia`
--

INSERT INTO `socialmedia` (`ID`, `Title`, `Icon`, `Link`, `Status`, `Create_Date`) VALUES
(1, 'Facebook', 'fab fa-facebook-square', 'https://www.facebook.com', 1, '2021-12-17 09:43:34'),
(2, 'Twitter', 'fab fa-twitter-square', 'https://www.twitter.com', 1, '2021-12-17 09:45:07'),
(3, 'Youtube', 'fab fa-youtube-square', 'https://www.youtube.com', 1, '2021-12-17 09:45:29'),
(4, 'Pinterest', 'fab fa-pinterest-square', 'https://www.pinterest.com', 1, '2021-12-17 10:07:09');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
