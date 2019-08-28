<?php

namespace App\Http\Controllers;

use App\Models\ForumThread;
use Illuminate\Http\Request;
use App\Models\ThreadCategory;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['newTopic']);
    }
    public function index()
    {
        $threadCategories = ThreadCategory::all();
        $threads = ForumThread::latest()->get();

        return view('site.forum', compact('threadCategories', 'threads'));
    }

    public function newTopic()
    {
        $threadCategories = ThreadCategory::all();

        return view('site.forum_new_topic', compact('threadCategories'));
    }

    public function storeTopic(Request $request)
    {
        $thread = new ForumThread;

        $thread->title = $request->title;
        $thread->slug = str_slug($request->title);
        $thread->user_id = auth()->user()->id;
        $thread->thread_category_id = $request->category;
        $thread->description = $request->description;

        //save the thread
        $thread->save();

        session()->flash('success', 'Your post was successful');

        //now redirect the user to the thread
        return redirect()->route('forum');
    }

    public function viewThread($slug)
    {
        $thread = ForumThread::where('slug', $slug)->first();

        $thread->addView();

        return view('site.forum_thread', compact('thread'));
    }
}
