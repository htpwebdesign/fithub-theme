<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'large' ); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    </header>

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>

    <footer class="entry-footer">
        <?php
        edit_post_link(
            sprintf(
                esc_html__( 'Edit %s', 'fithub-theme' ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>
    </footer>
</article><?php the_ID(); ?> 
