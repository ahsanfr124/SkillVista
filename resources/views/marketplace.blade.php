@extends('layouts.main')


@section('title')
Home Page
@endsection

@section('content')
 <div class="relative h-96 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random');">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="flex items-center justify-center h-full">
            <h1 class="text-white text-5xl font-bold">Marketplace</h1>
        </div>
    </div>

    <div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full md:w-96">
        <h1 class="text-2xl font-semibold mb-6">Find Local Services</h1>

        <!-- Search Form -->
        <form action="{{ route('search.data') }}" method="POST" class="space-y-4">
            @csrf
            <!-- Service Input -->
            <div class="relative">
                <input
                    type="text"
                    name="service"
                    placeholder="Search for a service (e.g., Mechanic)"
                    class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300"
                />
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>

            <!-- City Dropdown -->
            <div class="relative">
                <select
                    name="city"
                    id="cityDropdown"
                    class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300"
                >
                    <option value="" disabled selected>Select your city</option>
                    <!-- Cities of Pakistan -->
                    <!-- ... (unchanged) ... -->
                    <option value="Karachi">Karachi</option>
        <option value="Lahore">Lahore</option>
        <option value="Islamabad">Islamabad</option>
        <option value="Rawalpindi">Rawalpindi</option>
        <option value="Faisalabad">Faisalabad</option>
        <option value="Multan">Multan</option>
        <option value="Peshawar">Peshawar</option>
        <option value="Quetta">Quetta</option>
        <option value="Sialkot">Sialkot</option>
        <option value="Gujranwala">Gujranwala</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Abbottabad">Abbottabad</option>
        <option value="Sargodha">Sargodha</option>
        <option value="Sukkur">Sukkur</option>
        <option value="Larkana">Larkana</option>
        <option value="Sheikhupura">Sheikhupura</option>
        <option value="Bahawalpur">Bahawalpur</option>
        <option value="Jhang">Jhang</option>
        <option value="Gujrat">Gujrat</option>
        <option value="Mardan">Mardan</option>
        <option value="Kasur">Kasur</option>
        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
        <option value="Swat">Swat</option>
        <option value="Sahiwal">Sahiwal</option>
        <option value="Okara">Okara</option>
        <option value="Wah Cantonment">Wah Cantonment</option>
        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
        <option value="Mirpur Khas">Mirpur Khas</option>
        <option value="Nawabshah">Nawabshah</option>
        <option value="Bannu">Bannu</option>
        <option value="Kohat">Kohat</option>
        <option value="Layyah">Layyah</option>
        <option value="Muzaffargarh">Muzaffargarh</option>
        <option value="Mingora">Mingora</option>
        <option value="Chiniot">Chiniot</option>
        <option value="Kamoke">Kamoke</option>
        <option value="Mandi Bahauddin">Mandi Bahauddin</option>
        <option value="Jhelum">Jhelum</option>
        <option value="Sadiqabad">Sadiqabad</option>
        <option value="Khanewal">Khanewal</option>
        <option value="Hafizabad">Hafizabad</option>
        <option value="Kohlu">Kohlu</option>
        <option value="Daska">Daska</option>
        <option value="Turbat">Turbat</option>
        <option value="Gojra">Gojra</option>
        <option value="Dadu">Dadu</option>
        <option value="Muridke">Muridke</option>
        <option value="Bahawalnagar">Bahawalnagar</option>
        <option value="Samundri">Samundri</option>
        <option value="Tando Allahyar">Tando Allahyar</option>
        <option value="Jaranwala">Jaranwala</option>
        <option value="Chishtian Mandi">Chishtian Mandi</option>
        <option value="Attock">Attock</option>
        <option value="Vehari">Vehari</option>
        <option value="Kot Abdul Malik">Kot Abdul Malik</option>
        <option value="Ferozwala">Ferozwala</option>
        <option value="Chakwal">Chakwal</option>
        <option value="Gujranwala Cantonment">Gujranwala Cantonment</option>
        <option value="Kamalia">Kamalia</option>
        <option value="Umerkot">Umerkot</option>
        <option value="Ahmedpur East">Ahmedpur East</option>
        <option value="Kot Addu">Kot Addu</option>
        <option value="Wazirabad">Wazirabad</option>
        <option value="Mansehra">Mansehra</option>
        <option value="Loralai">Loralai</option>
        <option value="Shikarpur">Shikarpur</option>
        <option value="Haripur">Haripur</option>
        <option value="Mianwali">Mianwali</option>
        <option value="Chaman">Chaman</option>
        <option value="Charsadda">Charsadda</option>
        <option value="Khairpur">Khairpur</option>
        <option value="Zhob">Zhob</option>
        <option value="Nowshera">Nowshera</option>
        <option value="Jalalpur">Jalalpur</option>
        <option value="Muzaffarabad">Muzaffarabad</option>
        <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
        <option value="Dera Ismail Khan">Dera Ismail Khan</option>
        <option value="Charsadda">Charsadda</option>
        <!-- Add more cities as needed -->
    </select>
                </select>
            </div>

            <!-- Search Button -->
            <button
                type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300"
            >
                Search
            </button>
        </form>
    </div>
</div>


{{-- 
    <div class="  bg-white p-8 rounded-lg shadow-lg w-full md:w-96">
        <h1 class="text-2xl font-semibold mb-6">Find Local Services</h1>

        <!-- Search Form -->
        <form action="{{route('search.data')}}" method="POST" class="space-y-4">
            <!-- Service Input -->
            @csrf
            <div class="relative">
                <input
                    type="text"
                    name="service"
                    placeholder="Search for a service (e.g., Mechanic)"
                    class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300"
                />
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>

            <!-- City Dropdown -->
            <div class="relative">
    <select
        name="city"
        id="cityDropdown"
        class="w-full border rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 transition duration-300"
    >
        <option value="" disabled selected>Select your city</option>
        <!-- Cities of Pakistan -->
        <option value="Karachi">Karachi</option>
        <option value="Lahore">Lahore</option>
        <option value="Islamabad">Islamabad</option>
        <option value="Rawalpindi">Rawalpindi</option>
        <option value="Faisalabad">Faisalabad</option>
        <option value="Multan">Multan</option>
        <option value="Peshawar">Peshawar</option>
        <option value="Quetta">Quetta</option>
        <option value="Sialkot">Sialkot</option>
        <option value="Gujranwala">Gujranwala</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Abbottabad">Abbottabad</option>
        <option value="Sargodha">Sargodha</option>
        <option value="Sukkur">Sukkur</option>
        <option value="Larkana">Larkana</option>
        <option value="Sheikhupura">Sheikhupura</option>
        <option value="Bahawalpur">Bahawalpur</option>
        <option value="Jhang">Jhang</option>
        <option value="Gujrat">Gujrat</option>
        <option value="Mardan">Mardan</option>
        <option value="Kasur">Kasur</option>
        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
        <option value="Swat">Swat</option>
        <option value="Sahiwal">Sahiwal</option>
        <option value="Okara">Okara</option>
        <option value="Wah Cantonment">Wah Cantonment</option>
        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
        <option value="Mirpur Khas">Mirpur Khas</option>
        <option value="Nawabshah">Nawabshah</option>
        <option value="Bannu">Bannu</option>
        <option value="Kohat">Kohat</option>
        <option value="Layyah">Layyah</option>
        <option value="Muzaffargarh">Muzaffargarh</option>
        <option value="Mingora">Mingora</option>
        <option value="Chiniot">Chiniot</option>
        <option value="Kamoke">Kamoke</option>
        <option value="Mandi Bahauddin">Mandi Bahauddin</option>
        <option value="Jhelum">Jhelum</option>
        <option value="Sadiqabad">Sadiqabad</option>
        <option value="Khanewal">Khanewal</option>
        <option value="Hafizabad">Hafizabad</option>
        <option value="Kohlu">Kohlu</option>
        <option value="Daska">Daska</option>
        <option value="Turbat">Turbat</option>
        <option value="Gojra">Gojra</option>
        <option value="Dadu">Dadu</option>
        <option value="Muridke">Muridke</option>
        <option value="Bahawalnagar">Bahawalnagar</option>
        <option value="Samundri">Samundri</option>
        <option value="Tando Allahyar">Tando Allahyar</option>
        <option value="Jaranwala">Jaranwala</option>
        <option value="Chishtian Mandi">Chishtian Mandi</option>
        <option value="Attock">Attock</option>
        <option value="Vehari">Vehari</option>
        <option value="Kot Abdul Malik">Kot Abdul Malik</option>
        <option value="Ferozwala">Ferozwala</option>
        <option value="Chakwal">Chakwal</option>
        <option value="Gujranwala Cantonment">Gujranwala Cantonment</option>
        <option value="Kamalia">Kamalia</option>
        <option value="Umerkot">Umerkot</option>
        <option value="Ahmedpur East">Ahmedpur East</option>
        <option value="Kot Addu">Kot Addu</option>
        <option value="Wazirabad">Wazirabad</option>
        <option value="Mansehra">Mansehra</option>
        <option value="Loralai">Loralai</option>
        <option value="Shikarpur">Shikarpur</option>
        <option value="Haripur">Haripur</option>
        <option value="Mianwali">Mianwali</option>
        <option value="Chaman">Chaman</option>
        <option value="Charsadda">Charsadda</option>
        <option value="Khairpur">Khairpur</option>
        <option value="Zhob">Zhob</option>
        <option value="Nowshera">Nowshera</option>
        <option value="Jalalpur">Jalalpur</option>
        <option value="Muzaffarabad">Muzaffarabad</option>
        <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
        <option value="Dera Ismail Khan">Dera Ismail Khan</option>
        <option value="Charsadda">Charsadda</option>
        <!-- Add more cities as needed -->
    </select>
</div>

            <!-- Search Button -->
            <button
                type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300"
            >
                Search
            </button>
        </form>
    </div> --}}



<!-- ... (rest of the code) -->

<div class="bg-gray-100 py-8">
    <div class="container mx-auto">

        <!-- Category 1: Mechanic -->
        <div class="mb-8 flex justify-between items-center">
            <h2 class="text-3xl font-semibold mb-4">Mechanic</h2>

            <!-- See More Button -->
            <div class="flex items-center">
                <button class="text-blue-500 hover:text-blue-600 transition duration-300">
                    See More
                    
                </button>
            </div>
        </div>

        <!-- Service Provider Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" mb-[5rem]>
 
    <!-- Service Card 1 -->
    <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md transform transition duration-500 hover:scale-105 mb-[3rem]">
        <img src="https://via.placeholder.com/300" alt="Service Image" class="w-full h-40 object-cover object-center">
        <div class="p-6">
            <div class="flex justify-between items-center mb-2">
            <span class="text-green-500 font-semibold">Category Name</span>
                <p class="text-gray-600">Location: City</p>
                
            </div>
            <h3 class="text-xl font-semibold mb-2">Service Title</h3>
            <p class="text-gray-600 mb-2">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="flex items-center mb-2">
                <span class="text-yellow-500">&#9733;</span>
                <span class="text-yellow-500">&#9733;</span>
                <span class="text-yellow-500">&#9733;</span>
                <span class="text-yellow-500">&#9733;</span>
                <span class="text-yellow-500">&#9733;</span>
            </div>
        </div>
    </div>

    </div>
</div>



@endsection