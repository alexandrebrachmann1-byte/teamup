-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 15 sep. 2026 à 18:36
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `teamup`
--

-- --------------------------------------------------------

--
-- Structure de la table `player_posts`
--

CREATE TABLE `player_posts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `riot_username` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `champion` text NOT NULL,
  `discord` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `player_posts`
--

INSERT INTO `player_posts` (`id`, `user_id`, `riot_username`, `rank`, `role`, `champion`, `discord`, `description`, `created_at`) VALUES
(1, 1, 'Faker#EUW', 'gold', 'support', 'Fiora,Garen', 'faker99', 'Ancien joueur compétitif, je cherche une structure sérieuse.', '2026-08-18 20:20:45'),
(2, 1, 'Faker#EUW', 'gold', 'support,mid', 'Ornn,Orianna', 'faker_', 'Je cherche un duo pour push le classé ce mois-ci.', '2026-08-23 20:20:45'),
(3, 2, 'T1Fan#EUW', 'platinum', 'jungle', 'Zed,Syndra,Ezreal', 't1fan', 'Main depuis plusieurs saisons, je peux adapter mon champion pool.', '2026-07-21 20:20:45'),
(4, 3, 'JungleDiff#EUW', 'emerald', 'top,adc', 'Zed,Malzahar,Ezreal,Syndra', 'junglediffFR', 'Envie de jouer compétitif, discord obligatoire pour la commu.', '2026-07-22 20:20:45'),
(5, 3, 'JungleDiff#EUW', 'challenger', 'support,jungle', 'Syndra,Lux,Darius,Vi', 'junglediff_lol', 'Envie de jouer compétitif, discord obligatoire pour la commu.', '2026-09-08 20:20:45'),
(6, 3, 'JungleDiff#EUW', 'gold', 'adc', 'Vayne,Garen,Viktor', 'junglediff123', 'Cherche des coéquipiers sympas pour monter en rang sans tilt.', '2026-08-21 20:20:45'),
(7, 4, 'MidOrFeed#EUW', 'emerald', 'mid', 'Malzahar,Darius,Garen,Syndra', 'midorfeedFR', 'Cherche des coéquipiers sympas pour monter en rang sans tilt.', '2026-08-10 20:20:45'),
(8, 4, 'MidOrFeed#EUW', 'gold', 'adc', 'Graves,Malzahar,Garen', 'midorfeed99', 'Ancien joueur compétitif, je cherche une structure sérieuse.', '2026-08-30 20:20:45'),
(9, 5, 'SoloQueenX#EUW', 'emerald', 'jungle', 'Orianna,Jinx', 'soloqueenxTTV', 'Envie de jouer compétitif, discord obligatoire pour la commu.', '2026-09-09 20:20:45'),
(10, 6, 'BronzeToChallenger#EUW', 'gold', 'jungle,adc', 'Ryze,Malzahar,Garen', 'bronzetochallengerTTV', 'Cherche des coéquipiers sympas pour monter en rang sans tilt.', '2026-08-28 20:20:45'),
(11, 6, 'BronzeToChallenger#EUW', 'silver', 'support', 'Graves,Camille,Leona,Caitlyn', 'bronzetochallengerFR', 'Je cherche un duo pour push le classé ce mois-ci.', '2026-08-21 20:20:45'),
(12, 6, 'BronzeToChallenger#EUW', 'gold', 'support', 'Syndra,Ornn,Lux', 'bronzetochallenger_lol', 'Joueur régulier, disponible en soirée et le week-end.', '2026-09-04 20:20:45'),
(13, 7, 'TopLaneTyrant#EUW', 'silver', 'support,top', 'Ezreal,Rakan,Vayne', 'toplanetyrantFR', 'Envie de jouer compétitif, discord obligatoire pour la commu.', '2026-08-09 20:20:45'),
(14, 7, 'TopLaneTyrant#EUW', 'iron', 'support', 'Ornn,Garen,Jinx', 'toplanetyrant', 'Envie de jouer compétitif, discord obligatoire pour la commu.', '2026-08-17 20:20:45'),
(15, 8, 'SupportMain99#EUW', 'silver', 'top,mid', 'Ornn,Lee Sin,Lulu,Malzahar', 'supportmain99', 'Envie de jouer compétitif, discord obligatoire pour la commu.', '2026-07-22 20:20:45'),
(16, 9, 'ADCarryPro#EUW', 'grandmaster', 'jungle', 'Ornn,Lee Sin,Nautilus', 'adcarrypro_lol', 'Ancien joueur compétitif, je cherche une structure sérieuse.', '2026-07-17 20:20:45'),
(17, 9, 'ADCarryPro#EUW', 'iron', 'adc,top', 'Malzahar,Kai\'Sa', 'adcarrypro_lol', 'Envie de jouer compétitif, discord obligatoire pour la commu.', '2026-08-29 20:20:45'),
(18, 10, 'ZedMainFR#EUW', 'iron', 'support', 'Syndra,Camille', 'zedmainfrTTV', 'Joueur régulier, disponible en soirée et le week-end.', '2026-07-27 20:20:45'),
(19, 10, 'ZedMainFR#EUW', 'grandmaster', 'jungle', 'Thresh,Nautilus,Lee Sin,Graves', 'zedmainfrFR', 'J\'aime jouer proactif, roam facilement pour aider les autres lanes.', '2026-08-17 20:20:45'),
(20, 10, 'ZedMainFR#EUW', 'gold', 'mid', 'Darius,Garen,Kai\'Sa', 'zedmainfrTTV', 'Ancien joueur compétitif, je cherche une structure sérieuse.', '2026-08-16 20:20:45'),
(21, 11, 'ShadowIsle#EUW', 'bronze', 'jungle', 'Jinx,Ahri', 'shadowisleFR', 'Ancien joueur compétitif, je cherche une structure sérieuse.', '2026-08-30 20:20:45'),
(22, 12, 'RiftRunner#EUW', 'challenger', 'top', 'Fiora,Garen', 'riftrunner', 'Bonne comm\', je call les objectifs et je macro plutôt bien.', '2026-09-09 20:20:45'),
(23, 12, 'RiftRunner#EUW', 'iron', 'top,jungle', 'Darius,Thresh,Jarvan IV', 'riftrunnerFR', 'Cherche des coéquipiers sympas pour monter en rang sans tilt.', '2026-07-29 20:20:45'),
(24, 13, 'PentaKillHunter#EUW', 'challenger', 'jungle,adc', 'Jarvan IV,Zed,Darius', 'pentakillhunterTTV', 'Main depuis plusieurs saisons, je peux adapter mon champion pool.', '2026-08-17 20:20:45'),
(25, 13, 'PentaKillHunter#EUW', 'diamond', 'top,support', 'Ezreal,Camille', 'pentakillhunter123', 'Joueur régulier, disponible en soirée et le week-end.', '2026-08-29 20:20:45'),
(26, 13, 'PentaKillHunter#EUW', 'gold', 'support', 'Yasuo,Caitlyn,Lee Sin', 'pentakillhunter123', 'Dispo tous les soirs après 19h, calme et posé en jeu.', '2026-08-29 20:20:45'),
(27, 14, 'WardMasterFR#EUW', 'bronze', 'support,top', 'Garen,Nautilus', 'wardmasterfr_lol', 'Je cherche une équipe active pour grind le classé sérieusement.', '2026-09-08 20:20:45'),
(28, 15, 'BaronSteal#EUW', 'gold', 'adc', 'Thresh,Jarvan IV,Azir', 'baronstealTTV', 'Je cherche une équipe active pour grind le classé sérieusement.', '2026-09-03 20:20:45'),
(29, 15, 'BaronSteal#EUW', 'diamond', 'adc', 'Malzahar,Orianna,Vayne', 'baronsteal123', 'Je cherche un duo pour push le classé ce mois-ci.', '2026-07-31 20:20:45'),
(30, 16, 'DragonSoulFR#EUW', 'grandmaster', 'jungle,support', 'Jarvan IV,Lux,Leona', 'dragonsoulfr99', 'Ancien joueur compétitif, je cherche une structure sérieuse.', '2026-09-10 20:20:45'),
(31, 16, 'DragonSoulFR#EUW', 'emerald', 'top', 'Thresh,Lulu,Malzahar,Azir', 'dragonsoulfrFR', 'Cherche des coéquipiers sympas pour monter en rang sans tilt.', '2026-09-10 20:20:45'),
(32, 16, 'DragonSoulFR#EUW', 'grandmaster', 'jungle', 'Rakan,Syndra', 'dragonsoulfr99', 'Bonne comm\', je call les objectifs et je macro plutôt bien.', '2026-08-19 20:20:45'),
(33, 17, 'FlashCancel#EUW', 'bronze', 'support', 'Lux,Rakan,Syndra,Caitlyn', 'flashcancel99', 'J\'aime jouer proactif, roam facilement pour aider les autres lanes.', '2026-08-08 20:20:45'),
(34, 18, 'CritBuildOnly#EUW', 'grandmaster', 'mid,jungle', 'Fiora,Jinx,Vi,Graves', 'critbuildonlyTTV', 'Cherche des coéquipiers sympas pour monter en rang sans tilt.', '2026-08-02 20:20:45'),
(35, 18, 'CritBuildOnly#EUW', 'platinum', 'mid,top', 'Vayne,Rakan', 'critbuildonlyFR', 'Joueur régulier, disponible en soirée et le week-end.', '2026-09-09 20:20:45'),
(36, 19, 'EzrealOTP#EUW', 'grandmaster', 'support', 'Yasuo,Malzahar,Kai\'Sa', 'ezrealotp', 'Bonne comm\', je call les objectifs et je macro plutôt bien.', '2026-08-21 20:20:45'),
(37, 19, 'EzrealOTP#EUW', 'platinum', 'adc', 'Fiora,Kha\'Zix,Rakan,Orianna', 'ezrealotp99', 'Ancien joueur compétitif, je cherche une structure sérieuse.', '2026-09-13 20:20:45'),
(38, 19, 'EzrealOTP#EUW', 'grandmaster', 'top,jungle', 'Zed,Ryze,Camille', 'ezrealotpFR', 'Cherche des coéquipiers sympas pour monter en rang sans tilt.', '2026-08-27 20:20:45'),
(39, 20, 'YasuoWMain#EUW', 'platinum', 'mid', 'Darius,Garen', 'yasuowmain_lol', 'Envie de jouer compétitif, discord obligatoire pour la commu.', '2026-08-12 20:20:45'),
(40, 20, 'YasuoWMain#EUW', 'master', 'top,support', 'Caitlyn,Viktor,Graves,Lux', 'yasuowmain', 'Main depuis plusieurs saisons, je peux adapter mon champion pool.', '2026-07-26 20:20:45');

-- --------------------------------------------------------

--
-- Structure de la table `team_posts`
--

CREATE TABLE `team_posts` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `discord` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `team_posts`
--

INSERT INTO `team_posts` (`id`, `user_id`, `name`, `rank`, `role`, `description`, `discord`, `created_at`) VALUES
(1, 11, 'Karmine Corp Academy', 'diamond', 'top,jungle', 'Ambiance bonne humeur mais motivée, on veut progresser ensemble.', 'KarmineCorpAcademyGG', '2026-07-21 20:38:30'),
(2, 5, 'Les Immortels', 'iron', 'top,jungle,mid', 'Groupe soudé depuis plusieurs mois, cherche un dernier renfort.', 'LesImmortelsDiscord', '2026-07-02 20:38:30'),
(3, 13, 'Nova Esport', 'challenger', 'top,jungle', 'Équipe sérieuse cherchant à monter en division, entraînements réguliers.', 'NovaEsportGG', '2026-08-27 20:38:30'),
(4, 2, 'Frost Giants', 'platinum', 'jungle,top', 'Groupe soudé depuis plusieurs mois, cherche un dernier renfort.', 'FrostGiantsTeam', '2026-07-04 20:38:30'),
(5, 3, 'Radiant Wolves', 'silver', 'support', 'Groupe soudé depuis plusieurs mois, cherche un dernier renfort.', 'RadiantWolves_off', '2026-08-20 20:38:30'),
(6, 14, 'Iron Falcons', 'emerald', 'support', 'Ambiance bonne humeur mais motivée, on veut progresser ensemble.', 'IronFalconsGG', '2026-09-06 20:38:30'),
(7, 9, 'Shadow Syndicate', 'challenger', 'adc', 'Recherche activement pour combler les postes manquants avant les qualifs.', 'ShadowSyndicateEsport', '2026-08-04 20:38:30'),
(8, 17, 'Golden Drakes', 'master', 'adc,mid,jungle', 'Équipe semi-compétitive, scrims deux fois par semaine.', 'GoldenDrakesContact', '2026-06-16 20:38:30'),
(9, 6, 'Toxic Jungle', 'gold', 'support', 'On cherche des joueurs calmes en toute circonstance et bons en macro.', 'ToxicJungleGG', '2026-07-12 20:38:30'),
(10, 10, 'Rift Legends', 'emerald', 'adc,mid,support', 'Ambiance bonne humeur mais motivée, on veut progresser ensemble.', 'RiftLegendsDiscord', '2026-07-10 20:38:30'),
(11, 1, 'Silver Phoenix', 'diamond', 'mid', 'Recherche joueurs fiables pour compléter le roster avant la prochaine saison.', 'SilverPhoenixEsport', '2026-07-22 20:38:30'),
(12, 15, 'Dark Horizon', 'iron', 'top,mid,jungle', 'Structure encadrée par un coach, discord actif obligatoire.', 'DarkHorizonGG', '2026-07-12 20:38:30'),
(13, 4, 'Crimson Vipers', 'challenger', 'top,support', 'On cherche des joueurs calmes en toute circonstance et bons en macro.', 'CrimsonVipersEsport', '2026-06-16 20:38:30'),
(14, 20, 'Zenith Gaming', 'bronze', 'mid', 'Groupe soudé depuis plusieurs mois, cherche un dernier renfort.', 'ZenithGaming_off', '2026-07-18 20:38:30'),
(15, 7, 'Astra Vanguard', 'platinum', 'adc,mid,top', 'Ambiance détendue mais on veut quand même gagner nos games.', 'AstraVanguardTeam', '2026-08-23 20:38:30');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `role`, `password`, `created_at`) VALUES
(1, 'Faker', 'faker@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-03-29 20:20:04'),
(4, 'MidOrFeed', 'midorfeed@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-03-03 20:20:04'),
(6, 'BronzeToChallenger', 'bronzetochallenger@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-07-08 20:20:04'),
(7, 'TopLaneTyrant', 'toplanetyrant@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-07-13 20:20:04'),
(8, 'SupportMain99', 'supportmain99@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-08-04 20:20:04'),
(10, 'ZedMainFR', 'zedmainfr@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-08-13 20:20:04'),
(11, 'ShadowIsle', 'shadowisle@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-03-19 20:20:04'),
(12, 'RiftRunner', 'riftrunner@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-03-03 20:20:04'),
(13, 'PentaKillHunter', 'pentakillhunter@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-04-22 20:20:04'),
(14, 'WardMasterFR', 'wardmasterfr@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-08-17 20:20:04'),
(15, 'BaronSteal', 'baronsteal@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-04-10 20:20:04'),
(16, 'DragonSoulFR', 'dragonsoulfr@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-05-23 20:20:04'),
(17, 'FlashCancel', 'flashcancel@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-08-31 20:20:04'),
(18, 'CritBuildOnly', 'critbuildonly@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-09-01 20:20:04'),
(20, 'YasuoWMain', 'yasuowmain@gmail.com', 'user', '$2b$12$aUDylWH2JfDoIgyciWJgPugw.VR5TqltRjAIKKEbD4GQP5U8ZIX82', '2026-07-15 20:20:04'),
(21, 'Admin', 'admin@teamup.fr', 'admin', '$2b$12$Iz.sle8ckQPySTFI0XXTMOLFbsaRshWEx/vF/f2Mwd2JCbgY9Y.ve', '2026-09-14 13:44:46');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `player_posts`
--
ALTER TABLE `player_posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `team_posts`
--
ALTER TABLE `team_posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `player_posts`
--
ALTER TABLE `player_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `team_posts`
--
ALTER TABLE `team_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
