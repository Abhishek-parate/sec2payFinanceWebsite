<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sec2Pay - ONDC Credit Platform Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <link href="./assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</head>

<body class="bg-white font-inter">

  <?php include_once('includes/header.php'); ?>


  <main>
    <!-- hero section -->

    <section class=" bg-white">
      <div class="max-w-7xl mx-auto py-12  ">
        <div class="rounded-xl overflow-hidden  ">
          <div class="grid grid-cols-1 md:grid-cols-2 align-middle">
            <!-- Left Content - Services List -->
            <div class="p-8 md:p-12">
              <p class="font-semi-bolder text-primary-600 font-bold">ONDC CREDIT SERVICE PLATFORM</p>
              <h1 class="text-4xl font-bold text-secondary-600 ">Credit Tailored for Your Business Growth</h1>
              <p class="text-gray-500 mb-8">Empowering your business to provide credit on the ONDC platform.</p>

              <a href="https://app.sec2pay.in/?src=website" target="_blank" class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                Join the Platform
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

            <div class="relative max-w-5xl mx-auto  ">
              <!-- Main Dashboard Image -->
              <div class="relative z-20">
                <img src="assets/images/ondc-credit-service-platform/hero-image.png" alt="Dashboard" class=" h-auto" />
                <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent">
                </div>
              </div>
            </div>
          </div>
    </section>

    <!-- hero section ends -->



    <!-- Banking Services Section -->
    <section class="bg-rose-50 py-10 px-4 md:px-24 flex items-center">
      <div class="container mx-auto px-4 md:px-6">
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-red-500 text-center">ONDC Credit Platform Services</h2>

        <!-- Banking Services Tabs -->
        <div class="w-full" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <!-- Tab Content -->
          <div class="relative min-h-[350px] overflow-hidden md:pl-24">
            <!-- AePS Tab Content -->
            <div class="tab-pane block opacity-100 transition-opacity duration-300" id="aeps">
              <div class="flex flex-col md:flex-row items-center gap-8 text-primary-600">
                <div class="w-full md:w-1/2">
                  <div class="p-6 bg-secondary-100 rounded-2xl bg-red-200 rounded-[32px] border border-slate-500">

                    <h3 class="text-2xl md:text-3xl font-semibold mb-5">Features</h3>
                    <ul class="space-y-2 mb-2">
                      <?php
                      $Merchants = [
                        'Multi-lender support for diverse credit needs',
                        'Performance tracking dashboards',
                        'Automated fraud detection tools'
                      ];

                      foreach ($Merchants as $Merchant) :
                      ?>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                              <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                              <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <span class="ml-3 "><?php echo $Merchant; ?></span>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <div class="w-full md:w-1/2">
                  <h3 class="text-2xl md:text-3xl font-semibold mb-5">Benefits</h3>
                  <ul class="space-y-2 mb-2">
                    <?php
                    $services = [
                      'Quick onboarding for your business',
                      'Flexible repayment options for end users',
                      'Streamlined documentation'
                    ];

                    foreach ($services as $service) :
                    ?>
                      <li class="flex items-start">
                        <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                            <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                            <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <span class="ml-3 "><?php echo $service; ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>

                </div>
              </div>
            </div>


            <div class="relative z-10 flex justify-center items-center mt-8 " data-aos="fade-up" data-aos-delay="400">
              <a href="https://app.sec2pay.in/?src=website" target="_blank"
                class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5  sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                data-aos="zoom-in" data-aos-delay="500">
                Join the Network
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
            <h3 class="oklch(67.3% 0.182 276.935) text-4xl font-bold mb-5">Why choose Sec2Pay <br>
              ONDC Buyer Service:</h3>
            <ul class="space-y-5 mb-8">
              <?php
              $lifePlans = [
                'Instant Credit Assessment',
                'Digital Documentation',
                'Real-time Monitoring',
                'Quick Disbursement',
                '24/7 Support System'
              ];

              foreach ($lifePlans as $plan) :
              ?>
                <li class="flex items-start">
                  <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                      <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                      <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="ml-3 text-black"><?php echo $plan; ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
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
            'question' => 'What is ONDC Credit Services platform?',
            'answer' => 'Our platform enables lenders to offer credit products to ONDC network merchants through digital assessment and disbursement tools.',
            'isOpen' => true
          ],
          [
            'question' => 'How can I start offering credit through ONDC?',
            'answer' => 'Register as a credit partner on our platform, complete integration, and start offering credit products to verified ONDC merchants.',
            'isOpen' => false
          ],
          [
            'question' => 'What types of credit products can be offered?',
            'answer' => 'Partners can offer working capital loans, invoice financing, and merchant cash advances based on ONDC transaction data.',
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
              data-aos="fade-up" data-aos-delay="200">Join Sec2Pay today</h1>

            <p class="text-base sm:text-lg text-gray-300  relative z-10" data-aos="fade-up"
              data-aos-delay="300">Start for free — upgrade anytime.</p>
            <p class="text-base sm:text-lg text-gray-300 mb-6 sm:mb-8 relative z-10" data-aos="fade-up"
              data-aos-delay="300">Joining as an organization? Contact Sales</p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
              <a href="https://app.sec2pay.in/?src=website" target="_blank"
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