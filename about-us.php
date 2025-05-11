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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script>

</head>

<body class="bg-white font-inter">

  <?php include_once('includes/header.php'); ?>


  <main>

    <section class="relative overflow-hidden py-10 pt-20 md:pt-24 md:py-10 bg-white">
      <!-- Top-left Circular Gradient -->
      <div class="absolute top-[5%] -left-[30%] sm:-left-[20%] w-[80%] sm:w-[50%] h-[100%] rounded-full"
        style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 50%);">
      </div>

      <!-- Top-right Circular Gradient -->
      <div class="absolute top-[5%] -right-[30%] sm:-right-[20%] w-[80%] sm:w-[50%] h-[100%] rounded-full"
        style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 50%);">
      </div>

      <!-- Main Content -->
      <div class="container mx-auto px-4 sm:px-6 relative z-20">
        <div class="max-w-4xl mx-auto text-center mb-8 md:mb-12 lg:mb-16">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-gray-900 leading-tight"
            data-aos="fade-up" data-aos-duration="800" data-aos-mirror="true">
            <span class="text-secondary-500">About us</span>
          </h1>
          <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 max-w-3xl mx-auto" data-aos="fade-up"
            data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">
            Since 2017, we've been working with businesses to bring financial services closer to communities that need them most. Our multi-service platform helps businesses launch their own fintech services within 7 days, creating a network that serves millions of families across India.
          </p>
          <p class="text-base sm:text-lg md:text-xl mb-6 md:mb-8 max-w-3xl mx-auto" data-aos="fade-up"
            data-aos-duration="800" data-aos-delay="100" data-aos-mirror="true">
            What sets us apart? We understand that every business is unique. That's why we provide customized solutions through our platform, letting you focus on growth while we handle the technology.
          </p>
        </div>
      </div>
    </section>

    <section class="w-full bg-primary-700 py-12">
  <div class="text-center mb-10" data-aos="fade-down">
    <h2 class="text-white text-2xl sm:text-3xl md:text-4xl font-bold">Our Impact</h2>
  </div>
  <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 text-center text-white px-4">
    <!-- Active Retail Merchants -->
    <div data-aos="fade-up">
      <div class="text-4xl sm:text-5xl font-bold" id="counter-merchants">0</div>
      <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Active Retail Merchants</p>
    </div>

    <!-- Business Partners -->
    <div data-aos="fade-up" data-aos-delay="100">
      <div class="text-4xl sm:text-5xl font-bold" id="counter-partners">0</div>
      <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Business Partners</p>
    </div>

    <!-- Banking Partnerships -->
    <div data-aos="fade-up" data-aos-delay="200">
      <div class="text-4xl sm:text-5xl font-bold" id="counter-banks">0</div>
      <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Banking Partnerships</p>
    </div>

    <!-- Satisfied Customers -->
    <div data-aos="fade-up" data-aos-delay="300">
      <div class="text-4xl sm:text-5xl font-bold" id="counter-customers">0</div>
      <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Satisfied Customers</p>
    </div>

    <!-- Team Members -->
    <div data-aos="fade-up" data-aos-delay="400">
      <div class="text-4xl sm:text-5xl font-bold" id="counter-team">0</div>
      <p class="text-base sm:text-lg font-semibold text-white/90 mt-2">Team Members</p>
    </div>
  </div>
</section>

    <script>
      const counters = [{
          id: 'counter1',
          end: 100000
        },
        {
          id: 'counter2',
          end: 1000
        },
        {
          id: 'counter3',
          end: 150
        },
        {
          id: 'counter4',
          end: 1000000
        },
        {
          id: 'counter5',
          end: 150
        }
      ];

      counters.forEach(counter => {
        const el = document.getElementById(counter.id);
        const countUp = new CountUp(counter.id, counter.end, {
          duration: 2,
          separator: ','
        });

        if (!countUp.error) {
          const observer = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting) {
              countUp.start();
              observer.disconnect();
            }
          }, {
            threshold: 0.6
          });

          observer.observe(el);
        } else {
          console.error(countUp.error);
        }
      });
    </script>

<section class="w-full max-w-[1226px] mx-auto px-4 py-12">
  <div class="flex flex-col lg:flex-row gap-10">
    <div class="w-full lg:w-1/2 flex justify-center">
      <img src="assets/images/life-at-sec2pay.png" alt="Life at Sec2Pay"
        class="h-auto rounded-md object-cover" />
    </div>
    <div class="w-full lg:w-1/2 flex flex-col justify-center">
      <p class="text-secondary-500 text-lg sm:text-xl font-bold uppercase">Life at Sec2Pay</p>
      <h2 class="text-gray-900 text-2xl sm:text-3xl md:text-4xl font-bold mb-4 md:mb-6">Creating India's most reliable financial services distribution platform</h2>
      <p class="text-gray-900 text-base sm:text-lg leading-relaxed opacity-70">
        At our Pune headquarters, our team works to solve real challenges faced by businesses and communities. We blend technology expertise with deep understanding of financial services to create solutions that work for India's diverse market.
      </p>
    </div>
  </div>
</section>

    <section class="bg-red-500 w-full mx-auto px-4 py-16">
      <div class="max-w-[1226px] mx-auto px-6">
        <!-- Section Title -->
        <h3 class="text-white text-4xl font-bold leading-[51px]">
          Our Vision
        </h3>
        <!-- Vision Statement -->
        <h2 class="text-white lg:text-6xl sm:text-2xl font-normal leading-tight mt-4">
          Making financial services accessible to every corner of India
        </h2>
      </div>
    </section>

    <!-- Join Section with Dark Blue Background -->
    <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
      <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-primary-600 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
          data-aos="fade-up" data-aos-duration="1000">

          <!-- Stars Background SVG -->
          <div class="absolute z-0 opacity-30 right-0">
            <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
              class="w-full h-full object-cover">
          </div>

          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
              data-aos="fade-up" data-aos-delay="200">
              Join Sec2pay Today
            </h1>

            <p class="text-base sm:text-lg text-gray-300  relative z-10" data-aos="fade-up"
              data-aos-delay="300">
              Start for free — upgrade anytime.
            </p>

            <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
              <p class="text-gray-300 mb-4 sm:mb-6">
                <a href="https://app.sec2pay.in/?src=website" target="_blank" class="underline hover:text-white transition">
                  Joining as an organization? Contact Sales
                </a>
              </p>

              <a href="https://app.sec2pay.in/?src=website"
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