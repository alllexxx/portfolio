<?php get_header(); ?>

    <div class="steps">
        <div class="container">
            <div class="row">
                <p>Сделать сайт для своей организации очень просто!</p>

            </div>
            <div class="row">

                <div class="col-md-2">
                    <div class="step">
                        <i class="fa fa-phone fa-3x"></i>
                        <i class="fa fa-envelope fa-3x"></i>
                        <i class="fa fa-skype fa-3x"></i>
                    </div>
                </div>
                <div class="col-md-1">
                    <i class="fa fa-arrow-right fa-5x"></i>
                </div>
                <div class="col-md-2">
                    <div class="step">
                        <i class="fa fa-commenting fa-3x"></i>

                        <i class="fa fa-pencil-square-o fa-3x"></i>
                        <i class="fa fa-list-ol  fa-3x"></i>
                    </div>

                </div>
                <div class="col-md-1">
                    <i class="fa fa-arrow-right fa-5x"></i>
                </div>
                <div class="col-md-2">
                    <div class="step">
                        <i class="fa fa-cog fa-spin fa-3x"></i>
                        <i class="fa fa-code fa-3x"></i>
                        <i class="fa fa-laptop fa-3x"></i>
                    </div>

                </div>
                <div class="col-md-1">
                    <i class="fa fa-arrow-right fa-5x"></i>
                </div>
                <div class="col-md-2">
                    <div class="step">
                        <i class="fa fa-check-square-o fa-3x"></i>
                        <i class="fa fa-thumbs-o-up fa-3x"></i>
                        <i class="fa fa-usd  fa-3x"></i>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
                        <div class="custom">
                            <?php the_date(); ?> опубликовал <strong><?php the_author(); ?></strong> в рубрике
                                <?php the_category(); ?>
                        </div>
                        <?php the_content(); ?>
                            <a href="<?php the_permalink(); ?>">Читать далее</a>
                            <?php endwhile; ?>
                                <?php endif; ?>
                </div>

                <div class="span3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Прижимаем футер к низу -->

    <div id="push"></div>
    </div>

    <?php get_footer(); ?>
