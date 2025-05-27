@extends('main')
@section('content')
    <!-- Skills Header -->
    <div class="py-14">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4 text-center">
                My <span class="text-[#1d4ed8] dark:text-blue-400">Skills</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl">
                I've developed expertise in various technologies and methodologies throughout my career.
                Here's an overview of my technical skills and competencies.
            </p>
        </div>
    </div>
    
    <!-- Skill Categories -->
    <div class="pb-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Frontend Development -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                    <div class="p-1 bg-gradient-to-r from-blue-500 to-blue-700"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Frontend Development</h3>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">HTML/CSS</span>
                                    <span class="text-gray-600 dark:text-gray-400">70%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">JavaScript</span>
                                    <span class="text-gray-600 dark:text-gray-400">65%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">React</span>
                                    <span class="text-gray-600 dark:text-gray-400">50%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Vue.js</span>
                                    <span class="text-gray-600 dark:text-gray-400">40%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Tailwind CSS</span>
                                    <span class="text-gray-600 dark:text-gray-400">60%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Backend Development -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                    <div class="p-1 bg-gradient-to-r from-green-500 to-green-700"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-green-100 dark:bg-green-900 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Backend Development</h3>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">PHP/Laravel</span>
                                    <span class="text-gray-600 dark:text-gray-400">50%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Node.js</span>
                                    <span class="text-gray-600 dark:text-gray-400">30%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Python/Django</span>
                                    <span class="text-gray-600 dark:text-gray-400">15%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">RESTful APIs</span>
                                    <span class="text-gray-600 dark:text-gray-400">30%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">GraphQL</span>
                                    <span class="text-gray-600 dark:text-gray-400">10%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Database Management -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                    <div class="p-1 bg-gradient-to-r from-purple-500 to-purple-700"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-purple-100 dark:bg-purple-900 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1.5 3 4 3h8c2.5 0 4-1 4-3V7c0-2-1.5-3-4-3h-8c-2.5 0-4 1-4 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 7h12M6 11h12M6 15h12" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Database Management</h3>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">MySQL</span>
                                    <span class="text-gray-600 dark:text-gray-400">60%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">PostgreSQL</span>
                                    <span class="text-gray-600 dark:text-gray-400">25%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">MongoDB</span>
                                    <span class="text-gray-600 dark:text-gray-400">40%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Redis</span>
                                    <span class="text-gray-600 dark:text-gray-400">20%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Firebase</span>
                                    <span class="text-gray-600 dark:text-gray-400">10%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Development -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                    <div class="p-1 bg-gradient-to-r from-orange-500 to-orange-700"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-orange-100 dark:bg-orange-900 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Mobile Development</h3>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">React Native</span>
                                    <span class="text-gray-600 dark:text-gray-400">25%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-orange-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Flutter</span>
                                    <span class="text-gray-600 dark:text-gray-400">15%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-orange-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Swift</span>
                                    <span class="text-gray-600 dark:text-gray-400">10%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-orange-600 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Kotlin</span>
                                    <span class="text-gray-600 dark:text-gray-400">12%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-orange-600 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Mobile UI/UX</span>
                                    <span class="text-gray-600 dark:text-gray-400">50%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-orange-600 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- DevOps & Deployment -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                    <div class="p-1 bg-gradient-to-r from-red-500 to-red-700"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-red-100 dark:bg-red-900 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">DevOps & Deployment</h3>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Docker</span>
                                    <span class="text-gray-600 dark:text-gray-400">30%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-red-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                           
                            
                          
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Server Management</span>
                                    <span class="text-gray-600 dark:text-gray-400">60%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-red-600 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Other Skills -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                    <div class="p-1 bg-gradient-to-r from-teal-500 to-teal-700"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-teal-100 dark:bg-teal-900 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-teal-600 dark:text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Other Technical Skills</h3>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Git/Version Control</span>
                                    <span class="text-gray-600 dark:text-gray-400">55%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-teal-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Networking Skills</span>
                                    <span class="text-gray-600 dark:text-gray-400">85%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-teal-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Software troubleshooting Skills</span>
                                    <span class="text-gray-600 dark:text-gray-400">75%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-teal-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Performance Optimization</span>
                                    <span class="text-gray-600 dark:text-gray-400">30%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-teal-600 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                           
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">UI/UX Design</span>
                                    <span class="text-gray-600 dark:text-gray-400">75%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-teal-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Skills Chart -->
    <div class="py-14 bg-white dark:bg-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white mb-6 text-center">
                Skills <span class="text-[#1d4ed8] dark:text-blue-400">Overview</span>
            </h2>
            
            <div class="mx-auto mb-6 max-w-4xl">
                <p class="text-gray-600 dark:text-gray-300 text-center">
                    This chart visualizes my proficiency levels across different technology domains.
                    Each bar represents years of practical experience and project work in that area.
                </p>
            </div>
            
            <div class="mx-auto" style="max-width: 800px;">
                <!-- Bar Chart -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4 text-center">Technical Proficiency by Domain</h3>
                    <div class="chart-container" style="position: relative; height:450px; width:100%">
                        <canvas id="skillsBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!-- Let's Work Together -->
    <div class="py-14 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white mb-4">Ready to build something amazing?</h2>
            <p class="text-gray-600 dark:text-gray-300 mb-8 max-w-3xl mx-auto">
                I'm always looking for new challenges and opportunities to apply my skills. Whether you need a complete web application, a mobile app, or help with your existing project, I'd love to discuss how we can work together.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/contact" class="inline-block px-6 py-3 bg-[#1d4ed8] hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300">
                    Contact Me
                </a>
                <a href="/projects" class="inline-block px-6 py-3 bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-800 dark:text-white border border-gray-300 dark:border-gray-600 font-medium rounded-lg transition duration-300">
                    View My Projects
                </a>
            </div>
        </div>
    </div>
    
    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Skills Bar Chart
            const barCtx = document.getElementById('skillsBarChart').getContext('2d');
            const barChart = new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: ['Frontend', 'Backend', 'Mobile', 'API Dev', 'Databases', 'Networking', 'UI/UX', 'Testing'],
                    datasets: [{
                        label: 'Proficiency Level',
                        data: [90, 85, 75, 60, 86, 70, 75, 82],
                        backgroundColor: [
                            'rgba(29, 78, 216, 0.7)',    // Primary Blue
                            'rgba(34, 197, 94, 0.7)',    // Green
                            'rgba(249, 115, 22, 0.7)',   // Orange
                            'rgba(168, 85, 247, 0.7)',   // Purple
                            'rgba(20, 184, 166, 0.7)',   // Teal
                            'rgba(239, 68, 68, 0.7)',    // Red
                            'rgba(217, 119, 6, 0.7)',    // Amber
                            'rgba(96, 165, 250, 0.7)'    // Light Blue
                        ],
                        borderColor: [
                            'rgb(29, 78, 216)',
                            'rgb(34, 197, 94)',
                            'rgb(249, 115, 22)',
                            'rgb(168, 85, 247)',
                            'rgb(20, 184, 166)',
                            'rgb(239, 68, 68)',
                            'rgb(217, 119, 6)',
                            'rgb(96, 165, 250)'
                        ],
                        borderWidth: 1,
                        borderRadius: 6,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                stepSize: 20,
                                callback: function(value) {
                                    return value + '%';
                                },
                                color: document.documentElement.classList.contains('dark') ? 'white' : 'rgb(55, 65, 81)'
                            },
                            grid: {
                                color: 'rgba(100, 100, 100, 0.2)'
                            },
                            title: {
                                display: true,
                                text: 'Proficiency Level',
                                color: document.documentElement.classList.contains('dark') ? 'white' : 'rgb(55, 65, 81)',
                                font: {
                                    weight: 'bold'
                                }
                            }
                        },
                        x: {
                            ticks: {
                                color: document.documentElement.classList.contains('dark') ? 'white' : 'rgb(55, 65, 81)'
                            },
                            grid: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: 'Skill Categories',
                                color: document.documentElement.classList.contains('dark') ? 'white' : 'rgb(55, 65, 81)',
                                font: {
                                    weight: 'bold'
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return 'Proficiency: ' + context.raw + '%';
                                }
                            }
                        }
                    }
                }
            });
            
            // Update chart colors when theme changes
            const updateChartColors = () => {
                const isDark = document.documentElement.classList.contains('dark');
                const textColor = isDark ? 'white' : 'rgb(55, 65, 81)';
                
                // Update bar chart
                barChart.options.scales.y.ticks.color = textColor;
                barChart.options.scales.x.ticks.color = textColor;
                barChart.options.scales.y.title.color = textColor;
                barChart.options.scales.x.title.color = textColor;
                
                barChart.update();
            };
            
            // Watch for theme changes if there's a theme toggle
            const themeToggle = document.getElementById('theme-toggle');
            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    setTimeout(updateChartColors, 100); // Small delay to ensure theme has changed
                });
            }
        });
    </script>
@endsection