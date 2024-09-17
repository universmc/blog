<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>index</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
<?php
if (has_nav_menu('navBar')) :
        wp_nav_menu(array(
            'theme_location' => 'navBar',
            'container_class' => 'menu-items'
));
    endif;
?>
</header>

