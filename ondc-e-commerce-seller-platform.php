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
        <section class="relative overflow-hidden py-10 pt-16 sm:pt-20 md:pt-24 md:py-10 bg-white">
    <!-- Background Gradient Overlays -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
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

    <div class="max-w-7xl mx-auto py-6 md:py-8 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="rounded-xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 items-center">
                <!-- Left Content - Services List -->
                <div class="p-4 md:p-8 lg:p-12" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                    <h1 class="text-3xl sm:text-4xl font-bold text-secondary-600" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-once="true">Help Sellers Reach</h1>
                    <h1 class="text-3xl sm:text-4xl font-bold text-secondary-600 mb-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">New Markets</h1>
                    <p class="text-gray-500 mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">Empower your business to support sellers in thriving <br class="hidden sm:block"> on ONDC's digital network.</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4"
                        data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                        Get Started Today!
                    </a>

                    <div class="mt-6 md:mt-8 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                        data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
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
                        <span class="text-gray-600 text-xs sm:text-sm">1 Lac+ Retail partners across India</span>
                    </div>
                </div>
                
                <!-- Right Content - Image -->
                <div class="relative order-first md:order-last" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                    <!-- Main Dashboard Image -->
                    <div class="relative z-20">
                        <img src="assets/images/ondc-ecommerce/banner.png" alt="Dashboard" 
                            class="w-full h-auto " />
                        <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- hero section ends -->


        <!-- E-Governance Platform Services Section -->
        <section class="bg-white py-10 px-4 md:px-24" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <div class="container mx-auto px-6 ">
                <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center">Why Choose Sec2Pay?</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- PAN Card Services -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8">
                        <!-- Icon and Title - Vertical Alignment -->
                        <div class="text-left mb-2">
                            <div class="text-red-500">
                                <img src="assets/images/ondc-ecommerce/icon1.svg" alt="Pan Image" class="mb-4">
                            </div>
                            <h2 class="text-xl font-semibold text-red-500">Quick Setup</h2>
                        </div>
                        <p>Seamlessly onboard sellers </br>and enable their growth.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8">
                        <!-- Icon and Title - Vertical Alignment -->
                        <div class="text-left mb-2">
                            <div class="text-red-500">
                                <img src="assets/images/ondc-ecommerce/icon2.svg" alt="Pan Image" class="mb-4">
                            </div>
                            <h2 class="text-xl font-semibold text-red-500">Simplified Management</h2>
                        </div>
                        <p>Access a centralized dashboard to</br>manage seller networks.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8">
                        <!-- Icon and Title - Vertical Alignment -->
                        <div class="text-left mb-2">
                            <div class="text-red-500">
                                <img src="assets/images/ondc-ecommerce/icon3.svg" alt="Pan Image" class="mb-4">
                            </div>
                            <h2 class="text-xl font-semibold text-red-500">Localized Tools</h2>
                        </div>
                        <p>Multi-language support</br>tailored for Tier 2 and 3 cities.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Banking Services Section -->
        <section class="bg-primary-600 text-white py-20 min-h-[350px] flex items-center">
            <div class="container mx-auto px-4 md:px-6">
                <!-- Banking Services Tabs -->
                <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <!-- Tab Content -->
                    <div class="relative min-h-[350px] overflow-hidden md:pl-24">
                        <!-- AePS Tab Content -->
                        <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
                            <div class="flex flex-col md:flex-row items-center gap-8">
                                <div class="w-full md:w-1/2 flex justify-center">
                                    <div class="relative flex justify-center" data-aos="fade-left"
                                        data-aos-duration="1000">
                                        <img src="assets/images/ondc-ecommerce/service.png" alt="AePS Banking"
                                            class="max-w-full h-auto max-h-[400px]">
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <h3 class="text-2xl md:text-3xl font-semibold mb-8">Services</h3>
                                    <ul class="space-y-5 mb-8">
                                        <?php
                                $lifePlans = [
                                    'Catalog management tools',
                                    'Order tracking and fulfillment systems',
                                    'Secure payment integration',
                                    'Business analytics dashboard'
                                ];
                                
                                foreach ($lifePlans as $plan) :
                                ?>
                                        <li class="flex items-start">
                                            <div
                                                class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2"
                                                        fill="none" />
                                                    <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <span class="ml-3 text-white"><?php echo $plan; ?></span>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div>
                                        <a href="#"
                                            class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-md transition duration-300">Explore
                                            Credit Solutions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- pricing -->
        <section class="py-10 px-4 sm:px-6 lg:px-8 overflow-hidden">
            <div class="max-w-6xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <p class="text-sm font-bold tracking-wider text-primary-800 uppercase mb-2">PRICING</p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-primary-700 mb-4">Simple, transparent pricing</h2>
                </div>

                <!-- Toggle Switch -->
                <div class="flex items-center justify-center mb-10 sm:mb-12" data-aos="fade-up" data-aos-duration="800"
                    data-aos-delay="100" data-aos-once="true">
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
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    <!-- Plan 1 -->
                    <div class="bg-white rounded-xl border border-gray-200 shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                        <div class="p-6 sm:p-8 flex flex-col h-full">
                            <!-- Plan Icon and Title -->
                            <div class="flex flex-col sm:flex-row sm:items-center mb-6">
                                <div
                                    class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mb-4 sm:mb-0 sm:mr-4">
                                    <div
                                        class="w-10 h-10  overflow-hidden flex items-center justify-center">
                                        <img src="assets/images/banking/icon1.png" alt="Whitelabel Partner Icon"
                                            class="w-8 h-8 object-contain">
                                    </div>
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-semibold text-gray-900">Whitelabel Partner</h3>
                            </div>

                            <!-- Plan Details -->
                            <p class="text-sm text-gray-600 mb-6">For New Entrepreneurs</p>

                            <!-- Features -->
                            <h4 class="text-base font-semibold text-gray-800 mb-4">What's included</h4>
                            <ul class="space-y-4 mb-6 flex-grow">
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700">Build your brand identity</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700">Full banking suite access</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700">Create agent networks</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700">Mobile app included</span>
                                </li>
                            </ul>

                            <!-- Price -->
                            <div class="mt-auto">
                                                                 <a href="#"
                                    class="block w-full py-3 px-4 bg-secondary-500 hover:bg-secondary-600 text-white font-medium text-center rounded-full transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-md">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Plan 2 - Featured -->
                    <div class="bg-secondary-500 rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 relative md:-mt-8 md:mb-8 md:z-10"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">
                        <!-- Popular Badge -->
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block bg-white bg-opacity-20 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                Popular
                            </span>
                        </div>

                        <div class="p-6 sm:p-8 flex flex-col h-full">
                            <!-- Plan Icon and Title -->
                            <div class="flex flex-col sm:flex-row sm:items-center mb-6">
                                <div
                                    class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 sm:mb-0 sm:mr-4">
                                    <div
                                        class="w-10 h-10   flex items-center justify-center">
                                        <img src="assets/images/banking/icon2.png" alt="Whitelabel Reseller Icon"
                                            class="w-8 h-8 object-contain">
                                    </div>
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-semibold text-white">Whitelabel Reseller</h3>
                            </div>

                            <!-- Plan Details -->
                            <p class="text-sm text-white text-opacity-90 mb-6">For Growing Businesses</p>

                            <!-- Features -->
                            <h4 class="text-base font-semibold text-white mb-4">What's included</h4>
                            <ul class="space-y-4 mb-6 flex-grow">
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-secondary-600 mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-white">Handle multiple brands</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-secondary-600 mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-white">Set custom commissions</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-secondary-600 mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-white">API integration</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-white flex items-center justify-center text-secondary-600 mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-white">Business insights</span>
                                </li>
                            </ul>

                            <!-- Price -->
                            <div class="mt-auto">
                                                                 <a href="#"
                                    class="block w-full py-3 px-4 bg-white hover:bg-gray-100 text-secondary-600 font-medium text-center rounded-full transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-md">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Plan 3 -->
                    <div class="bg-white rounded-xl border border-gray-200 shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                        <div class="p-6 sm:p-8 flex flex-col h-full">
                            <!-- Plan Icon and Title -->
                            <div class="flex flex-col sm:flex-row sm:items-center mb-6">
                                <div
                                    class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mb-4 sm:mb-0 sm:mr-4">
                                    <div
                                        class="w-10 h-10  overflow-hidden flex items-center justify-center">
                                        <img src="assets/images/banking/icon1.png" alt="Enterprise Partner Icon"
                                            class="w-8 h-8 object-contain">
                                    </div>
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-semibold text-gray-900">Enterprise Partner</h3>
                            </div>

                            <!-- Plan Details -->
                            <p class="text-sm text-gray-600 mb-6">For Large Organizations</p>

                            <!-- Features -->
                            <h4 class="text-base font-semibold text-gray-800 mb-4">What's included</h4>
                            <ul class="space-y-4 mb-6 flex-grow">
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700">Tailored solutions</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700">Priority support</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700">API ecosystem</span>
                                </li>
                                <li class="flex items-start">
                                    <div
                                        class="flex-shrink-0 w-5 h-5 rounded-full bg-secondary-500 flex items-center justify-center text-white mt-0.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-gray-700">Fund management system</span>
                                </li>
                            </ul>

                            <!-- Price -->
                            <div class="mt-auto">
                                                                 <a href="#"
                                    class="block w-full py-3 px-4 bg-secondary-500 hover:bg-secondary-600 text-white font-medium text-center rounded-full transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-md">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
    <script>
    document.addEventListener("DOMContentLoaded", function () {
  const billingToggle = document.getElementById("billing-toggle");
  const monthlyPrices = document.querySelectorAll(".monthly-price");
  const annualPrices = document.querySelectorAll(".annual-price");

  // Check if billing toggle exists before adding event listener
  if (billingToggle) {
    billingToggle.addEventListener("change", function () {
      if (this.checked) {
        // Annual pricing
        monthlyPrices.forEach((el) => el.classList.add("hidden"));
        annualPrices.forEach((el) => el.classList.remove("hidden"));
      } else {
        // Monthly pricing
        monthlyPrices.forEach((el) => el.classList.remove("hidden"));
        annualPrices.forEach((el) => el.classList.add("hidden"));
      }

      // Add pulse animation to prices
      const visiblePrices = this.checked ? annualPrices : monthlyPrices;
      visiblePrices.forEach((el) => {
        el.classList.add("animate-pulse-scale");
        setTimeout(() => {
          el.classList.remove("animate-pulse-scale");
        }, 400);
      });
    });
  }
});
document.addEventListener("DOMContentLoaded", function () {
  // All testimonial data
  const testimonials = [
    {
      name: "Mike taylor",
      location: "Lahore, Pakistan",
      text: "On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.",
      profile: "https://randomuser.me/api/portraits/men/3.jpg",
    },
    {
      name: "Chris Thomas",
      location: "CEO of Red Button",
      text: "Smart homes are the future. The integration of IoT devices has transformed how we interact with our living spaces.",
      profile: "https://randomuser.me/api/portraits/women/3.jpg",
    },
    {
      name: "Sarah Johnson",
      location: "New York, USA",
      text: "The customer service was exceptional. They went above and beyond to ensure everything was set up perfectly.",
      profile: "https://randomuser.me/api/portraits/men/3.jpg",
    },
  ];

  // Elements
  const dots = document.querySelectorAll("#dots-container button");
  const profileImage = document.getElementById("profile-image");
  const prevArrow = document.getElementById("prev-arrow");
  const nextArrow = document.getElementById("next-arrow");

  let currentIndex = 0;

  // Function to update the active testimonial
  function updateTestimonial(newIndex) {
    // Ensure index is within bounds
    newIndex = (newIndex + testimonials.length) % testimonials.length;

    // Store the previous index
    const prevIndex = currentIndex;
    currentIndex = newIndex;

    // Update dots
    dots.forEach((dot, index) => {
      if (index === currentIndex) {
        dot.classList.remove("bg-gray-300");
        dot.classList.add("bg-secondary-500");
      } else {
        dot.classList.remove("bg-secondary-500");
        dot.classList.add("bg-gray-300");
      }
    });

    // Get all testimonial cards
    const testimonialCards = [];
    for (let i = 0; i < testimonials.length; i++) {
      testimonialCards.push(document.getElementById(`testimonial-${i}`));
    }

    // Hide previous active testimonial
    const prevCard = testimonialCards[prevIndex];
    prevCard.classList.remove(
      "opacity-100",
      "translate-y-0",
      "z-20",
      "bg-white",
      "shadow-lg"
    );
    prevCard.classList.add(
      "opacity-0",
      "translate-y-16",
      "bg-gray-100",
      "shadow-md"
    );

    // After a small delay, show the new one and hide the old one
    setTimeout(() => {
      // Hide all cards
      testimonialCards.forEach((card) => {
        card.classList.add("hidden");
      });

      // Show current card
      const currentCard = testimonialCards[currentIndex];
      currentCard.classList.remove(
        "hidden",
        "opacity-0",
        "translate-y-16",
        "bg-gray-100",
        "shadow-md"
      );
      currentCard.classList.add(
        "opacity-100",
        "translate-y-0",
        "z-20",
        "bg-white",
        "shadow-lg"
      );

      // Show next card below the current one (if there is a next card)
      const nextIndex = (currentIndex + 1) % testimonials.length;
      const nextCard = testimonialCards[nextIndex];
      if (nextCard) {
        nextCard.classList.remove("hidden", "opacity-0");
        nextCard.classList.add("opacity-95", "translate-y-16", "z-10");
      }

      // Update profile image
      profileImage.src = testimonials[currentIndex].profile;
      profileImage.alt = testimonials[currentIndex].name;
    }, 300);
  }

  // Add event listeners to dots
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      updateTestimonial(index);
    });
  });

  // Add event listeners to navigation arrows
  nextArrow.addEventListener("click", function () {
    updateTestimonial(currentIndex + 1);
  });

  prevArrow.addEventListener("click", function () {
    updateTestimonial(currentIndex - 1);
  });

  // Show initial testimonial setup (second card visible but stacked)
  const secondCard = document.getElementById("testimonial-1");
  secondCard.classList.remove("hidden");
});
</script>
    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>