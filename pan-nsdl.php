<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sec2Pay - Banking Platform Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</head>

<body class="bg-white font-inter">

    <?php include_once('includes/header.php'); ?>


    <main>

<!-- hero section -->

<section class=" bg-white">

    <div class="max-w-7xl mx-auto py-12  ">
        <div class="rounded-xl overflow-hidden  ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- Left Content - Services List -->
                <div class="p-8 md:p-12">
                    <p class="font-semi-bolder text-primary-600 font-bold">PAN NSDL</p>
                    <h1 class="text-4xl font-bold text-secondary-600 ">PAN Card Application</h1>
                    <h1 class="text-4xl font-bold text-secondary-600 mb-4">Made Simple</h1>
                    <p class="text-gray-500 mb-8">Get your PAN card through NSDL's authorized service center network. Start your application today.</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                        Apply Now
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
                        <img src="assets/images/pan-nsdl/banner.png" alt="Dashboard" class=" h-auto" />
                        <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- hero section ends -->


<!-- Life Insurance Solutions Section -->
<section class="w-full py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8">
               <!-- Right side with content -->
               <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Key Features</h2>
                
                <ul class="space-y-5 mb-8">
                    <?php
                    $lifePlans = [
                        'Digital PAN Card Application',
                        'Quick Processing Time',
                        'Secure Documentation',
                        'Real-time Status Updates'
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
                        <span class="ml-3 text-gray-700"><?php echo $plan; ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Left side with illustration -->
            <div class="w-full md:w-1/2">
            <img src="assets/images/pan-nsdl/features.png" alt="Life Insurance">
            </div>
        </div>
    </div>
</section>


<!-- Banking Services Section -->
<section class=" text-white py-20 min-h-[650px] flex items-center">
    <div class="container mx-auto px-4 md:px-6 bg-primary-600 py-12 rounded-lg">
        <h1 class="text-4xl md:text-5xl font-bold mb-10 md:pl-24" data-aos="fade-up" data-aos-duration="800">Built for the</h1>

        <!-- Banking Services Tabs -->
        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <!-- Tab Buttons -->
            <div class="flex flex-wrap mb-8 gap-2 md:gap-3 md:pl-24">
                <button
                    class="tab-btn px-5 py-3 bg-secondary-600 text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none active"
                    data-tab="aeps">
                    <span>Fast Processing</span>
                </button>
                <button
                    class="tab-btn px-5 py-3 bg-transparent text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
                    data-tab="aadhaar-pay">
                    <span>Secure Documentation</span>
                </button>
                <button
                    class="tab-btn px-5 py-3 bg-transparent text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
                    data-tab="micro-atm">
                    <span>Expert Support</span>
                </button>
                <button
                    class="tab-btn px-5 py-3 bg-transparent text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
                    data-tab="money-transfer">
                    <span>Service Options</span>
                </button>
                <button
                    class="tab-btn px-5 py-3 bg-transparent text-white border border-white/30 rounded-full cursor-pointer text-sm font-medium transition-all duration-300 outline-none"
                    data-tab="money-transfer">
                    <span>Agent Benefits</span>
                </button>
            </div>

            <!-- Tab Content -->
            <div class="relative min-h-[350px] overflow-hidden  md:pl-24">
                <!-- AePS Tab Content -->
                <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-full md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-semibold mb-8">Key Features</h3>
                            <ul class="space-y-5 mb-8">
                    <?php
                    $lifePlans = [
                        'Digital submission process',
                        'Quick verification system',
                        'Status tracking available'
                    ];
                    
                    foreach ($lifePlans as $plan) :
                    ?>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center">
                            <svg width="19" height="25" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_375_2234)">
<path d="M9.5 4C14.3731 4 18 7.62693 18 12.5C18 17.4003 14.4003 21 9.5 21C4.5997 21 1 17.4003 1 12.5C1 7.62693 4.62693 4 9.5 4Z" fill="#24223E" fill-opacity="0.1" stroke="#EDF0F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.57812 14.3943C7.20478 15.3973 7.84749 16.3676 7.84749 16.3676C7.84749 16.3676 8.77121 14.58 10.4029 12.5476C12.1604 10.3584 13.3887 9.47705 13.3887 9.47705" stroke="#EDF0F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_375_2234">
<rect width="19" height="19" fill="white" transform="translate(0 3)"/>
</clipPath>
</defs>
</svg>

                            
                        </div>
                        <span class="ml-3 text-white"><?php echo $plan; ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
                        </div>
                        <div class="w-full md:w-1/2 flex justify-center">
                            <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                                <img src="assets/images/pan-nsdl/key-features.png" alt="AePS Banking"
                                    class="max-w-full h-auto max-h-[400px]">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Aadhaar Pay Tab Content -->
                <div class="tab-pane hidden opacity-0 transition-opacity duration-300" id="aadhaar-pay">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-full md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-semibold mb-4">Aadhaar Pay</h3>
                            <p class="text-white/80 mb-8 max-w-md">Easy payments using Aadhaar biometric authentication.
                            </p>

                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Biometric verification
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Secure transactions
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    No card required
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Instant confirmation
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/2 flex justify-center">
                            <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                                <img src="assets/images/banking/aps.png" alt="Aadhaar Pay"
                                    class="max-w-full h-auto max-h-[400px]">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Micro ATM Tab Content -->
                <div class="tab-pane hidden opacity-0 transition-opacity duration-300" id="micro-atm">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-full md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-semibold mb-4">Micro ATM Services</h3>
                            <p class="text-white/80 mb-8 max-w-md">Banking services at your fingertips with our Micro
                                ATM.</p>

                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Cash withdrawals
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Balance inquiries
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Mini statements
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Fund transfers
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/2 flex justify-center">
                            <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                                <img src="assets/images/banking/aps.png" alt="Micro ATM Services"
                                    class="max-w-full h-auto max-h-[400px]">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Money Transfer Tab Content -->
                <div class="tab-pane hidden opacity-0 transition-opacity duration-300" id="money-transfer">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-full md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-semibold mb-4">Domestic Money Transfer</h3>
                            <p class="text-white/80 mb-8 max-w-md">Send money anywhere in the country quickly and
                                securely.</p>

                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Instant transfers
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Multiple bank support
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Low transaction fees
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Transaction tracking
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/2 flex justify-center">
                            <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                                <img src="assets/images/banking/aps.png" alt="Domestic Money Transfer"
                                    class="max-w-full h-auto max-h-[400px]">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Banking Tab Content -->
                <div class="tab-pane hidden opacity-0 transition-opacity duration-300" id="business-banking">
                    <div class="flex flex-col md:flex-row items-center ">
                        <div class="w-full md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-semibold mb-4">Business Banking</h3>
                            <p class="text-white/80 mb-8 max-w-md">Comprehensive banking solutions for your business
                                needs.</p>

                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Business accounts
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Payment solutions
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Financial reporting
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 bg-white rounded-full mr-3 relative">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-secondary-500 rounded-full"></span>
                                    </span>
                                    Business loans
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/2 flex justify-center">
                            <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                                <img src="assets/images/banking/aps.png" alt="Business Banking"
                                    class="max-w-full h-auto max-h-[400px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<!-- Our Other Services Section -->
<section class="w-full bg-primary-500 py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row items-start">
            <!-- Section Title -->
            <div class="text-white mb-10 md:mb-0 md:w-1/4 md:mr-8 md:pt-2">
                <h2 class="text-3xl font-bold leading-tight uppercase">
                    OUR OTHER SERVICES
                </h2>
            </div>
            
            <!-- Services Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-6 gap-y-8 md:w-3/4 w-full">
                <!-- AEPS -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon1.svg" alt="AEPS" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">AEPS</span>
                </div>
                
                <!-- DMT -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon2.svg" alt="DMT" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">DMT</span>
                </div>
                
                <!-- Micro ATM -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon3.svg" alt="Micro ATM" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">Micro ATM</span>
                </div>
                
                <!-- mPOS -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon4.svg" alt="mPOS" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">mPOS</span>
                </div>
                
                <!-- CMS -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon5.svg" alt="CMS" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">CMS</span>
                </div>
                
                <!-- UPI QR Code -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon6.svg" alt="UPI QR Code" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">UPI QR Code</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="py-16 max-w-3xl mx-auto px-4">
    <!-- Section Title -->
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
    </div>

    <!-- FAQ Accordion -->
    <div class="space-y-4">
        <?php
        $faqItems = [
            [
                'question' => 'What documents are needed to apply for a PAN card?',
                'answer' => 'Applicants need proof of identity (Aadhaar/Passport/Driving License), proof of address, and a recent photograph. Our platform guides agents through required documentation.',
                'isOpen' => true
            ],
            [
                'question' => ' How long does PAN card processing take?',
                'answer' => 'You can offer AEPS services once you\'ve completed the registration process and have the necessary equipment set up. This typically includes having a biometric device and completing the verification process.',
                'isOpen' => false
            ],
            [
                'question' => 'Can existing PAN cards be modified?',
                'answer' => 'To start offering AEPS services, you\'ll need a smartphone or computer, a biometric device for fingerprint authentication, a reliable internet connection, and valid documentation for registration.',
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
                <h3 class="text-lg font-medium <?php echo $questionColor; ?>"><?php echo $item['question']; ?></h3>
                <span class="<?php echo $iconColor; ?> text-2xl"><?php echo $icon; ?></span>
            </button>
            <div class="<?php echo $contentClass; ?> mt-3 text-gray-500 faq-content">
                <p><?php echo $item['answer']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
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