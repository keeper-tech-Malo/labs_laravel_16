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

class DiscoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function show(Discover $discover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function edit(Discover $discover)
    {
        $video = Video::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $footer = Footer::find(1);
        $logo = Logo::find(1);
        return view('backend.discover.index', compact('discover','title','video','contact','map','logo','footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discover $discover)
    {
        request()->validate([
            "para1"=>["required", "max:400"],
            "para2"=>["required", "max:400"],
        ]);
        $discover->para1 = $request->para1;
        $discover->para2 = $request->para2;
        $discover->save();
        return redirect('/admin/discover/'.$discover->id.'/edit')->with('success', 'Your changes have been saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discover $discover)
    {
        //
    }
}
