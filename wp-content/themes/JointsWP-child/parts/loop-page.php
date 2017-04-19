<section id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<p>This line will be here in every page, it was placed in the page code</p>
	<p>It wil not however show in the <strong  class="linear-wipe">blog pages</strong></p>
	<p>I have also cleaned up the page to improve coding standards</p>
	<p>In addition i made slight changes to styles, using sass</p>

<?php if(is_front_page()): ?>
	<h4>How about some menus available to this theme for funtionality?</h2>
<article class="row home-menu">
	<div class="small-6 columns">
		<?php joints_main_nav_fallback(); ?>
	</div>
	<div  class="small-6 columns">
		<?php joints_off_canvas_nav(); ?>
	</div>
	<div  class="small-6 columns">
		<?php joints_top_nav(); ?>
	</div>
	<div  class="small-6 columns">
		<a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a>
	</div>
</article>
<p>They only show on the home page</p>
<?php endif; ?>

	<!-- <header class="article-header"></header> -->
	 <!-- end article header -->

    <article class="entry-content" itemprop="articleBody">
			<h1 class="page-title"><?php the_title(); ?></h1>
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
		</article> <!-- end article section -->

	<!-- <footer class="article-footer"></footer> -->
	<!-- end article footer -->

	<?php comments_template(); ?>

</section> <!-- end article -->
