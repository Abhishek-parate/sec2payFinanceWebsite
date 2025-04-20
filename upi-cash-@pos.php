<?php include_once('includes/header.php'); ?>
<!-- hero section -->

<section class=" bg-white">

    <div class="max-w-7xl mx-auto py-12  ">
        <div class="rounded-xl overflow-hidden  ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- Left Content - Services List -->
                <div class="p-8 md:p-12">
                    <p class="font-semi-bolder text-primary-600 font-bold">UPI Cash @POS</p>
                    <h1 class="text-4xl font-bold text-secondary-500 ">Transform Your POS</h1>
                    <h1 class="text-4xl font-bold text-secondary-500 mb-4">into a Cash Point</h1>
                    <p class="text-gray-500 mb-8">Smart copy that connects with target audience in tier 2-3 cities
                    Let your customers withdraw cash while they shop. Add UPI Cash withdrawal service to your POS terminal.</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                        Start Now

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
                        <img src="assets/images/upi-cash/.png" alt="Dashboard" class=" h-auto" />
                        <div class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- hero section ends -->

<!-- Why Choose Sec2Pay UPI Cash @POS Platform-->
<section class="py-12 mb-12 mt-6 bg-primary-100">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl text-center md:text-4xl font-bold  text-primary-700 mb-8">Why Choose Sec2Pay UPI Cash @POS Platform</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 relative" style="top: calc(60% - 12rem);">
            <!-- Feature 1 -->
            <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-300">
            <h3 class="text-xl font-semibold text-secondary-600 mb-3">Cash Point</h3>
                <p class="text-gray-600">
                Turn your store into a neighborhood cash point. Let customers withdraw cash during regular purchases through UPI.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-300">
            <h3 class="text-xl font-semibold text-secondary-600 mb-3">Simple Process </h3>
                <p class="text-gray-600">
                Quick cash withdrawals through existing POS terminals. Customers pay via UPI and receive cash instantly.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-300">
            <h3 class="text-xl font-semibold text-secondary-600 mb-3">Additional Income</h3>
                <p class="text-gray-600">
                Earn commission on each withdrawal transaction while providing an essential service to your community.
                </p>
            </div>
        </div>  
    </div>
</section>


<!-- FAQ Section -->
<section class="py-16 max-w-3xl mx-auto px-4">
    <!-- Section Title -->
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-secondary-600 mb-2">FAQ</h2>
        
    </div>

    <!-- FAQ Accordion -->
    <div class="space-y-4">
        <?php
        $faqItems = [
            [
                'question' => 'What is Aadhar Pay?',
                'answer' => 'Aadhar Pay lets merchants accept payments from customers using their Aadhar number and fingerprint verification.',
                'isOpen' => true
            ],
            [
                'question' => 'What do I need to start?',
                'answer' => 'You can offer AEPS services once you\'ve completed the registration process and have the necessary equipment set up. This typically includes having a biometric device and completing the verification process.',
                'isOpen' => false
            ],
            [
                'question' => 'How secure are the transactions?',
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
        <div class="bg-gradient-to-br from-secondary-600 to-secondary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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