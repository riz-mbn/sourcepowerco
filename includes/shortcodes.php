<?php

function mbn_shortcode_home_url($atts = null, $content = null){
    return home_url();
}
add_shortcode('home_url', 'mbn_shortcode_home_url');

function mbn_testimonials_shortcode(){


    $query = array(
        'post_type'     => 'client_testimonials',
        'orderby'       => '',
        'order'         => 'asc',
        'posts_per_page' => -1
    );

    $testimonials = new WP_Query( $query );
    $returnhtml .= '<div class="testi_slick">';

    if($testimonials->have_posts()):

        //echo 'count ' . $testimonials->post_count;

        while ( $testimonials->have_posts() ) : $testimonials->the_post();

        $img = wp_get_attachment_image_src( get_post_thumbnail_id( $testimonials->ID ), 'large' ); 
        if( isset( $img[0] ) ): 
            $img = $img[0]; 
        else : 
            $img = 'https://via.placeholder.com/470x300';         
        endif;
        
        $testi_rating = get_field('testi_rating'); 
        // if(is_null($post_create_date)) {
        //     $post_create_date = get_the_date('Y-m-d', $testimonials->posit_id);
        // }

        //get date
        $post_date = date_create( get_the_date('Y-m-d', $testimonials->ID) );
        $current_date = date_create( date('Y-m-d') );
        $date_diff = date_diff($post_date, $current_date);
        $diff = $date_diff->format("%m months ago");

        $excerpt = get_field('testi_excerpt');
        $location = get_field('testi_location');
        $name = get_the_title();
        
            $returnhtml .= '<div class="testi_wrap">';
                $returnhtml .= '<div class="testi_item">';
                    $returnhtml .= '<div class="testi_info_wrap">';
                        $returnhtml .= '<div class="testi_img">';
                            $returnhtml .= '<figure><img src="'. esc_attr($img) .'" width="69" height="69" /></figure>';
                        $returnhtml .= '</div>';
                        $returnhtml .= '<div class="testi_name">'. $name  .'</div>';    
                        $returnhtml .= '<div class="testi_location">'. $location  .'</div>';                
                        $returnhtml .= '<div class="testi_info">';
                            $returnhtml .= '<div class="testi_rating">'. $testi_rating .'</div>';
                            $returnhtml .= '<div class="testi_date">'. $diff  .'</div>';
                        $returnhtml .= '</div>';                    
                        $returnhtml .= '<div class="testi_excerpt">'. $excerpt  .'</div>';
                    $returnhtml .= '</div>'; // testi_info_wrap
                    $returnhtml .= '<a href="'.get_the_permalink() .'" class="btn-link" /><span>Read More</span></a>';
                $returnhtml .= '</div>'; // testi_item
            $returnhtml .= '</div>'; // testi_wrap

        endwhile;
        wp_reset_postdata();
    
    endif;

    $returnhtml .= '</div>'; // testi_slick

    return $returnhtml;

}
add_shortcode('mbn_testimonials', 'mbn_testimonials_shortcode');

