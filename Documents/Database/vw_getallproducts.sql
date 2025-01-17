CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_getallproducts` AS
    SELECT 
        `stovarista_srbije`.`product`.`id` AS `id`,
        `stovarista_srbije`.`product`.`name` AS `product_name`,
        `stovarista_srbije`.`product_type`.`id` AS `product_type_id`,
        `stovarista_srbije`.`product_type`.`name` AS `product_type_name`
    FROM
        (`stovarista_srbije`.`product`
        JOIN `stovarista_srbije`.`product_type` ON ((`stovarista_srbije`.`product_type`.`id` = `stovarista_srbije`.`product`.`product_type_id`)))