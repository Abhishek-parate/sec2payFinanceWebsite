<header id="main-header" class="fixed top-0 left-0 right-0 z-50 bg-white-500 backdrop-blur-lg py-2 border-b border-white/20 transition-shadow duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between relative">
    <!-- Logo -->
    <div class="w-2/7">
      <a href="index">
        <img src="./assets/images/logo.png" alt="Sec2Pay Logo">
      </a>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex items-center space-x-6">
      <ul class="hidden md:flex items-center space-x-6">
        <!-- Platform Menu -->
        <li class="group">
          <button class="flex items-center text-gray-700 hover:text-primary-600 font-medium cursor-pointer">
            Platform
            <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-200 group-hover:rotate-180"></i>
          </button>
          <div id="platform-menu" class="absolute top-0 left-1/2 -translate-x-1/2 mt-12 w-full max-w-screen-xl mx-auto bg-white border border-gray-200 rounded-xl shadow-2xl opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 z-50 overflow-hidden">
            <div class="flex flex-col md:flex-row w-full overflow-hidden">
              <!-- Platform Menu Items -->
              <ul class="md:w-[280px] flex-shrink-0 text-right p-6 space-y-4 bg-white border-r overflow-y-auto">
                <!-- BEGIN PLATFORM MENU ITEMS -->
                <li data-target="multi" class="menu-item text-red-600 font-semibold flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">Multi Services Platform</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="credit" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">ONDC Credit</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="ecom" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">ONDC E-Commerce</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="wealth" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">Wealth Management Services</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>                
                <li class="pt-10 text-xs uppercase text-gray-400">Always updating</li>
                <li class="flex items-center text-sm text-gray-600">
                  <span class="w-full text-right">Update analytics bug</span><i class="fas fa-check-circle text-primary-600 ml-2"></i>
                </li>
                <li class="flex items-center text-sm text-gray-600">
                  <span class="w-full text-right">Remap data with Cloud</span><i class="fas fa-check-circle text-primary-600 ml-2"></i>
                </li>
              </ul>

              <div class="w-full md:w-4/6 p-6 bg-gray-50 overflow-y-auto max-h-[90vh]">
                <div data-content="multi" class="content-panel">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase">Multi Services Platform</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="banking-platform-service.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-university text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Banking services Platform</h4>
                          <p class="text-sm text-gray-600">Turn Your Business Into a Banking Powerhouse</p>
                        </div>
                      </a>
                      <a href="travel-platform-service.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-plane text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Travel services Platform</h4>
                          <p class="text-sm text-gray-600">Build Your Travel Business</p>
                        </div>
                      </a>
                      <a href="utility-service.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-mobile-alt text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Utility services Platform</h4>
                          <p class="text-sm text-gray-600">Make Bill Payments Simple</p>
                        </div>
                      </a>
                    </div>
                    <div class="space-y-4">
                      <a href="e-governance.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-id-card text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">E-Governance</h4>
                          <p class="text-sm text-gray-600">PAN Card Applications</p>
                        </div>
                      </a>
                      <a href="insurance.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-shield-alt text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Insurance Services</h4>
                          <p class="text-sm text-gray-600">Build Your Insurance Portfolio</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- ONDC Credit -->
                <div data-content="credit" class="content-panel hidden">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">ONDC Credit</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="ondc-credit-service-platform.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-chart-line text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC Credit Services Platform</h4>
                          <p class="text-sm text-gray-600">Fuel Growth with Smart Credit Solutions</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- ONDC E-Commerce -->
                <div data-content="ecom" class="content-panel hidden space-y-4">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase">ONDC E-Commerce</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="ondc-e-commerce-seller-platform.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-store text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC E-Commerce Seller</h4>
                          <p class="text-sm text-gray-600">Help Sellers Reach New Markets</p>
                        </div>
                      </a>
                      <a href="ondc-ecommerce-buyer.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-shopping-bag text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC E-Commerce Buyer</h4>
                          <p class="text-sm text-gray-600">Bring Local Stores to Buyers Everywhere</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="space-y-1">
                    <a href="ondc-e-commerce-logistic-franchise.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                      <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-truck text-primary-600 text-xl"></i></div>
                      <div>
                        <h4 class="font-semibold text-gray-900">ONDC Logistics Franchise Platform</h4>
                        <p class="text-sm text-gray-600">Build a Reliable Delivery Network</p>
                      </div>
                    </a>
                  </div>
                </div>

                <!-- Wealth Management -->
                <div data-content="wealth" class="content-panel hidden">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">Wealth Management</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="multi-service.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-piggy-bank text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Mutual Fund Platform</h4>
                          <p class="text-sm text-gray-600">Launch Your Mutual Fund Distribution Business</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- END PLATFORM CONTENT -->
              </div>
            </div>
          </div>
        </li>

        <!-- Services Menu -->
        <li class="group">
          <button class="flex items-center text-gray-700 hover:text-primary-600 font-medium cursor-pointer">
            Services
            <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-200 group-hover:rotate-180"></i>
          </button>
          <div id="services-menu" class="absolute top-0 left-1/2 -translate-x-1/2 mt-12 w-full max-w-screen-xl mx-auto bg-white border border-gray-200 rounded-xl shadow-2xl opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 z-50 overflow-hidden">
            <div class="flex flex-col md:flex-row w-full overflow-hidden">
              <!-- Services Menu Items -->
              <ul class="md:w-[280px] flex-shrink-0 text-right p-6 space-y-4 bg-white border-r overflow-y-auto">
                <!-- BEGIN SERVICES MENU ITEMS -->
                <li data-target="bank-ps" class="menu-item text-red-600 font-semibold flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">Banking Platform Services</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="trav-ps" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">Travel Platform Services</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="util-ps" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">Utility Payment Platform Services</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="egov-ps" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">E-Governance Platform Services</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="ins-ps" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">Insurance Platform Services</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <li data-target="ondc-ser" class="menu-item text-gray-700 flex justify-between items-center cursor-pointer">
                  <span class="w-full text-right">ONDC services</span><i class="fas fa-chevron-right text-xs ml-2"></i>
                </li>
                <!-- END SERVICES MENU ITEMS -->
              </ul>

              <!-- Services Content Panels -->
              <div class="w-full md:w-4/6 p-6 bg-gray-50 overflow-y-auto max-h-[90vh]">
                <!-- BEGIN SERVICES CONTENT -->
                <!-- Banking Platform Services -->
                <div data-content="bank-ps" class="content-panel">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase">Banking Platform services</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="aeps.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-university text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">AEPS</h4>
                          <p class="text-sm text-gray-600">Banking point for instant cash transactions</p>
                        </div>
                      </a>
                      <a href="aadhar.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-credit-card text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Aadhar Pay</h4>
                          <p class="text-sm text-gray-600">Turn your shop into a digital banking point</p>
                        </div>
                      </a>
                      <a href="micro-atm.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-atm text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Micro ATM</h4>
                          <p class="text-sm text-gray-600">Turn Your Shop into a Bank Branch with MicroATM</p>
                        </div>
                      </a>
                      <a href="dmt.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-exchange-alt text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">DMT</h4>
                          <p class="text-sm text-gray-600">Domestic Money Transfer</p>
                        </div>
                      </a>
                    </div>
                    <div class="space-y-1">
                      <a href="cash-management-system.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-money-bill-wave text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">CMS</h4>
                          <p class="text-sm text-gray-600">Cash Management System</p>
                        </div>
                      </a>
                      <a href="account-opening.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-user-plus text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Account Opening</h4>
                          <p class="text-sm text-gray-600">Turn Your Store into a Digital Bank Branch</p>
                        </div>
                      </a>
                      <a href="upi-cash-@pos.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-qrcode text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">UPI Cash @POS</h4>
                          <p class="text-sm text-gray-600">Transform Your POS into a Cash Point</p>
                        </div>
                      </a>
                      <a href="indo-nepal-dmt.php" target="_blank" class="flex items-start p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-globe-asia text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">INDO-NEPAL DMT</h4>
                          <p class="text-sm text-gray-600">Send Money to Nepal, Simply & Securely</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- Travel Platform Services -->
                <div data-content="trav-ps" class="content-panel hidden">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">Travel Platform Services</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="irctc.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-train text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">IRCTC Agent ID</h4>
                          <p class="text-sm text-gray-600">IRCTC Agent ID Platform</p>
                        </div>
                      </a>
                    </div>
                    <div class="space-y-1">
                      <a href="travel-booking-platform.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-plane-departure text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Flight /Bus Booking</h4>
                          <p class="text-sm text-gray-600">Travel Booking Platform</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- Utility Payment Platform Services -->
                <div data-content="util-ps" class="content-panel hidden space-y-4">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase">Utility Payment Platform Services</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="recharge-payment.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-mobile-alt text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Recharge</h4>
                          <p class="text-sm text-gray-600">Mobile & DTH Recharge Platform</p>
                        </div>
                      </a>
                      <a href="bbps.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-file-invoice-dollar text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">BBPS</h4>
                          <p class="text-sm text-gray-600">Pay Bills, Stay Ahead</p>
                        </div>
                      </a>
                      <a href="#" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-shield-alt text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">LIC Pay</h4>
                          <p class="text-sm text-gray-600">LIC Premium Payment Platform</p>
                        </div>
                      </a>
                    </div>
                    <div class="space-y-1">
                      <a href="fastag-recharge.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-tag text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Fastag Recharge</h4>
                          <p class="text-sm text-gray-600">Your Simple FASTag Solution</p>
                        </div>
                      </a>
                      <a href="credit-card-bill-payment.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-credit-card text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">CC Bill Pay</h4>
                          <p class="text-sm text-gray-600">Credit Card Bill Payment Platform</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- E-Governance Platform Services -->
                <div data-content="egov-ps" class="content-panel hidden">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">E-Governance Platform Services</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="pan-uti.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-id-card text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">PAN UTI</h4>
                          <p class="text-sm text-gray-600">Your Trusted PAN Card Service Partner</p>
                        </div>
                      </a>
                    </div>
                    <div class="space-y-1">
                      <a href="pan-nsdl.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-id-card-alt text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">NSDL PAN</h4>
                          <p class="text-sm text-gray-600">PAN Card Application Made Simple</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- Insurance Platform Services -->
                <div data-content="ins-ps" class="content-panel hidden">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">Insurance Platform Services</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="motor-insurance.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-car text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Motor Insurance</h4>
                          <p class="text-sm text-gray-600">Grow Your Business with Motor Insurance Services</p>
                        </div>
                      </a>
                      <a href="life-insurance.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-heartbeat text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Life Insurance</h4>
                          <p class="text-sm text-gray-600">Life Insurance Platform Services</p>
                        </div>
                      </a>
                    </div>
                    <div class="space-y-1">
                      <a href="health-insurance.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-hospital text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Health Insurance</h4>
                          <p class="text-sm text-gray-600">Digital Health Insurance Solutions</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- ONDC Services -->
                <div data-content="ondc-ser" class="content-panel hidden">
                  <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">ONDC Platform services</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="space-y-1">
                      <a href="ondc-e-commerce-seller-platform.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-store text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC E-Commerce Seller Onboarding</h4>
                          <p class="text-sm text-gray-600">Empowering Sellers Through Your Business</p>
                        </div>
                      </a>
                      <a href="ondc-ecommerce-buyer.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-shopping-cart text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC E-Commerce Buyer Refer</h4>
                          <p class="text-sm text-gray-600">Serve Buyers with Local Convenience</p>
                        </div>
                      </a>
                    </div>
                    <div class="space-y-1">
                      <a href="ondc-e-commerce-logistic-franchise.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-truck text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC Logistics Franchise</h4>
                          <p class="text-sm text-gray-600">Deliver Smarter Through Your Platform</p>
                        </div>
                      </a>
                      <a href="ondc-credit-in-a-box.php" target="_blank" class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50">
                        <div class="p-3 bg-primary-50 rounded-lg"><i class="fas fa-credit-card text-primary-600 text-xl"></i></div>
                        <div>
                          <h4 class="font-semibold text-gray-900">ONDC Credit Services</h4>
                          <p class="text-sm text-gray-600">Credit Tailored for Your Business Growth</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- END SERVICES CONTENT -->
              </div>
            </div>
          </div>
        </li>

        <!-- Simple Menu Items -->
        <li><a href="#" target="_blank" class="text-gray-700 hover:text-primary-600 font-medium">Who We Serve</a></li>
        <li><a href="#" target="_blank" class="text-gray-700 hover:text-primary-600 font-medium">Company</a></li>
        <li><a href="#" target="_blank" class="text-gray-700 hover:text-primary-600 font-medium">Contact Us</a></li>
      </ul>
    </nav>

    <!-- Call to Actions -->
    <div class="hidden md:flex items-center space-x-4">
      <a href="https://app.sec2pay.in/?src=website" target="_blank" class="px-5 py-2.5 border border-secondary-500 text-secondary-500 rounded-lg text-sm font-semibold hover:bg-secondary-50 transition">GET STARTED</a>
      <a href="contact-us.php" target="_blank" class="px-5 py-2.5 bg-secondary-500 text-white rounded-lg text-sm font-semibold hover:shadow-md transition">FREE LIVE DEMO</a>
    </div>

    <!-- Mobile Toggle Button -->
    <button type="button" id="mobile-toggle" class="md:hidden p-2 text-primary-600 hover:text-primary-700 focus:outline-none">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

  </div>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed inset-0 z-40 bg-white p-4 transform translate-x-full transition-transform duration-300 overflow-y-auto">
  <div class="flex justify-between items-center mb-6">
    <a href="index">
      <img src="./assets/images/logo.png" alt="Sec2Pay Logo" class="h-8">
    </a>
    <button id="mobile-close" class="text-gray-700 focus:outline-none">
      <i class="fas fa-times text-2xl"></i>
    </button>
  </div>

  <nav class="mobile-navigation space-y-2">
    <!-- Platform Accordion -->
    <div class="mobile-menu-group border-b border-gray-100 pb-2">
      <button class="mobile-menu-toggle w-full flex justify-between items-center py-3 px-2 text-gray-700 font-medium">
        <span>Platform</span>
        <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
      </button>
      <div class="mobile-submenu hidden pl-4">
        <div class="space-y-3 py-2">
          <!-- Multi Services Platform -->
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">Multi Services Platform</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <!-- BEGIN MOBILE PLATFORM CONTENT - MULTI SERVICES -->
                <a href="banking-platform-service.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-university text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Banking services Platform</h4>
                    <p class="text-sm text-gray-600">Turn Your Business Into a Banking Powerhouse</p>
                  </div>
                </a>
                <a href="travel-platform-service.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-plane text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Travel services Platform</h4>
                    <p class="text-sm text-gray-600">Build Your Travel Business</p>
                  </div>
                </a>
                <a href="utility-service.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-mobile-alt text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Utility services Platform</h4>
                    <p class="text-sm text-gray-600">Make Bill Payments Simple</p>
                  </div>
                </a>
                <a href="e-governance.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-id-card text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">E-Governance</h4>
                    <p class="text-sm text-gray-600">PAN Card Applications</p>
                  </div>
                </a>
                <a href="insurance.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-shield-alt text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Insurance Services</h4>
                    <p class="text-sm text-gray-600">Build Your Insurance Portfolio</p>
                  </div>
                </a>
                <!-- END MOBILE PLATFORM CONTENT - MULTI SERVICES -->
              </div>
            </div>
          </div>
          
          <!-- ONDC Credit -->
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">ONDC Credit</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <!-- BEGIN MOBILE PLATFORM CONTENT - ONDC CREDIT -->
                <a href="ondc-credit-service-platform.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-chart-line text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC Credit Services Platform</h4>
                    <p class="text-sm text-gray-600">Fuel Growth with Smart Credit Solutions</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">ONDC E-Commerce</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <a href="ondc-e-commerce-seller-platform.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-store text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC E-Commerce Seller</h4>
                    <p class="text-sm text-gray-600">Help Sellers Reach New Markets</p>
                  </div>
                </a>
                <a href="ondc-ecommerce-buyer.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-shopping-bag text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC E-Commerce Buyer</h4>
                    <p class="text-sm text-gray-600">Bring Local Stores to Buyers Everywhere</p>
                  </div>
                </a>
                <a href="ondc-e-commerce-logistic-franchise.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-truck text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC Logistics Franchise Platform</h4>
                    <p class="text-sm text-gray-600">Build a Reliable Delivery Network</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">Wealth Management Services</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <a href="multi-service.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-piggy-bank text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Mutual Fund Platform</h4>
                    <p class="text-sm text-gray-600">Launch Your Mutual Fund Distribution Business</p>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="pt-4">
            <p class="text-xs uppercase text-gray-400">Always updating</p>
            <div class="flex items-center text-sm text-gray-600 mt-2">
              <span>Update analytics bug</span>
              <i class="fas fa-check-circle text-primary-600 ml-2"></i>
            </div>
            <div class="flex items-center text-sm text-gray-600 mt-1">
              <span>Remap data with Cloud</span>
              <i class="fas fa-check-circle text-primary-600 ml-2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Services Accordion -->
    <div class="mobile-menu-group border-b border-gray-100 pb-2">
      <button class="mobile-menu-toggle w-full flex justify-between items-center py-3 px-2 text-gray-700 font-medium">
        <span>Services</span>
        <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
      </button>
      <div class="mobile-submenu hidden pl-4">
        <div class="space-y-3 py-2">
          <!-- Banking Platform Services -->
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">Banking Platform Services</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <!-- BEGIN MOBILE SERVICES CONTENT - BANKING -->
                <a href="aeps.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-university text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">AEPS</h4>
                    <p class="text-sm text-gray-600">Banking point for instant cash transactions</p>
                  </div>
                </a>
                <a href="aadhar.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-credit-card text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Aadhar Pay</h4>
                    <p class="text-sm text-gray-600">Turn your shop into a digital banking point</p>
                  </div>
                </a>
                <a href="micro-atm.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-atm text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Micro ATM</h4>
                    <p class="text-sm text-gray-600">Turn Your Shop into a Bank Branch with MicroATM</p>
                  </div>
                </a>
                <a href="dmt.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-exchange-alt text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">DMT</h4>
                    <p class="text-sm text-gray-600">Domestic Money Transfer</p>
                  </div>
                </a>
                <a href="cash-management-system.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-money-bill-wave text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">CMS</h4>
                    <p class="text-sm text-gray-600">Cash Management System</p>
                  </div>
                </a>
                <a href="account-opening.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-user-plus text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Account Opening</h4>
                    <p class="text-sm text-gray-600">Turn Your Store into a Digital Bank Branch</p>
                  </div>
                </a>
                <a href="upi-cash-@pos.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-qrcode text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">UPI Cash @POS</h4>
                    <p class="text-sm text-gray-600">Transform Your POS into a Cash Point</p>
                  </div>
                </a>
                <a href="indo-nepal-dmt.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-globe-asia text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">INDO-NEPAL DMT</h4>
                    <p class="text-sm text-gray-600">Send Money to Nepal, Simply & Securely</p>
                  </div>
                </a>
                <!-- END MOBILE SERVICES CONTENT - BANKING -->
              </div>
            </div>
          </div>
          
          <!-- Travel Platform Services -->
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">Travel Platform Services</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <!-- BEGIN MOBILE SERVICES CONTENT - TRAVEL -->
                <a href="irctc.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-train text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">IRCTC Agent ID</h4>
                    <p class="text-sm text-gray-600">IRCTC Agent ID Platform</p>
                  </div>
                </a>
                <a href="travel-booking-platform.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-plane-departure text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Flight /Bus Booking</h4>
                    <p class="text-sm text-gray-600">Travel Booking Platform</p>
                  </div>
                </a>
                <!-- END MOBILE SERVICES CONTENT - TRAVEL -->
              </div>
            </div>
          </div>
          
          <!-- Utility Payment Platform Services -->
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">Utility Payment Platform Services</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <!-- BEGIN MOBILE SERVICES CONTENT - UTILITY -->
                <a href="recharge-payment.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-mobile-alt text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Recharge</h4>
                    <p class="text-sm text-gray-600">Mobile & DTH Recharge Platform</p>
                  </div>
                </a>
                <a href="bbps.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-file-invoice-dollar text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">BBPS</h4>
                    <p class="text-sm text-gray-600">Pay Bills, Stay Ahead</p>
                  </div>
                </a>
                <a href="#" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-shield-alt text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">LIC Pay</h4>
                    <p class="text-sm text-gray-600">LIC Premium Payment Platform</p>
                  </div>
                </a>
                <a href="fastag-recharge.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-tag text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Fastag Recharge</h4>
                    <p class="text-sm text-gray-600">Your Simple FASTag Solution</p>
                  </div>
                </a>
                <a href="credit-card-bill-payment.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-credit-card text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">CC Bill Pay</h4>
                    <p class="text-sm text-gray-600">Credit Card Bill Payment Platform</p>
                  </div>
                </a>
                <!-- END MOBILE SERVICES CONTENT - UTILITY -->
              </div>
            </div>
          </div>
          
          <!-- E-Governance Platform Services -->
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">E-Governance Platform Services</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <!-- BEGIN MOBILE SERVICES CONTENT - E-GOVERNANCE -->
                <a href="pan-uti.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-id-card text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">PAN UTI</h4>
                    <p class="text-sm text-gray-600">Your Trusted PAN Card Service Partner</p>
                  </div>
                </a>
                <a href="pan-nsdl.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-id-card-alt text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">NSDL PAN</h4>
                    <p class="text-sm text-gray-600">PAN Card Application Made Simple</p>
                  </div>
                </a>
                <!-- END MOBILE SERVICES CONTENT - E-GOVERNANCE -->
              </div>
            </div>
          </div>
          
          <!-- Insurance Platform Services -->
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">Insurance Platform Services</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <!-- BEGIN MOBILE SERVICES CONTENT - INSURANCE -->
                <a href="motor-insurance.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-car text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Motor Insurance</h4>
                    <p class="text-sm text-gray-600">Grow Your Business with Motor Insurance Services</p>
                  </div>
                </a>
                <a href="life-insurance.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-heartbeat text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Life Insurance</h4>
                    <p class="text-sm text-gray-600">Life Insurance Platform Services</p>
                  </div>
                </a>
                <a href="health-insurance.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-hospital text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Health Insurance</h4>
                    <p class="text-sm text-gray-600">Digital Health Insurance Solutions</p>
                  </div>
                </a>
                <!-- END MOBILE SERVICES CONTENT - INSURANCE -->
              </div>
            </div>
          </div>
          
          <!-- ONDC Services -->
          <div class="mobile-submenu-group">
            <button class="mobile-submenu-toggle w-full flex justify-between items-center py-2 px-2 text-gray-700">
              <span class="font-medium">ONDC Services</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="mobile-submenu-content hidden pl-2">
              <div class="space-y-3 py-2">
                <!-- BEGIN MOBILE SERVICES CONTENT - ONDC -->
                <a href="ondc-e-commerce-seller-platform.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-store text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC E-Commerce Seller Onboarding</h4>
                    <p class="text-sm text-gray-600">Empowering Sellers Through Your Business</p>
                  </div>
                </a>
                <a href="ondc-ecommerce-buyer.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-shopping-cart text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC E-Commerce Buyer Refer</h4>
                    <p class="text-sm text-gray-600">Serve Buyers with Local Convenience</p>
                  </div>
                </a>
                <a href="ondc-e-commerce-logistic-franchise.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-truck text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC Logistics Franchise</h4>
                    <p class="text-sm text-gray-600">Deliver Smarter Through Your Platform</p>
                  </div>
                </a>
                <a href="ondc-credit-in-a-box.php" target="_blank" class="flex items-start p-2 rounded-lg hover:bg-gray-50">
                  <div class="p-2 bg-primary-50 rounded-lg mr-3">
                    <i class="fas fa-credit-card text-primary-600"></i>
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">ONDC Credit Services</h4>
                    <p class="text-sm text-gray-600">Credit Tailored for Your Business Growth</p>
                  </div>
                </a>
                <!-- END MOBILE SERVICES CONTENT - ONDC -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Simple Menu Items -->
    <a href="#" target="_blank" class="block py-3 px-2 text-gray-700 font-medium border-b border-gray-100">Who We Serve</a>
    <a href="#" target="_blank" class="block py-3 px-2 text-gray-700 font-medium border-b border-gray-100">Company</a>
    <a href="#" target="_blank" class="block py-3 px-2 text-gray-700 font-medium border-b border-gray-100">Contact Us</a>
  </nav>

  <!-- Mobile CTA Buttons -->
  <div class="mt-8 space-y-3">
    <a href="https://app.sec2pay.in/?src=website" target="_blank" class="block w-full text-center px-5 py-3 border border-secondary-500 text-secondary-500 rounded-lg font-semibold hover:bg-secondary-50 transition">GET STARTED</a>
    <a href="contact-us.php" target="_blank" class="block w-full text-center px-5 py-3 bg-secondary-500 text-white rounded-lg font-semibold hover:shadow-md transition">FREE LIVE DEMO</a>
  </div>
</div>

<script>
  // Initialize active tabs for both menus
  function initializeMenu(menuId) {
    const menu = document.querySelector(`#${menuId}`);
    const firstItem = menu.querySelector('.menu-item');
    const firstContent = menu.querySelector('.content-panel');

    // Set first tab as active if none exist
    if (!menu.querySelector('.menu-item.text-red-600')) {
      firstItem.classList.add('text-red-600', 'font-semibold');
      firstContent.classList.remove('hidden');
    }

    // Set up click handlers for this specific menu
    menu.querySelectorAll('.menu-item').forEach(item => {
      item.addEventListener('click', () => {
        // Remove active states from all items in this menu
        menu.querySelectorAll('.menu-item').forEach(i => {
          i.classList.remove('text-red-600', 'font-semibold');
          i.classList.add('text-gray-700');
        });

        // Add active state to clicked item
        item.classList.add('text-red-600', 'font-semibold');
        item.classList.remove('text-gray-700');

        // Show corresponding content
        const target = item.dataset.target;
        menu.querySelectorAll('.content-panel').forEach(panel => {
          panel.classList.toggle('hidden', panel.dataset.content !== target);
        });
      });
    });
  }

  // Initialize both menus when DOM loads
  document.addEventListener('DOMContentLoaded', () => {
    initializeMenu('platform-menu');
    initializeMenu('services-menu');
  });

  // Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobile-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileClose = document.getElementById('mobile-close');
  
  mobileToggle.addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
  });
  
  mobileClose.addEventListener('click', () => {
    mobileMenu.classList.add('translate-x-full');
    document.body.style.overflow = '';
  });

  // Mobile Accordion Functionality
  document.querySelectorAll('.mobile-menu-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      const parent = e.currentTarget.closest('.mobile-menu-group');
      const submenu = parent.querySelector('.mobile-submenu');
      const icon = parent.querySelector('i');
      
      submenu.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
      
      // Close other main menus
      document.querySelectorAll('.mobile-menu-group').forEach(group => {
        if (group !== parent) {
          group.querySelector('.mobile-submenu').classList.add('hidden');
          group.querySelector('i').classList.remove('rotate-180');
        }
      });
    });
  });

  // Mobile Submenu Accordion
  document.querySelectorAll('.mobile-submenu-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      const parent = e.currentTarget.closest('.mobile-submenu-group');
      const content = parent.querySelector('.mobile-submenu-content');
      const icon = parent.querySelector('i');
      
      content.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    });
  });

  // Close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!mobileMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
      mobileMenu.classList.add('translate-x-full');
      document.body.style.overflow = '';
    }
  });

  // Close on escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      mobileMenu.classList.add('translate-x-full');
      document.body.style.overflow = '';
    }
  });
  
</script>

<style>
  .rotate-180 {
    transform: rotate(180deg);
  }
  .mobile-submenu {
    transition: all 0.3s ease;
  }
  .mobile-submenu-content {
    transition: all 0.3s ease;
  }

    div#platform-menu,
    div#services-menu {
      width: max-content;
    }
  </style>