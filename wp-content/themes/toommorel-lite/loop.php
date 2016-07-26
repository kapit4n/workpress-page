<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--Start Post-->
        <div class="post blog <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
            <h1 class="post_title"><span class="day">
                    <?php $get_time = the_time('d');
                    echo $get_time; ?> 
                    <span class="month"><?php echo get_the_time('M') ?></span></span><span class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

            </h1>
            <div class="dotted_line"></div>
            <div class="post-meta"><?php _e('Posted by', 'toommorel-lite'); ?><?php the_author_posts_link() ?><?php _e('in', 'toommorel-lite'); ?><?php the_category(', '); ?><?php _e(', Followed with', 'toommorel-lite'); ?><?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?>
            </div>
            <div class="dotted_line"></div>
                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                </a>
                <?php
            } else {
                echo inkthemes_main_image();
            }
            ?>
        <?php the_excerpt(); ?>
            <a class="read-more" href="<?php the_permalink() ?>"><?php _e('Read More ...', 'toommorel-lite'); ?></a>
            <div class="tags">
        <?php the_tags('Post Tagged with ', ', ', ''); ?>
            </div>
            <div class="dotted_line"></div>
        </div>
        <!--End Post-->
    <?php endwhile;
else: ?>
    <div class="post">
        <p>
    <?php _e('Sorry, no posts matched your criteria.', 'toommorel-lite'); ?>
        </p>
    </div>
<?php endif; ?>