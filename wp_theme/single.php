<?php get_header(); ?>
<div class="content">
    <div class="content_resize">
        <h2><?php the_title(); ?></h2>
        <?php
        $categories = get_the_category();
        if ($categories) {
            for ($i = 0; $i < count($categories); $i++) {
                echo '<a class="article-link" href="' . esc_url(get_category_link($categories[$i]->term_id)) . '">' . esc_html($categories[$i]->name) . '</a>';
            }
        }
        ?>
        <br>
        <?php
        $tags = get_the_tags();
        if ($tags) {
            for ($i = 0; $i < count($tags); $i++) {
                echo '<a class="article-tags" href="' . esc_url(get_tag_link($tags[$i]->term_id)) . '">' . esc_html($tags[$i]->name) . '</a>';
            }
        }
        ?>
        <div class="active-poster">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/clock-hour.svg'; ?>" class="active-icon" alt="" /> <?php echo date('F jS, Y', strtotime(get_the_date())); ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/user.svg'; ?>" class="active-icon" alt="" /> <?php echo the_author(); ?>
        </div>
        <p><?php the_content(); ?></p>
    </div>
</div>
<?php get_footer(); ?>