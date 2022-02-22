CREATE TABLE users (
    login VARCHAR(40) NOT NULL CHECK (login <> ''),
    password VARCHAR(100) NOT NULL CHECK (password <> ''),
    nom VARCHAR(40) NOT NULL CHECK (nom <> ''),
    prenom VARCHAR(40) NOT NULL CHECK (prenom <> '')
);
ALTER TABLE users
    ADD CONSTRAINT users_pkey PRIMARY KEY (login);


