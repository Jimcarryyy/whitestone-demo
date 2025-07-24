<?php
/**
 * Template Name: Home Page
 */

get_header();

$image_url_bg = wp_get_attachment_url(36);
if ($image_url_bg) :
    echo "<style>
        .home-container {
            height: 765px;
            background-image: url('" . esc_url($image_url_bg) . "');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }
    </style>";
endif;
?>

<i class="fa-solid fa-arrow-up"></i>

<section id="home" class="fade-in-section">
    <div class="home-container">
        <div class="home-wrapper">
            <div class="home-content">
                <h1>Your Property Journey <br><span>Starts Here.</span></h1>
                <p>We create trusted relationships that assist first home buyers and investors into high <br>
                    quality, new build real estate, creating long term financial stability and wealth.</p>
                <button id="explore-button">View Our Properties</button>
            </div>
        </div>
    </div>
</section>

<?php include get_stylesheet_directory() . '/components/badge.php'; ?>

<section id="about" class="fade-in-section">
    <div class="about-container">
        <div class="about-wrapper">
            <div class="about-content">
                <?php $image_url = wp_get_attachment_url(45); ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="Whitestone Image">
                <div class="about-wrap">
                    <h2>Auckland New Build <br> Real Estate Specialists</h2>
                    <p>Whitestone Group is a licensed, specialist new build real estate agency in Auckland. Whether you're a first-time home buyer, investor, or developer looking to sell out your project, we understand new build real estate inside and out and can provide support and guidance every step of the way.
                        <br><br>
                        With years of experience selling for some of New Zealand's most reputable developers, we bring a wealth of knowledge and expertise to every transaction.
                        <br><br>
                        As trusted advisors, we are committed to helping our clients achieve their property goals. With Whitestone Group, you can expect an unparalleled level of service and support throughout your property journey.
                    </p>
                    <button id="about-button">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="home-sold-container">
    <div class="sold-wrapper">
        <div class="sold-content">
            <h1>405+</h1>
            <h2>Homes Sold</h2>
        </div>
        <h2 id="specialist">We are Specialists at what we do.</h2>
    </div>
</div>

<?php
include get_stylesheet_directory() . '/components/sale.php';
include get_stylesheet_directory() . '/components/services.php';
include get_stylesheet_directory() . '/components/slides.php';

$image_url_2 = wp_get_attachment_url(56);
if ($image_url_2) :
    echo "<style>
        .purpose-wrap-1 {
            height: 365px;
            background-image: url('" . esc_url($image_url_2) . "');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: flex-end;
        }
    </style>";
endif;

$image_url_3 = wp_get_attachment_url(57);
if ($image_url_3) :
    echo "<style>
        .purpose-wrap-2 {
            height: 365px;
            background-image: url('" . esc_url($image_url_3) . "');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: flex-end;
        }
    </style>";
endif;
?>

<section id="purpose" class="fade-in-section">
    <div class="purpose-container">
        <div class="purpose-wrapper">
            <div class="purpose-wrap-1">
                <div class="purpose-ban">
                    <div class="purpose-banner-1">
                        <h2 id="first-home-2">First Home Buyers</h2>
                        <h2>Are you...</h2>
                        <p>Looking To Enter The <br> Property Market?</p>
                        <i class="fas fa-arrow-right fa-fw"></i>
                    </div>
                </div>
                <h2 id="first-home">First Home Buyers</h2>
            </div>
            <div class="purpose-wrap-2">
                <h2 id="first-home">Investors</h2>
                <div class="purpose-ban-2">
                    <div class="purpose-banner-2">
                        <h2 id="first-home-2">Investors</h2>
                        <h2>Are you...</h2>
                        <p>Looking To Invest <br> In Property?</p>
                        <i class="fas fa-arrow-left fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include get_stylesheet_directory() . '/components/testimonials.php';
include get_stylesheet_directory() . '/components/contact.php';
get_footer();
?>
