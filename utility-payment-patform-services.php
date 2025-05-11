<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sec2Pay - Banking Platform Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</head>

<body class="bg-white font-inter">

    <?php include_once('includes/header.php'); ?>


    <main class="overflow-hidden">

        <!-- hero section -->
        <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10 pt-12">
            <!-- Top-left Circular Gradient (Reddish) - Visible on sm screens and up -->
            <div class="absolute top-[5%] -left-[20%] w-[50%] h-[100%] rounded-full hidden sm:block"
                style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
                data-aos="fade" data-aos-duration="1500" data-aos-once="true">
            </div>

            <!-- Top-right Circular Gradient (Bluish) - Visible on sm screens and up -->
            <div class="absolute -top-[20%] -right-[20%] w-[50%] h-[100%] rounded-full hidden sm:block"
                style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
                data-aos="fade" data-aos-duration="1500" data-aos-delay="200" data-aos-once="true">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <!-- Content - Always First -->
                        <div class="p-4 md:p-8 lg:p-10 pt-8 md:w-2/5" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-once="true">
                            <p class="font-bold text-primary-600 text-sm sm:text-base mb-2" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                                Utility Payment Platform Services
                            </p>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                                Simplify Utility Payments
                            </h1>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4"
                                data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                                Through Your Business
                            </h1>
                            <p class="text-black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up"
                                data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                                Integrate essential payment services into your business with Sec2Pay.
                            </p>

                            <a href="https://app.sec2pay.in/?src=website" target="_blank"
                                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                                Start offering Utility Services
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <div class="mt-6 md:mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                                <div class="flex -space-x-2 ml-1">
                                    <img src="https://randomuser.me/api/portraits/men/1.jpg"
                                        class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                                    <img src="https://randomuser.me/api/portraits/women/2.jpg"
                                        class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                                    <img src="https://randomuser.me/api/portraits/men/3.jpg"
                                        class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                                    <img src="https://randomuser.me/api/portraits/women/4.jpg"
                                        class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                                </div>
                                <span class="text-gray-600 text-xs sm:text-sm">1 Lac+ Retail partners across
                                    India</span>
                            </div>
                        </div>

                        <!-- Image Section - Always Second - Larger Size -->
                        <div class="relative md:w-3/5" data-aos="fade-left" data-aos-duration="1200"
                            data-aos-once="true">
                            <!-- Main Dashboard Image -->
                            <div class="relative z-20 mt-6 md:mt-0">
                                <img src="assets/images/utility-payment-patform-services/banner.png"
                                    alt="Utility Payment Platform Dashboard"
                                    class="w-full h-auto object-contain lg:max-h-[600px]" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section ends -->

        <!-- Banking Overview Section with Split Background -->
        <section class="relative py-10" data-aos="fade" data-aos-duration="800" data-aos-once="true">
            <!-- Top background - light blue -->
            <div class="absolute top-0 left-0 right-0 h-[60%] bg-secondary-100"></div>
            <!-- Bottom background - white -->
            <div class="absolute bottom-0 left-0 right-0 h-[40%] bg-white"></div>

            <!-- Content -->
            <div class="relative container mx-auto max-w-6xl px-4">
                <!-- Section Header -->
                <div class="text-center mb-12 z-10 relative" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-once="true">
                    <h2 class="text-4xl font-bold text-primary-800 mb-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="800" data-aos-once="true">Utility Overview</h2>
                    <p class="text-gray-700 max-w-4xl mx-auto text-center leading-relaxed" data-aos="fade-up"
                        data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                        Sec2Pay's Utility Payment Platform enables enterprises to offer a one-stop solution for
                        electricity, gas, water, internet bill payments, mobile recharges, and FASTag services. This
                        integration allows businesses to support their customers' everyday financial needs, customized
                        by the selected service package.
                    </p>
                </div>

                <!-- Feature Cards positioned to straddle the boundary -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 relative" style="top: calc(60% - 12rem);">
                    <!-- Feature 1 -->
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 h-full flex items-center"
                        data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                        <p class="text-gray-600 text-md">
                            Support for multiple utility providers through a unified interface.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 h-full flex items-center"
                        data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                        <p class="text-gray-600 text-md">
                            Real-time payment status updates.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 h-full flex items-center"
                        data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                        <p class="text-gray-600 text-md">
                            Secure transactions with quick settlements.
                        </p>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="text-center relative" style="top: calc(60% - 12rem);" data-aos="fade-up"
                    data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
                    <a href="https://app.sec2pay.in/?src=website" target="_blank"
                        class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-md transition duration-300">
                        Explore Services
                    </a>
                </div>
            </div>
        </section>

        <!-- Join Section with Dark Blue Background -->
        <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
            <div class="container mx-auto">
                <!-- Join Panel with Starry Background -->
                <div class="bg-gradient-to-br from-secondary-700 to-secondary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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

                        <p class="text-base sm:text-lg text-white sm:mb-2 relative z-10" data-aos="fade-up"
                            data-aos-delay="300">
                            Start for free — upgrade anytime.
                        </p>

                        <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
                            <p class="text-white mb-4 sm:mb-6">
                                <a href="https://app.sec2pay.in/?src=website" target="_blank" class="underline hover:text-white transition">
                                    Joining as an organization? Contact Sales
                                </a>
                            </p>

                            <a href="https://app.sec2pay.in/?src=website" target="_blank"
                                class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                                data-aos="zoom-in" data-aos-delay="500">
                                Sign up free
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 ml-2"
                                    viewBox="0 0 20 20" fill="currentColor">
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