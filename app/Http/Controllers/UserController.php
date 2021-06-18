<?php

namespace App\Http\Controllers;

use App\Mail\VerifyUserSender;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Job;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Role;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $jobs = Job::all();
        $users = User::all();
        $roles = Role::all();
        return view('backend.user.index', compact('video','discover','title','contact','map','logo','footer','jobs','users','roles'));
    }

    public function edit(User $user){
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $jobs = Job::all();
        return view('backend.user.edit', compact('user','video','discover','title','contact','map','logo','footer','jobs'));
    }

    public function update(Request $request, User $user){
        request()->validate([
            "firstname"=>['required','string','max:30'],
            "name"=>['required','string','max:30'],
            "email"=>['required','string','max:30'],
            "age"=>['required','integer'],
            "img"=>['required','max:30'],
            // "role"=>['required','string','max:30'],
            "job"=>['required','string','max:30'],
            // "testimonial"=>['string','max:255'],
        ]);


        $request->file('img')->storePublicly('img/avatar/','public');
        $user->img = $request->file('img')->hashName();
        $user->firstname = $request->firstname;
        $user->description = $request->description;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->role->role = $request->role;
        $user->job->job = $request->job;
        $user->save();
        return redirect()->route('dashboard')->with('success','Your changes have been saved.');
    }

    public function verifyUser(User $user){
        $user->validate = 1;
        $user->save();
        
        Mail::to($user->email)->send(new VerifyUserSender($user));

        return redirect()->back()->with('success', 'Member validated.');
    }

    public function changeRole(Request $request, User $user){
        $user->role_id = $request->role;
        $user->job_id = $request->job;
        $user->save();
        return redirect()->route('user.index')->with('success','Your changes have been saved.');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->back();
    }
}
