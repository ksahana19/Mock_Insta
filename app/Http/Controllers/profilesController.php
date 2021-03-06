<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class profilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index',compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profiles.edit',compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
        if(request('image'))
        {
            $imagepath = (request('image')->store('profile','public'));
            
            $image = Image::make(public_path("storage/{$imagepath}"))->fit(1000);
            $image->save();
            $imgarray = ['image' => $imagepath];
        }
        
        auth()->user()->profile->update(array_merge(
            $data,
            $imgarray ?? []
        ));
        return redirect("/profile/{$user->id}");
            
    }


}
