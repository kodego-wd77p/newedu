<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmittedActivity extends Model
{
    use HasFactory;

    protected $table = 'submittedactivities';

    public $timestamps = false;

    protected $fillable = [
        'subjects',
        'title',
        'students_name',
        'activity_text'
    ];

}
