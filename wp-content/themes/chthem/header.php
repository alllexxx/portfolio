<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Шаблон для WordPress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Имя автора">

    <meta content="Название сайта" />
    <meta content="website" />
    <meta content="Ссылка на изображение логотипа" />

    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
 <script src="./js/html5shiv.js"></script>
 <![endif]-->

</head>

<body>
    <div id="wrap">
        <!-- Фиксированная респонсив навигация -->
        <header>

            <div class="navbar navbar-fixed-top">

                <div class="navbar-inner">

                    <div class="container">


                       <div class="mainmenu navbar navbar-default">

                           <div class="collapse navbar-collapse">

                                <?php
                                     wp_nav_menu( array(
                                     'menu' => 'headMenu',
                                     'depth' => 2,
                                     'container' => false,
                                     'menu_class' => 'nav',
                                     'walker' => new wp_bootstrap_navwalker())
                                     );
                                ?>

                           </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
