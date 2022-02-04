<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'teams_id'];

    public function teams()
    {
        return $this->hasMany(Team::class, 'id', 'teams_id'); //foreign: teams.id
                                                                // local: teams_id
    }
}
