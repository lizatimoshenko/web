-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 22 2016 г., 22:19
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `likewhat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_cat` int(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_cat`, `title`, `url_image`) VALUES
(2, 'Grammar', 'image/gram.svg'),
(3, 'Vocabulary ', 'image/voc.svg'),
(5, 'Pronunciation', 'image/pron.svg'),
(6, 'Idioms', 'image/idiom.svg'),
(7, 'Phrasal Verbs', 'image/phras.svg '),
(8, 'Everyday English', 'image/everyday.svg ');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `id_cat` int(8) NOT NULL,
  `content` text NOT NULL,
  `url_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `title`, `id_cat`, `content`, `url_image`) VALUES
(2, 'The Present Simple', 2, 'The present tense is the base form of the verb: I work in London.\nBut the third person (she/he/it) adds an -s: She works in London.\n\nUse\nWe use the present tense to talk about:\n\nsomething that is true in the present:\nI’m nineteen years old.\nHe lives in London.\nI’m a student.\n\nsomething that happens again and again in the present:\nI play football every weekend.\n\nWe use words like sometimes, often. always, and never (adverbs of frequency) with the present tense:\n\nI sometimes go to the cinema.\nShe never plays football.\n\nsomething that is always true:\nThe adult human body contains 206 bones.\nLight travels at almost 300,000 kilometres per second.\n\n  \n\nsomething that is fixed in the future.\nThe school term starts next week.\nThe train leaves at 1945 this evening.\nWe fly to Paris next week.\n\n ', 'image/bigben.jpg'),
(3, 'The Present Continuous', 2, 'The present continuous tense is formed from the present tense of the verb be and the present participle (-ing form) of a verb:\r\n\r\nUse\r\n\r\n1. We use the present continuous tense to talk about the present:\r\n\r\nfor something that is happening at the moment of speaking:\r\nI’m just leaving work. I’ll be home in an hour.\r\nPlease be quiet. The children are sleeping.\r\n\r\nfor something which is happening before and after a given time:\r\nAt eight o’clock we are usually having breakfast.\r\nWhen I get home the children are doing their homework.\r\n\r\n \r\n\r\nfor something which we think is temporary:\r\nMichael is at university. He’s studying history.\r\nI’m working in London for the next two weeks.\r\n\r\nfor something which is new and contrasts with a previous state:\r\nThese days most people are using email instead of writing letters.\r\nWhat sort of clothes are teenagers wearing nowadays? What sort of music are they listening to?\r\n\r\nto show that something is changing, growing or developing:\r\nThe children are growing quickly.\r\nThe climate is changing rapidly.\r\nYour English is improving.\r\n\r\nfor something which happens again and again:\r\nIt’s always raining in London.\r\nThey are always arguing.\r\nGeorge is great. He’s always laughing.\r\n\r\nNote: We normally use always with this use.\r\n\r\n2. We use the present continuous tense to talk about the future:\r\n\r\nfor something which has been arranged or planned:\r\nMary is going to a new school next term.\r\nWhat are you doing next week?\r\n\r\n3. We can use the present continuous to talk about the past:\r\n\r\nWhen we are telling a story: \r\nWhen we are summarising the story from a book, film or play etc.:', 'image/tower.jpg'),
(4, 'The Present Perfect', 2, 'The present perfect is formed from the present tense of the verb have and the past participle of a verb:\n\nThe present perfect continuous is formed with have/has been and the -ing form of the verb:\n\nUse\nWe use the present perfect tense:\n\nfor something that started in the past and continues in the present:\nThey’ve been married for nearly fifty years.\nShe has lived in Liverpool all her life.\n\nNote: We normally use the present perfect continuous for this:\n\nShe has been living in Liverpool all her life.\nIt’s been raining for hours.\n\n for something we have done several times in the past and continue to do:\nI’ve played the guitar ever since I was a teenager.\nHe has written three books and he is working on another one.\nI’ve been watching that programme every week.\n\nWe often use a clause with since to show when something started in the past:\n\nThey’ve been staying with us since last week.\nI have worked here since I left school.\nI’ve been watching that programme every week since it started.\n\nwhen we are talking about our experience up to the present:\n\nNote: We often use the adverb ever to talk about experience up to the present:\n\nMy last birthday was the worst day I have ever had.\n\nNote: and we use never for the negative form:\n\nHave you ever met George?\nYes, but I’ve never met his wife.\n\nfor something that happened in the past but is important at the time of speaking:\nI can’t get in the house. I’ve lost my keys.\nTeresa isn’t at home. I think she has gone shopping.\nI’m tired out. I’ve been working all day.\n\n \n\n We use the present perfect of be when someone has gone to a place and returned:\n\nA: Where have you been?\nB: I’ve just been out to the supermarket.\n\nA: Have you ever been to San Francisco?\nB: No, but I’ve been to Los Angeles.\n\nBut when someone has not returned we use have/has gone:\n\nA: Where is Maria? I haven’t seen her for weeks.\nB: She''s gone to Paris for a week. She’ll be back tomorrow.\n\nWe often use the present perfect with time adverbials which refer to the recent past:\n\njust; only just; recently;\n\nScientists have recently discovered a new breed of monkey.\nWe have just got back from our holidays.\n\nor adverbials which include the present:\n\never (in questions); so far; until now; up to now; yet (in questions and negatives)\n\nHave you ever seen a ghost?\nWhere have you been up to now?\nHave you finished your homework yet?\nNo, so far I’ve only done my history.\n\nWARNING:\n\nWe do not use the present perfect with an adverbial which refers to past time which is finished:\n\nI have seen that film yesterday.\nWe have just bought a new car last week.\nWhen we were children we have been to California.\n\nBut we can use it to refer to a time which is not yet finished:\n\nHave you seen Helen today?\nWe have bought a new car this week.\n\n   ', 'image/london.jpg'),
(31, 'Work in a Context', 3, 'Memory research tells us that building links between data helps us remember things and the way to make sense of that is to put the vocab into use. A classic memory technique would be to connect every word with a strong image (imagine the grumpy ticket clerk huffing and handing you). Alternatively, come up with a story that includes all your vocabulary.\nTried to get the partner involved with bilingual vocab stickies.\nTried to get the partner involved with bilingual vocab stickies.\n\nI also like to to work in blocks of different topics, for example you can focus on cookery for a few weeks. That way, the most common words will reoccur and you learn not only the word, but how to use it.\n\nAgain, immersion is key here and make sure you produce language in context. Write a full sentence using your new word. Update your Facebook in the target language. Use it 5 times in a conversation. Whatever it takes, just make sure you have satisfied both repetition and context.', 'image/city.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(8) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `group` int(8) NOT NULL,
  `date_creation` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `first_name`, `last_name`, `group`, `date_creation`) VALUES
(42, 'yyyyy', 'aaaa', 'yyyy', 'aaa', 0, '0000-00-00 00:00:00.000000'),
(87, 'liza', 'liza', 'liza', 'liza', 0, '0000-00-00 00:00:00.000000'),
(88, 'admin', 'admin', 'admin', 'admin', 1, '0000-00-00 00:00:00.000000'),
(90, 'qqqq', 'qqqq', 'qqqq', 'qqqq', 0, '0000-00-00 00:00:00.000000');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
