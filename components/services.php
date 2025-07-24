<?php
$image_url = wp_get_attachment_url(55);
if ($image_url) :
?>
    <style>
        .services-wrapper {
            height: 765px;
            background-image: url('<?php echo esc_url($image_url); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }
    </style>
<?php endif; ?>

<section id="services" class="fade-in-section">
    <div class="services-container">
        <div class="services-wrapper">
            <div class="services-content">
                <h1>Our Services Don't Cost You!</h1>
                <p>Our services do not cost you! How does this work?
                    <br><br>
                    We are paid a fee by the developer, similar to how a mortgage broker is paid by the bank. Rest assured, our fee does not affect the price of the property in any way.
                    <br><br>
                    Our role is to present you with a selection of suitable properties from a range of developers, allowing you to choose the one that best meets your needs.
                </p>
                <button id="services-button">Get In Touch</button>
            </div>
        </div>
    </div>
</section>