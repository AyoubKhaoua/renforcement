CREATE Table Users (
    userId INT PRIMARY key,
    name VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(10)
);

CREATE tabel Members (
    userId int PRIMARY key,
    nbrLivre int,
    Foreign Key (userId) REFERENCES User (userId)
);

CREATE Table Adherents (
    userId int PRIMARY key,
    hourOfWork int,
    Foreign Key (userId) REFERENCES User (userId)
);

CREATE Table Bibliothécaire (
    userId int PRIMARY KEY,
    numeroBadge int,
    Foreign Key (userId) REFERENCES User (userId)
);

CREATE TABLE Livres (
    livreId int PRIMARY key,
    titre VARCHAR(50),
    author VARCHAR(20)
);

CREATE Table Categories (
    categorieId int PRIMARY key,
    name VARCHAR(50),
    type VARCHAR(50)
)
create table Emprunts (
    empruntId int PRIMARY key,
    livreId int not NULL,
    categorieId int not null,
    Foreign Key (livreId) REFERENCES Livre (livreId),
    Foreign Key (categorieId) REFERENCES Categorie (categorieId)
);