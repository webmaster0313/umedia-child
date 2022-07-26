<div class="container">
<?php
if(is_author()){
$author_id = get_the_author_meta('ID');
echo do_shortcode('[ajax_load_more repeater="template_5" author="'.$author_id.'" container_type="div" css_classes="container" posts_per_page="12" scroll="false" transition="fade" button_label="Load More"]');
} 
?>
</div>