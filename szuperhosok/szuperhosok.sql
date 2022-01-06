CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `univerzum_id` int(11) NOT NULL,
  `cim_hu` varchar(45) DEFAULT NULL,
  `cim_us` varchar(45) NOT NULL,
  `tartalom` text,
  `kep` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `film` (`id`, `univerzum_id`, `cim_hu`, `cim_us`, `tartalom`, `kep`) VALUES
(1, 1, 'A Vasember', 'Iron Man', 'A Vasember (eredeti cím: Iron Man) 2008-ban bemutatott szuperhősfilm a Marvel Comics Vasember-képregényei alapján, melynek bemutatója világszerte, köztük Magyarországon is 2008. április 30-án volt. A Jon Favreau rendezésében készült filmben Tony Starkot (Robert Downey Jr.), a milliárdos fegyvergyárost terroristák ejtik foglyul Afganisztánban. Rakéta összeszerelésére kényszerítik, azonban Stark a rendelkezésre álló eszközökből páncélzatot épít magának a szökéshez. A fogságban szembesül a saját cége gyártmányai okozta pusztítással. Amerikába visszatérve továbbfejleszti művét, s a technológiára támaszkodó szuperhős, Vasember válik belőle, aki az ellen kezd harcolni, aminek azelőtt maga is vezető képviselője volt. Gwyneth Paltrow játssza személyi asszisztensét, Pepper Pottst, Terrence Howard látható a vadászgéppilóta James Rhodes szerepében, a gonosz Obadiah Stane-t pedig Jeff Bridges alakítja.', 'ironman.jpg'),
(2, 1, 'Pókember: Idegenben', 'Spider-Man: Far From Home', 'A Pókember: Idegenben (eredeti cím: Spider-Man: Far From Home) egy közelgő 2019-es amerikai szuperhősfilm, melyet a Columbia Pictures és a Marvel Studios gyártott, a Sony Pictures Releasing forgalmazásában. Ez a folytatása a 2017-ben bemutatott Pókember: Hazatérés című filmnek, valamint Marvel moziuniverzum (MCU) huszonharmadik filmje. A film rendezője Jon Watts, írója Chris McKenna és Erik Sommers. A főszereplők Tom Holland, mint címszereplő Pókember, Michael Keaton, Zendaya, Marisa Tomei, Jake Gyllenhaal, Cobie Smulders és Samuel L. Jackson.', 'Spider-Man_Far_From_Home_poster.jpeg');


CREATE TABLE `univerzum` (
  `id` int(11) NOT NULL,
  `nev` varchar(45) DEFAULT NULL,
  `hatter` varchar(255) NOT NULL,
  `leiras` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `univerzum` (`id`, `nev`, `hatter`, `leiras`) VALUES
(1, 'Marvel-moziuniverzum', 'marvel.jpg', 'A Marvel-moziuniverzum vagy Marvel-moziverzum (angolul: Marvel Cinematic Universe, röviden MCU) egy filmfranchise és kitalált univerzum, mely a Marvel Studios független szuperhősfilmjeinek helyszíne. A filmek a Marvel Comics kiadványainak szereplőin alapulnak. A közös univerzum – a képregények Marvel-univerzumához hasonlóan – a különálló filmek egyes szereplőinek, helyszíneinek vagy cselekményelemeinek crossoverével alakult ki.'),
(2, 'DC-moziuniverzum', 'dc.jpg', 'A DC-moziuniverzum (régebbi neve angolul DC Extended Universe, röviden DCEU, új neve World of DC) egy amerikai filmfranchise és kitalált univerzum, mely a Warner Bros. szuperhősfilmjeinek helyszíne. A filmek történetei a DC Comics képregényein alapulnak. A közös univerzum - csak úgy, mint a képregényes univerzum is - a különálló filmek egyes szereplőinek, helyszíneinek vagy cselekményelemeinek crossoverével alakult ki.');


ALTER TABLE `film`
  ADD PRIMARY KEY (`id`,`univerzum_id`),
  ADD KEY `fk_film_univerzum1_idx` (`univerzum_id`);

ALTER TABLE `univerzum`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `univerzum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `film`
  ADD CONSTRAINT `fk_film_univerzum1` FOREIGN KEY (`univerzum_id`) REFERENCES `univerzum` (`id`);
