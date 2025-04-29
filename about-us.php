<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sec2Pay - Banking Platform Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</head>

<body class="bg-white font-inter">

    <?php include_once('includes/header.php'); ?>


    <main>


<!-- Enhanced Hero Section with Bidirectional AOS Animations -->
<section class="relative overflow-hidden py-10 pt-20 md:pt-24 md:py-10 bg-white">
    <!-- Top-left Circular Gradient (Pinkish) - Exactly 50% visible -->
    <div class="absolute -top-[4%] -left-[23%] w-[50%] h-[50%] rounded-full"
        style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 70%);">
    </div>

    <!-- Top-right Circular Gradient (Bluish) - Exactly 50% visible -->
    <div class="absolute -top-[4%] -right-[20%] w-[50%] h-[50%] rounded-full"
        style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 70%);">
    </div>

    <!-- Decorative Shapes with AOS animations -->
    <div class="absolute top-10 md:top-[10%] left-2 md:left-10 lg:left-24 opacity-80 w-24 md:w-32 lg:w-auto z-10"
        data-aos="fade-right" data-aos-duration="800" data-aos-mirror="true">
        <img src="assets/images/home/svg/orange-icon.svg" alt="orange-icon" class="w-full h-auto">
    </div>

    <div class="absolute top-10 md:top-[10%] right-2 md:right-10 lg:right-24 opacity-80 w-24 md:w-32 lg:w-auto z-10"
        data-aos="fade-left" data-aos-duration="800" data-aos-mirror="true">
        <img src="assets/images/home/svg/blue-icon.svg" alt="blue-icon" class="w-full h-auto">
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 sm:px-6 relative z-20">
        <!-- Hero Text with AOS animations -->
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-secondary-500 leading-tight"
                data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
                 Our story</h1>
            <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 text-gray-700 max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">Simplify your operations with a comprehensive platform <br class="hidden sm:block">offering essential financial, travel, and utility services tailored to<br class="hidden sm:block"> your business needs.
                
            </p>
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-mirror="true">
                <a href="#"
                    class="inline-block bg-secondary-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-md text-lg font-medium hover:bg-secondary-600 transition-all duration-300 hover:shadow-lg hover:scale-105 transform z-10">
                    Watch our story
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Join India's Growing -->
<section class="bg-primary-700 text-white min-h-[300px] md:min-h-[400px]">
        <div class="container mx-auto px-4 md:px-24 py-16 lg:py-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Left Section - Heading and CTA -->
                <div class="lg:col-span-4 space-y-6 animate-fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight">Join India's Growing Travel Network</h1>
                    <p class="text-lg text-white/90">Sec2Pay Your Partner in Making Digital Business Growth Simple</p>
                    <div class="pt-4">
                        <a href="#" class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-md transition duration-300">Begin Your Journey</a>
                    </div>
                </div>

             
            <!-- Right Section - Stats -->
            <div class="lg:col-span-8">
                <div class="grid grid-cols-2 gap-2 h-full">
                    <!-- Top-Left Stat -->
                    <div class="bg-primary-700 p-6 flex flex-col items-center justify-center text-center">
                        <div class="text-sm mb-2">Established network serving</div>
                        <div class="text-xl font-bold">1 Lac+ retail merchants</div>
                    </div>
                    
                    <!-- Top-Right Stat -->
                    <div class="bg-gradient-to-br from-indigo-500 to-red-400 p-6 flex flex-col items-center justify-center text-center">
                        <div class="text-sm mb-2">Partnerships with</div>
                        <div class="text-xl font-bold">20+ government departments</div>
                    </div>
                    
                    <!-- Bottom-Left Stat -->
                    <div class="bg-primary-700 p-6 flex flex-col items-center justify-center text-center">
                        <div class="text-sm mb-2">Quick settlement</div>
                        <div class="text-xl font-bold">cycles</div>
                    </div>
                    
                    <!-- Bottom-Right Stat -->
                    <div class="bg-primary-700 p-6 flex flex-col items-center justify-center text-center">
                        <div class="text-sm mb-2">24/7 Customer</div>
                        <div class="text-xl font-bold">Support team</div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>


<!-- Travel Network Section -->



<!-- Join Section with Dark Blue Background -->
<section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
    <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-primary-600 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
            data-aos="fade-up" data-aos-duration="1000">

            <!-- Stars Background SVG -->
            <div class="absolute z-0 opacity-30 right-0">
                <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
                    class="w-full h-full object-cover">
            </div>

            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
                    data-aos="fade-up" data-aos-delay="200">
                    Join Sec2pay today
                </h1>

                <p class="text-base sm:text-lg text-gray-300 mb-6 sm:mb-8 relative z-10" data-aos="fade-up"
                    data-aos-delay="300">
                    Start for free — upgrade anytime.
                </p>

                <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
                    <p class="text-gray-300 mb-4 sm:mb-6">
                        <a href="#" class="underline hover:text-white transition">
                            Joining as an organization? Contact Sales
                        </a>
                    </p>

                    <a href="#"
                        class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                        data-aos="zoom-in" data-aos-delay="500">
                        Sign up free
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Join Section -->
<!-- Footer Section -->


</main>

<!-- Main Header Banner -->


<?php include_once('includes/footer.php'); ?>

<script src="./assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>