@extends('main')
@section('content')
    <!-- Featured Projects Slideshow -->
    <div class="py-14 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-white mb-6 text-center">
                My <span class="text-[#1d4ed8] dark:text-blue-400">Projects</span>
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
                                    <h3 class="text-4xl font-bold text-white mb-2 ">Body Mass Index (BMI) Calculator</h3>
                                    <p class="text-white/80 text-xl mb-4 max-w-2xl">A comprehensive dashboard for calculating the body mass</p>
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
                                    <h3 class="text-4xl font-bold text-white mb-2">Calculator App</h3>
                                    <p class="text-white/80 text-xl mb-4 max-w-2xl">A web app calculator that provides simple and advanced mathematical functions such as addition,subtraction,multiplication etc.</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Html</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Css</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Vanilar Javascript</span>
                                        
                                    </div>
                                    <div class="flex space-x-3">
                                        
                                        <a href="https://calculator-five-rho-72.vercel.app/" class="px-6 py-2 bg-[#1d4ed8] text-white rounded-md text-sm hover:bg-blue-700 transition duration-300">View Project</a>
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
                                    <span class="bg-[#1d4ed8] text-white px-3 py-1 rounded-full text-sm font-medium mb-4 inline-block">Web App</span>
                                    <h3 class="text-4xl font-bold text-white mb-2">Github User App</h3>
                                    <p class="text-white/80 text-lg mb-4 max-w-2xl">A comprehensive mobile app for searching Github Users</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">React Js</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Tailwind CSS</span>
                                        <span class="px-3 py-1 bg-white/20 text-white rounded-full text-sm">Github API</span>

                                    </div>
                                    <div class="flex space-x-3">
                                        <a href="https://janko-project.vercel.app/" class="px-6 py-2 bg-[#1d4ed8] text-white rounded-md text-sm hover:bg-blue-700 transition duration-500">View Project</a>
                                        <a href="https://github.com/Bajanko/Github-user-App.git" class="px-6 py-2 bg-white/10 hover:bg-white/20 text-white rounded-md text-sm transition duration-300">Repository</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                   
                    
                    
                   
                    
                    
                </div>
                
                <!-- Slideshow Controls -->
                <div class="absolute top-1/2 left-4 transform -translate-y-1/2">
                    <button id="prev-project" class="p-2 rounded-full bg-black/30 text-white hover:bg-[#1d4ed8] transition duration-500 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>
                <div class="absolute top-1/2 right-4 transform -translate-y-1/2">
                    <button id="next-project" class="p-2 rounded-full bg-black/30 text-white hover:bg-[#1d4ed8] transition duration-500 focus:outline-none">
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
                        {{-- <button class="w-3 h-3 rounded-full bg-white opacity-50" data-index="3"></button> --}}
                        
                        
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Header -->
    <div class="py-14  "> 
        <div class="max-w-6xl  px-4 sm:px-6 lg:px-8 flex justify-center flex-col items-center ">
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl py-4">
                Here's a selection of my recent work. Each project presented unique challenges and opportunities for creative problem-solving.
            </p>
      
           
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
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Html</span>
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Css</span>
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Javascript</span>
                                
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2 text-center">Calculator App</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm"> Is a simple, interactive application designed to perform basic arithmetic operations such as addition, subtraction, multiplication, and division.Users can input numbers and operations through a responsive button-based interface. The app instantly displays results in real-time, ensuring ease of use and fast feedback</p>
                            <div class="flex space-x-2 justify-center ">
                                <a href="https://calculator-five-rho-72.vercel.app/" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                <a href="https://github.com/Bajanko/calculator.git" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Code</a>
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
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Html</span>
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Css</span>
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Vanilar Javascript</span>
                                      
                                    </div>
                                    
                                
                                   
                                  
                                </div>
                            </div>
                        </div>
                        <div class=" text-center">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2 py-2 ">A Coin Toast Game</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4 px-2">A Web App game that users choose either head or tail.Flip a realistic animated coin with a single click or tap.Choose your side and see if luck is on your side.Points are awarded for correct guesses; build your streak and climb the leaderboard</p>
                           
                        </div>
                        <div class="flex space-x-2 py-2 mb-2 justify-center">
                            <a href="https://rock-paper-scissor-game-o5wh.vercel.app/" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                            <a href="https://github.com/Bajanko/Toin-Toast-App.git" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Code</a>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 3 -->
                <div class="project-card group" data-category="mobile">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative h-60 overflow-hidden ">
                            <img src="{{ asset('images/2.jpeg') }}" alt="Project 3" class="w-full h-full  py-4 object-cover transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                                <div class="p-4">
                                    <div class="flex flex-wrap gap-4 mb-4 py-3 items-center justify-center ">
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">React Js</span>
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Tailwind CSS</span>
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Github API</span>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="py-8 px-2  mx-3 text-center">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2 ">Github User Searching App</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">A frondend mentor challenge project.is a simple and intuitive web application that allows users to search for GitHub profiles by username. It fetches and displays public user information using the GitHub REST API, including the user's avatar, bio, number of repositories, followers, following, and more. This project is a practical demonstration of API integration, dynamic data rendering, and modern front-end development</p>
                            
                            <div class="flex space-x-2 justify-center">
                                <a href="https://janko-project.vercel.app/" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                                <a href="https://github.com/Bajanko/Github-user-App.git" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Repository</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 4 -->
                <div class="project-card group" data-category="web">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2 py-3">
                        <div class="relative h-60 overflow-hidden">
                            <img src="{{ asset('images/q.png') }}" alt="Project 4" class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
                                <div class="p-4">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">HTML </span>
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">CSS</span>
                                        <span class="px-2 py-1 bg-[#e0e7ff] text-[#1d4ed8] dark:bg-gray-700 dark:text-blue-400 rounded-md text-xs font-medium">Vanilar Js</span>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-medium  font-bold text-gray-800 dark:text-white   ">Body Mass Index (BMI) Calculator</h3>
                            <p class="text-gray-600 dark:text-gray-300  ">Is a simple and intuitive tool that allows users to calculate their BMI based on their weight and height.The app helps users quickly determine whether they are underweight, normal weight, overweight, or obese .This app is designed to raise awareness about personal health and fitness. It serves as a quick, easy-to-use tool for individuals looking to monitor their body weight in relation to height, which can be useful for setting fitness goals or seeking medical advice.</p>
                            
                        </div>

                        <div class="flex space-x-2 mb-4 justify-center">
                            <a href="https://bmi-calculator-nu-jade.vercel.app/" class="px-3 py-1 bg-[#1d4ed8] text-white rounded-full text-sm hover:bg-blue-700 transition duration-300">View Project</a>
                            <a href="https://github.com/Bajanko/BMI-Calculator.git" class="px-3 py-1 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-700 transition duration-300">Repository</a>
                        </div>
                    </div>
                </div>
                
               
                
               
            </div>
            
           
        </div>
    </div>
  
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

   
@endsection