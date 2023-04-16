<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function idea()
    {
        return $this->hasMany(ProjectToIdea::class, 'project_id', 'id');
    }
    public function ideas()
    {
        return $this->belongsToMany(Idea::class, 'project_to_ideas', 'project_id','idea_id');
    }


}
