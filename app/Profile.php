<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagepath = ($this->image) ? $this->image : 'profile/78zMikoxtpXZZ1RjdYCfheLq5ECkJf8JBvGciXEW.jpeg';
        return '/storage/' . $imagepath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
