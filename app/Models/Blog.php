<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=['hint1','hint2','desc1','desc2','desc3','desc4','authorname','blogimg','postimg'];
}
