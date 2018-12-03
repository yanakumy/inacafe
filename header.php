<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title();?></title>
        <!--reset css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
        <!--slicknav css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slicknav.css">
        <!--my css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">


<?php wp_head(); ?>
</head>