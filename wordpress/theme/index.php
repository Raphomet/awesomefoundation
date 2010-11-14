<?php get_header() ?>

    <div id="main">

    <?php if ( is_home() || is_single() || is_page() ) : ?>


      <?php include( TEMPLATEPATH . '/entries.php' ); ?>
      <?php include( TEMPLATEPATH . '/entries-navigation.php' ); ?>

    <?php elseif ( is_archive() ) : ?>
      
      <?php if (have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        	<h2>Archive for <?php single_cat_title(); ?></h2>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        	<h2>Archive for <?php single_tag_title(); ?></h2>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        	<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        	<h2>Archive for <?php the_time('F, Y'); ?></h2>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        	<h2>Archive for <?php the_time('Y'); ?></h2>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        	<h2>Archive for <?php get_query_var('author_name'); ?></h2>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        	<h2>Archive</h2>
        <?php } ?>

        <?php include( TEMPLATEPATH . '/entries.php' ); ?>
        <?php include( TEMPLATEPATH . '/entries-navigation.php' ); ?>

      <?php else : ?>

      	<h2>Sorry, we didn't find any matching posts</h2>

      <?php endif; ?>
      
    <?php elseif ( is_404() ) : ?>

    	<h2 class="center">Zoiks!</h2>
    	<p>We couldn't find the awesomeness you requested.</p>

    <?php endif; ?>

    </div>

    <div id="sidebar">
    <ul>
    	<li><h2>Archives</h2>
    		<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    		</ul>
    	</li>
    	<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
    </ul>
    </div>

<?php get_footer() ?>
