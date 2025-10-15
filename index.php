<?php get_header(); ?>
    
<?php 

    $pagina_blog = get_option('page_for_posts');
    $imagen = get_post_thumbnail_id($pagina_blog);
    $imagen = wp_get_attachment_image_src($imagen, 'full');

?>

    <pre>
        <?php var_dump($imagen); ?> 
    </pre>

    <div class="hero" style="background-image:url(<?php echo $imagen[0]; ?>)">
            <div class="contenido-hero">
                <div class="texto-hero">
                    <h1><?php echo get_the_title($pagina_blog); ?></h1>
                 
                </div>
            </div>
        </div>


    <div class="principal contenedor">
        <main class="texto-centrado contenido-paginas">
            <?php while(have_posts()): the_post(); ?>
                <article class="entrada-blog">
                    <?php the_title(); ?> 
                </article>
            <?php endwhile; ?>
        </main>
    </div>

<?php get_footer(); ?>

