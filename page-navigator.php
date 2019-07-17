<?php get_header() ?>

<div class="donor_list">
<?php
/* grab the posts from the contact list */
  $search_string = array(
    'post_type' => 'contacts',
    'posts_per_page' => 10
  );
  $posts = new WP_Query( $search_string );
  $posts = $posts->get_posts();

  if ($posts) {
    // For each Contact 
    foreach ($posts as $post) {
      // Echo the contact wrapper
      get_template_part('components/contact');
    }
  } else {
    echo "<h2> no donors </h2>";
  }
?>
</div>

<?php get_footer(); ?>
