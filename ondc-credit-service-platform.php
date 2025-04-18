<?php include_once('includes/header.php'); ?>
<!-- hero section -->

<section class=" bg-white">

    <div class="max-w-7xl mx-auto py-12  ">
        <div class="rounded-xl overflow-hidden  ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- Left Content - Services List -->
                <div class="p-8 md:p-12">
                    <p class="font-semi-bolder text-primary-600 font-bold">ONDC CREDIT SERVICE PLATFORM</p>
                    <h1 class="text-4xl font-bold text-secondary-600 ">Fuel Business Growth</h1>
                    <h1 class="text-4xl font-bold text-secondary-600 mb-4">with Smart Credit Solutions</h1>
                    <p class="text-gray-500 mb-8">Empowering your business to provide credit on the ONDC platform.</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                        Get Started Today!

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
                        <img src="assets/images/ondc-ecommerce/banner.png" alt="Dashboard" class=" h-auto" />
                        <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- hero section ends -->


<!-- E-Governance Platform Services Section -->
<section class="bg-primary-100 py-10 px-4 md:px-24">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-primary-700 my-8 text-center">Features & Functions</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
            <!-- Feature: Data-Driven Lending -->
            <div>
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-primary-500">Data-Driven <br>Lending</h2>
                </div>
                <p class="text-grey-500 pt-2">
                    Equip your business with tools to evaluate loans using advanced analytics.
                </p>
            </div>

            <!-- Feature: Pre-Integrated APIs -->
            <div>
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-primary-500">Pre-Integrated <br>APIs</h2>
                </div>
                <p class="text-grey-500 pt-2">
                    Simplify launching ONDC credit services with our ready-to-use tools.
                </p>
            </div>

            <!-- Feature: End-to-End Management -->
            <div>
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-primary-500">End-to-end <br>Management</h2>
                </div>
                <p class="text-grey-500 pt-2">
                    Manage applications, approvals, disbursements, and collections seamlessly.
                </p>
            </div>

            <!-- Feature: Regulatory Compliance -->
            <div>
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-primary-500">Regulatory <br>Compliance</h2>
                </div>
                <p class="text-grey-500 pt-2">
                    Stay aligned with RBI and ONDC standards through automated checks.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Banking Services Section --> 
<section class="  py-10 px-4 md:px-24 flex items-center">
    <div class="container mx-auto px-4 md:px-6">
    <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center">Features & Functions</h2>

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
                            <ul class="space-y-5 mb-8">
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
                            <h3 class="text-2xl md:text-3xl font-semibold mb-8">Consumer</h3>
                            <ul class="space-y-5 mb-8">
                                <?php
                                $services = [
                                    'Store and product discovery tools',
                                    'Order tracking and fulfillment systems',
                                    'Secure payment integration',
                                    'Business analytics dashboard'
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

                
                <div class="relative z-10 flex justify-center items-center mt-3 " data-aos="fade-up" data-aos-delay="400">
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




    <!--Why Choose Sec2Pay
     ONDC Credit Platform-->

     <section class="py-10 px-4">
     <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-full md:w-1/2 flex justify-center">
                            <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                                <img src="assets\images\ondc-credit-service-platform\ondc-credit-service.png" alt="AePS Banking"
                                    class="max-w-full h-auto max-h-[400px]">
                            </div>
                        </div>
                        <div class="w-full md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-semibold mb-8">Why Choose Sec2Pay <br>
                            ONDC Credit Platform</h3>
                            <ul class="space-y-5 mb-8">
                                <?php
                                $lifePlans = [
                                    '7-day merchant enrollment',
                                    'Instant credit decisions',
                                    'Multiple repayment plans',
                                    'Digital documentation',
                                    'Automated recovery system',
                                    'Fraud detection tools',
                                    'Multi-lender support',
                                    'Performance tracking',
];
                                
                                foreach ($lifePlans as $plan) :
                                ?>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="ml-3 text-black"><?php echo $plan; ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <div>
                                <a href="#" class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-md transition duration-300">Explore Credit Solutions</a>
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
                        <h3 class="text-3xl font-semibold text-gray-900">Whitelabel Partner</h3>
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
                        <p class="text-xl font-bold text-gray-700 mb-1">Starting at</p>
                        <div class="flex items-end mb-6">
                            <span class="text-4xl font-bold text-gray-900 monthly-price">₹25,000</span>
                            <span class="text-4xl font-bold text-gray-900 annual-price hidden">₹20,000</span>
                        </div>
                        <a href="#"
                            class="block w-full py-3 px-4 bg-secondary-500 hover:bg-secondary-600 text-white font-medium text-center rounded-full transition-colors duration-300">
                            Get started
                        </a>
                    </div>
                </div>
            </div>

            <!-- Plan 2 - Featured -->
            <div
                class="bg-secondary-500 rounded-xl drop-shadow-xl overflow-hidden transform transition-all duration-300 hover:drop-shadow-2xl hover:-translate-y-1 relative md:-mt-8 md:mb-8 md:z-10">
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
                        <h3 class="text-3xl font-semibold  text-white">Whitelabel Reseller</h3>
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
                        <p class="text-xl font-bold text-white text-opacity-90 mb-1">Starting at</p>
                        <div class="flex items-end mb-6">
                            <span class="text-4xl font-bold text-white monthly-price">₹50,000</span>
                            <span class="text-4xl font-bold text-white annual-price hidden">₹40,000</span>
                        </div>
                        <a href="#"
                            class="block w-full py-3 px-4 bg-white hover:bg-gray-100 text-secondary-600 font-medium text-center rounded-full transition-colors duration-300">
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
                        <h3 class="text-3xl font-semibold text-gray-900">Enterprise Partner</h3>
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
                        <p class="text-xl font-bold text-gray-700 mb-1">Starting at</p>
                        <div class="flex items-end mb-6">
                            <span class="text-4xl font-bold text-gray-900 monthly-price">₹1,00,000</span>
                            <span class="text-4xl font-bold text-gray-900 annual-price hidden">₹80,000</span>
                        </div>
                        <a href="#"
                            class="block w-full py-3 px-4 bg-secondary-500 hover:bg-secondary-600 text-white font-medium text-center rounded-full transition-colors duration-300">
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

<!-- Join Section with Dark Blue Background -->
<section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
    <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-primary-700 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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





<?php include_once('includes/footer.php'); ?>