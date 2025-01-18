CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_getallimages` AS
    SELECT 
        `stovarista_srbije`.`object_image`.`object_id` AS `object_id`,
        `stovarista_srbije`.`object_image`.`image_id` AS `image_id`,
        `stovarista_srbije`.`object`.`order_number` AS `object_order_number`,
        `stovarista_srbije`.`image`.`path` AS `image_path`,
        `stovarista_srbije`.`image`.`ordering` AS `image_ordering`
    FROM
        ((`stovarista_srbije`.`object_image`
        JOIN `stovarista_srbije`.`object` ON ((`stovarista_srbije`.`object`.`id` = `stovarista_srbije`.`object_image`.`object_id`)))
        JOIN `stovarista_srbije`.`image` ON ((`stovarista_srbije`.`image`.`id` = `stovarista_srbije`.`object_image`.`image_id`)))
    ORDER BY `stovarista_srbije`.`image`.`ordering`