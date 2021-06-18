<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $images = Image::all();
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        return view('backend.image.index', compact('images','discover','title','video','contact','map','logo','footer'));
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
        request()->validate([
            "link"=>['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);
        $request->file('link')->storePublicly('img/','public');
        $image = new Image();
        $image->link = $request->file('link')->hashName();
        $image->first = 0;
        $image->save();
        return redirect()->route('image.index')->with('success','Your changes have been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        // request()->validate([
        //     "link"=>['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        // ]);

        // if ($request->file('link') != null) {
        //     Storage::disk('public')->delete('img/'.$image->src);
        //     $request->file('link')->storePublicly('img/','public');
        //     $image->src = $request->file('link')->hashName();
        //     $image->save();
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        Storage::disk('public')->delete('img/'.$image->link);
        $image->delete();
        return redirect()->back();
    }

    public function firstImage(Image $image) {

        $imagez = Image::all();

        foreach ($imagez as $imaj) {
            $imaj->first = 0;
            $imaj->save();
        }

        $image->first = 1;
        $image->save();

        return redirect()->route('image.index')->with('success', "Nouvelle première image définie");
    }
}
