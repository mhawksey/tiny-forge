<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @since Tiny Forge 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<span class="icon-webfont icon-idea"></span> <?php _e( 'Featured post', 'tinyforge' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php // the_post_thumbnail(); ?><?php // Disable featured image before post title ?>
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
			<?php // Tip26 - Print HTML bellow post title with meta information for the current post date/time and author ?>
			<div class="entry-meta"><?php tinyforge_entry_meta_top(); ?> 
				<?php if ( comments_open() ) : ?>
						<span class="meta-separator">&bull;</span> <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'tinyforge' ) . '</span>', __( '1 Comment', 'tinyforge' ), __( '% Comments', 'tinyforge' ) ); ?>
				<?php endif; // comments_open() ?>
				<?php edit_post_link( __( 'Edit', 'tinyforge' ), ' <span class="meta-separator">&bull;</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-meta -->
			<?php else : ?>
			<h1 class="entry-title" itemprop="headline">
				<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php the_title(); ?></a>
				<?php if ( comments_open() ) : ?><span class="title-comment-meta">
					<span class="meta-separator">&bull;</span> <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'tinyforge' ) . '</span>', __( '1 Comment', 'tinyforge' ), __( '% Comments', 'tinyforge' ) ); ?></span>
				<?php endif; // comments_open() ?>
			</h1>
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content" itemprop="articleBody">
			<?php the_content( __( '...continue reading <span class="meta-nav">&rarr;</span>', 'tinyforge' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'tinyforge' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php /* if ( is_single() ) : // Don't show this in the archive listing! */ ?>
			<?php tinyforge_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'tinyforge' ), ' <span class="meta-separator">&bull;</span> <span class="edit-link">', '</span>' ); ?>
			<?php /* endif; // is_single() */ ?>
			
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/**
						 * Filter the author bio avatar size.
						 *
						 * @since Tiny Forge 1.0
						 *
						 * @param int $size The height and width of the avatar in pixels.
						 */
						$author_bio_avatar_size = apply_filters( 'tinyforge_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'tinyforge' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'tinyforge' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
