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
  <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-6">Orders</h1>

        <!-- Dummy Gig 1 -->
        <div class="mb-8 group transition transform duration-300 ease-in-out hover:scale-105 bg-gray-100 rounded-lg overflow-hidden">
            <!-- Gig Information -->
            <div class="flex items-center mb-4 p-4">
                <div class="bg-white p-4 rounded-full shadow-md">
                    <img src="https://placekitten.com/100/100" alt="Gig Image" class="w-12 h-12 object-cover rounded-full">
                </div>
                <div class="ml-4">
                    <h2 class="text-xl font-semibold text-gray-800">Graphic Design</h2>
                    <p class="text-gray-600">Design</p>
                </div>
            </div>

            <!-- Order 1 for Gig 1 -->
            <div class="flex justify-between p-4">
                <!-- Order Information -->
                <div>
                    <h3 class="text-lg font-semibold mb-2 text-blue-600">Logo Design</h3>
                    <p class="text-gray-600">Price: $150</p>
                    <p class="text-gray-600">Phone Number: 123-456-7890</p>
                    <p class="text-gray-600">Budget: $500</p>
                </div>
                <!-- Order Status and Change Button -->
                <div class="flex items-center space-x-2">
                    <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold">Completed</span>
                    <button class="bg-blue-500 text-white px-4 py-1 rounded-full text-xs font-semibold hover:bg-blue-600 transition duration-300">Change</button>
                </div>
            </div>

            <!-- Order 2 for Gig 1 -->
            <div class="flex justify-between p-4 bg-gray-200 hover:bg-gray-300 transition duration-300 ease-in-out">
                <!-- Order Information -->
                <div>
                    <h3 class="text-lg font-semibold mb-2 text-blue-600">Business Card Design</h3>
                    <p class="text-gray-600">Price: $80</p>
                    <p class="text-gray-600">Phone Number: 987-654-3210</p>
                    <p class="text-gray-600">Budget: $300</p>
                </div>
                <!-- Order Status and Change Button -->
                <div class="flex items-center space-x-2">
                    <span class="bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-semibold">Pending</span>
                    <button class="bg-blue-500 text-white px-4 py-1 rounded-full text-xs font-semibold hover:bg-blue-600 transition duration-300">Change</button>
                </div>
            </div>
        </div>

        <!-- Dummy Gig 2 -->
        <div class="mb-8 group transition transform duration-300 ease-in-out hover:scale-105 bg-gray-200 rounded-lg overflow-hidden">
            <!-- Gig Information -->
            <div class="flex items-center mb-4 p-4">
                <div class="bg-white p-4 rounded-full shadow-md">
                    <img src="https://placekitten.com/100/100" alt="Gig Image" class="w-12 h-12 object-cover rounded-full">
                </div>
                <div class="ml-4">
                    <h2 class="text-xl font-semibold text-gray-800">Web Development</h2>
                    <p class="text-gray-600">Development</p>
                </div>
            </div>

            <!-- Order 1 for Gig 2 -->
            <div class="flex justify-between p-4">
                <!-- Order Information -->
                <div>
                    <h3 class="text-lg font-semibold mb-2 text-blue-600">Website Redesign</h3>
                    <p class="text-gray-600">Price: $300</p>
                    <p class="text-gray-600">Phone Number: 555-123-4567</p>
                    <p class="text-gray-600">Budget: $1000</p>
                </div>
                <!-- Order Status and Change Button -->
                <div class="flex items-center space-x-2">
                    <span class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-semibold">Cancelled</span>
                    <button class="bg-blue-500 text-white px-4 py-1 rounded-full text-xs font-semibold hover:bg-blue-600 transition duration-300">Change</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

    </x-app-layout>
