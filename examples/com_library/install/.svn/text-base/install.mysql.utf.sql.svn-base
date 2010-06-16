CREATE TABLE IF NOT EXISTS `#__library_authors` (
  `library_author_id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY  (`library_author_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `#__library_authors` VALUES(1, 'Hergé');
INSERT INTO `#__library_authors` VALUES(2, 'J. K. Rowling');
INSERT INTO `#__library_authors` VALUES(3, 'Joomlatools');

CREATE TABLE `#__library_books` (
  `library_book_id` int(11) NOT NULL auto_increment,
  `library_author_id` int(11) NOT NULL,
  `library_genre_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  PRIMARY KEY  (`library_book_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8  ;

INSERT INTO `#__library_books` VALUES(4, 1, 1, 'The Secret of the Unicorn');
INSERT INTO `#__library_books` VALUES(5, 3, 3, 'The Magic Powers Of Koowa');
INSERT INTO `#__library_books` VALUES(6, 2, 2, 'Harry Potter and the Deathly Hallows');
INSERT INTO `#__library_books` VALUES(7, 1, 1, 'Tintin in the Land of the Soviets');
INSERT INTO `#__library_books` VALUES(8, 1, 1, 'Tintin in the Congo');
INSERT INTO `#__library_books` VALUES(10, 1, 1, 'Tintin in America');
INSERT INTO `#__library_books` VALUES(11, 1, 1, 'Cigars of the Pharaoh ');
INSERT INTO `#__library_books` VALUES(12, 1, 1, 'The Blue Lotus ');

CREATE TABLE `#__library_genres` (
  `library_genre_id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY  (`library_genre_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

INSERT INTO `#__library_genres` VALUES(1, 'Comic');
INSERT INTO `#__library_genres` VALUES(2, 'Fiction');
INSERT INTO `#__library_genres` VALUES(3, 'Educational');