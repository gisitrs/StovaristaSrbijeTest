CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_getallproducttypes` AS
    SELECT 
        `stovarista_srbije`.`product_type`.`id` AS `product_type_id`,
        `stovarista_srbije`.`product_type`.`name` AS `product_type_name`,
        `stovarista_srbije`.`product_type`.`order_id` AS `order_id`
    FROM
        `stovarista_srbije`.`product_type`
    ORDER BY `stovarista_srbije`.`product_type`.`ordering`