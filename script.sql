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
    posiition enum('RW','ST','CM','CB','LW','GK','CDM','LB','RB'),
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

INSERT INTO nationalitys (nationality, flaag) VALUES
('Argentina', 'https://cdn.sofifa.net/flags/ar.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('Belgium', 'https://cdn.sofifa.net/flags/be.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Netherlands', 'https://cdn.sofifa.net/flags/nl.png'),
('Germany', 'https://cdn.sofifa.net/flags/de.png'),
('Brazil', 'https://cdn.sofifa.net/flags/br.png'),
('Egypt', 'https://cdn.sofifa.net/flags/eg.png'),
('Norway', 'https://cdn.sofifa.net/flags/no.png'),
('Croatia', 'https://cdn.sofifa.net/flags/hr.png'),
('Canada', 'https://cdn.sofifa.net/flags/ca.png'),
('Slovenia', 'https://cdn.sofifa.net/flags/si.png'),
('England', 'https://cdn.sofifa.net/flags/gb-eng.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Italy', 'https://cdn.sofifa.net/flags/it.png');

INSERT INTO players (
    nom, id_img, position, id_img, flag, club, logo, rating, pace, shooting, passing, dribbling, defending, physical
) VALUES
    ('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW', 'Argentina', 'https://cdn.sofifa.net/flags/ar.png', 'Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png', 93, 85, 92, 91, 95, 35, 65),
    ('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST', 'Portugal', 'https://cdn.sofifa.net/flags/pt.png', 'Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png', 91, 84, 94, 82, 87, 34, 77),
    ('Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM', 'Belgium', 'https://cdn.sofifa.net/flags/be.png', 'Manchester City', 'https://cdn.sofifa.net/players/239/085/25_120.png', 91, 74, 86, 93, 88, 64, 78),
    ('Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', 'ST', 'France', 'https://cdn.sofifa.net/flags/fr.png', 'Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png', 92, 97, 89, 80, 92, 39, 77),
    ('Virgil van Dijk', 'https://cdn.sofifa.net/players/203/376/25_120.png', 'CB', 'Netherlands', 'https://cdn.sofifa.net/flags/nl.png', 'Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png', 90, 75, 60, 70, 72, 92, 86),
    ('Antonio Rudiger', 'https://cdn.sofifa.net/players/205/452/25_120.png', 'CB', 'Germany', 'https://cdn.sofifa.net/flags/de.png', 'Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png', 88, 82, 55, 73, 70, 86, 86),
    ('Neymar Jr', 'https://cdn.sofifa.net/players/190/871/25_120.png', 'LW', 'Brazil', 'https://cdn.sofifa.net/flags/br.png', 'Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png', 90, 91, 83, 86, 94, 37, 61),
    ('Mohamed Salah', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'RW', 'Egypt', 'https://cdn.sofifa.net/flags/eg.png', 'Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png', 89, 93, 87, 81, 90, 45, 75),
    ('Joshua Kimmich', 'https://cdn.sofifa.net/players/212/622/25_120.png', 'CM', 'Germany', 'https://cdn.sofifa.net/flags/de.png', 'Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png', 89, 70, 75, 88, 84, 84, 81),
    ('Jan Oblak', 'https://cdn.sofifa.net/players/200/389/25_120.png', 'GK', 'Slovenia', 'https://cdn.sofifa.net/flags/si.png', 'Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png', 91, NULL, NULL, NULL, NULL, NULL, NULL);
