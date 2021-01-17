-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2021 pada 00.26
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
-- Database: `tubes_pw2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kendaraan`
--

CREATE TABLE `jenis_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `jenis_kendaraan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kendaraan`
--

INSERT INTO `jenis_kendaraan` (`id_kendaraan`, `jenis_kendaraan`) VALUES
(1, 'Mobil'),
(2, 'Sepeda Motor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`) VALUES
(1, 'Raja Ryan Saputra'),
(2, 'Ronaldo Tasman'),
(3, 'Ahmad Dzaki'),
(4, 'Stefani Leonardia'),
(5, 'Angelina Fransisca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_user` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `no_plat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `point`
--

CREATE TABLE `point` (
  `id_point` int(11) NOT NULL,
  `jenis_BBM_point` varchar(45) NOT NULL,
  `jlh_point` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `point`
--

INSERT INTO `point` (`id_point`, `jenis_BBM_point`, `jlh_point`) VALUES
(1, 'Pertamax', 2),
(2, 'Pertamax Turbo', 2.5),
(3, 'Pertalite', 1),
(4, 'Solar', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pom_bensin`
--

CREATE TABLE `pom_bensin` (
  `id_pos_BBM` int(11) NOT NULL,
  `kode_nama_pom` varchar(45) NOT NULL,
  `alamat_pom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pom_bensin`
--

INSERT INTO `pom_bensin` (`id_pos_BBM`, `kode_nama_pom`, `alamat_pom`) VALUES
(1, 'POM Bensin Pasteur', 'Pasteur, Bandung'),
(2, 'POM Bensin Cileunyi', 'Cileunyi, Sumedang'),
(3, 'POM Bensin Majalengka', 'Majalengka, Majalengka'),
(4, 'POM Bensin Senopati', 'Senopati, Jakarta Selatan'),
(5, 'POM Bensin Kalibata', 'Kalibata, Jakarta Selatan'),
(6, 'Pom Bensin Buah Batu', 'Pom Bensin Buah Batu'),
(7, 'Pom Bensin SCBD', 'Pom Bensin SCBD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'Owner'),
(2, 'Member'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pos_BBM` int(11) NOT NULL,
  `id_point` int(11) NOT NULL,
  `jlh_liter` float NOT NULL,
  `jlh_poin` float NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `insertpoin` AFTER INSERT ON `transaksi` FOR EACH ROW UPDATE transaksi SET jlh_poin=ROUND(new.jlh_liter,0)*point.jlh_point WHERE new.no_transaksi=no_transaksi
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role_user` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `role_user`, `tgl_lahir`) VALUES
(1, 'Andika', 'andika', 'e530f0bdad294cb3581855e5f839a8c0', 1, '1999-10-01'),
(2, 'Weddy', 'Admin', 'Admin', 3, '2000-03-22'),
(3, 'weddysitohang', '1872063', '202cb962ac59075b964b07152d234b70', 2, '2021-01-17'),
(4, 'Raja', 'uhuy', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '2021-01-17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD KEY `fk_idekendaraan` (`id_kendaraan`),
  ADD KEY `fk_iduser` (`id_user`);

--
-- Indeks untuk tabel `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id_point`);

--
-- Indeks untuk tabel `pom_bensin`
--
ALTER TABLE `pom_bensin`
  ADD PRIMARY KEY (`id_pos_BBM`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_user_idx` (`id_user`),
  ADD KEY `id_pos_idx` (`id_pos_BBM`),
  ADD KEY `id_point_idx` (`id_point`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_user_idx` (`role_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `point`
--
ALTER TABLE `point`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pom_bensin`
--
ALTER TABLE `pom_bensin`
  MODIFY `id_pos_BBM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `fk_idekendaraan` FOREIGN KEY (`id_kendaraan`) REFERENCES `jenis_kendaraan` (`id_kendaraan`),
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `id_point` FOREIGN KEY (`id_point`) REFERENCES `point` (`id_point`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_pos` FOREIGN KEY (`id_pos_BBM`) REFERENCES `pom_bensin` (`id_pos_BBM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_user` FOREIGN KEY (`role_user`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
