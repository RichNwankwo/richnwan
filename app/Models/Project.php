<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Model for Projects table

    protected $table = 'projects';
    protected $fillable = ['title', 'description','link', 'github_link'];
}
