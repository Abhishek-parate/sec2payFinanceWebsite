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

<section class=" bg-white">

    <div class="max-w-7xl mx-auto py-12  ">
        <div class="rounded-xl overflow-hidden  ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- Left Content - Services List -->
                <div class="p-8 md:p-12 mt-12">
                    <p class="font-semi-bolder text-primary-600 font-bold">Indo- Nepal DMT</p>
                    <h1 class="text-4xl font-bold text-secondary-500 ">Send Money to Nepal,</h1>
                    <h1 class="text-4xl font-bold text-secondary-500 mb-4">Simply & Securely</h1>
                    <p class="text-gray-500 mb-8">Register for Indo-Nepal DMT services and help your customers transfer money to their loved ones in Nepal</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                        Book A Demo

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
                        <img src="assets/images/indo-nepal-dmt/indo-hero.png" alt="Dashboard" class=" h-auto" />
                        <div class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- hero section ends -->

<!-- Features & Functions Section -->
<section class="bg-primary-100 px-4 md:px-24 mb-6 py-12">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-primary-700 mb-6"> Why Choose Sec2Pay <span class="text-secondary-500">Indo-Nepal DMT Platform</span></h2>
        
        <!-- Updated grid with proper centering -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature Card 1 -->
                <div class="p-6 text-left">
                <h3 class="text-secondary-600 font-semibold text-xl mb-4">Real-Time Transfers</h3>
                    <p class="text-gray-600 text-sm">
                    Send money instantly to bank accounts across Nepal through our trusted banking network.</p>
            </div>
            
            <!-- Feature Card 2 -->
                <div class="p-6 text-left">
                <h3 class="text-secondary-600 font-semibold text-xl mb-4">Multiple Bank Support </h3>
                    <p class="text-gray-600 text-sm">
                    Direct transfers to major Nepali banks including Nepal Bank, NIC Asia, Global IME Bank.</p>
            </div>
            
            <!-- Feature Card 3 -->
                <div class="p-6 text-left">
                <h3 class="text-secondary-600 font-semibold text-xl mb-4">Simple Process</h3>
                    <p class="text-gray-600 text-sm">
                    Complete transfers in under 2 minutes with just basic sender and recipient details.</p>
            </div>
            <!-- Feature Card 4 -->
                <div class="p-6 text-left">
                <h3 class="text-secondary-600 font-semibold text-xl mb-4">Simple Process</h3>
                    <p class="text-gray-600 text-sm">
                    Best-in-market exchange rates and minimal transfer fees.</p>
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
            <img src="assets/images/indo-nepal-dmt/smart-small.png" alt="Life Insurance">
            </div>
            
            <!-- Right side with content -->
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Benefits for Partners</h2>
                
                <ul class="space-y-5 mb-8">
                    <?php
                    $lifePlans = [
                        'Build trust with Nepal-based customers',
                        'Fixed commission per transaction',
                        'No setup or maintenance costs',
                        'Simple mobile/web interface',
                        'Real-time transaction status',
                        '24x7 support system',
                    ];
                    
                    foreach ($lifePlans as $plan) :
                    ?>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center">
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
        </div>
    </div>
</section>


<!-- How It Works Section -->
<section class="bg-secondary-600 py-16">
  <div class="container mx-auto px-6">
    <!-- Section Title -->
    <h2 class="text-4xl font-bold text-white mb-16">How It Works:</h2>
    
    <!-- Steps Timeline -->
    <div class="relative">
      <!-- Timeline Line -->
      <div class="hidden md:block absolute top-6 left-0 right-0 h-0.5 border-t-2 border-dashed border-white z-10"></div>
      
      <!-- Steps Container -->
      <div class="flex flex-col md:flex-row md:justify-between items-start relative z-20">
        <!-- Step 1 -->
        <div class="flex flex-col items-start mb-8 md:mb-0 md:w-1/5 ">
          <div class="bg-navy-800 border-2 border-white-500 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mb-4 bg-secondary-600">
            1
          </div>
          <p class="text-white font-medium">Sender Authentication</p>
          <p class="text-white/80">Verify sender through</br>
          valid ID proof</p>
        </div>
        
        <!-- Step 2 -->
        <div class="flex flex-col items-start mb-8 md:mb-0 md:w-1/5">
        <div class="bg-navy-800 border-2 border-white-500 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mb-4 bg-secondary-600">
            2
          </div>
          <p class="text-white font-medium">Recipient Details</p>
          <p class="text-white/80">Enter recipient's bank</br>
          account information</p>
        </div>
        
        <!-- Step 3 -->
        <div class="flex flex-col items-start mb-8 md:mb-0 md:w-1/5">
        <div class="bg-navy-800 border-2 border-white-500 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mb-4 bg-secondary-600">
            3
          </div>
          <p class="text-white font-medium">Amount Selection</p>
          <p class="text-white/80">Choose amount in INR,</br>
          see NPR conversion</p>
        </div>
        
        <!-- Step 4 -->
        <div class="flex flex-col items-start mb-8 md:mb-0 md:w-1/5">
        <div class="bg-navy-800 border-2 border-white-500 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mb-4 bg-secondary-600">
            4
          </div>
          <p class="text-white font-medium">Transfer Confirmation</p>
          <p class="text-white/80">Review and confirm</br>
          transaction details</p>
        </div>
        
        <!-- Step 5 -->
        <div class="flex flex-col items-start md:w-1/5 bg-secondary-600">
        <div class="bg-navy-800 border-2 border-white-500 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mb-4 bg-secondary-600">
            5
          </div>
          <p class="text-white font-medium">Instant Processing</p>
          <p class="text-white/80">Money transferred in </br>
          real-time to recipient</p>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- Health Insurance Solutions Section -->
<section class="w-full py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Left side with content -->
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 mt-6">Support for Partners</h2>
                
                <ul class="space-y-5 mb-8">
                    <?php
                    $healthPlans = [
                        'Dedicated relationship manager',
                        'Training on compliance requirements',
                        'Marketing support materials',
                        'Regular platform updates',
                        'Multi-language support desk',
                        '24x7 support system',
                    ];
                    
                    foreach ($healthPlans as $plan) :
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
            
            <!-- Right side with illustration -->
            <div class="w-full md:w-1/2">
            <img src="assets/images/indo-nepal-dmt/simple-easy.png" alt="Life Insurance">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Our Other Services Section -->
<section class="w-full bg-primary-100 py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row items-start">
            <!-- Section Title -->
            <div class="text-primary-500 mb-10 md:mb-0 md:w-1/4 md:mr-8 md:pt-2">
                <h2 class="text-3xl font-bold leading-tight uppercase">
                    OUR OTHER SERVICES
                </h2>
            </div>
            
            <!-- Services Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-6 gap-y-8 md:w-3/4 w-full">
                <!-- AEPS -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-500/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon1.svg" alt="AEPS" class="w-16 h-16">
                    </div>
                    <span class="text-primary-500 text-center font-medium">AEPS</span>
                </div>
                
                <!-- DMT -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-500/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon2.svg" alt="DMT" class="w-16 h-16">
                    </div>
                    <span class="text-primary-500 text-center font-medium">DMT</span>
                </div>
                
                <!-- Micro ATM -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-500/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon3.svg" alt="Micro ATM" class="w-16 h-16">
                    </div>
                    <span class="text-primary-500 text-center font-medium">Micro ATM</span>
                </div>
                
                <!-- mPOS -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-500/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon4.svg" alt="mPOS" class="w-16 h-16">
                    </div>
                    <span class="text-primary-500 text-center font-medium">mPOS</span>
                </div>
                
                <!-- CMS -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-500/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon5.svg" alt="CMS" class="w-16 h-16">
                    </div>
                    <span class="text-primary-500 text-center font-medium">CMS</span>
                </div>
                
                <!-- UPI QR Code -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-28 rounded-2xl bg-primary-500/70 flex items-center justify-center mb-4">
                        <img src="assets/images/pan-nsdl/icon6.svg" alt="UPI QR Code" class="w-16 h-16">
                    </div>
                    <span class="text-primary-500 text-center font-medium">UPI QR Code</span>
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
                'question' => 'What are the transfer limits for Indo-Nepal remittance?',
                'answer' => 'Daily limit of INR 50,000 per transaction with monthly cap of INR 2,00,000 per sender.',
                'isOpen' => true
            ],
            [
                'question' => 'Which documents are needed for sending money?',
                'answer' => 'You can offer AEPS services once you\'ve completed the registration process and have the necessary equipment set up. This typically includes having a biometric device and completing the verification process.',
                'isOpen' => false
            ],
            [
                'question' => 'How long does the transfer take?',
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



 </main>

    <!-- Main Header Banner -->


    <?php include_once('includes/footer.php'); ?>

    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>