/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : fitri

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 14/05/2024 03:05:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for anak_jalanan
-- ----------------------------
DROP TABLE IF EXISTS `anak_jalanan`;
CREATE TABLE `anak_jalanan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of anak_jalanan
-- ----------------------------
BEGIN;
INSERT INTO `anak_jalanan` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `jkel`, `agama`, `umur`, `nama_ayah`, `nama_ibu`, `alamat`) VALUES (2, 'Rendy', 'Banjarmasin', '2000-05-13', 'L', 'islam', '20', 'Purwanto', 'Sri Tuti', 'Jl S Adam');
COMMIT;

-- ----------------------------
-- Table structure for jaminan
-- ----------------------------
DROP TABLE IF EXISTS `jaminan`;
CREATE TABLE `jaminan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `anak_jalanan_id` int(11) DEFAULT NULL,
  `tuna_karya_id` int(11) DEFAULT NULL,
  `penempatan` varchar(255) DEFAULT NULL,
  `penjamin` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` text,
  `jaminan` varchar(255) DEFAULT NULL,
  `razia_id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jaminan
-- ----------------------------
BEGIN;
INSERT INTO `jaminan` (`id`, `anak_jalanan_id`, `tuna_karya_id`, `penempatan`, `penjamin`, `telp`, `alamat`, `jaminan`, `razia_id`, `tanggal`) VALUES (1, 2, 1, 'rumah rehab', 'Hasan bas', '098765678998', 'jl s adam', '10.000.000', 2, '2024-05-07');
COMMIT;

-- ----------------------------
-- Table structure for petugas
-- ----------------------------
DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of petugas
-- ----------------------------
BEGIN;
INSERT INTO `petugas` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `jkel`, `agama`, `jabatan`, `telp`, `alamat`) VALUES (1, 'Bobi', 'Banjarmasin', '2024-05-13', 'L', 'hindu', 'Pelaksana', '0866721387689', 'Jl S Lulut');
COMMIT;

-- ----------------------------
-- Table structure for razia
-- ----------------------------
DROP TABLE IF EXISTS `razia`;
CREATE TABLE `razia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `petugas_id` int(11) DEFAULT NULL,
  `kronologi` varchar(255) DEFAULT NULL,
  `anakjalanan_id` int(11) DEFAULT NULL,
  `tunakarya_id` int(11) DEFAULT NULL,
  `penempatan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of razia
-- ----------------------------
BEGIN;
INSERT INTO `razia` (`id`, `nama`, `tanggal`, `petugas_id`, `kronologi`, `anakjalanan_id`, `tunakarya_id`, `penempatan`, `status`, `lokasi`) VALUES (2, 'Pembersihan Lingkungan Daerah Kota', '2024-05-13', 1, 'menjemput anak-anak jalanan', 2, 1, 'rehabilitasi kota', 'rehab', 'Banjarmasin Tengah');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
COMMIT;

-- ----------------------------
-- Table structure for tuna_karya
-- ----------------------------
DROP TABLE IF EXISTS `tuna_karya`;
CREATE TABLE `tuna_karya` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `alamat` text,
  `umur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tuna_karya
-- ----------------------------
BEGIN;
INSERT INTO `tuna_karya` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `jkel`, `agama`, `nama_ayah`, `nama_ibu`, `alamat`, `umur`) VALUES (1, 'BUdi', 'Banjarmasin', '2000-05-02', 'P', 'islam', 'Udin', 'Siti', 'Jl Kayu Tangi II', '20');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (1, 'superadmin', NULL, 'fitri', '2024-05-14 01:29:11', '$2y$10$3k7FLC2TkBzYnumOyiv7BOmTOsTzzJHb3/p4aKcBUoGonp4Jij0Wu', NULL, 'TR9tpNv3iyMiDJhDqohb4PDrQFzXP9F9wjLJttmOAFHvEyFcBqH1YKopnZxO', '2024-05-14 01:29:11', '2024-05-14 01:29:11', NULL, NULL, 0);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
