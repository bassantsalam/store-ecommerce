<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\ProfileRequest;
class ProfileController extends Controller
{
    public function editProfile()
    {
      //return auth('admin') -> user();
      $admin  = Admin::find(auth('admin') -> user()->id);
      return view('dashboard.profile.edit', compact('admin'));
    }

    public function updateProfile(ProfileRequest $request )
    {
       
      return 'll';
         
        
        
           
        
    }
}
