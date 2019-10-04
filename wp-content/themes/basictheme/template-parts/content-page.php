<?php if ( is_front_page() ): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="home_h1 container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-8">
                <h1 class="tk-orpheuspro"><?php the_field('home_title'); ?></h1>
                <h6><?php the_field('sub_title'); ?></h6>
            </div>
        </div>
    </div>
    <div class="happy_clients container">
        <div class="row">
            <div class="happy_clients_col">
                <img src="<?php the_field('happy_client_1'); ?>" alt="Happy client 1">
                <img src="<?php the_field('happy_client_2'); ?>" alt="Happy client 2">
                <img src="<?php the_field('happy_client_3'); ?>" alt="Happy client 3">
                <img src="<?php the_field('happy_client_4'); ?>" alt="Happy client 4">
                <img src="<?php the_field('happy_client_5'); ?>" alt="Happy client 5">
            </div>
        </div>
    </div>
<!--    <div class="our_clients container-fluid">
        <div class="row d-flex justify-content-center">
            <img src="<?php /*the_field('clients_image'); */?>" alt="Our clients">
        </div>
    </div>-->
    <div class="sub_title_center container">
        <div class="row">
<!--            <div class="offset-lg-3 col-lg-6 col-md-12 text-center">-->
            <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-2 col-sm-8 offset-1 col-10 text-center">
                <h5><?php the_field('sub_title_center'); ?></h5>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <div class="problem_solution container-fluid">
            <div class="container">
                <div class="sub_page_columns row">
                    <?php
                    $query = new WP_Query( array(
                        'post_type' => 'page',
                        'post_parent' => 40,
                        'order' => 'ASC'
                    ) );
                    $count = 0;
                    while ( $query->have_posts() ) {
                        $query->the_post(); $count++; $card_num = "card0" . $count; ?>
                        <div class="col-lg-6 col-md-12">
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
            <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-primary">OK, IK NEEM CONTACT OP</a>
        </div>
        <div class="home_2nd_title container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="tk-orpheuspro"><?php the_field('home_2nd_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="img_and_text container">
            <div class="row">
                <div class="image_block col-lg-6 col-md-6 col-sm-12">
                    <img src="<?php the_field('image_2nd_title'); ?>" alt="">
                </div>
                <div class="text_block col-lg-6 col-md-6 col-sm-12">
                    <p>Tools&Dies heeft als team samen meer dan 350 jaar ervaring in het op maat maken van matrijzen en gereedschappen. Onze kennis is zeer uitgebreid en onze capaciteiten zijn meer dan voldoende om te kunnen voldoen aan uw noden</p>
                    <p>Geïnteresseerd in een samenwerking?</p>
                    <span class="btn-wrap">
                        <a href="<?php the_field('link_to_expertise'); ?>" type="" class="btn btn-link">ONTDEK ONZE EXPERTISE →</a>
                    </span>
<!--                    <hr>-->
                </div>
            </div>
            <div class="row">
                <div class="sub_title_right col">
                    <h6><?php the_field('sub_title_right'); ?></h6>
                </div>
            </div>
            <div class="row">
                <div class="review_block col-lg-12">
                    <img class="img_desktop" src="<?php the_field('review_image'); ?>" alt="">
                    <img class="img_mobile" src="<?php the_field('review_image_mobile'); ?>" alt="">
                </div>
            </div>
            <div class="contact_dark_btn row justify-content-center">
                <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-outline-primary">OK, IK NEEM CONTACT OP</a>
            </div>
        </div>
    </div><!-- .entry-content -->
</article>
<?php endif;