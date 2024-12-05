<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Finer;
use App\Models\Gig;
use App\Models\Minsubcategory;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomePageController extends Controller
{
    // Fetch categories and user data
    private function getViewData()
    {
        // Retrieve the authenticated user
        $user = Auth::user();
        $username = $user ? $user->name : null;
        $profilepicture = $user ? $user->profile_picture : null;
        $status = $user ? $user->status : null;

//        dd($profilepicture);
        $firstLetter = $username ? substr($username, 0, 1) : null;


        return compact('user', 'username', 'firstLetter', 'profilepicture','status');
    }

     public function index()
     {
         $data = $this->getViewData();
         $user = $data['user'];
         $status = $user ? $user->status : null;
 
 //        dd
         // Conditional redirection based on status
         switch ($status) {
             case null:
                 return view('home.dashboard', $data);
             case 1:
                 return view('home.dashboard', $data);
             case 4:
                 return view('admin.dashboard', $data);
             case 3:
 
                 return view('home.dashboard', $data);
             default:
                 return view('home.dashboard', $data);
         }
     }
 
     public function dashboard(Request $request)
     {
         $data = $this->getViewData();
         $user = $data['user'];
         $status = $user ? $user->status : null;
 
 //        dd
         // Conditional redirection based on status
         switch ($status) {
             case null:
                 return view('home.dashboard', $data);
             case 1:
                 return view('home.dashboard', $data);
             case 4:
                 return view('admin.dashboard', $data);
             case 3:
                 return view('home.dashboard', $data);
             default:
                 return view('home.dashboard', $data);
         }
     }

     public function realTimeChallenges()
     {
        $data = $this->getViewData();


        return view("home.machines", $data);
     }

     public function performanceTracking()
     {
         $data = $this->getViewData(); // Assuming this method is defined elsewhere
     
         // Get users and order by 'total' in descending order
         $data['users'] = User::orderBy('total', 'desc')->get();

        //  dd($data);

        
     
         return view("home.perfomance",$data);
     }

     public function resources()
     {
        $data = $this->getViewData();


        return view("home.resources", $data);


     }
     public function this()
     {


        return view("home.404");

     }

  
     public function tothsmachine(Request $request)
    {
        $data = $this->getViewData(); // Assuming this method is defined elsewhere
     
        // Get users and order by 'total' in descending order
        $data['name'] =$request->input('machine'); // Use input() instead of query()

       //  dd($data);

        return view("home.sso", $data);
    }

     



}
