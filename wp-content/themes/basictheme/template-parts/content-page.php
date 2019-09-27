<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="home_h1 container">
        <div class="row">
            <div class="col-md-9">
                <h1><?php the_field('home_title'); ?></h1>
                <h6><?php the_field('sub_title'); ?></h6>
<!--                <img src="--><?php //the_field('clients_image'); ?><!--" alt="Our clients">-->
            </div>
        </div>

    </div>
    <div class="our_clients container-fluid">
        <div class="row d-flex justify-content-center">
            <img src="<?php the_field('clients_image'); ?>" alt="Our clients">
        </div>
    </div>
    <div class="sub_title_center container">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center">
                <h5><?php the_field('sub_title_center'); ?></h5>
            </div>
        </div>
    </div>
    <div class="problem_solution container-fluid">
        <div class="container">
            <div class="row">

                    <?php
                    $query = new WP_Query( array(
                        'post_type' => 'page',
                        "post_parent" => 40,
                    ) );
                    while ( $query->have_posts() ) {
                        $query->the_post(); ?>
                <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_content(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="card-link">MEER WETEN →</a>
                            </div>
                        </div>
                </div>
                        <?php
                    }
                    ?>

            </div>
        </div>
    </div>

    <?php the_post_thumbnail(); ?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
<!-- #post-<?php the_ID(); ?> -->