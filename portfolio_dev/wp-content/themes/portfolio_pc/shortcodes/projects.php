<?php

function projects(){
    $query = new WP_Query(
        array(
            'post_type' => 'project',
            'post_status' => 'publish',
            'post_per_page' => 1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )        
    );
    
    $str = '<div class="elementor-element elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel animated pulse" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;pulse&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;
                    ,&quot;pause_on_hover&quot;:&quot;yes&quot;
                    ,&quot;pause_on_interaction&quot;:&quot;yes&quot;
                    ,&quot;autoplay_speed&quot;:20000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                <div class="elementor-widget-container">
                    <div class="elementor-image-carousel-wrapper swiper-container swiper-container-initialized swiper-container-horizontal" dir="ltr">
                        <div class="elementor-image-carousel swiper-wrapper" style="transform: translate3d(-1866.67px, 0px, 0px); transition-duration: 0ms;">';

    
    if($query->have_posts()):

        $i = 0;
        while($query->have_posts()):
            $query->the_post();

            $purpose = do_shortcode('[acf field="purpose"]');

            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'project');
            $slide_content = '<figure class="swiper-slide-inner">
                                <a class="link-wrapper" href="'.get_the_permalink().'">
                                    <div class="slide-image-container">
                                        <div class="tag-container">
                                         <div class="tag '.get_custom_purpose_tag_class($purpose).'"><p>'.$purpose.'</p></div>
                                        </div>
                                        <img class="swiper-slide-image" src="'.$thumbnail.'" alt="alt-text1">
                                    </div>
                                    <hr></hr>
                                    <div class="slide-text-container">
                                        <h2 >'.get_the_title().'</h2>
                                        <p class="blurb">'.do_shortcode('[acf field="blurb"]').'</p>
                                        <h4>Technologies</h4>
                                        <p>'.do_shortcode('[acf field="primary_technology"]').'</p>
                                    </div>
                                </a>
                            </figure>';
            
            $str .='<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="'.$i.'" style="width: 373.333px;">
                        '.$slide_content.'
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="'.$i.'" style="width: 373.333px;">
                        '.$slide_content.'
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="'.$i.'" style="width: 373.333px;">
                        '.$slide_content.'
                    </div>';
            $i++;
        endwhile;
    endif;
    
    $str .= '</div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span>
                </div>
                <div class="elementor-swiper-button elementor-swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                    <i class="eicon-chevron-left" aria-hidden="true"></i>
                    <span class="elementor-screen-only">Previous</span>
                </div>
                <div class="elementor-swiper-button elementor-swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
                    <i class="eicon-chevron-right" aria-hidden="true"></i>
                    <span class="elementor-screen-only">Next</span>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>';

    wp_reset_postdata();
    return $str;
}

function get_custom_purpose_tag_class($purpose){
    $tag_classes = "";
    if($purpose == "Professional Project"):
        $tag_classes .= "tag-professional";
    elseif($purpose == "Personal Project"):
        $tag_classes .= "tag-personal"; 
    endif;

    return $tag_classes;
}

add_shortcode('projects','projects');

// function practice_areas_link(){
//     $query = new WP_Query(
//         array(
//             'post_type' => 'practice_area',
//             'post_status' => 'publish',
//             'post_per_page' => 1,
//             'order' => 'ASC',
//             'orderby' => 'menu_order'
//         )        
//     );
//     $links = '';
//     while($query->have_posts()):
//         $query->the_post();
//         $links .= '<a href="'.get_the_permalink().'"title="'.get_the_title().'">'.get_the_title().'</a><br>';
//     endwhile;
//     //if no query results found then return message
//     if($links == ''):
//         $links = '<div><span> No links to be found. </div><span>';
//     endif;
//     wp_reset_postdata();
//     return $links;
// }

// add_shortcode('projects','projects');


add_filter('manage_project_posts_columns', 'project_columns');

function project_columns($columns){
    $columns = array(
        'cb' => 'cb',
        'title' => 'Title',
        'order' => 'Order',
        'date' => 'date'
    );
    return $columns;
}

add_filter('manage_edit-project_sortable_columns','project_sortable_columns');

function project_sortable_columns($columns){
    $columns['order']='order';
    return $columns;
}

add_action('manage_project_posts_custom_column','project_show_columns');

function project_show_columns($column_name){
    global $post;
    if($column_name == 'order'):
        echo $post->menu_order;
    endif;
}