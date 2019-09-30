<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="home_h1 container">
        <div class="row">
            <div class="col-md-9">
                <h1><?php the_field('home_title'); ?></h1>
                <h6><?php the_field('sub_title'); ?></h6>
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
    <div class="entry-content">
        <div class="problem_solution container-fluid">
            <div class="container">
                <div class="row">
                    <?php
                    $query = new WP_Query( array(
                        'post_type' => 'page',
                        'post_parent' => 40,
                        'order' => 'ASC'
                    ) );
                    $count = 0;
                    while ( $query->have_posts() ) {
                        $query->the_post(); $count++; $card_num = "card0" . $count; ?>
                        <div class="col-6">
                                <div class="card <?php echo $card_num; ?>">
                                    <div class="card-body">
                                        <div class="card_header">
                                            <span class="card_number"><?php printf("% 02s", $count); ?></span>
                                            <h5 class="card-title"><?php the_title(); ?></h5>
                                        </div>
                                        <p class="card-text"><?php the_content(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="card-link">MEER WETEN →</a>
                                    </div>
                                </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div><!-- .problem_solution .container-fluid -->
        <div class="contact_btn container text-center">
            <a href="#" type="button" class="btn btn-lg btn-primary">OK, IK NEEM CONTACT OP</a>
        </div>
        <div class="home_2nd_title container">
            <div class="row">
                <div class="col text-center">
                    <h2><?php the_field('home_2nd_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="img_and_text container">
            <div class="row">
                <div class="image_block col-md-6">
                    <img src="<?php the_field('image_2nd_title'); ?>" alt="">
                </div>
                <div class="text_block col-md-6">
                    <p>Tools&Dies heeft als team samen meer dan 350 jaar ervaring in het op maat maken van matrijzen en gereedschappen. Onze kennis is zeer uitgebreid en onze capaciteiten zijn meer dan voldoende om te kunnen voldoen aan uw noden</p>
                    <p>Geïnteresseerd in een samenwerking?</p>
                    <span class="btn-wrap">
                        <a href="#" type="button" class="btn btn-link">ONTDEK ONZE EXPERTISE →</a>
                    </span>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="sub_title_right col">
                    <h6><?php the_field('sub_title_right'); ?></h6>
                </div>
            </div>
            <div class="row">
                <div class="review_block col">
                    <img src="<?php the_field('review_image'); ?>" alt="">
                </div>
            </div>
            <div class="contact_dark_btn row justify-content-center">
                <a href="#" type="button" class="btn btn-lg btn-outline-primary">OK, IK NEEM CONTACT OP</a>
            </div>
        </div>
    </div><!-- .entry-content -->
</article>