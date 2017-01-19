-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 18 Janvier 2017 à 08:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ptdw`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'amine', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `alphabet`
--

CREATE TABLE IF NOT EXISTS `alphabet` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `alphabet` varchar(8) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

--
-- Contenu de la table `alphabet`
--

INSERT INTO `alphabet` (`id`, `alphabet`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H'),
(9, 'I'),
(10, 'J'),
(11, 'K'),
(12, 'L'),
(13, 'M'),
(14, 'N'),
(15, 'O'),
(16, 'P'),
(17, 'Q'),
(18, 'R'),
(19, 'S'),
(20, 'T'),
(21, 'U'),
(22, 'V'),
(23, 'W'),
(24, 'X'),
(25, 'Y'),
(26, 'Z');

-- --------------------------------------------------------

--
-- Structure de la table `commentairenews`
--

CREATE TABLE IF NOT EXISTS `commentairenews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `idUser` int(11) NOT NULL,
  `idNews` int(11) NOT NULL,
  `valider` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `commentairenews`
--

INSERT INTO `commentairenews` (`id`, `commentaire`, `idUser`, `idNews`, `valider`) VALUES
(1, 'lkznefÃ¹', 34, 5, 1),
(2, 'mL,df', 34, 5, 0),
(3, 'l,*msl,dvmf,', 34, 5, 1),
(4, 'MK?sdmKNFMZd*f', 34, 5, 1),
(5, 'c''est un bon article ', 34, 5, 1),
(6, 'test', 34, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `conference`
--

CREATE TABLE IF NOT EXISTS `conference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `UrlConf` varchar(255) NOT NULL,
  `annee` text NOT NULL,
  `dateSoumission` date NOT NULL,
  `dateDeroulement` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `conference`
--

INSERT INTO `conference` (`id`, `titre`, `description`, `imgUrl`, `UrlConf`, `annee`, `dateSoumission`, `dateDeroulement`) VALUES
(1, 'Advances in Financial Mathematics', 'La confï¿½rence est organisï¿½e dans le cadre de la chaire "Risques Financiers" et porte sur les mathï¿½matiques financiï¿½res.', 'undefined', 'https://fin-risks2017.sciencesconf.org/', '2017', '2017-01-10', '2017-01-20'),
(2, 'Advances in Financial Mathematics', 'La confï¿½rence est organisï¿½e dans le cadre de la chaire "Risques Financiers" et porte sur les mathï¿½matiques financiï¿½res.', 'https://thumb.ccsd.cnrs.fr/8118775/medium', 'https://fin-risks2017.sciencesconf.org/', '2017', '2017-01-10', '2017-01-20'),
(3, 'Seminary of the Division Civil Safety and Traffic', 'The goal of the seminary is to organize exchanges between the members of the division Civil Safety and Traffic of the JSC, as well as with colleagues from the JSC. The topics focus on (but are not limited to): - Pedestrian dynamics (data collection and analysis, modelling and simulation) - Traffic flow (data analysis, modelling and simulation) - Fire Safety (modelling and simulation) - Collective behavior (modelling and simulation). The presentations can be own works, or presentationa of works/articles borrowed from the literature.\r\n', 'https://thumb.ccsd.cnrs.fr/8132187/medium', 'http://cst-seminar.sciencesconf.org/', '2016', '2016-11-09', '2016-12-09'),
(4, 'Conception, fabrication et gestion de la ville durable en Asie', 'Ce colloque international, qui se tiendra à Lille les 12 et 13 janvier 2017, se propose de contribuer au débat d''idées sur les modalités et la fabrique de la ville durable en Asie.\r\n', 'https://thumb.ccsd.cnrs.fr/7859613/medium', 'https://asie2017.sciencesconf.org/', '2015', '2015-09-10', '2015-11-20'),
(5, 'Atelier Final du Programme RIPIECSA et Prospective du reseau AMMANET\r\n\r\n', 'Le Programme RIPIECSA est financé par le Ministère Français des Affaires Etrangères et Européennes pour la période 2007-2011. Le programme RIPIECSA soutient 25 projets de recherche sur les interactions entre les sociétés et leurs milieux dans un contexte de variabilité et de changement du climat en Afrique de l''Ouest. Il est piloté par l’Institut de Recherche pour le Développement (IRD) et mis en oeuvre par l''Agence Inter-Etablissements de Recherche pour le Développement (AIRD). L''Atelier final du programme RIPIECSA est prévu du 18 au 21 Octobre à Cotonou. 1) Les deux premières journées du 18 et du 19 octobre, seront consacrées au bilan scientifique et à l’impact du programme sur les activités scientifiques sur le changement climatique en Afrique. 2) Le 20 octobre permettra d’identifier la contribution de la communauté des chercheurs aux plans d’actions et aux missions des institutions engagées dans les questions d’adaptation et de lutte contre les effets néfastes des changements du climats en Afrique. Les conclusions de ces journées aideront à préciser le plan d''action 2012-2015 du réseau AMMANET (réseau de chercheurs sur les sciences de l''environnement et du climat en Afrique) qui a contribué à la mise en oeuvre de RIPIECSA. 3) Le 21 octobre, cet atelier se conclura par une consultation inter-institutionnelle sur la suite de RIPIECSA, et plus particulièrement, sur le plan d''action 2012-2015 du réseau AMMANET dont l’objectif est (i) d’identifier et développer des applications de la recherche les plus à même de présenter une plus value pour le développement des pays du sud ; (ii) de développer un dialogue plus étroit entre recherche, développement et décideurs pour améliorer les outils d’aide à la décision et à la planification, les systèmes d’alerte, la formation des cadres des services techniques ; (iii) de proposer localement une offre d’expertises de haut niveau à travers le réseau AMMANET pour contribuer à la mise en œuvre des plans d’actions et programmes régionaux sur l’environnement.\r\n', 'https://thumb.ccsd.cnrs.fr/1643853/medium', 'https://ripiecsa.sciencesconf.org/', '2014', '2014-08-13', '2014-11-14'),
(6, 'Édition des actes de "No(s) Limit(es)" 1er Congrès de l''Afea', 'L''Afea s''est attelé prioritairement à la mise en place d''un congrès triennal de l''anthropologie, qui s''organisera tour à tour dans différentes villes. La première édition s''est tenue du 21 au 24 septembre 2011 à Paris, à l''École des hautes études en sciences sociales. Le principe d''une co-organisation avec les organismes universitaires ou de recherche qui ont accueilli le congrès nous a semblé essentiel. Un groupe de travail, dont la composition est amenée à évoluer et à se renouveler d''un congrès à l''autre, a été chargé de proposer l''architecture du congrès, de définir une thématique directrice et rédiger un appel à candidature pour le lieu d''accueil soumis aux départements universitaires et laboratoires', 'https://thumb.ccsd.cnrs.fr/2184467/medium', 'http://afea2011.sciencesconf.org', '2017', '2016-12-30', '2017-01-25'),
(7, 'Ecole Joliot Curie\r\n\r\n', '', 'https://thumb.ccsd.cnrs.fr/1643786/medium', 'http://ejc2011.sciencesconf.org', '2016', '2016-06-06', '2016-08-27'),
(8, 'Pan European Voice Conference\r\n\r\n', 'PEVOC9, co-organisée par le LPL (Aix-en-Provence) et par GIPSA-lab (Grenoble)\r\n', 'https://thumb.ccsd.cnrs.fr/1643756/medium', 'http://pevoc9.sciencesconf.org', '2016', '2015-11-06', '2016-04-05'),
(9, '3e seminaire du reseau des OHM\r\n\r\n', 'Séminaire annuel du réseau des Observatoires Hommes-Milieux\r\n', 'https://thumb.ccsd.cnrs.fr/1643833/medium', '', '2017', '2017-01-28', '2017-03-15'),
(10, '13ème Congrès de la Société Internationale d''Ethnobiologie', 'Building on the traditions of past ISE congresses, the 13th International Congress of Ethnobiology in Montpellier, France yet again will bring Indigenous and non-Indigenous participants from around the world to tackle the key issues of our times. The Congress will include a wide range of formats for people to share their knowledge, ideas and experiences, ranging from talking circles, to film viewings and discussions, cultural performances, field trips, oral presentations and poster sessions.', 'https://thumb.ccsd.cnrs.fr/1643836/medium', 'http://cise2012.sciencesconf.org', '2016', '2016-09-19', '2016-11-05'),
(11, 'LAP 2012\r\n\r\n', '6th international conference on laser probing\r\n', 'https://thumb.ccsd.cnrs.fr/1643833/medium', 'http://lap2012.sciencesconf.org', '2012', '2012-08-07', '2012-10-20'),
(12, 'La souris comme modèle pour comprendre les maladies humaines', 'Colloque sur l''apport de l’organisme modèle souris à la compréhension des gènes et des mécanismes biologiques impliqués dans les maladies humaines\r\n', 'https://thumb.ccsd.cnrs.fr/1881947/medium', 'http://icssymp-jun2012.sciencesconf.org', '2017', '2017-01-28', '2017-02-14');

-- --------------------------------------------------------

--
-- Structure de la table `continant`
--

CREATE TABLE IF NOT EXISTS `continant` (
  `continant` varchar(100) NOT NULL,
  `id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `continant`
--

INSERT INTO `continant` (`continant`, `id`) VALUES
('Africa', 'AF'),
('Antarctica', 'AN'),
('Asia', 'AS'),
('Europe', 'EU'),
('North America', 'NA'),
('Oceania', 'OC'),
('South America', 'SA');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contain` text NOT NULL,
  `urlEvent` varchar(255) NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `titre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `contain`, `urlEvent`, `imgUrl`, `titre`) VALUES
(1, 'Caractï¿½ristiques et particularitï¿½s de la condition itinï¿½rante chez les personnes autochtones. Mieux comprendre pour mieux agirInstitut national de la recherche scientifique, Montrï¿½al', '', '', 'Sï¿½minaire avec Carole Lï¿½vesque'),
(2, 'Aboriginal People in Urban Areas : Methodological Challenges in Research on Mobility. 54e International Congress of Americanists.\r\nVienne, Autriche', '', '', ' Panel (International Congress)'),
(3, 'La santé des Autochtones en milieu urbain. 13e Journées annuelles de santé publique (Institut national de santé publique du Québec).\r\nMontréal', '', '', ' Colloque national ODENA '),
(4, 'Découvrez le lien entre les faits scientifiques et le bien-être de vos patients. \r\nVous pourrez assister à des sessions de traitement en direct, présentées et commentées par des experts internationaux, constituant des événements particulièrement enrichissants pour tout praticien dentaire.', 'http://www1.nobelbiocare.com/en/education-and-events/events-gallery/world-tour-2008/maastricht/scientific-program/default.aspx', 'http://www1.nobelbiocare.com/Images/main_prg2_tcm59-8834.gif', 'Programme scientifique'),
(5, 'Le concours du Programme Poster permet aux chercheurs, aux praticiens et aux étudiants de partager leurs expériences illustrées par des solutions Nobel Biocare dans les catégories suivantes : recherche, présentation de cas cliniques et Creative Circle.', 'http://www1.nobelbiocare.com/fr_fr/education-and-events/events-gallery/world-tour-2008/global/poster-program/default.aspx', 'http://www1.nobelbiocare.com/Images/award_tcm59-8507.gif', 'Programme poster World Tour 2008\r\n'),
(7, 'erH', 'https://docs.google.com/document/d/1X-vPM6MXozQNzxiMzC4kNQKKPDFu4m2cYjW2foPwc3A/pub', 'assets/image/img.jpg', 'test'),
(9, 'TXU.UK', 'https://fin-risks2017.sciencesconf.org/', 'assets/image/evenement/evenement9.jpg', 'The Data Scene in 2017: More Cloud, Greater Governance');

-- --------------------------------------------------------

--
-- Structure de la table `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `editeur` varchar(255) NOT NULL,
  `impactFactor` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `urlImg` varchar(255) NOT NULL,
  `siteWeb` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `journal`
--

INSERT INTO `journal` (`id`, `titre`, `ISBN`, `editeur`, `impactFactor`, `theme`, `urlImg`, `siteWeb`) VALUES
(1, 'American Scientist', 1001, 'American Scientist', '2017', 'Artificial Symbiosis, Ultrasound Treatments, Photoshopping the Universe', 'http://www.americanscientist.org/img/logo.gif', 'http://www.americanscientist.org/'),
(2, 'natural historymag', 2198, 'natural historymag', '1009', 'natural, historymag', 'http://www.naturalhistorymag.com/sites/default/files/imagecache/large/media/2016/09/a9roq43eg_jvmn7w_8ao_jpg_10617.jpg', 'http://www.naturalhistorymag.com/'),
(3, 'north-africa', 54, 'north-africa', '1523', 'science, politique, technologie', 'http://north-africa.com/wp-content/uploads/2014/12/naj2014-logo2.jpg', 'http://north-africa.com/'),
(4, 'echorouk', 14584, 'echoroukonline', '1627', 'politique, technologie, science, sport', 'http://static.echoroukonline.com/ara/themes/nechorouk/assets/new-logo.png', 'http://www.echoroukonline.com/'),
(5, 'wn-Algeria Daily', 9653, 'wn-Algeria Daily', '1423', 'fashion, scientifique, sport, techno', 'https://cdn4.wn.com/or/assets/assets/anything/logo.png', 'https://wn.com/'),
(6, 'scienceNews', 3564, 'scienceNews', '1005', 'health, science, technology, sport', 'https://www.sciencenews.org/sites/default/files/2017/01/main/articles/010417_cc_radioburst_main-REV_free.jpg', 'https://www.sciencenews.org/'),
(7, 'New Scientisit', 8452, 'New Scientisit', '1265', 'scientiste, technology', 'http://mediacentre.newscientist.com/newscientistmediacentre/userfiles/image/newscientist3.jpg', 'https://www.newscientist.com/'),
(8, 'ictafrica', 6159, 'ictafrica', '365', 'technology, IT, Engineering', 'http://www.ictafrica.info/images/logo.png', 'http://www.ictafrica.info/'),
(9, 'MIT Technology Review', 96233, 'MIT', '6945', 'techno, Technology, IT, DATA Science, Machine Learning', 'https://d267cvn3rvuq91.cloudfront.net/i/images/mitaging2flat.jpg?sw=280&cx=0&cy=1&cw=1800&ch=1012', 'https://www.technologyreview.com/'),
(10, 'popular mechanics', 6515, 'popular mechanics', '2451', 'Scientifc, Technology, Mechanic', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExMVFRUXGRkbFxgXGBgYGBkWHR4YIB8XHRoYHyggHR0lHRcdITEhJikrLi4vHR8zODMtNygtLisBCgoKDg0OGhAQGi0lHyUtLS4tLS0tLS8tLS8uLS0rLy0tLS0yLy0tKy01Li0vLS0vKy0tLS0tLSstLS0tLS0rLf/AABEIAQEAxAMBIgACEQEDEQH/', 'http://www.popularmechanics.com/'),
(11, 'techamiable', 6156, 'techamiable', '988', 'technology', 'http://www.techamiable.com/wp-content/uploads/2016/09/nox-app-player.jpg', 'http://www.techamiable.com/'),
(12, 'wired', 2828, 'wired', '598', 'technology, scientific', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAilBMVEUjHyD///8AAAAaFRbk5ORiYGEfGxwMAAW9vLwTDA4UDhDBwMDv7u4dGBktKiuKiIiCgYGvrq44MzRNSkuWlJUJAADV1NRKRUb19fXPzs7h4OBRTk+pqKjY19eQj49mZGRAPT56eHhzcHAzLzBYVVXHxsYqJSY9OjtkYmOHhYatrKxcWVmdn', 'https://www.wired.com/'),
(14, 'witi', 29899, 'witi', '625', 'scientific, Technology, Humanity, Natural', '', 'http://www.witi.com/');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `imageUrl` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `content`, `imageUrl`, `url`) VALUES
(1, 'The Data Scene in 2017: More Cloud, Greater Governance, Higher Performance', 'The past year has been a blockbuster one for those working in the data space. Businesses have wrapped their fates around data analytics in an even tighter embrace as competition intensifies and the drive for greater innovation becomes a top priority.The year ahead promises to get even more interesting, especially for data managers and professionals. Leading experts in the field have witnessed a number of data trends  emerge in 2016, and now see new developments coming into view for 2017.', 'http://www.dbta.com/Images/Default.aspx?ImageID=18917&max=468&maxWidth=250&canvas=468x250', 'http://www.dbta.com/Editorial/Trends-and-Applications/The-Data-Scene-in-2017-More-Cloud-Greater-Governance-Higher-Performance-115500.aspx'),
(2, 'Trend-Setting Products in Data and Information Management for 2017', 'Over the past 10 years, a wealth of products and services has emerged to help companies wring more value from the large quantities of data they are amassing. New entries are constantly coming on the market, while tried-and-true offerings continue to be updated with cutting-edge capabilities.', 'http://www.dbta.com/Images/Default.aspx?ImageID=19950&max=468&maxWidth=250&canvas=468x250', 'http://www.dbta.com/Editorial/Trends-and-Applications/Trend-Setting-Products-in-Data-and-Information-Management-for-2017-115127.aspx'),
(3, '10 Big Data and IoT Predictions for 2017', 'What''s ahead for 2017 in terms of big data and IoT? IT executives reflect on the impact that Spark, blockchain, data lakes, cognitive computing, AI and machine learning, and other cutting-edge approaches may have on data management and analytics over the year ahead.', 'http://www.dbta.com/Images/Default.aspx?ImageID=17259&max=468&maxWidth=250&canvas=468x250', 'http://www.dbta.com/Editorial/News-Flashes/10-Big-Data-and-IoT-Predictions-for-2017-115079.aspx'),
(4, 'How Machine Learning Helps You Think Like Netflix, Act Like Facebook, and Other Useful Lessons for Retail Marketers', 'Over the past few years, it has not been uncommon to see the term “big data” closely followed by words such as disruptive, innovative, and powerful. And sure, big data certainly is all of these things, and it has been a great aid for marketers as they strive to learn more about customers.\r\n\r\nHowever, big data is not the end-all, be-all of marketing strategies. It’s not that big data is too simplistic, rather, it’s that our standard way of using data is limiting. Typical big data analytics are incapable of painting the full picture of consumer behaviors and often fail to quickly provide complete insights. When this happens, marketers end up with broad insights that miss the mark when translated into real-world advertisements and campaigns.\r\n\r\nSo let’s repeat—there is more to big data analysis than demographics and purchase history. And what’s out there in the cooler and smarter beyond, you ask?', 'http://www.dbta.com/Images/Default.aspx?ImageID=19246&max=468&maxWidth=250&canvas=468x250', 'http://www.dbta.com/Editorial/Trends-and-Applications/How-Machine-Learning-Helps-You-Think-Like-Netflix-Act-Like-Facebook-and-Other-Useful-Lessons-for-Retail-Marketers-115501.aspx'),
(5, 'Browse San Jose’s 500+ Technical Sessions', 'The online agenda for SHARE San Jose, March 5-10, is now available on SHARE.org. If you’re still deciding whether to make the trek to Silicon Valley — let the technical session lineup make your decision for you!', 'https://s3-media1.fl.yelpcdn.com/bphoto/DLvEpQ3_8-fIh3ScyBL_gQ/ls.jpg', 'http://www.dbta.com/Editorial/News-From-SHARE/Browse-San-Joses-500--Technical-Sessions-115579.aspx'),
(6, 'Not Your (Grand)father’s Mainframe\r\n', 'The mainframe has been around for approximately six decades. For years, ironically, people both within and outside of our industry have held the mainframe’s age against it, as if it were evidence of the mainframe perhaps not functioning as well it used to or not being as necessary as it used to be.', 'http://zdnet1.cbsistatic.com/hub/i/r/2013/07/04/2bad292e-1d15-11e4-8c7f-00505685119a/thumbnail/770x578/3b01b52d218101b2f54611bec094cb2f/mainframe-thumb.jpg', NULL),
(7, 'SQL Server Drill Down', 'SQL Server Drill Down explores all aspects of Microsoft SQL Server and related applications, with a particular emphasis on issues of interest to SQL Server data professionals. Key areas of focus include business intelligence, database performance, data integration, virtualization, data protection.', 'http://blogs.catapultsystems.com/wp-content/uploads/090915_1255_Monitoringa16.png', NULL),
(8, 'Machine Learning Templates with SQL Server ', 'Microsoft recently launched SQL Server 2016, which, in addition to many other great features, offers in-database advanced analytics with R Services, allowing users to combine the power of SQL Server and Microsoft R Server (or Open Source R), without data leaving the database.\r\n\r\nWith SQL Server R Services, users can develop analytic models in a local R IDE (e.g., R Tools for Visual Studio or RStudio), while data resides in SQL Server, and computation happens on SQL Server (by setting the compute context to SQL Server).\r\n\r\nOnce the model is ready for production, it can be operationalized via SQL stored procedures (where R code is encapsulated inside), which can be run within SQL Server Management Studio or called by outside applications to make predictions.', 'http://www.7wdata.be/wp-content/uploads/2016/04/Predictive-Maintenance-1.jpg', NULL),
(9, 'What is SQL?', 'SQL, which stands for Structured Query Language, is a programming language that is used to communicate with and manipulate databases. In order to get the most of the mounds of data they collect, many businesses must become versed in SQL.\r\n\r\nSQL programs are put in place by businesses and other organizations as a way to access and manipulate the information and data that is stored in their databases, as well as for creating and altering new tables. To fully understand SQL, it is important to first know exactly what a database is.\r\n\r\n- See more at: http://www.businessnewsdaily.com/5804-what-is-sql.html#sthash.zCmjzaqN.dpuf', 'http://www.businessnewsdaily.com/images/i/000/005/188/original/sql.jpg?interpolation=lanczos-none&fit=around|700:500', NULL),
(10, 'Sample Resume for a Database Administrator\r\n', 'To compete for a job in today''s fast-paced tech world, it helps to have a comprehensive resume. For inspiration, view the sample resume below and download the database administrator resume template in Word. And if you need more help, get a free resume evaluation today from the experts at Monster''s partner TopResume.\r\n\r\nAdditionally, you can learn more about IT careers on Monster.', 'https://media.newjobs.com/cms/careeradvice/resume-sample-images/database-administrator-resume-sample.jpg', NULL),
(11, 'Les sodas sans sucre, pires que les sodas sucrés ?', 'Une étude publiée dans "Plos Medicine" soulève une fois de plus la question des édulcorants, dont les bienfaits sont de plus en plus contestés.', 'http://www.lepoint.fr/images/2017/01/04/6663506lpw-6664513-article-glass-of-soda-with-a-drinking-straw-jpg_4000275_660x281.jpg', NULL),
(12, 'Quels sports pratiquer pour vivre longtemps et en bonne santé ?', 'Comme des millions de personnes à travers le monde, 60 % des Américains, des Australiens et des Européens font régulièrement du sport. En 2015, un article scientifique révélait que nous n''avons pas accès à suffisamment de données sur les bienfaits à long terme de certaines disciplines sportives, mais une étude plus récente prouve que la pratique de certains sports parmi les plus populaires réduit significativement le risque de décès prématuré. Le fait de ne pas pratiquer d''activité physique régulière cause en effet plus de 5 millions de décès prématurés chaque année. Pour réduire le risque de maladies cardiaques, de diabète de type 2, de cancers et d''un certain nombre d''autres maladies chroniques, l''Organisation mondiale de la santé recommande aux adultes et aux personnes âgées de pratiquer une activité physique pendant au moins 2 h 30 par semaine.', 'http://www.lepoint.fr/images/2016/12/25/6491684lpw-6492104-article-jpg_3983257_660x281.jpg', NULL),
(13, 'Vers le calcul sans coût énergétique', 'De nouvelles expériences confirment qu''un minimum d''énergie est nécessaire pour effectuer de petits calculs. Mais la maîtrise du calcul réversible pourrait rendre caduc cet obstacle thermodynamique.', 'http://www.pourlascience.fr/e_img/boutique/325/pls_471_p078_image_delahaye.jpg', NULL),
(14, 'La lüneburgite, une source de phosphate pour les premières molécules d’ARN ?', 'Des roches riches en bore ont pu fournir le phosphate nécessaire à l''assemblage des nucléosides en ARN, une étape indispensable à l''apparition de la vie.', 'http://www.pourlascience.fr/e_img/boutique/325/actu_mnc_lunugite.jpeg', NULL),
(15, 'Aliquam non mauris.', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'https://robohash.org/pariaturetnon.bmp?size=50x50&set=set1', NULL),
(17, 'Etiam pretium iaculis justo.', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\n\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 'https://robohash.org/etaccusantiumnostrum.bmp?size=50x50&set=set1', NULL),
(18, 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis.', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'https://robohash.org/etquiasint.bmp?size=50x50&set=set1', NULL),
(19, 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\n\nSed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'https://robohash.org/dolorumquivoluptatum.bmp?size=50x50&set=set1', NULL),
(20, 'Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'https://robohash.org/involuptatumest.jpg?size=50x50&set=set1', NULL),
(21, 'Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla.', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'https://robohash.org/perferendisullamomnis.png?size=50x50&set=set1', NULL),
(22, 'Aenean fermentum.', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'https://robohash.org/sitisteipsam.bmp?size=50x50&set=set1', NULL),
(23, 'Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'https://robohash.org/ipsacumquedeserunt.jpg?size=50x50&set=set1', NULL),
(25, 'Nunc rhoncus dui vel sem.', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'https://robohash.org/idvelitsuscipit.jpg?size=50x50&set=set1', NULL),
(26, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus.', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 'https://robohash.org/recusandaelaudantiumdolores.bmp?size=50x50&set=set1', NULL),
(27, 'Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.', 'https://robohash.org/voluptatemutquasi.jpg?size=50x50&set=set1', NULL),
(28, 'Nullam molestie nibh in lectus. Pellentesque at nulla.', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'https://robohash.org/praesentiumsintunde.jpg?size=50x50&set=set1', NULL),
(29, 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla.', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 'https://robohash.org/quiaquiaquas.jpg?size=50x50&set=set1', NULL),
(30, 'Aliquam quis turpis eget elit sodales scelerisque.', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\n\nFusce consequat. Nulla nisl. Nunc nisl.', 'https://robohash.org/rerumomnissimilique.png?size=50x50&set=set1', NULL),
(31, 'Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\n\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'https://robohash.org/debitisasperioresconsequatur.png?size=50x50&set=set1', NULL),
(32, 'Fusce consequat. Nulla nisl.', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 'https://robohash.org/aperiameumcupiditate.png?size=50x50&set=set1', NULL),
(33, 'Phasellus id sapien in sapien iaculis congue.', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 'https://robohash.org/doloresdictatemporibus.jpg?size=50x50&set=set1', NULL),
(34, 'Morbi quis tortor id nulla ultrices aliquet.', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'https://robohash.org/necessitatibuseiusperferendis.jpg?size=50x50&set=set1', NULL),
(35, 'Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\n\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'https://robohash.org/cupiditatevoluptatumea.jpg?size=50x50&set=set1', NULL),
(36, 'Curabitur in libero ut massa volutpat convallis.', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\n\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\n\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 'https://robohash.org/explicabosequiiure.png?size=50x50&set=set1', NULL),
(37, 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique.', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\n\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'https://robohash.org/liberoquireprehenderit.jpg?size=50x50&set=set1', NULL),
(38, 'Vivamus in felis eu sapien cursus vestibulum. Proin eu mi.', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'https://robohash.org/vitaequivoluptas.jpg?size=50x50&set=set1', NULL),
(39, 'Vivamus in felis eu sapien cursus vestibulum.', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'https://robohash.org/sintdolorasperiores.bmp?size=50x50&set=set1', NULL),
(40, 'In hac habitasse platea dictumst. Etiam faucibus cursus urna.', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\n\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\n\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'https://robohash.org/numquamlaboriosamrepellendus.jpg?size=50x50&set=set1', NULL),
(41, 'Fusce posuere felis sed lacus.', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'https://robohash.org/utoccaecatirerum.png?size=50x50&set=set1', NULL),
(42, 'Cras in purus eu magna vulputate luctus.', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'https://robohash.org/accusamuseadoloribus.bmp?size=50x50&set=set1', NULL),
(48, 'The Data Scene in 2017: More Cloud, Greater Governance', 'The past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has beenThe past year has been', 'assets/image/news/news43jpg', 'https://docs.google.com/document/d/1X-vPM6MXozQNzxiMzC4kNQKKPDFu4m2cYjW2foPwc3A/pub');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pays` varchar(60) NOT NULL,
  `idContinant` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=501 ;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `pays`, `idContinant`) VALUES
(251, 'Andorra', 'EU'),
(252, 'United Arab Emirates', 'AS'),
(253, 'Afghanistan', 'AS'),
(254, 'Antigua and Barbuda', 'NA'),
(255, 'Anguilla', 'NA'),
(256, 'Albania', 'EU'),
(257, 'Armenia', 'AS'),
(258, 'Angola', 'AF'),
(259, 'Antarctica', 'AN'),
(260, 'Argentina', 'SA'),
(261, 'American Samoa', 'OC'),
(262, 'Austria', 'EU'),
(263, 'Australia', 'OC'),
(264, 'Aruba', 'NA'),
(265, 'Aland', 'EU'),
(266, 'Azerbaijan', 'AS'),
(267, 'Bosnia and Herzegovina', 'EU'),
(268, 'Barbados', 'NA'),
(269, 'Bangladesh', 'AS'),
(270, 'Belgium', 'EU'),
(271, 'Burkina Faso', 'AF'),
(272, 'Bulgaria', 'EU'),
(273, 'Bahrain', 'AS'),
(274, 'Burundi', 'AF'),
(275, 'Benin', 'AF'),
(276, 'Saint Barthélemy', 'NA'),
(277, 'Bermuda', 'NA'),
(278, 'Brunei', 'AS'),
(279, 'Bolivia', 'SA'),
(280, 'Bonaire', 'NA'),
(281, 'Brazil', 'SA'),
(282, 'Bahamas', 'NA'),
(283, 'Bhutan', 'AS'),
(284, 'Bouvet Island', 'AN'),
(285, 'Botswana', 'AF'),
(286, 'Belarus', 'EU'),
(287, 'Belize', 'NA'),
(288, 'Canada', 'NA'),
(289, 'Cocos [Keeling] Islands', 'AS'),
(290, 'Democratic Republic of the Congo', 'AF'),
(291, 'Central African Republic', 'AF'),
(292, 'Republic of the Congo', 'AF'),
(293, 'Switzerland', 'EU'),
(294, 'Ivory Coast', 'AF'),
(295, 'Cook Islands', 'OC'),
(296, 'Chile', 'SA'),
(297, 'Cameroon', 'AF'),
(298, 'China', 'AS'),
(299, 'Colombia', 'SA'),
(300, 'Costa Rica', 'NA'),
(301, 'Cuba', 'NA'),
(302, 'Cape Verde', 'AF'),
(303, 'Curacao', 'NA'),
(304, 'Christmas Island', 'AS'),
(305, 'Cyprus', 'EU'),
(306, 'Czech Republic', 'EU'),
(307, 'Germany', 'EU'),
(308, 'Djibouti', 'AF'),
(309, 'Denmark', 'EU'),
(310, 'Dominica', 'NA'),
(311, 'Dominican Republic', 'NA'),
(312, 'Algeria', 'AF'),
(313, 'Ecuador', 'SA'),
(314, 'Estonia', 'EU'),
(315, 'Egypt', 'AF'),
(316, 'Western Sahara', 'AF'),
(317, 'Eritrea', 'AF'),
(318, 'Spain', 'EU'),
(319, 'Ethiopia', 'AF'),
(320, 'Finland', 'EU'),
(321, 'Fiji', 'OC'),
(322, 'Falkland Islands', 'SA'),
(323, 'Micronesia', 'OC'),
(324, 'Faroe Islands', 'EU'),
(325, 'France', 'EU'),
(326, 'Gabon', 'AF'),
(327, 'United Kingdom', 'EU'),
(328, 'Grenada', 'NA'),
(329, 'Georgia', 'AS'),
(330, 'French Guiana', 'SA'),
(331, 'Guernsey', 'EU'),
(332, 'Ghana', 'AF'),
(333, 'Gibraltar', 'EU'),
(334, 'Greenland', 'NA'),
(335, 'Gambia', 'AF'),
(336, 'Guinea', 'AF'),
(337, 'Guadeloupe', 'NA'),
(338, 'Equatorial Guinea', 'AF'),
(339, 'Greece', 'EU'),
(340, 'South Georgia and the South Sandwich Islands', 'AN'),
(341, 'Guatemala', 'NA'),
(342, 'Guam', 'OC'),
(343, 'Guinea-Bissau', 'AF'),
(344, 'Guyana', 'SA'),
(345, 'Hong Kong', 'AS'),
(346, 'Heard Island and McDonald Isla', 'AN'),
(347, 'Honduras', 'NA'),
(348, 'Croatia', 'EU'),
(349, 'Haiti', 'NA'),
(350, 'Hungary', 'EU'),
(351, 'Indonesia', 'AS'),
(352, 'Ireland', 'EU'),
(353, 'Israel', 'AS'),
(354, 'Isle of Man', 'EU'),
(355, 'India', 'AS'),
(356, 'British Indian Ocean Territory', 'AS'),
(357, 'Iraq', 'AS'),
(358, 'Iran', 'AS'),
(359, 'Iceland', 'EU'),
(360, 'Italy', 'EU'),
(361, 'Jersey', 'EU'),
(362, 'Jamaica', 'NA'),
(363, 'Jordan', 'AS'),
(364, 'Japan', 'AS'),
(365, 'Kenya', 'AF'),
(366, 'Kyrgyzstan', 'AS'),
(367, 'Cambodia', 'AS'),
(368, 'Kiribati', 'OC'),
(369, 'Comoros', 'AF'),
(370, 'Saint Kitts and Nevis', 'NA'),
(371, 'North Korea', 'AS'),
(372, 'South Korea', 'AS'),
(373, 'Kuwait', 'AS'),
(374, 'Cayman Islands', 'NA'),
(375, 'Kazakhstan', 'AS'),
(376, 'Laos', 'AS'),
(377, 'Lebanon', 'AS'),
(378, 'Saint Lucia', 'NA'),
(379, 'Liechtenstein', 'EU'),
(380, 'Sri Lanka', 'AS'),
(381, 'Liberia', 'AF'),
(382, 'Lesotho', 'AF'),
(383, 'Lithuania', 'EU'),
(384, 'Luxembourg', 'EU'),
(385, 'Latvia', 'EU'),
(386, 'Libya', 'AF'),
(387, 'Morocco', 'AF'),
(388, 'Monaco', 'EU'),
(389, 'Moldova', 'EU'),
(390, 'Montenegro', 'EU'),
(391, 'Saint Martin', 'NA'),
(392, 'Madagascar', 'AF'),
(393, 'Marshall Islands', 'OC'),
(394, 'Macedonia', 'EU'),
(395, 'Mali', 'AF'),
(396, 'Myanmar [Burma]', 'AS'),
(397, 'Mongolia', 'AS'),
(398, 'Macao', 'AS'),
(399, 'Northern Mariana Islands', 'OC'),
(400, 'Martinique', 'NA'),
(401, 'Mauritania', 'AF'),
(402, 'Montserrat', 'NA'),
(403, 'Malta', 'EU'),
(404, 'Mauritius', 'AF'),
(405, 'Maldives', 'AS'),
(406, 'Malawi', 'AF'),
(407, 'Mexico', 'NA'),
(408, 'Malaysia', 'AS'),
(409, 'Mozambique', 'AF'),
(410, 'Namibia', 'AF'),
(411, 'New Caledonia', 'OC'),
(412, 'Niger', 'AF'),
(413, 'Norfolk Island', 'OC'),
(414, 'Nigeria', 'AF'),
(415, 'Nicaragua', 'NA'),
(416, 'Netherlands', 'EU'),
(417, 'Norway', 'EU'),
(418, 'Nepal', 'AS'),
(419, 'Nauru', 'OC'),
(420, 'Niue', 'OC'),
(421, 'New Zealand', 'OC'),
(422, 'Oman', 'AS'),
(423, 'Panama', 'NA'),
(424, 'Peru', 'SA'),
(425, 'French Polynesia', 'OC'),
(426, 'Papua New Guinea', 'OC'),
(427, 'Philippines', 'AS'),
(428, 'Pakistan', 'AS'),
(429, 'Poland', 'EU'),
(430, 'Saint Pierre and Miquelon', 'NA'),
(431, 'Pitcairn Islands', 'OC'),
(432, 'Puerto Rico', 'NA'),
(433, 'Palestine', 'AS'),
(434, 'Portugal', 'EU'),
(435, 'Palau', 'OC'),
(436, 'Paraguay', 'SA'),
(437, 'Qatar', 'AS'),
(438, 'Réunion', 'AF'),
(439, 'Romania', 'EU'),
(440, 'Serbia', 'EU'),
(441, 'Russia', 'EU'),
(442, 'Rwanda', 'AF'),
(443, 'Saudi Arabia', 'AS'),
(444, 'Solomon Islands', 'OC'),
(445, 'Seychelles', 'AF'),
(446, 'Sudan', 'AF'),
(447, 'Sweden', 'EU'),
(448, 'Singapore', 'AS'),
(449, 'Saint Helena', 'AF'),
(450, 'Slovenia', 'EU'),
(451, 'Svalbard and Jan Mayen', 'EU'),
(452, 'Slovakia', 'EU'),
(453, 'Sierra Leone', 'AF'),
(454, 'San Marino', 'EU'),
(455, 'Senegal', 'AF'),
(456, 'Somalia', 'AF'),
(457, 'Suriname', 'SA'),
(458, 'South Sudan', 'AF'),
(459, 'São Tomé and Príncipe', 'AF'),
(460, 'El Salvador', 'NA'),
(461, 'Sint Maarten', 'NA'),
(462, 'Syria', 'AS'),
(463, 'Swaziland', 'AF'),
(464, 'Turks and Caicos Islands', 'NA'),
(465, 'Chad', 'AF'),
(466, 'French Southern Territories', 'AN'),
(467, 'Togo', 'AF'),
(468, 'Thailand', 'AS'),
(469, 'Tajikistan', 'AS'),
(470, 'Tokelau', 'OC'),
(471, 'East Timor', 'OC'),
(472, 'Turkmenistan', 'AS'),
(473, 'Tunisia', 'AF'),
(474, 'Tonga', 'OC'),
(475, 'Turkey', 'AS'),
(476, 'Trinidad and Tobago', 'NA'),
(477, 'Tuvalu', 'OC'),
(478, 'Taiwan', 'AS'),
(479, 'Tanzania', 'AF'),
(480, 'Ukraine', 'EU'),
(481, 'Uganda', 'AF'),
(482, 'U.S. Minor Outlying Islands', 'OC'),
(483, 'United States of America', 'NA'),
(484, 'Uruguay', 'SA'),
(485, 'Uzbekistan', 'AS'),
(486, 'Vatican City', 'EU'),
(487, 'Saint Vincent and the Grenadines', 'NA'),
(488, 'Venezuela', 'SA'),
(489, 'British Virgin Islands', 'NA'),
(490, 'U.S. Virgin Islands', 'NA'),
(491, 'Vietnam', 'AS'),
(492, 'Vanuatu', 'OC'),
(493, 'Wallis and Futuna', 'OC'),
(494, 'Samoa', 'OC'),
(495, 'Kosovo', 'EU'),
(496, 'Yemen', 'AS'),
(497, 'Mayotte', 'AF'),
(498, 'South Africa', 'AF'),
(499, 'Zambia', 'AF'),
(500, 'Zimbabwe', 'AF');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contain` text NOT NULL,
  `urlImg` varchar(255) NOT NULL,
  `annee` varchar(10) NOT NULL,
  `domaineSearch` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `publication`
--

INSERT INTO `publication` (`id`, `titre`, `contain`, `urlImg`, `annee`, `domaineSearch`) VALUES
(1, 'TOP 50 DATA SCIENCE RESOURCES: THE BEST BLOGS, FORUMS, VIDEOS AND TUTORIALS TO LEARN ALL ABOUT DATA ', 'The field of data science is constantly evolving and ever-advancing, with new technologies placing more valuable insights in the hands of modern enterprises. More data-driven organizations are hiring data scientists to drive their efforts to gather, analyze, and make use of Big Data in valuable ways.', 'https://www.ngdata.com/wp-content/uploads/2015/03/shutterstock_210940927-1024x576.jpg', '2017', 'Big Data'),
(2, 'Theories Behind Data Science', 'If you’d like to perform data science there are several theories and principles that you need to understand. And once you understand these theories and principles, it will allow you to learn a certain set of practices, and step by step skills that data scientists do. If you don’t understand these theories and principles, then you won’t be able to understand the practices and skills. So first let me teach you a few theories and principles that are involved, and once you understand the theoretical elements, then I can teach you a simple step-by-step method for doing data science', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU2CMImdImDwk1Epg2LQVKQ7Y9eV-vuqD4PECYQjJ0Nu2i21jY', '2016', 'Data Science'),
(3, 'URBAN TRAFFIC DATA HACK: TONS OF SENSOR AND TRAFFIC DATA + COMPLEX URBAN PROBLEMS', 'Roland Major, Enterprise Architect within TfL’s Information Management team, reports on the Urban Traffic Data Hackathon.\r\n\r\nIn the last post on this blog, Tim introduced the roads data available in our unified API, describing its importance as we encourage road users to check before travelling while we carry out our Road Modernisation Plan.\r\n\r\nWe continue to engage with developers to help us in making driving in London better, with innovative solutions to traffic, road disruption and planned works information through apps created from our open data. As part of our engagement with the developer community we held an Urban Traffic Data Hackathon on 14-15 November.', 'https://tflnwp.files.wordpress.com/2015/12/leon-daniels-with-innovation-winning-team.jpg?w=584&h=438', '2017', 'Data Science'),
(4, 'Big Data: Parameters or Statistics?', 'Hereï¿½s a good question that came up in the LinkedIn Statistics ', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQe_J2lIY04a8_GUvuM6YE-wEDYGa9-9E1mCNEwKcA5oIJHbIRG', '2016', 'meta analysis');

-- --------------------------------------------------------

--
-- Structure de la table `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `couleurAccueil` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `couleurPublication` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `couleurChercheur` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `couleurConference` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `couleurJourneaux` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `couleurMenu` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `couleurNews` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `template`
--

INSERT INTO `template` (`id`, `logo`, `couleurAccueil`, `couleurPublication`, `couleurChercheur`, `couleurConference`, `couleurJourneaux`, `couleurMenu`, `couleurNews`) VALUES
(1, 'assets/image/logo1.png', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `bday` date NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `Travail` varchar(30) NOT NULL,
  `Grade` varchar(30) NOT NULL,
  `affiliation` varchar(30) NOT NULL,
  `Themarecherche` varchar(150) NOT NULL,
  `cv` varchar(250) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `NumTel` varchar(12) NOT NULL,
  `Siteweb` varchar(50) NOT NULL,
  `Bibliographie` text NOT NULL,
  `Publication` text NOT NULL,
  `pays` varchar(30) NOT NULL,
  `adr` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imgUrl` varchar(250) NOT NULL,
  `bloquer` int(8) DEFAULT '0',
  `radier` int(11) DEFAULT '0',
  `inscrptionValider` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `bday`, `sexe`, `Travail`, `Grade`, `affiliation`, `Themarecherche`, `cv`, `mail`, `NumTel`, `Siteweb`, `Bibliographie`, `Publication`, `pays`, `adr`, `password`, `imgUrl`, `bloquer`, `radier`, `inscrptionValider`) VALUES
(1, 'Forest Bartoletti', 'Gonzalo', '1979-09-30', 'Male', 'Botsford-Leuschke', 'a', 'Group', 'eveniet', 'Alice. ''That''s very important,'' the King said to the confused clamour of the jury eagerly wrote down all three to settle the question, and they can''t prove I did: there''s no room to grow to my right.', 'strosin.geovanni@gmail.com', '1-552-464-74', 'rathkuvalis.com', 'Omnis voluptatem minus est. Reprehenderit molestiae sapiente in enim nihil architecto tempore laboriosam. Sint hic assumenda necessitatibus animi vel reiciendis libero. Et ab minima et consequatur non eos deleniti.', 'Voluptatem et vero voluptates.', 'Chad', 'ME', '581774f153959b2ac8ae1ba6317cde58db520960', 'http://lorempixel.com/640/480/', 0, 0, 1),
(2, 'Brando Wiegand', 'Wilton', '1984-09-29', 'Female', 'Dietrich, Rodriguez and Feeney', 'c', 'LLC', 'quo', 'English. ''I don''t believe there''s an atom of meaning in it.'' The jury all looked so grave and anxious.) Alice could see her after the candle is like after the rest were quite silent, and looked at.', 'pacocha.alden@hackettstokes.com', '1-706-582-29', 'olson.com', 'Inventore reprehenderit amet nostrum deserunt impedit. Rerum molestiae et qui ut saepe eius. Omnis est dolor cum sit ab nam.', 'Quas itaque architecto debitis temporibus et.', 'Czech Republic', 'HI', '524003f3a4efa968eac8393bbe09fb7967b0193f', 'http://lorempixel.com/640/480/', 0, 0, 0),
(3, 'Andrew Pagac', 'Bret', '1978-12-07', 'Male', 'Greenfelder, Schmitt and Okune', 'c', 'LLC', 'facilis', 'Alice, as the Dormouse shall!'' they both bowed low, and their curls got entangled together. Alice was beginning to grow to my jaw, Has lasted the rest waited in silence. Alice was just in time to.', 'kmiller@bogan.org', '1-834-947-91', 'murazik.com', 'Possimus aut molestiae repellendus voluptatibus et magni delectus. Sed dolor beatae eum eum.', 'Earum veritatis tenetur ea ut illum recusandae voluptas.', 'Kenya', 'PA', '3300e717a89467cd9b0ff601581b4c1b68e4b840', 'http://lorempixel.com/640/480/', 0, 0, 0),
(4, 'Hellen Murray', 'Ward', '2011-08-26', 'Female', 'Reichel LLC', 'c', 'Group', 'sed', 'Alice, as she could guess, she was now, and she tried to get in?'' asked Alice again, for she felt very curious sensation, which puzzled her a good deal until she had found the fan and the little.', 'eichmann.lizeth@gmail.com', '(317)319-012', 'mullerankunding.com', 'Non mollitia quod dolorem sed. Aut ea corrupti tempore sed ut quos quibusdam. Fugit quia nihil dicta.', 'Sit quos quibusdam ex commodi.', 'Netherlands', 'WI', 'bb16d819c6da33d1bdffe5cef613f0563e8ef08c', 'http://lorempixel.com/640/480/', 0, 0, 0),
(5, 'Roslyn Adams', 'Connor', '2016-12-26', 'Male', 'Cormier-McClure', 'c', 'Inc', 'numquam', 'Gryphon. ''They can''t have anything to say, she simply bowed, and took the place of the country is, you ARE a simpleton.'' Alice did not like to be rude, so she set to work at once without waiting for.', 'pvonrueden@schuster.net', '243-664-8889', 'yost.com', 'Est laborum aperiam rerum itaque. Molestiae unde ullam omnis corrupti sit culpa magni. Ut modi nesciunt recusandae et molestiae aliquid accusamus sit.', 'Praesentium harum molestiae nam est vero non.', 'Malawi', 'KS', '1809ceacad0f2dcd66fb2d89afede38f4e3284d3', 'http://lorempixel.com/640/480/', 0, 0, 0),
(6, 'Destiney Mante III', 'Barney', '2013-04-07', 'Female', 'Ferry-Wilderman', 'c', 'Inc', 'quae', 'Alice could think of any good reason, and as he wore his crown over the jury-box with the other: he came trotting along in a voice she had known them all her fancy, that: they never executes nobody,.', 'jalyn36@lueilwitz.com', '(458)490-512', 'heaney.com', 'Dolorem dicta enim voluptas sint incidunt ea. Deserunt doloremque quisquam eos necessitatibus velit porro cumque ad. Laudantium fuga voluptas ut similique qui qui consequatur asperiores.', 'Saepe nobis sed quos iure.', 'Faroe Islands', 'TN', '1ed5b3dc3b3b423d4fb00f43f20129ff36a188ab', 'http://lorempixel.com/640/480/', 0, 0, 0),
(7, 'Eugene Robel', 'Brenden', '1988-02-04', 'Male', 'Wilderman, Berge and Ledner', 'a', 'LLC', 'sit', 'THAT direction,'' the Cat in a great crash, as if a dish or kettle had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria--"'' ''Ugh!'' said.', 'nadia.lang@bauch.com', '(744)972-794', 'mitchellruecker.com', 'Aut aut quo in. Dolores fugit sed iste quis. Debitis saepe dolores neque.', 'Accusamus repellendus quisquam corrupti deserunt minima dolorem dolores.', 'Croatia', 'VT', 'bda1e9fce8103f02c9ead27f4f5ea243b3a3e4a0', 'http://lorempixel.com/640/480/', 0, 0, 0),
(8, 'Elroy Konopelski', 'Julian', '1979-03-17', 'Female', 'Emard-Marquardt', 'b', 'Ltd', 'dolorem', 'If they had been looking over his shoulder as she could, and waited to see that she knew that it might end, you know,'' the Mock Turtle: ''nine the next, and so on.'' ''What a curious dream!'' said.', 'afarrell@gmail.com', '797.746.9262', 'marquardt.info', 'Consequatur eius corporis magni aut unde quos dolorum libero. Nisi qui cumque omnis vitae. Inventore quasi rem officiis et.', 'Excepturi molestias neque iste.', 'China', 'NM', '99aba8117283236650058cc7d40afed96f0a2d8e', 'http://lorempixel.com/640/480/', 0, 0, 0),
(9, 'Mr. Theo Abernathy DDS', 'Reginald', '1975-02-20', 'Male', 'Greenfelder, Johnston and Glei', 'b', 'PLC', 'temporibus', 'I think?'' ''I had NOT!'' cried the Mouse, sharply and very neatly and simply arranged; the only difficulty was, that anything that had fluttered down from the Gryphon, sighing in his sleep, ''that "I.', 'hillard.watsica@gmail.com', '1-828-113-19', 'vandervort.com', 'Numquam voluptas et dolor quis. Harum qui dolorum repellendus esse est officiis corrupti. Est tempore molestiae impedit velit tenetur totam enim.', 'Est harum qui quibusdam a quia facere.', 'Martinique', 'DE', '65c6d41f9d634b53687f2aec491f19da10766e6c', 'http://lorempixel.com/640/480/', 0, 0, 0),
(10, 'Horacio Borer IV', 'Damien', '1975-10-28', 'Female', 'Bogan-Ziemann', 'a', 'Inc', 'eveniet', 'She was close behind her, listening: so she went on, ''and most of ''em do.'' ''I don''t see,'' said the others. ''Are their heads off?'' shouted the Queen. ''Well, I can''t quite follow it as to the Gryphon..', 'sdooley@lemke.org', '501-524-6101', 'grimes.biz', 'Veniam saepe autem nam nisi. Quaerat et maiores voluptates recusandae veritatis quia dolor. Dignissimos quis dolore quia mollitia et.', 'Omnis sed fugit voluptatum et dolore modi.', 'Gibraltar', 'KY', 'b35768b7149c271648b62b86d688c9a99190c6cc', 'http://lorempixel.com/640/480/', 0, 0, 0),
(11, 'Prof. Haskell Connelly DV', 'Lincoln', '1984-07-28', 'Male', 'Kerluke Ltd', 'a', 'Ltd', 'blanditiis', 'Gryphon, ''she wants for to know when the White Rabbit interrupted: ''UNimportant, your Majesty means, of course,'' he said to Alice. ''Only a thimble,'' said Alice to herself. ''I dare say you''re.', 'hokuneva@braunhilll.com', '1-099-856-00', 'goldnerdonnelly.com', 'Reiciendis eum commodi in voluptatem velit. Corporis eaque ut ut officiis eaque adipisci sapiente. Molestiae dolores aspernatur a. Hic quo id praesentium quia provident ut et.', 'Qui sunt et voluptas dicta doloremque blanditiis.', 'Guam', 'TN', '4541b52a98d776a1e53d52b82da1e9ad09e4d966', 'http://lorempixel.com/640/480/', 0, 0, 0),
(12, 'Bernadine Leuschke', 'Derick', '2011-03-29', 'Female', 'Thompson, Kirlin and Donnelly', 'b', 'Ltd', 'quae', 'Knave of Hearts, and I never heard before, ''Sure then I''m here! Digging for apples, yer honour!'' ''Digging for apples, yer honour!'' (He pronounced it ''arrum.'') ''An arm, you goose! Who ever saw in.', 'jennifer.crooks@yahoo.com', '(281)279-704', 'nader.net', 'Illum sint omnis dolores id eum deleniti est. Voluptate repellendus vitae aut. Ut laborum nihil aut earum aperiam in quis.', 'Unde et eum aliquam ut amet officiis.', 'Belize', 'NM', 'e19ceb68e87f029cf7b1b128b05d3741fd6894d5', 'http://lorempixel.com/640/480/', 0, 0, 0),
(13, 'Imelda Terry', 'Ricky', '1999-10-26', 'Male', 'Leuschke, Beer and Volkman', 'b', 'Group', 'sed', 'I tell you, you coward!'' and at last the Mock Turtle. ''Certainly not!'' said Alice to find that she could not taste theirs, and the words have got into it), and sometimes she scolded herself so.', 'ereilly@yahoo.com', '223-934-2476', 'powlowski.org', 'Voluptas non ducimus nihil veniam. Et molestiae voluptatem in aliquid sint sed quis et. Dicta nemo quos vel corrupti. Quo aut provident ut.', 'Eius quibusdam est est qui asperiores dolores aut facilis.', 'Niue', 'VA', 'b00e6a747718cb93792f94af1c6fb45f1a9c3fc5', 'http://lorempixel.com/640/480/', 0, 0, 0),
(14, 'Joan Witting DVM', 'Maximilian', '1986-03-28', 'Male', 'Sanford, Becker and Towne', 'c', 'and Sons', 'fugiat', 'Pigeon. ''I can tell you more than that, if you like!'' the Duchess asked, with another dig of her little sister''s dream. The long grass rustled at her with large round eyes, and feebly stretching out.', 'ottis.rippin@hotmail.com', '978.861.4266', 'bashirian.com', 'Et harum perferendis totam. Possimus ratione ea hic aspernatur. Beatae tenetur sapiente ut tempora cum in beatae aut. Enim ut vitae qui voluptatum repellat eligendi est.', 'Sunt ullam voluptates provident.', 'Heard Island and McDonald Isla', 'MI', 'a633c4c23d11d0cb6e1df9dd86fcd26504c57036', 'http://lorempixel.com/640/480/', 0, 0, 0),
(15, 'Deshaun Hyatt', 'Raymundo', '1999-01-19', 'Female', 'VonRueden-Braun', 'b', 'Inc', 'voluptatem', 'How the Owl had the dish as its share of the busy farm-yard--while the lowing of the trees under which she concluded that it made Alice quite hungry to look over their slates; ''but it seems to grin,.', 'cecilia.prosacco@schmitt.com', '308-777-3416', 'olsonnicolas.com', 'Ducimus laborum error ut et non tempora voluptatem. Et possimus aut repellat eos et aut quia. Incidunt nostrum unde et voluptatibus ab. Ut qui quidem dignissimos.', 'Soluta repellendus vel velit facere voluptatem.', 'Estonia', 'DE', '8fbf2188b3f054e418adb5d5fb71f296f7c61245', 'http://lorempixel.com/640/480/', 0, 0, 0),
(16, 'Prof. Ruthie O''Conner', 'Sonny', '1982-03-07', 'Male', 'Ruecker-Toy', 'a', 'Inc', 'laboriosam', 'CHAPTER V. Advice from a Caterpillar The Caterpillar and Alice rather unwillingly took the least idea what to do, so Alice went on again:-- ''I didn''t write it, and very soon found herself in a.', 'brianne44@prosacco.com', '(627)484-032', 'windler.com', 'Beatae quis fuga asperiores amet. Magnam quisquam sed ad est molestiae. Quo earum placeat maiores unde eos maiores eos vero. Harum qui quasi ut.', 'Dolorem repudiandae voluptate autem ut rerum.', 'Samoa', 'AZ', '2af2eef97fd188d418f52f0d040a4f2309ad4603', 'http://lorempixel.com/640/480/', 0, 0, 0),
(17, 'Colt Bayer', 'Norwood', '2015-12-29', 'Female', 'Ondricka-Smith', 'c', 'and Sons', 'autem', 'Alice herself, and nibbled a little way out of a well?'' ''Take some more of it at all,'' said the Mock Turtle had just succeeded in curving it down ''important,'' and some of them say, ''Look out now,.', 'keith.d''amore@yahoo.com', '+22(5)542714', 'legros.com', 'Dolore architecto minima dolore. Quis nisi dolor occaecati aut facere eaque veritatis. Harum laborum ea quia perferendis esse eos.', 'Ad nihil ut doloribus atque ut.', 'Qatar', 'NJ', '4fd7d61f0eaa4aa845335ce52387dde3f68accec', 'http://lorempixel.com/640/480/', 0, 0, 0),
(18, 'Clifton Botsford', 'Tillman', '2005-10-01', 'Male', 'Brakus-Keebler', 'c', 'Inc', 'perspiciatis', 'Rabbit was no ''One, two, three, and away,'' but they were gardeners, or soldiers, or courtiers, or three of the Shark, But, when the tide rises and sharks are around, His voice has a timid voice at.', 'jamel18@harvey.com', '1-856-499-78', 'wolf.net', 'Quis dolor soluta aspernatur dolorum et tempore maiores eos. Tempore quia aliquid iusto minima explicabo et voluptatibus. Quisquam pariatur sint quibusdam ab fuga numquam.', 'Iusto in velit rerum iusto animi dolore ex nihil.', 'Somalia', 'OK', '3d66d4b20eb293ced6b9938cd3aef6539971685c', 'http://lorempixel.com/640/480/', 0, 0, 0),
(19, 'Shanon Jenkins', 'Orlo', '1986-04-12', 'Female', 'O''Conner-Treutel', 'b', 'Ltd', 'architecto', 'Hatter. ''Does YOUR watch tell you more than nine feet high, and her eyes filled with tears running down his cheeks, he went on, ''you see, a dog growls when it''s pleased. Now I growl when I''m.', 'jones.rosalia@tremblay.biz', '1-511-784-16', 'ferry.com', 'Ullam quas rerum tenetur quam soluta consequatur. Deleniti qui voluptas voluptatem earum similique rem exercitationem provident. Sint iste reprehenderit earum laborum tenetur quia.', 'Laudantium voluptas consequuntur labore.', 'Nauru', 'HI', '00598aeea477f004acc8f491af2fc68385ebf957', 'http://lorempixel.com/640/480/', 0, 0, 0),
(21, 'Claud Sipes', 'Lorenz', '1984-02-29', 'Female', 'Miller, Cormier and Schamberge', 'c', 'Inc', 'recusandae', 'An obstacle that came between Him, and ourselves, and it. Don''t let him know she liked them best, For this must ever be A secret, kept from all the arches are gone from this morning,'' said Alice to.', 'funk.genesis@gmail.com', '475-848-3714', 'gloversimonis.net', 'Doloribus voluptatum iusto exercitationem magnam ullam quisquam ipsa. Illo facilis facilis deleniti architecto. Vitae aliquid sequi laudantium illum distinctio asperiores ut.', 'Repellat a cum debitis ratione qui.', 'Malawi', 'GA', 'af430998ca1f175c8587c5edf1b3861e2fd46c1a', 'http://lorempixel.com/640/480/', 0, 0, 0),
(22, 'Patricia O''Keefe', 'Brooks', '1988-12-06', 'Male', 'Waters Inc', 'a', 'Ltd', 'reiciendis', 'Alice went on in the world she was near enough to look about her repeating ''YOU ARE OLD, FATHER WILLIAM,'' to the jury, and the other side of WHAT? The other side of the gloves, and was in managing.', 'domenick56@gmail.com', '963.737.8159', 'rolfsonaufderhar.com', 'Officia incidunt aliquid et dolorum qui placeat. Corporis quia sit consequatur quidem et occaecati. Dolores aut fugit dolor et aut. Consectetur reprehenderit nisi aut. Neque eaque veritatis adipisci.', 'Ipsam maxime vero amet provident unde.', 'Bhutan', 'WA', 'acb87a70fac40c87c447dfcb056d49832aa355ca', 'http://lorempixel.com/640/480/', 0, 0, 0),
(23, 'Prof. Isaias Schulist', 'Rex', '2015-01-06', 'Female', 'Howe-Gaylord', 'b', 'Group', 'voluptas', 'However, when they arrived, with a large kitchen, which was sitting on the second thing is to give the hedgehog to, and, as the Rabbit, and had to stoop to save her neck would bend about easily in.', 'benedict.stanton@abshire.com', '1-411-114-04', 'schuppelangworth.net', 'Itaque non commodi voluptas mollitia quidem est placeat tempora. Natus atque amet dignissimos. Perferendis recusandae saepe velit ullam ipsam illum. Adipisci non sunt et.', 'Voluptatem suscipit sunt amet et qui modi labore.', 'Eritrea', 'PA', '7d32e6a7a068d6178c03cedd9b12a29a912d72bf', 'http://lorempixel.com/640/480/', 0, 0, 0),
(24, 'Mr. Kale Fisher PhD', 'Brennon', '1986-12-25', 'Male', 'Zulauf, Robel and Macejkovic', 'a', 'Inc', 'ad', 'And she squeezed herself up and said, very gravely, ''I think, you ought to go near the centre of the house if it had been, it suddenly appeared again. ''By-the-bye, what became of the Lobster.', 'tabitha.schneider@king.com', '525.996.3692', 'dickinson.net', 'Modi est numquam et labore. Dolor commodi ipsam impedit enim optio quibusdam. Rerum officia quis ipsum ut. Quaerat similique fuga debitis optio est. Laboriosam sed minima reiciendis quia et ullam.', 'Repellendus quam id consequatur ex quia sunt dolorem.', 'Luxembourg', 'LA', '133c8af30e9439d25965c07dea753ab88645e343', 'http://lorempixel.com/640/480/', 0, 0, 0),
(25, 'Ms. Rosalia Collins MD', 'Jaiden', '2015-01-20', 'Female', 'Runte, Treutel and O''Hara', 'a', 'Group', 'molestiae', 'Mouse, who seemed to quiver all over their shoulders, that all the unjust things--'' when his eye chanced to fall upon Alice, as the jury consider their verdict,'' the King said, turning to the.', 'fkovacek@ullrichrau.com', '830-727-3545', 'koeppwhite.com', 'Nisi soluta saepe voluptatem illum et maiores iste. Officiis occaecati pariatur magni qui optio commodi assumenda unde. Consequatur suscipit fuga praesentium earum omnis ut reiciendis.', 'Quia facere sunt qui dolorem earum molestiae.', 'Svalbard and Jan Mayen', 'ME', 'd93f7e01f1f78fe0306bc09b42464bf5de0ffd82', 'http://lorempixel.com/640/480/', 0, 0, 0),
(26, 'Quinn Schimmel', 'Eldon', '1978-04-30', 'Male', 'Rice Ltd', 'b', 'PLC', 'sequi', 'Duck and a pair of gloves and the words have got in your knocking,'' the Footman went on so long that they must needs come wriggling down from the trees under which she found her head in the air..', 'streich.leslie@sporer.com', '285.594.5788', 'hellerbergnaum.biz', 'Dolores tenetur ut incidunt non nihil odio. Id aut alias qui minus. Praesentium esse saepe vero neque voluptas dolorum nesciunt temporibus. Aspernatur est ut excepturi modi consequatur temporibus.', 'Ipsam porro pariatur consequuntur ut.', 'Gambia', 'NC', '2ea5fca0900de593e9f3062f2c0f1056880c3f83', 'http://lorempixel.com/640/480/', 0, 0, 0),
(27, 'Dr. Aric Blanda Jr.', 'Dashawn', '1992-02-23', 'Male', 'Koss Inc', 'c', 'Inc', 'impedit', 'Soup? Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the court. ''What do you know I''m mad?'' said Alice. ''What IS the same height as.', 'rdonnelly@gmail.com', '(244)490-658', 'moore.biz', 'Eius similique dolorum ut ut temporibus voluptas at. Facere incidunt explicabo ad laudantium. Et voluptatibus ut aut est.', 'Esse sit ut dolores voluptatem accusantium est consequatur.', 'United States of America', 'NC', '9710cb5d426704b328e9f834b7fff055de76e2a4', 'http://lorempixel.com/640/480/', 0, 0, 0),
(28, 'Kaitlyn Roberts', 'Adam', '1972-12-25', 'Female', 'McCullough, Dach and Towne', 'b', 'Inc', 'id', 'I think?'' he said to live. ''I''ve seen hatters before,'' she said to the game. CHAPTER IX. The Mock Turtle to the table for it, she found she could not tell whether they were nowhere to be told so..', 'kristy04@yahoo.com', '(428)521-583', 'schneidereffertz.com', 'Quas iste est dolores itaque. Harum alias aspernatur laboriosam. Voluptas necessitatibus rem quis quos.', 'Sit autem ipsa nulla provident accusantium repudiandae voluptatum dolorum.', 'Comoros', 'NE', 'dc38f33008d54844ce0b451e36e14920f629ea30', 'http://lorempixel.com/640/480/', 0, 0, 0),
(29, 'Alana Ferry', 'Harmon', '2015-04-10', 'Male', 'Muller, Keeling and Adams', 'c', 'Inc', 'voluptas', 'Alice, and sighing. ''It IS the same thing as a boon, Was kindly permitted to pocket the spoon: While the Owl and the baby violently up and ran till she fancied she heard a voice outside, and stopped.', 'clyde94@gmail.com', '1-190-247-82', 'batz.com', 'Rem in quidem dignissimos. Quisquam quia suscipit voluptatum et nulla aspernatur facere fuga. Non autem nobis alias.', 'Ducimus consectetur tempore sed in id.', 'Svalbard and Jan Mayen', 'NE', '698b2ef7269f45752edb6350571adc61b0e7abd0', 'http://lorempixel.com/640/480/', 0, 0, 0),
(51, 'AMRINE', 'Moussab Amine', '1994-07-18', 'male', 'Freelancer', 'student', 'ESI', 'Innovations agroÃ©cologiques appliquÃ©es Ã  lâ€™agriculture', 'assets/image/users/userCVPDF30.pdf', 'dm_amrine@esi.dz', '+21355549768', 'http://amrinemoussabamine.comli.com/', 'Votre Bibliographie', 'Votre publication', 'Algeria', 'Oued Smar', '123456789', 'assets/image/users/userIMG30.jpg', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
