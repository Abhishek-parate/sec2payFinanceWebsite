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

<!-- Contact Form Section with Gradient Background -->
<section class="py-10 px-4 bg-gradient-to-r from-pink-100 via-white to-blue-100 pt-16">
    <div class="max-w-2xl mx-auto">
        <!-- Form Header with Animation -->
        <div class="text-center mb-8" data-aos="fade-down" data-aos-duration="800">
            <h2 class="text-4xl font-bold text-secondary-500 mb-2">Let's Talk Business</h2>
            <p class="text-gray-800 text-lg" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">Get Started with Digital Financial Services</p>
        </div>
        <form id="contactForm" method="POST" action="submit_form.php" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                    <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary-500/50">
                </div>
                
                <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="800">
                    <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary-500/50">
                </div>
            </div>
            
            <div class="mb-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Email Address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary-500/50">
            </div>
            
            <div class="mb-6" data-aos="fade-up" data-aos-delay="700" data-aos-duration="800">
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your message</label>
                <textarea id="message" name="message" rows="5" placeholder="Your message" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary-500/50"></textarea>
            </div>
            
            <div class="flex items-center mb-6" data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">
                <!-- Visible checkbox styled with Tailwind CSS -->
                <input type="checkbox" id="toggle" name="terms" class="w-5 h-5 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 mr-2">
                
                <label for="toggle" class="text-sm text-gray-700">I agree to the Terms and Conditions.</label>
            </div>
            
            <button type="submit" class="w-full bg-secondary-500 hover:bg-secondary-600 text-white font-medium py-3 px-4 rounded-md transition duration-300 uppercase text-sm tracking-wider" data-aos="zoom-in" data-aos-delay="900" data-aos-duration="800">
                Send Message
            </button>
        </form>

        <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Grab form values
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            const terms = document.getElementById('toggle').checked;

            // Form validation
            if (!firstName || !lastName || !email || !message || !terms) {
                alert('Please fill out all fields and agree to the terms.');
                return;
            }

            // Prepare form data to be sent via POST
            const formData = new FormData();
            formData.append('firstName', firstName);
            formData.append('lastName', lastName);
            formData.append('email', email);
            formData.append('message', message);
            formData.append('terms', terms);

            // Now, submit form data to the PHP server (submit_form.php)
            fetch('submit_form.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.text())  // Assuming server sends plain text response
            .then(data => {
                alert('Message sent successfully!');
                document.getElementById('contactForm').reset(); // Reset form on success
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error submitting the form!');
            });
        });
        </script>

    </div>
</section>


<!-- Join Section with Dark Blue Background -->
<section class="relative py-10 px-4 sm:px-8 md:px-16 lg:px-20">
    <div class="container mx-auto">
        <!-- Join Panel with Starry Background -->
        <div class="bg-gradient-to-br from-primary-600 to-primary-600 rounded-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
            data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200">

            <!-- Stars Background SVG -->
            <div class="absolute z-0 opacity-30 right-0" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                <img src="assets/images/home/svg/white-bg-dot-icon.svg" alt="background dots"
                    class="w-full h-full object-cover">
            </div>

            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 relative z-10"
                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    Join Sec2pay today
                </h1>

                <p class="text-base sm:text-lg text-gray-300 relative z-10" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    Start for free — upgrade anytime.
                </p>

                <div class="relative z-10" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <p class="text-gray-300 mb-4 sm:mb-6" data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">
                        <a href="#" class="underline hover:text-white transition">
                            Joining as an organization? Contact Sales
                        </a>
                    </p>

                    <a href="#"
                        class="inline-flex items-center bg-secondary-500 hover:bg-secondary-600 text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg font-semibold transition-all transform hover:scale-105"
                        data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000">
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
        });
    </script>
</body>

</html>