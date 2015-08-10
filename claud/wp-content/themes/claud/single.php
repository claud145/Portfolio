<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	 <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">reorder</i>
    </a>
    <ul>


      <li><a href="#start" class="btn-floating green">
      <i class="material-icons">navigation</i></a></li>
    </ul>
  </div>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container banner">
                <br><br>
                <h1 class="banner-title header center teal-text text-lighten-2"><span>&#91;</span>CLAUD<span>&#93;</span></h1>
                <div class="row center">
                    <h5 class="banner-content header col s12 light"> <?php the_title();?> </h5>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax page-cover">
        	<?php the_post_thumbnail(); ?>  
        </div>

    </div>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
		
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content-page', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			/*the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );*/

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
