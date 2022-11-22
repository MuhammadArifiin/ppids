<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Publications extends Model
{

    use HasFactory, Searchable;
    protected $table = "publications";
    protected $fillable = [
        'date',
        'author',
        'title',
        'tab_content',
        'content'
    ];

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }
}
