-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2025 at 06:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'تهران'),
(2, 'اصفهان'),
(3, 'شیراز'),
(4, 'تبریز'),
(5, 'مازندران'),
(6, 'قم'),
(7, 'یزد');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `newid` int(11) NOT NULL,
  `text` varchar(225) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sabt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `newid`, `text`, `time`, `sabt`) VALUES
(1, 1, '', '2025-04-25 21:17:39', 1),
(2, 1, '', '2025-04-25 21:17:41', 1),
(3, 1, '', '2025-04-25 21:17:42', 1),
(4, 1, '', '2025-04-25 21:17:45', 1),
(5, 1, '', '2025-04-25 21:17:43', 1),
(6, 1, '', '2025-04-25 21:17:44', 1),
(7, 1, '', '2025-04-25 21:17:44', 1),
(8, 1, '', '2025-04-25 21:17:45', 1),
(10, 1, 'hj', '2025-04-25 21:19:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `text` text NOT NULL,
  `imageurl` text NOT NULL,
  `created at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`id`, `title`, `text`, `imageurl`, `created at`) VALUES
(1, 'پرس سینه دمبل', '۱) برای شروع ، روی میز بنشینید و دو دمبل را در دست بگیرید. سپس آنها را روی زانو هایتان نگه دارید. ۲) دراز بکشید و هم زمان با کمک زانو ، دمبل‌ها را بالای سینه بیاورید و کنار سینه خود نگه دارید.                                            ۳) دمبل‌ها را با کنترل ، به سمت بالا ببرید تا دستانتان صاف شود. این قسمت از تمرین ، فاز مثبت است. در این بخش ، عمل بازدم را انجام دهید. ۴) با حفظ حالت اجرا و تمرکز ، به حالت اولیه بازگردید. این قسمت از تمرین ، فاز منفی است. در این بخش ، عمل دم را انجام دهید. ۵) حرکت را به تعداد مشخص شده در برنامه تکرار کنید.  دمبل‌ها را با کنترل و بدون عجله ، پایین بیاورید تا نزدیک سینه شوند و در حین حرکت ، دم را انجام دهید.', 'img/developpe-couche-halteres-exercice-musculation.gif', '2025-05-09 10:42:12'),
(2, 'جلو بازو لاری هالتر EZ', 'برای شروع روی میز جلو بازو لاری بنشینید و دستان خود را به اندازه عرض شانه به هالتر بگیرید و در حالتی که شانه را بالا می گیرید و قوس کمر را حفظ می کنید هالتر را بردارید. هالتر را به سمت بالا (صورت) بیاورید تا انقباض کامل ایجاد شود، دست باید تقریبا روبروی صورت قرار بگیرد. این بخش فاز مثبت حرکت بوده و در این فاز عمل بازدم را انجام دهید. سپس هالتر را به سمت حالت اولیه برگردانید تا دست‌ها باز شوند البته کمی مانده به کامل باز شدن. این بخش، فاز منفی حرکت بوده و در این فاز دم را انجام دهید. حرکت را به تعداد مشخص در برنامه خود تکرار کنید. حفظ فرم باسن و کمر در هنگام انجام حرکات با میز لاری حائز اهمیت است.', 'img/Z-Bar-Preacher-Curl12-1.gif', '2025-05-09 10:42:12'),
(3, 'زیر بغل سیم کش از جلو دست باز', '1)ابتدا دست‌ها را بر روی میله دستگاه به گونه‌ای تنظیم کنید که تا کاملا قرینه باشند. در نظر داشته باشید که می‌توان از گیرش‌های مختلف برای گرفتن میله استفاده کرد. 2)روی صندلی دستگاه بنشینید و زانو را زیر جاپایی قرار دهید ، به گونه‌ای که زاویه زانو و کمر ۹۰ درجه باشد. 3)حرکت را با رعایت قوس کمر مناسب ، شروع کنید. به گونه‌ای که دستگیره تا نزدیک سینه پایین کشیده شود ، تا انقباض کامل صورت گیرد. این قسمت از تمرین ، فاز مثبت است. در این بخش ، عمل بازدم را انجام دهید. 4)دستگیره را با کنترل کامل و تمرکز و با سرعت مورد نظر ، به نقطه اولیه حرکت بازگردانید. این قسمت از تمرین ، فاز منفی است. در این بخش ، عمل دم را انجام دهید. 5) این کار را به تعداد مشخص شده در برنامه خود تکرار کنید. تمرین را ۴ در فاز مثبت و ۴ در فاز مثبت و تکنیک صحیح انجام دهید تا تاثیر مورد نظر را بر عضله بگذارد.', 'img/Wide-grip-lat-pulldown.gif', '2025-05-09 10:42:12'),
(4, 'جلو پا دستگاه', '1)برای اجرای حرکت ابتدا وزنه مناسب را بر روی دستگاه بارگذاری کرده و بر روی دستگاه بنشینید. کمر کامل صاف و چسبیده به پشتی و باسن نیز بر روی قسمت نشیمنگاه تثبیت باشد. پاها را پشت میله قرار داده به گونه‌ای که زاویه زانو تقریبا نود درجه (ورزشکاران حرفه‌ای با توجه به نیاز خود می‌توانند ساق را عقب‌تر ببرند) بوده و ران‌ها با هم موازی باشند. پنجه‌ها نیز رو به جلو باشند. حال دستگیره دستگاه را آزاد کرده و آماده شروع حرکت شوید. 2)اکنون با ایجاد فشار از عضلات هدف پاها را به جلو و بالا و تا جاییکه پاها تقریبا (و نه کاملا صاف شوند) هدایت کنید. این بخش فاز مثبت حرکت بوده و در این فاز عمل بازدم را انجام دهید. 3)حال با کنترل کامل بر اجرای صحیح حرکت ، تمرکز بر عضله هدف و سرعت مناسب پاها را به نقطه شروع حرکت بازگردانید. این بخش فاز منفی حرکت بوده و در این فاز عمل دم را انجام دهید. 4)حرکت را به تعداد مشخص شده در برنامه انجام دهید. با کمک دستگاه‌ها می‌توانید فشار دقیقی به عضله هدفتان وارد کنید.', 'img/leg-extension-rotation-pied-interne.gif', '2025-05-09 10:42:12'),
(6, 'پرس سرشانه نشسته', '1.برای شروع حرکت ابتدا وزنه مناسب را بر روی هالتر بارگذاری کرده و بر روی یک میز با ارتفاع و سطح مقطع مناسب بنشینید. ارتفاع میز به گونه‌ای باشد که کف پا بر روی زمین و سطح مقطع طوری باشد که باسن کاملا بر روی میز قرار بگیرد. اکنون هالتر را به گونه‌ای در جلو بدن بگیرید که روبروی چانه (برای ورزشکاران حرفه‌ای، یا کمی پایین‌تر از چانه) ، مچ در راستای دست ، هالتر نزدیک به بدن ، کف دست رو به جلو و سینه رو به بالا باشد. سر و گردن نیز در راستای ستون فقرات ، کمر کاملا صاف و بدن فقط کمی رو به عقب متمایل باشد. این نقطه شروع حرکت است.\r\n2.حال هالتر را با ایجاد فشار از عضلات سرشانه به بالا هدایت کنید تا جاییکه دست‌ها تقریبا (و نه کاملا) صاف شوند و هنگام بالا بردن دست بدن را کمی به جلو متمایل کنید. این بخش فاز مثبت اولیه حرکت بوده که در این فاز عمل بازدم را انجام دهید.\r\n3.حال هالتر با با کنترل کامل بر اجرای صحیح حرکت تا جاییکه مچ دست در سطح گوش قرار بگیرد پایین بیاورید. این بخش فاز منفی اولیه حرکت بوده و در این فاز عمل دم را انجام دهید.\r\n4.حال وزنه را با ایجاد فشار دوباره از عضلات سرشانه به بالا و تا جاییکه دست‌ها تقریبا (و نه کاملا) به بالا هدایت کنید تا دقیقا بالای سرقرار بگیرد. این بخش فاز مثبت ثانویه حرکت بوده و در این فاز نیز عمل بازدم را انجام دهید.\r\n5.حال با تمرکز بر عضله هدف وزنه را به نقطه شروع اولیه حرکت بازگردانید. این بخش فاز منفی ثانویه حرکت بوده و در این فاز نیز عمل دم را انجام دهید.', 'img/پرس-هالتر-نشسته.gif', '2025-05-09 11:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `mc` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user name`, `email`, `password`, `admin`, `mc`) VALUES
(1, 'm', 'ade@hj', '1234', 1, 1),
(2, 'mamad', 'mohamad@G.c', '1594', 0, 0),
(3, 'mmd', 'aer@g.c', '1579', 0, 0),
(4, 'maa', 'mohamad@G.c', '1478', 0, 0),
(7, 'ali1', 'ade@hj', '1', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
