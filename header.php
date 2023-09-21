<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head();?>

</head>
<body>
<div id="wrap">
<header id="header">

<div id="header-container" class="container">
<div class="search-container">
        <?php get_search_form(); ?>
    </div>

<a href="http://localhost/wordpress/"><h1>LABB 1</h1></a>



</div>



</header>
<?php wp_nav_menu(
    array(

        'theme_location' => 'top-menu',
        'container' => 'nav',
        'container_id' => 'nav',
        'container_class' => 'row',
        'echo' => true
        
        
    )
    ) ?>
