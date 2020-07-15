-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 06 juil. 2020 à 20:51
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `_english_cours`
--

-- --------------------------------------------------------

--
-- Structure de la table `_admin`
--

CREATE TABLE `_admin` (
  `id` int(11) NOT NULL,
  `_name` varchar(60) NOT NULL,
  `_postnom` varchar(60) NOT NULL,
  `_email` varchar(60) NOT NULL,
  `_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `_article`
--

CREATE TABLE `_article` (
  `id` int(11) NOT NULL,
  `_label` varchar(60) NOT NULL,
  `_desc` text NOT NULL,
  `_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `_src` text NOT NULL,
  `_categ` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `_comment`
--

CREATE TABLE `_comment` (
  `id` int(11) NOT NULL,
  `_idUser` int(11) NOT NULL,
  `_idArticle` int(11) NOT NULL,
  `_comment` text NOT NULL,
  `_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `_partenaire`
--

CREATE TABLE `_partenaire` (
  `id` int(11) NOT NULL,
  `_nom` varchar(60) NOT NULL,
  `_postnom` varchar(60) NOT NULL,
  `_categ` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `_spotpub`
--

CREATE TABLE `_spotpub` (
  `id` int(11) NOT NULL,
  `_label` varchar(60) NOT NULL,
  `_desc` text NOT NULL,
  `_src` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `_subcomment`
--

CREATE TABLE `_subcomment` (
  `id` int(11) NOT NULL,
  `_idcomment` int(11) NOT NULL,
  `_subcomment` text NOT NULL,
  `_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `_teacher`
--

CREATE TABLE `_teacher` (
  `id` int(11) NOT NULL,
  `_nom` varchar(60) NOT NULL,
  `_postnom` varchar(60) NOT NULL,
  `_grade` varchar(60) NOT NULL,
  `_email` varchar(32) NOT NULL,
  `_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `_topic`
--

CREATE TABLE `_topic` (
  `id` int(11) NOT NULL,
  `_idTeacher` int(11) NOT NULL,
  `_label` varchar(60) NOT NULL,
  `_description` text NOT NULL,
  `_day` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `_user`
--

CREATE TABLE `_user` (
  `id` int(11) NOT NULL,
  `_nom` varchar(60) NOT NULL,
  `_postnom` varchar(60) NOT NULL,
  `_email` varchar(60) NOT NULL,
  `_password` varchar(32) NOT NULL,
  `_adresse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `_admin`
--
ALTER TABLE `_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_article`
--
ALTER TABLE `_article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_comment`
--
ALTER TABLE `_comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_partenaire`
--
ALTER TABLE `_partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_spotpub`
--
ALTER TABLE `_spotpub`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_subcomment`
--
ALTER TABLE `_subcomment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_teacher`
--
ALTER TABLE `_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_topic`
--
ALTER TABLE `_topic`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_user`
--
ALTER TABLE `_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `_admin`
--
ALTER TABLE `_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `_article`
--
ALTER TABLE `_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `_comment`
--
ALTER TABLE `_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `_partenaire`
--
ALTER TABLE `_partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `_spotpub`
--
ALTER TABLE `_spotpub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `_subcomment`
--
ALTER TABLE `_subcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `_teacher`
--
ALTER TABLE `_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `_topic`
--
ALTER TABLE `_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `_user`
--
ALTER TABLE `_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
