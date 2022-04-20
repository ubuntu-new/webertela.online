-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 02:03 PM
-- Server version: 5.6.42
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webertel_magritto`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `note` text NOT NULL,
  `date` datetime NOT NULL,
  `visible` enum('0','1') NOT NULL,
  `rigiti` int(2) NOT NULL,
  `lang_id` enum('en','ru','ge') NOT NULL,
  `romeli` enum('about','aim','contact','shesavalisityva') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `text`, `note`, `date`, `visible`, `rigiti`, `lang_id`, `romeli`) VALUES
(1, 'О компании', '<p><span class=\"Apple-style-span\" style=\"font-family: Arial; font-size: small;\">Компания Институт Консалтинга (Instcons) специализируется на создании инновационных решений для повышения эффективности деятельности компаний различных отраслей.</span></p>\n<p><span class=\"Apple-style-span\" style=\"font-family: Arial; font-size: small;\">Технологии и методики для оптимизации бизнес - процессов и работы с человеческим капиталом, разработанные компанией Instcons в 2008-2010 гг., на сегодняшний день являются одними из передовых не только в России, но и в Европе, и зачастую не имеют аналогов.</span></p>\n<p><span class=\"Apple-style-span\" style=\"font-family: Arial; font-size: small;\">С 2007 года основными направлениями нашей работы являются развитие подразделений продаж в организациях различных отраслей и консультирование топ-менеджмента.</span></p>\n<p><span class=\"Apple-style-span\" style=\"font-family: Arial; font-size: small;\">Мы видим, как развивать организацию для её качественного роста на рынке. Наш опыт показал, что предлагаемые нововведения в рамках обучающих программ зачастую не принимаются или используются сотрудниками не в полной мере. Объективный процесс недоверия к новому и нежелание менять устоявшиеся привычки в работе сотен организаций стали плодотворной почвой для создания наших решений. Одной из наших главных задач стало добиться высокой результативности каждого сотрудника и его успешной адаптации к возможным нововведениям, таким как реорганизация структуры компании, внедрение CRM, смена руководства и ряда других. Мы хотим через наши технологии показать все преимущества реформ и убедить сотрудников и топ-менеджмент, насколько сильно им могут помочь их собственные ресурсы.</span></p>', 'Компания Instcons специализируется на создании инновационных решений для повышения эффективности компаний различных отраслей.', '2015-06-18 00:00:00', '1', 1, 'ru', 'about'),
(10, 'Цели', '<p style=\"margin: 0px 0px 13px; text-align: justify; line-height: normal; font-style: normal; font-variant: normal; font-weight: normal; font-size: 16px; font-family: Calibri; \"><span style=\"letter-spacing: 0px; \"><font class=\"Apple-style-span\" size=\"2\" face=\"Arial\">Мы видим глобальный потенциал России в умении людей мыслить свободно и инновационно при решении задач и в создании подходов к комплексным ситуациям. \n      <br>\n     Эту ценную идею&nbsp; мы сделали основой всей нашей работы.</font></span></p>\n \n<p style=\"margin: 0px 0px 13px; text-align: justify; line-height: normal; font-style: normal; font-variant: normal; font-weight: normal; font-size: 16px; font-family: Calibri; \"><span style=\"letter-spacing: 0px; \"><font class=\"Apple-style-span\" size=\"2\" face=\"Arial\">Instcons помогает &nbsp;российскому менеджменту перевести их проекты и идеи в стадию реализации. И сделать этот процесс максимально системным и &nbsp;эффективным.</font></span></p>\n \n<p style=\"margin: 0px 0px 13px; text-align: justify; line-height: normal; font-style: normal; font-variant: normal; font-weight: normal; font-size: 16px; font-family: Calibri; \"><span style=\"letter-spacing: 0px; \"><font class=\"Apple-style-span\" size=\"2\" face=\"Arial\">Для этого компания разрабатывает консалтинговые продукты, технологии и методики для компании различных отраслей. Таковыми являются&nbsp;<a href=\"http://rbproekt.ru/products/otop_programma_razvitiya_prodazh/\">ОТОП – Sales Resources</a>&nbsp;и&nbsp;<a href=\"http://rbproekt.ru/products/programma_sofs_control/\">SOFS – Top Management’s Resources</a>, которые уже зарекомендовали себя в практическом применении.</font></span></p>', 'Своей работой мы стремимся созидать и помогать совершенствовать процессы, людей и их достижения.', '0000-00-00 00:00:00', '1', 0, 'ru', 'aim'),
(11, 'Ценности', '<p>Своей работой мы стремимся созидать и помогать совершенствовать процессы, людей и их достижения. Мы разрабатываем инструменты управления, ориентированные в первую очередь на развитие людей, их возможностей. </p>\n<p>\nПо словам партнеров и клиентов Instcons применяет \"человечные\" подходы в консультировании, учитывая индивидуальные особенности каждого.\n</p>\n<p>\nПостроение качественных взаимоотношений внутри и вне коллективов,  повышение лояльности, ценности компании и её услуг для сотрудников и клиентов - наши приоритетные задачи. \n</p>\n<p>\nInstcons создает для клиентов решения, способные принести не только фактическую прибыль, но и реализовать цели сплочения организации, повышения мотивации сотрудников, их вовлеченность.\n</p>', '', '0000-00-00 00:00:00', '1', 0, 'ru', 'aim'),
(12, 'Контактная информация', '<p>Общество с ограниченной ответственностью «Институт Консалтинга»</p>\n \n<p>e-mail: <a>info@instcons.com</a></p>\n \n<p>&nbsp;</p>\n <hr> \n<p>&nbsp;</p>\n \n<table style=\"border-collapse: collapse;\"> \n  <tbody> \n    <tr class=\"even\"> <th>Офис&nbsp;</th> <th>Контактные данные:</th> </tr>\n   \n    <tr class=\"odd\"> <td>Эстония &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td><td> \n        <br>\n       E-mail: tallinn@instcons.com</td> </tr>\n   \n    <tr class=\"even\"><td colspan=\"1\">Россия</td><td colspan=\"1\"> \n        <br>\n       E-mail: info@instcons.com &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td></tr>\n   \n    <tr class=\"odd\"><td colspan=\"1\">Грузия</td><td colspan=\"1\"> \n        <br>\n       E-mail: geo@instcons.com&nbsp;</td></tr>\n   </tbody>\n </table>\n \n<p>&nbsp;</p>\n <hr> ', '', '0000-00-00 00:00:00', '1', 0, 'ru', 'contact'),
(13, 'ჩვენ შესახებ', '<p>კომპანია ინსტკონსის გუნდი მიმართულია ინოვაციური გადაწყვეტილებების შექმნაზე ორგანიზაციების ეფექტიანობის ამაღლების მიზნით.</p>\n<p>კონსალტინგური კომპანია &ldquo;ინსტკონსი- Institute of Consulting&rdquo; დაარსდა 2007 წელს რუსეთში. ინსტკონსის გუნდი მიმართულია ინოვაციური გადაწყვეტილებების შექმნაზე ორგანიზაციების ეფექტიანობის ამაღლების მიზნით. ჩვენი მისიაა - ბიზნეს გარემოს ინოვაცია და გაუმჯობესება ადამიანური რესურსებისა და პერსონალის პროფესიული განვითარების მეშვეობით.</p>\n<p>კომპანიამ საქართველოში ფუნქციონირება დაიწყო 2013 წლის ბოლოს და მას შემდეგ სათაო ოფისი მდებარეობს ქ.თბილისში.&nbsp; შემუშავებული ტექნოლოგიების გამოყენება და გავრცელება ხდება მხოლოდ საქართველოდან.</p>\n<p>&nbsp;</p>\n<p>საქმიანობის მიმართულებები და პროდუქტები:</p>\n<p>&nbsp;</p>\n<ul>\n<li>დიაგნოსტიკა - სისტემა ორგანიზაციის შეფასებისა და &bdquo;სუსტი&ldquo; ადგილების გამოსავლენად;</li>\n<li>SOFS (Systematization of Solutions) - მენეჯმენტის მუშაობის განვითარების პროგრამა;</li>\n<li>ადამიანური რესურსების ანალიზი და განვითარება;</li>\n<li>პერსონალის არამატერიალური მოტივაციის კომპონენტები;</li>\n<li>შვედური პროგრამა ხელმძღვანელებისათვის;</li>\n<li>პროგრამა გაყიდვების განყოფილებისათვის;</li>\n<li>Jobsstaff - ვაკანსიები და კარიერა; ახალი კადრების მოძიების და შერჩევის ინოვაციური პლატფორმა.</li>\n<li>Worktask - უნიკალური ინოვაციური პლატფორმა ადამიანური რესურსების მართვისათვის.</li>\n</ul>\n<p>&nbsp;</p>\n<p>ჩვენი კლიენტების სიაში შედიან: ფინანსური ინსტიტუტები, ინოვაციური კომპანიები, სამთავრობო ორგანოები, საგანმანათლებლო ინსტიტუტები, სავაჭრო და მომსახურე ორგანიზაციები, სამეწარმეო კომპანიები.</p>\n<p>Instcons - ტექნოლოგიები ადამიანებისათვის და ადამიანების შესახებ</p>', 'კომპანია ინსტკონსი გუნდი მიმართულია ინოვაციური გადაწყვეტილებების შექმნაზე ორგანიზაციების ეფექტიანობის ამაღლების მიზნით.', '0000-00-00 00:00:00', '1', 0, 'ge', 'about'),
(14, 'About us', '<p>Company Instcons is focused on creation of innovation solutions to&nbsp; enhance the effectiveness of organizations.</p>\r\n<p>Consulting Company &ldquo;Instcons&rdquo; &ndash; Institute of Consulting was founded in Moscow in 2007. The Instcons team is focused on creation innovation solutions to enhance the effectiveness of organizations. Our mission &ndash; innovation and development business environment by improvement the Human Resources Management and staff professional development.</p>\r\n<p>Directions and products</p>\r\n<ul>\r\n<li>Diagnostics &ndash; System of organizations assessment and detection of &ldquo;weak&rdquo; areas;</li>\r\n<li>SOFS (Systematization of Solutions) &ndash; The programs of improvement of Management performance;</li>\r\n<li>Analysis and development of Human Resources;</li>\r\n<li>Swedish Program for Directors;</li>\r\n<li>Program for Sales Divisions;</li>\r\n<li>Jobsstaff &ndash; Vacancy and Career; Innovation Recruitment Platform;</li>\r\n<li>Worktask - Unique and innovative platform for<br /> Human Resources management</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Our clients are: financial institutions, innovative companies, government agencies, educational institutions, trade and service organizations, producing companies.</p>\r\n<p>Instcons &ndash; Technology for people and about people</p>', 'Company Instcons is focused on creation of innovation solutions to&nbsp; enhance the effectiveness of organizations', '0000-00-00 00:00:00', '1', 0, 'en', 'about'),
(15, 'ფასეულობები', '<p>ჩვენი მუშაობით ჩვენ ვცდილობთ შევქმნათ და დავეხმაროთ დავხვეწოთ პროცესები, ადამიანები, &nbsp;და მათი მიღწევები. ჩვენ ვავითარებთ მართვის ინსტრუმენტებს, რომლებიც ორიენტირებულია პირველ რიგში ადამიანების განვითარებაზე და მათ შესაძლებლობებზე.</p>\n<p>პარტნიორებისა და კლიენტების თქმით Instcons იყენებს &bdquo;ადამიანურ&ldquo; მიდგომას კონსულტირებისას, თითოეულის ინდივიდუალური მახასიათებლების გათვალისწინებით.</p>\n<p>ხარისხიანი ურთიერთობების აგება კოლექტივში და მის გარეთ, ლოიალობის ამაღლება, კომპანიის და მისი მომსახურეობის ფასეულობები თანამშრომლებისა და კლიენტებისთვის - ჩვენი პრიორიტეტული ამოცანებია.</p>\n<p>Instcons-ი იღებს გადაწყვეტილებებს კლიენეტებისთვის, რომლებსაც შეუძლიათ არა მარტო რეალური მოგების მოტანა, არამედ მიზნების რეალიზება ორგანიზაციის გაერთიანებითვის, თანამშრომელთა მოტივაციის ამაღლება და მათი ჩართულობა.</p>', 'ჩვენი მუშაობით ჩვენ ვცდილობთ შევქმნათ და დავეხმაროთ დავხვეწოთ პროცესები, ადამიანები, &nbsp;და მათი მიღწევები. ჩვენ ვავითარებთ მართვის ინსტრუმენტებს, რომლებიც ორიენტირებულია პირველ რიგში ადამიანების განვითარებაზე და მათ შესაძლებლობებზე.', '0000-00-00 00:00:00', '1', 0, 'ge', 'aim'),
(16, 'Values', '<p>With our work we strive to create and help to improve the processes, people and their achievements. We are developing the management tools, focused primarily on the development of people and their capabilities.</p>\r\n<p>In the words of partners and clients Instcons uses \"humane\" approach to counseling, taking into account the individual characteristics of each.</p>\r\n<p>Building quality relationships within and outside teams, increasing loyalty, values of the company and its services to employees and customers &ndash; are our priority objectives.</p>\r\n<p>Instcons creates solutions for customers that can bring not only the actual income, but also to realize the goal of uniting the organization, increase employee motivation, their engagement.</p>', 'With our work we strive to create and help to improve the processes, people and their achievements. We are developing the management tools, focused primarily on the development of people and their capabilities.', '0000-00-00 00:00:00', '1', 0, 'en', 'aim'),
(17, 'მიზნები', '<p>ჩვენ ვხედავთ ადამიანების თავისუფლად ფიქრის საშუალებას, ინოვაციურობას პრობლემების გადაჭრასა და რთულ სიტუაციებში მიდგომების შექმნის მსოფლიოს გლობალურ პოტენციალს. ეს ფასეული იდეა ჩვენ ვაქციეთ ჩვენი სამუშაოს ბაზისად.</p>\n<p>Instcons ეხმარება მენეჯმენტს მათი პროექტებისა და იდეების რეალიზაციის ეტაპზე გადაყვანაში. ეს პროცესი ხორციელდება მაქსიმალურად სისტემურად და ეფექტიანად.</p>\n<p>ამისათვის, კომპანია სხვადასხვა სფეროს ორგანიზაციისათვის ავითარებს კონსალტინგურ პროდუქტებს, ტექნოლოგიებსა და მეთოდიკას. ასეთებია OTOP - გაყიდვების რესურსები და SOFS - ტოპ-მენეჯმენტის რესურსები, რომლებმაც უკვე დაიმკვიდრებს საკუთარი თავი პრაქტიკაში.</p>', '', '0000-00-00 00:00:00', '1', 0, 'ge', 'aim'),
(18, 'Purposes', '<p>We see the global potential of the world in the ability of people to think freely and innovative in solving problems and creating approaches to complex situations. We made this valuable idea a basis of all our work.</p>\n<p>Instcons helps management to transfer their projects and ideas to the stage of implementation. And to make this process at most systematic and effective.</p>\n<p>To do this, the company is developing consulting products, technologies and methodologies for companies in various industries. These are OTOP - Sales Resources and SOFS - Top Management\'s Resources, which have already proven themselves in practical application.</p>', '', '0000-00-00 00:00:00', '1', 0, 'en', 'aim'),
(19, 'საკონტაქტო ინფორმაცია', '<p>შეზღუდული პასუხისმგებლობის საწარმო \"კონსალტინგის ინსტიტუტი\"</p>\n\n<p>ელ. ფოსტა: <a>info@instcons.com</a></p>\n\n<p>&nbsp;</p>\n<hr> \n<p>&nbsp;</p>\n\n<table style=\"border-collapse: collapse;\"> \n<tbody> \n<tr class=\"even\"> <th>ოფისი&nbsp;</th> <th>საკონტაქტო ინფორმაცია:</th> </tr>\n\n<tr class=\"odd\"> <td>ესტონეთი&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td><td> \n<br>\nელ. ფოსტა: tallinn@instcons.com</td> </tr>\n\n<tr class=\"even\"><td colspan=\"1\">რუსეთი</td><td colspan=\"1\"> \n<br>\nელ. ფოსტა: info@instcons.com &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td></tr>\n\n<tr class=\"odd\"><td colspan=\"1\">საქართველო</td><td colspan=\"1\"> \n<br>\nელ. ფოსტა: geo@instcons.com&nbsp;</td></tr>\n</tbody>\n</table>\n\n<p>&nbsp;</p>\n<hr>', '', '0000-00-00 00:00:00', '1', 0, 'ge', 'contact'),
(20, 'Contact', '<p>Limited Liability Company \"Institute Consulting\"</p>\n<p>E-mail: <a>info@instcons.com</a></p>\n\n<p>&nbsp;</p>\n<hr> \n<p>&nbsp;</p>\n\n<table style=\"border-collapse: collapse;\"> \n<tbody> \n<tr class=\"even\"> <th>Офис&nbsp;</th> <th>Contact details:</th> </tr>\n\n<tr class=\"odd\"> <td> Estonia &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td><td> \n<br>\nE-mail: tallinn@instcons.com</td> </tr>\n\n<tr class=\"even\"><td colspan=\"1\">Russia</td><td colspan=\"1\"> \n<br>\nE-mail: info@instcons.com &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td></tr>\n\n<tr class=\"odd\"><td colspan=\"1\">Georgia</td><td colspan=\"1\"> \n<br>\nE-mail: geo@instcons.com&nbsp;</td></tr>\n</tbody>\n</table>\n\n<p>&nbsp;</p>\n<hr>', '', '0000-00-00 00:00:00', '1', 0, 'en', 'contact'),
(21, '', 'Через наши технологии мы хотим показать все преимущества реформ и убедить топ-менеджмент и сотрудников в том, насколько сильно им могут помочь их собственные ресурсы.\n                          Вахтанг Гвазава ', '', '0000-00-00 00:00:00', '1', 0, 'ru', 'shesavalisityva');

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `id` int(11) NOT NULL,
  `romeli` enum('vegetables','tea','fruits','all') NOT NULL DEFAULT 'all',
  `image` varchar(255) NOT NULL,
  `visible` enum('0','1','2') NOT NULL DEFAULT '1',
  `comment` varchar(255) NOT NULL,
  `rigiti` int(2) NOT NULL,
  `preparation` varchar(255) NOT NULL DEFAULT 'blackplumprep',
  `name_ge` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `name_ru` varchar(150) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `text_ge` text NOT NULL,
  `text_en` text NOT NULL,
  `text_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `romeli`, `image`, `visible`, `comment`, `rigiti`, `preparation`, `name_ge`, `name_en`, `name_ru`, `title_ge`, `title_en`, `title_ru`, `text_ge`, `text_en`, `text_ru`) VALUES
(1, 'all', 'abo_1.jpg', '1', '', 1, '', 'ჩვენს შესახებ', 'ABOUT US', '', '', '', '', '<p>\r\nMagritto is a Georgian – German joint venture established to make high-quality dried fruits and vegetables, since its start of operations in autumn 2017.\r\n</p>\r\n<p>\r\nMagritto is focused on producing of ecologgically pure and not contain harmful substances and supplements. Magritto – is Georgian-German company producing - dried products and it was founded in 2016. \r\n</p>\r\n<p>\r\nMagritto factory is financed under the United Agro Project of the Ministry of  Agriculture and by the funds invested by the German and Georgian founders.\r\n</p>\r\n<p>\r\nThe company processes in accordance with the highest international standards regarding quality and traceability (company is ISO certified by TÜV SÜD Management Service GmbH for its Food Safety System Certification (FSSC) 22000). Permanent controls and complete origin-tracking system are part of the quality philosophy for both BIO-certified and conventional products.\r\n</p>\r\n', '<p>\r\nMagritto is a Georgian – German joint venture established to make high-quality dried fruits and vegetables, since its start of operations in autumn 2017.\r\n</p>\r\n<p>\r\nMagritto is focused on producing of ecologgically pure and not contain harmful substances and supplements. Magritto – is Georgian-German company producing - dried products and it was founded in 2016. \r\n</p>\r\n<p>\r\nMagritto factory is financed under the United Agro Project of the Ministry of  Agriculture and by the funds invested by the German and Georgian founders.\r\n</p>\r\n<p>\r\nThe company processes in accordance with the highest international standards regarding quality and traceability (company is ISO certified by TÜV SÜD Management Service GmbH for its Food Safety System Certification (FSSC) 22000). Permanent controls and complete origin-tracking system are part of the quality philosophy for both BIO-certified and conventional products.\r\n</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `adminstrators`
--

CREATE TABLE `adminstrators` (
  `id` int(1) NOT NULL,
  `adminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminSalt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1','2','3','4','13') COLLATE utf8_unicode_ci NOT NULL COMMENT '3- rus, 4-eng, 13 -global',
  `fullName` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminstrators`
--

INSERT INTO `adminstrators` (`id`, `adminName`, `adminPass`, `adminSalt`, `status`, `fullName`) VALUES
(0, 'admin', 'd0c85a29d3135cea6e928631e66b59c9fed174eefc43abd89afaaa46e9c8e79e406ef8e2bbb1366a43b3f0915f77d7f96ebdd3d8c0a6ee141a17b7b4493c29bd', 'c0mets@nt', '13', 'Glob Admin'),
(2, 'adminuser', 'ae8e74d83f96908252fa9ed30fdb6ee620339fc697b93288c89ed424fd8432aeed16a7766cd92d536236672332d64feae26c16f5c99e7555166fda84cea41f23', 'c0mets@nt', '13', 'მთავარი ადმინი'),
(12, 'salome', 'd3c9f678d97b36964df71ccf04c072a7647aa978f874d5babe835249185c03fddab4dee24c8be303eb34d285498cbb3cf8db84a60da8ace85e3d14ea18f6a569', 'c0mets@nt', '13', 'სალომე სოსელია'),
(13, 'nino', 'd79f52352ff4c155a2e1c3db25bbba8f5e95a322385254cb56b977ec8ce7223243151813c443a811439a41ea66fc507b4c5912c241d84df6a27dafbc01a1a59e', 'c0mets@nt', '13', 'ნინო ხიდეშელი'),
(15, 'sopho', 'a0e01cf0abd49efa3261347876196d0783700434bbcff7f4fbd059203170cc8f4b885b819d962f63c4cd2d6700fbd9824504d468f1c4f850d488639f8800cbf9', 'c0mets@nt', '2', 'სოფო ქსოვრელი'),
(17, 'tengo', 'feaffc1e7580cd287a653c811b480ff7146ae9736878363a7e2ec826ca22b3c6a74845ed9af6f3bc360ac9950bd8bd69b1ea5f9eb284afb9f5c74390483d6adc', 'c0mets@nt', '3', 'თენგო'),
(18, 'ira', 'feaffc1e7580cd287a653c811b480ff7146ae9736878363a7e2ec826ca22b3c6a74845ed9af6f3bc360ac9950bd8bd69b1ea5f9eb284afb9f5c74390483d6adc', 'c0mets@nt', '4', 'ირა'),
(25, 'elza', '2095ed417bbe3d07ba6016f2b26764c90ea68dce56675e8f7ae03321444fd19b6805ed8dd4494848fb7945165e9bfd316150183b97b73d8b43cb4bbcefe90b7a', 'c0mets@nt', '13', 'ელზა წიკლაური'),
(27, 'lika', 'f8d066af2293827f6482af721493c4c9921801405dd60e4bfa9c72abf3acb1139d96da50d8cf4e2c48a7887997c1d0451d034ea9be1fa31ea28ef09f66834f8c', 'c0mets@nt', '2', 'ლიკა გურაბანიძე'),
(28, 'nana', 'feaffc1e7580cd287a653c811b480ff7146ae9736878363a7e2ec826ca22b3c6a74845ed9af6f3bc360ac9950bd8bd69b1ea5f9eb284afb9f5c74390483d6adc', 'c0mets@nt', '13', 'ნანა არჩვაძე'),
(29, 'theona', 'ba9adada91c786e6066e17634250948dc02994a24d9497afd5db0175c6fc4fc352b8f64f1059330706a64e29270a946d74d65f96569647e4db45e0260a67f5b0', 'c0mets@nt', '2', 'თეონა კენჭიაშვილი');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `romeli` enum('vegetables','tea','fruits') NOT NULL,
  `image` varchar(255) NOT NULL,
  `visible` enum('0','1','2') NOT NULL DEFAULT '1',
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `name`, `title`, `text`, `romeli`, `image`, `visible`, `comment`) VALUES
(33, '', '', '', 'vegetables', '20190822113821.jpg', '1', ''),
(34, '', '', '', 'vegetables', '20190822113904.jpg', '1', ''),
(35, '', '', '', 'vegetables', '20190822113925.jpg', '1', ''),
(36, '', '', '', 'vegetables', '20190822113949.jpg', '1', ''),
(37, '', '', '', 'vegetables', '20190822114019.jpg', '1', ''),
(38, '', '', '', 'vegetables', '20190822114101.jpg', '1', ''),
(39, '', '', '', 'vegetables', '20190822114125.jpg', '1', ''),
(40, '', '', '', 'vegetables', '20190822114334.jpg', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `max_news`
--

CREATE TABLE `max_news` (
  `id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL DEFAULT '0',
  `mid` text NOT NULL,
  `cid` text NOT NULL,
  `lang_id` varchar(3) DEFAULT NULL,
  `title` text,
  `intro` text,
  `img` varchar(255) DEFAULT NULL,
  `show_img` int(1) NOT NULL DEFAULT '0',
  `img_large` varchar(255) DEFAULT NULL,
  `text` text,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `show_date` int(1) NOT NULL DEFAULT '1',
  `publish` int(1) NOT NULL DEFAULT '1',
  `creator` int(10) NOT NULL DEFAULT '0',
  `author` varchar(255) NOT NULL,
  `show_in_main` int(1) NOT NULL DEFAULT '0',
  `sponsored_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `print` int(1) NOT NULL DEFAULT '0',
  `seen` int(11) NOT NULL,
  `main_news` int(11) NOT NULL,
  `date_main` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `url` text NOT NULL,
  `visible` enum('0','1','2','3','4') NOT NULL DEFAULT '1' COMMENT '0 -del; 1-visible; 2- moderate; 3- scheduler; 4- ukve moderirebuli',
  `top_news` enum('0','1','2') NOT NULL DEFAULT '0',
  `adv` enum('0','1','2') NOT NULL DEFAULT '0',
  `admin` int(2) NOT NULL,
  `img_small` varchar(255) NOT NULL,
  `is_moderate` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ge` varchar(255) NOT NULL,
  `link_id` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `visible` enum('0','1','2','3') NOT NULL DEFAULT '1',
  `ankor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name_en`, `name_ge`, `link_id`, `position`, `visible`, `ankor`) VALUES
(1, 'Home', 'მთავარი', '', 1, '1', 'home'),
(2, 'News', 'სიახლეები', '', 4, '1', 'news'),
(10, 'About Us', 'ჩვენს შესახებ', '', 2, '1', 'about'),
(11, 'Our products', 'ჩვენი პროდუქცია', '', 3, '1', 'products'),
(12, 'Gallery', 'გალერეა', '', 12, '1', 'gallery'),
(13, 'Contact Us', 'დაგვიკავშირდით', '', 13, '1', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `romeli` enum('PORRIDGE','DRYMILK','COOKIES','all') NOT NULL DEFAULT 'all',
  `image` varchar(255) NOT NULL,
  `visible` enum('0','1','2') NOT NULL DEFAULT '1',
  `comment` varchar(255) NOT NULL,
  `rigiti` int(2) NOT NULL,
  `preparation` varchar(255) NOT NULL DEFAULT 'blackplumprep',
  `name_ge` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `name_ru` varchar(150) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `text_ge` text NOT NULL,
  `text_en` text NOT NULL,
  `text_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `title`, `text`, `romeli`, `image`, `visible`, `comment`, `rigiti`, `preparation`, `name_ge`, `name_en`, `name_ru`, `title_ge`, `title_en`, `title_ru`, `text_ge`, `text_en`, `text_ru`) VALUES
(1, '', '', '', 'PORRIDGE', '20190817200902.jpg', '1', '', 1, 'blackplumprep', 'ვაშლის კრეკერი', 'Apple Crackers', '', '', '', 'შავი ქლიავის ჩირი', '', '', ''),
(35, '', '', '', 'PORRIDGE', '20190817203128.jpg', '1', '', 0, 'blackplumprep', 'ვაშლის ჩირის რგოლები', 'Apple Dried Rings', '', '', '', '', '', '', ''),
(36, '', '', '', 'PORRIDGE', '20180829153528.jpg', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა შვრია. ', 'Baia Oat Porridge ', '', '<p>Weight: 350 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '<p>Weight: 350 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '', '<p>შეიცავს ჯანმრთელობისთვის სასარგებლო ნივთიერებებს. მასში არის ადამიანის ორგანიზმისთვის შეუცვლელი ამინომჟავეები, В ჯგუფის, Е და А ვიტამინები. მისი ამინომჟავური შემადგენლობა ყველაზე ახლოსაა ადამიანის კუნთის ცილებთან, რის გამოც ითვლება განსაკუთრებულ დიეტურ კვებით პროდუქტად. ის გამოირჩევა სახამებლის დაბალი, ცხიმების და მცენარეული კვებითი ბოჭკოების (უჯრედისის) მაღალი შემცველობით. შვრიის ფქვილის ფაფები ორჯერ მეტ მცენარეულ ცხიმებს შეიცავს, ვიდრე წიწიბურა, რომ არაფერი ვთქვათ ვიტამინებსა და მინერალურ ნივთიერებებზე. განსაკუთრებით აღსანიშნავია შვრიის დამუშავების პროდუქტი ე.წ. &rdquo;გერკულესი&rdquo;. ის განსაკუთრებით ცნობილია, როგორც დამატებითი საკვები ადრეულ ასაკში და დიეტური დანიშნულებით - კუჭნაწლავის და ღვიძლის დაავადებების პროფილაქტიკისათვის.</p>', '<p>Made from 100% whole oats, a bowl of Baia Buckwheat Porridge is a nutritional powerhouse. It provides an excellent supply of protein and dietary fiber, is high in multiple B vitamins as well as magnesium and zinc and is rich in amino acids. This undeniably healthful porridge is also low in sugar and starch, supports weight loss, and decreases the risk of heart attack. With all of its nutritional benefits, and its ability to diminish hunger, Baia Oat Porridge is a great way to keep everyone in your family well fueled throughout the day.</p>\n<p>&nbsp;</p>', ''),
(37, '', '', '', 'PORRIDGE', '20180829152432.jpg', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა სიმინდი', 'Baia Corn Porridge ', '', '<p>Weight: 500 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '<p>Weight: 500 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '', '<p>სიმინდის ფქვილის ფაფები მდიდარია სახამებლით მასში ცოტაა ფოსფორი და კალიუმი, მაგრამ საკმარისადაა რკინა და РР ვიტამინი. შეიცავს ვიტამინებს BВ1, BВ2 და BВ6-ს. მიეკუთვნება დაბალალერგიული ფაფების კატეგორიას, ამიტომ გამოიყენება ნარევებში დიეტურ და ბავშვთა კვებისათვის. ის უფრო მეტხანს უნდა ვხარშოთ და მას ორგანიზმი ადვილად ინელებს, ამის გამო რეკომენდებულია კუჭნაწლავის დაავადების დროს.</p>', '<p>Baia Corn Porridge is a hot and delicious meal that can be enjoyed by the entire family. Whether it is served for breakfast, lunch or dinner, it is naturally low in calories, cholesterol, salt and sugar and is completely gluten-free. It is also rich in complex carbohydrates, contributes to weight loss, and an excellent source of protein and dietary fiber. With fat content lower than oatmeal, it can be used to add variety to an already healthy diet. Baia Corn Porridge belongs in the category of low-allergenic porridges, making it ideal for younger children.</p>', ''),
(38, '', '', '', 'PORRIDGE', '20180829160312.jpg', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა 5 მარცვალი', 'Baia 5-Grain Porridge ', '', '<p>Weight: 500 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '<p>Weight: 500 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '', '<p>წარმოადგენს ხუთი სხვადასხვა მარცვლეულის: წიწიბურის, ბრინჯის, შვრიის, სიმინდის და ქერის - ფქვილის ნაზავს, ამიტომ ძალიან ყუათიანია. მასში კომპლექსურადაა თავმოყრილი თითოეული მარცვლისთვის&nbsp; დამახასიათებელი დადებითი თვისებები, რაც ესოდენ აუცილებელია ორგანიზმის ბალანსირებული კვებისთვის, რის შედეგადაც, ის ხდება განსაკუთრებით სასარგებლო და მოთხოვნადი პროდუქტი. ფაფის მონელება გარკვეული დროის განმავლობაში გრძელდება და ამ პერიოდში, იგი წარმოადგენს ორგანიზმისთვის საჭირო ენერგიის წყაროს. გარდა ამისა ის ამსუბუქებს საჭმლის მონელებას, ასუფთავებს ნაწლავებს &bdquo;შლაკებისგან&ldquo;, არის მსუბუქი ანტიოქსიდანტი, შეიცავს ბეტა-გლუკანს - ნატურალურ ხსნად ბოჭკოს (უჯრედისს), რომელიც ხელს უწყობს სისხლში ქოლესტერინის ნორმაში შენარჩუნებას და&nbsp; ზრდის იმუნიტეტს.&nbsp;</p>', '<p>Baia 5-Grain Porridge gives you the best of everything - a nutritious blend of buckwheat, rice, oats, corn and barley. Made from 100% whole grains, this naturally delicious blend of nutritional grains is power packed with vitamins and minerals, low in calories, salt and sugar, and rich with dietary fiber. One hot and hearty bowl of Baia 5-Grain Porridge and you&rsquo;re off to a great start.</p>', ''),
(39, '', '', '', 'PORRIDGE', '20180829160227yyy.jpg', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა, მანანის ბურღული', 'Baia Semolina Groats Porridge', '', '<p>Weight: 500 gm per box<br />Case Pack: 16 boxes per case<br />Shelf life: 10 months</p>', '<p>Weight: 500 gm per box<br />Case Pack: 16 boxes per case<br />Shelf life: 10 months</p>', '', '<p>მიიღება, ხორბლის მარცვლის გულისაგან. ის შეიცავს 70% სახამებელს, მიკროელემენტებს: კალიუმს, ნატრიუმს მაგნიუმს, კალციუმს, რკინას, ვიტამინებს - Е და В1. მანანის ბურღული ხასიათდება მაღალი კალორიულობით და კვებითი ღირებულებით, მას ადვილად ინელებს ორგანიზმი, ამიტომ რეკომენდირებულია კუჭნაწლავის დაავადებების დროს და ოპერაციის შემდგომ პერიოდში. მანანის ბურღული სწრაფად მზადდება, ამიტომ ინარჩუნებს ყველა სასარგებლო ნივთიერებებს მომზადების პროცესში. მანანის ბურღულს ურჩევენ მათ, ვისაც აწუხებს კუჭნაწლავის დაავადებები, რადგანაც ის ხასიათდება კუჭის შემომგარსველი მოქმედებით, რაც უზრუნველყოფს გასტრიტული და წყლულოვანი ტკივილისა და სპაზმების მოხსნას. მანანის ფაფის გამოყენების რეკომენდაციას აძლევენ ხანდაზმული ასაკის ადამიანებს, ძვალსახსროვანი სისტემის, კბილების და კუნთების მდგომარეობის გასაუმჯობესებლად. ასევე ურჩევენ ფაფის მოხმარებას, თირკმლის ქრონიკული უკმარისობით დაავადებულებსაც.</p>', '<p>Baia Semolina Groats Porridge is made from locally sourced, whole grain wheat. It is exceptionally high in vitamins, iron, calcium and other essential nutrients, has absolutely no fats, cholesterol or salt, and contributes significantly to healthy bones, heart and kidneys. With a low glycemic index, it is perfect for individuals with diabetes and assists with weight loss. High in carbohydrates, Baia Semolina Groats Porridge provides all the restorative energy you&rsquo;ll need to get your day off to a great start.</p>', ''),
(40, '', '', '', 'PORRIDGE', '', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა, ღომის (ფეტვის) ფქვილი და ღერღილი', 'Baia Millet Porridge ', '', '', '', '', '<p>საქართველოში გავრცელებული უძველესი კულტურის - &bdquo;კავკასიური პროსოს&ldquo;, ერთ-ერთი ნაირსახეობაა. ღომის ფქვილი ცხიმების, ცილების, ნახშირწყლების და უჯრედისის მაღალი შემცველობით ხასიათდება, შეიცავს მინერალურ ნივთიერებებს: კალიუმს, ნატრიუმს, კალციუმს, მაგნიუმს, ფოსფორს, რკინას და ვიტამინებს: А, В1, В2, РР. არ შეიცავს გლუტენს. ფოლის მჟავა მასში ორჯერ მეტია ვიდრე ხორბალსა და სიმინდში. ძველთაგანვე თვლიდნენ, რომ ღომის მარცვლის პროდუქტების მიღება გვმატებს ძალას, გვიჯანსაღებს ღვიძლს, წინააღმდეგობას უწევს ცხიმების დაგროვებას და ხელს უწყობს ჭრილობის შეხორცებას, ძვლების შეზრდას. მას შეუძლია გამოიტანოს ორგანიზმიდან ანტიბიოტიკების ნარჩენები და მათი დაშლის პროდუქტები. ის ითვლება ერთ-ერთ ყველაზე ნაკლებად ალერგენულ და იოლად მონელებად პროდუქტად, ამიტომ მიეკუთნება დიაბეტურ, დიეტურ და ბავშვთა ჯანსაღი კვების პროდუქტებს. ღომის მარცვლის ფქვილი და ღერღილი ერთ ყუთშია ცალ-ცალკე პაკეტებით მოთავსებული, იმ თანაფარდობით, რომელიც საჭიროა ტრადიციული წესით ღომის განსაზღვრული რაოდენობის ულუფების მოსამზადებლად. ამასთანავე, თითოეული კომპონენტი ცალ-ცალკე შეიძლება გამოვიყენოთ, ფაფების ან სხვა კერძების მოსამზადებლად.</p>', '<p>Baia Millet Porridge (Ghomi) is a traditional Georgian recipe that combines both finely milled and coarsely ground Proso millet. Each has been pre-measured and carefully sealed in individual packets, preserving freshness and ensuring perfect results in the kitchen.</p>\n<p>This health-giving porridge is perfect for every member of the family, providing a delicious source of protein for muscle strength, carbohydrates for increased energy, calcium for stronger bones, dietary fiber for efficient digestion, as well as significant amounts of antioxidants, iron, vitamin B6, and magnesium. It is 100% gluten free, making it ideal for individuals coping with Celiac disease.</p>', ''),
(41, '', '', '', 'PORRIDGE', '20180829161242.jpg', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა, შვრია გარგარითა და ალუბლით. ', 'Baia Buckwheat Porridge with Dried Black Plums ', '', '', '', '', '<p>შეიცავს გარგარის და ალუბლის ჩირის დაქუცმაცებულ ფხვნილს, რომელიც არამარტო აუმჯობესებს პროდუქტის გემოს, არამედ ზრდის მის კვებით ღირებულებას. არ შეიცავს კონსერვანტებს, ხელოვნურ საღებავებს, ხოლო მასში შეტანილი ნატურალური ხილის კომპონენტები კი კიდევ უფრო ამდიდრებენ ამ პროდუქტს მიკროელემენტებითა და ვიტამინებით. შვრიის ფაფა ხასიათდება სასარგებლო ბაქტერიების გამრავლების ხელშეწყობით და თანაც ათავისუფლებს ორგანიზმს ზედმეტი ცხიმისაგან, მასში საკმაოდ&nbsp; ბევრია&nbsp; ადამიანის ორგანიზმისთვის შეუცვლელი ამინომჟავეები, В ჯგუფის, Е და А ვიტამინები.&nbsp; მისი ამინომჟავური შემადგენლობა ყველაზე ახლოსაა ადამიანის კუნთის ცილებთან, რის გამოც ითვლება განსაკუთრებულ დიეტურ კვებით პროდუქტად. ის გამოირჩევა სახამებლის დაბალი, ცხიმების და მცენარეული კვებითი&nbsp; ბოჭკოების (უჯრედისის) მაღალი შემცველობით. შვრიის ფქვილის ფაფები ორჯერ მეტ მცენარეულ ცხიმებს შეიცავს, ვიდრე წიწიბურა, რომ არაფერი ვთქვათ ვიტამინებსა და მინერალურ ნივთიერებებზე. განსაკუთრებით აღსანიშნავია შვრიის დამუშავების პროდუქტი ე.წ. &rdquo;გერკულესი&rdquo;. ის განსაკუთრებით&nbsp; ცნობილია, როგორც დამატებითი საკვები ადრეულ ასაკში და დიეტური დანიშნულებით - კუნაწლავის და ღვიძლის დაავადებების პროფილაქტიკისათვის.</p>', '<p>Baia Buckwheat Porridge with Dried Black Plums is a delicious blend of nutritious grains and fruit. As with Baia&rsquo;s other buckwheat products, it is rich in dietary fiber, vitamins, minerals and micronutrients and high in antioxidants. It helps to reduce cholesterol, blood pressure, and the risk of cardiovascular disease, contains no gluten, and can be safely enjoyed by individuals with celiac disease. The inclusion of locally sourced dried black plums, and the nutritional values associated with this naturally sweet fruit, make this porridge exceptionally nutritious and undeniably delicious.</p>', ''),
(42, '', '', '', 'PORRIDGE', '20180829161550.jpg', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა,  წიწიბურა შავი ქლივით', 'Baia Oat Porridge with Dried Apricot and Cherry', '', '', '', '', '<p>შეიცავს შავი ქლიავის ჩირის დაქუცმაცებულ ფხვნილს, იგი მდიდარია В1, В2, В6, РР, Р, ვიტამინებით, მინერალური ნივთიერებებით: რკინა, ფოსფორი, კალციუმი, თუთია, მაგნიუმი, იოდი, კობალტი. გარდა ამისა წიწიბურა ხასიათდება ანტიოქსიდანტური თვისებებით. ის ასევე შეიცავს ლეციტინს, რომელიც ხელს უწყობს ორგანიზმიდან ქოლესტერინისა და მძიმე მეტალების იონების გამოდევნას. ასევე ამცირებს გულსისხლძარღვთა დაავადებების რისკს. შეიცავს კვებით ბოჭკოებს (უჯრედისს), რომლებიც დადებითად მოქმედებენ ნაწლავურ მიკროფლორაზე. ის განსაკუთრებით საჭიროა ფარისებრი და კუჭქვეშა ჯირკვლის და თირკმლის დაავადების დროს, სასარგებლოა ჰიპერტონიკებისა და დიაბეტიანებისათვის. შეიცავს შავი ქლიავის მშრალ ფხვნილს, რომელიც არამარტო აუმჯობესებს პროდუქტის გემოს, არამედ ზრდის მის კვებით ღირებულებას.</p>\n<p>&nbsp;</p>', '<p>As with all Baia porridges, Baia Oat Porridge with Dried Apricot and Cherry variety contains 100% whole oats. Knowing that a little flavor goes a long way, we&rsquo;ve included some locally grown and dried apricots and cherries to add sweetness and increase enjoyment. Of course, there are no preservatives, artificial colors, dyes or fragrances. There are, however, plenty of amino acids, vitamins, magnesium, and zinc while naturally low in sugar, starch, and salt. When it comes to performance, this enjoyable blend of oats and fruit will aid digestion, support weight loss, and decrease the risk of heart attack. </p>', ''),
(43, '', '', '', 'PORRIDGE', '20180829161950.jpg', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა, 5 მარცვალი  ვაშლითა და ბანანით', 'Baia 5-Grain Porridge with Dried Apple and Banana ', '', '<p>Weight: 500 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '<p>Weight: 500 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '', '<p>შეიცავს ვაშლისა და ბანანის ჩირის დაქუცმაცებულ ფხვნილს, რომლებიც აუმჯობესებენ პროდუქტის გემოს და ზრდიან მის კვებით ღირებულებას. ნარევი შეიცავს კვებით ბოჭკოებს (უჯრედისს), რომლებიც დადებითად&nbsp; მოქმედებენ ნაწლავურ მიკროფლორაზე. ის ამსუბუქებს საჭმლის მონელებას, ასუფთავებს ნაწლავებს &bdquo;შლაკებისაგან&ldquo;, არის მსუბუქი ანტიოქსიდანტი,&nbsp; ნატურალური&nbsp; ხსნადი&nbsp; &nbsp;ბოჭკო (უჯრედისი) - ბეტა-გლუკანი,&nbsp; ხელს უწყობს სისხლში ქოლესტერინის ნორმაში შენარჩუნებას და&nbsp; ზრდის იმუნიტეტს. 5 მარცვალი: წიწიბურა, ბრინჯი, შვრია, სიმინდი და ქერი ვაშლითა და ბანანით ძალიან ყუათიანი და გემრიელია. მასში კომპლექსურადაა თავმოყრილი თითოეული მარცვლისთვის&nbsp; დამახასიათებელი დადებითი თვისებები, რაც ესოდენ აუცილებელია ორგანიზმის ბალანსირებული კვებისთვის. იგი ხასიათდება ორიგინალური და სასიამოვნო გემოთი, რომელიც განსაკუთრებით მოსწონთ, როგორც პატარებს ისე მოზრდილებს.</p>', '<p>Baia 5-Grain Porridge with Dried Apple and Banana is packed full of flavor and is the perfect addition to a healthy and balanced diet. Whether you are off to the gym, office, looking after your family or simply craving a nutritious meal, this blend of 100% whole grains and dried fruit is loaded with vitamins, minerals and dietary fiber, low in calories and salt, and rich with dietary fiber. With the addition of locally sourced dried apples and banana, there&rsquo;s no better way to start your day.</p>', ''),
(44, '', '', '', 'PORRIDGE', '20180829163149.jpg', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა, მანანის ბურღული ალუბლით. ', 'Baia Semolina Groats Porridge with Dried Cherries', '', '', '', '', '<p>შეიცავს სახამებელს, მიკროელემენტებს: კალიუმს, ნატრიუმს, მაგნიუმს, კალციუმს, რკინას, ვიტამინებს - Е და В1. მანანის ბურღული ხასიათდება მაღალი კალორიულობით და კვებითი ღირებულებით, მას ადვილად ინელებს ორგანიზმი, ამიტომ რეკომენდირებულია კუჭნაწლავის დაავადებების დროს და ოპერაციის შემდგომ პერიოდში. მანანის ფაფის გამოყენების რეკომენდაციას აძლევენ ხანდაზმული ასაკის ადამიანებს ძვალსახსროვანი სისტემის, კბილების და კუნთების მდგომარეობის გასაუმჯობესებლად. მანანის ფაფა სწრაფად მზადდება, ამიტომ მომზადების პროცესში ინარჩუნებს ყველა სასარგებლო ნივთიერებებს. შეიცავს ნატურალური ალუბლის ჩირის დაქუცმაცებულ ფხვნილს, რომელიც აუმჯობესრბს პროდუქტის გემოვნურ თვისებებს და კვებით ღირებულებას.</p>', '<p>This healthful blend of porridge and fruit offers the nutritional goodness of whole grain semolina wheat coupled with the deliciously tart and sweet flavor of locally sourced dried cherries. It is high in vitamins, iron, calcium and other essential nutrients, has absolutely no fats, cholesterol or salt, and contributes significantly to healthy bones, heart and kidneys. Baia Semolina Groats Porridge with Dried Cherries is a hot and hearty breakfast that cooks up quickly, conveniently delivering all of its healthy goodness in minutes.</p>', ''),
(45, '', '', '', 'PORRIDGE', '', '1', '', 0, 'blackplumprep', 'ბაიას ფაფა, მანანის ბურღული შავი ქლიავით', 'Baia Semolina Groats Porridge with Dried Black Plums', '', '', '', '', '<p>შეიცავს სახამებელს, მიკროელემენტებს: კალიუმს, ნატრიუმს, მაგნიუმს, კალციუმს, რკინას, ვიტამინებს- Е და В1. მარცვლეულის ფქვილის ყველა ფაფა სასარგებლოა და მათ შორის განსაკუთრებით მანანის ფაფა, რადგანაც ის სწრაფად მზადდება და ინარჩუნებს ყველა სასარგებლო ნივთიერებებს. მანანის ფაფა შავი ქლიავის ნატურალური ჩირის დაქუცმაცებული ფხვნილით აუმჯობესებს მის კვებით ღირებულებასა და გემოვნურ თვისებებს, რაც სასურველს ხდის მას, როგორც მოზარდებისთვის ისე ხანში შესულთათვის. მანანის ფაფის გამოყენების რეკომენდაციას აძლევენ ხანდაზმული ასაკის ადამიანებს ძვალსახსროვანი სისტემის, კბილების და კუნთების მდგომარეობის გასაუმჯობესებლად. ასევე ურჩევენ ქრონიკული თირკმლის უკმარისობით დაავადებულებსაც.</p>', '<p>There&rsquo;s nothing like a hot and satisfying bowl of nutritious whole grain semolina combined with the rich sweetness of dried black plums to get your day off to a great start. High in vitamins, iron, calcium and other essential nutrients with absolutely no fats, cholesterol or salt, this remarkable porridge contributes significantly to healthy bones, heart and kidneys. Baia Semolina Groats Porridge with Dried Black Plums can be enjoyed by everyone in the family, from growing children and adults with active lifestyles to more elderly individuals seeking to maintain a healthy diet.</p>', ''),
(46, '', '', '', 'PORRIDGE', '', '0', '', 0, 'blackplumprep', 'ბაია ქატო ხორბლის', 'Baia Wheat Bran ', '', '<p>Weight: 350 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '<p>Weight: 350 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '', '<p>ჯერ კიდევ ჰიპოკრატე აღნიშნავდა ქატოს სარგებლიანობაზე და თავის პაციენტებს რეკომენდაციას აძლევდა შეეტანათ იგი კვების რაციონში, საჭმლის მონელების ნორმალიზებისათვის, ორგანიზმის მოღონიერებისათვის და იმუნიტეტის გასაუმჯობესებლად.თუ გადაწყვიტეთ იკვებოთ სწორად და მიზნად დაისახეთ წონაში დაკლება ამაში აუცილებლად დაგეხმარებათ &bdquo;ბაიას ხორბლის ქატო&ldquo;, ის ასუფთავებს ნაწლავებს შხამებისა და &bdquo;წიდისაგან&ldquo; და ებრძვის შეკრულობას. ქატო კუჭში, სითხის გავლენით იჯირჯვება და ნაწლავებისკენ გადაადგილებისას, აუმჯობესებს მის პერისტალისტიკას და უზრუნველყოფს მიკროფლორის მოწესრიგებას, ამიტომ მას უწოდებენ ორგანიზმის &bdquo;ბუნებრივ ცოცხს&ldquo;. ქატო შეიძლება მივიღოთ ცალკე და სხვა საკვებთანაც ერთად, ისე რომ მან შეასრულოს თავისი ფუნქცია და თანაც გააუმჯობესოს მისი გემო. სხვა კერძებთან ერთად ქატოს მიღებით, თქვენ შეგიძლიათ არეგულიროთ საკვების მოცულობა და ულუფის თანდათან შემცირებით, ჭამოთ გაცილებით ნაკლები ისე, რომ არ განიცადოთ შიმშილით გამოწვეული დისკომფორტი და არეგულიროთ თქვენი წონა. მომზადების წესი: ერთი სუფრის კოვზი ქატო ჩაყარეთ ჭიქაში, დაასხით მდუღარე წყალი, ისე რომ ის დაიფაროს. დააყოვნეთ 3-5 წუთი, რის შემდეგ შეგიძლიათ შეავსოთ ცივი წყლითან მაწონით და დალიოთ როგორც სუსპენზია. ასეთი წესით მიიღეთ დღეში სამჯერ. ასევე თქვენ შეგიძლიათ ქატო მოაყაროთ საკვებს და მიიღოთ ის საკვებთან ერთად დღეში სამჯერ.</p>', '<p>The benefits of dietary fiber in bran were first introduced by Hippocrates, considered the &ldquo;father of medicine,&rdquo; in ancient Greece many thousands of years ago. Baia Wheat Bran delivers this valuable nutritional ingredient today, most noted to improve digestion and minimize disease.</p>\n<p>With the advent of more advanced medical knowledge, we also recognize this flavorful grain as a &ldquo;natural broom,&rdquo; helping to sweep foods through the stomach and intestines, improving digestion, normalizing microflora, minimizing constipation and protecting against colon cancer. It also regulates appetite, playing an important role in weight loss, and lowers blood pressure.</p>', ''),
(47, '', '', '', 'PORRIDGE', '', '0', '', 0, 'blackplumprep', 'ბაია ქატო ხორბლის ხილის ჩირით', 'Baia Wheat Bran with Dried Fruits ', '', '<p>Weight: 350 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '<p>Weight: 350 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '', '<p>გთავაზობთ ხორბლის ქატოს, ასევე მცენარეული უჯრედისით მდიდარ ხილის ჩირთან ერთად, რომელიც ქატოს აძლევს სასიამოვნო გემოს. თუ გადაწყვიტეთ იკვებოთ სწორად, და განსაკუთრებით, თუ თქვენ მიზნად დაისახეთ წონაში დაკლება, აუცილებლად გჭირდებათ რაციონში მცენარეული ბოჭკოთი *უჯრედისით, მდიდარი პროდუქტი - ქატო ხორბლის. ქატო ხორბლის გადამუშავებით მიიღება და ის ასუფთავებს ნაწლავებს შხამებისაგან, ე.წ. წიდისაგან და ლორწოსაგან, ამიტომ მას უწოდებენ ორგანიზმის &bdquo;ბუნებრივ ცოცხს&ldquo;. მას კუჭი ვერ ინელებს, მხლოდ სითხის გავლენით იჯირჯვება, რამდენჯერმე მატულობს მოცულობაში და ნაწლავებში გადაადგილებისას, ახდენს მის მექანიკურ გაწმენდას, აუმჯობესებს მის პერისტალისტიკას და უზრუნველყოფს ნაწლავის მიკროფლორას. ქატო სასურველია მივიღოთ სხვა კერძებთან ერთად. ამით თქვენ შეძლებთ არეგულიროთ საკვების რაოდენობა, ულუფის თანდათან შემცირებით, გარკვეული დროის შემდეგ კი ეჩვევით, ჭამოთ გაცილებით ნაკლები, ამასთან არ განიცადოთ, შიმშილით გამოწვეული დისკომფორტი და არეგულიროთ წონა. ქატო ხორბლის ხილის ჩირით შეიცავს ხილის ნატურალურ, დაქუცმაცებულ ჩირს რაც მის გემოვნურ თვისებას აკეთილშობილებს და ანეიტრალებს მიღების შემთხვევაში მის სპეციფიურ გემოს. მომზადების წესი: ერთი სუფრის კოვზი ქატო ჩაყარეთ ჭიქაში, დაასხით მდუღარე წყალი, ისე რომ ის დაიფაროს. დააყოვნეთ 3-5 წუთი, რის შემდეგ შეგიძლიათ შეავსოთ ცივი წყლით ან მაწონით და მიირთვათ როგორც სუსპენზია. ასეთი წესით მიიღეთ დღეში სამჯერ. ასევე თქვენ შეგიძლიათ ქატო მოაყაროთ საკვებს და მიიღოთ ის საკვებთან ერთად დღეში სამჯერ.</p>', '<p>Baia Wheat Bran with Dried Fruits combines fiber rich bran with a flavorful assortment of locally sourced raisins, dried apricots and dried black plums. It is ideal for individuals looking to maintain or reduce weight, overcome constipation, lower blood pressure, and reduce the risk of colon cancer. Whether you enjoy this fruity cereal in the morning as part of a nutritious breakfast or as a wholesome snack later in the day, it is a welcome addition to healthy diets and lends valuable support to active lifestyles.</p>', ''),
(48, '', '', '', 'PORRIDGE', '', '1', '', 0, 'blackplumprep', 'ბაია  ქატო  შვრიის', 'Baia Oat Bran ', '', '<p>Weight: 450 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months </p>', '<p>Weight: 450 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months </p>', '', '<p>თუ გადაწყვეტთ იკვებოთ სწორად და თან მიზნად დაისხეთ წონაში დაკლება, აუცილებლად გჭირდებათ რაციონში ჩართოთ მცენარეული ბოჭკოთი მდიდარი პროდუქტი, ქატო შვრიის, რომელიც შვრიის მარცვლის გადამუშავების პროდუქტია და მდიდარია მცენარეული ბოჭკოთი-უჯრედისით, რომლის მეტი წილი, რომლის მეტი წილი ხსნადი ფორმითაა წარმოდგენილი, რომელიც კუჭში მოხვედრის შემდეგ, სითხის გავლენით იჯირჯვება და მოცულობაში მატულობს 10-15 ჯერ. ის ღებულობს ჟელეს მსგავს კონსისტენციას და აუმჯობესებს ნაწლავის პერისტალისტიკას, ასუფთავებს მათ ლორწოსა და შხამებისაგან. შვრიის ქატო ასევე უზრუნველოფს ნაწლავებში მიკროფლორის მოწესრიგებას. მისი მიღებით, თქვენ შეძლებთ არეგულიროთ საკვების მოცულობა, ულუფის თანდათან შემცირებით და არ განიცადოთ შიმშილით გამოწვეული დისკომფორტი. ასეთი კვება თქვენ დაგეხმარებათ ზედმეტი წონის პრობლემის გადაჭრაში.</p>', '<p>Baia Oat Bran is a nutritional powerhouse, rich in dietary fiber, protein, magnesium, phosphorous, potassium and other essential vitamins and minerals. Whether you are looking to prevent constipation, maintain or lose weight, improve strength, manage blood sugar, lower cholesterol, or minimize cardiovascular disease, this wholesome cereal is a quick and easy way for health-conscious individuals to maintain a balanced diet.</p>', ''),
(49, '', '', '', 'PORRIDGE', '', '0', '', 0, 'blackplumprep', 'ბაია შვრიის ფანტელი ხორბლის ქატოთი და გარგარით', 'Baia Oat Flakes & Wheat Bran with Apricots ', '', '<p>Weight: 600 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '<p>Weight: 600 gm per box<br />Case Pack: 12 boxes per case<br />Shelf life: 12 months</p>', '', '<p>. &bdquo;ბაია&ldquo;-ს ფაფა, დამზადებულია შვრიის ფანტელის, ხორბლის ქატოსა და გარგარის ჩირისაგან. საკმარისია ამ ნარევს დავასხათ მდუღარე წყლი, რძე ან მათი ნარევი, დავაყოვნოთ ხუთი წუთი და ულუფა მზადაა. ასეთი წესით მომზადებული ფაფა ხელს უწყობს მიკროელემენტებისა და ვიტამინების უკეთ შეთვისებას, კუჭ-ნაწლავის ნორმალურ ფუნქციონირებას, შეკრულობის დარეგულირებას და ყაბზობას, რაც ქატოს გავლენით, ნაწლავებში განვითარებული სასარგებლო ბაქტერიების დამსახურებაა. ხორბლის ქატოს უჯრედისი არის შესანიშნავი აბსორბენტი, რომელსაც გამოაქვს ორგანიზმში მოხვედრილი ანტიბიოტიკის ნარჩენები, რაც ხელს უწყობს ადამიანის ორგანიზმს იმუნიტეტის გამყარებაში.</p>', '<p>Baia Oat Flakes &amp; Wheat Bran with Apricots is an enjoyable blend of nutritious oats and brand and dried apricot. When served hot, this fiber rich cereal aids digestion, prevents constipation, lowers cholesterol, minimizes cardiovascular disease and boosts immunity. With the addition of vibrantly sweet dried apricots, it is an appealing breakfast food as can be enjoyed later in the day as a wholesome and nutritious snack.</p>', ''),
(50, '', '', '', 'DRYMILK', '', '0', '', 0, 'blackplumprep', 'ბაიას  მშრალი რძე 25%-იანი ცხიმიანობით', 'Baia Whole Dry Milk (25% milkfat)   ', '', '<p>Weight: 300 gm per box<br />Case Pack: 16 boxes per case<br />Shelf life: 10 months</p>', '<p>Weight: 300 gm per box<br />Case Pack: 16 boxes per case<br />Shelf life: 10 months</p>', '', '<p>მშრალი რძე წარმოადგენს წყალში ხსნად ფხვნილს, რომელიც მიიღება ნორმალიზებული და პასტერიზებული ძროხის რძის გაშრობით. ჩვეულებრივ იხსნება თბილ წყალში და გამოიყენება სასმელი რძის სახით, რადგანაც ინარჩუნებს ახლადპასტერიზებული რძისთვის დამახასიათებელ ყველა სასარგებლო თვისებებს. 300 გრ. ბაიას მშრალი რძისაგან შესაძლებელია 3.0 ლიტრი რძის დამზადება, რომლისგანაც რეკომენდირებულია ბაიას სხვადასხვა მარცვლეულის ფაფების მომზადება. ის ფართოდ გამოიყენება კულინარიაში და შედის სხვადასხვა სახეობის საკვების შემადგენლობაში. პაკეტის გახსნის შემდეგ, რძე ვარგისია სამი კვირა, თუ მას შეინახავთ ჰერმეტულ ქილაში, მშრალ და გრილ ადგილას ან მაცივარში.</p>', '<p>Baia While Dry Milk is a convenient way to keep a ready supply of milk in the house at all times. Simply add a little water and you&rsquo;re set. Made from pasteurized cow milk, it retains all the nutritional calcium, Vitamins A and D and healthful goodness found in fresh milk. Perfect for a variety of cooking and baking applications, especially in muffins and smoothies, this 300g package makes 3 liters of whole milk. Once opened, the dry milk should be stored in an airtight container in a dry and cool place or in the refrigerator.</p>', ''),
(51, '', '', '', 'DRYMILK', '', '0', '', 0, 'blackplumprep', 'ბაიას მშრალი რძე 1,5% - ცხიმგაცლილი. ', 'Baia Lowfat Dry Milk (1.5% milkfat)', '', '<p>Weight: 300 gm per box<br />Case Pack: 16 boxes per case<br />Shelf life: 10 months</p>', '<p>Weight: 300 gm per box<br />Case Pack: 16 boxes per case<br />Shelf life: 10 months</p>', '', '<p>მშრალი რძე არის წყალში ხსნადი საკვები პროდუქტი, ფხვნილის სახით, რომელიც მიიღება წინასწარ პასტერიზებული და ნორმაიზებული ძროხის რძისაგან. ის გამოიყენება კულინარიასა და კვების დარგში. ძალიან პოპულარულია ცხიმგაცლილი რძის ფხვნილი, დიეტურ და სამკურნალო - პროფილაქტიკურ რაციონში საკვებად. მშრალი ცხიმგაცლილი რძე შეიცავს, არაუმეტეს 1.5% ცხიმს. მისი კალორიულობა არ განსხვავდება ჩვევლებრივი რძისაგან, ამასთანავე ცხიმგაცლილი რძე შეიცავს მცირე რაოდენობით ცხოველურ ცხიმებს და ქოლესტერინს. მას იყენებენ დიეტური პროდუქტების, საკონდიტრო კრემების და ასევე სასმელების მოსამზადებლად. ცხიმგაცლილი რძე არის ძალიან ეკონომიური პროდუქტი, რადგან 300 გ. ფხვნილისაგან შეიძლება მოვამზადოთ სამი ლიტრი ცხიმგაცლილი დიეტური რძე. პაკეტის გახსნის შემდეგ, რძე ვარგისია სამი კვირა, თუ მას შეინახავთ ჰერმეტულ ქილაში, მშრალ და გრილ ადგილას ან მაცივარში.</p>', '<p>Baia Lowfat Dry Milk is ideal for individuals looking to reduce the amount of fat they consume as part of a carefully managed diet. Made from pasteurized cow milk, it retains all the nutritional calcium, Vitamins A and D and healthful goodness found in fresh milk. It is perfect in fruity smoothies and an ideal substitute in recipes calling for whole milk. This 300g package makes 3 liters of lowfat milk. Once opened, the dry milk should be stored in an airtight container in a dry and cool place or in the refrigerator.</p>', ''),
(52, '', '', '', 'COOKIES', '', '0', '', 0, 'blackplumprep', 'ბაიას შვრიის საბავშვო ორცხობილა', 'Baia Oatmeal Cookies ', '', '<p>Weight: 210 gm per box<br />Case Pack: 16 boxes per case<br />Shelf life: 6 months</p>', '<p>Weight: 210 gm per box<br />Case Pack: 16 boxes per case<br />Shelf life: 6 months</p>', '', '<p>შვრიის ორცხობილას ძირითად ინგრედიენტად ითვლება შვრიის ფქვილი და ხორბლის ფქვილი. დამატკბობლად კი თაფლი ან შაქარი ორცხობილის გამოსაცხობად გამოიყენება მხოლოდ ნაღების კარაქი, მაწონი, რძე, მზესუმზირის ზეთი. ინგრედიენტებს შორის არაა გამოყენებული პალმის ზეთი, კვერცხი და სხვა შესაძლო ალერგენები თუ ემულგატორები. ასევე ინგრედიენტებს შორის შეიძლება იყოს ბანანი, მიხაკ-დარიჩინი და ვანილი. ბავშვებისათვის უპირატესობა ენიჭება ორცხობილას, რომელიც სახლის რეცეპტითაა დამზადებული, კონსერვანტებისა და ემულგატორების გარეშე, მხოლოდ გამაფხვიერებლის სახით, საკვები სოდისა და ლიმონის წვენის გამოყენებით.</p>\n<p><br />შვრიის ფანტელიდან ან შვრიის ფქვილიდან, ორცხობილას შემადგენლობაში, ბავშვები ღებულობენ სასარგებლო ცხიმებს, უჯრედისს, კაროტინს და ვიტამინებს. შვრიის ორცხობილაში, გამოცხობისას სასარგებლო ნივთიერებები რჩებიან პროდუქტში. ისინი აუმჯობესებენ ნაწლავის მუშაობას, ამცირებენ შაქრისა და ქოლესტერინის შემცველობას სისხლში და იცავენ ბავშვის ჯანმრთელობას. პედიატრების აზრით, ბავშვებისათვის უპირატესობა ენიჭება ორცხობილას, რომელიც სახლის რეცეპტითაა დამზადებული, კონსერვანტებისა და ემულგატორების გარეშე, მხოლოდ გამაფხვიერებლის სახით, საკვები სოდისა და ლიმონის წვენის გამოყენებით. ასეთი ორცხობილა ბავშვებს შეიძლება მივცეთ ერთი წლის ასაკიდან. პროდუქტი შეიცავს გლუტენს. გამოყენების წესი: შვრიის ორცხობილა რეკომენდირებულია გამოვიყენოთ ერთი წლის ასაკიდან, რძეში, მაწონში, წყალში ან ჩაიში გახსნით, ერთგვაროვანი მასის მიღებამდე. ყურადღება: ალერგიულთა კვების რაციონში პროდუქტის შეტანისას, დარწმუნდით, რომ მისთვის მისაღებია პროდუქტის შემადგენლობაში შემავალი ინგრედიენტები.დამატებითი კითხვებისას, კონსულტაცია გაიარეთ პირად ექიმთან.</p>', '<p>Baia Oatmeal Cookies are as close to home made you can get without baking them yourself. Made from wholesome oat and wheat flour, they are incredibly nutritious sweet treats that will be enthusiastically enjoyed by everyone in your family - especially the kids. Taking care to avoid palm oil, eggs, and other possible allergens, these crispy biscuits are a delicious way to obtain the nutritional benefits of whole oats. They are even better when enjoyed with a glass of cold milk or crumbled into a bowl of Greek yogurt.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `our_products`
--

CREATE TABLE `our_products` (
  `id` int(11) NOT NULL,
  `romeli` enum('vegetables','tea','fruits','all') NOT NULL DEFAULT 'all',
  `image` varchar(255) NOT NULL,
  `visible` enum('0','1','2') NOT NULL DEFAULT '1',
  `rigiti` int(2) NOT NULL,
  `preparation` varchar(255) NOT NULL DEFAULT 'blackplumprep',
  `name_ge` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `name_ru` varchar(150) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `text_ge` text NOT NULL,
  `text_en` text NOT NULL,
  `text_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_products`
--

INSERT INTO `our_products` (`id`, `romeli`, `image`, `visible`, `rigiti`, `preparation`, `name_ge`, `name_en`, `name_ru`, `title_ge`, `title_en`, `title_ru`, `text_ge`, `text_en`, `text_ru`) VALUES
(1, 'all', 'abo_1.jpg', '1', 1, '', 'ჩვენი პროდუქცია', 'OUR PRODUCT', '', '', '', '', '<p>ცხოვრების ჯანსაღი წესის მიმდევრებს &bdquo;ბაია-ფუდი&ldquo; სთავაზობს ნოყიერი ფაფების, ბურღულეულისა და სხვა სასარგებლო პროდუქტების ფართო ასორტიმენტს. ყველა პროდუქტი დამზადებულია ადგილობრივი მარცვლეულისა და ხილისგან და საერთოდ არ შეიცავს ხელოვნურ საღებავებს, არომატიზატორებსა და კონსერვანტებს.</p>\n<p>&nbsp;</p>\n<p>გამომდინარე კომპანიის დევიზიდან &bdquo;ჯანსაღი საკვები, ჯანმრთელი ოჯახი&ldquo;, მთელი ოჯახისთვის დაბალანსებული კვების უზრუნველყოფა საფუძვლად უდევს ყველაფერს, რასაც &bdquo;ბაია-ფუდი&ldquo; აწარმოებს. ფაქტობრივად, ყველა დაფქული მარცვლეული, ჩირი და სხვა ინგრედიენტი, რომელიც გამოიყენება &bdquo;ბაია-ფუდის&ldquo; ყოველ ბურღულეულში, ფაფასა თუ ორცხობილაში 100%-ით ნატურალურია, მდიდარია ვიტამინებითა და მინერალებით, დიდი რაოდენობით შეიცავს უჯრედისს, ეხმარება საკვების მონელებას, უზრუნველყოფს დაავადებათა პროფილაქტიკას და მნიშვნელოვნად უწყობს ხელს აქტიური და ჯანსაღი ცხოვრების წესით ცხოვრებას.</p>\n<p>&nbsp;</p>\n<p>მაშინ, როდესაც კომპანია &bdquo;ბაია&ldquo; მუდმივად ახდენს ინოვაციების დანერგვას, ახალი პროდუქტების შეფასებასა და შემოღებას, ჩვენი მიმდინარე ხაზი მოიცავს ფაფების, ბურღულეულის, ორცხობილებისა და &nbsp;მშრალი რძის წარმოებას.</p>\n<p><strong><u>&nbsp;</u></strong></p>\n<p>შპს<strong> &bdquo;ბაია-ფუდი&ldquo;-ს </strong>პროდუქცია, - მარცვლეულის ურძეო ფაფები &bdquo;ბაია&ldquo;, მზადდება 100 % ნატურალური ნედლეულისგან, ისინი არ შეიცავს საღებავებს, არომატიზატორებს და კონსერვანტებს. ხოლო &bdquo;ბაია&ldquo;-ს ფაფები, ადგილობრივი წარმოების, სხვადასხვა ხილის ნატურალური&nbsp; ჩირით შეიცავს ბუნებრივ ვიტამინებს, და სასარგებლო მინერალურ ნივთიერებებს. პროდუქტი განკუთვნილია ადრეული ასაკიდან ოჯახის ყველა&nbsp; წევრთათვის, განსაკუთრებით კი ჯანსაღი კვების მოყვარულთათვის. ჩვენს ასორტიმენტში შედის ფაფები, დიეტური და პროფილაქტიკური დანიშნულებისათვის. მთლიანი მარცვლის დაფქვის შედეგად მიღებული პროდუქტი მდიდარია უჯრედისით, რომელიც თავის მხრივ დადებითად მოქმედებს კუჭნაწლავის ფორმირებასა და პერესტატიკაზე. </p>', '<p><strong>BAIA </strong></p>\n<p><strong>Wholesome Nutrition for Active Families</strong></p>\n<p>&nbsp;</p>\n<p>Catering to individuals pursuing healthy lifestyles, Baia offers a wide variety of nutritious porridges, cereals, and other wholesome products. Everything is made from locally sourced grains and fruits and completely free of artificial dyes, fragrances and preservatives.</p>\n<p>&nbsp;</p>\n<p>Based on its motto &ldquo;Healthy Foods Building Healthy Families,&rdquo; producing nutritionally balanced foods for the entire family is at the core of everything Baia does. As such, all of the milled grains, dried fruits and other ingredients that go into every Baia cereal, porridge, or cookie are 100% natural, rich in vitamins and minerals, have plenty of dietary fiber, aid with digestion, prevent disease, and contribute significantly to active and robust lives.</p>\n<p>&nbsp;</p>\n<p>While Baia is constantly innovating, evaluating and introducing new products, our current line includes Porridges, Cereals, Cookies and Dry Milk.</p>\n<p>&nbsp;</p>\n<p>Whether you start your day with a warm and satisfying bowl of porridge, or a deliciously crunchy bowl of cereal, Baia offers an extensive line of porridges, porridge blends and cereals made with buckwheat, oats, rice, corn, wheat, millet and bran. Looking for a little added flavor and sweetness, try one of Baia&rsquo;s grain and dried fruit combinations featuring dried black plums, apricots, cherries, apples, bananas and raisins.</p>\n<p>&nbsp;</p>\n<p>While all of Baia&rsquo;s porridges and cereals are perfect for breakfast, they can also be enjoyed as a nutritious snack, giving you an added boost of energy and perhaps a touch of fruity sweetness to get you through the day. </p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `romeli` enum('PORRIDGE','DRYMILK','COOKIES','all') NOT NULL DEFAULT 'all',
  `image` varchar(255) NOT NULL,
  `visible` enum('0','1','2') NOT NULL DEFAULT '1',
  `comment` varchar(255) NOT NULL,
  `rigiti` int(2) NOT NULL,
  `preparation` varchar(255) NOT NULL DEFAULT 'blackplumprep',
  `name_ge` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `name_ru` varchar(150) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `text_ge` text NOT NULL,
  `text_en` text NOT NULL,
  `text_ru` text NOT NULL,
  `colour` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `text`, `romeli`, `image`, `visible`, `comment`, `rigiti`, `preparation`, `name_ge`, `name_en`, `name_ru`, `title_ge`, `title_en`, `title_ru`, `text_ge`, `text_en`, `text_ru`, `colour`) VALUES
(1, '', '', '', 'PORRIDGE', '20190817200902.jpg', '1', '', 1, 'blackplumprep', 'ვაშლის კრეკერი', 'Apple Crackers', '', '', '', '', '', '', '', 'B51F28'),
(35, '', '', '', 'PORRIDGE', '20190817203128.jpg', '1', '', 0, 'blackplumprep', 'ვაშლის ჩირის რგოლები', 'Apple Dried Rings', '', '', '', '', '', '', '', 'E7C632'),
(36, '', '', '', 'PORRIDGE', '20190822092709.jpg', '1', '', 0, 'blackplumprep', 'ნესვის ჩირი', 'MELON DRIED WEDGES', '', '', '', '', '', '', '', 'ECBD81'),
(37, '', '', '', 'PORRIDGE', '20190822094108.jpg', '1', '', 0, 'blackplumprep', 'კივის ჩირი', 'KIWI DRIED SLICES', '', '', '', '', '', '', '', 'A9C77E'),
(38, '', '', '', 'PORRIDGE', '20190822094753.jpg', '1', '', 0, 'blackplumprep', 'ხურმის ჩირი', 'PERSIMMON DRIED SLICES', '', '', '', '', '', '', '', 'E77525'),
(39, '', '', '', 'PORRIDGE', '20190822095107.jpg', '1', '', 0, 'blackplumprep', 'პომიდვრის ჩირი', 'TOMATTO Dried, Sliced', '', '', '', '', '', '', '', 'DE3426'),
(40, '', '', '', 'PORRIDGE', '20190822095534.jpg', '1', '', 0, 'blackplumprep', 'ატმის ჩირი', 'PEACH DRIED SLICES', '', '', '', '', '', '', '', 'DCAD90'),
(41, '', '', '', 'PORRIDGE', '20190822100349.jpg', '1', '', 0, 'blackplumprep', 'ქლიავის რგოლები', 'PLUM Dried Rings ', '', '', '', '', '', '', '', '723159'),
(42, '', '', '', 'PORRIDGE', '20190822100954.jpg', '1', '', 0, 'blackplumprep', 'მსხლის ჩირი', 'PEAR Dried Slices', '', '', '', '', '', '', '', 'E0EB74'),
(43, '', '', '', 'PORRIDGE', '20190822101748.jpg', '1', '', 0, 'blackplumprep', 'ბლის ჩირი', 'SWEET CHERRY Dried Slices', '', '', '', '', '', '', '', '95392A'),
(44, '', '', '', 'PORRIDGE', '20190822102620.jpg', '1', '', 0, 'blackplumprep', 'ალუბლის ჩირი', 'TART CHERRY Dried Slices', '', '', '', '', '', '', '', '673E42'),
(45, '', '', '', 'PORRIDGE', '20190822102834.jpg', '1', '', 0, 'blackplumprep', 'ლიმონის ჩრი', 'LEMON Dried Slices', '', '', '', '', '', '', '', 'F7F7B9');

-- --------------------------------------------------------

--
-- Table structure for table `seen_count`
--

CREATE TABLE `seen_count` (
  `id` int(11) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `user_ip` text NOT NULL,
  `note` text NOT NULL,
  `date` datetime NOT NULL,
  `visible` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seen_count`
--

INSERT INTO `seen_count` (`id`, `post_id`, `user_ip`, `note`, `date`, `visible`) VALUES
(1, '129309', '94.100.224.241', '', '2017-07-20 19:09:05', '1'),
(2, '129314', '157.55.39.145', '', '2017-07-20 19:09:19', '1'),
(3, '129299', '188.169.32.154', '', '2017-07-20 19:09:21', '1'),
(4, '129297', '94.100.237.201', '', '2017-07-20 19:09:28', '1'),
(5, '129309', '94.100.237.212', '', '2017-07-20 19:09:32', '1'),
(6, '129125', '::1', '', '2017-07-23 08:53:49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `seen_ip`
--

CREATE TABLE `seen_ip` (
  `post_id` varchar(255) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `whychoose`
--

CREATE TABLE `whychoose` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `visible` enum('0','1') NOT NULL DEFAULT '1',
  `rigiti` int(2) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_ge` text NOT NULL,
  `text_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `whychoose`
--

INSERT INTO `whychoose` (`id`, `title`, `text`, `visible`, `rigiti`, `title_ge`, `title_en`, `text_ge`, `text_en`) VALUES
(1, 'aboutus', 'aboutustxt', '1', 1, 'ჩვენს შესახებ', 'ABOUT US', '<p>The company employs 30 full-time staff who administer, manage, and oversee all aspects of operation, is the recipient of Eco Globe and Caucascert organic certificates, and has a pending ISO 22000 certification.</p>', '<p>The company employs 30 full-time staff who administer, manage, and oversee all aspects of operation, is the recipient of Eco Globe and Caucascert organic certificates, and has a pending ISO 22000 certification.</p>'),
(2, 'mission', 'missiontxt', '1', 2, 'ჩვენი მისია', 'OUR MISSION', '<p>We believe that the most crucial for our society and the business community to tackle today, for food, family, and future, encourages you to be passionately Organic!</p>', '<p>We believe that the most crucial for our society and the business community to tackle today, for food, family, and future, encourages you to be passionately Organic!</p>'),
(3, 'diff', 'difftxt', '1', 3, 'OUR BLENDS MAKE US DIFFERENT', 'OUR BLENDS MAKE US DIFFERENT', 'Each product is built upon years of experience and now it will be time-tested for maximum results.  <br> We can bring you unexpected blends and deliciously vibrant flavors that brighten every day. <br> Our tea plantations  unique location in Georgia, along with the confluence of both mountain and coastal climates, gives Manna teas their distinctive aroma and taste that you are sure to enjoy. ', 'Each product is built upon years of experience and now it will be time-tested for maximum results.  <br> We can bring you unexpected blends and deliciously vibrant flavors that brighten every day. <br> Our tea plantations  unique location in Georgia, along with the confluence of both mountain and coastal climates, gives Manna teas their distinctive aroma and taste that you are sure to enjoy. '),
(4, 'top', 'toptxt', '1', 4, 'TOP 10 REASONS TO GO ORGANIC', 'TOP 10 REASONS TO GO ORGANIC', '&#9632; Avoid Chemicals;    &#9632; Benefit from more nutrients;  &#9632; Enjoy better taste; &#9632; Avoid GMO; &#9632; Avoid hormones, antibiotics and drugs in animal products; &#9632; Preserve our ecosystems; &#9632; Reduce pollution and protect water ans soil; &#9632; Preserve aricultural diversity; &#9632; Support farming directly;', '&#9632; Avoid Chemicals;    &#9632; Benefit from more nutrients;  &#9632; Enjoy better taste; &#9632; Avoid GMO; &#9632; Avoid hormones, antibiotics and drugs in animal products; &#9632; Preserve our ecosystems; &#9632; Reduce pollution and protect water ans soil; &#9632; Preserve aricultural diversity; &#9632; Support farming directly;'),
(5, '', '', '0', 0, 'გეო', 'ENG', '<p>გეო</p>', '<p>EN</p>');

-- --------------------------------------------------------

--
-- Table structure for table `_langpak`
--

CREATE TABLE `_langpak` (
  `id` varchar(255) NOT NULL,
  `lng_id` char(3) NOT NULL,
  `text` text NOT NULL,
  `text_adgili` text NOT NULL,
  `main` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_langpak`
--

INSERT INTO `_langpak` (`id`, `lng_id`, `text`, `text_adgili`, `main`) VALUES
('about', 'en', 'About us', '', 1),
('about', 'ge', 'ჩვენს შესახებ', '', 0),
('products', 'en', 'Our Products', '', 1),
('products', 'ge', 'პროდუქცია', '', 0),
('plumdriedfruit', 'en', 'Plum Dried Fruit', '', 1),
('plumdriedfruit', 'ge', 'Plum Dried Fruit', '', 0),
('apricotdriedfruit', 'en', 'Apricot Dried Fruit', '', 1),
('apricotdriedfruit', 'ge', 'Apricot Dried Fruit', '', 0),
('figdriedfruit', 'en', 'Fig Dried Fruit', '', 1),
('figdriedfruit', 'ge', 'Fig Dried Fruit', '', 0),
('peachdriedfruit', 'en', 'Peach Dried Fruit', '', 1),
('peachdriedfruit', 'ge', 'Peach Dried Fruit', '', 0),
('georgianblacktea', 'en', 'Georgian Black Tea', '', 1),
('georgianblacktea', 'ge', 'ქართული შავი ჩაი', '', 0),
('georgiangreentea', 'en', 'Georgian Green Tea', '', 1),
('georgiangreentea', 'ge', 'ქართული მწვანე ჩაი', '', 0),
('allproducts', 'en', 'All Products', '', 1),
('allproducts', 'ge', 'ყველა პროდუქცია', '', 0),
('dry', 'en', 'DRY MILK', '', 1),
('dry', 'ge', '	\r\nDRY MILK', '', 0),
('PORRIDGE', 'en', 'PORRIDGE', '', 1),
('PORRIDGE', 'ge', 'fafa', '', 0),
('spices', 'en', 'SPICES', '', 1),
('spices', 'ge', 'სუნელები', '', 0),
('whychooseus', 'en', 'Why to Choose Us', '', 1),
('whychooseus', 'ge', 'რატომ გვირჩევენ ჩვენ', '', 0),
('organicproducts', 'en', '100% Organic Products', '', 1),
('organicproducts', 'ge', '100% ორგანული პროდუქტი', '', 0),
('organicproductstxt', 'en', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat', '', 1),
('organicproductstxt', 'ge', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat', '', 0),
('any', 'en', 'The company employs 30 full-time staff who administer, manage, and oversee all aspects of operation, is the recipient of Eco Globe and Caucascert organic certificates, and has a pending ISO 22000 certification. ', '', 1),
('anytxt', 'ge', 'The company employs 30 full-time staff who administer, manage, and oversee all aspects of operation, is the recipient of Eco Globe and Caucascert organic certificates, and has a pending ISO 22000 certification. ', '', 0),
('keetsyour', 'en', 'Keeps Your Family Healthy', '', 1),
('keetsyour', 'ge', 'Keeps Your Family Healthy', '', 0),
('keetsyourtxt', 'en', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.', '', 1),
('keetsyourtxt', 'ge', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.', '', 0),
('cleanfresh', 'en', 'Clean, Fresh and Safety', '', 1),
('cleanfresh', 'ge', 'Clean, Fresh and Safety', '', 0),
('cleanfreshtxt', 'en', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.', '', 1),
('cleanfreshtxt', 'ge', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.', '', 0),
('anytxt', 'en', 'The company employs 30 full-time staff who administer, manage, and oversee all aspects of operation, is the recipient of Eco Globe and Caucascert organic certificates, and has a pending ISO 22000 certification. ', '', 1),
('showroom', 'en', 'showroom', '', 1),
('showroom', 'ge', 'showroom', '', 0),
('news', 'en', 'news', '', 1),
('news', 'ge', 'სიახლეები', '', 0),
('contact', 'en', 'contact', '', 1),
('contact', 'ge', 'კონტაქტი', '', 0),
('georgianblackteatitle', 'en', 'Premium Quality Organic Black Tea', '', 1),
('georgianblackteatitle', 'ge', 'პრემიუმ ხარისხის ორგანული შავი ჩაი', '', 0),
('georgianblackteatext', 'en', '<p>\nThe uniquely flavored “Manna” Georgian black tea is characterized by its strong toning effect. You can consume the tea at any time during the day as it is good for your health and creates a pleasant mood.\n</p>\n<p>&nbsp;</p>\n<p><strong><em>\nIngredients: black tea\n</em></strong></p>\n<p>\nWe prepare the premium quality black tea with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of West Georgia. The daytime-to-nighttime changes in temperature and the merging of the mountain and sea climates give the tealeaves a peculiar aroma and taste. \n</p>\n<p>&nbsp;</p>\n<p><strong><em>\nThe Health Benefits of  Black Tea\n</em></strong></p>\n<p>\nBlack tea is characterized by its strong toning effect and health benefits. The “Manna” black tea contains antioxidants, aromatic substances, tannins, caffeine, and vitamins P and C. It has a positive impact on health, especially on cardiovascular, circulatory, and nervous systems.\n</p>\n', '', 1),
('georgianblackteatext', 'ge', '<p><strong>პრემიუმ ხარისხის ორგანული შავი ჩაი</strong></p>\n<p>გამორჩეული გემოსა და მძაფრი არომატის მქონე ქართული შავი ჩაი - მანნა, ხასიათდება ძლიერი მატონიზირებელი ეფექტით. შეგიძლიათ მიირთვათ მთელი დღის განმავლობაში, სასარგებლოა თქვენი ჯანმრთელობისთვის და გიქმნით სასიამოვნო განწყობას</p>\n<p>&nbsp;</p>\n<p><strong>შემადგენლობა: ორგანული შავი ჩაი</strong></p>\n<p>დამზადებულია დასავლეთ საქართველოს მაღალმთიანი რეგიონის ეკოლოგიურად სუფთა პლანტაციებიდან მიღებული ჩაის ნაზი ფოთლებისგან. რეგიონისთვის დამახასიათებელი დღე-ღამეს შორის არსებული ტემპერატურის ცვალებადობა, ასევე მთისა და ზღვის ჰავის შერწყმა ჩაის ფოთლებს აძლევს განსაკუთრებულ არომატს და თავისებურ გემოს.</p>\n<p>&nbsp;</p>\n<p><strong>სამკურნალო თვისებები</strong></p>\n<p>ხასიათდება ძლიერი მატონიზირებელი ეფექტით და  სასარგებლოა თქვენი ჯანმრთელობისთვის. შეიცავს ანტი ოქსიდანტებს, არომატულ ნივთიერებებს, ტანინებს, კოფეინს, P და C ვიტამინებს. ახდენს  დადებით ზეგავლენას ჯანმრთელობაზე, განსაკუთრებით გულ-სისხლძარღვთა, სისხლის მიმოქცევის და ნერვულ სისტემაზე.</p>', '', 0),
('georgiangreenteatitle', 'en', 'Premium Quality Organic Green Tea', '', 1),
('georgiangreenteatitle', 'ge', 'პრემიუმ ხარისხის ორგანული მწვანე ჩაი', '', 0),
('georgiangreenteatext', 'en', '<p>The uniquely flavored “Manna” Georgian green tea creates a pleasant mood. The tea has a positive effect on your health and ensures the correction of your weight without any side effects.</p>\n<p>&nbsp;</p>\n<p><strong><em>Ingredients: green tea</em></strong></p><p>We prepare the premium quality green tea with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia. The daytime-to-nighttime changes in temperature, characteristic of the region of West Georgia, and the merging of the mountain and sea climates give the tealeaves a peculiar aroma and taste. </p>\n<p>&nbsp;</p>\n<p><strong><em>The Health Benefits of Green Tea</em></strong></p>\n<p>Green tea fully (98%) contains catechol and other biologically active substances that are good for your health. Green tea also contains antioxidants, aromatic substances, tannins, caffeine, and vitamins P and C. It has a positive impact on health, especially on cardiovascular, circulatory, and nervous systems. Green tea is also healthy for diabetes patients as it slows down the process blood sugar level rise and decreases the level of cholesterol. Its regular consumption protects brain cells from damage, regulates blood pressure, and contributes to weight loss.</p>', '', 1),
('georgiangreenteatext', 'ge', '<p><strong>პრემიუმ ხარისხის ორგანული  ჩაი</strong></p>\n\n<p>უნიკალური გემოსა და განსაკუთრებული არომატის მქონე ქართული მწვანე ჩაი - მანნა. ქმნის სასიამოვნო განწყობასა და დაუვიწყარ მოგონებას, დადებითად მოქმედებს თქვენს ჯანმრთელობაზე და გვერდითი ეფექტების გარეშე უზრუნველყოფს თქვენი წონის კორექციას.</p>\n<p>&nbsp;</p>\n<p><strong>შემადგენლობა: ორგანული მწვანე ჩაი</p>\n\n<p>დამზადებულია დასავლეთ საქართველოს მაღალმთიანი რეგიონის ეკოლოგიურად სუფთა პლანტაციებიდან მიღებული ჩაის ნაზი ფოთლებისგან. რეგიონისთვის დამახასიათებელი დღე-ღამეს შორის არსებული ტემპერატურის ცვალებადობა, ასევე მთისა და ზღვის ჰავის შერწყმა ჩაის ფოთლებს აძლევს განსაკუთრებულ არომატს და თავისებურ გემოს.</p>\n<p>&nbsp;</p>\n<p><strong>სამკურნალო თვისებები</p>\n\n<p>სრულად (98%) შენარჩუნებულია კატეხინები და სხვა ბიოლოგიურად აქტიური ნივთიერებები, რაც სასარგებლოა თქვენი ჯანმრთელობისთვის.   შეიცავს ანტიოქსიდანტებს, არომატულ ნივთიერებებს, ტანინებს, კოფეინს, P და C ვიტამინებს.  ახდენს  დადებით ზეგავლენას ჯანმრთელობაზე, განსაკუთრებით გულ-სისხლძარღვთა, სისხლის მიმოქცევისა და ნერვულ სისტემაზე. სასარგებლოა დიაბეტით დაავადებული ადამიანებისთვის - ანელებს სისხლში შაქრის დონის აწევას, ამცირებს ქოლესტერინის დონეს. მისი რეგულარული მოხმარება იცავს ტვინის უჯრედებს დაზიანებისაგან, არეგულირებს წნევას.</p>\n', '', 0),
('whychooseustxt', 'en', 'Working with a select group of environmentally responsible farmers throughout Georgia\'s premier agricultural districts, and sharing a core philosophy that supports healthy living, internationally recognized Manna offers a wealth of great tasting, high-quality, organic foods that includes a delightful selection of organic teas, as well as dried fruits, and spices. ', '', 1),
('whychooseustxt', 'ge', 'Working with a select group of environmentally responsible farmers throughout Georgia\'s premier agricultural districts, and sharing a core philosophy that supports healthy living, internationally recognized Manna offers a wealth of great tasting, high-quality, organic foods that includes a delightful selection of organic teas, as well as dried fruits, and spices. ', '', 0),
('aboutus', 'en', 'ABOUT US', '', 1),
('aboutus', 'ge', 'ჩვენს შესახებ', '', 0),
('aboutustxt', 'en', 'The company employs 30 full-time staff who administer, manage, and oversee all aspects of operation, is the recipient of Eco Globe and Caucascert organic certificates, and has a pending ISO 22000 certification. ', '', 1),
('aboutustxt', 'ge', 'The company employs 30 full-time staff who administer, manage, and oversee all aspects of operation, is the recipient of Eco Globe and Caucascert organic certificates, and has a pending ISO 22000 certification. ', '', 0),
('missiontxt', 'en', 'We believe that the most crucial for our society and the business community to tackle today, for food, family, and future, encourages you to be passionately Organic!', '', 1),
('missiontxt', 'ge', 'We believe that the most crucial for our society and the business community to tackle today, for food, family, and future, encourages you to be passionately Organic!', '', 0),
('mission', 'en', 'OUR MISSION', '', 1),
('mission', 'ge', 'OUR MISSION', '', 0),
('diff', 'en', 'OUR BLENDS MAKE US DIFFERENT', '', 1),
('diff', 'ge', 'OUR BLENDS MAKE US DIFFERENT', '', 0),
('difftxt', 'en', 'Each product is built upon years of experience and now it will be time-tested for maximum results. \n<br>\nWe can bring you unexpected blends and deliciously vibrant flavors that brighten every day.\n<br>\nOur tea plantations  unique location in Georgia, along with the confluence of both mountain and coastal climates, gives Manna teas their distinctive aroma and taste that you are sure to enjoy. \n', '', 1),
('difftxt', 'ge', 'Each product is built upon years of experience and now it will be time-tested for maximum results. \r\n<br>\r\nWe can bring you unexpected blends and deliciously vibrant flavors that brighten every day.\r\n<br>\r\nOur tea plantations  unique location in Georgia, along with the confluence of both mountain and coastal climates, gives Manna teas their distinctive aroma and taste that you are sure to enjoy. ', '', 0),
('toptxt', 'en', '&#9632; Avoid Chemicals;  \n\n&#9632; Benefit from more nutrients;\n\n&#9632; Enjoy better taste;\n&#9632; Avoid GMO;\n&#9632; Avoid hormones, antibiotics and drugs in animal products;\n&#9632; Preserve our ecosystems;\n&#9632; Reduce pollution and protect water ans soil;\n&#9632; Preserve aricultural diversity;\n&#9632; Support farming directly;', '', 1),
('toptxt', 'ge', '<ol>\n<li>Avoid Chemicals</li>\n<li>Benefit from more nutrients</li>\n<li>Enjoy better taste</li>\n<li>Avoid GMO</li>\n<li>Avoid hormones, antibiotics and drugs in animal products</li>\n<li>Preserve our ecosystems</li>\n<li>Reduce pollution and protect water ans soil</li>\n<li>Preserve aricultural diversity</li>\n<li>Support farming directly</li>\n</ol>\n<p>&nbsp;</p>', '', 0),
('top', 'en', 'TOP 10 REASONS TO GO ORGANIC', '', 1),
('top', 'ge', 'TOP 10 REASONS TO GO ORGANIC', '', 0),
('georgiangreemteament', 'ge', 'ქართული მწვანე ჩაი პიტნით', '', 0),
('georgiangreemteament', 'en', 'Georgian Green Tea with Mint', '', 1),
('georgiangreemteamenttitle', 'en', 'Premium Quality Organic Tea', '', 1),
('georgiangreemteamenttitle', 'ge', 'პრემიუმ ხარისხის ორგანული ჩაი', '', 0),
('georgianblackteamenttext', 'en', '<p>The uniquely flavored &ldquo;Manna&rdquo; Georgian green tea with mint stands out with its classic aroma of green tea merged with a refined aroma of mint.</p>\r\n<p>Consistency: green tea, mint<br />We prepare the premium quality green tea with mint with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia and from wildly growing mint plucked in certified ecologically clean zones.</p>\r\n<p><br />The Health Benefits of Green Tea with Mint<br />As a result of the fusion of the optimal proportion of both ingredients, our green tea with mint retains the health benefits of both plants. It contains antioxidants, aromatic substances, tannins, caffeine, and P and C vitamins. It has a positive impact on health, especially on cardiovascular, circulatory, and nervous systems.</p>', '', 1),
('georgianblackteamenttext', 'ge', '<p>The uniquely flavored &ldquo;Manna&rdquo; Georgian green tea with mint stands out with its classic aroma of green tea merged with a refined aroma of mint.</p>\r\n<p>Consistency: green tea, mint<br />We prepare the premium quality green tea with mint with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia and from wildly growing mint plucked in certified ecologically clean zones.</p>\r\n<p><br />The Health Benefits of Green Tea with Mint<br />As a result of the fusion of the optimal proportion of both ingredients, our green tea with mint retains the health benefits of both plants. It contains antioxidants, aromatic substances, tannins, caffeine, and P and C vitamins. It has a positive impact on health, especially on cardiovascular, circulatory, and nervous systems.</p>', '', 0),
('georgiangreemteamenttext', 'en', 'Premium Quality Organic Tea\n<p>The uniquely flavored “Manna” Georgian green tea with mint stands out with its classic aroma of green tea merged with a refined aroma of mint.\n</p>\n\n<p>&nbsp;</p>\n<p><strong><em>Ingredients: green tea, mint</em></strong></p>\n<p>We prepare the premium quality green tea with mint with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia and from wildly growing mint plucked in certified ecologically clean zones.</p>\n<p>&nbsp;</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>The Health Benefits of Green Tea with Mint</strong></p>\n<p>As a result of the fusion of the optimal proportion of both ingredients, our green tea with mint retains the health benefits of both plants. It contains antioxidants, aromatic substances, tannins, caffeine, and P and C vitamins. It has a positive impact on health, especially on cardiovascular, circulatory, and nervous systems.</p>', '', 1),
('georgiangreemteamenttext', 'ge', '<p><strong><em>პრემიუმ ხარისხის ორგანული ჩაი</em></strong></p>\n\n<p>უნიკალური გემოს მქონე ქართული მწვანე ჩაი პიტნით - მანნა, გამოირჩევა მწვანე ჩაის გამოხატული კლასიკური არომატით, რომელშიც შერწყმულია პიტნის დახვეწილი, გრილი არომატი. \n</p>\n<p>&nbsp;</p>\n<p><strong><em>შემადგენლობა: მწვანე ჩაი, პიტნა</em></strong></p>\n<p>დამზადებულია დასავლეთ საქართველოს მაღალმთიანი რეგიონის ეკოლოგიურად სუფთა პლანტაციებიდან მიღებული ჩაის ნაზი ფოთლებისგან და ველურად მზარდი პიტნისგან, რომელიც იზრდება ეკოლოგიურად სუფთა ზონაში, ან ორგანულ ფერმებში. </p>\n<p>&nbsp;</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong><em>სამკურნალო თვისებები</em></strong></p>\n<p>სწორი პროპორციის და დამუშავების გამო შენარჩუნებული აქვს მასში შემავალი ორივე მცენარის სასარგებლო და გემოვნური თვისებები.  შეიცავს ანტიოქსიდანტებს, არომატულ ნივთიერებებს, ტანინებს, კოფეინს, P და C ვიტამინებს. ახდენს  დადებით ზეგავლენას ჯანმრთელობაზე, განსაკუთრებით გულ-სისხლძარღვთა, სისხლის მიმოქცევის და ნერვულ სისტემებზე.</p>', '', 0),
('blackplum', 'en', 'Black Plum', '', 1),
('blackplum', 'ge', 'შავი ქლიავის ჩირი', '', 0),
('driedpersimon', 'en', 'Dried Persimmon', '', 1),
('driedpersimon', 'ge', 'ხურმის ჩირი', '', 0),
('blackplumtxt', 'en', '<p><strong>Premium Quality Dried Fruit </strong></p>\n<p>The premium quality Manna black prune is a very delicious and healthy snack/dessert that you can consume at any time during the day. The product does not contain any harmful substances or calories and is good for your health.</p>\n<p>&nbsp;</p>\n<p><strong>Consistency &ndash;plum</strong></p>\n<p>We prepare the prune with plum picked in different regions of Georgia. We then process and dry it with modern technology at the Manna processing plant in order to achieve the final product. We preserve the nutritional value of plum in the process of drying, which means that the fruit does not lose its health benefits and entirely retains the vitamins.</p>\n<p>&nbsp;</p>\n<p><strong>The Health Benefits of Black Prune</strong></p>\n<p>Black prune is not just a delicious snack; it is in fact, healthy for your body as it nourishes it with minerals and vitamins B<sub>1</sub>, B<sub>2</sub>, PP, C, and A. It consists of multiple types of natural sugar such as fructose, glucose, and sucrose. Black prune is also energizing, as it contains apple and lemon acids. It is also characterized by antibacterial activity and prevents heart diseases and diabetes.</p>\n<p>The consumption of black prune does not cause weight gain. Moreover, it is often used in modern diets since it contributes to improved metabolism (food is easily digested and is not retained in the form of fat).</p>', '', 1),
('blackplumtxt', 'ge', '<p><strong>მანნას პრემიუმ ხარისხის შავი ქლიავის ჩირი</strong></p><p>&nbsp;</p>\n<p> \nმანნას პრემიუმ ხარისხის შავი ქლიავის ჩირი არის უგემრიელესი და ჯანმრთელი\nდესერტი, რომლის მირთმევაც შეგიძლიათ დღის ნებისმიერ დროს. არ შეიცავს მავნე\nნივთიერებებს, კალორიებს და სასარგებლოა თქვენი ჯანმრთელობისთვის.\n</p><p>&nbsp;</p>\n<p><strong>\nშემადგენლობა - შავი ქლიავი\n</strong></p>\n<p>\nდამზადებულია საქართველოს სხვადასხვა რეგიონში მოყვანილი შავი ქლიავისაგან,\nრომლის ტექნოლოგიური დამუშავება და დაჩირება ხდება „მანნას“ უახლესი ტექნიკით\nაღჭურვილ საწარმოში. დაჩირების პროცესში შენარჩუნებულია შავი ქლიავის\nნუტრიციული ღირებულება, რაც იმას ნიშნავს რომ ხილი არ კარგავს სასარგებლო\nთვისებებს და სრულად ინარჩუნებს ვიტამინების კონცეტრატს.\n</p><p>&nbsp;</p>\n<p><strong>\nსასარგებლო თვისებები\n</strong></p>\n<p>\nშავი ქლიავის ჩირი არამარტო გემრიელი სასუსნავია, არამედ საკმაოდ სასარგებლოა\nთქვენი ორგანიზმისთვის და ამარაგებს მას ვიტამინებით (В1, В2, РР, С, А) და\nმინერალებით. მასში ნატურალური შაქრის რამდენიმე სახეობაა ფრუქტოზა, გლუკოზა\nდა საქაროზა. წარმოადგენს ენერგეტიკულ საშუალებას, ვინაიდან შეიცავს ვაშლისა და\nლიმნის მჟავებს. ახასიათებს ანტიბაქტერიული მოქმედებები და ახდენს გულის\nდაავადებებისა და დიაბეტის პრევენციას. რეკომენდირებულია კუჭის პრობლემების\nდროს.\n</p><p>&nbsp;</p>\n<p>\nშავი ქლიავის ჩირი არ იწვევს წონაში მატებას. უფრო მეტიც მას ხშირად იყენებენ\nთანამედროვე დიეტებში, ვინაიდან ხელს უწყობს საჭმლის მონელებას - საკვები\nადვილად გაიწოვება და არ გროვდება ცხიმის სახით.</p>', '', 0),
('driedpersimontxt', 'en', '<p><strong>Premium Quality Dried Fruit</strong></p>\n<p>The premium quality Manna&rsquo;s dried persimmons is a very delicious and healthy snack/dessert that you can consume at any time during the day. The product does not contain any harmful substances or calories and is good for your health.</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>Consistency &ndash;persimmon</strong></p>\n<p>We produce Manna&rsquo;s dried persimmons by technologically processing two most prominent types of persimmons in Georgia &ndash; Haikume (&ldquo;Karalioki&rdquo;) and Hachiya (&ldquo;Aliagha&rdquo;). We preserve the nutritional value of persimmon in the process of drying, so that &nbsp;fruit do not lose its health benefits and entirely retain&nbsp; vitamins.</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>The Health Benefits of Persimmon </strong></p>\n<p>Dried persimmon is rich in vitamins and microelements. It has a moderate amount of calcium, phosphorus, iron, and other necessary elements. Scientists believe that there is a far greater amount of antioxidants in persimmons than in citruses and more beta-Carotene (an A vitamin precursor) than in carrots. Persimmons are also rich in glucose and fructose. Therefore, just two or three pieces can definitely satisfy hunger. This characteristic of persimmons is of great importance to people suffering from heart disease: the body uses the natural persimmon sugar for nourishing the heart muscle; in the meantime, the glucose level in the blood does not rise to a peak as it usually happens when we consume refined sugar. And finally, persimmons are very rich in iodine.</p>', '', 1),
('driedpersimontxt', 'ge', '<p><strong>პრემიუმ ხარისხის ჩირი</strong></p>\n<p>მანნას პრემიუმ ხარისხის ხურმის ჩირი არის უგემრიელესი და ჯანმრთელი დესერტი,\nრომლის მირთმევაც შეგიძლიათ დღის ნებისმიერ დროს. არ შეიცავს მავნე ნივთიერებებს,\nკალორიებს და სასარგებლოა თქვენი ჯანმრთელობისთვის.</p><p>&nbsp;</p>\n<p><strong>შემადგენლობა - ხურმა</strong></p>\n<p>დამზადებულია საქართველოში გავრცელებული ხურმის სახეობების ჰიაკუმე ანუ\n„კოროლიოკისა“ და ჰაჩია ანუ „ალიაღას“ ნაყოფის ტექნოლოგიური დამუშავებით.\nდაჩირების პროცესში შენარჩუნებულია ხურმის ნუტრიციული ღირებულება, რაც იმას\nნიშნავს რომ ხილი არ კარგავს სასარგებლო თვისებებს და სრულად ინარჩუნებს\nვიტამინების კონცეტრატს.\n</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>სასარგებლო თვისებები</strong></p>\n<p>ხურმის ჩირი უხვად შეიცავს ვიტამინებსა და მიკროელემენტებს, ზომიერად შეიცავს\nკალციუმს, ფოსფორს, რკინას და სხვა აუცილებელ ელემენტებს. მეცნიერებს მიაჩნიათ,\nრომ ხურმაში გაცილებით მეტი ანტიოქსიდანტია, ვიდრე ციტრუსებში, ხოლო ბეტა-\nკაროტინი (A ვიტამინის წინამორბედი) - უფრო მეტი, ვიდრე სტაფილოში. ხურმა ასევე\nდიდი რაოდენობით შეიცავს გლუკოზასა და ფრუქტოზას. ასე რომ, ორი-სამი ცალი\nნაყოფით თავისუფლად შეიძლება შიმშილის გრძნობის დაკმაყოფილება. ხურმის ამ\nთვისებას დიდი მნიშვნელობა აქვს გულის მანკით დაავადებულთათვის: ორგანიზმი\nხურმის &quot;შაქარს&quot; გულის კუნთის საკვებად იყენებს; ამასთან, სისხლში გლუკოზის დონე\nპიკს არ აღწევს, როგორც ეს რაფინირებული შაქრის გამოყენებისას ხდება. დაბოლოს,\nხურმა ძალიან მდიდარია იოდით.\n</p>', '', 0),
('driedappleandpear', 'en', 'Dried Apple and Pear', '', 1),
('driedappleandpear', 'ge', 'ვაშლისა და მსხლის ჩირი', '', 0),
('driedappleandpeartxt', 'en', '<p><strong>Premium Quality Dried Fruit</strong></p>\n<p>The premium quality Manna&rsquo;s dried apples and pears is a very delicious and healthy snack that you can consume at any time during the day. The product does not contain any harmful substances or calories and is good for your health</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>Consistency &ndash;apple, pear</strong></p>\n<p>We prepare a mix of dried apples and pears from fresh&nbsp; fruits picked in different regions of Georgia. We preserve the nutritional value of apple and pear in the process of drying, which means that fruits do not lose its health benefits and entirely retain the vitamins.</p>\n<p>&nbsp;</p>\n<p><strong>The Health Benefits of Apple and Pear</strong></p>\n<p>The apple and pear mix contains pectin and almost all the necessary vitamins: A, PP, C, B, and B<sub>1</sub>. It promotes the propagation of healthy bacteria in the body, improves memory, and develops intellectual ability. Dried apple also improves metabolism and has a prophylactic effect on cancer, as it resists metastases. It also cleanses the blood and is especially recommended to consume in cases of low blood pressure. Dried apples also nourish hair and nails.</p>', '', 1),
('driedappleandpeartxt', 'ge', '<p><strong>პრემიუმ ხარისხის ჩირი</strong></p>\n<p>მანნას პრემიუმ ხარისხის ვაშლისა და მსხლის ჩირი არის უგემრიელესი და ჯანმრთელი\nდესერტი, რომლის მირთმევაც შეგიძლიათ დღის ნებისმიერ დროს. არ შეიცავს მავნე\nნივთიერებებს, კალორიებს და სასარგებლოა თქვენი ჯანმრთელობისთვის.</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>შემადგენლობა - ვაშლი, მსხალი</strong></p>\n<p>დამზადებულია საქართველოს სხვადასხვა რეგიონში მოყვანილი ვაშლისა და\nმსხლისაგან, რომლის ტექნოლოგიური დამუშავება, ოპტიმალური პროპორციით\nშეზავება და დაჩირება ხდება „მანნას“ უახლესი ტექნიკით აღჭურვილ საწარმოში.\nდაჩირების პროცესში შენარჩუნებულია ვაშლისა და მსხლის ნუტრიციული ღირებულება,\nრაც იმას ნიშნავს რომ ხილი არ კარგავს სასარგებლო თვისებებს და სრულად ინარჩუნებს\nვიტამინების კონცეტრატს.</p>\n<p>&nbsp;</p>\n<p><strong>სასარგებლო თვისებები</strong></p>\n<p>ვაშლისა და მსხლის ჩირი შეიცავს თითქმის ყველა აუცილებელ ვიტამინს: A-ს, PP-ს, C-ს,\nB-ს, B1-ს, ასევე - პექტინს. ხელს უწყობს ორგანიზმში სასარგებლო ბაქტერიების\nგამრავლებას, აუმჯობესებს მეხსიერებას, ანვითარებს გონებრივ შესაძლებლობებს,\nაძლიერებს იმუნიტეტს, ხელს უწყობს ტოქსინების გამოდევნას. აუმჯობესებს\nნივთიერებათა ცვლას, ახდენს კიბოს პროფილაქტიკას და ებრძვის მეტასტაზებს.\nწმენდს სისხლს და კარგია დაბალი წნევის დროს, ამაგრებს თმას, ფრჩხილებს.</p>', '', 0),
('geoteabilberry', 'en', 'Georgian Black Tea with Bilberry Leaf', '', 1),
('geoteabilberry', 'ge', 'ქართული შავი ჩაი მოცვით', '', 0),
('geoteabilberrytxt', 'en', 'Premium Quality Tea\n<p>The Georgian Black Tea with Bilberry Leaf has a unique, pleasantly sour aroma. This tea is characterized by its toning effect and is good for your health.  Georgian Black Tea with Bilberry Leaf regulates blood sugar levels in customers with diabetes.  </p>\n<p>&nbsp;</p>\n<p><strong><em>Ingredients:  Black tea, Bilberry </em></strong></p>\n<p>We prepare the premium quality Black tea with Bilberry Leaf with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia and wildly growing dried and twisted bilberry leaves plucked in the mountainous regions of Georgia. The bilberry leave goes through a specific technological cycle during which it experiences fermentation. As a result, we end up with the final product – Black Tea with bilberry.</p>\n<p>&nbsp;</p>\n<p><strong><em>The Health Benefits of Black Tea with Bilberry </em></strong></p>\n<p>Black Tea with Bilberry contains antioxidants, aromatic substances, tannins, caffeine, and vitamins P and C. ascorbic acid and carotene compounds, which together improve eyesight. Bilberry also contains nemertelline, known as the herbal insulin, for which reason, bilberry is recommended for diabetes patients. It is characterized by its strong toning effect, is widely consumed to offset the impact of diarrhea, anemia, and formation of kidney stones.</p>', '', 1),
('geoteabilberrytxt', 'ge', '<p><strong>პრემიუმ ხარისხის ჩაი</strong></p>\n\n<p>საუცხოო გემოს მქონე მანნას ქართული შავი ჩაი მოცვით გამოირჩევა, მოცვისთვის სახასიათო, სასიამოვნო და მომჟავო არომატით. არის ძლიერი მატონიზირებელი საშუალება და სასარგებლოა თქვენი ჯანმრთელობისთვის. დიაბეტით დაავადებულთათვის არეგულირებს სისხლში შაქრის დონეს  </p>\n<p>&nbsp;</p>\n<p><strong>შემადგენლობა: შავი ჩაი, მოცვი</strong></p>\n\n<p>დამზადებულია დამზადებულია დასავლეთ საქართველოს მაღალმთიანი რეგიონის ეკოლოგიურად სუფთა პლანტაციებიდან მიღებული ჩაის ნაზი ფოთლებისგან და მაღალმთიან რეგიონებში ველურად მზარდი მოცვის გამომშრალი და გრეხილი ფოთლისგან. </p>\n<p>&nbsp;</p>\n<p><strong>სამკურნალო თვისებები</strong></p>\n\n<p>ხასიათდება ძლიერი მატონიზირებელი ეფექტით და  სასარგებლოა თქვენი ჯანმრთელობისთვის. შეიცავს ანტი ოქსიდანტებს, არომატულ ნივთიერებებს, ტანინებს, კოფეინს, P და C ვიტამინებს, ასკორბინის მჟავას, კაროტინაიდულ ნაერთებს, რომლებიც აუმჯობესებენ მხედველობას. აგრეთვე ნეომირტილინს, რომელიც მცენარეული ინსულინის სახელით არის ცნობილი, რის გამოც რეკომენდებულია დიაბეტის შემთხვევაში. ხასიათდება ძლიერი მატონიზირებელი ეფექტით</p>', '', 0),
('geominttea', 'en', 'Georgian Mint Tea', '', 1),
('geominttea', 'ge', 'ქართული პიტნის ჩაი', '', 0),
('geomintteatitle', 'en', 'Organic Herbal Tea', '', 1),
('geomintteatitle', 'ge', 'ორგანული მცენარეული ჩაი', '', 0),
('geomintteatxt', 'en', 'Organic Herbal Tea\n<p>&nbsp;</p>\n<p>Soft and pleasantly flavored Georgian mint aromatic tea – “Manna” – improves your mood, calms your mind and relieves stress and tension. It is an effective means of quitting smoking and other harmful habits.</p>\n<p>&nbsp;</p>\n<p><strong><em>Ingredients:  mint</em></strong></p>\n<p>We prepare the premium quality mint tea by plucking wildly growing mint leaves in various regions of Georgia. The leaves are plucked during the time of blooming when the ether consistency is the highest. With the help of a technological cycle, the mix is processed into small fractions and packaged into disposable packets. </p>\n<p>&nbsp;</p>\n<p><strong>The Health Benefits of Mint Tea</strong></p>\n<p>Mint tea stimulates the heart rate and regulates blood pressure and headache. It is used for the treatment of hypertension, stenocradia, and atherosclerosis. It regulates stress, neurosis, and sensitivity and improves sleep. Mint tea is also a good treatment for respiratory problems, diarrhea, and muscular and intestinal pains. It will help you combat insomnia and headaches and will reduce your fever. Mint tea is used in modern diets, as it reduces appetite. It also significantly lessens sweating and heat discomfort. </p>', '', 1),
('geomintteatxt', 'ge', '<p>რბილი, სასიამოვნო გემოსა და  გამოხატული პიტნის არომატის მქონე ქართული პიტნის ჩაი - მანნა აუმჯობესებს თქვენს განწყობას, ამშვიდებს გონებას და ხსნის სტრესს, დაძაბულობას. ეფექტური საშუალებაა სიგარეტისა და სხვა მავნე ჩვევებისთვის თავის დასანებებლად.\n</p\n<p>&nbsp</p>\n<p><strong><em>შემადგენლობა - ორგანული პიტნა</em></strong></p>\n\n<p>დამზადებულია საქართველოს სხვადასხვა რეგიონებში ბუნებრივად და ველურად მზარდი პიტნის ფოთლებისაგან.  კრეფენ ხელით ყვავილობის დროს, როდესაც ეთერზეთების შემცველობა ყველაზე მაღალია.</p>\n<p>&nbsp</p>\n<p><strong><em>სამკურნალო თვისებები</em></strong></p>\n\n<p>\nპიტნის ჩაი ასტიმულირებს გულის მუშაობას, აქვეითებს არტერიულ წნევას, თავის ტკივილს, გამოიყენება ჰიპერტენზიის, სტენოკარდიისა და ათეროსკლეროზის მკურნალობისას. იგი ხსნის გაღიზიანებას, ნევროზულობას, აუმჯობესებს ძილს, აქვეითებს აღგზნებადობას. გარდა ამისა, პიტნის ჩაი ძლიერი საშუალებაა ცუდი სუნთქვის, დიარეის, კუნთებისა და ნაწლავების ტკივილების დროს. დაგეხმარებათ უძილობის დაძლევაში, შვებას მოგცემთ თავის ტკივილისას, აქტიურად აქვეითებს ტემპერატურას. პიტნის ჩაი გამოიყენება თანამედროვე დიეტებში, ვინაიდან ამცირებს მადას.  მნიშვნელოვნად ამცირებს ოფლიანობას და სიცხისგან შექმნილ დისკომფორტს.\n</p>', '', 0),
('geosweetbriertea', 'en', 'Georgian Sweetbrier Tea', '', 1),
('geosweetbriertea', 'ge', 'ქართული ასკილის ჩაი ', '', 0),
('geosweetbrierteatitle', 'en', 'Organic Herbal Tea', '', 1),
('geosweetbrierteatitle', 'ge', 'ორგანული მცენარეული ჩაი', '', 0),
('geosweetbrierteatxt', '', '<p>The peculiarly flavored and pleasantly delicious &ldquo;Manna&rdquo; Georgian sweetbrier tea contains multiple vitamins. It creates a peasant mood and is good for your health.</p>\n<p>&nbsp;</p>\n<p><strong><em>Consistency: &nbsp;sweetbrier</em></strong></p>\n<p>We prepare the premium quality sweetbrier tea from wildly growing sweetbrier shoots plucked in ecologically clean zones and organic farms. Sweetbrier is cleansed, dried, and broken into pieces until ready under a specific technological cycle. As a result, we get a premium quality sweetbrier tea.</p>\n<p>&nbsp;</p>\n<p><strong>The Health Benefits of Sweetbrier Tea</strong></p>\n<p>Sweetbrier naturally concentrates various vitamins. It consists of vitamins B<sub>2</sub>, K, P, and E and is especially rich in vitamin C. Sweetbrier also contains carotene. In addition to all this, it has various health benefits, strengthens the immune system, and normalizes metabolism.</p>', '', 1),
('geosweetbrierteatxt', 'ge', '<p>ასკილისთვის დამახასიათებელი სპეციფიკური, სასიამოვნო გემოსა და ბუნებრივი არომატის მქონე ქართული ასკილის ჩაი - მანნა, არის მრავალი ვიტამინის ბუნებრივი კონცეტრატი. ქმნის საუკეთესო განწყობას და სასარგებლოა თქვენი ჯანმრთელობისთვის.  </p>\n<p>&nbsp;</p>\n<p><strong><em>შემადგენლობა - ასკილი</em></strong></p>\n<p>დამზადებულია ველურად მზარდი ასკილის ნაყოფისგან, რომელიც იზრდება ეკოლოგიურად სუფთა ზონაში, ან ორგანულ ფერმებში. შესაბამისი ტექნოლოგიური ციკლით ხდება ასკილის დასუფთავება, გამოშრობა, დაქუცმაცება და მიიღება საბოლოო პროდუქტი -  ასკილის ჩაი.</p>\n<p>&nbsp;</p>\n<p><strong>სამკურნალო თვისებები</strong></p>\n<p>არის მრავალი ვიტამინის ბუნებრივი კონცენტრატი. შეიცავს B2, K, P, E  ვიტამინებს. განსაკუთრებით მდიდარია ნატურალური C ვიტამინით, ასევე შეიცავს კაროტინს. აქვს მრავალმხრივი სამკურნალო დანიშნულება, აძლიერებს იმუნიტეტს, ახდენს ნივთიერებათა ცვლის ნორმალიზებას.  </p>', '', 0),
('geothymetea', 'en', 'Georgian Thyme Tea', '', 1),
('geothymetea', 'ge', 'ქართული ბეგქონდარის ჩაი ერთჯერად პაკეტებში', '', 0),
('geothymeteatitle', 'en', 'Organic Tea in Disposable Packets', '', 1),
('geothymeteatitle', 'ge', 'ორგანული მცენარეული ჩაი ერთჯერად პაკეტებში', '', 0),
('geothymeteatxt', 'en', 'Organic Herbal Tea\n<p>&nbsp;</p>\n<p>Light, plant flavored and pleasantly aromatic “Manna” Georgian thyme tea creates a mountain fragrance in your cup. It also has great health benefits. </p>\n<p>&nbsp;</p>\n<p><strong><em>Ingredients: thyme</em></strong></p>\n<p>We prepare the premium quality thyme tea from wildly growing thyme shoots plucked in the rocky parts of the mountainous regions of Georgia. Thyme is plucked by hand in the time of blooming which lasts for two weeks. It is then processed with a technological cycle in a way that its aroma is not lost. </p>\n<p>&nbsp;</p>\n<p><strong>The Health Benefits of Thyme Tea </strong></p>\n<p>Thyme has antibacterial, wound-healing, soothing, bronchi-widening, anti-helminthes and many other healthy benefits. It regulates metabolism and is healthy for those with weight problems. Thyme tea is effective in combatting insomnia, rheumatoid arthritis, lung diseases, asthma and bronchitis. It is a natural source of folium acid and vitamins A, B, and C. The daily consumption of thyme tea will help you treat or avoid tinnitus, chronic tiredness, sclerosis, fibromyalgia, vertigo, rheumatoid arthritis, etc. </p>', '', 1),
('geothymeteatxt', 'ge', '<p>მსუბუქი, მცენარეული გემოსა და მძაფრი, სასიამოვნო არომატის მქონე ქართული ბეგქონდარას ჩაი - მანნა, თქვენ ფინჯანში ქმნის დაუვიწყარ მთის სურნელებას და დადებითად მოქმედებს ჯანმრთელობაზე.</p>\n<p>&nbsp;</p>\n<p><strong><em>შემადგენლობა - ორგანული ბეგქონდარა</em></strong></p>\n<p>დამზადებულია საქართველოს მთიანი რეგიონში, კლდიან ადგილებში ბუნებრივად და ველურად მზარდი არომატული ბეგქონდარას ფოთლებისაგან. კრეფენ ხელით ყვავილობის დროს, რომელიც გრძელდება ორი კვირის განმავლობაში. ტექნოლოგიური ციკლით ხდება ნარევის მცირე ფრაქციებად დამუშავება და ერთჯერად პაკეტებში დაფასოება.</p>\n<p>&nbsp;</p>\n<p><strong><em>სამკურნალო თვისებები</em></strong></p>\n<p>ბეგქონდარას გააჩნია ანტიბაქტერიული, ჭრილობის შემახორცებელი, გამაყუჩებელი, ბრონქების გამაფართოებელი, ჭიების საწინააღმდეგო და სხვა უამრავი სასარგებლო თვისებები. ის აბალანსებს ნივთიერებათა ცვლის პროცესს, სასარგებლოა მათთვის ვისაც წონის კორექტირება სურს. ბეგქონდარას ჩაი ეფექტურია უძილობის, რევმატული ართრიტის, ფილტვების დაავადების, ასთმისა და ბრონხიტის დროს. ის წარმოადგენს ფოლიუმის მჟავის, A, B და C ვიტამინების ბუნებრივ წყაროს. ყოველდღიურად ბეგქონდარას ჩაის მირთმევით, შეძლებთ უმკურნალოთ ან თავიდან აირიდოთ შუილი ყურებში, ქრონიკული დაღლილობის სინდრომი, სკლეროზი, ფიბრომიალგია, ვეტრიგო, რევმატოიდული ართრიტი და ა.შ.</p>', '', 0),
('geogreenteamint', 'en', 'Georgian Green Tea with Mint', '', 1),
('geogreenteamint', 'ge', 'ქართული მწვანე ჩაი პიტნით  ერთჯერად პაკეტებში', '', 0),
('geogreenteaminttitle', 'en', 'Organic Tea in Disposable Packets', '', 1),
('geogreenteaminttitle', 'ge', 'ორგანული ჩაი ერთჯერად პაკეტებში', '', 0),
('geogreenteaminttxt', 'en', 'Organic Tea \n<p>&nbsp;</p>\n<p>The uniquely flavored “Manna” Georgian green tea with mint in disposable packets stands out with its classic aroma of green tea merged with a refined aroma of mint.</p>\n<p>&nbsp;</p>\n<p><strong><em>Ingredients: green tea, mint</em></strong></p>\n<p>We prepare the premium quality green tea with mint with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia and from wildly growing mint plucked in certified ecologically clean zones. With the help of a technological cycle, the mix is processed into small fractions and packaged into disposable packets. </p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>The Health Benefits of Green Tea with Mint</strong></p>\n<p>As a result of the fusion of the optimal proportion of both ingredients, our green tea with mint retains the health benefits of both plants. It contains antioxidants, aromatic substances, tannins, caffeine, and P and C vitamins. It has a positive impact on health, especially on cardiovascular, circulatory, and nervous systems.</p>', '', 1),
('geogreenteaminttxt', 'ge', '<p>უნიკალური გემოს მქონე მანნას ქართული მწვანე ჩაი პიტნით ერთჯერად პაკეტებში, გამოირჩევა მწვანე ჩაის გამოხატული კლასიკური არომატით, რომელშიც შერწყმულია პიტნის დახვეწილი, გრილი არომატი. </p>\n<p>&nbsp;</p>\n<p><strong><em>შემადგენლობა: მწვანე ჩაი, პიტნა</em></strong></p>\n<p>დამზადებულია დასავლეთ საქართველოს მაღალმთიანი რეგიონის ეკოლოგიურად სუფთა პლანტაციებიდან მიღებული ჩაის ნაზი ფოთლებისგან და ველურად მზარდი პიტნისგან, რომელიც იზრდება ეკოლოგიურად სუფთა ზონაში, ან ორგანულ ფერმებში. ტექნოლოგიური ციკლით ხდება ნარევის მცირე ფრაქციებად დამუშავება და ერთჯერად პაკეტებში დაფასოება.</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong><em>სამკურნალო თვისებები</em></strong></p>\n<p>სწორი პროპორციის და დამუშავების გამო შენარჩუნებული აქვს მასში შემავალი ორივე მცენარის სასარგებლო და გემოვნური თვისებები.  შეიცავს ანტიოქსიდანტებს, არომატულ ნივთიერებებს, ტანინებს, კოფეინს, P და C ვიტამინებს. ახდენს  დადებით ზეგავლენას ჯანმრთელობაზე, განსაკუთრებით გულ-სისხლძარღვთა, სისხლის მიმოქცევის და ნერვულ სისტემებზე.</p>', '', 0),
('geoblackthymetea', 'en', 'Georgian Black Tea with Thyme', '', 1),
('geoblackthymetea', 'ge', 'ქართული შავი ჩაი ბეგქონდარით ერთჯერად პაკეტებში', '', 0),
('geoblackthymeteatitle', 'en', 'Organic Tea in Disposable Packets', '', 1),
('geoblackthymeteatitle', 'ge', 'ორგანული მცენარეული ჩაი ერთჯერად პაკეტებში', '', 0),
('geoblackthymeteatxt', 'en', 'Organic Tea \n<p>&nbsp;</p>\n<p>The uniquely flavored “Manna” Georgian green tea with mint in disposable packets stands out with its classic aroma of green tea merged with a refined aroma of mint.</p>\n<p><strong><em>Ingredients: green tea, mint</em></strong></p>\n<p>\nWe prepare the premium quality green tea with mint with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia and from wildly growing mint plucked in certified ecologically clean zones. With the help of a technological cycle, the mix is processed into small fractions and packaged into disposable packets. \n</p>\n<p><strong><em>The Health Benefits of Green Tea with Mint</em></strong></p>\n<p>\nAs a result of the fusion of the optimal proportion of both ingredients, our green tea with mint retains the health benefits of both plants. It contains antioxidants, aromatic substances, tannins, caffeine, and P and C vitamins. It has a positive impact on health, especially on cardiovascular, circulatory, and nervous systems.\n</p>', '', 1),
('geoblackthymeteatxt', 'ge', '<p>გამორჩეული გემოს მქონე მანნას ქართული შავი ჩაი ბეგქონდარით გამოირჩევა მკვეთრი, გამოხატული არომატით, რომელსაც ქმნის შავი ჩაისა და ბეგქონდარის მძაფრი არომატების შეზავება. ხასიათდება ძლიერი მატონიზირებელი ეფექტით</p><p>&nbsp;</p>\n<p><strong><em>შემადგენლობა - შავი ჩაი, ბეგქონდარა </em></strong></p>\n<p>დამზადებულია დასავლეთ საქართველოს მაღალმთიანი რეგიონის ეკოლოგიურად სუფთა პლანტაციებიდან მიღებული ჩაის ნაზი ფოთლებისგან და საქართველოს მთიანი რეგიონში, კლდიან ადგილებში ბუნებრივად და ველურად მზარდი არომატული ბეგქონდარას ფოთლებისაგან. ტექნოლოგიური ციკლით ხდება ნარევის მცირე ფრაქციებად დამუშავება და ერთჯერად პაკეტებში დაფასოება.</p>\n</p><p>&nbsp;</p>\n<p><strong><em>სამკურნალო თვისებები</em></strong></p>\n<p>\nშეიცავს ასკორბინის მჟავას, P ვიტამინს, კაროტინაიდულ ნაერთებს, რომლებიც აუმჯობესებენ მხედველობას. აგრეთვე ნეომირტილინს, რომელიც მცენარეული ინსულინის სახელით არის ცნობილი, რის გამოც რეკომენდებულია დიაბეტის შემთხვევაში. ასევე ფართოდ გამოიყენება დიარეის, ანემიის, შარდკენჭოვანი  დაავადებების მკურნალობის დროს. ხასიათდება ძლიერი მატონიზირებელი ეფექტით\n</p>', '', 0),
('ourproducts', 'en', 'OUR PRODUCTS', '', 1),
('ourproducts', 'ge', 'ჩვენი პროდუქცია', '', 0),
('abouttxt', 'en', '<p>Manna is a company which operates agricultural production plants located in Saguramo – ecologically clean village in East Georgia.</p>  \n\n<p>Our team is made up of the leading specialists in the field. The company has received international recognition. it is a recipient of Eco Globe and Caucascert certificates for bio-goods production.</p>\n\n<p>The “MANNA” plant presents entirely new infrastructure and is equipped with modern technological machinery.</p>\n\n<p>The production is funded by the Ministry of Agriculture of Georgia in the framework of its agro-project and by private investments.</p>\n\n<p>The United States Agency for International Development provides marketing- and consulting-related support under it’s REAP project.</p> ', '', 1),
('abouttxt', 'ge', '<p>2017 წელს საქართველოში ახალი ტექნოლოგიებით აღჭურვილი სოფლის მეურნეობის\nპროდუქტების გადამამუშავებელი და დამფასოებელი საწარმო გაიხსნა. საწარმო\nმდებარეობს სოფელ საგურამოში, ეკოლოგიურად სუფთა გარემოში. წარმოებაში\nხორციელდება ბიო ჩაისა და ბიო მცენარეებისგან სხვადასხვა ჩაისა და ბუკეტების შექმნა\nდა დაფასოება, სანელებლებისა და ჩირის წარმოება.</p>  \n\n<p>ჩვენი გუნდი შემდგარია წამყვანი სპეციალისტებისგან, რომლებსაც მრავალწლიანი\nგამოცდილება გააჩნიათ სოფლის მეურნეობის მართვისა და წარმოების სფეროში.\nსაწარმოს ფინანსური და ორგანიზაციული მართვა ხორციელდება კომპანიაში\nდანერგილი ERP-ის სისტემის მეშვეობით. ტექნოლოგიური პროცესების სრულყოფილ\nდაცვას უზრუნველყოფენ დარგისა და სურსათის უსაფრთხოების პროფესიონალი\nსპეციალისტები.</p>\n\n<p>„მანნას“ საწარმოო წარმოადგენს სრულიად ახლად შექმნილ ინფრასტრუქტურას და იგი\nაღჭურვილია უახლესი ტექნოლოგიის დანადგარებით.\nსაწარმოო დაფინანსებულია სოფლის მეურნეობის სამინისტროს ერთიანი აგრო\nპროექტის ფარგლებში და დამფუძნებლების მიერ ინვესტირებული თანხებით.\nმარკეტინგული და საკონსულტაციო მხარდაჭერა ხორციელდება აშშ-ის საერთაშორისო\nგანვითარების სააგენტოს USAID REAP - ის პროექტის თანადაფინანსებით.</p>\n', '\r\n\r\n', 0),
('ourproductions', 'en', 'Our Factory', '', 1),
('ourproductions', 'ge', 'ჩვენი წარმოება', '', 0),
('ourproductstxt', 'en', '<p>We use high quality ecologically clean raw materials from different regions of Georgia for our production. </p>\n\n<p>We produce dried fruit, bio-tea with different herb combinations, and a variety of seasonings.</p>\n\n<p>The company employs 30 full-time staff who administer, manage, and oversee all aspects of operation, is the recipient of Eco Globe and Caucascert organic certificates, and has a pending ISO 22000 certification. </p> ', '', 1),
('ourproductstxt', 'ge', '<p>\nჩვენთან წარმოებაში გამოიყენება მაღალი ხარისხის ეკოლოგიურად სუფთა ნედლეული\nსაქართველოს სხვადასხვა რეგიონიდან.\n</p>\n<p>\nჩვენ ვაწარმოებთ ჩირს, ბიო ჩაის სხვადასხვა ბალახეული ნარევებით და სანელებლების\nფართო არჩევანს.\n</p>\n<p>\nწარმოების პროცესში დაცულია ISO 22000-ისა და HACPP-ის სტანდარტები.\nსერტიფიცირება და აუდიტი ხორციელდება ცნობილი გერმანული კომპანია TUV-ის\nაკრედიტირებული ექსპერტების მიერ.\n</p>\n<p>\nკომპანიას მოპოვებული აქვს საერთაშორისო აღიარებული Eco Globe-ისა და\n„კავკასსეტის“ ბიო პროდუქციის წარმოების სერტიფიკატი.\n</p>\n<p>\nპროდუქციის პირველადი ლაბორატორიული შემოწმება ხორციელდება წარმოებაში\nაღჭურვილი ლაბორატორიის მეშვეობით, ხოლო საბოლოო შემოწმებას გადის\nაკრედიტირებულ ლაბორატორიებში.\n</p>', '', 0),
('gallerry', 'en', 'Gallery', '', 1),
('gallerry', 'ge', 'გალერეა', '', 0),
('blackplumprep', 'en', 'Preparation steps', '', 1),
('blackplumprep', 'ge', 'მომზადების წესი', '', 0),
('certificates', 'en', 'Certificates', '', 1),
('certificates', 'ge', 'სერტიფიკატები', '', 0),
('certificatestxt', 'en', 'The production process satisfies ISO 22000 food safety requirements and HACCP\nprocedures. The company is under process certification by TUV SUD', '', 1),
('certificatestxt', 'ge', 'The production process satisfies ISO 22000 food safety requirements and HACCP\r\nprocedures. The company is under process certification by TUV SUD', '', 0),
('geoblackrose', 'en', '<strong>Georgian Black Tea with Rose hip</strong>', '', 1),
('geoblackrose', 'ge', '<strong>Georgian Black Tea with Rose hip</strong>', '', 0),
('geoblackrosetitle', 'en', 'Organic Tea ', '', 1),
('geoblackrosetitle', 'ge', 'Organic Tea ', '', 0),
('geoblackrosetext', 'en', 'Organic Tea\n<p>&nbsp;</p>\n<p>The uniquely flavored “Manna” Georgian black tea with Rose hip stands out with its strong aroma created by black tea, with a pleasantly delicious aroma of Rose hip. </p>\n<p>&nbsp;</p>\n<p><strong><em>Ingredients: black tea, Rose hip</em></strong></p>\n<p>We prepare the premium quality black tea with Rose hip with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia and wildly growing Rose hip shoots plucked in the ecologically clean zones and organic farms. With the help of a technological cycle, the mix is processed into small fractions and packaged into disposable packets. </p>\n<p>&nbsp;</p>\n<p><strong>The Health Benefits of Black Tea with Rose hip</strong></p>\n<p>Black Tea with Rose hip contains antioxidants, aromatic substances, tannins, caffeine, and vitamins P, C, B2, K, and E and is especially rich in vitamin C. In addition to all this, it has various health benefits, strengthens the immune system, and normalizes metabolism.  </p>', '', 1),
('geoblackrosetext', 'ge', 'Organic Tea\r\n<p>&nbsp;</p>\r\n<p>The uniquely flavored “Manna” Georgian black tea with Rose hip stands out with its strong aroma created by black tea, with a pleasantly delicious aroma of Rose hip. </p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>Ingredients: black tea, Rose hip</em></strong></p>\r\n<p>We prepare the premium quality black tea with Rose hip with tender tea shoots plucked from ecologically clean plantations in the eastern mountainous regions of Georgia and wildly growing Rose hip shoots plucked in the ecologically clean zones and organic farms. With the help of a technological cycle, the mix is processed into small fractions and packaged into disposable packets. </p>\r\n<p>&nbsp;</p>\r\n<p><strong>The Health Benefits of Black Tea with Rose hip</strong></p>\r\n<p>Black Tea with Rose hip contains antioxidants, aromatic substances, tannins, caffeine, and vitamins P, C, B2, K, and E and is especially rich in vitamin C. In addition to all this, it has various health benefits, strengthens the immune system, and normalizes metabolism.  </p>', '', 0),
('cookies', 'en', 'COOKIES', '', 1),
('cookies', 'ge', 'COOKIES', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminstrators`
--
ALTER TABLE `adminstrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `max_news`
--
ALTER TABLE `max_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_products`
--
ALTER TABLE `our_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seen_count`
--
ALTER TABLE `seen_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whychoose`
--
ALTER TABLE `whychoose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_langpak`
--
ALTER TABLE `_langpak`
  ADD PRIMARY KEY (`lng_id`,`id`),
  ADD KEY `main` (`main`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `max_news`
--
ALTER TABLE `max_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `our_products`
--
ALTER TABLE `our_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `seen_count`
--
ALTER TABLE `seen_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `whychoose`
--
ALTER TABLE `whychoose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
