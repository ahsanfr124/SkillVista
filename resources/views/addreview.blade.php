 @extends('layouts.main')


@section('title')
Order Now
@endsection

@section('content')

 <div class="container mx-auto mt-8 p-8">
    <!-- Rating and Feedback Card -->
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Rate and Provide Feedback</h2>
        <form action="{{route('storefeedback')}}" method="post" class="mb-6">
    @csrf
    {{-- {{$gig_id }}
    {{ $order_id}} --}}
    <input type="hidden" name="gig_id" value="{{ $gig_id }}"> <!-- Replace with your actual variable -->
    <input type="hidden" name="order_id" value="{{ $order_id}}">
        <!-- Feedback Input -->
        <div class="mb-6">
        <label for="feedback" class="text-gray-600 mb-2 block">Feedback:</label>
        <textarea id="feedback" name="feedback" class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300" rows="4"></textarea>
    </div>

        <div class="flex items-center mb-6">
        <span class="text-lg mr-2">Rating:</span>
        <div class="flex">
            <!-- Add the star icons or any other rating mechanism you prefer -->
            <span class="text-3xl cursor-pointer" onclick="setRating(1)" id="star1">&#9733;</span>
            <span class="text-3xl cursor-pointer" onclick="setRating(2)" id="star2">&#9733;</span>
            <span class="text-3xl cursor-pointer" onclick="setRating(3)" id="star3">&#9733;</span>
            <span class="text-3xl cursor-pointer" onclick="setRating(4)" id="star4">&#9733;</span>
            <span class="text-3xl cursor-pointer" onclick="setRating(5)" id="star5">&#9733;</span>
        </div>
        <!-- Add the hidden input for the rating -->
        <input type="hidden" name="rating" id="ratingInput" value="0">
    </div>

    <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600 transition duration-300">Submit Rating</button>
</form>
    </div>

<script>
    function setRating(rating) {
        selectedRating = rating;
        document.getElementById('ratingInput').value = rating;
        updateStarStyles();
        // You can add visual feedback or adjust styles based on the selected rating
        console.log("Selected Rating:", selectedRating);
    }

    function updateStarStyles() {
        for (let i = 1; i <= 5; i++) {
            const starElement = document.getElementById(`star${i}`);
            starElement.style.color = selectedRating >= i ? 'gold' : 'gray';
        }
    }
</script>
</div>

@endsection