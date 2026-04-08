<nav class="bg-white dark:bg-gray-800 shadow-md fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo and Brand -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-primary-dark dark:text-primary font-bold text-2xl">BAJANKO <span class="bg-gray-800 text-white px-2 rounded">JAITEH</span></span>
                </div>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="/" class="<?php echo e(request()->is('/') || request()->is('') ? 'text-primary-light dark:text-primary font-medium' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary'); ?> px-3 py-2 rounded-md text-base hover:bg-indigo-50 dark:hover:bg-gray-700">Home</a>
                    <a href="/about" class="<?php echo e(request()->is('about') ? 'text-primary-light dark:text-primary font-medium' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary'); ?> px-3 py-2 rounded-md text-base hover:bg-indigo-50 dark:hover:bg-gray-700">About</a>
                    <a href="/projects" class="<?php echo e(request()->is('projects') ? 'text-primary-light dark:text-primary font-medium' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary'); ?> px-3 py-2 rounded-md text-base hover:bg-indigo-50 dark:hover:bg-gray-700">Projects</a>
                    <a href="/skills" class="<?php echo e(request()->is('skills') ? 'text-primary-light dark:text-primary font-medium' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary'); ?> px-3 py-2 rounded-md text-base hover:bg-indigo-50 dark:hover:bg-gray-700">Skills</a>
                    
                    <a href="/contact" class="<?php echo e(request()->is('contact') ? 'text-primary-light dark:text-primary font-medium' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary'); ?> px-3 py-2 rounded-md text-base hover:bg-indigo-50 dark:hover:bg-gray-700">Contact</a>
                </div>
                <?php echo $__env->make('components.toggle', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
          
            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary inline-flex items-center justify-center p-2 rounded-md focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="<?php echo e(request()->is('/') || request()->is('') ? 'text-primary-light dark:text-primary' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary hover:bg-indigo-50 dark:hover:bg-gray-700'); ?> block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="/about" class="<?php echo e(request()->is('about') ? 'text-primary-light dark:text-primary' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary hover:bg-indigo-50 dark:hover:bg-gray-700'); ?> block px-3 py-2 rounded-md text-base font-medium">About</a>
            <a href="/projects" class="<?php echo e(request()->is('projects') ? 'text-primary-light dark:text-primary' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary hover:bg-indigo-50 dark:hover:bg-gray-700'); ?> block px-3 py-2 rounded-md text-base font-medium">Projects</a>
            <a href="/skills" class="<?php echo e(request()->is('skills') ? 'text-primary-light dark:text-primary' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary hover:bg-indigo-50 dark:hover:bg-gray-700'); ?> block px-3 py-2 rounded-md text-base font-medium">Skills</a>
            <a href="/tasks" class="<?php echo e(request()->is('tasks') ? 'text-primary-light dark:text-primary' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary hover:bg-indigo-50 dark:hover:bg-gray-700'); ?> block px-3 py-2 rounded-md text-base font-medium">Tasks</a>
            <a href="/contact" class="<?php echo e(request()->is('contact') ? 'text-primary-light dark:text-primary' : 'text-gray-700 dark:text-gray-300 hover:text-primary-dark dark:hover:text-primary hover:bg-indigo-50 dark:hover:bg-gray-700'); ?> block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            
            <!-- Mobile theme toggle -->
            <div class="px-5 pt-4 pb-2 border-t border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Switch Theme</span>
                    <button 
                        id="mobile-theme-toggle" 
                        type="button" 
                        aria-label="Toggle between dark and light mode" 
                        class="inline-flex items-center justify-center w-10 h-10 bg-white dark:bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-300 dark:border-gray-600 shadow-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                    >
                        <!-- Moon Icon (Light Mode) -->
                        <svg id="mobile-moon-icon" class="w-5 h-5 text-blue-600 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        
                        <!-- Sun Icon (Dark Mode) -->
                        <svg id="mobile-sun-icon" class="hidden w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>  
</nav><?php /**PATH /Users/bajankojaiteh/Herd/PortfolioWebsite-production/resources/views/components/navbar.blade.php ENDPATH**/ ?>