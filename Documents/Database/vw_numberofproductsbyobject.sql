CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_numberofproductsbyobject` AS
    SELECT 
        `stovarista_srbije`.`object`.`id` AS `object_id`,
        GROUP_CONCAT(DISTINCT `stovarista_srbije`.`product_type`.`name`
            SEPARATOR ',') AS `list_of_products`,
        COUNT(DISTINCT `stovarista_srbije`.`product_type`.`name`) AS `number_of_products`
    FROM
        (((`stovarista_srbije`.`object`
        JOIN `stovarista_srbije`.`object_product` ON ((`stovarista_srbije`.`object_product`.`object_id` = `stovarista_srbije`.`object`.`id`)))
        JOIN `stovarista_srbije`.`product` ON ((`stovarista_srbije`.`product`.`id` = `stovarista_srbije`.`object_product`.`product_id`)))
        JOIN `stovarista_srbije`.`product_type` ON ((`stovarista_srbije`.`product_type`.`id` = `stovarista_srbije`.`product`.`product_type_id`)))
    GROUP BY `stovarista_srbije`.`object`.`id`