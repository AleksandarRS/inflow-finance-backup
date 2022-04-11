<?php
    $categories = get_the_category();
    foreach($categories as $category) {
        if ( ! empty( $categories ) ) {
            echo '<span class="term-name"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></span>';
        }
    }
?>