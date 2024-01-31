<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Les propriétés fillable indiquent quelles colonnes peuvent être mass-assignées
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'image',
        'author_id',
    ];
}
