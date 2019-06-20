-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: plantal
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `planta`
--

DROP TABLE IF EXISTS `planta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planta` (
  `idPlanta` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCientifico` varchar(100) NOT NULL,
  `nomeComum` varchar(200) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `familia` varchar(100) NOT NULL,
  `ordem` varchar(100) NOT NULL,
  `fotosURL` varchar(3000) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `descricao` varchar(5000) NOT NULL,
  `tipofolha` varchar(100) DEFAULT NULL,
  `utilizacao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idPlanta`)
) ENGINE=MyISAM AUTO_INCREMENT=359 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planta`
--

LOCK TABLES `planta` WRITE;
/*!40000 ALTER TABLE `planta` DISABLE KEYS */;
INSERT INTO `planta` VALUES (320,'Quercus coccifera','Carrasco<br>Carrasco-Galego<br>Carrasqueiro<br>Carrasquinha<br>Carvalho-dos-quermes<br>Verdadeiro-carrasco','Quercus coccifera','Fagaceae','Fagales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/11057\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28976\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28977\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28978\">','temp/Quercus_coccifera.png','Quercus coccifera L., conhecido pelos nomes comuns de quermes ou carrasco, Ã© um arbusto de folha persistente e verde o ano inteiro. Atinge, no mÃ¡ximo, 2 metros de altura, ainda que, muitas vezes, possam se transformar em uma pequena Ã¡rvore de 4 ou 5 metros. Pode se ramificar abundantemente desde a base, de forma que as ramas, de sÃºber liso, se entrelaÃ§am freqÃ¼entemente, tornando-o impenetrÃ¡vel.\nAs flores masculinas sÃ£o muito pequenas, pouco aparentes, com um envoltÃ³rio acopado dividida em 4, 5 ou 6 gomos e um nÃºmero variÃ¡vel de androceus (4 a 10); agrupam-se em espigas curtas, de cor amarelada, delgadas, que se penduram em grupos. As femininas nascem na mesma planta, solitÃ¡rias ou agrupadas com duas ou trÃªs. O fruto Ã© uma bolota, de sÃ³ uma semente, separÃ¡vel em duas metades (cotiledÃ´neas) longitudinalmente.','Caduca','Cor verde e bonita!!!!!!!'),(323,'Quercus robur','Albarinho<br>Alvarinho<br>Carvalheira<br>Carvalho<br>Carvalho-alvarinho<br>Carvalho-comum<br>Carvalho-roble<br>Roble','Quercus robur','Fagaceae','Fagales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/7560\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28795\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28796\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28797\">','temp/Quercus_robur.png','O carvalho-alvarinho, carvalho-roble ou carvalho-vermelho (Quercus robur) Ã© uma Ã¡rvore de grande porte, de folha caduca, pertencente Ã  famÃ­lia Fagaceae (ordem Fagales). Esta espÃ©cie foi no passado a Ã¡rvore dominante nas florestas portuguesas do Minho, Douro Litoral e Beiras.','Caduca','bolotas e folhas'),(325,'Picea abies','Abeto-falso<br>Espruce-da-Noruega<br>Espruce-europeu<br>PÃ­cea-europeia','Picea abies','Pinaceae','Pinales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/40356\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/33167\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/33168\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/33169\">','temp/Picea_abies.png','Picea abies, popularmente conhecida como Abeto-falso, Espruce-da-Noruega, Espruce-europeu ou PÃ­cea-europeia Ã© uma conÃ­fera da famÃ­lia pinaceae, originÃ¡ria do norte e centro da Europa., \nEm muitos paÃ­ses Ã© utilizada como Ã¡rvore de Natal e como planta ornamental em parques e jardins, bem como a sua madeira Ã© muito apreciada no fabrico de instrumentos musicais.\n\n','Persistente','Ornamental.'),(346,'Phoenix canariensis','Palmeira','Phoenix canariensis','Arecaceae','Arecales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/7038\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/32778\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/32779\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/32780\">','temp/Phoenix_canariensis.png','Palmeira-das-canÃ¡rias Ã© a designaÃ§Ã£o comum dada Ã  espÃ©cie Phoenix canariensis Hort. ex Chabaud, uma palmeira (Arecaceae) oriunda das ilhas CanÃ¡rias, hoje amplamente divulgada nas zonas temperadas de ambos os hemisfÃ©rios como planta ornamental.\nGrande palmeira de atÃ© 20 m, com folhas penatissectas compridas; floraÃ§Ã£o setembro-dezembro\n\nA palmeira-das-canÃ¡rias Ã© a mais comum das palmeiras cultivadas como ornamental. Ã‰, no entanto, rara como espontÃ¢nea em territÃ³rio nacional.\n\nAntagonistas:\n- Escaravelho-vermelho-das-palmeiras (Rhynchophorus ferrugineus) - Come os rebentos e folhas jovens levando a planta Ã  morte.\n- Cochonilha-branca (Aspidiotus nerii) - Pica as folhas e nervuras sugando a seiva e provocando manchas necrÃ³ticas na folha\n\n','Persistente','Planta ornamental'),(327,'Prunus padus','Azereiro-dos-danados<br>Pado','Prunus padus','Prunus','Rosaceae','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/39933\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/39936\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/39937\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/39938\">','temp/Prunus_padus.png','O azereiro-dos-danados, pado ou pado-do-alvÃ£o (Prunus padus L., tambÃ©m referido como Cerasus padus Delarbre e Prunus racemosa Lam.) Ã© uma espÃ©cie de cerejeira, nativa do norte da Europa e Ãsia setentrional, aparecendo atÃ© a norte cÃ­rculo polar Ã¡rtico na Noruega, SuÃ©cia, FinlÃ¢ndia e RÃºssia. Ã‰ a espÃ©cie-tipo do subgÃ©nero Padus. Apresenta flores hermafroditas dispostas em rÃ¡cimos, que sÃ£o polinizadas por abelhas e moscas. Ã‰ uma Ã¡rvore de pequeno porte, caducifÃ³lia, ou arbustiva, de 8 a 16 m de altura.\nO fruto Ã© muito procurado por aves. Ã‰ usado como planta medicinal desde a Idade MÃ©dia, e acreditava-se que a casca tinha propriedades espirituais que afastavam a Peste.','Caduca','Medicinal'),(354,'Ilex aquifolium','Azevinho<br>Pica-folha<br>Visqueiro<br>Xardo<br>Zebro','Ilex aquifolium','Aquifoliaceae','Aquifoliales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/14522\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/39687\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/39688\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/39689\">','temp/Ilex_aquifolium.png','O azevinho (Ilex aquifolium), tambÃ©m chamado azevim, azevinheiro, pau-azevim e sombra-de-azevim, Ã© um arbusto de folha persistente da famÃ­lia das Aquifoliaceae, cultivado normalmente para efeitos ornamentais devido aos seus frutos vermelhos. Estes frutos tambÃ©m sÃ£o denominados de azevinhos, bagas, azinhas ou enzinhas.\nÃ‰ uma das numerosas espÃ©cies do gÃ©nero Ilex, e a Ãºnica que nasce espontaneamente na Europa, sendo bastante comum atÃ© aos 1 500 metros de altitude.','',''),(330,'Pinus pinea','Pinheiro-manso','Pinus pinea','Pinaceae','Pinales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30741\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30737\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30738\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30739\">','temp/Pinus_pinea.png','O pinheiro-manso (Pinus pinea) Ã© uma espÃ©cie de pinheiro originÃ¡ria do Velho Mundo, mais precisamente da regiÃ£o do MediterrÃ¢neo. Desde a prÃ©-histÃ³ria, esta Ã¡rvore Ã© aproveitada como fonte de alimento, devido aos pinhÃµes que produz, sendo uma espÃ©cie bastante disseminada.\nO pinheiro-manso pode exceder os 30 metros de altura, embora normalmente seja de menor dimensÃ£o - entre 12 e 20 metros. Possui uma forma de sombrinha bastante caracterÃ­stica, com o tronco curto e largo, culminando numa copa bastante plana.','',''),(328,'Thuja plicata','Tuia-gigante<br>Tuja','Thuja plicata','Cupressaceae','Pinales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/6499\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28477\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28478\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28479\">','temp/Thuja_plicata.png','Thuja plicata Ã© o nome cientÃ­fico de uma Ã¡rvore cuja madeira Ã© muito apreciada para a confecÃ§Ã£o de tampos de intrumentos acÃºsticos, como a guitarra.','Persistente','Componentes de instrumentos musicais (ex: guitarra).'),(344,'Papaver rhoeas','Papoila<br>Papoila-brava<br>Papoila-das-searas<br>Papoila-ordinÃ¡ria<br>Papoila-rubra<br>Papoila-vermelha<br>Papoila-vulgar<br>Papoula<br>Papoula-ordinÃ¡ria','Papaver rhoeas','Papaveraceae','Ranunculales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/11902\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/10516\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/10517\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/10518\">','temp/Papaver_rhoeas.png','Papoila (portuguÃªs europeu) ou papoula (portuguÃªs brasileiro) Ã© uma flor da famÃ­lia das Papaveraceae, abundante no hemisfÃ©rio norte, cultivada para ornamento, Ã³pio ou comida.\nCom relaÃ§Ã£o a sua reproduÃ§Ã£o, o ovÃ¡rio da papoila localiza-se acima do receptÃ¡culo inserindo-se os estames e pÃ©talas abaixo dele.','','Ornamental'),(343,'Pinus nigra','Pinheiro-da-AustrÃ¡lia<br>Pinheiro-negro','Pinus nigra','Pinaceae','Pinales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30722\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30723\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30724\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30725\">','temp/Pinus_nigra.png','O pinheiro-larÃ­cio (Pinus nigra) Ã© uma espÃ©cie de pinheiro originÃ¡ria do Velho Mundo, mais precisamente da regiÃ£o da Europa e MediterrÃ¢neo, especificamente, da Espanha atÃ© a Turquia e nas montanhas do Atlas do noroeste da Ãfrica. Pode ser encontrado do nÃ­vel do mar atÃ© 2 000 m de altitude, mais comumente entre 250 e 1 600 m.\nÃ‰ uma grande Ã¡rvore, podendo possuir entre 20 a 55 metros de altura quando maturo, atingindo uma altura mÃ©dida de 17 metros aos 40 anos de idade. Suas sementes maturas possuem 5â€“10 cm de comprimento. Suas sementes sÃ£o dispersas em outubro e novembro. Cresce com velocidade moderada, entre 30â€“70 cm o ano, e possui no geral um formato cÃ´nico, tornando-se cada vez mais irregular com o tempo. Possui um longo tempo de vida, podendo viver mais de 500 anos. NÃ£o tolera sombras, necessitando de Sol forte para crescer bem, mas Ã© resistente contra neve e baixas temperaturas, podendo resistir temperaturas de -30 graus.\nO pinheiro-larÃ­cio Ã© uma fonte importante de madeira na Europa.\nEm Portugal, o Pinus nigra designa-se vulgarmente por Pinheiro Negro ou Pinheiro da Ãustria. HÃ¡ a destacar o facto de existir a subspÃ©cie laricio.\nÃ‰ importante fazer a distinÃ§Ã£o entre Pinheiro LarÃ­cio e o LariÃ§o-Europeu (Larix decidua) que tambÃ©m Ã© uma Ã¡rvore importante na Europa.\n\n','Persistente','ProduÃ§Ã£o de madeira.'),(334,'Pinguicula vulgaris','NÃ£o tem','Pinguicula vulgaris','Lentibulariaceae','Lamiales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/11151\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/15107\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/15108\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/15109\">','temp/Pinguicula_vulgaris.png','Pinguicula vulgaris Ã© uma espÃ©cie de planta carnÃ­vora com flor pertencente Ã  famÃ­lia Lentibulariaceae. \nA autoridade cientÃ­fica da espÃ©cie Ã© L., tendo sido publicada em Species Plantarum 1: 17. 1753.','',''),(335,'Pinguicula lusitanica','NÃ£o tem','Pinguicula lusitanica','Lentibulariaceae','Lamiales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/13027\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/34560\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/34561\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/12594\">','temp/Pinguicula_lusitanica.png','Pinguicula lusitanica Ã© uma espÃ©cie de planta carnÃ­vora com flor pertencente Ã  famÃ­lia Lentibulariaceae. \nA autoridade cientÃ­fica da espÃ©cie Ã© L., tendo sido publicada em Sp. Pl. 1: 17. 1753.','',''),(336,'Pinus sylvestris','Pinheiro-da-Flandres<br>Pinheiro-de-casquinha<br>Pinheiro-de-Riga<br>Pinheiro-silvestre','Pinus sylvestris','Pinaceae','Pinales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30747\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30748\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30749\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/30750\">','temp/Pinus_sylvestris.png','Pinus sylvestris, conhecido popularmente como pinho-de-riga, pinheiro-silvestre, pinheiro-da-escÃ³cia, pinho-nÃ³rdico, casquinha-nÃ³rdica ou casquinha, Ã© uma espÃ©cie de pinheiro originÃ¡ria do Velho Mundo, mais precisamente da regiÃ£o da EurÃ¡sia.\nO Pinus sylvestris L. Ã© uma das duas espÃ©cies do gÃ©nero Pinus que os botÃ¢nicos nÃ£o tÃªm dÃºvidas em classificar como autÃ³ctones no territÃ³rio continental portuguÃªs, sendo a outra o pinheiro-manso (Pinus pinea L.).\nJÃ¡ a espÃ©cie de pinheiro mais conhecida em Portugal, o pinheiro-bravo (Pinus pinaster Aiton), continua a nÃ£o ser consensual entre os especialistas se a mesma serÃ¡ autÃ³ctone em Portugal.','',''),(347,'Pseudotsuga menziesii','W AmÃ©rica N; introduzida noutras regiÃµes do globo','Pseudotsuga menziesii','Pseudotsuga','Pinaceae','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/36508\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/7984\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/7985\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/7986\">','temp/Pseudotsuga_menziesii.png','Pseudotsuga menziesii Ã© uma espÃ©cie de conÃ­fera nativa do oeste da AmÃ©rica do Norte. Sua variedade Pseudotsuga menziesii var. menziesii, tambÃ©m conhecida como \"abeto de Douglas\" cresce nas regiÃµes costeiras, do centro-oeste da ColÃºmbia BritÃ¢nica, no CanadÃ¡, em direÃ§Ã£o ao sul atÃ© o centro da CalifÃ³rnia, Estados Unidos. Em Oregon e Washington seu alcance Ã© contÃ­nuo desde a Cordilheira das Cascatas atÃ© a costa do Oceano PacÃ­fico.O nome especÃ­fico, menziesii, Ã© uma homenagem a Archibald Menzies, um mÃ©dico escocÃªs e rival do naturalista David Douglas. Menzies documentou  a Ã¡rvore pela primeira vez na ilha de Vancouver em 1791.','Caduca','Ornamental.'),(348,'Chamaecyparis lawsoniana','Cedro-branco<br>Cedro-do-Oregon<br>Falso-cipreste<br>Falso-cipreste-de-Lawson','Chamaecyparis lawsoniana','Cupressaceae','Pinales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/9341\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/6694\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/6695\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/9342\">','temp/Chamaecyparis_lawsoniana.png','Chamaecyparis lawsoniana (A. Murr.) Parl., conhecida pelos nomes comuns de cedro-do-Ã³regÃ£o, cedro-do-oregon, cedro-branco, cipreste ou cipreste-de-lawson, Ã© uma Ã¡rvore da famÃ­lia das cupressÃ¡ceas, muito utilizada como Ã¡rvore ornamental. Ã‰ uma Ã¡rvore  nativa do noroeste  da AmÃ©rica do Norte, no sudoeste do Oregon, e no extremo noroeste da CalifÃ³rnia, ocorrendo desde o nÃ­vel mÃ©dio da Ã¡gua do mar atÃ© uma altitude de 1500 m em vales montanhosos, muitas vezes a acompanhar cursos de Ã¡gua.\nCaracteriza-se pelo seu porte elevado, atingindo entre 50 a 70 m, com uma copa piramidal e frondosa. A sua madeira Ã© forte e durÃ¡vel. As folhas sÃ£o escamiformes, decussadas e normalmente agudas, revestindo raminhos disticados na horizontal.\nOs estrÃ³bilos dispÃµem-se na extremidade dos braquiblastos (ramos curtos). As inflorescÃªncias masculinas sÃ£o purpÃºreas, dando origem a gÃ¡lbulos de 8 a 10 mm, de cor glauca quando recentemente formados, com 6 a 10 escamas de escudo subplano, e castanhos quando maduros, seis a oito meses apÃ³s a polinizaÃ§Ã£o.','Persistente','Ornamental.'),(349,'Ligustrum lucidum','Alfenheiro<br>Alfenheiro-do-JapÃ£o','Ligustrum lucidum','Oleaceae','Lamiales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/32961\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/32951\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/32952\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/32953\">','temp/Ligustrum_lucidum.png','O ligustro (Ligustrum lucidum) Ã© uma Ã¡rvore originÃ¡ria da China.\nOutros nomes populares: alfeneiro, alfeneiro-da-china, alfeneiro-brilhante, alfeneiro-de-rua.\nO primeiro ocidental a descrever esta espÃ©cie foi um missionÃ¡rio jesuÃ­ta portuguÃªs, JoÃ£o de Loureiro, na sua obra â€˜Flora Cochinchinensisâ€™, publicada em 1790.\nO ligustro (Ligustrum lucidum) Ã© muito resistente a todo o tipo de clima e solo, Ã© de crescimento rÃ¡pido, suportando sem problemas podas drÃ¡sticas. Ã‰ uma espÃ©cie que se cultiva frequentemente como ornamental, pela sua agradÃ¡vel folhagem. O nome genÃ©rico, Ligustrum, era jÃ¡ utilizado pelos Romanos e foi mantido por Lineu; segundo alguns autores deriva do vocÃ¡bulo latino ligare, que significa atar, por os seus ramos terem sido utilizados com este fim. O restritivo especÃ­fico lucidum significa brilhante, alusivo Ã s folhas lustrosas. Multiplica-se por sementes a as variedades por enxertos. Suporta muita bem a poluiÃ§Ã£o, sendo por isso utilizado em grandes centros urbanos. Ã‰ frequente utilizar as cultivares â€˜Aureovariegatumâ€™, de folhas matizadas de amarelo e â€˜Macrophyllumâ€™, de folhas um pouco maiores.','Persistente','Ornamental'),(350,'Quercus suber','Chaparreiro<br>Chaparro<br>Sobreiro<br>Sobro<br>Sovereiro<br>SÃ´bro','Quercus suber','Fagaceae','Fagales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28998\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/28999\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/29000\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/29001\">','temp/Quercus_suber.png','O sobreiro, sobro, sobreira ou chaparro (Quercus suber) Ã© uma Ã¡rvore da famÃ­lia do carvalho, cultivada no Sul da Europa e a partir da qual se extrai a cortiÃ§a. O sobreiro Ã©, juntamente com o Pinheiro-bravo, uma das espÃ©cies de Ã¡rvores mais predominante em Portugal, sendo mais comum no Alentejo litoral e serras algarvias.\nGraÃ§as Ã  cortiÃ§a, o sobreiro tem sido cultivado desde tempos remotos. A extraÃ§Ã£o da cortiÃ§a nÃ£o Ã© (em termos gerais) prejudicial Ã  Ã¡rvore, uma vez que esta volta a produzir nova camada de \"casca\" (sÃºber) com idÃªntica espessura a cada 9 anos, perÃ­odo apÃ³s o qual Ã© submetida a novo descortiÃ§amento. Recentemente, tÃªm-se desenvolvido processos mais mecanizados e seguros para se proceder a esta operaÃ§Ã£o, como o caso da mÃ¡quina que corta a cortiÃ§a, evitando lesÃµes prejudiciais Ã  vida do sobreiro e que facilita o trabalho dos tiradores, sem os substituir, aumentando assim a produtividade. Pode ter atÃ© 20 m, mas normalmente terÃ¡ 15 m.\nO sobreiro tambÃ©m fazia parte da vegetaÃ§Ã£o natural da PenÃ­nsula IbÃ©rica, sendo espontÃ¢neo em muitos locais de Portugal e Espanha, onde constituÃ­a, antes da acÃ§Ã£o do Homem, frondosas florestas em associaÃ§Ã£o com outras espÃ©cies, nomeadamente do gÃ©nero Quercus.\nA finalidade da cortiÃ§a Ã© o fabrico de isolantes tÃ©rmicos, tecido de cortiÃ§a (vestuÃ¡rio e acessÃ³rios, tais como malas, bolsas, carteiras e sapatos), materiais de isolamento sonoro de aplicaÃ§Ã£o variada e ainda materiais da indÃºstria aeronÃ¡utica, automobilÃ­stica e atÃ© aeroespacial, mas sobretudo Ã© utilizada na produÃ§Ã£o de rolhas para engarrafamento de vinhos e outros lÃ­quidos. Portugal Ã© o maior produtor mundial de cortiÃ§a, sendo a cortiÃ§a portuguesa responsÃ¡vel por 50% da produÃ§Ã£o mundial. O setor emprega diretamente 12 mil pessoas e contribui com 3% do PIB, cerca de 5,5 mil milhÃµes de euros (7.6 BilhÃµes US$). Os montados sÃ£o sistemas agro-silvo-pastoris e um dos exemplos de sistemas tradicionais sustentÃ¡veis de uso no solo da Europa. Representam uma Ã¡rea de aproximadamente 1,2 Mha, a maior parte na regiÃ£o do Alentejo, no Sul de Portugal. O valor econÃ³mico dos montados deve-se essencialmente Ã  produÃ§Ã£o de cortiÃ§a, estando a sua importÃ¢ncia cultural relacionada com o papel que tÃªm na conservaÃ§Ã£o da biodiversidade e valores histÃ³ricos, como o registo de sistemas sociais e agrÃ­colas tradicionais. No sÃ©culo XIV, Portugal jÃ¡ exportava cortiÃ§a para o Reino Unido e Flandres.\nA gestÃ£o tradicional dos montados permite combinar dois objetivos importantes: a produÃ§Ã£o agropastoril e a conservaÃ§Ã£o do ecossistema. AlÃ©m da cortiÃ§a, o sobreiro dÃ¡ o fruto que Ã© a bolota, tambÃ©m conhecida por lande ou ainda (mais correctamente) glande, que serve para alimentar as varas do porco preto alentejano, tambÃ©m conhecido por porco de montanheira, do qual se faz o alÃ©m de enchidos o presunto ibÃ©rico ou presunto de pata negra.\nNa localidade de Ãguas de Moura estÃ¡ o Sobreiro Monumental com 234 anos, 16 m de altura e com um tronco que sÃ£o precisas pelo menos cinco pessoas para conseguir abraÃ§Ã¡-lo. Ã‰ considerado monumento nacional desde 1988 e o Livro de Recordes do Guinness diz que Ã© o maior e mais velho do mundo.','',''),(351,'Malus domestica','Macieira<br>Maceira<br>MaÃ§anzeira','Malus domestica','Rosaceae','Rosales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/19908\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/40785\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/40786\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/19907\">','temp/Malus_domestica.png','A origem da macieira, tal como muitas outras plantas cultivadas, nÃ£o Ã© clara. Ã‰ aceite que a forma cultivada terÃ¡ origem nas formas silvestres, Malus sylvestris, Malus orientalis e Malus sieversii.\n\nAlguns autores assumem que Ã© nativa do CÃ¡ucaso e do TurquestÃ£o, pela grande variedade de formas e sabores dos frutos.\n\nA espÃ©cie Malus domestica Ã© uma Ã¡rvore de atÃ© 10 m de altura, podendo atingir os 15 m.\nPossui tronco curto e copa arredondada, com os ramos jovens por vezes espinhosos. A casca Ã© de cor acinzentada fissurada em pequenas placas irregulares. Folhas caducas, alternas, pecioladas, ovado-elÃ­pticas, serradas, levemente tomentosas na pÃ¡gina superior e densamente na inferior; estÃ­pulas sÃ£o simples. As flores pedunculadas, solitÃ¡rias ou agrupadas em fascÃ­culos (corimbos) com 3 a 6 flores na extremidade dos ramos jovens, brancas com as margens rosadas; sÃ©palas branco-tomentosas em ambas as pÃ¡ginas. O fruto (maÃ§Ã£) Ã© um pomo variÃ¡vel na cor, sabor, forma e dimensÃµes, normalmente globosos, achatado nos extremos, com casca brilhante, lisa e polpa doce e aromÃ¡tica; as sementes estÃ£o contidas numa separaÃ§Ã£o cartilaginosa (mesocarpo) no centro do fruto.','Caduca','O fruto Ã© usado na alimentaÃ§Ã£o.'),(352,'Cercis siliquastrum','Ãrvore-de-Judas<br>Olaia','Cercis siliquastrum','Fabaceae','Fabales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/18259\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/7728\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/7729\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/18250\">','temp/Cercis_siliquastrum.png','A olaia ou Ã¡rvore-de-judas ou ainda pata-de-vaca (Cercis siliquastrum) Ã© uma Ã¡rvore pequena com 10 a 15 m de altura, nativa do sul da Europa e sudoeste asiÃ¡tico, comum na PenÃ­nsula IbÃ©rica, sul de FranÃ§a, ItÃ¡lia, GrÃ©cia e Ãsia Menor, que forma uma Ã¡rvore baixa com uma copa achatada. No inÃ­cio da primavera fica coberta com uma profusÃ£o de flores arroxeadas, que aparecem antes das folhas. As folhas sÃ£o reniformes e caducas. . A Ã¡rvore era frequentemente incluÃ­da em herbÃ¡rios dos sÃ©culos XVI e XVII.\nDiz-se que foi nesta Ã¡rvore pequena e com poucos ramos que Judas Iscariotes se enforcou apÃ³s ter traÃ­do Cristo, mas o seu nome poderÃ¡ tambÃ©m derivar de \"Ã¡rvore da Judeia\", nome da regiÃ£o onde a Ã¡rvore era vulgar.','Caduca','Ornamental'),(355,'Arbutus unedo','Ervedeiro<br>ÃŠrvedo<br>ÃŠrvodo<br>Medronheiro<br>Medronheiro-comum<br>MerÃ³dios','Arbutus unedo','Ericaceae','Ericales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/14144\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/14142\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/14143\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/14145\">','temp/Arbutus_unedo.png','O medronheiro (Arbutus unedo) Ã© uma Ã¡rvore frutÃ­fera e ornamental da famÃ­lia Ericaceae, tambÃ©m conhecida como merÃ³dios, ervedeiro, Ãªrvedo ou Ãªrvodo. Ã‰ uma planta nativa da regiÃ£o mediterrÃ¢nica e Europa Ocidental podendo ser encontrada tÃ£o a norte como no oeste da FranÃ§a e Irlanda. Sobrevive em zonas de elevado declive onde dificilmente outras culturas sobrevivem. O seu fruto Ã© denominado medronho. Em Portugal, pode ser encontrado por todo o paÃ­s, mas a maior concentraÃ§Ã£o ocorre nas serras do CaldeirÃ£o e Monchique.','',''),(357,'Quercus lusitanica','CarvalhiÃ§a<br>Carvalho-anÃ£o<br>Cerqueiro-bravo','Quercus lusitanica','Fagaceae','Fagales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/18389\">','temp/Quercus_lusitanica.png','A Quercus Lusitanica, tambÃ©m conhecida como CarvalhiÃ§a, Carvalho-anÃ£o, Cerqueiro-bravo Ã© uma espÃ©cie natural de Portugal, Espanha e Marrocos. Ã‰ um pequeno arbusto que normalmente nÃ£o passa dos 50 centÃ­metros de altura, sendo encontrado predominantemente em matas e matagais e suas flores surgem entre abril e junho, agrupadas separadamente por sexo em espigas alongadas pendentes, designadas por amentilhos. O seu fruto Ã© a bolota, que tem entre 10 e 15 milÃ­metros.\nEste tipo de Carvalho tem tanino - que se encontra na casca em forma de pÃ³ - e Ã© utilizado em curtumes. Ã‰ tambÃ©m usado no fabrico de barris (com a sua madeira).','',''),(358,'Pinus pinaster','Pinheiro-bravo<br>Pinheiro-das-landes<br>Pinheiro-marÃ­timo','Pinus pinaster','Pinaceae','Pinales','<img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/16155\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/16151\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/16152\"><img class=\"imgPlanta\" src=\"http://jb.utad.pt/imagem/16153\">','temp/Pinus_pinaster.png','O pinheiro-bravo (Pinus pinaster) Ã© uma espÃ©cie de pinheiro originÃ¡ria do Velho Mundo, mais precisamente da regiÃ£o da Europa e MediterrÃ¢neo.','Persistente','aaaa');
/*!40000 ALTER TABLE `planta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (97,'carlaramos','cienciasnaturais2019','carla.vieira.ramos@gmail.com'),(103,'estg','eiestg','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-18 14:23:02