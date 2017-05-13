<?php
get_header();
$audio_input = get_post_meta( $post->ID, 'audio_input', true );
if(have_posts()) : 
while(have_posts()) : 
the_post();
the_title();
echo '<div class="entry-content">';
    the_content();
?>
<p><?php echo $audio_input; ?></p>  
<?php echo '</div>';
endwhile; endif;
get_sidebar();
get_footer();?>

