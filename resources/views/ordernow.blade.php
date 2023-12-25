 @extends('layouts.main')


@section('title')
Order Now
@endsection

@section('content')
     <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

        <!-- Header with random relevant picture -->
        <div class="mb-8">
            <!-- Add your header content, you can include a random relevant background image here -->
            <h1 class="text-2xl font-semibold text-gray-800">Place Your Order</h1>
            <!-- Add more content as needed -->
        </div>

        <!-- Order Form -->
        <form action="{{ route('order.save', $id)}}" method="POST" class="space-y-4">
            @csrf

            <!-- Full Name Input -->
            <div class="mb-4">
                <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="full_name" id="full_name" class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            </div>

            <!-- Phone Number Input -->
            <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" name="phone_number" id="phone_number" class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            </div>

            <!-- City Name Input -->
            <div class="mb-4">
                <label for="city_name" class="block text-sm font-medium text-gray-700">City Name</label>
                <input type="text" name="city_name" id="city_name" class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            </div>

            <!-- Full Address Input -->
            <div class="mb-4">
                <label for="full_address" class="block text-sm font-medium text-gray-700">Full Address</label>
                <textarea name="full_address" id="full_address" rows="3" class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300"></textarea>
            </div>

            <!-- Preferred Budget Input -->
            <div class="mb-4">
                <label for="preferred_budget" class="block text-sm font-medium text-gray-700">Preferred Budget</label>
                <input type="number" name="preferred_budget" id="preferred_budget" class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            </div>

            <!-- Query about the problem Input -->
            <div class="mb-4">
                <label for="problem_facing" class="block text-sm font-medium text-gray-700">problem_facing</label>
                <textarea name="problem_facing" id="problem_facing" rows="5" class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300"></textarea>
            </div>

            <!-- Specific Date Input -->
            <div class="mb-4">
                <label for="specific_date" class="block text-sm font-medium text-gray-700">Specific Date</label>
                <input type="date" name="specific_date" id="specific_date" class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            </div>

            {{-- <input type="hidden" name="gig_id" value="{{$id}}"> --}}


        <!-- Preferred Time Slot Input -->
<div class="mb-4">
    <label for="preferred_time" class="block text-sm font-medium text-gray-700">Preferred Time Slot</label>

    <!-- Select Time -->
    <div class="flex space-x-2">
        <select name="preferred_time" id="preferred_time" class="border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            <!-- Add your time options -->
            <option value="01">01</option>
            <option value="02">02</option>
            
            <!-- Add more options as needed -->
        </select>

        <!-- Select AM/PM -->
        <select name="preferred_time_period" id="preferred_time_period" class="border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            <option value="AM">AM</option>
            <option value="PM">PM</option>
        </select>
        <h1 class="mt-2 font-bold">To</h1>
        <select name="preferred_time2" id="preferred_time" class="border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            <!-- Add your time options -->
            <option value="01">01</option>
            <option value="02">02</option>
            
            <!-- Add more options as needed -->
        </select>
        <select name="preferred_time_period2" id="preferred_time_period" class="border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300">
            <option value="AM">AM</option>
            <option value="PM">PM</option>
        </select>
    </div>
</div>


            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300">
                Place Order
            </button>
        </form>
    </div>


@endsection