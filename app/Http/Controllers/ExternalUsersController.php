<?php

namespace App\Http\Controllers;

use App\Models\external_users;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ExternalUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Login.landingPage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'phone' => ['required', 'unique:users', 'max:12'],
            'password' => ['required', 'min:5', 'max:35'],
            'confirm_password' => ['required', 'min:5', 'max:35', 'same:password'],
            'nik' => ['required', 'unique:users', 'max:16'],
        ]);

        // $validatedData['id'] = auth()->user()->id;
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['confirm_password'] = Hash::make($validatedData['confirm_password']);

        users::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\external_users  $external_users
     * @return \Illuminate\Http\Response
     */
    public function show(external_users $external_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\external_users  $external_users
     * @return \Illuminate\Http\Response
     */
    public function edit(external_users $external_users, $id)
    {
        $data = users::find($id);
        return view('User.user_profile', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\external_users  $external_users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, external_users $external_users, $id)
    {
        $data = users::find($id);
        $data->update($request->all());

        return redirect('/user_profile')->with('success', 'Profile has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\external_users  $external_users
     * @return \Illuminate\Http\Response
     */
    public function destroy(external_users $external_users)
    {
        //
    }

    public function login()
    {
        return view('Login.login');
    }

    public function signup()
    {
        return view('Login.signup');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/projectReq');
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
