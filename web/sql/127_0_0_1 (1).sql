-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Octobre 2015 à 23:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `webservice`
--

--
-- Contenu de la table `audio`
--

INSERT INTO `audio` (`id`, `Name`, `Number`, `Description`, `Link`, `IsSaga`, `uploaded_by_id`) VALUES
(1, 'Reflets d''acide - L''enrôlement', 1, 'Premier épisode', 'http://www.refletsdacide.com/download/334/', 1, 1),
(2, 'Reflets d''acide - La forêt des éventrés', 2, 'Deuxième', 'http://www.refletsdacide.com/download/338/', 1, 1),
(3, 'Reflets d''acide - Le fleuve des glaires tièdes', 3, 'Trois', 'http://www.refletsdacide.com/download/349/', 1, 1),
(4, 'Reflet d''acide - La grotte de l''herpès écorché', 4, '4', 'http://www.refletsdacide.com/download/371/', 1, 1),
(5, 'Reflet d''acide - Bivouac...ation', 5, '5', 'http://www.refletsdacide.com/download/384/', 1, 1),
(6, 'Les aventuries du survivaure - Episode 1', 1, '???', 'http://soundcloud.com/knarf/survivaure-episode-1/download', 1, 1),
(7, 'Les aventuries du survivaure - Episode 2', 2, '?', 'http://soundcloud.com/knarf/survivaure-episode-2/download', 1, 1),
(8, 'Les aventuries du survivaure - Episode 3', 3, '3', 'http://soundcloud.com/knarf/survivaure-episode-3/download', 1, 1),
(9, 'Les aventuries du survivaure - Episode 4', 4, '4', 'http://soundcloud.com/knarf/survivaure-episode-4/download', 1, 1),
(10, 'Les aventuries du survivaure - Episode 5', 5, '5', 'http://soundcloud.com/knarf/survivaure-episode-5/download', 1, 1),
(11, 'Donjon de Naheulbeuk - Episode 1', 1, '1', 'https://cf-media.sndcdn.com/g9HlncZIMvSM.128.mp3?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiKjovL2NmLW1lZGlhLnNuZGNkbi5jb20vZzlIbG5jWklNdlNNLjEyOC5tcDMiLCJDb25kaXRpb24iOnsiRGF0ZUxlc3NUaGFuIjp7IkFXUzpFcG9jaFRpbWUiOjE0NDU2MTQ0NjB9fX1dfQ__&Signature=naYELhJ2XvcBFj1zPV-F999k5z91hKR~k5738FRyeRDugcUoS3rOGNFFgh9oWlxa1CLZiQN10x9FDYFHX6fiJ~hdJSs7QZSzBtdjNf1Rxw9o8nh3g8ZQmcw-roWxJp6ibPvt7E2zkuGCEhTzcFMxIDfZeSR~Qq6CdWq-vFmf8GN5fd2-7yPD4hBlH7auTQ6eJMpQo5gDifo7ToWY5edjbSbR6FSQ6QxqyQndkrBGJMZpPG8MmVo7P3peOcMX96wBF-2cfvtcj7aR66wzKWhnjxXuV5Dlwm941nYpsAoVh5lyNIkUfS-yyT1YSF2v33RWc3rE0tDzvQ5WxlFZ5SZCRw__&Key-Pair-Id=APKAJAGZ7VMH2PFPW6UQ', 1, 1),
(12, 'Donjon de Naheulbeuk - Episode 2', 2, '2', 'https://cf-media.sndcdn.com/g9HlncZIMvSM.128.mp3?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiKjovL2NmLW1lZGlhLnNuZGNkbi5jb20vZzlIbG5jWklNdlNNLjEyOC5tcDMiLCJDb25kaXRpb24iOnsiRGF0ZUxlc3NUaGFuIjp7IkFXUzpFcG9jaFRpbWUiOjE0NDU2MTUwMDZ9fX1dfQ__&Signature=WnmjQDY7~w1OkIOXTYwvFAKxfKhEM9Rifq~XSjj5uDTwvbvlrj2d0vC9HVqMXmsg07HWPoiI03g2Y-WbdQyyQwJgBIJh7ioUdpsi~yBtqKHSLc0mdsurvxHYr961~O3WE4I7NXMATC43IKkX4amt2m1Sc~uzU6SzDheZrM7yfw~YJi2NnDcW-Ik-PFXWZD7BxQXnNDvf3XKpDbLx53AzAYtlHgo0uZjVeATcudUgynOsM9xtcFG5xdhasYxlTZkH7sAio-9Zic8ZOnH3Qbg49a0rtDAI9pkgoNeljuwEZVJD4P11YmV1J0Xw8BYlVnGzzAvKvcotEXG3EzN7KWIkOg__&Key-Pair-Id=APKAJAGZ7VMH2PFPW6UQ', 1, 1),
(13, 'Donjon de Naheulbeuk - Episode 3', 3, '3', 'https://cf-media.sndcdn.com/g9HlncZIMvSM.128.mp3?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiKjovL2NmLW1lZGlhLnNuZGNkbi5jb20vZzlIbG5jWklNdlNNLjEyOC5tcDMiLCJDb25kaXRpb24iOnsiRGF0ZUxlc3NUaGFuIjp7IkFXUzpFcG9jaFRpbWUiOjE0NDU2MTUwOTV9fX1dfQ__&Signature=XZvTBiNHiF4a9DjadBmEcgYAL2YwysH7jZaYKavThxtNoJD84HnjFI2fugwY5qjoMcc47hZoUMn12VkMt7KOWf~klrAftIf6OUup8CrSv1N1Ws3uDGbViVC7EO-3jCTr28~e9xe4yCefHQquAHh~6xAeypCn5~WvEgIKS6D~GTzfmbh1ivuG7uexBZn5u18~--gq~n2gVVTk-ILy35E-y6W-rZMdcsrbqn6rzOK93EyRue4hdr4MKkFXuPgCdLBDvh~6cJZiFanR6ha23EXFxahBfUx~69K4TZseFiL-J79bo701tAmNn6xWZn16sIMDvLQjGV3fkRcINpK3qpk30w__&Key-Pair-Id=APKAJAGZ7VMH2PFPW6UQ', 1, 1),
(14, 'Renegade', 1, 'Gangsta OP', 'http://tyerecords.love-blossom.net/wp-content/uploads/TYER-Gangsta.-OP-Renegade-feat.-Aruvn.mp3', 0, 3),
(15, 'Flyers', 1, 'Death Parade OP', 'http://tyerecords.love-blossom.net/wp-content/uploads/TYER-Death-Parade-OP-FLYERS-feat.-Aruvn.mp3', 0, 3),
(16, 'Trigger', 1, 'Terror in Resonance OP', 'http://tyerecords.love-blossom.net/wp-content/uploads/TYER-Zankyou-no-Terror-OP-Trigger-feat.-Jefferz.mp3', 0, 3),
(17, 'L''ange', 1, 'Ange ?', 'http://www.litteratureaudio.net/mp3/Hans_Christian_Andersen_-_L_Ange.mp3', 1, 2),
(18, 'L''intrépide soldat de plomb', 2, 'Un soldat courageux ?', 'http://www.litteratureaudio.net/mp3/Hans_Christian_Andersen_-_L_Intrepide_Soldat_de_plomb.mp3', 1, 2),
(19, 'La bergère et le ramoneur', 3, 'Une bergère rencontre un ramoneur', 'http://www.litteratureaudio.net/mp3/Hans_Christian_Andersen_-_La_Bergere_et_le_Ramoneur.mp3', 1, 2),
(20, 'Arsène Lupin - Gentleman cambrioleur Chapitre 1', 1, 'Roman', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap1.mp3', 1, 5),
(21, 'Arsène Lupin - Gentleman cambrioleur Chapitre 2', 2, 'Chapitre 2 première partie', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap2_part1.mp3', 1, 5),
(22, 'Arsène Lupin - Gentleman cambrioleur Chapitre 2 p2', 3, 'Chapitre 2 partie 2/2', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap2_part2.mp3', 1, 5),
(23, 'Arsène Lupin - Gentleman cambrioleur Chapitre 3', 4, 'Chapitre 3', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap3.mp3', 1, 5),
(24, 'Arsène Lupin - Gentleman cambrioleur Chapitre 4', 5, 'Chapitre 4', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap4.mp3', 1, 5),
(25, 'Arsène Lupin - Gentleman cambrioleur Chapitre 5', 6, 'Chapitre 5', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap5.mp3', 1, 5),
(26, 'Arsène Lupin - Gentleman cambrioleur Chapitre 6 p1', 7, 'Chapitre 6 partie 1/2', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap6_part1.mp3', 1, 5),
(27, 'Arsène Lupin - Gentleman cambrioleur Chapitre 6 p2', 8, 'Chapitre 6 partie 2/2', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap6_part2.mp3', 1, 5),
(28, 'Arsène Lupin - Gentleman cambrioleur Chapitre 7', 9, 'Chapitre 7', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap7.mp3', 1, 5),
(29, 'Arsène Lupin - Gentleman cambrioleur Chapitre 8', 10, 'Chapitre 8', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap8.mp3', 1, 5),
(30, 'Arsène Lupin - Gentleman cambrioleur Chapitre 9', 11, 'Chapitre 9 final', 'http://www.litteratureaudio.org/mp3/Maurice_Leblanc_-_Arsene_Lupin_gentleman_cambrioleur_chap9.mp3', 1, 5),
(31, 'Hacking to the gate', 1, 'Steins;Gate OP', 'http://tyerecords.love-blossom.net/?smd_process_download=1&download_id=522', 0, 9),
(32, 'Monster with no name', 1, 'Psycho Pass ED', 'http://tyerecords.love-blossom.net/wp-content/uploads/TYER-Psycho-Pass-ED1-Namae-no-nai-Kaibutsu-feat.-Angela.mp3', 1, 6);

--
-- Contenu de la table `audio_author`
--

INSERT INTO `audio_author` (`audio_id`, `author_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 3),
(12, 3),
(13, 3),
(14, 4),
(15, 4),
(16, 4),
(17, 5),
(18, 5),
(19, 5),
(20, 6),
(21, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 6),
(26, 6),
(27, 6),
(28, 6),
(29, 6),
(30, 6),
(31, 4),
(32, 4);

--
-- Contenu de la table `audio_genre`
--

INSERT INTO `audio_genre` (`audio_id`, `genre_id`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 1),
(2, 2),
(2, 5),
(3, 1),
(3, 2),
(3, 5),
(4, 1),
(4, 2),
(4, 5),
(5, 1),
(5, 2),
(5, 5),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 5),
(12, 1),
(12, 5),
(13, 1),
(13, 5),
(14, 6),
(15, 6),
(16, 6),
(17, 7),
(18, 7),
(19, 7),
(20, 8),
(21, 8),
(22, 8),
(23, 8),
(24, 8),
(25, 8),
(26, 8),
(27, 8),
(28, 8),
(29, 8),
(30, 8),
(31, 6),
(32, 6);

--
-- Contenu de la table `author`
--

INSERT INTO `author` (`id`, `Description`, `Name`) VALUES
(1, 'A écrit Reflets d''acide', 'JBX'),
(2, 'A écrit Le survivaure', 'Knarf'),
(3, 'A écrit les donjons de Naheulbeuk', 'Pen of Chaos'),
(4, 'English Cover Team', 'TYERecords'),
(5, 'Conteur', 'Andersen'),
(6, 'Ecrivain', 'Maurice Leblanc');

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id`, `Name`) VALUES
(1, 'Comédie'),
(2, 'Aventure'),
(3, 'Horreur'),
(4, 'Drame'),
(5, 'Fantastique'),
(6, 'Musique'),
(7, 'Contes'),
(8, 'Mystère');

--
-- Contenu de la table `playlist`
--

INSERT INTO `playlist` (`id`, `Name`, `Description`) VALUES
(1, 'Reflets d''acide - Première partie', 'Episodes 1 à 5 de Reflets d''acide par JBX'),
(2, 'Les aventuriers du Survivaure Partie 1', 'Episodes 1 à 5 des aventuriers du Survivaure Partie 1'),
(3, 'Donjons de Naheulbeuk Partie 1', 'Donjons de Naheulbeul Partie 1 de Pen of Chaos'),
(4, 'Série Fantastique', 'Reflets d''acide et Donjons de Naheulbeuk'),
(5, 'Arsène Lupin - Gentleman Cambrioleur', 'Le roman entier');

--
-- Contenu de la table `playlist_audio`
--

INSERT INTO `playlist_audio` (`playlist_id`, `audio_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(3, 11),
(3, 12),
(3, 13),
(5, 20),
(5, 21),
(5, 22),
(5, 23),
(5, 24),
(5, 25),
(5, 26),
(5, 27),
(5, 28),
(5, 29),
(5, 30);

--
-- Contenu de la table `playlist_inplaylist`
--

INSERT INTO `playlist_inplaylist` (`playlist_id`, `in_playlist`) VALUES
(4, 1),
(4, 3);

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `Login`, `Password`, `IsAdmin`, `Mail`) VALUES
(1, 'Admin', '9cf95dacd226dcf43da376cdb6cbba7035218921', 1, 'admin@admin.fr'),
(2, 'Mabel', '9cf95dacd226dcf43da376cdb6cbba7035218921', 0, 'mabelcorn@mshack.com'),
(3, 'Dipper', '9cf95dacd226dcf43da376cdb6cbba7035218921', 0, 'littledetective@mshack.com'),
(4, 'Stanley', '9cf95dacd226dcf43da376cdb6cbba7035218921', 1, 'makeitrain@mshack.com'),
(5, 'Stanford', '9cf95dacd226dcf43da376cdb6cbba7035218921', 1, 'sixdigits@mshack.com'),
(6, 'Bill', '9cf95dacd226dcf43da376cdb6cbba7035218921', 1, 'evildorito@mshack.com'),
(7, 'Soos', '9cf95dacd226dcf43da376cdb6cbba7035218921', 1, 'handyman@mshack.com'),
(8, 'Giffany', '9cf95dacd226dcf43da376cdb6cbba7035218921', 0, '8bitwasbetter@mshack.com'),
(9, 'Wendy', '9cf95dacd226dcf43da376cdb6cbba7035218921', 0, 'gingersnap@mshack.com'),
(10, 'Robbie', '9cf95dacd226dcf43da376cdb6cbba7035218921', 0, 'darkismysoullongisthismail@mshack.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
