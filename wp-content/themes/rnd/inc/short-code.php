<?php 
add_shortcode('promotion-form','promotion_form_func');
function promotion_form_func($args){
    return get_template_part('inc/short-code-view/promotion-form.view');
}