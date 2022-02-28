<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class changePicController extends Controller
{
    public function index()
    {
        return view('changePic', [
            'title' => 'Change Profile Picture',
        ]);
    }

    public function remove() //remove picture
    {
        //get user
        $id = Auth::id();
        $user = User::find($id);

        //delete old file
        if (file_exists(public_path("images/$user->image"))) {
            File::delete(public_path("images/$user->image"));
        }

        //change to null
        $user->update(['image' => null]);

        //return
        return back()
            ->with('success', 'Photo Removed!');
    }

    public function store(Request $request) //upload new picture
    {
        //nullify
        $request['image'] = null;

        //validate
        $validatedData = $request->validate([
            'image' => ['image', 'file','mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        //get user
        $id = Auth::id();
        $user = User::find($id);

        //if there's photo
        if ($validatedData['image'] != null) {

            //change to new name
            $newName = time() . '.' . $request->image->extension();

            //move to folder public/images
            $request->image->move(public_path('images'), $newName);

            //delete old file
            if (file_exists(public_path("images/$user->image"))) {
                File::delete(public_path("images/$user->image"));
            }

            //store new name on database
            $validatedData['image'] = $newName;
            $user->update(['image' => $validatedData['image']]);
            $request->session()->flash('success', 'Profile Picture Successfully Updated!');
        }


        return redirect('/changepic');
    }
}
