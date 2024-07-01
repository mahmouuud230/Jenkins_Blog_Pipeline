-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2024 at 01:04 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21637341_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `id` int(11) NOT NULL DEFAULT 0,
  `age` int(11) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `degree` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `description`, `image`, `id`, `age`, `phone`, `city`, `degree`) VALUES
('Mohammad Ali', 'admin@gmail.com', 'Thanks for looking! I\'m David, and this is my travel blog. I\'m an American who has been traveling the world full time for 8 years. Nowadays, I\'m usually in Bali, Indonesia, with my wife Intan', 'IMG-659552ba399fe9.95062819.jpg', 0, 30, '03030330', 'New York', 'PHD');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `navbar_status` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`, `image`) VALUES
(1, 'Miami', 'php/main', 'Miami is a city located in southeastern Florida, United States. It is the seat of Miami-Dade county and is situated on Biscayne Bay at the mouth of the Miami River. Miami is a major transportation and business hub, and is known for its pristine beaches, Art Deco architecture, and non-stop nightlife. The Everglades area is located a short distance to the west1. Miami is also home to the Miami Heat basketball team2', 'Miami', 'Miami is a city located in southeastern Florida, United States. It is the seat of Miami-Dade county and is situated on Biscayne Bay at the mouth of the Miami River. Miami is a major transportation and business hub, and is known for its pristine beaches, Art Deco architecture, and non-stop nightlife. The Everglades area is located a short distance to the west1. Miami is also home to the Miami Heat basketball team2', 'Miami beaches', 0, 0, '2023-12-13 11:19:15', 'IMG-6593086e206da9.55084757.jpg'),
(2, 'Bangkok', 'html-tutorial', 'Bangkok is the capital and most populous city of Thailand, with a population of over 10 million people 12. It is the only cosmopolitan city in a country of small towns and villages and is Thailand’s cultural and commercial center 12. Bangkok is located on the delta of the Chao Phraya River, about 25 miles (40 km) from the Gulf of Thailand.', 'Bangkok', 'Bangkok is the capital and most populous city of Thailand, with a population of over 10 million people 12. It is the only cosmopolitan city in a country of small towns and villages and is Thailand’s cultural and commercial center 12. Bangkok is located on the delta of the Chao Phraya River, about 25 miles (40 km) from the Gulf of Thailand 1.', 'Bangkok City', 0, 0, '2023-12-13 11:22:16', 'IMG-65956248b05814.26859212.jpg'),
(3, 'Bergen, Norway', '-', '---', '-', '-', '-', 0, 0, '2023-12-28 19:34:09', 'IMG-6595673b5378b8.96343661.jpg'),
(4, 'Amsterdam', '-', '-', '-', '-', '-', 0, 0, '2023-12-28 19:35:07', 'IMG-659564973ddb89.34167032.jpg'),
(5, 'Cape Town', '-', '-', '-', '-', '-', 0, 0, '2023-12-28 19:38:56', 'IMG-659565258d2690.38508005.jpg'),
(6, 'Petra', '-', '-', '-', '-', '-', 0, 0, '2023-12-28 19:39:18', 'IMG-65956578c05980.55869292.jpg'),
(7, 'Venice', '-', '-', '-', '-', '-', 0, 0, '2024-01-01 07:02:04', 'IMG-659565e5dcab69.94895087.jpg'),
(8, 'Cappadocia', '-', '-', '-', '-', '-', 0, 0, '2024-01-01 07:02:29', 'IMG-65956697e0ab12.60411021.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `post_id`) VALUES
(1, 'Mahmoud Alakkad', 'admin@gmail.com', 'My first comment', 2),
(2, 'Salim', 'user@gmail.com', ' Panorama Tower and the Four Seasons Hotel Miami1. The skyline ranks as the fourth largest in North America and the 28th largest in the world.', 2),
(3, 'Hani', 'user_k@gmail.com', 'Good Morning!', 8),
(4, 'Mohammad', 'mhmd@gmail.com', 'Beach-Miami', 1),
(5, 'John Doe', 'john@doe.com', 'Hello!', 13),
(6, 'John Doe', 'john@doe.com', 'Hello!', 13),
(7, 'John Doe', 'john@doe.com', 'Hello World!', 38);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `aid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`, `aid`) VALUES
(1, 1, 'Beach-Miami', '', 'Miami Beach is a coastal resort city in Miami-Dade County, Florida, United States. It is part of the Miami metropolitan area of South Florida. The municipality is located on natural and human-made barrier islands between the Atlantic Ocean and Biscayne Bay, the latter of which separates the Beach from the mainland city of Miami ', 'IMG-6588d15b402c03.14969363.jpg', 'Beach-Miami', 'Miami Beach is a coastal resort city in Miami-Dade County, Florida, United States. It is part of the Miami metropolitan area of South Florida. The municipality is located on natural and human-made barrier islands between the Atlantic Ocean and Biscayne Bay, the latter of which separates the Beach from the mainland city of Miami ', 'Beach', 0, '2023-12-20 11:39:36', 0),
(2, 1, 'Miami Florida Skyline', '', 'Miami’s skyline is a sight to behold, with its towering skyscrapers and stunning waterfront views. The city is home to some of the tallest buildings in Florida, including the Panorama Tower and the Four Seasons Hotel Miami1. The skyline ranks as the fourth largest in North America and the 28th largest in the world1.', 'IMG-6582d5188d2bc4.36363425.jpg', 'Miami Florida Skyline', 'Miami’s skyline is a sight to behold, with its towering skyscrapers and stunning waterfront views. The city is home to some of the tallest buildings in Florida, including the Panorama Tower and the Four Seasons Hotel Miami1. The skyline ranks as the fourth largest in North America and the 28th largest in the world1.', 'Skyline', 0, '2023-12-20 11:50:48', 0),
(3, 1, 'Sunrise Miami Nature', '', 'Miami is known for its beautiful sunrises, and there are many great spots to catch them. According to The Good Men Project, some of the best places to watch the sunrise in Miami include, South Beach: One of the most well-known beaches in Miami, South Beach is a great spot to watch the sunrise.', 'IMG-6582d95e02acd6.02778579.jpg', 'Sunrise Miami Nature', 'Miami is known for its beautiful sunrises, and there are many great spots to catch them. According to The Good Men Project, some of the best places to watch the sunrise in Miami include, South Beach: One of the most well-known beaches in Miami, South Beach is a great spot to watch the sunrise. You can easily find a place to relax on the sand and listen to the waves as the sun peeks over the horizon, rising slowly over the ocean.', 'Sunrise', 1, '2023-12-20 12:09:02', 0),
(4, 1, 'Miami Old Cars', '', 'Old-fashioned cars are a sight to behold, with their unique designs and classic features. According to Town & Country Magazine, some of the best vintage cars of all time include, 1967 Chevy Corvette: The second generation of the Chevy Corvette is considered the most iconic American car ever made. \r\n', 'IMG-6582e6a166e731.88030125.jpg', 'Miami Old Cars ', 'Old-fashioned cars are a sight to behold, with their unique designs and classic features. According to Town & Country Magazine, some of the best vintage cars of all time include, 1967 Chevy Corvette: The second generation of the Chevy Corvette is considered the most iconic American car ever made.', 'Old Cars', 0, '2023-12-20 13:05:37', 0),
(5, 1, 'Florida Everglades', '', 'The Everglades is a subtropical wetland ecosystem spanning two million acres across central and south Florida. During the wet season, Lake Okeechobee overflows, releasing water into a very slow moving, shallow river dominated by sawgrass marsh—dubbed the “river of grass.', 'IMG-6582e836e61450.10457368.jpg', 'Florida Everglades', 'The Everglades is a subtropical wetland ecosystem spanning two million acres across central and south Florida. During the wet season, Lake Okeechobee overflows, releasing water into a very slow moving, shallow river dominated by sawgrass marsh—dubbed the “river of grass.', 'Florida', 0, '2023-12-20 13:12:22', 0),
(6, 1, 'Sunrise Miami Nature', '', 'Miami is known for its beautiful sunrises, and there are many great spots to catch them. According to The Good Men Project, some of the best places to watch the sunrise in Miami include, South Beach: One of the most well-known beaches in Miami, South Beach is a great spot to watch the sunrise.', 'IMG-659267362b38b8.49423725.jpg', 'Sunrise Miami Nature', 'Miami is known for its beautiful sunrises, and there are many great spots to catch them. According to The Good Men Project, some of the best places to watch the sunrise in Miami include, South Beach: One of the most well-known beaches in Miami, South Beach is a great spot to watch the sunrise.', 'Sunrise ', 1, '2023-12-20 13:19:05', 0),
(7, 1, 'Miami Palm Trees', '', 'Miami is home to a variety of palm trees that thrive in the city’s subtropical climate. According to Palmco, a palm tree nursery in Miami, there are over 20 varieties of tropical and cold hardy palms that can increase the beauty, value, and appeal of your landscape', 'IMG-65898eba0b2699.28895748.jpg', 'Miami Palm Trees', 'Miami is home to a variety of palm trees that thrive in the city’s subtropical climate. According to Palmco, a palm tree nursery in Miami, there are over 30 varieties of tropical and cold hardy palms that can increase the beauty, value, and appeal of your landscape', 'Palm Trees', 0, '2023-12-20 13:28:27', 0),
(8, 1, 'Miami Florida City', 'jkfas', 'Miami (/maɪˈæmi/ my-AM-ee), officially the City of Miami, is a coastal metropolis and the seat of Miami-Dade County in South Florida. With a population of 442,241 as of the 2020 census,[6] it is the second-most populous city in the U.S. state of Florida after Jacksonville. It is the core of the much larger Miami metropolitan area.', 'IMG-65893aa5f04e26.36048098.jpg', 'Miami Florida Ciry', 'Miami (/maɪˈæmi/ my-AM-ee), officially the City of Miami, is a coastal metropolis and the seat of Miami-Dade County in South Florida. With a population of 442,241 as of the 2020 census,[6] it is the second-most populous city in the U.S. state of Florida after Jacksonville. It is the core of the much larger Miami metropolitan area, which, with a population of 6.14 million, is the second-largest metropolitan region in the Southeast and ninth-largest metropolitan region in the United States.[9] Miami has the third-largest skyline in the U.S. with over 300 high-rises,[13] 58 of which exceed 491 ft (150 m)', 'Florida, City', 0, '2023-12-24 11:59:39', 0),
(9, 2, 'Bangkok, River, Market', '', 'Bangkok is famous for its river markets, also known as floating markets. One such market is the Bang Nam Phueng Floating Market located in Bangkok. It is more of a riverside market with boats parked along the Chao Phraya River. The market has the usual variety of boats and stalls selling fresh produce, plants, and opportunities to purchase fried and grilled food', 'IMG-658bc329a52b70.90481329.jpg', 'Bangkok, River, Market', 'Bangkok is famous for its river markets, also known as floating markets. One such market is the Bang Nam Phueng Floating Market located in Bangkok. It is more of a riverside market with boats parked along the Chao Phraya River. The market has the usual variety of boats and stalls selling fresh produce, plants, and opportunities to purchase fried and grilled food', 'River, Market', 0, '2023-12-25 15:32:57', 0),
(11, 2, 'Bangkok, Thailand', '', 'The floating markets in Bangkok are a unique way to experience the exotic culture and life of Thailand. The markets are characterized by long-tail boats, ancient and traditional houses, and shouting vendors', 'IMG-658a97f692cbe7.87654145.jpg', 'Bangkok, Thailand, Floating market', 'The floating markets in Bangkok are a unique way to experience the exotic culture and life of Thailand. The markets are characterized by long-tail boats, ancient and traditional houses, and shouting vendors', 'Floating Market', 0, '2023-12-26 09:08:06', 0),
(12, 3, 'Mountains, Snow, Hills', '-', 'Mountains, snow, and hills are all natural landforms that can be found in various parts of the world. Mountains are large landforms that rise high above the surrounding landscape, often with steep slopes and sharp or rounded ridges 1. Snow-capped mountains are those that have snow on the top, which can create a beautiful and awe-inspiring sight 2.', 'IMG-659316e8c8dd19.24621429.jpg', 'Mountains, Snow, Hills', 'Mountains, snow, and hills are all natural landforms that can be found in various parts of the world. Mountains are large landforms that rise high above the surrounding landscape, often with steep slopes and sharp or rounded ridges 1. Snow-capped mountains are those that have snow on the top, which can create a beautiful and awe-inspiring sight 2.', 'Mountains', 0, '2024-01-01 16:48:52', 0),
(13, 5, 'Cape town, Nature, Beach', '-', 'Cape Town is a beautiful coastal city in South Africa that is known for its stunning natural scenery and pristine beaches. The city is bordered by both the Indian Ocean and the Atlantic Ocean, which means there are many beaches to choose from.', 'IMG-65931887556048.07408635.jpg', 'Cape town, Nature, Beach', 'Cape Town is a beautiful coastal city in South Africa that is known for its stunning natural scenery and pristine beaches. The city is bordered by both the Indian Ocean and the Atlantic Ocean, which means there are many beaches to choose from.', '-', 0, '2024-01-01 17:56:21', 0),
(14, 5, 'Sunset skies, Clouds', '-', 'Sunsets are a beautiful and awe-inspiring sight, with the sky often painted in a range of colors from reds and oranges to pinks and purples. Clouds can play a big role in the appearance of a sunset, with their shapes and colors adding to the overall effect.', 'IMG-659319d968ba74.33624411.jpg', 'Sunset skies, Clouds', 'Sunsets are a beautiful and awe-inspiring sight, with the sky often painted in a range of colors from reds and oranges to pinks and purples. Clouds can play a big role in the appearance of a sunset, with their shapes and colors adding to the overall effect.', 'Clouds', 0, '2024-01-01 18:04:24', 0),
(15, 3, 'Bergen, Rainy day', '-', 'Bergen, known for its charm, is often draped in mist and rain. On a rainy day, the city transforms into a mesmerizing spectacle—the cobblestone streets glisten, colorful houses stand out against the gray skies, and the fjords emanate a serene beauty. People bustling with umbrellas create a picturesque scene amidst the rainfall, adding to Bergen\'s unique allure.', 'IMG-6592ffe4dd6e00.83696962.jpg', 'Bergen, Rainy day ', 'Bergen, known for its charm, is often draped in mist and rain. On a rainy day, the city transforms into a mesmerizing spectacle—the cobblestone streets glisten, colorful houses stand out against the gray skies, and the fjords emanate a serene beauty. People bustling with umbrellas create a picturesque scene amidst the rainfall, adding to Bergen\'s unique allure.', 'Damp day in Bergen ', 0, '2024-01-01 18:09:40', 0),
(16, 3, 'Bergen, Beautiful Flowers ', '', '   In Bergen, the landscape transforms into a kaleidoscope of blooming wonders. The city\'s gardens burst with the radiant elegance of roses, while cascades of vibrant geraniums spill over balconies, adding dashes of color to the charming streets. Magnificent hydrangeas grace the corners, and the scent of lilacs wafts through the air, infusing the city with an intoxicating fragrance. Bergen becomes an enchanting canvas painted with nature\'s most exquisite floral masterpieces.', 'IMG-659307878731d8.52346292.jpg', 'Bergen, Beautiful flowers ', '   In Bergen, the landscape transforms into a kaleidoscope of blooming wonders. The city\'s gardens burst with the radiant elegance of roses, while cascades of vibrant geraniums spill over balconies, adding dashes of color to the charming streets. Magnificent hydrangeas grace the corners, and the scent of lilacs wafts through the air, infusing the city with an intoxicating fragrance. Bergen becomes an enchanting canvas painted with nature\'s most exquisite floral masterpieces.', 'Scenic floral blooms in Bergen ', 0, '2024-01-01 18:42:15', 0),
(17, 3, 'Bergen, Norway, Houses', '', 'The houses in Bergen, Norway, contribute to the city\'s charming and picturesque atmosphere. Many of these houses are traditionally built with wooden facades painted in vivid and cheerful colors, such as reds, yellows, blues, and greens. They often feature steeply pitched roofs to withstand heavy rainfall and are adorned with white trimmings and decorative details, adding to their unique character. The city\'s houses stand closely together along narrow, cobblestone streets, creating a delightful and quaint architectural ensemble, enhancing Bergen\'s distinctive beauty.', 'IMG-659308a91f41f9.39551133.jpg', 'Bergen, Norway, Houses', 'The houses in Bergen, Norway, contribute to the city\'s charming and picturesque atmosphere. Many of these houses are traditionally built with wooden facades painted in vivid and cheerful colors, such as reds, yellows, blues, and greens. They often feature steeply pitched roofs to withstand heavy rainfall and are adorned with white trimmings and decorative details, adding to their unique character. The city\'s houses stand closely together along narrow, cobblestone streets, creating a delightful and quaint architectural ensemble, enhancing Bergen\'s distinctive beauty.', 'Bergen properties ', 0, '2024-01-01 18:47:05', 0),
(18, 2, 'Bangkok , traffic ', '', 'Bangkok, the bustling capital of Thailand, is notorious for its heavy traffic congestion. The city\'s streets often experience gridlock, especially during rush hours, where vehicles move slowly, contributing to the chaotic urban landscape. The mix of cars, motorcycles, tuk-tuks, and buses creates a vibrant yet challenging commuting environment, requiring patience and strategic navigation for residents and visitors alike.', 'IMG-65930a0356d0b9.18669327.jpg', 'Bangkok , traffic ', 'Bangkok, the bustling capital of Thailand, is notorious for its heavy traffic congestion. The city\'s streets often experience gridlock, especially during rush hours, where vehicles move slowly, contributing to the chaotic urban landscape. The mix of cars, motorcycles, tuk-tuks, and buses creates a vibrant yet challenging commuting environment, requiring patience and strategic navigation for residents and visitors alike.', 'Bergen road congestion ', 0, '2024-01-01 18:52:51', 0),
(19, 2, 'Bangkok, Temples', '', '  Bangkok, Thailand, boasts several magnificent temples, each showcasing intricate architecture and cultural significance. Wat Phra Kaew, situated within the Grand Palace complex, houses the revered Emerald Buddha statue and stunning ornate structures adorned with colorful designs. Wat Pho, known for its massive reclining Buddha statue and renowned Thai massage school, offers a serene atmosphere amidst beautifully crafted pagodas. Wat Arun, with its distinctive spires and riverside location, provides breathtaking views of the Chao Phraya River. These temples stand as iconic symbols of Thailand\'s rich history and religious heritage.', 'IMG-65930af220b271.52533075.jpg', 'Bangkok, Temples', '  Bangkok, Thailand, boasts several magnificent temples, each showcasing intricate architecture and cultural significance. Wat Phra Kaew, situated within the Grand Palace complex, houses the revered Emerald Buddha statue and stunning ornate structures adorned with colorful designs. Wat Pho, known for its massive reclining Buddha statue and renowned Thai massage school, offers a serene atmosphere amidst beautifully crafted pagodas. Wat Arun, with its distinctive spires and riverside location, provides breathtaking views of the Chao Phraya River. These temples stand as iconic symbols of Thailand\'s rich history and religious heritage.', 'Bangkok religious sites', 0, '2024-01-01 18:56:50', 0),
(20, 2, 'Bangkok , Food ', '', '  Bangkok is a food lover\'s paradise, offering a diverse and vibrant culinary scene. From bustling street food markets like Yaowarat (Chinatown) with its delectable array of Thai-Chinese cuisine to the floating markets where fresh seafood and local dishes are prepared on boats, the city is a gastronomic delight.\r\n', 'IMG-65930b938bfb93.80696394.jpg', 'Bangkok , Food ', '  Bangkok is a food lover\'s paradise, offering a diverse and vibrant culinary scene. From bustling street food markets like Yaowarat (Chinatown) with its delectable array of Thai-Chinese cuisine to the floating markets where fresh seafood and local dishes are prepared on boats, the city is a gastronomic delight.\r\n', 'Bangkok cuisine ', 0, '2024-01-01 18:59:31', 0),
(21, 4, 'Amsterdam city ,Canals', '', 'Amsterdam, renowned for its captivating canals, is a city where waterways intertwine among stunning architecture and historical landmarks. The canals, like arteries, breathe life into the city, adorned by picturesque bridges connecting cobbled streets lined with diverse buildings, each with its own story to tell. The serene water reflects the charm of Amsterdam, inviting visitors to explore its cultural treasures and unique atmosphere.', 'IMG-65930cb762be86.77506276.jpg', 'Amsterdam city , Canals ', 'Amsterdam, renowned for its captivating canals, is a city where waterways intertwine among stunning architecture and historical landmarks. The canals, like arteries, breathe life into the city, adorned by picturesque bridges connecting cobbled streets lined with diverse buildings, each with its own story to tell. The serene water reflects the charm of Amsterdam, inviting visitors to explore its cultural treasures and unique atmosphere.', 'Amsterdam water ways', 0, '2024-01-01 19:04:23', 0),
(22, 4, 'Amsterdam, Travel', '', 'Amsterdam beckons travelers with its captivating blend of rich history, cultural vibrancy, and scenic beauty. The city\'s iconic canals, adorned with historic buildings and picturesque bridges, offer a mesmerizing backdrop for exploration. Visitors can indulge in world-class art at renowned museums like the Rijksmuseum and Van Gogh Museum, savor diverse cuisines at bustling markets, and immerse themselves in the vibrant nightlife. Biking along the charming streets and experiencing the warm hospitality of the locals adds to the allure of this enchanting European destination.', 'IMG-65930d87d6ebf8.33600418.jpg', 'Amsterdam, Travel', 'Amsterdam beckons travelers with its captivating blend of rich history, cultural vibrancy, and scenic beauty. The city\'s iconic canals, adorned with historic buildings and picturesque bridges, offer a mesmerizing backdrop for exploration. Visitors can indulge in world-class art at renowned museums like the Rijksmuseum and Van Gogh Museum, savor diverse cuisines at bustling markets, and immerse themselves in the vibrant nightlife. Biking along the charming streets and experiencing the warm hospitality of the locals adds to the allure of this enchanting European destination.', 'Amsterdam sightseeing ', 0, '2024-01-01 19:07:51', 0),
(23, 4, 'Amsterdam, Hotels', '', 'Amsterdam offers a diverse array of hotels catering to various preferences and budgets. From luxurious canal-side boutique hotels offering stunning views and top-notch amenities to cozy bed-and-breakfasts nestled in historic buildings, the city accommodates a wide range of travelers. There are also contemporary and stylish chain hotels providing modern comforts, as well as budget-friendly options such as hostels and guesthouses for those seeking more affordable stays. Visitors can find accommodations in various neighborhoods, each offering its own unique charm and proximity to attractions.', 'IMG-65930e89758c97.78727337.jpg', 'Amsterdam, Hotels', 'Amsterdam offers a diverse array of hotels catering to various preferences and budgets. From luxurious canal-side boutique hotels offering stunning views and top-notch amenities to cozy bed-and-breakfasts nestled in historic buildings, the city accommodates a wide range of travelers. There are also contemporary and stylish chain hotels providing modern comforts, as well as budget-friendly options such as hostels and guesthouses for those seeking more affordable stays. Visitors can find accommodations in various neighborhoods, each offering its own unique charm and proximity to attractions.', 'Amsterdam lodgings', 0, '2024-01-01 19:12:09', 0),
(24, 4, 'Amsterdam, Street, Bicycle ', '', '  Amsterdam\'s streets are a vibrant tapestry woven with bicycles, reflecting the city\'s deep cycling culture. As you traverse these streets, you\'ll witness a colorful array of bikes parked along canals and bustling squares, with locals and tourists alike navigating the city on two wheels. The dedicated bike lanes, flanked by charming architecture and cafes, create a lively atmosphere, showcasing Amsterdam\'s commitment to eco-friendly transportation and providing a unique perspective for exploring the city.', 'IMG-65930f9f7c0717.93876416.jpg', 'Amsterdam, Street, Bicycle ', '  Amsterdam\'s streets are a vibrant tapestry woven with bicycles, reflecting the city\'s deep cycling culture. As you traverse these streets, you\'ll witness a colorful array of bikes parked along canals and bustling squares, with locals and tourists alike navigating the city on two wheels. The dedicated bike lanes, flanked by charming architecture and cafes, create a lively atmosphere, showcasing Amsterdam\'s commitment to eco-friendly transportation and providing a unique perspective for exploring the city.', 'Amsterdam biking culture ', 0, '2024-01-01 19:16:47', 0),
(25, 5, 'Cape town, Mountains ', '', 'Cape Town is framed by the iconic Table Mountain, a flat-topped mountain that stands prominently overlooking the city. Table Mountain is part of a larger mountain range called the Table Mountain National Park, offering breathtaking views, diverse flora, and hiking trails. Other notable peaks surrounding Cape Town include Lion\'s Head and Signal Hill, which also provide stunning panoramic vistas of the city and coastline.', 'IMG-659310f359f403.22858276.jpg', 'Cape town, Mountains ', 'Cape Town is framed by the iconic Table Mountain, a flat-topped mountain that stands prominently overlooking the city. Table Mountain is part of a larger mountain range called the Table Mountain National Park, offering breathtaking views, diverse flora, and hiking trails. Other notable peaks surrounding Cape Town include Lion\'s Head and Signal Hill, which also provide stunning panoramic vistas of the city and coastline.', 'Cape town natural landmarks ', 0, '2024-01-01 19:22:27', 0),
(26, 5, 'Cape Town, Lions head', '', 'Lion\'s Head is a prominent peak situated beside Table Mountain in Cape Town, South Africa. It\'s a popular hiking destination offering panoramic views of the city, Table Mountain, the Atlantic Ocean, and nearby landscapes. The hike up Lion\'s Head is renowned for its stunning scenery, winding paths, and the opportunity to witness breathtaking sunsets and sunrises from its summit. Additionally, its distinct shape resembling a lion\'s head contributes to its unique charm and appeal among locals and tourists alike.', 'IMG-659311b73ffc03.07886319.jpg', 'Cape Town, Lions head', 'Lion\'s Head is a prominent peak situated beside Table Mountain in Cape Town, South Africa. It\'s a popular hiking destination offering panoramic views of the city, Table Mountain, the Atlantic Ocean, and nearby landscapes. The hike up Lion\'s Head is renowned for its stunning scenery, winding paths, and the opportunity to witness breathtaking sunsets and sunrises from its summit. Additionally, its distinct shape resembling a lion\'s head contributes to its unique charm and appeal among locals and tourists alike.', 'Lion\'s Head hike', 0, '2024-01-01 19:25:43', 0),
(27, 5, 'Penguins in Cape Town ', '', 'Cape Town is home to African penguins, also known as Jackass penguins due to their donkey-like braying sounds. They can be found at Boulders Beach in Simon\'s Town, a picturesque area known for its large penguin colony. Visitors can observe these charismatic birds up close in their natural habitat, often swimming, sunbathing on the beach, or nesting among the granite boulders. Boulders Beach has boardwalks and viewing platforms allowing tourists to admire and photograph these charming creatures while supporting conservation efforts aimed at protecting this endangered species.', 'IMG-659312bd142911.64897326.jpg', 'Penguins in Cape Town ', 'Cape Town is home to African penguins, also known as Jackass penguins due to their donkey-like braying sounds. They can be found at Boulders Beach in Simon\'s Town, a picturesque area known for its large penguin colony. Visitors can observe these charismatic birds up close in their natural habitat, often swimming, sunbathing on the beach, or nesting among the granite boulders. Boulders Beach has boardwalks and viewing platforms allowing tourists to admire and photograph these charming creatures while supporting conservation efforts aimed at protecting this endangered species.', 'Cape Town seabirds colonies ', 0, '2024-01-01 19:30:05', 0),
(28, 5, 'Cape Town, Sea ', '', '    Cape Town is situated along the coast where the Atlantic Ocean meets the Cape Peninsula. The ocean waters around Cape Town are known for their stunning beauty, offering diverse experiences. The Atlantic coast is characterized by cooler waters and scenic coastal landscapes, including sandy beaches like Clifton and Camps Bay, popular for sunbathing, swimming, and water sports. The sea around Cape Town also provides opportunities for activities like surfing, whale watching (during the migration season), and boat tours to observe seals, dolphins, and other marine life in their natural habitat.', 'IMG-659313a326acf1.44074789.jpg', 'Cape Town, Sea ', '    Cape Town is situated along the coast where the Atlantic Ocean meets the Cape Peninsula. The ocean waters around Cape Town are known for their stunning beauty, offering diverse experiences. The Atlantic coast is characterized by cooler waters and scenic coastal landscapes, including sandy beaches like Clifton and Camps Bay, popular for sunbathing, swimming, and water sports. The sea around Cape Town also provides opportunities for activities like surfing, whale watching (during the migration season), and boat tours to observe seals, dolphins, and other marine life in their natural habitat.', 'Cape Town coastline', 0, '2024-01-01 19:33:55', 0),
(29, 6, 'Petra, Jordan, Treasure house', '', 'Petra, an ancient city in Jordan, is known for its remarkable \"Treasury\" or \"Al-Khazneh.\" Carved into rose-colored rock, the Treasury stands about 130 feet tall and served as a tomb or mausoleum. Its intricate façade, featuring columns, sculptures, and intricate details, has captivated visitors for centuries. This UNESCO World Heritage Site is a stunning example of Nabatean architecture and is considered one of the most iconic and visually striking structures in Petra.', 'IMG-659314ec69ae21.94296703.jpg', 'Petra, Jordan, Treasure house', 'Petra, an ancient city in Jordan, is known for its remarkable \"Treasury\" or \"Al-Khazneh.\" Carved into rose-colored rock, the Treasury stands about 130 feet tall and served as a tomb or mausoleum. Its intricate façade, featuring columns, sculptures, and intricate details, has captivated visitors for centuries. This UNESCO World Heritage Site is a stunning example of Nabatean architecture and is considered one of the most iconic and visually striking structures in Petra.', 'Petra Treasury', 0, '2024-01-01 19:39:24', 0),
(30, 6, 'Petra, Camels', '', '   Camels have historically been an integral part of Petra\'s landscape, serving as a mode of transportation for tourists exploring the ancient city. These enduring animals, well-adapted to the desert environment, offer visitors camel rides, allowing them to experience Petra\'s vastness while riding through its majestic terrain. These rides often take tourists to key sites within Petra, providing a unique and memorable perspective of this historic city.', 'IMG-659315796a3ea8.95467737.jpg', 'Petra, Camels', '   Camels have historically been an integral part of Petra\'s landscape, serving as a mode of transportation for tourists exploring the ancient city. These enduring animals, well-adapted to the desert environment, offer visitors camel rides, allowing them to experience Petra\'s vastness while riding through its majestic terrain. These rides often take tourists to key sites within Petra, providing a unique and memorable perspective of this historic city.', 'Petra Camel rides', 0, '2024-01-01 19:41:45', 0),
(31, 6, 'Wadi musa, Petra ', '', 'Wadi Musa, meaning \"Valley of Moses,\" is the modern town adjacent to the ancient city of Petra in Jordan. Serving as the gateway to Petra, Wadi Musa caters to tourists visiting the archaeological wonder. The town offers various accommodations, restaurants, shops, and amenities for visitors exploring Petra\'s historic sites, creating a base for travelers to immerse themselves in the rich cultural and historical experience of the region.', 'IMG-6593161790ee59.10077422.jpg', 'Wadi musa, Petra ', 'Wadi Musa, meaning \"Valley of Moses,\" is the modern town adjacent to the ancient city of Petra in Jordan. Serving as the gateway to Petra, Wadi Musa caters to tourists visiting the archaeological wonder. The town offers various accommodations, restaurants, shops, and amenities for visitors exploring Petra\'s historic sites, creating a base for travelers to immerse themselves in the rich cultural and historical experience of the region.', 'Wadi Musa attractions', 0, '2024-01-01 19:44:23', 0),
(32, 6, 'Petra, Vacation ', '', 'A vacation to Petra promises an immersive journey into ancient history and stunning natural beauty. Exploring the rose-red city carved into the desert cliffs, visitors encounter iconic structures like the Treasury, the Monastery, and the Royal Tombs, showcasing the architectural mastery of the Nabateans. Hiking through the Siq, a narrow canyon with towering walls, leads to the breathtaking reveal of the Treasury. The experience of riding camels or hiking to panoramic viewpoints offers a deeper connection to the landscape. With its rich history, awe-inspiring landscapes, and cultural significance, a trip to Petra promises an unforgettable adventure for history enthusiasts and nature lovers alike.', 'IMG-659316d7a95bd2.42352410.jpg', 'Petra, Vacation ', 'A vacation to Petra promises an immersive journey into ancient history and stunning natural beauty. Exploring the rose-red city carved into the desert cliffs, visitors encounter iconic structures like the Treasury, the Monastery, and the Royal Tombs, showcasing the architectural mastery of the Nabateans. Hiking through the Siq, a narrow canyon with towering walls, leads to the breathtaking reveal of the Treasury. The experience of riding camels or hiking to panoramic viewpoints offers a deeper connection to the landscape. With its rich history, awe-inspiring landscapes, and cultural significance, a trip to Petra promises an unforgettable adventure for history enthusiasts and nature lovers alike.', 'Explore Petra ', 0, '2024-01-01 19:47:35', 0),
(33, 7, 'Venice, Grand canal ', '', 'The Grand Canal in Venice is the main waterway that runs through the heart of the city. It\'s a wide, S-shaped canal approximately 3.8 kilometers long (about 2.4 miles) and serves as the primary traffic corridor of Venice. Lined with stunning historic buildings, palaces, and churches dating back centuries, the canal is flanked by more than 170 magnificent buildings, many of which showcase remarkable Venetian Gothic and Renaissance architecture.\r\nThe canal is traversed by numerous gondolas, water buses (vaporetti), and smaller boats, creating a bustling and iconic scene. It serves as a lifeline of transportation, commerce, and tourism in Venice, showcasing the city\'s unique charm, beauty, and historical significance.', 'IMG-659317627b4380.83804177.jpg', 'Venice, Grand canal ', 'The Grand Canal in Venice is the main waterway that runs through the heart of the city. It\'s a wide, S-shaped canal approximately 3.8 kilometers long (about 2.4 miles) and serves as the primary traffic corridor of Venice. Lined with stunning historic buildings, palaces, and churches dating back centuries, the canal is flanked by more than 170 magnificent buildings, many of which showcase remarkable Venetian Gothic and Renaissance architecture.\r\nThe canal is traversed by numerous gondolas, water buses (vaporetti), and smaller boats, creating a bustling and iconic scene. It serves as a lifeline of transportation, commerce, and tourism in Venice, showcasing the city\'s unique charm, beauty, and historical significance.', 'Venice historic canals ', 0, '2024-01-01 19:49:54', 0),
(34, 7, 'Saint mark\'s basilica, Architecture, Venice', '', 'St. Mark\'s Basilica in Venice is a stunning example of Byzantine architecture. Adorned with domes, marble columns, and intricate mosaics, it boasts a blend of Eastern and Western influences. The exterior showcases intricate carvings and sculptures, while the interior dazzles with golden mosaics depicting biblical scenes and ornate decorations, making it a masterpiece of Venetian architecture.', 'IMG-659317eed00ac1.10671806.jpg', 'Saint mark\'s basilica, Architecture, Venice', 'St. Mark\'s Basilica in Venice is a stunning example of Byzantine architecture. Adorned with domes, marble columns, and intricate mosaics, it boasts a blend of Eastern and Western influences. The exterior showcases intricate carvings and sculptures, while the interior dazzles with golden mosaics depicting biblical scenes and ornate decorations, making it a masterpiece of Venetian architecture.', 'Venetian gothic style ', 0, '2024-01-01 19:52:14', 0),
(35, 7, 'Mask of venice, Carnival venice ', '', 'The Masks of Venice play a central role during the Carnival of Venice, a vibrant and historic festival. These masks are elaborate, often handcrafted works of art, adorned with intricate designs, feathers, jewels, and vibrant colors. They were historically used by the Venetian society to conceal identities and social statuses, allowing wearers to freely engage in activities without recognition. During the Carnival, revelers wear these masks in elaborate costumes, participating in parades, masquerade balls, and festivities, creating a magical and mysterious atmosphere throughout the city of Venice.', 'IMG-6593187ad0f515.66833338.jpg', 'Mask of venice, Carnival venice ', 'The Masks of Venice play a central role during the Carnival of Venice, a vibrant and historic festival. These masks are elaborate, often handcrafted works of art, adorned with intricate designs, feathers, jewels, and vibrant colors. They were historically used by the Venetian society to conceal identities and social statuses, allowing wearers to freely engage in activities without recognition. During the Carnival, revelers wear these masks in elaborate costumes, participating in parades, masquerade balls, and festivities, creating a magical and mysterious atmosphere throughout the city of Venice.', 'Venetian mask design ', 0, '2024-01-01 19:54:34', 0),
(36, 8, 'Cappadocia, Fireplaces', '', '  In Cappadocia, many cave hotels and dwellings feature intricately carved stone fireplaces, adding to the region\'s unique charm. These fireplaces, crafted from the soft volcanic rock found in the area, often serve as cozy focal points within cave rooms, providing warmth and a rustic ambiance, especially during cooler evenings. They showcase traditional craftsmanship and are a delightful addition to the cave accommodations that make Cappadocia so special.', 'IMG-65931951239e26.60561010.jpg', 'Cappadocia, Fireplaces', '  In Cappadocia, many cave hotels and dwellings feature intricately carved stone fireplaces, adding to the region\'s unique charm. These fireplaces, crafted from the soft volcanic rock found in the area, often serve as cozy focal points within cave rooms, providing warmth and a rustic ambiance, especially during cooler evenings. They showcase traditional craftsmanship and are a delightful addition to the cave accommodations that make Cappadocia so special.', 'Chimneys of Cappadocia ', 0, '2024-01-01 19:58:09', 0),
(37, 8, 'Cappadocia, Balloons ', '', 'Cappadocia, a region in Turkey, is renowned for its stunning landscapes filled with unique rock formations, fairy chimneys, and historical cave dwellings. One of its most iconic experiences involves hot air balloon rides, where colorful balloons fill the sky during sunrise, offering breathtaking views of the otherworldly terrain below. The sight of these balloons drifting above the fairy chimneys at dawn is truly mesmerizing and remains one of the must-do experiences for visitors to Cappadocia.', 'IMG-659319cad1f023.12746707.jpg', 'Cappadocia, Balloons ', 'Cappadocia, a region in Turkey, is renowned for its stunning landscapes filled with unique rock formations, fairy chimneys, and historical cave dwellings. One of its most iconic experiences involves hot air balloon rides, where colorful balloons fill the sky during sunrise, offering breathtaking views of the otherworldly terrain below. The sight of these balloons drifting above the fairy chimneys at dawn is truly mesmerizing and remains one of the must-do experiences for visitors to Cappadocia.', 'Ballooning in Turkey ', 0, '2024-01-01 20:00:10', 0),
(38, 8, 'Tufa, Rock formations, Cappadocia', '', 'Cappadocia is renowned for its extraordinary tufa rock formations, often referred to as \"fairy chimneys.\" These formations are the result of volcanic eruptions millions of years ago, followed by erosion and weathering, which sculpted the soft volcanic rock into distinct shapes resembling cones, pillars, and mushroom-like structures. People carved these tufa rocks to create homes, churches, and even underground cities, leaving behind a surreal landscape that captivates visitors with its unique beauty and historical significance.', 'IMG-65931a572daa00.10682491.jpg', 'Tufa, Rock formations, Cappadocia', 'Cappadocia is renowned for its extraordinary tufa rock formations, often referred to as \"fairy chimneys.\" These formations are the result of volcanic eruptions millions of years ago, followed by erosion and weathering, which sculpted the soft volcanic rock into distinct shapes resembling cones, pillars, and mushroom-like structures. People carved these tufa rocks to create homes, churches, and even underground cities, leaving behind a surreal landscape that captivates visitors with its unique beauty and historical significance.', 'Tufa caves ', 0, '2024-01-01 20:02:31', 0),
(39, 8, 'Cityscape , Cappadocia', '', 'The cityscape of Cappadocia during a hot air balloon ride is a breathtaking sight. As the balloons ascend during the early morning hours, they offer a mesmerizing perspective of the region\'s unique landscape, revealing a panorama of fairy chimneys, ancient cave dwellings, and rock formations against the backdrop of the rising sun. This aerial view of Cappadocia from the balloons creates a magical and unforgettable experience, showcasing the stunning beauty of the region\'s distinctive terrain.', 'IMG-65931ae90ce183.65465206.jpg', 'Cityscape , Cappadocia', 'The cityscape of Cappadocia during a hot air balloon ride is a breathtaking sight. As the balloons ascend during the early morning hours, they offer a mesmerizing perspective of the region\'s unique landscape, revealing a panorama of fairy chimneys, ancient cave dwellings, and rock formations against the backdrop of the rising sun. This aerial view of Cappadocia from the balloons creates a magical and unforgettable experience, showcasing the stunning beauty of the region\'s distinctive terrain.', 'Cappadocia skyline ', 0, '2024-01-01 20:04:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `db_id` int(110) NOT NULL,
  `db_fname` varchar(191) NOT NULL,
  `db_lname` varchar(191) NOT NULL,
  `db_email` varchar(191) NOT NULL,
  `db_password` varchar(191) NOT NULL,
  `role_as` int(1) NOT NULL DEFAULT 0,
  `db_status` int(1) NOT NULL DEFAULT 0,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`db_id`, `db_fname`, `db_lname`, `db_email`, `db_password`, `role_as`, `db_status`, `deleted`) VALUES
(1, 'Karim', 'Alakkad', 'admin@gmail.com', 'pass', 1, 0, 0),
(2, 'Amer', 'Darazi', 'user@gmail.com', 'pass', 0, 0, 0),
(3, 'Housam', 'Kobrosli', 'housam@gmail.com', 'pass', 0, 0, 0),
(4, 'Hadi', 'Haidar', 'hadi@gmail.com', 'pass', 0, 0, 0),
(5, 'Basel', 'Dheini', 'basel@gmail.com', 'pass', 0, 0, 1),
(6, 'Alaa', 'Alfares', 'alaa@gmail.com', 'pass', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`db_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `db_id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
