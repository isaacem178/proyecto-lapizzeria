<?php get_header(); ?>
    

<?php while(have_posts()): the_post(); ?>


    <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
            <div class="contenido-hero">
                <div class="texto-hero">
                    <!-- // Ambas maneras son validas -->
                    <!-- <h1><?php bloginfo('description'); ?> </h1> -->
                    <h1><?php echo esc_html (get_option('blogdescription') ); ?> </h1>
                    <?php the_content(); ?>
                    <?php $url = get_page_by_title('Sobre Nosotros'); ?>
                    <a class="button naranja" href="<?php echo get_permalink($url->ID); ?>">Leer más</a>
                </div>
            </div>
        </div>


    <div class="principal contenedor">
        <main class="texto-centrado contenido-paginas">
        </main>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>

