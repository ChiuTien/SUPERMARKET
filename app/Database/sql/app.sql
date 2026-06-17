PRAGMA foreign_keys = ON;
CREATE TABLE produits(  
    id          INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    designation TEXT NOT NULL,
    prix        REAL,
    stock       INTEGER
);

CREATE TABLE caisses(
    id  INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    nom TEXT
);

CREATE TABLE achats(
    id          INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    date        TEXT,
    caisse_id   INTEGER,

    Foreign Key (caisse_id) REFERENCES caisses(id)
);

CREATE TABLE achatProduits(
    id          INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    produit_id  INTEGER NOT NULL,
    achat_id    INTEGER NOT NULL,
    observation TEXT,

    Foreign Key (produit_id) REFERENCES produits(id),
    Foreign Key (achat_id) REFERENCES achats(id)
);