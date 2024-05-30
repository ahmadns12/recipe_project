<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RecipeController extends Controller
{
    //LOGIN FUNCTION
    function login_page(){
        return view('page.landing_page.login');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->intended('/login');
    }

    function login(Request $request){
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/login');
        }else{
            return redirect('/login')->withErrors("Wrong Password!")->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/home');
    }

    //HOME AND NUTRITION ONLY PAGE
    function home_page(){
        return view('page.landing_page.home');
    }

    function nutrition_page(){
        return view('page.landing_page.nutrition');
    }

    //RECIPE
    function recipe_page(){
        $recipes = Recipe::all();

        return view('page.recipe_page.recipe')->with('recipes', $recipes);
    }

    //UPLOAD RECIPE
    function upload_page(){
        return view('page.landing_page.unggah_resep');
    }

}
