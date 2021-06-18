<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function edit(Title $title){
        $video = Video::find(1);
        $discover = Discover::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        return view('backend.titles.index', compact('title','video','discover','contact','map','logo','footer'));
    }

    public function update(Request $request, Title $title)
    {
        request()->validate([
            "titleHome1"=>["required", "max:50"],
            "titleHome2"=>["required", "max:50"],
            "titleHome3"=>["required", "max:50"],
            "titleHome4"=>["required", "max:50"],
            "titleService1"=>["required", "max:50"],
            "titleService2"=>["required", "max:50"],
        ]);
        $title->titleHome1 = $request->titleHome1;
        $title->titleHome2 = $request->titleHome2;
        $title->titleHome3 = $request->titleHome3;
        $title->titleHome4 = $request->titleHome4;
        $title->titleService1 = $request->titleService1;
        $title->titleService2 = $request->titleService2;
        $title->save();
        return redirect('/admin/title/'.$title->id.'/edit')->with('success', 'Your changes have been saved.');
    }
}
