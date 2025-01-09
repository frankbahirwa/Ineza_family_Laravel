<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //selecting all users from the database
        $participants = Participants::all();
        return view('Members', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //displaying the formm 
        return view('addNew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'Fname' => 'required',
            'Lname' => 'required',
            'Gender' => 'required',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 
        ]);
    
        
        $fname = $request->input('Fname');
        $lname = $request->input('Lname');
        $gender = $request->input('Gender');
    
        
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imagePath = $image->store('images', 'public');
        } else {
            $imagePath = null; 
        }
    
        Participants::create([
            'Fname' => $fname,
            'Lname' => $lname,
            'Gender' => $gender,
            'profile_picture' => $imagePath
        ]);
    
        return redirect()->route('participants.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //umuyuza umwe
        $participants = participants::findorfail($id);
        return view('view', compact('participants'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $participants = participants::findorfail($id);

        return view('update' , compact('participants'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    
    {
        //
        $request->validate([
            'Fname' => 'required',
            'Lname' => 'required',
            'Gender'=> 'required',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    
        ]);

        $participant = participants::findorfail($id);
        $participant->Fname = $request->input('Fname');
        $participant->Lname = $request->input('Lname');
        $participant->Gender = $request->input('Gender');
        
        if($request->hasfile('profile_picture')){
            $image = $request->file('profile_picture');
            $imagepath = $image->store('images' , 'public');
            $participant->profile_picture = $imagepath;
        }

        $participant->save();
        return redirect()->route('participants.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participants $participants)
    {
        //
    }
}
