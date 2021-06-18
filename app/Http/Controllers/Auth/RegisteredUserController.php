<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\NewAccSender;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=> 'required|string|max:255',
            'name' => 'required|string|max:255',
            // 'description'=> 'required|string|max:255',
            'age'=> 'required|integer',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User();

        $user->img = "anonymous.png";
        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 4;
        $user->job_id = 2;
        $user->validate = 0;
        $user->save();

        event(new Registered($user));

        Mail::to($request->email)->send(new NewAccSender($request));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
