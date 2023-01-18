<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotbot
 */ ?>

<h5 class="heading"><?php esc_html_e('Categories', 'hotbot'); ?></h5>

<?php 
	$terms = get_terms( 'category' );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	 echo '<ul class="pl-5">';
	 foreach ( $terms as $term ) {
	   echo '<li class="mb-0"><a href="' . esc_url( get_term_link( $term ) ) . '" class="d-block pt-2 pb-2 text-color-primary text-color-primary--has-hover">' . $term->name . '</a></li>';
	
	 }
	 echo '</ul>';
	}
?>

<div class="devider mb-5"></div>

<h5 class="heading"><?php esc_html_e('Featured Posts', 'hotbot'); ?></h5>
<?php

	$posts = get_posts( array(
		'post_type' => 'blog',
		'meta_query' => array(
			array(
				'key'   => 'featured_post',
				'value' => '1',
			)
		)
	) );

	if( $posts ) {
		?>
		<ul class="pl-5">
		<?php
		foreach( $posts as $post ) { ?>
			<li mb-0><a href="<?php echo get_permalink()?>" class="d-block pt-2 pb-2 text-color-primary text-color-primary--has-hover"><?php echo get_the_title()?></a></li>
		<?php
		}
		?>
		</ul>
		<?php
	}
?>