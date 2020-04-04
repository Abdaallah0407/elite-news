<!-- 
    Template Name : 
    Template Post : 
 -->
<?php get_header() ?>

<div class="body">
    <div class="container body_container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="category_card" style="width: 400px;">
            <?php if( has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>"
                title="<?php the_title_attribute();?>"><?php the_post_thumbnail( 'my_size' ,["class" => ""]);?></a>
            <?php endif ?>
            <div class="category_info">
                <h3 style="color: #fff"> <a href="<?php the_permalink();?> "
                        class="category_link"><?= the_title() ?></a></h3>
            </div>
        </div>

        <?php endwhile; else : ?>
        <p class="no-posts">No posts</p>
        <?php endif; ?>

    </div>
</div>

<?php get_footer()?>