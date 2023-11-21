<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Testimonial Slider</title>
<!-- Include Owl Carousel CSS files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>
    /* Slider container */
    .testimonial-slider {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
        padding: 40px 0;
    }

    /* Individual testimonial item */
    .testimonial-item {
        background: #f9f9f9;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin: 0 10px;
    }

    /* Client photo */
    .client-photo {
        border-radius: 50%;
        margin-bottom: 10px;
    }

    /* Client name and position */
    .client-name {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .client-position {
        color: #777;
        font-size: 0.9em;
        margin-bottom: 15px;
    }

    /* Testimonial text */
    .testimonial-text {
        font-size: 0.95em;
        line-height: 1.6;
    }

    /* Star rating */
    .star-rating {
        color: #ffd700;
        margin-bottom: 15px;
    }

    /* Previous and next buttons */
    .owl-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }

    .owl-prev, .owl-next {
        background: #ddd;
        padding: 10px 20px;
        border-radius: 30px;
        cursor: pointer;
    }

    .owl-prev:hover, .owl-next:hover {
        background: #ccc;
    }
</style>
</head>
<body>

<div class="testimonial-slider owl-carousel owl-theme">
    <!-- Testimonial item 1 -->
    <div class="testimonial-item">
        <img src="client-photo1.jpg" alt="Jacob William" class="client-photo">
        <div class="client-name">Jacob William</div>
        <div class="client-position">Selling Agents</div>
        <div class="star-rating">★★★★★</div>
        <p class="testimonial-text">Precious ipsum dolor sit amet consectetur adipiscing elit...</p>
    </div>

    <!-- Testimonial item 2 -->
    <div class="testimonial-item">
        <img src="client-photo2.jpg" alt="Kelian Anderson" class="client-photo">
        <div class="client-name">Kelian Anderson</div>
        <div class="client-position">Selling Agents</div>
        <div class="star-rating">★★★★★</div>
        <p class="testimonial-text">Precious ipsum dolor sit amet consectetur adipiscing elit...</p>
    </div>

    <!-- Additional testimonial items can be added here -->
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Owl Carousel JS file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $(".testimonial-slider").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: false,
            autoplay: false,
            navText: ['<', '>']
        });
    });
</script>

</body>
</html>
