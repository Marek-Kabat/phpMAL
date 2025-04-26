-- Entry inspired by "Attack on Titan"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('1', 'In a world where humanity resides within massive walled cities to protect against giant humanoid creatures known as Titans, young soldier Eren Yeager vows to eradicate the Titans after witnessing their destruction firsthand. Joining the elite Survey Corps, Eren, along with his friends Mikasa and Armin, battles Titans while uncovering dark secrets about the world they inhabit.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('1', '24', '75');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('1', 'Attack on Titan', '', '1', '1');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('1', '2'), ('1', '1'), ('1', '7'); -- Action, Drama, and Mystery genres assigned

-- Entry inspired by "One Punch Man"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('2', 'Saitama, a hero for fun, has become so powerful that he can defeat any opponent with a single punch. However, this has left him feeling empty and bored, as he yearns for a challenge worthy of his abilities. Alongside his cyborg disciple Genos, Saitama seeks out strong opponents while navigating the Hero Association.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('2', '24', '24');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('2', 'One Punch Man', '', '2', '2');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('2', '2'), ('2', '4'), ('2', '7'); -- Action, Comedy, and Mystery genres assigned

-- Entry inspired by "Sword Art Online"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('3', 'In the near future, players immerse themselves in virtual reality MMORPGs. When the highly anticipated game "Sword Art Online" traps players in the virtual world, they must fight to clear all 100 levels to escape. Kirito, a skilled player, teams up with other gamers to survive and uncover the truth behind their imprisonment.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('3', '24', '25');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('3', 'Sword Art Online', '', '3', '3');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('3', '2'), ('3', '6'), ('3', '9'); -- Action, Romance, and Sci-Fi genres assigned

-- Entry inspired by "Naruto"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('4', 'Naruto Uzumaki, a young ninja with dreams of becoming the strongest ninja and leader of his village, embarks on a journey of self-discovery and redemption. Along the way, Naruto faces formidable foes, forms lasting friendships, and seeks to protect his village from threats.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('4', '24', '220');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('4', 'Naruto', '', '4', '4');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('4', '2'), ('4', '3'), ('4', '7'); -- Action, Adventure, and Mystery genres assigned

-- Entry inspired by "Demon Slayer"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('5', 'Ever since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamado\'s shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life. One day, Tanjirou decides to go down to the local village to make a little money selling charcoal. On his way back, night falls, forcing Tanjirou to take shelter in the house of a strange man, who warns him of the existence of flesh-eating demons that lurk in the woods at night.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('5', '23', '26');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('5', 'Demon Slayer', '', '5', '5');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('5', '2'), ('5', '7'); -- Action and Mystery genres assigned

-- Entry inspired by "Neon Genesis Evangelion"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('6', 'In a post-apocalyptic world, teenage pilot Shinji Ikari is recruited by the shadowy organization NERV to pilot a giant bio-mechanical robot called an Evangelion. As Shinji battles monstrous beings known as Angels, he grapples with his own identity, complex relationships, and the fate of humanity.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('6', '24', '26');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('6', 'Eva Genesis Evangelion', '', '6', '6');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('6', '1'), ('6', '7'), ('6', '9'); -- Drama, Mystery, and Sci-Fi genres assigned


