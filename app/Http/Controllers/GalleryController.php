<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function galleryImage()
    {
        $data['candidates'] = Candidate::get(); 
        return view('components.gallery.gallery',$data);
    }
}