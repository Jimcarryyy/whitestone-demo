<div class="slider-wrapper">
  <div class="slides" id="slider">
    <?php
      $images = [49, 47, 48, 49, 47]; 
      foreach ($images as $id) {
        $url = wp_get_attachment_url($id);
        echo '<img src="' . esc_url($url) . '" alt="Whitestone Slide">';
      }
    ?>
  </div>
</div>

