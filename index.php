<?php include 'header.php'; ?>
<section id="home" class="bg-warning text-white text-center" style="padding: 200px 0;">
    <h1 class="display-4 mb-3">Coffee you can trust from <span class="text-brown">seed</span> to cup</h1>
    <p class="lead mb-4">We source the finest coffee, roasted and delivered responsibly.</p>
    <button class="btn btn-success btn-lg btn-more">Shop All Coffee</button>
</section> 
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-width: 100%; max-height: 600px; overflow: hidden;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://placehold.co/1067x600" loading="lazy" class="d-block img img-fluid w-100" alt="First Slide">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.co/1067x600" loading="lazy" class="d-block img img-fluid w-100" alt="Second Slide">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.co/1067x600" loading="lazy" class="d-block img img-fluid w-100" alt="Third Slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section id="features" class="container py-5">
    <div class="row align-items-center mb-4">
        <div class="col-md-2 text-center">
            <img src="https://placehold.co/800x800" loading="lazy" class="feature-img">
        </div>
        <div class="col-md-10">
            <h2 class="feature-number">01</h2>
            <h4 class="fw-bold">Expertly Roasted Beans</h4>
            <p class="feature">Our beans are carefully selected and roasted to perfection, ensuring the richest flavors in every cup.</p>
        </div>
    </div>

    <div class="row align-items-center mb-4">
        <div class="col-md-2 text-center">
            <img src="https://placehold.co/800x800" loading="lazy" class="feature-img">
        </div>
        <div class="col-md-10">
            <h2 class="feature-number">02</h2>
            <h4 class="fw-bold">Sustainably Sourced</h4>
            <p class="feature">We partner with ethical coffee farms to ensure sustainability, fair wages, and a positive environmental impact.</p>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-md-2 text-center">
            <img src="https://placehold.co/800x800" loading="lazy" class="feature-img">
        </div>
        <div class="col-md-10">
            <h2 class="feature-number">03</h2>
            <h4 class="fw-bold">Brewed for Perfection</h4>
            <p class="feature">Our coffee is designed for all brewing methods, ensuring a consistently smooth and balanced cup.</p>
        </div>
    </div>
</section>

<section id="products" class="container-fluid py-5">
    <h2 class="text-center mb-4 fw-bold text-dark">Our Best Coffees</h2>
    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <!-- Product 1 -->
            <div class="swiper-slide">
                <div class="product-card">
                    <img src="https://placehold.co/800x800" loading="lazy" alt="Espresso Beans">
                    <h5>Espresso Beans</h5>
                    <p class="price">$14.99</p>
                    <button class="btn btn-shop">Buy Now</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="swiper-slide">
                <div class="product-card">
                    <img src="https://placehold.co/800x800" loading="lazy" alt="Organic Arabica">
                    <h5>Organic Arabica</h5>
                    <p class="price">$18.99</p>
                    <button class="btn btn-shop">Buy Now</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="swiper-slide">
                <div class="product-card">
                    <img src="https://placehold.co/800x800" loading="lazy" alt="Colombian Blend">
                    <h5>Colombian Blend</h5>
                    <p class="price">$16.99</p>
                    <button class="btn btn-shop">Buy Now</button>
                </div>
            </div>
        </div>
        <!-- Move the navigation buttons OUTSIDE the .swiper-wrapper -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    
</section>
<section id="faq" class="container py-5">
    <h2 class="text-center fw-bold text-dark mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">

        <!-- FAQ Item 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingOne">
                <button class="accordion-button fw-bold faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                    Where do you source your coffee from?
                </button>
            </h2>
            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We source our coffee beans from sustainable farms across Latin America, Africa, and Asia, ensuring both quality and ethical practices.
                </div>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingTwo">
                <button class="accordion-button collapsed fw-bold faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                    Do you offer coffee subscriptions?
                </button>
            </h2>
            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes! We offer flexible coffee subscriptions to deliver your favorite brew right to your doorstep, tailored to your taste.
                </div>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingThree">
                <button class="accordion-button collapsed fw-bold faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                    What brewing methods work best with your coffee?
                </button>
            </h2>
            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Our coffee is versatile—ideal for espresso, French press, pour-over, AeroPress, and even cold brew. Enjoy the perfect cup every time.
                </div>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingFour">
                <button class="accordion-button collapsed fw-bold faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                    How should I store my coffee for optimal freshness?
                </button>
            </h2>
            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Store your coffee in an airtight container away from direct sunlight, heat, and moisture to maintain its freshness and flavor.
                </div>
            </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingFive">
                <button class="accordion-button collapsed fw-bold faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                    Do you offer decaf options?
                </button>
            </h2>
            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, we have a selection of decaf blends that retain the rich flavors of our regular coffee while offering a caffeine-free option.
                </div>
            </div>
        </div>

        <!-- FAQ Item 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingSix">
                <button class="accordion-button collapsed fw-bold faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                    When is the best time to grind the beans?
                </button>
            </h2>
            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    For maximum flavor, we recommend grinding your beans just before brewing. This helps preserve the essential oils and aromas.
                </div>
            </div>
        </div>

    </div>
</section>
<section id="about" class="container-fluid py-5" style="background-color: #6f4e37; min-height: 600px;">
    <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="https://placehold.co/800x800" loading="lazy" class="img-fluid rounded" alt="About Our Coffee">
        </div>
        <!-- Text Column -->
        <div class="col-md-6">
            <h2 class="fw-bold text-white">About Us</h2>
            <p class="lead text-white">Our journey began with a passion for exceptional coffee. Every cup is a result of careful sourcing, expert roasting, and a commitment to sustainability.</p>
            <p class="text-white">We work directly with ethical coffee farms to bring you fresh, high-quality beans that make every sip a delightful experience. Whether you’re into a strong espresso or a smooth, rich blend, our coffee is crafted to perfection from seed to cup.</p>
            <button class="btn btn-light btn-lrn-more">Learn More</button>
        </div>
    </div>
</section>
<script>
    var swiper = new Swiper(".product-slider", {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2, // 2 products per row on tablets
            },
            1024: {
                slidesPerView: 3, // 3 products per row on desktop
            }
        }
    });
</script>
<?php include 'footer.php'; ?>
