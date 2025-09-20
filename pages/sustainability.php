<?php
// pages/sustainability.php
?>

<style>
/* Base Styles */
.sustainability-section {
    font-family: 'Inter', sans-serif;
    color: #334155;
}

.icon-card {
    background-color: #ffffff;
    border-radius: 1.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.icon-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.icon-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #e5e7eb;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    transition: background-color 0.3s ease;
}

.icon-card:hover .icon-circle {
    background-color: #d1d5db;
}

.icon {
    font-size: 2.5rem;
    color: #1e3a8a;
}

/* Scroll-based animation */
.scroll-animate {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.scroll-animate.is-visible {
    opacity: 1;
    transform: translateY(0);
}

/* Specific Section Styles */
.bg-light-gray {
    background-color: #f8f9fa;
}

.commitment-section img {
    border-radius: 1.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}
</style>

<section class="page-header">
    <img src="images/future goals/f91dd928e4a110edd2c07c88550a1184 2.JPG" alt="Wind turbines in a field, representing renewable energy" class="hero-background" loading="eager">
    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold reveal visible">Sustainability & Responsibility</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal visible" style="transition-delay: 0.2s;">
            Committed to responsible practices that safeguard our planet and support the global energy transition.
        </p>
    </div>
</section>

<section class="py-20 lg:py-32 bg-white sustainability-section commitment-section">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
             <div class="scroll-animate" style="transition-delay: 0s;">
                <img loading="lazy" src="images/future goals/0fc71065f03b21fa2489b267c4ca24fe.JPG" alt="Close-up of solar panels" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="scroll-animate" style="transition-delay: 0.2s;">
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Our Commitment to a Sustainable Future</h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    Falco is dedicated to safe, ethical trading and pioneering cleaner energy solutions. We adhere to the highest Environmental, Social, and Governance (ESG) standards and responsible practices to ensure a sustainable future for our industry and the communities we serve.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Our strategy focuses on reducing our operational footprint, investing in renewable energy, and promoting a culture of safety and responsibility across our entire value chain.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 lg:py-32 bg-light-gray sustainability-section">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 scroll-animate">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Our ESG Approach</h2>
            <p class="text-lg text-gray-700">
                We integrate ESG principles into every aspect of our business, from investment decisions to daily operations, to create long-term value for all our stakeholders.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <!-- Environmental Pillar -->
            <div class="icon-card scroll-animate" style="transition-delay: 0s;">
                <div class="icon-circle">
                    <i class="fas fa-leaf icon"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Environmental</h3>
                <p class="text-gray-600">
                    Minimizing our carbon footprint and investing in eco-friendly technologies.
                </p>
            </div>

            <!-- Social Pillar -->
            <div class="icon-card scroll-animate" style="transition-delay: 0.1s;">
                <div class="icon-circle">
                    <i class="fas fa-users icon"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Social</h3>
                <p class="text-gray-600">
                    Prioritizing human rights, community well-being, and safe working conditions.
                </p>
            </div>

            <!-- Governance Pillar -->
            <div class="icon-card scroll-animate" style="transition-delay: 0.2s;">
                <div class="icon-circle">
                    <i class="fas fa-balance-scale icon"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Governance</h3>
                <p class="text-gray-600">
                    Maintaining transparent and ethical business practices at all levels.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// A simple Intersection Observer to reveal elements on scroll
document.addEventListener("DOMContentLoaded", function() {
    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll(".scroll-animate").forEach(element => {
        observer.observe(element);
    });
});
</script>
