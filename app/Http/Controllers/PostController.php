<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Tag;
use App\Models\TagPost;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
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
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $posts = Post::where('bin', 0)->where('validate', 1)->get();
        return view('backend.blog.index', compact('video','discover','title','contact','map','logo','footer','posts'));
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
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.blog.create',compact('video','discover','title','contact','map','logo','footer','categories','tags'));
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
            "text"=> ["required","max:500"],
            "title"=> ["required","max:50"],
            "img"=> ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);

        $post = new Post();
        $request->file('img')->storePublicly('img/blog/','public');
        $post->text = $request->text;
        $post->title = $request->title;
        $post->img = $request->file('img')->hashName();
        $post->dateDay = date('d');
        $post->dateMonth = date('M');
        $post->dateYear = date('Y');
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;
        $post->validate = 0;
        $post->bin = 0;
        $post->save();

        foreach($request->input('tagList') as $value){
            $tag = new TagPost();
            $tag->post_id = $post->id;
            $tag->tag_id = $value;
            $tag->save();
        }

        return redirect()->route('post.index')->with('success','Your post has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $article = $post;
        // $logo = Logo::find(1);
        // $categories = Category::all();
        // $tags = Tag::all();
        // $categories = Category::all();
        // $footer = Footer::find(1);
        // return view('front.blogpost', compact('article', 'categories', 'tags', 'footer', 'logo', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('editUser', $post);
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $categories = Category::all();
        $tags = Tag::all();
        $tagposts = TagPost::all()->where('post_id', $post->id);
        return view('backend.blog.edit', compact('video','discover','title','contact','map','logo','footer','categories','post', 'tags','tagposts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate([
            "text"=> ["required","max:500"],
            "title"=> ["required","max:50"],
            "img"=> ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);

        $request->file('img')->storePublicly('img/blog/','public');
        $post->text = $request->text;
        $post->title = $request->title;
        $post->img = $request->file('img')->hashName();
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;
        $post->validate = 0;
        $post->save();
        
        DB::table('tagposts')->where('post_id', $post->id)->delete();

        foreach ($request->input('tagList') as $value){
            $tag = new TagPost();
            $tag->post_id = $post->id;
            $tag->tag_id = $value;
            $tag->save();
        }

        return redirect()->route('post.index')->with('success','Your post has been modified.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $tagposts = TagPost::where('post_id', $post->id)->get();
        foreach ($tagposts as $tagpost){
            $tagpost->delete();
        }

        $comments = Comment::where('post_id', $post->id)->get();
        foreach ($comments as $comment){
            $comment->delete();
        }

        Storage::disk('public')->delete('img/blog'.$post->img);
        $post->delete();
        return redirect()->back();
    }

    public function softDelete(Post $id){
        $post = $id;
        $post->bin = 1;
        $post->save();
        return redirect()->back();
    }
}
