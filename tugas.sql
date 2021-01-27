-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2020 pada 12.11
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_tugas`
--

CREATE TABLE `daftar_tugas` (
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` text NOT NULL,
  `deskripsi` text NOT NULL,
  `linkurl` text NOT NULL,
  `linkdocument` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_tugas`
--

INSERT INTO `daftar_tugas` (`id_tugas`, `nama_tugas`, `deskripsi`, `linkurl`, `linkdocument`) VALUES
(1, 'Tugas 1 : Domain & Subdomain', 'Tugas 1 Pembuatan Domain dan Subdomain dan Membuat Biodata Sederhana', 'https://satyawirapermana.kelompok3.site/PraktikumPAW/Tugas1/', 'https://drive.google.com/drive/folders/1sJu9kRrWidXGnGrkElx2_mYDbK-GDy9D?usp=sharing'),
(2, 'Tugas 2 : CV dengan HTML', 'Tugas 2 Membuat Curriculum Vitae (CV) dengan HTML', 'https://satyawirapermana.kelompok3.site/PraktikumPAW/Tugas2/', 'https://drive.google.com/drive/folders/1Xyh6Frf-YGrEtElOMqTOJuOqJSUxlk-a?usp=sharing'),
(3, 'Tugas 3 : Company Profile', 'Membuat Company Profile menggunakan HTML dan CSS', 'https://satyawirapermana.kelompok3.site/PraktikumPAW/Tugas3/', 'https://drive.google.com/drive/folders/1byyxkqtZFSDMNrOvHgH8bJid_KFQRnAO?usp=sharing'),
(4, 'Tugas 4 : Slicing', 'Membuat Website dengan Teknik Slicing', 'https://satyawirapermana.kelompok3.site/PraktikumPAW/Tugas4/', 'https://drive.google.com/drive/folders/1xlGNygE7j9oLAsXkkdDXMEdtV_JoMHFD?usp=sharing'),
(5, 'Tugas 5 : Pembuatan Form dengan Bootstrap', 'Tugas Kelompok yaitu pembuatan Form dengan Bootstrap (Sistem Penilaian IKD Dosen FIK)', 'https://kelompok3.site/', 'https://drive.google.com/file/d/1qHsHWHBIA01A452OmV1IOo0fKKH_uyTP/view?usp=sharing'),
(6, 'Laporan Hasil Praktikum', 'Praktikum BasicPHP yaitu Membuat Kalkulator Berbasis Web', 'https://satyawirapermana.kelompok3.site/PraktikumPAW/TugasBasicPHP/', 'https://drive.google.com/drive/folders/10kKW5oCES3ebV_ruFszPJIn6mOKe7LdI?usp=sharing'),
(7, 'UTS No 1', 'Konversi desain mockup ke dalam bentuk HTML, CSS menggunakan Bootstrap', 'https://satyawirapermana.kelompok3.site/PraktikumPAW/UTS/utsno1/', 'https://drive.google.com/file/d/19gYdhcE0JGrid80d43icACVg-dKlhuIr/view?usp=sharing'),
(8, 'UTS No 2 ', 'Membuat form jumlah anggota kelompok, program akan menampilkan form sebanyak inputan yg telah di input sebelumnya. Setelah di klik submit, maka akan memunculkan nama yg telah di input', 'https://satyawirapermana.kelompok3.site/PraktikumPAW/UTS/utsno2.php', 'https://drive.google.com/file/d/1LMvE_IulMOGPzcjESE8Hnu1MQ3W_uMtM/view?usp=sharing'),
(9, 'Tugas Basic SQL', 'Membuat Halaman Login dan cetak.php menggunakan PHP dan MySQL. username=admin, password=admin', 'https://satyawirapermana.kelompok3.site/PraktikumPAW/TugasLogin/', 'https://drive.google.com/drive/folders/1Ttd4DDuDkf9nB4Z7wvAec_7yDIY2KyuQ?usp=sharing'),
(10, 'Praktikum 12 : Aplikasi Kumpulan Tugas', 'Membuat aplikasi untuk menampilkan semua tugas. Ketika ada tugas bisa jadi terdapat beberapa file, dibuatkan link yang berbeda untuk menampilkannya', 'https://satyawirapermana.kelompok3.site/tugas/', 'https://drive.google.com/file/d/1ifRiyYg_NDgX7TcXwpXwbRKMzJvjjvo-/view?usp=sharing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Satya Wira Permana', 'satyawirapermana', 'satya123', 'admin'),
(2, 'Pengguna', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_tugas`
--
ALTER TABLE `daftar_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_tugas`
--
ALTER TABLE `daftar_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
