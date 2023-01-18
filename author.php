<?php get_header(); ?>

    <?php include 'inc/inc-header.php'; ?>

    <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">

                <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
                    <h2 class="heading mb-5"><?php esc_html_e('Posts by', 'hotbot'); ?> <span class="capitalize"><?php echo $curauth->nickname; ?></span></h2>

                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $the_query = query_posts(
                            array(
                                'post_type'=>'blog',
                                'posts_per_page'=>10,
                                'orderby'=>'date',
                                'author'  =>  $curauth->ID,
                                'paged'=>$paged
                            )
                        );
                        while ( have_posts() ) : the_post(); ?>

                                <div class="row">
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
                                
                                <?php endwhile;
                                
                                the_posts_pagination([
                                    'mid_size'	=> 2,
                                    'screen_reader_text' => ' ',
                                    'format'	=> 'page/%#%/',
                                    'prev_text'	=> __('Prev', 'hotbot'),
                                    'next_text'	=> __('Next', 'hotbot')]);
                                
                                
                                ?>

                </div>
            </div>
			
        </div>
    </section>
    <!-- end include mobile apps   section -->
<?php get_footer(); ?>