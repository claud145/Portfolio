<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
 
<article class="col s12 m6 l6 article-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="#">
			<?php the_post_thumbnail(); ?>
		</a>
	<div class="row article-content center-align transparent">
        <div class="center-align col s12">
             <?php  the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );?>
    	</div> 
    	<div>
    		<p>	<?php print get_the_excerpt(); ?></p>
    	</div>
    </div>



 
</article>
	
 