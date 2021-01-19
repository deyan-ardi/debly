-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2021 pada 17.52
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debly_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `url_old` text NOT NULL,
  `new_url` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `akses` int(11) NOT NULL DEFAULT 0,
  `histori` int(11) NOT NULL DEFAULT 1,
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `links`
--

INSERT INTO `links` (`id`, `ip_address`, `url_old`, `new_url`, `status`, `akses`, `histori`, `create_by`, `create_date`) VALUES
(265, '127.0.0.1', '50e97dbc32f6ebd942126ef6832c52eced93401c3ed598429ec87bf0669f8487f40158c19cb5785f12789de026d097e6057218f054ec07177000ea3c548aed03H8Npay6pJGPFozdy7QAiZL/Mv8UJrggWZJunlZzbLEEumUEFroBvCAniWhnYwwFUjPpN9DTfZd6x0q2spFkplag34HARosqBmSja+fmPzEE=', '45da54d9bd2658fafedfac2c64985f57120ebe629aea3bcd9266263ffeed62034e808cba151d3f8112cb7a9aa2bd2a261f668d30c3d7185285dd4b30d5d55127KTbOAM5XVz66cDmEuk+5H2ZYeWmlOTAS+WyK0zJeyep+ZnD0ABOkrc5TEtkVICcf', 0, 1, 1, '11', '2021-01-19 23:55:20'),
(266, '127.0.0.1', 'afd2d79c1ba3fd4292a7d9e31b5aab7f913fb052d513b79de1122a505a0b972b8d5e7daec95b7fc77845195def8a16070946bb20fe5d570ac4a7496e1b3c76f964IlUqy4+fJlXJmcEiRtzb+yvFXkUuc6tCyzULF+SQlqULMOUWMiBVDsVbTTF4zQIGCuzXFMv1GoaQDN7tbvEvAi5FHJPB+A+TSFAQpzLwHswxu3ZTewkL8+R3p5CZWrbdu7jF+Z5HnVaWxQBTRlRw==', '89130798c9d46fb65d1c3c3c4acad477d606c27cd9f26a56388513d465aebf0f24c63c107676a1982e2ebbdd300a05ee909df637b56bd4f3bec1b9e483e52a055OEG4ZNTq9v5lH64ugdc1OCY/7qE9wWSPRWl+MUSft57xnwHXGjql0os/+5uxdbj', 1, 1, 1, '2', '2021-01-19 23:55:53'),
(267, '127.0.0.1', 'b82d283b92f5a0ac899e8efa15b2fcfa7b0530eb592d83f249f29aa29b748fae35b405192f399bb16860066210e6bf1e3f19e7c6af513523eb38e628125896feljPbiTQeSgGx5Zha/bwW/nkV7jhxI0cqO5fXKcjdtWYj1uJcSMH5oF3sfcoCgxO+7cpgNFpLmXaujcU0+7BKKyv89/kegZ04gc6Z/goZREP5t0Vphd4y6j7jwj1l0DZJlH/9tc85wWeLFNstuk3TRg==', '12a5460c313b23b8c039a99b065574c4ff9350ee082cfaf40767675c2fedb93572ac089d8e5e5f099702f23fbb7ab0849fb63aa28245b5f52fb2bea411434c28Xk493o00q8Z6S5rFb2sebOMQEbe30mIROHFydwJxcGzC49FtT2Ohai97+vwbFKj0', 1, 1, 1, '2', '2021-01-19 23:56:31'),
(268, '127.0.0.1', 'b5309733c0726fb8f9ebbb6a80bbad7ce783ff44280da0c42e1c181003f1d7231e42b585aa70d2432548048a5a692ac8d3b4469ab3f486f6f5df9dfe4ba76a6ahdVh3i5bxvHIJbj+R9VIdQVSRZ6kLgE59szzfplVTSaz2Oe+WbKVEuH1L8j/tSEUYKObEPZhh3I1obKyZn5GkyLSyM9ZCjhuLa0VVtMFdAk=', '6b19567934c4fc5f1036898ca38480df424a7af3cea28df39c61b005ee8a5c236e440538150bf9c8909c1d16bdeb72d4a2e2c1c319fa026e1f5de959e837cd4daAASDeZ/qxGGWwX080SuAeNuadnhEP03gHkbz0CRRqL/80ZA+d7qVs2GXPPXqQ1A', 0, 0, 0, NULL, '2021-01-20 00:08:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(2, '127.0.0.1', 'admin@gmail.com', 1611034637),
(4, '127.0.0.1', 'ada@gmail.com', 1611058842),
(5, '127.0.0.1', 'ada@gmail.com', 1611058876),
(6, '127.0.0.1', 'ada@gmail.com', 1611058889),
(7, '127.0.0.1', 'administrator@gmail.com', 1611059026),
(15, '127.0.0.1', 'riyan.clsg11@gmail.com', 1611072756);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$a1TLPjRXgAvCH2BVfWesoegU61cP5CxTH3MDoBKLpYXeb2wscfWfO', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1610944686, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', NULL, '$2y$10$indfVYxRmNHJuAxABA/ijuPoQimf0.Uf3Dgh.fTtn3icx4vdmVp9G', 'riyan.clsg11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1610862535, 1611072563, 1, 'Deyan Ardi Darmawan', NULL, NULL, NULL),
(3, '127.0.0.1', NULL, '$2y$10$39n0yKuwa6UGHdxjsQIE3.ShqTcj/vNkeWGESNqBAKeE/zL9zQL12', 'pujigayatri73@gmail.comm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1611061656, NULL, 1, 'ada ada ada', NULL, NULL, NULL),
(11, '127.0.0.1', NULL, '$2y$10$g.p6ppJoCMnsYr.1gNZEauXKhk.gs/Ubkzycyp8I68JV5/19L72Je', 'riyan.clsg@gmail.com', NULL, NULL, 'bb02b6060d0814380881', '$2y$10$Y3b.ct/LXthhzT2puH1a9.YAYrIUBNIu1LCR593O0BwUPgNSpkCnq', 1611074369, NULL, NULL, 1611069250, 1611073519, 1, 'de yan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(12, 11, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
