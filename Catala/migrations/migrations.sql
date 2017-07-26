
-- Poner aquí el nombre de la base de datos
use ;

-- Menú superior con contenidos

ALTER TABLE `CapMenu` 
ADD COLUMN `Contingut` LONGTEXT NULL AFTER `IdSite`;
