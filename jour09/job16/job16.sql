SELECT salles.nom, salles.capacite, etage.nom FROM salles INNER JOIN etage ON id_etage=etage.id ORDER BY capacite DESC LIMIT 1; 

SELECT MAX(`salles`.`capacite`)as 'capacite', `salles`.`nom` as "Biggest Room", `etage`.`nom` FROM `salles` INNER JOIN `etage` ON `salles`.`id_etage` = `etage`.`id`;