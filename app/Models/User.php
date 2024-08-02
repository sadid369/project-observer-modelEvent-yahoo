<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $guarded = [];

    public function post() {
        return $this->hasMany(Post::class);
    }


    // protected static function booted() : void {
    //     static::deleted(function ($user) {
    //         $user->post()->delete();
    //     });
    //     static::created(function ($user) {
    //       //if new user created this function will run
    //     });
    //     static::updated(function ($user) {
            
    //         //if new user updated this function will run
    //     });
    // }
}
