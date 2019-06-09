<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/8f2DQSGx1G4dCKdQDkpz55TcVmtKvaL597Tpw4pb.jpeg';
        return '/storage/' . $imagePath;
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
