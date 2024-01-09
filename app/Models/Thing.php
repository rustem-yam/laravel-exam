<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Thing extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'description', 'wrnt', 'master',
    ];

    protected $dates = [
        'wrnt',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'master');
    }
}
