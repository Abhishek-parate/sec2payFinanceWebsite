<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuPay - Banking Platform Services</title>
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

<!-- hero section -->

<section class="relative overflow-hidden py-10 pt-20 md:pt-24 md:py-10 bg-white">
     <!-- Top-left Circular Gradient (Pinkish) - Exactly 50% visible -->
     <div class="absolute -bottom-[8%] -left-[23%] w-[50%] h-[50%] rounded-full"
        style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 70%);">
    </div>

    <!-- Top-right Circular Gradient (Bluish) - Exactly 50% visible -->
    <div class="absolute -top-[7%] -right-[20%] w-[50%] h-[60%] rounded-full"
        style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 70%);">
    </div>

    <div class="max-w-7xl mx-auto py-12  ">
        <div class="rounded-xl overflow-hidden z-20 relative">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- Left Content - Services List -->
                <div class="p-8 md:p-12">
                    <p class="font-semi-bolder text-primary-600 font-bold">Mutual Fund Platform</p>
                    <h1 class="text-4xl font-bold text-secondary-600 ">Launch Your Mutual Fund</h1>
                    <h1 class="text-4xl font-bold text-secondary-600 mb-4">Distribution Business</h1>
                    <p class="text-gray-500 mb-8">Build wealth for your customers with India's trusted mutual fund platform for financial advisors.</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                        Start your Business!

                    </a>

                    <div
                        class="mt-8 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm">
                        <div class="flex -space-x-2 ">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://randomuser.me/api/portraits/women/2.jpg"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://randomuser.me/api/portraits/men/3.jpg"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://randomuser.me/api/portraits/women/4.jpg"
                                class="w-8 h-8 rounded-full border-2 border-white">
                        </div>
                        <span class="text-gray-600 text-sm">1 Lac+ Retail partners across India</span>
                    </div>
                </div>
                <!-- Right Content - Image and Features -->
                <!-- Diagonal Shapes for Design -->

                <!-- Person Image -->


                <div class="relative max-w-5xl mx-auto  ">
                    <!-- Main Dashboard Image -->
                    <div class="relative z-20">
                        <img src="assets/images/mutual-fund/banner.png" alt="Dashboard" class=" h-auto" />
                        <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- hero section ends -->




<!-- Featuees & Function Section -->
<section class="bg-white py-10 px-4 md:px-24">
                <div class="container mx-auto px-6 text-center">
                    <h2 class="text-3xl font-bold text-primary-700 mb-4"> Why Choose Sec2Pay Mutual Fund Platform?</h2>


                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">


                        <!-- Feature Card 3 -->
                        <div
                            class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <img src="assets/images/mutual-fund/investment.png"
                                alt="Real-Time Payment"
                                class="w-full object-contain rounded-t-lg">
                            <div class="p-6 text-left">
                                <h3
                                    class="text-secondary-600 font-semibold text-xl mb-2">Investment
                                    Analysis Tools</h3>
                                <p class="text-gray-600 text-sm">
                                Provide data-driven fund recommendations to help </br>customers make informed decisions.
                                </p>
                            </div>
                        </div>
                        <!-- Feature Card 3 -->
                        <div
                            class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <img src="assets/images/mutual-fund/quick.png"
                                alt="Real-Time Payment"
                                class="w-full object-contain rounded-t-lg">
                            <div class="p-6 text-left">
                                <h3
                                    class="text-secondary-600 font-semibold text-xl mb-2">Quick Digital Onboarding</h3>
                                <p class="text-gray-600 text-sm">
                                Quick account setup with </br>paperless KYC for faster customer acquisition
                                </p>
                            </div>
                        </div>
                        <!-- Feature Card 3 -->
                        <div
                            class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <img src="assets/images/mutual-fund/amc.png"
                                alt="Real-Time Payment"
                                class="w-full object-contain rounded-t-lg">
                            <div class="p-6 text-left">
                                <h3
                                    class="text-secondary-600 font-semibold text-xl mb-2">Multi-AMC Connect</h3>
                                <p class="text-gray-600 text-sm">
                                Direct integration with top</br> Asset Management Companies for smooth transactions
                                </p>
                            </div>
                        </div>
                        <!-- Feature Card 3 -->
                        <div
                            class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <img src="assets/images/mutual-fund/goal.png"
                                alt="Real-Time Payment"
                                class="w-full object-contain rounded-t-lg">
                            <div class="p-6 text-left">
                                <h3
                                    class="text-secondary-600 font-semibold text-xl mb-2">Goal Planning
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
<section class="py-16 px-4 bg-white">
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
                            <div class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                            </div>
                            <span class="ml-3 text-gray-700 font-medium">SIP Management</span>
                        </li>
                        
                        <!-- Service Item 2 -->
                        <li class="flex items-center">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                            </div>
                            <span class="ml-3 text-gray-700 font-medium">Lumpsum Investments</span>
                        </li>
                        
                        <!-- Service Item 3 -->
                        <li class="flex items-center">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                            </div>
                            <span class="ml-3 text-gray-700 font-medium">Portfolio Tracking</span>
                        </li>
                        
                        <!-- Service Item 4 -->
                        <li class="flex items-center">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                            </div>
                            <span class="ml-3 text-gray-700 font-medium">NAV Updates</span>
                        </li>
                        
                        <!-- Service Item 5 -->
                        <li class="flex items-center">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                            </div>
                            <span class="ml-3 text-gray-700 font-medium">Goal Planning</span>
                        </li>
                        
                        <!-- Service Item 6 -->
                        <li class="flex items-center">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                            </div>
                            <span class="ml-3 text-gray-700 font-medium">Transaction History</span>
                        </li>
                        
                        <!-- Service Item 7 -->
                        <li class="flex items-center">
                        <div class="flex-shrink-0 h-6 w-6 rounded-full border flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                            </div>
                            <span class="ml-3 text-gray-700 font-medium">Performance Reports</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Right Column - Investment Illustration -->
                <div class="w-full md:w-1/2">
                    <img src="assets/images/mutual-fund/service.png" alt="E-commerce services" class="w-full h-auto" onerror="this.onerror=null; this.src='/api/placeholder/550/350'; this.alt='E-commerce services placeholder'">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- pricing -->
<section class="py-10 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
                        <p class="text-sm font-bold tracking-wider text-primary-800 uppercase mb-2">PRICING</p>
            <h2 class="text-3xl font-bold text-primary-700 mb-4">Simple, transparent pricing</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit dolor posuere vel venenatis eu sit massa
                volutpat.
            </p>
        </div>

        <!-- Toggle Switch -->
        <div class="flex items-center justify-center mb-12">
            <span class="mr-3 text-gray-700 font-medium">Monthly</span>
            <div class="relative inline-block w-12 align-middle select-none">
                <input type="checkbox" id="billing-toggle"
                    class="peer absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer checked:right-0 checked:border-primary-700 border-gray-300"
                    style="top: 0; bottom: 0; margin: auto 0; transition: right 0.2s ease-in-out, border-color 0.2s ease-in-out;">
                <label for="billing-toggle"
                    class="block h-6 overflow-hidden rounded-full bg-gray-300 cursor-pointer peer-checked:bg-primary-600"
                    style="transition: background-color 0.2s ease-in-out;">
                </label>
            </div>
            <span class="ml-3 text-gray-700 font-medium">Annually</span>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Plan 1 -->
            <div
                class="bg-white rounded-xl border-1 border-gray-100 shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1">
                <div class="p-8 flex flex-col h-full">
                    <!-- Plan Icon and Title -->
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-r from-primary-500 to-white overflow-hidden flex">
                                <img src="assets/images/mutual-fund/basic.png" alt="Whitelabel Partner Icon">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm text-gray-600">For individuals</p>
                            <h3 class="text-3xl font-semibold text-gray-900">Basic</h3>
                        </div>
                    </div>

                    <!-- Plan Details -->
                    <p class="text-sm text-gray-600 mb-6">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                    <div class="mb-4">
                    <div class="flex items-end">
    <span class="text-navy-900 text-4xl font-bold">$99</span>
    <span class="text-gray-500 text-sm ml-2">/monthly</span>
</div>
                </div>
                    <!-- Features -->
                    <h4 class="text-base font-semibold text-gray-800 mb-4">What's included</h4>
                    <ul class="space-y-4 mb-6 flex-grow">
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 w-5 h-5 rounded-full 0 flex items-center justify-center text-white mt-0.5">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2001_1795)">
<path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#1B2E5A"/>
<path d="M7.11719 13.8406L10.479 17.2024L18.8835 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_2001_1795">
<rect width="26" height="26" fill="white"/>
</clipPath>
</defs>
</svg>

                            </div>
                            <span class="ml-3 text-gray-700">All analytics features</span>
                        </li>
                        <li class="flex items-start">
                        <div
                                class="flex-shrink-0 w-5 h-5 rounded-full 0 flex items-center justify-center text-white mt-0.5">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2001_1795)">
<path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#1B2E5A"/>
<path d="M7.11719 13.8406L10.479 17.2024L18.8835 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_2001_1795">
<rect width="26" height="26" fill="white"/>
</clipPath>
</defs>
</svg>

                            </div>
                            <span class="ml-3 text-gray-700">Up to 250,000 tracked visits</span>
                        </li>
                        <li class="flex items-start">
                        <div
                                class="flex-shrink-0 w-5 h-5 rounded-full 0 flex items-center justify-center text-white mt-0.5">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2001_1795)">
<path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#1B2E5A"/>
<path d="M7.11719 13.8406L10.479 17.2024L18.8835 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_2001_1795">
<rect width="26" height="26" fill="white"/>
</clipPath>
</defs>
</svg>

                            </div>
                            <span class="ml-3 text-gray-700">Normal support</span>
                        </li>
                        <li class="flex items-start">
                        <div
                                class="flex-shrink-0 w-5 h-5 rounded-full 0 flex items-center justify-center text-white mt-0.5">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2001_1795)">
<path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#1B2E5A"/>
<path d="M7.11719 13.8406L10.479 17.2024L18.8835 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_2001_1795">
<rect width="26" height="26" fill="white"/>
</clipPath>
</defs>
</svg>

                            </div>
                            <span class="ml-3 text-gray-700">Up to 3 team members</span>
                        </li>
                    </ul>

                    <!-- Price -->
                    <div class="mt-auto">
                        <a href="#"
                            class="block w-full py-3 px-4 bg-primary-600 hover:bg-primary-700 text-white font-medium text-center rounded-full transition-colors duration-300">
                            Get started
                        </a>
                    </div>
                </div>
            </div>

            <!-- Plan 2 - Featured -->
            <div
                class="bg-primary-600 rounded-xl drop-shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1 relative md:-mt-8 md:mb-8 md:z-10">
                <!-- Popular Badge -->
                <div class="absolute top-4 right-4">
                    <span
                        class="inline-block bg-white bg-opacity-20 text-white text-xs font-semibold px-3 py-1 rounded-full">
                        Popular
                    </span>
                </div>

                <div class="p-8 flex flex-col h-full">
                    <!-- Plan Icon and Title -->
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mr-4">
                            <div class="w-10 h-10 bg-gradient-to-r from-white to-secondary-300 overflow-hidden flex">
                                <img src="assets/images/mutual-fund/pro.png" alt="Whitelabel Reseller Icon">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm text-white">For startups</p>
                            <h3 class="text-3xl font-semibold text-white">Pro</h3>
                        </div>                   
                     </div>

                    <!-- Plan Details -->
                    <p class="text-sm text-white mb-6">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                    <div class="mb-4">
                    <div class="flex items-end">
    <span class="text-white text-4xl font-bold">$199</span>
    <span class="text-white text-sm ml-2">/monthly</span>
                    </div>
                        </div>

                    <!-- Features -->
                    <h4 class="text-base font-semibold text-white mb-4">What's included</h4>
                    <ul class="space-y-4 mb-6 flex-grow">
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-primary-600 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="ml-3 text-white">All analytics features</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-primary-600 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="ml-3 text-white">Up to 1,000,000 tracked visits</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-primary-600 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="ml-3 text-white">Premium support</span>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-primary-600 mt-0.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="ml-3 text-white">Up to 10 team members</span>
                        </li>
                    </ul>

                    <!-- Price -->
                    <div class="mt-auto">
                        <a href="#"
                            class="block w-full py-3 px-4 bg-white hover:bg-gray-100 text-primary-600 font-medium text-center rounded-full transition-colors duration-300">
                            Get started
                        </a>
                    </div>
                </div>
            </div>

            <!-- Plan 3 -->
            <div
                class="bg-white rounded-xl border-1 border-gray-100 shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1">
                <div class="p-8 flex flex-col h-full">
                    <!-- Plan Icon and Title -->
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-r from-primary-500 to-white overflow-hidden flex">
                                <img src="assets/images/mutual-fund/enterprice.png" alt="Enterprise Partner Icon">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-sm text-gray-600">For big companies</p>
                            <h3 class="text-3xl font-semibold text-gray-900">Enterprise</h3>
                        </div>
                                        </div>

                    <!-- Plan Details -->
                    <p class="text-sm text-gray-600 mb-6">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit. </p>
                    <div class="mb-4">
                    <div class="flex items-end">
    <span class="text-navy-900 text-4xl font-bold">$399</span>
    <span class="text-gray-500 text-sm ml-2">/monthly</span>
</div>
                </div>

                    <!-- Features -->
                    <h4 class="text-base font-semibold text-gray-800 mb-4">What's included</h4>
                    <ul class="space-y-4 mb-6 flex-grow">
                        <li class="flex items-start">
                        <div
                                class="flex-shrink-0 w-5 h-5 rounded-full 0 flex items-center justify-center text-white mt-0.5">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2001_1795)">
<path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#1B2E5A"/>
<path d="M7.11719 13.8406L10.479 17.2024L18.8835 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_2001_1795">
<rect width="26" height="26" fill="white"/>
</clipPath>
</defs>
</svg>

                            </div>
                            <span class="ml-3 text-gray-700">All analytics features</span>
                        </li>
                        <li class="flex items-start">
                        <div
                                class="flex-shrink-0 w-5 h-5 rounded-full 0 flex items-center justify-center text-white mt-0.5">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2001_1795)">
<path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#1B2E5A"/>
<path d="M7.11719 13.8406L10.479 17.2024L18.8835 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_2001_1795">
<rect width="26" height="26" fill="white"/>
</clipPath>
</defs>
</svg>

                            </div>
                            <span class="ml-3 text-gray-700">Up to 5,000,000 tracked visits</span>
                        </li>
                        <li class="flex items-start">
                        <div
                                class="flex-shrink-0 w-5 h-5 rounded-full 0 flex items-center justify-center text-white mt-0.5">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2001_1795)">
<path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#1B2E5A"/>
<path d="M7.11719 13.8406L10.479 17.2024L18.8835 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_2001_1795">
<rect width="26" height="26" fill="white"/>
</clipPath>
</defs>
</svg>

                            </div>
                            <span class="ml-3 text-gray-700">Dedicated support</span>
                        </li>
                        <li class="flex items-start">
                        <div
                                class="flex-shrink-0 w-5 h-5 rounded-full 0 flex items-center justify-center text-white mt-0.5">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2001_1795)">
<path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#1B2E5A"/>
<path d="M7.11719 13.8406L10.479 17.2024L18.8835 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_2001_1795">
<rect width="26" height="26" fill="white"/>
</clipPath>
</defs>
</svg>

                            </div>
                            <span class="ml-3 text-gray-700">Up to 50 team members</span>
                        </li>
                    </ul>

                    <!-- Price -->
                    <div class="mt-auto">
                        <a href="#"
                            class="block w-full py-3 px-4 bg-primary-600 hover:bg-primary-700 text-white font-medium text-center rounded-full transition-colors duration-300">
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<!-- End of Pricing Section -->


<!-- testimonials -->


<section class="py-10 md:pb-24 px-4 md:px-8 lg:px-16 max-w-7xl mx-auto overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-10 items-start">
        <!-- Left Column - Heading -->
        <div class="md:col-span-5 mb-10 md:mb-0">
            <div class="uppercase text-sm font-medium text-gray-500 tracking-wider mb-2">TESTIMONIALS</div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-600 leading-tight">
                What People Say<br>About Us.
            </h2>

            <!-- Navigation Dots (Mobile and Desktop) -->
            <div class="flex space-x-2 mt-8" id="dots-container">
                <button class="w-3 h-3 rounded-full bg-secondary-500 transition-all duration-300"
                    data-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-index="1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-index="2"></button>
            </div>
        </div>

        <!-- Right Column - Testimonials -->
        <div class="md:col-span-7 relative">
            <!-- External Navigation Arrows -->
            <div class="absolute right-0 -top-12 flex space-x-3 z-50">
                <button id="prev-arrow"
                    class="w-8 h-8 rounded-full bg-white shadow-md flex items-center justify-center text-gray-500 hover:text-primary-600 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button id="next-arrow"
                    class="w-8 h-8 rounded-full bg-white shadow-md flex items-center justify-center text-gray-500 hover:text-primary-600 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div class="testimonials-container relative min-h-[200px]">
                <!-- Profile Image (Absolute Positioned) -->
                <div class="absolute left-0 top-10 md:-left-12 z-30 transition-all duration-500"
                    id="profile-image-container">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Profile"
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full border-4 border-white shadow-md object-cover transition-all duration-300"
                        id="profile-image">
                </div>

                <!-- Active Testimonial Card -->
                <div class="w-full bg-white p-6 md:p-8 rounded-lg shadow-lg opacity-100 mb-4 transition-all duration-500 transform translate-y-0"
                    id="testimonial-0">
                    <div class="ml-20 md:ml-10 pt-2">
                        <p class="text-gray-700 leading-relaxed mb-6">
                            "On the Windows talking painted pasture yet its express parties use. Sure last upon he same
                            as knew next. Of believed or diverted no."
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
                            "Smart homes are the future. The integration of IoT devices has transformed how we interact
                            with our living spaces."
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
                            "The customer service was exceptional. They went above and beyond to ensure everything was
                            set up perfectly."
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