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


    <main>

        <!-- hero section -->
        <section class="relative bg-white py-8 sm:py-10 md:py-12 overflow-hidden">
            <!-- Background Color Patches - Hidden on mobile -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none hidden md:block">
                <!-- Top-left Circular Gradient (Bluish) -->
                <div class="absolute top-[5%] -left-[25%] w-[50%] h-[100%] rounded-full opacity-40"
                    style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8)10%, rgba(222, 242, 255, 0.4) 50%, rgba(255, 255, 255, 0) 60%);"
                    data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                </div>

                <!-- Bottom-right Circular Gradient (Purple/Secondary) -->
                <div class="absolute bottom-[10%] -right-[20%] w-[40%] h-[80%] rounded-full opacity-30"
                    style="background: radial-gradient(circle, rgba(82, 113, 182, 0.7) 10%, rgba(205, 213, 238, 0.3) 50%, rgba(255, 255, 255, 0) 60%);"
                    data-aos="fade" data-aos-duration="1500" data-aos-delay="200" data-aos-once="true">
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 md:py-8">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-center">
                        <!-- Left Content - Always First -->
                        <div class="w-full md:w-1/2 p-4 sm:p-6 md:p-8 lg:p-10 order-1" data-aos="fade-right"
                            data-aos-duration="1200" data-aos-once="true">
                            <p class="font-bold text-primary-600 mb-2 text-sm sm:text-base" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                                Utility Services
                            </p>
                            <h1 class="text-3xl sm:text-4xl font-bold text-secondary-600" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                                Make Bill
                            </h1>
                            <h1 class="text-3xl sm:text-4xl font-bold text-secondary-600 mb-3 sm:mb-4"
                                data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                                Payments Simple
                            </h1>
                            <p class="text-gray-500 mb-6 sm:mb-8" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="800" data-aos-once="true">
                                Join 1 lakh+ retailers offering instant utility payments
                            </p>

                            <a href="#"
                                class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg mb-4"
                                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                                Start Your Journey
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <div class="mt-6 sm:mt-8 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                                data-aos="fade-up" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
                                <div class="flex -space-x-2">
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

                        <!-- Right Content - Image Always Second -->
                        <div class="w-full md:w-1/2 order-2 relative" data-aos="fade-left" data-aos-duration="1200"
                            data-aos-once="true">
                            <!-- Decorative Elements -->

                            <!-- Main Dashboard Image with Custom Shadow -->
                            <div class="relative z-20  overflow-hidden">
                                <img src="assets/images/mutual-fund/banner.png" alt="Dashboard" class="w-full h-auto" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section ends -->




        <!-- Featuees & Function Section -->
        <section class="bg-white py-10 px-4 md:px-24"   data-aos="fade-up" 
                 data-aos-duration="800" 
               >
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-primary-700 mb-4"> Why Choose Sec2Pay Mutual Fund Platform?</h2>


                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">


                    <!-- Feature Card 3 -->
                    <div
                        class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="fade-up" 
                 data-aos-duration="800" 
                 data-aos-delay="100">
                        <img src="assets/images/utility-servises/auto.png" alt="Real-Time Payment"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="text-secondary-600 font-semibold text-xl mb-2">Investment
                                Analysis Tools</h3>
                            <p class="text-gray-600 text-sm">
                                Provide data-driven fund recommendations to help </br>customers make informed decisions.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Card 3 -->
                    <div
                        class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="fade-up" 
                 data-aos-duration="800" 
                 data-aos-delay="200"
                 >
                        <img src="assets/images/utility-servises/auto.png" alt="Real-Time Payment"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="text-secondary-600 font-semibold text-xl mb-2">Quick Digital Onboarding</h3>
                            <p class="text-gray-600 text-sm">
                                Quick account setup with </br>paperless KYC for faster customer acquisition
                            </p>
                        </div>
                    </div>
                    <!-- Feature Card 3 -->
                    <div
                        class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="fade-up" 
                 data-aos-duration="800" 
                 data-aos-delay="300">
                        <img src="assets/images/utility-servises/auto.png" alt="Real-Time Payment"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="text-secondary-600 font-semibold text-xl mb-2">Multi-AMC Connect</h3>
                            <p class="text-gray-600 text-sm">
                                Direct integration with top</br> Asset Management Companies for smooth transactions
                            </p>
                        </div>
                    </div>
                    <!-- Feature Card 3 -->
                    <div
                        class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
                        data-aos="fade-up" 
                 data-aos-duration="800" 
                 data-aos-delay="400">
                        <img src="assets/images/utility-servises/auto.png" alt="Real-Time Payment"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="text-secondary-600 font-semibold text-xl mb-2">Goal Planning
                                Tools & Solutions</h3>
                            <p class="text-gray-600 text-sm">
                                Help customers plan their financial future with smart investment tracking
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Platform Services Section -->
        <section class="py-10 px-4 bg-white"   data-aos="fade-up" 
                 data-aos-duration="800" 
                 data-aos-delay="100">
            <!-- Increased max-width from max-w-6xl to max-w-7xl -->
            <div class="max-w-7xl mx-auto">
                <!-- Container with light pink background -->
                <div class="bg-secondary-100 rounded-xl p-8 md:p-12">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <!-- Left Column - Services List -->
                        <div class="w-full md:w-1/2">
                            <h2 class="text-3xl md:text-4xl font-bold text-primary-800 mb-8">Platform Services</h2>
                            <ul class="space-y-5">
                                <!-- Service Item 1 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2"
                                                fill="none" />
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700 font-medium">SIP Management</span>
                                </li>

                                <!-- Service Item 2 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2"
                                                fill="none" />
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700 font-medium">Lumpsum Investments</span>
                                </li>

                                <!-- Service Item 3 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2"
                                                fill="none" />
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700 font-medium">Portfolio Tracking</span>
                                </li>

                                <!-- Service Item 4 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2"
                                                fill="none" />
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700 font-medium">NAV Updates</span>
                                </li>

                                <!-- Service Item 5 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2"
                                                fill="none" />
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700 font-medium">Goal Planning</span>
                                </li>

                                <!-- Service Item 6 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2"
                                                fill="none" />
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700 font-medium">Transaction History</span>
                                </li>

                                <!-- Service Item 7 -->
                                <li class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2"
                                                fill="none" />
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700 font-medium">Performance Reports</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Column - Investment Illustration -->
                        <div class="w-full md:w-1/2">
                            <img src="assets/images/mutual-fund/service.png" alt="E-commerce services"
                                class="w-full h-auto"
                                onerror="this.onerror=null; this.src='/api/placeholder/550/350'; this.alt='E-commerce services placeholder'">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- pricing -->
     
        <!-- End of Pricing Section -->


        <!-- testimonials -->


        <section class="py-10 md:pb-24 px-4 md:px-8 lg:px-16 max-w-7xl mx-auto overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-10 items-start">
                <!-- Left Column - Heading -->
                <div class="md:col-span-5 mb-10 md:mb-0" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-once="true">
                    <div class="uppercase text-sm font-medium text-gray-500 tracking-wider mb-2">TESTIMONIALS</div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-600 leading-tight">
                        What People Say<br>About Us.
                    </h2>

                    <!-- Navigation Dots (Mobile and Desktop) -->
                    <div class="flex space-x-2 mt-8" id="dots-container" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="800" data-aos-once="true">
                        <button class="w-3 h-3 rounded-full bg-secondary-500 transition-all duration-300"
                            data-index="0"></button>
                        <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300"
                            data-index="1"></button>
                        <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300"
                            data-index="2"></button>
                    </div>
                </div>

                <!-- Right Column - Testimonials -->
                <div class="md:col-span-7 relative" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                    <!-- External Navigation Arrows -->
                    <div class="absolute right-0 -top-12 flex space-x-3 z-50" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="800" data-aos-once="true">
                        <button id="prev-arrow"
                            class="w-8 h-8 rounded-full bg-white shadow-md flex items-center justify-center text-gray-500 hover:text-primary-600 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button id="next-arrow"
                            class="w-8 h-8 rounded-full bg-white shadow-md flex items-center justify-center text-gray-500 hover:text-primary-600 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div class="testimonials-container relative min-h-[200px]">
                        <!-- Profile Image (Absolute Positioned) -->
                        <div class="absolute left-0 top-10 md:-left-12 z-30 transition-all duration-500"
                            id="profile-image-container" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800"
                            data-aos-once="true">
                            <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Profile"
                                class="w-20 h-20 md:w-24 md:h-24 rounded-full border-4 border-white shadow-md object-cover transition-all duration-300"
                                id="profile-image">
                        </div>

                        <!-- Active Testimonial Card -->
                        <div class="w-full bg-white p-6 md:p-8 rounded-lg shadow-lg opacity-100 mb-4 transition-all duration-500 transform translate-y-0"
                            id="testimonial-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800"
                            data-aos-once="true">
                            <div class="ml-20 md:ml-10 pt-2">
                                <p class="text-gray-700 leading-relaxed mb-6">
                                    "On the Windows talking painted pasture yet its express parties use. Sure last upon
                                    he same as knew next. Of believed or diverted no."
                                </p>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4 class="font-semibold text-primary-600">Mike taylor</h4>
                                        <p class="text-sm text-gray-500">Lahore, Pakistan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Testimonial Card (Initially Stacked) -->
                        <div class="w-full bg-gray-100 p-6 md:p-8 rounded-lg shadow-md opacity-95 absolute top-0 transform translate-y-16 transition-all duration-500 hidden"
                            id="testimonial-1">
                            <div class="ml-20 md:ml-10 pt-2">
                                <p class="text-gray-700 leading-relaxed mb-6">
                                    "Smart homes are the future. The integration of IoT devices has transformed how we
                                    interact with our living spaces."
                                </p>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4 class="font-semibold text-primary-600">Chris Thomas</h4>
                                        <p class="text-sm text-gray-500">CEO of Red Button</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Third Testimonial Card (Initially Hidden) -->
                        <div class="w-full bg-gray-100 p-6 md:p-8 rounded-lg shadow-md opacity-0 absolute top-0 transform translate-y-16 transition-all duration-500 hidden"
                            id="testimonial-2">
                            <div class="ml-20 md:ml-10 pt-2">
                                <p class="text-gray-700 leading-relaxed mb-6">
                                    "The customer service was exceptional. They went above and beyond to ensure
                                    everything was set up perfectly."
                                </p>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4 class="font-semibold text-primary-600">Sarah Johnson</h4>
                                        <p class="text-sm text-gray-500">New York, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End of Testimonials Section -->





        <!-- Join Section with Dark Blue Background -->
        <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
            <div class="container mx-auto">
                <!-- Join Panel with Starry Background -->
                <div class="bg-gradient-to-br from-primary-600 to-primary-500 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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