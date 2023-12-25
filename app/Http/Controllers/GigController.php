<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Gig;

class GigController extends Controller
{
    public function store_gig_data(Request $request)
    {
        // $fileName = time() . '-sv.' . $request -> file('picture')->getClientOriginalExtension();
        // echo $request -> file('picture')->storeAs("uploads", $fileName);
        $request->validate([
            'serviceTitle' => 'required',
            // 'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            // 'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add validation rules for other fields
        ]);

        // Handle image upload
        
            $image = $request->file('picture')->store('images');
            // $imageName = time() . '-sv.' . $image->getClientOriginalExtension();
            // $image->store('images');

        // Save the gig
        Gig::create([
            'title' => $request-> serviceTitle,
            'description' => $request-> serviceDescription,
            'service_category' => $request->serviceCategory,
            'price_rate' => $request->priceRate,
            'city_name' => $request->cityName,
            'address' => $request->completeLocation,
            'tags' => $request->tags,
            'image' => $image,
            'user_id' => auth()->id(), // Assuming the user is authenticated
        ]);

        return redirect()->route('dashboard')->with('success', 'Gig created successfully');
    }

    public function View_dashboard(){
        return view('dashboard');
    }

    public function show_gigs(){
        $userId = Auth::id();

    // Get all gigs associated with the authenticated user
    $userGigs = Gig::where('user_id', $userId)->get();

    return view('admin.gigs', ['userGigs' => $userGigs]);
    }
}
