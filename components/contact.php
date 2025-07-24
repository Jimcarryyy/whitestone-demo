<section id="contact" class="fade-in-section">
    <div class="contact-container">
        <div class="contact-wrapper">
            <div class="contact-input-wrapper">
                <h2>Get In Touch</h2>
                <form action="">
                    <div class="form-1">
                        <input type="text" name="fn" id="fn" placeholder="First Name*">
                        <input type="text" name="ls" id="ls" placeholder="Last Name*">
                    </div>
                    <div class="form-2">
                        <input type="text" placeholder="Email Address*">
                        <input type="text" placeholder="Phone Number*">
                        <textarea name="Message" id="Message-area" placeholder="Message" rows="3"></textarea>
                    </div>
                    <button id="submit">Submit</button>
                </form>
            </div>
            <div class="contact-img">
                <?php $image_url = wp_get_attachment_url(58); ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="Whitestone Image">
            </div>
        </div>
    </div>
</section>