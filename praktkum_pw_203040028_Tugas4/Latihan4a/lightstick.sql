SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibnurus`
--

-- --------------------------------------------------------

--
-- Table structure for table `hijab`
--

CREATE TABLE `lightstick` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `informasi produk` varchar(25) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `harga` int(1.000,000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lightstick`
--

INSERT INTO `lightstick` (`id`, `img`, `nama`, `informasi produk`, `jenis`, `harga`) VALUES
(1, 'lightstick', '\r\nMonochrome Scarlet Black\r\n', '- Bahan: Voal Premium', 'secret number', 2342),
(2, 'lightstick2', '\r\nHannah Set Peach\r\n', 'Special Anniversary Edition', 'secret number', 2436);

--
-- Indexes for dumped tables
--

--
-
--
ALTER TABLE `lightstick`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
--
ALTER TABLE `light`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;