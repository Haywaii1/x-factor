<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function homepage()
    {
        // $posts = post::all(); this is to get all post
        // $posts = post::orderBy('created_at', 'desc')->limit(2)->get(); this limits it to two post per page
        // $posts = Post::inRandomOrder()->get(); this shows the post randomly
        $posts = post::with('user' )->orderBy('created_at', 'asc')->paginate(2);
        return view('home',
        ['posts' => $posts]
    );
    }
    public function createPost()
    {
        return view('posts.create-post');
    }

     public function sendPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required|min:5',
            'author' => 'required',
            'category' => 'required',
        ]);
        // dd($request->all(), auth()->id());

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $formFields = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author' => $request->input('author'),
            'category' => $request->input('category'),
            'user_id' => auth()->id(),

        ];
// if there's an image sent by the user, it will run this code, as image by user is not compulsory.
        if($request->image){
            $image = uniqid() . '-' . 'post-image' . '.' . $request->image->extension();
            $request->image->move(public_path('posts'), $image);

            $formFields['image'] = $image;
        }

        $posts = Post::create($formFields);

        if ($posts) {
            return redirect('/home')->with('success', "Post was created");
        } else {
            return redirect('/home')->with('error', "There was an error creating the post");
        };
    }
    public function editPost($id)
    {
        $post = post::find($id);
        return view('posts.edit-post',
            ['post'=> $post]
    );
    }

    public function deletePost($id){
        $delete = post::find( $id )->delete();
        if($delete){
            return redirect('/home')->with( 'success','Post deleted');
        }else{
            return redirect("/home")->with('error','Error deleting the post!');
        }

    }

    public function updatepost(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required|min:5',
            'author' => 'required',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $formFields = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author' => $request->input('author'),
            'category' => $request->input('category'),
        ];
// if there's an image sent by the user, it will run this code, as image by user is not compulsory.
        if($request->image){
            $image = uniqid() . '-' . 'post-image' . '.' . $request->image->extension();
            $request->image->move(public_path('posts'), $image);

            $formFields['image'] = $image;
        }

        $posts = Post::where('id', $id)->update($formFields);

        if ($posts) {
            return redirect('/')->with('success', "Post updated succesfully");
        } else {
            return redirect('/')->with('error', "There was an error creating the post");
        };
    }

    public function singlePost($id){
        // $post = post::where('id', $id)->first();
        $post = post::with('user', 'comments')->where('id', $id)->orderBy('created_at', 'desc')->first();
        // $comments = comment::all();
        return view('posts.single-post',[
            'post'=> $post,
            // 'comments' => $comments
        ]);
    }
}
