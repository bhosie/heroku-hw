CREATE TABLE `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request` text COLLATE utf8_unicode_ci,
  `response` text COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `incoming` tinyint(1) unsigned DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci