<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;

class BinController extends Controller
{
    public function index(){
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $posts = Post::where('bin', 1)->get();
        return view('backend.bin.index', compact('video','discover','title','contact','map','logo','footer','posts'));
    }

    public function softRestore(Post $id){
        $post = $id;
        $post->bin = 0;
        $post->save();
        return redirect()->back();
    }
}
