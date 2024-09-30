
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- المزود: localhost
-- أنشئ في: 30 أغسطس 2014 الساعة 19:09
-- إصدارة المزود: 5.1.69
-- PHP إصدارة: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `u585511053_build`
--

-- --------------------------------------------------------

--
-- بنية الجدول `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `about`
--

INSERT INTO `about` (`about_id`, `photo`, `description`) VALUES
(1, 'million_listings.jpg', '<p><strong><span style="color: #333333; font-family: Arial, Verdana, sans-serif; font-size: 13px; line-height: 19.5px;">Be first in line to see U.S. homes not yet on the market, including Zillow&rsquo;s Coming Soon listings, pre-foreclosures and homes with a Make Me Move</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; position: relative; font-size: 0.8em; line-height: 0; vertical-align: baseline; top: -0.5em; color: #333333; font-family: Arial, Verdana, sans-serif;">&reg;</span><span style="color: #333333; font-family: Arial, Verdana, sans-serif; font-size: 13px; line-height: 19.5px;">&nbsp;price. This information is found only on Zillow, for free.</span></strong></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- بنية الجدول `adds`
--

CREATE TABLE IF NOT EXISTS `adds` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_300_250` longtext COLLATE utf8_unicode_ci NOT NULL,
  `add_720_90` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `adds`
--

INSERT INTO `adds` (`add_id`, `add_300_250`, `add_720_90`) VALUES
(1, '<a href="http://www.tkqlhce.com/click-7058689-10774543" target="_blank">\r\n<img src="http://www.tqlkg.com/image-7058689-10774543" width="300" height="250" alt="Stay Connected to Customers with Email Marketing" border="0"/></a>', '<a href="http://www.tkqlhce.com/click-7058689-11662771" target="_blank">\r\n<img src="http://www.ftjcfx.com/image-7058689-11662771" width="728" height="90" alt="" border="0"/></a>');

-- --------------------------------------------------------

--
-- بنية الجدول `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `agent_id` int(200) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`agent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- إرجاع أو استيراد بيانات الجدول `agent`
--

INSERT INTO `agent` (`agent_id`, `fullname`, `email`, `password`, `telephone`, `mobile`, `photo`, `description`, `active`) VALUES
(1, 'samyemad', 'samyemad4@gmail.com', 'samoooz8905', '0502213277', '01004983444', '10153923_10152321627362254_6465673483613347606_n.jpg', '<p>my name is samy emad i want to hire my home</p>', 1),
(3, 'ahmedemad', 'ahmedemad4@gmail.com', 'samoooz890', '01004983444', '0502213277', 'Lighthouse.jpg', '<p>samyemad</p>', 1),
(4, 'ahmedmohi', 'ahmedmohi@gmail.com', '2213277', '0502213277', '01004983444', '', '<p>hey i am ahmed mohi from egypt want to hire my states</p>', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- إرجاع أو استيراد بيانات الجدول `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `name`, `mobile`, `photo`) VALUES
(1, 'samyemad4@gmail.com', 'samyemad', '0100498344', '10153923_10152321627362254_6465673483613347606_n.jpg'),
(3, 'ahmedemad@gmail.com', 'ahmeemad', '01061216107', '1907377_760275984030272_7330867966509424834_n.jpg'),
(4, 'ahmedsameh@gmail.com', 'ahmedsameh', '01004983444', '1623758_772050112852859_6907685260183191034_n.jpg'),
(5, 'ahmedfahmi@gmail.com', 'ahmedfahmi', '0104788788745', 'freelancer.png'),
(6, 'ahmedmohi@gmail.com', 'ahmedmohi', '0145545484554', 'shopping.png');

-- --------------------------------------------------------

--
-- بنية الجدول `general_features`
--

CREATE TABLE IF NOT EXISTS `general_features` (
  `feature_id` int(11) NOT NULL AUTO_INCREMENT,
  `air` int(11) NOT NULL,
  `wifi` int(11) NOT NULL,
  `radio` int(11) NOT NULL,
  `dvd` int(11) NOT NULL,
  `terrace` int(11) NOT NULL,
  `balcony` int(11) NOT NULL,
  `parking` int(11) NOT NULL,
  `useofpool` int(11) NOT NULL,
  `bedding` int(11) NOT NULL,
  `computer` int(11) NOT NULL,
  `microwave` int(11) NOT NULL,
  `cabletv` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  PRIMARY KEY (`feature_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- إرجاع أو استيراد بيانات الجدول `general_features`
--

INSERT INTO `general_features` (`feature_id`, `air`, `wifi`, `radio`, `dvd`, `terrace`, `balcony`, `parking`, `useofpool`, `bedding`, `computer`, `microwave`, `cabletv`, `property_id`) VALUES
(6, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 2),
(7, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 4),
(58, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 20),
(57, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 19),
(53, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 18),
(11, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 5),
(12, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 6),
(19, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 1),
(21, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 3),
(22, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 7),
(24, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 8),
(32, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 9),
(33, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 10),
(34, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 11),
(38, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 12),
(39, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 13),
(45, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 14),
(46, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 15),
(47, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 16),
(48, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 17),
(59, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0, 0, 21),
(60, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 22),
(61, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 23),
(62, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 24),
(63, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 25);

-- --------------------------------------------------------

--
-- بنية الجدول `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `property_id` int(100) NOT NULL AUTO_INCREMENT,
  `property_title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `location` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `area` float NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `bathrooms` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `bedrooms` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `block` int(11) NOT NULL,
  `longitude` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL,
  `agent_block` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- إرجاع أو استيراد بيانات الجدول `properties`
--

INSERT INTO `properties` (`property_id`, `property_title`, `price`, `location`, `area`, `address`, `bathrooms`, `bedrooms`, `short_description`, `long_description`, `type`, `active`, `block`, `longitude`, `latitude`, `featured`, `agent_block`, `agent_id`) VALUES
(1, '311 E Broadway APT 3A', 1800, 'newyork', 60, 'near by Stuyvesant High', '5', '4', '311 BROADWAY(DUANE & THOMAS) PRIME TRIBECAUNIT 3a$7,450June', '<p><span style="color: #333333; font-family: Arial, Verdana, sans-serif; font-size: 13px; line-height: 18.369836807250977px;">1st 2000 SQUARE FEETGOOD FOR FOUR SHARESGREAT LIGHT!!CLASSIC OPEN LOFT W/ FLUTED COLUMNSELEVATOR BUILDING2 LUXURY TILE BATHS W/ JACUZZINEW WOOD FLOORING13 FOOT CEILINGSCHEFS KITCHEN WITH MICRO &amp; DISHWASHERBRICK WALLSWASHER DRYERUltimate RealtyCo-BrokeEmail&nbsp;</span></p>', 2, 1, 0, '       24.197611', '120.780512', 1, 0, 0),
(2, '90 Franklin St # 14FL', 2500, 'newyork', 200, 'near by P.S. 234 Independence School', '8', '6', 'This beautiful and spacious Tribeca home offers 5,000 square feet', '<p><span style="color: #333333; font-family: Arial, Verdana, sans-serif; font-size: 13px; line-height: 18.369836807250977px;">open views from four exposures, and 28 windows. The private loft residence is situated on a full-floor and is equipped with 4-5 bedrooms, spanning nine rooms in total. 90 Franklin Street includes a full-time doorman plus staff, private landing, central air, wood-burning fireplace, roof deck, and available storage complete the home. 1-2 year lease term</span></p>', 1, 1, 1, '  24.197611', '120.780512', 1, 0, 0),
(3, 'Studio Apartments for Rent in Al Khail Gate', 3500, 'dubai', 120, 'khali Gate -area 5', '5', '6', 'Al Khail Gate’s studio apartments offer attractive rents and great value conveniently close to the heart of the city', '<p><span style="font-family: DroidSans, Arial, Helvetica, sans-serif; font-size: 13px;">Al Khail Gate offers convenience and comfort, with round the clock security and facilities management, and is close to major highways such as Sheikh Mohammed bin Zayed Road &nbsp;Road and Sheikh Zayed Road. The development is modeled on sustainable housing developments worldwide, and creates an integrated community lifestyle for its residents. Apartments in phase 1 benefit from shaded parking and balconies, while those in phase 2 offer spacious layouts.</span></p>', 1, 1, 0, '     13500', '14500', 1, 0, 0),
(4, '21 Gloucester Road Ashburton Vic 3147', 950000, 'washington', 180, 'J A Cain First National - Camberwell 1156 Toorak Road Camberwell, Vic 3124', '1', '3', 'Situated in an upcoming pocket of this family friendly area, this modest residence is located only moments from High Street ', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">Three bedrooms and living room with gas heating provide comfortable accommodation whilst the kitchen includes a meals space. The floor plan is complete with extra utility room, main bathroom, separate laundry and single carport.&nbsp;</span></p>', 2, 1, 0, ' 24.197611', '120.780512', 1, 0, 1),
(5, '42 Eden Avenue Heathmont Vic 3135', 900000, 'washington', 200, 'Situated in an upcoming pocket of this family friendly area, this modest residence is located only moments from High', '4', '2', 'Positioned for lifestyle convenience, mere moments from the Dandenong Creek Trail', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">Heathmont College and Heathmont Station, this stately home boasts a standout location and incredible spaces perfectly proportioned for growing families. Offering a versatile layout which may be adapted as the occasion demands, the home welcomes with a large L-shaped formal lounge and dining room which leads to an updated kitchen and meals area. The adjacent family room offers a fantastic space for casual activities and seamlessly spills out to a covered alfresco deck complete with a built-in BBQ (connected to mains gas). Highly accommodating, the home is complete with 4 bedrooms which are generously sized and 2 bathrooms</span></p>', 2, 1, 0, ' 24.197611', '120.780512', 1, 0, 3),
(6, '11 Drummer Hill Lane Mooroolbark Vic 3138', 80000, 'washington', 140, 'Ray White - Ferntree Gully Unit 5/1849 Ferntree Gully Rd Ferntree Gully, Vic 3156', '4', '7', 'With its timeless style, elevated position and impressive views, this expansive home offers wonderful space and comfort for any large family', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">Sitting high above the roadside with its classically inspired facade, you step up to the covered front balcony and take in the panoramic views that stretch all the way to the CBD on a clear day. Then inside you wind a perfectly judged mix of warm colours, timber accents and high ceilings with decorative cornices and roses that make you feel right at home. It features a generous lounge room with open fire as well as an adjoining dining room and an open family/meals area incorporating the beautiful timber kitchen with all stainless appliances</span></p>', 2, 1, 0, ' 24.197611', '120.780512', 1, 0, 1),
(7, 'Beachside Broadbeach', 476000, 'washington', 250, '2729-2733 Gold Coast Highway, Broadbeach, Qld 4218', '4', '2', 'Every Gold Coast property cycle produces one great off-the-plan investment opportunity and we believe that opportunity is Synergy', '<p><span style="color: #757575; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">The Gold Coast property market is currently in a downturn, with sales volumes low and</span><span style="color: #757575; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">&nbsp;</span><span class="more" style="display: inline; color: #757575; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">prices well down on where they were five years ago. However, as it has in the past, it is sure to bounce back sometime in the future &ndash; some will look back and see how they have capitalised on the current downturn, others will look back at an opportunity lost</span></p>', 2, 1, 0, ' 24.197611', '120.780512', 1, 0, 0),
(8, '9A Audley Street Petersham NSW 2049', 100000, 'Balmain', 250, '222 Darling Street Balmain, NSW 2041', '4', '6', 'Contemporary home in a quiet yet central setting', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">Showcasing a designer feel dedicated to stylish contemporary living, this as-new residence has been created to provide an exceptional home for families of all ages. It boasts a quiet yet ultra-convenient setting, within minutes to shops and city buses.</span></p>', 1, 1, 0, '   24.197611', '120.780512', 1, 0, 0),
(9, '33 Leila Avenue Rasmussen Qld 4815', 300000, 'newyork', 250, 'Kalynda Parade Bohle Plains, Qld 4817', '4', '1', 'Fall in love with the space, neatness and joy this residence offers.', '', 1, 1, 0, '  24.197611', '120.775512', 1, 0, 0),
(10, '5 Settlers Court Vermont South Vic 3133', 25000, 'Blackburn', 160, 'Suite 1, 60-64 Railway Road', '2', '4', 'Beautifully tended gardens greet you at this spacious, comfortable ', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">This jewel in the crown is sure to delight and bursting with features for easy, everyday living including formal lounge, sitting room, large comfortable living room with cosy combustion wood fire, open plan meals area/family room leading to modern galley kitchen with servery hatch</span></p>', 2, 1, 0, '  24.197500', '120.780300', 0, 0, 0),
(11, '5-9 Canopus Crescent Lara Vic 3212', 33500, 'Melbourne', 240, 'Level 29, 367 Collins Street', '4', '2', 'GRAND LAUNCH - 2nd AUGUST !', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">Situated within easy walking distance to local village centre, community centres, childcare, schools, library, medical centres and railway station, this near new project of 9 villa / homes offers a boost of features including, huge open plan living, kitchen with an abundance of benchspace and storage, a fully fenced levelled rear yard ideal for the keen retire / gardener who is looking to add their own touches or a young family seeking a private space for a growing family.&nbsp;</span></p>', 2, 1, 0, '  24.197250', '120.780200', 1, 0, 0),
(12, 'Queen Street Brisbane City Qld 4000', 35000, 'newyork', 250, '5/572 Brunswick Street', '2', '2', 'Stunning Heritage Apartment in the Heart of the CBD', '', 2, 1, 0, '  24.197611', '120.780512', 1, 0, 0),
(13, '44 Counihan Crescent Port Hedland WA 6721', 450000, 'Leederville', 280, '3/604 Newcastle Street', '2', '2', '“Luxurious Living in the Pilbara” – Situated in the prestigious suburb of Pretty Pool, Port Hedland', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">Indian Ocean Suites brings the comfort and convenience of a city lifestyle with architecturally designed apartments in a resort style complex.</span></p>', 1, 1, 0, '  24.137611', '120.550512', 1, 0, 0),
(15, 'Cnr Nuwarra Rd & Maddecks Ave, Moorebank, NSW 2170', 25000, 'Sydney', 140, 'south-western Sydney', '5', '8', 'Georges Fair is a flourishing, vibrant address, and the ideal location to see your dreams of a luxurious new home come to life.', '<ul class="features" style="margin: 0px 0px 10px; padding: 0px; list-style: none; color: #757575; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 17px;">\r\n<li class=" rui-icon rui-icon-arrow-right" style="margin: 0px; padding: 0px; list-style: none; line-height: 1.4em;">Diverse homesites from 300sqm to 1,000sqm</li>\r\n<li class=" rui-icon rui-icon-arrow-right" style="margin: 0px; padding: 0px; list-style: none; line-height: 1.4em;">Fringed by 35 hectares of natural bushland</li>\r\n<li class=" rui-icon rui-icon-arrow-right" style="margin: 0px; padding: 0px; list-style: none; line-height: 1.4em;">Numerous landscaped parks and open reserves</li>\r\n<li class=" rui-icon rui-icon-arrow-right" style="margin: 0px; padding: 0px; list-style: none; line-height: 1.4em;">Putting distance from New Brighton Golf Course</li>\r\n</ul>', 1, 1, 0, ' 24.197611', '120.780512', 1, 0, 1),
(14, '283 Karoo Road Rowville Vic 3178', 325000, 'Rowville', 250, 'Shop 6, 1091 Stud Road', '4', '4', 'A Home Fit For Work, Rest and Play', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">Nothing beats a commanding street presence and a location of such convenience and family appeal, especially when it also details attractive outdoor entertaining areas and an interior suitable for a modern, growing family</span></p>', 2, 1, 0, ' 24.197611', '120.780512', 1, 0, 1),
(16, '144 McKinnon Road McKinnon Vic 3204', 25800, 'SouthYarra', 250, 'Level 2, 102-108 Toorak Road', '5', '4', 'Brand New Designer Boutique Apartments with Car Park', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">Situated in the burgeoning suburb of McKinnon, this stylish new development delivers a boutique selection of only 14 apartments perfectly positioned to take advantage of all the village has to offer.</span></p>', 2, 1, 0, ' 24.197550', '120.775512', 1, 1, 4),
(17, '1345 Centre Road Clayton Vic 3168', 254800, 'Clayton', 250, '280 Clayton Rd Clayton, Vic 3168', '4', '4', 'ART DECO HIDDEN GEM ON 752SQM IN THE HEART OF CLAYTON', '<p><span style="color: #3b3b3b; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px;">This solidly built family home full of Art Deco character &amp; charm sits on a block of approximately 752sqm, being a prime candidate for further development where you could keep the home and build behind, or simply start from scratch and design a multi-unit development site (all options are STCA).&nbsp;</span></p>', 1, 1, 0, ' 24.197611', '120.775512', 0, 1, 4),
(18, '2/61 Lahona Avenue Bentleigh East Vic 3165', 325000, 'Oakleigh', 220, '7-9 Atherton Road Oakleigh, Vic 3166', '2', '2', 'Light & bright and ready to move in!', '', 1, 1, 0, ' 24.197611', '120.780512', 0, 1, 4),
(19, '65 Warrane Road Willoughby NSW 2068', 325000, ' Willoughby', 250, '1/181 High Street Willoughby, NSW 2068', '2', '2', 'Exquisite family sanctuary in a peaceful locale', '', 1, 1, 0, ' 24.197611', '120.780512', 1, 1, 4),
(20, '1-28 Fernhill Place Diddillibah Qld 4559', 324780, 'Sunshine', 240, 'Diddillibah Road Diddillibah, Qld 4559', '4', '4', 'WALKER FARM - NOW ONLY 4 ACREAGE LOTS REMAINING', '', 2, 0, 0, ' 24.197611', '120.775512412', 0, 1, 4),
(21, '3/12 Fawkner Road Pascoe Vale Vic 3044', 25000, 'NelsonAlexander', 210, '345 Gaffney Street Pascoe Vale, Vic 3044', '4', '6', 'GREAT VALUE LOW MAINTENANCE LIVING!', '', 2, 0, 0, ' 24.197200', '120.780300', 0, 1, 4),
(22, '202/97 Flemington Road North Melbourne Vic 3051', 325000, 'NorthMelbourne', 250, '79 Errol Street North Melbourne, Vic 3051', '4', '4', 'Commanding Corner Position', '', 1, 1, 0, ' 24.197611', '120.775512', 0, 1, 4),
(23, '4003/200 Spencer Street Melbourne Vic 3000', 450000, 'HAWTHORN', 160, '41 Burwood Road Hawthorn, Vic 3122', '4', '4', 'Sleek designer living', '', 1, 1, 0, ' 24.197611', '120.780512', 0, 1, 4),
(24, '68 The Eyrie Eaglemont Vic 3084', 258000, 'Northcote', 200, '436 - 438 High Street Northcote, Vic 3070', '4', '6', 'State-of-the-Art Deco Luxury with City Panorama', '', 1, 1, 0, ' 24.197611', '120.775512', 0, 1, 4),
(25, '93 Stockdale Avenue Bentleigh East Vic 3165', 250000, ' Bentleigh', 210, 'Level 1, 269 Centre Road Bentleigh, Vic 3204', '4', '2', 'Sophisticated, Single-level Sensation', '', 2, 1, 0, ' 24.19761400', '120.780300', 0, 1, 4);

-- --------------------------------------------------------

--
-- بنية الجدول `property_photo`
--

CREATE TABLE IF NOT EXISTS `property_photo` (
  `pro_photo_id` int(100) NOT NULL AUTO_INCREMENT,
  `photo` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `property_id` int(100) NOT NULL,
  PRIMARY KEY (`pro_photo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=150 ;

--
-- إرجاع أو استيراد بيانات الجدول `property_photo`
--

INSERT INTO `property_photo` (`pro_photo_id`, `photo`, `property_id`) VALUES
(1, 'IS13fovrdcq5m41000000000.jpg', 1),
(2, 'IS99h0eyhky2m41000000000.jpg', 1),
(3, 'ISptjwdxowra8e0000000000.jpg', 1),
(4, 'IStwccdl94i8m41000000000.jpg', 1),
(5, 'IS5mobkemddisi0000000000.jpg', 2),
(6, 'ISl63h30bze20m0000000000.jpg', 2),
(10, 'AKG-Gallery-01.jpg', 3),
(11, 'AKG-Gallery-02.jpg', 3),
(36, 'image2.jpg', 4),
(37, 'image3.jpg', 4),
(38, 'image4.jpg', 4),
(39, 'image5.jpg', 4),
(40, 'image6.jpg', 4),
(41, 'main.jpg', 4),
(42, 'image2b.jpg', 5),
(43, 'image3b.jpg', 5),
(44, 'image4b.jpg', 5),
(45, 'image5b.jpg', 5),
(46, 'image6b.jpg', 5),
(47, 'image7b.jpg', 5),
(48, 'image8b.jpg', 5),
(49, 'image9b.jpg', 5),
(50, 'image10b.jpg', 5),
(51, 'main2.jpg', 5),
(52, 'image2c.jpg', 6),
(53, 'image3c.jpg', 6),
(54, 'image4c.jpg', 6),
(55, 'image5c.jpg', 6),
(56, 'image6c.jpg', 6),
(57, 'image7c.jpg', 6),
(58, 'image8c.jpg', 6),
(59, 'mainc.jpg', 6),
(68, 'image2f.jpg', 7),
(69, 'mainf.jpg', 7),
(70, 'image2t.jpg', 8),
(71, 'image3t.jpg', 8),
(72, 'maint.jpg', 8),
(91, 'image2l.jpg', 10),
(90, 'mainw.jpg', 9),
(89, 'image3w.jpg', 9),
(92, 'mainl.jpg', 10),
(93, 'image2we.jpg', 11),
(94, 'image3we.jpg', 11),
(95, 'main2we.jpg', 11),
(105, 'main2wera.jpg', 13),
(104, 'main33rt.jpg', 12),
(103, 'image333rft.jpg', 12),
(112, 'main258ty.jpg', 14),
(111, 'image25ytr.jpg', 14),
(113, 'image2erty58.jpg', 15),
(114, 'mainrety24.jpg', 15),
(115, 'image2578op.jpg', 16),
(116, 'main258tyj.jpg', 16),
(117, 'image254789.jpg', 17),
(118, 'main258744.jpg', 17),
(127, 'image25874tyusw.jpg', 18),
(128, 'main25847ty.jpg', 18),
(135, 'image25874kjrt85.jpg', 19),
(136, 'maingfrt258kj.jpg', 19),
(137, 'image25478fgtrv.jpg', 20),
(138, 'main258741658dfr.jpg', 20),
(139, 'image254789kj.jpg', 21),
(140, 'main258741lov.jpg', 21),
(142, 'image25478965gy.jpg', 22),
(143, 'main5478965gh.jpg', 22),
(144, 'image254785gthfer.jpg', 23),
(145, 'main5478521hghds.jpg', 23),
(146, 'image357875kj74.jpg', 24),
(147, 'image254778750.jpg', 24),
(148, 'image25478542ghy.jpg', 25),
(149, 'main25478520tyg.jpg', 25);

-- --------------------------------------------------------

--
-- بنية الجدول `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(50) NOT NULL AUTO_INCREMENT,
  `slider_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- إرجاع أو استيراد بيانات الجدول `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_pic`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(4, '3.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `social_links`
--

CREATE TABLE IF NOT EXISTS `social_links` (
  `social_link_id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pinterest` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`social_link_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `social_links`
--

INSERT INTO `social_links` (`social_link_id`, `facebook`, `twitter`, `google_plus`, `pinterest`, `linkedin`) VALUES
(1, 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google-plus.com', 'http://www.pinterest.com', 'http://www.linkedin.com');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `address`, `city`, `longitude`, `latitude`) VALUES
(1, 'admin', 'admin', 'samyemad4@gmail.com', 'Hotel Tenere', 'Niamey', '13.500479', '2.125254');

-- --------------------------------------------------------

--
-- بنية الجدول `web_seo`
--

CREATE TABLE IF NOT EXISTS `web_seo` (
  `web_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`web_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `web_seo`
--

INSERT INTO `web_seo` (`web_id`, `title`, `description`, `keywords`) VALUES
(1, 'samyemadmostafakamal', '<p>fgopidfjgilfdjgldfjglkdfjgkldf</p>', '<p>herthrekghrdukghdfukghfdkjghfkd</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
