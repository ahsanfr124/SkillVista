 @extends('layouts.main')


@section('title')
Order Now
@endsection

@section('content')

@if (session('success'))
   <script>
        swal("Good job!", "You have submitted the order!", "success");
    </script>
@endif

<div class="container mx-auto mt-8 p-8">
    <!-- Gig Details Card -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-8 flex items-center">
        <!-- Gig Image (Replace 'your_image_url' with the actual URL) -->
        <img src="{{asset('uploads/'. $order ->gig -> image )}}" alt="Gig Image" class="w-24 h-24 object-cover rounded-full">

        <!-- Gig Information -->
        <div class="ml-4">
            <h2 class="text-xl font-semibold mb-2">{{$order->gig->title}}</h2>
            <p class="text-gray-500">Service Category: {{$order->gig->service_category}}</p>
            <p class="text-gray-500">Price: ${{$order ->gig -> price_rate}}</p>
            <p class="text-gray-500">Location: {{$order ->gig -> city_name}}</p>
            <!-- Add more gig details as needed -->
        </div>
    </div>
    <div class="container mx-auto mt-8 p-8">
    <!-- Order Details Card -->
    <div class="bg-white p-8 rounded-lg shadow-md flex">
        <!-- Left Column - Order Information -->
        <div class="mr-8">
        @if ($order)
            <h2 class="text-2xl font-semibold mb-4">Order #SV{{$order -> id}}</h2>
            <p class="text-gray-500 mb-2">Placed on: {{ \Carbon\Carbon::parse($order -> created_at)->format('d F Y') }}</p>
            <p class="text-gray-500">Total Amount: <span class="text-blue-600 font-semibold">${{$order -> preferred_budget}}</span></p>
        </div>

        <!-- Right Column - Customer and Service Information -->
        <div>
            <!-- Customer Information -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-2">Customer Information</h3>
                <p class="mb-1"><strong>Name:</strong> {{$order -> full_name}}</p>
                <p class="mb-1"><strong>Phone Number:</strong> {{$order ->phone_number}}</p>
                <p class="mb-1"><strong>City:</strong> {{$order -> city_name}}</p>
                <p><strong>Address:</strong> {{$order -> full_address}}</p>
            </div>

            <!-- Service Details -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-2">Service Details</h3>
                <p class="mb-1"><strong>Service:</strong>{{$order->gig->service_category}} </p>
                <p class="mb-1"><strong>Preferred Budget:</strong>${{$order -> preferred_budget}}</p>
                <p><strong>Problem Facing:</strong> {{$order -> problem_facing}}</p>
            </div>

            <!-- Appointment Details -->
            <div>
                <h3 class="text-xl font-semibold mb-2">Appointment Details</h3>
                <p class="mb-1"><strong>Specific Date:</strong> <strong class="text-red-500">{{ \Carbon\Carbon::parse($order -> specific_date)->format('d F Y') }}</strong></p>
                <p><strong>Preferred Time Slot:</strong> {{$order -> preferred_time_slot}}</p>
            </div>
            @else
    <p>No order details found.</p>
@endif
        </div>
    </div>
</div>


@if($review)
<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
    <div class="flex justify-between items-center mb-4">
        <div>
            <h3 id="userName" class="text-xl font-bold">{{$order -> full_name}}</h3>
            @php
            $uppercity = strtoupper($order -> city_name);

            @endphp
            <p id="cityName" class="text-sm text-green-500">{{$uppercity}}</p>
        </div>
        <div class="flex">
            <div id="starRating" class="flex gap-1" value='{{$review-> rating}}'></div>
        </div>
    </div>
    <p id="userComment" class="text-gray-700">{{$review -> comment}}</p>
</div>

@else
<div class="review-card overflow-hidden rounded-lg shadow-md transition-transform transform hover:scale-105">
    <div class="bg-cover bg-center h-40" style="background-image: url('https://source.unsplash.com/800x600/?nature');"></div>
    <div class="p-4">
        <div class="text-2xl font-bold text-gray-800">Leave a Review</div>
        <div class="mt-2 text-sm text-gray-600">Share your experience with us!</div>
        <a href="{{ route('addfeedback', ['gig_id' => $order->gig->id, 'order_id' => $order->id]) }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white font-bold rounded transition duration-300 hover:bg-blue-600">Write a Review</a>

    </div>
</div>
@endif




</div>

<script>
@if($review)
        var starRating = @json($review->rating);
        console.log(starRating);
    @else
        var starRating = null;
    @endif

    // Function to update the star rating based on user input
    function updateStarRating(rating) {
        const starsContainer = document.getElementById('starRating');
        starsContainer.innerHTML = ''; // Clear previous stars

        for (let i = 1; i <= 5; i++) {
            const star = document.createElement('span');
            star.className = i <= rating ? 'text-yellow-400' : 'text-gray-300';
            star.innerHTML = '&#9733;'; // Unicode character for a star
            starsContainer.appendChild(star);
        }
    }

    // Update the star rating if it is available
    if(starRating !== null) {
        updateStarRating(starRating);
    }
</script>

@endsection