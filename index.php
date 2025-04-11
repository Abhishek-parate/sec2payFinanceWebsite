<?php include_once('includes/header.php'); ?>

<!-- Hero Section with Circular Corner Gradients -->
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
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-gray-900 leading-tight"
                data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
                Empowering <span class="text-secondary-500">MSMEs</span> to Deliver
                <br class="hidden sm:block"><span class="text-secondary-500">Financial</span> Freedom
            </h1>
            <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 text-gray-700 max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">
                Join 1000+ businesses providing essential financial
                <br class="hidden sm:block">services to 1 lakh+ retailers across India
            </p>
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-mirror="true">
                <a href="#"
                    class="inline-block bg-secondary-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-md text-lg font-medium hover:bg-secondary-600 transition-all duration-300 hover:shadow-lg hover:scale-105 transform z-10">
                    Start Your Journey Today
                </a>
            </div>
        </div>

        <!-- Center Circular Gradient -->
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[70%] h-[70%] rounded-full z-10"
            style="background: radial-gradient(circle, rgba(230, 120, 120, 0.5) 0%, rgba(242, 219, 219, 0.2) 50%, rgba(255, 255, 255, 0) 70%);">
        </div>

        <!-- Dashboard Image with AOS animation -->
        <div class="relative max-w-5xl mx-auto  overflow-hidden z-10" data-aos="zoom-in" data-aos-duration="1000"
            data-aos-delay="300" data-aos-mirror="true">
            <!-- Main Dashboard Image -->
            <div class="relative z-20">
                <img src="./assets/images/home/dashboard.png" alt="Dashboard" class="w-full h-auto" />
                <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-white to-transparent"></div>
            </div>
        </div>

        <!-- Trusted By Section with Infinite Scroll -->
        <div class="mt-12 md:mt-16 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"
            data-aos-mirror="true">
            <p class="text-gray-700 font-bold text-lg mb-6 md:mb-8">Trusted by India's Leading Banks</p>

            <!-- Infinite Scroll Container -->
            <div class="relative overflow-hidden w-full ">
                <div class="logos-container flex whitespace-nowrap">
                    <!-- First set of logos - will appear as one continuous stream -->
                    <div class="logos-slide animate-scroll inline-flex items-center">
                        <img src="./assets/images/home/hdfc.png" alt="HDFC Bank" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/idfc.png" alt="IDFC Bank" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/bom.png" alt="Bank of Maharashtra"
                            class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/sbi.png" alt="SBI" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/ib.png" alt="Indian Bank" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/icici.png" alt="ICICI Bank" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/bob.png" alt="Bank of Baroda" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/sc.png" alt="Standard Chartered"
                            class="h-8 md:h-10 w-auto mx-8" />

                        <!-- Duplicated for seamless loop -->
                        <img src="./assets/images/home/hdfc.png" alt="HDFC Bank" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/idfc.png" alt="IDFC Bank" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/bom.png" alt="Bank of Maharashtra"
                            class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/sbi.png" alt="SBI" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/ib.png" alt="Indian Bank" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/icici.png" alt="ICICI Bank" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/bob.png" alt="Bank of Baroda" class="h-8 md:h-10 w-auto mx-8" />
                        <img src="./assets/images/home/sc.png" alt="Standard Chartered"
                            class="h-8 md:h-10 w-auto mx-8" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Impact Section -->
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6 w-full">

            <!-- Left Panel - Our Impact with Rocket (2/5 width) -->
            <div data-aos="fade-up" data-aos-duration="800"
                class="col-span-1 md:col-span-2 bg-gradient-to-br from-secondary-600 to-secondary-300 rounded-xl p-6 md:p-10 text-white relative overflow-hidden">
                <div class="max-w-md relative z-10">
                    <h3 class="text-xl font-bold mb-4" data-aos="fade-right" data-aos-delay="100">Our Impact</h3>

                    <h4 class="text-md font-medium mb-6 w-full md:w-[80%]" data-aos="fade-right" data-aos-delay="200">
                        Making Financial Services Accessible Since 2017</h4>

                    <p class="text-white/90 w-[70%] md:w-[70%]" data-aos="fade-right" data-aos-delay="300">
                        From Banking services to Wealth management, we've been making essential services accessible
                        since 2017. Our network serves 1 crore+ customers through tech-enabled financial solutions.
                    </p>
                </div>

                <!-- Rocket Illustration - Adjusted for mobile visibility -->
                <div class="absolute -right-10 sm:-right-20 bottom-0 h-48 sm:h-64 w-48 sm:w-64 opacity-90"
                    data-aos="zoom-in" data-aos-delay="400">
                    <img src="assets/images/home/svg/rocket.svg" alt="Rocket illustration" />
                </div>
            </div>

            <!-- Right Panel - Statistics with Starry Background -->
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"
                class="col-span-1 md:col-span-3 bg-gradient-to-br from-[#142344] to-[#3258AA] rounded-xl p-6 md:p-10 text-white relative overflow-hidden mt-6 md:mt-0">
                <!-- Stars Background SVG - Adjusted for mobile -->
                <div class="absolute z-0 opacity-30 right-0 max-w-full">
                    <img src="assets/images/home/svg/white-bg-bot.svg" alt="Background pattern" class="w-full h-auto">
                </div>

                <div class="relative z-10 mb-6 md:mb-8">
                    <h4 class="text-xl font-semibold mb-6 md:mb-8" data-aos="fade-left" data-aos-delay="100">Making
                        Financial Services Accessible Since 2017</h4>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8">
                        <!-- Stats Row 1 -->
                        <div data-aos="fade-up" data-aos-delay="200">
                            <p class="text-2xl md:text-3xl font-bold">1 Lacs+</p>
                            <p class="text-blue-200/70">Active retailers</p>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="300">
                            <p class="text-2xl md:text-3xl font-bold">1000+</p>
                            <p class="text-blue-200/70">Business Partners</p>
                        </div>

                        <!-- Stats Row 2 -->
                        <div data-aos="fade-up" data-aos-delay="400">
                            <p class="text-2xl md:text-3xl font-bold">20+</p>
                            <p class="text-blue-200/70">Banking Partners</p>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="500">
                            <p class="text-2xl md:text-3xl font-bold">1 Cr+</p>
                            <p class="text-blue-200/70">End Customers served</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <a href="#" data-aos="fade-up" data-aos-delay="600"
                    class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 py-2 md:px-6 md:py-3 rounded-lg font-semibold transition-all">
                    Join today for free
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <!-- Decorative Red Line/Graph - Adjusted for mobile -->
                <div class="absolute right-0 bottom-0 max-w-[50%] sm:max-w-full" data-aos="fade-up"
                    data-aos-delay="700">
                    <img src="assets/images/home/svg/red-graph.svg" alt="Graph illustration" class="w-full h-auto">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Product/Solutions Section -->
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-primary-800 mb-4">Our Product/Solutions</h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">Building trust through partnerships that last Creating a
                network that serves millions"</p>
        </div>

        <!-- Service Cards - Horizontal scrolling on mobile, grid on larger screens -->
        <div
            class="flex overflow-x-auto lg:grid lg:grid-cols-6 md:grid-cols-3 sm:grid-cols-2 gap-4 lg:gap-6 pb-4 -mx-4 px-4 lg:mx-0 scrollbar-hide">
            <!-- Banking Card -->
            <div
                class="product-tab bg-secondary-500 rounded-lg shadow-md px-6 py-4 flex flex-col items-center justify-center flex-shrink-0 w-40 sm:w-auto h-24 lg:h-auto transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 overflow-hidden cursor-pointer">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-university text-2xl text-white"></i>
                </div>
                <h3 class="font-semibold text-lg text-white text-center truncate w-full">Banking</h3>
            </div>

            <!-- Travel Booking Card -->
            <div
                class="product-tab bg-white rounded-lg shadow-sm border border-gray-200 px-6 py-4 flex flex-col items-center justify-center flex-shrink-0 w-40 sm:w-auto h-24 lg:h-auto transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 overflow-hidden cursor-pointer">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-plane text-2xl text-primary-500"></i>
                </div>
                <h3 class="font-semibold text-lg text-primary-600 text-center truncate w-full">Travel Booking</h3>
            </div>

            <!-- Utility Payment Card -->
            <div
                class="product-tab bg-white rounded-lg shadow-sm border border-gray-200 px-6 py-4 flex flex-col items-center justify-center flex-shrink-0 w-40 sm:w-auto h-24 lg:h-auto transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 overflow-hidden cursor-pointer">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-receipt text-2xl text-primary-500"></i>
                </div>
                <h3 class="font-semibold text-lg text-primary-600 text-center truncate w-full">Utility Payment</h3>
            </div>

            <!-- E-Governance Card -->
            <div
                class="product-tab bg-white rounded-lg shadow-sm border border-gray-200 px-6 py-4 flex flex-col items-center justify-center flex-shrink-0 w-40 sm:w-auto h-24 lg:h-auto transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 overflow-hidden cursor-pointer">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-landmark text-2xl text-primary-500"></i>
                </div>
                <h3 class="font-semibold text-lg text-primary-600 text-center truncate w-full">E-Governance</h3>
            </div>

            <!-- Insurance Services Card -->
            <div
                class="product-tab bg-white rounded-lg shadow-sm border border-gray-200 px-6 py-4 flex flex-col items-center justify-center flex-shrink-0 w-40 sm:w-auto h-24 lg:h-auto transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 overflow-hidden cursor-pointer">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-shield-alt text-2xl text-primary-500"></i>
                </div>
                <h3 class="font-semibold text-lg text-primary-600 text-center truncate w-full">Insurance Services</h3>
            </div>

            <!-- ONDC Card -->
            <div
                class="product-tab bg-white rounded-lg shadow-sm border border-gray-200 px-6 py-4 flex flex-col items-center justify-center flex-shrink-0 w-40 sm:w-auto h-24 lg:h-auto transform transition-all duration-300 hover:shadow-lg hover:-translate-y-1 overflow-hidden cursor-pointer">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-shopping-cart text-2xl text-primary-500"></i>
                </div>
                <h3 class="font-semibold text-lg text-primary-600 text-center truncate w-full">ONDC</h3>
            </div>
        </div>
    </div>

    <!-- Content Sections - These will change when tabs are clicked -->
    <div class="mt-8">
        <!-- Banking Solutions Content -->
        <div class="product-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="rounded-xl overflow-hidden bg-gradient-to-r from-red-50 to-red-100 shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Left Content - Services List -->
                    <div class="p-8 md:p-12">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Banking Solutions</h2>
                        <p class="text-gray-700 mb-8">Expand your reach with AePS, UPI, and Micro ATM services.</p>

                        <div class="space-y-4">
                            <!-- Service Items -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">AePS</span>
                            </div>
                            <!-- More service items... (keep the rest of your banking services) -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">DMT & DMT Channels</span>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">MicroATM or Mini ATM</span>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Account Opening</span>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Cash Management</span>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Indo-nepal Money Transfer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Image -->
                    <div class="relative h-48 sm:h-64 md:h-auto">
                        <img src="assets/images/home/image.png" alt="Man using banking services on smartphone"
                            class="w-full h-full object-cover md:object-contain md:absolute md:bottom-0 md:right-0" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Travel Booking Content -->
        <div class="product-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 hidden">
            <div class="rounded-xl overflow-hidden bg-gradient-to-r from-blue-50 to-blue-100 shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Left Content -->
                    <div class="p-8 md:p-12">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Travel Booking Solutions</h2>
                        <p class="text-gray-700 mb-8">Comprehensive travel solutions for your customers.</p>

                        <div class="space-y-4">
                            <!-- Service Items -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Flight Bookings</span>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Hotel Reservations</span>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Bus Tickets</span>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Train Reservations</span>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Holiday Packages</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Image -->
                    <div class="relative h-48 sm:h-64 md:h-auto">
                        <img src="assets/images/home/image.png" alt="Travel booking illustration"
                            class="w-full h-full object-cover md:object-contain md:absolute md:bottom-0 md:right-0" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Add remaining content sections for other tabs (Utility Payment, E-Governance, Insurance, ONDC) -->
        <!-- Each section should have the class "product-content" and "hidden" except for the first one -->

        <!-- Utility Payment Content -->
        <div class="product-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 hidden">
            <div class="rounded-xl overflow-hidden bg-gradient-to-r from-green-50 to-green-100 shadow-md">
                <!-- Similar structure as above, but with utility payment content -->
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-8 md:p-12">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Utility Payment Solutions</h2>
                        <p class="text-gray-700 mb-8">Enable your customers to pay all bills in one place.</p>

                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-5 h-5 rounded-full bg-primary-600 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">Electricity Bills</span>
                            </div>
                            <!-- Add more utility payment items here -->
                        </div>
                    </div>
                    <div class="relative h-48 sm:h-64 md:h-auto">
                        <img src="assets/images/home/image.png" alt="Utility payments illustration"
                            class="w-full h-full object-cover md:object-contain md:absolute md:bottom-0 md:right-0" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Continue with other sections... -->
    </div>
</section>




<section class="relative py-10 overflow-hidden bg-white">
    <!-- Pinkish Circular Gradient - Left on desktop, top on mobile -->
    <div class="absolute md:left-[-25%] md:w-[100%] md:h-[150%] md:top-[-25%] w-[150%] h-[100%] left-[-25%] top-[-25%] rounded-full opacity-40"
        data-aos="fade-in" data-aos-duration="1500"
        style="background: radial-gradient(circle, rgba(233, 178, 178, 0.7) 0%, rgba(242, 219, 219, 0.3) 40%, rgba(255, 255, 255, 0) 70%);">
    </div>

    <!-- Bluish Circular Gradient - Right on desktop, bottom on mobile -->
    <div class="absolute md:right-[-25%] md:w-[100%] md:h-[150%] md:top-[-25%] w-[150%] h-[100%] right-[-25%] bottom-[-25%] rounded-full opacity-40"
        data-aos="fade-in" data-aos-duration="1500" data-aos-delay="200"
        style="background: radial-gradient(circle, rgba(126, 194, 240, 0.7) 0%, rgba(222, 242, 255, 0.3) 40%, rgba(255, 255, 255, 0) 70%);">
    </div>

    <div class="relative z-10 container px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mx-0 sm:mx-4 md:mx-10 lg:mx-20">
            <div class="text-center mb-8 md:mb-12" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-3xl md:text-4xl font-bold mb-3 md:mb-4">
                    <span class="text-primary-800">Why</span>
                    <span class="text-secondary-500">Partner</span>
                    <span class="text-primary-800">With Us</span>
                </h2>
                <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto">Building trust through partnerships that
                    last. Creating a
                    network that serves millions.</p>
            </div>

            <!-- Feature Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 pb-10 md:pb-20">
                <!-- Card 1 -->
                <div class="bg-secondary-500 rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="p-4 text-white">
                        <h3 class="font-semibold text-xl mb-2 mt-2">Ready in 7 Days</h3>
                        <p class="text-sm">Quick setup for your financial services platform</p>
                    </div>
                    <div class="mt-2 relative">
                        <div class="absolute top-2 right-2 w-3 h-3 bg-white rounded-full opacity-70" data-aos="fade-in"
                            data-aos-delay="200"></div>
                        <img src="assets/images/home/dashboard-img.png" alt="Dashboard Interface"
                            class="w-full h-auto rounded" />
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-blue-900 rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="p-4 text-white">
                        <h3 class="font-semibold text-xl mb-2 mt-2">Regular Updates</h3>
                        <p class="text-sm">Quick setup for your financial services platform</p>
                    </div>
                    <div class="mt-2 relative">
                        <div class="absolute top-2 right-2 w-3 h-3 bg-white rounded-full opacity-70" data-aos="fade-in"
                            data-aos-delay="300"></div>
                        <img src="assets/images/home/img-home.png" alt="Dashboard Interface"
                            class="w-full h-auto rounded" />
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-secondary-500 rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="p-4 text-white">
                        <h3 class="font-semibold text-xl mb-2 mt-2">Ready in 7 Days</h3>
                        <p class="text-sm">Quick setup for your financial services platform</p>
                    </div>
                    <div class="mt-2 relative">
                        <div class="absolute top-2 right-2 w-3 h-3 bg-white rounded-full opacity-70" data-aos="fade-in"
                            data-aos-delay="400"></div>
                        <img src="assets/images/home/dashboard-img.png" alt="Dashboard Interface"
                            class="w-full h-auto rounded" />
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-blue-900 rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="p-4 text-white">
                        <h3 class="font-semibold text-xl mb-2 mt-2">Regular Updates</h3>
                        <p class="text-sm">Quick setup for your financial services platform</p>
                    </div>
                    <div class="mt-2 relative">
                        <div class="absolute top-2 right-2 w-3 h-3 bg-white rounded-full opacity-70" data-aos="fade-in"
                            data-aos-delay="500"></div>
                        <img src="assets/images/home/img-home.png" alt="Dashboard Interface"
                            class="w-full h-auto rounded" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Getting Started Section -->
<section class="bg-gradient-to-r from-primary-800 to-primary-600 py-16 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-down" data-aos-duration="800">Getting Started
        </h2>
        <p class="text-lg text-blue-100 mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Three
            Simple Steps to Join:</p>

        <div class="flex flex-col md:flex-row items-center justify-center md:space-x-4 lg:space-x-8 mb-12">
            <!-- Step 1 -->
            <div class="flex flex-col items-center mb-8 md:mb-0" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="200">
                <div class="bg-secondary-500 rounded-lg p-4 mb-4 w-16 h-16 flex items-center justify-center transform transition-transform hover:scale-110"
                    data-aos="zoom-in" data-aos-delay="300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" data-aos="fade-up" data-aos-delay="400">Select Your Plan</h3>
                <p class="text-blue-100 text-center" data-aos="fade-up" data-aos-delay="500">Choose from our flexible
                    options</p>
            </div>

            <!-- Arrow -->
            <div class="hidden md:block" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-70" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center mb-8 md:mb-0" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="400">
                <div class="bg-secondary-500 rounded-lg p-4 mb-4 w-16 h-16 flex items-center justify-center transform transition-transform hover:scale-110"
                    data-aos="zoom-in" data-aos-delay="500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" data-aos="fade-up" data-aos-delay="600">Complete Documentation</h3>
                <p class="text-blue-100 text-center" data-aos="fade-up" data-aos-delay="700">Hassle-free and fast</p>
            </div>

            <!-- Arrow -->
            <div class="hidden md:block" data-aos="fade-in" data-aos-delay="600" data-aos-duration="1200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-70" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center mb-8 md:mb-0" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="600">
                <div class="bg-secondary-500 rounded-lg p-4 mb-4 w-16 h-16 flex items-center justify-center transform transition-transform hover:scale-110"
                    data-aos="zoom-in" data-aos-delay="700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" data-aos="fade-up" data-aos-delay="800">Launch Your Platform</h3>
                <p class="text-blue-100 text-center" data-aos="fade-up" data-aos-delay="900">Start offering services
                    immediately.</p>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="flex justify-center" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000">
            <a href="#"
                class="bg-secondary-500 hover:bg-secondary-600 text-white px-8 py-3 rounded-lg font-medium inline-flex items-center transition-all transform hover:scale-105 hover:shadow-lg">
                Begin now
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="bg-white py-10">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-primary-600 mb-8" data-aos="fade-up">Testimonials</h2>
        <p class="text-center font-semibold text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">Hear from our
            partners across India</p>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/images/home/test1.png" alt="Testimonial 1" class="w-full object-contain">
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/images/home/test2.png" alt="Testimonial 2" class="w-full object-contain">
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/images/home/test3.png" alt="Testimonial 3" class="w-full object-contain">
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                <img src="assets/images/home/test4.png" alt="Testimonial 4" class="w-full object-contain">
            </div>
        </div>
    </div>
</section>


<!-- Blogs & Article Section -->
<section class="bg-white py-10">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-blue-900 mb-2" data-aos="fade-up">Blogs & Article</h2>
        <p class="text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">Hear from our partners across India</p>

        <div class="relative" data-aos="fade-up" data-aos-delay="200">
            <!-- Blog Carousel -->
            <div id="blog-carousel"
                class="flex overflow-x-auto md:overflow-hidden space-x-6 mb-8 mx-4 md:mx-16 scrollbar-hide pb-4 md:pb-0 snap-x snap-mandatory md:snap-none">
                <!-- Blog Post 1 -->
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm w-full md:w-1/3 flex flex-col"
                    data-aos="zoom-in" data-aos-delay="100">
                    <div class="relative">
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded">HEADLINE</span>
                        </div>
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <img src="https://placehold.co/30x30/6495ED/ffffff?text=📷" alt="Blog Image"
                                class="w-8 h-8">
                        </div>
                    </div>
                    <div class="p-6 text-left flex-grow">
                        <h3 class="font-bold text-xl mb-3">Really Long Headline Text For Blog Post?</h3>
                        <p class="text-gray-600 text-sm mb-4">Nowadays, it isn't uncommon to see lenders rapidly
                            adopting a digital lending strategy to streamline the lending process</p>
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>20 DEC 2020</span>
                            <div class="flex items-center">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="w-4 h-4 mr-1">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                                </svg>
                                290 Comments
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm w-full md:w-1/3 flex flex-col"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="relative">
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded">HEADLINE</span>
                        </div>
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <img src="https://placehold.co/30x30/6495ED/ffffff?text=📷" alt="Blog Image"
                                class="w-8 h-8">
                        </div>
                    </div>
                    <div class="p-6 text-left flex-grow">
                        <h3 class="font-bold text-xl mb-3">Really Long Headline Text For Blog Post?</h3>
                        <p class="text-gray-600 text-sm mb-4">Nowadays, it isn't uncommon to see lenders rapidly
                            adopting a digital lending strategy to streamline the lending process</p>
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>20 DEC 2020</span>
                            <div class="flex items-center">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="w-4 h-4 mr-1">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                                </svg>
                                290 Comments
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm w-full md:w-1/3 flex flex-col"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="relative">
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded">HEADLINE</span>
                        </div>
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <img src="https://placehold.co/30x30/6495ED/ffffff?text=📷" alt="Blog Image"
                                class="w-8 h-8">
                        </div>
                    </div>
                    <div class="p-6 text-left flex-grow">
                        <h3 class="font-bold text-xl mb-3">Really Long Headline Text For Blog Post?</h3>
                        <p class="text-gray-600 text-sm mb-4">Nowadays, it isn't uncommon to see lenders rapidly
                            adopting a digital lending strategy to streamline the lending process</p>
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>20 DEC 2020</span>
                            <div class="flex items-center">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="w-4 h-4 mr-1">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                                </svg>
                                290 Comments
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm w-full md:w-1/3 flex flex-col"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="relative">
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded">HEADLINE</span>
                        </div>
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <img src="https://placehold.co/30x30/6495ED/ffffff?text=📷" alt="Blog Image"
                                class="w-8 h-8">
                        </div>
                    </div>
                    <div class="p-6 text-left flex-grow">
                        <h3 class="font-bold text-xl mb-3">Really Long Headline Text For Blog Post?</h3>
                        <p class="text-gray-600 text-sm mb-4">Nowadays, it isn't uncommon to see lenders rapidly
                            adopting a digital lending strategy to streamline the lending process</p>
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>20 DEC 2020</span>
                            <div class="flex items-center">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="w-4 h-4 mr-1">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                                </svg>
                                290 Comments
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm w-full md:w-1/3 flex flex-col"
                    data-aos="zoom-in" data-aos-delay="300">
                    <div class="relative">
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded">HEADLINE</span>
                        </div>
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <img src="https://placehold.co/30x30/6495ED/ffffff?text=📷" alt="Blog Image"
                                class="w-8 h-8">
                        </div>
                    </div>
                    <div class="p-6 text-left flex-grow">
                        <h3 class="font-bold text-xl mb-3">Really Long Headline Text For Blog Post?</h3>
                        <p class="text-gray-600 text-sm mb-4">Nowadays, it isn't uncommon to see lenders rapidly
                            adopting a digital lending strategy to streamline the lending process</p>
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>20 DEC 2020</span>
                            <div class="flex items-center">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="w-4 h-4 mr-1">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                                </svg>
                                290 Comments
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Navigation -->
            <button id="prev-btn"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-primary-100 hover:bg-primary-200 rounded-full p-2 sm:p-3 shadow-md transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary-300 z-10 hidden sm:block disabled:opacity-50 disabled:cursor-not-allowed"
                aria-label="Previous slide">

                <i class="fa fa-chevron-left h-6 w-6 text-blue-500" aria-hidden="true"></i>

            </button>
            <button id="next-btn"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-primary-100 hover:bg-primary-200 rounded-full p-2 sm:p-3 shadow-md transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary-300 z-10 hidden sm:block disabled:opacity-50 disabled:cursor-not-allowed"
                aria-label="Next slide">

                <i class="fa fa-chevron-right h-6 w-6 text-blue-500" aria-hidden="true"></i>

            </button>
        </div>

        <!-- Carousel Indicator -->
        <div class="flex justify-center items-center gap-2 mt-6">
            <button id="indicator-0" class="indicator-btn w-8 h-1 bg-secondary-500 rounded transition-all duration-300"
                data-index="0" aria-label="Go to slide 1"></button>
            <button id="indicator-1" class="indicator-btn w-2 h-2 bg-gray-300 rounded-full transition-all duration-300"
                data-index="1" aria-label="Go to slide 2"></button>
            <button id="indicator-2" class="indicator-btn w-2 h-2 bg-gray-300 rounded-full transition-all duration-300"
                data-index="2" aria-label="Go to slide 3"></button>
            <button id="indicator-3" class="indicator-btn w-2 h-2 bg-gray-300 rounded-full transition-all duration-300"
                data-index="3" aria-label="Go to slide 4"></button>
        </div>
    </div>
</section>


<!-- Join Section with Dark Blue Background -->
<section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
    <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-[#142344] to-[#3258AA] rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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
<?php include_once('includes/footer.php'); ?>