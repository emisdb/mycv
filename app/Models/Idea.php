<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
    public function text()
    {
        return $this->hasOne(Txt::class, 'idea_id','id');
    }
    public function ideas()
    {
        return $this->belongsToMany(Idea::class, 'idea_to_idea', 'pidea_id','cidea_id');
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_to_ideas', 'idea_id','project_id');
    }

}
