
CREATE TABLE IF NOT EXISTS `worpen_log` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `date_access` text NOT NULL,
  `hour_access` text NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_log` (`id`, `user`, `date_access`, `hour_access`, `ip`) VALUES
(1, 'admin', '01/09/2016', '02:58:31', '108.175.157.52');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_menu` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `name_menu` text NOT NULL,
  `access_level` text NOT NULL,
  `date_create` text NOT NULL,
  `active` text NOT NULL,
  `show` text NOT NULL,
  `badge` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_menu` (`id`, `url`, `name_menu`, `access_level`, `date_create`, `active`, `show`, `badge`) VALUES
(1, 'test', 'Test Menu', '2', 'today', 'yes', 'yes', '');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_module` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `name_menu` text NOT NULL,
  `access_level` text NOT NULL,
  `date_create` text NOT NULL,
  `active` text NOT NULL,
  `show` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_module` (`id`, `name`, `url`, `name_menu`, `access_level`, `date_create`, `active`, `show`) VALUES
(1, 'Test', 'test', 'Test Menu', '2', 'today', 'yes', 'yes');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `user` text NOT NULL,
  `active` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_notification` (`id`, `name`, `url`, `user`, `active`) VALUES
(1, 'teste', '?mod=test', 'admin', 'yes');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `worpen_users` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `date_create` text NOT NULL,
  `access_level` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `worpen_users` (`id`, `username`, `password`, `fullname`, `email`, `date_create`, `access_level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'test@test', 'First Day', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;