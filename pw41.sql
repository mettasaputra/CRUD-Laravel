-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2020 pada 06.41
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw41`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingans`
--

CREATE TABLE `bimbingans` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahasiswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bimbingan` datetime NOT NULL,
  `materi_bimbingan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bimbingans`
--

INSERT INTO `bimbingans` (`id`, `mahasiswa`, `prodi`, `dosen`, `tgl_bimbingan`, `materi_bimbingan`, `created_at`, `updated_at`) VALUES
(6, 'Metta Saputra', 'MJ', 'Johannes Petrusss', '2020-06-10 18:07:00', 'Bahas hasil UAS semester 4', NULL, '2020-06-10 11:07:12'),
(8, 'Zicola Vladimir', 'TI', 'exar', '2020-06-10 18:12:00', 'ss', '2020-06-10 11:12:36', '2020-06-10 11:12:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_10_114934_create_bimbingans_table', 2),
(4, '2020_06_10_120400_create_bimbingans_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Metta Saputra', 'mettasaputra@mhs.mdp.ac.id', '$2y$10$LJBMFSCRPM//LFmi/HE0BO30XOzTMSNNKxnOuZkwTRkPvESDMNpkG', 'jxAgbyTMhsOE1zv3rI7wekLqXGThwoy8mY79KpnaWSNf1YMeNS6wEmBHOEzs', '2020-06-10 08:31:59', '2020-06-10 08:31:59'),
(2, 'Derry Alamsyah', 'derry@dosen.mdp.ac.id', '$2y$10$LJBMFSCRPM//LFmi/HE0BO30XOzTMSNNKxnOuZkwTRkPvESDMNpkG', 'MhjAtQI2tQ5slmp3xzXRIl1tVx27RuU7NNxLkp119fSlkfWt4sgm6sgXZyUb', '2020-06-10 09:14:08', '2020-06-10 09:14:08'),
(3, 'Nanda Alamsyah', 'nanda@gmail.com', '$2y$10$LJBMFSCRPM//LFmi/HE0BO30XOzTMSNNKxnOuZkwTRkPvESDMNpkG', 'Y9JJKA6nBQJKT2xOg39Sa57hGg830LvQBjSp3qWwnJljOHusPs65ZUpSRtHL', '2020-06-10 09:30:00', '2020-06-10 09:30:00'),
(5, 'Metta Keren', 'metta@mhs.mdp.ac.id', '$2y$10$O/m2ymRH7O8FQkCH0YsH5uN9hIYWdnoMHdErF9szOGV6in3Nt19xS', 'slmYRPCiS85KuihQpqiWvAtBSNO7zjjlbrEEJznz4wn1xhQMJqnJCHOYyDQ3', '2020-06-10 10:25:42', '2020-06-10 10:25:42'),
(7, 'Metta Keren', 'mettakeren@mhs.mdp.ac.id', '$2y$10$KIybQTSOMf07h7wBFLgJCuqLI14OC2jF5px3huv/GTen4maiASXAC', '3huPoc4Y5xN3SVvDyyHu3trQoJdJ4IDZryBfovdaqv6ZmWd5fNeHxfUsEMzd', '2020-06-10 10:26:03', '2020-06-10 10:26:03'),
(8, 'Staff UPT', 'upt@mdp.ac.id', '$2y$10$LoLdLOHHmZBSQXpdXssRWuSZNZL5DFJGj2SwLfuo36AeIGFAn4Rri', 'eT3bhqTIU59y0urRgwkQzikDmS41e43mat8vuHU5LhQCOz4zD9gxzninjJ20', '2020-06-10 10:32:26', '2020-06-10 10:32:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bimbingans`
--
ALTER TABLE `bimbingans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bimbingans`
--
ALTER TABLE `bimbingans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
