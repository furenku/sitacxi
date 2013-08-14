<?php
//Template Name: Nosotros


get_header();



$contenido = get_the_content();

$submenu = "";
$pgs = get_pages( array('child_of'=>$post->post_parent ) );

foreach ( $pgs as $p ) {
  $ttl = foo_filter( $p->post_title, 'title');;
  $url = get_permalink( $p->ID );
  $submenu .= foo_li("","",$ttl,$url);
}

$submenu = foo_div("submenu", "", $submenu);


$query = new WP_Query(array( 'post_type'=>'lectura','posts_per_page'=>-1 ) );
if( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    $titulo = get_the_title();
    $link = get_permalink($post->ID);
    $autor = get_post_meta($post->ID,'autor');
    $autor = $autor[0];
    
    $lecturas .= foo_li("","lectura",
                           foo_div("","autor", $autor ) .
                                   foo_div("","titulo", $titulo ),
                           $link);
    
  }
}


echo $submenu;

echo foo_div("lecturas","",$lecturas);

get_footer();

?>