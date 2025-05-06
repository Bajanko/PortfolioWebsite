@extends('main')
@section('content')
    <!-- Contact Header -->
    <div class="py-14">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">
                Get in <span class="text-[#1d4ed8] dark:text-blue-400">Touch</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl">
                I'm always open to discussing new projects, creative ideas or opportunities to be part of your vision.
                Use the form below or contact me via the provided information.
            </p>
        </div>
    </div>
    
    <!-- Contact Section -->
    <div>
    <div class="pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Contact Info -->
                <div class="lg:col-span-1">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6" style="min-height: 300px;">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">
                            Contact Information
                        </h2>
                        
                        <!-- Contact Details -->
                        <div class="space-y-6">
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#1d4ed8] dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800 dark:text-white">Email</h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-300">
                                        <a href="mailto:contact@yourname.com" class="hover:text-[#1d4ed8] dark:hover:text-blue-400 transition duration-300">
                                            bajankojaiteh@gmail.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1d4ed8] dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800 dark:text-white">Phone</h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-300">
                                        <a href="tel:+1234567890" class="hover:text-[#1d4ed8] dark:hover:text-blue-400 transition duration-300">
                                            3461616
                                        </a>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Location -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1d4ed8] dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800 dark:text-white">Location</h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-300">
                                        Bundung
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Links -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-2">
                                Connect with me
                            </h3>
                            <div class="flex space-x-4">
                                <!-- GitHub -->
                                <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="p-3 bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                                
                                <!-- LinkedIn -->
                                <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer" class="p-3 bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </a>
                                
                                <!-- Twitter -->
                                <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" class="p-3 bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </a>
                                
                                <!-- Instagram -->
                                <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" class="p-3 bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4" style="">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">
                            Send Me a Message
                        </h2>
                        <form action="#" method="POST" class="space-y-5">
                            <!-- Name and Email row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Your Name
                                    </label>
                                    <input type="text" name="name" id="name" class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-[#1d4ed8] focus:border-[#1d4ed8] dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-800 dark:text-white" placeholder="Name" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Your Email
                                    </label>
                                    <input type="email" name="email" id="email" class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-[#1d4ed8] focus:border-[#1d4ed8] dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-800 dark:text-white" placeholder="john.doe@example.com" required>
                                </div>
                            </div>
                            
                            <!-- Subject -->
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Subject
                                </label>
                                <input type="text" name="subject" id="subject" class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-[#1d4ed8] focus:border-[#1d4ed8] dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-800 dark:text-white" placeholder="How can I help you?" required>
                            </div>
                            
                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Message
                                </label>
                                <textarea name="message" id="message" rows="2" class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-[#1d4ed8] focus:border-[#1d4ed8] dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-800 dark:text-white" placeholder="Your message here..." required></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="w-full md:w-auto px-8 py-3 bg-[#1d4ed8] hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300 flex items-center justify-center">
                                    <span>Send Message</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Map Section -->
    <div class="py-14 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white mb-6 text-center">
                My <span class="text-[#1d4ed8] dark:text-blue-400">Location</span>
            </h2>
            <div class="rounded-lg overflow-hidden shadow-md">
                <!-- Replace with your preferred map embed code https://maps.apple.com/?address=Serekunda,%20The%20Gambia&auid=2595112576773829735&ll=13.416648,-16.683022&lsp=7618&q=My%20Location-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3880.935455174751!2d-16.685769674148098!3d13.416322336941477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sgm!4v1746329901122!5m2!1sen!2sgm" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    
    <!-- Contact JavaScript (optional) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // You can add form validation or submission handling here
            const contactForm = document.querySelector('form');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Here you would typically send the form data to your backend
                // For demo purposes, let's just show a success message
                const formData = new FormData(contactForm);
                
                // Example of accessing form data
                const name = formData.get('name');
                const email = formData.get('email');
                const subject = formData.get('subject');
                const message = formData.get('message');
                
                console.log('Form submitted with:', { name, email, subject, message });
                
                // Show success message (you would implement this based on your UI)
                alert('Thanks for your message! I\'ll get back to you soon.');
                
                // Reset form
                contactForm.reset();
            });
        });
    </script>
@endsection