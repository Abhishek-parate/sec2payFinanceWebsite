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
                    <p class="font-semi-bolder text-primary-600 font-bold">Health Insurance</p>
                    <h1 class="text-4xl font-bold text-secondary-600 ">Secure Your Customers' Future</h1>
                    <h1 class="text-4xl font-bold text-secondary-600 mb-4">With Digital Health Insurance Solutions</h1>
                    <p class="text-gray-500 mb-8">Transform your business into a health insurance hub. Our platform lets you offer comprehensive health coverage solutions to your customers.</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                        Start Your Insurance Journey

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
                        <img src="assets/images/health-insurance/banner.png" alt="Dashboard" class=" h-auto" />
                        <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- hero section ends -->

<!-- E-Governance Platform Services Section -->
<section class="bg-secondary-100 py-10 px-4 md:px-24">
    <div class="container mx-auto px-6 ">
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center">Key Platform Features</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- PAN Card Services -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8">
                <!-- Icon and Title - Vertical Alignment -->
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-red-500">Digital Policy Issuance</h2>
                </div>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        <li>Real-time policy generation</li>
                        <li>Paperless documentation</li>
                        <li>Instant customer verification</li>
                    </ul>            </div>
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8">
                <!-- Icon and Title - Vertical Alignment -->
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-red-500">Multi-insurer Integration</h2>
                </div>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        <li>Access multiple insurance providers</li>
                        <li>Compare policy features</li>
                        <li>Customized coverage options</li>
                    </ul>            </div>
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-8">
                <!-- Icon and Title - Vertical Alignment -->
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-red-500">Claim Processing Support</h2>
                </div>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        <li>Digital claim filing</li>
                        <li>Status tracking</li>
                        <li>Documentation assistance</li>
                    </ul>            </div>
            
        </div>
    </div>
</section>


<!-- Features & Functions Section -->
<section class="bg-white px-4 md:px-24 my-12">
    <div class="container mx-auto px-6 text-center">    
        
    <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center">Key Platform Features</h2>
    
        <!-- Updated grid with proper centering -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Feature Card 1 -->
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="assets/images/health-insurance/partner.png"
                    alt="Mobile Recharge"
                    class="w-full object-contain rounded-t-lg">
                <div class="p-6 text-left">
                    <h3 class="text-primary-600 font-semibold text-xl mb-4">Partner Benefits</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        <li>Commission on every policy sold</li>
                        <li>No infrastructure investment needed</li>
                        <li>Complete training support</li>
                        <li>Digital policy management tools</li>
                        <li>Multiple insurance products access</li>
                    </ul>
                </div>
            </div>
            
            <!-- Feature Card 2 -->
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="assets/images/health-insurance/business.png"
                    alt="DTH Recharge"
                    class="w-full object-contain rounded-t-lg">
                <div class="p-6 text-left">
                    <h3 class="text-primary-600 font-semibold text-xl mb-4">Business Growth Metrics</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        <li>50,000+ Active Insurance Partners</li>
                        <li>₹10Cr+ Premium Processed Monthly</li>
                        <li>98% Claims Settlement Rate</li>
                        <li>Pan-India Coverage</li>
                    </ul>
                </div>
            </div>
            
            <!-- Feature Card 3 -->
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="assets/images/health-insurance/success.png"
                    alt="Data Card Recharge"
                    class="w-full object-contain rounded-t-lg">
                <div class="p-6 text-left">
                    <h3 class="text-primary-600 font-semibold text-xl mb-4">Partner Success Program</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        <li>Comprehensive product training</li>
                        <li>Marketing support materials</li>
                        <li>Dedicated relationship manager</li>
                        <li>Regular performance analysis</li>
                    </ul>
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
                'question' => 'What documentation is needed to become an
insurance partner?',
                'answer' => 'Required documents include PAN card, Aadhar card, bank account details, and address proof. Our team guides you through the registration process.',
                'isOpen' => true
            ],
            [
                'question' => 'How long does partner onboarding take?',
                'answer' => 'You can offer AEPS services once you\'ve completed the registration process and have the necessary equipment set up. This typically includes having a biometric device and completing the verification process.',
                'isOpen' => false
            ],
            [
                'question' => 'What is the commission structure?',
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
        <div class="bg-gradient-to-br from-secondary-600 to-secondary-500 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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