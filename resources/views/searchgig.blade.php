@extends('layouts.main')


@section('title')
Search Gig
@endsection

@section('content')
    <div class="container mx-auto mt-8">
        @if($gigs->isEmpty())
            <h2 class="text-2xl font-semibold mb-4">No results found</h2>
        @else
            <h2 class="text-2xl font-semibold mb-4">
                Searching "{{ $gigs->first()->service_category }}" in "{{ $gigs->first()->city_name }}" - Found {{ $gigs->count() }} result{{ $gigs->count() > 1 ? 's' : '' }}
            </h2>

            @foreach($gigs as $gig)
                <div class="bg-white border p-4 rounded-md shadow-md mb-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-1/4">
                            <img src="{{ asset('storage/images/'. $gig -> image ) }}" alt="{{ $gig->title }}" class="object-cover w-full h-full rounded-md">
                        </div>
                        <div class="w-3/4 ml-4">
                            <h4 class="text-lg font-semibold text-gray-700">{{ $gig->title }}</h4>
                            <p class="text-sm text-green-500">{{ $gig->service_category }}</p>
                            <p class="text-sm text-gray-500">Price Rate: ${{ $gig->price_rate }}/hour</p>
                            <p class="text-sm text-gray-500">Address: {{ $gig->address }}</p>
                            <!-- Display other gig information as needed -->
                        </div>
                    </div>

                    <div class="flex flex-col items-end">
                        <a href="{{route('order_page', $gig-> id)}}"><button class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 mb-2">Order Now</button></a>
                        <a href="{{route('gig.data', $gig -> id )}}"><button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">View More</button></a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection