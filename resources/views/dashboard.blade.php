<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

<!-- FAQ Section -->
    <title>Dashboard</title>
</head>
<body class="bg-gray-100">

<!-- Inside your Blade view file -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <!-- Jumbotron Section -->
    <section class="bg-cover bg-center text-white py-24 relative" style="background-image: url('https://source.unsplash.com/random/1920x1080')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl font-extrabold leading-tight mb-4">Become a Service Provider</h1>
            <p class="text-lg mb-8">Join our platform and offer your services to the local community.</p>
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full">Get Started</a>
        </div>
    </section>

    <!-- Main Content Section -->
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

       <!-- Service Provider Information Section -->
<section class="mb-8">
    <h2 class="text-3xl font-semibold mb-4">Your Service Provider Information</h2>

   


<!-- Animated Big Card for Each Service -->
<h2 class="text-3xl font-semibold mb-4">Your Service Provider Information</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
 
    <!-- Service Card 1 -->
    <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md transform transition duration-500 hover:scale-105">
        <img src="https://via.placeholder.com/300" alt="Service Image" class="w-full h-40 object-cover object-center">
        <div class="p-6">
            <div class="flex justify-between items-center mb-2">
            <span class="text-green-500 font-semibold">Category Name</span>
                <p class="text-gray-600">Location: City</p>
                
            </div>
            <h3 class="text-xl font-semibold mb-2">Service Title</h3>
            <p class="text-gray-600 mb-2">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="flex items-center mb-2">
                <span class="text-yellow-500">&#9733;</span>
                <span class="text-yellow-500">&#9733;</span>
                <span class="text-yellow-500">&#9733;</span>
                <span class="text-yellow-500">&#9733;</span>
                <span class="text-yellow-500">&#9733;</span>
            </div>
        </div>
    </div>

    <!-- Repeat the above card structure for each service -->
    <!-- Service Card 2 -->
    <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md transform transition duration-500 hover:scale-105">
        <!-- ... (similar content as above) ... -->
    </div>

    <!-- Service Card 3 -->
    <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md transform transition duration-500 hover:scale-105">
        <!-- ... (similar content as above) ... -->
    </div>
</div>


    <!-- Repeat the above card structure for each service -->
    <!-- Service Card 2 -->
    <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md transform transition duration-500 hover:scale-105">
        <!-- ... (similar content as above) ... -->
    </div>

    <!-- Service Card 3 -->
    <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md transform transition duration-500 hover:scale-105">
        <!-- ... (similar content as above) ... -->
    </div>
</div>

        <!-- Repeat the above card structure for each service -->
        <!-- Service Card 2 -->
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md transform transition duration-500 hover:scale-105">
            <!-- ... (similar content as above) ... -->
        </div>

        <!-- Service Card 3 -->
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md transform transition duration-500 hover:scale-105">
            <!-- ... (similar content as above) ... -->
        </div>
    </div>

    <section class="mb-8">
    <h2 class="text-3xl font-semibold mb-4 ml-48">Frequently Asked Questions</h2>

    <!-- Animated FAQ Accordion -->
    <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md">
        <!-- FAQ Item 1 -->
        <div class="border-b">
            <button class="w-full flex justify-between items-center py-2 px-4 font-semibold hover:text-blue-500 focus:outline-none">
                <span>What services do you offer?</span>
                <i class="fas fa-plus"></i>
            </button>
            <div class="px-4 py-2 text-gray-600 hidden">
                We offer a variety of services such as...
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="border-b">
            <button class="w-full flex justify-between items-center py-2 px-4 font-semibold hover:text-blue-500 focus:outline-none">
                <span>How can I become a service provider?</span>
                <i class="fas fa-plus"></i>
            </button>
            <div class="px-4 py-2 text-gray-600 hidden">
                To become a service provider, you can...
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="border-b">
            <button class="w-full flex justify-between items-center py-2 px-4 font-semibold hover:text-blue-500 focus:outline-none">
                <span>Is there a fee for using the platform?</span>
                <i class="fas fa-plus"></i>
            </button>
            <div class="px-4 py-2 text-gray-600 hidden">
                There is no fee for users. However, service providers may have...
            </div>
        </div>

        <!-- Repeat the above structure for each FAQ item -->

    </div>
</section>
</section>




<!-- Add the following script at the end of the body tag -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all FAQ buttons
        const faqButtons = document.querySelectorAll('.max-w-md .border-b button');

        // Attach click event listener to each button
        faqButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Toggle the 'hidden' class on the corresponding FAQ content
                const faqContent = button.nextElementSibling;
                faqContent.classList.toggle('hidden');

                // Toggle the 'fa-plus' and 'fa-minus' classes on the icon
                const icon = button.querySelector('i');
                icon.classList.toggle('fa-plus');
                icon.classList.toggle('fa-minus');
            });
        });
    });
</script>



    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-200 text-gray-600 py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

                </div>
            </div>
        </div>
    </div>


    <!-- Include Alpine.js (you can download it or link it from a CDN) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<!-- Add an 'x-data' attribute to enable Alpine.js on the container element -->
<div x-data="{ open: false }" class="max-w-2xl mx-auto mt-8 p-6 bg-white shadow-md rounded-md">

    <!-- ... (existing code) ... -->

    <!-- Edit button with animation -->
    <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
        Edit
    </button>

    <!-- Animated content (edit form, etc.) -->
    <div x-show="open" transition:enter="transition ease-out duration-300" transition:enter-start="opacity-0 transform scale-95" transition:enter-end="opacity-100 transform scale-100" transition:leave="transition ease-in duration-300" transition:leave-start="opacity-100 transform scale-100" transition:leave-end="opacity-0 transform scale-95">
        <!-- Add your edit form or other animated content here -->
    </div>
</div>

</x-app-layout>
