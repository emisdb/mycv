<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdeaToIdea extends Model
{
    use HasFactory;
    public function children()
    {
        return $this->hasMany(Idea::class, 'pidea_id');
    }
    public function descendants()
    {
        return $this->children()->with('descendants');
    }

}
