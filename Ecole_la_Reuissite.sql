CREATE DATABASE Ecole_de_la_Reussite;
USE Ecole_de_la_Reussite;
CREATE TABLE employe
(
ID int NOT NULL,
passeword varchar(20) NOT NULL,
nom varchar(80) NOT NULL,
prenom varchar(80) NOT NULL,
numero varchar(80) NOT NULL,
email varchar(80) NOT NULL,
adresse varchar(80) NOT NULL,
profession varchar(80) NOT NULL,
nationalite varchar(80) NOT NULL,
date_naissance date NOT NULL,
lieu_naissance varchar(80) NOT NULL,
date_soumission date NOT NULL,
sexe varchar(80) NOT NULL
);
CREATE TABLE liste_employe
(
ID int NOT NULL,
passeword varchar(20) NOT NULL,
nom varchar(80) NOT NULL,
prenom varchar(80) NOT NULL,
numero varchar(80) NOT NULL,
email varchar(80) NOT NULL,
adresse varchar(80) NOT NULL,
profession varchar(80) NOT NULL,
nationalite varchar(80) NOT NULL,
date_naissance date NOT NULL,
lieu_naissance varchar(80) NOT NULL,
date_soumission date NOT NULL,
sexe varchar(80) NOT NULL,
supprimer varchar(80) NOT NULL,
modifier varchar(80) NOT NULL
);