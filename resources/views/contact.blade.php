@extends('layouts.main')


@section('title')
Contact Us
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Contact Us</title>
    <style>
        /* Custom Styles for Contact Form */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
            color: #4a5568;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #cbd5e0;
            border-radius: 0.25rem;
            transition: border-color 0.2s ease-in-out;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3182ce;
        }

        .form-group textarea {
            resize: vertical;
        }

        .error-message {
            color: #e53e3e;
            font-size: 0.75rem;
            margin-top: 0.25rem;
        }

        .success-message {
            color: #38a169;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header Section with Random Background Image -->
    <header class="relative bg-cover bg-center text-white py-24" style="background-image: url('https://source.unsplash.com/random/1920x1080')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10">
            <h1 class="text-4xl font-extrabold leading-tight mb-4">Contact Us</h1>
            <p class="text-lg">Get in touch with us. We'd love to hear from you!</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

        <!-- Section 1: Address and Contact Information -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800">
            <!-- ... (same as previous) -->
        </section>

        <!-- Section 2: Contact Form -->
        <section class="mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <h2 class="text-3xl font-semibold mb-6">Send Us a Message</h2>
            <form action="#" method="post" id="contactForm" class="max-w-lg mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" required>
                        <div class="error-message" id="nameError"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" required>
                        <div class="error-message" id="emailError"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject">
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea name="message" id="message" rows="4" required></textarea>
                    <div class="error-message" id="messageError"></div>
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select name="priority" id="priority">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Send Message</button>
                </div>
                <div class="success-message" id="successMessage"></div>
            </form>
        </section>

        <!-- Section 3: Map -->
        <!-- ... (same as previous) -->

        <!-- Section 4: Social Media Links -->
        <!-- ... (same as previous) -->

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

    <!-- Custom JavaScript for Form Validation -->
    <script>
        const contactForm =





@endsection