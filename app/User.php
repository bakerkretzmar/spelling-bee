<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    protected $hidden = ['password', 'remember_token'];

    protected $dates = ['email_verified_at'];

    public function puzzles()
    {
        return $this->belongsToMany(Puzzle::class)
                    ->using(Game::class)
                    ->withPivot([
                        'found_word_ids',
                    ])
                    ->withTimestamps();
    }
}
