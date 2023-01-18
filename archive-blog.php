<?php
get_header();
?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            
            $args = [
                'post_type' => 'blog',
                'posts_per_page'=> 1,   // set the limit post to UNLIMITED (-1 is unlimited)
                'orderby' => 'publish_date',
                'order' => 'DESC',
                'paged' => $paged];
            $firstPosts = array();
            $loop = new WP_Query($args);
            
            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
            
            if(1 == $paged) {
                    $firstPosts[] = $post->ID;
                    ?>
                    <p class="date mb-0"><?php echo get_the_date() ?></p>
                    <a href="<?php echo get_permalink() ?>"><h1 class="heading h2"><?php echo get_the_title() ?></h1></a>

                    <div class="row justify-content-center layout-section--secondary-bg no-gutters">
                        <div class="col-12 col-sm-10">
                            <?php the_post_thumbnail() ?>
                        </div>
                    </div>
                    
                    <p class="legend mt-5"><?php echo get_the_excerpt()?> <a href="<?php echo get_permalink()?>" class="text-color-primary text-color-primary--has-hover">Read more</a></p>
                    <div class="devider mb-5"></div>

                <?php } endwhile; endif; ?>

                <div class="row">
                    <div class="col-md-3 d-none d-md-block">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="col-md-9">

                    <?php $the_query = query_posts(
                        array(
                            'post_type'=>'blog',
                            'posts_per_page'=>10,
                            'orderby'=>'date',
                            'post__not_in' => $firstPosts,
                            'paged'=>$paged
                        )
                    );
              

                    while (have_posts()) : the_post(); ?>
                        <div class="row">
                            <div class="col-sm-4">
                                <?php echo get_the_post_thumbnail()?>
                            </div>
                            <div class="col-sm-8">
                                <p class="date mb-0"><?php echo get_the_date()?></p>
                                <a href="<?php echo get_permalink()?>"><h5 class="heading"><?php echo get_the_title()?></h5></a>
                                <?php echo get_the_excerpt()?><a href="<?php echo get_permalink()?>" class="text-color-primary text-color-primary--has-hover"> Read more</a>
                            </div>
                        </div>
                        <div class="devider mb-5 mt-5"></div>
                        <?php endwhile; ?>


                        <?php the_posts_pagination([
                            'mid_size'  => 2,
                            'screen_reader_text' => ' ',
                            'format'    => 'page/%#%/',
                            'prev_text' => __('Prev', 'hotbot'),
                            'next_text' => __('Next', 'hotbot')]);
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php /*
get_sidebar(); */
get_footer();
?>
