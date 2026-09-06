CREATE DATABASE IF NOT EXISTS url_safety_checker
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE url_safety_checker;

CREATE TABLE IF NOT EXISTS scans (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  url_hash CHAR(64) NOT NULL,
  url TEXT NOT NULL,
  normalized_url TEXT NOT NULL,
  verdict ENUM('safe','suspicious','dangerous','unknown') NOT NULL DEFAULT 'unknown',
  score TINYINT UNSIGNED NOT NULL DEFAULT 0,
  reasons JSON NULL,
  providers JSON NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_url_hash (url_hash),
  INDEX idx_created_at (created_at)
);
