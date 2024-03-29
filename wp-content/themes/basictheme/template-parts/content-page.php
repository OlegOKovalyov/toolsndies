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
    <div class="sub_title_center container">
        <div class="row">
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
            <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-primary">OK, IK NEEM CONTACT OP →</a>
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
                    <hr>
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


if (is_page('contact')): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="contact_h1_form container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <h1 class="tk-orpheuspro"><?php the_field('contact_title'); ?></h1>
                <h6><?php the_field('sub_title'); ?></h6>
                <div class="looking_else">
                    <h4>WAS U OP ZOEK NAAR IETS ANDERS?</h4>
                    <p>Wilt u een offerte aanvragen voor fijnmechanisch stukwerk?</p>
                    <a href="<?php the_field('link_to_expertise'); ?>" type="" class="btn_question btn btn-link">VRAAG HIER EEN OFFERTE AAN →</a>
                </div>
                <div class="looking_job">
                    <p>Ben je op zoek naar een (vakantie)job of stageplek?</p>
                    <a href="<?php the_field('link_to_expertise'); ?>" type="" class="btn_question btn btn-link">BEZOEK ONZE JOBS PAGINA →</a>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-6 col-md-12">
                <?php echo do_shortcode( '[contact-form-7 id="156" title="Your Question"]' ); ?>
            </div>
        </div>
    </div>
    <div class="mail_logo_phone container">
        <div class="row">
            <div class="mail_col col-12 col-md-4">
                <div class="email">
                    <?php $value = basic_get_theme_option( 'email' ); echo $value; ?>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="addr_tel_fax col-12 col-md-4">
                <div class="address">
                    <div><?php $value = basic_get_theme_option( 'addr1' ); echo $value; ?></div>
                    <div><?php $value = basic_get_theme_option( 'addr2' ); echo $value; ?></div>
                </div>
                <div class="phone">
                    <div><span>Tel:<?php $value = basic_get_theme_option( 'phone' ); echo $value; ?></span></div>
                    <div><span>Fax:<?php $value = basic_get_theme_option( 'fax' ); echo $value; ?></span></div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endif;


if (is_page('re-engineering-aanmaak')): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="re-engineer_h1 container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <h1 class="tk-orpheuspro"><?php the_field('reengineering_title'); ?></h1>
            </div>
        </div>
    </div>
    <div class="design_product container">
        <div class="row">
            <div class="text_block col-lg-6">
                <div class="text_block_wrap">
                    <!--                <h4>--><?php //the_field('text_block_title'); ?><!--</h4>-->
                    <h4>Van een slim ontwerp naar een afgewerkt product</h4>
                    <p>Alvorens we starten met ontwikkelen, is het ontwerp de basis van alles. Daarom dat we steeds starten met de creatie van een optimaal ontwerp in overleg met de klant, waarbij de functionele vereisten steeds prioritair blijven.
                        <br><br>
                        Vervolgens kunnen onze ontwerpers en tekenaars a.d.h.v het geïntegreerde CAD/CAM-systeem ontwerpen realiseren die onze machines foutloos aansturen. Na een uitgebreide testing van de matrijs bent u als klant vertrekkensklaar!
                    </p>
                    <!--                <a href="--><?php //the_field('link_to_expertise'); ?><!--" type="" class="btn_question btn btn-link">BEZOEK ONZE JOBS PAGINA →</a>-->
                </div>
                <h6><?php the_field('subtitle'); ?></h6>
            </div>
            <div class="img_block col-lg-6">
                <img src="<?php bloginfo('template_url'); ?>/images/machine1.png" alt="">
            </div>
        </div>
    </div>
    <div class="our_advantages container-fluid">
        <div class="row">
            <div class="our_advantages_wrap container">
                <div class="row">
                    <div class="left_column col-lg-6">
                        <div class="card card01">
                            <div class="card-body">
                                <div class="card_header">
                                    <span class="card_number">01</span>
                                    <span class="card-title">Wij luisteren</span>
                                </div>
                                <p class="card-text">Wij luisteren naar al uw noden en analyseren ze in de vorm van een Correcte Project Omschrijving (CPO). Indien de CPO nog niet bestaat, kunnen wij u daarin adviseren.</p>
                            </div>
                        </div>
                        <div class="card card03">
                            <div class="card-body">
                                <div class="card_header">
                                    <span class="card_number">03</span>
                                    <span class="card-title">Wij bouwen</span>
                                </div>
                                <p class="card-text">Met een definitieve garantie op de kostprijs van uw matrijs, zetten we alles op alles om uw matrijs effectief te creëeren. Dankzij duidelijke afspraken is onze communicatie vlot en efficiënt.</p>
                            </div>
                        </div>
                        <div class="card card05">
                            <div class="card-body">
                                <div class="card_header">
                                    <span class="card_number">05</span>
                                    <span class="card-title">Wij onderhouden</span>
                                </div>
                                <p class="card-text">Eens u van start bent, kunnen we samen de beste frequentie van uw onderhoud bepalen om pro-actief een maximaal rendement te bekomen. Zo bent u zeker over de toekomst</p>
                            </div>
                        </div>
                    </div>
                    <div class="right_column col-lg-6">
                        <div class="card card02">
                            <div class="card-body">
                                <div class="card_header">
                                    <span class="card_number">02</span>
                                    <span class="card-title">Wij ontwerpen</span>
                                </div>
                                <p class="card-text">In de ontwerpfase baseren we ons op de CPO en zorgen we voor wekelijkse terugkoppelingen, opdat u mee bent in het proces. De fase eindigt na een finale goedkeuring van het ontwerp.</p>
                            </div>
                        </div>
                        <div class="card card04">
                            <div class="card-body">
                                <div class="card_header">
                                    <span class="card_number">04</span>
                                    <span class="card-title">Wij testen</span>
                                </div>
                                <p class="card-text">Nu uw gereedschap klaar is, testen we de matrijs functioneel. Operationele testen zijn ook mogelijk, ofwel bij Tools&Dieis ofwel op uw eigen productielijn. Ook de installatie op uw lijn kunnen wij faciliteren.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact_btn text-center">
                <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-primary">OK, IK NEEM CONTACT OP →</a>
            </div>
            <div class="we_are_experts container">
                <div class="row">
                    <div class="we_are_experts_h2 offset-lg-2 col-lg-8">
                        <h2 class="tk-orpheuspro"><?php the_field('reengineering_2nd_title'); ?></h2>
                        <h5>Volgsnijmatrijzen</h5>
                        <h5>Kap- en buigmatrijzen</h5>
                        <h5>Perforatiematrijzen</h5>
                        <h5>Stitchermatrijzen</h5>
                        <h5>Spuitgietmatrijzen</h5>
                    </div>
                </div>
            </div>
            <div class="our_clients container">
                <div class="row">
                    <div class="our_clients_logo">
                        <img src="<?php the_field('our_clients_1'); ?>" alt="Happy client 1">
                        <img src="<?php the_field('our_clients_2'); ?>" alt="Happy client 2">
                        <img src="<?php the_field('our_clients_3'); ?>" alt="Happy client 3">
                        <img src="<?php the_field('our_clients_4'); ?>" alt="Happy client 4">
                        <img src="<?php the_field('our_clients_5'); ?>" alt="Happy client 5">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .our_advantages.container-fluid-->
    <section class="review container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="sub_title_right col">
                        <h6>WAT ONZE KLANTEN ZEGGEN</h6>
                    </div>
                    <div class="review_block offset-lg-1 col-lg-9">
                        <div class="review_block_wrap">
                            <p>Met Tools&Dies als partner voor het maken van nieuwe onderdelen, alsook het onderhoud van bestaande gereedschappen, kunnen wij rekenen op een ongekende expertise! Die expertise levert echt een toegevoegde waarde binnen onze productie, alsook de bijhorende kwalitatieve producten die we leveren en installeren</p>
                        </div>
                    </div>
                    <div class="quote_author col-lg-2">
                        <span>Anthony Schrauwen</span>
                        <p>Interalu</p>
                    </div>
                    <div class="contact_dark_btn row justify-content-center">
                        <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-outline-primary">OK, IK NEEM CONTACT OP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<?php endif;


if (is_page('jobs')): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="jobs_h1 container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="tk-orpheuspro"><?php the_field('jobs_title'); ?></h1>
                <div class="red_text_block">
                    <div class="work-description-title">
                        <h4>LOCATIE</h4>
                        <h4>NIVEAU</h4>
                        <h4>REGIME</h4>
                    </div>
                    <div class="work-description-item">
                        <p>Sint-Job in ’t Goor</p>
                        <p>Starter</p>
                        <p>Voltijds</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="job_info container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="your_description col-lg-8">
                        <h2>Functiebeschrijving</h2>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="your_profile col-lg-8">
                        <h2>Jouw profiel</h2>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="your_benefits col-lg-8">
                        <h2>Jouw voordelen</h2>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <p>→ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="contact_person col-lg-12">
                        <div class="cp_img_credentials">
                            <img src="<?php the_field('contact_person'); ?>" alt="Contact Person Photo">
                            <div class="cp_credentials">
                                <div class="cp_name"><?php the_field('cp_name'); ?></div>
                                <div class="cp_position"><?php the_field('cp_position'); ?></div>
                                <p>Contactpersoon</p>
                            </div>
                        </div>
                        <div class="cp_links">
                            <a href="<?php the_field('link_vacancy_share'); ?>" type="" class="btn btn-link">VACATURE DELEN →</a>
                            <a href="<?php the_field('link_vacancy_print'); ?>" type="" class="btn btn-link">VACATURE PRINTEN →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="apply_now_form container-fluid">
        <div class="row">
            <div class="container">
                <div class="offset-lg-3 col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="196" title="Apply Now"]'); ?>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endif;


if (is_page('jobs/spontane-sollicatie')): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="apply_spontaneously container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="tk-orpheuspro"><?php the_field('spontaneously_title'); ?></h1>
                <div class="red_text_block">
                    <p>Samen hebben onze teamleden 350 jaar ervaring in verschillende domeinen. Wij vormen dan ook de ideale leerschool voor iedereen die graag meer wil weten en leren over het maken van gereedschappen.
                        <br><br>
                        Of je nu aan het begin van je carrière staat of je wil extra ervaring toevoegen aan ons team, we heten je graag welkom!
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <?php echo do_shortcode( '[contact-form-7 id="203" title="Apply Spontaneously"]' ); ?>
            </div>
        </div>
    </div>
</article>
<?php endif;


if (is_page('jobs/vacatures')): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="vacancies container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="tk-orpheuspro"><?php the_field('vacancies_title'); ?></h1>
                <div class="red_text_block">
                    <p>Samen hebben onze teamleden 350 jaar ervaring in verschillende domeinen. Wij vormen dan ook de ideale leerschool voor iedereen die graag meer wil weten en leren over het maken van gereedschappen.
                        <br><br>
                        Of je nu aan het begin van je carrière staat of je wil extra ervaring toevoegen aan ons team, we heten je graag welkom!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="open_positions container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                        <h2><?php the_field('vacancies_title_h2') ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card01">
                            <div class="card-body">
                                <div class="card_header">
                                    <span class="card_number">01</span>
                                    <h5 class="card-title"><?php the_field('job_title__vacancie_1'); ?></h5>
                                </div>
                                <div class="level_regime">
                                    <span><?php the_field('level_vacancie_1'); ?></span>
                                    <span><?php the_field('regime_vacancie_1'); ?></span>
                                </div>
                                <p class="card-text"><?php the_field('job_description_1'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="card-link">MEER WETEN →</a>
                                <a href="<?php the_permalink(); ?>" class="card-link">IK SOLLICITEER →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card02">
                            <div class="card-body">
                                <div class="card_header">
                                    <span class="card_number">02</span>
                                    <h5 class="card-title"><?php the_field('job_title__vacancie_2'); ?></h5>
                                </div>
                                <div class="level_regime">
                                    <span><?php the_field('level_vacancie_2'); ?></span>
                                    <span><?php the_field('regime_vacancie_2'); ?></span>
                                </div>
                                <p class="card-text"><?php the_field('job_description_2'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="card-link">MEER WETEN →</a>
                                <a href="<?php the_permalink(); ?>" class="card-link">IK SOLLICITEER →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg_twoimg container-fluid"></div>
        <div class="didnt_find container">
            <h3>Niet gevonden wat je zocht?</h3>
            <p>We zijn steeds op zoek naar nieuw talent, dus kies voor een spontane sollicitatie!</p>
            <div class="contact_btn container text-center">
                <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-primary">SOLLICITEER NU →</a>
            </div>
        </div>
    </div>
    <section class="review container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="sub_title_right col">
                        <h6>WAT ONZE KLANTEN ZEGGEN</h6>
                    </div>
                    <div class="review_block offset-lg-1 col-lg-9">
                        <div class="review_block_wrap">
                            <p>Met Tools&Dies als partner voor het maken van nieuwe onderdelen, alsook het onderhoud van bestaande gereedschappen, kunnen wij rekenen op een ongekende expertise! Die expertise levert echt een toegevoegde waarde binnen onze productie, alsook de bijhorende kwalitatieve producten die we leveren en installeren</p>
                        </div>
                    </div>
                    <div class="quote_author col-lg-2">
                        <span>Anthony Schrauwen</span>
                        <p>Interalu</p>
                    </div>
                    <div class="contact_dark_btn row justify-content-center">
                        <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-outline-primary">OK, IK NEEM CONTACT OP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<?php endif;


if (is_page('aanbod/onderhoud')): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="reliable_service container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="tk-orpheuspro"><?php the_field('reliable_service_title'); ?></h1>
                <div class="red_text_block">
                    <h4>SAMEN GAAN WE VOOR MAXIMAAL RENDEMENT</h4>
                    <p>Ons team van experten zal met een doordacht ontwerp en een juiste ontwikkeling de levensduur van uw gereedschappen zo lang mogelijk maken. Maar dat neemt niet weg dat een regelmatig onderhoud van uw materiaal cruciaal is om een maximaal rendement te bekomen.
                        <br><br>
                        Bij Tools&Dies krijgt u automatisch de noodzakelijke parameters bij de oplevering van uw gereedschap, opdat u weet wanneer het tijd om een onderhoud aan te vragen
                    </p>
                </div>
                <div class="contact_btn container text-left">
                    <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-primary">OK, IK NEEM CONTACT OP →</a>
                </div>
            </div>
        </div>
    </div>
    <div class="our_aspect container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10">
                        <h2><?php the_field('reliable_title_h2') ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="aspect_items container">
                <div class="row">
                    <div class="aspect_column col-lg-6">
                        <div class="card card01">
                            <div class="card-body">
                                <div class="i_img"><img src="<?php bloginfo('template_url'); ?>/images/i-edit.png" alt="Icon Image"></div>
                                <div class="card_header">
                                    <span class="card_number">01</span>
                                    <h5 class="card-title">Inventaris</h5>
                                </div>
                                <p class="card-text">We starten met een analyse op uw inventaris van uw assets/gereedschappen. Die analyse kan op basis van tekeningen, maar ook door een fysieke analyse van de matrijzen. Een nulpuntbepaling is cruciaal voor een geslaagde start!</p>
                            </div>
                        </div>
                        <div class="card card03">
                            <div class="card-body">
                                <div class="i_img"><img src="<?php bloginfo('template_url'); ?>/images/i-edit.png" alt="Icon Image"></div>
                                <div class="card_header">
                                    <span class="card_number">03</span>
                                    <h5 class="card-title">Pro-actief onderhoud</h5>
                                </div>
                                <p class="card-text">Dankzij onze nulpuntbepaling bij de startfase kunnen we analyseren welke parameters van tel zullen zijn om te bepalen wanneer het gereedschap een onderhoudsbeurt nodig heeft. Zo weet u dus steeds op voorhand hoe vaak er een onderhoud moet worden ingepland.
                                <br><br>Mocht er echter een dringende interventie nodig zijn, dan staat ons team natuurlijk klaar om u verder te helpen.
                                </p>
                            </div>
                        </div>
                        <div class="card card05">
                            <div class="card-body">
                                <div class="i_img"><img src="<?php bloginfo('template_url'); ?>/images/i-edit.png" alt="Icon Image"></div>
                                <div class="card_header">
                                    <span class="card_number">05</span>
                                    <h5 class="card-title">Communicatie</h5>
                                </div>
                                <p class="card-text">Uiteraard staat communicatie centraal in een onderhoudstraject. Net daarom werken we met een platform waarin alle belangrijke communicatie makkelijk kan worden gedeeld. De volgeende items worden m.b.v. het platform beheerd:<br>
                                    1. Delen van tekening, met de juiste versie<br>
                                    2. Opvoling van lopende onderhoudsbeurten<br>
                                    3. Intervantierapporten
                                </p>
                            </div>
                        </div>
                        <div class="contact_btn container text-right">
                            <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-primary">OK, IK NEEM CONTACT OP →</a>
                        </div>
                    </div>
                    <div class="aspect_column_right col-lg-6">
                        <div class="card card02">
                            <div class="card-body">
                                <div class="i_img"><img src="<?php bloginfo('template_url'); ?>/images/i-edit.png" alt="Icon Image"></div>
                                <div class="card_header">
                                    <h5 class="card-title">Standaard</h5>
                                    <span class="card_number">02</span>
                                </div>
                                <p class="card-text">Tijdens het onderhoud streven we naar een gestandardiseerde manier van werken. Maar wat betekent dat precies?
                                <br><br>We bepalen een aantal werkmethodes met duidelijke prijzen voor het onderhouden van de belangrijkste onderdelen en/of interventies, opdat u weet wat u kan verwachten van ons.
                                <br><br>Mochten er toch nog interventies nodig zijn die buiten die standaardtarieven vallen? Dan nemen we alvast de regietarieven mee op in het contract
                                </p>
                            </div>
                        </div>
                        <div class="card card04">
                            <div class="card-body">
                                <div class="i_img"><img src="<?php bloginfo('template_url'); ?>/images/i-edit.png" alt="Icon Image"></div>
                                <div class="card_header">
                                    <h5 class="card-title">Dringende interventie</h5>
                                    <span class="card_number">04</span>
                                </div>
                                <p class="card-text">Tools & Dies vormt een centraal component van uw productieproces en wij staan dan ook paraat om snelle interventies uit te voeren. Bij een breuk komen we ter plaatse om vast te stellen wat er precies is misgelopen.
                                    <br><br>Alle dringende interventies worden op een werkbon gedigitaliseerd, opdat de juiste informatie kan worden doorgegeven aan de juiste personen. Zo kunnen we snel in actie schieten om een oplossing te voorzien.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="review container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="sub_title_right col">
                        <h6>WAT ONZE KLANTEN ZEGGEN</h6>
                    </div>
                    <div class="review_block offset-lg-1 col-lg-9">
                        <div class="review_block_wrap">
                            <p>Met Tools&Dies als partner voor het maken van nieuwe onderdelen, alsook het onderhoud van bestaande gereedschappen, kunnen wij rekenen op een ongekende expertise! Die expertise levert echt een toegevoegde waarde binnen onze productie, alsook de bijhorende kwalitatieve producten die we leveren en installeren</p>
                        </div>
                    </div>
                    <div class="quote_author col-lg-2">
                        <span>Anthony Schrauwen</span>
                        <p>Interalu</p>
                    </div>
                    <div class="contact_dark_btn row justify-content-center">
                        <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-outline-primary">OK, IK NEEM CONTACT OP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<?php endif;


if (is_page('aanbod/fijnmechanisch-stukwerk')): ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="precision_mechanics container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1 class="tk-orpheuspro"><?php the_field('fijnmechanisch_title'); ?></h1>
                    <div class="red_text_block">
                        <h4>WIJ HELPEN U VERDER OP MAAT!</h4>
                        <p>Dankzij onze jarenlange expertise en een uitgebreid machinepark kunnen wij lage volumes van hoogtechnologische aard maken aan een goede prijs én met hoge kwaliteit.
                            <br><br>
                            Bent u in het bezit van een correcte producttekening?
                            Neem dan meteen contact op en vraag een offerte aan!<br><br>
                            Indien u hulp nodig heeft bij het definiëren van uw opdract of probleem, dan staan onze experts voor u klaar om samen een oplossing te zoeken.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <?php echo do_shortcode( '[contact-form-7 id="228" title="Request Price"]' ); ?>
                </div>
            </div>
        </div>
        <div class="our_competencies container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2><?php the_field('our_competencies_h2') ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="competency_items container">
                    <div class="row align-items-end">
                        <div class="competency_column col-lg-6 pr-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="competency_img"><img src="<?php bloginfo('template_url'); ?>/images/i_competency1.png" alt="Icon Image"></div>
                                    <div class="card_header">
                                        <h5 class="card-title">Boorvonken</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="competency_column col-lg-6 pl-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="competency_img"><img src="<?php bloginfo('template_url'); ?>/images/i_competency2.png" alt="Icon Image"></div>
                                    <div class="card_header">
                                        <h5 class="card-title">Ontwerpen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                    <div class="row align-items-end">
                        <div class="competency_column col-lg-6 pr-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="competency_img"><img src="<?php bloginfo('template_url'); ?>/images/i_competency3.png" alt="Icon Image"></div>
                                    <div class="card_header">
                                        <h5 class="card-title">Draadvonken</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="competency_column col-lg-6 pl-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="competency_img"><img src="<?php bloginfo('template_url'); ?>/images/i_competency4.png" alt="Icon Image"></div>
                                    <div class="card_header">
                                        <h5 class="card-title">Persen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                    <div class="row align-items-end">
                        <div class="competency_column col-lg-6 pr-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="competency_img"><img src="<?php bloginfo('template_url'); ?>/images/i_competency5.png" alt="Icon Image"></div>
                                    <div class="card_header">
                                        <h5 class="card-title">Draaien</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="competency_column col-lg-6 pl-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="competency_img"><img src="<?php bloginfo('template_url'); ?>/images/i_competency6.png" alt="Icon Image"></div>
                                    <div class="card_header">
                                        <h5 class="card-title">Vlakslijpen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                    <div class="row align-items-end">
                        <div class="competency_column_last col-lg-6 pr-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="competency_img"><img src="<?php bloginfo('template_url'); ?>/images/i_competency7.png" alt="Icon Image"></div>
                                    <div class="card_header">
                                        <h5 class="card-title">Frezen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="competency_column_last col-lg-6 pl-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="competency_img"><img src="<?php bloginfo('template_url'); ?>/images/i_competency8.png" alt="Icon Image"></div>
                                    <div class="card_header">
                                        <h5 class="card-title">Zinkvonken</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                </div>
                <div class="contact_btn text-center">
                    <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-primary">OK, IK NEEM CONTACT OP →</a>
                </div>
                <div class="active_sectors container">
                    <div class="row">
                        <div class="active_sectors_h2 offset-lg-2 col-lg-8">
                            <h2 class="tk-orpheuspro"><?php the_field('active_sectors_h2'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="active_sectors_items container">
                    <div class="active_sectors_item">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/images/i_active_sectors1.png" alt="Active Sector Icon">
                            <p>Automatisatie</p>
                        </div>
                    </div>
                    <div class="active_sectors_item">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/images/i_active_sectors2.png" alt="Active Sector Icon">
                            <p>Chemie</p>
                        </div>
                    </div>
                    <div class="active_sectors_item">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/images/i_active_sectors3.png" alt="Active Sector Icon">
                            <p>Metaalindustrie</p>
                        </div>
                    </div>
                    <div class="active_sectors_item">
                        <div class="border_right_none">
                            <img src="<?php bloginfo('template_url'); ?>/images/i_active_sectors4.png" alt="Active Sector Icon">
                            <p>Pharmacie</p>
                        </div>
                    </div>
                    <div class="active_sectors_item">
                        <div class="border_bottom_none padding_top_55">
                            <img src="<?php bloginfo('template_url'); ?>/images/i_active_sectors5.png" alt="Active Sector Icon">
                            <p>Bouw</p>
                        </div>
                    </div>
                    <div class="active_sectors_item">
                        <div class="border_bottom_none padding_top_55">
                            <img src="<?php bloginfo('template_url'); ?>/images/i_active_sectors6.png" alt="Active Sector Icon">
                            <p>Kunststof</p>
                        </div>
                    </div>
                    <div class="active_sectors_item">
                        <div class="border_bottom_none border_right_none padding_top_55">
                            <img src="<?php bloginfo('template_url'); ?>/images/i_active_sectors7.png" alt="Active Sector Icon">
                            <p>Muntindustrie</p>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div>
        <section class="review container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="sub_title_right col">
                            <h6>WAT ONZE KLANTEN ZEGGEN</h6>
                        </div>
                        <div class="review_block offset-lg-1 col-lg-9">
                            <div class="review_block_wrap">
                                <p>Met Tools&Dies als partner voor het maken van nieuwe onderdelen, alsook het onderhoud van bestaande gereedschappen, kunnen wij rekenen op een ongekende expertise! Die expertise levert echt een toegevoegde waarde binnen onze productie, alsook de bijhorende kwalitatieve producten die we leveren en installeren</p>
                            </div>
                        </div>
                        <div class="quote_author col-lg-2">
                            <span>Anthony Schrauwen</span>
                            <p>Interalu</p>
                        </div>
                        <div class="contact_dark_btn row justify-content-center">
                            <a href="<?php the_field('link_ok_contact'); ?>" type="" class="btn btn-lg btn-outline-primary">OK, IK NEEM CONTACT OP</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>


<?php endif;
