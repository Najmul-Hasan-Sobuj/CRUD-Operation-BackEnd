<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        // $data['candidates'] = Candidate::get(); 
        return view('components.profile.profile');
    }
}
