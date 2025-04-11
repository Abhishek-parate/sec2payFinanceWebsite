<?php include_once('includes/header.php'); ?>

<!-- Hero Section with Circular Corner Gradients -->
<!-- Enhanced Hero Section with Bidirectional AOS Animations -->
<section class="relative overflow-hidden py-10 pt-20 md:pt-24 md:py-10 bg-white">
    <!-- Top-left Circular Gradient (Pinkish) - Exactly 50% visible -->
    <div class="absolute top-[5%] -left-[20%] w-[50%] h-[100%] rounded-full"
        style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 50%);">
    </div>

    <!-- Top-right Circular Gradient (Bluish) - Exactly 50% visible -->
    <div class="absolute top-[5%] -right-[20%] w-[50%] h-[100%] rounded-full"
        style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 50%);">
    </div>


    <!-- Main Content -->
    <div class="container mx-auto px-4 sm:px-6 relative z-20">
        <!-- Hero Text with AOS animations -->
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-gray-900 leading-tight"
                data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
                <span class="text-secondary-500">Multi- Service Platform</span>
            </h1>
            <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 text-gray-700 max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">
                Simplify your operations with a comprehensive platform
                <br class="hidden sm:block">offering essential financial, travel, and utility services tailored to
                <br class="hidden sm:block">your business needs.
            </p>
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-mirror="true">
                <a href="#"
                    class="inline-block bg-secondary-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-md text-lg font-medium hover:bg-secondary-600 transition-all duration-300 hover:shadow-lg hover:scale-105 transform z-10">
                    View All Services
                </a>
            </div>
            <div class="flex justify-center w-full" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300" data-aos-mirror="true">
                <div class="flex items-center mt-4">
                    <span class="text-gray-500 font-medium mr-2">Trusted by</span>
                    <div class="flex items-center mx-1 text-yellow-500">

                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                    <i class="fa fa-star" aria-hidden="true"></i>

                    <i class="fa fa-star" aria-hidden="true"></i>

                    <i class="fa fa-star-half" aria-hidden="true"></i>


                    </div>
                    <span class="text-gray-500 font-medium ml-2">300K Retail Merchants</span>
                </div>
            </div>
        </div>

     

        <!-- Dashboard Image with AOS animation -->
  
    </div>
</section>

<!-- Services Tabs Section -->
<section class="py-5 relative z-10">
    <div class="max-w-7xl mx-auto bg-gray-50 rounded-xl shadow-sm overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <!-- Left Sidebar with Tabs -->
            <div class="bg-gray-50 w-full md:w-1/3 p-4 mt-4">
                <div class=" bg-white rounded-xl">
                    <!-- Tab items -->
                    <div class="space-y-4">
                        <button
                            class="tab-button w-full flex items-center p-4 rounded-lg bg-red-100 text-gray-900 hover:bg-red-50 focus:outline-none transition duration-200 active"
                            data-tab="banking">
                            <div class="flex-shrink-0 mr-3">
                                <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <span class="font-medium">Banking Services</span>
                        </button>

                        <button
                            class="tab-button w-full flex items-center p-4 rounded-lg text-gray-700 hover:bg-gray-50 focus:outline-none transition duration-200"
                            data-tab="travel">
                            <div class="flex-shrink-0 mr-3">
                                <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span class="font-medium">Travel Solutions</span>
                        </button>

                        <button
                            class="tab-button w-full flex items-center p-4 rounded-lg text-gray-700 hover:bg-gray-50 focus:outline-none transition duration-200"
                            data-tab="utility">
                            <div class="flex-shrink-0 mr-3">
                                <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <span class="font-medium">Utility & Bill Payments</span>
                        </button>

                        <button
                            class="tab-button w-full flex items-center p-4 rounded-lg text-gray-700 hover:bg-gray-50 focus:outline-none transition duration-200"
                            data-tab="governance">
                            <div class="flex-shrink-0 mr-3">
                                <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="font-medium">E-Governance</span>
                        </button>
                    </div>
                </div>

                <!-- Discover all services button -->
                <div class="mt-6 flex justify-start">
                    <button
                        class="w-auto bg-secondary-500 hover:bg-secondary-600 text-white py-3 px-6 rounded-xl transition-all font-medium">
                        Discover All Services
                    </button>
                </div>
            </div>

            <!-- Right Content Area -->
            <div class="w-full md:w-2/3 p-0">
                <!-- Banking Tab Content -->
                <div id="banking-content" class="tab-content active">
                    <div class="p-6 flex flex-col h-full">
                        <div class="mb-auto">
                            <h2 class="text-2xl font-bold text-gray-800 mb-3">Banking Solutions</h2>
                            <p class="text-gray-700 mb-6 max-w-md">Deliver core banking functionalities such as AePS, UPI, and Micro
                                ATM services to enhance your network</p>
                        </div>
                        <!-- Image at end -->
                        <div class="mt-auto  md:place-items-end">
                            <img src="assets\images\multi-service\banking-sevices.png" alt="Banking Services"
                                class="w-2/3 h-auto object-contain" />
                        </div>
                    </div>
                </div>

                <!-- Travel Tab Content -->
                <div id="travel-content" class="tab-content">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Travel Solutions</h2>
                        <p class="text-gray-700 mb-6 max-w-md">Comprehensive travel booking services including flights, trains,
                            buses and hotels to expand your service offerings</p>
                        <!-- Person image -->
                        <div class="mt-auto  md:place-items-end">

                        <img src="assets\images\multi-service\travel-solution.png" alt="Travel Solutions"
                        class="w-2/3 h-auto object-contain" />
                        </div>
                    </div>
                </div>

                <!-- Utility Tab Content -->
                <div id="utility-content" class="tab-content">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Utility & Bill Payments</h2>
                        <p class="text-gray-700 mb-6 max-w-md">Simplify bill payments with our comprehensive platform for
                            electricity, water, gas, and more</p>
                        <!-- Person image -->
                        <div class="mt-auto  md:place-items-end">

                        <img src="assets\images\multi-service\bill-payments.png" alt="Utility Services"
                        class="w-2/3 h-auto object-contain" />
                        </div>
</div>
                </div>

                <!-- Governance Tab Content -->
                <div id="governance-content" class="tab-content">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">E-Governance Solutions</h2>
                        <p class="text-gray-700 mb-6 max-w-md">Facilitate access to essential government services and digital
                            document processing</p>
                        <!-- Person image -->
                        <div class="mt-auto  md:place-items-end">

                        <img src="assets\images\multi-service\e-governance.png" alt="E-Governance Services"
                        class="w-2/3 h-auto object-contain" />
</div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    .tab-button {
        position: relative;
        transition: all 0.3s ease;
    }

    .tab-button.active {
        background-color: #fee2e2;
        color: #111827;
    }

    .tab-button:not(.active) {
        background-color: transparent;
        color: #374151;
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all tab buttons and content
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        // Add click event to each tab button
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-red-100');
                    btn.classList.add('bg-transparent');
                    btn.classList.add('text-gray-700');
                });

                // Add active class to clicked button
                button.classList.add('active', 'bg-red-100');
                button.classList.remove('bg-transparent');
                button.classList.remove('text-gray-700');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.remove('active');
                });

                // Show the corresponding tab content
                const tabId = button.getAttribute('data-tab');
                document.getElementById(`${tabId}-content`).classList.add('active');
            });
        });
    });
    </script>
</section>

<!-- Blogs & Article Section -->
<!-- Features Section -->
<section class="bg-white py-10">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Feature Card 1 -->
            <div class="rounded-lg overflow-hidden shadow-sm border border-gray-100 flex flex-col">
                <div class="bg-red-200 h-32"></div>
                <div class="p-6 text-left flex-grow">
                    <h3 class="font-bold text-xl mb-2">Integration</h3>
                    <p class="text-gray-600 text-sm">Simplified integration for a wide array of services</p>
                </div>
            </div>

            <!-- Feature Card 2 -->
            <div class="rounded-lg overflow-hidden shadow-sm border border-gray-100 flex flex-col">
                <div class="bg-red-200 h-32"></div>
                <div class="p-6 text-left flex-grow">
                    <h3 class="font-bold text-xl mb-2">Solutions</h3>
                    <p class="text-gray-600 text-sm">Scalable solutions for businesses of any size</p>
                </div>
            </div>

            <!-- Feature Card 3 -->
            <div class="rounded-lg overflow-hidden shadow-sm border border-gray-100 flex flex-col">
                <div class="bg-red-200 h-32"></div>
                <div class="p-6 text-left flex-grow">
                    <h3 class="font-bold text-xl mb-2">Operations</h3>
                    <p class="text-gray-600 text-sm">Dedicated support to ensure seamless operations.</p>
                </div>
            </div>
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