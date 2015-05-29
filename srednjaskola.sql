-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 02:16 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srednjaskola`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `novost` int(11) NOT NULL,
  `vrijeme` timestamp NOT NULL,
  `autor` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` varchar(500) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `novost` (`novost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `novost`, `vrijeme`, `autor`, `email`, `tekst`) VALUES
(1, 2, '2015-05-28 22:32:03', 'Ensar Muratović', 'ensar_muratovic@live.com', 'Inace veoma glupa obavijest. Inace veoma glupa obavijest.Inace veoma glupa obavijest.Inace veoma glupa obavijest.Inace veoma glupa obavijest.'),
(2, 2, '2015-05-28 22:32:03', 'Ensar Muratović', 'ensar_muratovic@live.com', 'Ovo je komentar koji nema smisla.Ovo je komentar koji nema smisla.Ovo je komentar koji nema smisla.Ovo je komentar koji nema smisla.Ovo je komentar koji nema smisla.'),
(3, 3, '2015-05-28 22:33:07', 'Ensar Ensarović', 'ensar_muratovic@live.com', 'Jos jedan komentar. Jos jedan komentar.Jos jedan komentar.Jos jedan komentar.Jos jedan komentar.Jos jedan komentar.'),
(4, 6, '2015-05-28 22:46:53', 'Ensar Muratović', 'ensar_muratovic@live.com', 'Komentar kao i svaki drugi komentar. Komentar kao i svaki drugi komentar.Komentar kao i svaki drugi komentar.Komentar kao i svaki drugi komentar.'),
(5, 6, '2015-05-28 22:46:53', 'Ensar Muratović', 'Ensar Muratović', 'Ni po cemu se ne razlikuje od ostalih komentara.');

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL,
  `naslov` varchar(150) COLLATE utf8_slovenian_ci NOT NULL,
  `slika` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` varchar(500) COLLATE utf8_slovenian_ci NOT NULL,
  `detaljanTekst` varchar(10000) COLLATE utf8_slovenian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `autor`, `vrijeme`, `naslov`, `slika`, `tekst`, `detaljanTekst`) VALUES
(2, 'Ensar Muratović', '2015-05-28 19:43:58', 'OBAVJEŠTENJE POVODOM PRAZNIKA', 'slike/praznik.jpg', 'Obavještavamo sve učenike Srednje škole "Huse Fatkić" da je petak 25.Novembar.2014 godine neradni dan zbog državnog praznika Dana državnosti Bosne i Hercegovine. Časovi predviđeni za taj dan se ne nadoknađuju. Također, 24.Novembra 2014.godine, u sali školske dvorane će biti organizovana priredba i pozivaju se svi učenici da prisustvuju.\r\n', NULL),
(3, 'Ensar Muratović', '2015-05-28 19:45:52', 'SIGURNOST DJECE I MLADIH NA INTERNETU', 'slike/zastitadjeceimladih.jpg', 'Ovdje možete pogledati prezentaciju portfolia na temu „Sigurnost djece i mladih na interentu“. Ovaj portfolio rađen je u sklopu „Projekt građana“ a cilj mu je edukacija roditelja, nastavnika i učenika o ovom problemu. Prezentacija će se održati u školskoj sali.\r\n', 'Ovdje možete pogledati prezentaciju portfolia na temu „Sigurnost djece i mladih na interentu“. Ovaj portfolio rađen je u sklopu „Projekt građana“ a cilj mu je edukacija roditelja, nastavnika i učenika o ovom problemu. Prezentacija će se održati u školskoj sali. 							Ovdje možete pogledati prezentaciju portfolia na temu „Sigurnost djece i mladih na interentu“. Ovaj portfolio rađen je u sklopu „Projekt građana“ a cilj mu je edukacija roditelja, nastavnika i učenika o ovom problemu. Prezentacija će se održati u školskoj sali. 							Ovdje možete pogledati prezentaciju portfolia na temu „Sigurnost djece i mladih na interentu“. Ovaj portfolio rađen je u sklopu „Projekt građana“ a cilj mu je edukacija roditelja, nastavnika i učenika o ovom problemu. Prezentacija će se održati u školskoj sali.Ovdje možete pogledati prezentaciju portfolia na temu „Sigurnost djece i mladih na interentu“. Ovaj portfolio rađen je u sklopu „Projekt građana“ a cilj mu je edukacija roditelja, nastavnika i učenika o ovom problemu. Prezentacija će se održati u školskoj sali.							Ovdje možete pogledati prezentaciju portfolia na temu „Sigurnost djece i mladih na interentu“. Ovaj portfolio rađen je u sklopu „Projekt građana“ a cilj mu je edukacija roditelja, nastavnika i učenika o ovom problemu. Prezentacija će se održati u školskoj sali. 							Ovdje možete pogledati prezentaciju portfolia na temu „Sigurnost djece i mladih na interentu“. Ovaj portfolio rađen je u sklopu „Projekt građana“ a cilj mu je edukacija roditelja, nastavnika i učenika o ovom problemu. Prezentacija će se održati u školskoj sali.\r\n\r\n\r\n'),
(4, 'Ensar Muratović', '2015-05-28 19:48:48', 'SRCEM ZA DJEČIJI OSMIJEH', 'slike/srcemzadjecijiosmjeh.jpg', 'Na mlađima svijet ostaje, zato se naša škola odlučila pomoći najmlađim u razvijanju svijesti i mogućnostima kvalitetnog obrazovanja i života u BiH. Tokom naših aktivnosti, odlučili smo usmjeriti pažnju na djecu u vrtiću Ilijaš. Rad sa njima sastojat će se od kreativnih radionica, časova engleskog jezika i obezbjeđivanja didaktičkih igračaka. Time im želimo pokazati da imaju nekoga ko stoji iza njih, ko će prepoznati njihovu vrijednost u budućnosti, pomoći im u sadašnjosti i biti im dobar uzor. N', 'Na mlađima svijet ostaje, zato se naša škola odlučila pomoći najmlađim u razvijanju svijesti i mogućnostima kvalitetnog obrazovanja i života u BiH. Tokom naših aktivnosti, odlučili smo usmjeriti pažnju na djecu u vrtiću Ilijaš. Rad sa njima sastojat će se od kreativnih radionica, časova engleskog jezika i obezbjeđivanja didaktičkih igračaka. Time im želimo pokazati da imaju nekoga ko stoji iza njih, ko će prepoznati njihovu vrijednost u budućnosti, pomoći im u sadašnjosti i biti im dobar uzor. Nizom akcija ćemo probuditi svijest mladih o važnosti volonterskog rada i usput se super zabaviti.Na mlađima svijet ostaje, zato se naša škola odlučila pomoći najmlađim u razvijanju svijesti i mogućnostima kvalitetnog obrazovanja i života u BiH. Tokom naših aktivnosti, odlučili smo usmjeriti pažnju na djecu u vrtiću Ilijaš. Rad sa njima sastojat će se od kreativnih radionica, časova engleskog jezika i obezbjeđivanja didaktičkih igračaka. Time im želimo pokazati da imaju nekoga ko stoji iza njih, ko će prepoznati njihovu vrijednost u budućnosti, pomoći im u sadašnjosti i biti im dobar uzor. Nizom akcija ćemo probuditi svijest mladih o važnosti volonterskog rada i usput se super zabaviti.Na mlađima svijet ostaje, zato se naša škola odlučila pomoći najmlađim u razvijanju svijesti i mogućnostima kvalitetnog obrazovanja i života u BiH. Tokom naših aktivnosti, odlučili smo usmjeriti pažnju na djecu u vrtiću Ilijaš. Rad sa njima sastojat će se od kreativnih radionica, časova engleskog jezika i obezbjeđivanja didaktičkih igračaka. Time im želimo pokazati da imaju nekoga ko stoji iza njih, ko će prepoznati njihovu vrijednost u budućnosti, pomoći im u sadašnjosti i biti im dobar uzor. Nizom akcija ćemo probuditi svijest mladih o važnosti volonterskog rada i usput se super zabaviti.Na mlađima svijet ostaje, zato se naša škola odlučila pomoći najmlađim u razvijanju svijesti i mogućnostima kvalitetnog obrazovanja i života u BiH. Tokom naših aktivnosti, odlučili smo usmjeriti pažnju na djecu u vrtiću Ilijaš. Rad sa njima sastojat će se od kreativnih radionica, časova engleskog jezika i obezbjeđivanja didaktičkih igračaka. Time im želimo pokazati da imaju nekoga ko stoji iza njih, ko će prepoznati njihovu vrijednost u budućnosti, pomoći im u sadašnjosti i biti im dobar uzor. Nizom akcija ćemo probuditi svijest mladih o važnosti volonterskog rada i usput se super zabaviti.Na mlađima svijet ostaje, zato se naša škola odlučila pomoći najmlađim u razvijanju svijesti i mogućnostima kvalitetnog obrazovanja i života u BiH. Tokom naših aktivnosti, odlučili smo usmjeriti pažnju na djecu u vrtiću Ilijaš. Rad sa njima sastojat će se od kreativnih radionica, časova engleskog jezika i obezbjeđivanja didaktičkih igračaka. Time im želimo pokazati da imaju nekoga ko stoji iza njih, ko će prepoznati njihovu vrijednost u budućnosti, pomoći im u sadašnjosti i biti im dobar uzor. Nizom akcija ćemo probuditi svijest mladih o važnosti volonterskog rada i usput se super zabaviti.'),
(5, 'Ensar Muratović', '2015-05-28 19:55:11', 'PREZENTACIJA ZA UČENIKE', 'slike/prezentacijazaucenike.jpg', 'BHV Education u suradnji s Hotel and Tourism Management Institute – HTMi iz Švicarske otvara svoja vrata učenicima iz Hrvatske, te organizira akademsku prezentaciju s predstavnicima fakulteta. Prezentacija će se održati u Gradskoj knjižnici, Odjel za djecu i mladež na adresi Starčevićev trg 6 u ponedjeljak, 30.ožujka 2015. u 17:00 h..', 'BHV Education u suradnji s Hotel and Tourism Management Institute – HTMi iz Švicarske otvara svoja vrata učenicima iz Hrvatske, te organizira akademsku prezentaciju s predstavnicima fakulteta. Prezentacija će se održati u Gradskoj knjižnici, Odjel za djecu i mladež na adresi Starčevićev trg 6 u ponedjeljak, 30.ožujka 2015. u 17:00 h..BHV Education u suradnji s Hotel and Tourism Management Institute – HTMi iz Švicarske otvara svoja vrata učenicima iz Hrvatske, te organizira akademsku prezentaciju s predstavnicima fakulteta. Prezentacija će se održati u Gradskoj knjižnici, Odjel za djecu i mladež na adresi Starčevićev trg 6 u ponedjeljak, 30.ožujka 2015. u 17:00 h..BHV Education u suradnji s Hotel and Tourism Management Institute – HTMi iz Švicarske otvara svoja vrata učenicima iz Hrvatske, te organizira akademsku prezentaciju s predstavnicima fakulteta. Prezentacija će se održati u Gradskoj knjižnici, Odjel za djecu i mladež na adresi Starčevićev trg 6 u ponedjeljak, 30.ožujka 2015. u 17:00 h..BHV Education u suradnji s Hotel and Tourism Management Institute – HTMi iz Švicarske otvara svoja vrata učenicima iz Hrvatske, te organizira akademsku prezentaciju s predstavnicima fakulteta. Prezentacija će se održati u Gradskoj knjižnici, Odjel za djecu i mladež na adresi Starčevićev trg 6 u ponedjeljak, 30.ožujka 2015. u 17:00 h..'),
(6, 'Ensar Muratović', '2015-05-28 19:57:46', 'TISUĆE UČENIKA I STUDENATA IZAŠLO NA ULICE', 'slike/studentinaulici.jpg', 'Oko 50 tisuća učenika i studenata u više talijanskih gradova sudjelovalo je u četvrtak u prosvjedima protiv reforme školstva. Najveći je bio u Milanu, gdje je došlo i do sukoba između prosvjednika i policije. Protivnici reforme su na organe reda bacali jaja, boce i druge predmete, a policija je odgovorila suzavcem, javljaju talijanski mediji.', 'Oko 50 tisuća učenika i studenata u više talijanskih gradova sudjelovalo je u četvrtak u prosvjedima protiv reforme školstva. Najveći je bio u Milanu, gdje je došlo i do sukoba između prosvjednika i policije. Protivnici reforme su na organe reda bacali jaja, boce i druge predmete, a policija je odgovorila suzavcem, javljaju talijanski mediji.Oko 50 tisuća učenika i studenata u više talijanskih gradova sudjelovalo je u četvrtak u prosvjedima protiv reforme školstva. Najveći je bio u Milanu, gdje je došlo i do sukoba između prosvjednika i policije. Protivnici reforme su na organe reda bacali jaja, boce i druge predmete, a policija je odgovorila suzavcem, javljaju talijanski mediji.Oko 50 tisuća učenika i studenata u više talijanskih gradova sudjelovalo je u četvrtak u prosvjedima protiv reforme školstva. Najveći je bio u Milanu, gdje je došlo i do sukoba između prosvjednika i policije. Protivnici reforme su na organe reda bacali jaja, boce i druge predmete, a policija je odgovorila suzavcem, javljaju talijanski mediji.Oko 50 tisuća učenika i studenata u više talijanskih gradova sudjelovalo je u četvrtak u prosvjedima protiv reforme školstva. Najveći je bio u Milanu, gdje je došlo i do sukoba između prosvjednika i policije. Protivnici reforme su na organe reda bacali jaja, boce i druge predmete, a policija je odgovorila suzavcem, javljaju talijanski mediji.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`novost`) REFERENCES `novosti` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
