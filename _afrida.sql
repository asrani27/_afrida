/*
 Navicat Premium Dump SQL

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : _afrida

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 30/05/2025 04:21:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for hasil
-- ----------------------------
DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pendaftaran_id` int(11) unsigned DEFAULT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  `sertifikat` varchar(255) DEFAULT NULL,
  `catatan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pendaftaran_id_hasil` (`pendaftaran_id`),
  CONSTRAINT `pendaftaran_id_hasil` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hasil
-- ----------------------------
BEGIN;
INSERT INTO `hasil` (`id`, `pendaftaran_id`, `nilai`, `sertifikat`, `catatan`, `created_at`, `updated_at`) VALUES (1, 1, '100', 'ok', 'ok', '2025-05-29 21:11:39', '2025-05-29 21:11:39');
COMMIT;

-- ----------------------------
-- Table structure for instruktur
-- ----------------------------
DROP TABLE IF EXISTS `instruktur`;
CREATE TABLE `instruktur` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `spesialisasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of instruktur
-- ----------------------------
BEGIN;
INSERT INTO `instruktur` (`id`, `nama`, `telp`, `spesialisasi`, `created_at`, `updated_at`) VALUES (1, 'kjjh1', 'kjhkjh', 'kjhkj', '2025-05-26 21:53:34', '2025-05-26 21:53:36');
COMMIT;

-- ----------------------------
-- Table structure for jadwal
-- ----------------------------
DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_id` int(11) DEFAULT NULL,
  `instruktur_id` int(11) DEFAULT NULL,
  `penyelenggara_id` int(11) DEFAULT NULL,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jadwal
-- ----------------------------
BEGIN;
INSERT INTO `jadwal` (`id`, `jenis_id`, `instruktur_id`, `penyelenggara_id`, `mulai`, `selesai`, `keterangan`, `created_at`, `updated_at`) VALUES (1, 2, 1, 1, '2025-05-29', '2025-05-29', 'ok', '2025-05-29 20:57:35', '2025-05-29 21:02:04');
COMMIT;

-- ----------------------------
-- Table structure for jenis
-- ----------------------------
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `durasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jenis
-- ----------------------------
BEGIN;
INSERT INTO `jenis` (`id`, `nama`, `deskripsi`, `durasi`, `created_at`, `updated_at`) VALUES (2, 'Ai', 'keterangan', '8 jam', '2025-05-13 15:34:49', '2025-05-26 21:55:49');
COMMIT;

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `perusahaan_id` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `tanggal_bekerja` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
BEGIN;
INSERT INTO `karyawan` (`id`, `nik`, `nama`, `perusahaan_id`, `alamat`, `telp`, `jkel`, `pendidikan`, `tanggal_bekerja`, `created_at`, `updated_at`, `jurusan`) VALUES (1, '23454632', 'NSI', 1, 'Jl Pramuka', '0987656789', 'L', 'D3', '2025-05-13', '2025-05-13 16:18:55', '2025-05-13 16:22:35', '-');
COMMIT;

-- ----------------------------
-- Table structure for kodefikasi
-- ----------------------------
DROP TABLE IF EXISTS `kodefikasi`;
CREATE TABLE `kodefikasi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `kode_wilayah` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `kode_klui` varchar(255) DEFAULT NULL,
  `ke` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kodefikasi
-- ----------------------------
BEGIN;
INSERT INTO `kodefikasi` (`id`, `nomor`, `kode_wilayah`, `tahun`, `kode_klui`, `ke`, `created_at`, `updated_at`) VALUES (1, '12321', 'kjhkjh', '2005', 'kjnj', '2', '2025-05-13 15:39:48', '2025-05-13 15:40:18');
COMMIT;

-- ----------------------------
-- Table structure for laporkerja
-- ----------------------------
DROP TABLE IF EXISTS `laporkerja`;
CREATE TABLE `laporkerja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `perusahaan_id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masa_berlaku` varchar(255) DEFAULT NULL,
  `jumlah_karyawan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of laporkerja
-- ----------------------------
BEGIN;
INSERT INTO `laporkerja` (`id`, `nomor`, `perusahaan_id`, `tanggal`, `masa_berlaku`, `jumlah_karyawan`, `created_at`, `updated_at`) VALUES (1, '123', 1, '2025-05-13', '2 tahun', '101', '2025-05-13 16:10:58', '2025-05-13 16:11:41');
COMMIT;

-- ----------------------------
-- Table structure for pendaftaran
-- ----------------------------
DROP TABLE IF EXISTS `pendaftaran`;
CREATE TABLE `pendaftaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `peserta_id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pendaftaran
-- ----------------------------
BEGIN;
INSERT INTO `pendaftaran` (`id`, `peserta_id`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES (1, 1, '2025-05-29', 'ok', '2025-05-29 20:48:54', '2025-05-29 21:05:56');
COMMIT;

-- ----------------------------
-- Table structure for penyelenggara
-- ----------------------------
DROP TABLE IF EXISTS `penyelenggara`;
CREATE TABLE `penyelenggara` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of penyelenggara
-- ----------------------------
BEGIN;
INSERT INTO `penyelenggara` (`id`, `nama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES (1, 'SMA1', 'jl pramuka', '09876545678', '2025-05-26 22:08:16', '2025-05-29 20:54:05');
COMMIT;

-- ----------------------------
-- Table structure for perusahaan
-- ----------------------------
DROP TABLE IF EXISTS `perusahaan`;
CREATE TABLE `perusahaan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_id` int(11) DEFAULT NULL,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `nama_pimpinan` varchar(255) DEFAULT NULL,
  `jumlah_karyawan` varchar(255) DEFAULT NULL,
  `status_karyawan` varchar(255) DEFAULT NULL,
  `nama_pemilik` varchar(255) DEFAULT NULL,
  `alamat_pemilik` varchar(255) DEFAULT NULL,
  `nama_pengurus` varchar(255) DEFAULT NULL,
  `alamat_pengurus` varchar(255) DEFAULT NULL,
  `status_perusahaan` varchar(255) DEFAULT NULL,
  `alamat_perusahaan` varchar(255) DEFAULT NULL,
  `telp_perusahaan` varchar(255) DEFAULT NULL,
  `status_pemilik` varchar(255) DEFAULT NULL,
  `tanggal_berdiri` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perusahaan
-- ----------------------------
BEGIN;
INSERT INTO `perusahaan` (`id`, `jenis_id`, `nama_usaha`, `nama_pimpinan`, `jumlah_karyawan`, `status_karyawan`, `nama_pemilik`, `alamat_pemilik`, `nama_pengurus`, `alamat_pengurus`, `status_perusahaan`, `alamat_perusahaan`, `telp_perusahaan`, `status_pemilik`, `tanggal_berdiri`, `created_at`, `updated_at`) VALUES (1, 1, 'CV digital bersama', 'jhkj', 'hjk', 'hk', 'jh', 'kjh', 'kjh', 'kjh', 'kjh', 'kjh', 'kjh', 'kjhk', '2025-05-13', '2025-05-13 15:52:50', '2025-05-13 15:56:29');
COMMIT;

-- ----------------------------
-- Table structure for peserta
-- ----------------------------
DROP TABLE IF EXISTS `peserta`;
CREATE TABLE `peserta` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of peserta
-- ----------------------------
BEGIN;
INSERT INTO `peserta` (`id`, `nama`, `alamat`, `telp`, `email`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES (1, 'udin', 'sdf', 'asd', 'dsf', '2025-09-26', '2025-05-26 15:44:54', '2025-05-29 21:06:00');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (1, 'superadmin', 'superadmin', '$2y$12$r0HAFQIZdiAabhk3HwCdVub716cax1jMnmwKnv76nJz8sJx0M3TB6', NULL, NULL, '2024-12-20 01:49:44', 'superadmin');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (11, 'adi', 'adi2', '$2y$12$S8y2eXzZhf7OMrScCfdwT.9EZo6yv7EBZUkrk/faHh3DNzW/7zhPu', NULL, '2025-05-12 22:54:44', '2025-05-12 22:56:31', 'superadmin');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
