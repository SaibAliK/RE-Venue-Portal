<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Mail\PostMail;
use Illuminate\Http\Request;
use App\Jobs\NewPostJob;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Video;
use Illuminate\Support\Facades\Mail;

class PolymorphicController extends Controller
{
    public function index()
    {
        $post = Post::all();
        $vidoes = Video::all();
        $comment = Comment::all();
        return view('admin.poly.index', get_defined_vars());
    }

    public function postAdd()
    {
        return view('admin.poly.postAdd');
    }

    public function postStore(Request $request)
    {
        $post = Post::create($request->all());

        //queue job is not wait and work in background
        dispatch(new NewPostJob())->delay(now()->addSecond(5));
        //Mail::to('saibali@gmail.com')->send(new PostMail());

        return redirect()->route('admin.poly.index');
    }

    public function postCommentStore(Request $request, $id)
    {
        //dd($request->all());
        if ($request->type == "post") {
            $post = Post::find($id);
            $post->comments()->create([
                'body' => $request->body,
            ]);
        } else {
            $video = Video::find($id);
            $video->comments()->create([
                'body' => $request->body,
            ]);
        }
        return redirect()->route('admin.poly.index');
    }

    public function videoAdd()
    {
        return view('admin.poly.videoAdd');
    }

    public function videoStore(Request $request)
    {
        Video::create($request->all());
        return redirect()->route('admin.poly.index');
    }

    public function TestApi($id)
    {
        $post = Post::with('comments')->find($id);
        return new PostResource($post);
        //return response()->json($post);
    }
}
