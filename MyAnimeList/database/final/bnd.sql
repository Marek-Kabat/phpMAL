-- Entry inspired by "Cowboy Bebop"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('23', 'Follow the adventures of the eclectic crew of the spaceship Bebop as they travel through the galaxy, hunting down bounties and confronting their pasts. Led by the laid-back Spike Spiegel, the crew navigates a world filled with crime, betrayal, and existential crises.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('23', '24', '26');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('23', 'Cowboy Bebop', '', '23', '23');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('23', '2'), ('23', '7'), ('23', '8'); -- Action, Mystery, and Slice of Life genres assigned

-- Entry inspired by "Bleach"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('24', 'Ichigo Kurosaki, a teenager with the ability to see ghosts, becomes a Soul Reaper—a protector of the living world against evil spirits known as Hollows. With his newfound powers, Ichigo battles Hollows and uncovers a world of intrigue and danger within the Soul Society.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('24', '24', '366');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('24', 'Bleach', '', '24', '24');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('24', '2'), ('24', '10'); -- Action and Supernatural genres assigned

-- Entry inspired by "Gurren Lagann"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('25', 'In a world ruled by tyrannical Beastmen who force humans to live underground, Simon and Kamina dream of reaching the surface and living freely. Using a giant robot called Gurren Lagann, they lead a rebellion against the Beastmen and embark on an epic journey to claim their destiny.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('25', '24', '27');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('25', 'Gurren Lagann', '', '25', '25');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('25', '2'), ('25', '3'), ('25', '10'); -- Action, Adventure, and Supernatural genres assigned

-- Entry inspired by "Princess Mononoke"
INSERT INTO `marekkabat`.`Description` (`idDescription`, `Description`) 
VALUES ('26', 'Ashitaka, a young prince cursed by a demon boar, sets out to find a cure and restore peace between the forest gods and the humans who threaten their existence. Along the way, he encounters San, a human raised by wolves, and becomes embroiled in a conflict that could determine the fate of the natural world.');

INSERT INTO `marekkabat`.`HowLong` (`idHowLong`, `HowLong`, `Eps`) 
VALUES ('26', '24', '1');

INSERT INTO `marekkabat`.`Anime` (`idAnime`, `Name`, `Picture`, `Description_idDescription`, `HowLong_idHowLong`) 
VALUES ('26', 'Princess Mononoke', '', '26', '26');

-- Adding genres for the new anime
INSERT INTO `marekkabat`.`Anime_has_Genre` (`Anime_idAnime`, `Genre_idGenre`) 
VALUES ('26', '7'), ('26', '10'); -- Mystery and Supernatural genres assigned
