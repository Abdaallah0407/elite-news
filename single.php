<!-- 
    Template Name : 
    Template Post : 
 -->
<?php get_header() ?>
<div class="content">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="content_block">
            <div class="content_heading">
                <h2 class="card-title"><?= the_title() ?></h2>
            </div>
            <div class="content_img">
                <?php the_post_thumbnail( 'large', ["class" => "content_images"]);?>
            </div>
            <div class="content_info">
                <div class="content_text">
                    <p class="card-text"><?= the_content() ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p class="no-posts">No posts</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer()?>