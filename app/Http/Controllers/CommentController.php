<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Group;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    // Something
    public function sidat(){

    }
    /**
     * Display all comments by group.
     */
    public function index(Group $group): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        // Show all comments by group
        return Comment::where('group_id', $group->id)->join('users', 'users.id', '=', 'comments.user_id')->select('comments.*', 'users.name')->get();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Create a new comment
        $comment = new Comment();
        // Validate the request
        $request->validate([
            'body' => 'required',
            'group_id' => 'required',
        ]);
        // Set the comment body
        $comment->body = $request->body;
        // Set the comment group id
        $comment->group_id = $request->group_id;
        // Set the comment user id
        $comment->user_id = auth()->user()->id;
        // Save the comment
        $comment->save();
        // Redirect back to the group
        return redirect()->back()->with('success', 'Comment created successfully');
    }

}
