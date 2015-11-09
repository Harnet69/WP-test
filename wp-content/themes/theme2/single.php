<?php
  $post = $wp_query->post;
 
  if (in_category('portfolio')) { //slug  категории
      include(TEMPLATEPATH.'/single-portfolio.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>