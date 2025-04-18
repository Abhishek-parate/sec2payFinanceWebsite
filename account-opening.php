<?php include_once('includes/header.php'); ?>

<!-- hero section -->

<section class=" bg-white">

    <div class="max-w-7xl mx-auto py-12  ">
        <div class="rounded-xl overflow-hidden  ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- Left Content - Services List -->
                <div class="p-8 md:p-12">
                    <p class="font-semi-bolder text-primary-600 font-bold">Account Opening</p>
                    <h1 class="text-4xl font-bold text-secondary-500 ">Turn Your Store into</h1>
                    <h1 class="text-4xl font-bold text-secondary-500 mb-4">a Digital Bank Branch</h1>
                    <p class="text-gray-500 mb-8">Help your customers open bank accounts instantly and earn additional income through our Account Opening Platform.</p>

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
                        <img src="assets/images/account-opening/account-hero.png" alt="Dashboard" class=" h-auto" />
                        <div class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- hero section ends -->

<!-- Why Choose Sec2Pay Account Opening Platform Service -->
<section class="py-12 mb-12 mt-6 bg-primary-700">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-primary-100 text-center mb-1">Why Choose Sec2Pay Account Opening Platform</h2>
        <p class="text-primary-100 text-mid font-semibold text-center mb-10">
        Digital Account Opening Made Simple
                </p>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Feature 1 - Instant Account Creation -->
            <div class="p-4">
                <h3 class="text-xl font-semibold text-primary-100 mb-3"> Instant Account Creation</h3>
                <p class="text-gray-500">
                Open bank accounts for your customers in minutes
                </p>
            </div>

            <!-- Feature 2 - Digital KYC Process -->
            <div class="p-4">
                <h3 class="text-xl font-semibold text-primary-100 mb-3">Digital KYC Process</h3>
                <p class="text-gray-500">
                Complete verification through video KYC
                </p>
            </div>

            <!-- Feature 3 - Multiple Bank Options -->
            <div class=" p-4">
                <h3 class="text-xl font-semibold text-primary-100 mb-3"> Multiple Bank Options</h3>
                <p class="text-gray-500">
                Partner with leading banks in India
                </p>
            </div>

            <!-- Feature 4 - Zero-Balance Accounts -->
            <div class=" p-4">
                <h3 class="text-xl font-semibold text-primary-100 mb-3">Zero-Balance Accounts </h3>
                <p class="text-gray-500">
                    Offer accounts with no minimum balance requirement
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Life Insurance Solutions Section -->
<section class="w-full py-12">
    <div class="max-w-6xl mx-auto px-4">

        <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Left side with illustration -->
            <div class="w-full md:w-1/2">
                <img src="assets/images/account-opening/benefit-1.png" alt="Life Insurance">
            </div>

            <!-- Right side with content -->
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold text-secondary-600  mt-6">Benefits for Partners</h2>
                <p class="text-mid font-semibold text-primary-900 mb-6">Grow Your Banking Business</p>

                <ul class="space-y-5 mb-8">
                    <?php
                    $benefits = [
                        'Commission per account opened',
                        'Quick digital onboarding process',
                        'Real-time status tracking',
                        'Dedicated support team',
                    ];
                    
                    foreach ($benefits as $benefit) :
                    ?>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
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
    <div class="max-w-6xl mx-auto px-4 py-6">

        <div class="flex flex-col md:flex-row items-center gap-8">
            

            <!-- Right side with content -->
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold text-secondary-600  mt-6">Features</h2>
                <p class="text-mid font-semibold text-primary-900 mb-6">Complete Account Opening Solution</p>

                <ul class="space-y-5 mb-8">
                    <?php
                    $benefits = [
                        'Video KYC enabled',
                        'Digital document verification',
                        'Multiple bank partnerships',
                        'Real-time account status',
                        'Instant debit card issuance',
                        'Mobile banking activation',
                    ];
                    
                    foreach ($benefits as $benefit) :
                    ?>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
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

            <!-- Left side with illustration -->
            <div class="w-full md:w-1/2">
                <img src="assets/images/account-opening/features.png" alt="Life Insurance">
            </div>
        </div>
    </div>
</section>



<!-- Building Trust Across India Section -->
<section class="w-full py-16 bg-primary-700">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Section Title -->
    <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-12">Building Trust Across India</h2>
    
    <!-- Stats Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
      <!-- Stat 1 -->
      <div class="flex flex-col items-center">
        <p class="text-4xl md:text-5xl font-bold text-white mb-2">l Lacs+</p>
        <p class="text-white text-sm md:text-base">Retail Partners</p>
      </div>
      
      <!-- Stat 2 -->
      <div class="flex flex-col items-center">
        <p class="text-4xl md:text-5xl font-bold text-white mb-2">20 +</p>
        <p class="text-white text-sm md:text-base">Banking Partners</p>
      </div>
      
      <!-- Stat 3 -->
      <div class="flex flex-col items-center">
        <p class="text-4xl md:text-5xl font-bold text-white mb-2">150+</p>
        <p class="text-white text-sm md:text-base">Expert Team Members</p>
      </div>
      
      <!-- Stat 4 -->
      <div class="flex flex-col items-center">
        <p class="text-4xl md:text-5xl font-bold text-white mb-2">1 Cr+</p>
        <p class="text-white text-sm md:text-base">Happy Customers</p>
      </div>
    </div>
  </div>
</section>


<!-- Our Other Services Section -->
<section class="w-full bg-secondary-500 py-16 px-4">
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
                    <div class="w-28 h-28 rounded-2xl bg-secondary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-uti/icon1.svg" alt="AEPS" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">AEPS</span>
                </div>
                
                <!-- DMT -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-secondary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-uti/icon2.svg" alt="DMT" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">DMT</span>
                </div>
                
                <!-- Micro ATM -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-secondary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-uti/icon3.svg" alt="Micro ATM" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">Micro ATM</span>
                </div>
                
                <!-- mPOS -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-secondary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-uti/icon4.svg" alt="mPOS" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">mPOS</span>
                </div>
                
                <!-- CMS -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-secondary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-uti/icon5.svg" alt="CMS" class="w-16 h-16">
                    </div>
                    <span class="text-white text-center font-medium">CMS</span>
                </div>
                
                <!-- UPI QR Code -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-secondary-600/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-uti/icon6.svg" alt="UPI QR Code" class="w-16 h-16">
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
                'question' => 'What documents are needed for account opening?',
                'answer' => 'Valid ID proof, address proof, and PAN card are required. Our platform guides customers through the documentation process.',
                'isOpen' => true
            ],
            [
                'question' => 'How long does it take to open an account?',
                'answer' => 'You can offer AEPS services once you\'ve completed the registration process and have the necessary equipment set up. This typically includes having a biometric device and completing the verification process.',
                'isOpen' => false
            ],
            [
                'question' => 'Is there any investment required to start this service?',
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