<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Hide created_at and updated_at globally
    protected $hidden = ['created_at', 'updated_at'];
    //   protected $fillable = ['description','name'];

    public function topics()
    {
        return $this->hasMany(Topic::class, 'topic_id','id');
    }
    public function descendants()
    {
        return $this->topics()->with('descendants');
    }
    public function descend_counts()
    {
        return $this->topics()->with('descend_counts')->withCount('ideas');
    }
    public function ideas()
    {
        return $this->hasMany(Idea::class, 'topic_id','id');
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

}
