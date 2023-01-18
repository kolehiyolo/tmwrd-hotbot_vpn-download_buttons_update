<?php get_header(); ?>

    <?php include 'inc/inc-header.php'; ?>

    <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                    <?php 
                    $firstPosts = array();
                    $firstPosts[] = $post->ID;
                    ?>

                    <div class="singleBlog">
                        <p class="date"><?php the_date();?></p>
                        <h1 class="h2 heading"><?php the_title();?></h1>
                            
                        <?php /*<p class="author author-box__name">Posted by <span><a href="<?php echo get_permalink()?>"><?php esc_html(the_author_meta('display_name'));?></a></span></p> */?>
                        <p><?php esc_html_e('Posted by', 'hotbot'); ?> <span class="text-color-primary capitalize"><?php the_author_posts_link(); ?></span></p>
                        
                        <?php if(has_post_thumbnail()):?>
                            <img src="<?php the_post_thumbnail_url('largest'); ?>" class="mb-5" alt=""/>
                        <?php endif;?>
                        
                        <div class=""><?php the_content();?></div>
                        <div class="pt-3 pb-3 pl-5 pr-5 layout-section--secondary-bg">
                            <h6 class="heading"><?php esc_html_e('Posted by', 'hotbot'); ?> <span><?php the_author_posts_link(); ?></span></h6>
                            <p class="mb-0"><?php esc_textarea(the_author_meta('description')); ?></p>
                        </div>
                    </div>

                <?php endwhile; endif;

                    
                    while (have_posts()) : the_post(); 
                        $args=array(
                            'post_type'=>'blog',
                            'category__in'=>wp_get_post_categories($post->ID),
                            'posts_per_page'=>3,
                            'post__not_in' => $firstPosts,
                            'orderby' => 'publish_date',
                            'order' => 'DESC',
                        );
                        $relatedpost=get_posts($args);
                        if ($relatedpost) {
                            setup_postdata($post);
                            echo '<div><h4 class="heading mt-5">More Blog Posts</h4>';
                                foreach ($relatedpost as $post) { ?>
                                    <div class="row align-items-center">
                                        <div class="col-sm-4">
                                            <?php echo get_the_post_thumbnail()?>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="date mb-0"><?php echo get_the_date()?></p>
                                            <a href="<?php echo get_permalink()?>" class="link"><h4 class="heading"><?php echo get_the_title()?></h4></a>
                                            <?php echo get_the_excerpt()?> <a href="<?php echo get_permalink()?>" class="text-color-primary text-color-primary--has-hover">Read more</a>
                                        </div>
                                    </div>
                                    <div class="devider mb-5 mt-5"></div>
                                <?php }
                            echo '</div>';
                        }
                        wp_reset_postdata();
                    endwhile;
                ?>
                </div>
            </div>

        </div>
    </section>

    <?php include 'inc/inc-package-plan.php'; ?>

    <?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>
