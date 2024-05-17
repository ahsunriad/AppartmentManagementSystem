<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Credential;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.registration'); // view Registration page
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
//        dd($request->input());
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'nid' => 'required',
            'phone' => 'required',
            'permanent_address' => 'required',
            'email'=> 'required',
            'password'=>'required',
            'confirm_password' => 'required'

        ]);
        $user = new User();

//        $user->username = Str::lower(str_replace(' ', '',$request->input('fname').$request->input('lname')));     //Username from Name
        $user->username = strstr($request->input('email'), '@', true);  //Username extract from Email
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->dob = $request->input('dob');
        $user->nid = $request->input('nid');
        $user->phone = $request->input('phone');
        $user->gender = $request->input('gender');
        $user->permanent_address = $request->input('permanent_address');

        $userCredential = new Credential();
        $userCredential->username = $user->username;
        $userCredential->email = $request->input('email');
        $userCredential->password = Hash::make($request->input('password'));
        if ($request->has('image')){
            $file = $request->image;
            //dd($file);
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $user->username.'.'.$fileExtension;
            $file->move('assets/uploads/users/',$fileName);
            $user->image=$fileName;
        }

        $name = $user->fname ." ". $user->lname;
        session()->flash('success', $data = $name);

        $user->save();
        $userCredential->save();

        return view('auth.login');
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
}
