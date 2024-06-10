-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 May 2022, 20:53:12
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeigniterfood`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_us`
--

CREATE TABLE `about_us` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `about_us`
--

INSERT INTO `about_us` (`ID`, `Image`, `Title`, `Content`) VALUES
(1, '627f744d9cb11.jpg', 'Hakkımızda', '<p><span style=\"font-size:16px\"><span style=\"font-family:Comic Sans MS,cursive\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgroved&nbsp;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</span></span></p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:567px; position:absolute; top:19.5938px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Image`, `Email`, `Password`) VALUES
(1, 'Kumrucum', '627ff8c37ba7b.png', 'info@kumrucum.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Ömer Işık', '626480905e69e.jpg', 'omerisik1766@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `albums`
--

CREATE TABLE `albums` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `albums`
--

INSERT INTO `albums` (`ID`, `Image`, `Name`, `Status`, `Rank`, `Create_Date`) VALUES
(1, '625533edee4cf.jpg', 'Yoga Eğitimi Başladı', 1, 1, '2022-04-12 09:42:31'),
(2, '62552da42c7c9.jpg', 'Pilates Eğitimi', 1, 0, '2022-04-12 09:43:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `album_images`
--

CREATE TABLE `album_images` (
  `ID` int(11) NOT NULL,
  `album_ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `album_images`
--

INSERT INTO `album_images` (`ID`, `album_ID`, `Image`, `Name`, `Content`, `Price`, `Status`, `Rank`, `Create_Date`) VALUES
(3, 1, '627d44a287008.jpg', 'DÜĞÜN PAKETLERİ1', 'çay4, kahvaltı4,simit4,salam4', '123.123', 0, 2, '2022-05-12 19:17:49'),
(4, 1, '627d449bc379e.jpg', 'DÜĞÜN PAKETLERİ2', 'çay2, kahvaltı2,simit2,salam2 ', '123.123', 1, 0, '2022-05-12 19:17:49'),
(5, 1, '627d442ec6629.jpg', 'DÜĞÜN PAKETLERİ3', 'çay3, kahvaltı3,simit3,salam3', '123.123', 1, 1, '2022-05-12 19:17:49'),
(6, 2, '627d6c1adfc0f.jpg', 'omer1', 'çay, kahvaltı,simit,salam ', '123', 0, 0, '2022-05-12 22:20:43'),
(7, 2, '627d6c32581e2.jpg', 'omer2', 'çay1, kahvaltı1,simit1,salam1', '1234', 1, 0, '2022-05-12 22:21:06'),
(8, 2, '627f756f15db6.jpg', 'DÜĞÜN PAKETLERİ', 'çay, kahvaltı, ekmek, salam', '123', 1, 0, '2022-05-14 11:25:03'),
(9, 2, '627f757c8c20c.jpg', 'ışık yufka', 'çay, kahvaltı, ekmek, salam', '234', 1, 0, '2022-05-14 11:25:16'),
(10, 2, '627f7589bf3ad.jpg', 'PDF DOSYALARI', 'çay, kahvaltı, ekmek, salam', '678', 0, 0, '2022-05-14 11:25:29'),
(11, 1, '627f75a1085e5.jpg', 'omer', 'çay, kahvaltı, ekmek, salam', '789', 1, 0, '2022-05-14 11:25:53'),
(12, 1, '627f75afddb63.jpg', 'PDF DOSYALARI', 'çay, kahvaltı, ekmek, salam', '890', 0, 0, '2022-05-14 11:26:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`ID`, `Image`, `Title`) VALUES
(1, '627ff1faf3745.jpg', 'Banner');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brands`
--

CREATE TABLE `brands` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `brands`
--

INSERT INTO `brands` (`ID`, `Image`, `Name`, `Link`, `Status`, `Rank`, `Create_Date`) VALUES
(5, '6274d3b517d2e.jpeg', 'DÜĞÜN PAKETLERİ', 'https://isikyufka.com/', 1, 0, '2022-05-06 09:52:21'),
(6, '6274d3c4a6b3c.jpg', 'ışık Mobilya', 'https://www.google.com/', 1, 0, '2022-05-06 09:52:36'),
(7, '6274d44744fea.jpg', 'Musa ışık', 'https://www.facebook.com/', 1, 0, '2022-05-06 09:54:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `client_comments`
--

CREATE TABLE `client_comments` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Degree` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `client_comments`
--

INSERT INTO `client_comments` (`ID`, `Image`, `Name`, `Degree`, `Content`, `Status`, `Rank`, `Create_Date`) VALUES
(6, '6277f240cdcfd.jpg', 'Osman Işık', 'PHP Developer', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>\r\n', 1, 0, '2022-05-08 18:37:05'),
(7, '6277f232c8bfa.jpg', 'Mert Oğuzhan', 'CEO', '<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</p>\r\n', 1, 2, '2022-05-08 18:39:14'),
(8, '6277f2c28ea51.jpg', 'Musa Dedeçam', 'Çalışan', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>\r\n', 1, 3, '2022-05-08 18:41:38'),
(9, '6277f2fa785f5.jpg', 'Fatih Yükselen', 'Çalışan12', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>\r\n', 1, 1, '2022-05-08 18:42:34');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `counter`
--

CREATE TABLE `counter` (
  `ID` int(11) NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Count` varchar(4) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `counter`
--

INSERT INTO `counter` (`ID`, `Icon`, `Title`, `Count`, `Status`, `Rank`, `Create_Date`) VALUES
(1, 'fa fa-desktop', 'Biten Projeler', '1000', 1, 0, '2022-04-22 16:00:32'),
(2, 'fa fa-smile', 'Mutlu Müşteri', '2000', 1, 1, '2022-04-22 16:01:54'),
(3, 'fa fa-users', 'Ekibimiz', '150', 1, 2, '2022-04-22 16:03:33'),
(4, 'fa fa-trophy', 'Başarılarımız', '3000', 1, 3, '2022-04-22 16:04:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `faq`
--

INSERT INTO `faq` (`ID`, `Title`, `Icon`, `Content`, `Rank`, `Status`, `Create_Date`) VALUES
(2, 'Bu Temayı Wordpress\'te Yapacak mısınız?', 'fa fa-question-circle', '<p>Lorem ipsum dolor sit amet, conectetur adipiscing elit.&nbsp;Vestibulum pharetra turpis sit amet eleifend scelerisque.&nbsp;Quisque consequat tortor et lacinia maleuada.&nbsp;Pellentesque dolorda proin.&nbsp;Tamsayı egestas maleuada erat, sed dapibus lectus ornare&#39;de.&nbsp;Donec mollis libero velit, nec tincidunt lectus elementum vel.&nbsp;Tincidunt&#39;ta Suspendisse lobortis pellentesque velit.&nbsp;Cras sit amet porta erat, nec vulputate totortor.&nbsp;Nulla libero est, tincidunt sed tincidunt id, volutpat ve lectus.&nbsp;İsim eu risus lacus.&nbsp;Tamsayı egestas maleuada erat, sed dapibus lectus ornare&#39;de.&nbsp;Donec mollis libero velit, nec tincidunt lectus elementum vel.</p>\r\n', 3, 1, '2022-04-11 13:23:22'),
(3, 'İade Sisteminiz Var mı?', 'fa fa-question-circle', '<p>Lorem ipsum dolor sit amet, conectetur adipiscing elit.&nbsp;Vestibulum pharetra turpis sit amet eleifend scelerisque.&nbsp;Quisque consequat tortor et lacinia maleuada.&nbsp;Pellentesque dolorda proin.&nbsp;Tamsayı egestas maleuada erat, sed dapibus lectus ornare&#39;de.&nbsp;Donec mollis libero velit, nec tincidunt lectus elementum vel.&nbsp;Tincidunt&#39;ta Suspendisse lobortis pellentesque velit.&nbsp;Cras sit amet porta erat, nec vulputate totortor.&nbsp;Nulla libero est, tincidunt sed tincidunt id, volutpat ve lectus.&nbsp;İsim eu risus lacus.&nbsp;Tamsayı egestas maleuada erat, sed dapibus lectus ornare&#39;de.&nbsp;Donec mollis libero velit, nec tincidunt lectus elementum vel.</p>\r\n', 0, 1, '2022-04-11 13:23:52'),
(4, 'Teslimat Hizmeti Alabilir miyiz?', 'fa fa-question-circle', '<p>Lorem ipsum dolor sit amet, conectetur adipiscing elit.&nbsp;Vestibulum pharetra turpis sit amet eleifend scelerisque.&nbsp;Quisque consequat tortor et lacinia maleuada.&nbsp;Pellentesque dolorda proin.&nbsp;Tamsayı egestas maleuada erat, sed dapibus lectus ornare&#39;de.&nbsp;Donec mollis libero velit, nec tincidunt lectus elementum vel.&nbsp;Tincidunt&#39;ta Suspendisse lobortis pellentesque velit.&nbsp;Cras sit amet porta erat, nec vulputate totortor.&nbsp;Nulla libero est, tincidunt sed tincidunt id, volutpat ve lectus.&nbsp;İsim eu risus lacus.&nbsp;Tamsayı egestas maleuada erat, sed dapibus lectus ornare&#39;de.&nbsp;Donec mollis libero velit, nec tincidunt lectus elementum vel.</p>\r\n', 1, 1, '2022-04-11 13:24:17'),
(5, 'Yeni Ürün Bildirimini Nasıl Alabilirim?', 'fa fa-question-circle', '<p>Lorem ipsum dolor sit amet, conectetur adipiscing elit.&nbsp;Vestibulum pharetra turpis sit amet eleifend scelerisque.&nbsp;Quisque consequat tortor et lacinia maleuada.&nbsp;Pellentesque dolorda proin.&nbsp;Tamsayı egestas maleuada erat, sed dapibus lectus ornare&#39;de.&nbsp;Donec mollis libero velit, nec tincidunt lectus elementum vel.&nbsp;Tincidunt&#39;ta Suspendisse lobortis pellentesque velit.&nbsp;Cras sit amet porta erat, nec vulputate totortor.&nbsp;Nulla libero est, tincidunt sed tincidunt id, volutpat ve lectus.&nbsp;İsim eu risus lacus.&nbsp;Tamsayı egestas maleuada erat, sed dapibus lectus ornare&#39;de.&nbsp;Donec mollis libero velit, nec tincidunt lectus elementum vel.</p>\r\n', 2, 1, '2022-04-11 13:24:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `intro`
--

CREATE TABLE `intro` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Btn` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Btn_Link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `intro`
--

INSERT INTO `intro` (`ID`, `Image`, `Name`, `Content`, `Btn`, `Btn_Link`) VALUES
(1, 'bg_3.jpg', 'Sıcak, Dakik, Leziz', 'Sıcak, Dakik, Leziz', 'Sipariş Ver', 'contact');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Subject` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Reply_Status` tinyint(4) NOT NULL DEFAULT 0,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`ID`, `Name`, `Email`, `Phone`, `Subject`, `Content`, `Reply_Status`, `Rank`, `Create_Date`) VALUES
(3, 'Orhan Pamuk', 'osmannnnyldz78787878@gmail.com', '654321123456', 'Eski Çağ', 'Lorem ipsum dolor sit amet, adipiscing elit. Donec elit erat, vestibulum ac luctus id, ultrices.', 1, 1, '2022-04-23 13:51:39'),
(4, 'Ömer Işık', 'musamusamusa7878@hotmail.com', '05301585544', 'Deneme Mesaj', 'Deneme yapıyoruz. Aldırmayın.', 0, 0, '2022-05-06 09:30:59'),
(5, '[removed]alert&#40;\"hacklendiniz.\"&#41;;[removed]', 'osmann_yldz7878@hotmail.com', '05301585544', 'adsdsadas', 'dsadasdasads', 0, 0, '2022-05-06 09:40:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mission`
--

CREATE TABLE `mission` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mission`
--

INSERT INTO `mission` (`ID`, `Image`, `Title`, `Content`) VALUES
(1, '6242f3042d685.jpg', 'Misyonumuz', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;Misyonumuz</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Seo_Tags` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`ID`, `Image`, `Title`, `Content`, `Seo_Tags`, `Status`, `Rank`, `Create_Date`) VALUES
(4, '627e70cc62669.jpg', 'aaaaaaaaaaaa', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>\r\n', 'praesent, quis, fermentum, diam', 1, 3, '2022-04-23 11:36:22'),
(5, '627e70d2c501f.jpg', 'bbbbbbbbbb', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>\r\n', 'praesent, quis, fermentum, diam', 1, 2, '2022-04-23 11:36:37'),
(6, '627e70e2ace47.jpg', 'Knight Online Yeni Oyununa Bakın! ', '<pre>\r\nLorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore\r\n</pre>\r\n', 'knight, online, oyun, games, game', 1, 0, '2022-05-01 00:25:01'),
(7, '627e70da54738.jpg', 'ısık', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>\r\n\r\n<p>Nulla suscipit est et ipsum tincidunt sagittis. Curabitur rutrum suscipit nulla at scelerisque. In pharetra purus vitae risus sollicitudin aliquam. Proin non ex nunc. Praesent quis fermentum diam. Aliquam a malesuada eros, a euismod magna. Nulla viverra mi sed lectus viverra, et molestie magna dictum.</p>\r\n', 'osman, ışık, osmanişik', 1, 1, '2022-05-01 12:09:06'),
(8, '627e70c50b04d.jpg', 'omer', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>\r\n\r\n<p>Nulla suscipit est et ipsum tincidunt sagittis. Curabitur rutrum suscipit nulla at scelerisque. In pharetra purus vitae risus sollicitudin aliquam. Proin non ex nunc. Praesent quis fermentum diam. Aliquam a malesuada eros, a euismod magna. Nulla viverra mi sed lectus viverra, et molestie magna dictum.</p>\r\n', 'osman, ışık, osmanişik', 1, 1, '2022-05-01 12:09:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `ID` int(11) NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`ID`, `Icon`, `Title`, `Content`, `Status`, `Rank`, `Create_Date`) VALUES
(5, 'fa fa-list', 'General Information For Users', '<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-152px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 1, 0, '2022-04-28 22:58:05'),
(6, 'fa fa-list', 'Interactive Fairy Tales', '<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-136px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 1, 0, '2022-04-28 22:58:19'),
(7, 'fa fa-list', 'Official Storybook Maker', '<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-38px; position:absolute; top:38px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 1, 0, '2022-04-28 22:58:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`ID`, `Image`, `Name`, `Link`, `Status`, `Rank`, `Create_Date`) VALUES
(9, '626a6d33f3adc.jpg', 'DÜĞÜN PAKETLERİ', 'https://isikyufka.com/', 1, 0, '2022-04-28 12:22:38'),
(10, '626a6d3c0021c.jpg', 'YEMEK ODASI TAKIMLARI', 'https://www.google.com/', 1, 0, '2022-04-28 12:22:54'),
(11, '626a6d4a831f1.jpg', 'Işık Mobilya', 'https://www.instagram.com/', 1, 0, '2022-04-28 12:23:16'),
(12, '626b019272bc8.jpeg', 'DÜĞÜN PAKETLERİ', 'https://isikyufka.com/', 1, 0, '2022-04-28 23:05:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`ID`, `Title`, `Icon`, `Content`, `Rank`, `Status`, `Create_Date`) VALUES
(6, 'Retairement Planning', 'fa fa-subway', '<p>Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>\r\n', 0, 1, '2022-04-27 14:30:06'),
(7, 'Insurance Consulting', 'fa fa-archive', '<p>Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>\r\n', 0, 1, '2022-04-27 14:30:38'),
(8, 'Taxes Planning', 'fa fa-rocket', '<p>Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>\r\n', 0, 1, '2022-04-27 14:31:08');

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
(1, 'Codeigniter Firma Sitesi', 'Site Açıklaması', 'Anahtar Kelimeler', 'Omer Işık', '© Copyright 2022. Tüm Hakları Saklıdır.', '123456789', 'info@codeigniter.com', 'Karabük / TÜRKİYE', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999.656119053615!2d32.67993231566752!3d41.25104801239851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409caad1102f51cb%3A0xc16a6ba52f6106c7!2sY%C4%B1ld%C4%B1z%20Mobilya%20Center-Safranbolu!5e0!3m2!1str!2str!4v1639470424910!5m2!1str!2str\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'ssl://smtp.gmail.com', 'osmannyldz7878@gmail.com', 'Oy621207.', '465', 'osmannnnyldz78787878@gmail.com', '6277e9fb972e7.png', 'icon.svg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `ID` int(11) NOT NULL,
  `Image` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Btn_Left` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Btn_Left_Link` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Btn_Right` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Btn_Right_Link` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `SubTitle` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Rank` int(11) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`ID`, `Image`, `Title`, `Content`, `Btn_Left`, `Btn_Left_Link`, `Btn_Right`, `Btn_Right_Link`, `SubTitle`, `Rank`, `Status`, `Create_Date`) VALUES
(11, '6277df2f14d51.jpg', 'KUMRUCUM', 'LEZİZ', 'Biz Kimiz?', 'about_us', 'İletişim', 'contact', 'LEZİZ', 0, 1, '2022-05-08 17:18:07'),
(12, '6277df90eb9ed.jpg', 'KUMRUCUM', 'DAKİK', 'Biz Kimiz?', 'about_us', 'İletişim', 'contact', 'DAKİK', 0, 1, '2022-05-08 17:19:45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socialmedia`
--

CREATE TABLE `socialmedia` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `socialmedia`
--

INSERT INTO `socialmedia` (`ID`, `Title`, `Icon`, `Link`, `Rank`, `Status`, `Create_Date`) VALUES
(1, 'Facebook', 'fab fa-facebook-f', 'https://www.facebook.com', 0, 1, '2021-12-17 09:43:34'),
(2, 'Twitter', 'fab fa-twitter', 'https://www.twitter.com', 1, 1, '2021-12-17 09:45:07'),
(3, 'Youtube', ' fab fa-youtube', 'https://www.youtube.com', 2, 1, '2021-12-17 09:45:29'),
(4, 'Pinterest', 'fab fa-pinterest', 'https://www.pinterest.com', 1, 1, '2021-12-17 10:07:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subscribers`
--

CREATE TABLE `subscribers` (
  `ID` int(11) NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `subscribers`
--

INSERT INTO `subscribers` (`ID`, `Icon`, `Email`, `Status`, `Rank`, `Create_Date`) VALUES
(1, 'fa fa-user', 'osmann_yldz7878@hotmail.com', 1, 0, '2022-04-23 12:09:57'),
(2, 'fa fa-user', 'osmann_yldz787878@hotmail.com', 1, 1, '2022-04-23 12:09:57'),
(4, 'fa fa-user', 'mstfkrtll@yandex.com', 1, 0, '2022-04-29 15:18:12'),
(5, 'fa fa-user', 'jaguar@gmail.com', 1, 0, '2022-04-29 16:29:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Degree` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`ID`, `Image`, `Name`, `Degree`, `Content`, `Status`, `Rank`, `Create_Date`) VALUES
(11, '627a4df82e7bd.jpg', 'Antonio Santibanez', 'Chef Cook', '<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>\r\n', 1, 0, '2022-05-10 13:35:20'),
(12, '627a4e2ba930c.jpg', 'Alfred Smith', 'Chef Cook', '<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>\r\n', 1, 0, '2022-05-10 13:36:11'),
(13, '627a4ed6b2ae5.jpg', 'Michelle Fraulen', 'Head Chef', '<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>\r\n', 1, 0, '2022-05-10 13:39:02'),
(14, '627a4ef75eedb.jpg', 'John Gustavo', 'CEO, Co Founder', '<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>\r\n', 1, 0, '2022-05-10 13:39:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videos`
--

CREATE TABLE `videos` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `videos`
--

INSERT INTO `videos` (`ID`, `Title`, `Link`, `Status`, `Rank`, `Create_Date`) VALUES
(2, 'Oğuzhan Koç - Aşkla Aynı Değil', 'C7NAkRwnpaM', 1, 2, '2022-04-22 00:33:02'),
(3, 'Murat Dalkılıç Ft. Oğuzhan Koç - Aşinayız', '8Z6Ral7DG10', 1, 1, '2022-04-22 00:58:15'),
(4, 'No Method - Let Me Go', 'lcOtPV352H8', 1, 0, '2022-04-22 00:58:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vision`
--

CREATE TABLE `vision` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `vision`
--

INSERT INTO `vision` (`ID`, `Image`, `Title`, `Content`) VALUES
(1, '6242ee02c8f3a.jpg', 'Vizyonumuz', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;Vizyonumuz</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `album_images`
--
ALTER TABLE `album_images`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `album_ID` (`album_ID`);

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `client_comments`
--
ALTER TABLE `client_comments`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_us`
--
ALTER TABLE `about_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `albums`
--
ALTER TABLE `albums`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `album_images`
--
ALTER TABLE `album_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `brands`
--
ALTER TABLE `brands`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `client_comments`
--
ALTER TABLE `client_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `counter`
--
ALTER TABLE `counter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `intro`
--
ALTER TABLE `intro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `mission`
--
ALTER TABLE `mission`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `teams`
--
ALTER TABLE `teams`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `videos`
--
ALTER TABLE `videos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `vision`
--
ALTER TABLE `vision`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
