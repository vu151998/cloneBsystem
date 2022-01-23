<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function getFormLogin()
    {
        return view('layouts.admin.Login');
    }
    public function submitLogin(Request $request){
        $username =  $request->input('username');
        $password =  $request->input('password');
        if (Auth::attempt([
            'username' => $username,
            'password' => $password,
        ])) {
            $user = User::where('username', $username)->first();
            Auth::login($user);
            if($user->role == 1){
                return redirect()->route('overview.index');
            }elseif ($user->role == 2){
                
            }elseif ($user->role == 3){
                return redirect('admin/listBillStaff');
            }elseif ($user->role == 4){

            }elseif ($user->role == 5){
                return redirect('admin/billTeleSale');
            }else{
               return redirect()->route('saleMan.TaskIndex');
            }
        }
    }
    public function index(){
       $users = User::all();
       //dd($users);
        return view('layouts.admin.adminSum')->with(compact('users'));
    }
}
