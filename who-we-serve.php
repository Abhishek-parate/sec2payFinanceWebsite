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
                 Support for Every Business Size</h1>
            <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 text-gray-700 max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">
                Simplify your operations with a comprehensive platform <br class="hidden sm:block">offering essential financial, travel, and utility services tailored to <br class="hidden sm:block">your business needs.
                
            </p>
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-mirror="true">
                <a href="#"
                    class="inline-block bg-secondary-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-md text-lg font-medium hover:bg-secondary-600 transition-all duration-300 hover:shadow-lg hover:scale-105 transform z-10">
                    View All Services
                </a>
            </div>
        </div>



    </div>
</section>


<!-- Banking Services Section --> 
<section class="  py-10 px-4 md:px-24 flex items-center">
    <div class="container mx-auto px-4 md:px-6">
    <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center">We Cater to</h2>

        <!-- Banking Services Tabs -->
        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <!-- Tab Content -->
            <div class="relative min-h-[350px] overflow-hidden md:pl-24">
                <!-- AePS Tab Content -->
                <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
                <div>

                        </div>
                    <div class="flex flex-col md:flex-row items-center gap-8 text-primary-600">
                        
                       
                        <div class="w-full md:w-1/2 ">
                            <div class="p-10 bg-secondary-100 rounded-2xl w-4/5">

                            <h3 class="text-2xl md:text-3xl font-semibold mb-8">For Merchants</h3>
                            <ul class="space-y-5 mb-4">
                                <?php
                                $Merchants = [
                                    'Working capital loans',
                                    'Stock purchase funding',
                                    'Business expansion loans',
                                    'All type of business loans'
                                ];
                                
                                foreach ($Merchants as $Merchant) :
                                ?>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="ml-3 "><?php echo $Merchant; ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-semibold mb-8">For Consumers</h3>
                            <ul class="space-y-5 mb-4">
                                <?php
                                $services = [
                                    'Working capital loans',
                                    'Stock purchase funding',
                                    'Business expansion loans',
                                    'All type of business loans'
                                ];
                                
                                foreach ($services as $service) :
                                ?>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="ml-3 "><?php echo $service; ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                         
                        </div>
                    </div>
                </div>

                
                <div class="relative z-10 flex justify-center items-center mt-6 " data-aos="fade-up" data-aos-delay="400">
    <a href="#"
        class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5  sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
        data-aos="zoom-in" data-aos-delay="500">
        Explore Credit Solutions
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
                    class="peer absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer checked:right-0 checked:border-secondary-500 border-gray-300"
                    style="top: 0; bottom: 0; margin: auto 0; transition: right 0.2s ease-in-out, border-color 0.2s ease-in-out;">
                <label for="billing-toggle"
                    class="block h-6 overflow-hidden rounded-full bg-gray-300 cursor-pointer peer-checked:bg-secondary-400"
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
                                <img src="assets/images/banking/icon1.png" alt="Whitelabel Partner Icon">
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
                                <img src="assets/images/banking/icon2.png" alt="Whitelabel Reseller Icon">
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
                                <img src="assets/images/banking/icon1.png" alt="Enterprise Partner Icon">
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
                     Join India's Digital Commerce Revolution
                </h1>

                <p class="text-base sm:text-lg text-gray-300 mb-6 sm:mb-8 relative z-10" data-aos="fade-up"
                    data-aos-delay="300">
                    "Ready to expand your local business? Partner with Sec2Pay's ONDC platform"
                </p>

                <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
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