-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2017. Ápr 29. 07:45
-- Kiszolgáló verziója: 5.7.14
-- PHP verzió: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `akuma`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_about`
--

CREATE TABLE `xyz_about` (
  `about_id` int(11) NOT NULL,
  `about_short` text,
  `about_long` text,
  `last_updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_about`
--

INSERT INTO `xyz_about` (`about_id`, `about_short`, `about_long`, `last_updated`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2016-11-21 15:34:56');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_adv`
--

CREATE TABLE `xyz_adv` (
  `adv_id` int(11) NOT NULL,
  `adv_name` varchar(255) DEFAULT NULL,
  `adv_img` text,
  `adv_url` text,
  `active` int(11) NOT NULL DEFAULT '0',
  `display_location` varchar(50) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_adv`
--

INSERT INTO `xyz_adv` (`adv_id`, `adv_name`, `adv_img`, `adv_url`, `active`, `display_location`, `date_created`) VALUES
(1, 'Manatee Home 3', 'MODULES/manatee.jpg', 'https://www.manatee.gg/', 1, 'home', '2016-11-19 16:04:00'),
(2, 'Manatee Home 2', 'MODULES/manatee2.jpg', 'https://www.manatee.gg/', 1, 'home', '2016-11-19 16:04:00'),
(3, 'Manatee Vertical 1 ', 'MODULES/manatee v.jpg', 'https://www.manatee.gg/', 1, 'aside', '2016-11-19 16:04:00'),
(4, 'Manatee Vertical 2', 'MODULES/manatee v.jpg', 'https://www.manatee.gg/', 1, 'aside', '2016-11-19 16:04:00'),
(5, 'Manatee Home 1', 'MODULES/MANATEE1.jpg', 'https://www.manatee.gg/', 1, 'home', '2016-11-25 08:09:32');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_awards`
--

CREATE TABLE `xyz_awards` (
  `award_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `game_id` int(11) DEFAULT NULL,
  `event_name` text,
  `event_date` datetime NOT NULL,
  `place` int(11) DEFAULT NULL,
  `description` text,
  `event_url` text,
  `active` int(11) NOT NULL DEFAULT '0',
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_awards`
--

INSERT INTO `xyz_awards` (`award_id`, `team_id`, `game_id`, `event_name`, `event_date`, `place`, `description`, `event_url`, `active`, `date_posted`) VALUES
(12, 17, 12, 'BeSports Student Clash Ghent', '2016-04-19 00:00:00', 1, '19-4-2016\r\nBeSports Student Clash Ghent', '', 1, '2016-11-18 09:41:08'),
(13, 17, 12, 'BeSports Student Clash Finals', '2016-06-08 00:00:00', 3, 'BeSports Student Clash Finals\r\n7-5-2016', '', 1, '2016-11-18 09:41:37'),
(14, 13, 7, 'Frag-o-matic 18.1', '2016-09-09 00:00:00', 1, '', 'http://www.fom.be/', 1, '2016-11-21 15:21:42'),
(15, 13, 7, 'The Reality XVII: Virtual Reality', '2016-09-22 00:00:00', 1, '', 'https://thereality.nl/', 1, '2016-11-21 15:22:18'),
(16, 14, 11, 'The Reality XVII: Virtual Reality', '2016-09-22 00:00:00', 1, '', 'https://thereality.nl/', 1, '2016-11-21 15:22:44'),
(9, 17, 12, 'Frag-o-matic 18.0', '2016-02-05 00:00:00', 5, 'Frag-o-matic 18.0\r\n5-2-2016  -  7-2-2016', 'http://www.fom.be/', 1, '2016-11-18 09:38:39'),
(10, 13, 7, 'Frag-o-matic 18.0', '2016-02-05 00:00:00', 7, '5-2-2016  -  7-2-2016	\r\nFrag-o-matic 18.0	\r\n\r\nresult:\r\n7/13th', 'http://www.fom.be/', 1, '2016-11-18 09:39:29'),
(11, 17, 12, 'ThermiLAN', '2016-03-17 00:00:00', 1, 'ThermiLAN\r\n17-3-2016  -  18-3-2016', 'https://vtk.ugent.be/thermilan/', 1, '2016-11-18 09:40:29'),
(8, 17, 12, 'Student LAN v4', '2015-11-27 00:00:00', 1, 'Student LAN v4\r\n27-11-2015  -  29-11-2015', 'http://www.kdglanparty.be/', 1, '2016-11-18 09:35:53'),
(7, 13, 7, 'Frag-o-matic 17.0', '2015-02-06 00:00:00', 3, 'Frag-o-matic 17.0\r\n6-2-2015  -  8-2-2015', 'http://www.fom.be/', 1, '2016-11-18 09:34:34'),
(18, 17, 12, 'Breakout', '2016-05-13 00:00:00', 2, '13-5-2016  -  15-5-2016', '', 1, '2016-11-22 08:04:16'),
(19, 13, 7, 'ESL Benelux Champions Summer Season 2016', '2016-05-18 00:00:00', 2, '', 'http://pro.eslgaming.com/benelux/gate/', 1, '2016-11-22 08:05:05'),
(20, 13, 7, 'ESL Benelux Champions Summer Final 2016', '2016-06-08 00:00:00', 3, '', 'http://pro.eslgaming.com/benelux/gate/', 1, '2016-11-22 08:05:44'),
(21, 17, 12, 'ESGR LAN', '2016-06-10 00:00:00', 1, '', 'http://www.eatsleepgamerepeat.be/', 1, '2016-11-22 08:08:12'),
(22, 17, 12, 'ZanziLAN', '2016-07-29 00:00:00', 1, '', 'http://zanzilan.be/', 1, '2016-11-22 08:09:46'),
(23, 17, 12, 'BeSports July Monthly Finals', '2016-08-07 00:00:00', 2, '', '', 1, '2016-11-22 08:10:35'),
(24, 17, 12, 'IeSF BE Qualifier', '2016-08-23 00:00:00', 1, '', '', 1, '2016-11-22 08:11:53'),
(25, 17, 12, 'Frag-o-matic 18.1', '2016-09-09 00:00:00', 5, '', 'http://www.fom.be/', 1, '2016-11-22 08:12:38'),
(26, 17, 12, 'Frag-o-matic 18.1 Sector One Redemption Cup', '2016-09-09 00:00:00', 2, '', 'http://www.fom.be/', 1, '2016-11-22 08:13:08'),
(27, 13, 7, 'ESWC Benelux qualifier on CS:GO', '2016-09-23 00:00:00', 1, '', '', 1, '2016-11-22 08:13:51'),
(28, 17, 12, 'World championships IeSF Jakarta', '2016-10-05 00:00:00', 6, '', '', 1, '2016-11-22 08:14:27'),
(29, 13, 7, 'ESWC Benelux Finals on CS:GO', '2016-10-08 00:00:00', 2, '', '', 1, '2016-11-22 08:15:02');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_categories`
--

CREATE TABLE `xyz_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text,
  `category_short` text,
  `category_image` text,
  `category_group` text,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_categories`
--

INSERT INTO `xyz_categories` (`category_id`, `category_name`, `category_short`, `category_image`, `category_group`, `date_created`) VALUES
(0, 'Uncategorized', 'n/a', '', '', '2016-11-05 16:22:48'),
(6, 'League of Legends', 'LOL', '', 'games', '2015-10-03 15:47:32'),
(7, 'Counter-Strike: Global Offensive', 'CS:GO', '', 'games', '2015-10-03 15:47:32'),
(8, 'Call of Duty 4', 'COD4', '', 'games', '2015-10-14 09:03:53'),
(11, 'Overwatch', 'Overwatch', '', 'games', '2016-11-18 08:17:50'),
(12, 'Hearthstone', 'Hs', '', 'games', '2016-11-18 08:25:07'),
(13, 'Dota 2', 'Dota', '', 'games', '2016-11-18 08:25:24'),
(14, 'FIFA 17', 'FIFA', '', 'games', '2016-11-18 08:25:52'),
(15, 'Rocket League', 'RL', '', 'games', '2016-11-18 08:26:16');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_comment`
--

CREATE TABLE `xyz_comment` (
  `comment_id` int(11) NOT NULL,
  `controller` text,
  `item_id_key` text,
  `item_id` text,
  `location` text,
  `comment_text` varchar(600) DEFAULT NULL,
  `poster_id` int(11) DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_comment`
--

INSERT INTO `xyz_comment` (`comment_id`, `controller`, `item_id_key`, `item_id`, `location`, `comment_text`, `poster_id`, `date_posted`) VALUES
(61, 'user', 'user_id', '35', 'user/profile/35/', 'Ahoy!', 35, '2016-11-21 20:45:45'),
(69, 'forum', 'thread_id', '12', 'forum/thread/12/aaaaaaaaaaaaaaaaaa', 'werwerw', 35, '2017-04-18 08:41:25'),
(64, 'forum', 'thread_id', '1', 'forum/thread/1/test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 35, '2017-04-15 18:56:35'),
(65, 'forum', 'thread_id', '1', 'forum/thread/1/test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 35, '2017-04-15 18:56:41'),
(66, 'forum', 'thread_id', '1', 'forum/thread/1/test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 35, '2017-04-15 18:56:50'),
(67, 'forum', 'thread_id', '1', 'forum/thread/1/test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 35, '2017-04-15 19:04:56'),
(68, 'forum', 'thread_id', '1', 'forum/thread/1/test', 'apple', 35, '2017-04-15 20:47:43'),
(70, 'forum', 'thread_id', '13', 'forum/thread/13/sed-ut-perspiciatis-unde-omnis-iste-natus', 'sdfsdfsdf', 35, '2017-04-18 09:29:39'),
(71, 'forum', 'thread_id', '11', 'forum/thread/11/lorem-ipsum-dolor-sit-amet', 'sadsadsad', 35, '2017-04-18 10:08:18');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_contact`
--

CREATE TABLE `xyz_contact` (
  `contact_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contact_name` text,
  `email` text,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_contact`
--

INSERT INTO `xyz_contact` (`contact_id`, `user_id`, `contact_name`, `email`, `active`) VALUES
(3, 27, 'Management', 'niels@venkogaming.com', 1),
(4, 35, 'Webmaster', 'kemenydani93@gmail.com', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_downloads`
--

CREATE TABLE `xyz_downloads` (
  `download_id` int(11) NOT NULL,
  `download_name` varchar(255) DEFAULT NULL,
  `file_path` text,
  `download_desc` text,
  `active` int(11) NOT NULL DEFAULT '0',
  `download_count` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_downloads`
--

INSERT INTO `xyz_downloads` (`download_id`, `download_name`, `file_path`, `download_desc`, `active`, `download_count`, `date_created`) VALUES
(1, 'Test file 1', 'www.google.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 0, '2017-04-18 19:48:10'),
(2, 'Test file 2', 'www.google.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 0, '2017-04-18 19:48:19'),
(3, 'Test file 3', 'www.google.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 0, '2017-04-18 19:48:26'),
(4, 'Test file 4', 'www.google.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 0, '2017-04-18 19:48:37'),
(5, 'Test file 5', 'www.google.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 0, '2017-04-18 19:48:44'),
(6, 'Test file 6', 'MODULES/Downloads/Xonar_U7_4_16_win10.zip', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 2, '2017-04-19 12:36:54');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_forum`
--

CREATE TABLE `xyz_forum` (
  `forum_id` int(11) NOT NULL,
  `forum_title` varchar(255) DEFAULT NULL,
  `forum_desc` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_forum`
--

INSERT INTO `xyz_forum` (`forum_id`, `forum_title`, `forum_desc`, `date_created`) VALUES
(1, 'test forum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2017-04-04 17:57:34'),
(2, 'test forum 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2017-04-05 11:25:42'),
(3, 'test forum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2017-04-05 11:25:42'),
(4, 'test forum 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2017-04-05 11:25:53'),
(5, 'test forum 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2017-04-05 11:25:53');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_forum_threads`
--

CREATE TABLE `xyz_forum_threads` (
  `thread_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_forum_threads`
--

INSERT INTO `xyz_forum_threads` (`thread_id`, `forum_id`, `thread_title`, `thread_text`, `user_id`, `date_created`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2017-04-04 19:49:17'),
(2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 0, '2017-04-04 20:07:16'),
(3, 1, 'Lorem ipsum dolor sit amet', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 0, '2017-04-04 20:15:27'),
(4, 1, 'Lorem ipsum dolor sit amet', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 0, '2017-04-04 20:15:35'),
(5, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 0, '2017-04-04 20:15:42'),
(6, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 0, '2017-04-04 20:15:49'),
(7, 1, 'Lorem ipsum dolor sit amet', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 0, '2017-04-04 20:15:55'),
(8, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 35, '2017-04-16 19:23:28'),
(9, 1, 'Lorem ipsum dolor sit amet', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 35, '2017-04-17 17:58:28'),
(10, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 35, '2017-04-17 17:59:54'),
(11, 1, 'Lorem ipsum dolor sit amet', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 35, '2017-04-17 18:01:34'),
(12, 1, 'dsdsssssss', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>', 35, '2017-04-17 18:11:32'),
(13, 2, 'Sed ut perspiciatis unde omnis iste natus', '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>', 35, '2017-04-18 09:28:46');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_gallery`
--

CREATE TABLE `xyz_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` text,
  `description` text,
  `folder` text,
  `headline_image` text,
  `date_posted` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0',
  `featured` int(11) DEFAULT NULL,
  `img_settings` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_gallery`
--

INSERT INTO `xyz_gallery` (`gallery_id`, `gallery_name`, `description`, `folder`, `headline_image`, `date_posted`, `active`, `featured`, `img_settings`) VALUES
(22, 'ESL Benelux Summer Final 2016', '', 'Uploads/files/MODULES/Albums/ESL Summer', 'MODULES/Albums/ESL Summer/IMG_2864.jpg', '2016-11-18 09:12:04', 1, 0, NULL),
(23, 'ESL Benelux Winter Final 2016', '', 'Uploads/files/MODULES/Albums/ESL Winter Finales 2016', 'MODULES/Albums/ESL Winter Finales 2016/15168863_1290609827658017_4162493338466494766_o.jpg', '2016-12-05 15:25:40', 1, 1, NULL),
(24, 'FoM 17.0', '', 'Uploads/files/MODULES/Albums/FoM 170', 'MODULES/Albums/FoM 170/DSC_9885.jpg', '2016-12-05 15:30:16', 1, 0, NULL),
(25, 'ESWC Fianl Qualifier', '', 'Uploads/files/MODULES/Albums/ESWC Final Qualification', 'MODULES/Albums/ESWC Final Qualification/IMG_9785.jpg', '2016-12-05 15:39:41', 1, 1, NULL),
(26, 'BOOTCAMP 2016', '', 'Uploads/files/MODULES/Albums/Bootcamp 2016', 'MODULES/Albums/Bootcamp 2016/DSC00264.jpg', '2016-12-07 15:47:46', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_matches`
--

CREATE TABLE `xyz_matches` (
  `match_id` int(11) NOT NULL,
  `score` text,
  `home_name` text,
  `home_team_id` int(11) DEFAULT NULL,
  `enemy_name` text,
  `map` text,
  `score_display_type` int(11) NOT NULL DEFAULT '0',
  `description` text,
  `category` text,
  `status` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `home_score` int(11) NOT NULL DEFAULT '0',
  `enemy_score` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_matches`
--

INSERT INTO `xyz_matches` (`match_id`, `score`, `home_name`, `home_team_id`, `enemy_name`, `map`, `score_display_type`, `description`, `category`, `status`, `active`, `date_created`, `home_score`, `enemy_score`) VALUES
(24, NULL, '', 13, 'jees', '[{"name":"de_train","home_score":"16","enemy_score":"8"}]', 0, 'ESEA Open CSGO League', '7', 2, 1, '2016-11-18 09:24:17', 16, 8),
(25, NULL, '', 13, 'etrnaL', '[{"name":"de_train","home_score":"22","enemy_score":"20"}]', 0, 'ESEA CSGO Open League', '7', 2, 1, '2016-11-18 09:25:45', 22, 20),
(23, NULL, '', 13, 'Uppland Outlaws', '[{"name":"de_overpass","home_score":"16","enemy_score":"1"}]', 0, 'ESEA CSGO Open League\r\n', '7', 2, 1, '2016-11-18 09:22:56', 16, 1),
(22, NULL, '', 13, 'DICKHOUSE', '[{"name":"de_overpass","home_score":"11","enemy_score":"16"}]', 0, '', '7', 2, 1, '2016-11-18 09:21:47', 11, 16),
(26, NULL, '', 13, 'MarienLyst eSport', '[{"name":"de_nuke","home_score":"16","enemy_score":"7"}]', 0, 'ESEA CSGO Open League', '7', 2, 1, '2016-11-18 09:26:59', 16, 7),
(27, NULL, '', 13, 'STONEFIRE', '[{"name":"de_dust2","home_score":"16","enemy_score":"9"}]', 0, 'ESEA CSGO Open League', '7', 2, 1, '2016-11-18 09:27:45', 16, 9),
(28, NULL, '', 13, 'Pukumiehet', '[{"name":"de_mirage","home_score":"16","enemy_score":"1"}]', 0, 'ESEA CSGO Open League', '7', 2, 1, '2016-11-18 09:28:28', 16, 1),
(29, NULL, '', 13, 'overGame Telepizza', '[{"name":"de_mirage","home_score":"14","enemy_score":"16"}]', 0, 'ESEA CSGO Open League', '7', 2, 1, '2016-11-18 09:29:22', 14, 16),
(30, NULL, '', 13, 'Team Cursive', '[{"name":"de_cbble","home_score":"19","enemy_score":"17"}]', 0, 'ESEA CSGO Open League', '7', 2, 1, '2016-11-18 09:29:59', 19, 17),
(31, NULL, '', 13, 'KIYF Logitech', '[{"name":"de_overpass","home_score":"16","enemy_score":"5"}]', 0, '', '7', 2, 1, '2016-11-18 09:30:29', 16, 5),
(32, NULL, '', 13, 'O5gZ', '[{"name":"de_overpass","home_score":"16","enemy_score":"5"}]', 0, 'ESEA CSGO Open League', '7', 2, 1, '2016-11-18 09:31:10', 16, 5),
(33, NULL, '', 13, 'Elite Crew', '[{"name":"","home_score":"2","enemy_score":"0"}]', 1, 'ESEA CSGO Open League', '7', 0, 1, '2016-11-18 09:32:04', 2, 0),
(34, NULL, '', 13, 'Demise Pro', '[{"name":"de_mirage","home_score":"1","enemy_score":"0"},{"name":"de_cbble ","home_score":"1","enemy_score":"0"}]', 0, '', '7', 2, 1, '2016-11-25 10:25:39', 2, 0),
(35, NULL, '', 13, 'headshotBG', '[{"name":"de_nuke","home_score":"1","enemy_score":"0"},{"name":"de_overpass","home_score":"1","enemy_score":"0"}]', 0, '', '7', 0, 1, '2016-11-25 10:26:17', 2, 0),
(36, NULL, '', 13, 'Asterion CS:GO', '[{"name":"de_dust2","home_score":"1","enemy_score":"0"},{"name":"de_mirage","home_score":"1","enemy_score":"0"}]', 1, 'ESL Benelux Winter Final', '7', 2, 1, '2016-12-02 14:56:31', 2, 0),
(37, NULL, '', 13, 'LowLandLions', '[{"name":"de_train","home_score":"0","enemy_score":"1"},{"name":"de_cbble","home_score":"1","enemy_score":"0"},{"name":"de_dust2","home_score":"0","enemy_score":"1"}]', 1, '', '7', 2, 1, '2016-12-02 14:58:25', 1, 2),
(38, NULL, '', 13, 'eu4ia eSports', '[{"name":"de_dust2","home_score":"0","enemy_score":"2"}]', 0, '', '7', 2, 1, '2016-12-02 14:59:19', 0, 2),
(39, NULL, '', 16, 'pepe united', '[{"name":"","home_score":"2","enemy_score":"0"}]', 0, '', '13', 2, 1, '2017-01-31 11:16:43', 2, 0),
(40, NULL, '', 16, 'VapeNation', '[{"name":"","home_score":"2","enemy_score":"0"}]', 0, '', '13', 2, 1, '2017-01-31 11:17:44', 2, 0),
(41, NULL, '', 16, 'LastMenStanding.Academy', '[{"name":"","home_score":"2","enemy_score":"0"}]', 0, '', '13', 2, 1, '2017-01-31 11:18:18', 2, 0),
(42, NULL, '', 16, 'Team Potatis', '[{"name":"","home_score":"2","enemy_score":"0"}]', 0, '', '13', 2, 1, '2017-01-31 11:18:54', 2, 0),
(43, NULL, '', 16, 'PowerPuff Boys', '[{"name":"","home_score":"","enemy_score":""}]', 0, 'Match date: 05-02-2017 | 20:00', '13', 0, 1, '2017-01-31 11:19:28', 0, 0),
(44, NULL, '', 16, 'Roel\'s Pleb Stack', '[{"name":"","home_score":"","enemy_score":""}]', 0, 'Match date: 12-02-2017 | 20:00', '13', 0, 1, '2017-01-31 11:20:15', 0, 0),
(45, NULL, '', 16, 'Last Men Standing', '[{"name":"","home_score":"","enemy_score":""}]', 0, 'Match date: 19-02-2017 | 20:00', '13', 0, 1, '2017-01-31 11:21:32', 0, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_members`
--

CREATE TABLE `xyz_members` (
  `member_id` int(11) NOT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `team_id` varchar(11) DEFAULT NULL,
  `facebook` text,
  `twitter` text,
  `youtube` text,
  `instagram` text,
  `player_avatar` text,
  `age` int(11) DEFAULT NULL,
  `platform` text,
  `about` text,
  `role` text,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_members`
--

INSERT INTO `xyz_members` (`member_id`, `user_id`, `team_id`, `facebook`, `twitter`, `youtube`, `instagram`, `player_avatar`, `age`, `platform`, `about`, `role`, `active`) VALUES
(8, '39', '14', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', '', '', 1),
(9, '40', '14', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', '', '', 1),
(10, '38', '14', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', '', '', 1),
(11, '37', '14', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', '', '', 1),
(7, '36', '13', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', '', '', 1),
(12, '41', '13', '', '', '', '', '', 0, 'PC', '', '', 1),
(13, '42', '13', '', '', '', '', '', 0, 'PC', '', '', 1),
(14, '43', '13', '', '', '', '', '', 0, 'PC', '', '', 1),
(15, '44', '17', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', '', 1),
(16, '45', '17', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '', 1),
(17, '46', '17', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', '', 1),
(32, '65', '15', '', '', '', '', '', 0, '', '', 'Manager', 1),
(36, '67', '17', '', '', '', '', '', 0, 'PC', '', '', 1),
(34, '63', '18', '', '', '', '', '', 0, '', '', '', 1),
(19, '48', '16', '', '', '', '', '', 0, 'PC', '', '', 1),
(20, '49', '17', '', '', '', '', '', 0, 'PC', '', '', 1),
(21, '50', '13', '', '', '', '', '', 0, 'PC', '', '', 1),
(27, '56', '18', '', 'https://twitter.com/Venko_Mickey', '', '', '', 0, 'PC', '', 'Support', 1),
(23, '51', '16', 'https://www.facebook.com/VenkoGaming/', 'https://twitter.com/venko_gaming', 'https://www.youtube.com/user/VenkoGaming', '', '', 0, 'PC', '', '', 1),
(39, '72', '19', '', '', '', '', 'MODULES/Users/14889978_1301239943241189_1756060528066764083_o.jpg', 0, 'PS4', '', '', 1),
(26, '54', '16', '', '', '', '', '', 0, 'PC', '', '', 1),
(28, '60', '15', '', '', '', '', '', 0, 'PC', '', '', 1),
(29, '62', '15', '', '', '', '', '', 0, 'PC', '', '', 1),
(30, '59', '15', '', '', '', '', '', 0, 'PC', '', '', 1),
(31, '57', '17', '', '', '', '', '', 0, 'PC', '', '', 1),
(35, '64', '18', '', '', '', '', '', 0, '', '', '', 1),
(37, '70', '18', '', '', '', '', '', 0, '', '', 'Jungle, Capitain', 1),
(38, '71', '16', '', '', '', '', '', 0, 'PC', '', '', 1),
(40, '73', '16', '', '', '', '', '', 0, '', '', '', 1),
(41, '75', '19', '', '', 'https://www.youtube.com/channel/UC4ajZ_aNaguj5KVurwW03Dw', '', 'MODULES/Teams/FIFA/15975315_1383271045038078_6890343144867943708_o.jpg', 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_message`
--

CREATE TABLE `xyz_message` (
  `message_id` int(11) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `message_content` text,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checked` int(11) NOT NULL DEFAULT '0',
  `message_title` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_message`
--

INSERT INTO `xyz_message` (`message_id`, `from_id`, `to_id`, `message_content`, `date_sent`, `checked`, `message_title`) VALUES
(1, 17, 14, 'asdasdasd', '2015-10-26 19:55:42', 0, 'asdasd'),
(2, 14, 17, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam', '2015-10-26 20:06:08', 0, 'fsdfsdf'),
(3, 14, 16, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam', '2015-10-26 20:06:13', 0, 'sdfdsfs'),
(4, 14, 16, 'sdfsdfdsf', '2015-10-26 20:09:28', 0, 'sdfsdfdsfsdfsd'),
(5, 14, 16, 'sdfsdfdsf', '2015-10-26 20:09:42', 0, 'sdfsdfdsfsdfsd'),
(6, 14, 14, 'test', '2016-01-24 13:18:55', 0, 'test');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_news`
--

CREATE TABLE `xyz_news` (
  `news_id` int(11) NOT NULL,
  `news_title` text,
  `news_quote` text,
  `news_long` text,
  `news_image` text,
  `slider_image` text,
  `slider_desc` text,
  `category` int(11) DEFAULT NULL,
  `featured_sponsor_post` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) DEFAULT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_news`
--

INSERT INTO `xyz_news` (`news_id`, `news_title`, `news_quote`, `news_long`, `news_image`, `slider_image`, `slider_desc`, `category`, `featured_sponsor_post`, `active`, `featured`, `date_posted`) VALUES
(105, 'Looking for Fifa Players', 'We are looking for new FIFA players, because our last player got a proffesional FIFA contract we are now looking for new players we can support!', '<p>If you are the player we are looking for, write to us!</p>\r\n<p>We are looking for BENELUX players, if our project may interest you, we invite you to compile an application form and send it to info@venkogaming.com, or if you want you can&nbsp;contact us on facebook.</p>\r\n<p>just leave a PM.</p>\r\n<p>Hoping to speak to you soon!</p>', 'MODULES/News/slider1.jpg', 'MODULES/News/slider6.jpg', '', 7, 0, 1, 1, '2016-11-18 09:47:25'),
(106, 'Overwatch team', 'We are happy to announce that we strengthened ourselves with our first official Overwatch team!', '<p><img src="../../../Uploads/files/MODULES/News/14691420_1286826641349186_2551610711403189139_o.jpg" alt="" width="800" height="280" /></p>\r\n<p>We are happy to announce that we strengthened ourselves with our first official <a class="profileLink" href="https://www.facebook.com/OverwatchEU/" data-hovercard="/ajax/hovercard/page.php?id=579106058857366" data-hovercard-prefer-more-content-show="1">Overwatch</a> team!</p>\r\n<p>We are very happy to finally adventure in this awesome game <span class="_47e3 _5mfr" title="grin-emoticon"><img class="img" src="https://www.facebook.com/images/emoji.php/v6/f51/1/16/1f603.png" alt="" width="16" height="16" /><span class="_7oe">:D</span></span></p>\r\n<p>With whom could we better start with than with the winners of <a class="profileLink" href="https://www.facebook.com/therealitylan/" data-hovercard="/ajax/hovercard/page.php?id=271343179575859" data-hovercard-prefer-more-content-show="1">The Reality Event</a> XVII.</p>\r\n<div class="text_exposed_show">\r\n<p>Line-up:<br /><strong>Wensley "wennes" de Leeuw</strong><br /><strong>Jay " Sensey" Visser</strong><br /><strong>Ayaz " Sundays" Rachmadiev</strong><br /><strong>Bart "Vizyrion" Klont</strong><br /><strong>Lucas "Hikkerrrrrrr" Schoenmakers</strong><br /><strong>Wiebe "Jysticim" Kuper</strong></p>\r\n<p>Welcome to the Venko Gaming family guys!</p>\r\n</div>', 'MODULES/News/14691420_1286826641349186_2551610711403189139_o.jpg', 'MODULES/News/slider4.jpg', '', 6, 0, 1, 1, '2016-11-21 10:37:30'),
(107, 'Hearthstone Line-up', 'This will be our new Hearthstone team for 2017, lots of new, but strong and motivated players!', '<p><strong><img src="../../../Uploads/files/MODULES/News/15025609_1320030004695516_6494562840098487760_o.jpg" alt="" width="800" height="400" /></strong></p>\r\n<p><strong>Bersavyl</strong></p>\r\n<p><strong>Woonypooh</strong></p>\r\n<p><strong>C&eacute;dric</strong></p>\r\n<p><strong>Angrykid</strong></p>\r\n<p><strong>Thrvsher</strong></p>\r\n<p>Joppe as their manager are planning to take over the benelux scene next year!</p>', 'MODULES/News/15025609_1320030004695516_6494562840098487760_o.jpg', 'MODULES/News/slider2.jpg', '', 8, 0, 1, 1, '2016-11-21 10:38:40'),
(108, 'ESL Benelux Winter Final 2016', 'Counter-Strike: Global Offensive  ESL Benelux Winter recap', '<p>We came out of the group stages with a third place, what ment we could play the finals again in the Amsterdam Arena.</p>\r\n<p>Results Group stage:</p>\r\n<div class="matches_layout_wide_vs done">\r\n<div class="score left" style="padding-left: 30px;"><strong>16:7</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3P-Esports.</div>\r\n<div class="score left" style="padding-left: 30px;"><strong>16:10</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dutch Prodigy</div>\r\n<div class="score left" style="padding-left: 30px;"><strong>16:4</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;mCon esports .</div>\r\n<div class="score left" style="padding-left: 30px;"><strong>16:5</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; The Untouchables</div>\r\n<div class="score left" style="padding-left: 30px;">14:16&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Asterion CS:GO</div>\r\n<div class="score left" style="padding-left: 30px;"><strong>16:11</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PROGRESSiON</div>\r\n<div class="score left" style="padding-left: 30px;">12:16&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;LowLandLions</div>\r\n<div class="score left" style="padding-left: 30px;">&nbsp;</div>\r\n<div class="score left">This ment the following score:</div>\r\n<div class="score left">\r\n<table class="competition_season_rankings" style="height: 359px;" width="782">\r\n<tbody>\r\n<tr>\r\n<th class="competition_season_rankings header rank " colspan="1">#</th>\r\n<th class="competition_season_rankings header name" colspan="2">Team</th>\r\n<th class="competition_season_rankings header points" colspan="1">Points</th>\r\n<th class="competition_season_rankings header matches" colspan="1">Matches</th>\r\n<th class="competition_season_rankings header matches" colspan="5">Matches W-D-L</th>\r\n<th class="competition_season_rankings header rounds" colspan="3">Rounds W:L</th>\r\n</tr>\r\n<tr class="competition_group">\r\n<td class="competition_season_rankings rank">1.</td>\r\n<td class="competition_season_rankings country"><img src="http://cdn2.esl.tv/images/icons/flags_16/be.png" alt="" /></td>\r\n<td class="competition_season_rankings name"><img src="http://cdn2.esl.tv/fileadmin/user_upload/national-benelux/2016/CSGO/logo_lowlandlions.png" alt="" width="38" height="30" /><a class="noborder" href="http://pro.eslgaming.com/benelux/summer-2016/counterstrike/team/lowlandlions/">LowLandLions</a></td>\r\n<td class="competition_season_rankings points">19</td>\r\n<td class="competition_season_rankings matches">7</td>\r\n<td class="competition_season_rankings matches right">6</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches">1</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches left">&nbsp;</td>\r\n<td class="competition_season_rankings rounds right">111</td>\r\n<td class="competition_season_rankings divider">:</td>\r\n<td class="competition_season_rankings rounds left">65</td>\r\n</tr>\r\n<tr class="competition_group">\r\n<td class="competition_season_rankings rank">2.</td>\r\n<td class="competition_season_rankings country"><img src="http://cdn2.esl.tv/images/icons/flags_16/nl.png" alt="" /></td>\r\n<td class="competition_season_rankings name"><img src="http://cdn2.esl.tv/fileadmin/user_upload/Asterion.png" alt="" width="39" height="32" /><a class="noborder" href="http://pro.eslgaming.com/benelux/summer-2016/counterstrike/team/ast/">Asterion CS:GO</a></td>\r\n<td class="competition_season_rankings points">16</td>\r\n<td class="competition_season_rankings matches">7</td>\r\n<td class="competition_season_rankings matches right">5</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches">1</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches left">1</td>\r\n<td class="competition_season_rankings rounds right">109</td>\r\n<td class="competition_season_rankings divider">:</td>\r\n<td class="competition_season_rankings rounds left">94</td>\r\n</tr>\r\n<tr class="competition_group">\r\n<td class="competition_season_rankings rank">3.</td>\r\n<td class="competition_season_rankings country"><img src="http://cdn2.esl.tv/images/icons/flags_16/nl.png" alt="" /></td>\r\n<td class="competition_season_rankings name"><img src="http://cdn2.esl.tv/fileadmin/user_upload/VenkoGaming.jpg" alt="" width="38" height="38" /><a class="noborder" href="http://pro.eslgaming.com/benelux/summer-2016/counterstrike/team/venko/">Venko Gaming</a></td>\r\n<td class="competition_season_rankings points">15</td>\r\n<td class="competition_season_rankings matches">7</td>\r\n<td class="competition_season_rankings matches right">5</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches">&nbsp;</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches left">2</td>\r\n<td class="competition_season_rankings rounds right">106</td>\r\n<td class="competition_season_rankings divider">:</td>\r\n<td class="competition_season_rankings rounds left">69</td>\r\n</tr>\r\n<tr class="competition_group">\r\n<td class="competition_season_rankings rank">4.</td>\r\n<td class="competition_season_rankings country"><img src="http://cdn2.esl.tv/images/icons/flags_16/nl.png" alt="" /></td>\r\n<td class="competition_season_rankings name"><img src="http://cdn2.esl.tv/fileadmin/user_upload/national-benelux/2016/CSGO/3P.jpg" alt="" width="38" height="38" /><a class="noborder" href="http://pro.eslgaming.com/benelux/summer-2016/counterstrike/team/maestro/">3P-Esports.</a></td>\r\n<td class="competition_season_rankings points">12</td>\r\n<td class="competition_season_rankings matches">7</td>\r\n<td class="competition_season_rankings matches right">4</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches">&nbsp;</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches left">3</td>\r\n<td class="competition_season_rankings rounds right">87</td>\r\n<td class="competition_season_rankings divider">:</td>\r\n<td class="competition_season_rankings rounds left">87</td>\r\n</tr>\r\n<tr class="competition_group">\r\n<td class="competition_season_rankings rank">5.</td>\r\n<td class="competition_season_rankings country"><img src="http://cdn2.esl.tv/images/icons/flags_16/nl.png" alt="" /></td>\r\n<td class="competition_season_rankings name"><img src="http://cdn2.esl.tv/fileadmin/user_upload/national-benelux/2016/CSGO/DutchProdigy.png" alt="" width="38" height="22" /><a class="noborder" href="http://pro.eslgaming.com/benelux/summer-2016/counterstrike/team/dutch/">Dutch Prodigy</a></td>\r\n<td class="competition_season_rankings points">7</td>\r\n<td class="competition_season_rankings matches">7</td>\r\n<td class="competition_season_rankings matches right">2</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches">1</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches left">4</td>\r\n<td class="competition_season_rankings rounds right">96</td>\r\n<td class="competition_season_rankings divider">:</td>\r\n<td class="competition_season_rankings rounds left">103</td>\r\n</tr>\r\n<tr class="competition_group">\r\n<td class="competition_season_rankings rank">6.</td>\r\n<td class="competition_season_rankings country"><img src="http://cdn2.esl.tv/images/icons/flags_16/nl.png" alt="" /></td>\r\n<td class="competition_season_rankings name"><img src="http://cdn2.esl.tv/fileadmin/user_upload/national-benelux/2016/LoL/mCon_LOGO.png" alt="" width="38" height="38" /><a class="noborder" href="http://pro.eslgaming.com/benelux/summer-2016/counterstrike/team/mcon/">mCon esports</a></td>\r\n<td class="competition_season_rankings points">6</td>\r\n<td class="competition_season_rankings matches">7</td>\r\n<td class="competition_season_rankings matches right">2</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches">&nbsp;</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches left">5</td>\r\n<td class="competition_season_rankings rounds right">83</td>\r\n<td class="competition_season_rankings divider">:</td>\r\n<td class="competition_season_rankings rounds left">98</td>\r\n</tr>\r\n<tr class="competition_group">\r\n<td class="competition_season_rankings rank">7.</td>\r\n<td class="competition_season_rankings country"><img src="http://cdn2.esl.tv/images/icons/flags_16/nl.png" alt="" /></td>\r\n<td class="competition_season_rankings name"><img src="http://cdn2.esl.tv/fileadmin/user_upload/untouchables.jpg" alt="" width="38" height="38" /><a class="noborder" href="http://pro.eslgaming.com/benelux/summer-2016/counterstrike/team/the-untouchables/">The Untouchables</a></td>\r\n<td class="competition_season_rankings points">4</td>\r\n<td class="competition_season_rankings matches">7</td>\r\n<td class="competition_season_rankings matches right">1</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches">1</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches left">5</td>\r\n<td class="competition_season_rankings rounds right">63</td>\r\n<td class="competition_season_rankings divider">:</td>\r\n<td class="competition_season_rankings rounds left">109</td>\r\n</tr>\r\n<tr class="competition_group">\r\n<td class="competition_season_rankings rank">8.</td>\r\n<td class="competition_season_rankings country"><img src="http://cdn2.esl.tv/images/icons/flags_16/nl.png" alt="" /></td>\r\n<td class="competition_season_rankings name"><img src="http://cdn2.esl.tv/fileadmin/user_upload/national-benelux/2016/CSGO/Progression.jpg" alt="" width="38" height="38" /><a class="noborder" href="http://pro.eslgaming.com/benelux/summer-2016/counterstrike/team/asser/">PROGRESSiON</a></td>\r\n<td class="competition_season_rankings points">3</td>\r\n<td class="competition_season_rankings matches">7</td>\r\n<td class="competition_season_rankings matches right">1</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches">&nbsp;</td>\r\n<td class="competition_season_rankings divider">-</td>\r\n<td class="competition_season_rankings matches left">6</td>\r\n<td class="competition_season_rankings rounds right">76</td>\r\n<td class="competition_season_rankings divider">:</td>\r\n<td class="competition_season_rankings rounds left">106</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>Amsterdam Arena:</strong></p>\r\n<p><strong>Semi Finals:</strong></p>\r\n<p><strong><img src="http://cdn2.esl.tv/fileadmin/user_upload/national-benelux/2016/CSGO/logo_lowlandlions.png" alt="" width="38" height="30" />LowLandLions - &nbsp;<img src="http://cdn2.esl.tv/fileadmin/user_upload/national-benelux/2016/CSGO/3P.jpg" alt="" width="38" height="38" />&nbsp;</strong>3P-Esports.</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;de_mirage&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;16-2<br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;de_cache&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;16-2</p>\r\n<p><img src="http://cdn2.esl.tv/fileadmin/user_upload/Asterion.png" alt="" width="39" height="32" />Asterion CS:GO&nbsp;-&nbsp;<img src="http://cdn2.esl.tv/fileadmin/user_upload/VenkoGaming.jpg" alt="" width="38" height="38" /><strong>Venko Gaming</strong></p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;de_dust2 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;14-16<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;de_mirage &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;16-2</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Grand Finals:</strong></p>\r\n<p><strong><img src="http://cdn2.esl.tv/fileadmin/user_upload/national-benelux/2016/CSGO/logo_lowlandlions.png" alt="" width="38" height="30" />LowLandLions </strong>-&nbsp;<img src="http://cdn2.esl.tv/fileadmin/user_upload/VenkoGaming.jpg" alt="" width="38" height="38" />Venko Gaming</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;de_train&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 16-13<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;de_cbble&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9-16<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;de_dust2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;16-9<br /><br /></p>\r\n<p>Congratulations to&nbsp;<strong>LowLandLions&nbsp;</strong>for winning ESL Benelux Winter Edition, see you next season!</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>', 'MODULES/News/Niko,chrizz.jpg', 'MODULES/News/Untitled-1.jpg', '', 11, 0, 1, 1, '2016-11-21 10:39:41'),
(109, 'Finally a new website.', 'We are very busy editing the new site and getting all the bugs out.\r\nIf you find bugs or have ideas please let us know in the comment section and we will try to fix it as soon as possible.', '<p>After weeks of develpment we are so proud to finally announce our new website!<br />Fully programmed for Venko Gaming, no more easy sollutions i was time for the next step!</p>\r\n<p>With allot of help from <a href="http://www.manatee.gg" target="_blank">Manatee</a>, we have made this happen!</p>\r\n<p>Thanks to everyone that is helping us to get to this point and supporting Venko!<br />Shout out to all our sponsors, Ttesports, Arctic Secrets, Manatee, Gamegear, Offensive servers. Thanks for all the support.</p>', 'MODULES/News/15123366_1324788810886302_6357961587142685532_o.jpg', 'MODULES/News/esl1.jpg', '', 0, 0, 1, 1, '2016-11-21 10:40:36'),
(110, 'Best Wishes', 'As we approach the end of 2016, we would like to take\r\na moment and thank all of you for your continued support this year.', '<p>As we approach the end of 2016, we would like to take<br />a moment and thank all of you for your continued support this year.</p>\r\n<p>From all of us at&nbsp;Venko Gaming<br />we wish you the very best and a best gaming&nbsp;2017!</p>', 'MODULES/News/15672930_1362395507125632_7493663215121221095_n.jpg', '', '', 0, 0, 1, 0, '2016-12-22 10:48:36'),
(111, 'New FIFA Player!', 'New year, new player :D\r\n', '<p>Happy to announce our new #FIFA17 player, Sammy Stroobandt!<br />Welcome to Venko Gaming. We wish Sammy the best of luck.</p>', 'MODULES/News/IMG_0100.png', '', '', 14, 0, 1, 0, '2017-01-12 09:38:57'),
(112, 'Welcome Back Vusin', 'We are so happy that we can welcome him back Gilles De Decker.\r\n\r\n', '<p>Last year he left us for a big step to EGO Esports Teams and Tournaments, but he got home sick from our great organization.</p>\r\n<p><br />We wish him again the best of luck and we will support him with all our partners, TteSPORTS, Arctic Secrets, CLD Distribution, SPAM Energy Drink, Gamegear.be, Offensive Servers!</p>', 'MODULES/Users/16388327_1407535302611652_5771609566345847185_n.jpg', '', '', 14, 0, 1, 0, '2017-02-06 12:54:10');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_pages`
--

CREATE TABLE `xyz_pages` (
  `page_id` int(11) NOT NULL,
  `page_name` text,
  `page_title` text,
  `page_content` text,
  `active` int(11) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_partners`
--

CREATE TABLE `xyz_partners` (
  `partner_id` int(11) NOT NULL,
  `partner_name` text,
  `partner_order` int(11) NOT NULL DEFAULT '0',
  `sponsor_small_desc` text,
  `description` text,
  `partner_url` text,
  `partner_img` text,
  `partner_img_big` text,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `featured` int(11) NOT NULL DEFAULT '0',
  `featured_top` int(11) NOT NULL DEFAULT '0',
  `featured_bottom` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_partners`
--

INSERT INTO `xyz_partners` (`partner_id`, `partner_name`, `partner_order`, `sponsor_small_desc`, `description`, `partner_url`, `partner_img`, `partner_img_big`, `date_created`, `featured`, `featured_top`, `featured_bottom`) VALUES
(20, 'Cooler Master', 8, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'http://www.someurl.com', 'https://i2.wp.com/www.InterPlay.co.th/wp-content/uploads/2015/11/Corsair_logo_1B_white_800px1.png', 'https://i2.wp.com/www.InterPlay.co.th/wp-content/uploads/2015/11/Corsair_logo_1B_white_800px1.png', '2016-11-18 08:03:44', 1, 1, 0),
(21, 'Thermaltake', 5, '', 'Lorem ipsum eniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'http://www.someurl.com', 'MODULES/Sponsors/gamegear.png', 'MODULES/Sponsors/gamegear.png', '2016-11-18 08:04:58', 1, 0, 1),
(19, 'Corsair', 6, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'http://www.someurl.com', 'MODULES/Sponsors/spam_1.png', 'MODULES/Sponsors/spam_1.png', '2016-11-18 08:02:34', 1, 0, 1),
(18, 'Razer', 9, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'http://www.someurl.com', 'MODULES/Sponsors/Arctic.png', 'MODULES/Sponsors/Arctic.png', '2016-11-18 08:01:23', 1, 1, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_products`
--

CREATE TABLE `xyz_products` (
  `product_id` int(11) NOT NULL,
  `product_name` text,
  `folder` text,
  `preview_image` text,
  `paypal_email` text,
  `product_price` int(11) DEFAULT NULL,
  `product_price_currency` text,
  `available` int(11) NOT NULL DEFAULT '0',
  `buy_page` text,
  `product_desc` text,
  `product_long` text,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_products`
--

INSERT INTO `xyz_products` (`product_id`, `product_name`, `folder`, `preview_image`, `paypal_email`, `product_price`, `product_price_currency`, `available`, `buy_page`, `product_desc`, `product_long`, `active`) VALUES
(10, 'Shirt', 'Uploads/files/MODULES/Shop/Shirt', 'MODULES/Shop/Shirt/shirt.jpg', 'nielsvarendonk@hotmail.com', 45, 'EUR', 1, '', '', '<div id="c9230972c-f40d-445d-bad0-952ff27cb079" class="shogun-component ">\r\n<div class="shogun-row">\r\n<div class="shogun-col-lg-2 shogun-col-md-2 shogun-col-sm-2 shogun-col-xs-6">\r\n<div id="c9629f910-64d0-443c-bf19-5ae05293a393" class="shogun-component ">\r\n<table style="height: 258px;" width="418">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div class="shogun-col-lg-2 shogun-col-md-2 shogun-col-sm-2 shogun-col-xs-6">\r\n<div id="c9629f910-64d0-443c-bf19-5ae05293a393" class="shogun-component ">\r\n<p><strong>Sizing chart</strong></p>\r\n</div>\r\n</div>\r\n</td>\r\n<td>\r\n<div class="shogun-col-lg-2 shogun-col-md-2 shogun-col-sm-2 shogun-col-xs-6">\r\n<div id="c5bf270bb-aff1-4f7d-99c6-ae1b6b3b89fd" class="shogun-component ">\r\n<p><strong>Chest (cm)</strong></p>\r\n</div>\r\n</div>\r\n</td>\r\n<td><strong>Length (cm)</strong></td>\r\n</tr>\r\n<tr>\r\n<td>S</td>\r\n<td>\r\n<div class="shogun-col-lg-2 shogun-col-md-2 shogun-col-sm-2 shogun-col-xs-6">\r\n<div id="cfd999a98-072b-42c8-9ffa-7aa48dc48cdf" class="shogun-component ">\r\n<p>52</p>\r\n</div>\r\n</div>\r\n</td>\r\n<td>69</td>\r\n</tr>\r\n<tr>\r\n<td>M</td>\r\n<td>54</td>\r\n<td>71</td>\r\n</tr>\r\n<tr>\r\n<td>L</td>\r\n<td>56</td>\r\n<td>73</td>\r\n</tr>\r\n<tr>\r\n<td>XL</td>\r\n<td>58</td>\r\n<td>75</td>\r\n</tr>\r\n<tr>\r\n<td>XXL</td>\r\n<td>60</td>\r\n<td>77</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="shogun-col-lg-2 shogun-col-md-2 shogun-col-sm-2 shogun-col-xs-6">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div id="c1c53e295-686a-427b-902a-913497ca0062" class="shogun-component ">&nbsp;</div>\r\n<div id="cadeb22bc-6a71-4ea6-a114-7c7dd7bf69b1" class="shogun-component ">&nbsp;</div>', 1),
(8, 'Cap', 'Uploads/files/MODULES/Shop/Cap', 'MODULES/Shop/Cap/cap.jpg', 'nielsvarendonk@hotmail.com', 40, 'EUR', 1, '', '', '', 1),
(9, 'Hoodie', 'Uploads/files/MODULES/Shop/Hoodie', 'MODULES/Shop/Hoodie/14750565_1479810002029952_7594690966145990656_n.jpg', 'nielsvarendonk@hotmail.com', 50, 'EUR', 1, '', '', '', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_sessions`
--

CREATE TABLE `xyz_sessions` (
  `session_id` text,
  `user_id` int(11) DEFAULT NULL,
  `session_time` timestamp NULL DEFAULT NULL,
  `session_expires` timestamp NULL DEFAULT NULL,
  `ip` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_sessions`
--

INSERT INTO `xyz_sessions` (`session_id`, `user_id`, `session_time`, `session_expires`, `ip`) VALUES
('ncc4sn54av4vm3g31c7dbh1nh5', 35, '2017-03-14 09:32:54', '2018-03-05 09:32:54', '::1'),
('mgc73fii1o431lcj366thn7ma7', 0, '2017-04-03 15:09:52', '2018-03-25 15:09:52', '::1'),
('tcb5cv09bomfhe6f4rt5uerdc4', 0, '2017-04-04 17:51:50', '2018-03-26 17:51:50', '::1'),
('ivmo8g90vuvqn2ljpkpabopfq3', 0, '2017-04-05 06:55:25', '2018-03-27 06:55:25', '::1'),
('u1dv0trpmb958dmv79at108m51', 0, '2017-04-06 10:04:52', '2018-03-28 10:04:52', '::1'),
('ef13n7kualnj497tj630h00ak6', 0, '2017-04-06 13:18:34', '2018-03-28 13:18:34', '::1'),
('lotqnurard8o6u1b4qunbh0936', 0, '2017-04-10 15:12:11', '2018-04-01 15:12:11', '::1'),
('jhonuph8l186dees5dk06smtj7', 0, '2017-04-13 18:48:28', '2018-04-04 18:48:28', '::1'),
('8e6412nt04otr6mi9a8jp22ae5', 0, '2017-04-15 09:32:26', '2018-04-06 09:32:26', '::1'),
('4q105vea1aim7o46t09l519ig0', 35, '2017-04-15 12:09:07', '2018-04-06 12:09:07', '::1'),
('8i4qtnfi9lf07nugotrklq13v4', 35, '2017-04-15 21:28:11', '2018-04-06 21:28:11', '::1'),
('njkhh2h7f96a7922m3i17a8e07', 35, '2017-04-17 14:24:45', '2018-04-08 14:24:45', '::1'),
('77b88j3bbi8n7d95fll6kqo0a0', 35, '2017-04-16 19:23:27', '2018-04-07 19:23:27', '::1'),
('ks0hk5kfkvde3hj0vb7easck61', 35, '2017-04-17 18:45:46', '2018-04-08 18:45:46', '::1'),
('5584njuai3lo0qbhk1s1qq13v2', 35, '2017-04-18 10:42:43', '2018-04-09 10:42:43', '::1'),
('c4s5oc62pbgvouvqbae7e8r3g0', 35, '2017-04-18 18:47:44', '2018-04-09 18:47:44', '::1'),
('5a3p46tdl0dop4ae6i0g2tqep0', 0, '2017-04-18 13:49:24', '2018-04-09 13:49:24', '::1'),
('67bmbg7hmdujs96864mrpad2s5', 0, '2017-04-19 06:59:39', '2018-04-10 06:59:39', '::1'),
('k2ubl1nv1o7s66isgll4t05f12', 35, '2017-04-19 10:48:04', '2018-04-10 10:48:04', '::1'),
('ihufnlkngpbi6nvtst20ek4qe5', 35, '2017-04-19 07:38:46', '2018-04-10 07:38:46', '::1'),
('mf1jf98bkq69opgcihia6ijr47', 0, '2017-04-19 07:34:14', '2018-04-10 07:34:14', '::1'),
('2qg9l2s5k9gov9e1o9aa57u657', 35, '2017-04-19 08:29:32', '2018-04-10 08:29:32', '::1');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_sessions_log`
--

CREATE TABLE `xyz_sessions_log` (
  `user_id` int(11) DEFAULT NULL,
  `ip` text,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_sessions_log`
--

INSERT INTO `xyz_sessions_log` (`user_id`, `ip`, `timestamp`) VALUES
(35, '::1', '2017-03-14 08:16:13'),
(35, '::1', '2017-04-15 09:55:12'),
(35, '::1', '2017-04-15 15:07:48'),
(35, '::1', '2017-04-16 10:09:12'),
(35, '::1', '2017-04-16 10:17:30'),
(35, '::1', '2017-04-16 13:24:21'),
(35, '::1', '2017-04-16 13:43:25'),
(35, '::1', '2017-04-16 13:44:43'),
(35, '::1', '2017-04-16 13:52:09'),
(35, '::1', '2017-04-16 13:54:00'),
(35, '::1', '2017-04-16 13:57:42'),
(35, '::1', '2017-04-16 14:00:48'),
(35, '::1', '2017-04-16 14:02:28'),
(35, '::1', '2017-04-16 14:03:34'),
(35, '::1', '2017-04-17 12:24:08'),
(35, '::1', '2017-04-17 17:52:26'),
(35, '::1', '2017-04-18 08:23:49'),
(35, '::1', '2017-04-18 14:00:55'),
(35, '::1', '2017-04-19 07:01:29'),
(35, '::1', '2017-04-19 07:32:26'),
(35, '::1', '2017-04-19 08:29:32'),
(35, '127.0.0.1', '2017-04-19 09:57:26'),
(35, '::1', '2017-04-19 09:57:32');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_settings`
--

CREATE TABLE `xyz_settings` (
  `setting_id` int(11) NOT NULL,
  `setting_name` text,
  `variable_name` varchar(100) DEFAULT NULL,
  `setting_value` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_settings`
--

INSERT INTO `xyz_settings` (`setting_id`, `setting_name`, `variable_name`, `setting_value`) VALUES
(1, 'Google Capcha Site Key', 'capcha_site_key', '6LcuZQsUAAAAAGf3RawFzbWD6u5F10F6zgIROu6K'),
(2, 'Google Capcha Secret Key', 'capcha_secret_key', '6LcuZQsUAAAAAFa2j8pecN_3UEcnWG8ihGBOySxM'),
(3, 'noreply_email', 'noreply_email', 'kemenydani93@gmail.com'),
(4, 'facebook_url', 'facebook_url', 'https://www.facebook.com/VenkoGaming/?fref=ts'),
(5, 'twitter_url', 'twitter_url', ''),
(6, 'twitch_tv_client_id', 'twitch_tv_client_id', 'g6afu82yxxroykga3cy2kmfmqsdrtkf'),
(7, 'global_email', 'global_email', 'Info@venkogaming.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_stream`
--

CREATE TABLE `xyz_stream` (
  `stream_id` int(11) NOT NULL,
  `stream_host` text,
  `stream_title` text,
  `stream_url` text,
  `stream_user` text,
  `stream_desc` text,
  `active` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_live` int(11) NOT NULL DEFAULT '0',
  `viewers` int(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_stream`
--

INSERT INTO `xyz_stream` (`stream_id`, `stream_host`, `stream_title`, `stream_url`, `stream_user`, `stream_desc`, `active`, `date_created`, `last_updated`, `is_live`, `viewers`) VALUES
(13, 'twitch', 'ESL Benelux', NULL, 'esl_benelux', NULL, 1, '2016-11-18 15:46:39', '2016-11-27 21:38:51', 0, 0),
(16, 'twitch', 'ESL Counter Strike: Global Offensive', NULL, 'esl_csgo', NULL, 1, '2016-11-18 15:48:17', '2017-03-12 17:40:00', 1, 3282),
(14, 'twitch', 'Axy Pater | Venko Gaming', NULL, 'axy_pater', NULL, 1, '2016-11-18 15:47:19', '2016-11-22 12:04:59', 0, 0),
(15, 'twitch', 'Official Venko Gaming Stream', NULL, 'venko_gaming', NULL, 1, '2016-11-18 15:47:49', '2016-11-22 12:04:42', 0, 0),
(17, 'twitch', 'YDF | Venko Dota Player', NULL, 'ydf1', NULL, 1, '0000-00-00 00:00:00', '2017-02-21 18:03:33', 0, 0),
(18, 'twitch', 'SHK | Venko CS:GO Player ', NULL, 'henriksymkens1', NULL, 1, '0000-00-00 00:00:00', '2017-02-03 21:33:46', 0, 0),
(20, 'twitch', 'Chr1Zz | Venko CS:GO Player', NULL, 'chr1zz1337', NULL, 0, '0000-00-00 00:00:00', '2016-12-08 17:58:50', 0, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_teams`
--

CREATE TABLE `xyz_teams` (
  `team_id` int(11) NOT NULL,
  `team_name` text,
  `team_order` int(11) NOT NULL DEFAULT '0',
  `short_name` text,
  `team_image` text,
  `active` int(11) NOT NULL DEFAULT '0',
  `type` text,
  `category` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `xyz_teams`
--

INSERT INTO `xyz_teams` (`team_id`, `team_name`, `team_order`, `short_name`, `team_image`, `active`, `type`, `category`, `date_created`) VALUES
(17, 'Hearthstone', 7, 'Hearthstone', 'MODULES/Teams/Hearthstone/Hearthstone-fireside-gatherings.jpg', 1, 'game', 12, '2016-11-18 08:56:33'),
(16, 'Dota 2', 9, 'Dota 2', 'MODULES/Teams/Dota/dota-2-geekings.jpg', 1, 'game', 13, '2016-11-18 08:50:21'),
(15, 'Rocket League', 4, 'RL', 'MODULES/Teams/Rocket League/Rocket-League-00.jpg', 1, 'game', 15, '2016-11-18 08:49:57'),
(14, 'Overwatch', 5, 'Overwatch', 'MODULES/Teams/Overwatch/overwatch_slider.jpg', 1, 'game', 11, '2016-11-18 08:33:38'),
(13, 'Counter-Strike: Global Offensive', 10, 'CS:GO', 'MODULES/Teams/CS:GO/css_banner_1920x400_lores.jpg', 1, 'game', 7, '2016-11-18 08:16:01'),
(18, 'League of Legends', 6, 'LoL', 'MODULES/Teams/LoL/lol_1.jpg', 1, 'game', 6, '2016-11-18 09:07:12'),
(19, 'FIFA 17', 8, 'FIFA 17', 'MODULES/Teams/FIFA/fifa_1.jpg', 1, 'game', 14, '2016-11-18 09:08:53');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_users`
--

CREATE TABLE `xyz_users` (
  `user_id` int(11) NOT NULL,
  `password` text,
  `temp_password` varchar(255) NOT NULL DEFAULT '',
  `username` text,
  `firstname` text,
  `lastname` text,
  `avatar` text,
  `email` text,
  `showemail` int(11) NOT NULL DEFAULT '0',
  `commenting` int(11) NOT NULL DEFAULT '1',
  `showblogs` int(11) NOT NULL DEFAULT '1',
  `showcomments` int(11) NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '1',
  `language` varchar(2) DEFAULT NULL,
  `country_code` text,
  `country` varchar(100) DEFAULT NULL,
  `country_short` varchar(2) DEFAULT NULL,
  `country_medium` varchar(3) DEFAULT NULL,
  `city` text,
  `bio` text,
  `last_seen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `social` text,
  `user_info` text,
  `date_created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_users`
--

INSERT INTO `xyz_users` (`user_id`, `password`, `temp_password`, `username`, `firstname`, `lastname`, `avatar`, `email`, `showemail`, `commenting`, `showblogs`, `showcomments`, `level`, `language`, `country_code`, `country`, `country_short`, `country_medium`, `city`, `bio`, `last_seen`, `social`, `user_info`, `date_created`) VALUES
(43, '$2y$10$gDrm0aQsFEnVqBvnsAvLie4izVocQx33M517Xdf0tUxwETXYxVV2C', '', 'v1N', NULL, NULL, NULL, 'vincent-brouwer@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-21 21:37:03', NULL, NULL, '2016-11-21 21:37:03'),
(42, '$2y$10$FIv.Awi2hg0JryI13xO4z.JcA1uPlDuAIwqPFJujO.iRz4DhmdENi', '', 'Shake', NULL, NULL, NULL, 'henriksymkens1@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-21 20:59:43', NULL, NULL, '2016-11-21 20:59:43'),
(41, '$2y$10$L0VFDIBGkBjje.hSr7D6MOpt.Mz3XTdbRAfbe.BzkZezK5KZCbhQ.', '', 'Chr1Zz', 'Christiaan', 'Koehler', 'Uploads/files/MODULES/Users/41/WP_20150712_16_46_41_Selfie.jpg', 'christiaan-@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'NL', NULL, NULL, 'Bedum', '\r\n\r\n\r\n', '2016-12-08 18:04:43', NULL, NULL, '2016-11-21 20:43:31'),
(39, '$2y$10$IVUjqLIjH36CKRMnj9Avb.6sG9/emKeSgNDK3G7guxgzmnsVU5Uou', '', 'Oyster', NULL, NULL, NULL, 'jysticim@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-21 15:47:24', NULL, NULL, '2016-11-21 15:46:15'),
(40, '$2y$10$yOxXYpPnUsS9SKwteQ5YQe6GvBudlH/ZVhVQJFgH5.pfJ0WXZwzu2', '', 'Sensey', NULL, NULL, NULL, 'jay.visser@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-21 15:47:15', NULL, NULL, '2016-11-21 15:46:29'),
(38, '$2y$10$A0hCJAXcmSdfXbG5m698POeM9uulDExfMA4q/rBVOXYo8MvK5DH4m', '', 'hikkerrrrrrr', 'Lucas', 'Schoenmakers', './Uploads/files/MODULES/Users/38/4933164_big_croppedImg_1641749758.jpeg', 'lwj.schoenmakers@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'NL', NULL, NULL, '', '', '2016-12-07 18:04:18', NULL, NULL, '2016-11-21 15:46:14'),
(37, '$2y$10$J2lCtjrrqlaP7lNx7B0WJOFVtRHGkt2CzBMgvGYCq.bVlcBqijVj2', '', 'Vizyrion', NULL, NULL, NULL, 'bartjeklont@live.nl', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-21 15:47:05', NULL, NULL, '2016-11-21 15:45:55'),
(36, '$2y$10$a.tEpmtxfD31C8htHE29c.l.9Y0psd6V.JFujWnfbjVXQhakyvCL.', '', 'Niko', 'Nikola', 'Tomic', NULL, 'nixke10@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'BE', NULL, NULL, 'Antwerpen', '', '2016-11-21 15:20:32', NULL, NULL, '2016-11-21 15:01:54'),
(27, '$2y$10$zThoWP7Hmbh6K8pArD8g4uhf0kzw1ZqTI0KDk5oNLoE8byX3iAuOG', '', 'sarkye', 'Niels', 'van Arendonk', 'Uploads/files/MODULES/Users/27/DSC_4505.JPG', 'niels@venkogaming.com', 0, 1, 1, 1, 10, NULL, NULL, 'NL', NULL, NULL, '', '', '2017-02-18 18:18:52', NULL, NULL, '2016-11-16 17:31:01'),
(35, '$2y$10$k0AtYznu92ys7Od1GRugpOa07AHCps0GGpk748UuOw55Yjim0ziRq', '', 'snowy', 'Kemény', 'Dániel', 'Uploads/files/MODULES/Users/35/11261407_1024234314285914_3210054362884355031_n_croppedImg_655948811.jpeg', 'kemenydani93@gmail.com', 0, 1, 1, 1, 10, NULL, NULL, 'HU', NULL, NULL, 'Szekszard', 'Bio', '2017-04-19 10:48:04', NULL, NULL, '2016-11-16 20:01:20'),
(44, '$2y$10$gCR1g8Uf1cCMtIrI/nTN1uzqhy6SeSSzXo9hpvb4y7U/yB6Xl8vDO', '', 'Joppe', 'Joppe', 'Massant', NULL, 'joppem13@hotmail.com', 0, 1, 1, 1, 5, NULL, NULL, 'BE', NULL, NULL, 'Bruges', '', '2017-01-13 13:28:01', NULL, NULL, '2016-11-21 21:51:18'),
(45, '$2y$10$LsuHN/SGUDXUo65wBrQ5eu7uvBNh0gIejJhtfyYw2QENVBgKB3VGe', '', 'Near', NULL, NULL, NULL, 'wim.vervenne@student.vives.be', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-21 22:03:41', NULL, NULL, '2016-11-21 22:02:36'),
(46, '$2y$10$8qH9WgHj9/SWTNURayxeK.KN2DCg9K8X/O1GoMio9sTnALNYA.Wd2', '', 'Angrykid', 'Wout', 'Arnouts', NULL, 'mc_dr_wout@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'BE', NULL, NULL, 'Reet', '', '2016-11-21 23:51:08', NULL, NULL, '2016-11-21 22:03:06'),
(47, '$2y$10$cvitx5pZkOnF.mGgfQuw4OZSadD7Glv7Kv5Ov94GQ8AgRKrQiT/a2', '', 'glennyboyke007', NULL, NULL, NULL, 'glennyboyke7@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-21 22:54:59', NULL, NULL, '2016-11-21 22:54:59'),
(48, '$2y$10$r5va99enAUypOJTZ/sErfeGAquQcL.rnoRT4DHZUq7UQroaESxsZ6', '', 'YDF', 'Jeffrey', 'Blom', NULL, 'jeffrey-blom@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'NL', NULL, NULL, '', '', '2016-12-05 13:55:26', NULL, NULL, '2016-11-22 10:43:03'),
(49, '$2y$10$iy7q.1IYI9t9copL/xNqBur4A9bY2v0jstDmbvLcjSXvmGlXd0xfK', '', 'Cédric', NULL, NULL, NULL, 'cedricponseele@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-22 14:35:15', NULL, NULL, '2016-11-22 11:25:44'),
(50, '$2y$10$c7Jli7hNiw0KJaafRljZEulqTrHUgwuxFr6gdQLeXGlfojWpr1V2K', '', 'CYTARO', NULL, NULL, NULL, 'gido_brouwer@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-22 19:55:34', NULL, NULL, '2016-11-22 19:55:34'),
(51, '$2y$10$VYkWHgKy6RfCv1jWpoFt2uwkmPs56yffLTb2ycfcLYqEGG19qB3Vy', '', 'Kaltertje ', 'Huub', 'Kalter', NULL, 'huub_kalter@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'NL', NULL, NULL, '', '', '2016-11-23 15:20:05', NULL, NULL, '2016-11-23 15:14:49'),
(52, '$2y$10$SQb9BAldMkF4aJgKDHA40ei7UP2yYVk7t2Da3pQJ5XEiA9LoWJ.Qu', '', 'MatthiC', 'Matthias', 'Claeys', NULL, 'matthiasclaey@venkogaming.com', 0, 1, 1, 1, 1, NULL, NULL, 'BE', NULL, NULL, 'Lovendegem', '', '2017-02-20 22:59:54', NULL, NULL, '2016-11-24 21:36:44'),
(53, '$2y$10$4c39dEr4cZP8hGSPI8xclOOwY7i0rKhNl4mPmWDt6ggOoUNx/A6dy', '', 'america', NULL, NULL, NULL, 'america@trump.create', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-27 14:05:20', NULL, NULL, '2016-11-27 14:05:01'),
(54, '$2y$10$92oGV36tFE7WbnjC3yK5BuCiTuSrLPoNRS3UfC6peyMmAUQJri7g2', '', 'Thijs', 'Thijs', 'van Baalen', NULL, 'thijsvanbaalen@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'NL', NULL, NULL, '\'s-Gravenzande', '', '2016-11-27 19:28:29', NULL, NULL, '2016-11-27 19:27:30'),
(55, '$2y$10$CY3q81WlzPoKtENYE7lmF..8RPTCV51LfcZYm/JbQ5wF6D6jKO5WC', '$2y$10$zJmnO9wc9uHuJLWKmVE4y.GfMyDJzHeMtCUpCMbHyQJWfMBMTMeDS', 'Manatee', '', '', NULL, 'christiaan@manatee.gg', 0, 1, 1, 1, 10, NULL, NULL, 'BE', NULL, NULL, '', '', '2016-12-10 16:58:09', NULL, NULL, '2016-11-29 11:44:23'),
(56, '$2y$10$MBF0IIVUku1FnYhGHhDkxuPZE/1vWNbOVKpDDDtVKZgXL.7oQ5g2m', '', 'xMickey', NULL, NULL, NULL, 'michiel.billen1@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-29 11:44:27', NULL, NULL, '2016-11-29 11:44:27'),
(57, '$2y$10$AHqQ3wWBevSKEBks3T/4x.8ydHgFVcbgy.0VYQyQi/t2J4TsX.p0G', '', 'Woonypooh', NULL, NULL, NULL, 'brent.deridder@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-29 12:25:22', NULL, NULL, '2016-11-29 12:22:15'),
(58, '$2y$10$rv8REhM45WrWVe61t3z7He5nPuRhP7lPg3HfcwYPsnp3zGeS/Yc9a', '', 'Adumon', 'Alexander', 'Dumon', './Uploads/files/MODULES/Users/58/15271219_1382263908465204_1528267421_o_croppedImg_1466276531.jpeg', 'dumon.alexander1997@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'BE', NULL, NULL, 'Hasselt', '', '2016-12-05 20:00:42', NULL, NULL, '2016-11-29 12:55:10'),
(59, '$2y$10$pV/ulRZwcV3TVioJYSeaGO/WAWJTy5OTPDn0M2pkjber511VdFJVi', '', 'Borito B', NULL, NULL, './Uploads/files/MODULES/Users/59/anime dark_croppedImg_506779447.jpeg', 'borisvoetbal@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-29 15:55:02', NULL, NULL, '2016-11-29 15:47:31'),
(60, '$2y$10$hzj2HcMw2d0oLqU5athdOeRtvTdbaZhaSPMNLC4TB7jCm.z8fjB.O', '', 'SM7', 'Steff', 'Mertens', './Uploads/files/MODULES/Users/60/sm7_croppedImg_1573622853.jpeg', 'steam_sm7@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'BE', NULL, NULL, 'Herentals', '', '2016-11-30 19:34:17', NULL, NULL, '2016-11-29 15:47:34'),
(61, '$2y$10$Gqfdm6jDC7l2ghYDDYSd6O7e4fxSZFSJDJ27F1gUnfun5uGbOXvB2', '', 'kaas', NULL, NULL, NULL, 'nielsvarendonk@hotmail.com', 0, 1, 1, 1, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-29 16:07:47', NULL, NULL, '2016-11-29 16:02:44'),
(62, '$2y$10$bxfd8pwUIfjSJP/.4tnzk./VLL2sWJ363uSr22NoBphc9WYz0oFv6', '', 'Luminiz', 'Mike', 'Pouw', './Uploads/files/MODULES/Users/62/Untitled23423456_croppedImg_1024773558.png', 'Mikepouw92@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'NL', NULL, NULL, 'Hoogeveen', '23 years of age and I LOOOOOOOVEEEE Pizza :3', '2016-11-29 17:55:51', NULL, NULL, '2016-11-29 17:51:40'),
(63, '$2y$10$YS2NmEThvdVqtkbgjqsVoO8zbrq6XBCrzk7EwITE4m7IL60azm68O', '', 'Woong', NULL, NULL, NULL, 'o@vanvynckt.eu', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-05 23:16:20', NULL, NULL, '2016-11-30 15:49:41'),
(64, '$2y$10$QX5mGpOhGBi4qeISWqH04.poDado58Bv3Onx1W2I5A3e7zau11UZK', '', 'themats', NULL, NULL, NULL, 'mats.vingerhoets5@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-10 15:15:36', NULL, NULL, '2016-11-30 16:31:00'),
(65, '$2y$10$1N/SqCPDSJCfmcjmgHaAk.vT756fQsQIE/mdtdrOoWDUchf4J2VDa', '', 'Sandra ', NULL, NULL, NULL, 'sandra199602@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-30 18:54:59', NULL, NULL, '2016-11-30 18:54:59'),
(67, '$2y$10$nHEZnS.WQOEPeFSN.ntfjeoc5xuxwe2Os.oS.ug7FQRIrU/HANL3O', '', 'Bersavil', NULL, NULL, NULL, 'jonas-vanhoeyweghen@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-07 12:07:30', NULL, NULL, NULL),
(68, '$2y$10$yDdkFGTV3Qwbja1K8/6wiOmnt8CjvRDX4kMwSsOTQGFpCE4y.2x6q', '', 'Sundays', NULL, NULL, NULL, 'fight.fortress.europe@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-08 23:01:39', NULL, NULL, NULL),
(69, '$2y$10$nOLw2ebBYc.SSkqeWjJgXeEAUGfks7ePbGITqdbQAUW/rtGHmgU3a', '', 'J.J.Watt', 'Robbe', 'Pieters', NULL, 'Robbepieters69@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'BE', NULL, NULL, 'Aalter', 'Robbe Pieters, 18 jaar uit Aalter en student aan de Vives hoge school in Brugge in de bachelor opleiding Hotelmanagement.\r\nWebmaster at Game Fist.', '2016-12-09 20:19:25', NULL, NULL, NULL),
(70, '$2y$10$LBoPmE5S/hFzxQIVJ4nOl.699wtlH4BUd2QtAMlJBvHfsb0BCGBQC', '', 'Lander', NULL, NULL, NULL, 'Lander_vanreppelen@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-10 17:01:03', NULL, NULL, NULL),
(71, '$2y$10$Z/hqd.6Hn78yy4mniP64vud4F0FNFUKLCV4rT/IFDX8JMptYEsgJW', '', 'maurits', NULL, NULL, NULL, 'maurits2012@live.nl', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-16 18:14:48', NULL, NULL, NULL),
(72, '$2y$10$1sKa6SwZjgEHm2Yppi92qe71RSlINPCxUTaqXbe0h0yWhJ.q1FAmK', '', 'vusin', 'Gilles', 'De Decker', './Uploads/files/MODULES/Users/72/profiel2_OK_croppedImg_1026962335.jpeg', 'decker170@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'BE', NULL, NULL, 'Eeklo', '', '2017-02-15 19:46:53', NULL, NULL, NULL),
(73, '$2y$10$k14JNlbIwKlOuAM4DCG1I.jK0Ue2M8IgPLJ8kUUp7/XTXH3w4k8Vq', '', 'Miinno0', NULL, NULL, NULL, 'RichardBieringa@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-30 14:49:33', NULL, NULL, NULL),
(74, '$2y$10$qN9A/29veLuUDAhexBZbfu2luBB.R5b35ZO0J0f4/unqBfpUpD/tG', '', 'Lycyic', '', '', NULL, 'd.heugten@gmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'NL', NULL, NULL, '', '', '2017-02-01 15:50:50', NULL, NULL, NULL),
(75, '$2y$10$LT3fRpXMCDeJ8LQjI9wtou1Jg.95Zx3LydBk.gLIgSVTUeE4VHf1K', '', 'Matsy', 'Sammy', 'Stroobandt', './Uploads/files/MODULES/Users/75/venko_croppedImg_1629319032.png', 'sammy.stroobandt@hotmail.com', 0, 1, 1, 1, 1, NULL, NULL, 'BE', NULL, NULL, 'Sleidinge', 'FIFA Player for Venko Gaming', '2017-02-11 13:19:12', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `xyz_video`
--

CREATE TABLE `xyz_video` (
  `video_id` int(11) NOT NULL,
  `video_title` text,
  `youtube_id` text,
  `yt_id` text,
  `video_desc` text,
  `thumbnails` text,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `related_coverage` int(11) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `xyz_video`
--

INSERT INTO `xyz_video` (`video_id`, `video_title`, `youtube_id`, `yt_id`, `video_desc`, `thumbnails`, `featured`, `active`, `related_coverage`, `date_created`) VALUES
(39, '3K SHK - ESL Benelux Season 2 Highlight - Week 4', 'https://www.youtube.com/watch?v=FarwW-JcZG0', 'FarwW-JcZG0', 'SHK dropping 30 bommer against The Untouchables.', '{"default":{"url":"https://i.ytimg.com/vi/FarwW-JcZG0/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/FarwW-JcZG0/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/FarwW-JcZG0/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:58:18'),
(38, 'v1N & Bernard - ESL Benelux Season 2 Highlight - Week 5', 'https://www.youtube.com/watch?v=n5Gbsv4sOes', 'https://www.youtube.com/watch?v=n5Gbsv4sOes', 'The ESL Benelux Championship Winter Season 2016 Group Stage will be played over 7 weeks starting September 26th. Every week the best League of Legends and Counter-Strike: Global Offensive teams and Hearthstone players from Belgium, the Nederlands and Luxembourg will face each other once. The top 4 will advance to the finals in the Amsterdam Arena at November 26-27.', '{"default":{"url":"https://i.ytimg.com/vi/n5Gbsv4sOes/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/n5Gbsv4sOes/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/n5Gbsv4sOes/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:57:26'),
(35, '1 vs 2 v1N - ESL Benelux Season 2 Highlight - Week 3', 'https://www.youtube.com/watch?v=EoQpy0j9Ons', 'EoQpy0j9Ons', 'The ESL Benelux Championship Winter Season 2016 Group Stage will be played over 7 weeks starting September 26th. Every week the best League of Legends and Counter-Strike: Global Offensive teams and Hearthstone players from Belgium, the Nederlands and Luxembourg will face each other once. The top 4 will advance to the finals in the Amsterdam Arena at November 26-27.', '{"default":{"url":"https://i.ytimg.com/vi/EoQpy0j9Ons/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/EoQpy0j9Ons/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/EoQpy0j9Ons/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:55:30'),
(40, 'Highlight video of Venko Gaming in the first ESL Benelux Championship', 'https://www.youtube.com/watch?v=EFcizBTFQcU', 'EFcizBTFQcU', '** famas frag at 02:13 is from Bastiaan \'Kipfler\' Welbergen **\r\n\r\nHighlight video of Venko Gaming in the first ESL Benelux Championship (CS:GO).\r\n\r\nVenko finished 4th after playing the LAN finals in Amsterdam ArenA.\r\nEdited by LeX: steamcommunity.com/profiles/76561197997210692/\r\n\r\nSongs:\r\n- Namaste ft. Tiana Khasi - Signs (Radio Edit)\r\n- Lights & Motion - Fractured\r\nThanks to the following sponsors: \r\n- Tt eSPORTS\r\n- Gamegear\r\n- Manatee.gg\r\n- Fragwise\r\n- Offensive servers\r\n- Arctic Secrets\r\n- CLD Distribution', '{"default":{"url":"https://i.ytimg.com/vi/EFcizBTFQcU/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/EFcizBTFQcU/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/EFcizBTFQcU/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 11:00:33'),
(28, 'Axy TteSPORTS Unboxing', 'https://www.youtube.com/watch?v=Irx6EBVZzyU', 'Irx6EBVZzyU', 'Axy TteSPORTS Unboxing', '{"default":{"url":"https://i.ytimg.com/vi/Irx6EBVZzyU/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/Irx6EBVZzyU/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/Irx6EBVZzyU/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:48:38'),
(29, 'Venko Gaming ESEA MATCH ENSOX', 'https://www.youtube.com/watch?v=4WfJpI9f2QY', '4WfJpI9f2QY', 'sadly a very bad match from us', '{"default":{"url":"https://i.ytimg.com/vi/4WfJpI9f2QY/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/4WfJpI9f2QY/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/4WfJpI9f2QY/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:49:48'),
(30, 'Ketchup ninja defuse vs SD Gaming', 'https://www.youtube.com/watch?v=pcItgEtY2w0', 'pcItgEtY2w0', 'Ketchup ninja defuse vs SD Gaming\r\nin the ESL Benelux Championship Season 1 CS:GO Group Stage', '{"default":{"url":"https://i.ytimg.com/vi/pcItgEtY2w0/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/pcItgEtY2w0/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/pcItgEtY2w0/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:50:35'),
(31, 'Jochen “Dentamme” Taminau at the 8th e-Sports World Championships eps.1', 'https://www.youtube.com/watch?v=9PjQK_6zIOc', '9PjQK_6zIOc', 'Vlog from Venko Gaming Hearthstone player Jochen “Dentamme” Taminau at the 8th e-Sports World Championships 2016 Jakarta', '{"default":{"url":"https://i.ytimg.com/vi/9PjQK_6zIOc/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/9PjQK_6zIOc/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/9PjQK_6zIOc/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:51:17'),
(32, 'ESL Benelux Championship | Week 1 | Venko Gaming vs 3P-Esports', 'https://www.youtube.com/watch?v=KZBkFIH7mrY', 'KZBkFIH7mrY', 'The ESL Benelux Championship Winter Season 2016 Group Stage will be played over 7 weeks starting September 26th. Every week the best League of Legends and Counter-Strike: Global Offensive teams and Hearthstone players from Belgium, the Nederlands and Luxembourg will face each other once. The top 4 will advance to the finals in the Amsterdam Arena at November 26-27.', '{"default":{"url":"https://i.ytimg.com/vi/KZBkFIH7mrY/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/KZBkFIH7mrY/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/KZBkFIH7mrY/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:52:04'),
(33, 'ESL Benelux Championship | Week 2 | Venko Gaming vs Dutch Prodigy', 'https://www.youtube.com/watch?v=cENBrV59w2I', 'cENBrV59w2I', 'The ESL Benelux Championship Winter Season 2016 Group Stage will be played over 7 weeks starting September 26th. Every week the best League of Legends and Counter-Strike: Global Offensive teams and Hearthstone players from Belgium, the Nederlands and Luxembourg will face each other once. The top 4 will advance to the finals in the Amsterdam Arena at November 26-27.', '{"default":{"url":"https://i.ytimg.com/vi/cENBrV59w2I/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/cENBrV59w2I/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/cENBrV59w2I/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:53:28'),
(34, 'Jochen “Dentamme” Taminau at the 8th e-Sports World Championships eps.2', 'https://www.youtube.com/watch?v=D3jr56VscKE', 'D3jr56VscKE', 'Vlog from Venko Gaming Hearthstone player Jochen “Dentamme” Taminau at the 8th e-Sports World Championships 2016 Jakarta.\r\n\r\n2de Episode', '{"default":{"url":"https://i.ytimg.com/vi/D3jr56VscKE/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/D3jr56VscKE/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/D3jr56VscKE/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:54:25'),
(36, '4K SHK - ESL Benelux Season 2 Highlight - Week 3', 'https://www.youtube.com/watch?v=7YutwnOKL4A', '7YutwnOKL4A', 'The ESL Benelux Championship Winter Season 2016 Group Stage will be played over 7 weeks starting September 26th. Every week the best League of Legends and Counter-Strike: Global Offensive teams and Hearthstone players from Belgium, the Nederlands and Luxembourg will face each other once. The top 4 will advance to the finals in the Amsterdam Arena at November 26-27.', '{"default":{"url":"https://i.ytimg.com/vi/7YutwnOKL4A/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/7YutwnOKL4A/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/7YutwnOKL4A/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:56:01'),
(37, 'Highlight vs Mouse Maffia, CS:GO - Masters Of Benelux.', 'https://www.youtube.com/watch?v=JhJgJtLa6gk', 'JhJgJtLa6gk', 'Highlight out of the won semi-finales of the CS:GO - Masters Of Benelux, against Mouse Maffia.', '{"default":{"url":"https://i.ytimg.com/vi/JhJgJtLa6gk/default.jpg","width":120,"height":90},"medium":{"url":"https://i.ytimg.com/vi/JhJgJtLa6gk/mqdefault.jpg","width":320,"height":180},"high":{"url":"https://i.ytimg.com/vi/JhJgJtLa6gk/hqdefault.jpg","width":480,"height":360}}', 0, 1, 1, '2016-11-22 10:56:43');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `xyz_about`
--
ALTER TABLE `xyz_about`
  ADD PRIMARY KEY (`about_id`);

--
-- A tábla indexei `xyz_adv`
--
ALTER TABLE `xyz_adv`
  ADD PRIMARY KEY (`adv_id`);

--
-- A tábla indexei `xyz_awards`
--
ALTER TABLE `xyz_awards`
  ADD PRIMARY KEY (`award_id`);

--
-- A tábla indexei `xyz_categories`
--
ALTER TABLE `xyz_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- A tábla indexei `xyz_comment`
--
ALTER TABLE `xyz_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- A tábla indexei `xyz_contact`
--
ALTER TABLE `xyz_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- A tábla indexei `xyz_downloads`
--
ALTER TABLE `xyz_downloads`
  ADD PRIMARY KEY (`download_id`);

--
-- A tábla indexei `xyz_forum`
--
ALTER TABLE `xyz_forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- A tábla indexei `xyz_forum_threads`
--
ALTER TABLE `xyz_forum_threads`
  ADD PRIMARY KEY (`thread_id`),
  ADD KEY `forum_id` (`forum_id`),
  ADD KEY `user_id` (`user_id`);

--
-- A tábla indexei `xyz_gallery`
--
ALTER TABLE `xyz_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- A tábla indexei `xyz_matches`
--
ALTER TABLE `xyz_matches`
  ADD PRIMARY KEY (`match_id`);

--
-- A tábla indexei `xyz_members`
--
ALTER TABLE `xyz_members`
  ADD PRIMARY KEY (`member_id`);

--
-- A tábla indexei `xyz_message`
--
ALTER TABLE `xyz_message`
  ADD PRIMARY KEY (`message_id`);

--
-- A tábla indexei `xyz_news`
--
ALTER TABLE `xyz_news`
  ADD PRIMARY KEY (`news_id`);

--
-- A tábla indexei `xyz_pages`
--
ALTER TABLE `xyz_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- A tábla indexei `xyz_partners`
--
ALTER TABLE `xyz_partners`
  ADD PRIMARY KEY (`partner_id`);

--
-- A tábla indexei `xyz_products`
--
ALTER TABLE `xyz_products`
  ADD PRIMARY KEY (`product_id`);

--
-- A tábla indexei `xyz_settings`
--
ALTER TABLE `xyz_settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- A tábla indexei `xyz_stream`
--
ALTER TABLE `xyz_stream`
  ADD PRIMARY KEY (`stream_id`);

--
-- A tábla indexei `xyz_teams`
--
ALTER TABLE `xyz_teams`
  ADD PRIMARY KEY (`team_id`);

--
-- A tábla indexei `xyz_users`
--
ALTER TABLE `xyz_users`
  ADD PRIMARY KEY (`user_id`);

--
-- A tábla indexei `xyz_video`
--
ALTER TABLE `xyz_video`
  ADD PRIMARY KEY (`video_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `xyz_about`
--
ALTER TABLE `xyz_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT a táblához `xyz_adv`
--
ALTER TABLE `xyz_adv`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT a táblához `xyz_awards`
--
ALTER TABLE `xyz_awards`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT a táblához `xyz_categories`
--
ALTER TABLE `xyz_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT a táblához `xyz_comment`
--
ALTER TABLE `xyz_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT a táblához `xyz_contact`
--
ALTER TABLE `xyz_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT a táblához `xyz_downloads`
--
ALTER TABLE `xyz_downloads`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT a táblához `xyz_forum`
--
ALTER TABLE `xyz_forum`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT a táblához `xyz_forum_threads`
--
ALTER TABLE `xyz_forum_threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT a táblához `xyz_gallery`
--
ALTER TABLE `xyz_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT a táblához `xyz_matches`
--
ALTER TABLE `xyz_matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT a táblához `xyz_members`
--
ALTER TABLE `xyz_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT a táblához `xyz_message`
--
ALTER TABLE `xyz_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT a táblához `xyz_news`
--
ALTER TABLE `xyz_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT a táblához `xyz_pages`
--
ALTER TABLE `xyz_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT a táblához `xyz_partners`
--
ALTER TABLE `xyz_partners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT a táblához `xyz_products`
--
ALTER TABLE `xyz_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT a táblához `xyz_settings`
--
ALTER TABLE `xyz_settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT a táblához `xyz_stream`
--
ALTER TABLE `xyz_stream`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT a táblához `xyz_teams`
--
ALTER TABLE `xyz_teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT a táblához `xyz_users`
--
ALTER TABLE `xyz_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT a táblához `xyz_video`
--
ALTER TABLE `xyz_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `xyz_forum_threads`
--
ALTER TABLE `xyz_forum_threads`
  ADD CONSTRAINT `xyz_forum_threads_ibfk_1` FOREIGN KEY (`forum_id`) REFERENCES `xyz_forum` (`forum_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
