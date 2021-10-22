<?php 

    get_header(); 
    $crowdfunding = get_field('crowdfunding', 'option');
    $instagram = get_field('instagram', 'option');
    $facebook = get_field('facebook', 'option');
?>

    <div class="homepage">

        <!-- HERO -->
        <section id="hero" class="homepage__hero">
            <div class="container">
                <div class="homepage__hero__content">
                    <h1 class="homepage__hero__title">
                        <span><?= _e('Boutique de mode', 'the-green-lab'); ?></span> 
                        <span class="eco-responsable font-sans text-green">Eco-responsable</span> 
                        <span>À Nantes</span>
                    </h1>
                    <div class="homepage__hero__description">
                        <p>Ouverture de la boutique : <?= strtolower(get_field('ouverture_boutique')) ?>. <br><a href="#footer" class="underline font-semibold text-green cursor-pointer transition transition-200 hover:text-dark">On vous tient au courant !</a> <br>D’ici là, retrouvez nos produits sur Ulule.</p>
                        <?php 
                        if($crowdfunding): 
                        ?>
                        <a href="<?= $crowdfunding; ?>" class="btn-primary mt-8" target="_blank">Aller sur Ulule</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="homepage__hero__social">
                    <a href="<?= $instagram; ?>" class="inline-block" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/icon-instagram.svg" alt="Icone Instagram" width="17"></a>
                    <a href="<?= $facebook; ?>" class="inline-block ml-4" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/icon-facebook.svg" alt="Icone facebook" width="7"></a>
                </div>
                <div class="homepage__hero__arrow">
                    <img src="<?= get_template_directory_uri(  ) ?>/img/icon-arrow-down.svg" alt="">
                </div>
            </div>
        </section>

        <!-- CONCEPT -->
        <section id="concept" class="homepage__concept section-pad">
            <div class="container md:grid md:grid-cols-2 md:gap-10 lg:grid-cols-12">
                <div class="homepage__concept__image relative lg:col-span-4">
                    <?php 
                        $image = get_field('concept_image'); 
                    ?>
                    <img 
                        src="<?= $image['sizes']['xl']; ?>" 
                        alt="<?= $image['alt']; ?>" 
                        srcset="<?= $image['sizes']['xxl'] . ' ' . $image['sizes']['xxl-width'] . 'w, ' . 
                            $image['sizes']['xl'] . ' ' . $image['sizes']['xl-width'] . 'w, ' .
                            $image['sizes']['large'] . ' ' . $image['sizes']['large-width'] . 'w, ' .
                            $image['sizes']['medium_large'] . ' ' . $image['sizes']['medium_large-width'] . 'w'; ?>"
                        sizes="(max-width: 1024px) 100vw,
                            40vw"
                    >   
                    <div class="hidden lg:block absolute top-0 left-full">
                        <div class="section-name">Concept</div>
                    </div>
                </div>
                <div class="homepage__concept__text lg:col-span-6 lg:col-start-7">
                    <h2 class="section-name lg:hidden">Le concept</h2>
                    <h3 class="section-title"><?php the_field('concept_titre'); ?></h3>
                    <p class="my-12"><?php the_field('concept_paragraphe'); ?></p>
                    <!-- Liste icones -->
                    <ul class="homepage__concept__icones grid grid-cols-2 gap-10 md:grid-cols-3 lg:grid-cols-4 lg:mt-6">
                        <?php 
                        $icones = get_terms( array( 
                            'taxonomy' => 'icone',
                            'hide_empty' => false
                        ) );
                        
                        
                        foreach ($icones as $icone):
                            $name = $icone->name;
                            $visuel = get_field('visuel', 'icone_' . $icone->term_id);
                        ?>
                        <li class="flex flex-col items-center">
                            <img src="<?= $visuel['url']; ?>" alt="<?= 'icone ' . $name; ?>" width="48" height="48">
                            <p class="mt-2 text-center"><?= $name; ?></p>
                        </li>

                        <?php
                        endforeach;
                        ?>       
                    </ul>
                </div>
            </div>
        </section>

        <!-- PRODUITS -->
        <section id="produits" class="section-pad homepage__produits">
            <div class="container">
                <!-- Intro products -->
                <div class="relative">
                    <h2 class="section-name lg:absolute lg:right-0 lg:bottom-0"><span class="lg:block">Les</span> <span class="lg:block">produits</span></h2>
                    <div class="lg:w-1/2 lg:pr-5">
                        <h3 class="section-title"><?php the_field('produits_titre'); ?></h3>
                        <p class="mt-12"><?php the_field('produits_paragraphe'); ?></p>    
                    </div>
                </div>
            </div>
                
            <!-- Products slider -->
            <?php 
                $args = array(
                    'post_type'              => array( 'produits' ),
                    'nopaging'               => true,
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts()) :
            ?>
            <div class="swiper my-12">
                <div class="swiper-wrapper">
                    
                        <?php
                            while ( $query->have_posts() ) :
                                $query->the_post();
                        ?>
                            <div class="swiper-slide">
                                <?php if($crowdfunding): ?>
                                <a href="<?php echo $crowdfunding; ?>" target="_blank">
                                    <?= get_template_part('template-parts/product-slide');  ?>
                                </a>
                                <?php else : ?>
                                <div>
                                    <?= get_template_part('template-parts/product-slide');  ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        <?php
                            endwhile;
                        ?>
                </div>
            </div>

            
            <?php 
                endif;
                wp_reset_postdata(); 
            ?>
            
            <!-- CTA -->
            <?php if($crowdfunding): ?>
            <div class="text-center pt-4">
                <a href="<?= $crowdfunding; ?>" class="btn-primary" target="_blank">Acheter sur Ulule</a>
            </div>
            <?php endif; ?>
            
        </section>

        <!-- A PROPOS -->
        <section id="a-propos" class="homepage__a-propos__intro section-pad">
            <div class="container md:grid md:grid-cols-2 md:gap-10 lg:grid-cols-12 lg:items-center">

                <!-- Image -->
                <div class="homepage__a-propos__intro__image relative lg:col-span-5">
                    <?php 
                        $image = get_field('a_propos_image'); 
                    ?>
                    <img 
                        src="<?= $image['sizes']['xl']; ?>" 
                        alt="<?= $image['alt']; ?>" 
                        srcset="<?= $image['sizes']['xxl'] . ' ' . $image['sizes']['xxl-width'] . 'w, ' . 
                            $image['sizes']['xl'] . ' ' . $image['sizes']['xl-width'] . 'w, ' .
                            $image['sizes']['large'] . ' ' . $image['sizes']['large-width'] . 'w, ' .
                            $image['sizes']['medium_large'] . ' ' . $image['sizes']['medium_large-width'] . 'w'; ?>"
                        sizes="(max-width: 1024px) 100vw,
                            40vw"
                    >   
                    <div class="hidden lg:block absolute top-0 left-0">
                        <div class="section-name">À propos</div>
                    </div>
                </div>

                <!-- Text -->
                <div class="homepage__a-propos__intro__text lg:col-span-6 lg:col-start-7">
                    <h2 class="section-name lg:hidden">À propos</h2>
                    <h3 class="section-title lg:w-5/6"><?php the_field('a_propos_titre'); ?></h3>
                    <p class="mt-12 lg:w-5/6 lg:ml-auto"><?php the_field('a_propos_paragraphe'); ?></p>
                </div>

            </div>
        </section>

        <section class="homepage__a-propos__valeurs container">
            <div class="section-pad border-t border-b border-dark double-border">
                <div class="md:w-3/5 md:mx-auto md:text-center">
                    <h2 class="text-xl font-serif font-bold">L’envie d’ouvrir notre propre boutique est née de deux besoins :</h2>
                </div>
                <div class="mt-12 md:grid md:grid-cols-2 md:gap-10 lg:w-3/5 lg:mx-auto lg:gap-16">
                    <div>
                        <p class="text-sm uppercase font-bold text-green">(01)</p>
                        <p class="text-lg"><strong>Proposer</strong> une sélection de vêtements et d’accessoires de ces marques qu’il est possible de voir, toucher et essayer.</p>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <p class="text-sm uppercase font-bold text-green">(02)</p>
                        <p class="text-lg"><strong>Valoriser</strong> un ensemble de marques qui partagent les mêmes valeurs responsables et éthiques.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pad homepage__a-propos__equipe">
            <div class="container mt-4">
                <!-- Gregory -->
                <div class="md:grid md:grid-cols-3 md:gap-10 md:items-center lg:grid-cols-12">
                    <!-- Photo -->
                    <div class="lg:relative lg:col-span-3 lg:col-start-10">
                        <div class="homepage__a-propos__equipe__img-container">
                            <?php 
                                $image = get_field('gregory_photo'); 
                            ?>
                            <img 
                                src="<?= $image['sizes']['xl']; ?>" 
                                alt="<?= $image['alt']; ?>" 
                                srcset="<?= $image['sizes']['xxl'] . ' ' . $image['sizes']['xxl-width'] . 'w, ' . 
                                    $image['sizes']['xl'] . ' ' . $image['sizes']['xl-width'] . 'w, ' .
                                    $image['sizes']['large'] . ' ' . $image['sizes']['large-width'] . 'w, ' .
                                    $image['sizes']['medium_large'] . ' ' . $image['sizes']['medium_large-width'] . 'w'; ?>"
                                sizes="(max-width: 1024px) 100vw,
                                    30vw"
                            >   
                        </div>
                        <div class="hidden lg:block absolute top-0 right-full">
                            <p class="gregory text-xl uppercase font-serif">Gregory</p>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="md:col-span-2 lg:col-span-4 lg:col-start-5 lg:row-start-1">
                        <h2 class="text-xl uppercase font-serif mt-12 mb-6 md:mt-0 lg:hidden">Gregory</h2>
                        <p><?php the_field('gregory_description'); ?></p>
                    </div>    
                </div>
                
                <!-- Delphine -->
                <div class="mt-12 md:grid md:grid-cols-3 md:gap-10 md:items-center lg:mt-0 lg:grid-cols-12">
                    <!-- Photo -->
                    <div class="lg:relative lg:col-span-3 lg:col-start-1">
                        <div class="homepage__a-propos__equipe__img-container">
                            <?php 
                                $image = get_field('delphine_photo'); 
                            ?>
                            <img 
                                src="<?= $image['sizes']['xl']; ?>" 
                                alt="<?= $image['alt']; ?>" 
                                srcset="<?= $image['sizes']['xxl'] . ' ' . $image['sizes']['xxl-width'] . 'w, ' . 
                                    $image['sizes']['xl'] . ' ' . $image['sizes']['xl-width'] . 'w, ' .
                                    $image['sizes']['large'] . ' ' . $image['sizes']['large-width'] . 'w, ' .
                                    $image['sizes']['medium_large'] . ' ' . $image['sizes']['medium_large-width'] . 'w'; ?>"
                                sizes="(max-width: 1024px) 100vw,
                                    30vw"
                            >   
                        </div>
                        <div class="hidden lg:block absolute top-0 left-full">
                            <p class="delphine text-xl uppercase font-serif">Delphine</p>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="md:col-span-2 lg:col-span-4 lg:col-start-5 lg:row-start-1">
                        <h2 class="text-xl uppercase font-serif mt-12 mb-6 md:mt-0 lg:hidden">Delphine</h2>
                        <p><?php the_field('delphine_description'); ?></p>
                    </div>    
                </div>
                
            </div>
        </section>

        <!-- CONTACT -->
        <section id="contact" class="homepage__contact">
            <!-- Map -->
            <div class="container">
                <div class="bg-green text-light lg:flex">
                    <div class="lg:w-2/3">
                        <a href="https://goo.gl/maps/WhckVt9SzMkMGFRH8" target="_blank">
                            <img src="<?php echo get_template_directory_uri(  ) ?>/img/map.png" alt="Plan du centre de Nantes avec localisation de la boutique">    
                        </a>
                    </div>
                    <div class="text-center p-12 lg:flex-auto lg:self-center">
                        <h2 class="text-lg uppercase leading-none">Ouverture de la boutique <br><strong><?php the_field('ouverture_boutique'); ?></strong></h2>
                        <p class="mt-6">13 rue du château, 44000 Nantes</p>
                    </div>
                </div>   
                
            </div>
        </section>

    </div>
   

<?php get_footer(); ?>