-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 24 2014 г., 16:47
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `medicine`
--

-- --------------------------------------------------------

--
-- Структура таблицы `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `sick_id` int(18) NOT NULL,
  `analisys` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `access`
--

INSERT INTO `access` (`sick_id`, `analisys`) VALUES
(25, 'tahlilihun'),
(25, 'tahlilimochevinaihun'),
(25, 'ozmoishigoh_i'),
(25, 'tahlilihun'),
(25, 'tahlilimochevinaihun'),
(25, 'tahlilikandihun');

-- --------------------------------------------------------

--
-- Структура таблицы `bemorho`
--

CREATE TABLE IF NOT EXISTS `bemorho` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `hatsayr` int(18) NOT NULL,
  `NomiBemor` varchar(255) NOT NULL,
  `SoliTavallud` varchar(65) NOT NULL,
  `address` varchar(80) NOT NULL,
  `ImtieznokiiBemor` varchar(80) NOT NULL,
  `hujjat` varchar(80) NOT NULL,
  `NomiDuhtur` varchar(80) NOT NULL,
  `TashhisiPeshaki` text NOT NULL,
  `data` date NOT NULL,
  `sex` varchar(5) NOT NULL,
  `age` int(18) NOT NULL,
  `city` varchar(18) NOT NULL,
  `region` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `bemorho`
--

INSERT INTO `bemorho` (`id`, `hatsayr`, `NomiBemor`, `SoliTavallud`, `address`, `ImtieznokiiBemor`, `hujjat`, `NomiDuhtur`, `TashhisiPeshaki`, `data`, `sex`, `age`, `city`, `region`) VALUES
(2, 1, 'Мурод Хайдаров', '23.07.1995', 'Шамси 8, кв 10', 'касал нест', 'А6696048', 'Шарифамо', 'Нест', '2014-04-19', '', 0, '0', ''),
(10, 24, 'длапотд', 'дловадпло', 'дловадлоп', 'дловадлпо', 'дловыдлпао', 'длыкаопот', 'ВАОЛТЛЧОП', '2014-04-19', '', 0, '0', ''),
(11, 3, 'msjdn', 'kjdnflkj', 'JNFSGLKJ', 'JKDNFGLKJ', 'JKNFGKJN', 'kjfnsd', 'dfkjgndf', '2014-04-19', '', 0, '0', ''),
(14, 3, 'Olim Khaydarov', '26.08.1998', 'Shamsi 8, ft 10', 'No', 'A882233', 'Murod Khaydarov', 'Nest', '2014-04-21', '', 18, '0', ''),
(15, 4, 'Кимкиев Кимки', 'Номалум', 'ФИг его знает', 'Нест', 'надора', 'ХЗ', 'ОК', '2014-04-21', '', 0, '0', ''),
(16, 4, '&#1262;ро&#1179;ов Бла бла', '3,06,1991', 'Нусратулло Махсум 10', 'Нест', 'А6696048', '&#1178;одир Солиев', 'Нест', '2014-04-22', '', 0, '0', ''),
(17, 4, 'lsdjhf', 'ljglj', 'lkjsglk', 'jlgkdjl', 'kjgldfkj', 'lkgjdlfkj', 'lkgdlk', '2014-04-25', '', 0, '0', ''),
(18, 23, 'Станислав Мюллер', '29.12.2014', 'Рудаки 18, кв 10', 'нест', 'А6696048', 'Джамшед Мусоев', 'нест', '2014-04-30', 'зан', 0, '1', ''),
(19, 3454, 'Розия Буриева', '12.03.1976', 'Шамси 10, кв 23', 'нест', 'А5623112', 'Мусоев Джамшед', 'нест', '2014-04-30', 'Зан', 0, '0', ''),
(20, 12, 'Сангинов Тимур', '23.04.1995', 'Испечак 2, М-23', 'Нест', 'А669933', 'Рано Сафаровна', 'нест', '2014-05-02', 'Мард', 0, 'Ноҳияи Сино', ''),
(21, 12, 'апдло', 'дало', 'авчпилт', 'ТИБ', 'Т', 'БТВпаит', 'длти', '2014-05-02', 'Мард', 0, 'Ноҳияи Сино', 'Шаҳри Душанбе'),
(22, 34, 'Nomu nasab', '12,23.34', 'sdlkgj', 'lkjsfglk', 'jfgklj', 'ldkfj', 'lkjdfh', '2014-05-03', 'Зан', 0, 'Ноҳияи Сино', 'Шаҳри Душанбе'),
(23, 45, 'lkfhglkdfh', '2345', 'hzhzhzh', 'xfjng', 'kljhdf', 'dfkhdkf', 'f,g', '2014-05-03', 'Зан', 0, 'Ноҳияи Сино', 'Шаҳри Душанбе'),
(24, 43, 'Мадина  Саидалиева', '21.03.1994', 'Бухоро 23', 'нест', 'А669933', 'Духтур', 'Нест', '2014-05-04', 'Зан', 18, 'Ноҳияи Шоҳмансур', 'Шаҳри Душанбе'),
(25, 34, 'Шохназар Гулов', '23.04.1995', 'Гугл', 'нест', 'А687321', 'Духтур', 'нест', '2014-05-06', 'Зан', 25, 'Шаҳри Хоруғ', 'Вилояти Мухтори Кўҳистони Бадахшон'),
(26, 11, '11', '11', '11111g fgf', '11', '11', '11', 'dfgfgf fg hfg fg ffg  fgf gf gf fg f b hbjkgyh jhujh jhn jh jkh j hj i o k                 kjkjk jk jkj kj k jk j kj kj kj k jk j kj kj k jk j k kj k jkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk                            hffffffffffffffffffffffff                      fgfgfffffffffffffffffffff               fgfffffffffffff', '2014-06-11', 'Зан', 0, 'Ноҳияи Шоҳмансур', 'Шаҳри Душанбе'),
(27, 0, 'Олим Хайдаров', '18', 'ьвыатпд', 'оаывтпил', 'отдаво', '', '', '0000-00-00', 'мард', 0, '4', '5'),
(28, 0, 'Ному насаб тест тест', '95', 'ывджмбп', 'ждыбв', 'ждбыжпд', '', '', '0000-00-00', 'мард', 0, 'Ноҳияи Сино', 'Шаҳри Душанбе'),
(29, 0, 'Хайдаров Комер', '16.07.1995', 'Испечак 2', 'фз фз', 'тожефз', '', '', '0000-00-00', 'мард', 0, 'Ноҳияи Исмоили Сом', 'Шаҳри Душанбе');

-- --------------------------------------------------------

--
-- Структура таблицы `biokimievi`
--

CREATE TABLE IF NOT EXISTS `biokimievi` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `sana` varchar(65) NOT NULL,
  `hujra` text NOT NULL,
  `mintaka` text NOT NULL,
  `tarih` text NOT NULL,
  `holesterin` text NOT NULL,
  `bilirubin` text NOT NULL,
  `b_p` text NOT NULL,
  `b_o` text NOT NULL,
  `reaksia` text NOT NULL,
  `acat` text NOT NULL,
  `alat` text NOT NULL,
  `f_i` text NOT NULL,
  `m_s` text NOT NULL,
  `amilaza` text NOT NULL,
  `almubin` text NOT NULL,
  `ggtp` text NOT NULL,
  `sid` int(18) NOT NULL,
  `data` date NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `biokimievi`
--

INSERT INTO `biokimievi` (`id`, `sana`, `hujra`, `mintaka`, `tarih`, `holesterin`, `bilirubin`, `b_p`, `b_o`, `reaksia`, `acat`, `alat`, `f_i`, `m_s`, `amilaza`, `almubin`, `ggtp`, `sid`, `data`, `kassa`) VALUES
(1, '2014-04-13', 'блват', 'отвап', 'лоатпло&#1207;в', 'валопл', 'ваопт', 'влал&#1251;', 'сюпт&#1251;', 'л&#1251;мир', 'двопрдвт', 'длаоидл', 'валю', 'длвоек', '&#1207;вп&#1251;бт', 'ждвлажн', 'дл&#1207;аоп', 16, '2014-04-22', ''),
(2, '2014-04-13', 'блват', 'отвап', 'лоатпло&#1207;в', 'валопл', 'ваопт', 'влал&#1251;', 'сюпт&#1251;', 'л&#1251;мир', 'двопрдвт', 'длаоидл', 'валю', 'длвоек', '&#1207;вп&#1251;бт', 'ждвлажн', 'дл&#1207;аоп', 16, '2014-04-22', '');

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `id_viloyat` int(18) NOT NULL,
  `name` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `id_viloyat`, `name`) VALUES
(3, 5, 'Ноҳияи Исмоили Сомонӣ'),
(4, 5, 'Ноҳияи Сино'),
(5, 5, 'Ноҳияи Фирдавсӣ'),
(6, 5, 'Ноҳияи Шоҳмансур'),
(7, 4, 'Ноҳияи Варзоб'),
(8, 4, 'Шаҳри Ваҳдат'),
(9, 4, 'Ноҳияи Нуробод'),
(10, 4, 'Ноҳияи Рашт'),
(11, 4, 'Шаҳри Роғун'),
(12, 4, 'Ноҳияи Рўдакӣ'),
(13, 4, 'Ноҳияи Тавилдара'),
(14, 4, 'Ноҳияи Тоҷикобод'),
(15, 4, 'Шаҳри Турсунзода'),
(16, 4, 'Ноҳияи Файзобод'),
(17, 4, 'Ноҳияи Ҳисор'),
(18, 4, 'Ноҳияи Ҷиргатол'),
(19, 4, 'Ноҳияи Шаҳринав'),
(20, 1, 'Шаҳри Хоруғ'),
(21, 1, 'Ноҳияи Ванҷ'),
(22, 1, 'Ноҳияи Дарвоз'),
(23, 1, 'Ноҳияи Ишкошим'),
(24, 1, 'Ноҳияи Мурғоб'),
(25, 1, 'Ноҳияи Роштқалъа'),
(26, 1, 'Ноҳияи Рўшон'),
(27, 1, 'Ноҳияи Шуғнон'),
(28, 2, 'Шаҳри Хуҷанд'),
(29, 2, 'Ноҳияи Айнӣ'),
(30, 2, 'Ноҳияи Ашт'),
(31, 2, 'Ноҳияи Бобоҷон Ғафуров'),
(32, 2, 'Ноҳияи Ғончӣ'),
(33, 2, 'Ноҳияи Зафаробод'),
(34, 2, 'Шаҳри Истаравшан'),
(35, 2, 'Шаҳри Исфара'),
(36, 2, 'Шаҳри Қайроқум'),
(37, 2, 'Шаҳри Конибодом'),
(38, 2, 'Ноҳияи Масчоҳи Кўҳӣ'),
(39, 2, 'Ноҳияи Масчоҳ'),
(40, 2, 'Шаҳри Панҷакент'),
(41, 2, 'Ноҳияи Спитамен'),
(42, 2, 'Шаҳри Табошар'),
(43, 2, 'Шаҳри Чкалов'),
(44, 2, 'Ноҳияи Ҷаббор Расулов'),
(45, 2, 'Ноҳияи Шаҳристон'),
(46, 3, 'Шаҳри Қурғонтеппа'),
(47, 3, 'Ноҳияи Абдураҳмони Ҷомӣ'),
(48, 3, 'Ноҳияи Балҷувон'),
(49, 3, 'Ноҳияи Бохтар'),
(50, 3, 'Ноҳияи Вахш'),
(51, 3, 'Ноҳияи Восеъ'),
(52, 3, 'Ноҳияи Данғара'),
(53, 3, 'Ноҳияи Ёвон'),
(54, 3, 'Ноҳияи Қабодиён'),
(55, 3, 'Ноҳияи Колхозобод'),
(56, 3, 'Шаҳри Кўлоб'),
(57, 3, 'Ноҳияи Қумсангир'),
(58, 3, 'Ноҳияи Мир Сайид Алии Ҳамадонӣ'),
(59, 3, 'Ноҳияи Муминобод'),
(60, 3, 'Шаҳри Норак'),
(61, 3, 'Ноҳияи Носири Хусрав'),
(62, 3, 'Ноҳияи Панҷ'),
(63, 3, 'Шаҳри Сарбанд'),
(64, 3, 'Ноҳияи Темурмалик'),
(65, 3, 'Ноҳияи Фархон'),
(66, 3, 'Ноҳияи Ховалинг'),
(67, 3, 'Ноҳияи Хуросон'),
(68, 3, 'Ноҳияи Ҷиликул'),
(69, 3, 'Ноҳияи Шаҳритуз'),
(70, 3, 'Ноҳияи Шурообод');

-- --------------------------------------------------------

--
-- Структура таблицы `epart1`
--

CREATE TABLE IF NOT EXISTS `epart1` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `muqarrari` int(2) NOT NULL,
  `varamkarda` int(2) NOT NULL,
  `surhshuda` int(2) NOT NULL,
  `rangparida` int(2) NOT NULL,
  `data1` varchar(255) NOT NULL,
  `a_m` int(2) NOT NULL,
  `tashanuch` int(2) NOT NULL,
  `spazm` int(2) NOT NULL,
  `kushoda` int(2) NOT NULL,
  `vaseshuda` int(2) NOT NULL,
  `guzaro` int(2) NOT NULL,
  `data2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `epart1`
--

INSERT INTO `epart1` (`id`, `muqarrari`, `varamkarda`, `surhshuda`, `rangparida`, `data1`, `a_m`, `tashanuch`, `spazm`, `kushoda`, `vaseshuda`, `guzaro`, `data2`) VALUES
(11, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, ''),
(12, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, ''),
(13, 1, 1, 1, 1, '', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `epart2`
--

CREATE TABLE IF NOT EXISTS `epart2` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `mvt` int(2) NOT NULL,
  `s2` int(2) NOT NULL,
  `v2` int(2) NOT NULL,
  `r2` int(2) NOT NULL,
  `t2` int(2) NOT NULL,
  `rh2` int(2) NOT NULL,
  `data3` varchar(255) NOT NULL,
  `mvt3` int(2) NOT NULL,
  `s3` int(11) NOT NULL,
  `v3` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `t3` int(11) NOT NULL,
  `rh3` int(11) NOT NULL,
  `data4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `epart2`
--

INSERT INTO `epart2` (`id`, `mvt`, `s2`, `v2`, `r2`, `t2`, `rh2`, `data3`, `mvt3`, `s3`, `v3`, `r3`, `t3`, `rh3`, `data4`) VALUES
(1, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, ''),
(2, 1, 0, 0, 0, 0, 0, 'ываыв', 0, 0, 0, 0, 0, 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `lahtashaviihun`
--

CREATE TABLE IF NOT EXISTS `lahtashaviihun` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `shuba` varchar(65) NOT NULL,
  `hujra` varchar(65) NOT NULL,
  `l_hun` varchar(65) NOT NULL,
  `v_p` varchar(65) NOT NULL,
  `i_p` varchar(65) NOT NULL,
  `fibrinogen` varchar(65) NOT NULL,
  `fibrin` varchar(65) NOT NULL,
  `fibrinogenB` varchar(65) NOT NULL,
  `v_r` varchar(65) NOT NULL,
  `trombotest` varchar(65) NOT NULL,
  `data` date NOT NULL,
  `sid` int(18) NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `lahtashaviihun`
--

INSERT INTO `lahtashaviihun` (`id`, `shuba`, `hujra`, `l_hun`, `v_p`, `i_p`, `fibrinogen`, `fibrin`, `fibrinogenB`, `v_r`, `trombotest`, `data`, `sid`, `kassa`) VALUES
(1, 'вдалпо', 'оравлов&#1207;', 'б&#1207;отво&#1179;от', 'вчба', 'ло&#1207;тол', 'оларпло&#1207;р', 'т&#1207;&#1207;вп', 'лдардли&#1207;', 'вабптоол&#1207;', 'вабпло', '2014-04-22', 16, '1000');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `login`, `message`) VALUES
(4, 'Khaydarov Murod', 'Привет , first message'),
(5, 'Khaydarov Murod', 'ывплдоы'),
(6, 'Khaydarov Murod', 'ывадлыва'),
(7, 'Khaydarov Murod', 'Все работает'),
(8, 'kjahgsfkj jhsgdkjsh', 'Ага работает'),
(9, 'kjahgsfkj jhsgdkjsh', 'салом'),
(10, 'Lastname Name', 'Алейкум'),
(11, 'kjahgsfkj jhsgdkjsh', 'чхели?'),
(12, 'Lastname Name', 'Соз'),
(13, 'Khaydarov Murod', ',fdjghdf'),
(14, 'kjahgsfkj jhsgdkjsh', 'salom'),
(15, 'kjahgsfkj jhsgdkjsh', 'chiheli ?'),
(16, 'Khaydarov Murod', 'soz'),
(17, 'Khaydarov Murod', 't chi ?'),
(18, 'kjahgsfkj jhsgdkjsh', 'mesha rahmat'),
(19, 'Khaydarov Olim', 'k.nfh'),
(20, 'Khaydarov Murod', 'ваюлпдваор'),
(21, 'Khaydarov Murod', 'длывптыва'),
(22, 'Khaydarov Murod', 'юыдваьпжв'),
(23, 'lll nnn', '9hiuh'),
(24, 'Lastname Name', 'ываыв');

-- --------------------------------------------------------

--
-- Структура таблицы `ozmoishigohi_i`
--

CREATE TABLE IF NOT EXISTS `ozmoishigohi_i` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `tarih` text NOT NULL,
  `tashhis` text NOT NULL,
  `cd3` text NOT NULL,
  `cd4` text NOT NULL,
  `cd8` text NOT NULL,
  `cd20` text NOT NULL,
  `cd16` text NOT NULL,
  `cd95` text NOT NULL,
  `cd25` text NOT NULL,
  `a` text NOT NULL,
  `m` text NOT NULL,
  `g` text NOT NULL,
  `natija` text NOT NULL,
  `tahlil` text NOT NULL,
  `sana` varchar(65) NOT NULL,
  `data` date NOT NULL,
  `sid` int(18) NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `ozmoishigohi_i`
--

INSERT INTO `ozmoishigohi_i` (`id`, `tarih`, `tashhis`, `cd3`, `cd4`, `cd8`, `cd20`, `cd16`, `cd95`, `cd25`, `a`, `m`, `g`, `natija`, `tahlil`, `sana`, `data`, `sid`, `kassa`) VALUES
(1, 'б&#1251;ватп', 'ловар', 'аоп', 'воа', 'дловралдо', 'двлаор', 'ловардл', 'чао', 'б&#1251;атв&#1207;', 'авлпо', 'вюлар&#1207;&#1207;', 'юлва&#1251;пр', 'ваапорччсм', 'б&#1251;ватп', '2014-04-26', '2014-04-22', 16, '');

-- --------------------------------------------------------

--
-- Структура таблицы `ozmoishikliniki`
--

CREATE TABLE IF NOT EXISTS `ozmoishikliniki` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `tahlil` varchar(255) NOT NULL,
  `baDuhtur` varchar(65) NOT NULL,
  `d1` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `sid` int(18) NOT NULL,
  `Duhtur` varchar(65) NOT NULL,
  `data` date NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `ozmoishikliniki`
--

INSERT INTO `ozmoishikliniki` (`id`, `tahlil`, `baDuhtur`, `d1`, `d2`, `sid`, `Duhtur`, `data`, `kassa`) VALUES
(1, 'овап', '0', '0', '0', 16, 'длваопдлва', '2014-04-22', '');

-- --------------------------------------------------------

--
-- Структура таблицы `patologi`
--

CREATE TABLE IF NOT EXISTS `patologi` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `sana` date NOT NULL,
  `shuba` text NOT NULL,
  `karta` varchar(65) NOT NULL,
  `b_a` text NOT NULL,
  `hz` text NOT NULL,
  `sana_j` varchar(65) NOT NULL,
  `m_o` text NOT NULL,
  `n_k` text NOT NULL,
  `t_k` text NOT NULL,
  `h_p` text NOT NULL,
  `s_t` text NOT NULL,
  `patologoanatom` text NOT NULL,
  `t_p` text NOT NULL,
  `s_s` text NOT NULL,
  `b_t` text NOT NULL,
  `b_f` text NOT NULL,
  `m_j` text NOT NULL,
  `m_p` text NOT NULL,
  `blocks` text NOT NULL,
  `u_r` text NOT NULL,
  `sh_m` text NOT NULL,
  `tahlilgard` text NOT NULL,
  `sid` int(18) NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `patologi`
--

INSERT INTO `patologi` (`id`, `sana`, `shuba`, `karta`, `b_a`, `hz`, `sana_j`, `m_o`, `n_k`, `t_k`, `h_p`, `s_t`, `patologoanatom`, `t_p`, `s_s`, `b_t`, `b_f`, `m_j`, `m_p`, `blocks`, `u_r`, `sh_m`, `tahlilgard`, `sid`, `kassa`) VALUES
(1, '2002-03-20', 'ДИТ', 'Хз', 'Намедонм', '3.05.2013', 'Чего?', '&#1178;&#1178;', 'ээ', 'Фиг его знает че с ним)				', '', '', '', '', '', '', '', '', '', '', '', '', '', 16, ''),
(2, '0000-00-00', 'sdkgnj', 'jdfh', 'kjhbfkjhjkgv', 'hgv', 'hgv', 'jhgv', 'jhgv', 'jhgv				', 'nhjb', 'kjb', 'jbvjkv', 'jhgv', 'jhgv', 'jhg', 'vjh', 'gvj', 'hgv', 'jhbl', 'khgv', 'kj', 'bhkjb', 10, ''),
(3, '0000-00-00', 'kl;mfg', 'klm', '', '', '', '', '', '				', '', '', '', '', '', '', '', '', '', '', '', '', '', 16, '');

-- --------------------------------------------------------

--
-- Структура таблицы `peshob`
--

CREATE TABLE IF NOT EXISTS `peshob` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `peshob` int(18) NOT NULL,
  `sana` date NOT NULL,
  `muassisa` text NOT NULL,
  `r_h` text NOT NULL,
  `mikdor` text NOT NULL,
  `rang` text NOT NULL,
  `sofi` text NOT NULL,
  `v_j` text NOT NULL,
  `voguzish` text NOT NULL,
  `safeda` text NOT NULL,
  `kand` text NOT NULL,
  `j_k` text NOT NULL,
  `v_h` text NOT NULL,
  `bilirubin` text NOT NULL,
  `t_z` text NOT NULL,
  `epitelia` text NOT NULL,
  `sufti` text NOT NULL,
  `guzaranda` text NOT NULL,
  `a_g` text NOT NULL,
  `leykocitho` text NOT NULL,
  `eritposit` text NOT NULL,
  `tagirnaefta` text NOT NULL,
  `tagirefta` text NOT NULL,
  `cilindr` text NOT NULL,
  `gialini` text NOT NULL,
  `donagi` text NOT NULL,
  `epitelani` text NOT NULL,
  `leykositho` text NOT NULL,
  `eritrocitho` text NOT NULL,
  `pigmenti` text NOT NULL,
  `gadud` text NOT NULL,
  `namak` text NOT NULL,
  `mikrobho` text NOT NULL,
  `vakt` date NOT NULL,
  `sid` int(18) NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `peshob`
--

INSERT INTO `peshob` (`id`, `peshob`, `sana`, `muassisa`, `r_h`, `mikdor`, `rang`, `sofi`, `v_j`, `voguzish`, `safeda`, `kand`, `j_k`, `v_h`, `bilirubin`, `t_z`, `epitelia`, `sufti`, `guzaranda`, `a_g`, `leykocitho`, `eritposit`, `tagirnaefta`, `tagirefta`, `cilindr`, `gialini`, `donagi`, `epitelani`, `leykositho`, `eritrocitho`, `pigmenti`, `gadud`, `namak`, `mikrobho`, `vakt`, `sid`, `kassa`) VALUES
(1, 45, '2014-04-08', 'оватп', '&#1207;вой&#1207;', 'о&#1207;влоп', 'длоавдло&#1207;', 'джловдалд', 'ло', 'ор', 'орм', 'орп', 'тиблор', 'ол', 'рлоро', 'паев', 'лолоржло', 'рот&#1251;и', 'олр', 'ло', 'юордлр', 'ртилр', 'лор', 'тор', 'длоид', 'орлолор', 'лорлорл', 'ти&#1251;ило', 'лодло', 'р&#1251;тлдро', 'лолоп', 'лтдорло', '', 'б&#1251;тб&#1251;лч', '2014-04-26', 16, '100');

-- --------------------------------------------------------

--
-- Структура таблицы `radiologi1`
--

CREATE TABLE IF NOT EXISTS `radiologi1` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `meer` text NOT NULL,
  `etwas` varchar(255) NOT NULL,
  `natija` text NOT NULL,
  `sana` varchar(65) NOT NULL,
  `sid` int(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `radiologi1`
--

INSERT INTO `radiologi1` (`id`, `meer`, `etwas`, `natija`, `sana`, `sid`) VALUES
(1, '123123', '123', 'dflksjfglhn', 'dlfjgn', 28);

-- --------------------------------------------------------

--
-- Структура таблицы `radiologi2`
--

CREATE TABLE IF NOT EXISTS `radiologi2` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `t3` varchar(65) NOT NULL,
  `t4` varchar(65) NOT NULL,
  `ttg` varchar(255) NOT NULL,
  `natija` text NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `radiologi2`
--

INSERT INTO `radiologi2` (`id`, `t3`, `t4`, `ttg`, `natija`, `sid`) VALUES
(1, 'kjdfnbgkj', 'jhdfgkj', 'dkfghldk', 'kjhdfkjgh', 27);

-- --------------------------------------------------------

--
-- Структура таблицы `spart1`
--

CREATE TABLE IF NOT EXISTS `spart1` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `num` int(18) NOT NULL,
  `ruz_q` varchar(65) NOT NULL,
  `ruz_j` varchar(65) NOT NULL,
  `shuba` varchar(65) NOT NULL,
  `hujra` varchar(65) NOT NULL,
  `harorat` varchar(65) NOT NULL,
  `ba_shuba` varchar(65) NOT NULL,
  `ruz_b` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `spart1`
--

INSERT INTO `spart1` (`id`, `num`, `ruz_q`, `ruz_j`, `shuba`, `hujra`, `harorat`, `ba_shuba`, `ruz_b`) VALUES
(6, 44, '2', 'sdkgmlk', 'shuba', 'hujra', 'harorat', 'ba shuba', 'rb'),
(8, 15, '', '', '', '', '', '', ''),
(9, 4, ';alksfm', ';lkjfgkl', 'lkmfglk', 'mlkmfd', '', '', ''),
(10, 10, 'lkfmb', 'lknbvlkLKCMVBLK', 'LKMCVBLNKM', 'LKMCGNBLK', 'LKLFBKM', 'lxvkbm', 'klcvbmlk'),
(11, 0, '', '', '', '', '', '', ''),
(12, 0, '', '', '', '', '', '', ''),
(13, 0, '', '', '', '', '', '', ''),
(14, 0, '', '', '', '', '', '', ''),
(15, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `spart2`
--

CREATE TABLE IF NOT EXISTS `spart2` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `aroba` varchar(65) NOT NULL,
  `kur_aroba` varchar(65) NOT NULL,
  `roh_g` varchar(65) NOT NULL,
  `guruh_hun` varchar(65) NOT NULL,
  `rezus_k` varchar(65) NOT NULL,
  `vazn` int(65) NOT NULL,
  `qad` int(65) NOT NULL,
  `ivb` int(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `spart2`
--

INSERT INTO `spart2` (`id`, `aroba`, `kur_aroba`, `roh_g`, `guruh_hun`, `rezus_k`, `vazn`, `qad`, `ivb`) VALUES
(7, '0', '0', '1', 'chum', '77777777777', 15, 20, 27),
(8, '0', '0', '0', '', '', 62, 170, 466),
(9, '0', '0', '0', '', '', 0, 0, 0),
(10, '0', '0', '0', '', '', 0, 0, 0),
(11, '0', '0', '0', '', '', 0, 0, 0),
(12, '1', '1', '0', '', '', 10, 15, 23),
(13, '0', '0', '0', '', '', 0, 0, 0),
(14, '0', '0', '0', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `spart3`
--

CREATE TABLE IF NOT EXISTS `spart3` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `tahammul` varchar(65) NOT NULL,
  `kor` varchar(65) NOT NULL,
  `ligot` varchar(65) NOT NULL,
  `rad` varchar(65) NOT NULL,
  `badi` varchar(65) NOT NULL,
  `t_m_r` varchar(65) NOT NULL,
  `t_h_q` varchar(65) NOT NULL,
  `t_k` varchar(65) NOT NULL,
  `ruz_m` varchar(65) NOT NULL,
  `d1` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `d3` varchar(255) NOT NULL,
  `miqdor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `spart3`
--

INSERT INTO `spart3` (`id`, `tahammul`, `kor`, `ligot`, `rad`, `badi`, `t_m_r`, `t_h_q`, `t_k`, `ruz_m`, `d1`, `d2`, `d3`, `miqdor`) VALUES
(6, 'Doooodd', 'Orienbank', 'asdfsdgdffhfg', '', '', 'sd', 'sdfs', 'qwe', 'sdf', 'asosi', 'ariza', 'hambasta', 'sd'),
(7, '', 'ТЦ Саодат', '', '', '22:56', '', '', '', '', '', '', '', ''),
(8, '', 'члдаьпрв', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', 'амьчжли', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `spart4`
--

CREATE TABLE IF NOT EXISTS `spart4` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a5` varchar(255) NOT NULL,
  `a6` varchar(255) NOT NULL,
  `a7` varchar(255) NOT NULL,
  `a8` varchar(255) NOT NULL,
  `a9` varchar(255) NOT NULL,
  `a10` varchar(255) NOT NULL,
  `a11` varchar(255) NOT NULL,
  `a12` varchar(255) NOT NULL,
  `mu_ilova` varchar(255) NOT NULL,
  `b_o` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `spart4`
--

INSERT INTO `spart4` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `mu_ilova`, `b_o`) VALUES
(6, '1', '2', '3', '4', '5', '7 8 ', '90', 'ioud', 'sdfhbkj', 'jkdbk', 'nkjdfbln', 'dfnkj', 'dbfbvc', 'dv'),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `spart5`
--

CREATE TABLE IF NOT EXISTS `spart5` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `b1` varchar(65) NOT NULL,
  `b2` varchar(65) NOT NULL,
  `b3` varchar(65) NOT NULL,
  `b4` varchar(65) NOT NULL,
  `b5` varchar(65) NOT NULL,
  `b6` varchar(65) NOT NULL,
  `b7` varchar(65) NOT NULL,
  `b8` varchar(65) NOT NULL,
  `b9` varchar(65) NOT NULL,
  `b10` varchar(65) NOT NULL,
  `b11` varchar(65) NOT NULL,
  `b12` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `spart5`
--

INSERT INTO `spart5` (`id`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `b12`) VALUES
(7, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'),
(8, '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `spart6`
--

CREATE TABLE IF NOT EXISTS `spart6` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `jshs` int(2) NOT NULL,
  `bb` int(2) NOT NULL,
  `bbsh` int(2) NOT NULL,
  `bdm` int(2) NOT NULL,
  `dfk` varchar(65) NOT NULL,
  `zh23` int(2) NOT NULL,
  `zh25` int(2) NOT NULL,
  `t` int(2) NOT NULL,
  `k` int(2) NOT NULL,
  `m` int(2) NOT NULL,
  `b` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `spart6`
--

INSERT INTO `spart6` (`id`, `jshs`, `bb`, `bbsh`, `bdm`, `dfk`, `zh23`, `zh25`, `t`, `k`, `m`, `b`) VALUES
(6, 1, 1, 0, 0, '', 1, 0, 1, 1, 0, 0),
(7, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `spart7`
--

CREATE TABLE IF NOT EXISTS `spart7` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `hh2` varchar(255) NOT NULL,
  `h2` varchar(255) NOT NULL,
  `n2` varchar(255) NOT NULL,
  `t_sh` varchar(255) NOT NULL,
  `m_b` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `spart7`
--

INSERT INTO `spart7` (`id`, `hh2`, `h2`, `n2`, `t_sh`, `m_b`) VALUES
(6, 'dsaf', 'sdg', ';lk', 'sldkjfls', 'ldjfgl'),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `spart1` int(5) NOT NULL,
  `spart2` int(5) NOT NULL,
  `spart3` int(5) NOT NULL,
  `spart4` int(5) NOT NULL,
  `spart5` int(5) NOT NULL,
  `spart6` int(5) NOT NULL,
  `spart7` int(5) NOT NULL,
  `sid` int(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `story`
--

INSERT INTO `story` (`id`, `spart1`, `spart2`, `spart3`, `spart4`, `spart5`, `spart6`, `spart7`, `sid`) VALUES
(3, 6, 7, 6, 6, 7, 6, 6, 26),
(4, 9, 8, 7, 7, 8, 7, 7, 25),
(7, 12, 11, 10, 10, 11, 10, 10, 28),
(8, 13, 12, 11, 11, 12, 11, 11, 27),
(9, 14, 13, 12, 12, 13, 12, 12, 29),
(10, 15, 14, 13, 13, 14, 13, 13, 30);

-- --------------------------------------------------------

--
-- Структура таблицы `tahlilifazla`
--

CREATE TABLE IF NOT EXISTS `tahlilifazla` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `muassisa` text NOT NULL,
  `shuba` text NOT NULL,
  `hujra` text NOT NULL,
  `kita` text NOT NULL,
  `tarih` text NOT NULL,
  `mikdor` text NOT NULL,
  `konsistensia` text NOT NULL,
  `namud` text NOT NULL,
  `buy` text NOT NULL,
  `rang` text NOT NULL,
  `reaksia` text NOT NULL,
  `luob` text NOT NULL,
  `hun` text NOT NULL,
  `huroka` text NOT NULL,
  `t_hun` text NOT NULL,
  `t_srerhobilin` text NOT NULL,
  `t_bilirubin` text NOT NULL,
  `hatdor` text NOT NULL,
  `behat` text NOT NULL,
  `payvandi` text NOT NULL,
  `charbu` text NOT NULL,
  `charbui_kislotagi` text NOT NULL,
  `sobun` text NOT NULL,
  `hujayra` text NOT NULL,
  `krahmal` text NOT NULL,
  `yodofilia` text NOT NULL,
  `kristalho` text NOT NULL,
  `luob2` text NOT NULL,
  `epiteley` text NOT NULL,
  `leykositho` text NOT NULL,
  `eritrositho` text NOT NULL,
  `sodatarinho` varchar(65) NOT NULL,
  `tuhmi_j` text NOT NULL,
  `zambuguruho` text NOT NULL,
  `data` text NOT NULL,
  `sid` int(18) NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `tahlilifazla`
--

INSERT INTO `tahlilifazla` (`id`, `muassisa`, `shuba`, `hujra`, `kita`, `tarih`, `mikdor`, `konsistensia`, `namud`, `buy`, `rang`, `reaksia`, `luob`, `hun`, `huroka`, `t_hun`, `t_srerhobilin`, `t_bilirubin`, `hatdor`, `behat`, `payvandi`, `charbu`, `charbui_kislotagi`, `sobun`, `hujayra`, `krahmal`, `yodofilia`, `kristalho`, `luob2`, `epiteley`, `leykositho`, `eritrositho`, `sodatarinho`, `tuhmi_j`, `zambuguruho`, `data`, `sid`, `kassa`) VALUES
(1, '&#1207;ва', '&#1207;отило', 'ло&#1207;р', '&#1207;воп', 'лорва', 'ловабт', 'смиб&#1251;т', 'оваролр', 'овап&#1251;бт', 'боатплр', 'сбт', 'овар&#1251;', 'арлор', 'воради', 'олсб&#1251;тв', 'бст&#1251;р', 'оаб&#1251;т', 'ловарол', 'бсатр', 'олаб&#1251;ти&#1251;', 'сб&#1251;ти', 'лоаор&#1179;&#1207;', 'ачопр', 'чалопло&#1179;&#1207;', 'батплоре', 'ачбтбо', 'тчбт&#1251;иб&#1251;то', 'бвоатрор', '&#1207;абтп&#1251;', 'б&#1251;ртдлор', '&#1207;вабпотонр', 'б&#1251;астрбт', 'б&#1251;тарлдор', '&#1207;лоов', '14-04-22', 16, '');

-- --------------------------------------------------------

--
-- Структура таблицы `tahlilihun`
--

CREATE TABLE IF NOT EXISTS `tahlilihun` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `hujra` varchar(65) NOT NULL,
  `guruhiHun` varchar(65) NOT NULL,
  `Rh` varchar(65) NOT NULL,
  `duhtur` varchar(65) NOT NULL,
  `data` date NOT NULL,
  `sid` int(18) NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `tahlilihun`
--

INSERT INTO `tahlilihun` (`id`, `hujra`, `guruhiHun`, `Rh`, `duhtur`, `data`, `sid`, `kassa`) VALUES
(1, 'лорй', 'дова', 'лоаврло', 'лосмбт', '2014-04-22', 16, '65'),
(2, 'Намедонм', '3', '++', 'Нигина Холикова', '2014-05-01', 19, ''),
(3, 'kdnf', 'skdjg', 'fgn', 'lkdfjh', '2014-05-03', 14, '100'),
(4, '23', '4', '+', 'Малика Хайдарова', '2014-05-11', 25, '780');

-- --------------------------------------------------------

--
-- Структура таблицы `tahlilihun1`
--

CREATE TABLE IF NOT EXISTS `tahlilihun1` (
  `t_h` text NOT NULL,
  `shuba` text NOT NULL,
  `duhtur` text NOT NULL,
  `eriptocit` text NOT NULL,
  `gemoglobin` text NOT NULL,
  `r_h` text NOT NULL,
  `p_h` text NOT NULL,
  `bazof` text NOT NULL,
  `retikul` text NOT NULL,
  `trombocit` text NOT NULL,
  `mufthur` text NOT NULL,
  `leykocit` text NOT NULL,
  `bazofil` text NOT NULL,
  `eozinifilho` text NOT NULL,
  `mizloc` text NOT NULL,
  `inkishof` text NOT NULL,
  `j_sh` text NOT NULL,
  `segment` text NOT NULL,
  `limfocit` text NOT NULL,
  `monocit` text NOT NULL,
  `n_l` text NOT NULL,
  `anizocitoz` text NOT NULL,
  `poykilocitoz` text NOT NULL,
  `l_h` text NOT NULL,
  `normeblast` text NOT NULL,
  `sarshavi` text NOT NULL,
  `t_e` text NOT NULL,
  `tamomshavi` text NOT NULL,
  `tahlilgard` text NOT NULL,
  `t_r` text NOT NULL,
  `sid` int(18) NOT NULL,
  `kassa` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tahlilihun1`
--

INSERT INTO `tahlilihun1` (`t_h`, `shuba`, `duhtur`, `eriptocit`, `gemoglobin`, `r_h`, `p_h`, `bazof`, `retikul`, `trombocit`, `mufthur`, `leykocit`, `bazofil`, `eozinifilho`, `mizloc`, `inkishof`, `j_sh`, `segment`, `limfocit`, `monocit`, `n_l`, `anizocitoz`, `poykilocitoz`, `l_h`, `normeblast`, `sarshavi`, `t_e`, `tamomshavi`, `tahlilgard`, `t_r`, `sid`, `kassa`) VALUES
('', 'zdf', 'sdg', 'sdf', 'sdfv;', 'k', ';lksf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '');

-- --------------------------------------------------------

--
-- Структура таблицы `tahlilikandihun`
--

CREATE TABLE IF NOT EXISTS `tahlilikandihun` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `sid` int(18) NOT NULL,
  `hunPeshAzNahori` varchar(255) NOT NULL,
  `SiMinBadiKabul` varchar(255) NOT NULL,
  `ShMinBadiKabul` varchar(255) NOT NULL,
  `NavMinBadiKabul` varchar(255) NOT NULL,
  `YbstMinBadiKabul` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `duhtur` varchar(64) NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `tahlilikandihun`
--

INSERT INTO `tahlilikandihun` (`id`, `sid`, `hunPeshAzNahori`, `SiMinBadiKabul`, `ShMinBadiKabul`, `NavMinBadiKabul`, `YbstMinBadiKabul`, `data`, `duhtur`, `kassa`) VALUES
(1, 2, 'sl,dnjkg', 'djfknhk', 'kdjfhn', 'kjdfnh', 'kdjfnh', '2014-04-20', 'Olim rolton', ''),
(2, 16, 'Намедонм ай', 'Меша созай', 'Хела созай', 'Более менее', '&#1178;ооу', '2014-04-22', 'Курбон', '234');

-- --------------------------------------------------------

--
-- Структура таблицы `tahlilimochevinaihun`
--

CREATE TABLE IF NOT EXISTS `tahlilimochevinaihun` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `SanaiMavod` varchar(64) NOT NULL,
  `Shuba` varchar(64) NOT NULL,
  `Hujra` varchar(64) NOT NULL,
  `Natija` varchar(255) NOT NULL,
  `mochevina` varchar(255) NOT NULL,
  `kreatin` varchar(255) NOT NULL,
  `ostat` varchar(255) NOT NULL,
  `sid` int(18) NOT NULL,
  `duhtur` varchar(65) NOT NULL,
  `data` date NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tahlilimochevinaihun`
--

INSERT INTO `tahlilimochevinaihun` (`id`, `SanaiMavod`, `Shuba`, `Hujra`, `Natija`, `mochevina`, `kreatin`, `ostat`, `sid`, `duhtur`, `data`, `kassa`) VALUES
(1, '03.05.2015', 'Чумчи', 'Тоже чумчи', 'Фиг его знает', 'Хз ХзХзХзХЗ', 'дофига', 'Крутой чувак )', 16, '&#1178;одир С', '2014-04-22', ''),
(2, '3.04.15', '&#1207;впо', 'олаи', 'ЛОТЧЛОИТ', 'ОТЧЛОАИловтал', 'ловтарлот', 'аотлво&#1179;', 10, '&#1207;двалпод', '2014-04-22', ''),
(3, 'zdkjfhbkldfjh', 'devonahona', '6', 'Saht kasal', 'koroche biser', 'e nadora )', 'ay kjooo ))', 25, 'Zarnisso Gafurova', '2014-06-03', '500');

-- --------------------------------------------------------

--
-- Структура таблицы `tahshisifarosadoi`
--

CREATE TABLE IF NOT EXISTS `tahshisifarosadoi` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `ruzitashhis` varchar(65) NOT NULL,
  `chigar_andoza` varchar(65) NOT NULL,
  `chigar_kontur` varchar(65) NOT NULL,
  `chigar_sohtor` varchar(65) NOT NULL,
  `sadoguzaroni` varchar(65) NOT NULL,
  `varidho` varchar(65) NOT NULL,
  `vportae` varchar(65) NOT NULL,
  `omos` varchar(65) NOT NULL,
  `talhadon_shakl` varchar(65) NOT NULL,
  `talhadon_andoza` varchar(65) NOT NULL,
  `devor` varchar(65) NOT NULL,
  `talha` varchar(65) NOT NULL,
  `sang` varchar(65) NOT NULL,
  `holedoh` varchar(65) NOT NULL,
  `g_andoz` varchar(65) NOT NULL,
  `g_kontur` varchar(65) NOT NULL,
  `g_sohtor` varchar(65) NOT NULL,
  `g_omos` varchar(65) NOT NULL,
  `protok` varchar(65) NOT NULL,
  `hulosa` varchar(65) NOT NULL,
  `sid` int(18) NOT NULL,
  `data` date NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `tahshisifarosadoi`
--

INSERT INTO `tahshisifarosadoi` (`id`, `ruzitashhis`, `chigar_andoza`, `chigar_kontur`, `chigar_sohtor`, `sadoguzaroni`, `varidho`, `vportae`, `omos`, `talhadon_shakl`, `talhadon_andoza`, `devor`, `talha`, `sang`, `holedoh`, `g_andoz`, `g_kontur`, `g_sohtor`, `g_omos`, `protok`, `hulosa`, `sid`, `data`, `kassa`) VALUES
(1, 'лвр', 'довадло', 'длаордл', 'о&#1251;&#1207;&#1207;', 'бтив&#1251;т&#1207;ивп', 'бо&#1207;во&#1207;', 'лоапдов&#1207;', '&#1207;&#1251;т&#1207;в&#1251;', 'вб&#1251;тб&#1251;тп', 'ф&#1207;&#1207;б&#1251;&#1207;тп', 'бтбчс&#1251;ти', '&#1207;тб&#1207;&#1251;&#1251;ва', 'абюпб&#1251;ат', '&#1207;&#1251;ти&#1207;в', '&#1207;лвпору&#1179;', 'ба&#1251;тб&#1251;т&#1207;', 'баопво', '&#1207;втбтп', 'боварок', '&#1207;бовтпб&#1251;тп', 16, '2014-04-22', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(18) NOT NULL,
  `did` int(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `lastname`, `name`, `address`, `phone`, `did`) VALUES
(1, '1111', '1111', 'Khaydarov', 'Murod', 'Shamsi', 907992999, 1),
(2, '2222', '2222', 'Khaydarov', 'Olim', 'Shamsi', 934334477, 2),
(3, '3333', '3333', 'abc', 'abc', 'abc', 654654, 3),
(4, '4444', '4444', 'asfas', 'sdgdfh', 'sdgsfg', 645868, 4),
(5, '5555', '5555', 'kjahgsfkj', 'jhsgdkjsh', 'kjzhflj', 6835321, 5),
(6, '6666', '6666', 'k.jzsnd.gkj', 'dhjkfzblhb', 'klxdhjflgkjd', 867654, 6),
(7, '7777', '7777', 'kjznfk', 'kjbdfhb', 'hbxdjhfb', 23445, 7),
(8, '8888', '8888', 'kjhflkzjhh', 'hjbdfkjhgb', 'ksjdfhskjdhf', 98798, 8),
(9, '9999', '9999', 'kjsdbg', 'kjdfkjgbn', 'kjfgkj', 68354, 9),
(10, '101010', '101010', 'dkjn', 'kjnbsdfnb', 'kjdsnbflkjb', 6545465, 10),
(11, '111111', '111111', 'sdfsdf', 'fsdfsdf', 'sdsdgsd', 351351, 11),
(12, '121212', '121212', 'sdfsdfgsdfkn', 'lskjdfgkjsf', 'hjkbglfb', 6584684, 12),
(13, '131313', '131313', 'ldkfjjsq', 'dkfjghdkjfh', 'ksdjgkjdbf', 6854654, 13),
(14, '141414', '141414', 'lksdfngldk', 'dkdg', 'sdsdgdgh', 87654, 14),
(15, '151515', '151515', 'ыва', 'длавп', 'длоап', 234245, 15),
(16, '161616', '161616', 'Lastname', 'Name', 'Address', 98889, 16),
(17, '171717', '171717', 'Lastname', 'Name', 'Shamsi', 8888, 17),
(18, '181818', '181818', 'lastname', 'name', 'address', 9999, 18),
(19, '191919', '191919', 'lastname', 'name', 'address', 8654, 19),
(21, '212121', '212121', 'lll', 'nnn', 'aaa', 0, 21),
(22, '212121', '212121', 'lll', 'nnn', 'aaa', 23, 21),
(23, '222222', '222222', 'Radiologia', 'Rad', 'akjfbhkj', 54654, 22),
(24, '232323', '232323', 'djfbkd', 'dlkfnbj', 'sldjhkgsh', 48654, 23);

-- --------------------------------------------------------

--
-- Структура таблицы `viloyat`
--

CREATE TABLE IF NOT EXISTS `viloyat` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `viloyat`
--

INSERT INTO `viloyat` (`id`, `name`) VALUES
(1, 'Вилояти Мухтори Кўҳистони Бадахшон'),
(2, 'Вилояти Суғд'),
(3, 'Вилояти Хатлон'),
(4, 'Шаҳрҳо ва ноҳияҳои тобеъи ҷумҳурӣ'),
(5, 'Шаҳри Душанбе');

-- --------------------------------------------------------

--
-- Структура таблицы `virus`
--

CREATE TABLE IF NOT EXISTS `virus` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `sana` date NOT NULL,
  `tashhis` text NOT NULL,
  `HBsAq` text NOT NULL,
  `HCV` text NOT NULL,
  `HDVJqM` text NOT NULL,
  `HbeAq` text NOT NULL,
  `HAVJgM` text NOT NULL,
  `HEVJgM` text NOT NULL,
  `HBcorJgM` varchar(65) NOT NULL,
  `duhtur` text NOT NULL,
  `sid` int(18) NOT NULL,
  `kassa` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `virus`
--

INSERT INTO `virus` (`id`, `sana`, `tashhis`, `HBsAq`, `HCV`, `HDVJqM`, `HbeAq`, `HAVJgM`, `HEVJgM`, `HBcorJgM`, `duhtur`, `sid`, `kassa`) VALUES
(1, '2014-04-11', '&#1207;вла', 'дл&#1207;ов', 'ловра&#1207;', '&#1251;&#1207;виа', 'лрв&#1207;оа', '&#1207;ваи', 'б&#1251;тяч', '', 'Ку&#1179;уне', 16, '10'),
(2, '2014-04-05', 'jn', 'ldfojh', 'sdflkj', 'дпао', 'ювлао', 'длоф', '&#1207;в&#1207;ва', 'у&#1179;&#1207;в', 'жвдалва', 15, ''),
(4, '2014-04-11', 'двлпо', 'длчо', 'вдалор', 'вдлро', 'лваочс?', 'чс?итсй', 'вдлаокч', 'чс?мт', 'вабптва', 2, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
