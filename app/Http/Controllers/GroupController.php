<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\group_users;
use App\Models\groupUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        // Show all groups
        $groups = Group::all();
        return view('groups.index', [
            'groups' => $groups->except(auth()->user()->groups->pluck('id')->toArray()),
            'joinedGroups' => auth()->user()->groups,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        // Show create group form
        return view('groups.create');
    }

    /**
     * Join a group
     */
    public function join(Group $group): RedirectResponse
    {
        $userId = auth()->user()->id;
        $groupUser = GroupUser::where('user_id', $userId)->where('group_id', $group->id)->exists();

        if ($groupUser) {
            return redirect()->back()->withInput()->with('error', 'You are already a member of this group');
        }

        GroupUser::firstOrCreate(['user_id' => $userId, 'group_id' => $group->id]);

        return redirect()->back()->with('success', 'You have joined the group');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => '',
        ]);
        // Create a new group
        $group = new Group();
        $group->name = $request->name;
        $group->description = $request->description;
        $group->image = $request->image;
        $group->owner = auth()->user()->id;

        if ($request->hasFile('image')){
            $request->file('image')->store('images', 'public');
        }

        $group->save();
        return redirect('/groups')->with('success', 'Group created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        // Show group
        return view('groups.show', [
            'group' => $group,
            'members' => $group->users,
            'comments' => $group->comments,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group): RedirectResponse
    {
        // Delete group
        $group->delete();
        return redirect()->back()->with('success', 'Group deleted');
    }
}
