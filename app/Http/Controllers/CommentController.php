<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\Comment;


class CommentController extends Controller
{
    public function comment(Request $request, $id){
        $validator = validator::make($request->all(), [
            'comment' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $formFields = [
            'comment' => $request->comment,
            'user_id' => auth()->id(),
            'post_id' => $id,
        ];

        $comment = Comment::create($formFields);

        if(!$comment){
            return redirect()->back()->with('error', 'Something went wrong');
        }
        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
