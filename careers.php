<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sec2Pay - Banking Platform Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@3"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</head>
<style>
  body, html {
  overflow-x: hidden;
}

</style>
<body class="bg-white font-inter">

  <?php include_once('includes/header.php'); ?>

  <main>

    <!-- hero section -->

    <section class="bg-white">
      <div class="max-w-7xl mx-auto py-12">
        <div class="rounded-xl overflow-hidden">
          <div class="flex flex-col items-center text-center">
            <!-- Left Content - Services List -->
            <div class="p-8 md:p-12 lg:mt-12 lg:max-w-8xl">
              <h1 class="sm:text-xl lg:text-5xl md:text-3xl text-2xl  font-bold text-secondary-500">Join Our Mission to Transform Financial Services</h1>
              <h2 class="text-primary-500 lg:text-3xl md:text-2xl my-4 font-bold">We help, We grow, We prosper</h2>
              <p class="mb-8">At Sec2Pay, we're bringing financial services closer to millions across India. <br> As we grow, we're looking for passionate individuals who want to make a real <br> difference in how businesses serve their communities.</p>

              <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-md mb-4">
                View Openings
              </a>
            </div>

            <!-- Main Dashboard Image -->
            <div class="relative w-full max-w-4xl mx-auto">
              <div class="relative z-20">
                <img src="assets/images/careers/banner.png" alt="Dashboard" class="w-full h-auto" />
                <div class="absolute bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-white to-transparent"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- hero section ends -->

    <!-- E-Governance Platform Services Section -->
    <section class="bg-secondary-100 py-10 px-4 md:px-24">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-primary-700 mb-8 text-center">Why Join us</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
          <!-- Feature: Data-Driven Lending -->
          <div>
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-600">Be part of India's growing
                fintech story</h2>
            </div>
          </div>

          <!-- Feature: Pre-Integrated APIs -->
          <div>
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-600">Work with a team of 150+
                dedicated professionals</h2>
            </div>
          </div>

          <!-- Feature: End-to-End Management -->
          <div>
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-600">Learn and grow in a
                fast-paced environment</h2>
            </div>

          </div>

          <!-- Feature: Regulatory Compliance -->
          <div>
            <div class="text-left mb-2">
              <h2 class="text-xl font-semibold text-secondary-600">Create solutions that
                impact real lives</h2>
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
              <img src="assets/images/careers/careers.png" alt="AePS Banking"
                class="max-w-full h-auto max-h-[400px]">
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <h3 class="oklch(67.3% 0.182 276.935) text-4xl font-bold mb-5">Benefits </h3>
            <ul class="space-y-5 mb-8">
              <?php
              $lifePlans = [
                'Health coverage',
                'Learning opportunities',
                'Work-life balance',
                'Growth-focused environment'
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

            <p class="text-base sm:text-lg text-gray-300 relative z-10" data-aos="fade-up"
              data-aos-delay="300">
              Start for free — upgrade anytime.
            </p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
              <p class="text-gray-300 mb-4 sm:mb-6">
                <a href="https://app.sec2pay.in/?src=website" class="underline hover:text-white transition">
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