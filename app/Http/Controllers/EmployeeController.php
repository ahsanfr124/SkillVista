<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function show(){
        $employees = Employee::all();
        return view('welcome', ['employees' => $employees]);
    }
    public function add(Request $request){
        $name = $request -> name;
        $role = $request -> role;
        $email = $request -> email;

        $employee = new Employee;
        $employee -> name = $name;
        $employee -> role = $role;
        $employee -> email = $email;
        $employee -> save();
        
        return redirect()->route('welcome')-> with('message', 'data hass been aadded successfully');
    }


    public function delete(string $id){
        $employee = Employee::where('id',$id)->firstOrFail();
        if($employee != null){
        $employee -> delete();
        return redirect()->route('welcome')->with(['message' => 'Successfully deleted!!']);
    }
    else{
        return redirect()->route('welcome')->with('message', 'data has been deleted successfully');
    }
    }
}
