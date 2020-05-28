-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 01:36 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youplant`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `user`, `pass`, `email`, `address`) VALUES
(1, 'Ivan', 'Austral', 'admin', 'adminn', 'karlivanaustral09@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(10) NOT NULL,
  `prd_id` int(10) NOT NULL,
  `prd_name` varchar(50) NOT NULL,
  `ord_qty` int(100) NOT NULL,
  `prd_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `stocks` int(100) NOT NULL,
  `image` mediumtext NOT NULL,
  `descr` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `price`, `stocks`, `image`, `descr`) VALUES
(1, 'Seeds', 'Strawberry Seeds', 320, 10000, 'prod/seeds/Strawberry2.jpg', 'Strawberry seeds are so tiny it’s hard to believe that these miniature seeds produce big, mouthwatering traditional strawberries. Start the seeds indoors during the winter and place the seedlings out after the last frost. While they may not produce much fruit the first year, these sprawling plants will eventually yield heavily over a long season. They are considered everbearing, and will flower over and over if plants are kept picked.'),
(2, 'Gardening Tools', 'Clay Pot', 119.75, 10000, 'prod/tools/pot.png', 'Plant pot is a container in which flowers and other plants are cultivated and displayed. There are often holes in the bottom of pots, to allow excess water to flow out, sometimes to a saucer that is placed under the flowerpot. The plant can use this water with its roots, as needed.'),
(3, 'Plants', 'Bougainvillea Plant', 352.36, 1000, 'prod/floweringplants/boug.png', 'Native to tropical South America, bougainvillea grows around the world as an ornamental climber and shrub. It is one of the most commonly grown plants in subtropical and tropical gardens and is a Mediterranean favorite. Bougainvilleas are easy to grow in frost-free conditions and there are hundreds of cultivars with different colored flowers.'),
(4, 'Plants', 'Faucaria tigrina – Tiger’s Jaw', 502.87, 1000, 'prod/floweringplants/tigjaw.jpg', 'Faucaria tigrina is a small succulent clamp-forming perennial, up to 6 inches (15 cm) tall. The leaves are thick, triangular, light green (turning purplish in strong sunshine) in color, up to 2 inches (5 cm) long. On the edges of the leaves there are upright soft, white (up to 10) teeth in opposite pairs that look like an animal’s mouth. The flowers are large, up to 2 inch (5 cm) in diameter, silky in shape and yellow in color.\r\n'),
(5, 'Plants', 'Portulacaria afra f. variegata – Elephant Bush', 351.86, 1000, 'prod/floweringplants/bush.jpg', 'Portulacaria afra f. variegata is a much-branched, slow growing succulent shrub up to 10 feet (3 m), with attractive reddish-brown stems and smooth obovate glossy green leaves, up to 0.8 inch (2 cm) long, heavily variegated with cream. Stems become interwoven as the plant ages. Flowers are small, lavender-pink and clusters shaped.'),
(6, 'Seeds', 'Sunflower Seeds', 262.86, 1000, 'prod/seeds/Sunflower2.jpg', 'Sunflower seeds are the fruits (achenes) of the sunflower (Helianthus annuus L.). The seeds are 10-15 mm long and 4 mm broad, cylindrical or drop-shaped. The sunflower seed consists of a hard hull (pericarp) and a kernel, which is the actual seed (Ecoport, 2012).'),
(8, 'Seeds', 'Eggplant Seeds', 162.5, 1000, 'prod/seeds/Eggplant2.jpg', 'The eggplant is a delicate, tropical perennial often cultivated as a tender or half-hardy annual in temperate climates. The stem is often spiny. The flower is white to purple, with a five-lobed corolla and yellow stamens. The egg-shaped, glossy, purple fruit has white flesh with a meaty texture. The cut surface of the flesh rapidly turns brown when the fruit is cut open.'),
(9, 'Seeds', 'Tomato Seeds', 159.06, 1000, 'prod/seeds/Tomato2.jpg', 'The tomato is the edible, often red, fruit of the plant Solanum lycopersicum,commonly known as a tomato plant. The plant belongs to the nightshade family, which is called Solanaceae Numerous varieties of tomato are widely grown in temperate climates across the world, with greenhouses allowing its production throughout the year and in cooler areas.'),
(10, 'Seeds', 'Lavender Seeds', 159, 1000, 'prod/seeds/Lavender2.jpg', 'Most lavender is started from cuttings taken from mother plants. That ensures that you obtain a plant that’s exactly like the mother plant in terms of plant size and flower color. Because cuttings are the primary means of producing lavender, supplies of pure lavender seed aren’t readily available for certain types of lavender. ‘Lavender Lady’ English lavender (Lavandula angustifolia ‘Lavender Lady’) is a seed-grown lavender that flowers the first year from seed. It’s a reliable, seed-grown lavender and reaches a modest height of 10 to 18 inches.'),
(11, 'Seeds', 'Mimosa Seeds', 550.9, 1000, 'prod/seeds/Mimosa2.jpg', 'Mimosa pudica (from Latin: pudica \"shy, bashful or shrinking\"; also called sensitive plant, sleepy plant, Dormilones, touch-me-not, or shy plant) is a creeping annual or perennial herb of the pea family Fabaceae often grown for its curiosity value: the compound leaves fold inward and droop when touched or shaken, defending themselves from harm, and re-open a few minutes later.'),
(12, 'Plants', 'Azalea Flowers', 550, 1000, 'prod/floweringplants/azalea.jpg', 'Azaleas are small trees or shrubs that flower during the spring. They grow to around 60cm tall and are a shallow rooting plant with red, pink and white blossoms. Gardeners have developed a number of hybrid varieties over the years.'),
(13, 'Plants', 'Cyclamen Flowers', 880, 1000, 'prod/floweringplants/cyclamen.jpg', 'C. persicum is native to the eastern Mediterranean. Species flowers are rose-pink to lavender-white or white. Florist\'s cyclamen are frost-tender hybrids derived from C. persicum. They feature clumps of long-stalked basal dark green leaves often variegated with silver blotching or veining. Solitary flowers with twisted and reflexed petals bloom from winter to spring atop leafless stems rising 6-9\" tall.'),
(14, 'Plants', 'Daffodils Flowers', 440, 1000, 'prod/floweringplants/daffodils.jpg', 'Daffodil has leafless stem with one to 20 blooms on the top. It can reach 6 to 20 inches in height, depending on the variety.'),
(15, 'Plants', 'Daisy Flowers', 730, 1000, 'prod/floweringplants/daisy.jpg', 'The daisy looks like a simple flower, but it is actually a composite of several different parts joining to form the flower. Although many insects visit the flower each day, the daisy is not bothered by any of them. Generally, a daisy is white with a yellow center, although sometimes it can be pink or a rose color. Throughout history, the daisy has been featured in myth, literary works and legend. The name originates from the Anglo Saxon word meaning \"day\'s eye.\" The name is appropriate since the flower opens in the morning.\r\n'),
(16, 'Plants', 'Water Hyacinth Flowers', 550, 1000, 'prod/floweringplants/hyacinth.jpg', 'Hyacinthus is a small genus of bulbous, fragrant flowering plants in the family Asparagaceae, subfamily Scilloideae. These are commonly called hyacinths. The genus is native to the eastern Mediterranean.'),
(17, 'Gardening Tools', 'Pruning Shears', 299.95, 1000, 'prod/tools/pruner.png', 'Pruning shears, also called hand pruners ,or secateurs, are a type of scissors for use on plants. They are strong enough to prune hard branches of trees and shrubs, sometimes up to two centimetres thick. They are used in gardening, arboriculture, farming, flower arranging, and nature conservation, where fine-scale habitat management is required. Product Details Size : 8 × 0.5 × 2 inches; 10.4 ounces Weight : 10.4 ounces.'),
(18, 'Gardening Tools', 'Gardening Gloves', 74.99, 1000, 'prod/tools/gloves.png', 'Worn to protect the hands from soil, water or cold. They may be constructed from lightweight cotton, leather or from a water-proof material such as rubber.'),
(19, 'Gardening Tools', 'Garden Hose', 200, 1000, 'prod/tools/garden hose.jpg', 'Garden hose are typically made of extruded synthetic rubber or soft plastic, often reinforced with an internal web of fibers. As a result of these materials, garden hoses are flexible and their smooth exterior facilitates pulling them past trees, posts and other obstacles. Garden hoses are also generally tough enough to survive scraping on rocks and being stepped on without damage or leaking. Size (L x W x H cm) : 650 x 20 x 20.'),
(20, 'Gardening Tools', 'Rake', 349.85, 1000, 'prod/tools/rake.jpg', 'Beautiful rosettes of soft grey-brown leaves with deep pink highlights are dusted in powdery white. Bright coral flowers emerge in summer on foot-long reddish stems, attracting hummingbirds. Adds beauty to rock gardens and succulent collections. Tolerant of heat and drought. Evergreen.'),
(21, 'Gardening Tools', 'Hand Sprinkler', 149.99, 1000, 'prod/tools/hand sprinkler.jpg', 'A sprinkler is a device used to spray water. Sprinklers are used to water plants or grass, or to put out fires in buildings.'),
(22, 'Gardening Tools', 'Shovel', 299.75, 1000, 'prod/tools/shovel.png', 'A shovel is a tool for digging, lifting, and moving bulk materials, such as soil, coal, gravel, snow, sand, or ore. Most shovels are hand tools consisting of a broad blade fixed to a medium-length handle. Shovel blades are usually made of sheet steel or hard plastics and are very strong. Shovel handles are usually made of wood (especially specific varieties such as ash or maple) or glass-reinforced plastic (fibreglass).'),
(23, 'Gardening Tools', 'Plant Pot', 99.5, 1000, 'prod/tools/pot.jpg', 'Plant pot is a container in which flowers and other plants are cultivated and displayed. There are often holes in the bottom of pots, to allow excess water to flow out, sometimes to a saucer that is placed under the flowerpot. The plant can use this water with its roots, as needed.'),
(24, 'Gardening Tools', 'Wheelbarrow', 800, 1000, 'prod/tools/cart.jpg', 'A wheelbarrow is a small hand-propelled vehicle, usually with just one wheel, designed to be pushed and guided by a single person using two handles at the rear, or by a sail to push the ancient wheelbarrow by wind.'),
(25, 'Gardening Tools', 'Lawn Mower', 1999.99, 1000, 'prod/tools/lmower.jpg', 'A lawn mower is a machine utilizing one or more revolving blades to cut a grass surface to an even height.'),
(26, 'Gardening Tools', 'Pick-mattock', 399.8, 1000, 'prod/tools/pick mattock.jpg', 'A mattock has a shaft, typically made of wood, which is about 3–4 ft (0.9–1.2 m) long. The head consists of two ends, opposite each other and separated by a central eye. A mattock head typically weighs 3–7 lb (1.4–3.2 kg).'),
(27, 'Gardening Tools', 'Trowel', 230.5, 1000, 'prod/tools/trowel.png', 'Hand Trowel is a garden tool with a pointed, scoop-shaped metal blade with plastic handle. It is used for breaking up earth, digging small holes, especially for planting and weeding, mixing in fertilizer or other additives, and transplanting plants to pots.'),
(28, 'Gardening Tools', 'Grass Cutter', 3498.75, 1000, 'prod/tools/grass cutter.png', 'The lawn trimmer GC-ET 4025 is a practical and very powerful tool which helps you produce an immaculate garden through effortless trimming in hard-to-reach areas of the garden. This tool is very versatile thanks to its motor head which can be rotated through 90° and tilted to five different positions for user-friendly cutting along vertical surfaces. The GC-ET 4025 has a robust universal motor. User-friendly two-hand operation and exact adjustment to users of all sizes are possible with the infinitely adjustable telescopic long handle with adjustable additional handle, thus enabling tireless operation.'),
(29, 'Gardening Tools', 'Irrigation Sprinkler', 1499.9, 1000, 'prod/tools/irrigation sprinkle.png', 'It is applicable in public green space, gardening production, home gardening, agricultural production and so on.'),
(30, 'Plants', 'Fish Hook Cactus', 300.5, 1000, 'prod/floweringplants/fishhook.jpg', 'The central spines are flattened and wide, giving the plant a \"gnarly\" look. Flowers are violet or yellow, usually appearing in late October and November. Requires a porous cactus soil with additional drainage as can be supplied by perlite and pumice. Bright light to full sun. Can be planted out in the garden for landscaping or used as a patio plant. Water thoroughly when soil is dry to the touch. Protect from frost.'),
(31, 'Plants', 'Echeveria Pulidonis', 750.1, 1000, 'prod/floweringplants/echeveria.jpg', 'Beautiful rosettes of soft grey-brown leaves with deep pink highlights are dusted in powdery white. Bright coral flowers emerge in summer on foot-long reddish stems, attracting hummingbirds. Adds beauty to rock gardens and succulent collections. Tolerant of heat and drought. Evergreen.'),
(32, 'Plants', 'Old Lady Cactus', 350, 1000, 'prod/floweringplants/oldlady.jpg', 'Old lady cactus is a sun-loving cactus that forms large groups. It grows up to 10 inches (25 cm) tall and up to 20 inches (50 cm) broad. The solitary spherical stems, up to 5 inches (12.5 cm) in diameter, are covered in white down and white spines. Reddish purple flowers, up to 0.6 inches (15 mm) in diameter, are borne in spring and summer, sometimes forming a complete ring around the apex of the plant.'),
(33, 'Plants', 'Gollum', 250, 1000, 'prod/floweringplants/gollum.jpg', 'Crassula ovata ‘Gollum’ is an unusual plant with tubular, trumpet shaped leaves. It looks like a small tree, and the branching trunk becomes thick with age. It can reach up to 80cm tall and is a good specimen for bonsai. It may produce clusters of small, star-like, white or pinkish-white, with pink stamens in winter.'),
(34, 'Plants', 'Cactus', 300, 1000, 'prod/floweringplants/cactus.png', 'Cactus spines are produced from specialized structures called areoles, a kind of highly reduced branch. Areoles are an identifying feature of cacti. As well as spines, areoles give rise to flowers, which are usually tubular and multipetaled. Many cacti have short growing seasons and long dormancies, and are able to react quickly to any rainfall, helped by an extensive but relatively shallow root system that quickly absorbs any water reaching the ground surface.'),
(35, 'Plants', 'Eternal Flame ', 553.21, 1000, 'prod/floweringplants/eflame.jpg', 'The Eternal Flame is a relative new-comer among flowering house plants. It is a striking plant that is nevertheless generally undemanding.'),
(37, 'Gardening Tools', 'Watering Can', 150.99, 1000, 'prod/tools/watering can.jpg', 'A watering can (or watering pot) is a portable container, usually with a handle and a spout, used to water plants by hand. It has been in use from at least the 17th century and has since seen many improvements in design.'),
(38, 'Seeds', 'Mint Seed', 449.96, 1000, 'prod/seeds/Mint2.jpg', 'Spearmint is perhaps the best-loved of all the mints. This herb bears lavender flowers in late spring, and its leaves are dark green and sharply pointed.\r\n'),
(39, 'Seeds', 'Radish Seed', 189.65, 1000, 'prod/seeds/Radish2.jpg', 'A member of the cole family, radishes have the same anti-cancer properties as broccoli and cabbage. The green leaves are good cooked and are high in beta carotene. Radishes were cultivated in ancient times. The Egyptians fed them to the slaves who built the pyramids. In England they were known from the mid 1500’s and used for various medicinal purposes including the treatment of kidney problems.');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(10) NOT NULL,
  `ord_id` int(10) NOT NULL,
  `prd_id` int(10) NOT NULL,
  `prd_name` varchar(50) NOT NULL,
  `ord_qty` int(100) NOT NULL,
  `ord_price` float NOT NULL,
  `total_sales` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
