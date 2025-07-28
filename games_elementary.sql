-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 28 Jul 2025 pada 18.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games_elementary`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `platform` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`id`, `title`, `genre`, `rating`, `release_date`, `image_url`, `description`, `features`, `platform`) VALUES
(1, 'Grand Theft Auto V', 'Action', 8.00, NULL, 'img_game/gta5.jpg', NULL, NULL, NULL),
(2, 'The Witcher 3: Wild Hunt', 'Action', 9.00, NULL, 'img_game/witcher3.jpg', NULL, NULL, NULL),
(3, 'The Elder Scrolls V: Skyrim', 'Action', 9.00, NULL, 'img_game/skyrim.jpg', NULL, NULL, NULL),
(4, 'Destiny 9', 'Shooter', 9.00, NULL, 'img_game/destiny2.jpg', NULL, NULL, NULL),
(5, 'Fallout 4', 'Action', 9.00, NULL, 'img_game/fallout4.jpg', NULL, NULL, NULL),
(12, 'rdr2', 'Action', 7.00, '2025-07-17', 'img_game/rdr2.jpg', 'oke gas', NULL, NULL),
(13, 'Black Myth: Wukong', 'Action', 9.00, '2025-07-11', 'img_game/wukong.jpg', 'wukong', NULL, NULL),
(14, 'god of war', 'Action', 9.00, '2025-07-08', 'img_game/godofwar.jpg', 'god of war', NULL, NULL),
(15, 'Fortnite Battle Royale', 'Action', 9.50, '2025-07-28', 'img_game/fortnite.jpg', 'Fortnite Battle Royale\r\nFortnite Game Image\r\nName: Fortnite Battle Royale\r\n\r\nRating: 3.28\r\n\r\nReleased: 2017-09-26\r\n\r\nGenres: Action,Shooter\r\n\r\nFeatures: Multiplayer,Sci-fi,Sandbox\r\n\r\nPlatforms: PlayStation 4,Xbox One,iOS\r\n\r\nDescription\r\n\r\nFortnite Battle Royale is the completely free 100-player PvP mode in Fortnite. One giant map. A battle bus. Fortnite building skills and destructible environments combined with intense PvP combat. The last one standing wins. Download now for FREE and jump into the action.\r\nThis download also gives you a path to purchase the Save the World co-op PvE campaign during Fortnite’s Early Access season, or instant access if you received a Friend invite.\r\nOnline features require an account and are subject to terms of service and applicable privacy policy (playstationnetwork.com/terms-of-service & playstationnetwork.com/privacy-policy).\r\n1 player', NULL, 'PC'),
(16, 'valorant', 'Action', 7.50, '2023-07-13', 'img_game/valorant.jpg', 'Valorant game seru', 'Multiplayer', 'PC'),
(17, 'PUBG', 'Action', 7.50, '2025-07-25', 'img_game/pubg.jpg', 'pubg seru', 'Multiplayer', 'PC'),
(18, 'MMA', 'Action', 7.60, '2022-06-25', 'img_game/mma.jpg', 'mma ', 'Multiplayer', NULL),
(19, 'Call of Duty: Warzone 2.0', 'Action', 7.80, '2022-06-25', 'img_game/cod.jpg', 'mma ', 'Multiplayer', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
