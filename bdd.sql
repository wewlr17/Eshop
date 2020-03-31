
CREATE TABLE IF NOT EXISTS utilisateur
(
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(100),
    email VARCHAR(255),
    motdepasse VARCHAR(100),
    img_profile VARCHAR(255),
    role_user VARCHAR(100),
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO utilisateur (pseudo, email, motdepasse, img_profile, role_user )
 VALUES ('Pseudo', 'pseudo@mail.fr', 'mdp' ,'/image/profile1.png', 'user' );

CREATE TABLE IF NOT EXISTS commentaire
(
    commentaire_id MEDIUMINT NOT NULL AUTO_INCREMENT,
    commentaire_description VARCHAR(100),
    id_user INT,
    id_article INT,
    PRIMARY KEY (commentaire_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS articles
(
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100),
    img_article VARCHAR(255),
    description_article VARCHAR(255),
    prix INT,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO articles (title, img_article, description_article, prix)
 VALUES ('Article titre', '/image_article/article.png', 'Description.............', '10' ),
 ('Article 2', '/image_article/article2.png', 'Description.............', '20' ),
 ('Article 3', '/image_article/article3.png', 'Description.............', '30' ),
 ('Costume', '/image_article/suit.png', 'Description.............', '30' );


CREATE TABLE categorie
(
    id_categorie MEDIUMINT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255),
    PRIMARY KEY (id_categorie)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO categorie (title)
 VALUES ('vetement'),
 ('pantalon'),
 ('chaussure'),
  ('accesoire');


CREATE TABLE Lien
(
    catergorie_id INT PRIMARY KEY NOT NULL,
    article_id INT
);

CREATE TABLE panier
(
    panier_id INT PRIMARY KEY NOT NULL,
    check_p boolean
);

CREATE TABLE passage_panier_article
(
    panier_id INT,
    article_id INT
);
  


