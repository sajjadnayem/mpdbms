<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.admin_login');
    }
    public function dologin(Request $request)
    {
        $userInfo=$request->except('_token');
        if(Auth::attempt($userInfo)){
            return redirect()->route('admin.dashboard')->with(Toastr::success('Login Sueessful-Welcome to admin panel)','Success'));
            ;
            // ('message', 'Login successful');
        }
        return redirect()->back()->with('error', 'Invalid user credentials');
    }
    public function logout()
    {
        session()->forget('cart');
        Auth::logout();
        return redirect()->route('admin.login')->with('message', 'Logging out');
    }
    public function user()
    {
        return view('admin.pages.user.user');
    }
    public function createUser()
    {
        return view('admin.pages.user.create_user');
    }
    public function storeUser(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('userImage')) {
            $file = $request->file('userImage');
            $filename = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/user',$filename);
        }
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'phone'=>'required'
        // ]);
     $password=rand();
        User::create([
                'name'=>$request->username,
                'email'=>$request->email, 
                'address'=>$request->address,
                'phone_number'=>$request->phone_number,
                'email_verified_at'=>Carbon::now(),
                'password'=>bcrypt($password),
                'image'=>$filename
        ]);
        $details = [
            'title' => 'Mail from MPDBMS admin',
            'body' => 'This is for testing mail using gmail',
            'credntials'=>'Email:'.$request->email.' and Password:'.$password
        ];
        Mail::to($request->email)->send(new TestMail($details));
        Toastr::success('User Created successfully:)','Success');
        return redirect()->route('user');
    }
}
