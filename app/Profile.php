<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function profileImage(){
    	$imagePath = ($this->image) ? $this->image : '/profile/5lhHPauNiu4KbH5vXUkwbDLCwh0cDpd9MTWFpk89.png';
    	return '/storage/' . $imagePath;
    }
}
