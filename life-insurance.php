<?php include_once('includes/header.php'); ?>

<!-- hero section -->

<section class=" bg-white">

    <div class="max-w-7xl mx-auto py-12  ">
        <div class="rounded-xl overflow-hidden  ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- Left Content - Services List -->
                <div class="p-8 md:p-12 mt-16">
                    <p class="font-semi-bolder text-primary-600 font-bold">life insurance</p>
                    <h1 class="text-4xl font-bold text-secondary-600 ">Life Insurance Platform</h1>
                    <h1 class="text-4xl font-bold text-secondary-600 mb-4">Services</h1>
                    <p class="text-gray-500 mb-8">Secure your customers' future with our comprehensive Life Insurance platform</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                        Book A Demo!
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
                        <img src="assets/images/life-insurance/banner.png" alt="Dashboard" class=" h-auto" />
                        <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- hero section ends -->

<!-- Support Promise Banner -->
<section>
  <div class="w-full bg-primary-600 py-12">
    <div
      class="max-w-7xl mx-auto flex flex-row items-center justify-between text-white px-4"
    >
      <div class="font-medium text-sm md:text-base whitespace-nowrap">
      Why choose Sec2Pay</be> Life Insurance Platform
      </div>

      <div class="hidden md:flex items-center justify-end space-x-6 text-sm">
        <div class="flex items-center">
          <span class="whitespace-nowrap">Policy Comparison</span>
        </div>
        <div class="text-white/50">|</div>
        <div class="flex items-center">
          <span class="whitespace-nowrap">Quick Premium Calculation</span>
        </div>
        <div class="text-white/50">|</div>
        <div class="flex items-center">
          <span class="whitespace-nowrap">Real-time Status Updates</span>
        </div>
        <div class="text-white/50">|</div>
        <div class="flex items-center">
          <span class="whitespace-nowrap"> 24/7 Technical assistance</span>
        </div>
      </div>

      <!-- Mobile version - scrollable -->
      <div
        class="md:hidden flex items-center overflow-x-auto whitespace-nowrap space-x-4 text-sm scrollbar-hide"
      >
        <span>Training for new agents</span>
        <span class="text-white/50">|</span>
        <span>Regular commission payments</span>
        <span class="text-white/50">|</span>
        <span>Dedicated relationship manager</span>
        <span class="text-white/50">|</span>
        <span>24/7 Technical assistance</span>
      </div>
    </div>
  </div>
</section>


<!-- Banking Services Section --> 
<section class="min-h-[600px] py-12 flex items-center">
    <div class="container mx-auto px-4 md:px-6">
        <!-- Banking Services Tabs -->
        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <!-- Tab Content -->
            <div class="relative min-h-[350px] overflow-hidden md:pl-24">
                <!-- AePS Tab Content -->
                <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-full md:w-1/2 flex justify-center">
                            <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                                <img src="assets/images/life-insurance/service.png" alt="AePS Banking"
                                    class="max-w-full h-auto max-h-[400px]">
                            </div>
                        </div>
                        <div class="w-full md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-semibold mb-8">Services</h3>
                            <ul class="space-y-5 mb-4">
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
                                    <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none"/>
                                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="ml-3"><?php echo $plan; ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <div>
                                <a href="#" class="inline-block bg-primary-500 hover:bg-primary-600 text-white font-medium py-3 px-8 rounded-md transition duration-300">Explore Credit Solutions</a>
                            </div>
                        </div>
                    </div>
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
                'question' => 'What is a Cash Management System?',
                'answer' => 'A: CMS is a digital platform that helps businesses manage their financial operations, including collections, payments, and reconciliation, through a single interface.',
                'isOpen' => true
            ],
            [
                'question' => ' How secure is the CMS platform?',
                'answer' => 'You can offer AEPS services once you\'ve completed the registration process and have the necessary equipment set up. This typically includes having a biometric device and completing the verification process.',
                'isOpen' => false
            ],
            [
                'question' => 'Can I integrate CMS with my existing business software?',
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



<?php include_once('includes/footer.php'); ?>