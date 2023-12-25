@extends('layouts.main')


@section('title')
How to Hire
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Hire Now</title>
</head>
<body class="bg-gray-100">

<!-- Header Section with Background Cover -->
<header class="relative bg-cover bg-center text-white py-24" style="background-image: url('https://source.unsplash.com/random/1920x1080')">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto relative z-10">
        <h1 class="text-4xl font-extrabold leading-tight mb-4">How to Hire</h1>
        <p class="text-lg">Your step-by-step guide to finding the perfect service provider</p>
    </div>
</header>



    <!-- Main Content Section -->
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

        <!-- Introduction -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Welcome to our Hiring Guide!</h2>
            <p class="text-gray-600">
                Whether you need a plumber, electrician, or any other service provider,
                we've got you covered. Follow these steps to hire the right person for the job.
            </p>
        </div>

        <!-- Steps to Hire -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="bg-green-100 p-6 rounded-lg" data-aos="fade-up" data-aos-duration="800">
                <h3 class="text-xl font-semibold mb-4">Step 1: Browse Services</h3>
                <p class="text-gray-700">
                    Explore our categories and find the service you need. From home maintenance to professional services, we have a wide range of options.
                </p>
            </div>
            <!-- Step 2 -->
            <div class="bg-green-100 p-6 rounded-lg" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <h3 class="text-xl font-semibold mb-4">Step 2: Read Reviews</h3>
                <p class="text-gray-700">
                    Check out reviews and ratings from other users. This will help you choose a reliable and skilled service provider for your task.
                </p>
            </div>
            <!-- Step 3 -->
            <div class="bg-green-100 p-6 rounded-lg" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h3 class="text-xl font-semibold mb-4">Step 3: Contact Providers</h3>
                <p class="text-gray-700">
                    Contact the service providers directly to discuss your requirements, ask questions, and get a quote. Communication is key!
                </p>
            </div>
        </div>

        <!-- Service Showcase Section -->
        <section class="my-12">
            <h2 class="text-3xl font-semibold mb-6">Discover Our Featured Services</h2>
            <!-- Add your featured services here with images and descriptions -->
            <!-- Example Card (Replace with actual content) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-duration="800">
                    <img src="https://via.placeholder.com/400x200" alt="Service Image" class="mb-4 rounded-lg object-cover w-full h-40">
                    <h3 class="text-xl font-semibold mb-2">Featured Service 1</h3>
                    <p class="text-gray-600">Description of the featured service...</p>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>

        <!-- Client Testimonial Section -->
        <section class="my-12">
            <h2 class="text-3xl font-semibold mb-6">What Our Clients Say</h2>
            <!-- Add client testimonials here -->
            <!-- Example Testimonial (Replace with actual content) -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-duration="800">
                <p class="text-gray-700">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat consequat nisl, non dapibus ex posuere id. Nulla facilisi. Integer ut justo vitae risus venenatis viverra."</p>
                <p class="mt-4 text-gray-600">- Client Name, City</p>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="my-12">
            <h2 class="text-3xl font-semibold mb-6">Contact Us</h2>
            <p class="text-gray-600">Have questions or need assistance? Reach out to us!</p>
            <!-- Add your contact form here -->
            <form action="#" method="post" class="mt-6" data-aos="fade-up" data-aos-duration="800">
                <!-- Form fields go here -->
                <div class="flex items-center">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Send Message</button>
                </div>
            </form>
        </section>

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