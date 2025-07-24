<?php
$image_url1 = wp_get_attachment_url(44);
$image_url2 = wp_get_attachment_url(41);
$image_url3 = wp_get_attachment_url(42);
?>
<div class="badge-container">
    <div class="badge-wrapper">
        <div class="badge-wrap">
            <img src="<?php echo esc_url($image_url1); ?>" alt="Whitestone Badge">
            <p>Vetted Developers</p>
        </div>
        <div class="badge-wrap">
            <img src="<?php echo esc_url($image_url2); ?>" alt="Whitestone Badge">
            <p>High Quality Builds</p>
        </div>
        <div class="badge-wrap">
            <img src="<?php echo esc_url($image_url3); ?>" alt="Whitestone Badge">
            <p>Wealth Creation</p>
        </div>
    </div>
</div>