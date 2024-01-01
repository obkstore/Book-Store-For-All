-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 ديسمبر 2023 الساعة 19:11
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- بنية الجدول `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `auther` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `book`
--

INSERT INTO `book` (`id`, `name`, `auther`, `price`, `description`, `image`) VALUES
(8, 'العادات السبع للناس الاكثر فعالية', 'ستيفين كوفي', 30000, 'نظراً لكون هذا الكتاب من أكثر الكتب المؤلفة الهاما وتأثيرا فقد أسر القراء طوال الخمسة والعشرين عاما الماضية وقد حول حياة عدد من الرؤساء وكبار المديرين التنفيذيين والمحاضرين والآباء فنقول بايجاز انه حول حياة ملايين الأشخاص من مختلف الأعمار والوظائف ومن حين لآخر يظهر لنا كتاب لايغير حياة القراء وحسب بل يترك أثرا في الثقافة ذاتها وهذا الكتاب ينتمي الى هذه الفئة', 'images/book1.jpg'),
(9, 'فن اللامبالاة', 'مارك مانسون', 35000, 'هو أحد كتب التنمية البشرية وهو موجه للأشخاص الذين يريدون العيش حياة غير مألوفة، حيث يتحدث عن الصدمات التي بشعر بها، وان الإنسان لا يجب بالضرورة ان يكون ايجابي طول الوقت، حيث مفتاح السعادة والقوة هو في التعامل مع الشدائد بشكل أفضل. ويتناول في فصول كتاب فن اللامبالاة كيفية تغلب الانسان على عقبات حياته بطريقة منطقية بعيدا عن التهرب والخوف منها.', 'images/book2.jpg'),
(10, 'العادات الذرية', 'جيمس كلير', 25000, 'يعلمنا هذا الكتاب: كيف نخلق الوقت من أجل اكتساب عادات جديدة كيف نتخلص من نقص الحافز، ونتمتع بقوة الإرادة كيف نغير بيئتنا المحيطة لتحقيق نتائج إيجابية في الحياة', 'images/book3.jpg'),
(11, 'السر', 'روندا بايرن', 40000, 'تأليف  ﺍﻟﻜﺎﺗﺒﺔ  ﺭﻭﻧﺪﺍ  ﺑﺎﻳﺮﻥ  أسترالية الجنسية ﻭﻧُﺸﺮ ﺍﻟﻜﺘﺎﺏ  السر في ﺍﻟﻌﺎﻡ 2006 ولقد اعتبر من أفضل كتب التنمية البشرية وتطوير الذات ولقى كتاب السر رضا واستحسان فئة كبيرة من الناس ولقد تم بيع أكثر من 21 مليون نسخة حول العالم، ولقد ترجم كتاب السر الأعظم لأكثر من 40 لغة عالمية ومنها طبعا كتاب السر باللغة العربية. إضافة الى ذلك تحويل كتاب السر الى عمل سينمائي حمل نفس ااسم كتابsecret  ازداد  الكتاب قانون الجذب شهرة أكثر واوسع نطاقا.', 'images/book4.jpg'),
(12, 'الأب الغني/الأب الفقير', 'روبرت كيوساكي', 38000, 'يلقي الضوء على الفارق بين تعليم الأب الفقير والأب الغني لأبنائهما فيما يتعلق بالمال والاستثمار.  يشرح مفاهيم مالية أساسية مثل الأصول والخصوم والدخل السلبي والدخل الإيجابي.  يعلم أهمية استثمار الأموال في الأصول التي تولد دخلًا دائمًا.  يشجع على التعلم المالي واستثمار الوقت والجهد في تطوير المهارات المالية.  يسلط الضوء على أهمية تحقيق الاستقلالية المالية و التحديات التي يمكن أن تواجهها.  يقدم ست نصائح مالية مهمة تشمل الادخار والاستثمار و الترشيد و توجيه الاستثمارات نحو الأصول الربحية و التعلم من خلال العمل.', 'images/book5.jpg'),
(13, 'أغنى رجل في بابل', 'جورج كلاسون', 25000, 'هو كتاب لرجل الأعمال الأمريكي (جورج كلاسون) نشر في عام 1926، يعطي الكتاب نصائح مالية لمجموعة من الناس عاشوا في مدينة بابل القديمةقبل نشر الكتاب كان جورج يكتب مقالات قصيرة عن طرق النجاح وينشرها في وريقات صغيرة يتناقلها الناس، حتى جمع أشهر هذذه الوريقات ووضعها في كتابه هذا. وقد أُعيد نشر هذا الكتب في عام 2002، و2004 و2007 وبيعت منه أكثر من 2 مليون نسخ', 'images/book6.jpg'),
(14, 'نظرية الفستق', 'فهد عامر الاحمدي', 34000, 'نبذة عن كتاب نظرية الفستق كتاب نظرية الفستق هو أحد كتب التنمية البشرية وتطوير الذات، مؤلف الكتاب هو فهد عامر الأحمدي، يتكون الكتاب من جزئيين الجزء الأول يحتوي على 338 صفحة، والذي يتضمن عدد كبير من المقالات التي تتحدث كيفية تطوير الذات وتحسين طرق التفكير وزيادة الوعي لدى الأشخاص.', 'images/book7.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `userbook`
--

CREATE TABLE `userbook` (
  `id` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `userbook`
--

INSERT INTO `userbook` (`id`, `bookid`, `userid`) VALUES
(1, 9, 3);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `username`, `password`, `type`) VALUES
(1, '4', 'r', 'd@rr', 'c', 'v', 'user'),
(2, 't', 't', 't@we', 't', 'r', 'user'),
(3, 'moha', 'kh', 't@we', 'mo', 'kk', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbook`
--
ALTER TABLE `userbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `userbook_ibfk_1` (`bookid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userbook`
--
ALTER TABLE `userbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `userbook`
--
ALTER TABLE `userbook`
  ADD CONSTRAINT `userbook_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `userbook_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
