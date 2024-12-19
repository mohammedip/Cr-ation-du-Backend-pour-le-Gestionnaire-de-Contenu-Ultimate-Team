CREATE DATABASE Ultimate_Team;
USE Ultimate_Team

CREATE TABLE nationalitys(
nationality_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nationality VARCHAR(50),
flaag VARCHAR(255)
);
CREATE TABLE clubs(
club_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
club VARCHAR(50),
id_img INT,
FOREIGN KEY (id_img) REFERENCES  images (id_img)
);
CREATE TABLE images (
    id_img INT AUTO_INCREMENT PRIMARY KEY, 
    name_img VARCHAR(255) NOT NULL,        
    img VARCHAR(255) NOT NULL,    
);


CREATE Table goalkeepers(
    goalkeeper_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    id_img INT,
    nationality_id INT,
    club_id INT,
    posiition enum('RW','ST','CM','CB','LW','GK','CDM','LB','RB'),
    rating INT,
    diving INT,
    handling INT,
    kicking INT,
    reflexes INT,
    speed INT,
    positioning INT,
    FOREIGN KEY (nationality_id) REFERENCES nationalitys (nationality_id),
    FOREIGN KEY (club_id) REFERENCES clubs (club_id),
    FOREIGN KEY (id_img) REFERENCES  images (id_img)
);
CREATE Table players(
    player_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    id_img INT,
    nationality_id INT,
    club_id INT,
    posiition enum('RW','ST','CM1','CM2','CM3','CB1','CB2','LW','GK','CDM','LB','RB'),
    rating INT,
    pace INT,
    shooting INT,
    pasing INT,
    dribbling INT,
    defending INT,
    physical INT,
    FOREIGN KEY (nationality_id) REFERENCES nationalitys (nationality_id),
    FOREIGN KEY (club_id) REFERENCES clubs (club_id),
    FOREIGN KEY (id_img) REFERENCES images (id_img)
);

INSERT INTO clubs (club, id_img) VALUES
('Paris Saint-Germain', 63),
('Real Madrid', 62),
('FC Barcelona', 65),
('Chelsea', 62),
('Bayern Munich', 64),
('Manchester City', 65),
('Liverpool', 66),
('Juventus', 63),
('Inter Milan', 62),
('Ajax', 64);

INSERT INTO goalkeepers (nom, id_img, nationality_id, club_id, posiition, rating, diving, handling, kicking, reflexes, speed, positioning) VALUES
('Yassine Bounou', 62, 1, 22, 'GK', 88, 90, 85, 80, 89, 65, 88),
('Thibaut Courtois', 63, 2, 24, 'GK', 90, 92, 89, 85, 91, 60, 88),
('Ederson Moraes', 64, 3, 21, 'GK', 89, 88, 87, 91, 89, 63, 88),
('Keylor Navas', 65, 4, 25, 'GK', 88, 87, 86, 84, 88, 59, 86),
('Manuel Neuer', 66, 5, 23, 'GK', 91, 91, 89, 88, 90, 56, 90),
('Alisson Becker', 62, 6, 26, 'GK', 90, 89, 90, 88, 90, 57, 88),
('Marc-André ter Stegen', 63, 7, 29, 'GK', 90, 91, 87, 85, 89, 62, 89),
('Jan Oblak', 64, 8, 30, 'GK', 92, 93, 91, 83, 90, 59, 91),
('Hugo Lloris', 65, 9, 27, 'GK', 88, 85, 86, 82, 88, 60, 85),
('Gianluigi Donnarumma', 66, 10, 28, 'GK', 89, 87, 85, 86, 88, 58, 87);


INSERT INTO players (nom, id_img, nationality_id, club_id, posiition, rating, pace, shooting, pasing, dribbling, defending, physical) VALUES
('Lionel Messi', 62, 11, 21, 'RW', 93, 85, 92, 91, 95, 40, 70),
('Cristiano Ronaldo', 63, 7, 23, 'ST', 91, 87, 93, 82, 89, 40, 78),
('Neymar Jr', 64, 3, 24, 'LW', 91, 91, 84, 86, 95, 32, 61),
('Kevin De Bruyne', 65, 14, 26, 'CM3', 91, 76, 86, 93, 88, 64, 78),
('Virgil van Dijk', 66, 9, 27, 'CB1', 90, 71, 60, 71, 72, 91, 86),
('Kylian Mbappé', 62, 12, 22, 'ST', 92, 97, 88, 78, 92, 42, 76),
('Mohamed Salah', 63, 8, 29, 'RW', 91, 93, 88, 81, 90, 45, 70),
('Robert Lewandowski', 64, 10, 28, 'ST', 92, 78, 93, 82, 86, 40, 82),
('Sergio Ramos', 65, 4, 30, 'CB2', 89, 70, 60, 75, 75, 88, 85),
('Luka Modrić', 66, 13, 25, 'CM2', 89, 74, 78, 91, 90, 71, 64);


