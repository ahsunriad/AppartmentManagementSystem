<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Credential;
use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login'); // view login page
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
    public function authenticate(Request $request)
    {
        $request->validate([
        'email'=> 'required',
        'password'=>'required'
        ]);

        $userCredential = Credential::where(['email'=>$request->email])->first();
    //    dd($userCredential);

        if ($userCredential && Hash::check($request->password,$userCredential->password)){
            $userInfo = User::where(['username'=>$userCredential->username])->first();
            $houseInfo = House::where(['username'=>$userCredential->username])->first();
            // dd($houseInfo);
            // dd($userInfo);
            $name = $userInfo->fname.' '.$userInfo->lname;
            $request->session()->put('LoggedUser', ['id' => $userInfo->id, 'name' =>$name, 'username'=>$userInfo->username, 'housename'=>$houseInfo->name]);
            if($userInfo->status == 0){             //User is a tenent
                return redirect ('dashboard_tenet');
            }
            elseif($userInfo->status == 1){         //User is an owner
                return redirect ('dashboard_owner');
            }
        }
        else{
            dd('fuck');
            redirect('register')->with('failed','Login in failed!');
        }
    }
}
