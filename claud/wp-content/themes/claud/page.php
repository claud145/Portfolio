<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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

 
<div id="primary" class="content-area container content-page">
	<div class="row">
		<div class="col-md-">
			<main id="main" class="site-main" role="main">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				// End the loop.
				endwhile;
				?>

				</main><!-- .site-main -->
		</div>	
	</div>
</div><!-- .content-area -->

<?php get_footer(); ?>
