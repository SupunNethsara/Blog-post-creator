<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class post_controller extends Controller
{

    public function showhomepage()
    {
        $alreadyposts = post::all();
        return view('post.Home' , compact('alreadyposts'));
    }

    public  function showcreatepost()
    {
        return view('post.postForm');
    }
    public function createpost(Request $request)
    {

        // 1 option
        //    $post = new post();
        //    $post->post_title = $request->post_title;
        //    $post->post_content = $request->post_content;
        //    $post->save();

        //second option
        post::create(
            [
                'post_title' => $request->post_title,
                'post_content' => $request->post_content
            ]
        );
        return redirect('/')->with('message', 'post sending sucessfully');
    }
}
