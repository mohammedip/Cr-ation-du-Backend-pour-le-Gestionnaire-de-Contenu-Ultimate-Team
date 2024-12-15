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
logo VARCHAR(255)
);
CREATE TABLE positions(
position_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
posiition enum('RW','ST','CM','CB','LW','GK','CDM','LB','RB')
);
CREATE TABLE goalkeepers_statistiques(
goalkeeper_statistiques_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
rating INT,
diving INT,
handling INT,
kicking INT,
reflexes INT,
speed INT,
positioning INT
);
CREATE TABLE players_statistiques(
player_statistiques_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
rating INT,
pace INT,
shooting INT,
pasing INT,
dribbling INT,
defending INT,
physical INT
);
CREATE Table goalkeepers(
    goalkeeper_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    photo VARCHAR(255),
    goalkeeper_statistiques_id INT,
    nationality_id INT,
    club_id INT,
    position_id INT,
    FOREIGN KEY ( goalkeeper_statistiques_id) REFERENCES goalkeepers_statistiques (goalkeeper_statistiques_id),
    FOREIGN KEY (nationality_id) REFERENCES nationalitys (nationality_id),
    FOREIGN KEY (club_id) REFERENCES clubs (club_id),
    FOREIGN KEY (position_id) REFERENCES positions (position_id)
);
CREATE Table players(
    player_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    photo VARCHAR(255),
    player_statistiques_id INT,
    nationality_id INT,
    club_id INT,
    position_id INT,
    FOREIGN KEY (player_statistiques_id) REFERENCES players_statistiques (player_statistiques_id),
    FOREIGN KEY (nationality_id) REFERENCES nationalitys (nationality_id),
    FOREIGN KEY (club_id) REFERENCES clubs (club_id),
    FOREIGN KEY (position_id) REFERENCES positions (position_id)
);
