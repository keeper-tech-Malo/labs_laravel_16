<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Icon;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Service;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::all();
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        return view('backend.service.index', compact('services','title','discover','video','contact','map','logo','footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $icons = Icon::all();
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        return view('backend.service.create', compact('title','video','discover','icons','map','contact','logo','footer'));
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
            "title"=> ["required","max:20"],
            "description"=> ["required","max:300"],
            "icon"=> ["required"],
        ]);
        $service = new Service;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon_id = $request->icon;
        $service->save();
        return redirect('/admin/service/')->with('success', 'Your service has been added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $icons = Icon::all();
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        return view('backend.service.edit',compact('service','title','discover','video','icons','contact','map','footer','logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        request()->validate([
            "title"=>["required", "max:30"],
            "description"=>["required", "max:300"],
            "icon"=>["required"],
        ]);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon_id = $request->icon;
        $service->save();
        return redirect('/admin/service/')->with('success', 'Your changes have been saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}
