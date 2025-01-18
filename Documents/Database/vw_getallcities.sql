CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_getallcities` AS
    SELECT 
        `stovarista_srbije`.`city`.`id` AS `id`,
        `stovarista_srbije`.`city`.`name` AS `name`,
        `stovarista_srbije`.`city`.`lat` AS `lat`,
        `stovarista_srbije`.`city`.`lon` AS `lon`,
        `stovarista_srbije`.`region`.`name` AS `region`,
        `stovarista_srbije`.`city`.`order_id` AS `order_id`
    FROM
        (`stovarista_srbije`.`city`
        JOIN `stovarista_srbije`.`region` ON ((`stovarista_srbije`.`region`.`id` = `stovarista_srbije`.`city`.`region_id`)))
    ORDER BY `stovarista_srbije`.`city`.`ordering`