<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'http://127.0.0.1:8000/storage/profile/V8J70ywLpWaeAXfMIcynLWp2G9t5ouq4hrnZrEL2.webp';
        return $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
