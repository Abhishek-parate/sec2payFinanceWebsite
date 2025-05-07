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


        <!-- Utility Services Section -->
        <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
            <!-- Top-left Circular Gradient (Bluish) - Visible on all devices with adjusted opacity -->
            <div class=" hidden absolute top-[5%] -left-[25%] w-[50%] h-[100%] rounded-full opacity-30 md:opacity-80"
                style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
                data-aos="fade" data-aos-duration="1500" data-aos-once="true">
            </div>

            <!-- Top-right Circular Gradient (Pinkish) - Visible on all devices with adjusted opacity -->


            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row md:items-center gap-6 md:gap-4 lg:gap-0">
                        <!-- Content Section -->
                        <div class="p-4 md:p-8 lg:p-12 pt-8 md:w-1/2" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-once="true">
                            <p class="font-bold text-primary-600 text-sm sm:text-base mb-2" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">
                                Aadhar Pay
                            </p>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                                Turn your shop into a
                            </h1>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4"
                                data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                                digital banking point
                            </h1>
                            <p class="text-gray-700 mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up"
                                data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                                Help customers make secure payments using just their Aadhar Card and fingerprint.
                            </p>

                            <a href="contact-us.php"
                                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg mb-6 sm:mb-8"
                                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                                Start Your Journey
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <div class="flex items-center gap-2 border-2 border-gray-200 rounded-full p-2 w-full max-w-sm shadow-sm"
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

                        <!-- Image Section -->
                        <div class="relative md:w-1/2" data-aos="fade-left" data-aos-duration="1200"
                            data-aos-once="true">
                            <!-- Main Image -->
                            <div class="relative z-20">
                                <img src="assets/images/aadhar/aadhar-hero.png" alt="Aadhar Pay Banking Solution"
                                    class="w-full h-auto object-contain mx-auto" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Support Promise Banner -->

        <!-- Support Promise Banner -->
        <section>
            <div class="w-full bg-primary-500 py-12" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800"
                data-aos-once="true">>
                <div class="max-w-7xl mx-auto px-4">
                    <!-- Desktop View -->
                    <div class="hidden md:flex flex-row items-center justify-between text-white">
                        <div class="font-bold text-base whitespace-nowrap">
                            Why choose us?
                        </div>

                        <div class="flex items-center justify-end space-x-6 text-sm">
                            <div class="text-white/50">|</div>
                            <div class="flex items-center">
                                <span class="whitespace-nowrap">Biometric Transactions
                                </span>
                            </div>
                            <div class="text-white/50">|</div>
                            <div class="flex items-center">
                                <span class="whitespace-nowrap">Direct Bank Transfers
                                </span>
                            </div>
                            <div class="text-white/50">|</div>
                            <div class="flex items-center">
                                <span class="whitespace-nowrap">Real-time Processing
                                </span>
                            </div>
                            <div class="text-white/50">|</div>

                        </div>
                    </div>

                    <!-- Mobile View - Improved -->
                    <div class="md:hidden">
                        <div class="font-bold text-sm text-white mb-4">
                            Why choose Sec2Pay
                        </div>

                        <div class="scroll-snap-container overflow-x-scroll pb-2 w-full">
                            <div class="flex items-center space-x-4 text-sm text-white min-w-max px-4">
                                <span>Biometric Transactions
                                </span>
                                <span class="text-white/50">|</span>
                                <span>Direct Bank Transfers
                                </span>
                                <span class="text-white/50">|</span>
                                <span>Real-time Processing
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="py-12  mt-6" data-aos="fade-up">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-800 mb-8" data-aos="fade-right">
                    Key Features
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Feature 1 - Secure Payments -->
                    <div class="rounded-lg border border-secondary-500 bg-secondary-100 p-6" data-aos="zoom-in"
                        data-aos-delay="100">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Secure Payments</h3>
                        <p class="text-gray-700">
                            Enable customers to pay directly from their Aadhar-linked bank accounts using fingerprint
                            verification. Our platform ensures safe, reliable transactions.
                        </p>
                    </div>

                    <!-- Feature 2 - Simple Setup -->
                    <div class="rounded-lg border border-secondary-500 p-6" data-aos="zoom-in" data-aos-delay="200">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Simple Setup</h3>
                        <p class="text-gray-700">
                            Start offering Aadhar Pay services with just a biometric device and smartphone. Perfect for
                            small store owners looking to expand their services.
                        </p>
                    </div>

                    <!-- Feature 3 - Quick Settlements -->
                    <div class="rounded-lg border border-secondary-500 p-6" data-aos="zoom-in" data-aos-delay="300">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Quick Settlements</h3>
                        <p class="text-gray-700">
                            Receive payments directly in your account with our fast settlement system. Track all
                            transactions through our user-friendly dashboard.
                        </p>
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
                        <img src="assets/images/aadhar/benefits.png" alt="Life Insurance">
                    </div>

                    <!-- Right side with content -->
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-secondary-600 mb-6 mt-6">Benefits for Business
                            Partners</h2>

                        <ul class="space-y-5 mb-8">
                            <?php
                    $lifePlans = [
                        'Low investment entry point',
                        'Earn commission per transaction',
                        'Build customer trust with secure banking',
                        'Expand your service portfolio',
                        'Increase daily footfall',
                        'Simple transaction process',
                    ];
                    
                    foreach ($lifePlans as $plan) :
                    ?>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
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
                                <span class="ml-3 text-gray-700"><?php echo $plan; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
            </div>
        </section>


        <!-- Service Coverage Section -->
        <section class="w-full py-10 bg-secondary-500">
            <div class="max-w-6xl mx-auto px-4">
                <!-- Section Title -->
                <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-12">Service Coverage</h2>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <!-- Stat 1 -->
                    <div class="flex flex-col items-center">
                        <p class="text-4xl md:text-5xl font-bold text-white mb-2">700+</p>
                        <p class="text-white text-sm md:text-base">Districts across India</p>
                    </div>

                    <!-- Stat 2 -->
                    <div class="flex flex-col items-center">
                        <p class="text-4xl md:text-5xl font-bold text-white mb-2">5 Lakh+</p>
                        <p class="text-white text-sm md:text-base">Retail Points</p>
                    </div>

                    <!-- Stat 3 -->
                    <div class="flex flex-col items-center">
                        <p class="text-4xl md:text-5xl font-bold text-white mb-2">40 Cr+</p>
                        <p class="text-white text-sm md:text-base">Daily Transactions</p>
                    </div>

                    <!-- Stat 4 -->
                    <div class="flex flex-col items-center">
                        <p class="text-4xl md:text-5xl font-bold text-white mb-2">15 Lakh+</p>
                        <p class="text-white text-sm md:text-base">Monthly Customers</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- FAQ Section -->
        <section class="py-10 max-w-3xl mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-primary-800 mb-2">FAQ</h2>
                <p class="text-gray-600">Using natural, conversational language appropriate for target audience</p>
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
        'answer' => 'You need a smartphone/computer and a biometric device. Our team helps with complete setup.',
        'isOpen' => false
    ],
    [
        'question' => 'How secure are the transactions?',
        'answer' => 'All transactions use UIDAI-approved biometric authentication and are processed through banking networks.',
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



        <!-- Join Section with Dark Blue Background -->
        <section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
            <div class="container mx-auto">
                <!-- Join Panel with Starry Background -->
                <div class="bg-gradient-to-br from-secondary-700 to-secondary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
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
    </main>

    <!-- Main Header Banner -->


    <?php include_once('includes/footer.php'); ?>

    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>