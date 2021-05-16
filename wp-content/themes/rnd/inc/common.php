<?php
function get_current_term(){
    if (!is_category() && !is_tag() && !is_tax())
        return false;
    $term_slug = get_query_var( 'term' );
    $taxonomyName = get_query_var( 'taxonomy' );
    return get_term_by( 'slug', $term_slug, $taxonomyName );
}

function get_top_term($term){
    if($term->parent != 0):
        $pre_term = get_term( $term->parent, 'product-category' );
        $term = get_top_term($pre_term);    
    endif;
    return $term;
}