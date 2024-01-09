<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thing;
use App\Models\Place;
use App\Models\User;

class Own extends Model
{
    use HasFactory;

    protected $fillable = [
        'thing_id', 'place_id', 'user_id', 'amount',
    ];

    public function thing()
    {
        return $this->belongsTo(Thing::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
