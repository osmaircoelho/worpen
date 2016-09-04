CREATE TABLE IF NOT EXISTS `worpen_users` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `user_password` text NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `date_create` text NOT NULL,
  `level_acess` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO worpen_users (id, username, user_password, fullname, email, date_create, level_acess) VALUES (NULL, "admin", "admin", "Administrator", "test@test", "First Day", "1");

CREATE TABLE IF NOT EXISTS `worpen_module` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `name_menu` text NOT NULL,
  `level_acess` text NOT NULL,
  `date_create` text NOT NULL,
  `active` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `worpen_log` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `date_acess` text NOT NULL,
  `hour_access` text NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
