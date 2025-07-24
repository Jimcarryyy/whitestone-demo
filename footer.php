<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package whitestone
 */

$footer_img_1   = wp_get_attachment_url(59);
$footer_img_2   = wp_get_attachment_url(60);
$footer_img_3   = wp_get_attachment_url(61);
$footer_img_4   = wp_get_attachment_url(62);
$footer_icon_1  = wp_get_attachment_url(64);
$footer_icon_2  = wp_get_attachment_url(65);
$footer_icon_3  = wp_get_attachment_url(66);
$reins_img      = wp_get_attachment_url(68);
$numero_image   = wp_get_attachment_url(67);
?>

<footer id="colophon" class="site-footer">
  <div class="site-info">

    <div class="footer-wrapper-1">

      <div class="footer-wrap-1">
        <h3>Stay Connected</h3>
        <div class="footer-loc">
          <div class="footer-img-1">
            <img src="<?php echo esc_url($footer_img_1); ?>" alt="Stay Connected Image">
            <img src="<?php echo esc_url($footer_img_2); ?>" alt="Stay Connected Image">
            <img src="<?php echo esc_url($footer_img_3); ?>" alt="Stay Connected Image">
            <img src="<?php echo esc_url($footer_img_4); ?>" alt="Stay Connected Image">
          </div>
          <div class="footer-icons">
            <img src="<?php echo esc_url($footer_icon_1); ?>" alt="Social Icon">
            <img src="<?php echo esc_url($footer_icon_2); ?>" alt="Social Icon">
            <img src="<?php echo esc_url($footer_icon_3); ?>" alt="Social Icon">
          </div>
        </div>
      </div>

      <div class="footer-wrap-2">
        <h3>Quick Links</h3>
        <nav id="footer-nav">
          <?php
          wp_nav_menu([
            'theme_location' => 'menu-1',
            'menu_id'        => 'footer-primary-menu',
          ]);
          ?>
        </nav>
      </div>

      <div class="footer-wrap-3">
        <h3>Find Us</h3>
        <div class="footer-lay-con">
          <div class="footer-layer-1">
            <p>Level 9, 4 Williamson Ave, Grey Lynn, Auckland</p>
          </div>
          <div class="footer-layer-2">
            <p>Whitestone Group Limited is a Licensed Real Estate<br>
              Agency under the REAA 2008
            </p>
            <a href="#">Legal</a>
          </div>
          <div class="footer-layer-3">
            <img src="<?php echo esc_url($reins_img); ?>" alt="REINZ Logo">
          </div>
        </div>
      </div>

    </div> <!-- .footer-wrapper-1 -->

    <div class="footer-wrapper-2">
      <div class="footer-copyright">
        <p>2024</p>
        <span>|</span>
        <p>All Rights Reserved</p>
        <span>|</span>
        <div class="numero-con">
          <p>Designed by</p>
          <img src="<?php echo esc_url($numero_image); ?>" alt="Numero Logo">
        </div>
      </div>
    </div>

  </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
