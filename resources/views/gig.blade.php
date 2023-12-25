@extends('layouts.main')

@section('title')
Gig Page
@endsection

@section('content')
 <div class="container mx-auto mt-8">
        <div class="bg-white border p-8 rounded-md shadow-md mb-8 overflow-hidden transition-transform transform hover:scale-105">
            <div class="flex items-center mb-6">
                <div class="w-1/2">
                    <img src="{{ asset('storage/uploads/' . $gig->image) }}" alt="{{ $gig->title }}" class="object-cover w-full h-64 rounded-md hover:opacity-80 transition-opacity">
                </div>
                <div class="w-1/2 pl-8">
                    <p class="text-sm text-gray-500">{{ $gig->service_category }}</p>
                    <h2 class="text-3xl font-semibold mb-2">{{ $gig->title }}</h2>
                    <p class="text-gray-700">{{ $gig->description }}</p>
                </div>
            </div>

            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Price</h3>
                    <p class="text-2xl text-green-500 font-bold">${{ $gig->price_rate }}/Hour</p>
                </div>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Order Now</button>
            </div>

            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-2">Address</h3>
                <p class="text-gray-700">{{ $gig->address }}</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-2">Tags</h3>
                <div class="flex space-x-2">
                   
                        <span class="bg-blue-500 text-white px-2 py-1 rounded-md">{{ $gig->tags}}</span>
                    
                </div>
            </div>
        </div>
    </div>
 <div class="container mx-auto mt-8">
    <div class="bg-white border p-8 rounded-md shadow-md mb-8 overflow-hidden transition-transform transform hover:scale-105">
        <!-- Existing Gig Details Section -->

        <!-- Review Section -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Reviews</h2>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-4">
                <!-- Dummy Reviews -->
                @if($reviews->isEmpty())
                <div class="text-gray-600 text-lg">
                    No reviews available for this gig.
                    <div class="mt-4">
                        <!-- Random emoji SVG (replace this with your desired emoji) -->
                        <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 20 20">
                            <!-- Your SVG path here -->
                            <path d="M10 1l1.9 5.6h6.1l-4.9 3.6L16.3 18l-5.9-4.5L4.3 18l1.2-7.4L0 6.6h6.1L8 1z"></path>
                        </svg>
                    </div>
                </div>
                @else
                @foreach($reviews as $review)
                    <div class="bg-gray-100 p-4 rounded-md hover:shadow-md transition-shadow mb-4">
                        <div class="flex items-center mb-2">
                            <div class="text-2xl text-yellow-500 mr-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $review->rating)
                                        <svg fill="currentColor" class="w-5 h-5"><path d="M10 1l1.9 5.6h6.1l-4.9 3.6L16.3 18l-5.9-4.5L4.3 18l1.2-7.4L0 6.6h6.1L8 1z"></path></svg>
                                    @else
                                        <svg fill="currentColor" class="w-5 h-5 text-gray-300"><path d="M10 1l1.9 5.6h6.1l-4.9 3.6L16.3 18l-5.9-4.5L4.3 18l1.2-7.4L0 6.6h6.1L8 1z"></path></svg>
                                    @endif
                                @endfor
                            </div>
                            <span class="text-gray-600">{{ $review->order->full_name }}</span>
                        </div>
                        <p class="text-gray-700">{{ $review->comment }}</p>
                    </div>
                @endforeach
                @endif
                <!-- End Dummy Reviews -->
            </div>
        </div>
    </div>
</div>








@endsection