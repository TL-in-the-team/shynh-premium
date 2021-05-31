<?php 

$shortcode_type = array(
    0 => 'none',
    1 => 'list_gift',
    2 => 'promotions'
);

add_shortcode('promotion-form','promotion_form_func');
function promotion_form_func($args){
    ob_start();
    get_template_part('inc/short-code-view/promotion-form.view');
    return ob_get_clean();
}

add_shortcode('list_gift', 'list_gift_func');
function list_gift_func($args){
    $post_id = $args['id'];
    $post = get_post($post_id);
    if($post):
        ob_start();
        get_template_part('inc/short-code-view/list-gifts.view','',array(
            'list_gifts' => get_field('list_gifts',$post_id)
        ));
        return ob_get_clean();
    endif;
    return '';
}

add_shortcode('promotions', 'promotions_func');
function promotions_func($args){
    $post_id = $args['id'];
    $post = get_post($post_id);
    if($post):
        ob_start();
        get_template_part('inc/short-code-view/promotions.view','',array(
            'promotions' => get_field('promotions',$post_id)
        ));
        return ob_get_clean();
    endif;
    return '';
}

add_shortcode('our_expert_list', 'our_expert_list_func');
function our_expert_list_func($args){
    $post_id = $args['id'];
    $post = get_post($post_id);
    if($post):
        ob_start();
        get_template_part('inc/short-code-view/our_expert_list.view','',array(
            'our_expert_list' => get_field('our_expert_list',$post_id)
        ));
        return ob_get_clean();
    endif;
    return '';
}

add_shortcode('detail_expert', 'detail_expert_func');
function detail_expert_func($args){
    $post_id = $args['id'];
    $post = get_post($post_id);
    if($post):
        ob_start();
        get_template_part('inc/short-code-view/detail_expert.view','',array(
            'detail_expert' => get_field('detail_expert',$post_id)
        ));
        return ob_get_clean();
    endif;
    return '';
}