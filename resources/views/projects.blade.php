@extends('main')
@section('content')
    <!-- Featured Projects Slideshow -->
    <div class="py-14 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-6 text-center">
                Featured <span class="text-[#1d4ed8] dark:text-blue-400">Projects</span>
            </h2>
            
            <!-- Slideshow Container -->
            <div class="relative rounded-lg overflow-hidden shadow-xl">
                <!-- Slides Container -->
                <div id="projects-slider" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Slide 1 -->
                    <div class="project-slide w-full flex-shrink-0">
                        <div class="relative h-[450px]">
                            <img src="{{ asset('images/q.png') }}" alt="Featured Project 1" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent">
                                <div class="absolute bottom-0 left-0 p-8 w-full">
                                    <span class="bg-[#1d4ed8] text-white px-3 py-1 rounded-full text-sm font-medium mb-4 inline-block">Web App</span>
                                    <h3 class="text-3xl font-bold text-white mb-2 ">Body Mass Index (BMI) Calculator</h3>
                                    <p class="text-white/80 text-lg mb-4 max-w-2xl">A comprehensive dashboard for calculating the body mass</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Html</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Css</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Javascript</span>
                                       
                                    </div>
                                    <div class="flex space-x-3">
                                        <a href="https://bmi-calculator-nu-jade.vercel.app/" class="px-6 py-2 bg-[#1d4ed8] text-white rounded-md text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="#" class="px-6 py-2 bg-white/10 hover:bg-white/20 text-white rounded-md text-sm transition duration-300">Repository</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 2 -->
                    <div class="project-slide w-full flex-shrink-0">
                        <div class="relative h-[450px]">
                            <img src="{{ asset('images/cal3.png') }}" alt="Featured Project 2" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent">
                                <div class="absolute bottom-0 left-0 p-8 w-full">
                                    <span class="bg-[#1d4ed8] text-white px-3 py-1 rounded-full text-sm font-medium mb-4 inline-block">Web App</span>
                                    <h3 class="text-3xl font-bold text-white mb-2">Calculator App</h3>
                                    <p class="text-white/80 text-lg mb-4 max-w-2xl">A web app calculator that provides simple and advanced mathematical functions such as addition,subtraction,multiplication etc.</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Html</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Css</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Vanilar Javascript</span>
                                        
                                    </div>
                                    <div class="flex space-x-3">
                                        <a href="calculator-five-rho-72.vercel.app" class="px-6 py-2 bg-[#1d4ed8] text-white rounded-md text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="https://github.com/Bajanko/calculator.git" class="px-6 py-2 bg-white/10 hover:bg-white/20 text-white rounded-md text-sm transition duration-300">Repository</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 3 -->
                    <div class="project-slide w-full flex-shrink-0">
                        <div class="relative h-[450px]">
                            <img src="{{ asset('images/pp.png') }}" alt="Featured Project 3" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent">
                                <div class="absolute bottom-0 left-0 p-8 w-full">
                                    <span class="bg-[#1d4ed8] text-white px-3 py-1 rounded-full text-sm font-medium mb-4 inline-block">Mobile App</span>
                                    <h3 class="text-3xl font-bold text-white mb-2">Github User App</h3>
                                    <p class="text-white/80 text-lg mb-4 max-w-2xl">A comprehensive mobile app for searching Github Users</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">React Js</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Tailwind CSS</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Github API</span>

                                    </div>
                                    <div class="flex space-x-3">
                                        <a href="https://janko-project.vercel.app/" class="px-6 py-2 bg-[#1d4ed8] text-white rounded-md text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="https://github.com/Bajanko/Github-user-App.git" class="px-6 py-2 bg-white/10 hover:bg-white/20 text-white rounded-md text-sm transition duration-300">Repository</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <!-- Slide 4 -->
                    <div class="project-slide w-full flex-shrink-0">
                        <div class="relative h-[450px]">
                            <img src="{{ asset('images/rr.png') }}" alt="Featured Project 4" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent">
                                <div class="absolute bottom-0 left-0 p-8 w-full">
                                    <span class="bg-[#1d4ed8] text-white px-3 py-1 rounded-full text-sm font-medium mb-4 inline-block">Web App</span>
                                    <h3 class="text-3xl font-bold text-white mb-2">Coin Toast App</h3>
                                    <p class="text-white/80 text-lg mb-4 max-w-2xl">Is a web App that put a classic coin toss whether you are settling friendly debates or just looking for a quick thrill, coin toast delivers fair, randomness and playful heads or tails.</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Html</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Css</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Vanilar Javascrip</span>
                                      
                                    </div>
                                    <div class="flex space-x-3">
                                        <a href="https://rock-paper-scissor-game-o5wh.vercel.app/" class="px-6 py-2 bg-[#1d4ed8] text-white rounded-md text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="https://github.com/Bajanko/Rock-Paper-Scissor-Game.git" class="px-6 py-2 bg-white/10 hover:bg-white/20 text-white rounded-md text-sm transition duration-300">Repository</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                   
                    
                    
                </div>
                
                <!-- Slideshow Controls -->
                <div class="absolute top-1/2 left-4 transform -translate-y-1/2">
                    <button id="prev-project" class="p-2 rounded-full bg-black/30 text-white hover:bg-[#1d4ed8] transition duration-300 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>
                <div class="absolute top-1/2 right-4 transform -translate-y-1/2">
                    <button id="next-project" class="p-2 rounded-full bg-black/30 text-white hover:bg-[#1d4ed8] transition duration-300 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                
                <!-- Dots Navigation -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-10 flex space-x-2">
                    <div id="project-dots" class="flex space-x-2">
                        <button class="w-3 h-3 rounded-full bg-white opacity-100" data-index="0"></button>
                        <button class="w-3 h-3 rounded-full bg-white opacity-50" data-index="1"></button>
                        <button class="w-3 h-3 rounded-full bg-white opacity-50" data-index="2"></button>
                        <button class="w-3 h-3 rounded-full bg-white opacity-50" data-index="3"></button>
                        
                        
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Header -->
    <div class="py-14  "> 
        <div class="max-w-6xl  px-4 sm:px-6 lg:px-8 flex justify-center flex-col items-center ">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4 ">
                My <span class="text-[#1d4ed8] dark:text-blue-400">Projects</span>
            </h1>
      
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl">
                Here's a selection of my recent work. Each project presented unique challenges and opportunities for creative problem-solving.
            </p>
              </div>
            <!-- Project Filters -->
            <div class="mt-8">
                <div class="flex flex-wrap gap-2 items-center">
                    <span class="font-medium text-gray-700 dark:text-gray-300">Filter by:</span>
                    <button class="filter-btn active px-4 py-2 bg-[#1d4ed8] text-white dark:bg-blue-600 rounded-md transition duration-300" data-filter="all">All</button>
                    <button class="filter-btn px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-[#1d4ed8] hover:text-white dark:hover:bg-blue-600 rounded-md transition duration-300" data-filter="web">Web Apps</button>
                    <button class="filter-btn px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-[#1d4ed8] hover:text-white dark:hover:bg-blue-600 rounded-md transition duration-300" data-filter="mobile">Mobile Apps</button>
                    <button class="filter-btn px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-[#1d4ed8] hover:text-white dark:hover:bg-blue-600 rounded-md transition duration-300" data-filter="ecommerce">E-commerce</button>
                </div>
                
            </div>
        </div>
    
    
    <!-- Projects Grid -->
    <div class="pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                
                <!-- Project Card 1 -->
                <div class="project-card group" data-category="web">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative h-60 overflow-hidden">
                            <img src="{{ asset('images/cal2.png') }}" alt="Project 1" class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                                <div class="p-4">
                                    <div class="flex space-x-2">
                                        <a href="#" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="#" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Code</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2 text-center">Calculator App</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">A  fast and reliable calculatop app designed for everyday use from basic arithmetic to advance mathematical functions..</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Html</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Css</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Javascript</span>
                        
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 2 -->
                <div class="project-card group" data-category="ecommerce">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative h-60 overflow-hidden">
                            <img src="{{ asset('images/rr.png') }}" alt="Project 2" class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                                <div class="p-4">
                                    <div class="flex space-x-2">
                                        <a href="https://rock-paper-scissor-game-o5wh.vercel.app/" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="https://github.com/Bajanko/calculator.git" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Code</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">E-commerce Platform</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">A complete e-commerce solution with shopping cart, payment processing, and inventory management.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Laravel</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Vue.js</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">MySQL</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Stripe API</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 3 -->
                <div class="project-card group" data-category="mobile">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative h-60 overflow-hidden ">
                            <img src="{{ asset('images/2.jpeg') }}" alt="Project 3" class="w-full h-full  py-2 object-cover transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                                <div class="p-4">
                                    <div class="flex space-x-2">
                                        <a href="https://janko-project.vercel.app/" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="#" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Repository</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-8 px-2  mx-3">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Github User Searching App</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">A mobile application for searching Github users.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">React Js</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Tailwind CSS</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Github API</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 4 -->
                <div class="project-card group" data-category="web">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative h-60 overflow-hidden">
                            <img src="{{ asset('images/q.png') }}" alt="Project 4" class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                                <div class="p-4">
                                    <div class="flex space-x-2">
                                        <a href="https://bmi-calculator-nu-jade.vercel.app/" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="#" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Repository</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-medium  font-bold text-gray-800 dark:text-white  py-4 ">Body Mass Index (BMI) Calculator</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4 py-2">A conprehensive Body App Calculator</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">HTML </span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">CSS</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Vanilar Js</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 5 -->
                <div class="project-card group" data-category="ecommerce">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative h-60 overflow-hidden">
                            <img src="{{ asset('images/food delivery.jpg') }}" alt="Project 5" class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                                <div class="p-4">
                                    <div class="flex space-x-2">
                                        <a href="#" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="#" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Code</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Food Delivery Platform</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">A complete food ordering and delivery system with restaurant management and driver tracking.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Laravel</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">React</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">PostgreSQL</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Google Maps API</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 6 -->
                <div class="project-card group" data-category="mobile">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative h-60 overflow-hidden">
                            <img src="{{ asset('images/travel.avif') }}" alt="Project 6" class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                                <div class="p-4">
                                    <div class="flex space-x-2">
                                        <a href="#" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                        <a href="#" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Code</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Travel Companion App</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">A mobile app that helps travelers plan trips, discover attractions, and track expenses in multiple currencies.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Flutter</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Dart</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Firebase</span>
                                <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Travel API</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- No Results Message -->
            <div id="no-results" class="hidden text-center py-16">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 dark:text-gray-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 mb-2">No projects found</h3>
                <p class="text-gray-600 dark:text-gray-400">Try changing your filter selection</p>
            </div>
        </div>
    </div>
    
    <!-- Interested in Working Together -->
    <div class="py-14 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white mb-4">Interested in a custom project?</h2>
            <p class="text-gray-600 dark:text-gray-300 mb-8 max-w-3xl mx-auto">
                I'm always open to discussing new projects and opportunities. If you have a project in mind or need a custom solution, let's talk about how I can help bring your ideas to life.
            </p>
            <a href="/contact" class="inline-block px-6 py-3 bg-[#1d4ed8] hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300">
                Get in Touch
            </a>
        </div>
    </div>

    <!-- Project Filter JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');
            const noResults = document.getElementById('no-results');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active', 'bg-[#1d4ed8]', 'text-white', 'dark:bg-blue-600'));
                    filterButtons.forEach(btn => btn.classList.add('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300'));
                    
                    // Add active class to clicked button
                    this.classList.add('active', 'bg-[#1d4ed8]', 'text-white', 'dark:bg-blue-600');
                    this.classList.remove('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    let visibleCount = 0;
                    
                    // Show/hide projects based on filter
                    projectCards.forEach(card => {
                        if (filter === 'all' || card.getAttribute('data-category') === filter) {
                            card.classList.remove('hidden');
                            visibleCount++;
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                    
                    // Show "No results" message if no projects match the filter
                    if (visibleCount === 0) {
                        noResults.classList.remove('hidden');
                    } else {
                        noResults.classList.add('hidden');
                    }
                });
            });
        });
    </script>
@endsection