<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  $user =new user();
       $user->name= $request->input('user_name');
       $user->email= $request->input('email');
       $user->password= Hash::make($request->input('password'));
    //    $user->password= $request->input('password');
       $user->save();
       return redirect()->route('llogin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login(Request $request){
        $request->validate([
            'user_name'=>'required|string|exists:users,name',
            'password'=>'required|min:8',
        ]);
        $user=User::where('name',$request->user_name)->first();
        if(Hash::check($request->password, $user->password)){
        Auth::login($user);
        $user->createToken($user->name)->plainTextToken;
        return redirect()->route('home');
    }  return back()->withErrors([
        'user_name' => 'The provided credentials do not match our records.',
    ]);
}
    public function logout(){
        $user=Auth::user();
        $user->tokens()->delete();
        return redirect()->route('login');
    }
}

