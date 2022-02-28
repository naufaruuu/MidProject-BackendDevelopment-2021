<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Validation\Rules\Password;
use App\Models\enrolledCourse;
use App\Models\sessionCourse;



class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        //nullify
        $request['image'] = null;

        //validate
        $validatedData = $request->validate([
            'name' => ['required', 'max:45', 'min:10'],
            'username' => ['required', 'min:3', 'max:15', 'unique:users'],
            'image' => ['image', 'file', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => [
                'required',
                'confirmed',
                'string',
                'max:20',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'dob' => ['required', 'date', 'date_format:Y-m-d', 'before:today'],
            'address' => ['required'],
            'phone' => ['required', 'numeric']
        ]);

        //change picture name - save to public/images - save to variable
        if ($validatedData['image'] != null) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        //copy username for another database
        $addDB['username'] = $validatedData['username'];

        //encrypt password
        $validatedData['password'] = Hash::make($validatedData['password']);

        //save to database
        User::create($validatedData);
        enrolledCourse::create($addDB);
        sessionCourse::create($addDB);

        //back
        $request->session()->flash('success', 'Registration Success! Please Login!');

        return redirect('/login');
    }
}
