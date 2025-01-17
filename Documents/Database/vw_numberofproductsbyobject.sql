CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_numberofproductsbyobject` AS
    SELECT 
        `stovarista_srbije`.`object`.`id` AS `object_id`,
        COUNT(`stovarista_srbije`.`object_product`.`id`) AS `number_of_products`
    FROM
        (`stovarista_srbije`.`object`
        JOIN `stovarista_srbije`.`object_product` ON ((`stovarista_srbije`.`object_product`.`object_id` = `stovarista_srbije`.`object`.`id`)))
    GROUP BY `stovarista_srbije`.`object`.`id`