<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    public $timestamps = false;

    // ALL THAT YOU ONLY WANT TO SAVE IN THE DATA BASE
    protected $fillable = [
        'title',
        'descriptions',
        'score'
    ];
    
    
    
}