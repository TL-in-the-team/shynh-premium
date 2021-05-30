<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'news-thumb', 356, 246, true );
add_image_size( 'blog-thumb', 1168, 622,true );

add_filter( 'upload_mimes', 'my_myme_types', 1, 1 );
function my_myme_types( $mime_types ) {
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}

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

function imageEncode($path){
    $path  = THEMES_DIR."/".$path;
    $image = file_get_contents($path);
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $type  = $finfo->buffer($image);
    return "data:".$type.";charset=utf-8;base64,".base64_encode($image);
}

function imageEncodePath($path){
    $image = file_get_contents($path);
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $type  = $finfo->buffer($image);
    return "data:".$type.";charset=utf-8;base64,".base64_encode($image);
}

function imageEncodeURL($path){
    $image = file_get_contents($path);
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $type  = $finfo->buffer($image);
    return "data:".$type.";charset=utf-8;base64,".base64_encode($image);
}