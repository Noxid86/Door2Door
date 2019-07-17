<!-- SET UP DATA -->
<?php
$post_name = get_the_title($post);
$post_id = get_field('ID');
$post_phone = get_field('phone');
$post_address = get_field('address');
$post_last_gift = get_field('last_gift');
$post_gift_type = get_field('type');
?>
<!-- CONTACT HTML COMPONENT -->
<section class="donor_wrapper" contact_id='<?php echo $post_id?>'>
  <button id="edit_contact">
    <?php
    $dir = get_template_directory_uri();
    echo file_get_contents($dir.'/images/icons/edit-button.svg');
    ?>
  </button>
  <!-- Display Info -->
  <div class="info_wrapper">
    <div class="donor_name"><p><?php echo $post_name?></p></div>
    <div class="donor_address"><p><?php echo $post_address?></p></div>
    <div class="donor_phone"><p><?php echo $post_phone?></p></div>
    <div class="donor_last_gift"><p><?php echo $post_last_gift?></p></div>
    <div class="donor_gift_type"><p><?php echo $post_gift_type?></p></div>
    <div class="knock">Knock</div>
  </div>
  <!-- Hidden Response Panel -->
  <div class="response_wrapper">
    <div class="contact response_button">Contact</div>
    <div class="not_home response_button">Not Home</div>
    <div class="try_later response_button">Try Later</div>
    <div class="bad_address response_button">Bad address</div>
    <div class="listed response_button">Listed</div>
    <div class="not_listed response_button">Not Listed</div>
    <div class="giving response_button">Giving</div>
    <div class="not_giving response_button">Not Giving</div>
    <div class="money response_button">Money</div>
    <div class="spouse response_button">Spouse</div>
    <div class="research response_button">Research</div>
  </div>
</section>
