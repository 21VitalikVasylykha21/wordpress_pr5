<div class="sidebar">
    <div class="gadget">
        <h2 class="star">Category</h2>
        <ul class="ex_menu">
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="gadget">
        <h2 class="star">Tag</h2>
        <ul class="ex_menu">
            <?php
            $tags = get_tags();
            foreach ($tags as $tag) {
                echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
            }
            ?>
        </ul>
    </div>
</div>
<div class="clr"></div>