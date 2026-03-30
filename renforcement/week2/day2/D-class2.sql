CREATE TABLE Users (
    user_id int PRIMARY KEY,
    email VARCHAR(100),
    password VARCHAR(255),
);

CREATE TABLE Profiles (
    profile_id int PRIMARY KEY,
    name VARCHAR(25),
    prenom VARCHAR(25),
    age INT,
    gender string,
    user_id INT UNIQUE,
    FOREIGN KEY (user_id) REFERENCES Users (user_id) ON DELETE CASCADE
);

CREATE TABLE Competence (
    competence_id int PRIMARY KEY,
    profile_id INT,
    competence_name VARCHAR(50),
    FOREIGN KEY (profile_id) REFERENCES Profiles (profile_id) ON DELETE CASCADE
);

CREATE TABLE Experiences (
    experience_id int PRIMARY KEY,
    profile_id int,
    nameEntreprise VARCHAR(50),
    dureeTraviler string,
    FOREIGN KEY (profile_id) REFERENCES Profiles (profile_id) ON DELETE CASCADE
);