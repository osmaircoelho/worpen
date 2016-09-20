CREATE TABLE IF NOT EXISTS `worpen_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` text NOT NULL,
  `language` text NOT NULL,
  `modstart` text NOT NULL,
  `server_mail` text NOT NULL,
  `port_mail` text NOT NULL,
  `user_mail` text NOT NULL,
  `password_mail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_info` (`id`, `sitename`, `language`, `modstart`, `server_mail`, `port_mail`, `user_mail`, `password_mail`) VALUES
(1, 'Worpen', 'en', 'home', 'smtp.site.com', '587', 'user@site.com', 'Password');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_log` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `date_access` text NOT NULL,
  `hour_access` text NOT NULL,
  `ip` text NOT NULL,
  `plataform` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_menu` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `name_menu` text NOT NULL,
  `access_level` text NOT NULL,
  `date_create` text NOT NULL,
  `active` text NOT NULL,
  `display` text NOT NULL,
  `badge` text NOT NULL,
  `plataform` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_menu` (`id`, `url`, `name_menu`, `access_level`, `date_create`, `active`, `display`, `badge`, `plataform`) VALUES
(2, 'test', 'Bazinga', '1', 'today', 'yes', 'yes', 'New', '1');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_module` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `access_level` text NOT NULL,
  `date_create` text NOT NULL,
  `active` text NOT NULL,
  `plataform` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_module` (`id`, `name`, `url`, `access_level`, `date_create`, `active`, `plataform`) VALUES
(2, 'Test', 'test', '1', 'today', 'yes', '1');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `user` text NOT NULL,
  `blank` text NOT NULL,
  `active` text NOT NULL,
  `plataform` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_notification` (`id`, `name`, `url`, `user`, `blank`, `active`, `plataform`) VALUES
(1, 'Welcome', 'https://worpen.github.io/', 'admin', 'yes', 'yes', '1');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_users` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `date_create` text NOT NULL,
  `access_level` text NOT NULL,
  `plataform` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_users` (`id`, `username`, `password`, `fullname`, `email`, `date_create`, `access_level`, `plataform`) VALUES
(1, 'admin', '4bff1125627ba61be147347758403f5690247eca', 'Administrator', 'test@test', 'First Day', '1', '1');
