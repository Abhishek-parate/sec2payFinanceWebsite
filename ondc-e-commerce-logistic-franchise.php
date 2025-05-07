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
        <!-- Hero Section -->
        <section class="relative py-8 sm:py-12 md:py-12 bg-white overflow-hidden">
            <!-- Background Gradients - Hidden on mobile -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none hidden md:block">
                <!-- Top-left Circular Gradient (Bluish) -->
                <div class="absolute top-[5%] -left-[25%] w-[50%] h-[100%] rounded-full opacity-50"
                    style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 10%, rgba(222, 242, 255, 0.4) 50%, rgba(255, 255, 255, 0) 60%);"
                    data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                </div>

                <!-- Top-right Circular Gradient (Pinkish) -->
                <div class="absolute -top-[6%] -right-[25%] w-[50%] h-[100%] rounded-full opacity-50"
                    style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 10%, rgba(242, 219, 219, 0.4) 50%, rgba(255, 255, 255, 0) 60%);"
                    data-aos="fade" data-aos-duration="1500" data-aos-delay="200" data-aos-once="true">
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-center">
                        <!-- Content First on ALL screens -->
                        <div class="w-full md:w-1/2 p-4 sm:p-6 md:p-8 lg:p-12 order-1 mt-6 md:mt-12"
                            data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
                            <h1 class="text-3xl sm:text-4xl font-bold text-secondary-500" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                                Build a Reliable
                            </h1>
                            <h1 class="text-3xl sm:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4"
                                data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                                Delivery Network
                            </h1>
                            <p class="text-gray-500 mb-6 sm:mb-8" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="800" data-aos-once="true">
                                Enable your business to provide efficient logistics<br class="hidden sm:block">
                                solutions on ONDC
                            </p>

                           
                            
                            <a href="contact-us.php"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4"
                        data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                        Start Today                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                    </a>

                            <div class="mt-6 md:mt-8 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
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

                        <!-- Image ALWAYS after content -->
                        <div class="w-full md:w-1/2 order-2" data-aos="fade-left" data-aos-duration="1200"
                            data-aos-once="true">
                            <!-- Main Dashboard Image -->
                            <div class="relative z-20">
                                <img src="assets/images/odnc-e-commerce-lfp/odnc-e-com-lfp-hero.png" alt="Dashboard"
                                    class="w-full h-auto" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-8 sm:py-10 md:py-12 mt-6 bg-primary-600" data-aos="fade-up" data-aos-duration="1000"
            data-aos-once="true">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-primary-100 text-center mb-6 md:mb-8"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    Features & Functions
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8 max-w-4xl mx-auto">
                    <!-- Feature 1 - AI-Optimized Routes -->
                    <div class="p-4 sm:p-6 bg-primary-700 bg-opacity-30 rounded-xl hover:bg-primary-800 hover:bg-opacity-40 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                        <div class="flex items-center mb-4">
                            <div class="bg-secondary-500 rounded-full p-2 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                </svg>
                            </div>
                            <h3 class="text-lg sm:text-xl font-semibold text-secondary-500">AI-Optimized Routes</h3>
                        </div>
                        <p class="text-white ml-11">
                            Save costs with intelligent route planning tools.
                        </p>
                    </div>

                    <!-- Feature 2 - Real-Time Tracking -->
                    <div class="p-4 sm:p-6 bg-primary-700 bg-opacity-30 rounded-xl hover:bg-primary-800 hover:bg-opacity-40 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                        <div class="flex items-center mb-4">
                            <div class="bg-secondary-500 rounded-full p-2 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-lg sm:text-xl font-semibold text-secondary-500">Real-Time Tracking</h3>
                        </div>
                        <p class="text-white ml-11">
                            Offer live tracking for all deliveries.
                        </p>
                    </div>

                    <!-- Feature 3 - Seamless Integrations -->
                    <div class="p-4 sm:p-6 bg-primary-700 bg-opacity-30 rounded-xl hover:bg-primary-800 hover:bg-opacity-40 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                        <div class="flex items-center mb-4">
                            <div class="bg-secondary-500 rounded-full p-2 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg sm:text-xl font-semibold text-secondary-500">Seamless Integrations</h3>
                        </div>
                        <p class="text-white ml-11">
                            Connect directly with sellers and buyers for smooth operations.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Partnership Packages Section -->
        <section class="bg-red-50 py-10 px-4 sm:px-8 md:px-16 lg:px-20">
            <div class="container mx-auto px-4 md:px-6">
                <!-- Section Heading -->
                <h1 class="text-4xl font-bold mb-10 text-primary-500" data-aos="fade-up" data-aos-duration="800">
                    Partnership Packages
                </h1>

                <!-- Tab Buttons -->
                <div class="flex flex-wrap mb-10 gap-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <button
                        class="px-5 py-3 bg-secondary-500 text-white rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
                        data-tab="area-partner">
                        <span>Area Partner</span>
                    </button>
                    <button
                        class="px-5 py-3 bg-white text-primary-500 border border-gray-200 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
                        data-tab="multi-area-partner">
                        <span>Multi-Area Partner</span>
                    </button>
                    <button
                        class="px-5 py-3 bg-white text-primary-500 border border-gray-200 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
                        data-tab="city-partner">
                        <span>City Partner</span>
                    </button>
                </div>

                <!-- Content Area -->
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Left Content -->
                    <div class="w-full md:w-3/5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <!-- Heading -->
                        <h2 class="text-3xl font-semibold mb-6 text-secondary-500">
                            Operate in a single location<br>
                            with essential tools.
                        </h2>

                        <!-- Features List -->
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <span class="text-primary-500 mr-2">•</span>
                                <span class="text-primary-500">Single area rights</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-500 mr-2">•</span>
                                <span class="text-primary-500">Basic delivery management tools</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-500 mr-2">•</span>
                                <span class="text-primary-500">Standard customer support</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-500 mr-2">•</span>
                                <span class="text-primary-500">Fixed commission structure</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-500 mr-2">•</span>
                                <span class="text-primary-500">Training and onboarding support</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Right Image -->
                    <div class="w-full md:w-2/5 flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                        <div class="max-w-xs">
                            <img src="assets/images/odnc-e-commerce-lfp/package.png" alt="Location map with pin"
                                class="w-full">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Platform Services Section -->
        <section class="py-10 px-4 bg-white">
            <!-- Increased max-width from max-w-6xl to max-w-7xl -->
            <div class="max-w-7xl mx-auto">
                <!-- Container with light pink background -->
                <div class="bg-primary-100 rounded-xl p-8 md:p-12">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <!-- Left Column - Services List -->
                        <div class="w-full md:w-1/2">
                            <h2 class="text-3xl md:text-4xl font-bold text-secondary-500 mb-8">Why Choose Our
                                </br>Platform</h2>
                            <ul class="space-y-5">
                                <!-- Service Item 1 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1836_4570)">
                                                <path
                                                    d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                                                    fill="white" stroke="#F15744" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                                                    stroke="#F15744" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1836_4570">
                                                    <rect width="19" height="19" fill="white"
                                                        transform="translate(0 3)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <span class="ml-3 text-primary-500 font-medium">Built for ONDC compliance</span>
                                </li>

                                <!-- Service Item 2 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1836_4570)">
                                                <path
                                                    d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                                                    fill="white" stroke="#F15744" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                                                    stroke="#F15744" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1836_4570">
                                                    <rect width="19" height="19" fill="white"
                                                        transform="translate(0 3)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <span class="ml-3 text-primary-500 font-medium">Direct integration with e-commerce
                                        sellers</span>
                                </li>

                                <!-- Service Item 3 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1836_4570)">
                                                <path
                                                    d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                                                    fill="white" stroke="#F15744" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                                                    stroke="#F15744" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1836_4570">
                                                    <rect width="19" height="19" fill="white"
                                                        transform="translate(0 3)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <span class="ml-3 text-primary-500 font-medium">Simple mobile app for delivery
                                        partners</span>
                                </li>

                                <!-- Service Item 4 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1836_4570)">
                                                <path
                                                    d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                                                    fill="white" stroke="#F15744" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                                                    stroke="#F15744" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1836_4570">
                                                    <rect width="19" height="19" fill="white"
                                                        transform="translate(0 3)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <span class="ml-3 text-primary-500 font-medium">Quick payment settlements</span>
                                </li>

                                <!-- Service Item 5 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1836_4570)">
                                                <path
                                                    d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                                                    fill="white" stroke="#F15744" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                                                    stroke="#F15744" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1836_4570">
                                                    <rect width="19" height="19" fill="white"
                                                        transform="translate(0 3)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <span class="ml-3 text-primary-500 font-medium">24/7 operational support</span>
                                </li>

                            </ul>
                        </div>

                        <!-- Right Column - Investment Illustration -->
                        <div class="w-full md:w-1/2">
                            <img src="assets/images/odnc-e-commerce-lfp/service.png" alt="E-commerce services"
                                class="w-full h-auto"
                                onerror="this.onerror=null; this.src='/api/placeholder/550/350'; this.alt='E-commerce services placeholder'">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Join Section with Dark Blue Background -->
        <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
            <div class="container mx-auto">
                <!-- Join Panel with Starry Background -->
                <div class="bg-gradient-to-br from-primary-800 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
                    data-aos="fade-up" data-aos-duration="1000">

                    <!-- Stars Background SVG -->
                    <div class="absolute z-0 opacity-30 right-0">
                        <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
                            class="w-full h-full object-cover">
                    </div>

                    <div class="max-w-4xl mx-auto text-center">
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-3 sm:mb-4 relative z-10"
                            data-aos="fade-up" data-aos-delay="200">
                            Ready to build your delivery network?
                        </h1>



                        <a href="contact-us.php"
                            class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 mt-10 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
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







    </main>

    <!-- Main Header Banner -->


    <?php include_once('includes/footer.php'); ?>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabButtons = document.querySelectorAll("[data-tab]");

        tabButtons.forEach((button) => {
            button.addEventListener("click", function() {
                // Remove active class from all buttons
                tabButtons.forEach((btn) => {
                    btn.classList.remove("bg-red-500", "text-white");
                    btn.classList.add(
                        "bg-white",
                        "text-blue-600",
                        "border",
                        "border-gray-200"
                    );
                });

                // Add active class to clicked button
                this.classList.remove(
                    "bg-white",
                    "text-blue-600",
                    "border",
                    "border-gray-200"
                );
                this.classList.add("bg-red-500", "text-white");
            });
        });
    });
    </script>
    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>