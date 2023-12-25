@extends('layouts.main')


@section('title')
Categories
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Categories</title>
</head>
<body class="bg-gray-100">

    <!-- Header Section with Random Background Image -->
    <header class="relative bg-cover bg-center text-white py-24" style="background-image: url('https://source.unsplash.com/random/1920x1080')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10">
            <h1 class="text-4xl font-extrabold leading-tight mb-4">Explore Categories</h1>
            <p class="text-lg">Discover a variety of services offered by skilled professionals.</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

        <!-- Section 1: Featured Categories -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-3xl font-semibold mb-6">Featured Categories</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured Category 1 -->
                
                    
                @foreach ($categories as  $category)
                    
              
                <div class="rounded-lg overflow-hidden shadow-md transform transition duration-300 hover:scale-105">
                    <img src="https://source.unsplash.com/500x300/?{{$category -> service_category}}" alt="Category 1" class="w-full h-48 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">{{$category -> service_category}}</h3>
                        <a href="#" class="text-green-500 hover:underline transition duration-300">Explore More</a>
                    </div>
                </div>
                  @endforeach
              
              
        </section>

        <!-- Section 2: Category Listing -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Column 1 -->
                <div>
                    <h2 class="text-2xl font-semibold mb-4">All Services</h2>
                    <ul>
                    @foreach ($gig as $g)
                        
                   
                        <li class="mb-2">
                            <a href="#" class="text-blue-500 hover:underline transition duration-300">{{$g -> service_category}}</a>
                        </li>
                         @endforeach
                        <li class="mb-2">
                            <a href="#" class="text-blue-500 hover:underline transition duration-300">Electrician</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-blue-500 hover:underline transition duration-300">Plumber</a>
                        </li>
                        <!-- Add more categories as needed -->
                    </ul>
                </div>
                <!-- Column 2 -->
               
       

    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-200 text-gray-600 py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>

    <!-- AOS Library (Animate On Scroll) -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>

@endsection