CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_projectkrizanproducts` AS
    SELECT 
        `stovarista_srbije`.`product`.`id` AS `id`,
        `stovarista_srbije`.`product`.`name` AS `name`,
        `stovarista_srbije`.`product`.`description` AS `description`,
        `stovarista_srbije`.`product`.`product_type_id` AS `product_type_id`,
        `stovarista_srbije`.`product`.`order_id` AS `order_id`
    FROM
        `stovarista_srbije`.`product`
    WHERE
        (`stovarista_srbije`.`product`.`is_project_krizan_product` = 1)
    ORDER BY `stovarista_srbije`.`product`.`ordering`