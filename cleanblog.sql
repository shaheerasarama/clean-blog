-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 11:10 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleanblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hint1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hint2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postimg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogimg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `hint1`, `hint2`, `authorname`, `desc1`, `desc2`, `desc3`, `postimg`, `blogimg`, `desc4`, `created_at`, `updated_at`) VALUES
(1, 'You sit down. You stare at your screen. The cursor blinks. So do you. Anxiety sets in.', 'What new information or ideas can you bring to the table?', 'shaheera sarama', 'You sit down. You stare at your screen. The cursor blinks. So do you. Anxiety sets in. Where do you begin when you want to create an article that will earn you clicks, comments, and social shares? This simple formula will show you how to write a blog post by guiding you from blank page to finished work.', 'I know quite a few writers whose abandoned personal blogs are languishing in some dark corner of the Internet. These writers launched their blogs with joy and enthusiasm, but their momentum fizzled because they found it too hard to keep coming up with inspiring topics. Don’t let this happen to you. Here are some great ways to choose a topic that will resonate with your audience.', 'Pick something you’re passionate about. When you care about your topic, you’ll write about it in a more powerful, emotionally expressive way.\r\nPick something your readers are passionate about. What does your audience care about? It’s important to know so you can engage them. And don’t be afraid to go negative (e.g. Ten “Healthy” Foods You Should Always Avoid). The human negativity bias is legit.\r\nGet inspired by research. Some of the best articles I’ve written germinated when I grew curious about a subject and decided to explore it.\r\nGet inspired by other writers. No, I don’t mean you should plagiarize or blatantly copy ideas. But you can take a look at what your competition is writing about and put your own spin on these subjects. What new information or ideas can you bring to the table?', 'blog/7MkglVzMcUBaEdjjbqHy3Mg2Y3e9G5eGhuKb0HiO.jpg', 'blog/gkiQSBEpytuTxlHlEMGkxOwmccG03qXCF6qZfEgM.jpg', 'Keep a log of every topic idea that comes your way. You never know when you’re going to be stumped by the question “What should I write?', '2021-08-17 12:07:28', '2021-08-31 09:06:58'),
(3, 'Man must explore, and this is exploration at its greatest', 'Problems look mighty small from 150 miles up', 'walaa sarama', 'Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman\'s earth, if free men make it, will be truly round: a globe in practice, not in theory.\r\n\r\nScience cuts two ways, of course; its products can be used for both good and evil. But there\'s no turning back from science. The early warnings about technological dangers also come from science.\r\n\r\nWhat was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.\r\n\r\nA Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That\'s how I felt seeing the Earth for the first time. I could not help but love and cherish her.\r\n\r\nFor those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.', 'The Final Frontier\r\nThere can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.\r\n\r\nThere can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.\r\n\r\nThe dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.\r\nSpaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.', 'Reaching for the Stars\r\nAs we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.', 'blog/Rtwkt9hOsUuJHU3QPXEJQmrZn0zsumE8lld722y0.jpg', 'blog/3TA3CIU3wwRLFd9LfUotRJ6cJDrqwGACSzqcdnWX.jpg', 'Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.\r\n\r\nAs I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.', '2021-08-17 12:12:43', '2021-08-17 12:12:43'),
(4, 'Unemployment in Today’s Recession Compared to the Global Financial Crisis', 'Our research also confirms some interesting observations regarding the distributional aspects of recessions.', 'rahiq', 'There has been much discussion in recent months about how workers who transitioned to working from home—and those who were deemed “essential”—are less affected by the layoffs and job losses brought on by lockdowns than are workers in “social” jobs that require closer human interaction, like restaurant workers. However, our new IMF staff research suggests that this does not tell the full story.', 'In particular, we find that while teleworkable jobs are indeed more secure than non-teleworkable occupations during the current pandemic-related recession, this pattern has also been observed during the global financial crisis of 2007–09—meaning that something more than pandemic-related restrictions is at play.', 'as the chart shows, unemployment has increased less for teleworkable occupations during both recessions. This pattern suggests that people in teleworkable occupations tend to keep their jobs not only because they satisfy the need for social distancing and other novel requirements of the current pandemic, but also because such people tend to be more highly-skilled and educated—and hence less vulnerable to recessions.\r\n\r\nThe paper also finds that essential jobs have been less affected not only during the current recession but also during the global financial crisis. On the other hand, while social jobs have been severely affected during the current recession, they were indeed less affected during the global financial crisis.', 'blog/7YV0DUUENCPkafcQ92ia3CrnOo0tibK7KETf2PgV.jpg', 'blog/JbPMorXDYNRbCXFrcxn8CaKIrkPIuelAFy14GbTt.png', 'Our research also confirms some interesting observations regarding the distributional aspects of recessions. It finds that young and low-skilled workers have always been harmed more in recessions, while women and Hispanics are more severely affected during the current recession. Women in particular are more likely to work in industries and occupations that are being affected more severely during today’s recession. During both recessions, low-income workers have suffered more than top-income earners.', '2021-08-17 12:15:58', '2021-08-17 12:16:38'),
(24, '5 Harsh Truths No One Tells Beginners About Programming', 'It’s Not a One Time Thing. The Grind Is Real', 'Samuel Martins', 'We have all experienced the negative effects of the pandemic. Jobs have been lost, and it is not like the living standards are going down. Most of the people who had onsite jobs lost them. In this period, the most profitable market to go into was the tech market because we can work from anywhere. All we need is a computer that has an internet connection. That being said, there has been a high number of individuals looking to get into programming. This is a good thing. It is just that I do not think their expectations are as they had imagined.', 'In this piece, I want to touch on something most people don’t cover when they are teaching or advising people getting into tech. Most people don’t talk about the harsh or the dark side of programming. We speak a lot about the positives for coding, building software, and technology in general, but I really think it is important to highlight some of the harsh truths that maybe are not spoken about as much when you are learning programming or are a programmer.', 'The reason I want to do this is so when you are learning to program, or if you are a programmer, you can kind of be prepared as to what might come down when you are learning. This is not to discourage you or make you not want to continue on your programming path, it is actually the opposite. It is to prepare you with the skills or insights necessary that if you face some of these challenges, you will know that it is totally normal and you will get through it.', 'blog/LZXYsqwo8MqPn2YAV4K0E8JtWNbhTdDiOYqpm4nG.jpg', 'blog/76APxyMH8tH9nOEbAGlQ5yT2cI6JBx7taOrPEt0s.jpg', 'So, can you become a proficient or amazing programmer after that? Well… it really depends on what kind of background you had before getting into the boot camp, plus, you are never going to feel completely ready to go into the industry even after graduating from a boot camp, which is okay. You just need to be aware of the mindset of continuous learning and growing, even once you graduate. It takes time, and it is almost like a muscle. The more you practice, the more you continue to learn, and the stronger and quicker you will grow.', '2021-09-07 19:34:41', '2021-09-07 19:34:41'),
(26, 'How to become a front-end developer!', 'In this blog post, you can find 10 tips on how to become a front-end developer!', 'Thomas Peham', '1. Learn HTML & CSS. And become good at it.\r\nI guess there’s no way around it. Learn HTML & CSS. Why? Because the basics matter.\r\n\r\nThere are all kinds of different online courses available on how to get started with HTML and CSS. First things first. Sign up at Online courses like Coursera or Team Treehouse. After finishing some initial courses, go ahead and create some static web pages and iterate over and over again.\r\n\r\nI also recommend developing some small UI elements for practicing your newly learned HTML & CSS skills. Codepen.io is a great playground for that. Browse other people’s projects and participate in the community there.\r\n\r\n\r\n\r\n2. Build things.\r\nPlaying around with (small) UI elements is one thing. Creating an actual landing page or website is something different. At some point, you will eventually start using JavaScript snippets.\r\n\r\nDon’t forget to challenge yourself by building first responsive elements.\r\n\r\nSo there’s only one way to becoming better at what you’re doing: Keep learning, keep building.\r\n\r\nPutting these two together, build to learn! There’s no better way to learn than to get your hands dirty. You’ve probably heard this a hundred times by now, but it is for a good reason why this is the advice most often dished out.', '3. Read, read, read\r\nI guess there’s no way around this. Believe it or not. Your reading skills greatly influence your path to becoming a great front-end developer. Especially when starting out, there’s a lot of reading required. Why?\r\n\r\nAt first you’ll probably read a lot of articles, guides and manuals on how to do different things. You’ll also start reading other people’s code.\r\n\r\nOr as Adam (UX Lead at CoachUp) would state:\r\n\r\nCombine that with a good book like Eloquent JavaScript, and you can up your programming game very quickly.\r\n\r\n4. There’s more to front-end development than building a website\r\nIf you followed my tips from 1 to 3, you have probably already done a course or have read a lot of tutorials and are now able to throw together a website.\r\n\r\nHowever, that doesn’t equate to being a “front-end developer”. Knowing how to build a website is a very small part of the front-end puzzle.\r\n\r\nI apologise if that sounds demotivating. But that’s actually the case.\r\n\r\nThere is a whole load of topics that you still should learn about. If we consider performance, testing, QA and many other areas, then you really need to become a deep diver as a front-end developer.', '5. Know your tools\r\nAs you start your journey with front-end development, you will need to decide on your toolkit and the services you need to to make your life easier. Learning about the different tooling options is an important thing. Great tools will help you enhance and automate your front-end development workflow.\r\n\r\nThere will be an ocean of possibilities but soon enough, you’ll find yourself using certain tools and apps. One of those tools will definitely be the Chrome developer tools. Why? Because you can play with HTML, CSS and JavaScript in real-time and this will give you the immediate feedback you need to learn quickly.\r\nAdditionally, node, npm, bower and many more excellent tools are there to facilitate your daily work. And don’t forget about versioning. 😉\r\n\r\n6. Version control will save your life.\r\nOK, maybe this sounds a bit too exaggerated. But trust me on that. Version control will save you some sleepless nights.\r\n\r\nInstead of trying something and having it blow up in your face or hitting command+z a trillion times, you can simply trash your branch and roll back to what was working previously.\r\n\r\nSo make sure to become an expert at Git.\r\n\r\n7. Be the middleman\r\nAs a front-end developer, you need to be aware that you put yourself in some kind of middleman role. As a middleman, you are in touch with QA people, clients, UX experts as well as other developers. You will need to take different perspectives into consideration.\r\n\r\nThat is why, besides learning the basics of HTML, CSS and JavaScript, you need to make sure to be able to communicate clearly.\r\n\r\nOr as Kyle stated it:', 'blog/yJWFCLMDc8xywlq6xfVfDjN3t8PgHTgehcM3swml.png', 'blog/N6ZdPq9JNW0vFerQMV7RqyBVoLQpee0mnUhxZlXh.jpg', '8. Do not rush.\r\nAlong the way, you will ask yourself why you do this and you may want to just stop. It may be tempting to just give up. But don’t. If you’re at that point, I have only one advice for you:\r\n\r\nDo. not. give. up.\r\n\r\nSet aside one or two hours every other day to learn. Take a lot of breaks and make sure that you really know the basics. And never rush.\r\n\r\nThe basics form the foundation which will help you get to the next level.\r\n\r\nIf you feel stuck, don’t be afraid to ask questions. Everyone goes through this phase and having the patience to stick it out will help you come out in the end as a pro in front-end development.\r\n\r\n9. Dive deep into frameworks\r\nSo, you made it until here. Awesome!\r\n\r\nNow it’s time to get involved with certain frameworks. Start by looking at the more popular ones and work out for yourself why they do things in a certain way.\r\n\r\nFigure out whether each one is a good thing. Understand how frameworks and industry standards have changed over the last couple of years. Looking at older frameworks, you will probably discover approaches and code which are now obsolete.\r\n\r\nDo not forget: Sometimes, using a framework isn’t the best option, but most of the time it’s well worth knowing about them.\r\n\r\n10. Get involved with open source projects\r\nContribute to FOSS on GitHub. Don’t shy away from big frameworks that seem well established. Even framework authors make mistakes.\r\n\r\nYou may be spending most of your time reading code but don’t see it as a waste of time.\r\n\r\nYou will pick up good habits and practices along the way and will gain some experience working with other developers. When you feel ready to write some code, go through issues on the repository and pick one problem which is manageable for you.\r\n\r\nGetting involved with various projects, especially open source, will not only make you a better front-end developer, but it will also help you build up your very own online brand as an active, experienced developer.', '2021-09-15 14:06:12', '2021-09-15 14:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shaheerasarama', 'shaheerasarama@gmail.com', '+970568665206', 'hello,can i send my blog?', '2021-08-17 12:02:32', '2021-08-17 12:02:32'),
(2, 'shaheerasarama', 'shaheerasarama@gmail.com', '+970568665206', 'hhhhhhhhhhhhh', '2021-08-17 15:19:11', '2021-08-17 15:19:11'),
(3, 'ولاء صرمه', 'walaa@gmail.com', '+970568665206', 'مرحبا', '2021-09-05 10:30:04', '2021-09-05 10:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_05_112815_create_blogs_table', 1),
(5, '2021_08_05_112909_create_settings_table', 1),
(6, '2021_08_05_112951_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `facebook`, `twitter`, `github`, `created_at`, `updated_at`) VALUES
(2, 'https://www.facebook.com/', 'https://twitter.com/', 'https://github.com/', '2021-08-17 15:20:37', '2021-08-17 15:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shaheera', 'admin@gmail.com', NULL, '$2y$10$eHB1NO33ZQOPsbBW0r9ZbelIGeXHHXkq.4E8zrwtHodjwBdvAgWT6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
