/**
 * Sec2Pay - Banking Platform Services
 * Main JavaScript functionality
 */

document.addEventListener("DOMContentLoaded", function () {
  // Initialize mobile menu
  initMobileMenu();
});

/**
 * Initialize the mobile menu functionality
 */
/**
 * Initialize the mobile menu functionality
 */
function initMobileMenu() {
  const menuButton = document.getElementById("mobile-menu-button");
  const mobileMenuOverlay = document.getElementById("mobile-menu-overlay");
  const mobileMenuPanel = document.getElementById("mobile-menu-panel");
  const mobileMenuBackdrop = document.getElementById("mobile-menu-backdrop");
  const closeMenuButton = document.getElementById("close-mobile-menu");

  // Check if necessary elements exist before proceeding
  if (!menuButton || !mobileMenuOverlay || !mobileMenuPanel) {
    console.log("Mobile menu elements not found in the DOM");
    return; // Exit the function if elements don't exist
  }

  // Function to open mobile menu
  function openMobileMenu() {
    // Prevent body scrolling when menu is open
    document.body.style.overflow = "hidden";

    // Show the menu overlay
    mobileMenuOverlay.classList.remove("hidden");

    // Add animation classes
    setTimeout(() => {
      mobileMenuPanel.classList.add("translate-x-0");
      mobileMenuPanel.classList.remove("translate-x-full");
    }, 10);
  }

  // Function to close mobile menu
  function closeMobileMenu() {
    // Add animation classes to slide out
    mobileMenuPanel.classList.remove("translate-x-0");
    mobileMenuPanel.classList.add("translate-x-full");

    // Hide the overlay after animation
    setTimeout(() => {
      mobileMenuOverlay.classList.add("hidden");
      document.body.style.overflow = "";
    }, 300);
  }

  // Toggle menu on hamburger click
  menuButton.addEventListener("click", openMobileMenu);

  // Close menu when clicking close button
  if (closeMenuButton) {
    closeMenuButton.addEventListener("click", closeMobileMenu);
  }

  // Close menu when clicking backdrop
  if (mobileMenuBackdrop) {
    mobileMenuBackdrop.addEventListener("click", closeMobileMenu);
  }

  // Close mobile menu on window resize
  window.addEventListener("resize", function () {
    if (window.innerWidth >= 768) {
      closeMobileMenu();
    }
  });

  // Add initial transform class
  mobileMenuPanel.classList.add("translate-x-full");
}

// Add this script to your website's JavaScript file or include it in a script tag at the end of your body



document.addEventListener("DOMContentLoaded", function () {
  AOS.init({
    duration: 800, // Animation duration in milliseconds
    easing: "ease-out", // Default easing for AOS animations
    once: false, // Set to false to make animations work every time you scroll up/down
    mirror: true, // Enable mirroring effect so elements animate out when scrolling past them
    offset: 120, // Offset (in px) from the original trigger point
    delay: 0, // Default delay before animation starts
    anchorPlacement: "top-bottom", // Defines which position of the element regarding to window should trigger the animation
  });
});



/**
 * COMPLETE BLOG CAROUSEL SOLUTION
 * - Fixed functionality issues
 * - Fully responsive
 * - Mobile swipe support
 * - AOS animation integration
 */







// document.addEventListener("DOMContentLoaded", function () {
//   // Tabs functionality
//   const tabButtons = document.querySelectorAll(".tab-btn");
//   const tabPanes = document.querySelectorAll(".tab-pane");

//   // Function to activate tab
//   function activateTab(tabId) {
//     // Remove active class from all tab buttons
//     tabButtons.forEach((btn) => {
//       btn.classList.remove("active");
//       btn.classList.remove("bg-secondary-500");
//       btn.classList.remove("border-secondary-500");
//       btn.classList.add("bg-transparent");
//       btn.classList.add("border-white/30");
//     });

//     // Remove active class from all tab panes
//     tabPanes.forEach((pane) => {
//       pane.classList.add("hidden");
//       pane.classList.remove("block");
//       pane.classList.add("opacity-0");
//       pane.classList.remove("opacity-100");
//     });

//     // Add active class to the selected tab button and pane
//     const selectedButton = document.querySelector(`[data-tab="${tabId}"]`);
//     const selectedPane = document.getElementById(tabId);

//     if (selectedButton && selectedPane) {
//       selectedButton.classList.add("active");
//       selectedButton.classList.add("bg-secondary-500");
//       selectedButton.classList.add("border-secondary-500");
//       selectedButton.classList.remove("bg-transparent");
//       selectedButton.classList.remove("border-white/30");

//       selectedPane.classList.remove("hidden");
//       selectedPane.classList.add("block");
//       setTimeout(() => {
//         selectedPane.classList.remove("opacity-0");
//         selectedPane.classList.add("opacity-100");
//       }, 10);
//     }
//   }

//   // Add click event listeners to all tab buttons
//   tabButtons.forEach((button) => {
//     button.addEventListener("click", function () {
//       const tabId = this.getAttribute("data-tab");
//       activateTab(tabId);
//     });
//   });

//   // Responsive handling - if viewport is small, make the active tab fully visible
//   function scrollToActiveTab() {
//     const activeButton = document.querySelector(".tab-btn.active");
//     if (activeButton && window.innerWidth < 768) {
//       activeButton.scrollIntoView({ behavior: "smooth", block: "nearest" });
//     }
//   }

//   // Call scrollToActiveTab when a tab is clicked and on window resize
//   tabButtons.forEach((button) => {
//     button.addEventListener("click", scrollToActiveTab);
//   });

//   window.addEventListener("resize", scrollToActiveTab);

//   // Check if there's a hash in the URL and activate that tab
//   if (window.location.hash) {
//     const tabId = window.location.hash.substring(1);
//     activateTab(tabId);
//   }
// });

// // Tab functionality
// document.addEventListener("DOMContentLoaded", function () {
//   const tabButtons = document.querySelectorAll(".tab-btn");
//   const tabPanes = document.querySelectorAll(".tab-pane");

//   tabButtons.forEach((button) => {
//     button.addEventListener("click", function () {
//       // Remove active class from all buttons
//       tabButtons.forEach((btn) => {
//         btn.classList.remove("active-tab");
//         btn.classList.add(
//           "bg-transparent",
//           "text-gray-700",
//           "border",
//           "border-gray-300"
//         );
//       });

//       // Add active class to clicked button
//       this.classList.add("active-tab");
//       this.classList.remove(
//         "bg-transparent",
//         "text-gray-700",
//         "border",
//         "border-gray-300"
//       );

//       // Hide all tab panes
//       tabPanes.forEach((pane) => {
//         pane.classList.add("hidden", "opacity-0");
//         pane.classList.remove("block", "opacity-100");
//       });

//       // Show the selected tab pane
//       const tabId = this.getAttribute("data-tab");
//       const selectedPane = document.getElementById(tabId);
//       selectedPane.classList.remove("hidden", "opacity-0");
//       selectedPane.classList.add("block", "opacity-100");
//     });
//   });
// });

// Initialize AOS animation library (if available)
if (typeof AOS !== "undefined") {
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
  });
}

// document.addEventListener("DOMContentLoaded", function () {
//   const tabButtons = document.querySelectorAll(".tab-btn");
//   const tabPanes = document.querySelectorAll(".tab-pane");

//   // Function to switch tabs
//   function switchTab(tabId) {
//     // Hide all tab panes
//     tabPanes.forEach((pane) => {
//       pane.classList.add("hidden", "opacity-0");
//       pane.classList.remove("block", "opacity-100");
//     });

//     // Reset all tab buttons to default style
//     tabButtons.forEach((btn) => {
//       btn.classList.remove("bg-secondary-600", "text-white", "active");
//       btn.classList.add("bg-white", "text-gray-700");
//     });

//     // Show the selected tab pane
//     const selectedPane = document.getElementById(tabId);
//     if (selectedPane) {
//       selectedPane.classList.remove("hidden", "opacity-0");
//       selectedPane.classList.add("block", "opacity-100");
//     }

//     // Highlight the clicked button
//     const selectedButton = document.querySelector(
//       `.tab-btn[data-tab="${tabId}"]`
//     );
//     if (selectedButton) {
//       selectedButton.classList.remove("bg-white", "text-gray-700");
//       selectedButton.classList.add("bg-secondary-600", "text-white", "active");
//     }
//   }

//   // Add click event listeners to tab buttons
//   tabButtons.forEach((button) => {
//     button.addEventListener("click", function () {
//       const tabId = this.getAttribute("data-tab");
//       switchTab(tabId);
//     });
//   });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   const tabButtons = document.querySelectorAll(".tab-btn");
//   const tabPanes = document.querySelectorAll(".tab-pane");

//   // Function to switch tabs
//   function switchTab(tabId) {
//     // Hide all tab panes
//     tabPanes.forEach((pane) => {
//       pane.classList.add("hidden", "opacity-0");
//       pane.classList.remove("block", "opacity-100");
//     });

//     // Reset all tab buttons to default style
//     tabButtons.forEach((btn) => {
//       btn.classList.remove("bg-secondary-600", "text-white", "active");
//       btn.classList.add("bg-white", "text-gray-700");
//     });

//     // Show the selected tab pane
//     const selectedPane = document.getElementById(tabId);
//     if (selectedPane) {
//       selectedPane.classList.remove("hidden", "opacity-0");
//       selectedPane.classList.add("block", "opacity-100");
//     }

//     // Highlight the clicked button
//     const selectedButton = document.querySelector(
//       `.tab-btn[data-tab="${tabId}"]`
//     );
//     if (selectedButton) {
//       selectedButton.classList.remove("bg-white", "text-gray-700");
//       selectedButton.classList.add("bg-secondary-600", "text-white", "active");
//     }
//   }

//   // Add click event listeners to tab buttons
//   tabButtons.forEach((button) => {
//     button.addEventListener("click", function () {
//       const tabId = this.getAttribute("data-tab");
//       switchTab(tabId);
//     });
//   });
// });


