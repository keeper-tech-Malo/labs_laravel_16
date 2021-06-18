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

class MapController extends Controller
{
    public function edit(Map $map){
        $discover = Discover::find(1);
        $title = Title::find(1);
        $video = Video::find(1);
        $contact = Contact::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        return view('backend.map.index', compact('map','title','discover','video','contact','logo','footer'));
    }
    public function update(Request $request, Map $map){
        $map->link = $request->link;
        $map->save();
        return redirect('/admin/map/'.$map->id.'/edit')->with('success', 'Your changes have been saved.');
    }
}
