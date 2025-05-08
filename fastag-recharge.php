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


    <main class="overflow-hidden">
        <!-- hero section -->
        <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
            <!-- Top-left Circular Gradient (Bluish) - Hidden on mobile -->
            <div class="absolute top-[5%] -left-[25%] w-[50%] h-[100%] rounded-full hidden md:block"
                style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
                data-aos="fade" data-aos-duration="1500" data-aos-once="true">
            </div>

            <!-- Top-right Circular Gradient (Pinkish) - Hidden on mobile -->
            <div class="absolute -top-[20%] -right-[20%] w-[50%] h-[100%] rounded-full hidden md:block"
                style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
                data-aos="fade" data-aos-duration="1500" data-aos-delay="200" data-aos-once="true">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <!-- Content - Always First -->
                        <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-once="true">
                            <p class="font-bold text-primary-600 text-sm sm:text-base mb-2" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">Fastage Services</p>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                                Make Every Drive Count:
                            </h1>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4"
                                data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                                Your Simple FASTag Solution
                            </h1>
                            <p class="black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="800" data-aos-once="true">
                                Offer instant FASTag recharge services at your <br>
                                store and expand your digital payment offerings
                            </p>

                            <a href="https://app.sec2pay.in/?src=website" target="_blank"
                                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg mb-4"
                                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                                Get started now
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <div class="mt-6 md:mt-8 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
                                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                                <div class="flex -space-x-2 ml-1">
                                    <img src="https://randomuser.me/api/portraits/men/1.jpg"
                                        class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                                    <img src="https://randomuser.me/api/portraits/women/2.jpg"
                                        class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                                    <img src="https://randomuser.me/api/portraits/men/3.jpg"
                                        class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                                    <img src="https://randomuser.me/api/portraits/women/4.jpg"
                                        class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-white">
                                </div>
                                <span class="text-gray-600 text-xs sm:text-sm">1 Lac+ Retail partners across
                                    India</span>
                            </div>
                        </div>

                        <!-- Image - Always Second -->
                        <div class="relative mx-auto px-4 sm:px-0" data-aos="fade-left" data-aos-duration="1200"
                            data-aos-once="true">
                            <!-- Main Image -->
                            <div class="relative z-20">
                                <img src="assets\images\fastag-recharge\banner.png" alt="AEPS Banking Services"
                                    class="w-auto h-96" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- hero section ends -->


        <!-- E-Governance Platform Services Section -->
        <section class="bg-secondary-100 py-12 px-4 md:px-24" data-aos="fade" data-aos-duration="800"
            data-aos-once="true">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-primary-700 my-8 text-center" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true">
                    Why Choose Sec2Pay <span class="text-secondary-500">FASTag Platform</span>
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Feature: Instant Recharge -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                        <div class="text-left mb-2">
                            <h2 class="text-xl font-semibold text-secondary-600" data-aos="fade-right"
                                data-aos-delay="150" data-aos-duration="600" data-aos-once="true">Instant Recharge</h2>
                        </div>
                        <p class="text-grey-500 pt-2">
                            <span data-aos="fade-up" data-aos-delay="200" data-aos-duration="500"
                                data-aos-once="true">Instant Recharge Quick top-up options for all bank
                                FASTags</span><br>
                            <span data-aos="fade-up" data-aos-delay="300" data-aos-duration="500"
                                data-aos-once="true">Real-time balance updates</span><br>
                            <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="500"
                                data-aos-once="true">Direct bank integration</span>
                        </p>
                    </div>

                    <!-- Feature: Transaction History -->
                    <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                        <div class="text-left mb-2">
                            <h2 class="text-xl font-semibold text-secondary-600" data-aos="fade-right"
                                data-aos-delay="250" data-aos-duration="600" data-aos-once="true">Transaction History
                            </h2>
                        </div>
                        <p class="text-grey-500 pt-2">
                            <span data-aos="fade-up" data-aos-delay="300" data-aos-duration="500"
                                data-aos-once="true">Complete Transaction History</span><br>
                            <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="500"
                                data-aos-once="true">Access detailed recharge records</span><br>
                            <span data-aos="fade-up" data-aos-delay="500" data-aos-duration="500"
                                data-aos-once="true">Track customer transactions</span><br>
                            <span data-aos="fade-up" data-aos-delay="600" data-aos-duration="500"
                                data-aos-once="true">Generate custom reports</span>
                        </p>
                    </div>

                    <!-- Feature: Multi-Bank Support -->
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                        <div class="text-left mb-2">
                            <h2 class="text-xl font-semibold text-secondary-600" data-aos="fade-right"
                                data-aos-delay="350" data-aos-duration="600" data-aos-once="true">Multi-Bank Support
                            </h2>
                        </div>
                        <p class="text-grey-500 pt-2">
                            <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="500"
                                data-aos-once="true">Multi-Bank Support Recharge any bank's FASTag</span><br>
                            <span data-aos="fade-up" data-aos-delay="500" data-aos-duration="500"
                                data-aos-once="true">Single portal for all transactions</span><br>
                            <span data-aos="fade-up" data-aos-delay="600" data-aos-duration="500"
                                data-aos-once="true">Unified payment system</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <section class="w-full py-6 mt-6" data-aos="fade" data-aos-duration="800" data-aos-once="true">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Left side with illustration -->
                    <div class="w-full md:w-1/2 order-1 md:order-1" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-once="true">
                        <img src="assets/images/credit-card-bill-payment/business.png" alt="FASTag Agent Benefits"
                            class="w-full h-auto" data-aos="zoom-in" data-aos-delay="150" data-aos-duration="800"
                            data-aos-once="true">
                    </div>

                    <!-- Right side with content -->
                    <div class="w-full md:w-1/2 order-2 md:order-2" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-once="true">
                        <h2 class="text-3xl font-bold text-secondary-600 mb-6" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="800" data-aos-once="true">Benefits for FASTag Agents</h2>

                        <ul class="space-y-5 mb-8">
                            <?php
                    $lifePlans = [
                        'Start with minimal setup costs',
                        'Only need a smartphone or computer',
                        'Earn commission on every recharge',
                        'Build regular customer base',
                        'Quick transaction completion',
                        'Simple verification process',
                    ];
                    
                    foreach ($lifePlans as $index => $plan) :
                        $delay = 200 + ($index * 100);
                    ?>
                            <li class="flex items-start" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"
                                data-aos-duration="600" data-aos-once="true">
                                <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1"
                                    data-aos="zoom-in" data-aos-delay="<?php echo $delay + 50; ?>"
                                    data-aos-duration="400" data-aos-once="true">
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
                                <span class="ml-3 text-primary-500"><?php echo $plan; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Other Services Section -->
        <!-- Our Other Services Section -->
        <section class="w-full bg-secondary-100 py-10 px-4" data-aos="fade" data-aos-duration="800"
            data-aos-once="true">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row items-start">
                    <!-- Section Title -->
                    <div class="text-secondary-500 mb-10 md:mb-0 md:w-1/4 md:mr-8 md:pt-2" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-once="true">
                        <h2 class="text-3xl font-bold leading-tight uppercase" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="800" data-aos-once="true">
                            OUR OTHER SERVICES
                        </h2>
                    </div>

                    <!-- Services Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-6 gap-y-8 md:w-3/4 w-full"
                        data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                        <!-- AEPS -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="700" data-aos-once="true">
                            <img src="assets/images/pan-uti/icon1.svg" alt="AEPS" class="w-28 h-28" data-aos="zoom-in"
                                data-aos-delay="150" data-aos-duration="500" data-aos-once="true">
                            <span class="text-secondary-500 text-center font-medium mt-2">AEPS</span>
                        </div>

                        <!-- DMT -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="700" data-aos-once="true">
                            <img src="assets/images/pan-uti/icon2.svg" alt="DMT" class="w-28 h-28" data-aos="zoom-in"
                                data-aos-delay="250" data-aos-duration="500" data-aos-once="true">
                            <span class="text-secondary-500 text-center font-medium mt-2">DMT</span>
                        </div>

                        <!-- Micro ATM -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="700" data-aos-once="true">
                            <img src="assets/images/pan-uti/icon3.svg" alt="Micro ATM" class="w-28 h-28"
                                data-aos="zoom-in" data-aos-delay="350" data-aos-duration="500" data-aos-once="true">
                            <span class="text-secondary-500 text-center font-medium mt-2">Micro ATM</span>
                        </div>

                        <!-- mPOS -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="700" data-aos-once="true">
                            <img src="assets/images/pan-uti/icon4.svg" alt="mPOS" class="w-28 h-28" data-aos="zoom-in"
                                data-aos-delay="450" data-aos-duration="500" data-aos-once="true">
                            <span class="text-secondary-500 text-center font-medium mt-2">mPOS</span>
                        </div>

                        <!-- CMS -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="500"
                            data-aos-duration="700" data-aos-once="true">
                            <img src="assets/images/pan-uti/icon5.svg" alt="CMS" class="w-28 h-28" data-aos="zoom-in"
                                data-aos-delay="550" data-aos-duration="500" data-aos-once="true">
                            <span class="text-secondary-500 text-center font-medium mt-2">CMS</span>
                        </div>

                        <!-- UPI QR Code -->
                        <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="600"
                            data-aos-duration="700" data-aos-once="true">
                            <img src="assets/images/pan-uti/icon6.svg" alt="UPI QR Code" class="w-28 h-28"
                                data-aos="zoom-in" data-aos-delay="650" data-aos-duration="500" data-aos-once="true">
                            <span class="text-secondary-500 text-center font-medium mt-2">UPI QR Code</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-10 max-w-3xl mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
            </div>

            <!-- FAQ Accordion -->
            <div class="space-y-4">
                <?php
        $faqItems = [
            [
                'question' => 'What is FASTag recharge service?',
                'answer' => 'FASTag recharge service lets you add money to any vehicles FASTag balance. As an agent, you can help customers recharge their FASTags instantly, making toll payments easier.',
                'isOpen' => true
            ],
            [
                'question' => 'How long does it take to process a FASTag recharge? ',
                'answer' => 'You can offer AEPS services once you\'ve completed the registration process and have the necessary equipment set up. This typically includes having a biometric device and completing the verification process.',
                'isOpen' => false
            ],
            [
                'question' => 'Which banks FASTags can I recharge? ',
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
                        <h3 class="text-lg font-medium <?php echo $questionColor; ?>"><?php echo $item['question']; ?>
                        </h3>
                        <span class="<?php echo $iconColor; ?> text-2xl"><?php echo $icon; ?></span>
                    </button>
                    <div class="<?php echo $contentClass; ?> mt-3 text-gray-500 faq-content">
                        <p><?php echo $item['answer']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>




        <!-- testimonials -->

        <!-- Join Section with Dark Blue Background -->
        <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
            <div class="container mx-auto">
                <!-- Join Panel with Starry Background -->
                <div class="bg-gradient-to-br from-primary-700 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
                    data-aos="fade-up" data-aos-duration="1000">

                    <!-- Stars Background SVG -->
                    <div class="absolute z-0 opacity-30 right-0">
                        <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
                            class="w-full h-full object-cover">
                    </div>

                    <div class="max-w-4xl mx-auto text-center">
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
                            data-aos="fade-up" data-aos-delay="200">
                            Join Sec2Pay Today
                        </h1>

                        <p class="text-base sm:text-lg text-white relative z-10" data-aos="fade-up"
                            data-aos-delay="300">
                            Start for free — upgrade anytime.
                        </p>

                        <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
                            <p class="text-white mb-4 sm:mb-6">
                                <a href="contact-us.php" class="underline hover:text-white transition">
                                    Joining as an organization? Contact Sales
                                </a>
                            </p>

                            <a href="https://app.sec2pay.in/?src=website" target="_blank"
                                class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                                data-aos="zoom-in" data-aos-delay="500">
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
        <!-- Footer Section -->





    </main>

    <!-- faq -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const accordionButtons = document.querySelectorAll('.faq-toggle');

        accordionButtons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const isHidden = content.classList.contains('hidden');
                const plusMinus = button.querySelector('span');
                const question = button.querySelector('h3');

                // Close all
                document.querySelectorAll('.faq-content').forEach(div => {
                    div.classList.add('hidden');
                });
                document.querySelectorAll('.faq-toggle span').forEach(span => {
                    span.textContent = '+';
                    span.classList.remove('text-secondary-500');
                    span.classList.add('text-primary-800');
                });
                document.querySelectorAll('.faq-toggle h3').forEach(h3 => {
                    h3.classList.remove('text-secondary-500');
                    h3.classList.add('text-primary-800');
                });

                // Open current if it was closed
                if (isHidden) {
                    content.classList.remove('hidden');
                    plusMinus.textContent = '−';
                    plusMinus.classList.remove('text-primary-800');
                    plusMinus.classList.add('text-secondary-500');
                    question.classList.remove('text-primary-800');
                    question.classList.add('text-secondary-500');
                }
            });
        });
    });
    </script>
    <!-- FAQ Section Ends -->

    <!-- Main Header Banner -->


    <?php include_once('includes/footer.php'); ?>

    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>