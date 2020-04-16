CREATE TABLE IF NOT EXISTS users
(
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(255),
    password VARCHAR(100),
    img_profile VARCHAR(255),
    role_user VARCHAR(100),
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO users (name, email, password, img_profile, role_user )
 VALUES ('Pseudo', 'pseudo@mail.fr', 'mdpmdp000' ,'/images/profile1.png', 'user' ),
 ('Root', 'chezmoitest@mail.fr', '$2y$10$0g/ygex7DV84KFxmh8vA1.1D/gBaAwqHQTBltyNaIvjYz3uiultku' ,'profile1.png', 'admin');

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
    materiel VARCHAR(100),
    marque VARCHAR(100),
    couleur VARCHAR(100),
    taille VARCHAR(100),
    livraison VARCHAR(100),
    categories VARCHAR(100),
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO articles (title, img_article, description_article, prix, materiel, marque, couleur, taille, livraison, categories)
 VALUES ('Article titre', '/image_article/article.png', 'Description.............', '10', 'Tissu', 'Tommy', 'Noir Blanc', '1m81', 'Colissimo/...', 'vetement'),
('Style', '/image_article/sneakers.png', 'Description.............', '10', 'Tissu', 'Tommy', 'Noir Blanc', '1m81', 'Colissimo/...', 'chaussure'),
 ('Ville', '/image_article/shoe.png', 'Description.............', '20', 'BIO', 'MARQUE', 'COULEUR', 'TAILLE', 'LIVRAISON', 'chaussure' ),
 ('Sport', '/image_article/run.png', 'Description.............', '30', 'BIO', 'MARQUE', 'COULEUR', 'TAILLE', 'LIVRAISON', 'chaussure' ),
 ('Sweat', '/image_article/article2.png', 'Description.............', '30', '..', '..', '..', '...', '...', 'vetement' ),
 ('Sweat', '/image_article/article3.png', 'Description.............', '30', '..', '..', '..', '...', '...', 'vetement' ),
 ('Costume', '/image_article/suit.png', 'Description.............', '30', '..', '..', '..', '...', '...', 'vetement' ),
 ('Pantalon', '/image_article/fashion.png', 'Description.............', '30', '..', '..', '..', '...', '...', 'pantalon' ),
 ('Pantalon', '/image_article/jeans.png', 'Description.............', '30', '..', '..', '..', '...', '...', 'pantalon' ),
 ('Pantalon', '/image_article/pants.png', 'Description.............', '30', '..', '..', '..', '...', '...', 'pantalon' ),
 ('Pantalon', '/image_article/pants2.png', 'Description.............', '30', '..', '..', '..', '...', '...', 'pantalon' );

CREATE TABLE IF NOT EXISTS collection_articles
(
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    titre VARCHAR(100),
    categories_id INT,
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO collection_articles (titre, categories_id)
    VALUES ('Collection 1', '2'),
        ('Collection 2', '3');

CREATE TABLE categories
(
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    titre VARCHAR(100),
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO categories (titre)
 VALUES ('vetement'),
 ('pantalon'),
 ('chaussure'),
  ('accesoire');

-- CREATE TABLE Lien
-- (
--     catergorie_id INT PRIMARY KEY NOT NULL,
--     article_id INT
-- );

CREATE TABLE IF NOT EXISTS shops
(
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    id_article INT,
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP,
    PRIMARY KEY (id)
    -- check_p boolean,
    -- titre VARCHAR(100),
    -- description_article VARCHAR(100),
    -- prix INT,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO shops (id_article)
 VALUES ('1'), 
 ('2'), 
 ('4');

-- CREATE TABLE passage_panier_article
-- (
--     panier_id INT,
--     article_id INT
-- );
  


