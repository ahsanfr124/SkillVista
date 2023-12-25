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
    <title>About Us</title>
</head>
<body class="bg-gray-100">

    <!-- Header Section with Random Background Image -->
    <header class="relative bg-cover bg-center text-white py-24" style="background-image: url('https://source.unsplash.com/random/1920x1080')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10">
            <h1 class="text-4xl font-extrabold leading-tight mb-4">About Us</h1>
            <p class="text-lg">Discover the story behind our journey and mission.</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

        <!-- Section 1: Our Story -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-3xl font-semibold mb-6">Our Story</h2>
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor, turpis vel ultricies sollicitudin,
                augue nisi malesuada ipsum, eget vulputate orci metus nec ligula. Sed at hendrerit ante, a interdum dolor.
            </p>
        </section>

        <!-- Section 2: Mission and Vision -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <h2 class="text-3xl font-semibold mb-6">Mission and Vision</h2>
            <p class="text-gray-600">
                Nullam eu dui in turpis venenatis efficitur in non urna. Curabitur accumsan, velit in vestibulum iaculis,
                velit est gravida nisl, nec luctus purus odio sit amet odio.
            </p>
        </section>

        <!-- Section 3: Our Team -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
            <h2 class="text-3xl font-semibold mb-6">Meet Our Team</h2>
            <!-- Add information about team members -->
            <!-- Example Team Member (Replace with actual content) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="mb-4 rounded-full object-cover w-20 h-20 mx-auto">
                    <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <!-- Add more team members as needed -->
            </div>
        </section>

        <!-- Section 4: Awards and Recognitions -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
            <h2 class="text-3xl font-semibold mb-6">Awards and Recognitions</h2>
            <p class="text-gray-600">
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Quisque eu tortor quis enim consectetur fermentum vel vitae sem.
            </p>
        </section>

        <!-- Section 5: Contact Us -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
            <h2 class="text-3xl font-semibold mb-6">Contact Us</h2>
            <p class="text-gray-600">
                Have questions or want to get in touch? We'd love to hear from you! Feel free to reach out using our contact form.
            </p>
            <!-- Add your contact form here -->
            <form action="#" method="post" class="mt-6">
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


@endsection