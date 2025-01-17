CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_getallobjects` AS
    SELECT 
        `stovarista_srbije`.`object`.`id` AS `id`,
        `stovarista_srbije`.`object`.`order_number` AS `order_number`,
        `stovarista_srbije`.`object`.`name` AS `name`,
        `stovarista_srbije`.`object`.`description` AS `description`,
        `stovarista_srbije`.`city`.`id` AS `city_id`,
        `stovarista_srbije`.`city`.`name` AS `city_name`,
        `stovarista_srbije`.`image`.`id` AS `image_id`,
        `stovarista_srbije`.`image`.`name` AS `image_name`,
        `stovarista_srbije`.`image`.`path` AS `image_path`,
        `stovarista_srbije`.`object`.`lat` AS `lat`,
        `stovarista_srbije`.`object`.`lon` AS `lon`,
        `stovarista_srbije`.`object`.`category_id` AS `category_id`,
        `stovarista_srbije`.`category`.`name` AS `category_name`,
        `stovarista_srbije`.`object`.`address` AS `address`,
        CONCAT(`stovarista_srbije`.`object`.`address`,
                ', ',
                `stovarista_srbije`.`city`.`name`) AS `address_city`,
        `stovarista_srbije`.`vw_numberofproductsbyobject`.`number_of_products` AS `number_of_products`
    FROM
        (((((`stovarista_srbije`.`object_image`
        JOIN `stovarista_srbije`.`object` ON ((`stovarista_srbije`.`object`.`id` = `stovarista_srbije`.`object_image`.`object_id`)))
        JOIN `stovarista_srbije`.`image` ON ((`stovarista_srbije`.`image`.`id` = `stovarista_srbije`.`object_image`.`image_id`)))
        JOIN `stovarista_srbije`.`city` ON ((`stovarista_srbije`.`city`.`id` = `stovarista_srbije`.`object`.`city_id`)))
        JOIN `stovarista_srbije`.`category` ON ((`stovarista_srbije`.`category`.`id` = `stovarista_srbije`.`object`.`category_id`)))
        JOIN `stovarista_srbije`.`vw_numberofproductsbyobject` ON ((`stovarista_srbije`.`vw_numberofproductsbyobject`.`object_id` = `stovarista_srbije`.`object`.`id`)))
    WHERE
        (`stovarista_srbije`.`image`.`ordering` = 1)