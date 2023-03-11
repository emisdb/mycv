<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;

    public function labels()
    {
        return [
            'name' => 'Language',
            'locale' => 'Locale'
        ];
    }

    public function fields()
    {
        return [
            'name',
            'locale'
        ];
    }

    public function params()
    {
        return [
            'fields' => $this->fields(),
            'labels' => $this->labels(),
        ];
    }


}
