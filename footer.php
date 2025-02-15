    <footer class="bg-success text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <!-- Brand/About Column -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5 class="fw-bold">Coffee Shop</h5>
                    <p class="footer-text">
                        Where every cup tells a story. Proudly sourcing and roasting 
                        the finest beans for coffee enthusiasts worldwide.
                    </p>
                </div>

                <!-- Quick Links Column -->
                <div class="col-md-2 mb-3 offset-md-2 mb-md-0">
                    <h5 class="fw-bold">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-white text-decoration-none footer-link">Home</a></li>
                        <li><a href="#features" class="text-white text-decoration-none footer-link">Features</a></li>
                        <li><a href="#products" class="text-white text-decoration-none footer-link">Products</a></li>
                        <li><a href="#faqs" class="text-white text-decoration-none footer-link">FAQs</a></li>
                        <li><a href="#about" class="text-white text-decoration-none footer-link">About</a></li>
                    </ul>
                </div>

                <!-- Social Icons Column -->
                <div class="col-md-3 offset-md-1">
                    <h5 class="fw-bold">Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white nav-social fs-4">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-white nav-social fs-4">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white nav-social fs-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Divider -->
            <hr class="border-light my-4">
            <!-- Copyright -->
            <div class="text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> Created by <span style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: #ffc107;">Eyüp İrfan Çelik</span>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const navElements = document.querySelectorAll(".navbar-nav .nav-link");

        navElements.forEach((element) => {
            element.addEventListener("mouseenter", (e) => {
                for (let i = 0; i < 5; i++) { // Generate multiple coffee particles
                    let coffeeParticle = document.createElement("span");
                    coffeeParticle.innerHTML = "☕";
                    coffeeParticle.classList.add("coffee-particle");

                    // Set initial position near the hovered link
                    let rect = e.target.getBoundingClientRect();
                    coffeeParticle.style.position = "fixed";
                    coffeeParticle.style.left = `${rect.left + Math.random() * rect.width}px`;
                    coffeeParticle.style.top = `${rect.top + Math.random() * rect.height}px`;

                    document.body.appendChild(coffeeParticle);

                    // Animate the particles upwards and fade out
                    gsap.to(coffeeParticle, {
                        y: -30, // Moves upwards
                        opacity: 0, // Fade out
                        duration: 1.5,
                        ease: "power1.out",
                        onComplete: () => coffeeParticle.remove(),
                    });
                }
            });
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 