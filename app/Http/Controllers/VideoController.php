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

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        return view('backend.video.index', compact('video','title','discover','contact','map','logo','footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        request()->validate([
            "link"=>["required", "max:100"],
        ]);
        $video->link = $request->link;
        $video->save();
        return redirect('/admin/video/'. $video->id. '/edit')->with('success', 'Your changes have been saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
