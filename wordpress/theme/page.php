<?php get_header() ?>
    <div id="main">

    <?php while ( have_posts() ) : the_post() ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry"><?php the_content() ?></div>
        </div>
    <?php endwhile ?>
    </div>


<!--
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
-->

<?php get_footer() ?>
