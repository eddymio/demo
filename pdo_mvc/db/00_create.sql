CREATE TABLE `app_person` (
  `id` smallint(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `age` TINYINT NOT NULL,
  `date_created` datetime NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_USER` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `app_book` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT NOW(),
  `person_id` SMALLINT(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT fk_book_person foreign key(person_id) REFERENCES app_person(id)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
