
<?php
    get_header();
    ?><h2><?php the_title();?></h2>
    <?php the_content();
    
?>
  <h3>Aine kood</h3><p><?php echo get_post_meta(get_the_ID(), $key = 'ainekood', $single = true);?></p>
  
<?php
    get_footer();
?>