<?php
$image_url_1 = wp_get_attachment_url(51);
$image_url_2 = wp_get_attachment_url(52);
$image_url_3 = wp_get_attachment_url(53);
$image_url_4 = wp_get_attachment_url(54);

?>
<section id="home-sale" class="fade-in-section">
    <div class="home-sale-container">
        <h1>Homes For Sale</h1>
        <div class="home-sale-wrapper">
            <div class="home-sale-wrap">
                <img src="<?php echo esc_url($image_url_1); ?>" alt="Whitestone Logo">
                <div class="sale-desc">
                    <h4>33 Convoy Lane, Seaside Peninsula</h4>
                    <p>Priced From $699,000</p>
                </div>
                <button id="learn-more">Learn More</button>
            </div>
            <div class="home-sale-wrap">
                <img src="<?php echo esc_url($image_url_2); ?>" alt="Whitestone Logo">
                <div class="sale-desc">
                    <h4>48 Torrington Crescent, Glen Innes</h4>
                    <p>Priced From $749,000</p>
                </div>
                <button id="learn-more">Learn More</button>
            </div>
            <div class="home-sale-wrap">
                <img src="<?php echo esc_url($image_url_3); ?>" alt="Whitestone Logo">
                <div class="sale-desc">
                    <h4>18 Commissariat Road, Mt Wellington</h4>
                    <p>Priced From $779,000</p>
                </div>
                <button id="learn-more">Learn More</button>
            </div>
            <div class="home-sale-wrap">
                <img src="<?php echo esc_url($image_url_4); ?>" alt="Whitestone Logo">
                <div class="sale-desc">
                    <h4>48 Torrington Crescent, Glen Innes</h4>
                    <p>Priced From $749,000</p>
                </div>
                <button id="learn-more">Learn More</button>
            </div>
        </div>
    </div>
</section>