CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_getallproducttypes` AS
    SELECT 
        `stovarista_srbije`.`product_type`.`id` AS `product_type_id`,
        `stovarista_srbije`.`product_type`.`name` AS `product_type_name`
    FROM
        `stovarista_srbije`.`product_type`