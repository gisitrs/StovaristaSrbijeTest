CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `stovarista_srbije`.`vw_getlistofkrizanproductsbyobject` AS
    SELECT 
        `stovarista_srbije`.`object`.`id` AS `object_id`,
        CONCAT('Križan proizvodi: ',
                GROUP_CONCAT(DISTINCT stovarista_srbije.product.name
                    SEPARATOR ',')) AS list_of_products
    FROM
        (((stovarista_srbije.object
        JOIN stovarista_srbije.object_product ON ((stovarista_srbije.object_product.object_id = stovarista_srbije.object.id)))
        JOIN stovarista_srbije.product ON ((stovarista_srbije.product.id = stovarista_srbije.object_product.product_id)))
        JOIN stovarista_srbije.product_type ON ((stovarista_srbije.product_type.id = stovarista_srbije.product.product_type_id)))
    WHERE
        (stovarista_srbije.product.is_project_krizan_product = 1)
    GROUP BY stovarista_srbije.object.id