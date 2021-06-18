<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        Mail::to('keeper@tech.com')->send(new ContactSender($request));
        return redirect()->back();
    }
    
    public function edit(Contact $contact){
        $discover = Discover::find(1);
        $title = Title::find(1);
        $video = Video::find(1);
        $map = Map::find(1);
        $contact = Contact::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        return view('backend.contact.index', compact('contact','discover','title','video','map','logo','footer'));
    }

    public function update(Request $request, Contact $contact, Map $map){
        request()->validate([
            "description"=>["required", "max:300"],
            "building"=>["required", "max:50"],
            "street"=>["required", "max:100"],
            "postcode"=>["required", "max:50"],
            "city"=>["required", "max:50"],
            "number"=>["required", "max:50"],
            "email"=>["required", "max:50"],
        ]);

        $contact->description = $request->description;
        $contact->building = $request->building;
        $contact->street = $request->street;
        $contact->postcode = $request->postcode;
        $contact->city = $request->city;
        $contact->number = $request->number;
        $contact->email = $request->email;
        $contact->save();
        
        return redirect('/admin/contact/'.$contact->id.'/edit')->with('success', 'Your changes have been saved.');
    }
}
