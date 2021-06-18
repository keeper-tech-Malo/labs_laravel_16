<?php

namespace App\Http\Controllers;

use App\Mail\NewPostSender;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Job;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\Role;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerifyController extends Controller
{
    public function index(){
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $posts = Post::where('validate', 0)->where('bin', 0)->get();
        $users = User::where('validate', 0)->get();
        $jobs = Job::all();
        $roles = Role::all();
        return view('backend.check.index', compact('video','discover','title','contact','map','logo','footer','posts','users','jobs','roles'));
    }

    public function valid(Post $id){
        $post = $id;
        $post->validate = 1;
        $post->save();

        $news = Newsletter::all();

        foreach($news as $new) {
            Mail::to($new->email)->send(new NewPostSender($new));
        }
        

        return redirect()->back()->with('success','Post validé');
    }
}
