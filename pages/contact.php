<section class="page-header">
    <img src="images/about us/IMG_8272.JPG" alt="Global office network" class="hero-background" loading="eager">
    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold reveal visible">Contact us</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal visible" style="transition-delay: 0.2s;">
            Get in touch with our teams around the world.
        </p>
    </div>
</section>

<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <div class="reveal">
                <h2 class="text-3xl font-bold mb-6">Send us a message</h2>
                 <form action="contact.php" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block font-semibold mb-2">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block font-semibold mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block font-semibold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple" required></textarea>
                    </div>
                    <button type="submit" class="bg-purple text-white font-semibold py-3 px-8 rounded-full w-full hover:opacity-90 transition-opacity">Submit</button>
                </form>
            </div>
            <div class="reveal">
                 <h2 class="text-3xl font-bold mb-6">Our offices</h2>
                 <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold">Dubai (Headquarters)</h3>
                        <p class="text-gray-600">123 Energy Avenue, Business Bay, Dubai, UAE</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Singapore</h3>
                        <p class="text-gray-600">456 Marina Boulevard, Singapore</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">London</h3>
                        <p class="text-gray-600">789 Commodity Exchange, London, UK</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>