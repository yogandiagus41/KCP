-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2022 pada 16.45
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmm-project-kcp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', ''),
(2, 'User', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 22),
(1, 24),
(1, 25),
(2, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@gmail.com', 1, '2022-11-27 21:58:37', 1),
(2, '::1', 'admin@gmail.com', 1, '2022-11-27 22:01:20', 1),
(3, '::1', 'admin@gmail.com', 1, '2022-11-27 22:13:26', 1),
(4, '::1', 'admin@gmail.com', 1, '2022-11-27 22:16:11', 1),
(5, '::1', 'Ceceu@gmail.com', 2, '2022-11-27 22:51:48', 1),
(6, '::1', 'admin@gmail.com', 1, '2022-11-28 00:01:43', 1),
(7, '::1', 'Ceceu@gmail.com', 2, '2022-11-28 00:07:06', 1),
(8, '::1', 'Ceceu@gmail.com', 2, '2022-11-28 00:11:39', 1),
(9, '::1', 'admin@gmail.com', 1, '2022-11-28 00:16:04', 1),
(10, '::1', 'Ceceu@gmail.com', 2, '2022-11-28 00:16:25', 1),
(11, '::1', 'admin@gmail.com', 1, '2022-11-28 00:19:22', 1),
(12, '::1', 'Ceceu@gmail.com', 2, '2022-11-28 00:19:57', 1),
(13, '::1', 'admin@gmail.com', 1, '2022-11-28 00:24:34', 1),
(14, '::1', 'Ceceu@gmail.com', 2, '2022-11-28 00:40:44', 1),
(15, '::1', 'admin@gmail.com', 1, '2022-11-28 00:46:54', 1),
(16, '::1', 'Ceceu@gmail.com', 2, '2022-11-28 00:47:11', 1),
(17, '::1', 'Ceceu@gmail.com', 2, '2022-11-28 00:51:57', 1),
(18, '::1', 'udin@gmail.com', 3, '2022-11-28 01:00:27', 1),
(19, '::1', 'udin@gmail.com', 3, '2022-11-28 01:07:06', 1),
(20, '::1', 'Ceceu@gmail.com', 2, '2022-11-28 01:07:56', 1),
(21, '::1', 'admin@gmail.com', 1, '2022-11-28 01:08:31', 1),
(22, '::1', 'udin@gmail.com', 3, '2022-11-28 01:12:05', 1),
(23, '::1', 'admin@gmail.com', 1, '2022-11-28 01:15:28', 1),
(24, '::1', 'admin@gmail.com', 1, '2022-11-28 02:43:38', 1),
(25, '::1', 'admin@gmail.com', 1, '2022-11-28 20:17:58', 1),
(26, '::1', 'admin@gmail.com', 1, '2022-11-28 22:39:05', 1),
(27, '::1', 'admin@gmail.com', 1, '2022-11-29 00:52:27', 1),
(28, '::1', 'admin@gmail.com', 1, '2022-11-30 02:01:33', 1),
(29, '::1', 'admin@gmail.com', 1, '2022-11-30 22:12:26', 1),
(30, '::1', 'admin@gmail.com', 1, '2022-12-01 05:17:56', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'Dashboard', 'Dashboar Menu'),
(2, 'Composer', 'Composer Menu'),
(3, 'Composer-Create', 'Creating Data Composer'),
(4, 'Composer-Detail', 'Detailing Data Composer '),
(5, 'Composer-Update', 'Updated Data Composer'),
(6, 'Composer-Delete', 'Deleted Data Composer'),
(7, 'Publishing', 'Publishing Menu'),
(8, 'Publishing-Create', 'Creating Data Publishing'),
(9, 'Publishing-Detail', 'Detailing Data Publishing'),
(10, 'Publishing-Update', 'Updated Data Publishing'),
(11, 'Publishing-Delete', 'Deleted Data Publishing'),
(12, 'Performer', 'Performer Menu'),
(13, 'Performer-Create', 'Creating Data Publishing'),
(14, 'Performer-Detail', 'Detailing Data Performer'),
(15, 'Performer-Update', 'Updated Data Performer'),
(16, 'Performer-Delete', 'Deleted Data Performer'),
(17, 'Customer', 'Customer Menu'),
(18, 'Customer-Create', 'Creating Data Customer'),
(19, 'Customer-Detail', 'Detailing Data Customer'),
(20, 'Customer-Update', 'Updated Data Customer'),
(21, 'Customer-Delete', 'Deleted Data Customer'),
(22, 'Master-Data', 'Master Data Menu\r\n'),
(24, 'Transaction', 'Transaction'),
(25, 'User-Management', 'user management');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1669607070, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_composer`
--

CREATE TABLE `tb_composer` (
  `ID_COMPOSER` varchar(255) NOT NULL,
  `COMPOSER_ORIGINAL_NAME` varchar(50) NOT NULL,
  `COMPOSER_POPULAR_NAME` varchar(255) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `BIRTH_DATE` date NOT NULL,
  `BIRTH_PLACE` varchar(20) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `COUNTRY` varchar(20) NOT NULL,
  `POST_CODE` varchar(5) NOT NULL,
  `ADDRESS_CORRESPONDENCE` varchar(100) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `IDENTITY_NUMBER` varchar(16) NOT NULL,
  `TAX_ID_NUMBER` varchar(16) NOT NULL,
  `IPI_NUMBER` varchar(100) NOT NULL,
  `BANK_NAME` varchar(50) NOT NULL,
  `BANK_ACCOUNT_NAME` varchar(50) NOT NULL,
  `BANK_ACCOUNT_NUMBER` varchar(20) NOT NULL,
  `CITY_OF_BANK` varchar(20) NOT NULL,
  `BRANCH` varchar(20) NOT NULL,
  `CMO_NAME` varchar(50) NOT NULL,
  `ORIGINAL_PUBLISHING` varchar(50) NOT NULL,
  `SUB_PUBLISHING` varchar(50) NOT NULL,
  `PHOTO` varchar(255) NOT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_composer`
--

INSERT INTO `tb_composer` (`ID_COMPOSER`, `COMPOSER_ORIGINAL_NAME`, `COMPOSER_POPULAR_NAME`, `GENDER`, `BIRTH_DATE`, `BIRTH_PLACE`, `ADDRESS`, `CITY`, `COUNTRY`, `POST_CODE`, `ADDRESS_CORRESPONDENCE`, `EMAIL`, `IDENTITY_NUMBER`, `TAX_ID_NUMBER`, `IPI_NUMBER`, `BANK_NAME`, `BANK_ACCOUNT_NAME`, `BANK_ACCOUNT_NUMBER`, `CITY_OF_BANK`, `BRANCH`, `CMO_NAME`, `ORIGINAL_PUBLISHING`, `SUB_PUBLISHING`, `PHOTO`, `STATUS`) VALUES
('KCP-CPS-1', 'com 1', 'comone,compoone', 'Male', '2020-02-13', 'Bekasi', 'testing', 'KABUPATEN SIMEULUE', 'Indonesia', '122', 'testing', 'testing@gmail.com', '123111', '123', '123456', 'BCA', 'testing', '122', 'testing', 'testing', '123testing', '', '', 'DSC00895_1.JPG', 'Non-Active'),
('KCP-CPS-2', 'testing 2', 'agus,yogandi', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('KCP-CPS-3', 'testing 3', 'agus ,', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Screenshot 2022-11-29 143417_1.png', ''),
('KCP-CPS-4', 'yogandi agus', 'lll', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DSC00896.JPG', 'Non-Active'),
('KCP-CPS-5', 'ffff', 'fff,aaa', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Non-Active'),
('KCP-CPS-6', 'tiga', '12sadasd', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contract`
--

CREATE TABLE `tb_contract` (
  `ID_CONTRACT` varchar(255) NOT NULL,
  `CONTRACT_NUMBER` text NOT NULL,
  `COMPOSER` varchar(255) NOT NULL,
  `SONGS` varchar(255) NOT NULL,
  `PERCENTAGE` int(5) NOT NULL,
  `CREATED_AT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_contract`
--

INSERT INTO `tb_contract` (`ID_CONTRACT`, `CONTRACT_NUMBER`, `COMPOSER`, `SONGS`, `PERCENTAGE`, `CREATED_AT`) VALUES
('KCP-CTR-1', '123123123', '', 'ada,apa,dengan cinta', 70, '0000-00-00'),
('KCP-CTR-2', '12345', '', 'aaaaaa', 12, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `ID_CUSTOMER` varchar(255) NOT NULL,
  `CODE_CUSTOMER` varchar(255) NOT NULL,
  `CUSTOMER_NAME` varchar(255) NOT NULL,
  `TAX_ID_NUMBER` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `POST_CODE` varchar(255) NOT NULL,
  `COUNTRY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`ID_CUSTOMER`, `CODE_CUSTOMER`, `CUSTOMER_NAME`, `TAX_ID_NUMBER`, `ADDRESS`, `CITY`, `POST_CODE`, `COUNTRY`) VALUES
('KCP-CTM-1', '1234', 'testing', '123', 'testing', 'testing', '123', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_performer`
--

CREATE TABLE `tb_performer` (
  `ID_PERFORMER` varchar(255) NOT NULL,
  `PERFORMER_ORIGINAL_NAME` varchar(255) NOT NULL,
  `PERFORMER_POPULAR_NAME` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `PHOTO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_publishing`
--

CREATE TABLE `tb_publishing` (
  `ID_PUBLISHING` varchar(255) NOT NULL,
  `PUBLISHING_ORIGINAL_NAME` varchar(50) NOT NULL,
  `PUBLISHING_ALIAS_NAME` varchar(255) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `POST_CODE` varchar(5) NOT NULL,
  `COUNTRY` varchar(20) NOT NULL,
  `SIUP_NUMBER` varchar(20) NOT NULL,
  `TAX_ID_NUMBER` varchar(15) NOT NULL,
  `BANK_NAME` varchar(50) NOT NULL,
  `BANK_ACCOUNT_NAME` varchar(50) NOT NULL,
  `BANK_ACCOUNT_NUMBER` varchar(20) NOT NULL,
  `BANK_ADDRESS` varchar(100) NOT NULL,
  `BRANCH` varchar(30) NOT NULL,
  `SWIFT_CODE` varchar(15) NOT NULL,
  `MECH_SHARE` varchar(15) NOT NULL,
  `SYNC_SHARE` varchar(15) NOT NULL,
  `LYRIC_SHARE` varchar(15) NOT NULL,
  `PERFORMANCE_SHARE` varchar(15) NOT NULL,
  `TERRITORY` varchar(15) NOT NULL,
  `IP_BASE` varchar(15) NOT NULL,
  `IP_NAME` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_telephone`
--

CREATE TABLE `tb_telephone` (
  `ID_TELEPHONE` varchar(255) NOT NULL,
  `TELEPHONE_NUMBER` varchar(255) NOT NULL,
  `TELEPHONE_SUBJECT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_telephone`
--

INSERT INTO `tb_telephone` (`ID_TELEPHONE`, `TELEPHONE_NUMBER`, `TELEPHONE_SUBJECT`) VALUES
('KCP-CPS-1', '111,2221', 'one,sdasd ss'),
('KCP-CPS-2', '0', ''),
('KCP-CPS-3', '0', ''),
('KCP-CPS-4', '12345678,12345678', 'nomer pribadi 1,nomer pribadi 2'),
('KCP-CPS-5', '12345678', 'asd'),
('KCP-CPS-6', '123123123', 'aaa'),
('KCP-CPS-7', '123123123', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@gmail.com', 'Admin', '$2y$10$U8a7EmaroDpgO1MRgqUi7OTqJNrkMDMstPNvUOK3yrnsJ2GXc803i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-27 21:58:27', '2022-11-27 21:58:27', NULL),
(2, 'Ceceu@gmail.com', 'Ceceu', '$2y$10$Jxevb806PEaZbKre639huutzNdYQav75WiMxEqozLGESNbQM5d6wi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-27 22:51:37', '2022-11-27 22:51:37', NULL),
(3, 'udin@gmail.com', 'udin', '$2y$10$dubA6guIgMo4n1/T.PB1e.ihBA6Z7fvdPVTr/fCZ9UuDBGN0TgDGy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-28 01:00:25', '2022-11-28 01:00:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_composer`
--
ALTER TABLE `tb_composer`
  ADD PRIMARY KEY (`ID_COMPOSER`);

--
-- Indeks untuk tabel `tb_contract`
--
ALTER TABLE `tb_contract`
  ADD PRIMARY KEY (`ID_CONTRACT`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`ID_CUSTOMER`);

--
-- Indeks untuk tabel `tb_performer`
--
ALTER TABLE `tb_performer`
  ADD PRIMARY KEY (`ID_PERFORMER`);

--
-- Indeks untuk tabel `tb_publishing`
--
ALTER TABLE `tb_publishing`
  ADD PRIMARY KEY (`ID_PUBLISHING`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
