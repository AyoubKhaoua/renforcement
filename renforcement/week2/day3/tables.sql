CREATE DATABASE aa;

use aa;

CREATE Table utilisateurs (
    user_id int PRIMARY key AUTO_INCREMENT not NULL,
    nom VARCHAR(50) not null,
    email VARCHAR(20) not NULL,
    type ENUM('client', 'livreur') NOT NULL,
);

CREATE table restaurants (
    restaurant_id int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) not NULL,
    ville VARCHAR(30) NOT NULL,
    note_moy FLOAT NOT NULL
);

CREATE Table plats (
    plat_id int PRIMARY KEY not NULL,
    restaurant_id int PRIMARY KEY,
    nom VARCHAR(50) not NULL,
    prix DECIMAL not NULL,
    categorie VARCHAR(50),
    Foreign Key (restaurant_id) REFERENCES restaurants (restaurant_id)
);

CREATE Table commandes (
    commande_id int PRIMARY KEY AUTO_INCREMENT not NULL,
    client_id INT PRIMARY KEY,
    livreur_id INT PRIMARY KEY,
    restaurant_id INT PRIMARY KEY,
    statut ENUM('En attente ', 'Paiement'),
    total DECIMAL not NULL,
    Foreign Key (client_id) REFERENCES utilisateurs (client_id),
    Foreign Key (livreur_id) REFERENCES utilisateurs (livreur_id),
    Foreign Key (restaurant_id) REFERENCES restaurants (restaurant_id),
);

CREATE Table lignes_commande (
    id int PRIMARY KEY AUTO_INCREMENT not NULL,
    commande_id int PRIMARY KEY,
    plat_id int PRIMARY KEY,
    quantite int not NULL,
    prix_unit DECIMAL not NULL,
    Foreign Key (commande_id) REFERENCES commandes (commande_id),
    Foreign Key (plat_id) REFERENCES plats (plat_id),
);

CREATE Table notations (
    id int PRIMARY KEY AUTO_INCREMENT not NULL,
    commande_id int PRIMARY Key,
    note int NOT NULL,
    commentaire TEXT not null,
    Foreign Key (commande_id) REFERENCES commandes (commande_id)
)