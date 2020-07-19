function testiminial_shortcode($attr){

$testimonial_obj = new WP_Query(array('post_type' => 'testimonial', 'post_per_page' => $attr['limit']));
	
$testiVar = '';
while($testimonial_obj->have_posts()): $testimonial_obj->the_post();
$testiVar .= '<div class="testimonials">';
$testiVar .=	'<div class="testimonial">';
$testiVar .=		'<div class="author-img">';
$testiVar .=			'<img src="'.get_the_post_thumbnail_url(get_the_ID(),'thumbnail').'" alt="" class="img-fluid rounded">';
$testiVar .=		'</div>';
$testiVar .=		'<div class="author-quote">';
$testiVar .=			'<h4>'.get_the_title(get_the_ID()).'</h4>';
$testiVar .=		'<blockquote> <i class="fa fa-quote-left"></i>'.get_the_content(get_the_ID()).'<i class="fa fa-quote-right"></i> </blockquote>';
$testiVar .=		'</div>';
$testiVar .=	'</div>';
$testiVar .= '</div>';
endwhile;
return $testiVar;
	
}

add_shortcode('testimonial', 'testiminial_shortcode');
