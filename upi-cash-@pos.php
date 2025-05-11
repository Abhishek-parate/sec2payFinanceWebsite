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

        <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10 mt-6">


            <!-- Background Gradients - Hidden on mobile -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none hidden md:block">
                <!-- Top-left Circular Gradient (Bluish) -->
                <div class="absolute top-[5%] -left-[25%] w-[50%] h-[100%] rounded-full opacity-50"
                    style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 10%, rgba(222, 242, 255, 0.4) 50%, rgba(255, 255, 255, 0) 60%);"
                    data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                </div>

                <!-- Top-right Circular Gradient (Pinkish) -->
                <div class="absolute top-0 -right-[25%] w-[50%] h-[70%] rounded-full opacity-50"
                    style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 10%, rgba(242, 219, 219, 0.4) 50%, rgba(255, 255, 255, 0) 60%);"
                    data-aos="fade" data-aos-duration="1500" data-aos-delay="200" data-aos-once="true">
                </div>
            </div>


            <!-- Top-right Circular Gradient (Pinkish) - Hidden on mobile -->

            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <!-- Content - Always First -->
                        <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-once="true">
                            <p class="font-bold text-primary-600 text-sm sm:text-base mb-2" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">UPI Cash @POS
                            </p>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                                Transform Your POS
                            </h1>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4"
                                data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                                into a Cash Point
                            </h1>
                            <p class="black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="800" data-aos-once="true">
                                Smart copy that connects with target audience in tier 2-3 cities Let <br> your customers
                                withdraw cash while they shop. Add UPI Cash <br> withdrawal service to your POS
                                terminal.

                            </p>

                            <a href="https://app.sec2pay.in/?src=website" target="_blank"
                                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                                Start Now
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

                        <!-- Image - Always Second -->
                         <div class="w-full md:w-1/2 order-2" data-aos="fade-left" data-aos-duration="1200"
                            data-aos-once="true">
                            <!-- Main Dashboard Image -->
                            <div class="relative z-20">
                                <img src="assets/images/upi-cash/banner.png" alt="Dashboard"
                                    class="w-full h-auto" />
                               <div
                                    class="absolute bottom-0 left-0 right-0 h-2/5 bg-gradient-to-t from-white to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Why Choose Sec2Pay DMT Platform Service -->
        <section class="py-12 mb-6 mt-6 bg-primary-100">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-primary-700 mb-8" data-aos="fade-up" data-aos-duration="1000">Why Choose Sec2Pay UPI Cash @POS Platform</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Feature 1 - Secure Payments -->
            <div class="rounded-lg border bg-white p-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <h3 class="text-xl font-semibold text-secondary-500 mb-3">Cash Point</h3>
                <p class="text-gray-700">
                    Turn your store into a neighborhood cash point. Let customers withdraw cash during regular purchases through UPI.
                </p>
            </div>

            <!-- Feature 2 - Simple Setup -->
            <div class="rounded-lg border p-6 bg-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <h3 class="text-xl font-semibold text-secondary-500 mb-3">Simple Process</h3>
                <p class="text-gray-700">
                    Quick cash withdrawals through existing POS terminals. Customers pay via UPI and receive cash instantly.
                </p>
            </div>

            <!-- Feature 3 - Quick Settlements -->
            <div class="rounded-lg border p-6 bg-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <h3 class="text-xl font-semibold text-secondary-500 mb-3">Additional Income</h3>
                <p class="text-gray-700">
                    Earn commission on each withdrawal transaction while providing an essential service to your community.
                </p>
            </div>
        </div>
    </div>
</section>

        <!-- Life Insurance Solutions Section with AOS Animations -->
        <section class="w-full py-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

            <div class="max-w-6xl mx-auto px-4 py-2">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Image First on Mobile, Second on Desktop -->
                    <div class="w-full md:w-1/2 order-1 md:order-2" data-aos="fade-left" data-aos-duration="1200"
                        data-aos-once="true">
                        <img src="assets/images/upi-cash/merchant.png" alt="Account Features"
                            class="w-full h-auto">
                    </div>
                    <!-- Content Second on Mobile, First on Desktop -->
                    <div class="w-full md:w-1/2 order-2 md:order-1" data-aos="fade-right" data-aos-duration="1200"
                        data-aos-once="true">
                        <h2 class="text-3xl font-bold text-secondary-500 mt-6 mb-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="800" data-aos-once="true">Benefits for Merchants</h2>
                        <ul class="space-y-5 mb-8">
                            <?php
                $benefits = [
                    'No additional hardware needed - use your existing POS device',
                    'Build customer loyalty through added services',
                    'Regular settlement cycles',
                    'Simple digital documentation',
                    'Real-time transaction monitoring',
                    'Dedicated support team',
                ];
                
                foreach ($benefits as $index => $benefit) :
                    $delay = 300 + ($index * 100);
                ?>
                            <li class="flex items-start" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"
                                data-aos-duration="800" data-aos-once="true">
                                <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                    <!-- SVG icon -->
                                    <svg width="19" height="25" viewBox="0 0 19 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1700_1996)">
                                            <path
                                                d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z"
                                                fill="#FEEEEC" stroke="#F15744" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705"
                                                stroke="#F15744" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1700_1996">
                                                <rect width="19" height="19" fill="white" transform="translate(0 3)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <span class="ml-3 text-primary-500"><?php echo $benefit; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </section>


        <!-- How It Works Section -->
        <section class="bg-primary-600 py-10 md:py-16" data-aos="fade" data-aos-duration="800" data-aos-once="true">
            <div class="container mx-auto px-4 sm:px-6">
                <!-- Section Title - Centered -->
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-12 pl-12 md:mb-10 text-start" data-aos="fade-up"
                    data-aos-duration="800" data-aos-once="true">How It Works :</h2>

                <!-- Steps Timeline -->
                <div class="relative max-w-6xl mx-auto">
                    <!-- Timeline Line -->
                    <div class="hidden md:block absolute top-6 left-0 right-0 h-0.5 border-t-2 border-dashed border-white z-10"
                        data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300" data-aos-once="true">
                    </div>

                    <!-- Steps Container - Now centered -->
                    <div class="flex flex-col md:flex-row md:justify-between items-center md:items-start relative z-20">
                        <!-- Step 1 -->
                        <div class="flex flex-col items-start text-center mb-12 md:mb-0 md:w-1/5" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="700" data-aos-once="true">
                            <div class="bg-white border-2 border-secondary-500 rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                                data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500" data-aos-once="true">
                                1
                            </div>
                            <p class="text-white font-medium text-start">Customer requests</br>
cash withdrawal</p>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex flex-col items-start text-center mb-12 md:mb-0 md:w-1/5" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="700" data-aos-once="true">
                            <div class="bg-white border-2 border-secondary-500 rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                                data-aos="zoom-in" data-aos-delay="600" data-aos-duration="500" data-aos-once="true">
                                2
                            </div>
                            <p class="text-white font-medium text-start">Enter withdrawal amount</br>
in POS</p>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex flex-col items-start text-center mb-12 md:mb-0 md:w-1/5" data-aos="fade-up"
                            data-aos-delay="300" data-aos-duration="700" data-aos-once="true">
                            <div class="bg-white border-2 border-secondary-500 rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                                data-aos="zoom-in" data-aos-delay="800" data-aos-duration="500" data-aos-once="true">
                                3
                            </div>
                            <p class="text-white font-medium text-start">Customer scans QR</br>
or enters UPI ID</p>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex flex-col items-start text-center mb-12 md:mb-0 md:w-1/5" data-aos="fade-up"
                            data-aos-delay="400" data-aos-duration="700" data-aos-once="true">
                            <div class="bg-white border-2 border-secondary-500 rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                                data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="500" data-aos-once="true">
                                4
                            </div>
                            <p class="text-white font-medium text-start">Verify transaction</br>
completion</p>
                        </div>

                        <!-- Step 5 -->
                        <div class="flex flex-col items-start text-center md:w-1/5" data-aos="fade-up"
                            data-aos-delay="500" data-aos-duration="700" data-aos-once="true">
                            <div class="bg-white border-2 border-secondary-500 rounded-full h-12 w-12 flex items-center justify-center text-secondary-500 font-bold mb-4"
                                data-aos="zoom-in" data-aos-delay="1200" data-aos-duration="500" data-aos-once="true">
                                5
                            </div>
                            <p class="text-white font-medium text-start">Hand over cash</br>
to customer</p>
                        </div>
                    </div>
                </div>
            </div>  
        </section>

        <!-- Enhanced Hero Section with Bidirectional AOS Animations -->
        <section class="relative overflow-hidden py-2 mb-6 bg-white">

            <!-- Main Content -->
            <div class="container mx-auto px-4 sm:px-6 relative z-20">

                <!-- Trusted By Section with Infinite Scroll -->
                <div class="mt-12 md:mt-16 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"
                    data-aos-mirror="true">
                    <p class="text-gray-700 font-bold text-lg mb-6 md:mb-8">Backed by leading banks and financial
                        institutions</p>

                    <!-- Infinite Scroll Container -->
                    <div class="relative overflow-hidden w-full ">
                        <div class="logos-container flex whitespace-nowrap">
                            <!-- First set of logos - will appear as one continuous stream -->
                            <div class="logos-slide animate-scroll inline-flex items-center">
                                <img src="./assets/images/home/hdfc.png" alt="HDFC Bank"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/idfc.png" alt="IDFC Bank"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/bom.png" alt="Bank of Maharashtra"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/sbi.png" alt="SBI" class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/ib.png" alt="Indian Bank"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/icici.png" alt="ICICI Bank"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/bob.png" alt="Bank of Baroda"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/sc.png" alt="Standard Chartered"
                                    class="h-8 md:h-10 w-auto mx-8" />

                                <!-- Duplicated for seamless loop -->
                                <img src="./assets/images/home/hdfc.png" alt="HDFC Bank"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/idfc.png" alt="IDFC Bank"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/bom.png" alt="Bank of Maharashtra"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/sbi.png" alt="SBI" class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/ib.png" alt="Indian Bank"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/icici.png" alt="ICICI Bank"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/bob.png" alt="Bank of Baroda"
                                    class="h-8 md:h-10 w-auto mx-8" />
                                <img src="./assets/images/home/sc.png" alt="Standard Chartered"
                                    class="h-8 md:h-10 w-auto mx-8" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Other Services Section -->
        <section class="w-full bg-primary-100 py-10 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row items-start">
                    <!-- Section Title -->
                    <div class="text-primary-500 mb-10 md:mb-0 md:w-1/4 md:mr-8 md:pt-2" data-aos="fade-right">
                        <h2 class="text-3xl font-bold leading-tight uppercase">
                            OUR OTHER SERVICES
                        </h2>
                    </div>

                    <!-- Services Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-6 gap-y-8 md:w-3/4 w-full">
                        <!-- AEPS -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/images/pan-nsdl/icon1.svg" alt="AEPS" class="w-28 h-28 ">
                            <span class="text-primary-500 text-center font-medium">AEPS</span>
                        </div>

                        <!-- DMT -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/images/pan-nsdl/icon2.svg" alt="DMT" class="w-28 h-28 ">
                            <span class="text-primary-500 text-center font-medium">DMT</span>
                        </div>

                        <!-- Micro ATM -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/images/pan-nsdl/icon3.svg" alt="Micro ATM" class="w-28 h-28 ">
                            <span class="text-primary-500 text-center font-medium">Micro ATM</span>
                        </div>

                        <!-- mPOS -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/images/pan-nsdl/icon4.svg" alt="mPOS" class="w-28 h-28 ">
                            <span class="text-primary-500 text-center font-medium">mPOS</span>
                        </div>

                        <!-- CMS -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="500">
                            <img src="assets/images/pan-nsdl/icon5.svg" alt="CMS" class="w-28 h-28 ">
                            <span class="text-primary-500 text-center font-medium">CMS</span>
                        </div>

                        <!-- UPI QR Code -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="600">
                            <img src="assets/images/pan-nsdl/icon6.svg" alt="UPI QR Code" class="w-28 h-28 ">
                            <span class="text-primary-500 text-center font-medium">UPI QR Code</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Building Trust Across India Section -->
<section class="w-full py-16 bg-secondary-600" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
            Service Coverage
        </h2>
        
        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <!-- Stat 1 - Retail Partners -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-once="true">
                <p class="text-4xl md:text-5xl font-bold text-white mb-2" data-aos="zoom-in" data-aos-delay="250" data-aos-duration="500" data-aos-once="true">
                    <span id="retail-partners-count">700</span><span>+</span>
                </p>
                <p class="text-white text-sm md:text-base">Districts across India </p>
            </div>
            
            <!-- Stat 2 - Banking Partners -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600" data-aos-once="true">
                <p class="text-4xl md:text-5xl font-bold text-white mb-2" data-aos="zoom-in" data-aos-delay="350" data-aos-duration="500" data-aos-once="true">
                    <span id="banking-partners-count">5</span><span>Lakh +</span>
                </p>
                <p class="text-white text-sm md:text-base">Retail Points</p>
            </div>
            
            <!-- Stat 3 - Expert Team Members -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600" data-aos-once="true">
                <p class="text-4xl md:text-5xl font-bold text-white mb-2" data-aos="zoom-in" data-aos-delay="450" data-aos-duration="500" data-aos-once="true">
                    <span id="team-members-count">40</span><span>Cr+</span>
                </p>
                <p class="text-white text-sm md:text-base">Daily Transactions</p>
            </div>
            
            <!-- Stat 4 - Happy Customers -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600" data-aos-once="true">
                <p class="text-4xl md:text-5xl font-bold text-white mb-2" data-aos="zoom-in" data-aos-delay="550" data-aos-duration="500" data-aos-once="true">
                    <span id="customers-count">15</span><span>Lakh+</span>
                </p>
                <p class="text-white text-sm md:text-base">Monthly Customers</p>
            </div>
        </div>
    </div>
</section>
<script>
// Counter animation function for Indian number format
function animateCounter(elementId, start, end, duration) {
    const obj = document.getElementById(elementId);
    if (!obj) return;
    
    // Start with 0 for animating
    obj.textContent = '0';
    
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const currentValue = Math.floor(progress * end);
        
        // Update the counter text
        obj.textContent = currentValue;
        
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    
    window.requestAnimationFrame(step);
}

// Set up intersection observer for counter section
document.addEventListener('DOMContentLoaded', function() {
    const counters = [
        { id: 'retail-partners-count', value: 1 },  // 1 Lacs+
        { id: 'banking-partners-count', value: 20 }, // 20+
        { id: 'team-members-count', value: 150 },   // 150+
        { id: 'customers-count', value: 15 }         // 1 Cr+
    ];
    
    // Initialize all counters to 0
    counters.forEach(counter => {
        const element = document.getElementById(counter.id);
        if (element) {
            element.textContent = '0';
        }
    });
    
    // Create intersection observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // When section becomes visible
            if (entry.isIntersecting) {
                // Start all animations with a small delay between each
                counters.forEach((counter, index) => {
                    setTimeout(() => {
                        animateCounter(counter.id, 0, counter.value, 2000);
                    }, 250 + (index * 150));
                });
                
                // Only trigger once
                observer.disconnect();
            }
        });
    }, { threshold: 0.1 });
    
    // Observe the section itself
    const trustSection = document.querySelector('section[style*="background-color: #192a59;"]');
    if (trustSection) {
        observer.observe(trustSection);
    }
    
    // Fallback animation trigger if intersection observer doesn't work
    setTimeout(() => {
        counters.forEach((counter, index) => {
            const element = document.getElementById(counter.id);
            if (element && element.textContent === '0') {
                setTimeout(() => {
                    animateCounter(counter.id, 0, counter.value, 2000);
                }, 250 + (index * 150));
            }
        });
    }, 1000);
});
</script>




                <!-- FAQ Section -->
        <section class="py-10 max-w-3xl mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
            </div>

            <!-- FAQ Accordion -->
            <div class="space-y-4">
                <?php
$faqItems = [
    [
        'question' => 'What is UPI Cash @POS service?',
        'answer' => 'This service lets customers withdraw cash from merchant stores using UPI payments through POS terminals.',
        'isOpen' => true
    ],
    [
        'question' => 'What are the transaction limits?',
        'answer' => 'Daily withdrawal limit is ₹2000 per customer as per RBI guidelines.',
        'isOpen' => false
    ],
    [
        'question' => ' How do merchants receive settlement?',
        'answer' => 'Settlements happen automatically within 24-48 hours directly to your registered bank account.',
        'isOpen' => false
    ]
];
        foreach ($faqItems as $index => $item) :
            $isOpen = $item['isOpen'];
            $questionColor = $isOpen ? 'text-secondary-500' : 'text-primary-800';
            $iconColor = $isOpen ? 'text-secondary-500' : 'text-primary-800';
            $icon = $isOpen ? '−' : '+';
            $contentClass = $isOpen ? '' : 'hidden';
        ?>
                <!-- FAQ Item -->
                <div class="border-b border-gray-200 pb-4" id="faq-item-<?php echo $index; ?>">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-lg font-medium <?php echo $questionColor; ?>"><?php echo $item['question']; ?>
                        </h3>
                        <span class="<?php echo $iconColor; ?> text-2xl"><?php echo $icon; ?></span>
                    </button>
                    <div class="<?php echo $contentClass; ?> mt-3 text-gray-500 faq-content">
                        <p><?php echo $item['answer']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionButtons = document.querySelectorAll('.faq-toggle');

            accordionButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const isHidden = content.classList.contains('hidden');
                    const plusMinus = button.querySelector('span');
                    const question = button.querySelector('h3');

                    // Close all
                    document.querySelectorAll('.faq-content').forEach(div => {
                        div.classList.add('hidden');
                    });
                    document.querySelectorAll('.faq-toggle span').forEach(span => {
                        span.textContent = '+';
                        span.classList.remove('text-secondary-500');
                        span.classList.add('text-primary-800');
                    });
                    document.querySelectorAll('.faq-toggle h3').forEach(h3 => {
                        h3.classList.remove('text-secondary-500');
                        h3.classList.add('text-primary-800');
                    });

                    // Open current if it was closed
                    if (isHidden) {
                        content.classList.remove('hidden');
                        plusMinus.textContent = '−';
                        plusMinus.classList.remove('text-primary-800');
                        plusMinus.classList.add('text-secondary-500');
                        question.classList.remove('text-primary-800');
                        question.classList.add('text-secondary-500');
                    }
                });
            });
        });
        </script>



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
                            Join Sec2Pay Today
                        </h1>

                        <p class="text-base sm:text-lg text-white relative z-10" data-aos="fade-up"
                            data-aos-delay="300">
                            Start for free — upgrade anytime.
                        </p>

                        <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
                            <p class="text-white mb-4 sm:mb-6">
                                <a href="contact-us.php" class="underline hover:text-white transition">
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


    </main>

    <!-- Main Header Banner -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const logosSlide = document.querySelector(".logos-slide");
        const logosContainer = document.querySelector(".logos-container");

        // Only proceed if both elements exist
        if (!logosSlide || !logosContainer) {
            console.log("Logos slider elements not found");
            return;
        }

        // Function to ensure enough logos
        const ensureEnoughLogos = () => {
            const containerWidth = logosContainer.offsetWidth;
            const slideWidth = logosSlide.offsetWidth;

            // If the slide is not at least twice as wide as the container, clone more logos
            if (slideWidth < containerWidth * 2) {
                const originalSet = logosSlide.innerHTML;
                logosSlide.innerHTML = originalSet + originalSet;

                // Recursive check if we need even more copies
                ensureEnoughLogos();
            }
        };

        // Run after images have loaded to get accurate widths
        window.addEventListener("load", ensureEnoughLogos);

        // Also adjust if window is resized
        window.addEventListener("resize", ensureEnoughLogos);
    });
    </script>

    <?php include_once('includes/footer.php'); ?>

    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>