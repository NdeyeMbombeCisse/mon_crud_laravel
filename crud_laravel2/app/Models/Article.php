<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nom',
        'description',
        'date',
        'etat',
        
        
    ];

    protected $table = 'articles';
    protected $keyType = 'integer';

    
}
