-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 30 jan. 2021 à 14:24
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exam_poo_laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ex sed', '2021-01-27 04:08:36', '2021-01-28 00:04:01'),
(2, 'velit ducimus', '2021-01-08 03:28:42', '2021-01-28 00:04:01'),
(3, 'dolore quia', '2021-01-12 04:55:04', '2021-01-28 00:04:01'),
(4, 'qui deserunt', '2021-01-17 08:35:36', '2021-01-28 00:04:01'),
(5, 'in temporibus', '2021-01-25 08:30:27', '2021-01-28 00:04:01'),
(6, 'aut sed', '2021-01-12 20:00:00', '2021-01-28 00:04:01'),
(7, 'rerum voluptas', '2021-01-15 01:37:11', '2021-01-28 00:04:01'),
(8, 'quasi sed', '2021-01-18 12:33:36', '2021-01-28 00:04:02'),
(9, 'necessitatibus maxime', '2021-01-23 03:05:11', '2021-01-28 00:04:02'),
(10, 'dolores nesciunt', '2021-01-12 06:41:29', '2021-01-28 00:04:02');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Francis Ernser', '2021-01-12 21:18:45', '2021-01-28 00:04:15'),
(2, 'Mr. Ronaldo Parker I', '2021-01-14 23:33:02', '2021-01-28 00:04:15'),
(3, 'Joy Jacobs III', '2021-01-19 20:57:53', '2021-01-28 00:04:15'),
(4, 'Dr. Ian Dickens', '2021-01-27 01:31:27', '2021-01-28 00:04:15'),
(5, 'Gerard Wolff', '2021-01-21 09:12:55', '2021-01-28 00:04:15'),
(6, 'Tracey Lockman', '2021-01-13 07:10:34', '2021-01-28 00:04:15'),
(7, 'Roger Gaylord', '2021-01-26 17:21:18', '2021-01-28 00:04:15'),
(8, 'Kaya Bernhard DDS', '2021-01-18 21:46:39', '2021-01-28 00:04:15'),
(9, 'Dr. Kale Cormier III', '2021-01-12 15:19:39', '2021-01-28 00:04:15'),
(10, 'Kenya Lehner', '2021-01-23 01:39:27', '2021-01-28 00:04:15');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_26_154909_create_clients_table', 1),
(5, '2021_01_27_154113_create_works_table', 1),
(6, '2021_01_27_154430_create_tags_table', 1),
(7, '2021_01_27_154734_create_categories_table', 1),
(8, '2021_01_27_155700_create_posts_table', 1),
(9, '2021_01_28_004015_works_has_tags', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`, `categorie_id`) VALUES
(1, 'et laudantium cum qui nobis', 'Rerum sunt architecto velit inventore iusto velit vitae. Voluptatem sed et officia quis omnis quam delectus.', '3', '2021-01-27 07:33:51', '2021-01-28 00:04:55', 10),
(2, 'voluptatem non repellendus enim dolore', 'Amet nesciunt modi sunt et voluptatem. Repudiandae excepturi quibusdam ad deleniti tenetur. Est similique atque unde sapiente et qui.', '4', '2021-01-11 22:21:36', '2021-01-28 00:04:55', 7),
(3, 'qui sit placeat vitae consequuntur', 'Iste et placeat accusantium molestiae repudiandae. Dolor quibusdam quam ratione rem. Vitae omnis debitis ea velit sapiente. Ex quia omnis voluptatem qui.', '2', '2021-01-24 11:21:21', '2021-01-28 00:04:55', 10),
(4, 'sit ea quia a ea', 'Dolorem eligendi qui molestias officiis rem exercitationem. Praesentium voluptatem debitis voluptate. Doloremque et beatae aliquid adipisci tempore et perspiciatis. Nam repellendus id temporibus voluptatem natus quia placeat nam.', '2', '2021-01-10 15:34:51', '2021-01-28 00:04:55', 5),
(5, 'quos dolores in saepe rem', 'Corporis saepe ipsum pariatur cupiditate quia necessitatibus. Et qui veniam et sunt quia aperiam pariatur corporis. Ea nihil dignissimos blanditiis nisi unde perspiciatis. Numquam odit sunt sed sed sequi vitae.', '2', '2021-01-15 09:57:28', '2021-01-28 00:04:55', 10),
(6, 'incidunt qui qui ipsam cumque', 'Ut iste expedita molestiae nesciunt. Exercitationem numquam atque voluptatem qui tenetur voluptatem. Accusamus nobis id dolor quis. Enim est quis similique ullam est ipsam ut.', '2', '2021-01-25 06:13:19', '2021-01-28 00:04:55', 1),
(7, 'omnis voluptates adipisci illo doloremque', 'Adipisci est a cum dignissimos occaecati. Dolores distinctio deleniti consectetur quos omnis. Aut dicta voluptatem minus. In aut ad in quis ea consequatur. Nam labore eligendi veritatis impedit ut cupiditate.', '3', '2021-01-09 23:44:28', '2021-01-28 00:04:55', 8),
(8, 'sint vel beatae fugit rerum', 'Suscipit sed deleniti eveniet unde. Porro amet qui quia voluptas at nostrum.', '3', '2021-01-27 11:31:33', '2021-01-28 00:04:55', 10),
(9, 'esse totam rerum delectus distinctio', 'Omnis autem voluptatem iusto placeat ea corrupti consectetur. Et voluptatem sit exercitationem ipsum. Quod saepe maxime qui nemo voluptas consequuntur voluptas. Natus aliquam est omnis quis nisi quod harum magni. Optio minima quas doloremque molestiae architecto.', '1', '2021-01-23 02:19:05', '2021-01-28 00:04:55', 8),
(10, 'dolor at delectus eaque et', 'Pariatur nemo unde sed delectus blanditiis. Aspernatur molestias culpa rem saepe deleniti sed.', '2', '2021-01-16 04:18:57', '2021-01-28 00:04:55', 4),
(11, 'tempora dolores iure quibusdam enim', 'Debitis officiis exercitationem qui error vel. Ut eos occaecati assumenda dolore.', '3', '2021-01-12 01:47:40', '2021-01-28 00:04:55', 9),
(12, 'voluptate quia et ullam eligendi', 'Rerum et omnis exercitationem voluptas consequatur dolor. Aut est doloribus officia. Aspernatur accusantium suscipit veritatis nihil. Qui occaecati aperiam cumque cumque.', '2', '2021-01-19 15:50:40', '2021-01-28 00:04:55', 7),
(13, 'unde ea accusamus et quae', 'Illum asperiores laborum repellat dicta et quaerat vel nihil. Fugit dolores laboriosam occaecati officiis autem aut. Quasi eos molestiae harum aut sequi voluptas unde dolor.', '4', '2021-01-11 02:59:14', '2021-01-28 00:04:55', 1),
(14, 'praesentium optio est voluptatem delectus', 'Illo qui atque repudiandae nostrum dolores officia. At consequatur dolorum ipsum facere vitae. Maiores consequuntur ipsam tempora qui porro ut deserunt.', '4', '2021-01-22 10:56:31', '2021-01-28 00:04:55', 8),
(15, 'maxime nisi laborum unde consectetur', 'Veniam temporibus a at. Rerum suscipit molestiae adipisci fugit quis neque rem eos. Ipsam alias dolore modi reiciendis.', '3', '2021-01-10 15:30:43', '2021-01-28 00:04:55', 5),
(16, 'ut a est qui est', 'Illo commodi iusto consectetur. Repudiandae inventore ipsum itaque corporis asperiores ut. Est et quod quidem nostrum doloremque aut. Qui aut iusto nostrum ut illum voluptatem vel.', '3', '2021-01-14 01:51:14', '2021-01-28 00:04:55', 6),
(17, 'quae officiis consequatur sed provident', 'Maxime ut quis sint suscipit et sapiente. Dolores eum mollitia rerum corporis aut sed autem. Enim dolore magnam velit non rerum rerum.', '3', '2021-01-08 15:47:56', '2021-01-28 00:04:55', 9),
(18, 'et dolorum incidunt consequuntur est', 'In cum recusandae iste reiciendis minima. Vero eos enim accusamus atque. Tempora consectetur vel vel.', '2', '2021-01-15 05:07:11', '2021-01-28 00:04:55', 6),
(19, 'sunt qui molestiae quaerat omnis', 'Ut ipsam saepe sapiente corporis unde veritatis neque explicabo. Modi nihil inventore mollitia occaecati voluptatem voluptas dolorum dolorem. Nobis vero et excepturi perspiciatis quo.', '4', '2021-01-14 16:42:59', '2021-01-28 00:04:55', 2),
(20, 'quasi deserunt eos culpa qui', 'Eaque tempora et unde quo labore. Deserunt dignissimos nam et hic. Pariatur velit est voluptatem ratione aut sunt. Reiciendis sed expedita suscipit ipsa unde voluptatum unde.', '2', '2021-01-16 08:35:08', '2021-01-28 00:04:55', 2),
(21, 'qui corporis eum ad laborum', 'Consequatur est et ullam error odio voluptas. Voluptate aut non temporibus ut doloribus. Dignissimos qui at accusantium molestiae quos. Corrupti vel vel saepe est et et.', '2', '2021-01-27 17:38:02', '2021-01-28 00:04:55', 4),
(22, 'ex ut minus qui omnis', 'Dolore explicabo molestias atque quia. Nam tempora dolor et ullam molestiae aperiam. Asperiores atque voluptatem minus ipsam architecto.', '2', '2021-01-18 09:03:08', '2021-01-28 00:04:55', 2),
(23, 'quia architecto dignissimos inventore consequuntur', 'Temporibus suscipit voluptatem iure. Voluptatem est aliquam nulla iusto ipsam distinctio. Eos alias eos nihil minima.', '1', '2021-01-20 23:05:17', '2021-01-28 00:04:56', 9),
(24, 'non laudantium nesciunt quo non', 'Ducimus praesentium doloremque sed praesentium ut. Molestiae id iste numquam. Sint aut et ut eum. Esse cumque iste sit officia.', '3', '2021-01-14 15:27:40', '2021-01-28 00:04:56', 1),
(25, 'illo nihil dolorum rerum possimus', 'Magnam blanditiis porro ut. Doloribus itaque hic facere necessitatibus deleniti.', '1', '2021-01-11 04:21:22', '2021-01-28 00:04:56', 9),
(26, 'repellendus tempore ea non pariatur', 'Autem ea earum velit sit autem. Odio quos dolorem eius et. Reprehenderit ut deleniti dolorem et dicta et.', '1', '2021-01-08 08:46:14', '2021-01-28 00:04:56', 7),
(27, 'perspiciatis corporis aut maxime ut', 'Quos praesentium vel et quo. Quidem omnis est non ex qui tempore perferendis.', '2', '2021-01-15 09:36:54', '2021-01-28 00:04:56', 10),
(28, 'doloribus ut ut totam est', 'Voluptatem perferendis deleniti ipsa quo voluptatem et. Neque nihil perspiciatis aliquam atque veniam possimus.', '2', '2021-01-17 16:30:44', '2021-01-28 00:04:56', 7),
(29, 'fuga soluta itaque et voluptatem', 'Ad alias dolores rerum dolore magnam accusamus optio. Doloremque sunt quia aspernatur commodi quidem qui. Aperiam fugiat perferendis molestiae perferendis temporibus incidunt est. Quisquam quidem architecto explicabo autem illum architecto enim nemo.', '1', '2021-01-12 15:15:48', '2021-01-28 00:04:56', 9),
(30, 'in possimus distinctio vitae velit', 'Culpa dolores deleniti distinctio eos cum. Sit consequatur et saepe iusto non. Eius voluptate iusto harum non nulla saepe ea error. Pariatur cumque rerum deleniti.', '1', '2021-01-21 07:29:54', '2021-01-28 00:04:56', 2),
(31, 'qui voluptatem est velit officia', 'Et ullam cumque et quibusdam. Cupiditate non rerum tempore illo. Ipsum laboriosam molestiae eveniet deleniti velit sit et explicabo.', '1', '2021-01-16 08:12:08', '2021-01-28 00:04:56', 2),
(32, 'velit est placeat consequatur quis', 'Quia dolores molestiae est non. Quis tenetur provident corrupti. Aliquam est dolorum molestias provident officia maiores.', '2', '2021-01-19 09:44:15', '2021-01-28 00:04:56', 7),
(33, 'repudiandae et ipsum voluptatem eligendi', 'Est error aut repellat sequi nostrum assumenda eius exercitationem. Impedit reiciendis corporis maiores ut nihil. Aspernatur quasi eum sunt repellat est rerum.', '4', '2021-01-14 18:32:56', '2021-01-28 00:04:56', 7),
(34, 'voluptatem eveniet velit ipsam quas', 'Repudiandae ipsam et recusandae rerum sed quaerat est. Porro accusamus et necessitatibus. Atque quis quo maiores velit delectus.', '1', '2021-01-13 19:10:12', '2021-01-28 00:04:56', 1),
(35, 'laborum alias pariatur odio aut', 'Dolore nemo voluptas velit placeat repellendus at explicabo eos. Corrupti rem minima necessitatibus tempore. Aut aut veniam eius dolores. Repellat corrupti porro quibusdam est laboriosam aut.', '4', '2021-01-11 05:08:03', '2021-01-28 00:04:56', 1),
(36, 'tempora quis recusandae expedita ipsam', 'Ipsa voluptatem eum aspernatur ut quos excepturi explicabo a. Consectetur nulla laborum voluptates voluptatibus eveniet. Earum nulla nulla ut deleniti. Quia dolorem dolorem modi ipsa.', '4', '2021-01-27 18:28:45', '2021-01-28 00:04:56', 3),
(37, 'reprehenderit ipsa accusantium vitae animi', 'Est accusamus assumenda animi. Natus vel sunt reiciendis perferendis.', '1', '2021-01-16 08:36:06', '2021-01-28 00:04:56', 6),
(38, 'qui ipsum unde dolorum rem', 'Et sunt blanditiis quam molestias aliquid et adipisci. Velit molestiae tempore qui est magnam dignissimos quaerat. Non deserunt id et sequi consequatur et.', '3', '2021-01-10 08:29:41', '2021-01-28 00:04:56', 10),
(39, 'voluptatem earum doloribus quos vitae', 'Atque beatae error ducimus atque doloribus optio. Perspiciatis tempora molestias culpa est. Autem et quaerat maxime error omnis eius blanditiis. Quam quia quo est sit.', '4', '2021-01-21 10:36:11', '2021-01-28 00:04:56', 3),
(40, 'pariatur aut quasi non nisi', 'Ad quisquam error veniam. Magni eum sint enim voluptas culpa. Provident aliquam quod placeat consectetur illum temporibus.', '3', '2021-01-25 00:59:13', '2021-01-28 00:04:56', 10),
(41, 'dolor fugiat dolores aut est', 'Ut nostrum vel non. Amet doloribus ut tempore sit voluptates. Et repellat dolore alias soluta. Qui esse rerum aut delectus aut inventore autem magni.', '1', '2021-01-20 18:05:46', '2021-01-28 00:04:56', 2),
(42, 'voluptates dolor harum est veritatis', 'Ea et veritatis quo. Officiis ipsa enim aspernatur et ullam. Qui dicta consequatur eos itaque exercitationem.', '3', '2021-01-19 23:28:55', '2021-01-28 00:04:56', 6),
(43, 'ut fugiat possimus rerum et', 'Quisquam nulla voluptas sit rerum. Eos in vel nihil sit. Ab similique illum expedita. Provident laborum quae voluptatem et officia dolorem animi beatae.', '1', '2021-01-26 06:30:24', '2021-01-28 00:04:56', 1),
(44, 'sint tempora quis et non', 'Repellendus suscipit ab ut molestias alias quam. Aspernatur aspernatur excepturi quia rem vitae est. Quae consequatur delectus illum et cupiditate ut et. Illum minima ipsam dignissimos maxime quae ipsam eligendi. Vitae consequatur laboriosam quae consectetur doloremque expedita rerum.', '2', '2021-01-17 11:00:07', '2021-01-28 00:04:56', 6),
(45, 'dolor omnis aut magni iusto', 'Sequi rem aspernatur consequatur. Repudiandae non est earum qui vel eligendi. Impedit debitis non sunt est est. Voluptas aspernatur molestiae ducimus dolorem quod exercitationem.', '4', '2021-01-09 17:31:25', '2021-01-28 00:04:56', 3),
(46, 'rem neque ut et dolorem', 'Nemo cupiditate et voluptas non excepturi tenetur quo. Asperiores quis dolorem temporibus enim iste illum. Nobis est atque autem aperiam eos id. Corporis totam eaque temporibus nihil ea vitae.', '4', '2021-01-08 12:15:22', '2021-01-28 00:04:56', 8),
(47, 'voluptas ea occaecati distinctio consectetur', 'Possimus quos numquam quia nulla nulla. Quibusdam dolore eum impedit minus autem rem dolorum. Possimus distinctio exercitationem magni sequi error corrupti.', '1', '2021-01-20 09:21:37', '2021-01-28 00:04:56', 2),
(48, 'libero ut odit ab quae', 'Impedit dolorem qui consequatur et. Animi fugit ut id ducimus. Et qui laboriosam aut enim similique accusantium quia repellat.', '3', '2021-01-10 10:52:09', '2021-01-28 00:04:56', 2),
(49, 'nihil assumenda sunt rem perferendis', 'Incidunt quia sed eaque quo ut. Aut cum ut possimus autem quia voluptas. Quia et cumque sunt voluptatem.', '4', '2021-01-20 09:16:21', '2021-01-28 00:04:56', 8),
(50, 'beatae fugiat recusandae veniam voluptatibus', 'Quod nisi ullam exercitationem reprehenderit. Est a nulla nobis dolorem temporibus praesentium repudiandae aut. Nulla at magni culpa et. Similique quae quaerat id optio architecto commodi impedit. Soluta quo cum corporis nesciunt explicabo optio.', '1', '2021-01-16 08:53:21', '2021-01-28 00:04:56', 10);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'maxime quis', '2021-01-11 22:17:51', '2021-01-28 00:05:10'),
(2, 'harum et', '2021-01-16 02:30:31', '2021-01-28 00:05:10'),
(3, 'architecto libero', '2021-01-13 05:33:36', '2021-01-28 00:05:10'),
(4, 'non soluta', '2021-01-08 18:39:05', '2021-01-28 00:05:10'),
(5, 'adipisci voluptas', '2021-01-15 06:14:36', '2021-01-28 00:05:10'),
(6, 'quibusdam necessitatibus', '2021-01-18 07:46:33', '2021-01-28 00:05:10'),
(7, 'sed nihil', '2021-01-26 07:41:51', '2021-01-28 00:05:10'),
(8, 'qui ea', '2021-01-08 11:51:03', '2021-01-28 00:05:10'),
(9, 'quidem id', '2021-01-17 21:20:23', '2021-01-28 00:05:10'),
(10, 'sequi praesentium', '2021-01-11 07:37:37', '2021-01-28 00:05:10');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morgan Schaefer', 'gann.gann87@gmail.com', NULL, '$2y$10$gorOPY3U9VcHMpUiUmUkkeQzzCo7Onb5BHd7u6GfQ/HDSFvLO0476', NULL, '2021-01-30 07:29:25', '2021-01-30 07:29:25');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inSlider` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `title`, `content`, `image`, `inSlider`, `created_at`, `updated_at`, `client_id`) VALUES
(1, 'eum vel qui doloribus', 'Tenetur aliquid sed est odit sed. Labore aut numquam minima vitae ut et. Autem id modi non omnis. Quis sapiente sunt totam similique reprehenderit.', '8', 1, '2021-01-21 06:50:08', '2021-01-28 00:05:29', 5),
(2, 'et repudiandae veniam sit', 'Voluptatem temporibus delectus et quam eius quidem distinctio. Eos architecto qui quo et. Quia sit sed omnis. Dolore quaerat qui nostrum quam sit.', '8', 0, '2021-01-16 12:40:43', '2021-01-28 00:05:29', 4),
(3, 'non vel est voluptates', 'Natus tempore ullam sit quibusdam ducimus. Nisi saepe consequuntur enim aut ipsa vero. Fuga corporis iure laboriosam magnam qui. Eum similique corrupti nostrum velit possimus.', '7', 0, '2021-01-23 02:40:44', '2021-01-28 00:05:29', 1),
(4, 'sit vel dignissimos eligendi', 'Nisi quibusdam est quis nobis inventore. Laboriosam repudiandae facere porro corrupti quia. Quia in reprehenderit aliquam ut dolorem. Aliquam expedita quo sequi possimus quibusdam mollitia deleniti quia.', '5', 1, '2021-01-26 13:01:53', '2021-01-28 00:05:29', 1),
(5, 'labore ut fugit rerum', 'Magni vel quam omnis commodi. Perferendis suscipit nihil ipsa labore qui sint nam. Est voluptas ab ut magnam saepe saepe. Provident accusamus ea commodi non voluptatem.', '1', 0, '2021-01-25 07:53:55', '2021-01-28 00:05:29', 2),
(6, 'fugiat consectetur expedita hic', 'Qui qui et amet voluptatem vero. Voluptatem voluptates ea ea iste. Eveniet vero rerum impedit culpa ipsa quia veritatis quia.', '6', 0, '2021-01-18 07:07:07', '2021-01-28 00:05:29', 1),
(7, 'consequatur expedita adipisci eos', 'Aut qui placeat ratione temporibus consequuntur omnis est. Non similique enim quia aliquid rerum. Ducimus non ut nesciunt in error sunt ut aut. Ut temporibus eum saepe quae corporis voluptate.', '4', 1, '2021-01-08 06:24:03', '2021-01-28 00:05:29', 5),
(8, 'veniam fuga doloremque alias', 'Est quibusdam deleniti id aut et. Aut maxime aut excepturi consectetur. Labore sunt nobis quo magnam minima cum. Sunt recusandae iure deserunt et veniam officiis.', '7', 0, '2021-01-13 12:50:46', '2021-01-28 00:05:29', 5),
(9, 'laboriosam voluptatum nam natus', 'Accusamus qui qui aperiam atque aut illum. Cupiditate iste ullam nihil culpa velit. In officiis qui molestias sit. Sunt aut consequuntur consequatur suscipit odit.', '1', 0, '2021-01-17 09:51:17', '2021-01-28 00:05:29', 4),
(10, 'cum at repellat molestiae', 'Enim minus odit nobis qui enim. Illo rerum animi fugit voluptatum incidunt. At quasi atque exercitationem vero quia. Et a et beatae harum unde. Quos omnis culpa magni delectus.', '3', 0, '2021-01-09 00:29:04', '2021-01-28 00:05:29', 2),
(11, 'aut officia iusto ab', 'Est fugit aut sequi possimus. At voluptas asperiores autem quo aut sapiente in veritatis. Iure repellat enim ipsa eum expedita eos et.', '4', 1, '2021-01-22 17:36:33', '2021-01-28 00:05:29', 2),
(12, 'consectetur architecto odit odit', 'Quod error nemo pariatur iusto vel repellendus molestias molestiae. Quo excepturi nulla sunt ipsa doloribus voluptates modi. Pariatur vitae impedit quaerat eaque.', '1', 0, '2021-01-15 13:18:39', '2021-01-28 00:05:29', 4),
(13, 'consectetur quisquam facere ut', 'Eum dolorum sunt corporis. Reprehenderit mollitia dolores ut impedit. Provident laboriosam est ut nemo excepturi vel commodi. Aut in nisi ea numquam. Nisi aut cupiditate fuga vitae modi ullam sit.', '3', 0, '2021-01-17 00:27:26', '2021-01-28 00:05:29', 4),
(14, 'ut incidunt amet fugiat', 'Incidunt fuga iure iste rem rerum reiciendis aut. Quisquam in optio quia rerum facilis ipsa eos possimus. Voluptatem minus architecto placeat animi. Fugiat facilis excepturi omnis fuga eveniet.', '6', 1, '2021-01-13 06:45:13', '2021-01-28 00:05:29', 5),
(15, 'perferendis quibusdam earum explicabo', 'Laboriosam a molestiae autem asperiores minus accusantium autem. Aut eius voluptatem magnam quidem illum totam. Eveniet omnis voluptatem voluptatem fugit et ipsam ipsa eum.', '5', 0, '2021-01-18 10:31:04', '2021-01-28 00:05:30', 1),
(16, 'eum quae cumque consectetur', 'Aliquam excepturi magni quas reiciendis omnis quo earum. Vel natus ab harum id. Assumenda porro et quidem dolor eaque maiores omnis. Quia natus dicta ea asperiores similique.', '8', 0, '2021-01-10 05:41:34', '2021-01-28 00:05:30', 1),
(17, 'praesentium omnis hic voluptatem', 'Rerum et nulla recusandae. Dolorem maiores placeat et placeat et. Quis culpa molestias vero molestiae amet. Et voluptatibus qui iure dolor sunt facilis.', '1', 0, '2021-01-20 15:23:45', '2021-01-28 00:05:30', 4),
(18, 'est rem earum vitae', 'Magni sint assumenda ipsa sed laborum eius optio. Expedita aspernatur qui qui praesentium modi quidem. Iusto nesciunt ut minima dolorum minus quo quia. Ullam voluptas qui aut et aut dolore.', '4', 1, '2021-01-17 05:40:17', '2021-01-28 00:05:30', 2),
(19, 'accusamus nemo earum repellat', 'Rerum sed a quam et porro iure. Voluptates corrupti corporis adipisci. Et ea soluta dolores.', '2', 0, '2021-01-22 19:11:19', '2021-01-28 00:05:30', 5),
(20, 'ex repellendus animi non', 'Id possimus autem corrupti tempore. Aliquid non laudantium et dolor culpa quis tempore.', '7', 1, '2021-01-24 15:58:17', '2021-01-28 00:05:30', 2),
(21, 'officiis quod dolores quae', 'Deserunt soluta sed at dolorem. Tenetur quos illo qui eaque minima quam. Ducimus repellat qui velit. Rerum consectetur magni consequatur ut voluptate. Et commodi adipisci tempore.', '7', 0, '2021-01-13 12:04:21', '2021-01-28 00:05:30', 4),
(22, 'dolores impedit ducimus praesentium', 'Quis eveniet necessitatibus necessitatibus aut earum fuga consequuntur veniam. Itaque incidunt iure earum magni qui voluptatibus velit. Nesciunt et reprehenderit eos est architecto.', '3', 0, '2021-01-08 12:54:26', '2021-01-28 00:05:30', 2),
(23, 'eligendi sunt aut ut', 'Suscipit et nihil et. Enim sit maxime et.', '2', 1, '2021-01-18 06:25:47', '2021-01-28 00:05:30', 2),
(24, 'non pariatur vitae similique', 'Beatae totam reiciendis ipsum eligendi qui. Iusto repellat laborum explicabo dolor repellat. Cum asperiores totam qui esse ratione ullam excepturi. Officia ut asperiores repellendus voluptas officiis.', '5', 1, '2021-01-17 09:00:32', '2021-01-28 00:05:30', 5),
(25, 'dolorem voluptas rem error', 'Reiciendis voluptatem eveniet ducimus nobis saepe. Dolorem provident laboriosam repudiandae aut. Ea quibusdam repellat nam consequatur. Dicta corporis fuga nihil ipsam aut officiis.', '3', 1, '2021-01-10 17:48:58', '2021-01-28 00:05:30', 3),
(26, 'aliquam autem eos voluptas', 'Cum omnis non reprehenderit at in delectus in. Officiis sint eligendi fuga accusamus. Fugit sint minus eos aliquid et natus odit debitis.', '7', 1, '2021-01-26 19:13:54', '2021-01-28 00:05:30', 2),
(27, 'eos quia assumenda eaque', 'Vero quod rem est dolorem porro. Facere dolorum hic qui voluptatem. Autem quo dicta dolor qui ut culpa adipisci. Explicabo repellat fugiat eos ea ut placeat.', '2', 1, '2021-01-19 05:32:35', '2021-01-28 00:05:30', 1),
(28, 'perspiciatis distinctio soluta optio', 'Quis eos quo culpa voluptates exercitationem hic eos. Qui soluta incidunt molestiae debitis. At sequi provident ut quasi ut quaerat quidem ut. Rerum autem dolor dolores.', '2', 1, '2021-01-21 23:33:06', '2021-01-28 00:05:30', 2),
(29, 'ab et qui et', 'Ipsa et qui aspernatur exercitationem eos laudantium blanditiis. Dolorem non dolor et expedita. Modi qui repellendus inventore eum aut error. Fuga explicabo optio ut aut.', '4', 0, '2021-01-14 09:42:55', '2021-01-28 00:05:30', 3),
(30, 'earum quisquam molestiae sit', 'Debitis totam illum fugit corrupti culpa veritatis corrupti. Maiores dolor nam voluptatum minus aut et. Temporibus voluptatum necessitatibus saepe dolorem.', '1', 1, '2021-01-08 04:29:14', '2021-01-28 00:05:30', 1),
(31, 'sed commodi est enim', 'Ut officia reprehenderit ipsam molestias consequatur. Nam distinctio saepe exercitationem numquam. Consequatur incidunt ratione quod. Necessitatibus ipsa sit repellendus voluptas recusandae. Animi dignissimos illo et ut.', '1', 0, '2021-01-26 00:22:09', '2021-01-28 00:05:30', 3),
(32, 'est velit omnis sit', 'Et alias velit facere delectus deleniti aspernatur. Soluta dolor saepe itaque et non corrupti. Beatae velit ea laudantium sit est. Beatae odio est ut aut fugit iste reprehenderit. Provident ea culpa et laborum et eum dolorem.', '7', 1, '2021-01-27 08:06:00', '2021-01-28 00:05:30', 4),
(33, 'quia quae dignissimos mollitia', 'Maxime soluta adipisci animi maiores. Iusto est sunt distinctio. Aliquid aut in ut cupiditate sed corrupti rem.', '1', 1, '2021-01-10 03:37:45', '2021-01-28 00:05:30', 1),
(34, 'at ullam neque reiciendis', 'Itaque ipsa enim quis. Quos et ad molestiae error velit harum. Debitis odit dolorem nihil et sint a et. Incidunt dolorum aut eum.', '4', 1, '2021-01-23 02:40:34', '2021-01-28 00:05:30', 3),
(35, 'consequuntur reprehenderit natus et', 'Non cumque impedit molestias consequatur. Cumque explicabo enim dolores est. Molestias ut asperiores eveniet ratione tempore ut quis.', '3', 0, '2021-01-10 04:13:02', '2021-01-28 00:05:30', 4),
(36, 'nobis ut sit mollitia', 'Soluta accusantium praesentium doloribus sit in dignissimos. Harum porro blanditiis doloribus molestias odit voluptate. Ipsam nihil inventore quis exercitationem reprehenderit eos. Eos eius aliquam voluptatem consequatur maiores. Non autem in aut cum ut.', '8', 0, '2021-01-13 21:11:14', '2021-01-28 00:05:30', 3),
(37, 'iure consequatur quia voluptatum', 'Reprehenderit iste dolor ut maiores maiores. Consectetur non maiores sit eos aut numquam. Vel sed eligendi asperiores porro asperiores at. Quas iure enim maiores quo quasi voluptates. Enim animi repellat autem officiis.', '6', 1, '2021-01-17 21:59:47', '2021-01-28 00:05:30', 5),
(38, 'reiciendis sint unde nulla', 'Porro minima voluptate incidunt earum reiciendis. Accusamus architecto et dolorum nulla a sit ex. Sint aperiam odio rerum iusto. Voluptatem autem nam qui asperiores dolor omnis quaerat.', '3', 0, '2021-01-19 20:18:00', '2021-01-28 00:05:30', 3),
(39, 'perspiciatis enim provident voluptas', 'Ut soluta iusto quia animi minus voluptatem. Ut maiores excepturi ut accusamus consequatur animi autem. Fugiat nam ab ut rem. Iusto voluptatum necessitatibus quia ipsam blanditiis voluptatibus.', '7', 0, '2021-01-12 12:43:12', '2021-01-28 00:05:30', 3),
(40, 'omnis et possimus commodi', 'Rerum repellat deleniti placeat facere neque. Amet officia occaecati itaque eos. Dolor reprehenderit amet vitae in fugit quia. Est consequuntur culpa quia explicabo nam. Sunt aut sequi necessitatibus.', '3', 0, '2021-01-21 18:45:48', '2021-01-28 00:05:30', 4),
(41, 'suscipit qui aut maiores', 'Quia eveniet autem tempora recusandae praesentium repudiandae id explicabo. Dicta blanditiis ut perferendis nihil veniam doloremque. Optio id rerum quia odio voluptatem tenetur consectetur. Vitae aliquam nemo et quo quos qui et.', '5', 1, '2021-01-14 19:52:35', '2021-01-28 00:05:30', 1),
(42, 'iusto deserunt libero sit', 'Minus debitis dolorem modi deserunt. Porro voluptatibus quia fuga cupiditate. Non occaecati ipsam et sunt recusandae non numquam. Corporis et enim et reiciendis magnam.', '2', 0, '2021-01-17 17:44:09', '2021-01-28 00:05:30', 2),
(43, 'distinctio veritatis quidem libero', 'Excepturi sequi voluptas eaque eos alias sed molestias doloremque. Quis odio perspiciatis qui praesentium. Aut nobis repellendus cum id at consequuntur.', '2', 0, '2021-01-27 19:04:56', '2021-01-28 00:05:30', 3),
(44, 'incidunt magni dolor qui', 'Corporis similique ipsam quisquam laborum vitae rem aliquam. Exercitationem ea fuga voluptates. Eos consequatur est iste accusamus maiores autem aliquid sit. Necessitatibus tenetur repellendus suscipit velit.', '6', 1, '2021-01-23 01:02:10', '2021-01-28 00:05:30', 3),
(45, 'et aut qui illo', 'Quia vel laboriosam laudantium voluptate nulla. Nihil sint dolor possimus aut ut doloribus fugit. Atque nobis inventore consectetur repellat aperiam. Debitis quia iusto est.', '5', 0, '2021-01-24 13:29:09', '2021-01-28 00:05:30', 2),
(46, 'at animi facere amet', 'Et eos tempora ut velit. Et deleniti sit necessitatibus quia sint fugiat. Velit est tempore eos quia nisi. Accusamus dolores esse recusandae maiores voluptas consequuntur fuga minus. Qui placeat inventore ut maiores mollitia.', '2', 0, '2021-01-18 07:46:05', '2021-01-28 00:05:30', 4),
(47, 'ea amet at soluta', 'Ratione ut facilis et vero non. Et unde architecto rerum natus voluptatem et. Qui enim molestiae sunt.', '2', 1, '2021-01-18 11:40:28', '2021-01-28 00:05:30', 4),
(48, 'perferendis minus ut et', 'Consequatur tempora aut et sit non. Recusandae voluptas deserunt impedit quibusdam delectus repellat voluptatem. Beatae nesciunt qui sint voluptatem et nulla. Laudantium laborum cupiditate vitae deserunt in nisi earum. Accusamus nulla eveniet ut labore quis.', '5', 0, '2021-01-16 22:37:05', '2021-01-28 00:05:30', 4),
(49, 'officia eaque doloribus sit', 'Voluptas animi ratione possimus provident quas. Deleniti expedita repellendus dignissimos. Odio officiis modi non.', '6', 0, '2021-01-21 16:53:41', '2021-01-28 00:05:30', 5),
(50, 'esse adipisci quia sed', 'Aspernatur consequatur eaque architecto voluptatem nesciunt quasi qui. Voluptas eum voluptatum voluptas consequatur repellat qui consectetur sed. Ut non consequatur ut eum aut et dolores. Voluptas sunt quis facilis et magnam.', '7', 1, '2021-01-14 17:06:52', '2021-01-28 00:05:30', 3);

-- --------------------------------------------------------

--
-- Structure de la table `works_has_tags`
--

CREATE TABLE `works_has_tags` (
  `work_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `works_has_tags`
--

INSERT INTO `works_has_tags` (`work_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(3, 4, NULL, NULL),
(6, 5, NULL, NULL),
(42, 1, NULL, NULL),
(43, 4, NULL, NULL),
(43, 6, NULL, NULL),
(19, 2, NULL, NULL),
(14, 4, NULL, NULL),
(49, 7, NULL, NULL),
(13, 4, NULL, NULL),
(9, 8, NULL, NULL),
(6, 4, NULL, NULL),
(20, 10, NULL, NULL),
(26, 8, NULL, NULL),
(50, 9, NULL, NULL),
(22, 5, NULL, NULL),
(9, 5, NULL, NULL),
(25, 3, NULL, NULL),
(34, 7, NULL, NULL),
(16, 7, NULL, NULL),
(3, 5, NULL, NULL),
(4, 10, NULL, NULL),
(40, 10, NULL, NULL),
(26, 7, NULL, NULL),
(28, 10, NULL, NULL),
(44, 7, NULL, NULL),
(38, 7, NULL, NULL),
(8, 8, NULL, NULL),
(10, 8, NULL, NULL),
(7, 5, NULL, NULL),
(36, 3, NULL, NULL),
(17, 8, NULL, NULL),
(36, 4, NULL, NULL),
(39, 8, NULL, NULL),
(14, 3, NULL, NULL),
(17, 10, NULL, NULL),
(39, 10, NULL, NULL),
(27, 8, NULL, NULL),
(9, 7, NULL, NULL),
(26, 8, NULL, NULL),
(16, 3, NULL, NULL),
(6, 10, NULL, NULL),
(17, 9, NULL, NULL),
(21, 5, NULL, NULL),
(48, 5, NULL, NULL),
(11, 9, NULL, NULL),
(28, 3, NULL, NULL),
(21, 5, NULL, NULL),
(43, 10, NULL, NULL),
(21, 1, NULL, NULL),
(1, 10, NULL, NULL),
(34, 6, NULL, NULL),
(37, 10, NULL, NULL),
(33, 4, NULL, NULL),
(44, 3, NULL, NULL),
(42, 3, NULL, NULL),
(48, 9, NULL, NULL),
(21, 6, NULL, NULL),
(16, 1, NULL, NULL),
(18, 6, NULL, NULL),
(45, 6, NULL, NULL),
(48, 2, NULL, NULL),
(2, 7, NULL, NULL),
(7, 7, NULL, NULL),
(4, 3, NULL, NULL),
(4, 7, NULL, NULL),
(40, 2, NULL, NULL),
(23, 8, NULL, NULL),
(17, 5, NULL, NULL),
(6, 3, NULL, NULL),
(5, 7, NULL, NULL),
(39, 1, NULL, NULL),
(42, 1, NULL, NULL),
(34, 3, NULL, NULL),
(18, 10, NULL, NULL),
(31, 3, NULL, NULL),
(23, 5, NULL, NULL),
(47, 4, NULL, NULL),
(38, 9, NULL, NULL),
(50, 4, NULL, NULL),
(45, 4, NULL, NULL),
(47, 8, NULL, NULL),
(45, 2, NULL, NULL),
(16, 10, NULL, NULL),
(50, 10, NULL, NULL),
(46, 7, NULL, NULL),
(23, 4, NULL, NULL),
(27, 6, NULL, NULL),
(46, 1, NULL, NULL),
(31, 9, NULL, NULL),
(24, 8, NULL, NULL),
(25, 2, NULL, NULL),
(3, 10, NULL, NULL),
(34, 5, NULL, NULL),
(20, 5, NULL, NULL),
(8, 4, NULL, NULL),
(21, 10, NULL, NULL),
(17, 10, NULL, NULL),
(41, 2, NULL, NULL),
(11, 8, NULL, NULL),
(47, 5, NULL, NULL),
(32, 8, NULL, NULL),
(35, 3, NULL, NULL),
(16, 7, NULL, NULL),
(28, 7, NULL, NULL),
(41, 10, NULL, NULL),
(24, 4, NULL, NULL),
(24, 3, NULL, NULL),
(46, 8, NULL, NULL),
(8, 4, NULL, NULL),
(23, 1, NULL, NULL),
(6, 3, NULL, NULL),
(8, 9, NULL, NULL),
(37, 2, NULL, NULL),
(36, 1, NULL, NULL),
(2, 1, NULL, NULL),
(4, 3, NULL, NULL),
(1, 3, NULL, NULL),
(21, 3, NULL, NULL),
(46, 9, NULL, NULL),
(24, 9, NULL, NULL),
(34, 10, NULL, NULL),
(36, 7, NULL, NULL),
(19, 8, NULL, NULL),
(33, 1, NULL, NULL),
(7, 7, NULL, NULL),
(37, 8, NULL, NULL),
(29, 7, NULL, NULL),
(23, 4, NULL, NULL),
(13, 4, NULL, NULL),
(42, 3, NULL, NULL),
(33, 6, NULL, NULL),
(31, 6, NULL, NULL),
(47, 10, NULL, NULL),
(6, 6, NULL, NULL),
(30, 2, NULL, NULL),
(7, 1, NULL, NULL),
(4, 1, NULL, NULL),
(7, 5, NULL, NULL),
(38, 5, NULL, NULL),
(12, 7, NULL, NULL),
(30, 10, NULL, NULL),
(4, 5, NULL, NULL),
(7, 3, NULL, NULL),
(43, 6, NULL, NULL),
(5, 9, NULL, NULL),
(1, 5, NULL, NULL),
(19, 4, NULL, NULL),
(44, 2, NULL, NULL),
(12, 7, NULL, NULL),
(32, 2, NULL, NULL),
(1, 5, NULL, NULL),
(17, 3, NULL, NULL),
(7, 10, NULL, NULL),
(28, 9, NULL, NULL),
(20, 5, NULL, NULL),
(16, 1, NULL, NULL),
(15, 4, NULL, NULL),
(36, 7, NULL, NULL),
(5, 5, NULL, NULL),
(6, 2, NULL, NULL),
(27, 1, NULL, NULL),
(42, 10, NULL, NULL),
(6, 8, NULL, NULL),
(33, 9, NULL, NULL),
(22, 6, NULL, NULL),
(12, 7, NULL, NULL),
(32, 2, NULL, NULL),
(49, 4, NULL, NULL),
(39, 9, NULL, NULL),
(48, 2, NULL, NULL),
(6, 10, NULL, NULL),
(30, 10, NULL, NULL),
(1, 3, NULL, NULL),
(4, 7, NULL, NULL),
(9, 9, NULL, NULL),
(38, 2, NULL, NULL),
(28, 4, NULL, NULL),
(47, 7, NULL, NULL),
(27, 7, NULL, NULL),
(36, 7, NULL, NULL),
(46, 7, NULL, NULL),
(37, 7, NULL, NULL),
(43, 5, NULL, NULL),
(24, 2, NULL, NULL),
(18, 3, NULL, NULL),
(19, 1, NULL, NULL),
(50, 10, NULL, NULL),
(28, 1, NULL, NULL),
(26, 5, NULL, NULL),
(42, 7, NULL, NULL),
(49, 8, NULL, NULL),
(1, 7, NULL, NULL),
(23, 2, NULL, NULL),
(29, 3, NULL, NULL),
(31, 3, NULL, NULL),
(32, 3, NULL, NULL),
(17, 10, NULL, NULL),
(33, 5, NULL, NULL),
(16, 2, NULL, NULL),
(49, 4, NULL, NULL),
(32, 3, NULL, NULL),
(16, 9, NULL, NULL),
(7, 3, NULL, NULL),
(43, 6, NULL, NULL),
(4, 8, NULL, NULL),
(33, 10, NULL, NULL),
(37, 9, NULL, NULL),
(8, 2, NULL, NULL),
(7, 4, NULL, NULL),
(13, 3, NULL, NULL),
(23, 6, NULL, NULL),
(20, 4, NULL, NULL),
(17, 8, NULL, NULL),
(34, 4, NULL, NULL),
(11, 8, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_client_id_foreign` (`client_id`);

--
-- Index pour la table `works_has_tags`
--
ALTER TABLE `works_has_tags`
  ADD KEY `works_has_tags_work_id_foreign` (`work_id`),
  ADD KEY `works_has_tags_tag_id_foreign` (`tag_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `works_has_tags`
--
ALTER TABLE `works_has_tags`
  ADD CONSTRAINT `works_has_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `works_has_tags_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
