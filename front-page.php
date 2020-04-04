<!-- 
    Template Name : 
    Template Post : 
 -->
<?php get_header() ?>
<div class="news">
    <div class="container  news_container">
        <div class="politika">
            <?php 
                      // параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 50,
	'category'    => 'novye-novosti',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
	setup_postdata($post);
    ?>
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
            <?php
}

wp_reset_postdata(); // сброс
                        ?>
        </div>
    </div>
</div>
<?php get_footer()?>