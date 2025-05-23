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

<section class="bg-white">
  <div class="max-w-7xl mx-auto py-12">
    <div class="rounded-xl overflow-hidden">
      <div class="flex flex-col items-center text-center">
        <!-- Left Content - Services List -->
        <div class="p-8 md:p-12 mt-12 max-w-3xl">
          <h1 class="text-4xl font-bold text-secondary-600">Enable Access to Vital Government</h1>
          <h1 class="text-4xl font-bold text-secondary-600 mb-4">Services Through Your Business</h1>
          <p class="text-gray-500 mb-8">Integrate e-governance solutions to simplify services for citizens</p>
          
          <a href="#"
            class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
            Get Started Today!
          </a>
          
          <div
            class="mt-8 flex items-center justify-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm mx-auto shadow-sm">
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
        
        <!-- Main Dashboard Image -->
        <div class="relative w-full max-w-4xl mx-auto">
          <div class="relative z-20">
            <img src="assets/images/egovernance-platform-service/banner.png" alt="Dashboard" class="w-full h-auto" />
            <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- hero section ends -->

<!-- Banking Overview Section with Split Background -->
<section class="relative py-10">
    <!-- Top background - light blue -->
    <div class="absolute top-0 left-0 right-0 h-[60%] bg-primary-500"></div>
    <div class="absolute top-0 left-0 right-0 h-[60%] bg-primary-500"></div>
    <!-- Bottom background - white -->
    <div class="absolute bottom-0 left-0 right-0 h-[40%] bg-white"></div>
    
    <!-- Content -->
    <div class="relative container mx-auto max-w-6xl px-4">
        <!-- Section Header -->
        <div class="text-center mb-12 z-10 relative">
            <h2 class="text-4xl font-bold text-primary-800 mb-6">Start Your E-Governance Journey</h2>
            <p class="text-white max-w-4xl mx-auto text-center leading-relaxed">
            Sec2Pay’s E-Governance Platform equips businesses to integrate critical government services, such as PAN card applications, Aadhaar updates, GST filings, and document verifications. With secure and scalable tools, enterprises can offer these essential services as part of their business operations.
            </p>
        </div>
        
        <!-- Feature Cards positioned to straddle the boundary -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 relative" style="top: calc(60% - 12rem);">
            <!-- Feature 1 -->
            <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100">
                <p class="text-gray-600">
                Digital processing for government document applications.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100">
                <p class="text-gray-600">
                Real-time tracking of service status.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100">
                <p class="text-gray-600">
                Compliance tools for regulatory adherence.
                </p>
            </div>
        </div>
        
        <!-- CTA Button -->
        <div class="text-center relative" style="top: calc(60% - 12rem);">
            <a href="https://app.sec2pay.in/?src=website" target="_blank" class="inline-block bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-8 rounded-md transition duration-300">
            Learn More
            </a>
        </div>
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

                <p class="text-base sm:text-lg text-gray-300 sm:mb-2 relative z-10" data-aos="fade-up"
                    data-aos-delay="300">
                    Start for free — upgrade anytime.
                </p>

                <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
                    <p class="text-gray-300 mb-4 sm:mb-6">
                        <a href="/contact-us.php" class="underline hover:text-white transition">
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