<section id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<article class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<p>In the blog post i have also cleaned the code slightly and added this line for every blog</p>
	</article> <!-- end article header -->

  <article class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>

		<h4>List of categories</h4>
		<ul class="categoria-blog">
    <?php wp_list_categories( array(
        'orderby' => 'name',
				'title_li' => ''
    ) ); ?>
		</ul>

	</article> <!-- end article section -->



	<article class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
	</article> <!-- end article footer -->

	<?php comments_template(); ?>
	

</section> <!-- end article -->
