<?php
// pages/teams.php
?>

<style>
/* Base Styles */
.team-section {
    font-family: 'Inter', sans-serif;
    color: #334155;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 2.5rem;
}

@media (min-width: 640px) {
    .team-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .team-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Card Styles */
.team-card {
    background-color: #ffffff;
    border-radius: 1.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 2rem;
    position: relative;
    perspective: 1000px;
    height: 350px; /* Added a fixed height to prevent content shifting on flip */
}

.team-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
}

.team-card:hover .card-inner {
    transform: rotateY(180deg);
}

.card-front, .card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    border-radius: 1.5rem;
}

.card-front {
    background: #ffffff;
    z-index: 2;
}

.card-back {
    background: linear-gradient(135deg, #1e3a8a, #3b82f6);
    color: #ffffff;
    transform: rotateY(180deg);
}

.profile-image-container {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 1.5rem;
    border: 4px solid #f9fafb;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.team-card:hover .profile-image {
    transform: scale(1.1);
}

/* Social Icons */
.social-icons {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.social-icon {
    color: #ffffff;
    transition: color 0.3s ease;
}

.social-icon:hover {
    color: #e5e7eb;
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
</style>

<section class="page-header">
    <img src="images/team/1a3f05d5-9271-4775-802c-47a3e793d5f1.JPG" class="hero-background" loading="eager">
    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold reveal visible">Leadership & Team</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal visible" style="transition-delay: 0.2s;">
            Our success is fueled by a team of seasoned professionals with deep industry expertise.
        </p>
    </div>
</section>

<section class="py-20 lg:py-32 bg-gray-50 team-section">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto mb-16 scroll-animate">
            <h2 class="text-4xl font-bold mb-4">Empowering Success Through Expert Leadership</h2>
            <p class="text-lg text-gray-700">
                Our team of senior professional managers brings a wealth of experience and rich industry resources to guide our strategic direction and deliver unparalleled value.
            </p>
        </div>

        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-card scroll-animate" style="transition-delay: 0s;">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="profile-image-container">
                            <img src="images/team/placeholder-1.jpg" alt="Profile of Team Member 1" class="profile-image">
                        </div>
                        <h3 class="text-2xl font-bold mb-1">John Doe</h3>
                        <p class="text-lg text-gray-500 mb-4">CEO & Founder</p>
                    </div>
                    <div class="card-back">
                        <p class="leading-relaxed text-center">
                            With over 20 years of experience in the energy sector, John leads with a visionary approach, focusing on innovation and strategic growth.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card scroll-animate" style="transition-delay: 0.1s;">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="profile-image-container">
                            <img src="images/team/placeholder-2.jpg" alt="Profile of Team Member 2" class="profile-image">
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Jane Smith</h3>
                        <p class="text-lg text-gray-500 mb-4">Head of Operations</p>
                    </div>
                    <div class="card-back">
                        <p class="leading-relaxed text-center">
                            Jane's expertise in logistical management ensures safe and timely operations across our global supply chains.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card scroll-animate" style="transition-delay: 0.2s;">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="profile-image-container">
                            <img src="images/team/placeholder-3.jpg" alt="Profile of Team Member 3" class="profile-image">
                        </div>
                        <h3 class="text-2xl font-bold mb-1">Michael Chen</h3>
                        <p class="text-lg text-gray-500 mb-4">Chief Financial Officer</p>
                    </div>
                    <div class="card-back">
                        <p class="leading-relaxed text-center">
                            Michael's sharp financial acumen and market insights drive our profitability and sustainable growth strategies.
                        </p>
                    </p>
                    </div>
                </div>
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
