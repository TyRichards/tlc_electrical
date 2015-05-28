<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="row">
		<div class="col-md-3">
			<div class="img-responsive" style="background-color:#dddddd; width:100px; height:100px; margin-top: 35px"></div>
		</div>
		<div class="col-md-9">
			<header class="entry-header">
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

				<?php if ('post' == get_post_type()) { ?> 
				<div class="entry-meta">
					<?php // bootstrapBasicPostOn(); ?> 
				</div><!-- .entry-meta -->
				<?php } //endif; ?> 
			</header><!-- .entry-header --> 
			
			<?php if (is_search()) { // Only display Excerpts for Search ?> 
			<div class="entry-summary">
				
				<small><?php the_excerpt(); ?></small>
			</div><!-- .entry-summary -->
			<?php } else { ?> 
			<div class="entry-content">
				<?php the_excerpt(); ?> 
				<a class="btn btn-primary" href="<?php the_permalink(); ?>">See More</a>
				<div class="clearfix"></div>
				<?php 
				/**
				 * This wp_link_pages option adapt to use bootstrap pagination style.
				 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
				 */
				wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
					'after'  => '</ul></div>',
					'separator' => ''
				));
				?> 
			</div><!-- .entry-content -->
			<?php } //endif; ?>
		</div>
	</div> 
</article><!-- #post-## -->