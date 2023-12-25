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
<!-- Gigs List Section -->

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
<div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

        <!-- Header with random background picture -->
        <div class="mb-8">
            <!-- Add your header content, you can include a random background image here -->
            <h1 class="text-2xl font-semibold text-gray-800">Your Gigs</h1>
            <!-- Add more content as needed -->
        </div>

        <!-- List of Gigs -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($userGigs as $gig)
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-lg">
                <img src="{{'uploads/'. $gig-> image}}" alt="Gig Image" class="w-full h-48 object-cover object-center">

            <!-- Gig Details -->
                    <!-- Gig Details -->
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $gig->title }}</h3>
                        <p class="text-gray-600 mb-2">{{ $gig->service_category }}</p>
                        <!-- Add more details as needed -->

                        <!-- Price and Image -->
                        <div class="flex items-center justify-between">
                            <p class="text-lg font-bold text-blue-500">${{ $gig->price_rate }}</p>
                            <!-- Add your image here -->
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-4 flex justify-end space-x-2">
                            <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-300">Delete</button>
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Update</button>
                        </div>
                    </div>
                </div>
            @empty
                <p>No gigs found.</p>
            @endforelse
        </div>
    </div>


</body>
</html>

      </div>
            </div>
        </div>
    </div>

    </x-app-layout>
