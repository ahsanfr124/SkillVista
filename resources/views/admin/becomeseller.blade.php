<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Become a Seller') }}
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
    <title>Become a Service Provider</title>
    <!-- Include Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body class="bg-gray-100">

    <!-- Header Section with Random Image -->
    <header class="bg-cover bg-center text-white py-24 relative" style="background-image: url('https://source.unsplash.com/random/1920x1080')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl font-extrabold leading-tight mb-4">Become a Service Provider</h1>
            <p class="text-lg mb-8">Fill in the details below to become a service provider.</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

        <!-- Form Section -->
        <form action="" enctype="multipart/form-data" method="POST" class="max-w-md mx-auto">
        @csrf

            <!-- Service Title Input -->
            <div class="mb-4">
                <label for="serviceTitle" class="block text-sm font-medium text-gray-700">Service Title</label>
                <input type="text" id="serviceTitle" name="serviceTitle" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Service Description Input -->
            <div class="mb-4">
                <label for="serviceDescription" class="block text-sm font-medium text-gray-700">Service Description</label>
                <textarea id="serviceDescription" name="serviceDescription" rows="3" class="mt-1 p-2 w-full border rounded-md"></textarea>
            </div>

            <!-- Service Category Input (Checkboxes) -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Service Category</label>
                <div class="grid grid-cols-3 gap-4">
                    <!-- Manually added 30 random categories -->
                    <div>
                        <input type="radio" id="Plumber" name="serviceCategory" value="Plumber" class="mr-2">
                        <label for="category1" class="text-sm">Plumber</label>
                    </div>
                    <div>
                        <input type="radio" id="category2" name="serviceCategory" value="Electrician" class="mr-2">
                        <label for="category2" class="text-sm">Electrician</label>
                    </div>
                    <!-- Repeat the above structure for each category -->
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Carpenter" class="mr-2">
                        <label for="category3" class="text-sm">Carpenter</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Gardener" class="mr-2">
                        <label for="Gardener" class="text-sm">Gardener</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Auto Mechanic" class="mr-2">
                        <label for="Auto Mechanic" class="text-sm">Auto Mechanic</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Hair Stylist" class="mr-2">
                        <label for="category3" class="text-sm">Hair Stylist</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Personal Trainer" class="mr-2">
                        <label for="category3" class="text-sm">Personal Trainer</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Photographer" class="mr-2">
                        <label for="Photographer" class="text-sm">Photographer</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Graphic Designer" class="mr-2">
                        <label for="Graphic Designer" class="text-sm">Graphic Designer</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Accountant" class="mr-2">
                        <label for="Accountant" class="text-sm">Accountant</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Tailor" class="mr-2">
                        <label for="Tailor" class="text-sm">Tailor</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Baker" class="mr-2">
                        <label for="Baker" class="text-sm">Baker</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Chef" class="mr-2">
                        <label for="Chef" class="text-sm">Chef</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Veterinarian" class="mr-2">
                        <label for="Veterinarian" class="text-sm">Veterinarian</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Computer Technician" class="mr-2">
                        <label for="Computer Technician" class="text-sm">Technician</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Tutor" class="mr-2">
                        <label for="Tutor" class="text-sm">Tutor</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Wedding Planner" class="mr-2">
                        <label for="Wedding Planner" class="text-sm">Wedding Planner</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Welder" class="mr-2">
                        <label for="Welder" class="text-sm">Welder</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Security Guard" class="mr-2">
                        <label for="Chef" class="text-sm">Security Guard</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="House Cleaner" class="mr-2">
                        <label for="Chef" class="text-sm">House Cleaner</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Travel Agent" class="mr-2">
                        <label for="Chef" class="text-sm">Travel Agent</label>
                    </div>
                    <div>
                        <input type="radio" id="category3" name="serviceCategory" value="Real Estate Agent" class="mr-2">
                        <label for="Chef" class="text-sm">Real Estate Agent</label>
                    </div>
                    <!-- Repeat the above structure for each category -->
                    <!-- ... Repeat until you have 30 categories -->

                </div>
            </div>

            <!-- Price Rate Input -->
            <div class="mb-4">
                <label for="priceRate" class="block text-sm font-medium text-gray-700">Price Rate of the Work</label>
                <input type="number" id="priceRate" name="priceRate" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- City Name Input -->
            <div class="mb-4">
                <label for="cityName" class="block text-sm font-medium text-gray-700">City Name</label>
                <input type="text" id="cityName" name="cityName" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Complete Location Input -->
            <div class="mb-4">
                <label for="completeLocation" class="block text-sm font-medium text-gray-700">Complete Location</label>
                <input type="text" id="completeLocation" name="completeLocation" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Picture Input -->
            <div class="mb-4">
                <label for="picture" class="block text-sm font-medium text-gray-700">Picture</label>
                <div class="flex items-center space-x-4">
                    <input type="file" id="picture" name="picture" accept="image/*" class="mt-1 p-2 w-full border rounded-md">
                    <span class="text-sm text-gray-500">(Recommended: 1080x720 pixels)</span>
                </div>
            </div>

            <!-- Tags Input -->
            <div class="mb-4">
                <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                <input type="text" id="tags" name="tags" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full transition duration-300 transform hover:scale-105 focus:outline-none">Submit</button>
            </div>

        </form>
    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-200 text-gray-600 py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add the following script at the end of the body tag -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Add more complex animations or interactivity as needed
        });
    </script>

</body>
</html>


      </div>
            </div>
        </div>
    </div>

    </x-app-layout>

