<?php

namespace App\Http\Controllers;

// use File;
use Helper;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['candidates'] = Candidate::paginate(4); 
        return view('components.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'fname'       => 'required',
            'lname'       => 'required',
            'cname'       => 'required',
            'address'     => 'required',
            'email'       => 'required',
            'phone'       => 'required',
            'image'       => 'required',
            'description' => 'required',
        ]);

        if ($validation->passes()) {
            $mainFile = $request->image;
           $globalFunImg=  Helper::imageUpload($mainFile);

           if ($globalFunImg['status'] == 1) {
               Candidate::create([
                   'fname'       => $request->fname,
                   'lname'       => $request->lname,
                   'cname'       => $request->cname,
                   'address'     => $request->address,
                   'email'       => $request->email,
                   'phone'       => $request->phone,
                   'description' => $request->description,
                   'image'       => $globalFunImg['filaName'],
               ]);
               Toastr::success('Post added successfully');
               return redirect()->back();  
           }else {
               Toastr::warning('File extention not matching');
                return redirect()->back();
           }
        }else {
            $messages = $validation->messages();
            foreach ($messages->all() as $message)
            {
                Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return redirect()->back()->withErrors($validation);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['candidates'] = Candidate::find($id); 
        return view('components.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validation = Validator::make($request->all(), [
            'fname'       => 'required',
            'lname'       => 'required',
            'cname'       => 'required',
            'address'     => 'required',
            'email'       => 'required',
            'phone'       => 'required',
        //  'image'       => 'required',
            'description' => 'required',
        ]);

        if ($validation->passes()) {
            $insertData = [
                'fname'       => $request->fname,
                'lname'       => $request->lname,
                'cname'       => $request->cname,
                'address'     => $request->address,
                'email'       => $request->email,
                'phone'       => $request->phone,
                'description' => $request->description,
            ];

            $candidateInfo = Candidate::find($id);
            if (isset($request->image) && $candidateInfo->image != $request->image) {
                $mainFile = $request->image;
                $globalFunImg=  Helper::imageUpload($mainFile);
                
                if ($globalFunImg['status'] == 1) {
                    // if (File::exists('uploads/candidate/')) {
                       
                    // }
                    File::delete(public_path('uploads/candidate/').$candidateInfo->image);
                    File::delete(public_path('uploads/candidate/thumb/').$candidateInfo->image);

                    $insertData['image'] = $globalFunImg['filaName'];
                    $candidateInfo->update($insertData);
                    Toastr::success('Post added successfully');
                    return redirect()->back(); 
                } else {
                    Toastr::warning('File extention not matching');
                    return redirect()->back();  
               }
            } else {
                $candidateInfo->update($insertData);
                Toastr::success('Post added successfully');
                return redirect()->back(); 
            }
            
        }else {
            $messages = $validation->messages();
            foreach ($messages->all() as $message)
            {
                Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return redirect()->back()->withErrors($validation);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Candidate::find($id)->delete();
    }
}
