/**
 * SecuPay - Banking Platform Services
 * Main JavaScript functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize mobile menu
    initMobileMenu();
});

/**
 * Initialize the mobile menu functionality
 */
function initMobileMenu() {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
    const closeMenuButton = document.getElementById('close-mobile-menu');
    
    // Function to open mobile menu
    function openMobileMenu() {
        // Prevent body scrolling when menu is open
        document.body.style.overflow = 'hidden';
        
        // Show the menu overlay
        mobileMenuOverlay.classList.remove('hidden');
        
        // Add animation classes
        setTimeout(() => {
            mobileMenuPanel.classList.add('translate-x-0');
            mobileMenuPanel.classList.remove('translate-x-full');
        }, 10);
    }
    
    // Function to close mobile menu
    function closeMobileMenu() {
        // Add animation classes to slide out
        mobileMenuPanel.classList.remove('translate-x-0');
        mobileMenuPanel.classList.add('translate-x-full');
        
        // Hide the overlay after animation
        setTimeout(() => {
            mobileMenuOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    }
    
    // Toggle menu on hamburger click
    menuButton.addEventListener('click', openMobileMenu);
    
    // Close menu when clicking close button
    closeMenuButton.addEventListener('click', closeMobileMenu);
    
    // Close menu when clicking backdrop
    mobileMenuBackdrop.addEventListener('click', closeMobileMenu);
    
    // Close mobile menu on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
            closeMobileMenu();
        }
    });
    
    // Add initial transform class
    mobileMenuPanel.classList.add('translate-x-full');
}





// Add this script to your website's JavaScript file or include it in a script tag at the end of your body

document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('main-header');
    
    // Function to update header style based on scroll position
    function updateHeaderStyle() {
      if (window.scrollY > 50) {
        // Add glass effect classes when scrolled down
        header.classList.remove('bg-transparent');
        header.classList.add('bg-white/10', 'backdrop-blur', 'shadow-md');
      } else {
        // Remove glass effect when at top
        header.classList.add('bg-transparent');
        header.classList.remove('bg-white/10', 'backdrop-blur', 'shadow-md');
      }
    }
    
    // Add scroll event listener
    window.addEventListener('scroll', updateHeaderStyle);
    
    // Initialize header style on page load
    updateHeaderStyle();
  });



  // Add this JavaScript to create the tabbed interface functionality with enhanced animations

document.addEventListener('DOMContentLoaded', function() {
    // Get all tab cards
    const tabCards = document.querySelectorAll('.product-tab');
    
    // Get all content sections
    const contentSections = document.querySelectorAll('.product-content');
    
    // Initialize - show only the first tab's content
    contentSections.forEach((section, index) => {
      if (index === 0) {
        section.classList.remove('hidden');
        section.classList.add('animate-fade-in');
      } else {
        section.classList.add('hidden');
      }
    });
    
    // Set first tab as active
    if (tabCards.length > 0) {
      tabCards[0].classList.add('bg-secondary-500', 'text-white');
      tabCards[0].classList.remove('bg-white', 'text-primary-600', 'border-gray-200');
    }
    
    // Add click event to each tab
    tabCards.forEach((tab, index) => {
      tab.addEventListener('click', () => {
        // Skip if clicking the already active tab
        if (tab.classList.contains('bg-secondary-500')) {
          return;
        }
        
        // Reset all tabs to inactive state
        tabCards.forEach(card => {
          card.classList.remove('bg-secondary-500', 'text-white');
          card.classList.add('bg-white', 'text-primary-600', 'border', 'border-gray-200');
          
          // Reset image and icon color
          const iconImage = card.querySelector('img');
          if (iconImage) {
            // You could implement icon color changes here if needed
          }
        });
        
        // Set clicked tab to active state with animation
        tab.classList.remove('bg-white', 'text-primary-600', 'border-gray-200');
        tab.classList.add('bg-secondary-500', 'text-white', 'animate-bounce-once');
        
        // After bounce animation completes, remove the class
        setTimeout(() => {
          tab.classList.remove('animate-bounce-once');
        }, 300);
        
        // Hide all content sections with animation
        contentSections.forEach(section => {
          if (!section.classList.contains('hidden')) {
            // Add fade-out animation
            section.classList.add('animate-fade-out');
            
            // After animation completes, hide the section
            setTimeout(() => {
              section.classList.add('hidden');
              section.classList.remove('animate-fade-out');
              
              // Show the selected content section with slide-in animation
              contentSections[index].classList.remove('hidden');
              contentSections[index].classList.add('animate-slide-in');
              
              // Remove animation class after it completes
              setTimeout(() => {
                contentSections[index].classList.remove('animate-slide-in');
              }, 400);
            }, 300); // Duration matches the animation duration
          }
        });
      });
    });
    
    // Add hover effect to tabs
    tabCards.forEach(tab => {
      tab.addEventListener('mouseenter', () => {
        if (!tab.classList.contains('bg-secondary-500')) {
          tab.classList.add('shadow-md', 'scale-105');
        }
      });
      
      tab.addEventListener('mouseleave', () => {
        if (!tab.classList.contains('bg-secondary-500')) {
          tab.classList.remove('shadow-md', 'scale-105');
        }
      });
    });
  });