DROP DATABASE IF EXISTS Magasin_De_Vetements;

CREATE DATABASE IF NOT EXISTS Magasin_De_Vetements;

USE Magasin_De_Vetements;

DROP TABLE IF EXISTS Clients;

CREATE TABLE Clients (
    idClients_Clients INT AUTO_INCREMENT NOT NULL,
    nom_Clients VARCHAR(60),
    prenom_Clients VARCHAR(60),
    email_Clients VARCHAR(60),
    Adresse_Clients VARCHAR(60),
    pwd_Clients VARCHAR(60),
    tel_Clients VARCHAR(60),
    PRIMARY KEY (idClients_Clients)
) ENGINE = InnoDB;

INSERT INTO
    `Clients` (
        `nom_Clients`,
        `prenom_Clients`,
        `email_Clients`,
        `Adresse_Clients`,
        `pwd_Clients`,
        `tel_Clients`
    )
VALUES
    (
        'Jean',
        'Dupont',
        'jeandupont@gmail.com',
        '5 place du general',
        '123456',
        '0102030405'
    ),
    (
        'Michel',
        'Gregoire',
        'MichelG@gmail.com',
        '59 place du general',
        '123456',
        '0102030405'
    ),
    (
        'Christophe',
        'Marcel',
        'ChristopheMarc@gmail.com',
        '54 place du general',
        '123456',
        '0102030405'
    );

DROP TABLE IF EXISTS Articles;

CREATE TABLE Articles (
    idArticles_Articles INT AUTO_INCREMENT NOT NULL,
    nomArticle_Articles VARCHAR(60),
    description_Articles VARCHAR(600),
    taille_Articles INT(60),
    ref_Articles INT(60),
    image_Articles VARCHAR(60),
    Administrateur_idAdministrateur_Administrateur INT(60),
    PRIMARY KEY (idArticles_Articles)
) ENGINE = InnoDB;

INSERT INTO
    `Articles` (
        `nomArticle_Articles`,
        `description_Articles`,
        `taille_Articles`,
        `ref_Articles`,
        `image_Articles`
    )
VALUES
    (
        'Jean Francais',
        'Un article made in 100% france',
        36,
        1,
        'Image_Jean_Français'
    ),
    (
        'Pantalon Hexa',
        'Un pentalon aux forme particuliere',
        38,
        2,
        'Image_Pantalon_Hexa'
    );

DROP TABLE IF EXISTS Panier;

CREATE TABLE Panier (
    idPanier_Panier INT AUTO_INCREMENT NOT NULL,
    idClients_Panier INT(60),
    commande_idcommande_commande INT(60),
    PRIMARY KEY (idPanier_Panier)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Categorie;

CREATE TABLE Categorie (
    idCategorie_Categorie INT AUTO_INCREMENT NOT NULL,
    nom_Categorie VARCHAR(60),
    PRIMARY KEY (idCategorie_Categorie)
) ENGINE = InnoDB;

INSERT INTO
    `Categorie`(`nom_Categorie`)
VALUES
    ('Jean'),
    ('Pantalon');

DROP TABLE IF EXISTS Administrateur;

CREATE TABLE Administrateur (
    idAdministrateur_Administrateur INT AUTO_INCREMENT NOT NULL,
    pwd_Administrateur VARCHAR(60),
    PRIMARY KEY (idAdministrateur_Administrateur)
) ENGINE = InnoDB;

INSERT INTO
    `Administrateur`(
        `idAdministrateur_Administrateur`,
        `pwd_Administrateur`
    )
VALUES
    (1, 'AdminAdmin123456789');

DROP TABLE IF EXISTS Commande;

CREATE TABLE Commande (
    idCommande_Commande INT AUTO_INCREMENT NOT NULL,
    numero_Commande INT(60),
    panier_idpanier_panier INT(60),
    PRIMARY KEY (idCommande_Commande)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Consulter;

CREATE TABLE Consulter (
    idClients_Clients INT(60) AUTO_INCREMENT NOT NULL,
    idArticles_Articles INT(60) NOT NULL,
    PRIMARY KEY (idClients_Clients, idArticles_Articles)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Passer;

CREATE TABLE Passer (
    idCommande_Commande INT(60) AUTO_INCREMENT NOT NULL,
    idClients_Clients INT(60) NOT NULL,
    PRIMARY KEY (idCommande_Commande, idClients_Clients)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Stocker;

CREATE TABLE Stocker (
    idPanier_Panier INT(60) AUTO_INCREMENT NOT NULL,
    idClients_Clients INT(60) NOT NULL,
    quantite_Stocker INT(60),
    PRIMARY KEY (idPanier_Panier, idClients_Clients)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Appartenir;

CREATE TABLE Appartenir (
    idArticles_Articles INT(60) AUTO_INCREMENT NOT NULL,
    idCategorie_Categorie INT(60) NOT NULL,
    PRIMARY KEY (idArticles_Articles, idCategorie_Categorie)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Details;

CREATE TABLE Details (
    idArticles_Articles INT(60) AUTO_INCREMENT NOT NULL,
    idCommande_Commande INT(60) NOT NULL,
    quantite_Details INT(60),
    prixUnit_Details INT(60),
    PRIMARY KEY (idArticles_Articles, idCommande_Commande)
) ENGINE = InnoDB;

ALTER TABLE
    Articles
ADD
    CONSTRAINT FK_Articles_Administrateur_idAdministrateur_Administrateur FOREIGN KEY (Administrateur_idAdministrateur_Administrateur) REFERENCES Administrateur (idAdministrateur_Administrateur);

ALTER TABLE
    Panier
ADD
    CONSTRAINT FK_Panier_commande_idcommande_commande FOREIGN KEY (commande_idcommande_commande) REFERENCES Commande (idCommande_Commande);

ALTER TABLE
    Commande
ADD
    CONSTRAINT FK_Commande_panier_idpanier_panier FOREIGN KEY (panier_idpanier_panier) REFERENCES Panier (idPanier_Panier);

ALTER TABLE
    Consulter
ADD
    CONSTRAINT FK_Consulter_idClients_Clients FOREIGN KEY (idClients_Clients) REFERENCES Clients (idClients_Clients);

ALTER TABLE
    Consulter
ADD
    CONSTRAINT FK_Consulter_idArticles_Articles FOREIGN KEY (idArticles_Articles) REFERENCES Articles (idArticles_Articles);

ALTER TABLE
    Passer
ADD
    CONSTRAINT FK_Passer_idCommande_Commande FOREIGN KEY (idCommande_Commande) REFERENCES Commande (idCommande_Commande);

ALTER TABLE
    Passer
ADD
    CONSTRAINT FK_Passer_idClients_Clients FOREIGN KEY (idClients_Clients) REFERENCES Clients (idClients_Clients);

ALTER TABLE
    Stocker
ADD
    CONSTRAINT FK_Stocker_idPanier_Panier FOREIGN KEY (idPanier_Panier) REFERENCES Panier (idPanier_Panier);

ALTER TABLE
    Stocker
ADD
    CONSTRAINT FK_Stocker_idClients_Clients FOREIGN KEY (idClients_Clients) REFERENCES Clients (idClients_Clients);

ALTER TABLE
    Appartenir
ADD
    CONSTRAINT FK_Appartenir_idArticles_Articles FOREIGN KEY (idArticles_Articles) REFERENCES Articles (idArticles_Articles);

ALTER TABLE
    Appartenir
ADD
    CONSTRAINT FK_Appartenir_idCategorie_Categorie FOREIGN KEY (idCategorie_Categorie) REFERENCES Categorie (idCategorie_Categorie);

ALTER TABLE
    Details
ADD
    CONSTRAINT FK_Details_idArticles_Articles FOREIGN KEY (idArticles_Articles) REFERENCES Articles (idArticles_Articles);

ALTER TABLE
    Details
ADD
    CONSTRAINT FK_Details_idCommande_Commande FOREIGN KEY (idCommande_Commande) REFERENCES Commande (idCommande_Commande);