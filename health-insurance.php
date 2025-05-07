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
<section class="bg-white relative overflow-hidden" data-aos="fade" data-aos-duration="1000" data-aos-once="true">
  <!-- Left circular gradient - Positioned behind all content with negative z-index -->
  <div class="absolute top-[10%] -left-[40%] md:-left-[30%] w-[90%] md:w-[50%] h-[80%] rounded-full -z-10"
    style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
    data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
  </div>
  
  <!-- Right circular gradient - Positioned behind all content with negative z-index -->
  <div class="absolute top-[10%] -right-[40%] md:-right-[30%] w-[90%] md:w-[50%] h-[80%] rounded-full -z-10"
    style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
    data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-once="true">
  </div>
  
  <div class="max-w-7xl mx-auto py-12 relative">
    <div class="rounded-xl overflow-hidden relative">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <!-- Left Content - Services List -->
        <div class="p-8 md:p-12 mt-12 relative" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
          <p class="font-semi-bolder text-primary-600 font-bold" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Health Insurance</p>
          <h1 class="text-4xl font-bold text-secondary-600" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">Secure Your Customers' Future</h1>
          <h1 class="text-4xl font-bold text-secondary-600 mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">With Digital Health Insurance Solutions</h1>
          <p class="text-gray-500 mb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">Transform your business into a health insurance hub. Our platform lets you offer comprehensive health coverage solutions to your customers.</p>
          
          <a href="#"
            class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4"
            data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
            Start Your Insurance Journey
          </a>
          
          <div
            class="mt-8 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true">
            <div class="flex -space-x-2">
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
        
        <!-- Right Content - Image -->
        <div class="relative max-w-5xl mx-auto" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300" data-aos-once="true">
          <!-- Main Dashboard Image -->
          <div class="relative z-0">
            <img src="assets/images/health-insurance/banner.png" alt="Dashboard" class="h-auto" />
            <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Additional styling to ensure gradient patches appear behind content in all browsers */
  @supports not (z-index: -1) {
    section.relative:before,
    section.relative:after {
      position: absolute;
      content: '';
      top: 10%;
      height: 80%;
      width: 90%;
      border-radius: 50%;
      pointer-events: none;
    }
    
    section.relative:before {
      left: -40%;
      background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 50%);
    }
    
    section.relative:after {
      right: -40%;
      background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 50%);
    }
  }
</style>
<!-- hero section ends -->

<!-- E-Governance Platform Services Section -->
<section class="bg-secondary-100 py-10 px-4 md:px-24" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">Key Platform Features</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Feature Card 1 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-8 transform hover:-translate-y-1" 
                 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-red-500">Digital Policy Issuance</h2>
                </div>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>Real-time policy generation</li>
                    <li>Paperless documentation</li>
                    <li>Instant customer verification</li>
                </ul>
            </div>
            
            <!-- Feature Card 2 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-8 transform hover:-translate-y-1" 
                 data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-red-500">Multi-insurer Integration</h2>
                </div>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>Access multiple insurance providers</li>
                    <li>Compare policy features</li>
                    <li>Customized coverage options</li>
                </ul>
            </div>
            
            <!-- Feature Card 3 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-8 transform hover:-translate-y-1" 
                 data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                <div class="text-left mb-2">
                    <h2 class="text-xl font-semibold text-red-500">Claim Processing Support</h2>
                </div>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>Digital claim filing</li>
                    <li>Status tracking</li>
                    <li>Documentation assistance</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- Features & Functions Section -->
<section class="bg-white px-4 md:px-24 my-12" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
    <div class="container mx-auto px-6 text-center">    
        
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">Key Platform Features</h2>
    
        <!-- Updated grid with proper centering -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Feature Card 1 -->
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1" 
                 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
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
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1" 
                 data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
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
            <div class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1" 
                 data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
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
<section class="py-10 max-w-3xl mx-auto px-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
    <!-- Section Title -->
    <div class="text-center mb-12" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
        <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
    </div>

    <!-- FAQ Accordion -->
    <div class="space-y-4">
        <?php
        $faqItems = [
            [
                'question' => 'What documentation is needed to become an insurance partner?',
                'answer' => 'Required documents include PAN card, Aadhar card, bank account details, and address proof. Our team guides you through the registration process.',
                'isOpen' => true
            ],
            [
                'question' => 'How long does partner onboarding take?',
                'answer' => 'Partner onboarding typically takes 3–5 working days, including verification and basic training.',
                'isOpen' => false
            ],
            [
                'question' => 'What is the commission structure?',
                'answer' => 'Partners earn competitive commissions ranging from 15–25% on premium value, varying by insurance product and provider.',
                'isOpen' => false
            ]
        ];
        

        foreach ($faqItems as $index => $item) :
            $isOpen = $item['isOpen'];
            $questionColor = $isOpen ? 'text-secondary-500' : 'text-primary-800';
            $iconColor = $isOpen ? 'text-secondary-500' : 'text-primary-800';
            $icon = $isOpen ? '−' : '+';
            $contentClass = $isOpen ? '' : 'hidden';
            $delay = 300 + ($index * 200);
        ?>
        <!-- FAQ Item -->
        <div class="border-b border-gray-200 pb-4" id="faq-item-<?php echo $index; ?>" data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo $delay; ?>" data-aos-once="true">
            <button class="flex justify-between items-center w-full text-left faq-toggle transition-all duration-300 hover:text-secondary-500">
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
        <div class="bg-gradient-to-br from-secondary-700 to-secondary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
            data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200" data-aos-once="true">

            <!-- Stars Background SVG -->
            <div class="absolute z-0 opacity-30 right-0" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300" data-aos-once="true">
                <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
                    class="w-full h-full object-cover">
            </div>

            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true">
                    Join Sec2Pay Today
                </h1>

                <p class="text-base sm:text-lg text-white relative z-10" 
                   data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true">
                    Start for free — upgrade anytime.
                </p>

                <div class="relative z-10" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" data-aos-once="true">
                    <p class="text-white mb-4 sm:mb-6">
                        <a href="/contact-us.php" class="underline hover:text-white transition">
                            Joining as an organization? Contact Sales
                        </a>
                    </p>

                    <a href="https://app.sec2pay.in/?src=website" target="_blank"
                        class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                        data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000" data-aos-once="true">
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

 </main>

    <?php include_once('includes/footer.php'); ?>

    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS with custom settings
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 100,
                delay: 100
            });

            // FAQ accordion functionality
            const faqToggles = document.querySelectorAll('.faq-toggle');
            
            faqToggles.forEach((toggle, index) => {
                toggle.addEventListener('click', function() {
                    const parent = this.parentElement;
                    const content = parent.querySelector('.faq-content');
                    const indicator = this.querySelector('span');
                    
                    // Toggle this FAQ item
                    content.classList.toggle('hidden');
                    
                    // Update the indicator and text color
                    if (content.classList.contains('hidden')) {
                        indicator.textContent = '+';
                        indicator.classList.remove('text-secondary-500');
                        indicator.classList.add('text-primary-800');
                        this.querySelector('h3').classList.remove('text-secondary-500');
                        this.querySelector('h3').classList.add('text-primary-800');
                    } else {
                        indicator.textContent = '−';
                        indicator.classList.remove('text-primary-800');
                        indicator.classList.add('text-secondary-500');
                        this.querySelector('h3').classList.remove('text-primary-800');
                        this.querySelector('h3').classList.add('text-secondary-500');
                    }
                });
            });
        });
    </script>
</body>

</html>