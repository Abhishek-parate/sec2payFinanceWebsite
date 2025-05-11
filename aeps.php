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


        <!-- Utility Services Section with Circular Gradients -->
        <section class="relative overflow-hidden bg-white py-6 sm:py-8 md:py-10">
            <!-- Top-left Circular Gradient (Bluish) - Hidden on mobile -->
            <div class="absolute top-[5%] -left-[20%] w-[50%] h-[100%] rounded-full hidden md:block"
                style="background: radial-gradient(circle, rgba(126, 194, 240, 0.8) 0%, rgba(222, 242, 255, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
                data-aos="fade" data-aos-duration="1500" data-aos-once="true">
            </div>

            <!-- Top-right Circular Gradient (Pinkish) - Hidden on mobile -->
            <div class="absolute -top-[20%] -right-[20%] w-[50%] h-[100%] rounded-full hidden md:block"
                style="background: radial-gradient(circle, rgba(230, 120, 120, 0.8) 0%, rgba(242, 219, 219, 0.4) 40%, rgba(255, 255, 255, 0) 50%);"
                data-aos="fade" data-aos-duration="1500" data-aos-delay="200" data-aos-once="true">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:py-12 relative z-10">
                <div class="rounded-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <!-- Content - Always First -->
                        <div class="p-4 md:p-8 lg:p-12 pt-8" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-once="true">
                            <p class="font-bold text-primary-600 text-sm sm:text-base mb-2" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="800" data-aos-once="true">AEPS</p>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="800" data-aos-once="true">
                                Your local banking point for
                            </h1>
                            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary-500 mb-3 sm:mb-4"
                                data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                                instant cash transactions
                            </h1>
                            <p class="black mb-6 sm:mb-8 text-sm sm:text-base" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="800" data-aos-once="true">
                                Join Sec2Pay's AEPS network to provide secure Aadhaar-based banking services in your
                                area. Help your community access their bank accounts easily through fingerprint
                                verification.
                            </p>

                            <a href="contact-us.php"
                                class="inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-3 bg-secondary-500 text-white rounded-lg font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg"
                                data-aos="fade-up" data-aos-delay="500" data-aos-duration="800" data-aos-once="true">
                                Start Your Banking Journey
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <div class="mt-6 md:mt-4 flex items-center gap-2 border-2 border-gray-200 rounded-full p-1 w-full max-w-sm shadow-sm"
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
                                <img src="assets/images/aeps/banner.png" alt="AEPS Banking Services"
                                    class="w-full h-auto" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1/5 bg-gradient-to-t from-white to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features & Functions Section -->
        <section class="bg-white px-4 md:px-24 mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-primary-700 mb-12">AePS Core Features</h2>

                <!-- Updated grid with proper centering -->
                <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature Card 1 -->
                    <div
                        class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <img src="assets/images/aeps/cash.png" alt="Real-Time Payment"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="font-semibold text-xl mb-2">Cash Withdrawal</h3>
                            <p class="text-gray-600 text-sm">
                                Make banking accessible in areas without ATMs. Your customers can withdraw cash using
                                just their Aadhaar and fingerprint - quick, simple, and secure.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Card 2 -->
                    <div
                        class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <img src="assets/images/aeps/balance.png" alt="Real-Time Payment"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class="font-semibold text-xl mb-2">Balance Check</h3>
                            <p class="text-gray-600 text-sm">
                                Help customers stay on top of their finances. Instant balance updates through secure
                                Aadhaar verification.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Card 3 -->
                    <div
                        class="border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <img src="assets/images/aeps/mini-statement.png" alt="Real-Time Payment"
                            class="w-full object-contain rounded-t-lg">
                        <div class="p-6 text-left">
                            <h3 class=" font-semibold text-xl mb-2">Mini Statement</h3>
                            <p class="text-gray-600 text-sm">
                                Print recent transaction details instantly. Give your customers their banking history at
                                their fingertips.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Life Insurance Solutions Section -->
        <section class="w-full py-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-primary-700 text-center mb-4">Benefits for AEPS Agents</h2>

                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Left side with illustration -->
                    <div class="w-full md:w-1/2">
                        <img src="assets/images/aeps/smart-small.png" alt="Life Insurance">
                    </div>

                    <!-- Right side with content -->
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Start Small,
                            Grow Big</h2>

                        <ul class="space-y-5 mb-8">
                            <?php
                    $lifePlans = [
                        'Minimal setup cost',
                        'High earning potential',
                        'Regular commission payouts'
                    ];
                    
                    foreach ($lifePlans as $plan) :
                    ?>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                        <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                                        <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="ml-3 text-gray-700"><?php echo $plan; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact-us.php" class="inline-block">
                            <span
                                class="bg-secondary-600 hover:bg-secondary-500 text-white font-medium py-2.5 px-6 rounded-md transition duration-300 inline-flex items-center gap-2">
                                Read More

                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <!-- Health Insurance Solutions Section -->
        <section class="w-full py-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex flex-col-reverse md:flex-row items-center gap-8">
                    <!-- Left side with content - will appear second on mobile -->
                    <div class="w-full md:w-1/2 mt-6 md:mt-0">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Simple & easy Setup</h2>

                        <ul class="space-y-5 mb-8">
                            <?php
                    $healthPlans = [
                        'Basic smartphone or computer',
                        'Bio-metric device',
                        'Internet connection'
                    ];
                    
                    foreach ($healthPlans as $plan) :
                    ?>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                        <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                                        <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="ml-3 text-gray-700"><?php echo $plan; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="contact-us.php" class="inline-block">
                            <span
                                class="bg-primary-600 hover:bg-primary-500 text-white font-medium py-2.5 px-6 rounded-md transition duration-300 inline-flex items-center gap-2">
                                Read More

                            </span>
                        </a>

                    </div>

                    <!-- Right side with illustration - will appear first on mobile -->
                    <div class="w-full md:w-1/2">
                        <img src="assets/images/aeps/simple-easy.png" alt="Simple Easy Setup" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </section>
        <!-- Life Insurance Solutions Section -->
        <section class="w-full py-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Left side with illustration -->
                    <div class="w-full md:w-1/2">
                        <img src="assets/images/aeps/daily-income.png" alt="Life Insurance">
                    </div>

                    <!-- Right side with content -->
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Daily assured
                            Income</h2>

                        <ul class="space-y-5 mb-8">
                            <?php
                    $lifePlans = [
                        'Fixed commission per transaction',
                        'Additional incentives',
                        'Quick settlements'
                    ];
                    
                    foreach ($lifePlans as $plan) :
                    ?>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 h-5 w-5 rounded-full flex items-center justify-center mt-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                        <circle cx="12" cy="12" r="10" stroke="#5271B6" stroke-width="2" fill="none" />
                                        <path d="M7 12.5L10 15.5L17 8.5" stroke="#5271B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="ml-3 text-gray-700"><?php echo $plan; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="contact-us.php" class="inline-block">
                            <span
                                class="bg-secondary-600 hover:bg-secondary-500 text-white font-medium py-2.5 px-6 rounded-md transition duration-300 inline-flex items-center gap-2">
                                Read More

                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Support Promise Banner -->
        <!-- Support Promise Banner -->
        <section>
            <div class="w-full bg-primary-600 py-12">
                <div class="max-w-7xl mx-auto px-4">
                    <!-- Desktop View -->
                    <div class="hidden md:flex flex-row items-center justify-between text-white">
                        <div class="font-bold text-base whitespace-nowrap">
                            Our Support Promise
                        </div>

                        <div class="flex items-center justify-end space-x-6 text-sm">
                            <div class="text-white/50">|</div>
                            <div class="flex items-center">
                                <span class="whitespace-nowrap">Training for new agents</span>
                            </div>
                            <div class="text-white/50">|</div>
                            <div class="flex items-center">
                                <span class="whitespace-nowrap">Regular commission payments</span>
                            </div>
                            <div class="text-white/50">|</div>
                            <div class="flex items-center">
                                <span class="whitespace-nowrap"> Dedicated relationship manager</span>
                            </div>
                            <div class="text-white/50">|</div>
                            <div class="flex items-center">
                                <span class="whitespace-nowrap"> 24/7 Technical assistance</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile View - Improved -->
                    <div class="md:hidden">
                        <div class="font-bold text-sm text-white mb-4">
                            Our Support Promise </div>

                        <div class="scroll-snap-container overflow-x-scroll pb-2 w-full">
                            <div class="flex items-center space-x-4 text-sm text-white min-w-max px-4">
                                <span>Training for new agents</span>
                                <span class="text-white/50">|</span>
                                <span>Regular commission payments</span>
                                <span class="text-white/50">|</span>
                                <span>Dedicated relationship manager</span>
                                <span class="text-white/50">|</span>
                                <span> 24/7 Technical assistance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
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
            'question' => 'What exactly is AEPS?',
            'answer' => 'It\'s a simple banking system that uses Aadhaar card and fingerprint to help customers withdraw cash, check balance, and get mini statements.',
            'isOpen' => true
        ],
        [
            'question' => 'When can I offer AEPS services?',
            'answer' => 'You can serve customers any time - weekdays, weekends, or holidays. Just ensure you have internet connectivity.',
            'isOpen' => false
        ],
        [
            'question' => 'What do I need to start?',
            'answer' => 'Basic requirements include a smartphone/computer, biometric device, and internet connection. We\'ll guide you through the setup.',
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
        <!-- FAQ Section Ends -->



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




    </main>

    <!-- Main Header Banner -->


    <?php include_once('includes/footer.php'); ?>

    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>