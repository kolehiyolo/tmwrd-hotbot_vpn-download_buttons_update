<?php get_header(); ?>

    <!-- include outer-nav section -->
    <?php include 'inc/inc-header.php'; ?>
    <!-- end include outer-nav  section -->

    <!-- include apps-menu section -->
    <?php include 'inc/inc-apps-menu.php';?>
    <!-- end include apps-menu  section -->


    <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php echo the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php 
    $i=0;
    if( have_rows('app_post') ): ?>
        <?php while( have_rows('app_post') ): the_row(); $i++?>
        <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 <?php if (($i % 2)==0 ) {echo "order-md-2";}else{echo "";} ?>">
                        <div class="row justify-content-center">
                            <div class="col-8 col-sm-6 col-md-10">
                                <img loading=lazy src="<?php the_sub_field('app_post_thumbnail');?>" class="mb-5" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 <?php if (($i % 2)==0 ) {echo "order-md-1";}else{echo "";}  ?>">
                        <h2 class="heading mb-5">
                            <?php the_sub_field('app_post_title');?>
                        </h2>
                        <ul class="listing mt-3 mb-3">
                        <?php if( have_rows('app_post_listing') ):?>
                            <?php while( have_rows('app_post_listing') ): the_row(); ?>
                            <li class="center-sm mb-3">
                                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                                <div class="listing__content">
                                    <h5><?php the_sub_field('app_post_listing_title');?></h5>
                                    <p><?php the_sub_field('app_post_listing_content');?></p>
                                </div>
                            </li>                        
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?>





    <!-- include security section -->
    <?php include 'inc/inc-security.php';?>
    <!-- end include security   section -->

    <?php include 'inc/inc-package-plan.php'; ?>

    <?php include 'inc/inc-apps-link.php'; ?>


<?php get_footer();?>
