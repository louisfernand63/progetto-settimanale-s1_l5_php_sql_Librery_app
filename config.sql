CREATE DATABASE IF NOT EXISTS `gestione_libreria`;

USE `gestione_libreria`;

CREATE TABLE IF NOT EXISTS `libri` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `titolo` VARCHAR(255) NOT NULL,
    `autore` VARCHAR(255) NOT NULL,
    `anno_pubblicazione` INT NOT NULL,
    `genere` VARCHAR(100) NOT NULL,
    `imaggine` VARCHAR(255) NOT NULL
);

/*DA COMPLETARE*/