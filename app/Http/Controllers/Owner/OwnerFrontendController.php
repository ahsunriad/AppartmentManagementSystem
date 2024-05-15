<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\House;

class OwnerFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('owner.dashboard');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     // Retrieve the user by username
    //     $user = User::where('id', $id)->first();
    //     dd($user);

    //     // Check if user exists
    //     if (!$user) {
    //         abort(404); // Or handle the case when user doesn't exist
    //         // dd('shit'); // Or handle the case when user doesn't exist
    //     }

    //     // Pass the user data to the view
    //     return view('owner.profile', compact('user'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profileView($username)
    {
        // Retrieve the user by username
        $userData = User::where('username', $username)->first();
        //$houseInfo = House::where('username', $username)->first();

        // Check if user exists
        if (!$userData) {
            abort(404); // Or handle the case when user doesn't exist
            // dd('shit'); // Or handle the case when user doesn't exist
        }

        // Pass the user data to the view
        return view('owner.profile', compact('userData'));
    }
}
