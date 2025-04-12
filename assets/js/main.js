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

// Tabbed Interface with Bidirectional AOS Animation Refresh
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
    tabCards[0].classList.add('bg-secondary-500');
    tabCards[0].classList.remove('bg-white', 'text-primary-600', 'border-gray-200');
    
    // Ensure the icon has the active color for the first/active tab
    const activeIcon = tabCards[0].querySelector('i');
    if (activeIcon) {
      activeIcon.classList.add('text-white');
      activeIcon.classList.remove('text-primary-500');
    }
    
    // Ensure the heading has the right color
    const heading = tabCards[0].querySelector('h3');
    if (heading) {
      heading.classList.add('text-white');
      heading.classList.remove('text-primary-600');
    }
  }
  
  // Function to scroll tab into view when selected (for mobile)
  const scrollTabIntoView = (tab) => {
    if (window.innerWidth < 1024) { // Only for screens smaller than lg breakpoint
      tab.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center'
      });
    }
  };
  
  // Add click event to each tab
  tabCards.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      // Skip if clicking the already active tab
      if (tab.classList.contains('bg-secondary-500')) {
        return;
      }
      
      // Scroll the tab into center view on mobile
      scrollTabIntoView(tab);
      
      // Reset all tabs to inactive state
      tabCards.forEach(card => {
        card.classList.remove('bg-secondary-500', 'text-white');
        card.classList.add('bg-white', 'text-primary-600', 'border', 'border-gray-200');
        
        // Reset icon color
        const icon = card.querySelector('i');
        if (icon) {
          icon.classList.remove('text-white');
          icon.classList.add('text-primary-500');
        }
        
        // Reset text color for the heading
        const heading = card.querySelector('h3');
        if (heading) {
          heading.classList.remove('text-white');
          heading.classList.add('text-primary-600');
        }
      });
      
      // Set clicked tab to active state with animation
      tab.classList.remove('bg-white', 'text-primary-600', 'border-gray-200');
      tab.classList.add('bg-secondary-500', 'animate-bounce-once');
      
      // Make icon a different color when tab is active
      const activeIcon = tab.querySelector('i');
      if (activeIcon) {
        activeIcon.classList.remove('text-primary-500', 'text-primary-600');
        activeIcon.classList.add('text-white');
      }
      
      // Update text color for the heading
      const heading = tab.querySelector('h3');
      if (heading) {
        heading.classList.remove('text-primary-600');
        heading.classList.add('text-white');
      }
      
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
            
            // Refresh AOS animations for the newly visible content
            if (typeof AOS !== 'undefined') {
              // Short delay to ensure elements are visible first
              setTimeout(() => {
                // Reset data-aos-animate attribute on all elements in the new tab content
                const aosElements = contentSections[index].querySelectorAll('[data-aos]');
                aosElements.forEach(element => {
                  element.classList.remove('aos-animate');
                });
                
                // Refresh AOS to recalculate and apply animations
                AOS.refresh();
              }, 50);
            }
            
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
  
  // Add scroll listener to refresh AOS animations when scrolling near tabs section
  window.addEventListener('scroll', function() {
    if (typeof AOS === 'undefined') return;
    
    // Throttle the scroll event for better performance
    if (!window.scrollThrottle) {
      window.scrollThrottle = setTimeout(function() {
        AOS.refresh();
        window.scrollThrottle = null;
      }, 200);
    }
  });
});

    document.addEventListener('DOMContentLoaded', function() {
      AOS.init({
        duration: 800,          // Animation duration in milliseconds
        easing: 'ease-out',     // Default easing for AOS animations
        once: false,            // Set to false to make animations work every time you scroll up/down
        mirror: true,           // Enable mirroring effect so elements animate out when scrolling past them
        offset: 120,            // Offset (in px) from the original trigger point
        delay: 0,               // Default delay before animation starts
        anchorPlacement: 'top-bottom', // Defines which position of the element regarding to window should trigger the animation
      });
    });



     // This ensures the infinite scroll is perfectly seamless
     document.addEventListener('DOMContentLoaded', function() {
      const logosSlide = document.querySelector('.logos-slide');
      
      // Check if there are enough logos to cover the width of the container
      // If not, clone more sets until there are enough
      const ensureEnoughLogos = () => {
          const containerWidth = document.querySelector('.logos-container').offsetWidth;
          const slideWidth = logosSlide.offsetWidth;
          
          // If the slide is not at least twice as wide as the container, clone more logos
          if (slideWidth < containerWidth * 2) {
              const originalSet = logosSlide.innerHTML;
              logosSlide.innerHTML = originalSet + originalSet;
              
              // Recursive check if we need even more copies
              ensureEnoughLogos();
          }
      };
      
      // Run after images have loaded to get accurate widths
      window.addEventListener('load', ensureEnoughLogos);
      
      // Also adjust if window is resized
      window.addEventListener('resize', ensureEnoughLogos);
  });

  /**
 * COMPLETE BLOG CAROUSEL SOLUTION
 * - Fixed functionality issues
 * - Fully responsive
 * - Mobile swipe support
 * - AOS animation integration
 */

document.addEventListener('DOMContentLoaded', function() {
  // First check if carousel exists
  const carousel = document.getElementById('blog-carousel');
  if (!carousel) return;
  
  // Get all required elements
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  const indicatorBtns = document.querySelectorAll('.indicator-btn');
  const blogCards = carousel.querySelectorAll('.bg-gray-100');
  
  // Exit if no blog cards found
  if (!blogCards.length) return;
  
  let currentIndex = 0;
  let isAnimating = false;

  // Make carousel responsive
  // First ensure mobile scrolling works by making the carousel horizontally scrollable
  carousel.classList.add('overflow-x-auto', 'md:overflow-hidden', 'scrollbar-hide', 'pb-4', 'md:pb-0');
  
  // Hide scrollbar for better appearance
  if (!document.querySelector('style#scrollbar-hide-style')) {
    const style = document.createElement('style');
    style.id = 'scrollbar-hide-style';
    style.textContent = `
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }
      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    `;
    document.head.appendChild(style);
  }

  // Add responsive classes to cards
  blogCards.forEach(card => {
    // Make cards responsive
    card.classList.add('flex-shrink-0');
    
    // Ensure proper widths at different breakpoints
    // This preserves your md:w-1/3 for desktop but adds responsive behavior for smaller screens
    if (!card.classList.contains('md:w-1/3')) {
      card.classList.add('md:w-1/3');
    }
    
    // Set width for mobile and tablet
    card.classList.add('w-4/5', 'sm:w-1/2');
    
    // Set min-width for mobile to prevent tiny cards
    card.classList.add('min-w-[280px]', 'sm:min-w-0');
    
    // Add transitions and hover effects
    card.classList.add('transition-all', 'duration-300', 'ease-in-out', 'hover:shadow-lg');
    
    // Add snap alignment for better mobile experience
    card.classList.add('snap-start');
  });
  
  // Add snap scrolling for touch devices
  carousel.classList.add('snap-x', 'snap-mandatory', 'md:snap-none');

  // Calculate the number of visible cards based on screen size
  function getCardsPerView() {
    if (window.innerWidth < 640) {
      return 1; // Mobile: 1 card
    } else if (window.innerWidth < 768) {
      return 2; // Tablet: 2 cards
    } else {
      return 3; // Desktop: 3 cards
    }
  }
  
  // Update carousel position
  function updateCarousel(animate = true) {
    if (isAnimating) return;
    isAnimating = true;
    
    // Calculate card width including gap
    // Need to get actual computed width since cards may have different widths at different screen sizes
    const cardStyles = window.getComputedStyle(blogCards[0]);
    const cardWidth = blogCards[0].offsetWidth;
    const marginRight = parseInt(cardStyles.marginRight, 10) || 0;
    const gapWidth = marginRight || 24; // Default to 24px if no margin is detected (Tailwind's space-x-6)
    
    // Calculate exact scroll position
    const scrollPosition = currentIndex * (cardWidth + gapWidth);
    
    // Scroll to position
    if (animate) {
      carousel.scrollTo({
        left: scrollPosition,
        behavior: 'smooth'
      });
      
      // Reset animating flag after animation completes
      setTimeout(() => {
        isAnimating = false;
        
        // Refresh AOS animations
        if (typeof AOS !== 'undefined') {
          AOS.refresh();
        }
      }, 500);
    } else {
      carousel.scrollLeft = scrollPosition;
      isAnimating = false;
    }
    
    // Update indicators
    updateIndicators();
    
    // Update navigation buttons
    updateButtonStates();
  }
  
  // Update indicator buttons
  function updateIndicators() {
    indicatorBtns.forEach((btn, index) => {
      if (index === currentIndex) {
        btn.classList.remove('w-2', 'h-2', 'bg-gray-300', 'rounded-full');
        btn.classList.add('w-8', 'h-1', 'bg-secondary-500', 'rounded');
      } else {
        btn.classList.remove('w-8', 'h-1', 'bg-secondary-500', 'rounded');
        btn.classList.add('w-2', 'h-2', 'bg-gray-300', 'rounded-full');
      }
    });
  }
  
  // Update button states (disabled/enabled)
  function updateButtonStates() {
    // Prev button logic
    if (currentIndex <= 0) {
      prevBtn.setAttribute('disabled', 'true');
      prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
    } else {
      prevBtn.removeAttribute('disabled');
      prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
    }
    
    // Next button logic - depend on visible cards
    const maxIndex = Math.max(0, blogCards.length - getCardsPerView());
    if (currentIndex >= maxIndex) {
      nextBtn.setAttribute('disabled', 'true');
      nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
    } else {
      nextBtn.removeAttribute('disabled');
      nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
    }
  }
  
  // Set up previous button click handler
  if (prevBtn) {
    prevBtn.addEventListener('click', function() {
      if (currentIndex > 0 && !isAnimating) {
        currentIndex--;
        updateCarousel();
      }
    });
  }
  
  // Set up next button click handler
  if (nextBtn) {
    nextBtn.addEventListener('click', function() {
      const maxIndex = Math.max(0, blogCards.length - getCardsPerView());
      if (currentIndex < maxIndex && !isAnimating) {
        currentIndex++;
        updateCarousel();
      }
    });
  }
  
  // Set up indicator buttons
  indicatorBtns.forEach((btn, index) => {
    // Only show indicators for available slides
    if (index < blogCards.length) {
      btn.addEventListener('click', function() {
        if (currentIndex !== index && !isAnimating) {
          currentIndex = index;
          updateCarousel();
        }
      });
    } else {
      // Hide extra indicators
      btn.style.display = 'none';
    }
  });
  
  // Handle window resize
  let resizeTimer;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      // Adjust currentIndex if needed after resize
      const maxIndex = Math.max(0, blogCards.length - getCardsPerView());
      currentIndex = Math.min(currentIndex, maxIndex);
      
      // Update carousel without animation
      updateCarousel(false);
      
      // Refresh AOS animations
      if (typeof AOS !== 'undefined') {
        AOS.refresh();
      }
    }, 200);
  });
  
  // Touch swipe support for mobile
  let touchStartX = 0;
  let touchEndX = 0;
  
  carousel.addEventListener('touchstart', e => {
    touchStartX = e.changedTouches[0].screenX;
  }, { passive: true });
  
  carousel.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, { passive: true });
  
  function handleSwipe() {
    const swipeThreshold = 50;
    if (touchEndX < touchStartX - swipeThreshold) {
      // Swiped left - go to next slide
      const maxIndex = Math.max(0, blogCards.length - getCardsPerView());
      if (currentIndex < maxIndex && !isAnimating) {
        currentIndex++;
        updateCarousel();
      }
    }
    if (touchEndX > touchStartX + swipeThreshold) {
      // Swiped right - go to previous slide
      if (currentIndex > 0 && !isAnimating) {
        currentIndex--;
        updateCarousel();
      }
    }
  }
  
  // Handle manual scrolling
  carousel.addEventListener('scroll', function() {
    if (isAnimating) return;
    
    const cardWidth = blogCards[0].offsetWidth;
    const cardStyles = window.getComputedStyle(blogCards[0]);
    const marginRight = parseInt(cardStyles.marginRight, 10) || 0;
    const gapWidth = marginRight || 24;
    
    // Calculate closest index based on scroll position
    const scrollLeft = carousel.scrollLeft;
    const newIndex = Math.round(scrollLeft / (cardWidth + gapWidth));
    
    // Update index and indicators if position changed
    if (newIndex !== currentIndex && newIndex >= 0 && newIndex < blogCards.length) {
      currentIndex = newIndex;
      updateIndicators();
      updateButtonStates();
    }
  });
  
  // Initialize carousel
  updateCarousel(false);
  
  // Refresh AOS animations if available
  if (typeof AOS !== 'undefined') {
    setTimeout(() => {
      AOS.refresh();
    }, 100);
  }
});

// Enhanced Tabbed Interface with Horizontal Scrolling
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
    tabCards[0].classList.add('bg-secondary-500');
    tabCards[0].classList.remove('bg-white', 'text-primary-600', 'border-gray-200');
    
    // Ensure the icon has the right color for the first/active tab
    const activeIcon = tabCards[0].querySelector('i');
    if (activeIcon) {
      activeIcon.classList.add('text-white');
      activeIcon.classList.remove('text-primary-500');
    }
    
    // Ensure the heading has the right color
    const heading = tabCards[0].querySelector('h3');
    if (heading) {
      heading.classList.add('text-white');
      heading.classList.remove('text-primary-600');
    }
  }
  
  // Function to scroll tab into view when selected (for mobile)
  const scrollTabIntoView = (tab) => {
    if (window.innerWidth < 1024) { // Only for screens smaller than lg breakpoint
      tab.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center'
      });
    }
  };
  
  // Add click event to each tab
  tabCards.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      // Skip if clicking the already active tab
      if (tab.classList.contains('bg-secondary-500')) {
        return;
      }
      
      // Scroll the tab into center view on mobile
      scrollTabIntoView(tab);
      
      // Reset all tabs to inactive state
      tabCards.forEach(card => {
        card.classList.remove('bg-secondary-500', 'text-white');
        card.classList.add('bg-white', 'text-primary-600', 'border', 'border-gray-200');
        
        // Reset icon color
        const icon = card.querySelector('i');
        if (icon) {
          icon.classList.remove('text-white');
          icon.classList.add('text-primary-500');
        }
        
        // Reset text color for the heading
        const heading = card.querySelector('h3');
        if (heading) {
          heading.classList.remove('text-white');
          heading.classList.add('text-primary-600');
        }
      });
      
      // Set clicked tab to active state with animation
      tab.classList.remove('bg-white', 'text-primary-600', 'border-gray-200');
      tab.classList.add('bg-secondary-500', 'animate-bounce-once');
      
      // Make icon white when tab is active
      const activeIcon = tab.querySelector('i');
      if (activeIcon) {
        activeIcon.classList.remove('text-primary-500', 'text-primary-600');
        activeIcon.classList.add('text-white');
      }
      
      // Update text color for the heading
      const heading = tab.querySelector('h3');
      if (heading) {
        heading.classList.remove('text-primary-600');
        heading.classList.add('text-white');
      }
      
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



// multi service tabs code

document.addEventListener('DOMContentLoaded', function() {
  // Initialize AOS
  AOS.init({
      once: true,
      offset: 50,
      duration: 800
  });

  // Get all tab buttons and content
  const tabButtons = document.querySelectorAll('.tab-button');
  const tabContents = document.querySelectorAll('.tab-content');

  // Add click event to each tab button
  tabButtons.forEach(button => {
      button.addEventListener('click', () => {
          // Remove active class and styles from all buttons
          tabButtons.forEach(btn => {
              btn.classList.remove('bg-red-100', 'text-gray-900');
              btn.classList.add('bg-transparent', 'text-gray-700');
          });

          // Add active class and styles to clicked button
          button.classList.add('bg-red-100', 'text-gray-900');
          button.classList.remove('bg-transparent', 'text-gray-700');

          // Animate content transition - first fade out all tabs
          tabContents.forEach(content => {
              content.classList.add('opacity-0');
              setTimeout(() => {
                  content.classList.add('hidden');
                  content.classList.remove('block');
              }, 300); // Short delay to allow fade out animation
          });

          // After fade out, fade in the selected tab
          const tabId = button.getAttribute('data-tab');
          const activeContent = document.getElementById(`${tabId}-content`);
          
          setTimeout(() => {
              activeContent.classList.remove('hidden');
              activeContent.classList.add('block');
              
              // Small delay for the display change to take effect
              setTimeout(() => {
                  activeContent.classList.remove('opacity-0');
                  activeContent.classList.add('opacity-100');
              }, 50);
          }, 350); // Slightly longer than the fade out to ensure proper sequence
      });
  });
});



  // Toggle between monthly and annual pricing
  const billingToggle = document.getElementById('billing-toggle');
  const monthlyPrices = document.querySelectorAll('.monthly-price');
  const annualPrices = document.querySelectorAll('.annual-price');
  
  billingToggle.addEventListener('change', function() {
      if (this.checked) {
          // Annual pricing
          monthlyPrices.forEach(el => el.classList.add('hidden'));
          annualPrices.forEach(el => el.classList.remove('hidden'));
      } else {
          // Monthly pricing
          monthlyPrices.forEach(el => el.classList.remove('hidden'));
          annualPrices.forEach(el => el.classList.add('hidden'));
      }
      
      // Add pulse animation to prices
      const visiblePrices = this.checked ? annualPrices : monthlyPrices;
      visiblePrices.forEach(el => {
          el.classList.add('animate-pulse-scale');
          setTimeout(() => {
              el.classList.remove('animate-pulse-scale');
          }, 400);
      });
  });


  document.addEventListener('DOMContentLoaded', function() {


   // Tabs functionality
   const tabButtons = document.querySelectorAll('.tab-btn');
   const tabPanes = document.querySelectorAll('.tab-pane');
   
   // Function to activate tab
   function activateTab(tabId) {
       // Remove active class from all tab buttons
       tabButtons.forEach(btn => {
           btn.classList.remove('active');
           btn.classList.remove('bg-secondary-500');
           btn.classList.remove('border-secondary-500');
           btn.classList.add('bg-transparent');
           btn.classList.add('border-white/30');
       });
       
       // Remove active class from all tab panes
       tabPanes.forEach(pane => {
           pane.classList.add('hidden');
           pane.classList.remove('block');
           pane.classList.add('opacity-0');
           pane.classList.remove('opacity-100');
       });
       
       // Add active class to the selected tab button and pane
       const selectedButton = document.querySelector(`[data-tab="${tabId}"]`);
       const selectedPane = document.getElementById(tabId);
       
       if (selectedButton && selectedPane) {
           selectedButton.classList.add('active');
           selectedButton.classList.add('bg-secondary-500');
           selectedButton.classList.add('border-secondary-500');
           selectedButton.classList.remove('bg-transparent');
           selectedButton.classList.remove('border-white/30');
           
           selectedPane.classList.remove('hidden');
           selectedPane.classList.add('block');
           setTimeout(() => {
               selectedPane.classList.remove('opacity-0');
               selectedPane.classList.add('opacity-100');
           }, 10);
       }
   }
   
   // Add click event listeners to all tab buttons
   tabButtons.forEach(button => {
       button.addEventListener('click', function() {
           const tabId = this.getAttribute('data-tab');
           activateTab(tabId);
       });
   });
   
   // Responsive handling - if viewport is small, make the active tab fully visible
   function scrollToActiveTab() {
       const activeButton = document.querySelector('.tab-btn.active');
       if (activeButton && window.innerWidth < 768) {
           activeButton.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
       }
   }
   
   // Call scrollToActiveTab when a tab is clicked and on window resize
   tabButtons.forEach(button => {
       button.addEventListener('click', scrollToActiveTab);
   });
   
   window.addEventListener('resize', scrollToActiveTab);
   
   // Check if there's a hash in the URL and activate that tab
   if (window.location.hash) {
       const tabId = window.location.hash.substring(1);
       activateTab(tabId);
   }
});






 // Simple script to handle the testimonial navigation
 document.addEventListener('DOMContentLoaded', function() {
  // All testimonial data
  const testimonials = [
      {
          name: "Mike taylor",
          location: "Lahore, Pakistan",
          text: "On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.",
          profile: "https://randomuser.me/api/portraits/men/3.jpg"
      },
      {
          name: "Chris Thomas",
          location: "CEO of Red Button",
          text: "Smart homes are the future. The integration of IoT devices has transformed how we interact with our living spaces.",
          profile: "https://randomuser.me/api/portraits/women/3.jpg"
      },
      {
          name: "Sarah Johnson",
          location: "New York, USA",
          text: "The customer service was exceptional. They went above and beyond to ensure everything was set up perfectly.",
          profile: "https://randomuser.me/api/portraits/men/3.jpg"
      }
  ];
  
  // Elements
  const dots = document.querySelectorAll('#dots-container button');
  const profileImage = document.getElementById('profile-image');
  const prevArrow = document.getElementById('prev-arrow');
  const nextArrow = document.getElementById('next-arrow');
  
  let currentIndex = 0;
  
  // Function to update the active testimonial
  function updateTestimonial(newIndex) {
      // Ensure index is within bounds
      newIndex = (newIndex + testimonials.length) % testimonials.length;
      
      // Store the previous index
      const prevIndex = currentIndex;
      currentIndex = newIndex;
      
      // Update dots
      dots.forEach((dot, index) => {
          if (index === currentIndex) {
              dot.classList.remove('bg-gray-300');
              dot.classList.add('bg-secondary-500');
          } else {
              dot.classList.remove('bg-secondary-500');
              dot.classList.add('bg-gray-300');
          }
      });
      
      // Get all testimonial cards
      const testimonialCards = [];
      for (let i = 0; i < testimonials.length; i++) {
          testimonialCards.push(document.getElementById(`testimonial-${i}`));
      }
      
      // Hide previous active testimonial
      const prevCard = testimonialCards[prevIndex];
      prevCard.classList.remove('opacity-100', 'translate-y-0', 'z-20', 'bg-white', 'shadow-lg');
      prevCard.classList.add('opacity-0', 'translate-y-16', 'bg-gray-100', 'shadow-md');
      
      // After a small delay, show the new one and hide the old one
      setTimeout(() => {
          // Hide all cards
          testimonialCards.forEach(card => {
              card.classList.add('hidden');
          });
          
          // Show current card
          const currentCard = testimonialCards[currentIndex];
          currentCard.classList.remove('hidden', 'opacity-0', 'translate-y-16', 'bg-gray-100', 'shadow-md');
          currentCard.classList.add('opacity-100', 'translate-y-0', 'z-20', 'bg-white', 'shadow-lg');
          
          // Show next card below the current one (if there is a next card)
          const nextIndex = (currentIndex + 1) % testimonials.length;
          const nextCard = testimonialCards[nextIndex];
          if (nextCard) {
              nextCard.classList.remove('hidden', 'opacity-0');
              nextCard.classList.add('opacity-95', 'translate-y-16', 'z-10');
          }
          
          // Update profile image
          profileImage.src = testimonials[currentIndex].profile;
          profileImage.alt = testimonials[currentIndex].name;
      }, 300);
  }
  
  // Add event listeners to dots
  dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
          updateTestimonial(index);
      });
  });
  
  // Add event listeners to navigation arrows
  nextArrow.addEventListener('click', function() {
      updateTestimonial(currentIndex + 1);
  });
  
  prevArrow.addEventListener('click', function() {
      updateTestimonial(currentIndex - 1);
  });
  
  // Show initial testimonial setup (second card visible but stacked)
  const secondCard = document.getElementById('testimonial-1');
  secondCard.classList.remove('hidden');
});



       // Tab functionality
       document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabPanes = document.querySelectorAll('.tab-pane');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('active-tab');
                    btn.classList.add('bg-transparent', 'text-gray-700', 'border', 'border-gray-300');
                });
                
                // Add active class to clicked button
                this.classList.add('active-tab');
                this.classList.remove('bg-transparent', 'text-gray-700', 'border', 'border-gray-300');
                
                // Hide all tab panes
                tabPanes.forEach(pane => {
                    pane.classList.add('hidden', 'opacity-0');
                    pane.classList.remove('block', 'opacity-100');
                });
                
                // Show the selected tab pane
                const tabId = this.getAttribute('data-tab');
                const selectedPane = document.getElementById(tabId);
                selectedPane.classList.remove('hidden', 'opacity-0');
                selectedPane.classList.add('block', 'opacity-100');
            });
        });
    });

    // Initialize AOS animation library (if available)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    }