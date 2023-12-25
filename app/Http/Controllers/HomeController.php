<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\Order;
use App\Models\Review;

class HomeController extends Controller
{
    public function fetch_data(){
        return view('marketplace');
        }

    public function search_data(Request $request){
    $serviceCategory = $request->input('service');
    $cityName = $request->input('city');

    $gigs = Gig::where('service_category', $serviceCategory)
        ->where('city_name', $cityName)
        ->get();

    return view('searchgig', compact('gigs'));

    }

    public function fetch_gig(string $id){
        $gig = Gig::findOrFail($id);
        $reviews = $gig->reviews;
        // $order = $reviews->order;
        return view('gig', compact('gig', 'reviews'));
    }

    public function fetch_categories(){
    $categories =  Gig::take(3)->get();
    $gig = Gig::all();


    return view('categories', compact(['categories', 'gig']));
}
     public function order_page(string $gig_id){
      return view('ordernow', ['id'=> $gig_id]);
     }

     public function save_order(Request $request, string $id){
        $gig = Gig::findOrFail($id);

        $time = $request -> input('preferred_time') . ':00' . $request -> input('preferred_time_period') . ' - ' . $request -> input('preferred_time2') . ':00' . $request -> input('preferred_time_period2');
        $order = new Order([
            'full_name' => $request->input('full_name'),
            'phone_number' => $request->input('phone_number'),
            'city_name' => $request->input('city_name'),
            'full_address' => $request->input('full_address'),
            'preferred_budget' => $request->input('preferred_budget'),
            'problem_facing' => $request->input('problem_facing'),
            'specific_date' => $request->input('specific_date'),
            'preferred_time_slot' => $time,
        ]);

        $gig->orders()->save($order);
        return redirect()->route('order.details', ['order_id' => $order -> id]);
     }

     public function order_details(Request $request, string $order_id, ?string $review_id= null){
        // $gig = Gig::findOrFail($id);
        // $order = Order::where('gig_id', $id)->first();
        $order = Order::with('gig')->findOrFail($order_id);
        $review_id = $request->query('review_id');
    $review = $review_id ? Review::find($review_id) : null;
            
        // }
        
        // return view('orderdetail', ['order' => $order]);
        return view('orderdetail', ['order' => $order, 'review' => $review]);
     }


     public function feedback(Request $request){
        $gig_id = $request->input('gig_id');
        $gig = Gig::with('user')->find($gig_id);
        $user = $gig->user;
        $order_id = $request->input('order_id');
        $review = new Review([
            'comment' => $request->input('feedback'),
            'rating' => $request->input('rating'),
            'user_id' => $gig->user->id,
            'gig_id' => $request->input('gig_id'),
            'order_id' => $request->input('order_id'),
        ]);

        $review->save();
        return redirect()->route('feedbacksuccess', $order_id)->with('success', 'Feedback submitted successfully!');
     }

     public function addreview($gig_id, $order_id){
        return view('addreview', [
            'gig_id' => $gig_id,
            'order_id' => $order_id,
        ]);
     }

     public function feedback_redirect($order_id){
        $review = Review::where('order_id', $order_id)->first();
        return redirect()->route('order.details', ['order_id' => $order_id, 'review_id' => $review ? $review->id : null]);

     }
}
